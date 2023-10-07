<?php  
include("nav.php");

?>
<div class="w-50 container">
    <form class="" method="POST" enctype="multipart/form-data">

        <h1 class="display-4 text-center">Add/Delete Categories</h1>
        <h3 class="mt-5">Categouries</h3>
        <div class="form-group d-flex">
            <input type="text" name="cat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter Categouries">
            <?php
                if (isset($_SESSION['id'])) {
                    echo '<input type="submit" value="Add Categoury" name="btn2" class="btn btn-primary ms-4">';
                }else {
                    echo '<a href="login.php" class="btn btn-primary ms-4">LogIn</a>';

                }
                ?>

        </div>
    </form>
</div>

<hr>
<!-- Begin PDescription Content -->
<div class="container-fluid mt-5">

    <!-- PDescription Heading -->
    <h1 class="h3 mb-2 text-center display-2"></h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Categouries</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered  text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Categoury</th>
                            <th>Delete</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php
                    $select = mysqli_query($conn , "SELECT * FROM `categouries`");
                    while ($array = mysqli_fetch_assoc($select)) {?>
                        <tr class="text-capitalize">
                            <td><?php echo $array['c_id']?></td>
                            <td><?php echo $array['categouries']?></td>
                            <td class="text-center"> <?php
                if (isset($_SESSION['id'])) {
                    echo "<a href='delete.php?deleteC=". $array['c_id']."' class='btn btn-danger'>Delete</a";
                }else {
                    echo '<a href="login.php" class="btn btn-success ms-4">LogIn for Delete</a>';

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
if (isset($_POST['btn2'])) {
    $cat = $_POST['cat'];
    $insert = mysqli_query($conn , "INSERT INTO `categouries`(`categouries`) VALUES ('$cat')");
    if ($insert) {
        echo"<script>
        alert('categoury is added. It lill appear in a sec, feel free to add diffrent one or other costumizations');
        </script>";
    }
}
include("footer.php");
?>