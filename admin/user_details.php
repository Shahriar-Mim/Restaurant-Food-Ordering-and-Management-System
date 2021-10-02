<?php require_once 'inc/header.php' ?>
<?php require_once 'inc/nav.php' ?>
<?php require_once 'inc/sidebar.php' ?>


<div class="body">
    <div class="card-header text-center bg-cyan text-white">
        <strong>User Details</strong>
    </div>
    <div class="table-responsive">
        <div class="inbox-body">
            <form method="post">
                <table class="table">
                    <thead class="bg-light">
                    <tr>
                        <th class="text-center">Customer Name</th>
                        <th class="text-center">Phone</th>
                        <th class="text-center">Address</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                    <tr >
                        <?php
                        global $con;
                        $sql = mysqli_query($con,"SELECT * FROM `user`");
                        while ($row = mysqli_fetch_assoc($sql))
                        {
                        ?>
                        <td class="text-center"><?php echo $row['username']; ?></td>
                        <td class="text-center"><?php echo $row['phone']; ?></td>
                        <td class="text-center"><?php echo $row['address']; ?></td>
                        
                        
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


<?php require_once 'inc/footer.php' ?>