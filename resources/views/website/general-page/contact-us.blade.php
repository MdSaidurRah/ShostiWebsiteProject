@extends('website.layouts.inner-layout')
@section('page-content')

<!-- Contact Area Start -->
<section class="page-content contact-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="contact-title">Get in Touch </h2>
            </div>

            <div class="col-lg-8">
                {{-- Alert Messages --}}
                <div id="formAlert" class="alert d-none"></div>

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif


                <form id="contactUsForm" action="{{ url('/contact-us-submission') }}" method="post">
                    @csrf

                    <div class="row">
                      

                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="subject" type="text" placeholder="Enter Subject">
                                <small class="text-danger error-subject"></small>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <input class="form-control" name="name" type="text" placeholder="Enter Name">
                                <small class="text-danger error-name"></small>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <input class="form-control" name="email" type="email" placeholder="Email">
                                <small class="text-danger error-email"></small>
                            </div>
                        </div>                        
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input class="form-control" name="contact_no" type="text" placeholder="Contact No">
                                <small class="text-danger error-email"></small>
                            </div>
                        </div>
                          <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="message" rows="5" placeholder="Enter Message"></textarea>
                                <small class="text-danger error-message"></small>
                            </div>
                        </div>

                      
                    </div>

                    <div class="form-group mt-3">
                        <button type="submit" id="submitBtn" class="button button-contactForm boxed-btn">
                            Send
                        </button>
                    </div>
                </form>
            </div>

            <div class="col-lg-3 offset-lg-1">
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-home"></i></span>
                    <div class="media-body">
                        
                        H: 820, L: 03, Makka Tower <br/>
                        Begum Rokeya Sharani<br/>
                        West Shewrapara<br/>
                        Mirpur, Dhaka - 1216<br/><br/>
                        
                        The Middle of Shewrapara Metro Station, Piller No: 312

                    </div>
                </div>

                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                    <div class="media-body">
                        <h3>+88 01737797773</h3>
                        <h3>+88 01410097773</h3>
                        <p>Saturday to Thursday 11am to 7pm</p>
                    </div>
                </div>

                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-email"></i></span>
                    <div class="media-body">
                        <h3>info@shostiarcstudio.com</h3>
                        <p>Send us your query anytime!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Area End -->

<!-- Map Area -->
<section class="page-content contact-section">
    <div class="container">
        <div class="mb-5 pb-4">
            <div class="map-embed">
                <iframe
                    src="https://www.google.com/maps?q=23.790555274740363,90.37569667976746&hl=en&z=16&output=embed"
                    width="100%"
                    height="400"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
</section>

{{-- AJAX Script --}}
<script>
$(document).ready(function () {

   

});
</script>

@endsection
