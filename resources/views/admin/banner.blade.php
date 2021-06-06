@extends('admin.mainlayout')
<title>Add Banner</title>
@section('content')


<center>
    
            <form action="{{route('addbanner')}}" method="post" id="form1" enctype="multipart/form-data" >
                        @csrf
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-header"><strong>Add Banner</strong></div>
                                      <div class="card-body">                                                                     

                                             <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Image</label>
                                                <input name="image" type="file" class="form-control" required>
                                                <label style="color: red;">(Please select Image with Dimension of 1920 X 728 pixels)</label>
                                               
                                            </div>


                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Heading</label>
                                                <input name="heading" type="text" class="form-control">
                                               
                                            </div>


                                            <div class="form-actions form-group">
                                                <button type="submit" class="btn btn-success"> Add Banner </button>
                                            </div>
                                        
                                      </div>
                                    </div>
                                </div>
            </form>
                          <br>
</center>


@endsection