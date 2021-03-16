@extends ('layout')

@section ('titulo')
@endsection

@section ('navbar')
@endsection

@section ('menu')
@endsection

<br><br><br><br><br>
@section ('produtos')

<form action="{{route('produtos.store')}}" method="post">
	@csrf
	idcategoria:<input type="text" name="id_categoria" value="{{old('id_categoria')}}"><br>
	designacao::<input type="text" name="designacao" value="{{old('designacao')}}"><br>
	Id_marca:<input type="text" name="id_marca" value="{{old('id_marca')}}"><br>
		Preço::<input type="text" name="preco" value="{{old('preco')}}"><br>
	Observações::<textarea name="observacoes">{{old('observacoes')}}</textarea><br>
	Informação::<input type="text" name="info" value="{{old('info')}}"><br>
	<input type="submit" name="Enviar">
</form>
@endsection


