@extends('layouts.app')

@section('title')
Create Video
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
                <h1 class="f-28 page-title text-primary font-weight-bolder">Voice to Video </h1>
            </div>
            <div class="text-right mb-3">
                <a href="{{ route('video.index') }}" class="btn btn-primary">Video Created Videos</a>
            </div>
            <div class="row grid-margin stretch-card">
                <div class="card">
                    <div class="card-body bg-gradient-light">
                        <div classs="clearfix">
                            <div class="form-group my-5">
                                <input type="search" 
                                class="form-control rounded-xl outline-primary bg-gradient-light border border-primary"
                                    id="exampleInputName1" placeholder="Enter Title" />
                            </div>
                            <div class="p-2 grid-margin">
                                <div class="row m-1">
                                    <div class="col-md-4">
                                        <button
                                            class="w-100 btn btn-gradient-primary btn-rounded my-2 mx-1 btn-lg py-3">Select
                                            Video</button>
                                    </div>
                                    <div class="col-md-4">
                                        <button
                                            class="w-100 btn btn-gradient-primary btn-rounded my-2 mx-1 btn-lg py-3">Select
                                            Video</button>
                                    </div>
                                    <div class="col-md-4">
                                        <button
                                            class="w-100 btn btn-gradient-primary btn-rounded my-2 mx-1 btn-lg py-3">Select
                                            Video</button>
                                    </div>
                                </div>
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

            <div class="row grid-margin stretch-card">
                <div class="card">
                    <div class="card-body bg-gradient-light">
                        <div classs="clearfix">

                            <div class="text-center py-5">
                                <div class="py-3">
                                    <h3>Audio Preview</h3>
                                    <audio controls preload="metadata">
                                        <source src="https://www.w3schools.com/html/horse.ogg" type="audio/ogg">
                                    </audio>
                                </div>
                                <div class="py-3">
                                    <h3>Video Preview</h3>
                                    <video width="360" height="280" controls>
                                        <source src="movie.mp4" type="video/mp4">
                                        <source src="movie.ogg" type="video/ogg">
                                        Your browser does not support the video tag.
                                    </video>
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
