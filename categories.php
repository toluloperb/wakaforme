<?php
    include ('includes/header.php');
    include ('includes/navbar.php');
    include ('functions/usersFunc.php');

    $location_name = $_GET['location'];
    $location_data = getNameActive("locations", $location_name);
    $location = mysqli_fetch_array($location_data);
    $lid = $location['id'];
?>

<div class="board1">
    <div class="bigBanner">
        <div class="sec1">
            <h2>Everything you need in this community is on your palm</h2>
            <!-- <img src="images/screenbkg.png" alt=""> -->
        </div>
    </div>
    <div class="locationsTable">
        <h3 style="width: 60%;">Here are categories of products & services available in <?= $location['name']; ?></h3>
        <p>Select a category</p>
        <div class="locations">
            <?php
                $categories = getCategorybyLocation($lid);

                if(mysqli_num_rows($categories) > 0)
                {
                    foreach($categories as $item)
                    {
                        ?>
                            <a href="products.php?category=<?= $item['name']; ?>">
                                <nav>
                                    <img src="images/check icon.png" alt="">
                                    <div class="line"></div>
                                    <h3><?= $item['name']; ?></h3>
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