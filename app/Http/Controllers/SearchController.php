<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
class SearchController extends Controller
{
    public function searchPage()
    {
      
      
        return view ('pages.search');
    
    }
    public function add(Request $request)
    {
      
      
       // return \request() -> all();

     $newsearch =  Article::where('art_name', 'LIKE', '%' . $request->NameArticle . '%')->get();
        
     return view('pages.search',
     ['newsearchnames'=>$newsearch  ]
    );
    }
}
