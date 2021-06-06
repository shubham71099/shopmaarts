@extends('admin.mainlayout')
<title>View Banner</title>
@section('content')
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
    ============================================ -->
    <!-- Google Fonts
    ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('assets/datatable/css/bootstrap.min.css')}}">
    <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('assets/datatable/css/font-awesome.min.css')}}">
    <!-- adminpro icon CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('assets/datatable/css/adminpro-custon-icon.css')}}">
    <!-- meanmenu icon CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('assets/datatable/css/meanmenu.min.css')}}">
    <!-- mCustomScrollbar CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('assets/datatable/css/jquery.mCustomScrollbar.min.css')}}">
    <!-- animate CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('assets/datatable/css/animate.css')}}">
    <!-- normalize CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('assets/datatable/css/data-table/bootstrap-table.css')}}">
    <link rel="stylesheet" href="{{asset('assets/datatable/css/data-table/bootstrap-editable.css')}}">
    <!-- normalize CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('assets/datatable/css/normalize.css')}}">
    <!-- charts CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('assets/datatable/css/c3.min.css')}}">
    <!-- style CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('assets/datatable/style.css')}}">
    <!-- responsive CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('assets/datatable/css/responsive.css')}}">
    <!-- modernizr JS
    ============================================ -->
    <script src="{{asset('assets/datatable/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body class="materialdesign">
<center>
      <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                                <h3 class="card-title">Banner</h3>
                        </div>
                                   
                                 <div class="card-body">
                                       
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-key-events="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-click-to-select="true" data-toolbar="#toolbar" >
                                            <thead>
                                                <tr>
                                                    <th data-field="state" data-checkbox="false">ID</th>
                                                    <th>&nbsp;Image</th>
                                                    <th>Heading</th>
                                                    <th>Status</th>
                                                    <th>&nbsp;&nbsp;Action</th>
                                                </tr>
                                            </thead>
                                           
                                            <tbody>
                                              @foreach($data as $d)

                                            <tr>
                                                <td>&nbsp;&nbsp;{{$d->id}}</td>
                                                <td>&nbsp;&nbsp;&nbsp;&nbsp;<img src="{{url('storage/app/banner')}}{{'/'}}{{$d->image}}" style="height: 300;width: 750px;" ></td>
                                                <td>&nbsp;&nbsp;{{$d->heading}}</td>
                                                <td>&nbsp;
                                                    @if($d->status == 'active')
                                                    <a href="{{route('banner_active',['id'=>encrypt($d->id),'status'=>'active'])}}">Active</a>  
                                                    @else
                                            <a href="{{route('banner_active',['id'=>encrypt($d->id),'status'=>'inactive'])}}">InActive</a>  
                                                    @endif
                                                </td>
                                                <td>&nbsp;&nbsp;<a href="deletebanner/{{ $d->id }}" class="btn btn-danger btn-md"><span class="glyphicon glyphicon-trash"></span> Delete </a></td>
                                            </tr>
                                              @endforeach
                                            
                                        </tbody>
                                        </table>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
</center>
</body>

</html>


@endsection