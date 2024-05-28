@extends('layouts.master')
@section('content')
<br>

    <h3>Aterar uma Carta Mortuária</h3>
    <x-alert />
  <br>
    <form  action="{{ route('carta.update',['carta'=> $carta -> id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <p>
            <div class="col-md-4 col-sm-12">
                <input class="form-control" name="nome" id="nome" type="text" value="{{ old('nome', $carta-> nome) }}" placeholder="nome completo" >
            </p>

          <p>
                <input class="form-control" name="prateleira" id="prateleira" type="text" value="{{ old('prateleira', $carta-> prateleira)  }}"  placeholder="prateleira" >
          </p>

          <p>
                <input class="form-control" name="estante" id="estante" type="number" value="{{ old('estante', $carta-> estante)  }}" placeholder="estante" > 
          </p>
          <p>
                <input class="form-control" name="pasta" id="pasta" type="number" value="{{ old('pasta', $carta-> pasta ) }}" placeholder="pasta" >
          </p>
          <p>
                <input class="form-control" name="falecimento" id="falecimento" value="{{ old('falecimento', $carta-> falecimento)  }}" type="date" >
            </p>
            </div>
<br><br>
            <div class="row">
            <div class="col-md-6">
            <button class="btn btn-primary" type="submit">Gravar</button> <a href="{{ route('carta.index') }}" class="btn btn-success  btn-sm">CANCELAR</a>
            </div>
            </div>
    </form>
 @endsection