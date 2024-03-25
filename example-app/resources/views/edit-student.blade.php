<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Student</title>
</head>
<body>
    <h1 style="text-align: center">แก้ไขรายชื่อ</h1>
    <a href="{{ url('students') }}"> Back</a>
    <form action="{{ url('update-student/'.$student->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group mb-3">
            <label for="">Student Name</label>
            <input type="text" name="name" value="{{ $student->name}}" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="">Student Email</label>
            <input type="text" name="email" value="{{ $student->email}}" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="">Student Major</label>
            <input type="text" name="major" value="{{ $student->major}}" class="form-control">
        </div>
        <div class="form-group mb-3">
            <button action="{{ url('students') }}" type="submit">Update Student</button>
        </div>
    </form>
</body>
</html>
