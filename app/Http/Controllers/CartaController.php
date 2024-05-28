<?php

namespace App\Http\Controllers;

use App\Http\Requests\CartaRequest;
use App\Models\Carta;
use Illuminate\Http\Request;

class CartaController extends Controller
{
    
    public function index(Request $request)
    {
        $cartas = Carta::when ($request->has('nome'), function($whenQuery) use ($request){
            $whenQuery->where('nome', 'like','%' . $request->nome . '%');
        })
        ->when($request->filled('prateleira'), function($whenQuery) use ($request){
            $whenQuery->where('prateleira', '=', $request->estante);
        })
        ->orderByDesc('nome')->paginate(20)->withQueryString();
       
        return view('index', [
            'cartas'=> $cartas,
            'nome'=> $request->nome,
            'prateleira'=>$request->prateleira,
        ]);

       return view('index',['cartas'=> $cartas, 'nome'=> $request->nome]);

    }

    public function create()
    {
       return view('create');
    }

    public function store(CartaRequest $request)
    {
        $request-> validated();
        $carta = Carta::create($request->all());
        return redirect()->route('carta.create')->with('success','carta mortuária cadastrada com sucesso');
    }

    public function show(Carta $carta)
    {
        
    }

 
    public function edit(Carta $carta)
    {
       return view('edit',['carta' => $carta]);
    }

 
    public function update(CartaRequest $request, Carta $carta)
    {
        $request-> validated();
        $carta->update([
            'nome'=>$request->nome,
            'prateleira'=>$request->prateleira,
            'estante'=>$request->estante,
            'pasta'=>$request->pasta,
            'falecimento'=>$request->falecimento
        ]);
        return redirect()->route('carta.index')->with('success','Carta mortuária alterada com sucesso');
    }


    public function destroy(Carta $carta)
    {
       $carta->delete();
       return redirect()->route('carta.index')->with('success','Carta mortuária excluída com sucesso'); 
    }
}
