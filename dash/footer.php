<!-- Footer -->



<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2021</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">User Profile</h5>

            </div>

            <div class="modal-body">
            <img class='img-profile rounded-circle ms-2 text-capitalize w-100 mb-5' src='<?php
                                    if (isset($_SESSION['image'])) {
                                        echo $_SESSION['image'];
                                    }else{
                                        echo 'img/undraw_profile.svg';
                                    }
                                    ?>' alt="Upload Image">
                <h1 class="text-center text-capitalize text-dark"><?php if (isset($_SESSION['id'])) {
                    echo $_SESSION['name'];
                };
                
                ?></h1><br>
                <h1 class="text-center text-dark"><?php if (isset($_SESSION['id'])) {
                    echo $_SESSION['email'];
                };
                
                ?></h1>
            </div>
            <?php
            
if (isset($_POST['upload'])) {
   $names = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $type = $_FILES['image']['type'];
    $id = $_SESSION['id'];
    $locat = "../assets/new/ . $names";
    if (strtolower($type) == "image/png" || strtolower($type) == "image/jpeg" || strtolower($type) == "image/jpg") {
       move_uploaded_file($tmp_name , $locat);
     $Uimg = mysqli_query($conn , "UPDATE `admin_singup` SET `admin_img`='$locat' WHERE `id` = '$id'");
    if ($Uimg) {
       echo "<script>
       alert('Image is uploaded .It will show in the dashboard after another login php can't suppoert SESSION refresh')
       </script>";
    }
}else{
echo"
<script>
alert('Please use jpg/jpeg/png filetype')
</script>

";
}
}
?>
            <form action="" class="container mb-3" method="POST" enctype="multipart/form-data">
                <div class="mb-3 w-100 ">
                    <label for="formFile" class="form-label">Upload Profile Photo</label>
                    <input type="file" name="image" class="form-control" id="formFile">

                </div>
                <button type="submit" name="upload" class="btn btn-primary">Upload</button>
            </form>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>