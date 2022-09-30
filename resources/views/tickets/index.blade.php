@extends('dashboard.layouts.main')
@section('container')
    <div class="container-fluid">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h5">Ticket List</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
            </div>
            <a href="/tickets/create">
                <button type="button" class="btn btn-primary">Add Ticket</button>
            </a>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">AgentName</th>
                        <th scope="col">Subject Case</th>
                        <th scope="col">Description</th>
                        <th scope="col">Caller Name</th>
                        <th scope="col">Created Date</th>
                        <th scope="col">Updated Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tickets->reverse() as $ticket)
                        <tr>
                            <td>{{ $ticket->id }}</td>
                            <td>{{ $ticket->AgentName }}</td>
                            <td>{{ $ticket->SubjectCase }}</td>
                            <td>{{ $ticket->SubjectDesc }}</td>
                            <td>{{ $ticket->CallerName }}</td>
                            <td>{{ $ticket->created_at }}</td>
                            <td>{{ $ticket->updated_at }}</td>

                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
