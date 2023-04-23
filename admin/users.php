<?php

// session_start();

// if (!isset($_SESSION['admin_user'])) {
//     header('location: login_new.php');
// }
// if (isset($_POST['logout_btna'])) {

//     unset($_SESSION['admin_user']);
//     session_destroy();
//     header('location: index.php');
// }


$host = 'localhost';
$username = 'root';
$password = '';
$db_name = 'hotel';
$conn = mysqli_connect($host, $username, $password, $db_name);
$query1 = "SELECT COUNT(*) AS count FROM hotel_info";
$query_result1 = mysqli_query($conn, $query1);

$query2 = "SELECT COUNT(*) AS count FROM resort_info";
$query_result2 = mysqli_query($conn, $query2);


$query3 = "SELECT COUNT(*) AS count FROM users_email WHERE emial_verified_at IS NOT NULL";
$query_result3 = mysqli_query($conn, $query3);



while ($row1 = mysqli_fetch_assoc($query_result1)) {
    $output1 = $row1['count'];
}


while ($row2 = mysqli_fetch_assoc($query_result2)) {
    $output2 = $row2['count'];
}


while ($row3 = mysqli_fetch_assoc($query_result3)) {
    $output3 = $row3['count'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>

    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <!-- <i class="fas fa-laugh-wink"></i> -->
                </div>
                <div class="sidebar-brand-text mx-3">TMS</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Manage The Following</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <!-- <div class="sidebar-heading">
        Interface
      </div> -->

            <!-- Nav Item - Pages Collapse Menu -->

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="hotels.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Hotels</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="resorts.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Resorts</span></a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="hotels.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Hotels 2</span></a>
            </li> -->
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="shops.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Shops</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="users.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Users</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <!-- <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form> -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>



                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Profile</span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    <?php  echo $_SESSION['admin_user'];?>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    <form method = "POST"><button name = "logout_btna"> Logout</button></form>

                                </a>

                        </li>

                    </ul>

                </nav>


                <p class="text-center fw-bold display-3">Users Information</p>
                <div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Student Data </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <form action="insertcode.php" method="POST">

                                <div class="modal-body">

                                    <div class="form-group">
                                        <label> Hotel Image </label>
                                        <input type="file" name="hotel_image" class="form-control"
                                            placeholder="Enter Hotel Name">
                                        <!-- <input type="submitb" name="submit1" class="form-control" placeholder="Enter Hotel Name"> -->

                                    </div>
                                    <div class="form-group">
                                        <label> Hotel Name </label>
                                        <input type="text" name="hotel_name" class="form-control"
                                            placeholder="Enter Hotel Name">
                                    </div>
                                    <div class="form-group">
                                        <label> Hotel Description </label>
                                        <input type="text" name="hotel_description" class="form-control"
                                            placeholder="Enter Hotel Description">
                                    </div>

                                    <div class="form-group">
                                        <label> Hotel Services </label>
                                        <input type="text" name="hotel_services" class="form-control"
                                            placeholder="Enter Hotel Services">
                                    </div>

                                    <div class="form-group">
                                        <label> Near By Services </label>
                                        <input type="text" name="near_by_services" class="form-control"
                                            placeholder="Enter Near By Services">
                                    </div>
                                    <div class="form-group">
                                        <label> Contact Address </label>
                                        <input type="text" name="contact_address" class="form-control"
                                            placeholder="Enter Near By Services">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" name="insertdata" class="btn btn-primary">Save Data</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#studentaddmodal">
                            Add Hotel
                        </button>
                    </div>
                </div>

                <section id="hotel">
                    <div class="container-fluid">

                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Admin Profile</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <?php
                                    $connection = mysqli_connect('localhost', 'root', '', 'hotel');
                                    $query = "SELECT * FROM users_email WHERE emial_verified_at IS NOT NULL";
                                    $query_run = mysqli_query($connection, $query);
                                    ?>
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th> ID </th>
                                                <th>User Name</th>
                                                <th>User Email</th>

                                                <th>DELETE</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if (mysqli_num_rows($query_run) > 0) {
                                                while ($row = mysqli_fetch_assoc($query_run)) {
                                                    ?>
                                                    <tr>
                                                        <td>
                                                            <?php echo $row['userid']; ?>
                                                        </td>

                                                        <td>
                                                            <?php echo $row['name']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['email']; ?>
                                                        </td>

                                                        <input type="hidden" name="edit_id"
                                                            value="<?php echo $row['userid']; ?>">


                                                        <td>
                                                            <form action="delete_for_users.php" method="POST">
                                                                <input type="hidden" name="delete_id"
                                                                    value="<?php echo $row['userid']; ?>">
                                                                <button type="submit" name="delete_btn" class="btn btn-danger">
                                                                    Delete</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                }
                                            } else {
                                                echo "No Record Found";
                                            }
                                            ?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>

                    </div>
                </section>

                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2023</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

</body>

</html>