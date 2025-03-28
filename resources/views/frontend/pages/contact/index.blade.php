@extends('app')
@section('contents')
@include('frontend.componants.page_title', ['page_title' => 'Contact Us', 'description' => null])
    @include('components.notification')
    @include('frontend.pages.contact.contact')
@endsection
