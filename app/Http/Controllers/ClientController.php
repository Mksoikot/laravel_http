<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{
    public function getAllpost(){
        $response = http::get('https://jsonplaceholder.typicode.com/posts');
        return $response->json();
    }

    public function getpostById($id){
        $response = http::get('jsonplaceholder.typicode.com/posts/'.$id);
        return $response->json();
    }
    public function addPost(){
        $post = http::post('https://jsonplaceholder.typicode.com/posts',[
            'userId'=> 1,
            'title' => 'New Post Title',
            'body' => 'New Post Title Description'
        ]);
        return $post->json();
    }
    public function UpdatePost(){
        $response = http::put('https://jsonplaceholder.typicode.com/posts/1',[
           'title' => 'Updated Title',
           'body' => 'Update Description'
        ]);
        return $response->json();
    }
    public function DeletePost($id){
        $delete = http::delete('https://jsonplaceholder.typicode.com/posts'.$id);
        return $delete->json();
    }
}
