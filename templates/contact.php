<?php
include("menu.php");
include("header.php");


?>
	<section class="row">
		<section class="content small-12 medium-12 large-7 columns  border-right">
				
				<article class="row">
					<?php 
					echo " 
					<h2>Booking</h2>
					<h3>contact@losfuegos.dk</h3><br>
					<h2>Management</h2>
					<p>Julian Maraboto<br>	
					+45 27 50 06 11 <br> <br>	
					Mario Casas <br>
					+45 71 34 93 81</p>";
					?>
				</article>
		</section>
		<section class="content small-12 medium-12 large-5 columns">
		<!-- SIDEBAR -->


			<form action="contactform.php" method="POST">
			<input type="text" name="title" placeholder="Title*"><br>
			<input type="email" name="email"	placeholder="Email*"><br>
			<textarea name="comments" id="comments" placeholder="Comments*" cols="30" rows="10"></textarea><br>
			<input class="button" type="submit" name="send" Value="Send">
		</form>
	</section>
	 <?php 



	  ?>

	

<!-- END SIDEBAR -->
	</section>
<!-- END CONTENT -->

<?php
include("footer.php")
?>
