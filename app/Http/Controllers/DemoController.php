<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DemoController extends Controller
{
    function simpleGetHttpRequest(){
       $respose =  http::get('https://jsonplaceholder.typicode.com/posts');
        return $respose->headers();
    }
    function simplePostHttpRequest(){
        $respose =  http::get('https://jsonplaceholder.typicode.com/posts',['userId'=>'18']);
         return $respose->json();
     }
}