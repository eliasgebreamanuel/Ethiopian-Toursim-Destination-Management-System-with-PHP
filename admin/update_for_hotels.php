<?php

$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, 'hotel');

if (isset($_POST['update_hotel'])) {
    $id = $_POST['updated_id'];
    $hotel_image = $_POST['hotel_image'];
    $hotel_name = $_POST['hotel_name'];
    $hotel_description = $_POST['hotel_description'];
    $hotel_services = $_POST['hotel_services'];
    $near_by_services = $_POST['near_by_services'];
    $contact_address = $_POST['contact_address'];
    $query = "UPDATE hotel_info SET hotel_image = '" . $hotel_image . "', hotel_name = '" . $hotel_name . "' , hotel_description = '" . $hotel_description . "',hotel_services = '" . $hotel_services . "',near_by_services = '" . $near_by_services . "',contact__address = '" . $contact_address . "' WHERE id = '" . $id . "'";

    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: hotels.php');
    } else {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>