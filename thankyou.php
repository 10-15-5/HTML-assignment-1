<html class="php-html">
<head>
	<!--	c00264985	Joe Holden	-->
	<title>Thank You!</title>
	<link rel="stylesheet" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div class="navbar">
	    <!-- Navigation bar to go to each page -->
		<a href="index.html">Home</a>
		<a href="bitcoin.html">Bitcoin</a>
		<a href="ethereum.html">Ethereum</a>
		<a href="litecoin.html">Litecoin</a>
	</div>
	<div class="php-container">
	    <!-- Section thanking the user and printing their inputted data -->
		<h1>Thank you! We have all of your details saved now!</h1>
		<p>Welcome <?php echo $_POST["name"]; ?></p>
		<p>We have sent an email to: <?php echo $_POST["email"]; ?> for confirmation!</p>
		<p>Happy tading</p>
		<p><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank">Click here to go back to the HomePage.</a></p>
	</div>
	<div class="php-panda">
	    <!-- Video of a red panda for everyone to enjo -->
	    <h1>Enjoy this video of a red panda as a thanks from us!</h1>
	    <iframe class="php-responsive-iframe" src="https://www.youtube.com/embed/XdM6c4juY1g"></iframe>
</body>
</html>