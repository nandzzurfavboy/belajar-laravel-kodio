<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Filter</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Nama Mahasiswa</td>
            <td>Skor</td>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->score }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>