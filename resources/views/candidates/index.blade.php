@extends('adminlte::page')


@section('content')
<h1 style = "font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; text-align:center"> Chapas Cadastradas </h1><br>

@if(count($candidates)=== 0)
    <h3 style = "font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; text-align:center; margin-top: 150px;"> Nenhuma chapa cadastrada ainda <i class="far fa-frown-open"></i>  </h3>
    <a href = "chapas/create"><button class  = "btn btn-success" style = "display: block; margin-left: auto; margin-right: auto;">Cadastrar Chapa</button></a>
@endif

<!-- @if(Session::has('success'))
    <div class="alert alert-success" id = "sucess" role="alert">
            {{Session::get('success')}}
    </div>
@endif -->

<ul class = "list-group">
@foreach ($candidates as $c)
    
   <li class = "list-group-item">
        <p><a class="btn btn-success btn-lg btn-block" data-toggle="collapse" href="{{'#collapseExample'.$c['id']}}" role="button" aria-expanded="false" aria-controls="collapseExample">
        {{$c['name']}}  
        </a></p>
        <div class="collapse" id="{{'collapseExample'.$c['id']}}">
            <div class="card card-body">
                Nome da Chapa:<p>{{$c['name']}}</p><br>
                Email: <p>{{$c['email']}}</p><br>
                Nome do Presidente: <p>{{$c['president_name']}}</p><br>
                Nome do Vice-Presidente: <p>{{$c['vice_president_name']}}</p><br>
                Descrição: <p>{{$c['description']}}</p><br>
                <div class = "row">
                    <a class = "mx-2" href = "{{route ('chapas.edit', $c['id'])}}"><button type = "button" class = "btn btn-dark"> Editar </button></a>    
                    <form class = "mx-2" action="{{ route ('chapas.destroy', $c['id'])}}" method = "POST">
                        @csrf
                        @method('DELETE')
                        <button type = "submit" class = "btn btn-danger">Apagar</button>
                    </form>
                </div>
            </div>  
        </div>
  
    </li>


</ul>

@endforeach



@endsection