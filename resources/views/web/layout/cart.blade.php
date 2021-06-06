@extends('web.layout.front')

@section('content1')

@if(session()->has('success_msg'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session()->get('success_msg') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
@endif
@if(session()->has('alert_msg'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ session()->get('alert_msg') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
@endif
@if(count($errors) > 0)
    @foreach($errors0>all() as $error)
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ $error }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
    @endforeach
@endif



 <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th class="p-name">Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th></th>
                                    <th>Total</th>
                                    <th><i class="ti-close"></i></th>
                                </tr>
                            </thead>
                            @foreach($cartCollection as $item)	
                            <tbody>
                                <tr>
                                    <td class="cart-pic first-row"><img src="{{asset('storage/app/product')}}{{'/'}}{{ $item->attributes->image }}" height="150" alt=""></td>
                                    <td class="cart-title first-row">
                                        <h5>{{ $item->name }}</h5>
                                    </td>
                                    <td class="p-price first-row">₹ {{ $item->price }}</td>
                                    <td class="qua-col first-row">
                                        
                                    <form action="{{ route('update') }}" method="POST">
	                                {{ csrf_field() }}

		                            	<input type="hidden" value="{{ $item->id}}" id="id" name="id">

										<input class="size8 m-text18 t-center num-product" type="text" value="{{ $item->quantity }}" id="quantity" name="quantity" >

										<td><input type="submit" name="Upadte" value="Update" class="btn btn-secondary btn-sm" style="margin-top: 25px;">
										</td>

									</form>


                                    </td>
                                    <td class="total-price first-row">₹ {{ \Cart::get($item->id)->getPriceSum() }}</td>
                                    <td>
                                    <form action="{{ route('removecart') }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" value="{{ $item->id }}" id="id" name="id">
                                    <button class="btn btn-dark btn-sm" style="margin-right: 10px;"><i class="fa fa-trash"></i></button>
                                </form>
                                </form>
                                </tr>
                                
                            </tbody>
                            @endforeach

                            
                        </table>
                        	@if(count($cartCollection)>0)
					            <form action="{{ route('clear') }}" method="POST">
					                {{ csrf_field() }}
					                <button class="btn btn-secondary btn-md">Clear Cart</button>
					            </form>
				       		@endif
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="cart-buttons">
                               
                                <a href="{{route('web')}}" class="primary-btn up-cart">Continue Shopping</a>
                            </div>
                            <div class="discount-coupon">
                                <h6>Discount Codes</h6>
                                <form action="#" class="coupon-form">
                                    <input type="text" placeholder="Enter your codes">
                                    <button type="submit" class="site-btn coupon-btn">Apply</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 offset-lg-4">
                            <div class="proceed-checkout">
                                <ul>
                                    <li class="subtotal">Subtotal <span>₹ {{ \Cart::getTotal() }}</span></li>
                                    <li class="cart-total">Total <span>₹ {{ \Cart::getTotal() }}</span></li>
                                </ul>
                                @if(! @Auth::guard('customer')->user()->name)
                                	<a href="{{route('web_customer_login')}}" class="proceed-btn">PROCEED TO CHECK OUT</a>
                                @else
                                	
                                	<a href="{{route('customer_address')}}" class="proceed-btn">PROCEED TO CHECK OUT</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection