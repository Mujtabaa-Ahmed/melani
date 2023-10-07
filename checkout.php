<?php
include("nav.php");
?>

<!-- Start Search Popup -->
<div class="box-search-content search_active block-bg close__top">
    <form class="minisearch" action="#">
        <div class="field__search">
            <input type="text" placeholder="Search Our Catalog">
            <div class="action">
                <a href="#"><i class="fa fa-search"></i></a>
            </div>
        </div>
    </form>
    <div class="close__wrap">
        <span>close</span>
    </div>
</div>
<!-- End Search Popup -->

</header>
<!-- header area end -->

<!-- breadcrumb area start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrap">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="shop-grid-left-sidebar.php">shop</a></li>
                            <li class="breadcrumb-item active" aria-current="page">checkout</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb area end -->

<!-- page main wrapper start -->
<main>
    <!-- checkout main wrapper start -->
    <div class="checkout-page-wrapper pt-100 pb-90 pt-sm-58 pb-sm-54">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Checkout Login Coupon Accordion Start -->
                    <div class="checkoutaccordion" id="checkOutAccordion">


                        <div class="card">
                            <h3>Have A Coupon? <span data-bs-toggle="collapse" data-bs-target="#couponaccordion">Click
                                    Here To Enter Your Code</span></h3>
                            <div id="couponaccordion" class="collapse" data-bs-parent="#checkOutAccordion">
                                <div class="card-body">
                                    <div class="cart-update-option">
                                        <div class="apply-coupon-wrapper">
                                            <form action="#" method="post" class=" d-block d-md-flex">
                                                <input type="text" placeholder="Enter Your Coupon Code" required />
                                                <button class="check-btn sqr-btn">Apply Coupon</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Checkout Login Coupon Accordion End -->
                </div>
            </div>
            <?php
        if (isset($_POST['o_btn'])) {
            $fname = $_POST['o_fname'];
            $lname = $_POST['o_lname'];
            $email = $_POST['o_email'];
            $compeny = $_POST['o_compeny'];
            $country = $_POST['countrynice-select'];
            $adress = $_POST['o_adress'];
            $adress1 = $_POST['o_adress2'];
            $city = $_POST['o_city'];
            $zip = $_POST['o_zip'];
            $phone = $_POST['o_phone'];
            $dess = $_POST['order_dess'];
            $pmeth = $_POST['paymentmethod'];
            $product = "/" . $value['pro_name'];
            $insert = mysqli_query($conn , "INSERT INTO `orders`(`o_fname`, `o_lname`, `o_email`, `o_compeny`, `o_country`, `o_adress`, `o_adress2`, `o_city`, `o_zip`, `o_phone`, `o_dess`, `o_Pname`, `o_Tprice`, `o_paymentM`) VALUES ('$fname','$lname','$email','$compeny','$country','$adress','$adress1','$city','$zip','$phone','$dess','$product','$total','$pmeth')");

            if ($insert) {
                echo "<h1 class='text-center mb-5'>Tank u for Shoping</h1>";
            }
            
        }
        ?>
            <form action="" method="post">
                <div class="row">
                    <!-- Checkout Billing Details -->
                    <div class="col-lg-6">
                        <div class="checkout-billing-details-wrap">
                            <h2>Billing Details</h2>
                            <div class="billing-form-wrap">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="single-input-item">
                                                <label for="f_name" class="required">First Name</label>
                                                <input type="text" name="o_fname" id="f_name" placeholder="First Name"
                                                    required />
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="single-input-item">
                                                <label for="l_name" class="required">Last Name</label>
                                                <input type="text" name="o_lname" id="l_name" placeholder="Last Name"
                                                    required />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="single-input-item">
                                        <label for="email" class="required">Email Address</label>
                                        <input type="email" id="email" name="o_email" placeholder="Email Address"
                                            required />
                                    </div>

                                    <div class="single-input-item">
                                        <label for="com-name">Company Name</label>
                                        <input type="text" id="com-name" name="o_compeny" placeholder="Company Name" />
                                    </div>

                                    <div class="single-input-item">
                                        <label for="country" class="required">Country</label>
                                        <select name="countrynice-select" id="country">
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="India">India</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="England">England</option>
                                            <option value="London">London</option>
                                            <option value="London">London</option>
                                            <option value="Chaina">China</option>
                                        </select>
                                    </div>

                                    <div class="single-input-item">
                                        <label for="street-address" class="required mt-20">Street address</label>
                                        <input type="text" id="street-address" name="o_adress"
                                            placeholder="Street address Line 1" required />
                                    </div>

                                    <div class="single-input-item">
                                        <input type="text" name="o_adress2"
                                            placeholder="Street address Line 2 (Optional)" />
                                    </div>

                                    <div class="single-input-item">
                                        <label for="town" class="required">Town / City</label>
                                        <input type="text" id="town" name="o_city" placeholder="Town / City" required />
                                    </div>



                                    <div class="single-input-item">
                                        <label for="postcode" class="required">Postcode / ZIP</label>
                                        <input type="text" id="postcode" name="o_zip" placeholder="Postcode / ZIP"
                                            required />
                                    </div>

                                    <div class="single-input-item">
                                        <label for="phone">Phone</label>
                                        <input type="text" id="phone" name="o_phone" placeholder="Phone" />
                                    </div>




                                    <div class="single-input-item">
                                        <label for="ordernote">Order Note</label>
                                        <input type="text" name="order_dess" cols="30" rows="3"
                                            placeholder="Notes about your order, e.g. special notes for delivery." />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Order Summary Details -->
                    <div class="col-lg-6">
                        <div class="order-summary-details mt-md-26 mt-sm-26">
                            <h2>Your Order Summary</h2>
                            <div class="order-summary-content mb-sm-4">
                                <!-- Order Summary Table -->
                                <div class="order-summary-table table-responsive text-center">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Products</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                        $total = 0;  
                                      if (isset($_SESSION['cart'])) {
                                        foreach ($_SESSION['cart'] as $key => $value) {
                                          $total = $total += $value['pro_price'];
                                          
                                      ?>
                                            <tr>
                                                <td><a href="single-product.php"><?php echo $value['pro_name']?><strong>
                                                            × 1</strong></a></td>
                                                <td>$<?php echo $value['pro_price']?>.00</td>
                                            </tr>
                                            <?php 
                                          }
                                        }
                                     ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td>Sub Total</td>
                                                <td><strong>$<?php echo $total.".0"?></strong></td>
                                            </tr>
                                            <tr>
                                                <td>Shipping</td>
                                                <td class="d-flex justify-content-center">
                                                    <ul class="shipping-type">
                                                        <li>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="flatrate" name="shipping"
                                                                    class="custom-control-input" checked />
                                                                <label class="custom-control-label" for="flatrate">Flat
                                                                    Rate: $70.00</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="freeshipping" name="shipping"
                                                                    class="custom-control-input" disabled />
                                                                <label class="custom-control-label"
                                                                    for="freeshipping">Free Shipping</label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Total Amount</td>
                                                <td><strong>$<?php echo $total+70 .".0";?></strong></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- Order Payment Method -->
                                <div class="order-payment-method">
                                    <div class="single-payment-method show">
                                        <div class="payment-method-name">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="cashon" name="paymentmethod"
                                                    class="custom-control-input" value="cahshondelevery" checked />
                                                <label class="custom-control-label" for="cashon">Cash On
                                                    Delivery</label>
                                            </div>
                                        </div>
                                        <div class="payment-method-details" data-method="cash">
                                            <p>Pay with cash upon delivery.</p>
                                        </div>
                                    </div>

                                    <div class="summary-footer-area">
                                        <div class="custom-control custom-checkbox mb-14">
                                            <input type="checkbox" class="custom-control-input" id="terms" required />
                                            <label class="custom-control-label" for="terms">I have read and agree to the
                                                website <a href="index.php">terms and conditions.</a></label>
                                        </div>
                                        <button type="submit" name="o_btn" class="check-btn sqr-btn">Place
                                            Order</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    </form>
    <!-- checkout main wrapper end -->
</main>
<!-- page main wrapper end -->



<?php
include("footer.php");
?>