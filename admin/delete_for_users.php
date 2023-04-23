<?php
$connection = mysqli_connect('localhost', 'root', '', 'hotel');
if (isset($_POST['delete_btn'])) {
    $id = $_POST['delete_id'];
    $sql = "DELETE FROM users_email WHERE userid = $id";
    mysqli_query($connection, $sql);
    header('location: users.php');
}

?>