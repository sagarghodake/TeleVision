<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_GET['action']) && $_GET['action']=="add"){
	$id=intval($_GET['id']);
	if(isset($_SESSION['cart'][$id])){
		$_SESSION['cart'][$id]['quantity']++;
	}else{
		$sql_p="SELECT * FROM products WHERE id={$id}";
		$query_p=mysqli_query($con,$sql_p);
		if(mysqli_num_rows($query_p)!=0){
			$row_p=mysqli_fetch_array($query_p);
			$_SESSION['cart'][$row_p['id']]=array("quantity" => 1, "price" => $row_p['productPrice']);
			header('location:index.php');
		}else{
			$message="Product ID is invalid";
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
	    <meta name="keywords" content="MediaCenter, Template, eCommerce">
	    <meta name="robots" content="all">

	    <title>Home Page</title>

	    <!-- Bootstrap Core CSS -->
	    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	    
	    <!-- Customizable CSS -->
	    <link rel="stylesheet" href="assets/css/main.css">
	    <link rel="stylesheet" href="assets/css/green.css">
	    <link rel="stylesheet" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/css/owl.transitions.css">
		<!--<link rel="stylesheet" href="assets/css/owl.theme.css">-->
		<link href="assets/css/lightbox.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<link rel="stylesheet" href="assets/css/rateit.css">
		<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">

		<!-- Demo Purpose Only. Should be removed in production -->
		<link rel="stylesheet" href="assets/css/config.css">

		<link href="assets/css/green.css" rel="alternate stylesheet" title="Green color">
		<link href="assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
		<link href="assets/css/red.css" rel="alternate stylesheet" title="Red color">
		<link href="assets/css/orange.css" rel="alternate stylesheet" title="Orange color">
		<link href="assets/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/images/favicon.ico">

	</head>
    <body class="cnt-home">
	
		
	
		<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1">
<?php include('includes/top-header.php');?>
<?php include('includes/main-header.php');?>
<?php include('includes/menu-bar.php');?>
</header>

<!-- ============================================== HEADER : END ============================================== -->
<div class="body-content outer-top-xs" id="top-banner-and-menu">
	<div class="container">
		<div class="furniture-container homepage-container">
		<div class="row">
		
			<div class="col-xs-12 col-sm-12 col-md-3 sidebar">
				<!-- ================================== TOP NAVIGATION ================================== -->
	<?php include('includes/side-menu.php');	?>

<!-- ================================== TOP NAVIGATION : END ================================== -->
			</div><!-- /.sidemenu-holder -->	
			
			<div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
				<!-- ========================================== SECTION – HERO ========================================= -->
			
<div id="hero" class="homepage-slider3">
	<div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
		<div class="full-width-slider">	
			<div class="item" style="background-image: url(sliders/slider.jpg);">
				<!-- /.container-fluid -->
			</div><!-- /.item -->
		</div><!-- /.full-width-slider -->
	    
	    <div class="full-width-slider">
			<div class="item full-width-slider" style="background-image: url(sliders/slider1.jpg);">
			</div><!-- /.item -->
		</div><!-- /.full-width-slider -->
		
		<div class="full-width-slider">
			<div class="item full-width-slider" style="background-image: url(sliders/slider2.jpg);">
			</div><!-- /.item -->
		</div>
		<div class="full-width-slider">
			<div class="item full-width-slider" style="background-image: url(sliders/slider3.jpg);">
			</div><!-- /.item -->
		</div><div class="full-width-slider">
			<div class="item full-width-slider" style="background-image: url(sliders/slider4.jpg);">
			</div><!-- /.item -->
		</div><div class="full-width-slider">
			<div class="item full-width-slider" style="background-image: url(sliders/slider5.jpg);">
			</div><!-- /.item -->
			
		</div>
				
	</div><!-- /.owl-carousel -->
</div>
			
<!--============================================== INFO BOXES : END ============================================== -->		
			</div><!-- /.homebanner-holder -->
			
		</div><!-- /.row -->

		 <hr class="botm-line">   
		<br><br>


           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="http://localhost/myproject/shopping/category.php?cid=7">
                                <img src="tv/sam1.jpg" alt=""></a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize"><b>Samsung TV's<b></p>
                                        <p>Choose The Best One TeleVision</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="http://localhost/myproject/shopping/category.php?cid=8">
                               <img src="tv/sony3.jpg" alt="">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize"><b>Sony TV's<b> </p>
                                    <p>Always Choice is yours</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="http://localhost/myproject/shopping/category.php?cid=12">
                               <img src="tv/pana1.jpg" alt="">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize"><b>Panasonic Tv's<b></p>
                                   <p>Panasonic Amazing Picture Quality</p>
                               </div>
							   
                           </center>
                       </div>
                   </div>
				   
				    <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="http://localhost/myproject/shopping/category.php?cid=9">
                               <img src="philips.jpg" alt="">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize"><b>Philips Tv's<b></p>
                                   <p>Ultra Viewing Experience<br>Art Of Work</p>
                               </div>
							   
                           </center>
                       </div>
                   </div>               <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="http://localhost/myproject/shopping/category.php?cid=11">
                               <img src="LG.jpg" alt="">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize"><b>LG Tv's<b></p>
                                   <p>Life Goods with TeleVision</p>
                               </div>
							   
                           </center>
                       </div>
                   </div>               <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="http://localhost/myproject/shopping/category.php?cid=13">
                               <img src="micromax.jpg" alt="">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize"><b>Micromax Tv's<b></p>
                                   <p>Full of Joy & Entertainment</p>
                               </div>
							   
                           </center>
                       </div>
                   </div>
	               </div>
				</div>
        <hr class="botm-line">
<br><br>
			
	 		<img src="screen.jpg" height="550" width="1200";
			
			<br><br>
			<br><center><h3><p>“If there’s only room for one television in your house, make it this one."<p><h3></center>
				<center><h3><p>“TV is like theater. You can't enjoy it without a program."<p><h3></center>
			
		 <div class="container">
	  

 <hr class="botm-line">
<br>

<?php include('includes/brands-slider.php');?>
</div>
</div>
<?php include('includes/footer.php');?>
	
	<script src="assets/js/jquery-1.11.1.min.js"></script>
	
	<script src="assets/js/bootstrap.min.js"></script>
	
	<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	
	<script src="assets/js/echo.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
	<script src="assets/js/bootstrap-slider.min.js"></script>
    <script src="assets/js/jquery.rateit.min.js"></script>
    <script type="text/javascript" src="assets/js/lightbox.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
	<script src="assets/js/scripts.js"></script>

	<!-- For demo purposes – can be removed on production -->
	
	<script src="switchstylesheet/switchstylesheet.js"></script>
	
	<script>
		$(document).ready(function(){ 
			$(".changecolor").switchstylesheet( { seperator:"color"} );
			$('.show-theme-options').click(function(){
				$(this).parent().toggleClass('open');
				return false;
			});
		});

		$(window).bind("load", function() {
		   $('.show-theme-options').delay(2000).trigger('click');
		});
	</script>
	<!-- For demo purposes – can be removed on production : End -->

	

</body>
</html>