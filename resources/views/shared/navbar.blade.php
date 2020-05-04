
            <div class="container">
              <div class="flex-container">
                <div class="navbar-logo">
                  <a class="nav-link" href="/">
                    <img src="/storage/project_images/Manifesto.png" alt="Logo">
                  </a>
                </div>
                    
                <!-- Left Side Of Navbar -->

                {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/posts/create">Create Post</a>
                        </li>
                    </ul> --}}
                   
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
                    
                    <!-- Right Side Of Navbar -->
                    
                        <!-- Authentication Links -->
                        @guest
                            <li class="navbar-item">
                                <a href="{{ route('login') }}">{{ __('SIGN IN') }}</a>
                            </li>
                            @if (Route::has('register'))
                                
                            @endif
                             @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
                </div>
            </div>