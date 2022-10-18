<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @foreach ($showQuestions as $showQuestion)
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
    </form>

</body>

</html>
