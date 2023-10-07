<?php
include("connect.php");
if(isset($_POST["rbtn"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pass1 = $_POST["pass"];
    $pass2 = $_POST["cpass"];
    $select = "SELECT * FROM `user_signup` WHERE `name` = '$name' OR `email` = '$email'";
    $run = mysqli_query($conn , $select);
    if(mysqli_num_rows($run) != 0){
    $fetch = mysqli_fetch_array($run);
    if($fetch['name'] == $name){
        echo"
        <script>
        alert('User Name Already taken')
        </script>
        
        ";
    }else{
        echo"
        <script>
        alert('User Email Already taken')
        </script>
        
        ";
    }
    }
    else{
        if($pass1 == $pass2){
       $insert = "INSERT INTO `user_signup`(`name`, `email`, `pass1`, `pass2`) VALUES ('$name','$email','$pass1','$pass2')";
       $fire = mysqli_query($conn , $insert);
       if($fire){
        header("location:login.php");
       }
    }else{
        echo"
        <script>
        alert('Password not matched')
        </script>
        
        ";
    }
    }

};

session_start();



        // error_reporting(0);
        if(isset($_POST["lbtn"])){
            $email = $_POST["email"];
            $pass = $_POST["cpass"];
            $select2 = "SELECT * FROM `user_signup` WHERE `email`='$email' OR `pass2`='$pass'";
            $run2 = mysqli_query($conn ,$select2);
            $fetch2 = mysqli_fetch_array($run2);
            $row2 = mysqli_num_rows($run2);
            if($row2 != 0){
                $_SESSION['name'] = $fetch2['name'];
                $_SESSION['email'] = $fetch2['email'];
                $_SESSION['id'] = $fetch2['id'];
                // $_SESSION['']
                if ($fetch2['email'] == $email AND $fetch2['pass2'] == $pass) {
                    header("location:my-account.php");
                   
                }else{
                 echo"
                <script>
                alert('User E-mail or Passward is incorect')
                </script>
                
                ";
            }
            }
        
        
        };

        
?>


<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">

    <!-- Site title -->
    <title>Melani-Multipurpose eCommerce Bootstrap 5 Template</title>
    <!-- Favicon -->
    <!-- <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" /> -->
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font-Awesome CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- IonIcon CSS -->
    <link href="assets/css/ionicons.min.css" rel="stylesheet">
    <!-- helper class css -->
    <link href="assets/css/helper.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <!-- Plugins CSS -->
    <link href="assets/css/plugins.css" rel="stylesheet">
    <!-- Main Style CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- bootstrap icons -->
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<body>


    <!-- header area start -->
    <header>


        <!-- header area start -->
        <header>

            <!-- main menu area start -->
            <div class="header-main transparent-menu sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="logo">
                                <a href="index.php">
                                    <img src="assets/img/logo/logo.png" alt="Brand logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 d-none d-lg-block">
                            <div class="main-header-inner">
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li class="active"><a href="index.php">Home</a>
                                            </li>

                                            <li><a href="shop.php">shop</a>
                                            </li>
                                            <li><a href="blog-right-sidebar.php">Blog</a>

                                            </li>


                                            <li><a href="contact-us.php">Contact</a></li>
                                            <li class="active"><a href="about-us.php">About us</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6 ms-auto">
                            <div class="header-setting-option">
                                <div class="search-wrap">
                                    <button type="submit" class="search-trigger"><i class="bi bi-search"></i></button>
                                </div>
                                <div class="header-mini-cart">
                                    <div class="mini-cart-btn">
                                        <i class="bi bi-cart"></i>
                                        <?php
      $count = 0;
      if (isset($_SESSION['cart'])) {
        $count = count($_SESSION['cart']);
      }
      
      ?>
                                        <span class="cart-notification"><?php echo $count;?></span>
                                    </div>
                                    <ul class="cart-list">
                                        <?php
                                      

                                        $total = 0;  
                                        if (isset($_SESSION['cart'])) {
                                          foreach ($_SESSION['cart'] as $key => $value) {
                                            $total = $total += $value['pro_price'];
                                        ?>
                                        <li>
                                            <div class="cart-img">
                                                <a href="product-details.php"><img class="w-100"
                                                        src="dash/<?php echo $value['pro_image']?>" alt=""></a>
                                            </div>
                                            <div class="cart-info">
                                                <h4 class="text-break"><a
                                                        href="product-details.php"><?php echo $value['pro_name']?></a>
                                                </h4>
                                                <span>$<?php echo $value['pro_price']?>.00</span>
                                            </div>
                                            <div class="del-icon">
                                                <form action='manage_cart.php' method='POST'>

                                                    <input type="hidden" name="pro_name" value="<?php echo $value['pro_name'] ?>">
                                                   <button type="submit" name="remove"> <i class="fa fa-times"  ></i></button>
                                                   
                                                    </form>
                                            </div>
                                        </li>
                                        <?php 
                                          }
                                        }
                                     ?>
                                        <li class="mini-cart-price">
                                            <span class="subtotal">subtotal : </span>
                                            <span class="subtotal-price ms-auto">$<?php echo $total?>.00</span>
                                        </li>
                                        <li class="checkout-btn">
                                            
                                            <a href="cart.php">Go To Cart</a>
                                            <a href="#" class="w-50 mt-3 ms-auto">checkout</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="settings-top">
                                    <div class="settings-btn">
                                        <i class="bi bi-gear"></i>
                                    </div>
                                    <ul class="settings-list">
                                        <li>
                                            USD $ <i class="fa fa-angle-down"></i>
                                            <ul>
                                                <li class="active"><a href="#"> $ US Dollar</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            my account <i class="fa fa-angle-down"></i>
                                            <ul>
                                                <li><a href="my-account.php">my account</a></li>
                                                <li><a href="login.php">login</a></li>
                                                <li><a href="register.php">register</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-block d-lg-none">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main menu area end -->
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
        <div class="my-5">.</div>