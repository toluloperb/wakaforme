<?php
    include ('includes/navbar.php');
    include ('../functions/adminFunction.php');
?>

<div class="buttons">
    <a href="add-product.php"><button>Add Products</button></a>
</div>

<div class="bodyButtons2">
<?php
    $products = getAllProducts("categories");

    if(mysqli_num_rows($products) > 0)
    {
        foreach($products as $item)
        {
            ?>
                <a href="">
                    <button>
                        <img src="../uploads/<?= $item['image']; ?>" alt="" style="height: 80%; float: right; margin: 1%;">
                        <p><?= $item['name']; ?> in <i><?= $item['category']; ?></i></p>
                    </button>
                </a>
            <?php
        }
    }
?>
</div>