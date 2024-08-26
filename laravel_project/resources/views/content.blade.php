@extends('layout.app')

@section('title', 'Dream Destinations!')

@section('content')
    <h1 style="text-align:left">My Dream Destinations 꿈의 목적지</h1>
    
    <div class="destination-card-container">
        <div class="destination-card">
            <img src="{{ asset('images/seoul.jfif') }}" alt="Seoul">
            <h3>Seoul</h3>
            <p>Seoul is on my mind! I dream of experiencing its vibrant culture and delicious food someday.</p>
        </div>
        <div class="destination-card">
            <img src="{{ asset('images/busan2.jpg') }}" alt="Busan">
            <h3>Busan</h3>
            <p>Busan seems like a great place to relax by the beach and soak up the local vibes!</p>
        </div>
        <div class="destination-card">
            <img src="{{ asset('images/incheon.jfif') }}" alt="Incheon">
            <h3>Incheon</h3>
            <p>Incheon has so much more than just an airport—it's definitely on my wishlist!</p>
        </div>
    </div>
    <br>
    <p style="text-align:center;font-size:20px;color:#666666;"> Lets explore together shall we? 같이 탐험하자, 어때? </p>
<br>
<br>
    <h1 style="text-align:left">Let's eat! or should I say Meogja (먹자)</h1>

    <div class="destination-card-container">
        <div class="destination-card">
            <img src="{{ asset('images/tokboki.jfif') }}" alt="tokboki">
            <h3>Tteokbokki (떡볶이)</h3>
            <p>Stir-fried rice cakes in a spicy and sweet gochujang sauce, often served with fish cakes, boiled eggs, and scallions.</p>
        </div>
        <div class="destination-card">
            <img src="{{ asset('images/galbi.jfif') }}" alt="galbi">
            <h3>Galbi (갈비)</h3>
            <p>Marinated short ribs, either grilled or braised. It’s a flavorful and tender dish, often served with rice and side dishes.</p>
        </div>
        <div class="destination-card">
            <img src="{{ asset('images/hotteok.jfif') }}" alt="hotteok">
            <h3>Hotteok (호떡)</h3>
            <p>A popular street food, these are sweet pancakes filled with sugar, nuts, and cinnamon, then fried until crispy on the outside and gooey inside</p>
        </div>
    </div>
    
@endsection

 