<x-layout>
    <h1>Employees</h1>
    <div>
        @if(session()->has('success'))
        <div>
            {{session('success')}}
        </div>
        @endif
    </div>
    
    <div>
        <div class="log-button">
            <button onclick="window.location='{{ route('employee.create') }}'" class="btn btn-log">Enter a new employee</button>
        </div>
        <table class="employee-table">
            <thead>
            <tr>
                <th>Employee ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            @foreach($employees as $employee)
            <tr>
                <td>{{$employee->id}}</td>
                <td>{{$employee->name}}</td>
                <td>{{$employee->last_name}}</td>
                <td>{{$employee->phone_number}}</td>
                <td>{{$employee->email}}</td>
                <td>
                    <form method="get" action="{{ route('employee.edit', ['employee' => $employee]) }}">
                    @csrf
                        <button type="submit" class="btn btn-edit" ><span class="material-symbols-outlined">edit</span>
                        </button>
                    </form>
                </td>
                <td>
                    <form method="post" action="{{route('employee.delete', ['employee' => $employee])}}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-delete">
                        <span class="material-symbols-outlined">
                            delete
                        </span></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</x-layout>