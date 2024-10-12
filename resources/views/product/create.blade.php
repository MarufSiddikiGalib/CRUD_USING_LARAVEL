<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <!-- Optional: Include Bootstrap for better styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Add New Product</h2>
    
    <!-- Laravel Form for Adding a Product -->
    <form method="POST" action="{{ route('products.store') }}">
        @csrf <!-- CSRF token for security -->

        <div class="mb-3">
            <label for="name" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter product name" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Product Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter product description" required></textarea>
        </div>

        <div class="mb-3">
            <label for="size" class="form-label">Product Size</label>
            <input type="text" class="form-control" id="size" name="size" placeholder="Enter product size" required>
        </div>

        <button type="submit" class="btn btn-primary">Add Product</button>
    </form>
</div>

</body>
</html>
