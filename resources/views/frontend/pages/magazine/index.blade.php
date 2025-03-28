@extends('app')
@section('contents')
@include('frontend.componants.page_title', ['page_title' => 'Magazine', 'description' => null])
    @include('components.notification')
    @include('frontend.pages.magazine.magazine')
@endsection
