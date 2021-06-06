@extends('web.layout.front')

@section('content1')

<center>
     <nav class="breadcrumb" aria-label="breadcrumbs" style="display: block;
    padding: 10px;
    margin-bottom: 30px;
    text-align: center;">
    <h3>Delivery</h3>
    <center><span>Tell us where you want the item(s) to be delivered</span></center>
</nav>

<div>

<div id="oldadd" @if(old()) style="display: none;" @elseif(count(@$data)>0) style="display:block;" @else style="display: none;"@endif >
<div id="CustomerLoginForm"> <b>Addresses Added by you</b> </div><br>
<table border="1" cellpadding="25">
    <?php $i=1;?>
    @forelse($data as $d)
    <tr>
        <td>{{$i++}}</td>
        <td>{{$d->name}}<br>
            {{$d->mobile}}</td>
        <td>{{$d->flat}},{{$d->society}},{{$d->landmark}},{{$d->city}},{{$d->state}} - {{$d->pincode}}</td>
        <td><a href="{{route('finalcart',['aid'=>encrypt($d->id)])}}"> <input type="submit" class="btn btn-info" value="Use This Address"></a></td>
        
        <td><a href="{{route('address_delete',['id'=>encrypt($d->id)])}}" class="btn btn-info btn-danger">Delete</a></td>
    </tr>
    @empty
    @endforelse
</table>
<br>
<div id="CustomerLoginForm" >Want it to be delivered on new address? <a href="#" onclick="shownewadd()"><b>Add New Address</b></a>
</div>
</div>


<section class="checkout-section spad">
        <div class="container" id="newadd" @if(count(@$data)==0) style="display:block;" @elseif(old()) style="display: block;" @else style="display: none;"@endif>

            <form action="{{route('customer_address_submit')}}" class="checkout-form" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        
                        <h4>Customer Detail </h4>
                        <div class="row">

                            <div class="col-lg-12">
                                <input type="hidden" value="{{\Auth::guard('customer')->user()->id}}" name="cid">
                          
                                <label for="fir">Name<span>*</span></label>
                                <input type="text" name="name" required>
                            </div>
                            
                            <div class="col-lg-12">
                                <label for="phone">Mobile<span>*</span></label>
                                <input type="text" name="mobile" required>
                            </div>
                            <div class="col-lg-12">
                                <label for="fir">Flat No.<span>*</span></label>
                                <input type="text" name="flat" required>
                            </div>
                            <div class="col-lg-12">
                                <label for="fir">Society / Apartment<span>*</span></label>
                                <input type="text" name="society" required>
                            </div>
                            <div class="col-lg-12">
                                <label for="zip">Landmark (optional)</label>
                                <input type="text" name="landmark">
                            </div>  
                            <div class="col-lg-12">
                                <label for="town">Town / City<span>*</span></label>
                                <input type="text" name="city" required>
                            </div>
                
                            <div class="col-lg-12">
                                <label for="fir">State<span>*</span></label>
                                <input type="text" name="state" required>
                            </div>
                            <div class="col-lg-12">
                                <label for="zip">Postcode<span>*</span></label>
                                <input type="text" name="pincode" required>
                            </div>

                            <div class="col-lg-6">
                                    <button type="submit" class="site-btn place-btn">Place Order</button>
                            </div>
                         
                            <div class="col-lg-4">
                                    <a href="#" onclick="showoldadd()"><button class="site-btn info-btn">Choose Existing Address </button></a>
                            </div>
                        </div>
                    </div>
                     </div>
            </form>
        </div>
    </section>

<script type="text/javascript">
     
    function showoldadd()
    {
        document.getElementById('oldadd').style.display="block";
        document.getElementById('newadd').style.display="none";
    }
    function shownewadd()
    {
        document.getElementById('oldadd').style.display="none";
        document.getElementById('newadd').style.display="block";
    }
   
</script>



@endsection