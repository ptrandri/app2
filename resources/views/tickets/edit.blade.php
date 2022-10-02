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
            <div class="card-header">Case Summary </div>
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
                <form method="post" action="{{ route('tickets.update', $tickets->id) }}">
                    <div class="form-group">
                        @csrf
                        @method('PATCH')
                        <label for="name">Agent Name</label>
                        <input type="text" class="form-control mb-3" name="AgentName"
                            value="{{ $tickets->AgentName }}" />
                    </div>
                    <div class="form-group">
                        <label for="email">Subject Case</label>
                        <input type="text" class="form-control mb-3" name="SubjectCase"
                            value="{{ $tickets->SubjectCase }}" />
                    </div>
                    <div class="form-group">
                        <label for="phone">Description</label>
                        <input type="text" class="form-control mb-3" name="SubjectDesc"
                            value="{{ $tickets->SubjectDesc }}" />
                    </div>
                    <div class="form-group">
                        <label for="password">Caller Name</label>
                        <input type="text" class="form-control mb-3" name="CallerName"
                            value="{{ $tickets->CallerName }}" />
                    </div>

                    <div class="form-group">
                        <label for="CallerEmail">Caller Email</label>
                        <input type="email" class="form-control mb-3" name="CallerEmail"
                            value="{{ $tickets->CallerEmail }}" />
                    </div>

                    <div class="form-group">
                        <label for="Status">Status</label>
                        <input type="text" class="form-control mb-3" name="Status" value="{{ $tickets->Status }}" />
                    </div>

                    <div class="form-group">
                        <label for="Priority">Priority</label>
                        <input type="text" class="form-control mb-3" name="Priority" value="{{ $tickets->Priority }}" />
                    </div>

                    <div class="form-group">
                        <label for="Assigned_to">Assigned To</label>
                        <input type="text" class="form-control mb-3" name="Assigned_to"
                            value="{{ $tickets->Assigned_to }}" />
                    </div>

                    <button type="submit" class="btn btn-block btn-danger">Update</button>
                </form>
            </div>
        </div>
    </div>

@endsection
