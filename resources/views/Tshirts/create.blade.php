<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new</title>
</head>

<body>
    <h1>Add new Tshirt</h1>
    <form action="{{tshirts.store}}" method="post">
        <label>Name: </label><input type="text" name="tshirtName">
        <br><label>Type: </label>
        <input type="radio" name="tshirttype" value="Polo">Polo
        <input type="radio" name="tshirttype" value="RoundNeck">Round Neck
        <br><label>Price: </label><input type="number" name="tshirtprice">
        <br><input type="submit">
    </form>
</body>

</html>