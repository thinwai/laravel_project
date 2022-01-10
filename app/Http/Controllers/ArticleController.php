<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except(['index', 'detail']);
    }

    public function index(){
        $data = Article::where('status_id','=','2')->latest()->paginate(5);

        return view('articles.index',[
            'articles' => $data
        ]);
    }

    public function detail($id){
        $data = Article::find($id);

        return view('articles.detail', [
        'article' => $data
        ]);
    }

    public function add(){
        $data = Category::all();
        return view('articles.add', [
        'categories' => $data
        ]);
    }

    public function create(){
        $validator = validator(request()->all(), [
            'title' => 'required',
            'body' => 'required',
            'category_id' => 'required',
            ]);
            if($validator->fails()) {
            return back()->withErrors($validator);
            }
           
        $article = new Article;
        $article->title = request()->title;
        $article->body = request()->body;
        $article->category_id = request()->category_id;
        $article->user_id = request()->user_id;
        $article->status_id = '1';
        $article->save();
        return redirect('/articles');
    }

    public function delete($id){
        $article = Article::find($id);
        $article->delete();
        return redirect('/articles')->with('info', 'Article deleted');
    }


}
