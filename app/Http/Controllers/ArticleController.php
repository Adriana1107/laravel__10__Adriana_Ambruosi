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
    return view('articleCreate');
}


public function show($name)
{
    $article = Article::where('name', $name)->firstOrFail();
    return view('articlesDetail', compact('article'));
}



public function store(ArticleRequest $request)
{
    $path = null;

    if ($request->hasFile('img') && $request->file('img')->isValid()) {
        $path = $request->file('img')->store('public/img');
    }

    Article::create([
        'name' => $request->input('name'),
        'price' => $request->input('price'),
        'description' => $request->input('description'),
        'img' => $path,
    ]);

    return redirect()->route('home')->with('successMessage', 'Hai inserito correttamente il tuo articolo');
}


}
