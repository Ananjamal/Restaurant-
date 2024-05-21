<div class="container">
    <h2 class="checkout-header">Checkout</h2>
    <div class="row">
        <div class="col-md-8 form-section">
            <form>
                <h4>Billing Address</h4>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputFirstName">First Name</label>
                        <input type="text" class="form-control" id="inputFirstName" placeholder="First Name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputLastName">Last Name</label>
                        <input type="text" class="form-control" id="inputLastName" placeholder="Last Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">State</label>
                        <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>Gaza</option>
                            <option>West Bank</option>
                            <option>Jerusalem</option>
                            <option>Ramallah</option>
                            <option>Bethlehem</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>

                    <div class="form-group col-md-2">
                        <label for="inputZip">Zip</label>
                        <input type="number" class="form-control" id="inputZip">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputCountry">Country</label>
                    <select id="inputCountry" class="form-control">
                        <option selected>Choose...</option>
                        <option>Palestine</option>

                        <!-- Add more options as needed -->
                    </select>
                </div>

                <hr>
                <h4>Payment Method</h4>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="paymentMethod" id="creditCard"
                            value="creditCard">
                        <label class="form-check-label" for="creditCard">
                            Credit Card
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="paymentMethod" id="paypal"
                            value="paypal">
                        <label class="form-check-label" for="paypal">
                            PayPal
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="paymentMethod" id="directCheck"
                            value="directCheck">
                        <label class="form-check-label" for="directCheck">
                            DirectCheck
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-dark">Place Order</button>
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
