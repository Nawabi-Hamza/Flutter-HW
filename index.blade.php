<!DOCTYPE html>
<html>
<head>
    <title>Products List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: 40px auto;
            background: #fff;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background: #2c3e50;
            color: white;
        }
        a {
            text-decoration: none;
            padding: 6px 10px;
            background: #3498db;
            color: white;
            border-radius: 4px;
        }
        .delete-btn {
            background: #e74c3c;
            color: white;
            border: none;
            padding: 6px 10px;
            cursor: pointer;
        }
        .success {
            color: green;
            margin-bottom: 10px;
        }
        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>
</head>
<body>

<div class="container">

    <div class="top-bar">
        <h2>Products List</h2>
        <a href="{{ route('create') }}">➕ Add Product</a>
    </div>

    {{-- Success Message --}}
    @if(session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>

        @forelse($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->description }}</td>
                <td>
                    <a href="{{ route('edit', $product->id) }}">Edit</a>

                    <form action="{{ route('destroy', $product->id) }}"
                          method="POST"
                          style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button class="delete-btn"
                                onclick="return confirm('Are you sure?')">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">No products found</td>
            </tr>
        @endforelse
    </table>

</div>

</body>
</html>
