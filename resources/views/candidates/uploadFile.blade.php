@extends('adminlte::page')


@section('content')

<h1> Faça o upload do arquivo </h1>

<div class = form-group>
    <form action = "{{route('upload')}}" method = "post" enctype = "multipart/form-data">
        @csrf
        <div class="custom-file">
        <input type ="file" name = "newfile">                                         
        </div>

        <button type = "submit" class = "btn btn-outline-success">Enviar</button>
    

    <form>
</div>


@endsection