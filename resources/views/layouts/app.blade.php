<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', config('jantechsi.name')) | {{ config('jantechsi.name') }}</title>
    <meta name="description" content="@yield('description', 'JanTechsi Software Solutions: website development, app development, digital marketing, SEO, content creation, AI video and poster design in Puducherry.')">
    <link rel="icon" href="{{ asset('images/logo.svg') }}" type="image/svg+xml">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800&display=swap">
    <link rel="stylesheet" href="{{ asset('css/site.css') }}">
    <script>document.documentElement.classList.add('js')</script>
</head>
<body>
    {{-- HEADER --}}
    <header class="site-header">
        <div class="wrap bar">
            @include('partials.logo')
            <button class="menu-btn" aria-label="Menu" aria-expanded="false" aria-controls="nav">&#9776;</button>
            <nav id="nav" aria-label="Main">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'on' : '' }}">Home</a>
                <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'on' : '' }}">About</a>
                <a href="{{ route('services') }}" class="{{ request()->routeIs('services', 'service') ? 'on' : '' }}">Services</a>
                <a href="{{ route('contact') }}" class="btn small">Contact</a>
            </nav>
        </div>
    </header>

    {{-- BANNER --}}
    @yield('banner')

    {{-- BODY --}}
    <main>@yield('content')</main>

    {{-- FOOTER --}}
    <footer class="site-footer">
        <div class="wrap foot-grid">
            <div>
                @include('partials.logo')
                <p>{{ config('jantechsi.tagline') }} </br>  Websites, apps and marketing for growing businesses.</p>
            </div>
            <div>
                <h4>Pages</h4>
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('about') }}">About</a>
                <a href="{{ route('services') }}">Services</a>
                <a href="{{ route('contact') }}">Contact</a>
            </div>
            <div>
                <h4>Services</h4>
                @foreach (config('jantechsi.services') as $s)
                    <a href="{{ route('service', $s['slug']) }}">{{ $s['title'] }}</a>
                @endforeach
            </div>
            <div>
                <h4>Contact</h4>
                <p>{{ config('jantechsi.contact.address') }}</p>
                <a href="tel:{{ config('jantechsi.contact.phone') }}">{{ config('jantechsi.contact.phone') }}</a>
                <a href="mailto:{{ config('jantechsi.contact.email') }}">{{ config('jantechsi.contact.email') }}</a>
                <p>{{ config('jantechsi.contact.site') }}</p>
            </div>
        </div>
        <div class="copy">&copy; {{ date('Y') }} {{ config('jantechsi.name') }}. All rights reserved.</div>
    </footer>
    <script src="{{ asset('js/site.js') }}" defer></script>
</body>
</html>
