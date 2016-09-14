<!DOCTYPE html>
<html lang="en">
<head>
  <title>The Pastry Shop | Order</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  		<?php
   			include('header.php');
			include('footer.php');
   		?>
<style>
.pageContentWrapper {
  margin-bottom:-23px;
	}	
.jumbotron {
	margin-bottom: 0px;
	 }	
</style>
   
   </head>
<body>

<div class="container">
  <h2>Dynamic Tabs</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Cakes</a></li>
    <li><a data-toggle="tab" href="#menu2">Pastrys</a></li>
    <li><a data-toggle="tab" href="#menu3">Beverages</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>HOME</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Cakes</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Pastrys</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Beverages</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
</div>

</body>
</html>
