<html>
<head>
	<!--	c00264985	Joe Holden	-->
	<title>Thank You!</title>
	<link rel="stylesheet" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php header("Cache-Control: no-cache, must-revalidate");?>
</head>
<body>
	<div class="navbar">
		<a href="index.html">Home</a>
		<a href="#bitcoin">Bitcoin</a>
		<a href="#ethereum">Ethereum</a>
		<a href="#litecoin">Litecoin</a>
	</div>
	<div class="container">
		<h1>Thank you! We have all of your details saved now!</h1>
		<p>Welcome <?php echo $_POST["name"]; ?></p>
		<p>We have sent an email to: <?php echo $_POST["email"]; ?> for confirmation!</p>
		<p>Happy tading</p>
		<p><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank">Click here to go back to the HomePage.</a></p>
	</div>
</body>
</html>