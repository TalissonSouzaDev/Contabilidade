<?php

namespace App\Http\Repository;
use App\Models\contato;


class ContatoRepository {
    
protected $contato , $userid;
    public function __construct(contato $contato){
        $this->contato = $contato;
       

    }

    public function index($request , $iduser){

        if($request['filter'] === null){
            $contato = $this->contato->where('user_id',$iduser)->paginate(10);
            return $contato;
        }

       $contato =  $this->contato->where('nome','LIKE',"%{$request->filter}%")->where('user_id',$iduser)->paginate(10);
       return $contato;

    }
    public function create($request,$authuser){
        $this->contato->create([
            'nome' => $request['nome'],
            'email' => $request['email'],
            'telefone' => $request['telefone'],
            'descricao' => $request['descricao'],
            'user_id' => $authuser,
        ]);

    }

    public function contatodados($id){
        if(!$contato = $this->contato->where('id',$id)->first()){
            return redirect()->back();
        }

        return $contato;
    }

    public function authuser(){
        return $this->userid = auth()->user()->id;
    }
}