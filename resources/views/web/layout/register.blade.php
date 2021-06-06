@extends('web.layout.front')

@section('content1')

<div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="register-form">
                        <h2>Register</h2>
                        <form action="#">
                            <div class="group-input">
                                <label for="username">E-mail *</label>
                                <input type="text" id="username">
                            </div>
                            <div class="group-input">
                                <label for="pass">Name *</label>
                                <input type="text" id="pass">
                            </div>
                            <div class="group-input">
                                <label for="con-pass">Password *</label>
                                <input type="text" id="con-pass">
                            </div>
                            <button type="submit" class="site-btn register-btn">REGISTER</button>
                        </form>
                        <div class="switch-login">
                            <a href="{{route('clogin')}}" class="or-login">Or Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


@endsection