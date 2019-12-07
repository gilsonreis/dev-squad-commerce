@extends("layouts.app")

@section('title', $product->title . " - ")

@section("content")
    <div class="product-details1-area" style="width: 144%">
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <div class="inner-shop-details">
            <div class="product-details-info-area">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-product-details-left">
                            <div class="tab-content">
                                <div class="fade in" id="related1">
                                    <a href="#" class="zoom ex1">
                                        <img alt="{{ $product->title }}" src="{{url(isset($product->photo) ? "/uploads/products/" .$product->photo : "/images/no-image.png")}}" class="img-responsive">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-product-details-right">
                            <h3>{{ $product->title }}</h3>
                            <ul>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <p class="price">${{ $product->price }}</p>
                            <p>{{ Str::limit($product->description, 100) }}</p>
                            <div class="product-details-content">
                                <p><span>Availability:</span> In stock</p>
                                <p><span>Category:</span> {{ $product->category->name }}</p>
                            </div>
                            <form id="checkout-form">

                                <ul class="inner-product-details-cart">
                                    <li>
                                        <div class="input-group quantity-holder" id="quantity-holder">
                                            <input type="text" name='quantity' class="form-control quantity-input" value="1" placeholder="1">
                                            <div class="input-group-btn-vertical">
                                                <button class="btn btn-default quantity-plus" type="button"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                                <button class="btn btn-default quantity-minus" type="button"><i class="fa fa-minus" aria-hidden="true"></i></button>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="#">Add To Cart</a></li>
                                    <li><a href="#"><i aria-hidden="true" class="fa fa-heart-o"></i></a></li>
                                </ul>
                            </form>
                            <ul class="product-details-social">
                                <li>Share on:</li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-details-tab-area">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <ul>
                            <li class="active"><a href="#description" data-toggle="tab" aria-expanded="false">Description</a></li>
                            <li><a href="#review" data-toggle="tab" aria-expanded="false">Review(0)</a></li>
                            <li><a href="#add-tags" data-toggle="tab" aria-expanded="false">ADD TAGS</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="description">
                                {{ $product->description }}
                            </div>
                            <div class="tab-pane fade" id="review">
                                <p>Porem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam.</p>
                            </div>
                            <div class="tab-pane fade" id="add-tags">
                                <p>Porem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="featured-products-area2">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="title-carousel">Featured Products</h2>
                    </div>
                </div>
                <div class="metro-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="2" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="3" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="3" data-r-large-nav="true" data-r-large-dots="false">
                    <div class="product-box1">
                        <ul class="product-social">
                            <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                            <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                        </ul>
                        <div class="product-img-holder">
                            <a href="#"><img src="img/product/1.jpg" alt="product"></a>
                        </div>
                        <div class="product-content-holder">
                            <h3><a href="#">Product Title Here</a></h3>
                            <span>$88.00</span>
                        </div>
                    </div>
                    <div class="product-box1">
                        <ul class="product-social">
                            <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                            <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                        </ul>
                        <div class="product-img-holder">
                            <a href="#"><img src="img/product/2.jpg" alt="product"></a>
                        </div>
                        <div class="product-content-holder">
                            <h3><a href="#">Product Title Here</a></h3>
                            <span><span>$58.00</span>$40.00</span>
                        </div>
                    </div>
                    <div class="product-box1">
                        <ul class="product-social">
                            <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                            <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                        </ul>
                        <div class="product-img-holder">
                            <div class="hot-sale">
                                <span>Sale</span>
                            </div>
                            <a href="#"><img src="img/product/3.jpg" alt="product"></a>
                        </div>
                        <div class="product-content-holder">
                            <h3><a href="#">Product Title Here</a></h3>
                            <span><span>$74.00</span>$50.00</span>
                        </div>
                    </div>
                    <div class="product-box1">
                        <ul class="product-social">
                            <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                            <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                        </ul>
                        <div class="product-img-holder">
                            <div class="hot-sale">
                                <span>Hot</span>
                            </div>
                            <a href="#"><img src="img/product/4.jpg" alt="product"></a>
                        </div>
                        <div class="product-content-holder">
                            <h3><a href="#">Product Title Here</a></h3>
                            <span>$88.00</span>
                        </div>
                    </div>
                    <div class="product-box1">
                        <ul class="product-social">
                            <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                            <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                        </ul>
                        <div class="product-img-holder">
                            <a href="#"><img src="img/product/5.jpg" alt="product"></a>
                        </div>
                        <div class="product-content-holder">
                            <h3><a href="#">Product Title Here</a></h3>
                            <span><span>$58.00</span>$40.00</span>
                        </div>
                    </div>
                    <div class="product-box1">
                        <ul class="product-social">
                            <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                            <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                        </ul>
                        <div class="product-img-holder">
                            <div class="hot-sale">
                                <span>New</span>
                            </div>
                            <a href="#"><img src="img/product/6.jpg" alt="product"></a>
                        </div>
                        <div class="product-content-holder">
                            <h3><a href="#">Product Title Here</a></h3>
                            <span>$58.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
