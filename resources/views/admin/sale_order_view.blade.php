@extends('admin.mainlayout')

<title>Order Details</title>

@section('content')
<center>
                   
						@foreach($data as $d)

                         <div class="col-lg-10">
                                <div class="card">
                                    <div class="card-header">
                                    <h3 class="card-title">Order Details &nbsp;<b># </b>{{$d->id}}</h3>
                                </div>
                                   <div class="card-body">

                                    <table id="example1" class="table table-bordered table-striped" cellpadding="7">
                                            <tr>
                                                <td><strong>Order ID</strong></td>
                                                <td><b># </b>{{$d->id}}</td>
                                            </tr>

                                            <tr>
                                                <td><strong>Product</strong></td>
                                                <td><b>{{$d->name}}</b></td>
                                            </tr>
                                              
                                            <tr>
                                                <td><strong>Name</strong></td>
                                                <td>{{$d->cname}}</td>
                                            </tr>

                                            <tr>
                                                <td><strong>Mobile</td>
                                                <td>{{$d->mobile}}</td>
                                            </tr> 
                                            <tr>
                                                <td><strong>Address</strong></td>
                                                <td>{{$d->flat}} , {{$d->society}} , {{$d->landmark}} , {{$d->city}} , {{$d->state}} - {{$d->pincode}} .</td>
                                            </tr>

                                            <tr>
                                                <td><strong>Price</td>
                                                <td>₹ {{$d->price}}</td>
                                            </tr> 
                                            <tr>
                                                <td><strong>Qty</td>
                                                <td>{{$d->quantity}} Pcs.</td>
                                            </tr> 

                                            <tr> 
                                                <td><strong>Amount</td>
                                                <td><strong>₹ {{$d->amount}}</strong></td>
                                            </tr>

                                            <tr> 
                                                <td><strong>Order On</td>
                                                <td>{{$d->order_at}}</td>
                                            </tr>

                                            <tr> 
                                                <td><strong>Payment</td>
                                                <td>{{$d->mode}}</td>
                                            </tr>

                                            <tr> 
                                                <td><strong>Status</td>
                                                <td>{{$d->status}}</td>
                                            </tr>

                                            <tr> 
                                                <td><strong>Image</td>
                                                <td><img src="{{url('storage/app/product')}}{{'/'}}{{$d->image}}" style="height: 200px;width: 150px;" ></td>
                                            </tr>

                                            <tr> 
                                                <td></td>
                                                <td><a href="{{route('orderdetails')}}"><button class="btn btn-danger">Close</button></a></td>
                                            </tr>
                                            
                                            
                                        
                                    </table>
                                 </div>
                            </div><br>

                        </div>@endforeach


</center>





@endsection

