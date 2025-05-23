<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tshirst</title>
</head>

<body>
    <h1>Tshirts Inventory</h1>
    <div>
        @if(session()->has('success'))
            <div>
                {{ session('success') }} 
        @endif
    </div>
    <div>
        <a href="{{ route('tshirts.create') }}">Create new</a>
    </div>
    <br><br>
    <table border="1">
        <tr>
            <th>Tshirt Name</th>
            <th>Type</th>
            <th>Price</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach($tshirts as $tshirt)
        <tr>
            <td>{{$tshirt->name}}</td>
            <td>{{$tshirt->type}}</td>
            <td>{{$tshirt->price}}</td>
            <td>
                <a href="{{Route('tshirts.edit', ['tshirt'=>$tshirt])}}">Edit</a>
            </td>
            <td>
                <form method="post" action="{{ route('tshirts.delete', ['tshirt'=>$tshirt]) }}">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete">
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>

</html>