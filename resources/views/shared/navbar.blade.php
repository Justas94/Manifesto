
<div class="container">
    <div class="flex-container">
        <div class="navbar-logo">
            <a class="nav-link" href="/">
                <img src="/storage/project_images/Manifesto.png" alt="Logo">
            </a>
        </div>

    <!-- Authentication Links -->
    @guest
        @if (Route::has('register'))
            <div class="navbar-right">
        <!-- Right Side Of Navbar -->
                <ul class="navbar-list-items">
                <!-- Navigation list -->
                    <li class="navbar-item">
                        <a href="/about">ABOUT</a>
                    </li>
                    <li class="navbar-item">
                        <a href="/services">BLOG POSTS</a>
                    </li>
                    <li class="navbar-item">
                        <a  href="/posts">GALLERY</a>
                    </li>
                    <li class="navbar-item">
                        <a href="{{ route('login') }}">{{ __('SIGN IN') }}</a>
                    </li>
        @endif
            @else
            <div class="menu-wrap">
                <input type="checkbox" class="toggler" />
                <div class="hamburger">
                    <div></div>
                </div>
                <div class="menu">
                    <div>
                    <div>
                <ul>
                    <li>
                        <a href="/about">CREATE ARTICLE</a>
                    </li>
                    <li>
                        <a href="/services">ARTICLES</a>
                    </li>
                    <li>
                        <a  href="/posts">GALLERY</a>
                    </li>
                    <li>
                        <a  href="{{ route('user.edit') }}">EDIT PROFILE</a>
                    </li>

                    <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">LOGOUT</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
                        </div>
                        </li>
                @endguest
                </ul>
            </div>
        </div>
    </div>
</div>






