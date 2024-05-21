<div class="container">
    <h2 class="checkout-header">Checkout</h2>
    <div class="row">
        <div class="col-md-8 form-section">
            <h4>Billing Address</h4>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputFirstName">First Name</label>
                    <input type="text" class="form-control" wire:model='first_name' id="inputFirstName"
                        placeholder="First Name">
                    @error('first_name')
                        <small class="text-danger"> {{ $message }} </small>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="inputLastName">Last Name</label>
                    <input type="text" class="form-control" wire:model='last_name' id="inputLastName"
                        placeholder="Last Name">
                    @error('last_name')
                        <small class="text-danger"> {{ $message }} </small>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="Phone">Phone</label>
                    <input type="text" class="form-control" id="Phone" wire:model='phone'
                        placeholder="0500000000">
                    @error('phone')
                        <small class="text-danger"> {{ $message }} </small>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="Address">Address</label>
                    <input type="text" class="form-control" wire:model='address' id="Address"
                        placeholder="123 street">
                    @error('Address')
                        <small class="text-danger"> {{ $message }} </small>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" wire:model='city' class="form-control" id="inputCity">
                    @error('city')
                        <small class="text-danger"> {{ $message }} </small>
                    @enderror
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">State</label>
                    <select id="inputState" wire:model='state' class="form-control">
                        <option selected>Choose...</option>
                        <option>Gaza</option>
                        <option>West Bank</option>
                        <option>Jerusalem</option>
                        <option>Ramallah</option>
                        <option>Bethlehem</option>
                        <!-- Add more options as needed -->
                    </select>
                    @error('state')
                        <small class="text-danger"> {{ $message }} </small>
                    @enderror
                </div>

                <div class="form-group col-md-2">
                    <label for="inputZip">Zip</label>
                    <input type="number" wire:model='zip_code' class="form-control" id="inputZip">
                    @error('zip_code')
                        <small class="text-danger"> {{ $message }} </small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="inputCountry">Country</label>
                <select id="inputCountry" wire:model='country' class="form-control">
                    <option selected>Choose...</option>
                    <option>Palestine</option>

                    <!-- Add more options as needed -->
                </select>
                @error('country')
                    <small class="text-danger"> {{ $message }} </small>
                @enderror
            </div>

            <hr>
            <h4>Payment Method</h4>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" wire:model='payment_method' type="radio" name="paymentMethod"
                        id="creditCard" value="creditCard">
                    <label class="form-check-label" for="creditCard">Credit Card</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" wire:model='payment_method' type="radio" name="paymentMethod"
                        id="paypal" value="paypal">
                    <label class="form-check-label" for="paypal">PayPal</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" wire:model='payment_method' type="radio" name="paymentMethod"
                        id="directCheck" value="directCheck">
                    <label class="form-check-label" for="directCheck">Direct Check</label>
                </div>
                @error('payment_method')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button wire:click='placeOrder' class="btn btn-dark">Place Order</button>
            </form>
        </div>
        <!-- Cart Summary -->
        <div class="col-md-4 summary-section">
            <div class="summary">
                <h5 class="summary-header">Order Summary</h5>
                <div class="summary-items">
                    <div class="row summary-header">
                        <div class="col-md-6"><strong>Name</strong></div>
                        <div class="col-md-3"><strong>Quantity</strong></div>
                        <div class="col-md-3"><strong>Total</strong></div>
                    </div>
                    @foreach ($CartItems as $item)
                        <div class="row">
                            <div class="col-md-6">{{ $item->menu->name }}</div>
                            <div class="col-md-3">{{ $item->quantity }}</div>
                            <div class="col-md-3">${{ $item->total }}</div>
                        </div>
                    @endforeach
                </div>
                <div class="summary-totals">
                    <div class="row total">
                        <div class="col-md-6">Subtotal</div>
                        <div class="col-md-6">${{ $subtotalPrice }}</div>
                    </div>
                    <div class="row total">
                        <div class="col-md-6">Shipping</div>
                        <div class="col-md-6">${{ $shippingPrice }}</div>
                    </div>
                    <div class="row total">
                        <div class="col-md-6">Discount</div>
                        <div class="col-md-6">${{ $discount }}</div>
                    </div>
                    <div class="row total">
                        <div class="col-md-6" style="color:#28a745">Total</div>
                        <div class="col-md-6" style="color:#28a745">${{ $totalPrice }}</div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
