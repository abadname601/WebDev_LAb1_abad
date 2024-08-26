@extends('layout.app')

@section('title', 'Welcome to My Dream Destination Blog!')

@section('content')
    <h1>"Welcome to my Dream Destinations"</h1>
    <h2> Korea Edition </h2>
    <p>Join me as I share the places I dream of visiting. While I may not be a seasoned traveler, I love exploring the idea of new adventures! 같이 탐험하자, 어때?</p>
   
    <div class="card-container">
        <div class="card">
            <img src="{{ asset('images/background.jfif') }}" alt="About Me">
            <h3><a href="{{ url('/about') }}">About Me</a></h3>
            <p>Get to know me and my dreams!</p>
        </div>
        <div class="card">
            <img src="{{ asset('images/background.jfif') }}" alt="Explore">
            <h3><a href="{{ url('/content') }}">Dream Places</a></h3>
            <p>Discover my dream places in korea!</p>
        </div>
        <div class="card">
            <img src="{{ asset('images/background.jfif') }}" alt="Tasty Eats">
            <h3><a href="{{ url('/content') }}">Food Dreams</a></h3>
            <p>Check out these delicious foods!</p>
        </div>
    </div>
@endsection
