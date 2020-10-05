<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<title>旅立ちの扉</title>
	</head>
	<body>
		<a id="door" target="_blank" href="/"><input type="button" value="旅立つ"></a>
		<script>
			$(function(){
				var place = "";
				$.getJSON("spot.json" , function(data) {
					place = data;
				});

				$("#door").click(function() {
					var random = Math.floor( Math.random() * 38 );
					$(this).attr("href", place[random][1]);
				});
			});
		</script>
	</body>
</html>
