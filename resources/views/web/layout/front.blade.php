<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('assets/images/icon.png')}}" rel="shortcut icon"/>
    <title>Shopmaarts | Online Sarees</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('assets/web/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/web/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/web/css/themify-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/web/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/web/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/web/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/web/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/web/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/web/css/style.css')}}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class=" fa fa-envelope"></i>
                        shopmaarts@gmail.com
                    </div>
                    <div class="phone-service">
                        <i class=" fa fa-phone"></i>
                        <strong>+91</strong> 7383 988 791
                    </div>
                </div>
                <div class="ht-right">

                    @if(@Auth::guard('customer')->user()->name)
                   
                    <div class="top-social">
                        <a href="{{ route('orders') }}" class="login-panel"><i class="fa fa-briefcase"></i><strong>Orders</strong></a>

                       <a href="{{ route('cust_home') }}" class="login-panel"><i class="fa fa-user"></i><strong>{{@Auth::guard('customer')->user()->name}}</strong></a>



                        <a href="{{ route('web_customer_logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            <div style="color: black;margin-top: 17px;" >
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            {{ __('Logout') }}</div>
                        </a>

                        <form id="logout-form" action="{{ route('web_customer_logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    

                    </div>

                     @else

                    <a href="{{route('web_customer_login')}}" class="login-panel"><i class="fa fa-user"></i><strong>Login</strong></a>

                    @endif
                </div>
            </div>
        </div>
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            @foreach($logo as $d)
                            <a href="{{route('web')}}">
                                <img src="{{url('storage/app/logo')}}{{'/'}}{{$d->image}}" alt="Shopmaarts">
                            </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                       
                           
                    </div>
                    <div class="col-lg-3 text-right col-md-3">
                        <ul class="nav-right">
                            <marquee><a style="color: red;"><b>Welcome to Shopmaarts | Online Sarees</b></a></marquee>
                            <li class="cart-icon">
                                
                                <a href="#">
                                    <i class="fa fa-shopping-cart"></i>
                                    
                                    <span>{{ \Cart::getTotalQuantity()}}</span>
                                </a>

                                <div class="cart-hover">
                                
                                    <div class="select-items">
                                        <table>
                                            <tbody>
                                             
                                 @if(count(\Cart::getContent()) > 0)
                                            @foreach(\Cart::getContent() as $item)  


                                                <tr>
                                                    <td class="si-pic"><img src="{{asset('storage/app/product')}}{{'/'}}{{$item->attributes->image }}" alt="" height="80"></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">    
                                                            <p>₹ {{$item->price}} X {{$item->quantity}} Pcs.</p>
                                                
                                                            <h6>{{$item->name}}</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        ₹ {{ \Cart::get($item->id)->getPriceSum() }}
                                                    </td>
                                                    
                                                </tr>
                                               
                                                @endforeach
                                                @else
                                                 <center> <span style="font-size: 18px;color: #000;font-weight: bold;">Your Shopping Cart is Empty.  </span> </center>
                                                @endif
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                     <div class="select-total">
                                        <span>total:</span>
                                        <h5>₹ {{ \Cart::getTotal() }}</h5>
                                    </div>
                                    
                                    <div class="select-button">
                                    
                                        <a href="{{route('cart')}}" class="primary-btn checkout-btn">View Cart</a>
                                        
                                    </div>
                                </div>
                            </li>
                            <li class="cart-price">Cart</li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
               
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="active"><a href="{{route('web')}}">Home</a></li>
                        <li><a href="{{route('shop')}}">Shop</a></li>
                        <li><a href="#">Collection</a>
                            <ul class="dropdown">
                                <li><a href="{{ route('saree') }}">Sarees</a></li>
                                <li><a href="{{ route('lehanga') }}">Lehanga</a></li>
                                <li><a href="{{ route('kurti') }}">Kurti</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('career')}}">Career</a></li>
                        <li><a href="#">User</a>
                            <ul class="dropdown">
                                <li><a href="{{route('web_customer_register')}}">Register</a></li>
                                <li><a href="{{route('web_customer_login')}}">Login</a></li>
                            </ul>
                        </li>
                         <li><a href="{{route('contact')}}">Contact</a>
                            
                        </li>
                       
                    </ul>
                </nav>
                
            </div>
        </div>
    </header>

    <!-- <div class="container-fluid"> -->
        @yield('content1')
        <!-- @yield('content1main') -->

    <!-- </div> -->
   


    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="#"><strong>Shopmaarts</strong></a>
                        </div>
                        <ul>
                            <li>Address: 245, Govardhan Nagar,Dindoli,Surat</li>
                            <li><a href="https://api.whatsapp.com/send?phone=917383988791&text=">Phone: +91 7383988791</a></li>
                            <li>Email: shopmaarts@gmail.com</li>
                        </ul>
                        <div class="footer-social">
                            <a href="https://www.instagram.com/shubham71099"><i class="fa fa-instagram"></i></a>
                            <a href="https://twitter.com/shubham071099"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.youtube.com/channel/UC7M93Yw7vALL9M7KNUvX48Q"><i class="fa fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>My Account</h5>
                        <ul>
                            <li><a href="#">My Account</a></li>
                            <li><a href="{{route('contact')}}">Contact</a></li>
                            <li><a href="{{route('career')}}">Career</a></li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Developed By <i class="fa fa-heart-o" aria-hidden="true"></i><a href="#" target="_blank">&nbsp;Shubham Jha</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                        <div class="payment-pic">
                            <img src="{{asset('assets/web/img/payment-method.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{asset('assets/web/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets/web/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/web/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('assets/web/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('assets/web/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('assets/web/js/jquery.zoom.min.js')}}"></script>
    <script src="{{asset('assets/web/js/jquery.dd.min.js')}}"></script>
    <script src="{{asset('assets/web/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('assets/web/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/web/js/main.js')}}"></script>
</body>

</html>