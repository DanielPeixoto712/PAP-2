<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bmw;
use Illuminate\Support\Facades\Storage;

class BmwsController extends Controller
{
 public function index(){
   	$bmws = Bmw::all();
   	return view('bmws.index', ['bmws'=>$bmws
   ]);

   }
    public function show (Request $request){
    	$idBmw=$request->id;
    	$bmw=Bmw::where('id_bmw',$idBmw)->first();

	return view('bmws.show',  ['bmw'=>$bmw
]);
}
public function create(){
    return view('bmws.create');
}
public function store(request $request){
    $novoBmw=$request->validate ([
        'motor'=>['required','min:2','max:100'],
        'preco'=>['nullable','min:2'],
        'observacoes'=>['nullable','min:2','max:200'],
        'info'=>['nullable','min:2','max:200'],
        'imagem_capa'=>['nullable','image','max:200'],

]);
    if ($request->hasFile('imagem_capa')) {
      $nomeImagem=$request->file('imagem_capa')->getClientOriginalName();
      $nomeImagem=$time().'_'.$nomeImagem;
      $guardarImagem=$request->file('imagem_capa')->storeAs('imagens/Bmw',$nomeImagem);
      $novoBmw['imagem_capa']=$nomeImagem;
    }
    $bmw=Bmw::create($novoBmw);
    return redirect()->route('bmws.show',[
        'id'=>$bmw->id_bmw]);
}
public function edit(Request $request){
$idBmw=$request->id;
    $bmw=Bmw::where('id_bmw',$idBmw)->first();
      return view('bmws.edit',
        ['bmw'=>$bmw]);
}
public function update(Request $request){
  $idBmw=$request->id;
  $bmw=Bmw::findOrFail($idBmw);
  $imagemAntiga=$bmw->imagem_capa;
  $atualizarBmw=$request->validate([
        'motor'=>['required','min:2','max:100'],
        'preco'=>['nullable','min:2'],
        'observacoes'=>['nullable','min:2','max:200'],
        'info'=>['nullable','min:2','max:200'],
        'imagem_capa'=>['nullable','image','max:200'],
  ]);
  if (!is_null($imagemAntiga)) {
    Storage::Delete('imagens/Bmw/'.$imagemAntiga);
  }
    if ($request->hasFile('imagem_capa')) {
      $nomeImagem=$request->file('imagem_capa')->getClientOriginalName();
      $nomeImagem=$time().'_'.$nomeImagem;
      $guardarImagem=$request->file('imagem_capa')->storeAs('imagens/Bmw',$nomeImagem);
      $atualizarBmw['imagem_capa']=$nomeImagem;
    }
  $bmw->update($atualizarBmw);
  return redirect()->route('bmws.show',['id'=>$bmw->id_bmw]);
}

}