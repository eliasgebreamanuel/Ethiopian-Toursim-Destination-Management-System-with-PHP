<?php
$connection = mysqli_connect('localhost','root','','hotel');
if(isset($_POST['delete_btn'])){
$id = $_POST['delete_id'];
$sql= "DELETE FROM hotel_info WHERE id = $id";
mysqli_query($connection,$sql);
header('location: blank.php');
}

?>