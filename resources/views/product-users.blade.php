<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCT'S USERS</title>
</head>
<body>
<h1>{{$product->product_name}}'s Costumers</h1>
    <br>
    @foreach ($product->users as $user)
        <div>Name: {{$user->name}}</div>
        <div>Address: {{$user->address}}</div>
        <div>Email: {{$user->email}}</div>
        <div>Contact Number: {{$user->contact_number}}</div>
        <br>
    @endforeach
</body>
</html>