<?php
include("menu.php");
include("header.php");
include("db.php");

?>
	<section class="row">
		<section class="content small-12 medium-12 large-8 columns border-right font">
				<article class=" row text-Justify">
					<?php  echo '
					<h3>Upcoming Dates</h3>
					<p>
					Come to see Los Fuegos and lets share some raw old-style human interaction, let us find the wild inside you.</p>';
				?>
				</article>
				<article class="row text-justify">
						<article class="row">
					 <?php
					   $tablename="ndate";
					   $query="SELECT * FROM ndate ORDER BY date ASC";
					   $result=mysql_db_query ($db, $query, $link);
					   while ($row = mysql_fetch_array ($result))
					   {
					     print  ("<h6 class=' border-top font text-right'> $row[date]<br></h6>");
					      print ("<h5 >$row[place]<br></h5>");
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
</body>
	</html>	

<?php
include("footer.php")
?>