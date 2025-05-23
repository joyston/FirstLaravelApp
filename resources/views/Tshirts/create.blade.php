<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new</title>
</head>

<body>
    <h1>Add new Tshirt</h1>
    <div>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
        </div>
    <form action="{{route('tshirts.store')}}" method="post">
        @csrf
        @method('post')
        <label>Name: </label><input type="text" name="name">
        <br><br>
        <label>Type: </label>
        <input type="radio" name="type" value="Polo">Polo
        <input type="radio" name="type" value="RoundNeck">Round Neck
        <br><br>
        <label>Price: </label><input type="number" name="price" step=".01">
        <br><br><input type="submit">
    </form>
</body>

</html>