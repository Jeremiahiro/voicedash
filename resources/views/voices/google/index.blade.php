@extends('layouts.app')

@section('title')
Google Wavenet
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
                <h1 class="f-28 page-title text-primary font-weight-bolder">Text to Speech Editor</h1>
            </div>
            <div class="row grid-margin stretch-card">
                <div class="card">
                    <div class="card-body bg-gradient-light">
                        <div class="clearfix">
                            <div class="form-group">
                                <input type="search"
                                    class="form-control rounded-xl outline-primary bg-gradient-light border border-primary"
                                    id="exampleInputName1" placeholder="Enter Project Name">
                            </div>
                            <div class="border border-primary rounded-lg p-2 grid-margin">
                                <div class="row m-1">
                                    <div class="col-md-3">
                                        <button class="w-100 btn btn-outline-primary btn-rounded m-1">Select
                                            Emphasis</button>
                                    </div>
                                    <div class="col-md-3">
                                        <button class="w-100 btn btn-outline-primary btn-rounded m-1">Select Say
                                            As</button>
                                    </div>
                                    <div class="col-md-3">
                                        <button class="w-100 btn btn-outline-primary btn-rounded m-1">Select
                                            Break</button>
                                    </div>
                                    <div class="col-md-3">
                                        <button class="w-100 btn btn-outline-primary btn-rounded m-1">Select
                                            Pitch</button>
                                    </div>
                                </div>
                                <div class="row m-1">
                                    <div class="col-md-3">
                                        <button class="w-100 btn btn-outline-primary btn-rounded m-1">Select
                                            Speed</button>
                                    </div>
                                    <div class="col-md-3">
                                        <button class="w-100 btn btn-outline-primary btn-rounded m-1">Select
                                            Audio</button>
                                    </div>
                                    <div class="col-md-3">
                                        <button class="w-100 btn btn-outline-primary btn-rounded m-1">Paragraph</button>
                                    </div>
                                    <div class="col-md-3">
                                        <button class="w-100 btn btn-outline-primary btn-rounded m-1">Sentence</button>
                                    </div>
                                </div>
                            </div>

                            <div class="my-3">
                                <div class="form-group">
                                    <textarea class="form-control rounded border border-primary bg-gradient-light"
                                        id="exampleTextarea1" rows="15" placeholder="Composer an Epic"></textarea>
                                </div>
                            </div>

                            <div class="border border-outline-primary rounded-lg px-2 py-5 grid-margin">
                                <div class="row m-1">
                                    <div class="col-md-3">
                                        <button class="w-100 btn btn-outline-primary btn-rounded m-1">English
                                            US</button>
                                    </div>
                                    <div class="col-md-3">
                                        <input list="browsers" name="browser" id="browser"
                                            class="btn btn-outline-primary btn-rounded w-100 m-2"
                                            placeholder="Please Choose">

                                        <datalist id="browsers">
                                            <option value="Edge">
                                            <option value="Firefox">
                                            <option value="Chrome">
                                            <option value="Opera">
                                            <option value="Safari">
                                        </datalist>

                                    </div>
                                    <div class="col-md-3">
                                        <button class="w-100 btn btn-outline-primary btn-rounded m-1">Arabic</button>
                                    </div>
                                    <div class="col-md-3">
                                        <button class="w-100 btn btn-primary btn-rounded m-1">Transalate</button>
                                    </div>
                                </div>

                                <div class="row m-1">
                                    <div class="col-md-3">
                                        <input type="text" class="w-100 btn btn-outline-primary btn-rounded m-1"
                                            placeholder="Enter URL">
                                    </div>
                                    <div class="col-md-3 text-center">
                                        <button class="btn text-center w-100 m-1" disabled>OR</button>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="file" id="files" class="hidden" />
                                        <label for="files" class="w-100 btn btn-outline-primary btn-rounded m-1">Choose
                                            file</label>
                                    </div>
                                    <div class="col-md-3">
                                        <button class="w-100 btn btn-primary btn-rounded m-1">Fetch Text</button>
                                    </div>
                                </div>
                            </div>

                            <div class="my-3 row grid-margin">
                                <div class="col-md-6 mx-auto">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <button
                                            class="w-100 btn btn-outline-secondary btn-rounded btn-lg m-1">Cancel</button>
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
                        <div class="clearfix">
                            <h4 class="card-title float-left">Recent Create Audio List</h4>
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
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="text-center font-weight-bold">Title</th>
                                            <th class="text-center">Preview</th>
                                            <th class="text-center">Version</th>
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
                                                <audio controls preload="metadata">
                                                    <source src="https://www.w3schools.com/html/horse.ogg"
                                                        type="audio/ogg">
                                                </audio>
                                            </td>
                                            <td> 4.2 </td>
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
                                                <audio controls preload="metadata">
                                                    <source src="https://www.w3schools.com/html/horse.ogg"
                                                        type="audio/ogg">
                                                </audio>
                                            </td>
                                            <td> 4.2 </td>
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
                                                <audio controls preload="metadata">
                                                    <source src="https://www.w3schools.com/html/horse.ogg"
                                                        type="audio/ogg">
                                                </audio>
                                            </td>
                                            <td> 4.2 </td>
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
                                                <audio controls preload="metadata">
                                                    <source src="https://www.w3schools.com/html/horse.ogg"
                                                        type="audio/ogg">
                                                </audio>
                                            </td>
                                            <td> 4.2 </td>
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
                                                <audio controls preload="metadata">
                                                    <source src="https://www.w3schools.com/html/horse.ogg"
                                                        type="audio/ogg">
                                                </audio>
                                            </td>
                                            <td> 4.2 </td>
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
                                                <audio controls preload="metadata">
                                                    <source src="https://www.w3schools.com/html/horse.ogg"
                                                        type="audio/ogg">
                                                </audio>
                                            </td>
                                            <td> 4.2 </td>
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
