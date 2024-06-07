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

            </form>
        </div>
        <!-- Cart Summary -->
        <div class="col-md-4 summary-section">
            <div class="summary">
                <h5 class="summary-header">Order Summary</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($CartItems as $item)
                            <tr>
                                <td>{{ $item->menu->name }}</td>
                                <td>{{ $item->quantity }}</td>
                                <td>${{ $item->total }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="summary-totals">
                    <div class="total">Subtotal: ${{ $subtotalPrice }}</div>
                    <div class="total">Shipping: ${{ $shippingPrice }}</div>
                    <div class="total">Discount: ${{ $discount }}</div>
                    <div class="total" style="color:#28a745">Total: ${{ $totalPrice }}</div>
                </div>
            </div>
        </div>

    </div>
    <button wire:click='placeOrder' class="btn btn-dark">Place Order</button>

</div>
