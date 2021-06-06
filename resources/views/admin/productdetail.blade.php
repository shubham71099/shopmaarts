@extends('admin.mainlayout')

@foreach($data as $d)

<title>{{$d->name}} Details</title>

@section('content')
<center>
                   


                         <div class="col-lg-10">
                                <div class="card">
                                    <div class="card-header">
                                    <h3 class="card-title">Product Detail</h3>
                                </div>
                                   <div class="card-body">

                                    <table id="example1" class="table table-bordered table-striped" cellpadding="7">
                                            
                                              
                                            <tr>
                                                <td><strong>Name</strong></td>
                                                <td><strong>{{$d->name}}</strong></td>
                                            </tr>

                                            <tr>
                                                <td><strong>Description</td>
                                                <td>{{$d->des}}</td>
                                            </tr> 

                                            <tr> 
                                                <td><strong>Price</td>
                                                <td><strong>Rs. {{$d->price}} /-</strong></td>
                                            </tr>

                                            <tr> 
                                                <td><strong>Created On</td>
                                                <td>{{$d->created_at}}</td>
                                            </tr>

                                            <tr> 
                                                <td><strong>Image</td>
                                                <td><img src="{{url('storage/app/product')}}{{'/'}}{{$d->image}}" style="height: 290px;width: 290px;" ></td>
                                            </tr>
                                            
                                             <tr> 
                                                <td></td>
                                                <td><a href="{{route('viewproduct')}}"><button class="btn btn-danger">Close</button></a></td>
                                            </tr>
                                        @endforeach
                                    </table>
                                 </div>
                            </div>

                        </div>


</center>

@endsection

