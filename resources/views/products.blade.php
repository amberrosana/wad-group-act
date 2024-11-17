<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCTS</title>
</head>
<body>
    <h1>ALL PRODUCTS</h1>

    @foreach ($products as $product)
        <div>Product Name: {{$product->product_name}}</div>   
        <div>Price: ${{$product->price}}</div>    
        <div>Quantity: {{$product->quantity}}</div>    
        <br>
    @endforeach
</body>
</html>