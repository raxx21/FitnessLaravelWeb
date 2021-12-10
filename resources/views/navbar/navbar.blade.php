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
            <p>Hello  <span>Select location</span></p>
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
    <div class="search1">
        <div class="search1">
            <input type="text" placeholder="Search..." />
            <img class="search1-icon" src="https://img.icons8.com/material-outlined/30/000000/search.png" />
        </div>
    </div>
</nav>

<!-- Side NavBar -->
@include('navbar.sideNavbar')

<!-- Login -->
@include('auth.login')

<!-- Register -->
@include('auth.sign')
