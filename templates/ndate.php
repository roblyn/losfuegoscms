<?php 
include("cmsmenu.php");
include("header.php");
include("db.php");
	$con=mysql_query("select * from ndate");
	$reg=mysql_fetch_array($con);

 ?>


<section class="row">
		<section class="content small-12 medium-12 large-8 columns border-right font text-justify">

			<article class="border-bottom row">

				<h2>New Date</h2>
					<form action="" enctype="multipart/form-data" method="POST">
						<input type="date" name="ndate"	placeholder="Date"><br><br>
						<textarea name="nplace" id="nplace" placeholder="Where is the Concert" cols="30" rows="10"></textarea><br><br>
						<input type="submit" name="nsave" Value="Save">
					</form>
					<!-- Insertar Datos -->
					<?php 
				if ($_POST ['nsave']){

					$nda=$_POST['ndate'];
					$npl=$_POST['nplace'];
									mysql_query("insert into ndate(date,place) values('$nda','$npl')") 
									or die(mysql_error());
									echo "<script>alert('Update');</script>";
								} 

					?>
			<!-- End Insertar Datos -->
			</article>

		<!-- Edit info -->	
		<article class="row">
		<form class="border-bottom" action="" method="post">
				 <h2>Edit Upcoming Date</h2>
			<select name="ndates">
				<?php 
					do {
						$id=$reg['id'];
						$title=$reg['place'];
						$plac=$reg['date'];
					?>
				<option  value="<?php echo $id;?>">
					<?php 
						echo $title;
						echo $plac;
					 ?>
				</option>
				<?php 
					}while($reg=mysql_fetch_array($con));
				 ?> 
			</select>
				<input type="submit" name="edit" value="Edit">
		</form>
	
	<?php 
		if(isset ($_POST['edit'])){
			$p=$_POST['ndates'];
			$con1=mysql_query("select * from ndate where id='$p'") or die(mysql_error());
			$reg1=mysql_fetch_array($con1);
				$date=$reg1['date'];
				$place=$reg1['place'];
	 ?>

	</article>
		<form action="" method="post">
	 		Date: <input type="date" name="date" value="<?php echo $date?>"><br>
	 		Place: <textarea name="place" id="" cols="30" rows="10"><?php echo $place?></textarea>
			<input type="hidden" name="id" value="<?php echo $p;  ?>">
	 		<input type="submit" name="update" value="Update">

		</form>
	 	<?php 
	 		}
		?>

	 	<?php 
	 		if(isset($_POST['update'])){
	 			$id=$_POST['id'];
	 			$nd=$_POST['date'];
	 			$nc=$_POST['place'];

	 			$query = "update ndate set date='$nd', place='$nc' 
	 			where id='$id'";
	 			mysql_query ($query) or die (mysql_error());
				echo "<script> alert('Base de datos actualizada');</script>";
	 		}
	 	 ?>
<!-- end Edit info -->

<!-- delete -->
<?php  
include("db.php");
	$con2=mysql_query("select * from ndate");
	$reg2=mysql_fetch_array($con2);

 ?>
<article class="row">
	<script>
 		function eliminar (){
 		if(confirm("Do you want delete this post?")){

 			endates.submit();
		}else{
			alert("Post not deleted")
		}
	}
 </script>

	<article class="border-bottom row">
		<form method="post">
	 	 <h2>Erase Post</h2>
	 	 <select name="endates">
				<?php 
					do {
						$id=$reg2['id'];
						$title=$reg2['date'];
						$pla=$reg2['place'];
					?>
				<option value="<?php echo $id;?>">
					<?php 
						echo $title;
						echo $pla;
					 ?>
				</option>
				<?php 
					}while($reg2=mysql_fetch_array($con2));
				 ?> 
			</select>
			<input type="submit" name="delete" Value="Delete" onclick="eliminar()">
			</form>
</article>	 	 
<?php 
	 	 if (isset($_POST['endates'])){
	 	 	$p=$_POST['endates'];
	 	 	mysql_query("delete from ndate where id='$p'") or die(mysql_error());
	 	 	echo "<script>alert('Post delete');</script>";

	 	 } 
	 	 ?>

</article>

<!-- End Delete -->



</section>

		<?php
			include("sidebar.php")
		?>

<!-- END SIDEBAR -->
	</section>
<!-- END CONTENT -->
<!-- FOOTER -->
			<?php
			include("footer.php")
			?>
<!-- END FOOTER -->
		
