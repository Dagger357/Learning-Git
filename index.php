<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- these links are simply what I have picked up from the sites themselves-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
		<link type="text/css" rel="stylesheet" href="beginner.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Gettin' Started</title>
	</head>
	<body>
		<!--based on the bootstrap examples this is what I have come up with
		not 100% sure on the header/footer classes though-->
		<div class="container-fluid">
			<div id="header" class="col-md-10 col-md-offset-1">Header type things, Jeffs Blog perhaps</div>
		</div>

		<div class="container-fluid">
			<div id="left_margin" class="col-md-2">Recent updates perhaps</div>
			<div id="the_void" class="col-md-8">things and stuff</div>
			<div id="right_margin" class="col-md-2">
				<ul id="nav_bar">
					<?php 
						$navbar = array("Home","Recent Posts","Other","Things");
						foreach ($navbar as $item) {
						echo "<li><a href>$item</a></li>";
						}
					?>
				</ul>
			</div>
		</div>

		<div class="container-fluid">
			<div id="footer" class="col-md-12">Disclaimer info perhaps?</div>
		</div>
	</body>
</html>