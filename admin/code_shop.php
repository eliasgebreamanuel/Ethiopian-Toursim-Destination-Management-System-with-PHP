<?php
$connection = mysqli_connect('localhost', 'root', '', 'hotel');
if (isset($_POST['delete_btn'])) {
    $id = $_POST['delete_id'];
    $sql = "DELETE FROM shop_info WHERE id = $id";
    mysqli_query($connection, $sql);
    header('location: hotels.php');
}

?>