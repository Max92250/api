<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('https://asdcoagro.com/fff7fa47/https/ea8462/public-assets.typeform.com/public/mega-menu/helpcenter.png'); 
            background-size: cover;
            font-family: 'Arial', sans-serif;
        }

        .container {
            width:70%;
            height:50%;
            display: grid;
            background-image: url('https://assets.materialup.com/uploads/df18288b-d2a9-4cc7-9252-d2818a853b84/preview.gif');
            opacity: 0.8;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            background-color: rgba(255, 255, 255, 0.9); 
            padding: 40px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-container {
            grid-column: span 1;
        }

        .image-container {
            grid-column: span 1;
            display: flex;
            align-items: center;
            justify-content: center;
       
        }

        h2 {
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            margin-bottom: 8px;
            color: #333;
        }

        input {
            padding: 12px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            width: 100%;
            transition: border-color 0.3s ease;
        }

        input:hover,
        input:focus {
            border-color: #4CAF50;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

        img {
            width: 70%;
            height: 80%;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
       
        <div class="image-container">
            <!-- Add your image here using an <img> tag -->
            <img src="https://www.shutterstock.com/image-vector/shop-logo-good-260nw-1290022027.jpg"  alt="Image description">
        </div>
        <div class="form-container">
            <h2>Register</h2>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <button type="submit">Register</button>
            </form>
        </div>
    </div>
</body>
</html>
