<?php

namespace App\Http\Controllers;

use App\Model\Event;
use Illuminate\Http\Request;
use Calendar;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        $event = [];

        foreach($event as $row) {
            // $enddate = $row->end_date. "24:00:00";
            $event[] = \Calendar::event(
                $row->title,
                false,
                new \DateTime($row->start_date),
                new \DateTime($row->end_date),
                $row->id,
                [
                    'color' => $row->color,
                ]
            );
        }

        // $calendar = \Calendar::addEvents($event);
        return view('welcome', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $this->validate($request,[
              'guestname' => 'required',
              'companyname' => 'required',
              'start_date' => 'required',
              'start_time' => 'required',
              'end_time' => 'required',
        ]);

        Event::insert([
            'guestname' => $request->guestname,
            'companyname' => $request->companyname,
            'start_date' => $request->start_date,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
        ]);

        return redirect('events')->with('succes', 'Events Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function show(Events $events)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function edit(Events $events)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Events $events)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function destroy(Events $events)
    {
        //
    }
}
