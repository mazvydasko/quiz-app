@extends('layouts.app')

@section('content')
    <div class="d-flex" id="wrapper">
        @include('adminpanel.adminSidebar')
        <div class="container">
            @if($option)
            <div class="row">
                <div class="col-md-12 mt-4">
                    <h3 class="page-title">Option ID: {{$option->id}}</h3>
                    <table class="table table-bordered table-striped datatable">
                        <thead>
                        <tr>
                            <th>Question</th>
                            <th>Question option</th>
                            <th>Correct</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                @if($option->question)
                                    {{$option->question->question_text}}
                                @endif
                            </td>
                            <td>{{$option->option}}</td>
                            <td>
                                @if($option->correct == 1)
                                    Yes
                                @else
                                    No
                                @endif
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            @else
                <h1>No Option</h1>
            @endif
        </div>
        </div>
    </div>
@endsection