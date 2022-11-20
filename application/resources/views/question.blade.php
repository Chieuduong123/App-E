@extends('layouts/header')

<body>
    <section class="our-courses" id="courses">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 offset-lg-3">
                    <div class="section-heading">
                        <h4>ADD A NEW <em>COMMENT </em></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 offset-lg-2">
                <div class="comment__container opened" id="first-comment">
                    @foreach ($showQuestions as $showQuestion)
                        <div class="comment__card">
                            <h3 class="comment__title">{{ $showQuestion->users->name }}</h3>
                            <p>
                                {{ $showQuestion->body }}
                            </p>
                        </div>
                        <div class="comment__container" dataset="first-comment" id="first-reply">
                            <div class="comment__card">
                                @foreach ($showQuestion->answers as $answer)
                                    <h3 class="comment__title">{{ $answer->users->name }}</h3>
                                    <p>
                                        {{ $answer->body }}
                                    </p>
                                @endforeach
                                <form method="post" action="{{ route('answer.create', $showQuestion->id) }}"
                                    method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <input type="text" class="form-control" id="text"
                                        placeholder="Enter your comment">
                                    <div class="col">
                                        <button class="submit_cmt">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    {{-- @foreach ($showQuestions as $showQuestion)
        <h2>{{ $showQuestion->users->name }}</h2>
        <h2>{{ $showQuestion->body }}</h2>

        @foreach ($showQuestion->answers as $answer)
            <ul> {{ $answer->users->name }}</ul>
            <ul> {{ $answer->body }}</ul>
        @endforeach

        <form method="post" action="{{ route('answer.create', $showQuestion->id) }}" method="POST"
            enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="text" name="body" class="form-control" />
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-warning" value="Add Comment" />
            </div>
        </form>
    @endforeach

    <form class="form-horizontal" action="{{ route('question.create') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <fieldset>
            <!-- Form Name -->
            <legend style="text-align: center; color: blueviolet"><strong>ADD QUESTION</strong></legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="product_name">QUESTION</label>
                <div class="col-md-4">
                    <input id="product_name" name="body" placeholder="question" class="form-control input-md"
                        type="text">
                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="singlebutton"></label>
                <div class="col-md-4">
                    <button id="singlebutton" name="singlebutton" class="btn btn-primary">ADD</button>
                </div>
            </div>


        </fieldset>
    </form> --}}

</body>

</html>
