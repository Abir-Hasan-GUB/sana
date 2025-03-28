@extends('app')
@section('contents')
@include('frontend.componants.page_title', ['page_title' => 'About us', 'description' => 'ABBC is the peak body promoting bilateral trade between Australia and Bangladesh.'])
    @include('frontend.pages.about.about')
    @include('frontend.pages.about.four_keys')
@endsection
