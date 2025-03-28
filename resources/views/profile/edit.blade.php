@extends('dashboard')

@section('contents')

<div class="container">
    <h2 class="fw-semibold text-dark">{{ __('Profile') }}</h2>

    <div class="row mt-4 g-4">
        <div class="col-md-6">
            <div class="p-4 bg-white shadow rounded">
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>

        <div class="col-md-6">
            <div class="p-4 bg-white shadow rounded">
                @include('profile.partials.update-password-form')
            </div>
        </div>

        <div class="col-md-6">
            <div class="p-4 bg-white shadow rounded">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</div>
@endsection
