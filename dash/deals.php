<?php
include("nav.php");
?>

<!-- Begin PDescription Content -->
<div class="container-fluid">

    <!-- PDescription Heading -->
    <h1 class="h3 mb-2 text-center display-2">Daily Deals</h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Deals</h6>
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
                            <th>Time</th>
                            <th>Price</th>
                            <th>Offer</th>
                            <th>Discount</th>
                            <th>New(Tag)</th>
                            <th>Description</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php
                    $select = mysqli_query($conn , "SELECT * FROM `deals`");
                    while ($array = mysqli_fetch_assoc($select)) {?>
                        <tr>
                            <td><?php echo $array['d_id']?></td>
                            <td><?php echo $array['d_brand']?></td>
                            <td class="text-break w-25"><?php echo $array['d_title']?></td>
                            <td class="w-25"><img src="<?php echo $array['d_img']?>" class="w-100" alt=""></td>
                            <td><?php echo $array['valid_until']?></td>
                            <td>$<?php echo $array['d_price']?>.00</td>
                            <td><del>$<?php echo $array['d_offerp']?>.00</del></td>
                            <td>-<?php echo $array['d_disscount']?>%</td>
                            <td><?php if ($array['d_newT'] == "on") {
                                                    echo "on";
                                                }else {
                                                    echo "-";
                                                } ?></td>
                            <td class="text-break w-50"><?php echo $array['d_dess']?></td>
                            <td class="text-center"> <?php
                if (isset($_SESSION['id'])) {
                    echo '<a href="update2.php?dupdate='.$array['d_id'] .'" class="btn btn-success">Update</a>';
                }else {
                    echo '<a href="login.php" class="btn btn-success ms-4">LogIn</a>';

                }
                ?></td>
                            <td class="text-center"> <?php
                if (isset($_SESSION['id'])) {
                    echo '<a href="delete.php?ddelete='.$array['d_id'].'" class="btn btn-danger">Delete</a>';
                }else {
                    echo '<a href="login.php" class="btn btn-success ms-4">LogIn</a>';

                }
                ?></td>
                        </tr>
                        <?php    
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