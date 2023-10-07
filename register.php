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
                                <li class="breadcrumb-item active" aria-current="page">Register</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

<!-- Register Content Start -->
<div class="col-lg-6 container">
    <div class="login-reg-form-wrap mt-md-100 mt-sm-58">
        <h2>Singup Form</h2>
        <form action="#" method="POST">
            <div class="single-input-item">
                <input type="text" name="name" placeholder="Full Name" required />
            </div>
            <div class="single-input-item">
                <input type="email" name="email" placeholder="Enter your Email" required />
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-input-item">
                        <input type="password" name="pass" placeholder="Enter your Password" required />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-input-item">
                        <input type="password" name="cpass" placeholder="Repeat your Password" required />
                    </div>
                </div>
            </div>
            <div class="single-input-item">
                <div class="login-reg-form-meta">
                    <div class="remember-meta">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="subnewsletter">
                            <label class="custom-control-label" for="subnewsletter">Subscribe Our Newsletter</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-input-item">
                <button class="sqr-btn" name="rbtn">Register</button>
            </div>
        </form>
    </div>
</div>
<!-- Register Content End -->

<?php
include("footer.php");
?>