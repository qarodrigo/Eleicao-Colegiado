<h2> Você tem certeza que deseja deletar esta chapa? </h2>

<p> Nome: {{$candidate['name']}} </p>
<p> Descrição: {{$candidate['description']}} </p> 

<form action = " {{  route('confirmacao', $candidate['id'])  }}"  method = "POST">    
    @method('DELETE')
    @csrf
    <input type = "submit" name = "enter" value = "Desejo Apagar">
</form>

<!-- Terminar isto -->