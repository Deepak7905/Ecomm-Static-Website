

@extends('front.main')


@section('content')

<!-- Ec Shop page -->
<section class="ec-page-content section-space-p">
    <div class="container">
        <div class="row">
            <div class="ec-shop-rightside col-lg-12 col-md-12">
                <!-- Shop Top Start -->
                
                </div>
                <!-- Shop Top End -->

                <!-- Shop content Start -->
                <div class="shop-pro-content">
                    <div class="shop-pro-inner">
                        <div class="row">
                        @foreach($products as $product)
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
    <div class="ec-product-inner">
        <div class="ec-pro-image-outer">
            <div class="ec-pro-image">
                <a href="{{ url('/product') }}" class="image">
                    <img class="main-image" src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}" />
                </a>
                @if(isset($product['old_price']) && $product['old_price'] > $product['price'])
                    <span class="percentage">
                        {{ round((($product['old_price'] - $product['price']) / $product['old_price']) * 100) }}%
                    </span>
                @endif
                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal">
                    <i class="fi-rr-eye"></i>
                </a>
                <div class="ec-pro-actions">
                    <a href="#" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                    <button title="Add To Cart" class="add-to-cart">
                        <i class="fi-rr-shopping-basket"></i> Add To Cart
                    </button>
                    <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                </div>
            </div>
        </div>
        <div class="ec-pro-content">
            <h5 class="ec-pro-title"><a href="{{ url('/product') }}">{{ $product['name'] }}</a></h5>
            <div class="ec-pro-rating">
                @for($i = 1; $i <= 5; $i++)
                    <i class="ecicon eci-star {{ $i <= $product['rating'] ? 'fill' : '' }}"></i>
                @endfor
            </div>
            <span class="ec-price">
                @if(isset($product['old_price']))
                    <span class="old-price">Rs.{{ number_format($product['old_price'], 2) }}</span>
                @endif
                <span class="new-price">Rs.{{ number_format($product['price'], 2) }}</span>
            </span>
        </div>
        <div class="col-12 text-center">
            @auth
            <button type="button" class="btn btn-lg btn-primary rounded-2"
                data-bs-toggle="modal"
                data-bs-target="#staticBackdrop"
                data-id="{{ $product['id'] }}"
                data-name="{{ $product['name'] }}"
                data-old_price="{{ $product['old_price'] ?? '' }}"
                data-price="{{ $product['price'] }}"
                data-description="{{ $product['description'] }}"
                data-image="{{ asset($product['image']) }}">
                Buy Now
            </button>
            @else
            <a href="{{ route('login') }}" class="btn btn-lg btn-secondary rounded-2">
                Login to Buy
            </a>
            @endauth
        </div>
    </div>
