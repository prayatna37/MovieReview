@extends('layouts.app')

@section('content')
    <main class="main-content">
        <div class="container">
            <div class="page">
                <div class="breadcrumbs">
                    <a href="/">Home</a>
                    <span>Contact</span>
                </div>

                <div class="content">
                    <div class="row">
                        <div class="col-md-4">
                            <h2>Contact</h2>
                            <ul class="contact-detail">
                                <li>
                                    <img src="assets/images/icon-contact-map.png" alt="#">
                                    <address><span>MovieReview</span> <br>The British College, Kathmandu, Nepal</address>
                                </li>
                                <li>
                                    <img src="assets/images/icon-contact-phone.png" alt="">
                                    <a href="tel:1590912831">+1 590 912 831</a>
                                </li>
                                <li>
                                    <img src="assets/images/icon-contact-message.png" alt="">
                                    <a href="mailto:contact@companyname.com">moviereviewquery@gmail.com</a>
                                </li>
                            </ul>
                            <div class="contact-form">
                                <form action="/contact" method="get">
                                <input type="text" class="name" placeholder="name...">
                                <input type="text" class="email" placeholder="email...">
                                <textarea class="message" placeholder="message..."></textarea>
                                <input type="submit" value="Send Message ">
                                </form>

                            </div>
                        </div>
                        <div class="col-md-7 col-md-offset-1">
                            <div class="map"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .container -->
    </main>
@endsection

<

