<!DOCTYPE html>
<!--
mail me
akazawagaku@gmail.com
-->
<html>
	<head>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-9GT676GYHS"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'G-9GT676GYHS');
		</script>
		<meta charset="utf-8">
		<meta name="google-site-verification" content="3QuaQCtsYO9KWnRPItMk0t7_q-H5P5n8ZD4LcdcNh2E" />
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta name="keywords" content="旅立ち,旅行,国内,オンライン旅行,googleマップ,どこでもドア">
		<meta name="description" content="googleストリートビューの日本国内どこかへ繋がる扉。さあ旅立とう。">

		<meta name="twitter:card" content="summary_large_image" />
		<meta name="twitter:site" content="@gackey" />
		<meta property="og:url" content="https://departuredoor.herokuapp.com" />
		<meta property="og:title" content="扉の向こうは日本のどこか" />
		<meta property="og:description" content="googleストリートビューの日本国内どこかへ繋がる扉。" />
		<meta property="og:image" content="https://departuredoor.herokuapp.com/img/door_twitter.jpg" />

		<link rel="stylesheet" href="css/style.css" type="text/css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<title>扉の向こうは日本のどこか</title>
	</head>
	<body>
		<!--<a id="door" target="_blank" href="/"><input type="button" value="旅立つ"></a>-->

		<div>
			<a id="departure" target="_blank" href="/">
				<div id="door">
					<div class="door_close">
						<img src="img/door_close.png">
					</div>
					<div class="door_open">
						<img src="img/door_open.png">
					</div>
					<div id="words">扉を開いて、旅に出よう</div>
				</div>
			</a>
		</div>
		<div id="rakuten">
			<script type="text/javascript">rakuten_design="slide";rakuten_affiliateId="142a8617.af4bd4b0.142a8618.1730d9f1";rakuten_items="ranking";rakuten_genreId="101381";rakuten_size="160x600";rakuten_target="_blank";rakuten_theme="gray";rakuten_border="on";rakuten_auto_mode="on";rakuten_genre_title="off";rakuten_recommend="on";rakuten_ts="1630535638813";</script><script type="text/javascript" src="https://xml.affiliate.rakuten.co.jp/widget/js/rakuten_widget.js"></script>
		</div>
		<script>
			$(function(){
				var callBackSleepCount = 30;
				var CallBackSleep = 100;
				window.arrSpot = JSON.parse(localStorage.getItem("arrSpot"));

				$("#departure").click(function() {
					if(!arrSpot || arrSpot.length == 0) {
						$.getJSON("spot.json" , function(data) {
							arrSpot = data;
						});
					}

					var count = 0;
					while (!arrSpot || arrSpot.length == 0 || count < callBackSleepCount) {
						sleep(callBackSleep)
						count ++;
					}

					var random = Math.floor( Math.random() * arrSpot.length );
					var url = arrSpot[random][1];
					arrSpot.splice(random, 1);
					localStorage.setItem("arrSpot", JSON.stringify(arrSpot));
					$(this).attr("href", url);
					//location.reload();
					setTimeout(function(){
						$(".door_open").removeClass("hover");
					},1000);
				});

				$(".door_open").hover(
					function () {
						$(this).addClass("hover");
					},
					function () {
						$(this).removeClass("hover");
					}
				);
			});
		</script>
	</body>
</html>
