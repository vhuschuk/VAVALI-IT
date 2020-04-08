<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Journal;
use App\Article;
class Journalmain extends Controller
{
   public function index()
    {
        $journals = Journal::orderBy('id', 'desc')
            ->take(1)
            ->get();

        $articles = Article::orderBy('author', 'asc')
             ->where('journal_id', $journals[0]['id'])
             ->paginate(3);
        return view('pages/index', [
            'journals'=>$journals, 
            'articles'=>$articles,
            ]);
    }
    public function edit()
    {
       
        $journal = Journal::all();
       return view ('pages/journals/edit',
        ['journal'=>$journal]
    );
       
    
    }
  
}
