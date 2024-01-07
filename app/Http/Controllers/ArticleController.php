<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ArticleFormRequest;

class ArticleController extends Controller
{

    public function __construct() {
        $this->middleware('auth')->except('index', 'show');
    }
    
        
    

    public function index(){

        $articles=article::all();
        return view('article.index',
        // [
        //     'articles' => $articles
        // ]
        // la funzione compact è più rapida
        compact('articles')
    );
    }

    public function show(Article $article){



        return view('article.show',
        compact('article')
    );
    }


    public function create(){

        $categories = Category::all();
        return view('article.create');
    }

    public function store(ArticleFormRequest $request){


        // $request->validate{[
        //     'title' => 'required',
        //     'author' => 'required',
        //     'body' => 'required',
        // ]};
        
        // dd($img);
        // dd($request->all());
        // $title = $request->title;
        // $author = $request->author;
        // $body = $request->body;

        // $article = new Article();

        // $article->title = $title;
        // $article->author = $author;
        // $article->body = $body;
        // // dd($article);

        // $article->save();
        // dd('salvato del db');
       
        if($request->file('img')){
            $img = $request->file('img')->store('public/image');
        }
        else{
            $img='public/image/default.jpg';
        }


       
        // metodo mass assignment
         Article::create(
            [
            'title' => $request-> title,
            'body' => $request->body,
            'img' => $img,
            // 'user_id' => Auth::user()->id,
            'user_id' => Auth::id(),
            'category_id' => $request->category,
            ]
        );

        return redirect()->back()->with('message','articolo inserito');
    }
}
