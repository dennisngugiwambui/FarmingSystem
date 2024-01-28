<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Your Fancy Homepage</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            text-align: center;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #3498db;
        }

        .user-details {
            margin-top: 20px;
        }

        .user-details p {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .logout-btn {
            background-color: #e74c3c;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Welcome to Your Fancy Homepage</h1>
    <div class="user-details">
        <p>Hello, {{ auth()->user()->username }}!</p>
        <p>Your email: {{ auth()->user()->email }}</p>
        <p>Your phone: {{ auth()->user()->phone }}</p>
    </div>
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit" class="logout-btn">Logout</button>
    </form>
</div>
</body>
</html>
