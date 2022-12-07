<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function edit($id)
    {
        if(!$user = User::where('id',$id)->first()){
            return redirect()->back();
        }
     

        return view("contabilidade.pages.user.edit",compact('user'));
    }
    
    public function update(Request $request,$id)
    {
        if(!$user = User::where('id',$id)->first()){
            return redirect()->back();
        }
      $data = $request->all(); 
      $data['password'] = bcrypt($request->password());
         $user->update($data);

     return redirect()->route('home')->with('sucess','Eba! , Atualizado com sucesso');
    }

  
}
