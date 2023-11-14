<?php

include('../config/dbcon.php');

function getAll($table)
{
    global $con;
    $query = "SELECT * FROM categories";
    return $query_run = mysqli_query($con, $query);
}

function getAllLocation($table)
{
    global $con;
    $query = "SELECT * FROM locations";
    return $query_run = mysqli_query($con, $query);
}

function getAllProducts($table)
{
    global $con;
    $query = "SELECT * FROM products";
    return $query_run = mysqli_query($con, $query);
}

function getAllCate($table)
{
    global $con;
    $query = "SELECT * FROM categories";
    return $query_run = mysqli_query($con, $query);
}

function getAllVendors($table)
{
    global $con;
    $query = "SELECT * FROM vendors";
    return $query_run = mysqli_query($con, $query);
}

function redirect($url, $message)
{
    $_SESSION['message'] = $message;
    header('Location: '.$url);
    exit();
}

?>