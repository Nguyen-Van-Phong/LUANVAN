<header>

    <div class="container">
        <div class="header__top">

            <div class="toggle-menu">
                <i class="fa-solid fa-bars"></i>
            </div>
            <div class="header__top-logo">
                <img src="{{asset('fe')}}/./images/logo.png" alt="">
                <a href="{{route('clienthome')}}"> <span>GẤU BÔNG ONLINE</span></a>
            </div>

            <form action="{{route('search')}}" method="get">
                <div class="header__top-formSearch">
                    <input type="text" name="query" placeholder="Nhập sản phẩm cần tìm" class="">
                    <button type="sunmit" class="btn btn-custom-search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            </form>
            <div class="header__top-hotline">
                <i class="fa-solid fa-phone"></i>
                097.989.6616
            </div>
        </div>
    </div>

    <div class="navbar">
        <div class="container">
            <div class="menu__nav">
                <li class="menu__nav-item"><a href="{{route('clienthome')}}">TRANG CHỦ</a></li>
                <li class="menu__nav-item"><a href="">GẤU BÔNG TEDDY CAO CẤP</a>

                </li>
                <li class="menu__nav-item"><a href="">BỘ SƯU TẬP</a>

                </li>
                <li class="menu__nav-item"><a href="">THÚ BÔNG</a>

                </li>
                <li class="menu__nav-item"><a href="">PHỤ KIỆN</a>

                </li>
                <li class="menu__nav-item"><a href="">GÓC CỦA GẤU</a></li>
                @vite(['resources/sass/app.scss','resources/js/app.js'])
                @guest
                @if (Route::has('login'))
                <li class="menu__nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('LOGIN') }}</a>
                </li>
                @endif

                @if (Route::has('register'))
                <li class="menu__nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('REGISTER') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" style="text-transform: uppercase;" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" style="color: #000;" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                            {{ __('LOGOUT') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest

                <li class="cart__right">
                    <a href="{{route('homecart')}}"> <i class="fa-solid fa-cart-shopping"></i></a>
                </li>
            </div>

        </div>
    </div>

</header>