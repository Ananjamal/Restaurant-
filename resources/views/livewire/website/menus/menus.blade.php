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
                    <div class="mt-4">
                        <div class="row">
                            @foreach ($items as $item)
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="offer-item" style="text-align: center; position: relative;">
                                        <img src="{{ Storage::url($item->image) }}" alt="{{ $item->name }}"
                                            style="width: 140px; height: 140px; padding: 10px; background: #fff; border-radius: 50%; display: inline-block;">
                                        <div>
                                            <h3>{{ $item->name }}</h3>
                                            <p>{{ $item->description }}</p>
                                        </div>
                                        <span class=""
                                            style="font-size: 15px; color: #78534a; font-weight: bold; border: 1px solid #78534a; border-radius: 50%; padding: 8px 16px; background-color: #fff; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); display: inline-block; margin: 10px 0; transition: background-color 0.3s, color 0.3s, box-shadow 0.3s;"
                                            onmouseover="this.style.backgroundColor='#78534a'; this.style.color='#fff'; this.style.boxShadow='0 0 15px rgba(0, 0, 0, 0.2)';"
                                            onmouseout="this.style.backgroundColor='#fff'; this.style.color='#78534a'; this.style.boxShadow='0 0 10px rgba(0, 0, 0, 0.1)';">
                                            ${{ $item->price }}
                                        </span>
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
