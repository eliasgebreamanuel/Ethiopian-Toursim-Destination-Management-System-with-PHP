<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'hotel');

if(isset($_POST['insertdata']) || isset($_POST['uploadfilesub']))
{
    $hotel_image = $_POST['hotel_image'];

    $filename = $_FILES['uploadfile']['name'];
    $filetmpname = $_FILES['uploadfile']['tmp_name'];

    $hotel_name = $_POST['hotel_name'];
    $hotel_description = $_POST['hotel_description'];
    $hotel_services = $_POST['hotel_services'];
    $near_by_services = $_POST['near_by_services'];
    $contact_address = $_POST['contact_address'];
    $sql1 = "INSERT INTO `hotel_info` (`hotel_image`)  VALUES ('$filename')";
    $qry = mysqli_query($connection, $sql1);
    $query = "INSERT INTO hotel_info(hotel_image,hotel_name,hotel_description,hotel_services,near_by_services,contact__address) VALUES ('$filename','$hotel_name','$hotel_description','$hotel_services','$near_by_services','$contact_address')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: blank.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>