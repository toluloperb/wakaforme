<?php
    include ('includes/header.php');
    include ('includes/navbar.php');
    include ('functions/usersFunc.php');

    if(isset($_GET['product']))
    {
        $product_name = $_GET['product'];
        $product_data = getNameActive("products", $product_name);
        $product = mysqli_fetch_array($product_data);

        if($product)
        {
            ?>
                <div class="board1">
                    <div class="bigBanner">
                        <div class="sec1">
                            <h2>Everything you need in this community is on your palm</h2>
                            <!-- <img src="images/screenbkg.png" alt=""> -->
                        </div>
                    </div>
                    <div class="locationsTable">
                        <!-- <h3 style="width: 60%;">Here are products & services available in <?= $product['name']; ?></h3> -->
                        <!-- <p>Select a category</p> -->
                        <div class="locations">
                            <nav href="product-view.php?product=<?= $product['name']; ?>" class="SingleproductDetails">
                                <nav>
                                    <img src="uploads/<?= $product['image']; ?>" alt="" class="productImgs">
                                    <div class="line"></div>
                                    <h3><?= $product['name']; ?></h3>
                                    <h2 style="color: #fff;">&#8358;<?= $product['price']; ?></h2>
                                    <p style="color: #fff;"><?= $product['small_description']; ?></p>
                                </nav>
                            </nav>
                        </div>
                        <div class="buttonsAtSingle">
                            <select name="quantity" id="" class="addToCartBtn" required>
                                <option selected>Select Quantity</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                            <button class="addToCartBtn" value="<?= $product['id']; ?>"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                        </div><br><br>
                    </div>
                </div>
            <?php
        }
        else
        {
            echo "Product not found";
        }
    }
    else
    {
        echo "Something is not right";
    }

?>

<script src="assets/js/custom.js"></script>