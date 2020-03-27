<?php
session_start();

if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>
<?php  
include('links/header.php');       


?>
   


















   <?php  
include('links/footer.php');       


?>

</div>

</body>









