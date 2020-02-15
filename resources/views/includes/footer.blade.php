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
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
				</script>	
<!-- start menu -->
<script src="/js/lib/simpleCart.min.js"> </script>

<script type="text/javascript" src="/js/lib/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<script src="{{ URL::asset('js/main.js') }}"></script>
<script src="/js/lib/responsiveslides.min.js"></script>