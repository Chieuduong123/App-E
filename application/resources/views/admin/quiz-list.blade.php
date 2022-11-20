@extends('layouts.dashboard')
@extends('layouts.aside')
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        @section('main')
            <div class="layout-page">
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Quiz</h4>
                        <div class="card">
                            <h5 class="card-header">Manage Quiz</h5>
                            <div class="table-responsive text-nowrap">
                                <table class="table" id="myTable2">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">From</th>
                                            <th scope="col">To</th>
                                            <th scope="col">Duration</th>
                                        </tr>
                                    </thead>
                                    @php
                                        $sl = 1;
                                    @endphp
                                    @foreach ($quiz_list as $quiz)
                                        <tbody class="table-border-bottom-0">
                                            <tr>
                                                <th scope="row">{{ $sl++ }}</th>
                                                <td><a href="/add-quiz-question/{{ $quiz->id }}"
                                                        target="_blank">{{ $quiz->title }}</a>
                                                </td>
                                                <td>{{ $quiz->from_time }}</td>
                                                <td>{{ $quiz->to_time }}</td>
                                                <td>{{ $quiz->duration }} minutes</td>
                                            </tr>
                                        </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <h1>Quiz List</h1>
            <div class="text-center">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">From</th>
                            <th scope="col">To</th>
                            <th scope="col">Duration</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $sl = 1;
                        @endphp
                        @foreach ($quiz_list as $quiz)
                            <tr>
                                <th scope="row">{{ $sl++ }}</th>
                                <td><a href="/add-quiz-question/{{ $quiz->id }}" target="_blank">{{ $quiz->title }}</a>
                                </td>
                                <td>{{ $quiz->from_time }}</td>
                                <td>{{ $quiz->to_time }}</td>
                                <td>{{ $quiz->duration }} minutes</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div> --}}
    </div>
