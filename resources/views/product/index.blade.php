<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Product</h1>
    @if(session()->has('success'))
        <div>
            {{session('success')}}
        </div>
    @endif
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Description</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
        @foreach($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->quantity}}</td>
            <td>{{$product->price}}</td>
            <td>
                <a href="{{route('product.edit', ['product' => $product])}}">Edit</a>
                <form method="post" action="{{route('product.delete', ['product' => $product])}}">
                @csrf
                @method('delete')
                <input type="submit" value="Delete" />
                </form>
            </td>
        </tr>   
        @endforeach
    </table>
</body>
</html>