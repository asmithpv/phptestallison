<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Today's date is <?php echo date("l, F j, Y"); ?></title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<header>
			<h1>Welcome</h1>
		</header>
		<main>
			<p>You loaded this page at <?php echo date("g:i a"); ?> on <?php echo date("l, F j, Y") ?>. Thanks for coming</p>
		</main>
		<script src="main.js"></script>	
	</body>
</html>