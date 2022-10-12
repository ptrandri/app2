@extends('dashboard.layouts.main')
@section('container')
    <div class="container-fluid">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3">
            <h1 class="h5">Ticket List</h1>
            <a href="/tickets/create">
                <button type="button" class="btn btn-primary">Add Ticket</button>
            </a>
        </div>

        <div
            class="form-outline d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-1 pb-2 mb-3 border-bottom search">
            <input type="search" name="search" id="search" placeholder="Search something" class="form-control">
        </div>

        <div class="table-responsive">
            @if (session()->has('message'))
                <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <strong>{{ session('message') }}</strong>
                </div>
            @endif
            <table id="tickets" class="table table-striped table-sm">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Agent Name</th>
                    <th scope="col">Subject Case</th>
                    <th scope="col">Description</th>
                    <th scope="col">Caller Name</th>
                    <th scope="col">Status</th>
                    <th scope="col">Priority</th>
                    <th scope="col">Assigned To</th>
                    <th scope="col">Created Date</th>
                    <th scope="col">Updated Date</th>
                </tr>
                <tbody class="alldata">
                    @foreach ($tickets->reverse() as $ticket)
                        <tr>
                            <td>{{ $ticket->id }}</td>
                            <td>{{ $ticket->AgentName }}</td>
                            <td><a href="/tickets/{{ $ticket->id }}">{{ $ticket->SubjectCase }}</a></td>
                            <td>{{ $ticket->SubjectDesc }}</td>
                            <td>{{ $ticket->CallerName }}</td>
                            <td>{{ $ticket->Status }}</td>
                            <td>{{ $ticket->Priority }}</td>
                            <td>{{ $ticket->Assigned_to }}</td>
                            <td>{{ $ticket->created_at }}</td>
                            <td>{{ $ticket->updated_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
                <tbody id="Content" class="searchdata"> </tbody>
            </table>
        </div>
    </div>
@endsection
