<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
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
        <div>
            <a href="{{route('asset.create')}}">Log a New Asset</a>
        </div>
        <table border='1'>
            <tr>
                <th>Item</th>
                <th>Model</th>
                <th>Serial</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($assets as $asset)
            <tr>
                <td>{{$asset->item}}</td>
                <td>{{$asset->model}}</td>
                <td>{{$asset->serial}}</td>
                <td>
                    <a href="{{route('asset.edit', ['asset' => $asset])}}">Edit</a>
                </td>
                <td>
                    <form method="post" action="{{route('asset.delete', ['asset' => $asset])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="delete">
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>