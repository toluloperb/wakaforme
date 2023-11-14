<?php
    include ('includes/navbar.php');
    include ('../functions/adminFunction.php');
?>

<div class="buttons">
    <a href="add-location.php"><button>Add New Location</button></a>
</div>

<div class="bodyButtons">
<?php
    $categories = getAllLocation("categories");

    if(mysqli_num_rows($categories) > 0)
    {
        foreach($categories as $item)
        {
            ?>
                <a href=""><button><?= $item['name']; ?></button></a>
            <?php
        }
    }
?>
</div>