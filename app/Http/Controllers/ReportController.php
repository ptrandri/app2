<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Ticket;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index(Request $request)
    {
        if (request()->Assigned_to || request()->start_date || request()->end_date) {
            $start_date = Carbon::parse(request()->start_date)->toDateTimeString();
            $end_date = Carbon::parse(request()->end_date)->toDateTimeString();
            $tickets = Ticket::where('Assigned_to', request()->Assigned_to)
            ->whereBetween('created_at',[$start_date,$end_date])->get();            
        } else {
            $tickets = Ticket::all();
        }
        return view('report.index', compact('tickets'));        
    }
}
