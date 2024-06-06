<div id="footer" class="footer-main">
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}

    <div class="footer-news pad-top-100 pad-bottom-70 parallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">

                        <h2 class="text-center ft-title color-white">Newsletter</h2>
                        <p class="text-center">Stay up to date with our latest news and updates.</p>
                    </div>
                    <div class="subscribe-form text-center">
                        <form wire:submit.prevent="sendMessage">
                            <div class="form-group">
                                <input type="email" class="form-control mb-3" wire:model.lazy="email"
                                    placeholder="Enter your email address" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control mb-3" rows="3" wire:model.lazy="message" placeholder="Enter your message" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-orange"><i class="fa-solid fa-paper-plane"></i>
                                Submit</button>
                        </form>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>

    <!-- end footer-news -->
    <div class="footer-box pad-top-70">
        <div class="container">
            <div class="row">
                <div class="footer-in-main">
                    <div class="footer-logo">
                        <div class="text-center">
                            <img src="{{ asset('webassets/images/logo.png') }}" alt="" />
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-box-a">
                            <h3>About Us</h3>
                            <p>Aenean commodo ligula eget dolor aenean massa. Cum sociis nat penatibu set magnis dis
                                parturient montes.</p>
                            {{-- <ul class="socials-box footer-socials pull-left">
                                <li>
                                    <a href="#">
                                        <div class="social-circle-border"><i class="fa fa-facebook"></i></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="social-circle-border"><i class="fa fa-twitter"></i></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="social-circle-border"><i class="fa fa-google-plus"></i></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="social-circle-border"><i class="fa fa-pinterest"></i></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="social-circle-border"><i class="fa fa-linkedin"></i></div>
                                    </a>
                                </li>
                            </ul> --}}

                        </div>
                        <!-- end footer-box-a -->
                    </div>
                    <!-- end col -->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-box-b">
                            <h3>New Menu</h3>
                            <ul>
                                @foreach ($menus as $menu)
                                    <li><a>{{ $menu->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- end footer-box-b -->
                    </div>
                    <!-- end col -->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-box-c">
                            <h3>Contact Us</h3>
                            <p>
                                <i class="fa fa-map-signs" aria-hidden="true"></i>
                                <span>Gaza, DerElbalah, Palestine</span>
                            </p>
                            <p>
                                <i class="fa fa-mobile" aria-hidden="true"></i>
                                <span>
                                    +970592766534
                                </span>
                            </p>
                            <p>
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span><a href="#">ananomar51@gmail.com</a></span>
                            </p>
                        </div>
                        <!-- end footer-box-c -->
                    </div>
                    <!-- end col -->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-box-d">
                            <h3>Opening Hours</h3>

                            <ul>
                                <li>
                                    <p>Monday - Thursday </p>
                                    <span> 11:00 AM - 9:00 PM</span>
                                </li>
                                <li>
                                    <p>Friday - Saturday </p>
                                    <span> 11:00 AM - 5:00 PM</span>
                                </li>
                            </ul>
                        </div>
                        <!-- end footer-box-d -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end footer-in-main -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
        <div id="copyright" class="copyright-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h6 class="copy-title"> Copyright &copy; 2017 Food Funday is powered by <a href="#"
                                target="_blank"></a> </h6>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end copyright-main -->
    </div>
    <!-- end footer-box -->

</div>
