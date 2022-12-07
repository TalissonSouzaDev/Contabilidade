<?php

namespace App\Http\Repository;
use App\Models\empresa;


class EmpresaRepository {
    
protected $empresa , $userid;
    public function __construct(empresa $empresa){
        $this->empresa = $empresa;
       

    }

    public function index($request , $iduser){

        if($request['filter'] === null){
            $empresa = $this->empresa->where('user_id',$iduser)->paginate(10);
            return $empresa;
        }

       $empresa =  $this->empresa->where('nome','LIKE',"%{$request->filter}%")->where('user_id',$iduser)->paginate();
       return $empresa;

    }
    public function create($request,$authuser){
        $this->empresa->create([
            'nome' => $request['nome'],
            'cnpj' => $request['cnpj'],
            'email' => $request['email'],
            'telefone' => $request['telefone'],
            'user_id' => $authuser,
        ]);

    }

    public function empresadados($id){
        if(!$empresa = $this->empresa->where('id',$id)->first()){
            return redirect()->back();
        }

        return $empresa;
    }

    public function authuser(){
        return $this->userid = auth()->user()->id;
    }
}