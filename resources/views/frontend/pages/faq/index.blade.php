@extends('app')
@section('contents')
@include('frontend.layouts.header_info', ['title' => 'FAQ', 'description' => 'Effortless booking, streamlined management, and a built-in health shop—on mobile.'])

    @include('frontend.pages.home.clients')
    @include('frontend.pages.features.discover')
    @include('frontend.pages.home.faq')
    @include('frontend.pages.home.cta')
@endsection
