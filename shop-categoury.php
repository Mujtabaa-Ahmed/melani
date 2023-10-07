<?php
include("nav.php");
include("connect.php");

?>

<!-- breadcrumb area start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrap">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li><i></i>
                            <li class="breadcrumb-item active" aria-current="page">Shop</li>
                            <!-- <li class="breadcrumb-item " aria-current="page">shop grid right sidebar</li> -->
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
    <div class="shop-main-wrapper pt-100 pb-100 pt-sm-58 pb-sm-58">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 order-2">
                    <div class="sidebar-wrapper mt-md-100 mt-sm-48">
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
                <!-- product view wrapper area start -->
                <div class="col-xl-9 col-lg-8 order-1">
                    <div class="shop-product-wrapper">
                        <!-- shop product top wrap start -->
                        <div class="shop-top-bar">
                            <div class="row">
                                <div class="col-lg-7 col-md-6">
                                    <div class="top-bar-left">
                                        <div class="product-view-mode">
                                            <a class="active" href="#" data-target="grid"><i class="fa fa-th"></i></a>
                                            <a href="#" data-target="list"><i class="fa fa-list"></i></a>
                                        </div>
                                        <div class="product-amount">
                                            <p>Showing 1–16 of 21 results</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- shop product top wrap start -->
                        <!-- product view mode wrapper start -->
                        <div class="shop-product-wrap grid row">

                            <!-- product grid item start -->
                            <?php 
                            $Cid = $_GET['catid'];
                                   $select = mysqli_query($conn , "SELECT * FROM `product` WHERE `c_id` = $Cid");
                                   while ($array = mysqli_fetch_assoc($select)) { 
                                    ?>

                            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                <form action="manage_cart.php" method="post">
                                    <input type="hidden" name="pro_name" value="<?php echo $array['title']?>">
                                    <input type="hidden" name="pro_price" value="<?php echo $array['price']?>">
                                    <input type="hidden" name="pro_image" value="<?php echo $array['img']?>">
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


                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Wishlist"><i class="fa fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-description text-center">
                                            <div class="manufacturer">
                                                <p><a href="product-details.php?detail=<?php echo $array['id']?>"><?php echo $array['brand']?></a></p>
                                            </div>
                                            <div class="product-name">
                                                <h3><a href="product-details.php?detail=<?php echo $array['id']?>"><?php echo $array['title'] ?></a></h3>
                                            </div>
                                            <div class="price-box">
                                                <span class="regular-price">$<?php echo $array['price'] ?>.00</span>
                                                <span
                                                    class="old-price"><del>$<?php echo $array['offerp'] ?>.00</del></span>
                                            </div>
                                            <div class="product-btn">
                                                <a class=""><button name="btnn" type="submit"><i
                                                            class="bi bi-bag"></i>Add to cart</button></a>
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
                                    </div>
                                </form><!-- product grid item end -->
                                <!-- product list item start -->
                                <form action="manage_cart.php" method="post">
                                    <input type="hidden" name="pro_name" value="<?php echo $array['title']?>">
                                    <input type="hidden" name="pro_price" value="<?php echo $array['price']?>">
                                    <input type="hidden" name="pro_image" value="<?php echo $array['img']?>">
                                    <div class="product-list-item mb-20">
                                        <div class="product-thumb">
                                            <a href="product-details.php?detail=<?php echo $array['id']?>">
                                                <img src="dash/<?php echo $array['img']?>" class="w-100"
                                                    alt="product image">
                                            </a>
                                            <div class="box-label">
                                                <div class="product-label new">
                                                    <span><?php if ($array['newT'] == "on") {
                                                    echo "New";
                                                }else{echo "-";} ?></span>
                                                </div>
                                                <div class="product-label discount">
                                                    <span>-<?php echo $array['discount'] ?>%</span>
                                                </div>
                                            </div>
                                            <div class="product-action-link">


                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Wishlist"><i class="fa fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-list-content">
                                            <h4><a href="product-details.php?detail=<?php echo $array['id']?>"><?php echo $array['brand']?></a></h4>
                                            <h3><a href="product-details.php?detail=<?php echo $array['id']?>"><?php echo $array['title'] ?></a></h3>
                                            <div class="ratings">
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                            </div>
                                            <div class="pricebox">
                                                <span class="regular-price">$<?php echo $array['price'] ?>.00</span>
                                                <span
                                                    class="old-price"><del>$<?php echo $array['offerp'] ?>.00</del></span>
                                            </div>
                                            <p class="text-break"><?php echo $array['Dess'] ?></p>
                                            <div class="product-btn product-btn__color">
                                                <a class=""><button name="btnn" type="submit"><i
                                                            class="bi bi-bag"></i>Add to cart</button></a>
                                            </div>
                                        </div>
                                    </div>
                                    </from>
                            </div>

                            <!-- product list item end -->
                            <?php
                                   }
                                   ?>
                        </div>
                        <!-- product view mode wrapper start -->
                    </div>
                    <!-- start pagination area -->

                    <!-- end pagination area -->
                </div>
            </div>
        </div>
    </div>
</main>
<!-- page main wrapper end -->

<?php
include("footer.php");
?>