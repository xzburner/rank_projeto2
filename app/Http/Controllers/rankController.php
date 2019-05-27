<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//importar a classe simples de acesso ao BD
use Illuminate\Support\Facades\DB;

//importar o modelo post
use App\Post;

class PostController extends Controller
{
    //

    /**
     * Retorna todos os posts cadastrados
     */
    public function posts()
    {

        $dados = Post::all();

        return view('posts')->with('posts', $dados);
    }

    /**
     * Chama a view com o formulario de adicionar
     *
     */
    public function formAdicionar()
    {
        return view('form-adicionar');
    }

    /**
     * Método que vai adicionar um post no BD
     */
    public function adicionar(Request $request)
    {

        //$post = new Post();
        //$post->titulo = $request->titulo;
        //$post->texto = $request->texto;
        //$post->save();

        //Atribuição em massa
        Post::create($request->input());

        return redirect()->action('PostController@posts');

    }

    public function excluir($id)
    {
        //Excluir via eloquent quando tem o id
        Post::destroy($id);

        return redirect()->action('PostController@posts');
    }

    public function form_editar($id)
    {
        //$post = Post::where('id', $id)->get();

        //Buscar o post no BD pelo id
        $post = Post::find($id);

        //chamando a view e passando o dado do post
        return view('form-editar')->with('post', $post);

    }

    public function editar(Request $request)
    {
        //$post = Post::find($request->id);
        //$post->titulo = $request->titulo;
        //$post->texto = $request->texto;
        //$post->save();

        //VIa atribuicao em massa
        Post::find($request->id)->update($request->input());

        return redirect()->action('PostController@posts');
    }

}
