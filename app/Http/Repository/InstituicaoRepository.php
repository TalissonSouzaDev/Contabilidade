<?php

namespace App\Http\Repository;
use App\Models\instituicao;


class InstituicaoRepository {
    
protected $nstituicao , $userid;
    public function __construct(instituicao $instituicao){
        $this->instituicao = $instituicao;
       

    }

    public function index($request , $iduser){

        if($request['filter'] === null){
            $instituicao = $this->instituicao->where('user_id',$iduser)->paginate(10);
            return $instituicao;
        }

       $instituicao =  $this->instituicao->where('nome','LIKE',"%{$request->filter}%")->where('user_id',$iduser)->paginate(10);
       return $instituicao;

    }
  
    public function instituicaodados($id){
        if(!$instituicao = $this->instituicao->where('id',$id)->first()){
            return redirect()->back();
        }

        return $instituicao;
    }

    public function authuser(){
        return $this->userid = auth()->user()->id;
    }
}