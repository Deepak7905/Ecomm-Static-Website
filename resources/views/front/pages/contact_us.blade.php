@extends('front.main')


@section('content')

<section class="ec-page-content section-space-p">
    <div class="container">
        <div class="row">
            <div class="ec-common-wrapper">
                <div class="ec-contact-leftside">
                    <div class="ec-contact-container shadow">
                        <div class="ec-contact-form ">
                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                            @if(session('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('error') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <form action="{{ route('contact.send') }}" method="POST">
                                @csrf
                                <span class="ec-contact-wrap">
                                    <label>First Name*</label>
                                    <input type="text" name="firstname" placeholder="Enter your first name" required>
                                </span>
                                <span class="ec-contact-wrap">
                                    <label>Last Name*</label>
                                    <input type="text" name="lastname" placeholder="Enter your last name" required>
                                </span>
                                <span class="ec-contact-wrap">
                                    <label>Email*</label>
                                    <input type="email" name="email" placeholder="Enter your email address" required>
                                </span>
                                <span class="ec-contact-wrap">
                                    <label>Phone Number*</label>
                                    <input type="text" name="phonenumber" placeholder="Enter your phone number"
                                        required>
                                </span>
                                <span class="ec-contact-wrap">
                                    <label>Comments/Questions*</label>
                                    <textarea name="address" placeholder="Please leave your comments here.."></textarea>
                                </span>
                                <span class="ec-contact-wrap ec-contact-btn">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </span>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="ec-contact-rightside">
                    <div class="ec_contact_map">
                        <div class="ec_map_canvas">
                            <!--<iframe id="ec_map_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3636432.674166715!2d78.21888518511675!3d27.118390675643795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39994e9f7b4a09d3%3A0xf6a5476d3617249d!2sUttar%20Pradesh!5e0!3m2!1sen!2sin!4v1700806051043!5m2!1sen!2sin"></iframe>-->
                        </div>
                    </div>
                    <div class="ec_contact_info">
                        <h1 class="ec_contact_info_head">Contact us</h1>
                        <ul class="align-items-center">
                            <!--01,Kathkuiya,Katya,KUSHINAGAR,Pin 274303,UTTAR PRADESH </li>-->
                            <li class="ec-contact-item align-items-center"><i class="ecicon eci-phone"
                                    aria-hidden="true"></i><span>Call Us :</span><a
                                    href="tel:+919999999999">+91-9999999999</a></li>
                            <li class="ec-contact-item align-items-center"><i class="ecicon eci-envelope"
                                    aria-hidden="true"></i><span>Email :</span><a
                                    href="mailto:info@rsgeneralstore.in">info@rsgeneralstore.in</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection