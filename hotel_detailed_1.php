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

</head>

<body class = "">



<div class="container-fluid my-5">
    <h2>responsive column widths</h2>
    <div class="row gy-3"> <!-- manually change gutter using g{d}-{n} -->
      <div class="col-sm-4 col-lg-6">
        <img class = "img-fluid " style = "height: 300px; width: 600px;" src = "./assets/download.jpg" >
        <p>Some description here </p>
        <p>Name of the hotel</p>
        <p>Location of the hotel</p>
        <p>Type of the hotel<p>

    </div>
      <div class="col-sm-4 col-lg-6">
        <h2>Hotel Description</h2>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat consectetur iusto nihil minus explicabo voluptas ex, molestias, consequatur error perspiciatis delectus dolor excepturi hic, iure id voluptate dignissimos ut voluptatem laborum rem. Suscipit perferendis nobis rem modi, perspiciatis sed reiciendis vel laudantium facilis voluptatem saepe nihil praesentium quis sint deleniti.</p>
        <hr>
        <h3>Add a comment about our hotel</h3>
        <form method='POST' class="card col-sm-2 col-lg-4 form-inline" action=''>
        <?php
  
    ?>
                  <div class = "comment_class">

            <!-- <?php foreach ($first_hotel_comments as $comment) { ?> -->
              <p>
                <!-- <?php  echo $comment['uid']; ?> : 
               
              <?php echo $comment['message']; ?> -->
            
            </p>
                <!-- <?php } ?> -->
                </div>

      <br />
        <input type="hidden" name="uid" value="<?php $_SESSION['user'] ?>">
        <!-- <input type="hidden" name="date" value='".date(' Y-m-d H:i:s')."'> -->
        
        <input type="text" name="message" placeholder="comment as <?php echo $_SESSION['user'] ?> :( " />
        <button class="btn btn-success " name="comment_submit" type="submit">Post</button>
    </form>



    </div>
  
    </div>
  </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>