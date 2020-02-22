<!--start-footer-->
<div class="footer">
	<div class="container">
		<div class="footer-top">
			<div class="col-md-4 footer-left">
			<h3>CONNECT WITH US</h3>
				<ul>
					<li><a href="#" onclick="randomFB()"><img src="img/facebook.png"> Facebook</a></li>
					<script type="text/javascript">
						var randomFB = function() {
							var links = [
								"https://www.facebook.com/merlitasprivateresort/"
							];

							var max = (links.length);
							var randomNumber = Math.floor(Math.random() * max);
							var link = links[randomNumber];
							window.location = link;
						}
					</script>

					<li><a href="#" onclick="randomTwitter()"><img src="img/twitter.png"> Twitter</a></li>
					<script type="text/javascript">
						var randomTwitter = function() {
							var links = [
								"https://www.facebook.com/merlitasprivateresort/"
							];

							var max = (links.length);
							var randomNumber = Math.floor(Math.random() * max);
							var link = links[randomNumber];
							window.location = link;
						}
					</script>

					<li><a href="#" onclick="randomIG()"><img src="img/instagram.png"> Instagram</a></li>
					<script type="text/javascript">
						var randomIG = function() {
							var links = [
								"https://www.facebook.com/merlitasprivateresort/"
							];

							var max = (links.length);
							var randomNumber = Math.floor(Math.random() * max);
							var link = links[randomNumber];
							window.location = link;
						}
					</script>
				</ul>
			</div>
			<div class="col-md-4 footer-left">
				<h3>CONTACT US</h3>
				<ul>
					<li>info@blossomflowershop.com</li>
					<li>+888 8888</li>
					<li>Anonas St., Sta Mesa, Manila</li>
				</ul>
			</div>
			<div class="col-md-4 footer-left">
			<h3>ABOUT US</h3>
				<ul>
					<li><a href="aboutus.php">Who We Are</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--end-footer-->
<!--end-footer-text-->
<div class="footer-text">
	<div class="container">
		<div class="footer-main">
			<p class="footer-class">Copyright 2020. All Rights Reserved, Merlita's Venue & Private Resort.
			</p>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function() {
			/*
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
							 		};
									*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<a href="#home" id="toTop" class="scroll" style="display: none;"><span id="toTopHover"></span> <span id="toTopHover" style="opacity: 1;"> </span></a>
</div>
<!--end-footer-text-->
<a href="#" id="toTop">To Top</a>

<script src="{{ URL::asset('js/lib/jquery-3.3.1.min.js') }}"></script>
<script src="{{ URL::asset('js/lib/jquery-migrate-3.0.1.min.js') }}"></script>

<script src="{{ URL::asset('js/lib/popper.min.js') }}"></script>
<script src="{{ URL::asset('js/lib/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('js/lib/owl.carousel.min.js') }}"></script>
<script src="{{ URL::asset('js/lib/jquery.stellar.min.js') }}"></script>
<script src="{{ URL::asset('js/lib/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ URL::asset('js/lib/sweetalert2.all.min.js') }}"></script>
<script src="{{ URL::asset('js/lib/aos.js') }}"></script>
<script src="{{ URL::asset('js/lib/bootstrap-datepicker.js') }}"></script>
<script src="{{ URL::asset('js/lib/jquery.timepicker.min.js') }}"></script>

<script type="text/javascript">
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
</script>

<script type="text/javascript" src="/js/lib/move-top.js"></script>
<script type="text/javascript" src="/js/lib/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event) {
			event.preventDefault();
			$('html,body').animate({
				scrollTop: $(this.hash).offset().top
			}, 1000);
		});
	});
</script>
<!-- start menu -->
<script src="/js/lib/simpleCart.min.js"> </script>

<script type="text/javascript" src="/js/lib/memenu.js"></script>
<script>
	$(document).ready(function() {
		$(".memenu").memenu();
	});
</script>
<script src="{{ URL::asset('js/main.js') }}"></script>
<script src="/js/lib/responsiveslides.min.js"></script>