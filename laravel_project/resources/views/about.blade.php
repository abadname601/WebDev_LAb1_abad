@extends('layout.app')

@section('title', 'About Me')

@section('content')
    <div class="about-section">
        <div class="about-text">
            <h1 style= "text-align:left">About Me 나에 대해</h1>
            <p>           Hi! I’m Angela, a 3rd year I.T student dreaming to travel the world and while I’m not a traveler, I have a fascination with discovering new places and cultures!
            It's always been my dream to visit Korea because when I started to like K-dramas,
            It influenced me to be interested in their culture, their foods, language, and the places there.</p>
     <br>     <p>  I also tried to learn Hangul back then, but now I've forgotten it. Fun fact about the name of the website, "JustMe 젤", is that 젤 (Gel) is actually my nickname, and when you spell my name in Korean, it's 안젤라 (Angela).</p>
      <br>      <p>I love daydreaming about the places I’d like to visit someday. It’s all about the experiences, even if they’re just in my imagination!</p>
        </div>
        <div class="about-image">
            <img src="{{ asset('images/angela.jpg') }}" alt="Angela">
        </div>
    </div>
    <h2 style= "text-align:left"> My All time favorite k-dramas... </h2>
    <div class="card-container">
      
        <div class="card">
            <img src="{{ asset('images/goblin.jpg') }}" alt="K-drama1">
            <h3>Goblin</h3>
        </div>
        <div class="card">
            <img src="{{ asset('images/itaewon.jpg') }}" alt="K-drama2">
            <h3>Itaewon Class</h3>
        </div>
        <div class="card">
            <img src="{{ asset('images/cloy.jpg') }}" alt="K-drama3">
            <h3>Crash Landing On You</h3>
        </div>
    </div>
@endsection
