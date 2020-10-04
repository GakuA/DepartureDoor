<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="spot.json"></script>

		<title>旅立ちの扉</title>
	</head>
	<body>
		<input id="door" type="button" value="旅立つ">
		<script>
			var place = "";
			$(function(){
				$.getJSON("spot.json", function (data) {
					place = data;
				});

				$("#door").click(function() {
					var random = Math.floor( Math.random() * 4 );
					alert(place[random][0]);

				});

			});
		</script>
	</body>
</html>
