<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style type="text/css">
		* { font-family:"標楷體"; margin-left:auto; margin-right:auto;}
		h1 {color:orange; font-size:60px;}
		h2 {color:#33ff33; font-size:40px;}
	</style>
<script>
		function change1() {
  			document.getElementById("pic").src = "e91ebef90489b06708158724f355e2ee.jpg";
  			document.getElementById("h2text").innerText = "靜宜資管";
		}

		function change2() {
  			document.getElementById("pic").src = "phpirHwUp.jpg";
  			document.getElementById("h2text").innerText = "chen bohan";
		}
	</script>

</head>
<body>
	<table width="70%">
		<tr>
			<td>
				<img src="phpirHwUp.jpg"width="100%"
				id="pic" onmouseover="change1()" onmouseout="change2()">
				</img>
			</td>
			<td>
				<h1>陳柏翰</h1>
	            <h2 id=h2text></h2>	
			</td>
		</tr>
    </table>
    <table border="1"width="70%">
		<tr>
			<td>
				FB：<a href="https://www.facebook.com/?locale=zh_TW"target="_blank">https://www.facebook.com/?locale=zh_TW</a><br>
	            Tel: <a href="tel:0426328001,18110">0426328001#18110</a><br>
	            E-Mail: <a href="mailto:a0916672355@gmail.com">a0916672355@gmail.com</a><br>
            </td>
        
        
			<td>
				大象席地而坐電影配樂<br>
	        <audio controls>
		    <source src="elephant.mp3" type="audio/mP3">
	        </audio><br>
            </td>
        
        
			<td>
				不要去臺灣<br>
	            <iframe src="https://www.youtube.com/embed/pW88QFpHXa8" allowfullscreen></iframe>
            </td>
        </tr>
        <tr>
            <td>
            	<a href="https://bot.dialogflow.com/e90b018b-b858-43f6-8741-5fa33ec55b6f"target="_blank">https://bot.dialogflow.com/e90b018b-b858-43f6-8741-5fa33ec55b6f</a><br>
            </td>
		</tr>
	</table>
    <?PHP echo date("Y-m-d")?>
</body>
</html>
