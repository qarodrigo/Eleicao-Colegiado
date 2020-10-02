@extends('layouts.poll')

<div class = "container-fluid">
    <h1>
    @foreach($candidates as $c)
    <form>
        <label>{{$c['name']}}</label>
        <input type = "checkbox"> 
    </form>

    @endforeach
</div>


<p>

    <!-- {{$registration}} -->
    
</p>