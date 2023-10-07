<?php
include("nav.php");
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
                                <li class="breadcrumb-item active" aria-current="page">Login</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- page main wrapper start -->
    
        <!-- login register wrapper start -->
       
            
           
                   
                        <!-- Login Content Start -->
                        <div class="col-lg-6 container ">
                            <div class="login-reg-form-wrap  pr-lg-50">
                                <h2>Sign In</h2>
                                <form action="#" method="POST">
                                    <div class="single-input-item">
                                        <input type="email" name="email" placeholder="Email or Username" required />
                                    </div>
                                    <div class="single-input-item">
                                        <input type="password" name="cpass" placeholder="Enter your Password" required />
                                    </div>
                                    <div class="single-input-item">
                                        <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                            <div class="remember-meta">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="rememberMe">
                                                    <label class="custom-control-label" for="rememberMe">Remember Me</label>
                                                </div>
                                            </div>
                                            <a href="#" class="forget-pwd">Forget Password?</a>
                                        </div>
                                    </div>
                                    <div class="single-input-item">
                                        <button class="sqr-btn" type="submit" name="lbtn">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Login Content End -->

                        
             
                
            
        
        <!-- login register wrapper end -->
    
    <!-- page main wrapper end -->

    <?php
    include("footer.php");
    ?>