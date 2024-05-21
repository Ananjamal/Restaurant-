<div id="menu" class="menu-main pad-top-100 pad-bottom-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                    <h2 class="text-center block-title">
                        Our Menu
                    </h2>
                    <p class="text-center title-caption">
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                        alteration in some form, by injected humour, or randomised words which don't look even slightly
                        believable.
                    </p>
                </div>
                <hr>
                <div class="tab-menu">
                    <div class="row justify-content-center py-4">
                        @foreach ($categories as $category)
                            <div class="col-md-3 col-sm-6 mb-4">
                                <div class="card text-center border-0">
                                    <div class="card-body category" wire:click='getID({{ $category->id }})'
                                        data-id="{{ $category->id }}">
                                        <h2>{{ $category->name }}</h2>
                                        @if ($category->name == 'STARTERS')
                                            <p><i class="flaticon-canape"></i></p>
                                        @elseif ($category->name == 'MAIN DISHES')
                                            <p><i class="flaticon-dinner"></i></p>
                                        @elseif ($category->name == 'DESERTS')
                                            <p><i class="flaticon-desert"></i></p>
                                        @elseif ($category->name == 'DRINKS')
                                            <p><i class="flaticon-coffee"></i></p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <hr>
                    {{-- @if (session()->has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <i class="bi bi-check-circle me-1"></i>
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @elseif (session()->has('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <i class="bi bi-exclamation-octagon me-1"></i>
                                    {{ session('error') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif --}}
                    <hr>
                    <div class="mt-4">
                        <div class="row">

                            @foreach ($items as $item)
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="offer-item">
                                        <img src="{{ Storage::url($item->image) }}" alt="{{ $item->name }}"
                                            class="img-responsive">
                                        <div>
                                            <h3>{{ $item->name }}</h3>
                                            <p>{{ $item->description }}</p>
                                        </div>
                                        <span class="offer-price">${{ $item->price }}</span>
                                        <div>
                                            <button type="button" class="btn btn-primary mr-4"
                                                wire:click='addToCart({{ $item->id }})'>
                                                <i class="fa-solid fa-cart-plus"></i>
                                            </button>
                                            <button type="button" class="btn btn-danger"
                                                wire:click='addToFavorite({{ $item->id }})'>
                                                <i class="fa-regular fa-heart"></i>
                                            </button>
                                        </div>


                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- end tab-menu -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
