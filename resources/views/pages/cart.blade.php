<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="/obrab" method="POST">
		@csrf
		<input type="checkbox" name="1" value="1">1
		<input type="checkbox" name="2" value="2">2
		<input type="checkbox" name="3" value="3">3
		<input type="submit" value="Send">
	</form>
</body>
</html>