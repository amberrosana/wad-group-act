<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER PRODUCTS</title>
</head>
<body>
    <h1>{{$user->name}}'s Ordered Products</h1>
    <br>
    @foreach ($user->products as $product)
        <div>Product Name: {{$product->product_name}}</div>
        <div>Price: {{$product->price}}</div>
        <div>Quantity: {{$product->quantity}}</div>
        <br>
    @endforeach
</body>
</html>