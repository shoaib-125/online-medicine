@extends('layouts.frontend.app')

@section('content')

<section class="breadcrumb-section">
    <h2 class="sr-only">Site Breadcrumb</h2>
    <div class="container">
        <div class="breadcrumb-contents">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('main_home')}}">Home</a></li>
                    <li class="breadcrumb-item active">Product Details</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<main class="inner-page-sec-padding-bottom" style="background-color:#F6F4F3;">
    <div class="container">
        <div class="row  mb--60">
            <div class="col-lg-5 mb--30">
                <!-- Product Details Slider Big Image-->
                <div class="product-details-slider sb-slick-slider arrow-type-two" data-slick-setting='{
      "slidesToShow": 1,
      "arrows": false,
      "fade": true,
      "draggable": false,
      "swipe": false,
      "asNavFor": ".product-slider-nav"
      }'>
                    <div class="single-slide">
                        <img src="{{ asset($product->image) }}" alt="">
                    </div>

                </div>
                <!-- Product Details Slider Nav -->
                <div class="mt--30 product-slider-nav sb-slick-slider arrow-type-two" data-slick-setting='{
    "infinite":true,
      "autoplay": true,
      "autoplaySpeed": 8000,
      "slidesToShow": 4,
      "arrows": true,
      "prevArrow":{"buttonClass": "slick-prev","iconClass":"fa fa-chevron-left"},
      "nextArrow":{"buttonClass": "slick-next","iconClass":"fa fa-chevron-right"},
      "asNavFor": ".product-details-slider",
      "focusOnSelect": true
      }'>
                    {{-- <div class="single-slide">
                        <img src="{{ asset($product->image) }}" alt="">
                    </div>
                    <div class="single-slide">
                        <img src="{{ asset($product->image) }}" alt="">
                    </div> --}}


                </div>
            </div>
            
            <div class="col-lg-7">
                <div style="margin-top:40px;"></div>
                <div class="product-details-info pl-lg--30 ">
                    <h3 class="product-title"> Brand Name: {{$product->name}}</h3>
                    <ul class="list-unstyled">
                        <li style="color:Green; font-weight:bold;">Generic Name: <a href="#" class="list-value font-weight-bold"> {{$product->generic->name}}</a></li>
                         <li style="color:Green; font-weight:bold;">Availability: <span class="list-value"> In Stock</span></li>
                         <br />
                         <div class="price-block">
                        <span class="price-new"> Rs {{$product->sellingPrice}}.00</span>
                    </div>
                    <br />
                     <article class="product-details-article">
                        <h4 class="sr-only">Product Summery</h4>
                        <p style="border-bottom:1px solid black;">  <br /> {{$product->description}}</p>
                    </article>
                   
                        <li style="border-bottom:1px solid black;"> <span style="color:Green; font-weight:bold;"> Side Effects:</span> <br /> {{$product->side_effects}}</li>
                        <br />
                        <li style="border-bottom:1px solid black;"> <span style="color:Green; font-weight:bold;">Contradictions: </span> <br /> {{$product->contradictions}}</li>
                        <br />
                        <li style="border-bottom:1px solid black;"> <span style="color:Green; font-weight:bold;">Indications:</span> <br /> {{$product->indications}}</li>
                        <br />
                    </ul>
                   

                   
                     
                    <div class="add-to-cart-row">
                        <div class="add-cart-btn">
                            <a href="javascript:void()" class="btn btn-outlined--primary add-to-cart" data-id="{{$product->id}}" index-id="single_product" ><span class="plus-icon">+</span>Add to
                                Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=================================
RELATED PRODUCTS BOOKS
===================================== -->
    <!-- Modal -->
   
</main>
<script>
    "use strict";
    var productArray=@json($product);
</script>
@endsection
