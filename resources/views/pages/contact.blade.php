@extends('layouts.app')
@section('title', 'Contact Us')

@section('banner')
    @include('partials.banner', ['title' => 'Contact Us', 'sub' => 'Tell us about your project. We reply quickly.'])
@endsection

@section('content')
<section class="sect">
    <div class="wrap two">
        <div class="reveal">
            <h2>Get in touch</h2>
            <div class="info"><b>Address</b><span>{{ config('jantechsi.contact.address') }}</span></div>
            <div class="info"><b>Phone</b><a href="tel:{{ config('jantechsi.contact.phone') }}">{{ config('jantechsi.contact.phone') }}</a></div>
            <div class="info"><b>Email</b><a href="mailto:{{ config('jantechsi.contact.email') }}">{{ config('jantechsi.contact.email') }}</a></div>
            <div class="info"><b>Website</b><span>{{ config('jantechsi.contact.site') }}</span></div>
        </div>

        <form class="card reveal" method="POST" action="{{ route('contact.send') }}">
            @csrf
            @if (session('sent'))<p class="ok" role="status">{{ session('sent') }}</p>@endif
            @if ($errors->any())<p class="err" role="alert">Please fix the highlighted fields.</p>@endif

            <label>Your name
                <input name="name" value="{{ old('name') }}" required>
                @error('name')<small class="err">{{ $message }}</small>@enderror
            </label>
            <label>Email
                <input type="email" name="email" value="{{ old('email') }}" required>
                @error('email')<small class="err">{{ $message }}</small>@enderror
            </label>
            <label>Phone (optional)
                <input name="phone" value="{{ old('phone') }}">
            </label>
            <label>Service needed
                <select name="service">
                    @foreach ($services as $s)
                        <option @selected(old('service') === $s['title'])>{{ $s['title'] }}</option>
                    @endforeach
                </select>
            </label>
            <label>Message
                <textarea name="message" rows="5" required>{{ old('message') }}</textarea>
                @error('message')<small class="err">{{ $message }}</small>@enderror
            </label>
            <button class="btn" type="submit">Send enquiry</button>
        </form>
    </div>
</section>
@endsection
