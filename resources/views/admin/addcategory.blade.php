@extends('admin.mainlayout')
<title>Add Category</title>
@section('content')
<center>
				<form action="{{route('add_category')}}" method="post" id="form1">
		      			@csrf
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-header"><strong>Add Category</strong></div>
                                    <div class="card-body">
                                        <br>
                                        <form action="" method="post" novalidate="novalidate">
                                            
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Category Name</label>
                                                <input name="name" type="text" class="form-control" required>
                                               
                                            </div>

                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Description</label>
                                                <input name="des" type="text" class="form-control" required>
                                                
                                            </div>
                                           
                                            <div class="form-actions form-group">
                                                <button type="submit" class="btn btn-success"> Add Category </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                         </form>
                            
@endsection

@section('js')
$('#cat_smt').click(function(){
	$('#cat_form').on('submit', function(e){
		e.preventDefault();

@endsection

