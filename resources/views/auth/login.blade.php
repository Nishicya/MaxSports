<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="{{asset('/auth/styles.css')}}" rel="stylesheet">
</head>
<body>
    <div class="login-container">
        <div class="login-logo">
            <img src="{{ asset('img/icons/logo.png') }}" alt="Logo">
        </div>
        <h2>Log in to your account</h2>
        <p class="subtitle">Log in to your account for a better experience.</p>
        <form method="POST" action="{{ route('login-user') }}">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="youremail@gmail.com" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
        <p class="signup-link">Don't have an account? <a href="{{ route('register-user') }}">Create Account</a></p>
    </div>
</body>
</html>
