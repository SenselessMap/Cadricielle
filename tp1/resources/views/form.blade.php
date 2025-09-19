@extends('master')           
@section('title', 'Formulaire')
@section('content')
<div class="contenu">
    <div class="bienvenu">
        <h1>Add a phrog</h1>

        <form method="POST" action="/submit">
            @csrf
            <br>
            <label for="name" class="namepick">Name your phrog</label>
            <input type="text" name="name" id="name" required>
            <br>

            <p>Pick a phrog</p>
            <div class="frog-choice">
                <label>
                    <input type="radio" name="color" value="green" required hidden checked>
                    <img src="{{ asset('images/green.png') }}" alt="Green Frog" style="cursor:pointer;">
                </label>

                <label>
                    <input type="radio" name="color" value="red" hidden>
                    <img src="{{ asset('images/red.png') }}" alt="Red Frog" style="cursor:pointer;">
                </label>

                <label>
                    <input type="radio" name="color" value="blue" hidden>
                    <img src="{{ asset('images/blue.png') }}" alt="Blue Frog" style="cursor:pointer;">
                </label>
            </div>

            <br>
            <button type="submit">Add Frog</button>
        </form>
    </div>
</div>
@endsection
