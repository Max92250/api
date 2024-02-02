<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('https://img.freepik.com/free-photo/shopping-cart-filled-with-coins-copy-space-background_23-2148305919.jpg?size=626&ext=jpg&ga=GA1.1.1546980028.1704153600&semt=ais'); 
            background-size: cover;
            font-family: 'Arial', sans-serif;
        }

        .container {
            width:65%;
            height:50%;
            display: grid;
            background-image: url('https://previews.123rf.com/images/sompongtom/sompongtom1902/sompongtom190200016/118126969-online-shopping-cart-e-commerce-the-supermarket-on-a-blue-background.jpg');
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
           
        </div>
        <div class="form-container">
            <h2>Login</h2>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
</body>
</html>
