<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'hotel');

if(isset($_POST['updatedata']))
{
    $id = $_POST['updated_id'];
    $resort_image = $_POST['resort_image'];
    $resort_name = $_POST['resort_name'];
    $resort_description = $_POST['resort_description'];
    $resort_services = $_POST['resort_services'];
    $near_by_services = $_POST['near_by_services'];
    $contact_address = $_POST['contact_address'];
    $query = "UPDATE resort_info SET resort_image = '" . $resort_image . "', resort_name = '" . $resort_name . "' , resort_description = '" . $resort_description . "',resort_services = '" . $resort_services."',near_by_services = '" .$near_by_services."',contact_address = '". $contact_address."' WHERE id = '" . $id . "'";

    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: resorts.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>