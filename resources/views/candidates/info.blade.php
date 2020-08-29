<h1>Informações</h1>


<p> Nome: {{$candidate['name']}} </p>
<p> Email: {{$candidate['email']}} </p> 
<p> Nome do Presidente: {{$candidate['president_name']}} </p> 
<p> Nome do Vice-Presidente: {{$candidate['vice_president_name']}} </p> 
<p> Descrição: {{$candidate['description']}} </p> 


<p> <a href=" {{route ('chapas.index')}}"> Voltar para a pagina principal</a><p>

<p> <a href=" {{route ('chapas.edit', $candidate['id'])}}"> Editar</a><p>

<form action="{{ route ('chapas.destroy', $candidate['id'])}}" method = "POST">
        @csrf
        @method('DELETE')
</form>
        <input type = "submit" value = "Apagar">