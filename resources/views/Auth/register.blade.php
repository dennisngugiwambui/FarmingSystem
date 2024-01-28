<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
            background-color: rgba(0, 0, 0, 0.5); /* Dark overlay */
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

        .want-to-login {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #555;
        }

        .want-to-login a {
            color: #4e54c8;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .want-to-login a:hover {
            color: #324190;
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
            <h2>Register</h2>
        </div>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                </div>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username">
            </div>

            <div class="form-group input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-phone"></i></span>
                </div>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone">
            </div>

            <div class="form-group input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control" id="email" {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Enter your email">
            </div>

            @if ($errors->has('email'))
                <span class="invalid-feedback text-red">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif


            <div class="form-group input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-lock"></i></span>
                </div>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
            </div>

            <div class="form-group input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-lock"></i></span>
                </div>
                <input type="password" class="form-control" id="confirm-password" name="confirm-password" placeholder="Re-enter your password">
            </div>

            <button class="login-btn" type="submit">Register</button>
        </form>

        <div class="want-to-login">
            <span>Already have an account? </span><a href="#"><i class="fa fa-sign-in-alt"></i> Login here</a>
        </div>
    </div>
</div>

</body>
</html>
