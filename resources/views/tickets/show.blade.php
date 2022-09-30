@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-2 mb-2 container-fluid">
        <h1 class="h5">Show Ticket</h1>
        <a href="{{ route('tickets.edit', $tickets->id) }}">
            <button type="button" class="btn btn-success btn-sm">Edit Ticket</button>
            <td class="text-center">
                <form action="{{ route('tickets.destroy', $tickets->id) }}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm"" type="submit">Delete</button>
                </form>
            </td>
        </a>

    </div>

    <div class="tab-content">
        <div class="tab-pane active" id="ticket" role="tabpanel">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Ticket Information</h4>
                            <table width="100%" class="table table-borderless mb-0">
                                <tbody>
                                    <tr>
                                        <td width="15%">Agent Name</td>
                                        <td width="0%">{{ $tickets->AgentName }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Case Summary</h4>

                            <table width="100%" class="table table-borderless mb-0">
                                <tbody>
                                    <tr>
                                        <td width="15%">Subject</td>
                                        <td width="85%" colspan="2">{{ $tickets->SubjectCase }}</td>
                                    </tr>
                                    <tr>
                                        <td width="15%">Description</td>
                                        <td width="85%" colspan="2">{{ $tickets->SubjectDesc }}</td>
                                    </tr>
                                    <tr>
                                        <td width="15%">Caller Name</td>
                                        <td width="85%" colspan="2">{{ $tickets->CallerName }}</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
