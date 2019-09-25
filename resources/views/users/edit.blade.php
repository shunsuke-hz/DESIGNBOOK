@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">プロフィール編集</div>

                <div class="panel-body">
                <form method="post" action="{{route('users.update', $user)}}">
                    {{ csrf_field() }}
                    {{ method_field('patch') }}

                    <input type="text" name="name"  value="{{ $user->name }}" />

                    <input type="email" name="email"  value="{{ $user->email }}" />

                    <input type="text" name="belonging_to"  value="{{ $user->belonging_to }}" />


                    <input type="password" name="password" />

                    <input type="password" name="password_confirmation" />

                    <button type="submit">Send</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection