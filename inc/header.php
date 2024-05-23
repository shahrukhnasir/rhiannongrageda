<header class="header dark-bg-light">
    <section class="header-top ">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-md-6 col-lg-6 d-none d-md-block">
                    <div class="social-icons">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="d-flex justify-content-end">
                        <a href="sign-up" class="btn btn-sm btn-primary d-none d-lg-inline-block">SIGN UP</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="secound_header dark-bg-gary">
        <div class="container dark-bg-gary">
            <div class="navbar">
                <div class="logo">
                    <a href="index.php">

                        <img src="./img/white_logo.png" alt="">
                    </a>
                </div>
                <div class="desktop-nav">
                    <a href="index.php" class="navLinks">Home</a>
                    <a href="about.php" class="navLinks">About</a>
                    <a href="shop.php" class="navLinks">Shop</a>
                    <a href="contact.php" class="navLinks">Contact Us</a>

                    <div class="cart-container" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                        <span class="cart-counter">1</span>
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="mobile__nav-wrapp">
                    <div class="hamburger__wrapp">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="mobile__nav">
                        <button class="close__nav border-0 outline-none bg-grad mb-3 ms-auto d-block">&times;</button>
                        <!-- <div class="d-flex gap-3">
                        <a href="my-profile.php" class="nav__actions">
                            <img src="./img/account.png" alt="Sol Tanning">
                        </a>
                        <a href="coming-soon" class="nav__actions position-relative">
                            <img src="./img/cart.png" alt="Sol Tanning">
                            <span class="cart__count sec__regular_font position-absolute top-0">2</span>
                        </a>
                    </div> -->
                        <ul class="m-0 p-0 mobile_nav_list">
                            <li class="py-2 border-bottom"><a href="index.php" class="color__light sec__med_font position-relative px-2">Home</a></li>
                            <li class="py-2 border-bottom"><a href="about.php" class="color__light sec__med_font position-relative px-2">About Us</a></li>
                            <li class="py-2 border-bottom"><a href="shop.php" class="color__light sec__med_font position-relative px-2">Shop</a></li>
                            <li class="py-2 border-bottom"><a href="contact.php" class="color__light sec__med_font position-relative px-2">Contac Us</a></li>

                        </ul>

                        <a href="sign-up" class="btn btn-sm btn-primary justify-content-between mt-3">SIGN UP</a>

                    </div>
                </div>
            </div>


        </div>

    </section>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="row g-0">
            <div class="col-md-2 offset-lg-2 my-auto">
                <div class="rounded">
                    <img src="img/product.webp" class="img-fluid" alt="...">

                </div>
            </div>
            <div class="col-md-8">
                <div class="pt-lg-4 ps-lg-4">
                    <h6 class="level-6 sec__bold_font my-0 primary-color">Product 1</h6>
                    <p class="sec__regular_font level-7"><small class="text-muted">5 × $15.00
                        </small>
                        <span class="btn-close position-relative top-0 start-50"> </span>
                    </p>
                </div>
            </div>
        </div>
        <div class="offcanvas-body">
            <hr>
            <p class="text-center">
                <span class="level-6 sec__bold_font link-dark">Subtotal:</span>
                <span class="level-6 sec__regular_font">$75.00</span>
            </p>
            <hr>
            <div class="row">
                <div class="col-lg-6">
                    <a href="cart.php" class="btn btn-primary">View Cart</a>
                </div>
                <div class="col-lg-6">
                    <a href="checkout.php" class="btn  btn-primary">Check Out</a>
                </div>
            </div>

        </div>
    </div>
    </div>

    <!-- <nav class=" dark-bg-gary">
        <div class="container">
            
            <div class="">
                <ul class="">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ab/index.html">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="s/index.html">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact-us/index.html">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> -->
</header>