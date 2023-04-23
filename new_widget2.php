<?php ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Exo:wght@300;400;600;700&display=swap');

body{
    font-family: "Exo",sans-serif;
}
.list-group-item{
    background-color: rgb(0,90,255);
    color:#fff;
    border:none;
    margin:3px 0px;
    text-align: center;
    box-shadow:0 4px 4px rgb(0 0 0/25%);
}
.list-group-item.active{
    background-color: #fff !important;
    color:rgb(0,90,255) !important;
}
.scrollspy-example{
    height:225px;
    overflow-y: scroll;
}
.scrollspy-example::-webkit-scrollbar{
    width:10px;
}
.scrollspy-example::-webkit-scrollbar-track{
    -webkit-box-shadow:inset 0 0 6px rgba(0,0,0,0.3);
    -webkit-border-radius:4px;
    border-radius: 1px;
}
.scrollspy-example::-webkit-scrollbar-thumb{
    -webkit-box-shadow:inset 0 0 6px rgba(0,0,0,0.5);
    -webkit-border-radius:1px;
    background: rgb(0,90,255);
    border-radius: 4px;
}
h4{
    font-weight: 700;
    color:rgb(0,90,255);
    font-size:18px;
    text-align: center;
}
.list-group a img{
    width:150px;
}
/* .tag{
    width:100px;
    height:100px;
    background: rgb(255,33,146);
    position: absolute;
    top:128px;
    left:72px;
    border-radius: 50%;
} */
.mycontainer{
    height:80vh;
    display:flex;
    justify-items: center;
    align-items: center;
}
.myrow{
    width:100%;
    height:50vh;
    border-radius:10px;
    backdrop-filter: blur(10px);
    justify-items: center;
    align-items: center;
}

    </style>
</head>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="20">
    

<div class = "container-fluid">
  <div class="tag"></div>
    <div class="container mycontainer mt-5 --bs-secondary-bg">
        <div class="row p-3 mt-5 myrow shadow-lg custom-row">
            <div class="col-md-3">
            <div id="list-example" id="list-example" class="list-group">
                <!-- <a class="text-center animate__animated animate__fadeInLeft" href="#"><img class="img-fluid rounded-circle" src="./img/user.png"></a> -->
                <a class="list-group-item list-group-item-action animate__animated animate__fadeInLeft animate__delay-1s" href="#list-item-1">Destination</a>
                <a class="list-group-item list-group-item-action animate__animated animate__fadeInLeft animate__delay-2s" href="#list-item-2">Hotel</a>
                <a class="list-group-item list-group-item-action animate__animated animate__fadeInLeft animate__delay-3s" href="#list-item-3">Resort</a>
                <a class="list-group-item list-group-item-action animate__animated animate__fadeInLeft animate__delay-3s" href="#list-item-4">Shop</a>

            </div>
        </div>
        <div class="col-md-9 pe-0">
            <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example"
                tabindex="0">
                <h4 id="list-item-1" class="animate__animated animate__fadeInDown animate__delay-1s">Destinations</h4>
             
                
                   <div class="container-lg my-5">
<?php include('Connection.php'); ?>
<?php 
// $sql = "SELECT * FROM hotel_info2";
// $result = mysqli_query($conn, $sql);
// $hotels = mysqli_fetch_all($result, MYSQLI_ASSOC);
include('databases/database.php');
// this is used to write query for all data
$sql1 = "SELECT * FROM destination_home_page";

$sql2 = "SELECT * FROM hotels_home_page";

$sql3 = "SELECT * FROM resort_home_page";


// this is used to make theery and get the result
$result1 = mysqli_query($connect, $sql1);
$result2 = mysqli_query($connect, $sql2);
$result3 = mysqli_query($connect, $sql3);

// this is used to fetch the resuting rows as an array
$destinations = mysqli_fetch_all($result1, MYSQLI_ASSOC);
$hotels =  mysqli_fetch_all($result2, MYSQLI_ASSOC);
$resorts = mysqli_fetch_all($result3, MYSQLI_ASSOC);
?>




<?php foreach($destinations as $destination) { ?>
  <div class="container-lg my-5">
    <!-- <h2>responsive column widths</h2> -->
    <div class="row gy-3 bg-secondary">
      <div class="col-sm-4 col-lg-4 mt-3">
        
                <?php echo '<img  style= "width: 200; height: 158;"  src="data:image;base64,' . base64_encode($destination['destination_image']) . '">'; ?>

        
      </div>
      <div class="col-sm-4 col-lg-8">
        <p class = "row text-white"><?php echo $destination['destination_name']; ?></p>
          <p class = "row text-white"><?php echo $destination['destination_description']; ?></p>
          <p class = "row text-white"><button class = "btn btn-primary">Click</button></p>

    </div>
 
    </div>
  </div>

<?php } ?>


                <h4 id="list-item-2" class="animate__animated animate__fadeInDown animate__delay-2s">Hotels</h4>
                                <div class="container-lg my-5">

<?php foreach($hotels as $hotel) { ?>
  <div class="container-lg my-5">
    <!-- <h2>responsive column widths</h2> -->
    <div class="row gy-3 bg-secondary">
      <div class="col-sm-4 col-lg-4 mt-3">
        
                <?php echo '<img  style= "width: 200; height: 158;"  src="data:image;base64,' . base64_encode($hotel['hotel_image']) . '">'; ?>

        
      </div>
      <div class="col-sm-4 col-lg-8">
        <p class = "row text-white"><?php echo $hotel['hotel_name']; ?></p>
          <p class = "row text-white"><?php echo $hotel['hotel_description']; ?></p>
          <p class = "row text-white"><?php echo $hotel['hotel_category']; ?></p>
          <p class = "row text-white"><a href = "detaile_page.php?id=<?php echo $hotel['id']; ?>">Click</a></p>

    </div>
 
    </div>
  </div>

<?php } ?>
                <h4 id="list-item-3" class="animate__animated animate__fadeInDown animate__delay-1s">Resorts</h4>
                                        <div class="container-lg my-5">

<?php foreach($resorts as $resort) { ?>
  <div class="container-lg my-5">
    <!-- <h2>responsive column widths</h2> -->
    <div class="row gy-3 bg-secondary">
      <div class="col-sm-4 col-lg-4 mt-3">
        
                <?php echo '<img  style= "width: 180; height: 120"  src="data:image;base64,' . base64_encode($resort['resort_image']) . '">'; ?>

        
      </div>
      <div class="col-sm-4 col-lg-8">
        <p class = "row text-white"><?php echo $resort['resort_name']; ?></p>
          <p class = "row text-white"><?php echo $resort['resort_description']; ?></p>
          <!-- <p class = "row text-white"><?php echo $hotel['hotel_category']; ?></p> -->
          <p class = "row text-white"><button class = "btn btn-primary">Click</button></p>

    </div>
 
    </div>
  </div>

<?php } ?>
            </div>




        </div>
    </div>
    </div>
</body>
</html>