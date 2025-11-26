<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>

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

    <h1>All products</h1>

    <a href="{{ route('products.create') }}" class="button">Add New product</a>

    <table style="width:100%">
        <tr>
            <th>ID</th>
            <th>name</th>
            <th>description</th>
            <th>price</th>
            <th>category</th>
            <th>Actions</th>
        </tr>
        @if (isset($products) and !empty($products))
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->product_description }}</td>
                    <td>{{ $product->product_price }}</td>
                    <td>{{ $product->category->category_name }}</td>
                    <td>
                        <a href="{{ route('products.edit', $product->id) }}" class="button">Edit</a>

                        <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                            style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="button">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @endif
    </table>
</body>

</html>
