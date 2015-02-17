<?php 
	$nav_test = array("Home","Recent Posts","Other","Things");
	function nav_gen($nav_links) {
		foreach ($nav_links as $item) {
			echo "<li><a href>$item</a></li>";
		}
	} 
	include 'index.html.php';
?>
