<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>update product</title>

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
    <h1>Update Product</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Name:</label><br>
        <input type="text" name="name" value="{{ $product->product_name }}"><br><br>

        <label>description:</label><br>
        <textarea name="description">{{ $product->product_description }}</textarea><br><br>


        <label>price:</label><br>
        <input type="text" name="product_price" value="{{ $product->product_price }}"><br><br>

        <label for="category_id">Category</label>
        <select name="category_id" id="category_id" required>
            <option value="">Select Category</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->category_name }}
                </option>
            @endforeach
        </select>




        <button type="submit">Update Product</button>
    </form>
</body>

</html>
