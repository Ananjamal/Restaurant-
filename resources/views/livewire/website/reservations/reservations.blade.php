<div id="reservation" class="reservations-main pad-top-100 pad-bottom-100">
    {{-- The Master doesn't talk, he acts. --}}
    <div class="container">
        <div class="row">
            <div class="form-reservations-box">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="text-center block-title">
                            Reservations
                        </h2>
                    </div>
                    <h4 class="form-title">BOOKING FORM</h4>
                    <p>PLEASE FILL OUT ALL REQUIRED* FIELDS. THANKS!</p>
                    <form id="contact-form" method="post" class="reservations-box" name="contactform" action="mail.php">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <label for="form_name">Name</label>
                                    <input type="text" name="form_name" id="form_name" required="required" data-error="Firstname is required.">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <label for="email">E-Mail ID</label>
                                    <input type="email" name="email" id="email" required="required" data-error="E-mail id is required.">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <label for="phone">Contact No.</label>
                                    <input type="text" name="phone" id="phone">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <label for="no_of_persons">No. Of Persons</label>
                                    <select name="no_of_persons" id="no_of_persons" class="selectpicker">
                                        {{-- <option selected disabled>No. Of Persons</option> --}}
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <label for="date-picker">Date</label>
                                    <input type="text" name="date-picker" id="date-picker" required="required" data-error="Date is required." />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <label for="time-picker">Time</label>
                                    <input type="text" name="time-picker" id="time-picker" required="required" data-error="Time is required." />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <label for="preferred_food">Tables Available</label>
                                    <select name="Tables_Available" id="preferred_food" class="selectpicker">
                                        {{-- <option selected disabled>Tables Available</option> --}}
                                        <option>1</option>
                                        <option>2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <label for="occasion">Occasion</label>
                                    <select name="occasion" id="occasion" class="selectpicker">
                                        {{-- <option selected disabled>Occasion</option> --}}
                                        <option>Personal</option>
                                        <option>Wedding</option>
                                        <option>Birthday</option>
                                        <option>Anniversary</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="text-center reserve-book-btn">
                                    <button class="hvr-underline-from-center" type="submit" value="SEND" id="submit">BOOK MY TABLE</button>
                                </div>
                            </div>
                        </div>
                    </form>


                    <!-- end form -->
                </div>
                <!-- end col -->
            </div>
            <!-- end reservations-box -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->

</div>
