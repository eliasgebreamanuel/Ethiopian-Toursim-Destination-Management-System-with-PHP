

<?php
    
$dbhost = "localhost";
$dbusername =  "";
$dbpassword = "";
$dbname = "hotel";


$con = mysqli_connect("localhost","","","hotel");
$id = $_GET['id'];
$query = "SELECT * FROM hotel_info WHERE id = '$id' ";
$resultq = mysqli_query ($con,$query);
   



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" src="css/bootsrtap.css">
    <title>Detail Page</title>
</head>
<body>


<nav class="container w-50 my-3 bg-secondary p-2">

<?php
//fire query
?>

<?php 
if(mysqli_num_rows($resultq) > 0)
{
  ?>
<form action="#" method="post" id="form1" name="form1">

<?php 
while($row = mysqli_fetch_assoc($resultq)){
         // to output mysql data in HTML table format
?>
<div class="row g-1  my-auto p-2">    
<div class="col-md-6">
    <label for="staticEmail">First Name</label>
    
      <!-- <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $row['firstname'];?>"> -->
    
  </div>
  <div class="col-md-6">
    <label for="staticEmail" >Last Name</label>
    <div class="row-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $row['hotel_name'];?>">
    </div>
  </div>
  <div class="col-md-6">
    <label for="staticEmail">Gender</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $row['hotel_description'];?>">
    </div>
  </div>
  <div class="col-md-6">
    <label for="staticEmail">Age</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $row['near_by_Services'];?>">
    </div>
  </div>
  <div class="col-md-6">
    <label for="staticEmail">Telephone</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $row['contact__address'];?>">
    </div>
  </div>
  <div class="col-md-6">
    <label for="staticEmail">Occupation</label>
    <div class="col-sm-10">
      <!-- <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $row['occupation'];?>"> -->
    </div>
  </div>
  <div class="col-md-6">
    <label for="staticEmail">Region</label>
    <div class="col-sm-10">
      <!-- <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $row['region'];?>"> -->
    </div>
  </div>
  <div class="col-md-6">
    <label for="staticEmail">Location</label>
    <div class="col-sm-10">
      <!-- <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $row['location'];?>"> -->
    </div>
  </div>
    <div class="col-md-6">
    <label for="staticEmail">Crime Type</label>
    <div class="col-sm-10">
      <!-- <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Assault"> -->
    </div>
  </div>
  <div class="col-md-6">
    <label for="staticEmail">Description</label>
    <div class="col-sm-10">
      <!-- <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="description"> -->
    </div>
  </div>
<?php 
}
?>
<?php 
}
?>

   <div class="col-md-6 w-50 mx-auto">
    <button class="btn btn-dark" type="submit" id="save" name="save">Save</button>
   </div>
</div>     
</form>
</nav>
    
</body>
</html>