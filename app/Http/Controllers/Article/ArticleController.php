<?php

namespace App\Http\Controllers\Article;

use App\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $data = Article::all();

        return view('articles.index', ['articles' => $data]);
    }

    public function detail($id)
    {
        return "Controller - Article Detail - $id";
    } 
}
