@extends('app')
@section('contents')
@include('frontend.componants.page_title', ['page_title' => 'Events', 'description' => null])
    @include('frontend.pages.events.event_list')
@endsection
