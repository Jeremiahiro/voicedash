@extends('layouts.app')
@section('style')
<link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
@endsection

@section('content')
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
            <div class="row flex-grow">
                <div class="col-lg-6 mx-auto">
                    <div class="card">
                        <div class="card-body bg-gradient-light auth-form-light p-5 rounded-xl">
                            <div class="text-left rounded-xl py-3">
                                <h1 class="text-center text-primary">
                                    <img src="{{ asset('frontend/images/logo-full.svg') }}" alt="" width="300px">
                                </h1>
                                <form method="POST" action="{{ route('password.email') }}" class="py-5">
                                    @csrf
                                    <div class="text-center py-3">
                                        <h4>Password Recovery</h4>
                                    </div>
                                    <div class="form-group">
                                        <input type="email"
                                            class="form-control rounded-xl outline-primary bg-gradient-light border border-primary @error('email') is-invalid @enderror"
                                            id="email" name="email" placeholder="Email Address"
                                            value="{{ old('email') }}" required>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="mt-3">
                                        <button type="submit"
                                            class="btn btn-gradient-primary btn-rounded btn-fw btn-lg btn-block font-weight-medium auth-form">
                                            Proceed
                                        </button>
                                    </div>

                                    <div class="mt-5 d-flex justify-content-end">
                                        <a class="btn btn-link btn-rounded btn-fw auth-form text-black"
                                            href="{{ route('login') }}">
                                            {{ __('Login') }}
                                        </a>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer')
@endsection
@section('script')
@endsection
