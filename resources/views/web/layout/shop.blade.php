@extends('web.layout.front')

@section('content1')



<section class="product-shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
                    <div class="filter-widget">
                        <h4 class="fw-title">Categories</h4>
                        <ul class="filter-catagories">
                        	 @foreach($category as $d)
                            <li><a href="{{route('shopbycategory',['id'=>$d->id])}}">{{$d->name}}<br></a></li>
                             @endforeach
                        </ul>
                    </div>
                    
                    <div class="filter-widget">
                        <h4 class="fw-title">Color</h4>
                        <div class="fw-color-choose">
                            <div class="cs-item">
                                <input type="radio" id="cs-black">
                                <label class="cs-black" for="cs-black">Black</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-violet">
                                <label class="cs-violet" for="cs-violet">Violet</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-blue">
                                <label class="cs-blue" for="cs-blue">Blue</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-yellow">
                                <label class="cs-yellow" for="cs-yellow">Yellow</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-red">
                                <label class="cs-red" for="cs-red">Red</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-green">
                                <label class="cs-green" for="cs-green">Green</label>
                            </div>
                        </div>
                    </div>
                   
                    <div class="filter-widget">
                        <h4 class="fw-title">Tags</h4>
                        <div class="fw-tags">
                            <a href="#">Towel</a>
                            <a href="#">Shoes</a>
                            <a href="#">Coat</a>
                            <a href="#">Dresses</a>
                            <a href="#">Trousers</a>
                            <a href="#">Men's hats</a>
                            <a href="#">Backpack</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="product-show-option">
                        <div class="row">
                            <div class="col-lg-7 col-md-7">
                                <div class="select-option">
                                    <select class="sorting">
                                        <option value="">All</option>
                                    </select>
                                    
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 text-right">
                                
                            </div>
                        </div>
                    </div>
                    <div class="product-list">
                        <div class="row">
                            @foreach($product as $d)
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img src="{{url('storage/app/product')}}{{'/'}}{{$d->image}}" height="330" width="265" alt="">
                                        
                                        <ul>
                                            <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                            <li class="quick-view"><a href="{{route('productfetch',['id'=>$d->id])}}">+ Buy Now</a></li>
                                            
                                        </ul>
                                    </div>
                                    <div class="pi-text">
                                        
                                        <a href="{{route('productfetch',['id'=>$d->id])}}">
                                            <h5>{{$d->name}}</h5>
                                        </a>
                                        <div class="product-price">
                                            ₹ {{$d->price}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                          @endforeach
                            
                        </div>
                    </div>
                    <center> <div id="loader">
                        <img src="{{asset('assets/web').'/'}}loader.gif" height="100px" width="100px">
                    </div></center>
                </div>
                        
            </div>
        </div>
    </section>

@endsection