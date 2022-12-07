<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{site,instituicao};
use Illuminate\Support\Facades\Storage;
use App\Http\Repository\SiteRepository;
use App\Http\Requests\SiteRequest;
class SiteController extends Controller
{
    public function __construct(site $site,instituicao $instituicao ,SiteRepository $SiteRepository){

        $this->site = $site;
        $this->instituicao = $instituicao;
        $this->SiteRepository = $SiteRepository;
     

    }

    public function index(request $request){
         // puxando o id do usuario autenticado;
         $authuser = $this->SiteRepository->authuser();
         // verificando se exister filter se não retorna uma colletion;
         $site = $this->SiteRepository->index($request,$authuser);


        return view("contabilidade.pages.site.index",compact('site'));
        
    }

    public function create(){

        $instituicao = $this->instituicao->latest()->get();
        return view("contabilidade.pages.site.create",compact('instituicao'));
    }

    public function store(SiteRequest $request){
        // puxando o id do usuario autenticado;
        $authuser = $this->SiteRepository->authuser();

        $img = $request->file("img");
        $imagem = $img->store('imagem/site','public');
        $this->SiteRepository->create($request,$imagem,$authuser);

        return redirect()->route('site.index',$authuser)->with('sucess','Eba! , Cadastro realizado com sucesso :)');
    }
    

    public function edit($id){
        
        $site = $this->SiteRepository->sitedados($id);

        $instituicao = $this->instituicao->latest()->get();

        return view('contabilidade.pages.site.edit',compact('site','instituicao'));
    }

    public function update(SiteRequest $request,$id){
     // puxando o id do usuario autenticado;
     $authuser = $this->SiteRepository->authuser();
     $site = $this->SiteRepository->sitedados($id);


        if($request->file('img')){
            Storage::disk('public')->delete($site->img);
        }


        $img = $request->file("img");
        $imagem = $img !== null ? $img->store('imagem/site','public') :  $site->img;

        $site->update([
            'nome' => $request->nome,
            'url' => $request->url,
            'img' => $imagem,
            'instituicao_id' => $request->instituicao_id,
            
        ]);

        return redirect()->route('site.index',$authuser)->with('sucess','Eba! , Atualização realizada com sucesso :)');

      
    }

    public function destroy($id){
        $authuser = $this->SiteRepository->authuser();
        $site = $this->SiteRepository->sitedados($id);

        if($site->img){
            Storage::disk('public')->delete($site->img);
        }
        $site->delete();

        return redirect()->route('site.index',$authuser)->with('sucess','Eba! , Deletado com sucesso :)');

      
    }
}
