@extends('header')

<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            Project Deteil
        </div>
        <div class="container">
            <div id="app">
                <project-detail-component></project-detail-component>
            </div>
        </div>

    </div>
</div>

@extends('footer')
