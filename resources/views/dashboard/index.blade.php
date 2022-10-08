@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-1 mb-3 border-bottom">
        <h1 class="h5">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
    </div>

    <div class="row">
        <div class="col-xl-3 col-sm-6">
            <div class="card mini-stat bg-primary">
                <div class="card-body mini-stat-img">
                    <div class="text-white fa-lg">
                        <i class="float-end fa-solid fa-plus"></i>
                    </div>
                    <div class="text-white">
                        <h6 class="text-uppercase mb-3 font-size-16 text-white">TICKET CREATED</h6>
                        <span class="badge bg-info"> </span>
                        <span class="ms-2">30</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card mini-stat bg-primary">
                <div class="card-body mini-stat-img">
                    <div class="text-white fa-lg">
                        <i class="float-end fa-solid fa-folder-open"></i>
                    </div>
                    <div class="text-white">
                        <h6 class="text-uppercase mb-3 font-size-16 text-white">OPEN</h6>
                        <span class="badge bg-info"> </span>
                        <span class="ms-2">10</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card mini-stat bg-primary">
                <div class="card-body mini-stat-img">
                    <div class="text-white fa-lg">
                        <i class="float-end fa-solid fa-folder-open"></i>
                    </div>
                    <div class="text-white">
                        <h6 class="text-uppercase mb-3 font-size-16 text-white">ESCALATED</h6>
                        <span class="badge bg-info"> </span>
                        <span class="ms-2">10</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card mini-stat bg-primary">
                <div class="card-body mini-stat-img">
                    <div class="text-white fa-lg">
                        <i class="float-end fa-sharp fa-solid fa-circle-xmark"></i>
                    </div>
                    <div class="text-white">
                        <h6 class="text-uppercase mb-3 font-size-16 text-white">CLOSED</h6>
                        <span class="badge bg-info"> </span>
                        <span class="ms-2">5</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
        <h1 class="h5">Ticket Info</h1>
    </div>
    <div class="card">
        <div class="mt-1 mb-1">
            <h5 class="text-start ms-1">No ticket data available assigned to you!</h5>
        </div>
    </div>




    </div>
@endsection
