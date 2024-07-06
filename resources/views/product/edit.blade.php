<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit Product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('product.update', ['product' => $product])}}">
        @csrf
        @method('put')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Product Name" value="{{$product->name}}" />
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="Product Description" value="{{$product->description}}" />
        </div>
        <div>
            <label>Price</label>
            <input type="number" name="price" placeholder="Product Price" step="0.01" value="{{$product->price}}" />
        </div>
        <div>
            <label>Quantity</label>
            <input type="number" name="quantity" placeholder="Product Quantity" value="{{$product->quantity}}" />
        </div>
        <div>
            <input type="submit" value="Update" />
        </div>
    </form>     
</body>
</html>