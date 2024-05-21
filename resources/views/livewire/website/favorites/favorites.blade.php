<div class="container">
    <div class="row wishlist-header text-center">
        <div class="col-12">
            <h2>My Wishlist</h2>
            <p>Your favorite items in one place</p>
        </div>
    </div>
    <!-- Wishlist item -->
    @if ($favorites->isEmpty())
        <div class="row wishlist-header text-center">
            <div class="col-12">
                <h3 style="color: red">There Is No Favorites Found </h3>
            </div>
        </div>
    @else
        <div class="row">

            @foreach ($favorites as $item)
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card">
                        <img class="card-img-top" src="{{ Storage::url($item->menu->image) }}" alt="Product image">

                        <div class="card-body">
                            <h5 class="card-title">{{ $item->menu->name }}</h5>
                            <p class="card-text">Category: {{ $item->menu->category->name }}</p>
                            <p class="card-text"><strong>${{ $item->menu->price }}</strong></p>
                            <a wire:click='addToCart({{ $item->menu->id }})' class="btn btn-dark btn-sm">Add to Cart</a>
                            <a wire:click='deleteFromFavorites({{ $item->id }})' class="text-dark float-right"><i
                                    class="fa fa-trash"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    @endif
</div>
