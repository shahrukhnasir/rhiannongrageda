<!-- App Include Here -->
<!-- Header  -->
<?php include 'inc/app.php'; ?>

<!-- Page Tittle -->
<section class="pt-5 pb-3">
    <div class="container">
        <div class="sign_up">

            <p class="dark-color level-6 sec__med_font m-0">Sign In</p>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form_label level-8 sec__regular_font dark-color py-2">Username or Email Address</label>
                <input type="text" class="form-control-1" id="exampleFormControlInput1" placeholder="Username or Email Address">
            </div>



            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form_label level-8 sec__regular_font dark-color py-2"> Password
                </label>
                <input type="number" class="form-control-1" id="exampleFormControlInput1" placeholder=" Password">
            </div>
            <div class="row">
                <div class="col-lg-6 py-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label level-8 sec__regular_font" for="flexCheckDefault">
                            Remember Me
                        </label>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="text-end py-2">
                        <a href="reset" class="sign_in_link level-8 sec__regular_font">

                            Forgot Password?
                        </a>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-6">
                    <button type="button" class="btn btn_primary_secondary" tabindex="0">Login</button>
                </div>

                <div class="col-lg-6">
                    <div class="text-end py-2">
                        <a href="sign-up" class="sign_in_link">

                            Register Now
                        </a>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>



<section>

    <div class="container">

    </div>
</section>
<!-- Footer  -->
<?php include 'inc/footer.php'; ?>