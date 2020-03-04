<!--banner-starts-->
<div class="bnr" id="home">
	<div id="top" class="callbacks_container">
		<ul class="rslides" id="slider4">
			<li>
				<div class="banner-1"></div>
			</li>
			<li>
				<div class="banner-2"></div>
			</li>
			<li>
				<div class="banner-3"></div>
			</li>
		</ul>
	</div>
	<div class="clearfix"> </div>
</div>
<!--banner-ends-->
<!--Slider-starts-->
<script src="js/lib/responsiveslides.min.js"></script>
<script>
	// You can also use "$(window).load(function() {"
	$(function() {
		// Slideshow 4
		$("#slider4").responsiveSlides({
			auto: true,
			pager: true,
			nav: false,
			speed: 500,
			namespace: "callbacks",
			before: function() {
				$('.events').append("<li>before event fired.</li>");
			},
			after: function() {
				$('.events').append("<li>after event fired.</li>");
			}
		});

	});
</script>
<!--End-slider-script-->
