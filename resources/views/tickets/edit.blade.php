@extends('dashboard.layouts.main')
@section('container')
    <div class="container-fluid">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h5">Edit Ticket</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
            </div>
            <a href="/tickets/">
                <button type="button" class="btn btn-primary">Back</button>
            </a>
        </div>

        <div class="card push-top">
            <form method="post" action="{{ route('tickets.update', $tickets->id) }}">
                <div class="form-group">
                    @csrf
                    @method('PATCH')
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div><br />
                        @endif
                        <h4 class="card-title">Case Summary</h4>
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="AgentName">Agent Name</label>
                                    <input type="text" class="form-control" id="AgentName" name="AgentName"
                                        placeholder="Agent Name Working on Shift" value="{{ $tickets->AgentName }}"
                                        required="">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="SubjectCase">Subject Case</label>
                                    <textarea type="text" class="form-control" id="SubjectCase" name="SubjectCase"
                                        placeholder="Enter your subject Problem">{{ $tickets->SubjectCase }}</textarea>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="SubjectDesc">Description</label>
                                    <textarea type="text" class="form-control" id="SubjectDesc" name="SubjectDesc"
                                        placeholder="Please Give Your Problem Description">{{ $tickets->SubjectDesc }}</textarea>
                                </div>
                            </div>

                            <h4 class="card-title mt-3">Customer Details</h4>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="CallerName">Caller Name</label>
                                <input type="text" class="form-control" id="CallerName" name="CallerName"
                                    placeholder="Please Enter the Caller Name" value="{{ $tickets->CallerName }}"
                                    required="">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="CallerEmail">Caller Email</label>
                                <input type="email" class="form-control" id="CallerEmail" name="CallerEmail"
                                    placeholder="Please Enter the Caller Email" value="{{ $tickets->CallerEmail }}"
                                    required>
                            </div>


                            <h4 class="card-title mt-3">Tickets Details</h4>
                            <div class="col-12 mb-3">
                                <label class="form-label" for="Status">Status</label>
                                <input class="form-control" list="Status_list" id="Status" name="Status"
                                    placeholder="Ticket Status" value="{{ $tickets->Status }}">
                                <datalist id="Status_list">
                                    <option value="Open">Open</option>
                                    <option value="Escalated">Escalated</option>
                                    <option value="Closed">Closed</option>
                                </datalist>
                            </div>

                            <div class="col-12 mb-3">
                                <label for="Priority" class="form-label">Priority</label>
                                <input class="form-control" list="Priority_list" id="Priority" name="Priority"
                                    placeholder="Ticket Priority" value="{{ $tickets->Priority }}">
                                <datalist id="Priority_list">
                                    <option value="Low">Low</option>
                                    <option value="Normal">Normal</option>
                                    <option value="High">High</option>
                                    <option value="Critical">Critical</option>
                                </datalist>
                            </div>

                            <div class="col-12 mb-3">
                                <label for="form-label" class="form-label">Assigned To</label>
                                <input class="form-control" list="Assigned_list" id="Assigned_to" name="Assigned_to"
                                    placeholder="Assign To" value="{{ $tickets->Assigned_to }}">
                                <datalist id="Assigned_list">
                                    <option value="Agent">Agent</option>
                                    <option value="Engineer">Engineer</option>
                                </datalist>
                            </div>

                        </div>
                        <button type="submit" class="btn btn-block btn-danger">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
