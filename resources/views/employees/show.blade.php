<x-layout>
<body>
    <div class=employee-info>
    <h1>Employee Information</h1>
    <p>Employee ID: {{ $employee->id }}</p>
    <p>First Name: {{ $employee->name }}</p>
    <p>Last Name: {{ $employee->last_name }}</p>
    <p>Email: {{ $employee->email }}</p>
    </div>
</body>
</x-layout>