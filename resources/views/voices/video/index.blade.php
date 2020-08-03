@extends('layouts.app')

@section('title')
Videos
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
                <h1 class="f-28 page-title text-primary font-weight-bolder">Video Gallery</h1>
            </div>
            <div class="row grid-margin stretch-card">
                <div class="card">
                    <div class="card-body bg-gradient-light">
                        <div class="clearfix">
                            <div class="my-3 row grid-margin">
                                <div class="col-md-6 mx-auto">
                                    <p class="text-center">Select Video</p>
                                    <div class="form-group">
                                        <input type="file" id="files" class="hidden" />
                                        <label for="files" class="w-100 btn btn-outline-primary btn-rounded m-1">Choose
                                            file</label>
                                    </div>
                                    <div class="text-center">
                                        <button class="btn btn-gradient-primary btn-rounded btn-lg m-1">Upload
                                            Video</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-5 text-right">
                <button class="btn btn-gradient-primary btn-rounded btn-lg m-1">Add From Drive</button>
            </div>

            <div class="row grid-margin stretch-card">
                <div class="card">
                    <div class="card-body bg-gradient-light">
                        <div class="clearfix">
                            <h4 class="card-title float-left">Recent Videos</h4>
                            <div class="float-right">
                                <div class="search-field d-none d-md-block">
                                    <form class="d-flex align-items-center h-100" action="#">
                                        <div class="input-group">
                                            <input type="search"
                                                class="form-control bg-transparent border-solid border-dark rounded-lg"
                                                placeholder="Search">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="grid-margin stretch-card">
                            <div class="table-responsive table-striped">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="text-center font-weight-bold">Title</th>
                                            <th class="text-center">Preview</th>
                                            <th class="text-center">Size</th>
                                            <th class="text-center">Created Date</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="table text-center bg-gradient-white">
                                            <td class="text-left">
                                                <span class="text-black font-weight-bold">Lorem Ipsum </span><br />
                                                by Lorem Ipsum
                                            </td>
                                            <td>
                                                <button class="btn btn-gradient-primary">Preview</button>
                                            </td>
                                            <td> 128mb </td>
                                            <td>
                                                {{ date('d/m/Y g:i') }}
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <i class="mdi mdi-dots-vertical" data-toggle="dropdown"></i>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item">Go back</a>
                                                        <a class="dropdown-item">Delete</a>
                                                        <a class="dropdown-item">Swap</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="table text-center bg-gradient-white">
                                            <td class="text-left">
                                                <span class="text-black font-weight-bold">Lorem Ipsum </span><br />
                                                by Lorem Ipsum
                                            </td>
                                            <td>
                                                <button class="btn btn-gradient-primary">Preview</button>
                                            </td>
                                            <td> 128mb </td>
                                            <td>
                                                {{ date('d/m/Y g:i') }}
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <i class="mdi mdi-dots-vertical" data-toggle="dropdown"></i>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item">Go back</a>
                                                        <a class="dropdown-item">Delete</a>
                                                        <a class="dropdown-item">Swap</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="table text-center bg-gradient-white">
                                            <td class="text-left">
                                                <span class="text-black font-weight-bold">Lorem Ipsum </span><br />
                                                by Lorem Ipsum
                                            </td>
                                            <td>
                                                <button class="btn btn-gradient-primary">Preview</button>
                                            </td>
                                            <td> 128mb </td>
                                            <td>
                                                {{ date('d/m/Y g:i') }}
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <i class="mdi mdi-dots-vertical" data-toggle="dropdown"></i>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item">Go back</a>
                                                        <a class="dropdown-item">Delete</a>
                                                        <a class="dropdown-item">Swap</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="table text-center bg-gradient-white">
                                            <td class="text-left">
                                                <span class="text-black font-weight-bold">Lorem Ipsum </span><br />
                                                by Lorem Ipsum
                                            </td>
                                            <td>
                                                <button class="btn btn-gradient-primary">Preview</button>
                                            </td>
                                            <td> 128mb </td>
                                            <td>
                                                {{ date('d/m/Y g:i') }}
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <i class="mdi mdi-dots-vertical" data-toggle="dropdown"></i>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item">Go back</a>
                                                        <a class="dropdown-item">Delete</a>
                                                        <a class="dropdown-item">Swap</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="table text-center bg-gradient-white">
                                            <td class="text-left">
                                                <span class="text-black font-weight-bold">Lorem Ipsum </span><br />
                                                by Lorem Ipsum
                                            </td>
                                            <td>
                                                <button class="btn btn-gradient-primary">Preview</button>
                                            </td>
                                            <td> 128mb </td>
                                            <td>
                                                {{ date('d/m/Y g:i') }}
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <i class="mdi mdi-dots-vertical" data-toggle="dropdown"></i>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item">Go back</a>
                                                        <a class="dropdown-item">Delete</a>
                                                        <a class="dropdown-item">Swap</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="clearfix pb-2">
                            <h6 class="float-left">Showing 1 to 6 of 15 entries</h6>
                            <div class="float-right">
                                <i class="mdi mdi-chevron-double-left"></i>
                                <label class="badge badge-primary">1</label>
                                <i class="mdi mdi-chevron-double-right"></i>
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
