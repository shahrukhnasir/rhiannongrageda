<!-- App Include Here -->
<!-- Header  -->
<?php include 'inc/app.php'; ?>
<!-- Page Tittle -->
<section class="dark-bg-light pt-5 pb-3">
    <div class="container">
        <p class="body-color level-6 sec__med_font m-0">Cart</p>
    </div>
</section>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8">
            <div class="table_cart_list">
            <div class="table-responsive " id="table_cart_list">

                <table class="table  table-sm">
                    <thead class="thead-light">
                        <tr>
                            <th class="table_head">Product</th>
                            <th class="table_head">Prodcut Name</th>
                            <th class="table_head">Price</th>
                            <th class="table_head">Quantity</th>
                            <th class="table_head">Subtotal</th>
                            <th class="table_head">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Example row -->
                        <tr>
                            <td class="table_product_image"><img src="./img/product.webp" alt="Product Image" class="img-fluid" style="max-width: 100px;"></td>
                            <td class="table_data"> Product Name</td>
                            <td class="table_data">$10.00</td>
                            <td class="table_data">
                                <input type="number" class="table_qty" value="1" min="1">
                            </td>
                            <td class="table_data">$10.00</td>
                            <td class="table_data px-4">
                                <button class="border-0 bg-light">

                                    <i class="fa fa-close"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>




                    <tbody>
                        <!-- Example row -->
                        <tr>
                            <td class="table_product_image"><img src="./img/product.webp" alt="Product Image" class="img-fluid" style="max-width: 100px;"></td>
                            <td class="table_data"> Product Name</td>
                            <td class="table_data">$10.00</td>
                            <td class="table_data">
                                <input type="number" class="table_qty" value="1" min="1">
                            </td>
                            <td class="table_data">$10.00</td>
                            <td class="table_data px-4">
                                <button class="border-0 bg-light">

                                    <i class="fa fa-close"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>

                       <tbody>
                        <!-- Example row -->
                        <tr>
                            <td class="table_product_image"><img src="./img/product.webp" alt="Product Image" class="img-fluid" style="max-width: 100px;"></td>
                            <td class="table_data"> Product Name</td>
                            <td class="table_data">$10.00</td>
                            <td class="table_data">
                                <input type="number" class="table_qty" value="1" min="1">
                            </td>
                            <td class="table_data">$10.00</td>
                            <td class="table_data px-4">
                                <button class="border-0 bg-light">

                                    <i class="fa fa-close"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                <button class="btn btn-primary">Update Cart</button>
            </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card" id="cart_side_box">
                <div class="card-header border-bottom-0">
                    <h1 class="level-8 sec__bold_font primary-color">
                        Cart Totals
                    </h1>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-2">
                        <span class="level-8 sec__med_font">Subtotal:</span>
                        <span class="level-8 sec__bold_font">$10.00</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span class="level-8 sec__med_font">Total:</span>
                        <span class="level-8 sec__bold_font">$10.00</span>
                    </div>
                    <button class="btn btn-primary">
                        <a href="checkout.php">Proceed to Checkout</a>
                    </button>

                </div>
            </div>
        </div>
    </div>
</div>


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