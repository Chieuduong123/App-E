@extends('layouts.dashboard')
@extends('layouts.header')
@section('main')
    <h1>Result List</h1>
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
@endsection
