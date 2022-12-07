<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{funcionario,empresa};
use App\Http\Repository\FuncionarioRepository;
use App\Http\Requests\FuncionarioRequest;


class FuncionarioController extends Controller
{
    public function __construct(funcionario $funcionario,FuncionarioRepository $FuncionarioRepository){
        
        $this->funcionario = $funcionario;
        $this->FuncionarioRepository = $FuncionarioRepository;
        

    }
    public function index(request $request ,$idmpresa){

       $empresa = $this->FuncionarioRepository->empresa($idmpresa);
       $funcionario = $this->FuncionarioRepository->index($request,$idmpresa);
        return view("contabilidade.pages.funcionario.index",compact('empresa','funcionario'));
       

       
    }

    public function create($idmpresa){
        if(!$empresa = empresa::where('id',$idmpresa)->first()){
            return redirect()->back();
         }
 
       return view('contabilidade.pages.funcionario.create',compact('empresa'));
    }


    public function store(FuncionarioRequest $request , $idmpresa){
   


        $empresa =   $empresa = $this->FuncionarioRepository->empresa($idmpresa);
        $this->FuncionarioRepository->create($request,$empresa->id);
         return redirect()->route('funcionario.index',$empresa->id)->with('sucess','Eba! , Cadastro realizado com sucesso :)');

         
      
    }

    
    public function show($id,$idmpresa){
       $empresa =  $empresa = $this->FuncionarioRepository->empresa($idmpresa);
       $funcionario =  $this->FuncionarioRepository->funcionariodados($id);
 
       return view('contabilidade.pages.funcionario.show',compact('funcionario','empresa'));
    }



    public function edit($id,$idmpresa){
        $empresa =   $empresa = $this->FuncionarioRepository->empresa($idmpresa);
         $funcionario = $this->funcionario->find($id)->first();
 
       return view('contabilidade.pages.funcionario.edit',compact('funcionario','empresa'));
    }

    public function update(FuncionarioRequest $request , $id,$idmpresa){
        $empresa =  $empresa = $this->FuncionarioRepository->empresa($idmpresa);
        $funcionario =  $this->FuncionarioRepository->funcionariodados($id);


         $data = $request->all();
         $data['dat_nasc'] = date('Y-m-d',strtotime($request->dat_nasc));
         $data['admissao'] = date('Y-m-d',strtotime($request->admissao));
         $funcionario->update($data);

         return redirect()->route('funcionario.index',$empresa->id)->with('sucess','Eba! , Atualização realizada com sucesso :)');
    }

    public function destroy($id,$idmpresa){
        $empresa =  $empresa = $this->FuncionarioRepository->empresa($idmpresa);
        $funcionario =  $this->FuncionarioRepository->funcionariodados($id);
         $funcionario->delete();
 
         return redirect()->route('funcionario.index',$empresa->id)->with('sucess','Eba! , Deletado com sucesso :)');
    }
}
