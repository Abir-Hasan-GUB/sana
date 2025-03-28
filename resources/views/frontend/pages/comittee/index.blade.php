@extends('app')
@section('contents')
@include('frontend.componants.page_title', ['page_title' => 'Committee', 'description' => null])
    @include('frontend.pages.comittee.teams')
@endsection
