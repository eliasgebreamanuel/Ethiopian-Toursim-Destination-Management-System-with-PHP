<?php


include('Connection.php');
if(isset($_POST['login'])){
   if(!empty($_POST['uname']) && !empty($_POST['pass'])){
        $user = $_POST['uname'];
        $pass = $_POST['pass'];
        $sql = "select * from users_email";
        $result = mysqli_query($conn, $sql);
        if($result){
            while($row = mysqli_fetch_assoc($result)){
                $dbusername = $row['name'];
                $dbpassword = $row['password'];
                if($dbusername == $user && $dbpassword == $pass){
                    echo 'Login successfull';
                    session_start();
                    $_SESSION['user'] = $dbusername;
                    header("location: last.php");
                }else{
                    echo 'usename or password is not correct';
                }
            }
        }
        else{
            die(mysqli_error($conn));
        }
   }else{
    echo 'All fields are required';
   } 
}

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <style>
      
    </style>
</head>

<body>
    <!-- <form method="POST">
        <input type="email" name="email" placeholder="Enter email" required />
        <input type="password" name="password" placeholder="Enter password" required />

        <input type="submit" name="login" value="Login">
    </form> -->

    <!-- contact form -->
    <!-- form-control, form-label, form-select, input-group, input-group-text -->
    <section id="contact">
        <p class = "text-center fw-bold display-1">Welcome To TMS</p>
        <div class="container-lg">
            <div class="row justify-content-center my-5">
                <div class="col-lg-6">

                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" onsubmit="myFunc2()">
                        <label for="email" class="form-label">Username:</label>
                        <div class="input-group mb-4">
                            <span class="input-group-text">
                                <i class="bi bi-envelope-fill text-secondary"></i>
                            </span>
                            <input type="text" id="email" name="uname" class="form-control" placeholder="e.g. mario@example.com" />
                        </div>
                        <label for="name" class="form-label">Password:</label>
                        <div class="mb-4 input-group">
                            <span class="input-group-text">
                                <i class="bi bi-lock"></i> </span>
                            <input type="password
                            " id="name" name="pass" class="form-control" placeholder="e.g. Mario" />
                        </div>

                        <div class="mb-4 text-center">
                            <input class = "btn btn-success" type="submit" name="login" value="Login">
                        </div>
                    </form>
                    


                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>