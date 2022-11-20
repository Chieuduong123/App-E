@extends('layouts.dashboard')
@extends('layouts.aside')
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        @section('main')
            <div class="layout-page">
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Results Quiz</h4>
                        <div class="card">
                            <h5 class="card-header">Manage Results Quiz</h5>
                            <div class="table-responsive text-nowrap">
                                <table class="table" id="myTable2">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Quiz Score</th>
                                            @if (auth()->user()->is_admin == true)
                                                <th scope="col">User Score</th>
                                                <th scope="col">User Name</th>
                                            @else
                                                <th scope="col">My Score</th>
                                            @endif
                                            <th scope="col">Date</th>
                                        </tr>
                                    </thead>
                                    @php
                                        $sl = 1;
                                    @endphp
                                    @foreach ($results as $result)
                                        <tbody class="table-border-bottom-0">
                                            <tr>
                                                <th scope="row">{{ $sl++ }}</th>
                                                <td>{{ $result->title }}</td>
                                                <td>{{ $result->quiz_score }}</td>
                                                <td>{{ $result->achieved_score }}</td>

                                                @if (auth()->user()->is_admin == true)
                                                    <td>{{ $result->name }}</td>
                                                    <td>{{ $result->quiz_score }}</td>
                                                @endif
                                                <td>{{ $result->created_at }}</td>
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
    </div>
    {{-- <h1>Result List</h1>
                <div class="text-center">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Quiz Score</th>
                                @if (auth()->user()->is_admin == true)
                                    <th scope="col">User Score</th>
                                    <th scope="col">User Name</th>
                                @else
                                    <th scope="col">My Score</th>
                                @endif
                                <th scope="col">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $sl = 1;
                            @endphp
                            @foreach ($results as $result)
                                <tr>
                                    <th scope="row">{{ $sl++ }}</th>
                                    <td>{{ $result->title }}</td>
                                    <td>{{ $result->quiz_score }}</td>
                                    <td>{{ $result->achieved_score }}</td>

                                    @if (auth()->user()->is_admin == true)
                                        <td>{{ $result->name }}</td>
                                        <td>{{ $result->quiz_score }}</td>
                                    @endif
                                    <td>{{ $result->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endsection --}}
