<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Contact;
use App\Models\Post;
use App\Models\Category;


class TestController extends Controller
{
    public function index(){
        $user=User::with('contact')->get();
        dd($user->toArray());
    }
    public function indexx(){
        $contact=Contact::with('user')->get();
        dd($contact->toArray());
    }
    public function indexxx(){
        $user=User::with('post')->get();
        dd($user->toArray());

    }
    public function indexxxx(){
        $post=Post::with('user')->get();
        dd($post->toArray());

    }
    public function indexxxxx(){
        $categories=Category::all();
        $post=Post::with('categories')->get();
        dd($post->toArray());

    }
}
