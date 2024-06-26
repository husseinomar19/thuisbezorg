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

            
          @if(count ($menus) > 0 )
            @foreach ($menus as $item)
            <div class="col-md-3">
               <div class="grid-item mb-4">
                  <div class="card">
                     <img src="\asset\img\foto1.jpg" alt="">
                     <h2 class="py-2 text-center">{{$item['naam']}}</h2>
                     <div class="d-flex justify-content-between align-items-center">
                     <p class="text-dark">{{$item['prijs']}}</p>
                     <a class="text-danger" href="{{ route('verwijderen', ['id' => $item->id]) }}">Verwijderen</a>
                     <a href="{{ route('aanpassen', ['id' => $item->id]) }}">Aanpassen</a>
                     </div>
                  </div>
               </div>
            </div>
            @endforeach
            @else
            <p class="text-dark">Geen menus beschikbaar.</p> 
            @endif
           
          



          
         </div>
      </div>

    
@endsection