@extends('adminlte::page')


@section('content')
<h1 style = "font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; text-align:center"> Editar {{$candidates['name']}}  </h1>

<form action = " {{  route('chapas.update', $candidates['id'])  }}"  method = "POST">
    @method('PUT')
    @csrf
    <div class = "form-group">
        <label for = "name"> Nome </label>
        <input type = "text" class = "form-control" value = "{{$candidates['name']}}" name = "name"><br>
        <label for = "email"> Email </label>
        <input type = "text" class = "form-control" value = "{{$candidates['email']}}" name = "email"><br>
        <label for = "president_name"> Nome do Presidente </label>
        <input type = "text" class = "form-control" value = "{{$candidates['president_name']}}" name = "president_name"><br>
        <label for = "vice_president_name"> Nome do Vice-Presidente </label>
        <input type = "text" class = "form-control" value = "{{$candidates['vice_president_name']}}" name = "vice_president_name"><br>
        <div class = "form-group">
            <label for = "description"> Descrição</label>
            <textarea class = "form-control" rows = "3" name = "description"> {{$candidates['description']}}</textarea>
        </div>
        <button type = "submit" class = "btn btn-outline-success mx-1">Salvar</button>
        <button type = "submit" class = "btn btn-outline-danger mx-1">Cancelar</button>       
        <!-- e se eu quiser cancelar? -->
       
    </div>
</form>

@endsection