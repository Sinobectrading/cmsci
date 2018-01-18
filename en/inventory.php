<!DOCTYPE HTML>
<html>

<?php include_once '../header.php'; ?>
<link href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
<style>
#inv article[role="pge-title-content"].blog-header {
    padding-bottom: 10px
}
#inv article[role="pge-title-content"] header h2 span {
    font-size: 40px
}
</style>
</head>
<body>
<!-- header -->
<header role="header">
    <?php include_once 'nav.php'; ?>
</header>
 <!-- header -->

<!-- main -->

<main role="main-inner-wrapper" class="container" id="inv">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="grid">
        	<article role="pge-title-content" class="blog-header">
            	<header>
                	<h2><span>Inventory Tracking</span></h2>
                </header>
               <!--  <p>Get all information about our studio from latest news posts & updates page.</p> -->
            </article>
        </div>

 
        <div class="col-md-12 clearfix">
            <table id="track"  cellpadding="0" cellspacing="0" border="0" class="display table" width="100%">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Height</th>
                        <th>Width</th>
                        <th>Thickness</th>
                        <th>Length</th>
                        <th>Alloyt</th>
                        <th>Surface</th>
                        <th>Color</th>

                        <th>Qty</th>
                        <th>Unit</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

</main>

<!-- main -->

<!-- footer -->
<footer role="footer">
    <!-- logo -->
    <h1>
        <a href="index.php" title="CMSCI"><img src="../images/logo.png" title="cmsci" alt="cmsci"/></a>
    </h1>
    <!-- logo -->
    <!-- nav -->
    <nav role="footer-nav">
        <ul>
            <li><a href="index.php" title="Work">Work</a></li>
            <li><a href="about.php" title="About">About</a></li>
            <li><a href="product.php" title="Blog">Product</a></li>
            <li><a href="contact.php" title="Contact">Contact</a></li>
        </ul>
    </nav>

    <!-- nav -->
    <ul role="social-icons">
        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-flickr" aria-hidden="true"></i></a></li>
    </ul>

    <p class="copy-right">&copy; 2016 CMSCI All rights Resved</p>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<!-- custom -->
<script src="../js/effects/imagesloaded.js"  type="text/javascript"></script>
<script src="../js/custom.js" type="text/javascript"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../js/bootstrap.min.js" type="text/javascript"></script>
<script src="../js/effects/AnimOnScroll.js"  type="text/javascript"></script>
<script src="../js/effects/modernizr.custom.js"></script>
<!-- footer --> 
<script src="../js/ajaxtable.min.js" type="text/javascript"></script>

<script type="text/javascript" language="javascript" >
$(document).ready(function() {
     var dataTable = $('#track').DataTable({
          "processing": true,
          // "columnDefs": [
          //           {className: "col-xs-12", "targets": '_all'}
          //         ],
          "serverSide": true,
           "ajax":{
               url :"inv.php", // json datasource
               type: "post",  // method  , by default get
               error: function(){  
                    $(".error").html("");
                    $("#inventory-grid").append('<tbody class="inventory-grid-error"><tr><th colspan="10">No data found in the server</th></tr></tbody>');
                    $("#inventory-grid_processing").css("display","none");
               }
          }            
    });

});
</script>
<script src="../js/nav.js" type="text/javascript"></script> 

</body>
</html>