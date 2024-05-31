<div id="our_team" class="team-main pad-top-100 pad-bottom-100 parallax">
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                    <h2 class="text-center block-title">
                        Our Team
                    </h2>
                    <p class="text-center title-caption">There are many variations of passages of Lorem Ipsum
                        available, but the majority have suffered alteration in some form, by injected humour, or
                        randomised words which don't look even slightly believable. </p>
                </div>
                <div class="team-box">

                    <div class="row">
                        @foreach ($chefs as $chef)
                            <div class="col-md-4 col-sm-6">
                                <div class="sf-team">
                                    <div class="thumb">
                                        <a href="#"><img src="{{ Storage::url($chef->image)}}"
                                                alt=""></a>
                                    </div>
                                    <div class="text-col">
                                        <h3>{{$chef->name}}</h3>
                                        <p>{{$chef->bio}}.</p>
                                        <ul class="team-social">
                                            <li><a href="#"><i class="fa-brands fa-facebook"></i></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa-brands fa-twitter"></i></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa-brands fa-linkedin"></i></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- end row -->

                </div>
                <!-- end team-box -->

            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->

</div>
