<?php 
include("cmsmenu.php");
include("header.php");
?>
<?php
include("db.php");
	$con=mysql_query("select * from content");
	$reg=mysql_fetch_array($con);
 ?>
<script>
 		function eliminar (){
 		if(confirm("Do you want delete this post?")){

 			news.submit();
		}else{
			alert("Post not deleted")
		}
	}
 </script>
 <!-- Erease -->
<section class="row">
	<section class="content small-12 medium-12 large-8 columns border-right font text-justify">
	<article class=" row">
		<form method="post">
	 	 <h2>Erase Post</h2>
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
			<input type="submit" name="delete" Value="Delete" onclick="eliminar()">
			</form>
</article>	 	 
<?php 
	 	 if (isset($_POST['news'])){
	 	 	$p=$_POST['news'];
	 	 	mysql_query("delete from content where id='$p'") or die(mysql_error());
	 	 	echo "<script>alert('Post delete');</script>";

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



