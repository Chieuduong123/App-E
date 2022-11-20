@extends('layouts.dashboard')
@extends('layouts.aside')
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        @section('main')
            <div class="layout-page">
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span>Add Quiz Question</h4>
                        <div class="card">
                            <h5 class="card-header">Add Question for the Quiz: {{ $quiz_list->title }}</h5>
                            <div class="table-responsive text-nowrap">
                                <form method="post" action="{{ route('store.question') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" placeholder="Question" name="question" required
                                            class="form-control">
                                    </div>
                                    <input type="hidden" name="quiz_id" value="{{ $quiz_id }}" readonly required>
                                    <div class="form-group">
                                        <input type="text" placeholder="Option A" name="option_a" required
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Option B" name="option_b" required
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Option C" name="option_c" required
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Option D" name="option_d" required
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="correct_option" required>
                                            <option selected disabled value>-- Select Correct Option --</option>
                                            <option value="option_a">A</option>
                                            <option value="option_b">B</option>
                                            <option value="option_c">C</option>
                                            <option value="option_d">D</option>
                                        </select>
                                    </div>
                                    <br>
                                    <div class="text-center">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <br>
                        <div class="text-center">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Question</th>
                                        <th scope="col">A</th>
                                        <th scope="col">B</th>
                                        <th scope="col">C</th>
                                        <th scope="col">D</th>
                                        <th scope="col">Correct</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $sl = 1;
                                    @endphp
                                    @foreach ($quizz_questions as $question)
                                        <tr>
                                            <th scope="row">{{ $sl++ }}</th>
                                            <td>{{ $question->question }}</td>
                                            <td>{{ $question->option_a }}</td>
                                            <td>{{ $question->option_b }}</td>
                                            <td>{{ $question->option_c }}</td>
                                            <td>{{ $question->option_d }}</td>
                                            <td>{{ $question->correct_option }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <script>
                            function correctAnswer() {
                                let a = document.getElementsByName('option_a')
                                alert('a');
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
