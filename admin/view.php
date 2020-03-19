
<?php  
include('includes/header.php');       
include('includes/navbar.php');
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"adminpanel");

?>

<div class="col-sm-9 pading right">
    <div class="features-items">
        <h2 class="title text-center">Features Items</h2>
        <?php

            $res=mysqli_query($link,"select * from items");
            while($row=mysqli_fetch_array($res)){
                ?>
            
            <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="../admin/item_image/<?php echo $row["item_image"];    ?>" alt="">
                        <p><?php echo $row["item_name"];  ?></p>
                    </div>
                </div>
            </div>
          </div>


            <?php
                }
        ?>
        
     </div>

</div>





<?php
include('includes/scripts.php');
include('includes/footer.php');


?>
