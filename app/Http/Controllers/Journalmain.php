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

    // Редагування постів
    public function edit()
    {
      
       // return \request() -> all();
        $journalsred = Journal::orderBy('id', 'desc')
        ->take(1)
        ->get();
        return view('pages/journals/edit', [
            'journalsred'=>$journalsred, 
           
            ]);
    
    }

        public function save (Request $request) {
        $title = $request->input('title');
        $description = $request->input('description');
        $image = $request->input('image');
        $date = $request->input('date');
       $id = $request->input('id');
        $data=array('journal_number'=>$title,"journal_description"=>$description,"img"=>$image,"date"=>$date);
        
        Journal::whereId($id)->update($data);
      
     // dd($data);
     echo "Дані збережено.<br/>";
     echo '<a href = "/index">Вернутися на головну</a>.';

    
    
    }

// ЗАВАНТАЖЕННЯ СТАТТЕЙ 
public function download ($file_name) {
    $file_path = public_path('pdf/'.$file_name);
    return response()->download($file_path);
  }

  // Додавання постів

  public function add(){
   // return \request() -> all();
    return view('pages/journals/add');
    }


public function insertjournals(Request $request){
       $rules = array(
        'title'  => 'required|max:50',
        'description' => 'required|max:150',
        'image' => 'required',
        'date' => 'required',
    );
   
   $validatedData = $request->validate($rules);
     
        $title = $request->input('title');
        
        $description = $request->input('description');
        $image = $request->input('image');
        $date = $request->input('date');
        $pdf_all = $request->input('pdf_all');
        $data=array('journal_number'=>$title,"journal_description"=>$description, "img"=>$image, "date"=>$date,"pdf_all"=>$pdf_all);
        
        Journal::insert($data);
       echo "Дякуємо! .<br/>";
        echo '<a href = "/index">Вернутися на головну</a>.';
       }

//hello
       //Видалення постів 
       public function delete(){
        $journalsdel = Journal::orderBy('id', 'desc')
        ->take(1)
        ->get();
        $id = $journalsdel[0]['id'];
       // dd($id);
        Journal::destroy ('delete from journals where id = ?', $id);
        
         echo "Пост видалено успішно.<br/>";
         echo  '<a href = "/index">Вернутися на головну</a>.';
         }
}


