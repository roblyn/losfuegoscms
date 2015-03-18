<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Musik i Kolding | Los Fuegos </title>
	<link rel="icon" type="image/ico" href="../static/Images/icon.png"/>
	<link rel="stylesheet" href="../foundation/css/app.css">
	<link rel="stylesheet" href="../foundation/css/foundation.css" />
    <script src="../foundation/js/vendor/modernizr.js"></script>
</head>
<body>
	<!-- menu -->
	<div class="contain-to-grid">
		<nav class="top-bar" data-topbar role="navigation">
			  <ul class="title-area">
			    <li class="name">
			      <h1><a href="#"></a></h1>
			    </li>
			    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
			  </ul>

		  <section class="top-bar-section">
		  	<?php  
		  	echo '
				 <div class="active drop-menu">
			    <ul class="right">		
					<li class="active">
					 <a class="button" data-dropdown="autoCloseExample" aria-controls="autoCloseExample" aria-expanded="false">Home&raquo;</a>
  						<ul  id="autoCloseExample" class="f-dropdown small" data-dropdown-content tabindex="-1" aria-hidden="true" aria-autoclose="false" tabindex="-1">
    					<li><a href="insert.php">Insert</a></li>
					 	 <li><a href="edit.php">Edit</a></li>
					 	 <li><a href="delete.php">Delete</a></li>
  					</ul>
					</li>

					<li class="active">
					 <a class="button" data-dropdown="autoCloseExample1" aria-controls="autoCloseExample" aria-expanded="false">Dates &raquo;</a>
  						<ul id="autoCloseExample1" class="f-dropdown" data-dropdown-content tabindex="-1" aria-hidden="true" aria-autoclose="false" tabindex="-1">
    				 <li><a href="Idate.php">Past</a></li>
    				 <li><a href="ndate.php">Upcoming</a></li>
  					</ul>
					</li>	   
			    <li class="active"><a href="index.php" target="_blank">HomePage</a></li>
			    </ul>
			    
			    </div>';
			     ?>
		  </section>
		</nav>
	</div>