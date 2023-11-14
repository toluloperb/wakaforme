<?php
    session_start();
    if (isset($_SESSION['username']))
    {
        
    include ('includes/navbar.php');
    include ('../functions/adminFunction.php');
?>

<br>
    <div class="head">
        <h3>Forms Submitted</h3> <br>
    </div>

    <table id="customers">
    <tr>
        <th>id</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Active Number</th>
        <th>Company Name</th>
        <th>About Company</th>
        <th>Service</th>
        <th>Budget</th>
    </tr>

    <?php
        $wholesalers = getAll("sellers");

        if(mysqli_num_rows($wholesalers) > 0)
        {
            foreach($wholesalers as $item)
            {
                ?>
                    <tr>
                        <td><?= $item['id']; ?></td>
                        <td><?= $item['name']; ?></td>
                        <td><?= $item['email']; ?></td>
                        <td><?= $item['number']; ?></td>
                        <td><?= $item['company_name']; ?></td>
                        <td><?= $item['about_company']; ?></td>
                        <td><?= $item['service']; ?></td>
                        <td><?= $item['budget']; ?></td>
                    </tr>
                <?php
            }
        }
        else
        {
            echo "No record found";
        }
    ?>
    </table>

<?php
}
else
{
    header("Location: login.php?error=Login to continue");
    exit();
}
?>