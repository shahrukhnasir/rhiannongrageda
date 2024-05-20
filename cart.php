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
            <table class="table table-responsive">
                <thead class="thead-light">
                    <tr>
                        <th>Product</th>
                        <th>Prodcut Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example row -->
                    <tr>
                        <td><img src="./img/product.webp" alt="Product Image" class="img-fluid" style="max-width: 100px;"></td>
                        <td>Product Name</td>
                        <td>$10.00</td>
                        <td>
                            <input type="number" class="text-center" value="1" min="1">
                        </td>
                        <td>$10.00</td>
                        <td>X</td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>

                <tbody>
                    <!-- Example row -->
                    <tr>
                        <td><img src="./img/product.webp" alt="Product Image" class="img-fluid" style="max-width: 100px;"></td>
                        <td>Product Name</td>
                        <td>$10.00</td>
                        <td>
                            <input type="number" class="text-center" value="1" min="1">
                        </td>
                        <td>$10.00</td>
                        <td>X</td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>




            </table>    
            <div class="col-lg-4">
                <a href="#" class="btn btn-primary">Update Cart</a>

            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    Cart Totals
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-2">
                        <span>Subtotal:</span>
                        <span>$10.00</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span>Total:</span>
                        <span>$10.00</span>
                    </div>
                    <a href="#" class="btn btn-primary w-100 mt-3">Proceed to Checkout</a>
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