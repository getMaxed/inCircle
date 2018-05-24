@extends('layouts.app')

@section('content')
    <div class="container">
        {{ $user->username }}

        @if (Auth::user()->isNotTheUser($user))
            @if(Auth::user()->isFollowing($user))
                <a href="#">Unfollow</a>
            @else
                <a href="#">Follow</a>
            @endif
        @endif
    </div>
@endsection