<?php
    include ('includes/navbar.php');
    include ('../functions/adminFunction.php');
?>

<div class="form-table">
    <form action="code.php" method="post" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="New Vendor Name" required>
        <input type="email" name="email" placeholder="New Vendor Email" required>
        <input type="number" name="number" placeholder="New Vendor Phone Number" required>
        <select name="category" id="" required>
            <option selected>Select a Category</option>
            <?php
                $category = getAllCate("category");

                if(mysqli_num_rows($category) > 0)
                {
                    foreach($category as $item)
                    {
                        ?>
                            <option value="<?= $item['id']; ?>"><?= $item['name']; ?></option>
                        <?php
                    }
                }
            ?>
        </select>
        <select name="location" id="" required>
            <option selected>Select a Location</option>
            <?php
                $location = getAllLocation("locations");

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
        </select><br><br>
        <input type="submit" value="Submit" name="addVendor" style="padding-left: 0; background-color: #ff0066;">
    </form>
</div>