@extends('layouts.frontend.app')

@section('content')
<section class="breadcrumb-section">
    <h2 class="sr-only">Site Breadcrumb</h2>
    <div class="container">
        <div class="breadcrumb-contents">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Shop</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
<main class="inner-page-sec-padding-bottom">
    <div class="container">
        {{-- <div class="shop-toolbar mb--30">
            <div class="row align-items-center">
                <div class="col-lg-2 col-md-2 col-sm-6">
                    <!-- Product View Mode -->
                    <div class="product-view-mode">
                        <a href="#" class="sorting-btn active" data-target="grid"><i class="fas fa-th"></i></a>
                        <a href="#" class="sorting-btn" data-target="grid-four">
                            <span class="grid-four-icon">
                                <i class="fas fa-grip-vertical"></i><i class="fas fa-grip-vertical"></i>
                            </span>
                        </a>
                        <a href="#" class="sorting-btn" data-target="list "><i class="fas fa-list"></i></a>
                    </div>
                </div>
                <div class="col-xl-5 col-md-4 col-sm-6  mt--10 mt-sm--0">
                    <span class="toolbar-status">
                        Showing 1 to 9 of 14 (2 Pages)
                    </span>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-6  mt--10 mt-md--0">
                    <div class="sorting-selection">
                        <span>Show:</span>
                        <select class="form-control nice-select sort-select">
                            <option value="" selected="selected">3</option>
                            <option value="">9</option>
                            <option value="">5</option>
                            <option value="">10</option>
                            <option value="">12</option>
                        </select>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt--10 mt-md--0 ">
                    <div class="sorting-selection">
                        <span>Sort By:</span>
                        <select class="form-control nice-select sort-select mr-0">
                            <option value="" selected="selected">Default Sorting</option>
                            <option value="">Sort
                                By:Name (A - Z)</option>
                            <option value="">Sort
                                By:Name (Z - A)</option>
                            <option value="">Sort
                                By:Price (Low &gt; High)</option>
                            <option value="">Sort
                                By:Price (High &gt; Low)</option>
                            <option value="">Sort
                                By:Rating (Highest)</option>
                            <option value="">Sort
                                By:Rating (Lowest)</option>
                            <option value="">Sort
                                By:Model (A - Z)</option>
                            <option value="">Sort
                                By:Model (Z - A)</option>
                        </select>
                    </div>
                </div>
            </div>
        </div> --}}
        {{-- <div class="shop-toolbar d-none">
            <div class="row align-items-center">
                <div class="col-lg-2 col-md-2 col-sm-6">
                    <!-- Product View Mode -->
                    <div class="product-view-mode">
                        <a href="#" class="sorting-btn active" data-target="grid"><i class="fas fa-th"></i></a>
                        <a href="#" class="sorting-btn" data-target="grid-four">
                            <span class="grid-four-icon">
                                <i class="fas fa-grip-vertical"></i><i class="fas fa-grip-vertical"></i>
                            </span>
                        </a>
                        <a href="#" class="sorting-btn" data-target="list "><i class="fas fa-list"></i></a>
                    </div>
                </div>
                <div class="col-xl-5 col-md-4 col-sm-6  mt--10 mt-sm--0">
                    <span class="toolbar-status">
                        Showing 1 to 9 of 14 (2 Pages)
                    </span>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-6  mt--10 mt-md--0">
                    <div class="sorting-selection">
                        <span>Show:</span>
                        <select class="form-control nice-select sort-select">
                            <option value="" selected="selected">3</option>
                            <option value="">9</option>
                            <option value="">5</option>
                            <option value="">10</option>
                            <option value="">12</option>
                        </select>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt--10 mt-md--0 ">
                    <div class="sorting-selection">
                        <span>Sort By:</span>
                        <select class="form-control nice-select sort-select mr-0">
                            <option value="" selected="selected">Default Sorting</option>
                            <option value="">Sort
                                By:Name (A - Z)</option>
                            <option value="">Sort
                                By:Name (Z - A)</option>
                            <option value="">Sort
                                By:Price (Low &gt; High)</option>
                            <option value="">Sort
                                By:Price (High &gt; Low)</option>
                            <option value="">Sort
                                By:Rating (Highest)</option>
                            <option value="">Sort
                                By:Rating (Lowest)</option>
                            <option value="">Sort
                                By:Model (A - Z)</option>
                            <option value="">Sort
                                By:Model (Z - A)</option>
                        </select>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="shop-product-wrap grid with-pagination row space-db--30 shop-border">
            
            @foreach($products as $eachProduct)
            <div class="col-lg-4 col-sm-6">
                <div class="product-card">
                    <div class="product-grid-content">
                        <div class="product-header" style="background-color:#3E3E3E;">
                          <span style="font-weight:bold; color:white;">Medicine Group : </span>  <span style="color:white;">
                                {{$eachProduct->group->name}}</span>
                            <span style="font-weight:bold;color:white; "> Medicine Name : <a href="{{route('p_details', $eachProduct->id)}}">{{$eachProduct->name}}</a></span>
                        </div>
                        <div class="product-card--body">
                            <div class="card-image">
                                <img src="{{ asset($eachProduct->image) }}" alt="">
                                <div class="hover-contents" style="background-color:#E5E5E5;">
                                    <a href="{{route('p_details', $eachProduct->id)}}" class="hover-image">
                                        <img src="{{ asset($eachProduct->image) }}" alt="">
                                    </a>
                                    <div class="hover-btns">
                                        <a href="javascript:void();" class="single-btn add-to-cart" data-id="{{$eachProduct->id}}" index-id="{{$loop->index}}">
                                            <i class="fas fa-shopping-basket"></i>
                                        </a>
                                        <a href="{{route('p_details', $eachProduct->id)}}" class="single-btn">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="price-block" style="background-color:#3E3E3E;">
                                <span class="price">Rs{{$eachProduct->sellingPrice}}</span>
                                <del class="price-old">Rs{{$eachProduct->sellingPrice}}</del>
                                {{-- <span class="price-discount">20%</span> --}}
                            </div>
                        </div>
                    </div>
                 <!--   <div class="product-list-content">
                        <div class="card-image">
                            <img src="image/products/product-3.jpg" alt="">
                        </div>
                        <div class="product-card--body">
                            <div class="product-header">
                                <a href="" class="author">
                                    Gpple
                                </a>
                                <h3><a href="product-details.html" tabindex="0">Qpple cPad with Retina Display
                                        MD510LL/A</a></h3>
                            </div>
                            <article>
                                <h2 class="sr-only">Card List Article</h2>
                                <p>More room to move. With 80GB or 160GB of storage and up to 40 hours of
                                    battery life, the new iPod classic lets you enjoy
                                    up to 40,000 songs or..</p>
                            </article>
                            <div class="price-block">
                                <span class="price">£51.20</span>
                                <del class="price-old">£51.20</del>
                                <span class="price-discount">20%</span>
                            </div>
                            <div class="rating-block">
                                <span class="fas fa-star star_on"></span>
                                <span class="fas fa-star star_on"></span>
                                <span class="fas fa-star star_on"></span>
                                <span class="fas fa-star star_on"></span>
                                <span class="fas fa-star "></span>
                            </div>
                            <div class="btn-block">
                                <a href="" class="btn btn-outlined">Add To Cart</a>
                                <a href="" class="card-link"><i class="fas fa-heart"></i> Add To Wishlist</a>
                                <a href="" class="card-link"><i class="fas fa-random"></i> Add To Cart</a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            @endforeach

        </div>
        <!-- Pagination Block -->
        {{-- <div class="row pt--30">
            <div class="col-md-12">
                <div class="pagination-block">
                    <ul class="pagination-btns flex-center">
                        <li><a href="" class="single-btn prev-btn ">|<i class="zmdi zmdi-chevron-left"></i> </a>
                        </li>
                        <li><a href="" class="single-btn prev-btn "><i class="zmdi zmdi-chevron-left"></i> </a>
                        </li>
                        <li class="active"><a href="" class="single-btn">1</a></li>
                        <li><a href="" class="single-btn">2</a></li>
                        <li><a href="" class="single-btn">3</a></li>
                        <li><a href="" class="single-btn">4</a></li>
                        <li><a href="" class="single-btn next-btn"><i class="zmdi zmdi-chevron-right"></i></a>
                        </li>
                        <li><a href="" class="single-btn next-btn"><i class="zmdi zmdi-chevron-right"></i>|</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div> --}}
        <!-- Modal -->
       
    </div>
</main>
<script>
    "use strict";
    var productArray=@json($products);            
</script>
@endsection