 <!DOCTYPE html>
<html lang="en">
<head>
  <title>The Pastry Shop</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<?php
   			include('header.php');
			include('footer.php');
   		?>
<style>
.width {
	width:100%;
	height:20%;
	}
.padding {
	padding: 0px;
	}
.pageContentWrapper {
  margin-bottom:-23px;
	}	
.jumbotron {
	margin-bottom: 0px;
	 }
.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  width:200px;
  color: #fff;
  background-color: #FBB654;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}
.button:hover {background-color: #FF9B2C;}

.button:active {
  background-color: #F3B911;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}	
.row {
	text-align:center;
} 	
</style>

</head>
<body>
<section class="width padding">

  <div id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li class="item1 active"></li>
      <li class="item2"></li>
      <li class="item3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="media\images\un1.jpg" width="1920" height="350">
      </div>

      <div class="item">
        <img src="media\images\un3.jpg" width="1920" height="350">
      </div>
    
      <div class="item">
        <img src="media\images\un2.jpg" width="1920" height="350">
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

</section>

<script>
$(document).ready(function(){
    // Activate Carousel
    $("#myCarousel").carousel({interval: 5000, pause: "hover"});
    
    // Enable Carousel Indicators
    $(".item1").click(function(){
        $("#myCarousel").carousel(0);
    });
    $(".item2").click(function(){
        $("#myCarousel").carousel(1);
    });
    $(".item3").click(function(){
        $("#myCarousel").carousel(2);
    });
        
    // Enable Carousel Controls
    $(".left").click(function(){
        $("#myCarousel").carousel("prev");
    });
    $(".right").click(function(){
        $("#myCarousel").carousel("next");
    });
});
</script>


<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4">
      <h3>Promotions</h3>
      <button class="button" href="">Click</button>
    </div>
    <div class="col-sm-4">
      <h3>Order Online</h3>
      <a href="order.php"><button class="button" >Click</button></a>
    </div>
    <div class="col-sm-4">
      <h3>Hot Pick</h3>        
      <button class="button">Click</button>
    </div>
  </div>
</div>
<br/><br/>

</body>
</html>
