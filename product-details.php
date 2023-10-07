<?php
include("nav.php");
include("connect.php");
// header("refresh:0");
// error_reporting(0);
?>

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
                            <li class="breadcrumb-item active" aria-current="page">product details</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb area end -->
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
         echo "<script>alert('Item Added')
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


$details = $_GET['detail'];
$Query = mysqli_query($conn , "SELECT * FROM `product` WHERE `product`.`id` = $details");
$array = mysqli_fetch_assoc($Query);
 $cid = $array['c_id'];
 
?>
<!-- page main wrapper start -->
<main>
    <div class="product-details-wrapper pt-100 pb-14 pt-sm-58">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <!-- product details inner end --> <form action="" method="post">
                    <input type="hidden" name="pro_name" value="<?php echo $array['title']?>">
                    <input type="hidden" name="pro_price" value="<?php echo $array['price']?>">
                    <input type="hidden" name="pro_image" value="<?php echo $array['img']?>">
                    <div class="product-details-inner">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="product-large-slider mb-20 slider-arrow-style slider-arrow-style__style-2">
                                    <div class="pro-large-img img-zoom" id="img1">
                                        <img src="dash/<?php echo $array['img']?>" alt="" />
                                    </div>
                                    <!-- <div class="pro-large-img img-zoom" id="img2">
                                            <img src="assets/img/product/product-details-img2.jpg" alt=""/>
                                        </div>
                                        <div class="pro-large-img img-zoom" id="img3">
                                            <img src="assets/img/product/product-details-img3.jpg" alt=""/>
                                        </div>
                                        <div class="pro-large-img img-zoom" id="img4">
                                            <img src="assets/img/product/product-details-img4.jpg" alt=""/>
                                        </div>
                                        <div class="pro-large-img img-zoom" id="img5">
                                            <img src="assets/img/product/product-details-img4.jpg" alt=""/>
                                        </div> -->
                                </div>
                                <div class="pro-nav slick-padding2 slider-arrow-style slider-arrow-style__style-2">
                                    <div class="pro-nav-thumb"><img src="dash/<?php echo $array['img']?>" alt="" />
                                    </div>
                                    <!-- <div class="pro-nav-thumb"><img src="assets/img/product/product-details-img2.jpg" alt="" /></div>
                                        <div class="pro-nav-thumb"><img src="assets/img/product/product-details-img3.jpg" alt="" /></div>
                                        <div class="pro-nav-thumb"><img src="assets/img/product/product-details-img4.jpg" alt="" /></div>
                                        <div class="pro-nav-thumb"><img src="assets/img/product/product-details-img5.jpg" alt="" /></div> -->
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="product-details-des pt-md-98 pt-sm-58">
                                    <h3><?php echo $array['title']?></h3>
                                    <div class="ratings">
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <div class="pro-review">
                                            <span><a href="#">1 review(s)</a></span>
                                        </div>
                                    </div>
                                    <div class="pricebox">
                                        <span class="regular-price">$<?php echo $array['price'] ?>.00</span>
                                    </div>
                                    <p class="text-break"><?php echo $array['Dess']?></p>
                                    <div class="quantity-cart-box d-flex align-items-center mb-24">
                                        <div class="quantity">
                                            <div class="pro-qty d-flex"><input type="number" name="quantity"
                                                    class="ms-3" value="" disabled>
                                            </div>

                                        </div>
                                        <div class="product-btn product-btn__color">
                                        <a  class=""><button name="btnn" type="submit"><i class="bi bi-bag"></i>Add to cart</button></a>
                                        </div>
                                    </div>
                                    <div class="availability mb-20">
                                        <h5>Availability:</h5>
                                        <span>in stock</span>
                                    </div>
                                    <div class="share-icon">
                                        <h5>share:</h5>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div></form>
                    <!-- product details inner end -->

                    <!-- product details reviews end -->
                    <!-- featured product area start -->
                    <div class="page-section pt-100 pt-sm-58">
                        <div class="section-title text-center pb-44">
                            <p>The latest products</p>
                            <h2>related products</h2>
                        </div>
                        <div class="releted-product spt slick-padding slick-arrow-style">


                            <?php 
                                   $select = mysqli_query($conn , "SELECT * FROM `product` WHERE `c_id` = '$cid'");
                                   while ($array = mysqli_fetch_assoc($select)) { 
                                    ?>

                            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                <div class="product-item mb-20">
                                    <div class="product-thumb">
                                        <a href="product-details.php?detail=<?php echo $array['id'] ?>">
                                            <img src="dash/<?php echo $array['img']?>" class="w-100"
                                                alt="product image">
                                        </a>
                                        <div class="box-label">
                                            <div class="product-label new">
                                                <span><?php if ($array['newT'] == "on") {
                                                    echo "New";
                                                }else {
                                                    echo "-";
                                                } ?></span>
                                            </div>
                                            <div class="product-label discount">
                                                <span>-<?php echo $array['discount'] ?>%</span>
                                            </div>
                                        </div>
                                        <div class="product-action-link">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"> <span
                                                    data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Quick view"><i class="fa fa-eye"></i></span> </a>

                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="Wishlist"><i class="fa fa-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-description text-center">
                                        <div class="manufacturer">
                                            <p><a href="product-details.php"><?php echo $array['brand']?></a></p>
                                        </div>
                                        <div class="product-name">
                                            <h3><a href="product-details.php"><?php echo $array['title'] ?></a></h3>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price">$<?php echo $array['price'] ?>.00</span>
                                            <span class="old-price"><del>$<?php echo $array['offerp'] ?>.00</del></span>
                                        </div>
                                        <div class="product-btn">
                                            <a href="#" class=""><i class="bi bi-bag"></i>Add to cart</a>
                                        </div>
                                        <div class="hover-box text-center">
                                            <div class="ratings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- product grid item end -->

                            </div>

                            <!-- product list item end -->
                            <?php
                                   }
                                   ?>




                        </div>
                    </div>
                    <!-- featured product area end -->
                </div>
                <div class="col-lg-3">
                    <div class="sidebar-wrapper pt-md-16 pb-md-86 pb-sm-44">
                        <!-- single sidebar start -->


                        <!-- single sidebar start -->
                        <div class="sidebar-single">
                            <div class="sidebar-title">
                                <h3>CATEGOURIES</h3>
                            </div>
                            <div class="sidebar-body">
                                <ul class="sidebar-category">
                                    <?php
                                    $cate = mysqli_query($conn , "SELECT * FROM `categouries`");
                                    while ($print = mysqli_fetch_assoc($cate)) {
                                    
                                      echo '<li><a href="shop-categoury.php?catid='.$print['c_id'].'">'.$print['categouries'].'</a></li>';
                                    
                                    }
                                    
                                    ?>


                                </ul>
                            </div>
                        </div>
                        <!-- single sidebar end -->

                        <!-- single sidebar start -->

                        <!-- single sidebar end -->

                        <!-- single sidebar start -->
                        <div class="sidebar-single">
                            <div class="sidebar-title">
                                <h3>Featured Products</h3>
                            </div>
                            <div class="sidebar-body">
                                <div class="popular-item-inner">
                                    <?php
                                     $select = mysqli_query($conn , "SELECT * FROM `product`");
                                     while ($array = mysqli_fetch_assoc($select)) { 
                                      if ($array['featured'] == "on") {
                                          # code...
                                      
                                    ?>
                                    <div class="popular-item">
                                        <div class="pop-item-thumb">
                                            <a href="product-details.hrtml">
                                                <img src="dash/<?php echo $array['img']?>" alt="">
                                            </a>
                                        </div>
                                        <div class="pop-item-des">
                                            <h4><a href="product-details.php"><?php echo $array['title'] ?></a></h4>
                                            <span class="pop-price">$<?php echo $array['price'] ?>.00</span>
                                        </div>
                                    </div> 
                                    <?php
                                   }}
                                   ?>
                                    <!-- end single popular item -->
                                    
                                </div>
                            </div>
                        </div>
                        <!-- single sidebar end -->

                        <!-- single sidebar start -->
                        <div class="sidebar-single">
                            <div class="advertising-thumb img-full fix">
                                <a href="#">
                                    <img src="assets/img/banner/advertising.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- single sidebar end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- page main wrapper end -->


<?php
include("footer.php");
?>