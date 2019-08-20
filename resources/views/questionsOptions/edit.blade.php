@extends('layouts.app')

@section('content')
    <div class="d-flex" id="wrapper">
        @include('adminpanel.adminSidebar')
        <div class="container">
            @if($option)
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <h2 align="center">Edit Option</h2>
            <div class="form-group">
                <hr>
                <form action="{{route('questionsOptions.update', $option->id)}}" method="post">
                    @csrf
                    @method('put')
                    <div class="table-responsive">
                        <div class="form-group">
                            <select name="question_id" class="form-control">
                                @foreach($questions as $question)
                                    <option {{($option->question_id == $question->id) ? 'selected' : ''}} value="{{$question->id}}">{{$question->question_text}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                    <textarea required class="form-control options_list" name="option" id="" cols="30"
                              rows="10">{{$option->option}}</textarea>
                        </div>

                        <div>
                            Correct
                            <input type="checkbox"
                                   name="correct"
                                   value="1"
                                    {{($option->correct == 1) ? 'checked' : ''}}
                            />
                        </div>
                        <div class="mt-3">
                            <input class="btn btn-primary" type="submit" value="Update">
                        </div>
                    </div>
                </form>
            </div>
                @else
                    <h1>No Question Option</h1>
                @endif
        </div>
        </div>
    </div>
@endsection