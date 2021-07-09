@extends('layouts.frontend.app')

@section('content')
        
        <style>
          .container-block {
  position: relative;
}
            
            .text-block {
  position: absolute;
  top: 50%;
  bottom: auto;
  left: 10px;
  background-color: black;
  color: white;
  padding-left: 40px;
  padding-right: 40px;
  padding-top: 20px;
  padding-bottom: 20px;
  opacity:0.7;
}
@media (max-width: 950px)
{
	.text-block
	{
	display:none;
	}
}



        </style>
        
        <!--=================================
        Hero Area
        ===================================== -->
      <!--  Add Image Silder here -->
     
        <!--=================================
        Home Features Section
        ===================================== -->
      
        <!--=================================
        Promotion Section One
        ===================================== -->
        
        <!--=================================
        Home Slider Tab
        ===================================== -->
        <section class="section-padding">
             
            
            
            <div class="container-block">
  <img src="../../public/projectImage/Img2.jpg" class="MainText" style="width:100%;"/>
  <div class="text-block">
    <h4>E-Pharmacy & Online Medicine Delivery</h4>
    <p>Founded in 2021, E-Pharmacy is Pakistan’s First Instant Health Care Solution.</p> 
    <p>Wherw you can get knowledge about medicine and get medicine at your doorstep.</p>
    <p>Here you can find a specilist doctor neart your location.</p>
    <p>E-Pharmacy is care abuot you health</p>
  </div>
  
  
</div>
            
            <div class="container">
               
                <div style="margin-top:50px;"></div>
                    <div style="border-top:1px solid #F0EBE9;"></div>
                <div class="mainPageHeading">
                    <h3 style="text-align:center;" > Medicines </h3>
                </div>
                 <div style="border-top:1px solid #F0EBE9;"></div>
                 <div style="margin-top:50px;"></div>
                <div class="sb-custom-tab">
                   
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane show active" id="shop" role="tabpanel" aria-labelledby="shop-tab">
                            <div class="product-slider multiple-row  slider-border-multiple-row  sb-slick-slider"
                                data-slick-setting='{
                            "autoplay": true,
                            "autoplaySpeed": 5000,
                            "slidesToShow": 4,
                            "rows":3,
                            "dots":true
                        }' data-slick-responsive='[
                            {"breakpoint":1200, "settings": {"slidesToShow": 3} },
                            {"breakpoint":768, "settings": {"slidesToShow": 2} },
                            {"breakpoint":480, "settings": {"slidesToShow": 1} },
                            {"breakpoint":320, "settings": {"slidesToShow": 1} }
                        ]'>
                                @foreach($products as $product)
                                <div class="single-slide" >
                                    <div class="product-card">
                                        <div class="product-header" style="border-left:1px solid #F0EBE9">
                                            <h5> Name: <a href="{{route('p_details', $product->id)}}">{{ $product->name}}</a></h5>
                                            
                                            <h5>Formula:<a href="" class="author">
                                                {{$product->generic->name}}
                                            </a></h5>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="{{ asset($product->image) }}" alt=""  style="max-width:100%;height:300px">
                                                <div class="hover-contents">
                                                    <a href="{{route('p_details', $product->id)}}" class="hover-image">
                                                        <img src="{{ asset($product->image) }}" alt="" />
                                                    </a>
                                                    <div class="hover-btns">
                                                    <a href="javascript:void()" class="single-btn add-to-cart" data-id="{{$product->id}}" index-id="{{$loop->index}}">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="{{route('p_details', $product->id)}}" class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price"> {{ ($settings == NULL ? "" : $settings->currency_symbol) . " " . $product->sellingPrice }}</span>
                                                {{-- <del class="price-old">Rs.{{$product->sellingPrice}}</del> --}}
                                                {{-- <span class="price-discount">20%</span> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div> 
                        {{-- tab end --}}

                    </div>
                </div>
            </div>
        </section>
        
        
        <section>
            <div class="container">
                 <div style="margin-top:50px;"></div>
                    <div style="border-top:1px solid #F0EBE9;"></div>
                <div class="mainPageHeading">
                    <h3 style="text-align:center;" > Doctors </h3>
                </div>
                 <div style="border-top:1px solid #F0EBE9;"></div>
                 <div style="margin-top:50px;"></div>
            </div>
        </section>



      <section class="mb--30">
            <div class="container">
                <div style="border-top:1px solid #F0EBE9;"></div>
                <p style="font-size:30px; text-align:center;">Our Services</p>
                <div style="border-bottom:1px solid #F0EBE9;"></div>
                <div class="row"> 
                
                    <div class="col-xl-3 col-md-6 mt--30">
                        <div class="feature-box h-100" style="border:1px solid green;">
                            <div class="icon">
                                <i class="fas fa-shipping-fast"></i>
                            </div>
                            <div class="text">
                                <h5>Free Shipping Item</h5>
                                <p> Orders over Rs.500</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mt--30">
                        <div class="feature-box h-100" style="border:1px solid green;">
                            <div class="icon">
                                <i class="fas fa-redo-alt"></i>
                            </div>
                            <div class="text">
                                <h5>Money Back Guarantee</h5>
                                <p>100% money back</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mt--30">
                        <div class="feature-box h-100" style="border:1px solid green;">
                            <div class="icon">
                                <i class="fas fa-piggy-bank"></i>
                            </div>
                            <div class="text">
                                <h5>Cash On Delivery</h5>
                            
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mt--30" >
                        <div class="feature-box h-100" style="border:1px solid green;">
                            <div class="icon">
                                <i class="fas fa-life-ring"></i>
                            </div>
                            <div class="text">
                                <h5>Help & Support</h5>
                                <p>Call us : +92 XXX XXXXXXX</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>   

@endsection


@section('scripts')
<script>
    "use strict";
    var productArray=@json($products);
</script>
@stop
