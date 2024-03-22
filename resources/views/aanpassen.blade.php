@extends('layout')

@section('content')
<div class="hero">
<div class="toevoegen-form">
<form action="{{ route('item.update', ['id' => $item->id]) }}" class="form_main" method="POST">
 @csrf
 @method('PUT')
 <p class="heading titel-form">Ithem Aanpassen</p>
    <div class="inputContainer">
        
    <input type="text" class="inputField" id="naamitem" placeholder="Naam Item" value="{{$item['naam']}}" name="naamitem">
    </div>
    
<div class="inputContainer">
    
    <input type="text" class="inputField" id="prijs" placeholder="Prijs" value="{{$item['prijs']}}" name="prijs">
</div>
           
<button id="button" name="toevoegen">Aanpassen</button>
<a href="/dash">Admin  dashboard</a>
   
</form>
</div>
   </div>
    
@endsection