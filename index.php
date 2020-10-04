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
		import json
		with open('spot.json') as f:
		data = json.load(f)
		</script>
	</body>
</html>
