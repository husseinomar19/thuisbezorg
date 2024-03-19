@extends('layout')

@section('content')
<div class="hero">
<div class="toevoegen-form">
<form action="/admin" class="form_main" method="post">
 @csrf<p class="heading titel-form">Voeg Ithem Toe</p>
    <div class="inputContainer">
        
    <input type="text" class="inputField" id="naamitem" placeholder="Naam Item">
    </div>
    
<div class="inputContainer">
    
    <input type="text" class="inputField" id="prijs" placeholder="Prijs">
</div>
<div class="inputContainer">
    
    <input type="file" class="inputField" id="afbeelding" placeholder="Item  afbeelding">
</div>
              
           
<button id="button" name="toevoegen">Toevoegen</button>
<a href="/dash">Admin  dashboard</a>
   
</form>
</div>
   </div>
    
@endsection