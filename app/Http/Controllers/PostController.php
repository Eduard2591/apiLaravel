<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function hello1()
    {
        return response()->json([
            'message' => 'Hello World'
        ]);
    }

    public function firstPost()
    {
        $post = Post::all()->toArray();
        
        return response()->json(
            [
                'code' => 200,
                'status' => 'true',
                'data' => $post
            ]
        );
        
    }

    public function store1(Request $request)
    {
        // dd($request->all());
        // $post = new Post();

        // $post->name = $request->name;
        // $post->description = $request->description;
        //$post->state = $request->state;
        //$post->contenido = $request->contenido;

        // $post->save();

        $post = [
            [

                'name'        => 'Cien años de soledad',
                'description' => 'Gabriel',
                'state' => 1,
                'contenido'   => "Historias"
            ],
            [
                'name'        => 'harry poter',
                'description' => 'Magia y Drama',
                'state' => 0,
                'contenido'   => "No se encontrado"
            ]
        ];

        //foreach ($post as $post) {
        //    # code...
        // Post::create($post);
        //}

        Post::create($request->all());
    }

    public function update1(Request $request, $id)
    {
        $post = Post::find($id);
        
        $post->description = 'Pizzas y pastas';
        
        $post->save();
    }

    public function destroy1($id)
    {
        $post = Post::find($id);
        $post->delete();
    }
}
