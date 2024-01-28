@extends('app')

@section('content')
    <div class="cont">
        <div class="form sign-in">
            <h2>Sign In</h2>
            <label>
                <span>Email Address</span>
                <input type="email" name="email">
            </label>
            <label>
                <span>Password</span>
                <input type="password" name="password">
            </label>
            <button class="submit" type="button">Sign In</button>

            <div class="social-media">
                <ul>
                    <li><img src="images/facebook.png"></li>
                    <li><img src="images/twitter.png"></li>
                    <li><img src="images/linkedin.png"></li>
                    <li><img src="images/instagram.png"></li>
                </ul>
            </div>
        </div>

        <div class="sub-cont">
            <!-- ... (the rest of the content) ... -->
        </div>
    </div>
@endsection
