<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student CRUD</title>
</head>
<style>
    table,
    th,
    td {
        border: 1px solid black;
    }
</style>
<body>
    <h1 style="text-align: center">ตารางรายชื่อ</h1>
    <a href="{{url('add-student')}}" style="background-color:whitesmoke">Add Student</a>
    <table style="width:100%;text-align: center">
        <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Email</td>
                <td>Major</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($student as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->major }}</td>
                    <td style="display: flex;justify-content:center">
                        <a href="{{ url('edit-student/'.$item->id )}}" style="margin-right:5px">Edit</a>
                        <form method="POST" action="{{url('delete-student/'.$item->id)}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>

                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
