<div class="pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">
                @if ($CartItems->isEmpty())
                    <div class="row wishlist-header text-center">
                        <div class="col-12">
                            <h1>My Cart</h1>
                            <h3 style="color: red">There Is No items In Cart Yet </h3>
                        </div>
                    </div>
                @else
                    <div class="row wishlist-header text-center">
                        <div class="col-12">
                            <h1>My Cart</h1>
                        </div>
                    </div>
                    <!-- Shopping cart table -->
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" class="border-0 bg-light" class="">
                                        <div class="p-2 px-3 text-uppercase">Product</div>
                                    </th>
                                    <th scope="col" class="border-0 bg-light">
                                        <div class="py-2 text-uppercase text-center align-middle">Price</div>
                                    </th>
                                    <th scope="col" class="border-0 bg-light">
                                        <div class="py-2 text-uppercase text-center align-middle">Quantity</div>
                                    </th>
                                    <th scope="col" class="border-0 bg-light">
                                        <div class="py-2 text-uppercase text-center align-middle">Total</div>
                                    </th>
                                    <th scope="col" class="border-0 bg-light">
                                        <div class="py-2 text-uppercase text-center align-middle">Remove</div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($CartItems as $item)
                                    <tr>
                                        <th scope="row" class="border-0">
                                            <div class="p-2">
                                                <img src="{{ Storage::url($item->menu->image) }}" alt=""
                                                    class="img-fluid rounded shadow-sm text-center align-middle">
                                                <div class="ml-3 d-inline-block align-middle">
                                                    <h5 class="mb-0">
                                                        <span href="#"
                                                            class="text-dark d-inline-block align-middle">
                                                            {{ $item->menu->name }}
                                                        </span>
                                                    </h5>
                                                    <span
                                                        class="text-muted font-weight-normal font-italic d-block">Category:
                                                        {{ $item->menu->category->name }}
                                                    </span>
                                                </div>
                                            </div>
                                        </th>
                                        <td class="border-0 align-middle text-center">
                                            <strong>${{ $item->menu->price }}</strong>
                                        </td>
                                        <td class="border-0 align-middle">
                                            <div class="quantity-control ">
                                                <button class="btn-decrement"
                                                    wire:click='decreaseQuantity({{ $item->id }})'><i
                                                        class="fas fa-minus"></i></button>
                                                <input type="text" value="{{ $item->quantity }}">
                                                <button class="btn-increment"
                                                    wire:click='increaseQuantity({{ $item->id }})'><i
                                                        class="fas fa-plus"></i></button>
                                            </div>
                                        </td>
                                        <td class="border-0 align-middle text-center ">
                                            <strong>${{ $item->total }}</strong>
                                        </td>

                                        <td class="border-0 align-middle text-center "><a
                                                wire:click='deleteFromCart({{ $item->id }})' class="text-dark"><i
                                                    class="fa fa-trash"></i></a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- End -->
                @endif
            </div>
        </div>

        <div class="row py-5 p-4 bg-white rounded shadow-sm">
            <div class="col-lg-6">
                <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Coupon code</div>
                <div class="p-4">
                    <p class="font-italic mb-4">If you have a coupon code, please enter it in the box below</p>
                    <div class="input-group mb-4 border rounded-pill p-2">
                        <input type="text" placeholder="Apply coupon" wire:model='couponCode'
                            aria-describedby="button-addon3" class="form-control border-0">
                        <div class="input-group-append border-0">
                            <button wire:click='applyCoupon' id="button-addon3" type="button"
                                class="btn btn-dark px-4 rounded-pill"><i class="fa fa-gift mr-2"></i>Apply
                                coupon</button>
                        </div>
                    </div>
                </div>
                {{-- <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Instructions for seller
                </div>
                <div class="p-4">
                    <p class="font-italic mb-4">If you have some information for the seller you can leave them in the
                        box below</p>
                    <textarea name="" cols="30" rows="2" class="form-control"></textarea>
                </div> --}}
            </div>
            <div class="col-lg-6">
                <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
                <div class="p-4">
                    <p class="font-italic mb-4">Shipping and additional costs are calculated based on values you have
                        entered.</p>
                    <ul class="list-unstyled mb-4">
                        <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Order
                                Subtotal </strong><strong>${{ $subtotalPrice }}</strong></li>
                        <li class="d-flex justify-content-between py-3 border-bottom"><strong
                                class="text-muted">Shipping and handling</strong><strong>${{ $shippingPrice }}</strong>
                        </li>
                        <li class="d-flex justify-content-between py-3 border-bottom"><strong
                                class="text-muted">Discount</strong><strong>${{ $discount }}</strong></li>
                        <li class="d-flex justify-content-between py-3 border-bottom"><strong
                                class="text-muted">Total</strong>
                            <h5 class="font-weight-bold">${{ $totalPrice }}</h5>
                        </li>
                    </ul>
                    @if ($CartItems->isEmpty())
                    <button  wire:click='check' class="btn btn-dark rounded-pill py-2 btn-block" >Proceed to
                        checkout</button>
                    @else
                        <a href="{{ route('checkout') }}" class="btn btn-dark rounded-pill py-2 btn-block">Proceed to
                            checkout</a>
                    @endif
                </div>
            </div>
        </div>

    </div>
</div>
