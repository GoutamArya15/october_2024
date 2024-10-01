
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<style>
    
</style>

<body>
    <div class="wrapper">
        <h2>Registration</h2>
        <form action="{{ route('register_save',['role'=>'user']) }}" method="POST">
            @csrf
            <div class="input-box">
                <input type="text" name="name" placeholder="Enter your name" value="{{old('name')}}">
            </div>
            @error('name')
                <p class="invalid_class">{{$message}}</p>
            @enderror
            <div class="input-box">
                <input type="text" name="email" placeholder="Enter your email" value="{{old('email')}}">
            </div>
            @error('email')
                <p class="invalid_class">{{$message}}</p>
            @enderror
            <div class="input-box">
                <input type="password" name="password" placeholder="Create password">
            </div>
            @error('password')
                <p class="invalid_class">{{$message}}</p>
            @enderror
            <div class="input-box">
                <input type="password" name="confirm_password" placeholder="Confirm password">
            </div>
            @error('confirm_password')
                <p class="invalid_class" style="margin-bottom: 12px">{{$message}}</p>
            @enderror
            <div class="policy">
                <input type="checkbox"  name="condition">
                <h3>I accept all terms & condition</h3>
            </div>
            <div class="input-box button">
                <input type="Submit" value="Register Now">
            </div>
            <div class="input-box button">
                <img src="{{ asset('images/google.png') }}" class="button_image" alt="Google image">
                <a href="{{route('google.redirect')}}"><input type="button" value="Continoue With Google"></a>
            </div>
            <div class="input-box button">
                <img src="{{ asset('images/facebook.png') }}" class="button_image" alt="facebook image">
                <input type="button" value="Continoue With Facebook">
            </div>
            <div class="text">
                <h3>Already have an account? <a href="{{ route('login') }}">Login now</a></h3>
            </div>
        </form>
    </div>
</body>

</html>
