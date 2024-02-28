<x-layout>
<body>
    <h1>Enter an Employee</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{ route('employee.store') }}">
        @csrf
        @method('post')
            <label>First Name</label>
            <input type="text" name="name" placeholder="First Name"/>
        </div>
            <label>Last Name</label>
            <input type="text" name="last_name" placeholder="Last Name"/>
        </div>
            <label>Phone Number</label>
            <input type="text" name="phone_number" placeholder="Name"/>
        </div>
        <div>
            <label>Email</label>
            <input type="text" name="email" placeholder="Email"/>
        </div>
        <div>
            <input type='submit' value="Add Employee">
        </div>

    </form>
</body>
</x-layout>