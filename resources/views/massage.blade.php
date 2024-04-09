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

      <div class="container">
         <div class="row mt-3">

            
          @if(count ($massage) > 0 )
            @foreach ($massage as $item)
            <div class="massage">
                <p style="color:black">Naam : {{$item->name}}</p>
                <p style="color:black">Email : {{$item->email}}</p>
                <p style="color:black">Massage : {{$item->massage}}</p>
            </div>
            @endforeach
            @else
            <p class="text-dark">Geen massage beschikbaar.</p> 
            @endif
           
          




         </div>
      </div>
    
@endsection