<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
</head>
<body>
    <h1>product</h1>
    <div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>name</th>
                <th>qty</th>
                <th>price</th>
                <th>description</th>
            </tr>
            @foreach ( $products as $product )
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->qty}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->description}}</td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
