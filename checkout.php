<!-- App Include Here -->
<!-- Header  -->
<?php include 'inc/app.php'; ?>

<!-- Page Tittle -->
<section class="dark-bg-light pt-5 pb-3">
    <div class="container">
        <p class="body-color level-6 sec__med_font m-0">Check Out</p>
    </div>
</section>



<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-7">


                <div class="checkout_first_sec">
                    <h1 class="level-7 sec__bold_font mb-3">Billing Details</h1>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class=" mb-3">
                                <label for="" class="checkout_label">First Name <span>*</span></label>
                                <br>
                                <input type="text" class="form-control-2" placeholder="First Name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class=" mb-3">
                                <label for="" class="checkout_label">Last Name <span>*</span></label>
                                <br>
                                <input type="text" class="form-control-2" placeholder="Last Names">
                            </div>
                        </div>
                        <div class=" mb-3">
                            <label for="" class="checkout_label">Company Name (optional) <span>*</span></label>
                            <br>
                            <input type="text" class="form-control-2" placeholder="Last Names">
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label for="" class="checkout_label">Street address (optional) <span>*</span></label>
                            <br>
                            <select class="form_select_2">
                                <option selected>France</option>
                                <option value="1">Spain</option>
                                <option value="2">Switzerland</option>
                                <option value="3">Thailand</option>
                                <option value="4">Italy</option>
                                <option value="5">Kuwait</option>
                                <option value="6">Zimbabwe</option>
                                <option value="7">Ukraine</option>
                            </select>
                        </div>


                        <div class=" mb-3">
                            <label for="" class="checkout_label">Street address <span>*</span></label>
                            <br>
                            <input type="text" class="form-control-2" placeholder="House number and street name">

                        </div>
                        <div class=" mb-3">
                            <input type="text" class="form-control-2" placeholder="Apartment, suite, unit, etc. (optional)">

                        </div>

                        <div class=" mb-3">
                            <label for="" class="checkout_label">Town / City <span>*</span></label>
                            <input type="text" class="form-control-2" placeholder="">

                        </div>

                        <div class=" mb-3">
                            <label for="" class="checkout_label">County (optional) <span>*</span></label>
                            <input type="text" class="form-control-2" placeholder="CA">

                        </div>

                        <div class=" mb-3">
                            <label for="" class="checkout_label">Postcode <span>*</span></label>
                            <input type="text" class="form-control-2" placeholder="">

                        </div>


                        <div class=" mb-3">
                            <label for="" class="checkout_label">Phone <span>*</span></label>
                            <input type="text" class="form-control-2" placeholder="Phone">

                        </div>
                        <div class=" mb-3">
                            <label for="" class="checkout_label">Email Address <span>*</span></label>
                            <input type="text" class="form-control-2" placeholder="Email Address">

                        </div>
                    </div>
                </div>


                <div class="checkout_first_sec">
                    <div class="row">
                        <div class=" mb-3">
                            <label for="" class="checkout_label">Order Notes (optional) <span>*</span></label>
                            <br>
                            <textarea class="form-control-2" placeholder="Notes about your order, e.g. special notes for delivery." id="floatingTextarea"></textarea>

                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="checkout_first_sec">
                    <h1 class="level-7 sec__bold_font mb-3">Your Order</h1>
                    <div class="row">
                        <div class="col-lg-6">
                            <p>Product</p>
                        </div>
                        <div class="col-lg-6">
                            <p>Product 5 × 2 </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <p>Subtotal</p>
                        </div>
                        <div class="col-lg-6">
                            <p> $30.00 </p>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-6">
                            <p>Total</p>
                        </div>
                        <div class="col-lg-6">
                            <p> $30.00</p>
                        </div>
                    </div>


                </div>

                <div class="checkout_first_sec">
                    <span>Have a coupon? <a onclick="handleToggle()" id="toggle-btn">Click here to enter your coupon code</a></span>

                    <!-- show data -->
                    <div id="coupon-section">
                        <p class="level-8 sec__regular_font"> If you have a coupon code, please apply it below.</p>
                        <span class="d-flex">
                            <input type="text" name="coupon_code" class="input-text" placeholder="Coupon code" id="coupon_code" value="">
                            <button type="button" class="btn btn-primary" tabindex="0">Apply</button>
                        </span>
                    </div>
                    <!-- show data -->

                </div>

                <div class="checkout_first_sec">
                    <div class="text-center">
                        <h1 class="level-7 sec__bold_font mb-3">Credit/Debit Card Secure Payment</h1>

                    </div>

                    <div class=" mb-3">
                        <label for="" class="checkout_label_card">CARDHOLDER <span>*</span></label>
                        <input type="text" class="form-control-2">

                    </div>

                    <div class=" mb-3">
                        <label for="" class="checkout_label_card">CARD NUMBER <span>*</span></label>
                        <input type="text" class="form-control-2">

                    </div>
                    <div class=" mb-3">
                        <label for="" class="checkout_label_card">EXPIRATION DATE <span>*</span></label>
                        <div class="row">
                            <div class="col-lg-6">
                                <select class="form_select_2">
                                    <option selected>Month</option>
                                    <option value="1">01</option>
                                    <option value="2">02</option>
                                    <option value="3">03</option>
                                    <option value="4">04</option>
                                    <option value="5">05</option>
                                    <option value="6">06</option>
                                    <option value="7">07</option>
                                    <option value="8">08</option>
                                    <option value="9">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <select class="form_select_2">
                                    <option selected>Year</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                    <option value="2027">2027</option>
                                    <option value="2028">2028</option>
                                    <option value="2029">2029</option>
                                    <option value="2030">2030</option>
                                    <option value="2031">2031</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <div class=" mb-3">
                        <label for="" class="checkout_label_card">CARD VERIFICATION NUMBER
                            <span>*</span></label>
                        <input type="text" class="form-control-2">

                    </div>


                    <div class="">
                        <p class="level-8 sec__med_font">Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="privacy-policy.php">privacy policy</a>.

                        </p>
                    </div>
                    <button type="button" class="btn btn_primary_secondary" tabindex="0">Place order</button>
                </div>

            </div>
        </div>
</section>

<!-- HAVE A QUESTIONS? FEEL FREE TO ASK -->

<section class="haveAQuestion my-5 my-lg-0">
    <div class="container ">
        <div class="row">
            <div class="col-lg-6 my-auto">

                <p class="level-5 sec__bold_font body-color pt-lg-2">
                    HAVE A QUESTIONS? FEEL FREE TO ASK
                </p>


            </div>
            <div class="col-lg-3">
                <div class="d-flex">
                    <span>

                        <img src="./img/telephone.png" alt="">
                    </span>
                    <span class="pt-lg-2">
                        <a href="tel:+6208740040" class="level-5 sec__bold_font body-color">
                            +6208740040
                        </a>
                    </span>
                </div>
            </div>
            <div class="col-lg-3 pt-lg-3">
                <div class="social-icons">
                    <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- HAVE A QUESTIONS? FEEL FREE TO ASK -->
<!-- Footer  -->
<?php include 'inc/footer.php'; ?>