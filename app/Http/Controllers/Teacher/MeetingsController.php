<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Teacher\Meeting;
use App\Model\Student\MeetingDetail;

class MeetingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meetings = Meeting::all();
        return view('teacher.meetings.index', compact('meetings',$meetings));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teacher.meetings.create');
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
            'purpose' => 'required|min:7',
            'date' => 'required',
            'time' => 'required'

        ]);

        $meeting = Meeting::create($request->only(['title']));
        if ($request->get('title') != '') {
            $meeting->meetingdetails()->create([
                'title' => $request->get('title'),
                'description' => $request->get('description'),
                'purpose' => $request->get('purpose'),
                'date' => $request->get('date'),
                'time' => $request->get('time'),
            ]);
        }
//        return redirect()->route('teacher/seminars');
        return redirect('teacher/meetings',$meeting->id)->with('message', 'Successfully added by meeting details!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Meeting $meeting)
    {
        return view('meeting.show',compact('meetings',$meeting));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $meetingdetails = MeetingDetail::find($id);
        $meetingdetails->delete();

        return redirect('/teacher/meetings');

    }
}
