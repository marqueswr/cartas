@extends('layouts.master')
@section('content')
<br>

    <h3>Criar uma Carta Mortuária</h3>
    <x-alert />
{{--     @if($errors->any())
      <div class="alert alert-danger">
            @foreach ($errors-> all() as $erro)
                <p>{{ $erro }}</p>
            @endforeach
      </div>
    @endif

    <div>
      @if(session('success'))
            <script>
                  Swal.fire({
                        title: "Finalizado !",
                        text: "Os dados foram inseridos com sucesso",
                        icon: "success"
                      });
                
                </script>
      @endif
</div> --}}

  <br>
    <form method="POST" action="{{ route('carta.store') }}">
        @csrf
        <div class="row">
            <p>
            <div class="col-md-4 col-sm-12">
                <input class="form-control" name="nome" id="nome" type="text" value="{{ old('nome') }}" placeholder="nome completo" >
            </p>

          <p>
                <input class="form-control" name="prateleira" id="prateleira" type="text" value="{{ old('prateleira') }}"  placeholder="prateleira" >
          </p>

          <p>
                <input class="form-control" name="estante" id="estante" type="number" value="{{ old('estante') }}" placeholder="estante" > 
          </p>
          <p>
                <input class="form-control" name="pasta" id="pasta" type="number" value="{{ old('pasta') }}" placeholder="pasta" >
          </p>
          <p>
                <input class="form-control" name="falecimento" id="falecimento" value="{{ old('falecimento') }}" type="date" >
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