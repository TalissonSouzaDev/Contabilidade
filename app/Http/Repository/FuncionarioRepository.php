<?php

namespace App\Http\Repository;
use App\Models\{funcionario,empresa};


class FuncionarioRepository {
    
protected $funcionario;
    public function __construct(funcionario $funcionario){
        $this->funcionario = $funcionario;
       

    }

    public function index($request , $idmpresa){

        if(!$empresa = empresa::where('id',$idmpresa)->first()){
            return redirect()->back();
         }


         if($request['filter'] === null){
             $funcionario = $this->funcionario->where('empresa_id',$empresa->id)->latest()->paginate(10);
             return $funcionario;
         }
            $filter  = $request['filter'];


         $funcionario =  $this->funcionario->where('nome','LIKE',"%{$request->filter}%")
         ->where('empresa_id',$empresa->id)
         ->orwhere('cpf','LIKE',"%{$filter}%")
         ->where('empresa_id',$empresa->id)
         ->orwhere('rg','LIKE',"%{$filter}%")
         ->where('empresa_id',$empresa->id)
         ->orwhere('matricula','LIKE',"%{$filter}%")
         ->where('empresa_id',$empresa->id)
         
         ->paginate();


       return $funcionario;

    }
    public function create($request,$empresaid){

        $request['dat_nasc'] = date('Y-m-d',strtotime($request['dat_nasc']));
        $request['admissao'] = date('Y-m-d',strtotime($request['admissao']));
        $this->funcionario->create([
            'matricula'=>$request['matricula'],
            'nome'=>$request['nome'],
            'cpf'=>$request['cpf'],
            'rg'=>$request['rg'],
            'dat_nasc'=>$request['dat_nasc'],
            'email'=>$request['email'],
            'telefone'=>$request['telefone'],
            'admissao'=>$request['admissao'],
            'salario'=>$request['salario'],
            'empresa_id'=>$empresaid]);

    }

    public function funcionariodados($id){
        if(!$funcionario = $this->funcionario->where('id',$id)->first()){
            return redirect()->back();
        }

        return $funcionario;
    }

    public function empresa($idmpresa){
       
        if(!$empresa = empresa::where('id',$idmpresa)->first()){
            return redirect()->back();
         }
         return $empresa;
    }
}