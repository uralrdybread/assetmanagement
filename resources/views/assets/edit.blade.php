<x-layout>
<body>
    <h1>Edit An Asset</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form class="addedit" method="post" action="{{route('asset.update', ['asset' => $asset])}}">
        @csrf
        @method('put')
        <div>
            <label>Item</label>
            <input type="text" name="item" placeholder="Item" value="{{$asset->item}}"/>
        </div>
        <div>
            <label>Model</label>
            <input type="text" name="model" placeholder="Model" value="{{$asset->model}}"/>
        </div>
        <div>
            <label>Serial</label>
            <input type="text" name="serial" placeholder="Serial" value="{{$asset->serial}}"/>
        </div>
        <div>
            <input type='submit' value="Edit Asset">
        </div>

    </form>
</body>
</x-layout>