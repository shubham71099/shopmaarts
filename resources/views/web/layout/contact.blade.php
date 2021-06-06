@extends('web.layout.front')

@section('content1')


<br>

<section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="contact-title">
                        <h4>Contacts Us</h4>
                        
                    </div>
                    <div class="contact-widget">
                        <div class="cw-item">
                            <div class="ci-icon">
                                <i class="ti-location-pin"></i>
                            </div>
                            <div class="ci-text">
                                <span>Address:</span>
                                <p>245, Govardhan Nagar, Dindoli, Surat</p>
                            </div>
                        </div>
                        <div class="cw-item">
                            <div class="ci-icon">
                                <i class="ti-mobile"></i>
                            </div>
                            <div class="ci-text">
                                <span>Phone:</span>
                                <p>+91 7383 988 791</p>
                            </div>
                        </div>
                        <div class="cw-item">
                            <div class="ci-icon">
                                <i class="ti-email"></i>
                            </div>
                            <div class="ci-text">
                                <span>Email:</span>
                                <p>shopmaarts@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                        
                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{session()->get('success')}}
                        </div>
                    @endif
                    <div class="contact-form">
                        <div class="leave-comment">
                            <h4>Leave A Comment</h4>
                            <p>We will call back later and answer your questions.</p>
                            <form action="{{route('postcontact')}}" method="post" class="comment-form">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Your name" name="name" class="form-control"required>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Your email" name="email" class="form-control" required>
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea placeholder="Your message" name="message" class="form-control" required></textarea>
                                        <button type="submit" class="site-btn">Send message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            

                </div>
            </div>
        </div>
    </section>
    

@endsection