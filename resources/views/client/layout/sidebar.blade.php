<div class="row">
    <div class="col-xs-12 col-lg-3">
        <nav>
            <ul class="list-group vertical-menu yamm make-absolute">
                <li class="list-group-item"><span><i class="fa fa-list-ul"></i> All Departments</span></li>

                <li class="highlight menu-item animate-dropdown"><a title="Value of the Day" href="home-v2.html">Value
                        of the Day</a></li>

                <li class="highlight menu-item animate-dropdown"><a title="Top 100 Offers" href="home-v3.html">Top 100
                        Offers</a></li>

                <li class="highlight menu-item animate-dropdown"><a title="New Arrivals"
                                                                    href="home-v3-full-color-background.html">New
                        Arrivals</a></li>
                @foreach($categories as $category)
                    <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown">
                        <a data-hover="dropdown" href="product-category.html"
                           data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">{{$category->title}}</a>
                        <ul role="menu" class=" dropdown-menu">
                            <li class="menu-item animate-dropdown menu-item-object-static_block">
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <ul>
                                                                @foreach($category->childiren as $cat)
                                                                <li class="text  text-bold"><a class="nav-link" style="text-align: center" href="{{route('categories.show',$cat)}}">{{$cat->title}}</a></li>
                                                                    <li class="nav-divider"></li>
                                                                @endforeach
                                                          </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                @endforeach
                <li id="menu-item-2695" class="menu-item menu-item-has-children animate-dropdown dropdown">
                    <a title="Accessories" data-hover="dropdown" href="product-category.html" data-toggle="dropdown"
                       class="dropdown-toggle" aria-haspopup="true">brands</a>
                    <ul role="menu" class=" dropdown-menu">
                        @foreach($brands as $brand)
                        <li class="menu-item animate-dropdown">
                            <div>
                            <a title="Cases" href="{{route('brands.show',$brand)}}">{{$brand->name}}</a>
                            <img width="70" src="/{{str_replace('public','storage',$brand->image)}}" alt="{{$brand->name}}">
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    <div class="col-xs-12 col-lg-9">
        <nav>
            <ul id="menu-secondary-nav" class="secondary-nav">
                <li class="highlight menu-item"><a href="home-v2.html">Super Deals</a></li>
                <li class="menu-item"><a href="home-v3.html">Featured Brands</a></li>
                <li class="menu-item"><a href="home-v3-full-color-background.html">Trending Styles</a></li>
                <li class="menu-item"><a href="blog-v1.html">Gift Cards</a></li>
                <li class="pull-right menu-item"><a href="blog-v2.html">Free Shipping on Orders $50+</a></li>
            </ul>
        </nav>
    </div>
</div>
