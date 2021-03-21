<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
         // ダミーデータ
         $articles = [
            (object) [
                'id' => 1,
                'title' => 'タイトル1',
                'body' => '本文1',
                'created_at' => now(),
                'user' => (object) [
                    'id' => 1,
                    'name' => 'ユーザー名1',
                ],
            ],
            (object) [
                'id' => 2,
                'title' => 'タイトル2',
                'body' => '本文2',
                'created_at' => now(),
                'user' => (object) [
                    'id' => 2,
                    'name' => 'ユーザー名2',
                ],
            ],
            (object) [
                'id' => 3,
                'title' => 'タイトル3',
                'body' => '本文3',
                'created_at' => now(),
                'user' => (object) [
                    'id' => 3,
                    'name' => 'ユーザー名3',
                ],
            ],
        ];

        // return view('ビューファイル名', ['ビューに渡す変数名' => 変数の値]);
        return view('articles.index', ['articles' => $articles]);

        // 他の書き方(withメソッドを使う方法)
        // return view('articles.index')->with(['articles' => $articles]);
        
        // 他の書き方(compact関数を使う方法)
        // return view('articles.index', compact('articles'));
    }
}
