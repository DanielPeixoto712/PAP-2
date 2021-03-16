@extends ('layout')

@section ('titulo')
@endsection

@section ('navbar')
@endsection

@section ('menu')
@endsection

<br><br><br><br><br>
@section ('produtos')

<form action="{{route('bmws.update',['id'=>$bmw->id_bmw])}}" enctype="multipart/form-data" method="post">
    @csrf
    <!--@method('patch')-->
    Motor:<input type="text" name="motor" value="{{$bmw->motor}}"><br>
    Preço:<input type="text" name="preco" value="{{$bmw->preco}}"><br>
    Observações:<textarea name="observacoes">{{$bmw->observacoes}}</textarea><br>
    Informação:<input type="text" name="info" value="{{$bmw->info}}"><br>
    imagem Capa:<input type="file" name="imagem_capa">
    <input type="submit" name="Enviar">
</form>
@endsection
