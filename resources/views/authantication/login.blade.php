@if (session('success'))
    @dd(session('success')); 
@endif
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="wrapper">
        <h2>Login</h2>
        <form action="{{ route('login_check') }}" method="POST">
            @csrf
            <div class="input-box">
                <input type="text" name="email" placeholder="Enter your email"  value="{{old('email')}}">
            </div>
            @error('email')
                <p class="invalid_class">{{ $message }}</p>
            @enderror
            <div class="input-box">
                <input type="password" name="password" placeholder="Create password">
            </div>
            @error('password')
                <p class="invalid_class" style="margin-bottom: 15px">{{ $message }}</p>
            @enderror
            <div class="text">
                <h3>Already have an account? <a href="{{ route('register') }}">Register now</a></h3>
            </div>
            <div class="text">
                 <a href="{{ route('forgate') }}">forgotton password</a>
            </div>

            <div class="input-box button">
                <input type="Submit" value="Login Now">
            </div>

            <div class="input-box button">
                <img src="{{ asset('images/google.png') }}" class="button_image" alt="Google image">
                {{-- <button><a href="">Continoue With Google</a></button> --}}
                <a href="{{route('google.redirect')}}"><input type="button" value="Continoue With Google"></a>
            </div>
            
            <div class="input-box button">
                <img src="{{ asset('images/facebook.png') }}" class="button_image" alt="facebook image">
                <input type="button" value="Continoue With Facebook">
            </div>

        </form>
    </div>
</body>

</html>
