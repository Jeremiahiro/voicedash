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
                        <div class="text-center">
                            <h1 class="text-primary">VoiceDash.co </h1>
                            <h4>Reset Password</h4>
                        </div>
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="form-group">
                                <input type="email"
                                    class="form-control form-control-lg rounded-xl bg-light text-black @error('email') is-invalid @enderror"
                                    id="email" name="email" placeholder="Email Address" value="{{ old('email') }}"
                                    required>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="password"
                                    class="form-control form-control-lg rounded-xl bg-light text-black @error('password') is-invalid @enderror"
                                    id="password" name="password" placeholder="New Password" >
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            
                            <div class="form-group">
                                <input type="password"
                                    class="form-control form-control-lg rounded-xl bg-light text-black @error('password-confirm') is-invalid @enderror"
                                    id="password-confirm" name="password_confirmation" placeholder="Confirm New Password" 
                                    required autocomplete="new-password">
                            </div>

                            <div class="mt-3">
                                <button type="submit" class="btn btn-gradient-primary btn-rounded btn-fw btn-lg btn-block font-weight-medium auth-form">
                                    Proceed
                                </button>
                            </div>
                            <div class="my-4 d-flex justify-content-end">
                                <a class="btn btn-link btn-rounded btn-fw auth-form text-black" href="{{ route('login') }}">
                                    {{ __('Login') }}
                                </a>
                            </div>
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
