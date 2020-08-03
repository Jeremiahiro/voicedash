@extends('layouts.app')

@section('title')
Homepage   
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
                <h1 class="f-28 page-title text-primary font-weight-bolder">
                    <span class="page-title-icon bg-gradient-primary text-white mr-2">
                        <i class="mdi mdi-home"></i>
                    </span>
                    Dashboard
                </h1>
            </div>
            <div class="row my-1">
                <div class="col-md-4">
                    <div class="my-1 py-2 card rounded-xl bg-gradient-light text-primary">
                        <div class="card-body p-0 d-flex px-2 align-items-center">
                            <h1 class="" style="font-size: 50px;">
                                <i class="mdi mdi-microphone-variant"></i> 11
                            </h1>
                            <h4 class="text-dark">Audio Generated</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="my-1 py-2 card rounded-xl bg-gradient-light text-primary">
                        <div class="card-body p-0 d-flex px-2 align-items-center">
                            <h1 class="" style="font-size: 50px;">
                                <i class="mdi mdi-account-multiple"></i> 11
                            </h1>
                            <h4 class="text-dark">Subusers</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="my-1 py-2 card rounded-xl bg-gradient-light text-primary">
                        <div class="card-body p-0 d-flex px-2 align-items-center">
                            <h1 class="" style="font-size: 50px;">
                                <i class="mdi mdi-play-box-outline"></i> 11
                            </h1>
                            <h4 class="text-dark">Video Created</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row my-5">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body bg-gradient-light ">
                            <div class="clearfix">
                                <h4 class="card-title float-left">Amazon Audio List</h4>
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
                                                <th class="text font-weight-bold">Title</th>
                                                <th class="text">Preview</th>
                                                <th class="text">Created Date</th>
                                                <th class="text">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="table-primary text-center">
                                                <td class="text-left">
                                                    <span class="text-black font-weight-bold">Lorem Ipsum </span><br />
                                                    by Lorem Ipsum
                                                </td>
                                                <td>
                                                    <i class="mdi mdi-play text-primary icon-lg"></i>
                                                </td>
                                                <td> 01-07-2020 </td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-gradient-primary">Download</button>
                                                </td>
                                            </tr>
                                            <tr class="table-primary text-center">
                                                <td class="text-left">
                                                    <span class="text-black font-weight-bold">Lorem Ipsum </span><br />
                                                    by Lorem Ipsum
                                                </td>
                                                <td>
                                                    <i class="mdi mdi-play text-primary icon-lg"></i>
                                                </td>
                                                <td> 01-07-2020 </td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-gradient-primary">Download</button>
                                                </td>
                                            </tr>
                                            <tr class="table-primary text-center">
                                                <td class="text-left">
                                                    <span class="text-black font-weight-bold">Lorem Ipsum </span><br />
                                                    by Lorem Ipsum
                                                </td>
                                                <td>
                                                    <i class="mdi mdi-play text-primary icon-lg"></i>
                                                </td>
                                                <td> 01-07-2020 </td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-gradient-primary">Download</button>
                                                </td>
                                            </tr>
                                            <tr class="table-primary text-center">
                                                <td class="text-left">
                                                    <span class="text-black font-weight-bold">Lorem Ipsum </span><br />
                                                    by Lorem Ipsum
                                                </td>
                                                <td>
                                                    <i class="mdi mdi-play text-primary icon-lg"></i>
                                                </td>
                                                <td> 01-07-2020 </td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-gradient-primary">Download</button>
                                                </td>
                                            </tr>
                                            <tr class="table-primary text-center">
                                                <td class="text-left">
                                                    <span class="text-black font-weight-bold">Lorem Ipsum </span><br />
                                                    by Lorem Ipsum
                                                </td>
                                                <td>
                                                    <i class="mdi mdi-play text-primary icon-lg"></i>
                                                </td>
                                                <td> 01-07-2020 </td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-gradient-primary">Download</button>
                                                </td>
                                            </tr>
                                            <tr class="table-primary text-center">
                                                <td class="text-left">
                                                    <span class="text-black font-weight-bold">Lorem Ipsum </span><br />
                                                    by Lorem Ipsum
                                                </td>
                                                <td>
                                                    <i class="mdi mdi-play text-primary icon-lg"></i>
                                                </td>
                                                <td> 01-07-2020 </td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-gradient-primary">Download</button>
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
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body bg-gradient-light ">
                            <div class="clearfix">
                                <h4 class="card-title float-left">Google Audio List</h4>
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
                                                <th class="text font-weight-bold">Title</th>
                                                <th class="text">Preview</th>
                                                <th class="text">Created Date</th>
                                                <th class="text">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="table-primary text-center">
                                                <td class="text-left">
                                                    <span class="text-black font-weight-bold">Lorem Ipsum </span><br />
                                                    by Lorem Ipsum
                                                </td>
                                                <td>
                                                    <i class="mdi mdi-play text-primary icon-lg"></i>
                                                </td>
                                                <td> 01-07-2020 </td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-gradient-primary">Download</button>
                                                </td>
                                            </tr>
                                            <tr class="table-primary text-center">
                                                <td class="text-left">
                                                    <span class="text-black font-weight-bold">Lorem Ipsum </span><br />
                                                    by Lorem Ipsum
                                                </td>
                                                <td>
                                                    <i class="mdi mdi-play text-primary icon-lg"></i>
                                                </td>
                                                <td> 01-07-2020 </td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-gradient-primary">Download</button>
                                                </td>
                                            </tr>
                                            <tr class="table-primary text-center">
                                                <td class="text-left">
                                                    <span class="text-black font-weight-bold">Lorem Ipsum </span><br />
                                                    by Lorem Ipsum
                                                </td>
                                                <td>
                                                    <i class="mdi mdi-play text-primary icon-lg"></i>
                                                </td>
                                                <td> 01-07-2020 </td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-gradient-primary">Download</button>
                                                </td>
                                            </tr>
                                            <tr class="table-primary text-center">
                                                <td class="text-left">
                                                    <span class="text-black font-weight-bold">Lorem Ipsum </span><br />
                                                    by Lorem Ipsum
                                                </td>
                                                <td>
                                                    <i class="mdi mdi-play text-primary icon-lg"></i>
                                                </td>
                                                <td> 01-07-2020 </td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-gradient-primary">Download</button>
                                                </td>
                                            </tr>
                                            <tr class="table-primary text-center">
                                                <td class="text-left">
                                                    <span class="text-black font-weight-bold">Lorem Ipsum </span><br />
                                                    by Lorem Ipsum
                                                </td>
                                                <td>
                                                    <i class="mdi mdi-play text-primary icon-lg"></i>
                                                </td>
                                                <td> 01-07-2020 </td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-gradient-primary">Download</button>
                                                </td>
                                            </tr>
                                            <tr class="table-primary text-center">
                                                <td class="text-left">
                                                    <span class="text-black font-weight-bold">Lorem Ipsum </span><br />
                                                    by Lorem Ipsum
                                                </td>
                                                <td>
                                                    <i class="mdi mdi-play text-primary icon-lg"></i>
                                                </td>
                                                <td> 01-07-2020 </td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-gradient-primary">Download</button>
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
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright ©
                    {{ now()->year }} <a href="#" target="_blank">Voicedash.io</a>. All rights reserved.
                </span>
            </div>
        </footer>
    </div>
</div>
@endsection

@section('footer')

@endsection

@section('script')

@endsection
