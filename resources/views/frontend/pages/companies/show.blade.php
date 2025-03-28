@extends('app')
@section('contents')
@include('frontend.componants.page_title', ['page_title' => 'Company Profile', 'description' => null])
@include('frontend.pages.companies.single_company')
@endsection



