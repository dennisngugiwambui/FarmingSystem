<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background: url('https://media.istockphoto.com/id/1389848476/photo/cropped-shot-of-a-farmer-holding-soil.jpg?s=2048x2048&w=is&k=20&c=xXGgy7Wc0vIW4Jje7-yjOQ87oRPYfRpD0hidb_gRoZc=') center/cover no-repeat;
            background-size: cover;
        }

        .login-container {
            display: flex;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 80%;
            max-width: 600px;
        }

        .login-image {
            flex: 1;
        }

        .login-content {
            flex: 1;
            padding: 40px;
        }

        .login-header {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #555;
        }

        input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .login-btn {
            width: 100%;
            padding: 10px;
            background-color: #4e54c8;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-btn:hover {
            background-color: #324190;
        }
        .login-image {
            flex: 1;
            background: url('https://images.rawpixel.com/image_800/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDIzLTA4L3Jhd3BpeGVsb2ZmaWNlMTFfcGhvdG9fb2ZfYWZyaWNhbl9mYXJtZXJfaGFydmVzdGluZ192ZWdldGFibGVfZl9kZTY2YmE1ZC0wMmJmLTRhNmUtYWJiNC03YmFkNWNiMzc0OTNfMS5qcGc.jpg') center/cover no-repeat;
        }

        @media only screen and (max-width: 768px) {
            .login-container {
                flex-direction: column;
                width: 90%;
            }
            .login-content {
                padding: 20px;
            }
        }
    </style>
</head>
<body>

<div class="login-container">
    <div class="login-image"></div>
    <div class="login-content">
        <div class="login-header">
            <h2>Login</h2>
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" placeholder="Enter your phone">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password">
        </div>
        <button class="login-btn" type="submit">Login</button>
    </div>
</div>

</body>
</html>
