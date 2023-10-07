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
                            <li class="breadcrumb-item active" aria-current="page">cart</li>
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
    <!-- cart main wrapper start -->
    <div class="cart-main-wrapper pt-100 pb-100 pt-sm-58 pb-sm-58">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Cart Table Area -->
                    <div class="cart-table table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="pro-thumbnail">Thumbnail</th>
                                    <th class="pro-title">Product</th>
                                    <th class="pro-price">Price</th>
                                    <th class="pro-quantity">Quantity</th>
                                    <th class="pro-subtotal">Total</th>
                                    <th class="pro-remove">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                      if ($_SERVER["REQUEST_METHOD"]=="POST") {
                                        if (isset($_POST['btnn'])) {
                                         if ($_SESSION['cart']) {
                                             $myitems = array_column($_SESSION['cart'],'pro_name');
                                             if (in_array($_POST['pro_name'],$myitems)) {
                                                 echo "<script>alert('product is already in your cart')
                                                 window.location.href='cart.php';
                                                 </script>";
                                              
                                             } 
                                             else {
                                                 $count = count($_SESSION['cart']);
                                                 $_SESSION['cart'][$count]=array('pro_name'=>$_POST['pro_name'],'pro_price'=>$_POST['pro_price'],'pro_image'=>$_POST['pro_image'],'quantity'=>1);
                                                 // print_r($_SESSION['cart']);
                                                 echo "<script>alert('Product is Added to your cart')
                                                 window.location.href='cart.php';
                                                 </script>";
                                             }
                                         }
                                         else {
                                             $_SESSION['cart'][0]=array('pro_name'=>$_POST['pro_name'],'pro_price'=>$_POST['pro_price'], 'pro_image'=>$_POST['pro_image'],'quantity'=>1);
                                             // print_r($_SESSION['cart']);
                                             echo "<script>alert('Product is Added to your cart')
                                             window.location.href='cart.php';
                                             </script>";
                                         }
                                        }
                                     
                                     if (isset($_POST['remove'])) {
                                        foreach ($_SESSION['cart'] as $key => $value) {
                                        if ($value['pro_name'] == $_POST['pro_name']) {
                                         unset($_SESSION['cart'][$key]);
                                         $_SESSION['cart']=array_values($_SESSION['cart']);
                                         echo "<script>alert('Item Removed')
                                         window.location.href='cart.php';
                                             </script>";
                                        }
                                        }
                                     }
                                     
                                     
                                     
                                     }

                                      $total = 0;  
                                      if (isset($_SESSION['cart'])) {
                                        foreach ($_SESSION['cart'] as $key => $value) {
                                          $total = $total += $value['pro_price'];
                                      ?>
                                <tr>
                                    <td class="pro-thumbnail"><a href="#"><img class="img-fluid"
                                                src="dash/<?php echo $value['pro_image']?>" alt="Product" /></a></td>
                                    <td class="pro-title"><a href="#"><?php echo $value['pro_name']?></a></td>
                                    <td class="pro-price"><span>$<?php echo $value['pro_price']?>.00</span></td>
                                    <td class="pro-quantity">
                                        <div class="pro-qty d-flex"><input type="number" class="ms-3" disabled
                                                value="1"></div>
                                    </td>
                                    <td class="pro-subtotal"><span>$<?php echo $value['pro_price']?>.00</span></td>

                                    <td class="pro-remove">
                                        <form action='' method='POST'>

                                            <input type="hidden" name="pro_name"
                                                value="<?php echo $value['pro_name'] ?>">
                                            <button type="submit" name="remove"> <i class="fa fa-trash-o"></i></button>

                                        </form>
                                    </td>
                                </tr>
                                <?php 
                                          }
                                        }
                                     ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- Cart Update Option -->
                    <div class="cart-update-option d-block d-md-flex justify-content-between">
                        <div class="apply-coupon-wrapper">
                            <form action="#" method="post" class=" d-block d-md-flex">
                                <input type="text" placeholder="Enter Your Coupon Code" required />
                                <button class="sqr-btn">Apply Coupon</button>
                            </form>
                        </div>
                        <div class="cart-update mt-sm-16">
                            <a href="#" class="sqr-btn">Update Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 ms-auto">
                    <!-- Cart Calculation Area -->
                    <div class="cart-calculator-wrapper">
                        <div class="cart-calculate-items">
                            <h3>Cart Totals</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <td>Sub Total</td>
                                        <td>$<?php echo $total.".0"?></td>
                                    </tr>
                                    <tr>
                                        <td>Shipping</td>
                                        <td><?php if ($total == 0) {
                                                echo "$00.0";
                                            }else {
                                               echo "$70.0";
                                            }
                                            ?></td>
                                    </tr>
                                    <tr class="total">
                                        <td>Total</td>
                                        <td class="total-amount"><?php if ($total == 0) {
                                                echo "$00.0";
                                            }else {
                                                echo "$".$total+70;
                                            }
                                            ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <?php if (isset($_SESSION['id'])) {
                                echo "<a href='checkout.php' class='sqr-btn d-block'>Proceed To Checkout</a>";
                            }else {
                                echo ' <div class="single-input-item">
                                                        <a href="login.php" class="sqr-btn"  name="lbtn">Login</a>
                                                    </div>';
                            }
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cart main wrapper end -->
</main>
<!-- page main wrapper end -->


<?php
include("footer.php");
?>