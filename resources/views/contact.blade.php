@extends('layout')

@section('content')
<div class="hero">
   <h2>contact pagina</h2>
   <form class="form">
    <div class="title">Contact us</div>
    <input type="text" placeholder="Naam" class="input">
    <input type="text" placeholder="Email" class="input">
    <textarea placeholder="U bericht"></textarea>
     
    <button>Verzenden</button>
   </form>
</div>
   
@endsection