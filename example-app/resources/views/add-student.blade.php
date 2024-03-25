<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Student</title>
</head>
<body>
    <h1 style="text-align: center">เพิ่มรายชื่อ</h1>
    <a href="{{ url('students') }}"> Back</a>
    <form action="{{ url('add-student') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="">Student Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="">Student Email</label>
            <input type="text" name="email" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="">Student Major</label>
            <input type="text" name="major" class="form-control">
        </div>
        <div class="form-group mb-3">
            <button action="{{ url('students') }}" type="submit">Add Student</button>
        </div>
    </form>
</body>
</html>
