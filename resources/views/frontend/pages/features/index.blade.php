@extends('app')
@section('contents')
@include('frontend.layouts.header_info', ['title' => 'Features', 'description' => 'Effortless booking, streamlined management, and a built-in health shop—on mobile.'])

    @include('frontend.pages.home.clients')
    @include('frontend.pages.features.discover')
    @include('frontend.pages.features.how_it_works')
@endsection
