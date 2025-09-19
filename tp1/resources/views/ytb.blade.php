@extends('master')           
@section('title', 'Youtube')
@section('content')
<div class="contenu">
    <h1>Documentaire des phrogs</h1>

    <div class="video-container" style="position:relative;padding-bottom:56.25%;height:0;overflow:hidden;">
        <iframe 
            src="https://www.youtube.com/embed/abxX7P1J8I4" 
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen
            style="position:absolute;top:0;left:0;width:100%;height:100%;">
        </iframe>
    </div>
</div>
@endsection

