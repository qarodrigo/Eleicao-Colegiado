@extends('layouts.login')

@section('content')
    <div class = "container-fluid">
        <div class = "row">
            <div class = "col-sm-6">
            <!-- <img class = "img-fluid user" src = "/img/user.png"> -->
            </div>
            <div class = "col-sm-6">
                
                <form action = "{{route('login')}}" method = "POST">
                    <h1>Acessar Painel Administrativo</h1>
                    @csrf
                    <div class = "form-group">
                        <h3>Entre para iniciar uma nova sessão</h3>
                        <label for ="email">Email</label>
                        <input type = "email" class = "form-control @error('email') is-invalid @enderror" name = "email" placeholder = "Email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label for ="password">Senha</label>
                        <input type = "password" class="form-control @error('password') is-invalid @enderror" name = "password" placeholder = "Senha">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <button type="submit"  class=" btn btn-success login">
                            {{ __('Login') }}
                        </button>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
