<!--===== HEADER =====-->
<header class="l-header">
    <nav class="nav bd-grid">
        <div>
            <a href="/" class="nav__logo" style="font-weight: bolder;">Faizal</a>
        </div>

        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li class="nav__item"><a href="/" class="nav__link">Home</a></li>
                <li class="nav__item"><a href="/about" class="nav__link">Resume</a></li>
                <li class="nav__item blog_item"><a href="/posts" class="nav__link">Posts</a></li>
                <li class="nav__item blog_item"><a href="/categories" class="nav__link">Categories</a></li>
                <li class="nav__item blog_dropdown">
                    <div class="dropdown">
                        <a onclick="myFunction()" class="dropbtn nav__link">Blog</a>
                        <div id="myDropdown" class="dropdown-content">
                            <a href="/posts">Posts</a>
                            <a href="/categories">Categories</a>
                        </div>
                    </div>
                </li>
                @auth
                <li class="nav__item blog_item"><a href="/dashboard" class="nav__link">Dashboard</a></li>

                <li class="nav__item blog_item">
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="collapsed-nav-logout">Sign Out</button>
                    </form>
                </li>
                <li class="nav__item blog_dropdown">
                    <div class="dropdown">
                        <a onclick="loginNav()" class="togglebtn nav__link">Hello, {{ Auth::user()->name }}!</a>
                        <div id="loginDropdown" class="login-content">
                            <a href="/dashboard">Dashboard</a>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit">Sign Out</button>
                            </form>
                        </div>
                    </div>
                </li>
                @else
                <li class="nav__item"><a href="/login" class="nav__link">Sign In</a></li>
                @endauth
            </ul>
        </div>

        <div class="nav__toggle" id="nav-toggle">
            <i class='bx bx-menu'></i>
        </div>
    </nav>
</header>
