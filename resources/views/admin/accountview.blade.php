@extends('admin.mainlayout')
<title>Account</title>

@section('content')
<center>
							<div class="col-lg-8">
                                <div class="card">
                                    <div class="card-header">
                                    <h3 class="card-title">Account Detail</h3>
                                </div>
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">

                                            @foreach($data as $d)
                                            
                                        
                                            <tr>
                                                <td>Name</td>
                                                <td>&nbsp;{{$d->name}}&nbsp;&nbsp;</td>
                                            </tr>
                                            <tr><td>Email</td>
                                                <td>&nbsp;{{$d->email}}&nbsp;&nbsp;&nbsp;</td>
                                            </tr>   
                                            <tr> <br>
                                                <td></td>
                                                <td>&nbsp;&nbsp;<a href='edit_account/{{ $d->id }}'><button class="btn btn-primary">Edit</button></a></td>

                                             </tr>
                                        
											@endforeach
                                          
                                    </table>
                                </div>
                            </div>
</center>


@endsection