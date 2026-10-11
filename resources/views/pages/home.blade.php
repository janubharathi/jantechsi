@extends('layouts.app')
@section('title', 'Websites, Apps & Digital Marketing in Puducherry')

@section('banner')
<section class="banner hero">
    <div class="wrap hero-grid">
        <div>
            <p class="eyebrow">IT solutions company, Puducherry</p>
            <h1>We build your business <span>online.</span></h1>
            <p class="sub">Websites, apps, marketing, SEO, content, AI video and poster design from one friendly team.</p>
            <a href="{{ route('contact') }}" class="btn gold">Start your project</a>
            <a href="{{ route('services') }}" class="btn ghost">Our services</a>
        </div>
        <div class="glass" aria-hidden="true">
            <div><b>01</b> Build<small>Websites and apps</small></div>
            <div><b>02</b> Launch<small>SEO and marketing</small></div>
            <div><b>03</b> Grow<small>Content, video, design</small></div>
        </div>
    </div>
</section>
@endsection

@section('content')
<section class="sect">
    <div class="wrap">
        <h2 class="reveal">What we do</h2>
        <p class="lead reveal">Seven services, one team, one goal: more customers for you.</p>
        <div class="grid">
            @foreach ($services as $i => $s)
            <a class="card reveal" href="{{ route('service', $s['slug']) }}">
                <span class="num">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</span>
                <h3>{{ $s['title'] }}</h3>
                <p>{{ $s['short'] }}</p>
                <span class="more">Learn more &rarr;</span>
            </a>
            @endforeach
        </div>
    </div>
</section>

<section class="sect alt">
    <div class="wrap">
        <h2 class="reveal">Why choose JanTechsi</h2>
        <div class="grid four">
            <div class="why reveal"><h3>All in one</h3><p>Development and marketing under one roof.</p></div>
            <div class="why reveal"><h3>Clear process</h3><p>Scope, timeline and price agreed upfront.</p></div>
            <div class="why reveal"><h3>Mobile first</h3><p>Everything works well on every screen.</p></div>
            <div class="why reveal"><h3>Ongoing support</h3><p>We stay with you after launch.</p></div>
        </div>
    </div>
</section>

<section class="sect">
    <div class="wrap cta reveal">
        <h2>Have a project in mind?</h2>
        <p>Tell us what you need and we will reply with next steps.</p>
        <a href="{{ route('contact') }}" class="btn gold">Contact us</a>
    </div>
</section>
@endsection
