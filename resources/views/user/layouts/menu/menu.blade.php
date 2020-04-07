<div class="navBar">
    <div class="inner-navBar">
        <div class="menuIcon">
            <div class="hamburgerMenu">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>

        </div>
        <div class="menu">
            <div class="submenu kharideKetab">
                <div class="buyBook"><a href="{{ url('book') }}">خرید کتاب</a></div>
                <img src="icon/shopping-bag.svg"></div>

            @include('user.layouts.menu.scroll-menu')

        </div>

        <div class="shoppingBasketBtn">
            <img class="basketImg" src="icon/shopping-cart.svg">
            <div class="shoppingBasket"><a href="{{ url('cart') }}">سبد خرید</a></div>
        </div>


        <div class="logo"></div>
    </div>
</div>
<div class="hamburgerMenuTitles">
    <div><a href="{{ url('book') }}">خرید کتاب</a></div>

    @include('user.layouts.menu.scroll-menu')

</div>
