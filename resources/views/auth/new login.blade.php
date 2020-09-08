@extends('layouts.login')


@section('content')

<div class = "container-fluid">
    <div class = "row content"> 
        <div class = "col-6 col-md-6">
            
        </div>
        <div class = "col-6 col-md-6">
            <form method = "POST" action = "{{ route ('login') }}">
                <div class = "form-group">
                    <label for = "name">Email</label>
                    <input type = "email" class = "form-control" name = "email" placeholder = "Seu Email"></input>
                    <label for = "name">Senha</label>
                    <input type = "password" class = "form-control" name = "password" placeholder = "Sua Senha"></input>
                    <br><button type = "submit" class = "btn btn-outline-success"> Entrar</button>
                </div>    
            </form>
        </div>
    </div>
</div>

@endsection