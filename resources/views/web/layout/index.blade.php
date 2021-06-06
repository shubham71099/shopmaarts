@extends('web.layout.front')

@section('content1')



<div class="hero-items owl-carousel">
            @foreach($banner as $d)
            <div class="single-hero-items set-bg" data-setbg="{{url('storage/app/banner')}}{{'/'}}{{$d->image}}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Latest Collection</span>
                            <h1>{{$d->heading}}</h1>
                            <p>   </p>
                            <a href="#" class="primary-btn">Shop Now</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale <span>15%</span></h2>
                    </div>
                </div>
            </div>
            @endforeach

           
        </div>


 <!-- Banner Section Begin -->
    <div class="banner-section spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="{{asset('assets/web/img/banner-4.jpg')}}" alt="">
                        <div class="inner-text">
                            <h4>Sarees</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="{{asset('assets/web/img/banner-5.jpg')}}" alt="">
                        <div class="inner-text">
                            <h4>Lehanga</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="{{asset('assets/web/img/banner-7.jpg')}}" alt="">
                        <div class="inner-text">
                            <h4>Suits</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Section End -->


 <!-- Women Banner Section Begin -->
    <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
               
                <div class="col-lg-10 offset-lg-1">
                    <div class="filter-control">
                        <ul>
                            <li class="active">Trending</li>
                            
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
                        @foreach($product as $d)
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="{{url('storage/app/product')}}{{'/'}}{{$d->image}}" alt="shopmaarts" height="400">
                                
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="fa fa-shopping-cart" style="font-size:15px"></i></a></li>
                                    <li class="quick-view"><a href="{{route('productfetch',['id'=>$d->id])}}">+ Buy Now</a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">{{$d->cname}}</div>
                                <a href="#">
                                    <h5>{{$d->name}}</h5>
                                </a>
                                <div class="product-price">
                                    Rs. {{$d->price}}
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Instagram Section Begin -->
    <div class="instagram-photo">
        <div class="insta-item set-bg" data-setbg="{{asset('assets/web/img/insta/saree1.jpg')}}">
            <div class="inside-text">
                <h5><a>Shopmaarts</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="{{asset('assets/web/img/insta/saree2.jpg')}}">
            <div class="inside-text">
                <h5><a>Shopmaarts</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="{{asset('assets/web/img/insta/saree3.jpg')}}">
            <div class="inside-text">
                <h5><a>Shopmaarts</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="{{asset('assets/web/img/insta/saree4.jpg')}}">
            <div class="inside-text">
                <h5><a>Shopmaarts</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="{{asset('assets/web/img/insta/saree5.jpg')}}">
            <div class="inside-text">
                <h5><a>Shopmaarts</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="{{asset('assets/web/img/saree6.jpg')}}">
            <div class="inside-text">
                <h5><a>Shopmaarts</a></h5>
            </div>
        </div>
    </div>
    <!-- Instagram Section End -->

    <!-- Latest Blog Section Begin -->
    <section class="latest-blog spad">
        <div class="container">
            
            <div class="benefit-items">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="{{asset('assets/web/img/icon-1.png')}}" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Free Shipping</h6>
                                <p>Delivery in 3-4 Days</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="{{asset('assets/web/img/icon-2.png')}}" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Delivery On Time</h6>
                                <p>If good have prolems</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="{{asset('assets/web/img/icon-3.png')}}" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Secure Payment</h6>
                                <p>100% secure payment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <div>
        <div class="container">
            <div class="tablecell-inner">
                    <img src="{{asset('assets/images/courier.png')}}" alt="">
            </div>
        </div>
    </div>        

@endsection