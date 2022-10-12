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
        <a href="{{ route('vocabulary', $vocabulary->id) }}">
            <h3>{{ $vocabulary->word }}</h3>
        </a>
    @endforeach

</body>

</html>
