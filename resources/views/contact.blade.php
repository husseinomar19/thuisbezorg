@extends('layout')

@section('content')
<div class="hero">
   <h2>contact pagina</h2>
   <form class="form" action="{{ route('contact') }}" method="post">
      @csrf
    <div class="title">Contact us</div>
    <input name="name" type="text" placeholder="Naam" class="input" required>
    <input name="email" type="text" placeholder="Email" class="input" required>
    <textarea placeholder="U bericht" name="message" required></textarea>
     
    <button name="verzenden">Verzenden</button>
   </form>
</div>
   
@endsection