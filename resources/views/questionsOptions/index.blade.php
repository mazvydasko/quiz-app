@extends('layouts.app')

@section('content')
    <div class="d-flex" id="wrapper">
        @include('adminpanel.adminSidebar')
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-4">
                    <h3 class="page-title">All Options</h3>
                    <table class="table table-bordered table-striped datatable">
                        <thead>
                        <tr>
                            <th>Question</th>
                            <th>Question option</th>
                            <th>Correct</th>
                            <th>More</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($options as $option)
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
                                <td>
                                    <a href="{{route('questionsOptions.show', $option->id)}}"
                                       class="btn btn-xs btn-primary">View</a>
                                    <a href="{{route('questionsOptions.edit', $option->id)}}"
                                       class="btn btn-xs btn-warning">Edit</a>
                                    <form class="inline_block" action="{{route('questionsOptions.destroy', $option->id)}}"
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