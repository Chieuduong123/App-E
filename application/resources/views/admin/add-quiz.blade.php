@extends('layouts.dashboard')
@extends('layouts.aside')
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        @section('main')
            <div class="layout-page">
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span>Add Quiz</h4>
                        <div class="card">
                            <h5 class="card-header">Add Quiz</h5>
                            <div class="table-responsive text-nowrap">
                                <form method="post" action="{{ route('store.quiz') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" placeholder="Quiz Title" name="title" required
                                            class="form-control">
                                        <br>
                                        <label for="html5-datetime-local-input"
                                            class="col-md-2 col-form-label">&ensp;&ensp;&ensp;&ensp;Valid From</label>
                                        <div class="col-md-10">
                                            <input class="form-control" name="from_time" type="datetime-local"
                                                id="html5-datetime-local-input" />
                                        </div>
                                        {{-- <label>Valid From</label>
                                            <input name="from_time" type="datetime-local">
                                            <br> --}}
                                        <br>
                                        <label for="html5-datetime-local-input"
                                            class="col-md-2 col-form-label">&ensp;&ensp;&ensp;&ensp;Valid Till</label>
                                        <div class="col-md-10">
                                            <input class="form-control" name="to_time" type="datetime-local"
                                                id="html5-datetime-local-input" />
                                        </div>
                                        <br>
                                        {{-- <label>Valid Till</label>
                                            <input name="to_time" type="datetime-local"> --}}

                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Duration in Minute" name="duration"
                                            type="number" required>
                                    </div>
                                    <br>
                                    <div class="text-center">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
