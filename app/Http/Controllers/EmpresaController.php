<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\empresa;
use App\Http\Repository\EmpresaRepository;
use App\Http\Requests\EmpresaRequest;

class EmpresaController extends Controller
{
    public function __construct(empresa $empresa, EmpresaRepository $EmpresaRepository){
        $this->empresa = $empresa;
        $this->EmpresaRepository = $EmpresaRepository;
    }

    public function index(request $request){
        // puxando o id do usuario autenticado;
        $authuser = $this->EmpresaRepository->authuser();
        // verificando se exister filter se não retorna uma colletion;
        $empresa = $this->EmpresaRepository->index($request,$authuser);
        
        return view("contabilidade.pages.empresa.index",compact('empresa'));
        
    }

    public function create(){
        return view("contabilidade.pages.empresa.create");
    }

    public function store(EmpresaRequest $request){
       // puxando o id do usuario autenticado;
        $authuser = $this->EmpresaRepository->authuser();
        // criando o cadastro da empresa
        $this->EmpresaRepository->create($request,$authuser);

        return redirect()->route('empresa.index',$authuser)->with('sucess','Eba! , Cadastro realizado com sucesso :)');
    }
    
    public function show($id){
        
        $empresa = $this->EmpresaRepository->empresadados($id);

        return view('contabilidade.pages.empresa.show',compact('empresa'));
    }

    public function edit($id){
        
        $empresa = $this->EmpresaRepository->empresadados($id);

        return view('contabilidade.pages.empresa.edit',compact('empresa'));
    }

    public function update(EmpresaRequest $request,$id){
      
         // puxando o id do usuario autenticado;
         $authuser = $this->EmpresaRepository->authuser();
        $empresa = $this->EmpresaRepository->empresadados($id);
        $empresa->update($request->all());

        return redirect()->route('empresa.index',$authuser)->with('sucess','Eba! , Atualização realizada com sucesso :)');
    }

    public function destroy($id){
       
         // puxando o id do usuario autenticado;
        $authuser = $this->EmpresaRepository->authuser();
        $empresa = $this->EmpresaRepository->empresadados($id);
        $empresa->delete();

        return redirect()->route('empresa.index',$authuser)->with('sucess','Eba! , Deletado com sucesso :)');

      
    }
}
