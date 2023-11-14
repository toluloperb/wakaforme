<?php
    include ('includes/header.php');
    include ('includes/navbar.php');
    include ('functions/usersFunc.php');

    $category_name = $_GET['category'];
    $category_data = getNameActive("categories", $category_name);
    $category = mysqli_fetch_array($category_data);
    $cid = $category['name'];
?>

<div class="board1">
    <div class="bigBanner">
        <div class="sec1">
            <h2>Everything you need in this community is on your palm</h2>
            <!-- <img src="images/screenbkg.png" alt=""> -->
        </div>
    </div>
    <div class="locationsTable">
        <h3 style="width: 60%;">Here are products & services available in <?= $category['name']; ?></h3>
        <!-- <p>Select a category</p> -->
        <div class="locations">
            <?php
                $products = getProdbyCategory($cid);

                if(mysqli_num_rows($products) > 0)
                {
                    foreach($products as $item)
                    {
                        ?>
                            <a href="product-view.php?product=<?= $item['name']; ?>" class="productDetails">
                                <nav>
                                    <img src="uploads/<?= $item['image']; ?>" alt="" class="productImgs">
                                    <div class="line"></div>
                                    <h3><?= $item['name']; ?></h3>
                                    <h2 style="color: #fff;">&#8358;<?= $item['price']; ?></h2>
                                    <p style="color: #fff;"><?= $item['small_description']; ?></p>
                                    <!-- <button class="addToCartBtn" value="<?= $item['id']; ?>"><i class="fa fa-shopping-cart"></i> Add to Cart</button> -->
                                </nav>
                            </a>
                        <?php
                    }
                }
            ?>
        </div>
        <a href="./." class="changeLocale"><button>Change Location</button></a>
    </div>
</div>

<div class="categories" id="categories">
    
</div>