@extends('layout')

@section('content')
<?php
session_start();
?>
<?php

if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] == true) {
    // Voer de gewenste acties uit als de admin is ingelogd
} else {
    header('location: /admin');
    exit; // Stop de verdere uitvoering van de pagina
}
?>
<div class="hero">
<div class="toevoegen-form">
<form action="{{ route('item.store') }}" class="form_main" method="post">
 @csrf<p class="heading titel-form">Voeg Ithem Toe</p>
    <div class="inputContainer">
        
    <input type="text" class="inputField" id="naamitem" placeholder="Naam Item" name="naamitem" required/>
    </div>
    
<div class="inputContainer">
    
    <input type="text" class="inputField" id="prijs" placeholder="Prijs"  name="prijs" required/>
</div>
<!-- <div class="inputContainer">
    
    <input type="file" class="inputField" id="afbeelding" placeholder="Item  afbeelding" name="afbeelding"/>
</div> -->
              
           
<button id="button" name="toevoegen">Toevoegen</button>
<a href="/dash">Admin  dashboard</a>
   
</form>
</div>
   </div>
    
@endsection