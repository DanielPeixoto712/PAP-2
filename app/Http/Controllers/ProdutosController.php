<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Marca;
use App\Models\Categoria;

class ProdutosController extends Controller
{
 public function index(){
     
       $produto = Produto::all()->sortbydesc('id_marca');

       //$produto=Produto::where('id_produto',$idProduto)->with(['marca','categoria'])->first();

       return view('produtos.index', ['produtos'=>$produto
   ]);

   }
    public function show (Request $request){
        $idProduto=$request->id;
        $produto=Produto::where('id_produto',$idProduto)->with(['marca','categoria'])->first();
        

    return view('produtos.show',  ['produto'=>$produto
]);
}
public function create(){
    return view('produtos.create');
}
public function store(request $request){
    $novoProduto=$request->validate ([
        'id_categoria'=>['required','max:100'],
        'id_marca'=>['required','max:100'],
        'preco'=>['nullable','min:2','max:200'],
        'produto'=>['nullable','min:2','max:200'],
        'observacoes'=>['nullable','min:2','max:200'],
        'info'=>['nullable','min:2','max:200'],


]);
    $produto=Produto::create($novoProduto);
    return redirect()->route('produtos.show',[
        'id'=>$produto->id_produto]);
}
}