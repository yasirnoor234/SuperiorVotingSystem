<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Student\Feedback;
use App\Model\Student\Suggestion;

class FeedbacksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedbacks = Feedback::with('suggestions')->get();
        return view('student.feedbacks.index', compact('feedbacks'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.feedbacks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $feedback = Feedback::create($request->only(['title']));
        $suggestions = explode(",", $request->get('suggestions'));
        $suggestion_ids = [];
        foreach ($suggestions as $suggestion) {
            $suggestion_db = Suggestion::where('suggestion', trim($suggestion))->firstOrCreate(['suggestion' => trim($suggestion)]);
            $suggestion_ids[] = $suggestion_db->id;
        }
        $feedback->suggestions()->attach($suggestion_ids);
//        return redirect()->back();
        return redirect('/student/feedbacks/create')->with('message', 'Successfully added by feedback done!');

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
        //
    }
}
