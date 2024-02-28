<x-layout>
<body>
    <h1>Enter an asset</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{ route('asset.store') }}">
        @csrf
        @method('post')
        <div>
            <label>Employee ID</label>
            <input type="text" name="employee_id" placeholder="Employee ID"/>
        </div>
        <div>
            <label>Item</label>
            <input type="text" name="item" placeholder="Item"/>
        </div>
        <div>
            <label>Model</label>
            <input type="text" name="model" placeholder="Model"/>
        </div>
        <div>
            <label>Serial</label>
            <input type="text" name="serial" placeholder="Serial"/>
        </div>
        <div>
            <input type='submit' value="Add Asset">
        </div>

    </form>
</body>
</x-layout>