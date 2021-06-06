@extends('web.layout.front')

@section('content1')

<br><br>

@foreach($data as $d)
<section id="aa-product-details">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-product-details-area">
            <div class="aa-product-details-content">
              <div class="row">
                <!-- Modal view slider -->
                <div class="col-md-5 col-sm-5 col-xs-12">                              
                  <div class="aa-product-view-slider">                                
                    <div id="demo-1" class="simpleLens-gallery-container">
                      <div class="simpleLens-container">
                        <div class="simpleLens-big-image-container"><a><img src="{{url('storage/app/product')}}{{'/'}}{{$d->image}}" class="simpleLens-big-image" height="500" width="400"></a></div>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <!-- Modal view content -->
                
                <div class="col-md-7 col-sm-7 col-xs-12">
                  <div class="aa-product-view-content">
                    <h3>{{$d->name}}</h3>
                    <br>
                    <div class="aa-price-block">
                      <span class="aa-product-view-price"><strong>Price : Rs. {{$d->price}}  &nbsp;<del>Rs. 1000</del> </strong></span> 
                      
                    </div>

                    <p>{{$d->des}}</p>

                    <p class="aa-prod-category">
                        Category: 
                      </p>
                      
                    
                    <br>
                    <h4>Return Policy</h4>
                    <p>10 Days Return/Replacement period.</p><br>
                    <h4>Quantity</h4>
                    <br>
                      <form action="">
                        <select id="" name="">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </form>
                      <br>
                      
                    </div>
                    <div class="aa-prod-view-bottom">
                    	<button type="submit" class="site-btn"><a href="#" style="color: white;">Buy</a></button>
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
 @endforeach
<br><br>


@endsection