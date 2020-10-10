<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta name="google-site-verification" content="3QuaQCtsYO9KWnRPItMk0t7_q-H5P5n8ZD4LcdcNh2E" />

		<link rel="stylesheet" href="css/style.css" type="text/css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<title>旅立ちの扉</title>
	</head>
	<body>
		<!--<a id="door" target="_blank" href="/"><input type="button" value="旅立つ"></a>-->

		<div>
			<a id="door" target="_blank" href="/">
				<img class="door_close" src="img/door_close.png">
				<img class="door_open" src="img/door_open.png">
			</a>
		</div>
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

				$("#door").mouseover(function() {
					$('.door_close').animate(
						{ display: none },
						{ duration: '700', easing: "linear" }
					);
					$('.door_open').animate(
						{ display: inline },
						{ duration: '700', easing: "linear" }
					);
				});
				$("#door").mouseout(function() {
					$('.door_open').animate(
						{ display: none },
						{ duration: '700', easing: "linear" }
					);
					$('.door_close').animate(
						{ display: "inline" },
						{ duration: '700', easing: "linear" }
					);
					$(".door_close").show();
				});
			});
		</script>
	</body>
</html>
