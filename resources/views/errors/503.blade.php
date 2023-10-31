@extends('errors::minimal')

@section('title', 'Server Under Maintenance')
@section('image')
<img src="{{ asset('img/svg/503.svg') }}" class="min-w-[200px] block mx-auto object-cover" alt="astronaut image">
@endsection
@section('code', '503')
@section('message', 'Our website is currently undergoing maintenance. We\'ll be back online soon! Thank you for your patience')
