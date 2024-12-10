<?php

namespace App\Http\Controllers;

use App\models\Post;
use Illuminate\Http\Request;

class PostController extends Controllers
{
    public function index(post $post)
    {
        return $post->get();
    }
     
}