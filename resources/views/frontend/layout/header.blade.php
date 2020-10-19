<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7">
                    <div class="header__top__left">
                        <p>miễn phí vận chuyển, hoàn trả lại trong 7 ngày với bất kỳ lý do.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5">
                    <div class="header__top__right">
                        <form action="{{ route('signOut.post') }}" method="post">
                            @csrf
                            <div class="header__top__links">
                                @if ((Auth::check()) && (Auth::user()->jurisdiction == null))
                                    <span style="color: #e63334; text-transform: uppercase;" >Chào bạn - {{ Auth::user()->name }}</span>
                                    <button type="submit" class="btn text-white" >Sign out</button>
                                @else
                                    <a href="{{ route('signIn') }}">Sign in</a>
                                    <a href="{{ route('signUp') }}">Sign up</a>
                                @endif
                            </div>
                            <div class="header__top__hover">
                                <span>EN <i class="arrow_carrot-down"></i></span>
                                <ul>
                                    <li>EN</li>
                                    <li>VI</li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="header__logo">
                    <a href="{{ route('home') }}">THUCLINH-SHOP..</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <nav class="header__menu mobile-menu">
                    <ul>
                        <li class="active"><a href="{{ route('home') }}">trang chủ</a></li>
                        <li><a href="{{ route('eshop') }}">gian hàng</a></li>
                        <li><a href="">tin tức</a></li>

                        <li><a href="./contact.html">liên hệ</a></li>

                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="header__nav__option">
                    <span class="search-switch"><img src="frontend/img/icon/search.png" alt=""></span>
                    <a href=""><img src="frontend/img/icon/heart.png" alt=""></a>
                    @if((Auth::check()) && (Auth::user()->jurisdiction == null)) 
                    <a href="" class="text-dark"><i class="fas fa-luggage-cart"></i></a>
                    @endif
                    <a href="{{ route('cart.show') }}"><img src="frontend/img/icon/cart.png" alt=""><span>{{ Cart::count() }}</span></a>
                    <div class="price"></div>
                </div>
            </div>
        </div>
        <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
</header>
