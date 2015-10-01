<?
for($i = 0; $i < 30; $i++) {
	$y = $i * 10;
	echo<<<EOD
<div class="strip_top" style="z-index:1;position:absolute;background-image: url('day.jpg');top:$y;width:340px;height:10px;background-position:0 -$y"></div>
EOD;
}
for($i = 30; $i < 47; $i++) {
	$y = $i * 10;
	echo<<<EOD
<div class="strip_bottom" style="z-index:1;position:absolute;background-image: url('day.jpg');top:$y;width:340px;height:10px;background-position:0 -$y"></div>
EOD;
}
?>
