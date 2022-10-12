<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @foreach ($kinds as $kind)
        <a href="{{ route('kind', $kind->id) }}">
            <h2>{{ $kind->kind_name }}</h2>
        </a>
    @endforeach

</body>

</html>
