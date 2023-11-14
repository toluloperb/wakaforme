<?php
    include ('includes/navbar.php');
?>

<div class="adminLogin">
    <form action="loginauth.php" method="POST">
        <h3>Login</h3>

        <?php
            if (isset($_GET['error']))
            {
                ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php
            }
        ?>

        <div class="form">
            <label for="username">User Name</label>
            <input type="text" name="username">

            <label for="">Password</label>
            <input type="password" name="password"> <br>

            <button type="submit" class="submit">Login</button>
        </div>
    </form>
</div>