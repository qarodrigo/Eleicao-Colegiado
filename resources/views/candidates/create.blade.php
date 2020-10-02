@extends('adminlte::page')

@section('content')
<h1 style = "font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; text-align: center;"> Adicionar Chapa </h1>
<!-- <h3> <a href = "{{route ('chapas.index')  }}">Listagem de Chapas</a> </h3> -->
@if(Session::has('error'))
    <div class="alert alert-danger" role="alert">
            {{Session::get('error')}}
    </div>
@endif

<form action = " {{  route('chapas.store')  }}"  method = "POST">
    @csrf    
    <div class = "form-group">
        <label for = "name"> Nome da Chapa</label>
        <input type = "text" class = "form-control" placeholder = "Nome da Chapa" name = "name"><br>
        <label for = "email"> Email </label>
        <input type = "email" class = "form-control"  placeholder = "Email" name = "email">
        <small id="emailHelp" class="form-text text-muted">Adicionar email que poderá receber dúvidas em relação a chapa.</small><br>
        <label for = "president_name"> Nome do Presidente </label>
        <input type = "text" class = "form-control" placeholder = "Nome do Presidente" name = "president_name"><br>
        <label for = "vice_president_name"> Nome do Vice-Presidente </label>
        <input type = "text" placeholder = "Nome do Vice-Presidente" class = "form-control" name = "vice_president_name"><br>
        <div class = "form-group">
            <label for = "description"> Descrição</label>
            <textarea class = "form-control" placeholder = "Descrição" rows = "3" name = "description"></textarea>
        </div>
        <label for = "vice_president_name"> Adicionar arquivo </label>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name = "file">
            <label class="custom-file-label" for="inputGroupFile01">Escolher arquivo</label> <br><br>
        </div>
        <button type="submit" class="btn btn-outline-success" style = "display: block; margin-left: auto; margin-right: auto;"><i class = "fas fa-plus-square"></i>  Adicionar</button>
    </div>
</form>
@endsection