@extends('layouts.app')

@section('title')
Merge Audio
@endsection

@section('header')

@endsection


@section('content')
@include('partials.navbar')
<div class="container-fluid page-body-wrapper ">
    @include('partials.sidebar')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h1 class="f-28 page-title text-primary font-weight-bolder">Merge Audio </h1>
            </div>
            <div class="row grid-margin stretch-card">
                <div class="card">
                    <div class="card-body bg-gradient-light">
                        <div classs="clearfix">
                            <div class="form-group">
                                <input type="search" class="form-control rounded-xl outline-primary bg-gradient-light border border-primary"
                                    id="exampleInputName1" placeholder="Enter Title" />
                            </div>
                            <div class="border border-primary rounded-lg p-2 grid-margin">
                                <div class="row m-1">
                                    <div class="col-md-4">
                                        <button
                                            class="w-100 btn btn-gradient-primary btn-rounded my-2 mx-1 btn-lg py-3">Select
                                            Audio</button>
                                    </div>
                                    <div class="col-md-4">
                                        <button
                                            class="w-100 btn btn-gradient-primary btn-rounded my-2 mx-1 btn-lg py-3">Select
                                            Audio</button>
                                    </div>
                                    <div class="col-md-4">
                                        <button
                                            class="w-100 btn btn-gradient-primary btn-rounded my-2 mx-1 btn-lg py-3">Select
                                            Audio</button>
                                    </div>
                                </div>
                                <div class="row m-1">
                                    <div class="col-md-4">
                                        <button
                                            class="w-100 btn btn-gradient-primary btn-rounded my-2 mx-1 btn-lg py-3">Select
                                            Audio</button>
                                    </div>
                                    <div class="col-md-4">
                                        <button
                                            class="w-100 btn btn-gradient-primary btn-rounded my-2 mx-1 btn-lg py-3">Select
                                            Audio</button>
                                    </div>
                                    <div class="col-md-4">
                                        <button
                                            class="w-100 btn btn-gradient-primary btn-rounded my-2 mx-1 btn-lg py-3">Select
                                            Audio</button>
                                    </div>
                                </div>

                                <div class="row m-1">
                                    <div class="col-md-4">
                                        <button
                                            class="w-100 btn btn-gradient-primary btn-rounded my-2 mx-1 btn-lg py-3">Select
                                            Audio</button>
                                    </div>
                                    <div class="col-md-4">
                                        <button
                                            class="w-100 btn btn-gradient-primary btn-rounded my-2 mx-1 btn-lg py-3">Select
                                            Audio</button>
                                    </div>
                                    <div class="col-md-4">
                                        <button
                                            class="w-100 btn btn-gradient-primary btn-rounded my-2 mx-1 btn-lg py-3">Select
                                            Audio</button>
                                    </div>
                                </div>
                                <div class="row m-1">
                                    <div class="col-md-4">
                                        <button
                                            class="w-100 btn btn-gradient-primary btn-rounded my-2 mx-1 btn-lg py-3">Select
                                            Audio</button>
                                    </div>
                                    <div class="col-md-4">
                                        <button
                                            class="w-100 btn btn-gradient-primary btn-rounded my-2 mx-1 btn-lg py-3">Select
                                            Audio</button>
                                    </div>
                                    <div class="col-md-4">
                                        <button
                                            class="w-100 btn btn-gradient-primary btn-rounded my-2 mx-1 btn-lg py-3">Select
                                            Audio</button>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-3 mb-5 text-center">
                                <span class="text-black font-weight-bolder">Note: Select at least 2 audio
                                    files</span>
                            </div>


                            <div class="my-3 row grid-margin">
                                <div class="col-6 mx-auto">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <button
                                            class="w-100 btn btn-outline-secondary btn-rounded btn-lg m-1 border border-primary">Cancel</button>
                                        <button
                                            class="w-100 btn btn-gradient-primary btn-rounded btn-lg m-1">Submit</button>
                                    </div>
                                </div>
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
