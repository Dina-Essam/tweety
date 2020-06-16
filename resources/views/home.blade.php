@extends('layouts.app')

@section('content')
    <div class="lg:flex lg:justify-between">
        <div class="lg:w-32">
            @include('sidebar-links')
        </div>
        <div class="lg:flex-1 mx-10">
            @include('tweet-box')
            <div class="border border-gray-300 rounded-lg">
                @foreach($tweets as $tweet)
                    @include('timeline')
                @endforeach
            </div>
        </div>
        <div class="lg:w-1/6">
            @include('friends-list')
        </div>
    </div>
@endsection
