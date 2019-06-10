<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Teacher\EventCreate;

class EventCreateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = EventCreate::all()->toArray();

        return view('teacher.events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teacher.event.create');
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
            'event_title' => 'required',
            'event_description' => 'required',
            'event_type' => 'required',
            'date' => 'required',
            'time' => 'required'

        ]);
//        $event = new EventCreate();
//        $event->title = $request->eventtitle;
//        $event->description = $request->eventdescription;
//        $event->type = $request->eventtype;
//        $event->time = $request->time;
//        $event->date = $request->date;
//        $event->save();

        $event = new EventCreate([
            'event_title' => $request->get('event_title'),
            'event_description' => $request->get('event_description'),
            'event_type' => $request->get('event_type'),
            'date' => $request->get('date'),
            'time' => $request->get('time'),
        ]);

        $event->save();
        return redirect('/teacher/event')->with('message', 'Successfully added by event details!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = EventCreate::findOrFail($id);
        return view('teacher.events.edit', compact('event','id'));
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
        $validatedData = $this->validate([
            'event_title' => 'required',
            'event_description' => 'required',
            'event_type' => 'required',
            'date' => 'required',
            'time' => 'required'

        ]);
        EventCreate::whereId($id)->update($validatedData);
        return redirect('/teacher/event')->with('message', 'Successfully edited by event details!');

//        $event = EventCreate::find($id);
//        $event->event_title = $request->get('event_title');
//        $event->event_description = $request->get('event_description');
//        $event->event_type = $request->get('event_type');
//        $event->date = $request->get('date');
//        $event->time = $request->get('time');
//        $event->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = EventCreate::find($id);
        $event->delete();

        return redirect('/teacher/event');
    }
}
