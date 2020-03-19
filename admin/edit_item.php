<?php
session_start();
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="container-fluid">

<div class="card shadow mb-4">

    <div class="card header py-3">
        <h6 class="m-0 font-weight-bold text-primary"> Edit Item</h6>
    </div>

    <div class="card-body">
    <?php
$connetion = mysqli_connect("localhost","root","","adminpanel");

if(isset($_POST['edit_btn']))
{
    $id = $_POST['edit_id'];
    
    $query = "SELECT * FROM items WHERE id='$id' ";
    $query_run = mysqli_query($connetion, $query);

    foreach($query_run as $row)
    {
        ?>

        <form action="managecode.php" method="POST">
        <input type="hidden" name="edit_id" value="<?php echo $row['id']  ?>">
            <div class="form-group">
                <label> Item Name </label>
                <input type="text" name="item_name" value="<?php echo $row['item_name']  ?>" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label> Item Quantity </label>
                <input type="text" name="item_qty" value="<?php echo $row['item_qty']  ?>" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Item Category</label>
                <input type="text" name="item_category" value="<?php echo $row['item_category']  ?>" class="form-control" placeholder="Enter Email">
            </div>
            <a href="manageitem.php" class="btn btn-danger">CANCEL</a>
            <button type="submit" name="updatebtn" class="btn btn-primary">UPDATE</button>
        </form>
            <?php
            }


            }
            ?>

    </div>
</div>
</div>
</div>






















<?php
include('includes/scripts.php');
include('includes/footer.php');
?>