<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\instituicao;

use App\Http\Repository\InstituicaoRepository;

class InstituicaoController extends Controller
{
    public function __construct(instituicao $instituicao,InstituicaoRepository $InstituicaoRepository){

        $this->instituicao = $instituicao;
        $this->InstituicaoRepository = $InstituicaoRepository;
     

    }

    public function index(request $request){
         // puxando o id do usuario autenticado;
         $authuser = $this->InstituicaoRepository->authuser();
         // verificando se exister filter se não retorna uma colletion;
         $instituicao = $this->InstituicaoRepository->index($request,$authuser);
        return view("contabilidade.pages.instituicao.index",compact('instituicao'));
        
    }

    public function create(){
        return view("contabilidade.pages.instituicao.create");
    }

    public function store(request $request){

     // puxando o id do usuario autenticado;
     $authuser = $this->InstituicaoRepository->authuser();
        
        $this->instituicao->create([
            'orgao' => $request->orgao,
            'user_id' => $authuser,
        ]);

        return redirect()->route('instituicao.index',$authuser)->with('sucess','Eba! , Cadastro realizado com sucesso :)');
    }
    
   

    public function edit($id){
        
        $instituicao = $this->InstituicaoRepository->instituicaodados($id);

        return view('contabilidade.pages.instituicao.edit',compact('instituicao'));
    }

    public function update(request $request,$id){

         // puxando o id do usuario autenticado;
         $authuser = $this->InstituicaoRepository->authuser();
        
        $instituicao = $this->InstituicaoRepository->instituicaodados($id);
        $instituicao->update($request->all());

        return redirect()->route('instituicao.index',$authuser)->with('sucess','Eba! , Atualização realizada com sucesso :)');

      
    }

    public function destroy($id){
         // puxando o id do usuario autenticado;
         $authuser = $this->InstituicaoRepository->authuser();

         $instituicao = $this->InstituicaoRepository->instituicaodados($id);
         
         if($instituicao->with('site')->count() > 0){
             return redirect()->back()->with('error','Ops, existir um relacionamento :)');
         }
        $instituicao->delete();

        return redirect()->route('instituicao.index',$authuser)->with('sucess','Eba! , Deletado com sucesso :)');
  
    }
}
