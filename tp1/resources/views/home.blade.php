@extends('master')           
@section('title', 'Exercice 1')
@section('content')
<div class="contenu">
    <div class="bienvenu">
        <h1>Bienvenu sur mon site de grenouilles!</h1>
        <img src="{{ asset('images/phrog.png') }}" alt="Phrog" class="logo">

        @if(session('name') && session('color'))
            <div class="new-frog" style="margin-top:20px;">
                <h2>A new phrog: {{ session('name') }}</h2>
                <img src="{{ asset('images/' . session('color') . '.png') }}" 
                     alt="{{ session('color') }} frog" 
                     style="width:150px;">
            </div>
        @endif
    </div>
</div>
@endsection
