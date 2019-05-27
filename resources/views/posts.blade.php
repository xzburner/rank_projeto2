
@extends('principal')

@section('conteudo-principal')
{{-- Vai pegar o conteudo que estiver dentro da
    section e jogar dentro do yield
--}}
<h2>Posts</h2>

<a href="{{url('/posts/form-adicionar')}}" class="btn btn-primary float-right mb-2">
    Adicionar</a>

<table class="table table-dark">
    <tr>
        <th>Id</th>
        <th>Título</th>
        <th>Texto</th>
        <th>Data</th>
        <th>Opções</th>
    </tr>
    @forelse ($posts as $post)
        <tr>
            <td> {{$post->id}} </td>
            <td> {{$post->titulo}} </td>
            <td> {{$post->texto}} </td>
            <td> {{$post->created_at}} </td>
            <td>
                <a class="btn btn-outline-secondary" href="{{url('/posts/editar/' . $post->id)}}">
                    Editar
                </a>
                <a class="btn btn-outline-secondary" href="{{url('/posts/excluir/' . $post->id)}}">
                    Excluir
                </a>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="5">Sem posts cadastrados.</td>
        </tr>
    @endforelse
</table>
@endsection
