@extends('admin.mainlayout')
<title>Edit Category</title>

@section('content')
<center>

				<form action="{{route('editcategory_post')}}" method="post" novalidate="novalidate" id="form1">
		      			@csrf
                            <div class="col-lg-8">
                                <div class="card">
                                   <div class="card-header"><strong>Edit Category</strong></div>
                                    <div class="card-body">
                                        <br>
                                       
                                           <input type="hidden" name="id" value="{{$data[0]->id}}">
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Category Name</label>
                                                <input name="name" type="text" class="form-control" value="{{$data[0]->name}}">
                                               
                                            </div>

                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Description</label>
                                                <input name="des" type="text" class="form-control" value="{{$data[0]->des}}">
                                                
                                            </div>
                                           
                                            <div class="form-actions form-group">
                                                <button type="submit" class="btn btn-primary">  Update </button>
                                            </div>
                                        
                                    </div>
                                  </div>
                                 </div>
                                  </div>
                         </form>


@endsection