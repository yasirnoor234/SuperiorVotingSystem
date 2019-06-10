<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Teacher\Event;
use App\Model\Student\EventDetail;

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
        return view('teacher.events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teacher.events.create');
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
            'title' => 'required|min:4',
            'description' => 'required|min:12',
            'type' => 'required|min:7',
            'date' => 'required',
            'time' => 'required'

        ]);

        $event = Event::create($request->only(['title']));
        if ($request->get('title') != '') {
            $event->eventdetails()->create([
                'title' => $request->get('title'),
                'description' => $request->get('description'),
                'type' => $request->get('type'),
                'date' => $request->get('date'),
                'time' => $request->get('time'),
            ]);
        }
        return redirect('teacher/events')->with('message', 'Successfully added by event details!');
        //return redirect()->route('teacher/events');
        //return redirect()->route('teacher/events', ['id' => 1]);

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
        $events = Event::find($id);

        return view('teacher.events.edit', compact('events','id'));

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
            'title' => 'required|min:4',
            'description' => 'required|min:12',
            'type' => 'required|min:7',
            'date' => 'required',
            'time' => 'required'

        ]);
        Event::whereId($id)->update($validatedData);

        return redirect('/teacher/event')->with('message', 'Successfully edited by event details!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eventdetails = EventDetail::find($id);
        $eventdetails->delete();

        return redirect('/teacher/events');
    }
}
