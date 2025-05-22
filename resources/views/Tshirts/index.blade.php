<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tshirst</title>
</head>

<body>
    <h1>Tshirts Inventory</h1>
    <br><br>
    <table border="1">
        <tr>
            <th>Tshirt Name</th>
            <th>Type</th>
            <th>Price</th>
        </tr>
        @foreach($tshirts as $tshirt)
        <tr>
            <td>{{$tshirt->name}}</td>
            <td>{{$tshirt->type}}</td>
            <td>{{$tshirt->price}}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>