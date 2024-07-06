<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create Product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('product.store')}}">
        <!-- For Security -->
        @csrf
        @method('post')
        <!-- -->
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Product Name" />
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="Product Description" />
        </div>
        <div>
            <label>Price</label>
            <input type="number" name="price" placeholder="Product Price" step="0.01" />
        </div>
        <div>
            <label>Quantity</label>
            <input type="number" name="quantity" placeholder="Product Quantity" />
        </div>
        <div>
            <input type="submit" value="Create" />
        </div>
    </form>     
</body>
</html>