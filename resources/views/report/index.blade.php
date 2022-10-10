@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-1 mb-3 border-bottom">
        <h1 class="h5">Report</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
    </div>
    <div>
        <form class="needs-validation" action="" method="POST" novalidate="">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Select Report Data</h4>
                            <div class="row">
                                <div class="col-12">
                                    <label class="form-label" for="Status">Select User Group</label>
                                    <select class="form-select mb-3" id="Status" name="Status">
                                        <option value="Engineer">All</option>
                                        <option value="Agent">Agent</option>
                                        <option value="Engineer">Engineer</option>
                                    </select>
                                </div>
                            </div>

                            {{-- date --}}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="from">From</label>
                                        <input type="date" class="form-control" id="from" name="from"
                                            value="">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="to">to</label>
                                        <input type="date" class="form-control" id="to" name="to"
                                            placeholder="Caller name" value="">
                                    </div>
                                </div>
                            </div>
                            {{-- date --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="filename">File Name</label>
                                        <input type="text" class="form-control" id="filename" name="filename"
                                            placeholder="File name" value="" required="">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <button class="btn btn-success" type="submit">Generate</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
