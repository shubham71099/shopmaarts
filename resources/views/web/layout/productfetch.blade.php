@extends('web.layout.front')

@section('content1')

 <section class="product-shop spad page-details">
        <div class="container">
            <div class="row">
               
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="product-pic-zoom">
                                <img class="product-big-img" src="{{url('storage/app/product')}}{{'/'}}{{$data[0]->image}}" alt="">
                                <div class="zoom-icon">
                                    <i class="fa fa-search-plus"></i>
                                </div>
                            </div>
                           
                        </div>
                        <div class="col-lg-6">
                          <form action="{{route('add')}}" method="post" >
                              {{csrf_field()}}
                              <input type="hidden" name="id" id="id" value="{{$data[0]->id}}" >

                              <input type="hidden" name="image" value="{{$data[0]->image}}">

                            <div class="product-details">
                                <div class="pd-title">
                                    <span></span>
                                    <h3>{{$data[0]->name}}</h3>
                                    <input type="hidden" name="name" id="name" value="{{$data[0]->name}}" >
                                </div>
                                <div class="pd-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <span>(5)</span>
                                </div>
                                <div class="pd-desc">
                                    <p>{{$data[0]->des}}</p>
                                    <input type="hidden" name="des" id="des" value="{{$data[0]->des}}" >
                                    <h4>₹ {{$data[0]->price}} </h4>
                                    <input type="hidden" name="price" id="price" value="{{$data[0]->price}}" >
                                </div>
                                
                              
                                <div class="quantity">
                                    <input type="number" name="quantity" height="200px" 
                                    value="1" >
                                    
                                  </div>
                                    
                                </div>
                                <div class="aa-prod-view-bottom">
                                  <button type="submit" class="site-btn" >Add to Cart</button>
                                </div>
                                <br>
                                <ul class="pd-tags">
                                    
                                    <li><span>TAGS</span>: Saree, Lehanga, Woman</li><br>
                                    <li><span>Return Policy</span>: 10 Days Return period.</li>
                                        
                                </ul>
                                
                            </div>
                          </form>  
                        </div>
                    </div>
                    <div class="product-tab">
                        <div class="tab-item">
                            <ul class="nav" role="tablist">
                                <li>
                                    <a class="active" data-toggle="tab" href="#tab-1" role="tab">DESCRIPTION</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab-2" role="tab">SPECIFICATIONS</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab-3" role="tab">Customer Reviews (02)</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-item-content">
                            <div class="tab-content">
                                <div class="tab-pane fade-in active" id="tab-1" role="tabpanel">
                                    <div class="product-content">
                                        <div class="row">
                                            <div class="col-lg-7">
                                                <h5>Introduction</h5>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                    aliquip ex ea commodo consequat. Duis aute irure dolor in </p>
                                                <h5>Features</h5>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                    aliquip ex ea commodo consequat. Duis aute irure dolor in </p>
                                            </div>
                                            <div class="col-lg-5">
                                                <img src="img/product-single/tab-desc.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-2" role="tabpanel">
                                    <div class="specification-table">
                                        <table>
                                            <tr>
                                                <td class="p-catagory">Customer Rating</td>
                                                <td>
                                                    <div class="pd-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <span>(5)</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Name</td>
                                                <td>
                                                    <div class="p-stock"> {{$data[0]->name}}</div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="p-catagory">Price</td>
                                                <td>
                                                    <div class="p-price">₹ {{$data[0]->price}}</div>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td class="p-catagory">Availability</td>
                                                <td>
                                                    <div class="p-stock">Available in stock</div>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td class="p-catagory">Return Policy</td>
                                                <td>
                                                    <div class="p-stock">10 Days Return Period</div>
                                                </td>
                                            </tr>

                                                <td class="p-catagory">ID</td>
                                                <td>
                                                    <div class="p-code">00{{$data[0]->id}}</div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-3" role="tabpanel">
                                    <div class="customer-review-option">
                                        <h4>2 Comments</h4>
                                        <div class="comment-option">
                                            <div class="co-item">
                                                <div class="avatar-pic">
                                                    <img src="img/product-single/avatar-1.png" alt="">
                                                </div>
                                                <div class="avatar-text">
                                                    <div class="at-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <h5>Shubham Jha <span>27 Feb 2020</span></h5>
                                                    <div class="at-reply">Good Quality !</div>
                                                </div>
                                            </div>
                                            <div class="co-item">
                                                <div class="avatar-pic">
                                                    <img src="img/product-single/avatar-2.png" alt="">
                                                </div>
                                                <div class="avatar-text">
                                                    <div class="at-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <h5>Kishor Patel <span>05 Mar 2020</span></h5>
                                                    <div class="at-reply">Nice !</div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



     <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
               
                <div class="col-lg-10 offset-lg-1">
                    <div class="filter-control">
                        <ul>
                            <li class="active">Related Products</li>
                            
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
@endsection