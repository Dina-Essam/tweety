@extends('layouts.app')

@section('content')
    <div class="lg:flex lg:justify-between">
        <div class="lg:w-32">
            @include('sidebar-links')
        </div>
        <div class="lg:flex-1 mx-10">
            @include('tweet-box')
            <div class="border border-gray-300 rounded-lg">
                @include('timeline')
                @include('timeline')
                @include('timeline')
                @include('timeline')
            </div>
        </div>
        <div class="lg:w-1/6 bg-blue-100 rounded-lg p-4">
            @include('friends-list')
        </div>
    </div>
@endsection
