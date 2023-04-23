<?php
    //  include('security.php');
?>

<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> EDIT Admin Profile </h6>
        </div>
        <div class="card-body">
        <?php

            if(isset($_POST['edit_btn']))
            {
                $id = $_POST['edit_id'];
                $host = 'localhost';
$username = 'root';
$password = '';
$db_name = 'hotel';
$conn = mysqli_connect($host,$username,$password,$db_name);
                $query = "SELECT * FROM hotel_info WHERE id='$id' ";
                $query_run = mysqli_query($conn, $query);

                foreach($query_run as $row)
                {
                    ?>

                        <form action="code2.php" method="POST">

                            <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
                             <div class="form-group">
                                <label> Hotel Image </label>
                                <input type="file" name="hotel_image" value="<?php echo $row['hotel_image'] ?>" class="form-control"
                                    placeholder="Enter Username">
                            </div>
                            <div class="form-group">
                                <label> Hotel Name </label>
                                <input type="text" name="hotel_name" value="<?php echo $row['hotel_name'] ?>" class="form-control"
                                    placeholder="Enter Username">
                            </div>
                            <div class="form-group">
                                <label>Hotel Description</label>
                                <input type="text" name="hotel_description" value="<?php echo $row['hotel_description'] ?>" class="form-control"
                                    placeholder="Enter Email">
                            </div>
                            
                               <div class="form-group">
                                <label>Hotel Services</label>
                                <input type="text" name="hotel_services" value="<?php echo $row['hotel_services'] ?>" class="form-control"
                                    placeholder="Enter hotel_services">
                            </div>
                                <div class="form-group">
                                <label>Hotel Near By Services</label>
                                <input type="text" name="near_by_services" value="<?php echo $row['near_by_services'] ?>" class="form-control"
                                    placeholder="Enter hotel near by services">
                            </div>
                                  <div class="form-group">
                                <label>Contact Address</label>
                                <input type="text" name="contact_address" value="<?php echo $row['contact__address'] ?>" class="form-control"
                                    placeholder="Enter hotel contact_address">
                            </div>
                            <a href="blank.php" class="btn btn-danger"> CANCEL </a>
                            <button type="submit" name="updatebtn" class="btn btn-primary"> Update </button>

                        </form>
                        <?php
                }
            }
        ?>
        </div>
    </div>
</div>

</div>