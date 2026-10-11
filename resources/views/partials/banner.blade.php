<section class="banner">
    <div class="wrap">
        <p class="crumb"><a href="{{ route('home') }}">Home</a> / {{ $title }}</p>
        <h1>{{ $title }}</h1>
        @isset($sub)<p class="sub">{{ $sub }}</p>@endisset
    </div>
</section>
