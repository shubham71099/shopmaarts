@extends('admin.mainlayout')
<title>Edit Account</title>

@section('content')
<center>
			<form action="{{route('edit_account_post')}}" method="post" id="form1">
		      			@csrf
                            <div class="col-lg-10">
                                <div class="card">
                       
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Edit Account</h3>
                                        </div>
                                        <hr>
                                        <form action="" method="post" novalidate="novalidate">
                                            
                                            <div class="form-group has-success">
                                            	<input type="hidden" name="id" value="{{$data[0]->id}}">

                                                <label for="cc-name" class="control-label mb-1">Name</label>
                                                <input name="name" type="text" class="form-control" name="name" value="{{$data[0]->name}}">
                                               
                                            </div>

                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">E-mail</label>
                                                <input name="email" type="text" class="form-control" name="email" value="{{$data[0]->email}}">
                                                
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