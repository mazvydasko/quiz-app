@extends('layouts.app')

@section('content')
    <div class="d-flex" id="wrapper">
        @include('adminpanel.adminSidebar')
        <div class="container">
            <h2 align="center">Create new Quiz</h2>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="form-group">
                <form action="{{route('topics.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Iveskite temos pavadinima">
                    </div>
                    <input type="submit" name="submit" id="submit" class="btn btn-info" value="Create Topic"/>
                </form>
            </div>

            <div class="form-group">
                <hr>
                <form action="{{route('questions.store')}}" method="post">
                    @csrf
                    <div class="table-responsive">
                        <h2 class="mt-2" align="center">Add question to quiz</h2>
                        <table class="table table-bordered" id="dynamic_field">
                            <div class="form-group">
                                <label for="">Select Topic</label>
                                <select name="topic" id="inputState" class="form-control">
                                    @foreach($topics as $topic)
                                        <option selected value="{{$topic->id}}">{{$topic->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <tr>
                                <td>
                                    <input type="text" name="question" placeholder="Iveskite klausima"
                                           class="form-control question_list" required
                                    />
                                <td>
                                    <input type="text" name="options[]" placeholder="Iveskite atsakyma"
                                           class="form-control options_list" required
                                    />
                                </td>
                                <td>
                                    <input type="checkbox"
                                           name="correct[]"
                                           value="1"
                                           placeholder="Iveskite atsakyma"
                                           class="form-control"
                                    />
                                </td>
                                </td>
                                <td>
                                    <button type="button" name="addAnswer" id="addAnswer" class="btn btn-success mb-2">
                                        Add Answer
                                    </button>
                                </td>
                            </tr>
                        </table>
                        <input type="submit" name="addQuestion" id="addQuestion" class="btn btn-success mb-2 mr-2"
                               value="Add Question"/>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        $(document).ready(function () {
            var n = 1;

            $('#addAnswer').click(function () {
                n++;
                $('#dynamic_field').append('' +
                    '<tr id="row' + n + '" class="dynamic-added">' +
                    '<td>' +
                    '</td>' +
                    '<td>' +
                    '<input type="text" name="options[]" required placeholder="Iveskite atsakyma" class="form-control question_list" />' +
                    '</td>' +
                    '<td>' +
                    '<input type="checkbox" name="correct[]" value="' + n + '" class="form-control question_list" />' +
                    '</td>' +
                    '<td>' +
                    '<button type="button" name="remove" id="' + n + '" class="btn btn-danger btn_remove">X</button>' +
                    '</td>' +
                    '</tr>');
            });


            $(document).on('click', '.btn_remove', function () {
                var button_id = $(this).attr("id");
                $('#row' + button_id + '').remove();
            });

        });
    </script>
@endsection