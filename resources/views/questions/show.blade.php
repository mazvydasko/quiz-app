@extends('layouts.app')

@section('content')
    <div class="d-flex" id="wrapper">
        @include('adminpanel.adminSidebar')
        <div class="container">
            @if($question)
                <div class="row">
                    <div class="col-md-12 mt-4">
                        <h3 class="page-title">All Questions</h3>
                        <table class="table table-bordered table-striped datatable">
                            <thead>
                            <tr>
                                <th>Topic</th>
                                <th>Question text</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{$question->topic->title}}</td>
                                <td>{{$question->question_text}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            @else
                <h1>No Question</h1>
            @endif
        </div>
    </div>
    </div>
@endsection