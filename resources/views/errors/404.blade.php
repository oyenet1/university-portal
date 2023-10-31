@extends('errors::minimal')

@section('title', 'Page not found')
@section('image')
<img src="{{ asset('img/svg/404.svg') }}" alt="astronaut image">
@endsection
@section('code', '404')
@section('message', 'Oops! It
seems like we
took a wrong turn. The page you requested is not available. Please navigate back to our homepage or
contact our support team for assistance.')

@section('button')
<a href="{{ route('homepage') }}" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-3 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
    <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
    </svg>
    Go back home
</a>
@endsection
