<?php

include("../config/dbcon.php");

if(isset($_POST['book']))
{
    $name = mysqli_real_escape_string($con,$_POST['name']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $number = mysqli_real_escape_string($con,$_POST['number']);
    $company_name = mysqli_real_escape_string($con,$_POST['company_name']);
    $about_company = mysqli_real_escape_string($con,$_POST['about_company']);
    $service = mysqli_real_escape_string($con,$_POST['service']);
    $budget = mysqli_real_escape_string($con,$_POST['budget']);

    $insert_query = "INSERT INTO fibeform (name,email,number,company_name,about_company,service,budget) VALUES ('$name','$email','$number','$company_name','$about_company','$service','$budget')";
    $insert_query_run = mysqli_query($con, $insert_query);

    if($insert_query_run)
    {
        header('Location: ../.');
    }
    else
    {
        Echo "Couldnt Submit Successfully";
    }
}

?>