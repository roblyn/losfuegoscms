<?php 
include("cmsmenu.php");
include("header.php");
?>
<?php
include("db.php");
	$con=mysql_query("select * from content");
	$reg=mysql_fetch_array($con);
 ?>

 <section class="row">
	<section class="content small-12 medium-12 large-8 columns border-right font text-justify">
	<article class=" row">
		<form action="" method="post">
				 <h2>Edit Post</h2>
			<select name="news">
				<?php 
					do {
						$id=$reg['id'];
						$title=$reg['title'];
					?>
				<option value="<?php echo $id;?>">
					<?php 
						echo $title
					 ?>
				</option>
				<?php 
					}while($reg=mysql_fetch_array($con));
				 ?> 
			</select>
				<input type="submit" name="edit" value="Edit">
		</form>
		<!-- Edit info -->
	<?php 
		if(isset ($_POST['edit'])){
			$p=$_POST['news'];
			$con1=mysql_query("select * from content where id='$p'") or die(mysql_error());
			$reg1=mysql_fetch_array($con1);
				$title=$reg1['title'];
				$date=$reg1['date'];
				$comment=$reg1['text'];
				$image=$reg1['image'];
	 ?>
<!-- end Edit info -->
	</article>
		<form action="edit.php" method="post">
	 		Title: <input name="title" value="<?php echo $title?>"><br>
	 		Date: <input type="date" name="date" value="<?php echo $date?>"><br>
	 		Comments: <textarea name="comments" id="" cols="30" rows="10"><?php echo $comment ?></textarea>
			<input type="hidden" name="id" value="<?php echo $p;  ?>">
	 		<input type="submit" name="update" value="Update">

		</form>
	 	<?php 
	 		}
		?>

	 	<?php 
	 		if(isset($_POST['update'])){
	 			$id=$_POST['id'];
	 			$t=$_POST['title'];
	 			$d=$_POST['date'];
	 			$c=$_POST['comments'];

	 			$query = "update content set title='$t', date='$d', text='$c' 
	 			where id='$id'";
	 			mysql_query ($query) or die (mysql_error());
				echo "<script> alert('Base de datos actualizada');</script>";
	 		}
	 	 ?>
	 	 
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


