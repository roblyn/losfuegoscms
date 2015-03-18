<?php 
	$des = "anrobmari@hotmail.com";
	$asu = "Los Fuegos Web Page";
	$from = 'From: ' .$_POST['email'];
	$Coments="
	
	Title:	$_POST[title]<br>
	Email: $_POST[email]<br>
	Coments: $_POST[comments]<br>
	";
	mail($des, $asunto, $Coments, $from);
 ?>