<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTopicRequest;
use App\Http\Requests\UpdateTopicRequest;
use App\Question;
use App\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
        $this->middleware('admin')->except(['index', 'show']);


    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $topics = Topic::all();

        return view('topics.index', ['topics' => $topics]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $topics = Topic::all();

        return view('topics.create', ['topics'=>$topics]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTopicRequest $request)
    {
        //

        $topic = new Topic();
        $topic->title = $request->input('title');
        $topic->save();

        return redirect(route('topics.index'));
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
        $topic = Topic::find($id);

        return view('topics.show', ['topic' => $topic]);
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
        $topic = Topic::find($id);

        return view('topics.edit', ['topic'=>$topic]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTopicRequest $request, $id)
    {
        //
        $topic = Topic::find($id);
        $topic->title = $request->input('title');
        $topic->save();

        return redirect(route('topics.index'));
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
        $topic = Topic::find($id);
        $topic->delete();

        return redirect(route('topics.index'));
    }
}
