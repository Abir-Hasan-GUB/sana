@extends('app')
@section('contents')
@include('frontend.componants.page_title', ['page_title' => 'Membership', 'description' => null])
@include('frontend.pages.member.member_details')
@endsection
