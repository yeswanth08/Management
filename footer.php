</div>
<div class="copyright">
	<div class="copyrighttop">
		
		
	</div>
	<div class="copyrightbottom">
		<p>© 2024 Food Chef. All rights reserved | Developed by yeswanth</p>
	</div>
	<div class="clearfix"></div>
</div>
<script src="<?php echo BASEURL;?>public/js/lightbox-plus-jquery.min.js"> </script>
 
	<script type="text/javascript" src="<?php echo BASEURL;?>public/js/jquery-2.1.4.min.js"></script>
	<script src="<?php echo BASEURL;?>public/js/bootstrap.js"></script>

						<script src="<?php echo BASEURL;?>public/js/responsiveslides.min.js"></script>
			<script>
						$(function () {
						  $("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
			</script>
			<script>
								$(function () {
								  $("#slider3").responsiveSlides({
									auto: true,
									pager:false,
									nav:true,
									speed: 500,
									namespace: "callbacks",
									before: function () {
									  $('.events').append("<li>before event fired.</li>");
									},
									after: function () {
									  $('.events').append("<li>after event fired.</li>");
									}
								  });
							
								});
							 </script>

 
	<script src="<?php echo BASEURL;?>public/js/aos.js"></script>
	<script src="<?php echo BASEURL;?>public/js/aos1.js"></script>

<script src="<?php echo BASEURL;?>public/js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="<?php echo BASEURL;?>public/js/move-top.js"></script>
	<script type="text/javascript" src="<?php echo BASEURL;?>public/js/easing.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {

								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>

<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
</body>
</html>
