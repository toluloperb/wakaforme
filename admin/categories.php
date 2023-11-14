<?php
    include ('includes/navbar.php');
    include ('../functions/adminFunction.php');
?>

<div class="buttons">
    <a href="add-categories.php"><button>Add New Category</button></a>
</div>

<div class="bodyButtons">
<?php
    $categories = getAll("categories");

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