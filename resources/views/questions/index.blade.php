@extends('layouts.app')

@section('content')
    <div class="d-flex" id="wrapper">
        @include('adminpanel.adminSidebar')
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-4">
                    <h3 class="page-title">All Questions</h3>
                    <table class="table table-bordered table-striped datatable">
                        <thead>
                        <tr>
                            <th>Topic</th>
                            <th>Question text</th>
                            <th>More</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($questions as $question)
                            <tr>
                                <td>
                                    @if($question->topic)
                                        {{$question->topic->title}}
                                    @endif
                                </td>
                                <td>
                                    @if(strlen($question->question_text) > 100)
                                        {{substr($question->question_text, 0, 100)}}...</td>
                                @else
                                    {{$question->question_text}}
                                @endif
                                <td>
                                    <a href="{{route('questions.show', $question->id)}}"
                                       class="btn btn-xs btn-primary">View</a>
                                    <a href="{{route('questions.edit', $question->id)}}"
                                       class="btn btn-xs btn-warning">Edit</a>
                                    <form class="inline_block" action="{{route('questions.destroy', $question->id)}}"
                                          method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-xs btn-danger" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection