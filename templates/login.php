<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Musik i Kolding | Los Fuegos </title>
	<link rel="icon" type="image/ico" href="../static/Images/icon.png"/>
</head>
<body>




<style>

body{
	background-color: #6fccdd;
}
.row{
	text-align: center;
}
.datos {
	width: 15em;
	height:2.5em;
};


</style>
<body>
<section class="row">
	<article>
		<?php
						echo '<img class="logo" src="../static/Images/Logo.png" width=
						"50%" alt="Musik i Kolding">';
					?>
	</article>
	<section class="content small-12 medium-12 large-8 columns border-right font text-justify">
	<article class=" row">

<form action="handler.php" method="get">
            <input class="datos" type="text" name="username" placeholder="Username" /><br><br>
            <input class="datos" type="password" name="pwd" placeholder="Password" /><br><br>
            <input type="submit" value="login"/>
        </form>
</form>
</article>	
</section>
	</section>
</body>


