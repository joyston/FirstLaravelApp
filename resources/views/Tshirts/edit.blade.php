<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
</head>

<body>
    <h1>Edit Tshirt</h1>
    <div>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
        </div>
    <form action="{{route('tshirts.update', ['tshirt'=>$tshirt])}}" method="post">
        @csrf
        @method('put')
        <label>Name: </label><input type="text" name="name" value={{ $tshirt->name }}>
        <br><br>
        <label>Type: </label>
        <input type="radio" name="type" value="Polo" @if($tshirt->type = 'Polo')checked @endif />Polo
        <input type="radio" name="type" value="RoundNeck" @if($tshirt->type = 'RoundNeck')checked @endif />Round Neck
        <br><br>
        <label>Price: </label><input type="number" name="price" value={{ $tshirt->price }} step=".01">
        <br><br><input type="submit">
    </form>
</body>

</html>