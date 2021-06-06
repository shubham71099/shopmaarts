@extends('web.layout.front')

@section('content1')

<center>
<nav class="breadcrumb" aria-label="breadcrumbs" style="display: block;
    padding: 10px;
    margin-bottom: 30px;
    text-align: center;">
	<h3>Order History</h3>
	
</nav>

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

<div>
       	<table border="1" cellpadding="15">
       		<tr style="background-color: #71c855;color: #fff;" >
       			<td><div class="grid__item wide--one-half medium--one-half medium--one-half" ><b>Image</b></div></td>
       			<td><div class="grid__item wide--one-half medium--one-half medium--one-half" ><b>Product Name</b></div></td>
       			<td><div class="grid__item wide--one-half medium--one-half medium--one-half" ><b>Customer Details</b></div></td>
       			<td><div class="grid__item wide--one-half medium--one-half medium--one-half" ><b>Price</b></div></td>
				<td><div class="grid__item wide--one-half medium--one-half medium--one-half" ><b>Qty</b></div></td>
       			<td><div class="grid__item wide--one-half medium--one-half medium--one-half" ><b>Amount</b></div></td>
       			<td><div class="grid__item wide--one-half medium--one-half medium--one-half" ><b>Payment</b></div></td>
       			<td><div class="grid__item wide--one-half medium--one-half medium--one-half" ><b>Date || Time</b></div></td>
       			<td><div class="grid__item wide--one-half medium--one-half medium--one-half" ><b>Status</b></div></td>
       			<td><div class="grid__item wide--one-half medium--one-half medium--one-half" ><b>Cancel</b></div></td>

       		</tr>
   
       		@forelse($data as $d)
       		<tr>
       			       
                <td>
                	<img src="{{url('storage/app/product')}}{{'/'}}{{$d->image}}" style="height: 200px;width: 160px;" >
                </td>
                                            

       			<td><b>#</b> {{$d->id}}<br><br><b>{{$d->name}}</b></td>
       			
       			<td>
            		<b><i>Address :</b><i> {{$d->flat}}, {{$d->society}},<br>{{$d->landmark}},{{$d->city}}, {{$d->state}} - {{$d->pincode}} .</i><br><br><b>Name :</b><i> {{$d->cname}}     </i>    <br>
            		<br><b>Mobile :</b><i> {{$d->mobile}}</i>
           		 </td>

            	<td><b>₹ {{$d->price}}</b></td>

            	<td><b>{{$d->quantity}} Pcs.</b></td>

            	<td><b>₹ {{$d->amount}}</b></td>
            
            	<td><b>{{$d->mode}}</b></td>

            	<td><i>{{$d->order_at}}</i></td>
            
            	<td><b>{{$d->status}}</b></td>
            
            	<td><a href="#" class="btn btn-danger btn-md"> Cancel  </a></td>

       		</tr>

       		@empty
          	
       		Sorry You didn't Order Anything.

        	@endforelse
       		
       	</table>	<br><br>
</div>

</center>

@endsection