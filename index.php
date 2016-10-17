<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
<title>Contact Form</title>
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
	<div class="form-container">
		<form id="formx" action="form-result.php" method="post" data-parsley-validate>

			<label for="name">Name: <span>(Required field)</span></label><input type="text" id="name" name="name" required="" data-parsley-minlength="4" placeholder="Ex: John Smith">
		<br>
			<label for="email">Email: <span>(Required field)</span></label><input type="email" id="email" name="email" required="">
		<br>
			<label for="url">Website: <span>(Optional field)</span></label><input type="text" id="url" name="url" value="http://">
		<hr>
			<label for="heard">Heard about us via *:</label>
			<select id="heard" name="heard" required="">
				<option value="">Choose..</option>
				<option value="press">Press</option>
				<option value="net">Internet</option>
				<option value="mouth">Word of mouth</option>
				<option value="other">Other..</option>
			</select>
		<br>
		<hr>
			<label for="hobbies">Hobbies:</label>
			<div class="checkbox-group">
				<label><input name="hobbies[]" id="hobby1" value="ski" type="checkbox">Ski</label>
			    <label><input name="hobbies[]" id="hobby2" value="run" type="checkbox" checked>Run</label>
			    <label><input name="hobbies[]" id="hobby3" value="eat" type="checkbox">Eat</label>
			    <label><input name="hobbies[]" id="hobby4" value="sleep" type="checkbox">Sleep</label>
			    <label><input name="hobbies[]" id="hobby5" value="read" type="checkbox">Read</label>
			    <label><input name="hobbies[]" id="hobby6" value="code" type="checkbox">Code</label>
			</div><!-- checkbox-group -->
		<hr>

			<label >Radio Grup</label>
			<div class='radio-container'>
				<label><input type="radio"  name="radiox" value="Round1">Radio 1"</label><br>
				<label><input type="radio"  name="radiox" value="Round2">Radio 2"</label><br>
				<label><input type="radio"  name="radiox" value="Round3">Radio 3"</label><br>
				<label><input type="radio"  name="radiox" value="Round4">Radio 4"</label><br>
			</div>

		<hr>
			<label for="message">Message: <span>(Required field)</span></label>
		<br>
			<textarea name="message" id="message" cols="50" rows="4" required=""></textarea>
		<br>
			<input style="display:none;" type="text" id="fake" name="fake" value="">

			<input type="submit" name="submit" id="submit" value="Submit">

		</form>	
	</div><!-- form-container -->	
</div><!-- center -->

<!-- ============	CONTENT END		============ -->

<!-- ===========	JS 	=========== -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/_js/jquery.min.js"><\/script>')</script>
<script src="_js/parsley.min.js"></script>
<script src="/_js/script.js"></script>
</body>
</html>
