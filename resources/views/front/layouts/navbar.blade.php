<div class="wrapper">
    <div class="navbar">
        <div class="menu">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Contact</a></li>
                @auth()
                <li><a href="{{route('logout')}}">Logout</a></li>
                @endauth
                @guest()    
                <li><a href="{{route('register')}}">Register</a></li>
                <li><a href="{{route('login')}}">Login</a></li>
                @endguest
            </ul>
        </div>
        <div style=>
            <div class="searchbar">
                <input type="text" placeholder="search">
                <div class="icon">
                    <i class="fas fa-search"></i>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    console.log("hello");

    $(".fa-search").click(function() {
        $(".icon").toggleClass("active");
        $("input[type='text']").toggleClass("active");
    });
</script>
