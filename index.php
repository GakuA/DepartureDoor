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
				/*
				var place = {
					0: ["富士山", "https://www.google.com/maps/@35.3606799,138.7273586,3a,75y,81.76h,79.35t/data=!3m6!1e1!3m4!1sA25IgFy7aGnepc9_6Y70vA!2e0!7i13312!8i6656"],
					1: ["東京タワー", "https://www.google.com/maps/@35.6586054,139.7454981,2a,75y,61.48h,78.33t/data=!3m6!1e1!3m4!1sYAEZrAUTYU990cMce2Gy1Q!2e0!7i13312!8i6656"],
					2: ["東京スカイツリー", "https://www.google.com/maps/@35.7098236,139.8105469,3a,75y,215.81h,68.93t/data=!3m8!1e1!3m6!1sAF1QipOcfXKHDZHVubI9BM-K9tJ5kA-JjEwgsxNz9mf_!2e10!3e11!6shttps:%2F%2Flh5.googleusercontent.com%2Fp%2FAF1QipOcfXKHDZHVubI9BM-K9tJ5kA-JjEwgsxNz9mf_%3Dw203-h100-k-no-pi-0-ya224.11057-ro-0-fo100!7i6720!8i3360"],
					3: ["東京スカイツリー", "https://www.google.com/maps/@35.7098236,139.8105469,3a,75y,215.81h,68.93t/data=!3m8!1e1!3m6!1sAF1QipOcfXKHDZHVubI9BM-K9tJ5kA-JjEwgsxNz9mf_!2e10!3e11!6shttps:%2F%2Flh5.googleusercontent.com%2Fp%2FAF1QipOcfXKHDZHVubI9BM-K9tJ5kA-JjEwgsxNz9mf_%3Dw203-h100-k-no-pi-0-ya224.11057-ro-0-fo100!7i6720!8i3360"],

				};
*/
$.getJSON("spot.json" , function(data) {
    alert(data[0][0]);
  });

				$("#door").click(function() {
					var random = Math.floor( Math.random() * 4 );
					//alert(place[random][0]);
					window.open(place[random][1], '_blank'); // 新しいタブを開き、ページを表示

				});

			});
		</script>
	</body>
</html>
