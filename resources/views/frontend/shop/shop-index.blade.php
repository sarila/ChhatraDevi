   
@extends('frontend.includes.layout')

@section('content')
    <div class="cart-page">
        <!-- Page Banner -->
        <div class="page-banner">
            <div class="container d-flex">
                <h1 class="page-title lg-title flex-g-1">Shop</h1>
                <div class="bread-crumbs">
                    <ul class="list-none d-flex justify-content-end">
                        <li class="xs-title"><a href="{{route('indexPage')}}" class="d-inline-block text-white">Home</a></li>
                        <span class="seperator px-2 text-white"> > </span>
                        <li class="xs-title active">Shop</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End of Page Banner -->
        <div class="row">
            <div class="col-xl-9 col-md-offset-4">
                @include('backend.includes.message')    
            </div>
        </div>
        <!--Sidebar Page Container-->
        <div class="sidebar-page-container shop-page">
            <div class="container">
                <div class="row">
                    <!--Content Side / Blog Sidebar-->
                    <div class="content-side col-xl-9 col-lg-8 col-md-12 col-sm-12">
                        <div class="our-shop pt-5">
                            <div class="shop-upper-box d-flex flex-wrap">
                                <div class="items-label flex-g-1">Showing <span>1-9 of 20</span> Results</div>
                                <div class="sort-by">
                                    <select class="custom-select-box">
                                        <option>Default Sorting</option>
                                        <option>Price: Lowest First</option>
                                        <option>Price: Highest First</option>
                                        <option>Ascending</option>
                                        <option>Descending</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                @foreach ($products as $product)
                                    <!--Shop Item-->   
                                    <div class="shop-item col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                                        <div class="inner-box">
                                            <div class="image">
                                                <img class="lazy-image" src="{{asset('storage/products/'. $product->coverimage)}}" data-src="{{asset('storage/products/'. $product->coverimage)}}" alt="" />
                                                <div class="overlay-box">
                                                    <ul class="option-box">
                                                        
                                                        <li><a class="bag" href="{{route('addToCart', $product->id)}}"><span class="fa fa-shopping-bag"></span></a></li>
                                                        <li><a href="{{ asset ('storage/products/'. $product->coverimage)}}" class="lightbox-image" data-fancybox="products"><span class="fa fa-search"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="lower-content">
                                                 <h3><a href="{{route('productDetail', $product->id)}}">{{$product->product_name}}</a></h3>
                                                @if(($product->discount_type) == 0)
                                                    <div class="price">Rs {{$product->price}}</div>
                                                @elseif(($product->discount_type) == 1)
                                                    <div class="price">Rs {{$product->price - $product->discount}}</div><strike class="">Rs {{$product->price}}</strike>
                                                    <span class="text-success ml-2">{{$product->discount}} Rs. off</span>
                                                @elseif(($product->discount_type) == 2)
                                                    <div class="price">Rs {{$product->price - (($product->discount /100) * $product->price)}}</div><strike class="">Rs {{$product->price}}</strike>
                                                    <span class="text-success ml-2">{{$product->discount}} % off</span>
                                                @endif      
                                            </div>
                                        </div>
                                    </div>     
                               @endforeach 
                            </div>
                                {{$products->links()}}
                            <!-- 
                            <div class="pagination-box">
                                <ul class="list-none text-center">
                                    <li><a href="#" class="active">1</a></li>
                                    <li><a href="{{$products->links()}}"><span class="fa fa-angle-right"></span></a></li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                    <!--Sidebar Side-->
                    <div class="sidebar-side col-xl-3 col-lg-4 col-md-12 col-sm-12">
                        <aside class="sidebar shop-sidebar">
                            <!-- Search -->
                            <div class="sidebar-widget search-box">
                                <h3 class="sidebar-title after-border-b-primary mb-3">Search</h3>
                                <form method="post" action="contact.html">
                                    <div class="form-group d-flex">
                                        <input type="search" class="form-control" name="search-field" value="" placeholder="Search..." required="">
                                        <button type="submit"><i class="fas fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                            <!-- Category Widget -->
                            <div class="sidebar-widget categories">
                                <h3 class="sidebar-title after-border-b-primary mb-3">Categories</h3>
                                <div class="widget-content">
                                    <ul class="list-none">
                                        @foreach($pcategories as $pcategory)
                                            <li><a >{{$pcategory->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <!-- Post Widget -->
                            <div class="sidebar-widget popular-products">
                                <h3 class="sidebar-title after-border-b-primary mb-3">Latest Products</h3>
                                <div class="widget-content">
                                    @foreach($topproducts as $topproduct )
                                    <!--Product-->
                                        <div class="product">
                                            <div class="post-thumb"><a href="{{route('productDetail', $topproduct->id)}}"><img class="lazy-image" src="{{ asset ('storage/products/'. $product->coverimage)}}" data-src="{{ asset ('storage/products/'. $topproduct->coverimage)}}" alt=""></a></div>
                                            <h4><a href="{{route('productDetail', $topproduct->id)}}">{{$topproduct->product_name}}</a></h4>
                                            <div class="price">{{$topproduct->price}}</div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Sidebar Page Container -->
    </div>

@endsection