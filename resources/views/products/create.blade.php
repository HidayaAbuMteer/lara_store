<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>add Products</title>

    <style>
        .button {
            background-color: gray;
            border: none;
            color: white;
            padding: 15px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            float: right;
            cursor: pointer;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>

</head>

<body>
    <h1>Add New Product</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label>Name:</label><br>
        <input type="text" name="product_name"><br><br>

        @error('product_name')
            <div style="color: red;">{{ $message }}</div>
        @enderror

        <label>Description:</label><br>
        <textarea name="product_description"></textarea><br><br>

        <label>price:</label><br>
        <input type="text" name="product_price"><br><br>

        @error('product_price')
            <div style="color:red">{{ $message }}</div>
        @enderror

        <label for="category_id">Category</label>
        <select name="category_id" id="category_id" required>
            <option value="">Select Category</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
            @endforeach
        </select>
        <br><br>
        @error('category_name')
            <div style="color:red">{{ $message }}</div>
        @enderror


        <button type="submit">Add product</button>
    </form>
</body>

</html>
