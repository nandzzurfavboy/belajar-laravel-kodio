<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mahasiswa</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Nama Mahasiswa</td>
            <td>Skor</td>
            <td>Action</td>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>
                    <a href="{{ route('show', $student->id) }}">{{ $student->name }}</td></a>
                <td>{{ $student->score }}</td>
                <td>
                    <form action="{{ route('edit', $student->id) }}" method="get">
                        @csrf
                        <button type="submit">edit</button>
                    </form>
                    <form action="{{ route('delete', $student) }}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    Current Page : {{ $students->currentPage() }} <br>
    Total Page : {{ $students->total() }} <br>
    Data per page : {{ $students->perPage() }} <br>

    {{ $students->links('pagination::bootstrap-4') }}
</body>
</html>