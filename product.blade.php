<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
</head>
<body>

<h2>Products List</h2>

<a href="{{ route('products.create') }}">➕ Add Product</a>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Description</th>
        <th>Action</th>
    </tr>

@foreach($products as $product)
<tr>
    <td>{{ $product->id }}</td>
    <td>{{ $product->name }}</td>
    <td>{{ $product->price }}</td>
    <td>{{ $product->description }}</td>
    <td>
        <a href="{{ route('products.edit', $product->id) }}">✏ Edit</a>

        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit">🗑 Delete</button>
        </form>
    </td>
</tr>
@endforeach

</table>

</body>
</html>
