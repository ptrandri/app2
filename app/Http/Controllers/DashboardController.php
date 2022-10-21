<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $dashboard = Ticket::all();
        return view ('dashboard.index',compact('dashboard'));
    }
}
