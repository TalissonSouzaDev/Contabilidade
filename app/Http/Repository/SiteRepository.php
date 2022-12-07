<?php

namespace App\Http\Repository;
use App\Models\site;
use Illuminate\Support\Facades\Storage;


class SiteRepository {
    
protected $site , $userid;
    public function __construct(site $site){
        $this->site = $site;
       

    }

    public function index($request , $iduser){

        if($request['filter'] === null){
            $site = $this->site->where('user_id',$iduser)->paginate(10);
            return $site;
        }

       $site =  $this->site->where('nome','LIKE',"%{$request->filter}%")->where('user_id',$iduser)->paginate(10);
       return $site;

    }
    public function create($request,$imagem,$authuser){

        
        $this->site->create([
            'nome' => $request['nome'],
            'url' => $request['url'],
            'img' => $imagem,
            'instituicao_id' => $request['instituicao_id'],
            'user_id' => $authuser,
        ]);

    }

    public function sitedados($id){
        if(!$site = $this->site->where('id',$id)->first()){
            return redirect()->back();
        }

        return $site;
    }

    public function authuser(){
        return $this->userid = auth()->user()->id;
    }
}