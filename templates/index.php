<?php
include("menu.php");
include("db.php");	
include("header.php")
?>

<!-- CONTENT -->

	<section class="row">
		<section class="content small-12 medium-12 large-8 columns border-right font text-justify">
				<article class="row">

						 <?php
					   $table="banner";
					   $que="SELECT * FROM banner ORDER BY id DESC LIMIT 1";
					   $resultado=mysql_db_query ($db, $que, $link);
					   while ($row = mysql_fetch_array ($resultado))
					   {
					      if ($row['banner'] != ""){
					      print ("<img src='upload/$row[banner]' width=640 />");

					      }
					    }
					    mysqli_free_result($resultado);
					?>
					
				</article>


				<article class="row">
					 <?php
					   $tablename="content";
					   $query="SELECT * FROM content ORDER BY date DESC";
					   $result=mysql_db_query ($db, $query, $link);
					   while ($row = mysql_fetch_array ($result))
					   {
					     print  ("<h4 class='border-top font'> $row[title]<br></h4>");
					     print  ("<h6 class='text-right'> $row[date]<br></h6>");
					      print ("<h5 >$row[text]<br></h5>");
					      if ($row['image'] != ""){
					      print ("<img class='center' src='upload/$row[image]' width=500 />");

					      }
					      if ($row['video'] != ""){
					      print ('<iframe class="center" width="640" height="400" src="https://www.youtube.com/embed/' . stripslashes($row['video']) . '" frameborder="0" allowfullscreen></iframe>');
					  }
					    }
					    mysqli_free_result($result);
					?>
				</article>
		</section>


		<!-- SIDEBAR -->
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

