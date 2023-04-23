<?php

$dbhost = "localhost";
$dbusername = "";
$dbpassword = "";
$dbname = "hotel";


$con = mysqli_connect("localhost", "root", "", "hotel");
$id = $_GET['id'];
$query = "SELECT * FROM hotel_info WHERE id = '$id' ";
$resultq = mysqli_query($con, $query);

$result = mysqli_fetch_assoc($resultq);


$comment_id = $_GET['id'];
$sql2 = "SELECT * FROM comments WHERE id = '$comment_id'";
$result4 = mysqli_query($con, $sql2);
$hotels = mysqli_fetch_all($result4, MYSQLI_ASSOC);
session_start();
if (!isset($_SESSION['user'])) {
  header('location: login_new.php');
}
$uid = $_SESSION['user'];
if (isset($_POST['comment_submit'])) {
  $message = $_POST['message'];
  $con = mysqli_connect("localhost", "root", "", "hotel");
  $query = "INSERT INTO comments(id,uid,message) VALUES ('" . $comment_id . "','" . $uid . "','" . $message . "')";
  mysqli_query($con, $query);
  header('Refresh: 0');

}





?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <style>
    .nearby_class {
      width: 350px;
      height: 250px;
      background-color: white;
      padding: 10px;
      overflow: hidden;
      overflow-y: hidden;
    }

    .comment_class {

      width: 650px;
      height: 300px;
      background-color: white;
      padding: 10px;
      overflow: hidden;
      overflow-y: scroll;
    }


    .footer-dark {
      padding: 50px 0;
      color: #f0f9ff;
      background-color: #282d32;
    }

    .footer-dark h3 {
      margin-top: 0;
      margin-bottom: 12px;
      font-weight: bold;
      font-size: 16px;
    }

    .footer-dark ul {
      padding: 0;
      list-style: none;
      line-height: 1.6;
      font-size: 14px;
      margin-bottom: 0;
    }

    .footer-dark ul a {
      color: inherit;
      text-decoration: none;
      opacity: 0.6;
    }

    .footer-dark ul a:hover {
      opacity: 0.8;
    }

    @media (max-width:767px) {
      .footer-dark .item:not(.social) {
        text-align: center;
        padding-bottom: 20px;
      }
    }

    .footer-dark .item.text {
      margin-bottom: 36px;
    }

    @media (max-width:767px) {
      .footer-dark .item.text {
        margin-bottom: 0;
      }
    }

    .footer-dark .item.text p {
      opacity: 0.6;
      margin-bottom: 0;
    }

    .footer-dark .item.social {
      text-align: center;
    }

    @media (max-width:991px) {
      .footer-dark .item.social {
        text-align: center;
        margin-top: 20px;
      }
    }

    .footer-dark .item.social>a {
      font-size: 20px;
      width: 36px;
      height: 36px;
      line-height: 36px;
      display: inline-block;
      text-align: center;
      border-radius: 50%;
      box-shadow: 0 0 0 1px rgba(255, 255, 255, 0.4);
      margin: 0 8px;
      color: #fff;
      opacity: 0.75;
    }

    .footer-dark .item.social>a:hover {
      opacity: 0.9;
    }

    .footer-dark .copyright {
      text-align: center;
      padding-top: 24px;
      opacity: 0.3;
      font-size: 13px;
      margin-bottom: 0;
    }
  </style>

</head>

<body class="">

  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <a class="navbar-brand text-white" href="home_page_new.php">Go back</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <!-- <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="#">Features</a>
        <a class="nav-item nav-link" href="#">Pricing</a>
        <a class="nav-item nav-link disabled" href="#">Disabled</a> -->
      </div>
    </div>
  </nav>
  <div class="container-fluid my-5">
    <h2 class="text-center">Hotel Details Description Page</h2>
    <div class="row gy-3">
      <!-- manually change gutter using g{d}-{n} -->
      <div class="col-sm-4 col-lg-6">
        <?php echo '<img class = "img-fluid" style = "width: 400;" src="data:image;base64,' . base64_encode($result['hotel_image']) . '">'; ?>
        <!-- <p class="display-5 fw-bold">Name of the hotel</p> -->

        <p class="fw-bold display-4 ">
          <?php echo $result['hotel_name']; ?>
        </p>
        <p class="fw-bold ">Description about
          <?php echo $result['hotel_name']; ?>
        </p>
        <p class="comment_class">
          <?php echo $result['hotel_description']; ?>
        </p>
      </div>

      <div class="col-sm-4 col-lg-6">
        <h2>Hotel Services</h2>
        <p>
          <?php echo $result['hotel_services']; ?>
        </p>
        <div class="nearby_class">
          <p class="fw-bold">Near By Services around
            <?php echo $result['hotel_name']; ?>
          </p>
          <p>
            <?php echo $result['near_by_services']; ?>
          </p>
        </div>
        <hr>
        <h3>Add a comment about our hotel</h3>
        <form method='POST' class="card col-sm-2 col-lg-4 form-inline" action=''>
          <?php

          ?>
          <div class="comment_class">
            <?php

            ?>
            <?php foreach ($hotels as $comment) { ?>
              <p>
                <?php echo $comment['uid']; ?> :

                <?php echo $comment['message']; ?>
                <?php  echo 'at'; ?>

                <?php echo $comment['date']; ?>
              </p>
            <?php } ?>
          </div>

          <br />


          <input type="text" name="message" placeholder="comment as <?php echo $_SESSION['user'] ?> :( " />
          <button class="btn btn-success " name="comment_submit" type="submit">Post</button>
        </form>



      </div>

    </div>
  </div>



  <div class="footer-dark">
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-3 item">
            <h3>Services</h3>
            <ul>
              <li><a href="#">Hotel Services</a></li>
              <li><a href="#">Resort Services</a></li>
              <li><a href="#">Destinations</a></li>
              <li><a href="#">Shop</a></li>
            </ul>
          </div>
          <div class="col-sm-6 col-md-3 item">
            <h3>About</h3>
            <ul>
              <li><a href="#">Our Website</a></li>
              <li><a href="#">Team </a></li>
              <li><a href="#">User</a></li>
            </ul>
          </div>
          <div class="col-md-6 item text">
            <h3>Tourism Managment System </h3>
            <p>Tourism has a few major elements − destinations, attractions, sites, accommodation, and all ancillary
              services. The need for a robust and dynamic tour management application has been around since the advent
              of the tourism concept. Thus we have developed an application to provide the best travelling services to
              the customers and travel agents. The Tourism Management System provides a search platform where a tourist
              can find their tour places according to their choices. </p>
          </div>

        </div>
        <p class="copyright">TMS © 2023</p>
      </div>
    </footer>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>