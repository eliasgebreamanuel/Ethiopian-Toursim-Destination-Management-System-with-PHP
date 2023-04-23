<?php
?>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Responsive Owl Carousel | Free Download</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
	<section id="slider" class="pt-5">
		<div class="container">
			<h1 class="text-center">These are the best destinations in Ethiopia</h1>
			<div class="slider">
				<div class="owl-carousel">

					<?php
					// this is used to make the connection to the database
					include('databases/database.php');
					$sql = "SELECT * FROM destination_home_page";
					$result = mysqli_query($connect, $sql);
					$destinations = mysqli_fetch_all($result, MYSQLI_ASSOC);

					?>

					<div class="slider-card">
						<div class="d-flex justify-content-center align-items-center mb-4">
							<img src="./image/Lalibella2.jpg" alt="">
						</div>
						<h5 class="mb-0 text-center"><b>Lalibella</b></h5>
						<!-- <p class="text-center p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam temporibus quidem magni qui doloribus quasi natus inventore nisi velit minima.</p> -->
					</div>
					<div class="slider-card">
						<div class="d-flex justify-content-center align-items-center mb-4">
							<img src="./image/gondar3.jpeg" alt="">
						</div>
						<h5 class="mb-0 text-center"><b>Gonder</b></h5>
						<!-- <p class="text-center p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam temporibus quidem magni qui doloribus quasi natus inventore nisi velit minima.</p> -->
					</div>
					<div class="slider-card">
						<div class="d-flex justify-content-center align-items-center mb-4">
							<img src="./image/Simien mountains.jpeg" alt="">
						</div>
						<h5 class="mb-0 text-center"><b>Simien Mountains</b></h5>
						<!-- <p class="text-center p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam temporibus quidem magni qui doloribus quasi natus inventore nisi velit minima.</p> -->
					</div>
					<div class="slider-card">
						<div class="d-flex justify-content-center align-items-center mb-4">
							<img src="./image/aksum2.jpeg" alt="">
						</div>
						<h5 class="mb-0 text-center"><b>Aksum</b></h5>
						<!-- <p class="text-center p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam temporibus quidem magni qui doloribus quasi natus inventore nisi velit minima.</p> -->
					</div>
					<div class="slider-card">
						<div class="d-flex justify-content-center align-items-center mb-4">
							<img src="./image/omo vally2.jpeg" alt="">
						</div>
						<h5 class="mb-0 text-center"><b>Omo Vally</b></h5>
						<!-- <p class="text-center p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam temporibus quidem magni qui doloribus quasi natus inventore nisi velit minima.</p> -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/script.js"></script>
</body>

</html>