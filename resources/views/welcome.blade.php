<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness 99</title>
    <link rel="stylesheet" href="{{ URL::asset('css/color.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/welcome.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/carousel.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/banner.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">

</head>
<style>

</style>

<body>
    <!-- Header -->
    <header>

        <!-- Scroll Nav -->
        <div class="scroll-nav">
            <marquee direction="left">This section is for scrolling.</marquee>
        </div>
        <!-- Scroll Nav End -->

        <!-- Navbar -->
        <nav class="NavbarItems">
            <div class="left-nav">
                <a href="#" class="menu-bars" onclick="menu()"><img style="margin-left: 20px;" src="https://img.icons8.com/material-outlined/24/000000/menu--v1.png" /></a>
                <img style="height: 2.5rem;" src="{{ URL::asset('img/fflogo.png') }}" alt="" />
                <div class="spacer"></div>
                <div class="location">
                    <img style="height: 1.5rem;margin: 0;" src="https://img.icons8.com/material-outlined/24/000000/marker.png" />
                    <p>Hello <br /> <span>Select location</span></p>
                </div>
            </div>
            <div class="search">
                <div class="search">
                    <input type="text" placeholder="Search..." />
                    <img class="search-icon" src="https://img.icons8.com/material-outlined/30/000000/search.png" />
                </div>
            </div>
            <ul class="nav-menu">
                <li><a class="nav-links" href="#" onclick="login()">
                    Login
                </a></li>
            </ul>
        </nav>
        <!-- Side menu -->
        <div class="side-menu" id="side-menu">
            <ul class="nav-menu-items">
                <li class="navbar-toggle">
                    <a href="#" class="menu-bars" onclick="menu()">
                        <img src="https://img.icons8.com/material-outlined/24/ffffff/delete-sign.png" />
                    </a>
                </li>
                <li class="nav-text">
                    <a href="#">
                        <img src="https://img.icons8.com/ios-glyphs/24/ffffff/swimming.png" />
                        <span>Swimming</span>
                    </a>
                </li>
                <li class="nav-text">
                    <a href="#">
                        <img src="https://img.icons8.com/ios-glyphs/24/ffffff/swimming.png" />
                        <span>Walking</span>
                    </a>
                </li>
                <li class="nav-text">
                    <a href="#">
                        <img src="https://img.icons8.com/ios-glyphs/24/ffffff/swimming.png" />
                        <span>Jogging</span>
                    </a>
                </li>
                <li class="nav-text">
                    <a href="#">
                        <img src="https://img.icons8.com/ios-glyphs/24/ffffff/swimming.png" />
                        <span>Running</span>
                    </a>
                </li>
                <li class="nav-text">
                    <a href="#">
                        <img src="https://img.icons8.com/ios-glyphs/24/ffffff/swimming.png" />
                        <span>Dog Walker</span>
                    </a>
                </li>
                <li class="nav-text">
                    <a href="#">
                        <img src="https://img.icons8.com/ios-glyphs/24/ffffff/swimming.png" />
                        <span>Park Mates</span>
                    </a>
                </li>
                <li class="nav-text">
                    <a href="#">
                        <img src="https://img.icons8.com/ios-glyphs/24/ffffff/swimming.png" />
                        <span>IT Partners</span>
                    </a>
                </li>
                <li class="nav-text">
                    <a href="#">
                        <img src="https://img.icons8.com/ios-glyphs/24/ffffff/swimming.png" />
                        <span>LAW</span>
                    </a>
                </li>
                <li class="nav-text">
                    <a href="#">
                        <img src="https://img.icons8.com/ios-glyphs/24/ffffff/swimming.png" />
                        <span>Teaching</span>
                    </a>
                </li>
                <li class="nav-text">
                    <a href="#">
                        <img src="https://img.icons8.com/ios-glyphs/24/ffffff/swimming.png" />
                        <span>Children Helpers</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Side menu End -->

        <!-- Login Model -->
        <div class="login" id="login">
            <div class="login-class">
                <div style="float: right;" class="menu-bars" onclick="login()">
                    <img src="https://img.icons8.com/material-outlined/15/000000/delete-sign.png" />
                </div>
                <h1>Welcome to Fitness</h1>
                <h4>Sign In using</h4>
                <div class="input_field">
                    <label htmlFor="">Email or Phone No.</label>
                    <input type="email" name="email" placeholder="example@gmail.com" id="" />
                </div>
                <div class="input_field">
                    <label htmlFor="">Password</label>
                    <input type="password" name="password" placeholder="Min 8 character" id="" />
                </div>
                <div class="login_btn">
                    <button>Login</button>
                </div>
                <p>Forgot Password ?</p>
                <div class="login_btn">
                    <button class="register-btn" onClick="register()">New to Fitness? Register Here</button>
                </div>
                <div class="google-field">
                    <small>OR Continue with</small>
                </div>
                <div class="google-btn">
                    <div class="btn-1">
                        <img src="https://img.icons8.com/color/48/ffffff/google-logo.png" />
                        <p>Google</p>
                    </div>
                    <div class="btn-2">
                        <img src="https://img.icons8.com/color/48/ffffff/facebook-new.png" />
                        <p>FaceBook</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login Model End -->

        <!-- Register -->
        <div class="sign" id="register">
            <div class="sign-class">
                <div style="float: right;" class="menu-bars" onclick="register()">
                    <img src="https://img.icons8.com/material-outlined/15/000000/delete-sign.png" />
                </div>
                <h1>Welcome to Fitness</h1>
                <h4>Join to use</h4>
                <div class="field">
                    <div class="input_field">
                        <label htmlFor="">First Name</label>
                        <input type="text" name="first" placeholder="First Name" id="" />
                    </div>
                    <div class="input_field">
                        <label htmlFor="">Last Name</label>
                        <input type="text" name="last" placeholder="Last Name" id="" />
                    </div>
                </div>
                <div class="field">
                    <div class="input_field">
                        <label htmlFor="">Email or Phone No.</label>
                        <input type="email" name="email" placeholder="example@gmail.com" id="" />
                    </div>
                    <div class="input_field">
                        <label htmlFor="">Password</label>
                        <input type="password" name="password" placeholder="Min 8 character" id="" />
                    </div>
                </div>
                <div class="input_field">
                    <label htmlFor="">Phone No.</label>
                    <input type="phone" name="phone" placeholder="9999999999" id="" />
                </div>
                <div class="login_btn">
                    <button>Sign Up</button>
                </div>
                <div class="google-field">
                    <small>OR Continue with</small>
                </div>
                <div class="google-btn">
                    <div class="btn-1">
                        <img src={google} alt="" />
                        <p>Google</p>
                    </div>
                    <div class="btn-2">
                        <img src={facebook} alt="" />
                        <p>FaceBook</p>
                    </div>
                </div>
                <div class="already">
                    <p>Have a account, <span onclick="register()">Sign In</span></p>
                </div>
            </div>
        </div>
        <!-- Register End -->

        <!-- Navbar End -->

    </header>
    <!-- Header End -->

    <!-- Main -->
    <main>
        <!-- Carousel -->
        <div class="slideshow-container">
            <div class="mySlides fade">
                <img src="{{ URL::asset('img/img_nature_wide.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="{{ URL::asset('img/img_snow_wide.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="{{ URL::asset('img/img_mountains_wide.jpg') }}" style="width:100%">
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

        </div>
        <br>

        <div style="text-align:center;">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
        <!-- Carousel End -->

        <!-- Banners -->
        <div class="banner-field">
            <div class="banner" style="background-color: #FF9300;"></div>
            <div class="banner" style="background-color: #1a3166;"></div>
            <div class="banner" style="background-color: #407bff;"></div>
        </div>
        <!-- Banners End -->

    </main>
    <!-- Main End-->


    <script src="{{URL::asset('js/navbar.js')}}"></script>
    <script src="{{URL::asset('js/carousel.js')}}"></script>
</body>

</html>
