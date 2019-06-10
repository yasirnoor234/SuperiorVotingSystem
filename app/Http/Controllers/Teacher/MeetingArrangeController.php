<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Teacher\MeetingArrange;

class MeetingArrangeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meetings = MeetingArrange::all()->toArray();

        return view('teacher.meeting.index', compact('meetings'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teacher.meeting.create');
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
            'meeting_title' => 'required',
            'meeting_purpose' => 'required',
            'date' => 'required',
            'time' => 'required'

        ]);
        $meeting = new MeetingArrange([
            'meeting_title' => $request->get('meeting_title'),
            'meeting_purpose' => $request->get('meeting_purpose'),
            'date' => $request->get('date'),
            'time' => $request->get('time'),
        ]);

        $meeting->save();
        return redirect('/teacher/meeting',$meeting->id)->with('message', 'Successfully added by seminar details!');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(MeetingArrange $meeting)
    {
        return view('teacher.meeting.show',compact('meetings',$meeting));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $meeting = MeetingArrange::find($id);

        return view('teacher.meeting.edit', compact('meeting','id'));

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
        $this->validate($request,[
            'meeting_title' => 'required',
            'meeting_description' => 'required',
            'date' => 'required',
            'time' => 'required'

        ]);

        $meeting = MeetingArrange::find($id);
        $meeting->meeting_title = $request->get('meeting_title');
        $meeting->meeting_purpose = $request->get('meeting_purpose');
        $meeting->date = $request->get('date');
        $meeting->time = $request->get('time');
        $meeting->save();

        return redirect('/teacher/meeting')->with('message', 'Successfully edited by meeting details!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $meeting = MeetingArrange::find($id);
        $meeting->delete();

        return redirect('/teacher/meeting');

    }
}
