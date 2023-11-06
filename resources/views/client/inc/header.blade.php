<header>

    <div class="container">
        <div class="header__top">

            <div class="toggle-menu">
                <i class="fa-solid fa-bars"></i>
            </div>
            <div class="header__top-logo">
                <img src="{{asset('fe')}}/./images/logo.png" alt="">
                <span>GẤU BÔNG ONLINE</span>
            </div>

            <form action="" >
                <div class="header__top-formSearch">
                    <input type="search" placeholder="Nhập sản phẩm cần tìm" class="">
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
                    <ul class="sub__menu">
                        <li class="sub__menu-item"><a href="">GẤU BÔNG TEDDY CAO CẤP</a> </li>
                        <li class="sub__menu-item"><a href="">GẤU BÔNG TEDDY TO</a> </li>
                        <li class="sub__menu-item"><a href="">GẤU BÔNG GIÁ RẺ</a></li>
                    </ul>
                </li>
                <li class="menu__nav-item"><a href="">BỘ SƯU TẬP</a>
                    <ul class="sub__menu">
                        <li class="sub__menu-item"><a href="">GẤU BÔNG TEDDY CAO CẤP</a> </li>
                        <li class="sub__menu-item"><a href="">GẤU BÔNG TEDDY TO</a> </li>
                        <li class="sub__menu-item"><a href="">GẤU BÔNG GIÁ RẺ</a></li>
                    </ul>
                </li>
                <li class="menu__nav-item"><a href="">THÚ BÔNG</a>
                    <ul class="sub__menu">
                        <li class="sub__menu-item"><a href="">GẤU BÔNG TEDDY CAO CẤP</a> </li>
                        <li class="sub__menu-item"><a href="">GẤU BÔNG TEDDY TO</a> </li>
                        <li class="sub__menu-item"><a href="">GẤU BÔNG GIÁ RẺ</a></li>
                    </ul>
                </li>
                <li class="menu__nav-item"><a href="">PHỤ KIỆN</a>
                    <ul class="sub__menu">
                        <li class="sub__menu-item"><a href="">GẤU BÔNG TEDDY CAO CẤP</a> </li>
                        <li class="sub__menu-item"><a href="">GẤU BÔNG TEDDY TO</a> </li>
                        <li class="sub__menu-item"><a href="">GẤU BÔNG GIÁ RẺ</a></li>
                    </ul>
                </li>
                <li class="menu__nav-item"><a href="">GÓC CỦA GẤU</a></li>
                @vite(['resources/sass/app.scss','resources/js/app.js'])
                @guest
                @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @endif

                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest

            </div>

        </div>
    </div>

</header>