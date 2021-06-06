@extends('admin.mainlayout')
<title>Add Product</title>
@section('content')

<center>
	
<form action="{{route('postproduct')}}" method="post" id="form1" enctype="multipart/form-data" >
		      			@csrf
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-header"><strong>Add Product</strong></div>
                                    <div class="card-body">                                        

                                    <br>
                                            
                                        <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Category</label>

                                        <select class="form-control" name="scat_id" required>
                                            <option selected disabled hidden>Select</option>
                                                <!-- @if(@$cat) -->
                                                @forelse($cat as $p)
                                            <option value="{{$p->id}}" >{{$p->name}}</option>
                                                @empty
                                                @endforelse
                                                <!-- @endif   -->
                                        </select>
                                    <p class="help-block">
                                         @if ($errors->has('cid'))
                                        <span class="help-block">
                                        <strong style="color: red;">{{ $errors->first('cid') }}</strong>
                                        </span>
                                        @endif
                                    </p>

                                               
                                            </div>

                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Product Name</label>
                                                <input name="name" type="text" class="form-control" required>
                                               
                                            </div>

                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Price (Rs.)</label>
                                                <input name="price" type="text" class="form-control" required>
                                               
                                            </div>

                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Description</label>
                                                <textarea name="des" rows="3" cols="8" class="form-control"></textarea>
                                               
                                            </div>

                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Status</label>
                                                <select class="form-control" name="status">
                                                    <option value="inactive">Inactive</option>
                                                    <option value="active">Active</option>
                                                </select>
                                               
                                            </div>

                                             <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Image</label>
                                                <input name="image" type="file" class="form-control" required>
                                               
                                            </div>


                                            <div class="form-actions form-group">
                                                <button type="submit" class="btn btn-success"> Add Product </button>
                                            </div>
                                        
                                    </div>
                                </div>
                         </form>
                          <br>



</center>



@endsection