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
                        <label for="name">Name</label>
                        <input type="text" class="form-control mb-3" name="AgentName"
                            value="{{ $tickets->AgentName }}" />
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control mb-3" name="SubjectCase"
                            value="{{ $tickets->SubjectCase }}" />
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control mb-3" name="SubjectDesc"
                            value="{{ $tickets->SubjectDesc }}" />
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" class="form-control mb-3" name="CallerName"
                            value="{{ $tickets->CallerName }}" />
                    </div>
                    <button type="submit" class="btn btn-block btn-danger">Update</button>
                </form>
            </div>
        </div>
    </div>

@endsection
