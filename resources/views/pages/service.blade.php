@extends('layouts.app')
@section('title', $service['title'])
@section('description', $service['short'])

@section('banner')
    @include('partials.banner', ['title' => $service['title'], 'sub' => $service['short']])
@endsection

@section('content')
<section class="sect">
    <div class="wrap two">
        <div class="reveal">
            <h2>About this service</h2>
            <p>{{ $service['long'] }}</p>
            <a href="{{ route('contact') }}" class="btn">Get a quote</a>
        </div>
        <div class="card reveal">
            <h3>What is included</h3>
            <ul class="ticks">
                @foreach ($service['points'] as $p)<li>{{ $p }}</li>@endforeach
            </ul>
        </div>
    </div>
</section>
@endsection
