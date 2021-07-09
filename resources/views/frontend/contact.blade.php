@extends('layouts.frontend.app')

@section('content')

<section class="breadcrumb-section">
    <h2 class="sr-only">Site Breadcrumb</h2>
    <div class="container">
        <div class="breadcrumb-contents">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route("main_home")}}">Home</a></li>
                    <li class="breadcrumb-item active">Contact</li>
                </ol>
            </nav>
        </div>

                            @if(session('message'))
                                <div class="alert alert-{{session('type')}}" role="alert">
                                    {{ session('message') }}
                                </div>
                            @endif
    </div>
</section>
<!-- Cart Page Start -->
<main class="contact_area inner-page-sec-padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p>Contact us</p>
                <div id="google-map">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d216173.1348498298!2d74.02452559071446!3d32.158252406808295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391f2983d520eb29%3A0x6fb33af85e7a368!2sGujranwala%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2sae!4v1624196541735!5m2!1sen!2sae" width="100%" height="400" style="border:2px solid green; " allowfullscreen="" loading="lazy"></iframe> 
                </div>
            </div>
        </div>
        <div class="row mt--60 ">
            <div class="col-lg-5 col-md-5 col-12">
                <div class="contact_adress">
                    <div class="ct_address">
                        <h3 class="ct_title">Location & Details</h3>
                        <p>It is a long established fact that readewill be distracted by the readable content of
                            a page when looking
                            at ilayout.</p>
                    </div>
                    <div class="address_wrapper">
                        <div class="address">
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-info-text">
                                <p><span>Address:</span> Gujranwala <br> Punjab, Pakistan</p>
                            </div>
                        </div>
                        <div class="address">
                            <div class="icon">
                                <i class="far fa-envelope"></i>
                            </div>
                            <div class="contact-info-text">
                                <p><span>Email: </span> info@e-pharmacy.com </p>
                            </div>
                        </div>
                        <div class="address">
                            <div class="icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div class="contact-info-text">
                                <p><span>Phone:</span> +92 XXX XXXXXXX </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-12 mt--30 mt-md--0">
                <div class="contact_form">
                    <h3 class="ct_title">Send Us a Message</h3>
                    <form  action="{{route('contact_submit')}}" method="post" class="contact-form">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Your Name <span class="required">*</span></label>
                                <input type="text" id="con_name" name="name" value="{{ old('name')}}" class="form-control"
                                        required>
                                        
                                        @if($errors->has('name'))
                                        <span style="color:#ff0000"> {{$errors->first('name')}} </span>
                                        @endif
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Your Email <span class="required">*</span></label>
                                    <input type="email" id="con_email" name="email" value="{{ old('email')}}" class="form-control"
                                        required>
                                        @if($errors->has('email'))
                                        <span style="color:#ff0000"> {{$errors->first('email')}} </span>
                                        @endif
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Your Phone*</label>
                                    <input type="text" id="con_phone" name="phone" value="{{ old('phone')}}" class="form-control">
                                    @if($errors->has('phone'))
                                    <span style="color:#ff0000"> {{$errors->first('phone')}} </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Your Message</label>
                                    <textarea id="con_message" name="message"
                                        class="form-control"> {{ old('message')}}</textarea>
                                @if($errors->has('message'))
                                <span style="color:#ff0000"> {{$errors->first('message')}} </span>
                                @endif
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-btn">
                                    <button type="submit" value="submit" class="btn btn-black"
                                        name="submit">send</button>
                                </div>
                                <div class="form__output"></div>
                            </div>
                        </div>
                    </form>
                    <div class="form-output">
                        <p class="form-messege"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Cart Page End -->

@endsection