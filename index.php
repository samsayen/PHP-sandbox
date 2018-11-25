<?php header('X-XSS-Protection: 0'); ?>
<html>
<head>
	<title>Reflector from liveoverflow</title>

</head>
<style>
	textarea {width: 500px; height: 100px; } 
</style>
<body>
<div>
	<form>
		<textarea name='xss'><?=htmlspecialchars($_GET['xss'],'UTF-8')?></textarea>
		<br><br><input type="submit" value="xss">
	</form>
</div>
<div>
	<?php
		echo $_GET['xss'];
	?>

</div>
</body>
</html>
