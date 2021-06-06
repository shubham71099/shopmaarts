@extends('web.layout.front')

@section('content1')


    
 <section class="shopping-cart spad"><center><h3>Order Summary</h3></center><br>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                <form action="{{route('orderplace')}}" method="post">
                     @csrf
                
                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th class="p-name">Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    
                                </tr>
                            </thead>
                            @foreach($cartCollection as $item)	
                            <tbody>
                                <tr>
                                    <td class="cart-pic first-row"><img src="{{asset('storage/app/product')}}{{'/'}}{{ $item->attributes->image }}" height="150" alt=""></td>
                                    <td class="cart-title first-row">
                                     <input type="hidden" name="pid" value="{{ $item->id }}">   
                                        <h5>{{ $item->name }}</h5>
                                        <input type="hidden" name="name" value="{{ $item->name }}">
                                    </td>
                                    <td class="p-price first-row">₹ {{ $item->price }}
                                        <input type="hidden" name="price" value="{{ $item->price }}"></td>
                                    <td class="qua-col first-row"><b>{{ $item->quantity }} Pcs.</b><input type="hidden" name="quantity" value="{{ $item->quantity }}"></td>
                                        
                                    
                                    <td class="total-price first-row">₹ {{ \Cart::get($item->id)->getPriceSum() }}<input type="hidden" name="amount" value="{{ \Cart::get($item->id)->getPriceSum() }}"></td>
                                    
                                </tr>
                                
                            </tbody>
                            @endforeach
                     </table>
                        
                         <div class="proceed-checkout">
                                <ul>
                                <li class="cart-total">Total :  <span>₹ {{ \Cart::getTotal() }}</span></li>
                                </ul>
                            </div>

                        <select  name="mode" >
                          <option value ="cod" selected> COD </option>
                          <option value ="online"> Online </option>
                        </select>

                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <h5><b>Address :</b></h5>
                             @foreach($add as $d)
                             <i>{{$d->name}}<br>{{$d->flat}},{{$d->society}},{{$d->landmark}},<br>{{$d->city}} , {{$d->state}} - {{$d->pincode}} .
                                <br>Mobile - <b>{{$d->mobile}}</b></i>
                             @endforeach
                        </div>
                        <div class="col-lg-4 offset-lg-4" align="right">
                            <div class="proceed-checkout">
                                <button type="submit" class="site-btn place-btn">Place Order</button>
                            </div>
                        </div>

                </form>

                        
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection