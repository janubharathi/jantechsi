@extends('layouts.app')
@section('title', 'About Us')

@section('banner')
    @include('partials.banner', ['title' => 'About Us', 'sub' => 'A software and digital studio based in Puducherry.'])
@endsection

@section('content')
<section class="sect">
    <div class="wrap two">
        <div class="reveal">
            <h2>Who we are</h2>
            <p>JanTechsi Software Solutions brings software development and digital marketing together. The team that builds your website or app also helps you promote it, so your message stays consistent from code to campaign.</p>
            <p>We keep things simple: a clear scope, honest timelines and regular updates while we work.</p>
        </div>
        <div class="card reveal">
            <h3>Our logo</h3>
            <p>The "J" stands for Jan. Its circuit lines and glowing nodes stand for Tech, the technology we use to grow your business.</p>
        </div>
    </div>
</section>

<section class="sect alt">
    <div class="wrap">
        <h2 class="reveal">What we value</h2>
        <div class="grid">
            <div class="why reveal"><h3>Clear communication</h3><p>You always know what is happening and what comes next.</p></div>
            <div class="why reveal"><h3>Results that matter</h3><p>Every piece of work ties back to your business goals.</p></div>
            <div class="why reveal"><h3>Long-term support</h3><p>We stay after launch to maintain and improve.</p></div>
        </div>
    </div>
</section>
@endsection
