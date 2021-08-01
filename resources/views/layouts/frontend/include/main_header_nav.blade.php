<style>
    .main-menu li
    {
        position: relative;
    }
    .menu-item a:before
    {
        position: absolute;
        content: '';
        top: 100%;
        left: 0px;
        bottom: 0px;
        right: 0px;
        width: 100%;
        height: auto;
        background-color: #60941C;
        z-index: -1;
        transition: 0.4s;
    }
    .menu-item a:hover:before
    {
        top: 70px;
        transition: 0.3s;
        color: #FFFFFF;
    }
</style>


<div class="site-header d-none d-lg-block">
    <div class="header-middle pt--10 pb--10">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 ">
                    <a href="{{route('main_home')}}" class="site-brand">
                        <img src="../../../../../public/Logo/pharmacy.png"/>
                    </a>
                </div>

                <div class="col-lg-7">
                    <div class="main-navigation flex-lg-right">
                        <ul class="main-menu menu-right ">
                            <li class="menu-item">
                                <a href="{{route('main_home')}}">Home </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{route('list_doctors')}}">Find A Doctor </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{route('main_home')}}">Find A Pharmacy </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{route('list_articles')}}">Diease Articles </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('contact')}}">Contact</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <ul>
                        @if(\Illuminate\Support\Facades\Auth::check())
                            <a href="{{route('customer.logout')}}" class="btn btn-outlined" style="padding: 10px;">Logout</a>
                        @else
                            <a href="{{route('customer.signup')}}" class="btn btn-outlined" style="padding: 10px;">Register</a>
                            <a href="{{route('customer.signin')}}" class="btn btn-outlined" style="padding: 10px;">Login</a>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom pb--10">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <nav class="category-nav">
                        <div>
                            <a href="javascript:void()" class="category-trigger"><i
                                    class="fa fa-bars"></i>Medicines Category</a>
                            <ul class="category-menu">
                                @foreach($categories as $each_category)
                                    <li class="cat-item">
                                        <a href="{{route('category_product',$each_category->id)}}">{{$each_category->name}}</a>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-lg-6">
                    <div class="header-search-block">
                        <form action="{{ route('search')}}" method="get">

                            <input type="text" name="q" placeholder="Search entire store here">
                            <button type="submit">Search</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="main-navigation flex-lg-right">
                        <div class="cart-widget">
                            <div class="cart-block">
                                @if(Route::currentRouteName()=='cart' || Route::currentRouteName()=='checkout')
                                    <div class="cart-total">
                                    <span class="text-number">
                                        0
                                    </span>
                                        <span class="text-item">
                                        Shopping Cart
                                    </span>
                                        <span class="price">
                                        <span class="cart_total">({{ isset($settings) ? $settings->currency_symbol ?? "" : "" }}) 0.00</span>
                                    </span>
                                    </div>
                                @else
                                    <div class="cart-total">
                                        <span class="text-number">
                                            0
                                        </span>
                                        <span class="text-item">
                                            Shopping Cart
                                        </span>
                                        <span class="price">
                                            <span class="cart_total">({{ isset($settings) ? $settings->currency_symbol ?? "" : "" }}) 0.00</span>
                                            <i class="fas fa-chevron-down"></i>
                                        </span>
                                    </div>
                                    <div class="cart-dropdown-block shopping-cart">

                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
