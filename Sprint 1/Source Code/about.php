<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>

<!DOCTYPE HTML>
<html>
<head>
<title>Find Your Perfect Adventure Partner | About :: Experience Together
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome----->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
</head>
<body>
<!-- ============================  Navigation Start =========================== -->
 <?php include_once("includes/navigation.php");?>
<!-- ============================  Navigation End ============================ -->
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">About</li>
     </ul>
   </div>
   <div class="about">
   	  <div class="col-md-6 about_left">
   	  	<img src="images/Let us Pursue.jpg" style="height: 750px; class="img-responsive" alt=""/>
   	  </div>
   	  <div class="col-md-6 about_right" style="padding-left: 0px;">
   	  	<h1>About us</h1>
   	  	<p>Let's Adventure is a adventurers community application that connects adventure enthuasiasts and turn them into adventure partners. 
					Based on the interests and hobbies, strangers get in touch with like minded explorers. Get to know their profiles, make plans and 
					Let's Adventure.. And experience together!</p>
   	  	<div class="accordation">
		   <div class="jb-accordion-wrapper">
				<div class="jb-accordion-title">Our Mission<button type="button" class="jb-accordion-button" data-toggle="collapse" data-target="#accordion-1-"><i class="fa fa-angle-down"> </i></button></div>
				<p><!-- /.accordion-title -->
				</p><div id="accordion-1-" class="jb-accordion-content collapse in" style="height: auto;">
				<p>To create a global adventure enthusiasts community based on the common interests and 
				help people experience the adrenaline rush together</p>
				</div>
				<p><!-- /.collapse --></p>
			</div>
			<div class="jb-accordion-wrapper">
				<div class="jb-accordion-title">Our Main Pillars<button type="button" class="jb-accordion-button" data-toggle="collapse" data-target="#accordion2-"><i class="fa fa-angle-down"> </i></button></div>
				<p><!-- /.accordion-title -->
				</p><div id="accordion2-" class="jb-accordion-content collapse ">
				<p>We strive to create meaningful adventure partners at a faster pace and provide a platform to expand the circle.</p>
				</div>
				<p><!-- /.collapse --></p>
			</div>
			<div class="jb-accordion-wrapper">
				<div class="jb-accordion-title">How Are We Different?<button type="button" class="jb-accordion-button" data-toggle="collapse" data-target="#accordion3"><i class="fa fa-angle-down"> </i></button></div>
				<p><!-- /.accordion-title -->
				</p><div id="accordion3" class="jb-accordion-content collapse ">
				<p>We find an adventure partner for you based on yout preferences and keep you rest assured and keep you out of unnecessary information.</p>
				</div>
				<p><!-- /.collapse --></p>
			</div>
		</div>
   	  </div>
   	  <div class="clearfix"> </div>
   </div>
  </div>
</div>
<?php include_once("footer.php");?>

</body>
</html>	