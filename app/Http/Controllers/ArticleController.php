<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /*  Article တွေကိုလည်း အဲ့လိုပဲလူတိုင်းဖျက်လို့မရဘဲ၊ ရေးထားတဲ့သူပဲ ဖျက်လို့ရအောင် ကိုယ့်ဘာသာ စမ်းလုပ်ကြည့်သင့်ပါတယ်။*/
    public function __construct(){
        $this->middleware('auth')->except(['index', 'detail']);
    }

    public function index(){
        $data = Article::latest()->paginate(5);

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
        $data = [
        [ "id" => 1, "name" => "News" ],
        [ "id" => 2, "name" => "Tech" ],
        ];
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
        $article->save();
        return redirect('/articles');
    }

    public function delete($id){
        $article = Article::find($id);
        $article->delete();
        return redirect('/articles')->with('info', 'Article deleted');
    }


}
