<x-layout>
<body>
    <h1>Assets</h1>
    <div>
        @if(session()->has('success'))
        <div>
            {{session('success')}}
        </div>
        @endif
    </div>
    <div>
        <div class="log-button">
            <button onclick="window.location='{{ route('asset.create') }}'" class="btn btn-log">Log a New Asset</button>
        </div>
        <table class="asset-table">
            <thead>
                <tr>
                    <th>Employee ID</th>
                    <th>Item</th>
                    <th>Model</th>
                    <th>Serial</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
            @foreach($assets as $asset)
            <tr>
                <td>{{$asset->employee_id}}</td>
                <td>{{$asset->item}}</td>
                <td>{{$asset->model}}</td>
                <td>{{$asset->serial}}</td>
                <td>
                    <form method="get" action="{{ route('asset.edit', ['asset' => $asset]) }}">
                    @csrf
                        <button type="submit" class="btn btn-edit" ><span class="material-symbols-outlined">edit</span>
                        </button>
                    </form>
                </td>
                <td>
                    <form method="post" action="{{route('asset.delete', ['asset' => $asset])}}">
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
</body>
</x-layout>