<!DOCTYPE html>
<html>
	<head>
		<title>GOOD, Inc.</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap -->
		<link href="lib/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="lib/css/setup.css" rel="stylesheet" media="screen">
      <link href="lib/css/device-styles.css" rel="stylesheet" media="screen">
		<script src="lib/js/jquery-1.10.0.min.js"></script>
		<script src="lib/js/bootstrap.min.js"></script>
		<script src="lib/js/flowtype.js"></script>
		<script>
         jQuery(document).ready(function(){
         jQuery('body').flowtype();
         });
      </script>
	</head>
	<body>
    <div class="wrapper">
  		<div class="absolute">
  			<p class="p1">What does your pet look like?</p>
  			<p class="p4">(click next to skip)</p>
  		</div>


      <div class="con_container clearfix">
    		<div class="inputfields">
             <input class = "input inputIn" type="file" />
        </div>
      </div>

      <div class="footer">
        <div class="nav_container clearfix">
        	<div class="timeline">
            <div id="pager">
               <a href="#" class="">1</a>
               <a href="#" class="">2</a>
               <a href="#" class="">3</a>
               <a href="#" class="">4</a>
               <a href="page5.php" class="">5</a>
               <a href="#" class="activeSlide">6</a>
               <a href="page7.php" class="">7</a>
               <a href="#" class="">8</a>
               <a href="#" class="">9</a>
               <a href="#" class="">10</a>
               
            </div>
          </div>
        </div>

        <div class="but_container clearfix">
          <div class="back">
          		<a href="page5.php"><button class="button" type="button" class="btn btn-default btn-medium">BACK</button></a>
        	</div>
        	<div class="next">
          	<a href="page7.php"><button class="button" type="button" class="btn btn-default btn-medium">NEXT</button></a>
        	</div>  
        </div>
      </div>
    </div> 

	</body>
</html>