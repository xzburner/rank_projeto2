@extends('principal')

@section('conteudo-principal')

<h2>Editar Post</h2>
<hr />

<form method="post" action="{{url('/posts/editar')}}">

    @csrf

    <input type="hidden" name="id" value="{{$post->id}}">

    <div class="form-group">
        <label for="titulo">Titulo</label>
        <input id="titulo" class="form-control" name="titulo" type="text"
        value="{{$post->titulo}}">
    </div>

    <div class="form-group">
        <label for="texto">Texto</label>
        <textarea id="texto" class="form-control" rows="3"
        name="texto">{{$post->texto}}</textarea>
    </div>

    <button class="btn btn-primary" type="submit">Enviar</button>

</form>

@endsection
