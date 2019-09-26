@extends('layouts.template')

@section('content')
<div class="flex-center position-ref full-height">
    <!-- @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif -->
    <main role="main">
        <div class="content">
            <a href="{{ url('/product') }}">プロダクト一覧</a>
            <div class="container">
                <div id="app">
                    <top-component></top-component>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection


