@extends('layouts.app')

@section('content')
    <div class="container">
        @if($topic)
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <h1>{{$topic->title}}</h1>
                    <form action="{{route('results.store')}}" method="post">
                        @csrf
                        <div>
                            <input type="hidden" name="topic_id" value="{{$topic->id}}">
                            @foreach($topic->questions as $question )
                                <div>
                                    {{$question->question_text}}
                                    <input type="hidden" name="question_id[]" value="{{$question->id}}">
                                    @foreach($question->options as $option)
                                        <div>
                                            <input type="checkbox" name="option[{{$question->id}}][{{$option->id}}]"
                                                   value="{{$option->correct}}">
                                            {{$option->option}}
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                        <a href="{{route('results.show', $topic->id)}}"><input type="submit" value="Submit"
                                                                               class="btn btn-success mt-3"></a>
                    </form>
                </div>
            </div>
        @else
            <h1>No Topic</h1>
        @endif
    </div>
@endsection