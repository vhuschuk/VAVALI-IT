<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
class AdminController extends Controller
{
    public function login(Request $request)
    {
      
       // return \request() -> all();
      // $admin===false;
        $adminName = Admin::select('name')->get();
        $adminPass = Admin::select('password')->get();

        $rules = array(
            'name'  => 'required|max:50',
            'password' => 'required',
        );
       
        $validatedData = $request->validate($rules);
         
            $name = $request->input('name');
            $password = $request->input('password');
            $flag = $request->input('flag');

           if ($adminName[0]['name']==$name && $adminPass[0]['password']==$password) {
                $flag = true;
             //   return view('pages.index', compact('flag'));
              return redirect('/index')->with('flag',$flag);
             // return redirect('/index', compact('flag'));
          };
            
        
    
    }
}
