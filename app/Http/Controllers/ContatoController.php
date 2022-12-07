<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contato;

use App\Http\Repository\ContatoRepository;
use App\Http\Requests\ContatoRequest;
class ContatoController extends Controller
{
    public function __construct(contato $contato,ContatoRepository $ContatoRepository){

        $this->contato = $contato;
        $this->ContatoRepository = $ContatoRepository;
   

    }

    public function index(request $request){
         // puxando o id do usuario autenticado;
         $authuser = $this->ContatoRepository->authuser();
         // verificando se exister filter se não retorna uma colletion;
         $contato = $this->ContatoRepository->index($request,$authuser);

        return view("contabilidade.pages.contato.index",compact('contato'));
        
    }

    public function create(){
        return view("contabilidade.pages.contato.create");
    }

    public function store(ContatoRequest $request){
   
        
     $authuser = $this->ContatoRepository->authuser();
     $this->ContatoRepository->create($request,$authuser);

        return redirect()->route('contato.index',$authuser)->with('sucess','Eba! , Cadastro realizado com sucesso :)');
    }
    
    public function show($id){
        
        $contato = $this->ContatoRepository->contatodados($id);

        return view('contabilidade.pages.contato.show',compact('contato'));
    }

    public function edit($id){
        
        $contato = $this->ContatoRepository->contatodados($id);

        return view('contabilidade.pages.contato.edit',compact('contato'));
    }

    public function update(ContatoRequest $request,$id){
      
        $authuser = $this->ContatoRepository->authuser();
        $contato = $this->ContatoRepository->contatodados($id);
        $contato->update($request->all());

        return redirect()->route('contato.index',$authuser)->with('sucess','Eba! , Atualização realizada com sucesso :)');

      
    }

    public function destroy($id){
      
        $authuser = $this->ContatoRepository->authuser();
        
        $contato = $this->ContatoRepository->contatodados($id);
        $contato->delete();

        return redirect()->route('contato.index',$authuser)->with('sucess','Eba! , Deletado com sucesso :)');

      
    }
}
