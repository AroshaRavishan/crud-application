<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
</head>
<body>
    <h1>Create Product</h1>
    <form method="post" action="{{ route('product.store') }}">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Enter Name" required />
        </div>

        <div>
            <label for="qty">Qty</label>
            <input type="text" name="qty" placeholder="Enter Qty" required />
        </div>

        <div>
            <label for="price">Price</label>
            <input type="text" step="0.01" name="price" placeholder="Enter Price" required />
        </div>

        <div>
            <label for="description">Description</label>
            <input type="text" name="description" placeholder="Description" />
        </div>

        <div>
            <input type="submit" value="Save new product" />
        </div>
    </form>
</body>
</html>
