<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show</title>
</head>
<body>
    <p>Id: {{ $student->id }}</p>
    <p>Name: {{ $student->name }}:</p>
    <p>Score: {{ $student->score }}</p>
    <br>
    <p>Activities: </p>
    @foreach ($student ->activities as $activity)
        <p>{{ $activity->name }}</p>
    @endforeach
</body>
</html>