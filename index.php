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
