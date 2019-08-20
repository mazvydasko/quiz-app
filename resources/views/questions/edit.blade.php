@extends('layouts.app')

@section('content')
    <div class="d-flex" id="wrapper">
        @include('adminpanel.adminSidebar')
        <div class="container">
            @if($question)
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{route('questions.update', $question->id)}}">
                    @csrf
                    @method('put')
                    <div class="panel panel-default">
                        <h2 align="center">Edit Question</h2>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <select class="form-control" name="topic_id">
                                        @foreach($topics as $topic)
                                            <option value="{{$topic->id}}" {{($topic->id == $question->topic_id) ? 'selected' : ''}}>{{$topic->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="question_text" class="control-label">Question text</label>
                                    <textarea class="form-control" required placeholder="" name="question_text"
                                              cols="50"
                                              rows="10">{{$question->question_text}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input class="btn btn-primary" type="submit" value="Update">
                </form>
            @else
                <h1>No Question</h1>
            @endif
        </div>
    </div>
@endsection