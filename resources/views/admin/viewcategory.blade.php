@extends('admin.mainlayout')
<title>View Category</title>
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
                                <h3 class="card-title">Category Detail</h3>
                        </div>
                                   
                                 <div class="card-body">
                                       
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-key-events="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-click-to-select="true" data-toolbar="#toolbar" >
                                            <thead>
                                                <tr>
                                                    <th data-field="state" data-checkbox="false">ID</th>
                                                    <th>Category Name</th>
                                                    <th>Description</th>
                                                    <th>Created On</th>
                                                    <th>Action</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($data as $d)
                                            <tr>
                                                <td>&nbsp;{{$d->id}}</td>
                                                <td><strong>&nbsp;&nbsp;{{$d->name}}</strong></td>
                                                <td>&nbsp;&nbsp;{{$d->des}}</td>
                                                <td>&nbsp;&nbsp;{{$d->created_at}}</td>
                                                <td>&nbsp;&nbsp;<a href="{{route('deletecategory',['id'=>$d->id])}}"><button class="btn btn-danger">Delete</button></a></td>
                                                <td>&nbsp;&nbsp;<a href="{{route('editcategory',['id'=>$d->id])}}"><button class="btn btn-primary">Edit</button></a></td>
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

@section('js')

    <!-- Chat Box End-->
    <!-- jquery
    ============================================ -->
    <script src="{{asset('assets/datatable/js/vendor/jquery-1.11.3.min.js')}}"></script>
    <!-- bootstrap JS
    ============================================ -->
    <script src="{{asset('assets/datatable/js/bootstrap.min.js')}}"></script>
    <!-- meanmenu JS
    ============================================ -->
    <script src="{{asset('assets/datatable/js/jquery.meanmenu.js')}}"></script>
    <!-- mCustomScrollbar JS
    ============================================ -->
    <script src="{{asset('assets/datatable/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <!-- sticky JS
    ============================================ -->
    <script src="{{asset('assets/datatable/js/jquery.sticky.js')}}"></script>
    <!-- scrollUp JS
    ============================================ -->
    <script src="{{asset('assets/datatable/js/jquery.scrollUp.min.js')}}"></script>
    <!-- counterup JS
    ============================================ -->
    <script src="{{asset('assets/datatable/js/counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('assets/datatable/js/counterup/waypoints.min.js')}}"></script>
    <!-- peity JS
    ============================================ -->
    <script src="{{asset('assets/datatable/js/peity/jquery.peity.min.js')}}"></script>
    <script src="{{asset('assets/datatable/js/peity/peity-active.js')}}"></script>
    <!-- sparkline JS
    ============================================ -->
    <script src="{{asset('assets/datatable/js/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('assets/datatable/js/sparkline/sparkline-active.js')}}"></script>
    <!-- data table JS
    ============================================ -->
    <script src="{{asset('assets/datatable/js/data-table/bootstrap-table.js')}}"></script>
    <script src="{{asset('assets/datatable/js/data-table/tableExport.js')}}"></script>
    <script src="{{asset('assets/datatable/js/data-table/data-table-active.js')}}"></script>
    <script src="{{asset('assets/datatable/js/data-table/bootstrap-table-editable.js')}}"></script>
    <script src="{{asset('assets/datatable/js/data-table/bootstrap-editable.js')}}"></script>
    <script src="{{asset('assets/datatable/js/data-table/bootstrap-table-resizable.js')}}"></script>
    <script src="{{asset('assets/datatable/js/data-table/colResizable-1.5.source.js')}}"></script>
    <script src="{{asset('assets/datatable/js/data-table/bootstrap-table-export.js')}}"></script>
    <!-- main JS
    ============================================ -->
    <script src="{{asset('assets/datatable/js/main.js')}}"></script>


@endsection