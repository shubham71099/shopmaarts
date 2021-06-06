@extends('admin.mainlayout')
<title>Logo</title>

@section('content')
<center>
                
	                       <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                    <h3 class="card-title">Logo</h3>
                                </div>
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">

                                            @foreach($data as $d)
                                            
                                            <tr> 
                                                <td>Image</td>
                                                <td><img src="{{url('storage/app/logo')}}{{'/'}}{{$d->image}}" style="height: 90;width: 150px;" ></td>
                                            </tr>   
                                            <tr> <br>
                                                <td></td>
                                                <td>&nbsp;&nbsp;<a href='editlogo/{{ $d->id }}'><button class="btn btn-primary">Edit</button></a></td>

                                             </tr>
                                        
                                            @endforeach
                                          
                                    </table>
                                </div>
                            </div>
</center>


@endsection