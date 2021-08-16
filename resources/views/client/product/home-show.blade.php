<div class="tabs-block col-lg-8">

    <div class="products-carousel-tabs">

        <ul class="nav nav-inline">
            @foreach($categories as $category)
                <li class="nav-item"><a class="nav-link " href="#tab-products-{{$category->id}}" data-toggle="tab">{{$category->title}}</a></li>
            @endforeach
        </ul>

        <div class="tab-content">
            @foreach($categories as $category)
                <div class="tab-pane" id="tab-products-{{$category->id}}" role="tabpanel">
                    <div class="woocommerce columns-3">
                        <ul class="products columns-3">
                            @foreach($category->GetAllSubCategoryProduct() as $product)
                                <li class="product first">
                                    <div class="product-outer">
                                        <div class="product-inner">
                                            <span class="loop-product-categories"><a href="product-category.html" rel="tag">{{$product->name}}</a></span>
                                            <a href="{{route('products.show',$product)}}">
                                                <h3>{{$product->slug}}</h3>
                                                <div class="product-thumbnail">

                                                    <img data-echo="{{str_replace('public','storage',$product->image)}}" src="{{str_replace('public','storage',$product->image)}}" alt="{{$product->name}}">

                                                </div>
                                            </a>

                                            <div class="price-add-to-cart">
                                                                        <span class="price">
                                                                            <span class="electro-price">
                                                                                <ins><span class="amount">&#036;{{$product->cost}}</span></ins>
                                                                                <del><span class="amount">&#036;{{$product->cost}}</span></del>
                                                                            </span>
                                                                        </span>
                                                <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                            </div><!-- /.price-add-to-cart -->

                                            <div class="hover-area">
                                                <div class="action-buttons">
                                                    <a href="{{route('products.show',$product)}}" class="add-to-compare-link">اطلاهات بیشتر</a>
                                                </div>
                                            </div>
                                        </div><!-- /.product-inner -->
                                    </div><!-- /.product-outer -->
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

</div>
