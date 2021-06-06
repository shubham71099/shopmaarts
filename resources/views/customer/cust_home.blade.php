@extends('web.layout.front')

@section('content1')


<center>

    <br>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                
                

                 <div class="col-lg-7">
                                <div class="card">
                                    <div class="card-header">
                                    <h4 class="card-title">Profile</h4>
                                </div>
                                   <div class="card-body">

                                    <table id="example1" class="table table-bordered table-striped" cellpadding="7">
                                           @foreach($data as $d) 
                                              
                                            <tr>
                                                <td><strong>Name</strong></td>
                                                <td><strong>{{$d->name}}</strong></td>
                                            </tr>

                                            <tr>
                                                <td><strong>Email</strong></td>
                                                <td><strong>{{$d->email}}</strong></td>
                                            </tr>
                                           
                                            <tr> 
                                                <td><strong>Registered On</td>
                                                <td>{{$d->created_at}}</td>
                                            </tr>

                                           
                                        @endforeach
                                    </table>
                                 </div>
                            </div>

                        </div>

        
</center>
@endsection
