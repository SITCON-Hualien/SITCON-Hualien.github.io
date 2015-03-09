<!Doctype html>
<html>
<head>
	<meta charset="utf8" />
	<link type="text/css" rel="stylesheet" href="index.css" />
	<title>SITCON in Hualien</title>
</head>
<!-- header start -->
<body>
<div class="header">
<p align="center"><img src="banner.jpg"></p>
</div>
<!-- header end -->

<!-- body start -->
<div class="block">
<h1>SITCON in Hualien</h1>
<h2>SITCON花蓮定期課程</h2>
<table>
<tr><th width="30px">#</th><th width="80px">日期</th><th width="300px">主題</th><th width="170px">講者</th><th width="90px">報名</th><th width="90px">講義</th><th width="90px">影片</th></tr>
<?php

	for ($i=1; $i<=13; $i++){
		echo '<tr>'; 
		for ($j=0; $j<7; $j++){
			echo '<td>'; 
				echo $i . ' ' . $j; 
			echo '</td>'; 	
		}
		echo '</tr>	'; 
	}
?>
<!--
<tr><td>1</td><td>3/14</td><td>揭開電腦的神秘面紗</td><td>楊舜博（小紅）</td><td><a href="http://sitcon.kktix.cc/events/hualien-course-2015-01" target="_blank">點我</a></td><td></td><td></td></tr>
<tr><td>2</td><td>3/21</td><td>快快樂樂上網去：淺談網路安全</td><td>ws育慈</td><td></td><td></td><td></td></tr>
<tr><td>3</td><td>3/28</td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>4</td><td>4/11</td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>5</td><td>4/25</td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>6</td><td>5/2</td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>7</td><td>5/9</td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>8</td><td>5/16</td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>9</td><td>5/23</td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>10</td><td>5/30</td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>11</td><td>6/6</td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>12</td><td>6/13</td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>13</td><td>6/27</td><td></td><td></td><td></td><td></td><td></td></tr>
-->
</table>
</div>
<!-- body end -->

<!-- footer start -->
<div class="footer">
<hr />
<p>
SITCON 花蓮分區<br />
負責人：ws育慈 <a href="mailto:linyutsu23@gmail.com">linyutsu23@gmail.com</a>
</p>
</div>
<!-- footer end -->
</body>
</html>
