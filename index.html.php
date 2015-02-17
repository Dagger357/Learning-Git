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
		<?php
			include 'header.php';
		?>

		<div class="container-fluid">
			<div id="left_margin" class="col-md-2">Recent updates perhaps</div>
			<div id="the_void" class="col-md-8">things and stuff</div>
			<div id="right_margin" class="col-md-2">
				<ul id="nav_bar">
					<?php 
						nav_gen($nav_test);
					?>
				</ul>
			</div>
		</div>

		<?php
			include 'footer.php';
		?>

	</body>
</html>