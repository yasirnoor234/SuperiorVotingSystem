<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Teacher\Seminar;
use App\Model\Student\SeminarDetail;

class SeminarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seminars = Seminar::all();
        return view('teacher.seminars.index', compact('seminars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teacher.seminars.create');
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

        $seminar = Seminar::create($request->only(['title']));
        if ($request->get('title') != '') {
            $seminar->seminardetails()->create([
                'title' => $request->get('title'),
                'description' => $request->get('description'),
                'type' => $request->get('type'),
                'date' => $request->get('date'),
                'time' => $request->get('time'),
            ]);
        }
//        return redirect()->route('teacher/seminars');
        return redirect('teacher/seminars')->with('message', 'Successfully added by seminar details!');
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
        $seminars = Seminar::find($id);
        return view('teacher.seminars.edit', compact('seminars','id'));
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
//        $validatedData = $this->validate([
//            'title' => 'required|min:4',
//            'description' => 'required|min:12',
//            'type' => 'required|min:7',
//            'date' => 'required',
//            'time' => 'required'
//        ]);
//
//        Seminar::whereId($id)->update($validatedData);

        $seminars = new SeminarDetail([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'type' => $request->get('type'),
            'date' => $request->get('date'),
            'time' => $request->get('time'),

        ]);
            $seminars->save();

            return redirect('/teacher/seminars')->with('message', 'Successfully edited by event details!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $seminardetails = SeminarDetail::find($id);
        $seminardetails->delete();

        return redirect('/teacher/seminars');

    }

}
