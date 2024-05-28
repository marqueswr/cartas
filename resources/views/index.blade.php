@extends('layouts.master')
@section('content')
<br>

    <h5>Cartas Mortuárias</h5>
    <div class="card mt-1 mb-3 border-light shadow">
      <div class="card-header d-flex justify-content-between">
       
        <div class="card-body">
          <form action="{{ route('carta.index') }}">
            <div clas="row">

              <div class="col-md-4">
                <input type="text" name="nome" id="nome" class="form-control" value="{{ $nome }}"  placeholder="informe parte do nome"/>
              </div>

              <div class="col-md-4">
                <input type="text" name="prateleira" id="prateleira" class="form-control" value="{{ $prateleira }}"  placeholder="informe o número da estante"/>
              </div>
    
              <div class="col-md-4  mt-2 ">
                <button type="submit"  class="btn btn-primary btn-sm">PESQUISAR</button>
                <a href="{{ route('carta.index') }}" class="btn btn-success  btn-sm">LIMPAR</a>
              </div>

            </div>
          </form>
        </div>
       
      </div>
    </div>
    <x-alert />

  <br>
  <div style="float-right">
    <a class="btn btn-primary float-end" href="{{ route('carta.create') }}">NOVA CARTA</a>
    </div>
  <table class="table  table-hover">
    <thead>
      <tr>
      
        <th scope="col" >Nome</th>
        <th scope="col" >Prateleira</th>
        <th scope="col" >Estante</th>
        <th scope="col" >Pasta</th>
        <th scope="col" >Falecimento</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
        @forelse ($cartas as $carta )
        <tr>
          
            <td>{{ $carta->id }} - {{ $carta-> nome }}</td>
            <td>{{ $carta-> prateleira }}</td>
            <td>{{ $carta-> estante }}</td>
            <td>{{ $carta-> pasta }}</td>
            <td>{{ \Carbon\Carbon::parse($carta->falecimento)->format('d/m/Y') }}</td>
            <td>
              <a  class="btn btn-outline-secondary float-end ms-2 px-3" href="{{ route('carta.edit',['carta'=> $carta]) }}">Alterar</a>
            <form id="formExcluir{{ $carta->id }}" action="{{ route('carta.destroy',['carta'=> $carta->id]) }}" method="POST">
              @csrf
              @method('delete')
              <button class="btn btn-outline-danger" type="submit" onclick="confirmaExclusao(event,{{$carta->id}})">Apagar</button>
            </form>
            </td>
          </tr>
          @empty
          <tr>Não há dados </tr>
        @endforelse
    </tbody>
  </table>
{{ $cartas-> onEachSide(5)->links() }}

 @endsection