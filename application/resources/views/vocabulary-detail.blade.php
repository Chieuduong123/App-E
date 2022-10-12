<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @foreach ($vocabularies as $vocabulary)
        <h3>{{ $vocabulary->word }}</h3>
        <h3>{{ $vocabulary->type_word }}</h3>
        <audio controls>
            <source src="{{ $vocabulary->audio }}" type="audio/ogg">
        </audio>
        <h3>{{ $vocabulary->phonetic }}</h3>
        <h3>{{ $vocabulary->definition }}</h3>
    @endforeach

</body>

</html>
