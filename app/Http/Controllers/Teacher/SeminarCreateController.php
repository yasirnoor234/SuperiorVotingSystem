<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Teacher\SeminarCreate;

class SeminarCreateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seminars = SeminarCreate::all()->toArray();

        return view('teacher.seminar.index', compact('seminars'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teacher.seminar.create');
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
            'seminar_title' => 'required',
            'seminar_description' => 'required',
            'seminar_type' => 'required',
            'date' => 'required',
            'time' => 'required'

        ]);

        $seminar = new SeminarCreate([
            'seminar_title' => $request->get('seminar_title'),
            'seminar_description' => $request->get('seminar_description'),
            'seminar_type' => $request->get('seminar_type'),
            'date' => $request->get('date'),
            'time' => $request->get('time'),
        ]);

        $seminar->save();
        return redirect('/teacher/seminar')->with('message', 'Successfully added by seminar details!');

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
        $seminar = SeminarCreate::find($id);

        return view('teacher.seminar.edit', compact('seminar','id'));

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
            'seminar_title' => 'required',
            'seminar_description' => 'required',
            'seminar_type' => 'required',
            'date' => 'required',
            'time' => 'required'

        ]);
        $seminar = SeminarCreate::find($id);
        $seminar->seminar_title = $request->get('seminar_title');
        $seminar->seminar_description = $request->get('seminar_description');
        $seminar->seminar_type = $request->get('seminar_type');
        $seminar->time = $request->get('time');
        $seminar->date = $request->get('date');
        $seminar->save();

        return redirect('/teacher/seminar')->with('message', 'Successfully edited by seminar details!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $seminar = SeminarCreate::find($id);
        $seminar->delete();

        return redirect('/teacher/seminar');

    }
}
