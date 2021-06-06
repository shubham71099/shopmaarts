@extends('admin.mainlayout')
<title>Order Status</title>

@section('content')
<center>
            <form action="{{route('orderstatuspost')}}" method="post" id="form1">
                        @csrf
                            <div class="col-lg-10">
                                <div class="card">
                       
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Update Order Status &nbsp;<b> # {{$data[0]->id}}</b></h3>
                                        </div>
                                        <hr>
                                        <form action="" method="post" novalidate="novalidate">
                                            
                                            <div class="form-group has-success">
                                                
                                                <input type="hidden" name="id" value="{{$data[0]->id}}">

                                                <label for="cc-name" class="control-label mb-1">Order Id</label>
                                                <select class="form-control">
                                                    <option>{{$data[0]->id}}</option>
                                                </select>
                                                
                                               
                                            </div>

                                            <div class="form-group has-success">
                                                

                                                <label for="cc-name" class="control-label mb-1">Product Name</label>
                                                <select class="form-control">
                                                    <option>{{$data[0]->name}}</option>
                                                </select>
                                                
                                               
                                            </div>

                                            <div class="form-group has-success">
                                                
                                                <label for="cc-name" class="control-label mb-1">Status</label>
                                                <input name="status" type="text" class="form-control" value="{{$data[0]->status}}" required>
                                               
                                            </div>

                                            
                                           
                                            <div class="form-actions form-group">
                                                <button type="submit" class="btn btn-success"> Update </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                        </form>
        </center>

@endsection