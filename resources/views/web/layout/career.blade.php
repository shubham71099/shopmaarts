@extends('web.layout.front')

@section('content1')


<section class="contact-section spad">
        <div class="container">
            <div class="row">
              
                <div class="col-lg-6 offset-lg-1">
                        @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{session()->get('success')}}
                        </div>
                   		@endif
               
                    <div class="contact-form">
                        <div class="leave-comment">
                            <h3>Career</h3><br>
                            <p><b>Apply Now</b></p>
                            <form action="{{route('postcareer')}}" method="post" class="comment-form">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="text" placeholder="Full Name" name="name" class="form-control"required>
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="text" placeholder="Enter Email Address" name="email" class="form-control" required>
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="text" placeholder="Mobile No." name="mobile" class="form-control" required>
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="text" placeholder="Qualification" name="qualification" class="form-control" required>
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="text" placeholder="Year Of Experience" name="experience" class="form-control" required>
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea placeholder="Address" name="address" class="form-control" required></textarea>
                                        <button type="submit" class="site-btn">Submit</button>
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