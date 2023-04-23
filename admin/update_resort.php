<?php
// include('security.php');
$host = 'localhost';
$username = 'root';
$password = '';
$db_name = 'hotel';
$conn = mysqli_connect($host, $username, $password, $db_name);
if (isset($_POST['update_btn'])) {
    $id = $_POST['edit_id'];
    $resort_image = $_POST['resort_image'];
    $resort_name = $_POST['resort_name'];
    $resort_description = $_POST['resort_description'];
    $resort_services = $_POST['resort_services'];
    $near_by_services = $_POST['near_by_services'];
    $contact_address = $_POST['contact_address'];




    $query = "UPDATE resort_info SET resort_image='$resort_image', resort_name='$resort_name', resort_description='$resort_description',resort_services='$resort_services', contact_address='$contact_address' WHERE id='$id' ";
    mysqli_query($conn, $query);
    header('location: resorts.php');
    //     if($query_run)
//     {
//         $_SESSION['status'] = "Your Data is Updated";
//         $_SESSION['status_code'] = "success";
//         header('Location: register.php'); 
//     }
//     else
//     {
//         $_SESSION['status'] = "Your Data is NOT Updated";
//         $_SESSION['status_code'] = "error";
//         header('Location: register.php'); 
//     }
}

?>