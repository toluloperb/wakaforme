<?php
    include ('includes/navbar.php');
    include ('../functions/adminFunction.php');
?>

<div class="form-table">
    <form action="code.php" method="post">
        <input type="text" name="name" placeholder="New Location">
        <input type="submit" value="Submit" name="add_loca_btn" style="padding-left: 0;">
    </form>
</div>