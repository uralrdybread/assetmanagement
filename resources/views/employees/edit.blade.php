<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit An Employee</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('employee.update', ['employee' => $employee])}}">
        @csrf
        @method('put')
        <div>
            <label>First Name</label>
            <input type="text" name="name" placeholder="Name" value="{{$employee->name}}"/>
        </div>
        <div>
            <label>Last Name</label>
            <input type="text" name="last_name" placeholder="Last Name" value="{{$employee->last_name}}"/>
        </div>
        <div>
            <label>Phone Number</label>
            <input type="text" name="phone_number" placeholder="Phone Number" value="{{$employee->phone_number}}"/>
        </div>
        <div>
            <label>Email</label>
            <input type="text" name="email" placeholder="Email" value="{{$employee->email}}"/>
        </div>
        <div>
            <input type='submit' value="Edit Employee">
        </div>

    </form>
</body>
</html>