<?php
// include('security.php');

if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $hotel_image = $_POST['hotel_image'];
    $hotel_name = $_POST['hotel_name'];
    $hotel_description = $_POST['hotel_description'];
    $hotel_services = $_POST['hotel_services'];
    $near_by_services = $_POST['near_by_services'];
    $contact_address = $_POST['contact_address'];
$host = 'localhost';
$username = 'root';
$password = '';
$db_name = 'hotel';
$conn = mysqli_connect($host,$username,$password,$db_name);
    $query = "UPDATE hotel_info SET hotel_image='$hotel_image', hotel_name='$hotel_name', hotel_description='$hotel_description', hotel_services='$hotel_services', near_by_services='$near_by_services', contact__address='$contact_address' WHERE id='$id' ";
    mysqli_query($conn, $query);
    header('Location: blank.php');
    // if($query_run)
    // {
    //     $_SESSION['status'] = "Your Data is Updated";
    //     $_SESSION['status_code'] = "success";
    //     header('Location: register.php'); 
    // }
    // else
    // {
    //     $_SESSION['status'] = "Your Data is NOT Updated";
    //     $_SESSION['status_code'] = "error";
    //     header('Location: register.php'); 
    // }
}

?>