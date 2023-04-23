<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('location: login_new.php');
}
if (isset($_POST['logout_btn'])) {

    unset($_SESSION['user']);
    session_destroy();
    header('location: login_new.php');
}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />


    <!-- <link rel="stylesheet" href=".style1.css"> -->


    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/animate.css">
    <style>
        .comment_class {

            width: 100%;
            height: 300px;
            background-color: white;
            padding: 10px;
            overflow: hidden;
            overflow-y: scroll;
        }

        /* Google Font CDN Link */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        /* body{
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #dad3f8;
} */
        ::selection {
            background: #6d50e2;
            color: #fff;
        }

        .container {
            max-width: 950px;
            max-height: 700px;
            width: 100%;
            padding: 40px 50px 40px 40px;
            background: #fff;
            margin: 30px 20px;
            border-radius: 2px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }

        .container .topic {
            font-size: 30px;
            font-weight: 500;
            margin-bottom: 50px;
        }

        .content {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .content .list {
            display: flex;
            flex-direction: column;
            width: 20%;
            margin-right: 50px;
            position: relative;
        }

        .content .list label {
            height: 60px;
            font-size: 22px;
            font-weight: 500;
            line-height: 60px;
            cursor: pointer;
            padding-left: 25px;
            transition: all 0.5s ease;
            color: #333;
            z-index: 12;
        }

        #home:checked~.list label.home,
        #blog:checked~.list label.blog,
        #help:checked~.list label.help,
        #code:checked~.list label.code,
        #about:checked~.list label.about {
            color: #fff;
        }

        .content .list label:hover {
            color: #6d50e2;
        }

        .content .slider {
            position: absolute;
            left: 0;
            top: 0;
            height: 60px;
            width: 100%;
            border-radius: 12px;
            background: #6d50e2;
            transition: all 0.4s ease;
        }

        #home:checked~.list .slider {
            top: 0;
        }

        #blog:checked~.list .slider {
            top: 60px;
        }

        #help:checked~.list .slider {
            top: 120px;
        }

        #code:checked~.list .slider {
            top: 180px;
        }

        #about:checked~.list .slider {
            top: 240px;
        }

        .content .text-content {
            width: 80%;
            height: 100%;
        }

        .content .text {
            display: none;
        }

        .content .text .title {
            font-size: 25px;
            margin-bottom: 10px;
            font-weight: 500;
        }

        .content .text p {
            text-align: justify;
        }

        .content .text-content .home {
            display: block;
        }

        #home:checked~.text-content .home,
        #blog:checked~.text-content .blog,
        #help:checked~.text-content .help,
        #code:checked~.text-content .code,
        #about:checked~.text-content .about {
            display: block;
        }

        #blog:checked~.text-content .home,
        #help:checked~.text-content .home,
        #code:checked~.text-content .home,
        #about:checked~.text-content .home {
            display: none;
        }

        .content input {
            display: none;
        }
    </style>
</head>

