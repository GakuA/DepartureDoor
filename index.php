<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<title>旅立ちの扉</title>
	</head>
	<body>
		<input id="door" type="button" value="旅立つ">
		<a target="_blank" href="https://www.google.com/maps/@35.7053381,139.7521395,2a,82.7y,323.59h,94.3t/data=!3m6!1e1!3m4!1sJgFRpzWV4XJWSgtPju63Dw!2e0!7i13312!8i6656">test</a>
		<script>
			$(function(){
				var place = "";
				$.getJSON("spot.json" , function(data) {
					//alert(data[0][0]);
					place = data;
				});

				$("#door").click(function() {
					var random = Math.floor( Math.random() * 7 );
					//alert(place[random][0]);
					window.open(place[random][1], '_blank'); // 新しいタブを開き、ページを表示

				});

			});
		</script>
	</body>
</html>