</div>
@endforeach



                            <!-- <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                <div class="ec-product-inner">
                                    <div class="ec-pro-image-outer">
                                        <div class="ec-pro-image">
                                            <a href="{{url('/product')}}" class="image">
                                                <img class="main-image" src="assets/images/product-image/bread.jpg" alt="Product" />
                                                <img class="hover-image" src="assets/images/product-image/bread.jpg" alt="Product" />
                                            </a>
                                            <span class="percentage">20%</span>
                                            <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                            <div class="ec-pro-actions">
                                                <a href="" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                <button title="Add To Cart" class="add-to-cart"><i class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                                <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="{{url('/product')}}">Bread</a></h5>
                                        <div class="ec-pro-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                        </div>
                                        <span class="ec-price">
                                            <span class="old-price">Rs.220.00</span>
                                            <span class="new-price">Rs.100</span>
                                        </span>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                <div class="ec-product-inner">
                                    <div class="ec-pro-image-outer">
                                        <div class="ec-pro-image">
                                            <a href="{{url('/product')}}" class="image">
                                                <img class="main-image" src="assets/images/product-image/143.jpg" alt="Product" />
                                                <img class="hover-image" src="assets/images/product-image/143.jpg" alt="Product" />
                                            </a>
                                            <span class="percentage">20%</span>
                                            <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                            <div class="ec-pro-actions">
                                                <a href="" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                <button title="Add To Cart" class="add-to-cart"><i class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                                <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="{{url('/product')}}">Pickle</a></h5>
                                        <div class="ec-pro-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                        </div>
                                        <span class="ec-price">
                                            <span class="old-price">Rs.400.00</span>
                                            <span class="new-price">Rs.220</span>
                                        </span>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                <div class="ec-product-inner">
                                    <div class="ec-pro-image-outer">
                                        <div class="ec-pro-image">
                                            <a href="{{url('/product')}}" class="image">
                                                <img class="main-image" src="assets/images/product-image/wheat.jpg" alt="Product" />
                                                <img class="hover-image" src="assets/images/product-image/wheat.jpg" alt="Product" />
                                            </a>
                                            <span class="percentage">20%</span>
                                            <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                            <div class="ec-pro-actions">
                                                <a href="" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                <button title="Add To Cart" class="add-to-cart"><i class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                                <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="{{url('/product')}}">Wheat Flour</a></h5>
                                        <div class="ec-pro-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                        </div>
                                        <span class="ec-price">
                                            <span class="old-price">Rs.620.00</span>
                                            <span class="new-price">Rs.220</span>
                                        </span>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                <div class="ec-product-inner">
                                    <div class="ec-pro-image-outer">
                                        <div class="ec-pro-image">
                                            <a href="{{url('/product')}}" class="image">
                                                <img class="main-image" src="assets/images/product-image/142.jpg" alt="Product" />
                                                <img class="hover-image" src="assets/images/product-image/142.jpg" alt="Product" />
                                            </a>
                                            <span class="percentage">20%</span>
                                            <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                            <div class="ec-pro-actions">
                                                <a href="" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                <button title="Add To Cart" class="add-to-cart"><i class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                                <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="{{url('/product')}}">Dry Fruits</a></h5>
                                        <div class="ec-pro-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                        </div>
                                        <span class="ec-price">
                                            <span class="old-price">Rs.620.00</span>
                                            <span class="new-price">Rs.220</span>
                                        </span>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                <div class="ec-product-inner">
                                    <div class="ec-pro-image-outer">
                                        <div class="ec-pro-image">
                                            <a href="{{url('/product')}}" class="image">
                                                <img class="main-image" src="assets/images/product-image/choco.jpg" alt="Product" />
                                                <img class="hover-image" src="assets/images/product-image/choco.jpg" alt="Product" />
                                            </a>
                                            <span class="percentage">20%</span>
                                            <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                            <div class="ec-pro-actions">
                                                <a href="" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                <button title="Add To Cart" class="add-to-cart"><i class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                                <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="{{url('/product')}}">Dark Chocolate</a></h5>
                                        <div class="ec-pro-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                        </div>
                                        <span class="ec-price">
                                            <span class="old-price">Rs.400.00</span>
                                            <span class="new-price">Rs.100</span>
                                        </span>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                <div class="ec-product-inner">
                                    <div class="ec-pro-image-outer">
                                        <div class="ec-pro-image">
                                            <a href="{{url('/product')}}" class="image">
                                                <img class="main-image" src="assets/images/product-image/140.jpg" alt="Product" />
                                                <img class="hover-image" src="assets/images/product-image/140.jpg" alt="Product" />
                                            </a>
                                            <span class="percentage">20%</span>
                                            <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                            <div class="ec-pro-actions">
                                                <a href="" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                <button title="Add To Cart" class="add-to-cart"><i class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                                <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="{{url('/product')}}">Drinks</a></h5>
                                        <div class="ec-pro-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                        </div>
                                        <span class="ec-price">
                                            <span class="old-price">Rs.60.00</span>
                                            <span class="new-price">Rs.20</span>
                                        </span>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                <div class="ec-product-inner">
                                    <div class="ec-pro-image-outer">
                                        <div class="ec-pro-image">
                                            <a href="product.php" class="image">
                                                <img class="main-image" src="assets/images/product-image/biscuit.jpg" alt="Product" />
                                                <img class="hover-image" src="assets/images/product-image/biscuit.jpg" alt="Product" />
                                            </a>
                                            <span class="percentage">20%</span>
                                            <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                            <div class="ec-pro-actions">
                                                <a href="" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                <button title="Add To Cart" class="add-to-cart"><i class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                                <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="product.php">Biscuit</a></h5>
                                        <div class="ec-pro-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                        </div>
                                        <span class="ec-price">
                                            <span class="old-price">Rs.60.00</span>
                                            <span class="new-price">Rs.40</span>
                                        </span>

                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <!-- Ec Pagination Start -->
                    <div class="ec-pro-pagination">
                        <span>Showing 1-12 of 21 item(s)</span>
                        <ul class="ec-pro-pagination-inner">
                            <li><a class="active" href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a class="next" href="#">Next <i class="ecicon eci-angle-right"></i></a></li>
                        </ul>
                    </div>
                    <!-- Ec Pagination End -->
                </div>
                <!--Shop content End -->
            </div>
            <!-- Sidebar Area Start -->
            <div class="filter-sidebar-overlay"></div>
            <div class="ec-shop-leftside filter-sidebar">
                <div class="ec-sidebar-heading">
                    <h1>Filter Products By</h1>
                    <a class="filter-cls-btn" href="javascript:void(0)">×</a>
                </div>
                <div class="ec-sidebar-wrap">
                    <!-- Sidebar Category Block -->
                    <div class="ec-sidebar-block">
                        <div class="ec-sb-title">
                            <h3 class="ec-sidebar-title">Category</h3>
                        </div>
                        <div class="ec-sb-block-content">
                            <ul>
                                <li>
                                    <div class="ec-sidebar-block-item">
                                        <input type="checkbox" checked /> <a href="#">clothes</a><span class="checked"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="ec-sidebar-block-item">
                                        <input type="checkbox" /> <a href="#">Bags</a><span class="checked"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="ec-sidebar-block-item">
                                        <input type="checkbox" /> <a href="#">Shoes</a><span class="checked"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="ec-sidebar-block-item">
                                        <input type="checkbox" /> <a href="#">cosmetics</a><span class="checked"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="ec-sidebar-block-item">
                                        <input type="checkbox" /> <a href="#">electrics</a><span class="checked"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="ec-sidebar-block-item">
                                        <input type="checkbox" /> <a href="#">phone</a><span class="checked"></span>
                                    </div>
                                </li>
                                <li id="ec-more-toggle-content" style="padding: 0; display: none;">
                                    <ul>
                                        <li>
                                            <div class="ec-sidebar-block-item">
                                                <input type="checkbox" /> <a href="#">Watch</a><span class="checked"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item">
                                                <input type="checkbox" /> <a href="#">Cap</a><span class="checked"></span>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="ec-sidebar-block-item ec-more-toggle">
                                        <span class="checked"></span><span id="ec-more-toggle">More
                                            Categories</span>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <!-- Sidebar Size Block -->
                    <div class="ec-sidebar-block">
                        <div class="ec-sb-title">
                            <h3 class="ec-sidebar-title">Size</h3>
                        </div>
                        <div class="ec-sb-block-content">
                            <ul>
                                <li>
                                    <div class="ec-sidebar-block-item">
                                        <input type="checkbox" value="" checked /><a href="#">S</a><span class="checked"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="ec-sidebar-block-item">
                                        <input type="checkbox" value="" /><a href="#">M</a><span class="checked"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="ec-sidebar-block-item">
                                        <input type="checkbox" value="" /> <a href="#">L</a><span class="checked"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="ec-sidebar-block-item">
                                        <input type="checkbox" value="" /><a href="#">XL</a><span class="checked"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="ec-sidebar-block-item">
                                        <input type="checkbox" value="" /><a href="#">XXL</a><span class="checked"></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Sidebar Color item -->
                    <div class="ec-sidebar-block ec-sidebar-block-clr">
                        <div class="ec-sb-title">
                            <h3 class="ec-sidebar-title">Color</h3>
                        </div>
                        <div class="ec-sb-block-content">
                            <ul>
                                <li>
                                    <div class="ec-sidebar-block-item"><span style="background-color:#c4d6f9;"></span></div>
                                </li>
                                <li>
                                    <div class="ec-sidebar-block-item"><span style="background-color:#ff748b;"></span></div>
                                </li>
                                <li>
                                    <div class="ec-sidebar-block-item"><span style="background-color:#000000;"></span></div>
                                </li>
                                <li class="active">
                                    <div class="ec-sidebar-block-item"><span style="background-color:#2bff4a;"></span></div>
                                </li>
                                <li>
                                    <div class="ec-sidebar-block-item"><span style="background-color:#ff7c5e;"></span></div>
                                </li>
                                <li>
                                    <div class="ec-sidebar-block-item"><span style="background-color:#f155ff;"></span></div>
                                </li>
                                <li>
                                    <div class="ec-sidebar-block-item"><span style="background-color:#ffef00;"></span></div>
                                </li>
                                <li>
                                    <div class="ec-sidebar-block-item"><span style="background-color:#c89fff;"></span></div>
                                </li>
                                <li>
                                    <div class="ec-sidebar-block-item"><span style="background-color:#7bfffa;"></span></div>
                                </li>
                                <li>
                                    <div class="ec-sidebar-block-item"><span style="background-color:#56ffc1;"></span></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Sidebar Price Block -->
                    <div class="ec-sidebar-block">
                        <div class="ec-sb-title">
                            <h3 class="ec-sidebar-title">Price</h3>
                        </div>
                        <div class="ec-sb-block-content es-price-slider">
                            <div class="ec-price-filter">
                                <div id="ec-sliderPrice" class="filter__slider-price" data-min="0" data-max="250" data-step="10"></div>
                                <div class="ec-price-input">
                                    <label class="filter__label"><input type="text" class="filter__input"></label>
                                    <span class="ec-price-divider"></span>
                                    <label class="filter__label"><input type="text" class="filter__input"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Shop page -->

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header p-3 border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h3 id="modalProductName" class="fw-bold text-center text-capitalize mb-2"></h3>
                <div class="text-center">
                    <img id="modalProductImage" src="" alt="" class="img-fluid mb-3">
                </div>
                <p id="modalProductDescription" class="text-center"></p>
                <h4 id="modalProductPrice" class="text-center"></h4>
                
                <!-- User Details Form -->
                <form id="userDetailsForm" class="mb-3">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" required>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <textarea class="form-control" id="address" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Submit Details</button>
                </form>

                <!-- Payment Form (Initially Hidden) -->
                <form id="paymentForm" style="display: none;">
                    <input type="hidden" name="product_id" id="productId">
                    <input type="hidden" name="product_name" id="productName">
                    <input type="hidden" name="product_price" id="productPrice">
                    <input type="hidden" name="product_image" id="productImage">
                    <input type="hidden" name="user_name" id="userName">
                    <input type="hidden" name="user_email" id="userEmail">
                    <input type="hidden" name="user_phone" id="userPhone">
                    <input type="hidden" name="user_address" id="userAddress">
                    <button type="button" class="btn btn-secondary w-100" onclick="initiateRazorpay()">Pay with Razorpay</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection