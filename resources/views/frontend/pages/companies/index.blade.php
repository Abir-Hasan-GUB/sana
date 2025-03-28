@extends('app')
@section('contents')
@include('frontend.componants.page_title', ['page_title' => 'Business Directory', 'description' => null])
    @include('frontend.pages.companies.companies')
@endsection
