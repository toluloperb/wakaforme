<?php
    include ('includes/header.php');
    include ('includes/navbar.php');
    include ('functions/usersFunc.php');
?>

<div class="board1">
    <div class="bigBanner">
        <div class="sec1">
            <h2>Everything you need in this community is on your palm</h2>
            <!-- <img src="images/screenbkg.png" alt=""> -->
        </div>
    </div>
    <div class="locationsTable">
        <h3>Where are you?</h3>
        <p>Select your location</p>
        <div class="locations">
            <?php
                $categories = getAllLocation("categories");

                if(mysqli_num_rows($categories) > 0)
                {
                    foreach($categories as $item)
                    {
                        ?>
                            <a href="categories.php?location=<?= $item['name']; ?>">
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
    </div>
</div>

<div class="categories" id="categories">
    
</div>