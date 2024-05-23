<div id="header" class="header-block-top">
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <header id="header" class="header-block-top">
        <div class="container">
            <div class="row">
                <div class="main-menu">
                    <!-- navbar -->
                    <nav class="navbar navbar-default" id="mainNav">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="logo">
                                <a class="navbar-brand js-scroll-trigger logo-header" href="#">
                                    <img src="{{ asset('webassets/images/logo.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="active"><a href="#banner">Home</a></li>
                                <li><a href="#about">About us</a></li>
                                <li><a href="#menu">Menu</a></li>
                                <li><a href="#our_team">Team</a></li>
                                <li><a href="#gallery">Gallery</a></li>
                                <li><a href="#blog">Blog</a></li>
                                <li><a href="#reservation">Reservaion</a></li>
                                <li><a href="#footer">Contact us</a></li>
                                <li>
                                    <a href="{{ route('cart')}}" title="View Cart" class="icon-link">
                                        <span class="sub">{{$countCart}}</span>
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('favorites') }}" title="View Favorites" class="icon-link">
                                        <span class="sub">{{$countFavorites}}</span>
                                        <i class="fa fa-heart"></i>
                                    </a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <span class="glyphicon glyphicon-user"></span> <b class="caret"></b>
                                    </a>
                                    <ul class="dropdown-menu">
                                        @auth
                                            <li>
                                                <a href="{{ route('profile.edit') }}">Profile</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('orders') }}">My Orders</a>
                                            </li>
                                            <li>
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    <a href="route('logout')"
                                                        onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                                        Logout
                                                    </a>
                                                </form>

                                            </li>
                                        @else
                                            <li><a href="{{ route('login') }}">Login</a></li>
                                            <li><a href="{{ route('register') }}">Sign In</a></li>
                                        @endauth
                                    </ul>

                                </li>
                            </ul>
                        </div>
                        <!-- end nav-collapse -->
                    </nav>
                    <!-- end navbar -->
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </header>
    <!-- end header -->
</div>
