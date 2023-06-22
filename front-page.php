<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Blog Site Template</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Site Template">
    <meta name="author" content="https://youtube.com/FollowAndrew">    
    <link rel="shortcut icon" href="images/logo.png"> 
    
    <!-- FontAwesome CSS-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<!-- Bootstrap CSS-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">  
	<!-- Theme CSS -->
	<link rel="stylesheet" href="style.css">

</head> 

<body>
   <?php 
	get_header()
;   ?>
    
    <div class="main-wrapper">
		<?php $text = get_field('test_text') ?>
	    <header class="page-title theme-bg-light text-center gradient py-5">
			<h1 class="heading">Is my site working?</h1>
			<p><?php the_field('test_text'); ?></p>
		</header>
		<article class="content px-3 py-5 p-md-5">
	    <div class='container'>
			<p class="mt-3 lead">About me paragraph or something like that </p>

			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
				  <div class="carousel-item active">
					<img src="images/slider2.jpg" class="d-block w-100" alt="1">
				  </div>
				  <div class="carousel-item">
					<img src="images/slider1.jpg" class="d-block w-100" alt="2">
				  </div>
				  <div class="carousel-item">
					<img src="images/slider3.jpg" class="d-block w-100" alt="3">
				  </div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				  <span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				  <span class="carousel-control-next-icon" aria-hidden="true"></span>
				  <span class="sr-only">Next</span>
				</a>
			  </div>
			  <section class="theme-bg-dark py-5 mt-4 text-center">
				<h3 class='text-light d-block'>Subscribe to the Newsletter</h3>
			    <form class="signup-form form-inline justify-content-center pt-3">
                    <div class="form-group">
                        <label class="sr-only" for="semail">Your email</label>
                        <input type="email" id="semail" name="semail1" class="form-control mr-md-1 semail" placeholder="Enter email">
                    </div>
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>
				</section>
			<div class="row row-cols-1 mt-4 row-cols-md-2">
				<div class="col mb-4">
				  <div class="card">
					<div class="card-body">
					  <h5 class="card-title">Card title</h5>
					  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					</div>
				  </div>
				</div>
				<div class="col mb-4">
				  <div class="card">
					<div class="card-body">
					  <h5 class="card-title">Card title</h5>
					  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					</div>
				  </div>
				</div>
		</div>
	    </article>
	    <footer class="footer text-center py-2 theme-bg-dark">
		   
            <p class="copyright"><a href="https://youtube.com/FollowAndrew">FollowAndrew</a></p>
		   
	    </footer>
    
    </div>
    
	<?php 
	get_footer();
	?>
    
    <!-- Bootstrap Javascript -->          
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="js/main.js"></script>

</body>
</html> 

