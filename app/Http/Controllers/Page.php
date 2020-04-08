<?php

namespace App\Http\Controllers;
use App\Pages;
use Illuminate\Http\Request;

class Page extends Controller
{
    public function about()
    {
        $about = Pages::orderBy('id', 'asc')
            ->where('page_name', 'about')
            ->get();
            return view( 'pages/about', [
                'about'=>$about, 
            ]);  
    
    }
    public function authors()
    {
        $authors = Pages::orderBy('id', 'asc')
            ->where('id', '2')
            ->get();
            return view( 'pages/authors', [
                'authors'=>$authors, 
            ]);  
    }

    public function reviewers()
    {
        $reviewers = Pages::orderBy('id', 'asc')
             ->where('page_name', 'reviewers')
             ->get();
            return view( 'pages/reviewers', [
                'reviewers'=>$reviewers, 
            ]);  
    }
        
        

       
}