<body data-spy="scroll" data-target="#myScrollspy" data-offset="20">

    <!-- navbar -->
    <nav class="navbar sticky-top  navbar-expand-md navbar-light pt-5 pb-4 bg-dark">
        <div class="container-xxl">
            <!-- navbar brand / title -->
            <a class="navbar-brand" href="#intro">
                <span class="text-secondary fw-bold">
                    TMS
                </span>
            </a>
            <!-- toggle button for mobile nav -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav"
                aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- navbar links -->
            <div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#topics">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-white" href="#destinations">Destinations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#hotels">Hotels</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#resorts">Resorts</a>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Profile
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="edit_profile.php">
                                    <?php echo $_SESSION['user']; ?>
                                </a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <a href="logout.php">
                                <li class="dropdown-item">Logout</li>
                            </a>

                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <?php include('index2.php'); ?>

    <?php include('Connection.php'); ?>
    <div>

        <div class="container">
            <div class="topic"></div>
            <div class="content">
                <input type="radio" name="slider" checked id="home">
                <input type="radio" name="slider" id="blog">
                <input type="radio" name="slider" id="help">
                <input type="radio" name="slider" id="code">
                <input type="radio" name="slider" id="about">
                <div class="list">
                    <label for="home" class="home">
                        <span class="title">Destinations</span>
                    </label>
                    <label for="blog" class="blog">
                        <span class="title">Hotels</span>
                    </label>
                    <label for="help" class="help">
                        <span class="title">Resorts</span>
                    </label>

                    <div class="slider"></div>
                </div>
                <?php

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
                $hotels = mysqli_fetch_all($result2, MYSQLI_ASSOC);
                $resorts = mysqli_fetch_all($result3, MYSQLI_ASSOC);
                ?>
                <div class="text-content">
                    <div class="home text ">
                        <div class="title text-center fw-bold bg-secondary">Destinations in Ethiopia</div>
                        <div class="container comment_class" id="destinations">
                            <?php foreach ($destinations as $destination) { ?>
                                <div class="container">
                                    <div class="row ">
                                        <div class="col-6 ">
                                            <?php echo '<img class = "img-fluid" style = "width: 300; height: 150;" src="data:image;base64,' . base64_encode($destination['destination_image']) . '">'; ?>

                                        </div>

                                        <div class="col-6">
                                            <div class="row">
                                                <?php echo $destination['destination_name']; ?>
                                            </div>
                                            <div class="row">
                                                <?php echo $destination['destination_description']; ?>
                                                <!-- <a href="detaile_destination_page.php?id=<?php echo $destination['destination']; ?>"><button class = "bg-success">Read More</button> -->

                                            </div>
                                            <div class="row text-center">
                                                <a href="detailed_destination_page.php?id=<?php echo $destination['destination']; ?>"><button
                                                        class="btn btn-success">Read More</button></a>

                                            </div>
                                        </div>

                                    </div>

                                </div>
                            <?php } ?>

                        </div>

                    </div>
                    <section id="hotels">
                        <div class="blog text comment_class ">
                            <div class="title text-center fw-bold bg-secondary" id="hotels">Hotels in Ethiopia</div>

                            <?php

                            $hotel_destination = "Lalibella";
                            $sql4 = "SELECT * FROM hotels_home_page WHERE hotel_destinations =   '$hotel_destination'";
                            $result4 = mysqli_query($connect, $sql4);
                            $hotels = mysqli_fetch_all($result4, MYSQLI_ASSOC)



                                ?>
                            <div class="container comment_class">
                                <p>
                                    <?php echo $hotel_destination; ?>
                                </p>
                                <?php foreach ($hotels as $hotel) { ?>
                                    <div class="container" id="hotels">
                                        <div class="row m-10">

                                            <div class="col-5 ">
                                                <?php echo '<img class = "img-fluid" style = "width: 300; height: 150;" src="data:image;base64,' . base64_encode($hotel['hotel_image']) . '">'; ?>

                                            </div>
                                            <br>
                                            <div class="col-7">
                                                <div class="row">
                                                    <?php echo $hotel['hotel_name']; ?>
                                                </div>
                                                <div class="row">
                                                    <?php echo $hotel['hotel_category']; ?>
                                                </div>
                                                <div class="row text-center">
                                                    <a href="detaile_page.php?id=<?php echo $hotel['id']; ?>"><button
                                                            class="btn btn-success">Read More</button></a>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                <?php } ?>

                            </div>

                            <?php

                            $hotel_destination = "Gonder";
                            $sql4 = "SELECT * FROM hotels_home_page WHERE hotel_destinations =   '$hotel_destination'";
                            $result4 = mysqli_query($connect, $sql4);
                            $hotels = mysqli_fetch_all($result4, MYSQLI_ASSOC)



                                ?>
                            <div class="container comment_class">
                                <p>
                                    <?php echo $hotel_destination; ?>
                                </p>
                                <?php foreach ($hotels as $hotel) { ?>
                                    <div class="container">
                                        <div class="row m-10">

                                            <div class="col-5 ">
                                                <?php echo '<img class = "img-fluid" style = "width: 300; height: 150;" src="data:image;base64,' . base64_encode($hotel['hotel_image']) . '">'; ?>

                                            </div>
                                            <br>
                                            <div class="col-7">
                                                <div class="row">
                                                    <?php echo $hotel['hotel_name']; ?>
                                                </div>
                                                <div class="row">
                                                    <?php echo $hotel['hotel_category']; ?>
                                                </div>
                                                <div class="row text-center">
                                                    <a href="detaile_page.php?id=<?php echo $hotel['id']; ?>"><button
                                                            class="btn btn-success">Read More</button></a>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                <?php } ?>

                            </div>
                            <?php

                            $hotel_destination = "Northern Gonder";
                            $sql4 = "SELECT * FROM hotels_home_page WHERE hotel_destinations =   '$hotel_destination'";
                            $result4 = mysqli_query($connect, $sql4);
                            $hotels = mysqli_fetch_all($result4, MYSQLI_ASSOC);



                            ?>
                            <div class="container comment_class">
                                <p>
                                    <?php echo $hotel_destination; ?>
                                </p>
                                <?php foreach ($hotels as $hotel) { ?>
                                    <div class="container">
                                        <div class="row m-10">

                                            <div class="col-5 ">
                                                <?php echo '<img class = "img-fluid" style = "width: 300; height: 150;" src="data:image;base64,' . base64_encode($hotel['hotel_image']) . '">'; ?>

                                            </div>
                                            <br>
                                            <div class="col-7">
                                                <div class="row">
                                                    <?php echo $hotel['hotel_name']; ?>
                                                </div>
                                                <div class="row">
                                                    <?php echo $hotel['hotel_category']; ?>
                                                </div>
                                                <div class="row text-center">
                                                    <a href="detaile_page.php?id=<?php echo $hotel['id']; ?>"><button
                                                            class="btn btn-success">Read More</button></a>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                <?php } ?>

                            </div>
                        </div>
                    </section>
                    <section id="resorts">
                        <div class="help text comment_class">
                            <div class="title text-center fw-bold bg-secondary">Destinations in Ethiopia</div>

                            <?php

                            $resort_destination = "Lalibella";
                            $sql5 = "SELECT * FROM resort_home_page WHERE resort_destination =   '$resort_destination'";
                            $result5 = mysqli_query($connect, $sql5);
                            $resorts = mysqli_fetch_all($result5, MYSQLI_ASSOC)



                                ?>
                            <div class="container">
                                <p>
                                    <?php echo $resort_destination; ?>
                                </p>
                                <?php foreach ($resorts as $resort) { ?>

                                    <div class="row m-10">

                                        <div class="col-5 ">
                                            <?php echo '<img class = "img-fluid" style = "width: 300; height: 150;" src="data:image;base64,' . base64_encode($resort['resort_image']) . '">'; ?>

                                        </div>
                                        <br>
                                        <div class="col-7">
                                            <div class="row">
                                                <?php echo $resort['resort_name']; ?>
                                            </div>
                                            <div class="row">
                                                <?php echo $resort['resort_destination']; ?>
                                            </div>
                                            <div class="row text-center">
                                                <a href="detaile_page_resort.php?id=<?php echo $resort['id']; ?>"><button
                                                        class="btn btn-success">Read More</button></a>
                                            </div>
                                        </div>



                                    </div>
                                <?php } ?>

                            </div>

                            <?php

                            $resort_destination = "Gonder";
                            $sql6 = "SELECT * FROM resort_home_page WHERE resort_destination =   '$resort_destination'";
                            $result6 = mysqli_query($connect, $sql6);
                            $resorts = mysqli_fetch_all($result6, MYSQLI_ASSOC)



                                ?>
                            <div class="container comment_class">
                                <p>
                                    <?php echo $hotel_destination; ?>
                                </p>
                                <?php foreach ($resorts as $resort) { ?>
                                    <div class="container">
                                        <div class="row m-10">

                                            <div class="col-5 ">
                                                <?php echo '<img class = "img-fluid" style = "width: 300; height: 150;" src="data:image;base64,' . base64_encode($resort['resort_image']) . '">'; ?>

                                            </div>
                                            <br>
                                            <div class="col-7">
                                                <div class="row">
                                                    <?php echo $resort['resort_name']; ?>
                                                </div>
                                                <div class="row">
                                                    <?php echo $resort['resort_destination']; ?>
                                                </div>
                                                <div class="row text-center">
                                                    <a href="detaile_page_resort.php?id=<?php echo $resort['id']; ?>"><button
                                                            class="btn btn-success">Read More</button></a>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                <?php } ?>

                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

    </div>


</body>

<footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4 pb-0 bg-dark">
        <!-- Section: Social media -->
        <div>
            <p>Follow us in the following social medias</p>
        </div>
        <section class="mb-4">
            <!-- Facebook -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                    class="fab fa-facebook-f"></i></a>

            <!-- Twitter -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>

            <!-- Google -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-google"></i></a>

            <!-- Instagram -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                    class="fab fa-instagram"></i></a>

            <!-- Linkedin -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                    class="fab fa-linkedin-in"></i></a>

        </section>
        <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2023 Copyright:
        <a class="text-white" href="">Debre Berhan, Ethiopia</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- <footer>
  <h2>this is the footer tag</h2>
</footer> -->

</html>