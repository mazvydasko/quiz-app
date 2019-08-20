@extends('layouts.app')

@section('content')
    <div class="d-flex" id="wrapper">
            @include('adminpanel.adminSidebar')
        <div class="container">
            @if($user)
            <div class="row">
                <div class="col-md-12 mt-4">
                    <h3 class="page-title">User: {{$user->name}}</h3>
                    <table class="table table-bordered table-striped datatable">
                        <thead>
                        <tr>
                            <th>User</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Quizzes Taken</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->role}}</td>
                            <td>{{$user->quizCount()}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-striped datatable">
                        <thead>
                        <tr>
                            <th>Topic</th>
                            <th>Score</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($user->results as $result)
                            <tr>
                                <td>{{$result->topic->title}}</td>
                                <td>{{$result->correct_answers}}/{{$result->questions_count}}</td>
                            @endforeach
                        </tr>
                        </tbody>
                    </table>

                </div>
            </div>
            @else
                <h1>No User</h1>
            @endif
        </div>
        </div>
    </div>
@endsection