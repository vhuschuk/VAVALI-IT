<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
class Subscribe extends Controller

{
    public function insertform(){
        return view('pages/subscribe');
        }


    public function insert(Request $request){
           $rules = array(
            'name'  => 'required|max:50',
            'email' => 'required|email|unique:users',
        );
       
        $validatedData = $request->validate($rules);
         
            $name = $request->input('name');
            
            $email = $request->input('email');
            $data=array('name'=>$name,"email"=>$email);
            
            Users::insert($data);
            echo "Дякуємо! Ви успішно підписанні на нашу розсилку.<br/>";
            echo '<a href = "/index">Вернутися на головну</a>.';
            }
}
