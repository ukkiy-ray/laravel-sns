<?php

namespace App\Http\Controllers;

use App\Article;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        // もともと入っていたダミーデータを削除
        
        $articles = Article::all()->sortByDesc('created_at');

        // return view('ビューファイル名', ['ビューに渡す変数名' => 変数の値]);
        return view('articles.index', ['articles' => $articles]);

        // 他の書き方(withメソッドを使う方法)
        // return view('articles.index')->with(['articles' => $articles]);

        // 他の書き方(compact関数を使う方法)
        // return view('articles.index', compact('articles'));
    }
}
