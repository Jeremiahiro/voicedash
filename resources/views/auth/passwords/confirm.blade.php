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
                                <form method="POST" action="{{ route('password.confirm') }}" class="py-5">
                                    @csrf
                                    <div class="text-center py-3">
                                        <h4>Confirm Password</h4>
                                    </div>
                                    <div class="form-group">
                                        <input type="password"
                                            class="form-control form-control-lg rounded-xl bg-light text-black @error('password') is-invalid @enderror"
                                            id="password" name="password" placeholder="Password"
                                            required>
                                        @error('password')
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
