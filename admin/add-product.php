<?php
    include ('includes/navbar.php');
    include ('../functions/adminFunction.php');
?>

<div class="form-table">
    <form action="code.php" method="post" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="Product Name" required>
        <select name="category" id="" required>
            <option selected>Select a Category</option>
            <?php
                $category = getAllCate("category");

                if(mysqli_num_rows($category) > 0)
                {
                    foreach($category as $item)
                    {
                        ?>
                            <option value="<?= $item['name']; ?>"><?= $item['name']; ?></option>
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
        </select>
        <input type="file" name="image" id=""> 
        <input type="text" name="price" placeholder="Price">
        <textarea name="small_description" id="" cols="55" rows="10" style="height: 60px;">Small Description</textarea>
        <input type="text" name="vendor" placeholder="Vendor"><br> <br>
        <input type="submit" value="Submit" name="submitBtn" style="padding-left: 0; background-color: #ff0066;">
    </form>
</div>