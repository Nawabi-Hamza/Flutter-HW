<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
</head>
<body>

<h2>Add Product</h2>

@if($errors->any())
    <ul style="color:red">
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form method="POST" action="{{ route('store') }}">
    @csrf

    Name: <input type="text" name="name"><br><br>
    Price: <input type="number" name="price"><br><br>
    Description:<br>
    <textarea name="description"></textarea><br><br>

    <button type="submit">Save</button>
</form>

</body>
</html>
