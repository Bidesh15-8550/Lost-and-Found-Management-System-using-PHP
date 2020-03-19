<?php 
session_start();

$connetion = mysqli_connect("localhost","root","","adminpanel");


if(isset($_POST['updatebtn']))
{   
    $item_name = $_POST['item_name'];
    $item_qty = $_POST['item_qty'];
    $item_category = $_POST['item_category'];
    
    $query = "UPDATE items SET item_name = '$item_name' , item_qty = '$item_qty' , item_category='$item_category' WHERE id='$id' ";
    $query_run= mysqli_query($connetion,$query);

    if($query_run)
    {
        $_SESSION['success'] = "Your Data is Updated";
        header('Location: manageitem.php');
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        header('Location: manageitem.php');
    }

}








if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];
    $query = "DELETE FROM items WHERE id='$id' ";
    $query_run= mysqli_query($connetion,$query);

    if($query_run)
    {
        $_SESSION['success'] = "Your Data is DELETED";
        header('Location: manageitem.php');
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";
        header('Location: manageitem.php');
    }


}





?>