@extends('admin.mainlayout')
<title>Change Logo</title>

@section('content')
<center>
			<form action="{{route('editlogopost')}}" method="post" id="form1" enctype="multipart/form-data" >
		      			@csrf
                            <div class="col-lg-6">
                                <div class="card">
                       
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Change Logo</h3>
                                        </div>
                                        <hr>
                                        <form action="" method="post" novalidate="novalidate">
                                            
                                            <div class="form-group has-success">
                                            	<input type="hidden" name="id" value="{{$data[0]->id}}">
                                               
                                            </div>

                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Image</label>
                                                <input name="image" type="file" class="form-control" name="email" required>
                                                <label style="color: red;">(Please Select logo With Dimension of 340 X 124 Pixels)</label>
                                                
                                            </div>
                                           <br>
                                            <div class="form-actions form-group">
                                                <button type="submit" class="btn btn-success"> Update </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                        </form>
        </center>

@endsection