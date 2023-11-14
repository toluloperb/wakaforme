<?php

include('config/dbcon.php');

function getAllLocation($table)
{
    global $con;
    $query = "SELECT * FROM locations";
    return $query_run = mysqli_query($con, $query);
}

function getNameActive($table, $name)
{
    global $con;
    $query = "SELECT * FROM $table WHERE name= '$name' LIMIT 1";
    return $query_run = mysqli_query($con, $query);
}

function getCategorybyLocation($location)
{
    global $con;
    $query = "SELECT * FROM categories WHERE location= '$location' ";
    return $query_run = mysqli_query($con, $query);
}

function getProdbyCategory($category)
{
    global $con;
    $query = "SELECT * FROM products WHERE category = '$category' ";
    return $query_run = mysqli_query($con, $query);
}

function getCategoryActive($category)
{
    global $con;
    $query = "SELECT * FROM products WHERE category= '$category' LIMIT 1";
    return $query_run = mysqli_query($con, $query);
}

function getIDActive($table, $id)
{
    global $con;
    $query = "SELECT * FROM $table WHERE id= '$id'";
    return $query_run = mysqli_query($con, $query);
}

?>