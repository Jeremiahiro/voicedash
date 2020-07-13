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
                    <div class="auth-form-light bg-secondary text-left p-5 rounded-xl">
                        <h1 class="text-center text-primary">VoiceDash.co </h1>
                        <form class="pt-3" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <input type="email"
                                    class="form-control form-control-lg rounded-xl bg-light text-black @error('email') is-invalid @enderror" id="email"
                                    name="email" placeholder="Email Address" value="{{ old('email') }}" required>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="password"
                                    class="form-control form-control-lg rounded-xl bg-light text-black @error('password') is-invalid @enderror"
                                    id="password" placeholder="**********" name="password" required>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mt-3">
                                <button type="submit"
                                    class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn btn-rounded">
                                    Get Started
                                </button>
                            </div>
                            @if (Route::has('password.request'))
                            <div class="my-4 d-flex justify-content-end">
                                <a class="auth-link text-black" href="{{ route('password.request') }}">
                                    {{ __('Forgot Password?') }}
                                </a>
                            </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
@endsection
@section('footer')
    @include('partials.footer')
@endsection
@section('script')
<script src="{{ asset('frontend/js/misc.js') }}"></script>
@endsection
