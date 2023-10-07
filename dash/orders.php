<?php
include("nav.php");
?>

<!-- Begin PDescription Content -->
<div class="container-fluid">

    <!-- PDescription Heading -->
    <h1 class="h3 mb-2 text-center display-2">Orders</h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Totals Orders</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Cutumer</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Product name</th>
                            <th>City</th>
                            <th>Country</th>
                            <th>Zipcode</th>
                           <th>Compeny</th>
                            <th>Desscription</th>
                            <th>Adress</th>
                            <th>Adress2</th>
                            <th>Payment</th>
                            <th>Payment Method</th>
                        </tr>
                    </thead>
                 
                    <tbody>
                        <?php
                    $select = mysqli_query($conn , "SELECT * FROM `orders`");
                    while ($array = mysqli_fetch_assoc($select)) {?>
                        <tr>
                            <td ><?php echo $array['order_id']?></td>
                            <td ><?php echo $array['o_fname'] .' '. $array['o_lname']?></td>
                            <td class=""><?php echo $array['o_email']?></td>
                            <td class="w-25"><?php echo $array['o_phone']?></td>
                            <td><?php echo $array['o_Pname']?></td>
                            <td><?php echo $array['o_city']?></td>
                            <td class=""><?php echo $array['o_country']?></td>
                            <td><?php echo $array['o_zip']?></td>
                            <td><?php echo $array['o_compeny']?></td>
                            <td class=""><?php echo $array['o_dess']?></td>
                            <td class=""><?php echo $array['o_adress']?></td>
                            <td class=""><?php echo $array['o_adress2']?></td>
                            <td class=""><?php echo $array['o_Tprice']?></td>
                            <td class=""><?php echo $array['o_paymentM']?></td>
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