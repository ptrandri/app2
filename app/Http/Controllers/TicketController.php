<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        return view('tickets', [
            "agent" => "Tickets",
            "posts" => Ticket::all()
        ]);
    }
}
