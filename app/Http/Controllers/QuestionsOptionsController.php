<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateQuestionOptionsRequest;
use App\Options;
use App\Question;
use Illuminate\Http\Request;

class QuestionsOptionsController extends Controller
{

    public function __construct() {
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $options = Options::all();

        return view('questionsOptions.index', ['options'=>$options]);
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
        //
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

        $option = Options::find($id);

        return view('questionsOptions.show', ['option'=>$option]);
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
        $questions = Question::all();
        $option = Options::find($id);

        return view('questionsOptions.edit', ['option'=>$option, 'questions'=>$questions]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuestionOptionsRequest $request, $id)
    {
        //

        $option = Options::find($id);

        $option->question_id = $request->input('question_id');
        $option->option = $request->input('option');
        $option->correct = $request->input('correct');
        $option->save();

        return redirect(route('questionsOptions.index'));
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

        $option = Options::find($id);
        $option->delete();

        return redirect(route('questionsOptions.index'));
    }
}
