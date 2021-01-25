<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{ url('css/mystyle.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;1,300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
      <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="{{ route('home') }}"><img src="{{ url('img/logo.png') }}" width="125px"></a>
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('allproduct') }}">Product</a></li>
                        <li><a href="{{ route('cart.view') }}"><img src="{{ url('img/cart.png') }}" width="30px" height="30px">{{ $cart->total_quantity }}</a></li>
                    </ul>
                    <ul id="MenuItems">
                        @if (Auth::check())
                            <li><a href="{{ route('dashboard.index') }}">Chào {{ Auth::user()->name }}</a></li>
                            <li><a href="{{ route('logout') }}">Đăng xuất</a></li>
                        @else
                            <li><a href="{{ route('login') }}">Đăng Nhập</a></li>
                            @endif
                    </ul>
                </nav>

                <img src="{{ url('img/menu.png') }}" class="menu-icon" onclick="menutoggle()">
            </div>
            <div class="row">
                <div class="col-2">
                    <h1>Give Your Workout <br>A new Style</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        <br> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                </div>
                <div class="col-2">
                    <img src="{{ url('img/img-2.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="small-container">
        <div>
            @yield('cartnha')
        </div>
    </div>


    @yield('main')

    @yield('allproduct')

    <!-- -------Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download App</h3>
                    <p>Download app for ios and android</p>
                    <div class="app-logo">
                        <img src="{{ url('img/app-store.png') }}">
                        <img src="{{ url('img/app-store.png') }}">

                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="{{ url('img/logo-white.png') }}">
                    <p>Download app for ios and android</p>
                </div>
                <div class="footer-col-3">
                    <h3>Uses Link</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Spots</li>
                        <li>Return Policy</li>
                        <li>Join Afflible</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow Us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>Youtube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="coppy">Coppyright 2020 : Bi Ti Ho</p>
        </div>
    </div>


</body>
<script>
    var MenuItems = document.getElementById('MenuItems');
    MenuItems.style.maxHeight = "0px";
    function menutoggle() {
        if (MenuItems.style.maxHeight == "0px") {
            MenuItems.style.maxHeight = "200px";

        }
        else {
            MenuItems.style.maxHeight = "0px";
        }
    }
</script>
</html>
