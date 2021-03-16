<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
 public function index(){
     
       $produto = Produto::all();
  

       return view('produtos.index', ['produtos'=>$produto
   ]);

   }
    public function show (Request $request){
        $idProduto=$request->id;
        $produto=Produto::where('id_produto',$idProduto)->first();

    return view('produtos.show',  ['produto'=>$produto
]);
}
public function create(){
    return view('produtos.create');
}
public function store(request $request){
    $novoProduto=$request->validate ([
        'id_categoria'=>['required','max:100'],
        'designacao'=>['nullable','min:2'],
        'id_marca'=>['nullable','max:200'],
        'preco'=>['nullable','min:2','max:200'],
        'observacoes'=>['nullable','min:2','max:200'],
        'info'=>['nullable','min:2','max:200'],

]);
    $produto=Produto::create($novoProduto);
    return redirect()->route('produtos.show',[
        'id'=>$produto->id_produto]);
}
}