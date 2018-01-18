<!DOCTYPE HTML>
<html>
<?php include_once '../header.php'; ?>
</head>
<body>
<!-- header -->
<header role="header">
    <?php include_once 'nav.php'; ?>
</header>
 <!-- header -->

<!-- main -->
<main role="main-inner-wrapper" class="container">
    <div class="row">
    	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
        	<article role="pge-title-content" class="contact-header">
            	<header>
                	<h2><span>Contact Us</span></h2>
                </header>
                <p>3501-3505, Rue Griffith, Saint-Laurent<br>QC, Canada, H4T 1W5</p>
                <p>&nbsp;</p>
                <p>
                    <a href="tel:514-733-5858">
                        <i class="fa fa-phone" aria-hidden="true"></i> +514-733-5858
                    </a>
                    <a href="mailto:contact@cmsci.ca">
                        <i class="fa fa-envelope" aria-hidden="true"></i> contact@cmsci.ca
                    </a>
                </p>
            </article>
        </div>
        <!-- map -->
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="demo-wrapper">
                	<div id="surabaya"></div>
                </div>
        </div>
        <!-- map -->
        <div class="clearfix"></div>
       <!-- contat-from-wrapper -->
<!--        <div class="contat-from-wrapper">
       		  <div id="message"></div>
                        <form method="post" action="php/contactfrom.php" name="cform" id="cform">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                        <input  name="name" id="name" type="text" placeholder="Whats your name">
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                        <input  name="email" id="email" type="email"  placeholder="Whats your email">
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <textarea name="comments" id="comments" cols="" rows="" placeholder="Whats in your mind"></textarea>
                    <div class="clearfix"></div>
                    <input name="" type="submit" value="Send email">
                    <div id="simple-msg"></div>
                </form>
       </div> -->
   <!-- contat-from-wrapper -->
    </div>
</main>
<!-- main -->
<!-- footer -->
<?php include_once 'footer.php'; ?>
<!-- footer --> 
<script src="../js/jquery.contact.js" type="text/javascript"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAb41e6KKYlbNzFtOEPXDIwSO4pmNEyB8g&callback=initMap"></script>
<script src="../js/maps.js" type="text/javascript"></script>
</body>
</html>