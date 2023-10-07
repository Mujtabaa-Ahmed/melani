<?php
include("nav.php");
?>

<!-- Begin PDescription Content -->
<div class="container-fluid">

    <!-- PDescription Heading -->
    <h1 class="h3 mb-2 text-center display-2">OnSale Products</h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Product</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Brand</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th>Offer</th>
                            <th>Discount</th>
                            <th>New(Tag)</th>
                            <th>Description</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Brand</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th>Offer</th>
                            <th>Discount</th>
                            <th>New(Tag)</th>
                            <th>Description</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                    $select = mysqli_query($conn , "SELECT * FROM `product`");
                    while ($array = mysqli_fetch_assoc($select)) {
                        if ($array['sale'] == 'on') {?>
                       
                        
                        
                        <tr>
                            <td><?php echo $array['id']?></td>
                            <td><?php echo $array['brand']?></td>
                            <td class="text-break w-25"><?php echo $array['title']?></td>
                            <td class="w-25"><img src="<?php echo $array['img']?>" class="w-100" alt=""></td>
                            <td>$<?php echo $array['price']?>.00</td>
                            <td><del>$<?php echo $array['offerp']?>.00</del></td>
                            <td>-<?php echo $array['discount']?>%</td>
                            <td><?php if ($array['newT'] == "on") {
                                                    echo "on";
                                                }else {
                                                    echo "-";
                                                } ?></td>
                            <td class="text-break w-50"><?php echo $array['Dess']?></td>
                            <td class="text-center"> <?php
                if (isset($_SESSION['id'])) {
                    echo '<a href="update.php?update='.$array['id'] .'" class="btn btn-success">Update</a>';
                }else {
                    echo '<a href="login.php" class="btn btn-success ms-4">LogIn</a>';

                }
                ?></td>
                            <td class="text-center"> <?php
                if (isset($_SESSION['id'])) {
                    echo '<a href="delete.php?delete='.$array['id'].'" class="btn btn-danger">Delete</a>';
                }else {
                    echo '<a href="login.php" class="btn btn-success ms-4">LogIn</a>';

                }
                ?></td>
                        </tr>


                        <?php 
                     }  
                }
              
                    ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php
include("footer.php");
?>