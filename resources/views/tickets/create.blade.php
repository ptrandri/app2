@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-2 mb-2 container-fluid">
        <h1 class="h5">Create Ticket</h1>
    </div>
    <div class="container-fluid">
        <form action="{{ route('tickets.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Case Summary</h4>
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="subject">Agent Name</label>
                                        <input type="text" class="form-control" id="subject" name="AgentName"
                                            placeholder="Subject" value="" required="">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="description">Subject</label>
                                        <textarea type="text" class="form-control" id="description" name="SubjectCase" placeholder="Description"
                                            required=""></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="resolution">Description</label>
                                        <textarea type="text" class="form-control" id="resolution" name="SubjectDesc" placeholder="Resolution"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="resolution">Caller Name</label>
                                        <textarea type="text" class="form-control" id="resolution" name="CallerName" placeholder="Resolution"></textarea>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12 text-start">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
@endsection
