<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Http\Requests\ArticleRequest;


class ArticleController extends Controller
{



 public function index()
{
    $articles = Article::all();
   return view('articoli', ['articles' => $articles]);

}


    public function create(){
    return view('ArticleCreate');
}


public function store(ArticleRequest $request)
{
    


    Article::create([
        'name' => $request->input('name'),
        'price' => $request->input('price'),
        'description' => $request->input('description'),
        'img' => $request->file('img')->store('public/img')
    ]);

    return redirect()->route('home')->with('successMessage', 'Hai inserito correttamente il tuo articolo');
}


}
