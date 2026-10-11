@extends('layouts.app')
@section('title', 'Our Services')

@section('banner')
    @include('partials.banner', ['title' => 'Our Services', 'sub' => 'Everything you need to build, launch and grow online.'])
@endsection

@section('content')
<section class="sect">
    <div class="wrap grid">
        @foreach ($services as $i => $s)
        <a class="card reveal" href="{{ route('service', $s['slug']) }}">
            <span class="num">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</span>
            <h3>{{ $s['title'] }}</h3>
            <p>{{ $s['short'] }}</p>
            <span class="more">Learn more &rarr;</span>
        </a>
        @endforeach
    </div>
</section>
@endsection
