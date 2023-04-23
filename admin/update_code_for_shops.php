<?php

$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, 'hotel');

if (isset($_POST['updatedata'])) {
    $id = $_POST['updated_id'];
    $shop_image = $_POST['shop_image'];
    $shop_name = $_POST['shop_name'];
    $shop_description = $_POST['shop_description'];
    $shop_destinations = $_POST['shop_destinations'];
    // $near_by_services = $_POST['near_by_services'];
    // $contact_address = $_POST['contact_address'];
    $query = "UPDATE shop_info SET shop_image = '" . $shop_image . "', shop_name = '" . $shop_name . "' , shop_description = '" . $shop_description . "',shop_destinations = '" . $shop_destinations . "' WHERE id = '" . $id . "'";

    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: shops.php');
    } else {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>