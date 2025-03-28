@extends('app')
@section('contents')
@include('frontend.componants.page_title', ['page_title' => 'Events Details', 'description' => ''])
    @include('frontend.pages.events.event_details')
@endsection
