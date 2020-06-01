<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Article;
class Archive extends Controller
{
    public function archive()
    {
        $archive = Post::orderBy('id', 'desc')
            ->get();

        return view('pages/records', [
            'archive'=>$archive, 
           
            ]);
        }

public function index(Request $request)
{
    
    $id = $request->get('id');
    //dd($id);
    $data = Post::orderBy('id', 'desc')
    
        ->take(1)
        ->whereId($id)
        ->get();
       
    $articles = Article::orderBy('author', 'asc')
         ->where('journal_id', $data[0]['id'])
         ->paginate(3);
    return view('pages/index', [
        'journals'=>$data, 
        'articles'=>$articles,
        ]);
}
}