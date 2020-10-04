<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<title>旅立ちの扉</title>
	</head>
	<body>
		<input id="door" type="button" value="旅立つ">
		<script>
		$.getJSON("spot.json", function (data) {
			var random = Math.floor( Math.random() * 4 );
			alert(data[random][0]);
		});
		</script>
	</body>
</html>
