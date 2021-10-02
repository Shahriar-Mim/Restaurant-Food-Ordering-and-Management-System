<?php require_once 'inc/header.php'?>
<?php require_once 'inc/nav.php'?>
<?php require_once 'inc/sidebar.php'?>




<div class="body">
    <?php display_message(); ?>
</div>


<div class="body">
    <div class="card-header text-center bg-cyan text-white">
        <strong>Order Details</strong>
    </div>
    <div class="table-responsive">
        <div class="inbox-body">
            <form method="post">
                <table class="table">
                    <thead class="bg-light">
                    <tr>
                        <th class="text-center">Customer Name</th>
                        <th class="text-center">Item Name</th>
                        <th class="text-center">Quantity</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Total Price</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                    <tr >

                    <?php
                        global $con;
                        $sql = mysqli_query($con,"SELECT * FROM `order_details`");
                        $temp = ""; 
                        while ($row = mysqli_fetch_assoc($sql))
                        {
                            if ($temp != $row['username'] ){
                                $temp =  $row['username'] ;
                           
                        ?>

                        <td class="text-center"> <?php echo $row['username']; ?> </td>

                        <?php 
                        }
                        else 
                        {      
                        ?>
                        <td class="text-center"><?php echo '-'; ?> </td>
                        <?php 
                        } 
                        if ($row['item name'] == 'Total Item') {
                        ?>
                        <td class="text-center"><b> <?php echo $row['item name']; ?></b>  </td>
                        <td class="text-center"> <?php echo '-'; ?> </td>
                        <td class="text-center"> <?php echo '-'; ?> </td>
                        <td class="text-center"><b> <?php echo $row['total price']; ?></b> </td>
                        <?php 
                        } 
                        else {
                        ?> 
                        <td class="text-center"> <?php echo $row['item name']; ?> </td>    
                        <td class="text-center"> <?php echo $row['quantity']; ?> </td>
                        <td class="text-center"> <?php echo $row['price']; ?> </td>
                        <td class="text-center"> <?php echo $row['total price']; ?> </td>
                        <?php 
                        }
                        ?>
                      
                    </tr>
                    <?php
                    }
                    ?>
                       
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</div>

<?php require_once 'inc/footer.php'?>
