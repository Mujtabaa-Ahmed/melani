<?php
include("nav.php");

    if (isset($_POST['messbtn'])) {
    $name = $_POST['first_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email_address'];
    $sub = $_POST['contact_subject'];
    $mess = $_POST['message'];

    $message = mysqli_query($conn , "INSERT INTO `contact`(`name`, `phone`, `email`, `subject`, `message`) VALUES ('$name','$phone','$email','$sub','$mess')");
    if ($message) {
        echo '<script>alert("We lill get back to you soon")</script>';
    }
}


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
                                <li class="breadcrumb-item active" aria-current="page">contact us</li>
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
        <!-- contact wrapper area start -->
    <div class="contact-top-area pt-100 pb-98 pt-sm-58 pb-sm-58">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center pb-44">
                        <p>contact us</p>
                        <h2>connect with us</h2>
                    </div>
                </div>
            </div> <!-- section title end -->
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="contact-single-info mb-30 text-center">
                        <div class="contact-icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <h3>address street</h3>
                        <p>Address : No 40 Baria Sreet<br>NewYork City, United States.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="contact-single-info mb-30 text-center">
                        <div class="contact-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <h3>number phone</h3>
                        <p>Phone 1: 0(1234) 567 89012<br>Phone 2: 0(987) 567 890</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="contact-single-info mb-30 text-center">
                        <div class="contact-icon">
                            <i class="fa fa-fax"></i>
                        </div>
                        <h3>number fax</h3>
                        <p>Fax 1: 0(1234) 567 89012<br>Fax 2: 0(987) 567 890</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="contact-single-info mb-30 text-center">
                        <div class="contact-icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <h3>address email</h3>
                        <p>info@demo.com<br>yourname@domain.com</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-10 col-lg-12 m-auto">
                    <div class="contact-message pt-60 pt-sm-20">
                        <form id="" action="" method="POST" class="contact-form">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input name="first_name" placeholder="Name *" type="text">    
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input name="phone" placeholder="Phone *" type="text">   
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input name="email_address" placeholder="Email *" type="text">    
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input name="contact_subject" placeholder="Subject *" type="text">   
                                </div>
                               <div class="col-12">
                                    <div class="contact2-textarea text-center">
                                        <textarea placeholder="Message *" name="message"  class="form-control2" required=""></textarea>     
                                    </div>   
                                    <div class="contact-btn text-center">
                                         <?php
                                         if (isset($_SESSION['id'])) {
                                            echo '<button class="check-btn sqr-btn" name="messbtn" type="submit">Send Message</button>';
                                         }else{
                                            echo '<a href="login.php" class="check-btn sqr-btn">Login</a>';
                                        }
                                         ?>
                                    </div> 
                                </div> 
                                <div class="col-12 d-flex justify-content-center">
                                    <p class="form-messege"></p>
                                </div>
                            </div>
                        </form>    
                    </div> 
               </div>
           </div>
        </div>
    </div>
    <!-- contact wrapper area end -->
    </main>
    <!-- page main wrapper end -->

    

        <?php
include("footer.php");
?>