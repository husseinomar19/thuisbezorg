@extends('layout')

@section('content')
<?php
session_start();

// Controleer of de admin is ingelogd, anders doorsturen naar het inlogscherm
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] != true) {
    header('location: /admin');
    exit; // Stop de verdere uitvoering van de pagina
}
?>
   <div class="hero">
      <div class="dashborad">
         <a href="/toevoegen">Toevoegen</a>
         <a href="/up-date">Menu aanpassen</a> 
         <a href="/massage">Berichten</a> 
      </div>

      <div class="massage">

      </div>
     
   </div>


    
@endsection