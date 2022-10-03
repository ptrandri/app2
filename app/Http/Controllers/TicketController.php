<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = Ticket::latest()->paginate(5);
        return view ('tickets.index',compact('tickets'))->with('i', (request()->input('page', 1) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tickets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'AgentName' => 'required',
            'SubjectCase' => 'required',
            'SubjectDesc' => 'required',
            'CallerName' => 'required',
            'CallerEmail' => 'required|email:dns',
            'Status' => 'required',
            'Priority' => 'required',
            'Assigned_to' => 'required',
        ]);
        Ticket::create($request->all());

        return redirect()->route('tickets.index')->with('succes','Tickets has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tickets = Ticket::findOrFail($id);
              return view('tickets.show',compact('tickets'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tickets = Ticket::findOrFail($id);
        return view('tickets.edit', compact('tickets'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateData = $request->validate([
            'AgentName' => 'required',
            'SubjectCase' => 'required',
            'SubjectDesc' => 'required',
            'CallerName' => 'required',
            'CallerEmail' => 'required',
            'Status' => 'required',
            'Priority' => 'required',
            'Assigned_to' => 'required',
        ]);
        Ticket::whereId($id)->update($updateData);
        return redirect()->route('tickets.index')->with('succes','Tickets has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tickets = Ticket::findOrFail($id);
        $tickets->delete();
        return redirect()->route('tickets.index')->with('succes','Tickets has been deleted');
    }
}
