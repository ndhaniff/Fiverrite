<nav class="main-nav navbar navbar-expand-md navbar-dark bg-dark">
                    <!-- Branding Image -->
                    <a class="navbar-brand brand-logo" href="{{ url('/') }}">
                        {{ config('app.name', 'Fiverrite') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                    <!-- Left Side Of Navbar -->
                            <form class="search-form form-inline mr-auto">
                                <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                                <span class="input-group-addon">$</span>
                            </form>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right bg-dark">
                        <!-- Authentication Links -->
                        @guest
                            <li  class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                            <li  class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
        </nav>