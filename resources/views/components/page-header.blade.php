<!-- Hero Section Begin -->
<section class="hero hero-normal" style="padding-bottom: 0px">
    <div class="container" style="padding-bottom: 0px!important">
        <div class="row" style="padding: 0px auto!important">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>All Categories</span>
                    </div>
                    <ul>
                        <li><a href="#">Fresh Meat</a></li>
                        <li><a href="#">Vegetables</a></li>
                        <li><a href="#">Fruit & Nut Gifts</a></li>
                        <li><a href="#">Fresh Berries</a></li>
                        <li><a href="#">Ocean Foods</a></li>
                        <li><a href="#">Butter & Eggs</a></li>
                        <li><a href="#">Fastfood</a></li>
                        <li><a href="#">Fresh Onion</a></li>
                        <li><a href="#">Papayaya & Crisps</a></li>
                        <li><a href="#">Oatmeal</a></li>
                        <li><a href="#">Fresh Bananas</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="#">
                            <div class="hero__search__categories">
                                All Categories
                                <span class="arrow_carrot-down"></span>
                            </div>
                            <input type="text" placeholder="What do yo u need?">
                            <button type="submit" class="site-btn">SEARCH</button>
                        </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="header__cart">
                            <ul class="alig-middle" style="margin-bottom: 6px">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-heart" style="font-size: 24px"></i>
                                        <span>1</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('login') }}">
                                        <i aria-hidden="true" class="fa fa-user" style="font-size: 26px"></i>
                                    </a>
                                </li>
                                {{-- <li>
                                    <a href="{{ route('login') }}">
                                        <i aria-hidden="true" class="fa fa-cog" style="font-size: 26px"></i>
                                    </a>
                                </li> --}}
                                <li>
                                    <a href="{{ route('cart') }}">
                                        <i class="fa fa-shopping-bag" style="font-size: 24px"></i>
                                        <span>3</span>
                                    </a>
                                </li>
                            </ul>
                            {{-- <div class="header__cart__price">item: <span>$150.00</span></div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->
