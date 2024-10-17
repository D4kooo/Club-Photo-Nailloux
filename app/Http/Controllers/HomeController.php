<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; // Assurez-vous d'avoir un modèle Post

class HomeController extends Controller
{
    public function index()
    {
        // Récupérer les derniers articles, par exemple les 10 plus récents
        $posts = Post::latest()->paginate(10);

        // Passer les articles à la vue
        return view('home', compact('posts'));
    }
}
