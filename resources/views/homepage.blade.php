@extends('layouts.app')

@section('header')

@endsection


@section('content')
@include('partials.navbar')
<div class="container-fluid page-body-wrapper ">
    @include('partials.sidebar')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    <span class="page-title-icon bg-gradient-primary text-white mr-2">
                        <i class="mdi mdi-home"></i>
                    </span> Dashboard </h3>
            </div>
            <div class="row grid-margin">
                <div class="col-md-4">
                    <div class="card rounded-xl bg-gradient-light text-primary">
                        <div class="card-body d-flex align-items-center">
                            <h1 class="" style="font-size: 61.7988px;">
                                <i class="mdi mdi-microphone-variant"></i> 11
                            </h1>
                            <h4 class="text-dark">Audio Generated</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card rounded-xl bg-gradient-light text-primary">
                        <div class="card-body d-flex align-items-center">
                            <h1 class="" style="font-size: 61.7988px;">
                                <i class="mdi mdi-account-multiple"></i> 11
                            </h1>
                            <h4 class="text-dark">Subusers</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card rounded-xl bg-gradient-light text-primary">
                        <div class="card-body d-flex align-items-center">
                            <h1 class="" style="font-size: 61.7988px;">
                                <i class="mdi mdi-play-box-outline"></i> 11
                            </h1>
                            <h4 class="text-dark">Video Created</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
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
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="text-center font-weight-bold "> Title </th>
                                            <th class="text-center"> Audio Preview </th>
                                            <th class="text-center"> Created Date </th>
                                            <th class="text-center"> Action </th>
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
                                                <button type="button" class="btn btn-gradient-primary">Download</button>
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
                                                <button type="button" class="btn btn-gradient-primary">Download</button>
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
                                                <button type="button" class="btn btn-gradient-primary">Download</button>
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
                                                <button type="button" class="btn btn-gradient-primary">Download</button>
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
                                                <button type="button" class="btn btn-gradient-primary">Download</button>
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
                                                <button type="button" class="btn btn-gradient-primary">Download</button>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
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
                        <div class="card-body">
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
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="text-center font-weight-bold "> Title </th>
                                            <th class="text-center"> Audio Preview </th>
                                            <th class="text-center"> Created Date </th>
                                            <th class="text-center"> Action </th>
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
                                                <button type="button" class="btn btn-gradient-primary">Download</button>
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
                                                <button type="button" class="btn btn-gradient-primary">Download</button>
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
                                                <button type="button" class="btn btn-gradient-primary">Download</button>
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
                                                <button type="button" class="btn btn-gradient-primary">Download</button>
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
                                                <button type="button" class="btn btn-gradient-primary">Download</button>
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
                                                <button type="button" class="btn btn-gradient-primary">Download</button>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
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
            {{-- <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Recent Tickets</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th> Assignee </th>
                                            <th> Subject </th>
                                            <th> Status </th>
                                            <th> Last Update </th>
                                            <th> Tracking ID </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img src="{{ asset('frontend/images/faces/face1.jpg') }}" class="mr-2"
                                                    alt="image"> David Grey </td>
                                            <td> Fund is not recieved </td>
                                            <td>
                                                <label class="badge badge-gradient-success">DONE</label>
                                            </td>
                                            <td> Dec 5, 2017 </td>
                                            <td> WD-12345 </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{ asset('frontend/images/faces/face2.jpg') }}" class="mr-2"
                                                    alt="image"> Stella Johnson </td>
                                            <td> High loading time </td>
                                            <td>
                                                <label class="badge badge-gradient-warning">PROGRESS</label>
                                            </td>
                                            <td> Dec 12, 2017 </td>
                                            <td> WD-12346 </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{ asset('frontend/images/faces/face3.jpg') }}" class="mr-2"
                                                    alt="image"> Marina Michel </td>
                                            <td> Website down for one week </td>
                                            <td>
                                                <label class="badge badge-gradient-info">ON HOLD</label>
                                            </td>
                                            <td> Dec 16, 2017 </td>
                                            <td> WD-12347 </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{ asset('frontend/images/faces/face4.jpg') }}" class="mr-2"
                                                    alt="image"> John Doe </td>
                                            <td> Loosing control on server </td>
                                            <td>
                                                <label class="badge badge-gradient-danger">REJECTED</label>
                                            </td>
                                            <td> Dec 3, 2017 </td>
                                            <td> WD-12348 </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Recent Updates</h4>
                            <div class="d-flex">
                                <div class="d-flex align-items-center mr-4 text-muted font-weight-light">
                                    <i class="mdi mdi-account-outline icon-sm mr-2"></i>
                                    <span>jack Menqu</span>
                                </div>
                                <div class="d-flex align-items-center text-muted font-weight-light">
                                    <i class="mdi mdi-clock icon-sm mr-2"></i>
                                    <span>October 3rd, 2018</span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-6 pr-1">
                                    <img src="{{ asset('frontend/images/dashboard/img_1.jpg') }}"
                                        class="mb-2 mw-100 w-100 rounded" alt="image">
                                    <img src="{{ asset('frontend/images/dashboard/img_4.jpg') }}"
                                        class="mw-100 w-100 rounded" alt="image">
                                </div>
                                <div class="col-6 pl-1">
                                    <img src="{{ asset('frontend/images/dashboard/img_2.jpg') }}"
                                        class="mb-2 mw-100 w-100 rounded" alt="image">
                                    <img src="{{ asset('frontend/images/dashboard/img_3.jpg') }}"
                                        class="mw-100 w-100 rounded" alt="image">
                                </div>
                            </div>
                            <div class="d-flex mt-5 align-items-top">
                                <img src="{{ asset('frontend/images/faces/face3.jpg') }}"
                                    class="img-sm rounded-circle mr-3" alt="image">
                                <div class="mb-0 flex-grow">
                                    <h5 class="mr-2 mb-2">School Website - Authentication Module.</h5>
                                    <p class="mb-0 font-weight-light">It is a long established fact that a reader will
                                        be distracted by the readable content of a page.</p>
                                </div>
                                <div class="ml-auto">
                                    <i class="mdi mdi-heart-outline text-muted"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Project Status</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th> # </th>
                                            <th> Name </th>
                                            <th> Due Date </th>
                                            <th> Progress </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> 1 </td>
                                            <td> Herman Beck </td>
                                            <td> May 15, 2015 </td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-success" role="progressbar"
                                                        style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> 2 </td>
                                            <td> Messsy Adam </td>
                                            <td> Jul 01, 2015 </td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-danger" role="progressbar"
                                                        style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> 3 </td>
                                            <td> John Richards </td>
                                            <td> Apr 12, 2015 </td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-warning" role="progressbar"
                                                        style="width: 90%" aria-valuenow="90" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> 4 </td>
                                            <td> Peter Meggik </td>
                                            <td> May 15, 2015 </td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-primary" role="progressbar"
                                                        style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> 5 </td>
                                            <td> Edward </td>
                                            <td> May 03, 2015 </td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-danger" role="progressbar"
                                                        style="width: 35%" aria-valuenow="35" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> 5 </td>
                                            <td> Ronald </td>
                                            <td> Jun 05, 2015 </td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-info" role="progressbar"
                                                        style="width: 65%" aria-valuenow="65" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-white">Todo</h4>
                            <div class="add-items d-flex">
                                <input type="text" class="form-control todo-list-input"
                                    placeholder="What do you need to do today?">
                                <button class="add btn btn-gradient-primary font-weight-bold todo-list-add-btn"
                                    id="add-task">Add</button>
                            </div>
                            <div class="list-wrapper">
                                <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox"> Meeting with Alisa </label>
                                        </div>
                                        <i class="remove mdi mdi-close-circle-outline"></i>
                                    </li>
                                    <li class="completed">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox" checked> Call John </label>
                                        </div>
                                        <i class="remove mdi mdi-close-circle-outline"></i>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox"> Create invoice </label>
                                        </div>
                                        <i class="remove mdi mdi-close-circle-outline"></i>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox"> Print Statements </label>
                                        </div>
                                        <i class="remove mdi mdi-close-circle-outline"></i>
                                    </li>
                                    <li class="completed">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox" checked> Prepare for
                                                presentation </label>
                                        </div>
                                        <i class="remove mdi mdi-close-circle-outline"></i>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox"> Pick up kids from school
                                            </label>
                                        </div>
                                        <i class="remove mdi mdi-close-circle-outline"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © {{ now()->year }} <a
                        href="#" target="_blank">Voicedash.io</a>. All rights
                    reserved.</span>
                {{-- <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with
                    <i class="mdi mdi-heart text-danger"></i>
                </span> --}}
            </div>
        </footer>
        <!-- partial -->
    </div>
    <!-- main-panel ends -->
</div>
@endsection

@section('footer')

@endsection

@section('script')
<script src="{{ asset('frontend/js/dashboard.js') }}"></script>
<script src="{{ asset('frontend/js/todolist.js') }}"></script>
@endsection
