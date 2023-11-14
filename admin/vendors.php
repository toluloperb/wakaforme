<?php
    include ('includes/navbar.php');
    include ('../functions/adminFunction.php');
?>

<div class="buttons">
    <a href="add-vendor.php"><button>Add New Vendor</button></a>
</div>

<div class="bodyButtons">
<?php
    $vendors = getAllVendors("vendors");

    if(mysqli_num_rows($vendors) > 0)
    {
        foreach($vendors as $item)
        {
            ?>
                <a href="">
                    <button><?= $item['name']; ?></button>
                </a>
            <?php
        }
    }
?>
</div>