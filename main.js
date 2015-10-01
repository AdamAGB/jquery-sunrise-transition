<script type="text/javascript">
$(document).ready(function() {

	$('.strip_top').hide();
	$('.strip_bottom').hide();	
	
	var totalStrips = $('.strip').length;	
	var g = 30;
	var h = 0;
	var i = 2000;
	var go_back = true;
	
	setInterval(function() {
		$('.strip_top').eq(g).fadeIn(i);
		$('.strip_bottom').eq(h).fadeIn(i);		
		g--;
		h++;
		if(i < 4000) {
		  i += 250;
		}
	}, 50);

});
</script>
