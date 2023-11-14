<?php
    include ('includes/navbar.php');
    include ('../functions/adminFunction.php');
?>

<div class="form-table">
    <form action="code.php" method="post">
        <input type="text" name="name" placeholder="Category Name" required>
        <select name="location" id="" required>
            <option selected>Select a Location</option>
            <?php
                $location = getAllLocation("categories");

                if(mysqli_num_rows($location) > 0)
                {
                    foreach($location as $item)
                    {
                        ?>
                            <option value="<?= $item['id']; ?>"><?= $item['name']; ?></option>
                        <?php
                    }
                }
            ?>
        </select>
        <input type="submit" value="Submit" name="add_cate_btn" style="padding-left: 0;">
    </form>
</div>