<?php
include("nav.php");
error_reporting(0);



if (isset($_POST['btn'])) {
    $name = $_POST['title'];
    $price = $_POST['price'];
    $dess = $_POST['dess'];
    $bran = $_POST['brand'];
    $offer = $_POST['offer'];
    $newb = $_POST['new'];
    $dissc = $_POST['discount'];
    $names = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $type = $_FILES['file']['type'];
    $locat = "../assets/uploaded_images/ . $names";
    $date = $_POST['v_date'];
    if (strtolower($type) == "image/png" || strtolower($type) == "image/jpeg" || strtolower($type) == "image/jpg") {
        move_uploaded_file($tmp_name , $locat);
     $insert = mysqli_query($conn , "INSERT INTO `deals`(`d_brand`, `d_title`, `d_price`, `d_offerp`, `d_img`, `d_dess`, `d_disscount`, `d_newT`,`valid_until`) VALUES ('$bran','$name','$price','$offer','$locat','$dess','$dissc','$newb','$date')");
    if ($insert) {
        echo "<script>alert('Product Is Added');</script>";
    }
    }else{
        echo "<script>alert('pleas chose jpeg/jpg/png filetype');</script>";
    }
    
    
    
}
?>
<div class="w-50 container">
    <form class="" method="POST" enctype="multipart/form-data">

        <h1 class="display-3 text-center text-dark">Daily Deals</h1>

        <h3 class="mt-5">Valid untill</h3>
        <div class="form-group w-50 ">
            <label for="exampleInputEmail1"></label>
            <input type="text" name="v_date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="09/17/2023" >
        </div>
        


        <h3 class="mt-5">Product Details</h3>
        <div class="form-group w-50 ">
            <label for="exampleInputEmail1">Brand Name</label>
            <input type="text" name="brand" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Brand" >
        </div>
        <div class="form-group  w-75">
            <label for="exampleInputEmail1">Product Name</label>
            <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter your title here">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Description</label>
            <small id="emailHelp" class="form-text text-muted"><span class="text-success">Pelease Writethe product Description minimum 250 words "otherwise it can effect the styling of Website"</small></span>
            <textarea name="dess" class="form-control" placeholder="Details of product" cols="30" rows="10"></textarea>
            
        </div>


        <h3 class="mt-5">Add Image</h3>
        <div class="mb-3 w-50 ">
            <label for="formFile" class="form-label">Product Image</label>
            <small id="emailHelp" class="form-text text-muted"><span class="text-success">Image size must be 350x412 "otherwise it can effect the styling of Website"</small></span>
            <input type="file" name="file" class="form-control" id="formFile">
        </div>

        <h3 class="mt-5">Pricing/Offers</h3>
        <label for="exampleInputEmail1">Price</label>
        <div>
            <div class="input-group mb-3 w-50">
                <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                </div>
                <input type="text" name="price" class="form-control" aria-label="Amount (to the nearest dollar)">
                <div class="input-group-append">
                    <span class="input-group-text">.00</span>
                </div>
            </div>
        </div>
        <label for="exampleInputEmail1">Offer</label>
        <div>
            <div class="input-group mb-3 w-25">
                <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                </div>
                <input type="text" name="offer" class="form-control" aria-label="Amount (to the nearest dollar)">
                <div class="input-group-append">
                    <span class="input-group-text">.00</span>
                </div>
                <small id="emailHelp" class="form-text text-muted"><span class="text-success">It appears like
                        (<del>$12.00</del>)</small></span>
            </div>
        </div>
        
      





        <h3 class="mt-5">Addons</h3>
        <label for="exampleInputEmail1">Discount</label>
        <div class="d-flex">
            <div class="input-group mb-3 w-25">
                <div class="input-group-prepend">
                    <span class="input-group-text">-</span>
                </div>
                <input type="text" name="discount" class="form-control" aria-label="Amount (to the nearest dollar)">
                <div class="input-group-append">
                    <span class="input-group-text">%</span>
                </div>
                <small id="emailHelp" class="form-text text-muted"><span class="text-success">It appears like
                        (-50%)</span> <br><span class="text-danger"> "you don't have to add '-' or
                        '%'"</span></small>
            </div>
            <div class="form-group row ms-5">
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" name="new" type="checkbox" id="gridCheck1">
                        <label class="form-check-label" for="gridCheck1">
                            New <small> (add new tag in top of the card) </small>
                        </label>
                    </div>
                </div>
            </div>
        </div>


       
        
        <?php
                if (isset($_SESSION['id'])) {
                    echo '<button type="submit" name="btn" class="btn btn-primary">Submit</button>';
                }else {
                    echo '<a href="login.php" class="btn btn-success">LogIn</a>';

                }
                ?>
    </form>
</div>
<?php
include("footer.php");
// $nn = $_FILES['file']['name'];

// echo $nn;
// 
//     
//    
//     
?>