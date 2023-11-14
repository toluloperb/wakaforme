<?php 

session_start();
include ('../config/dbcon.php');
include ('../functions/adminFunction.php');

if(isset($_POST['submitBtn'])){
    $name = $_POST['name'];
    $category = $_POST['category'];
    $location = $_POST['location'];
    $price = $_POST['price'];
    $small_description = $_POST['small_description'];
    $vendor = $_POST['vendor'];

    $image = $_FILES['image']['name'];

    $path = "../uploads";

    $image_ext = pathinfo($image, PATHINFO_EXTENSION);
    $filename = time().'.'.$image_ext;

    $checkvendor_query = "SELECT * FROM vendors WHERE name = '$vendor'";
    $checkvendor_query_run = mysqli_query($con, $checkvendor_query);

    if(mysqli_num_rows($checkvendor_query_run) > 0)
    {
        if($name != "" && $category !="" && $location !="")
        {
            $product_query = "INSERT INTO products (name,category,location,price,small_description,vendor,image)
                            VALUES ('$name','$category','$location','$price','$small_description','$vendor','$filename')";

            $product_query_run = mysqli_query($con, $product_query);

            if($product_query_run)
            {
                move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$filename);

                redirect("products.php", "Product Added Successfully");
            }
            else
            {
                redirect("add-product.php", "Something Went Wrong");
            }
        }
        else
        {
            redirect("add-product.php", "All fields are mandatory");
        }
    }
    else
    {
        echo "Vendor not yet registered";
    }
}

else if(isset($_POST['updateBtn']))
{
    $product_id = $_POST['product_id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $original_price = $_POST['original_price'];
    $selling_price = $_POST['selling_price'];
    $qty = $_POST['qty'];
    $sizes = $_POST['sizes'];

    $path = "../uploads";

    $new_image = $FILES['image']['name'];
    $old_image = $_POST['old_image'];

    if($new_image != "")
    {
        $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
        $update_filename = time().'.'.$image_ext;
    }
    else
    {
        $update_filename = $old_image;
    }
    $update_product_query = "UPDATE products SET name='$name',description='$description',original_price='$original_price',
                            selling_price='$selling_price',qty='$qty',sizes='$sizes',image='$update_filename' WHERE id='$product_id' ";
    $update_product_query_run = mysqli_query($con, $update_product_query);

    if($update_product_query_run)
    {
        if($_FILES['image']['name'] != "")
        {
            move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$update_filename);
            if(file_exists("../uploads/".$old_image))
            {
                unlink("../uploads/".$old_image);
            }
        }
        redirect("edit-product.php?id=$product_id", "Product Updated Successfully");
    }
    else
    {
        redirect("edit-product.php?id=$product_id", "Something Went Wrong");
    }
}

else if(isset($_POST['delete_product_btn']))
{
    $product_id = mysqli_real_escape_string($con, $_POST['product_id']);

    $product_query = "SELECT * FROM products WHERE id = '$product_id' ";
    $product_query_run = mysqli_query($con, $product_query);
    $product_data = mysqli_fetch_array($product_query_run);
    $image = $product_data['image'];
    
    $delete_query = "DELETE FROM products WHERE id = '$product_id' ";
    $delete_query_run = mysqli_query($con, $delete_query);

    if($delete_query_run)
    {
        if(file_exists("../uploads/".$image))
        {
            unlink("../uploads/".$image);
        }
        // redirect("instant-shop.php", "Product Deleted Successfully");
        echo 200;
    }
    else
    {
        redirect("instant-shop.php", "Something Went Wrong");
    }
}

else if(isset($_POST['add_cate_btn']))
{
    $name = $_POST['name'];
    $location = $_POST['location'];

    $product_query = "INSERT INTO categories (name, location) VALUES ('$name','$location')";
    $product_query_run = mysqli_query($con, $product_query);

    if($product_query_run)
    {
        redirect("categories.php", "Product Added Successfully");
    }
    else
    {
        redirect("add-categories.php", "Something Went Wrong");
    }
}

else if(isset($_POST['add_loca_btn']))
{
    $name = $_POST['name'];

    $product_query = "INSERT INTO locations (name) VALUES ('$name')";
    $product_query_run = mysqli_query($con, $product_query);

    if($product_query_run)
    {
        redirect("locations.php", "Location Added Successfully");
    }
    else
    {
        redirect("add-location.php", "Something Went Wrong");
    }
}

else if(isset($_POST['addVendor']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $category = $_POST['category'];
    $location = $_POST['location'];

    $product_query = "INSERT INTO vendors (name,email,number,category,location) VALUES ('$name','$email','$number','$category','$location')";
    $product_query_run = mysqli_query($con, $product_query);

    if($product_query_run)
    {
        redirect("vendors.php", "Location Added Successfully");
    }
    else
    {
        redirect("add-vendor.php", "Something Went Wrong");
    }
}

else 
{
    header('Location: ../index.php');
}
?>