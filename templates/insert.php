
<?php 
include("cmsmenu.php");
include("header.php");
include("db.php");
 ?>

<section class="row">
	<section class="content small-12 medium-12 large-8 columns border-right font text-justify">
	<article class=" border-bottom row">
			<h2>Banner Picture</h2>
		<form action="" enctype="multipart/form-data" method="POST">
			<input type="file" name="banner"><br><br>
			<input type="submit" name="guardar" Value="Save">
		</form>

<?php 
	if ($_POST ['guardar']){

		
		$arr2 = explode('.', $_FILES['banner']['name']);
		$_FILES['banner']['name'] = uniqid() . '.' . $arr2[1];
		$banner=$_FILES['banner']['name'];
		

				// Check for errors
				if($_FILES['banner']['error'] > 0){
				    die('An error ocurred when uploading.');
				}
				 
				if(!getimagesize($_FILES['banner']['tmp_name'])){
				    die('Please ensure you are uploading an image.');
				}
				 
				// Check filetype
				if($_FILES['banner']['type'] != 'image/png'){
				    die('Unsupported filetype uploaded.');
				}
				 
				// Check filesize
				if($_FILES['banner']['size'] > 5000000){
				    die('File uploaded exceeds maximum upload size.');
				}
				 
				// Check if the file exists
				if(file_exists('upload/' . $_FILES['banner']['name'])){
				    die('File with that name already exists.');
				}
				 
				// Upload file
				if(!move_uploaded_file($_FILES['banner']['tmp_name'], 'upload/' . $_FILES['banner']['name'])){
				    die('Error uploading file - check destination is writeable.');
				}
				 

						mysql_query("insert into banner (banner) values('$banner')") or die(mysql_error());
						echo "<script>alert('Banner Update');</script>";
					} 

		?>
	</article>
<article class="row">

	<h2>Insert your post</h2>
		<form action="insert.php" enctype="multipart/form-data" method="POST">
			<input type="text" name="title" placeholder="Title"><br><br>
			<input type="date" name="date"	placeholder="Date"><br><br>
			<textarea name="comments" id="comments" placeholder="Comments" cols="30" rows="10"></textarea><br><br>
			<input type="file" name="image" placeholder="Image"><br><br>
			<input type="text" name="video" placeholder="Embedcode"><br><br>
			<input type="submit" name="save" Value="Save">
		</form>
		<!-- Insertar Datos -->
		<?php 
	if ($_POST ['save']){

		$title=$_POST['title'];
		$date=$_POST['date'];
		$comments=$_POST['comments'];
		$video=$_POST['video'];
		$arr = explode('.', $_FILES['image']['name']);
		$_FILES['image']['name'] = uniqid() . '.' . $arr[1];
		$image=$_FILES['image']['name'];
		

				// Check for errors
				if($_FILES['image']['error'] > 0){
				    die('An error ocurred when uploading.');
				}
				 
				if(!getimagesize($_FILES['image']['tmp_name'])){
				    die('Please ensure you are uploading an image.');
				}
				 
				// Check filetype
				if($_FILES['image']['type'] != 'image/png'){
				    die('Unsupported filetype uploaded.');
				}
				 
				// Check filesize
				if($_FILES['image']['size'] > 5000000){
				    die('File uploaded exceeds maximum upload size.');
				}
				 
				// Check if the file exists
				if(file_exists('upload/' . $_FILES['image']['name'])){
				    die('File with that name already exists.');
				}
				 
				// Upload file
				if(!move_uploaded_file($_FILES['image']['tmp_name'], 'upload/' . $_FILES['image']['name'])){
				    die('Error uploading file - check destination is writeable.');
				}
				 

						mysql_query("insert into content(title,date,text,image,video) values('$title','$date','$comments','$image','$video')") or die(mysql_error());
						echo "<script>alert('Update');</script>";
					} 

		?>
<!-- End Insertar Datos -->
	</article>
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



	