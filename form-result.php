<?php 
	if ($_POST['fake'] !== "") {
		header("Location: http://www.google.com");
		exit();
	}
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
<title>Form Result</title>
<meta name="description" content="">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- ===========	CSS 	=========== -->
<link rel="stylesheet" media="screen" href="/_css/style.css">
<!--[if lt IE 9]>
<script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
<![endif]-->
</head>
<body>
<!-- ============	CONTENT INIT	============ -->

<div class="center">
	<span><a href="index.php">Back to form</a></span>
	<h1>Form Result</h1>
	<?php 
		var_dump($_POST);
	?>
</div><!-- center -->
	

<!-- ============	CONTENT END		============ -->

<!-- ===========	JS 	=========== -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/_js/jquery.min.js"><\/script>')</script>
<script src="/_js/script.js"></script>
</body>
</html>