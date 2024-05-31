<div class="special-menu pad-top-100 parallax">
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                    <h2 class="text-center block-title color-white"> Today's Special </h2>
                    <h5 class="text-center title-caption"> Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusm incididunt ut labore et dolore magna aliqua. Ut enim ad minim venia,nostrud
                        exercitation ullamco. </h5>
                </div>
                <div class="special-box">
                    <div id="owl-demo">
                        @foreach ($specialMenu as $item)
                            <div class="item item-type-zoom">
                                <span  class="item-hover">
                                    <div class="item-info" style="margin-left: 70px">
                                        <div class="headline ">
                                            {{ $item->name }}
                                            <div class="line"></div>
                                            <div class="dit-line">
                                                {{ $item->description }}
                                            </div>
                                            {{-- <button type="button" class="btn btn-primary mr-4"
                                                wire:click='addToCart({{ $item->id }})'>
                                                <i class="fa-solid fa-cart-plus"></i>
                                            </button>
                                            <button type="button" class="btn btn-danger"
                                                wire:click='addToFavorite({{ $item->id }})'>
                                                <i class="fa-regular fa-heart"></i>
                                            </button> --}}
                                        </div>

                                    </div>

                                </span>

                                <div class="">
                                    <img src="{{ Storage::Url($item->image) }}" alt="sp-menu"
                                        style="width: 342px; height: 400px; object-fit:fill;">
                                </div>
                            </div>
                        @endforeach

                        {{-- <div class="item item-type-zoom">
                                <a href="#" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                            ITALIAN PIZZA
                                            <div class="line"></div>
                                            <div class="dit-line">Lorem ipsum dolor sit amet, consectetur adip aliqua.
                                                Ut enim ad minim venia.</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img src="{{asset('webassets/images/special-menu-2.jpg')}}" alt="sp-menu">
                                </div>
                            </div>
                            <div class="item item-type-zoom">
                                <a href="#" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                            VEG. ROLL
                                            <div class="line"></div>
                                            <div class="dit-line">Lorem ipsum dolor sit amet, consectetur adip aliqua.
                                                Ut enim ad minim venia.</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img src="{{asset('webassets/images/special-menu-3.jpg')}}" alt="sp-menu">
                                </div>
                            </div>
                            <div class="item item-type-zoom">
                                <a href="#" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                            SALMON STEAK
                                            <div class="line"></div>
                                            <div class="dit-line">Lorem ipsum dolor sit amet, consectetur adip aliqua.
                                                Ut enim ad minim venia.</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img src="{{asset('webassets/images/special-menu-1.jpg')}}" alt="sp-menu">
                                </div>
                            </div>
                            <div class="item item-type-zoom">
                                <a href="#" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                            VEG. ROLL
                                            <div class="line"></div>
                                            <div class="dit-line">Lorem ipsum dolor sit amet, consectetur adip aliqua.
                                                Ut enim ad minim venia.</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img src="{{asset('webassets/images/special-menu-2.jpg')}}" alt="sp-menu">
                                </div>
                            </div> --}}
                    </div>
                </div>
                <!-- end special-box -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
    <!-- end special-menu -->
</div>
