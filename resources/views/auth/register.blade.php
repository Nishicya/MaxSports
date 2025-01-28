<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('/auth/styles.css') }}" rel="stylesheet">
</head>
<body>
    <div class="login-container">
        <div class="login-logo">
            <img src="{{ asset('img/icons/logo.png') }}" alt="Logo">
        </div>
        <h2>Create your account</h2>
        <p class="subtitle">Start renting with an account for a better experience.</p>
        <form action="{{ route('register-user') }}" method="POST">
            @if(Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif
            @if(Session::has('fail'))
            <div class="alert alert-danger">{{ Session::get('fail') }}</div>
            @endif
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="youremail@gmail.com" value="{{ old('email') }}" required>
                <span class="text-danger">@error('email') {{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <label for="name">Username</label>
                <input type="text" name="name" id="name" placeholder="Your Name Here" value="{{ old('name') }}" required>
                <span class="text-danger">@error('name') {{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter your password" required>
                <span class="text-danger">@error('password') {{ $message }} @enderror</span>
            </div>
            <button type="submit">Create Account</button>
        </form>
        <p class="login-link">Already have an account? <a href="{{ route('login') }}">Login</a></p>
    </div>
</body>
</html>
