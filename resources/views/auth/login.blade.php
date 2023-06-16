<!DOCTYPE html>
<html lang="en">
<x-auth-session-status class="mb-4" :status="session('status')" />
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width ,initial-scale=1.0">
    <title>HolidayTrails</title>
    <link rel="stylesheet" href="{{ asset('assets/login.css') }}">
    <link rel="shortcut icon" type="x-icon" href="{{ asset('assets/images/icon.png') }}">
</head>

<body>
    <header>
        <h2 class="logo">HolidayTrails</h2>
        <nav class="navigation">
            <button class="btnLogin-popup">Login</button>
        </nav>
    </header>
    <div class="wrapper">
        <span class="icon-close"><ion-icon name="close"></ion-icon></span>

        <div class="form-box login">
            <h2>Welcome Back!</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                        <input required id="login" type="text" name="login" :value="old('login')">
                        <label for="login" :value="__('Email/Name')">Email/Name</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" required id="password" name="password" type="password">
                        <label>Password</label>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Remember me</label>
                    <a href="{{ route('password.request') }}">Forgot Password?</a>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="login-register">
                    <p>Dont't have an account?<a href="#" class="register-link">Register</a></p>
                </div>
            </form>
        </div>

        <div class="form-box register">
            <h2>Sign Up</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="input-box">
                    <span class="icon"><ion-icon name="person-circle"></ion-icon></ion-icon></span>
                        <input type="text" id="name" name="name" :value="old('name')" required>
                        
                        <label for="name" :value="__('Name')">Name</label>
                        <x-input-error :messages="$errors->get('name')"/>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                        <input type="email" id="email" name="email" :value="old('email')"  required>
                        
                        <label for="email" :value="__('Email')">Email</label>
                        <x-input-error :messages="$errors->get('email')"/>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" id="password" name="password" required>
                        
                        <label for="password" :value="__('Password')">Password</label>
                        <x-input-error :messages="$errors->get('password')" />
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" id="password_confirmation" name="password_confirmation" required>
                        <label for="password_confirmation" :value="__('Confirm Password')">Re-enter Password</label>
                        <x-input-error :messages="$errors->get('password_confirmation')" />
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">I agree to terms & conditions</label>
                </div>
                <button type="submit" class="btn">Register</button>
                <div class="login-register">
                    <p>Already have an account?<a href="#" class="login-link">Login</a></p>
                </div>
            </form>
        </div>

    </div>
    <script src="{{ asset('assets/script.js') }}"></script>
    <script type="module" src="{{ asset('https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js') }}"></script>
    <script nomodule src="{{ asset('https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js') }}"></script>
</body>
</html>