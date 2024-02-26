<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
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
</html>