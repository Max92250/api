<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Images to Product</title>
</head>
<body>

    <form action="{{ route('images.store') }}" method="post">
        @csrf
        <label for="product_id">Product ID:</label>
        <input type="text" id="product_id" name="product_id" required>
        <br>
    
        <label for="url1">Image URL 1:</label>
        <input type="url" id="url1" name="url1" required>
        <br>
    
        <label for="url2">Image URL 2:</label>
        <input type="url" id="url2" name="url2" required>
        <br>
    
        <label for="url3">Image URL 3:</label>
        <input type="url" id="url3" name="url3" required>
        <br>
    
        <button type="submit">Add Image</button>
    </form>
    
</body>
</html>
