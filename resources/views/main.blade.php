@extends('layouts.webfolio')
@section('content')

<div class="hero">
    <video autoplay muted loop playsinline>
        <source src="{{ asset('videos/background.mp4') }}" type="video/mp4">
    </video>

    <div class="overlay"></div>  <!-- ← 半透明の黒いレイヤー -->

    <div class="hero-text">
        <p class="no-margin p1">世界を変える仕組みを創る<p>
    </div>
</div>

<section class="about-us">
    <p>ABOUT US</p>
</section>
@endsection