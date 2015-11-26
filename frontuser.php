<?php
$status = session_status();

//echo $status;
?>
<!DOCTYPE html>
<html>
<head>
<link type="text/css" rel='stylesheet' href='style.css'/>
<link href="http://s3.amazonaws.com/codecademy-content/courses/ltp2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="jumbotron">
	<a href= "frontpage.php"> <img class="logo" src="greenCart.jpg"> </a>	
	<p class="title"> shopCart - USER PAGE</p>
	<?php echo "<p style='color:white'> Welcome, " . $_SESSION['username']. "! </p>"?>	
</div>
<div class="container">

</div>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
		<h3>Ultimate Twix!</h3>
		<img class="img-thumbnail" width="304" height="236" src = "http://www.chocolate-brands.com/image/cache/data/Mars/mars-twix-display-500x500.jpg">
		<p class="well">Price: $4.99/ea 
		<button type="button" style="float:right" class="btn btn-success">
		<span class="glyphicon glyphicon-plus"></span>
		</button>
		</p>
    </div>
    <div class="col-sm-4">
		<h3>Kit Kat Chunky!</h3>
		<img class="img-thumbnail" width="304" height="236" src = "http://thumbs1.ebaystatic.com/d/l225/m/mZs9BTHDJ3Nn5aP1UOBGIcA.jpg">
		<p class="well">Price: $3.99/ea 
		<button type="button" style="float:right" class="btn btn-success">
		<span class="glyphicon glyphicon-plus"></span>
		</button>
		</p>
    </div>
    <div class="col-sm-4">
		<h3>Mars Bar Xtreme!</h3> 
		<img class="img-thumbnail" width="304" height="236" src = "http://www.candywarehouse.com/assets/item/large/image-130632.jpg">
		<p class="well">Price: $4.99/ea 
		<button type="button" style="float:right" class="btn btn-success">
		<span class="glyphicon glyphicon-plus"></span>
		</button>
		</p>
    </div>
  </div>
</div>
<!--<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Kinder Bueno Bundle!</h3>
	  <img class="img-thumbnail" width="304" height="236" src = "http://i.ebayimg.com/images/i/271631270771-0-1/s-l1000.jpg">
	  <p>Price: $5.99/ea</p>
	</div>
    <div class="col-sm-4">
      <h3>Smarties Supreme!</h3>
	  <img class="img-thumbnail" width="304" height="236" src = "http://www.vzhh.de/upload/VerbraucherzentraleHamburg/images/ernaehrung/Nestle_Smarties_158_vorn_klein.jpg">
	  <p>Price: $6.99/ea</p>
    </div>
    <div class="col-sm-4">
      <h3>M & M Madness!</h3>
	  <img class="img-thumbnail" width="304" height="236" src = "http://ep.yimg.com/ay/blaircandy/m-m-s-candy-48ct-plain-21.jpg">
	  <p>Price: $7.99/ea</p> 
    </div>
  </div>
</div>
-->
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
</body>
</html>