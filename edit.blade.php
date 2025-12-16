<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
</head>
<body>

<h2>Edit Product</h2>

<form method="POST" action="{{ route('update', $product->id) }}">
    @csrf
    @method('PUT')

    Name: <input type="text" name="name" value="{{ $product->name }}"><br><br>
    Price: <input type="number" name="price" value="{{ $product->price }}"><br><br>
    Description:<br>
    <textarea name="description">{{ $product->description }}</textarea><br><br>

    <button type="submit">Update</button>
</form>

</body>
</html>
