@extends('layout.default')
@section('content')
<body style=""> 
	<!--top-header-->
	<div class="top-header">
	<div class="container">
		<div class="top-header-main">
			<div class="col-md-4 top-header-left">
				<!--<div class="search-bar">
					<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
					<input type="submit" value="">
				</div>-->
				
						
						<div class="search-bar">
							<form method="POST" action="single.php">
								<input type="text" value="" name="productname">
								<input type="submit" value="">
							</form>
							
						</div>
								</div>
			<div class="col-md-4 top-header-middle">
				<a href="index.php"><img src="img/logo-4.png" alt=""></a>
			</div>
			<div class="col-md-4 top-header-right">
				<div class="cart box_1">
					<form method="post" action="index.php">
									<div class="logout">
										<h2 class="quick">    
										<input type="submit" value="Login" name="btnLogin">
		                             </h2></div>
	                  			 </form>
					<div class="cart box_1">
							<a href="cart.php">
							</a><h3><a href="cart.php"> </a><div class="total"><a href="cart.php">
										₱ &nbsp; (&nbsp; ITEMS)								<img src="img/cart-1.png" alt="">
							</a>
							<!--<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>-->
							<form method="POST">
									<div class="cart">
									<input type="submit" name="emptycart" value="Empty Cart">
										
									</div>
							</form>
							<div class="clearfix"> </div>
					</div>
				</h3></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--top-header-->
	<!--bottom-header-->
	<div class="header-bottom">
		<div class="container">
			<div class="top-nav">
				<ul class="memenu skyblue"><li class="showhide" style="display: list-item;"><span class="title">MENU</span><span class="icon1"></span><span class="icon2"></span></li><li class="active" style="display: none;"><a href="index.php">Home</a></li>
					<li class="grid" style="display: none;"><a href="birthdays.php">Birthdays</a>
						
					</li>
					<li class="grid" style="display: none;"><a href="sympathy.php">Sympathy</a>
						
					</li>
					<li class="grid" style="display: none;"><a href="occasions.php">Occasions</a>
						
					</li>
					<li class="grid" style="display: none;"><a href="flowers.php">Flowers</a>
						
					</li>
					<li class="grid" style="display: none;"><a href="plants.php">Plants</a>
	
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--bottom-header-->
	<!--banner-starts-->
	<div class="bnr" id="home">
		<div  id="top" class="callbacks_container">
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
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: false,
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
			<!--End-slider-script-->
	
	
	<!--start-items--> 
    <br>
	<div class="main"> 
		<div class="container"> 
			<div class="product-one">
				
						
						
							<div class="col-md-3 product-left">
								<div class="p-one simpleCart_shelfItem">
									
										<img src="img/flower-1.png">
										<div class="mask">
										<div class="address new">
											<form method="POST" action="single.php">
												<input type="hidden" name="productname" value="Sunflower">
												<input type="submit" value="Quick View" name="quickview">
											</form>	
										</div>
										</div>
									<h4>Sunflower</h4>
									<p><a class="item_add" href="#"><i></i> <span class=" item_price">₱500</span></a></p>
									
								</div>
							</div>
						
							<div class="col-md-3 product-left">
								<div class="p-one simpleCart_shelfItem">
									
										<img src="img/flower-47.png">
										<div class="mask">
										<div class="address new">
											<form method="POST" action="single.php">
												<input type="hidden" name="productname" value="Tulips">
												<input type="submit" value="Quick View" name="quickview">
											</form>	
										</div>
										</div>
									<h4>Tulips</h4>
									<p><a class="item_add" href="#"><i></i> <span class=" item_price">₱300</span></a></p>
									
								</div>
							</div>
						
							<div class="col-md-3 product-left">
								<div class="p-one simpleCart_shelfItem">
									
										<img src="img/flower-48.png">
										<div class="mask">
										<div class="address new">
											<form method="POST" action="single.php">
												<input type="hidden" name="productname" value="Calla lily">
												<input type="submit" value="Quick View" name="quickview">
											</form>	
										</div>
										</div>
									<h4>Calla lily</h4>
									<p><a class="item_add" href="#"><i></i> <span class=" item_price">₱400</span></a></p>
									
								</div>
							</div>
						
							<div class="col-md-3 product-left">
								<div class="p-one simpleCart_shelfItem">
									
										<img src="img/flower-50.png">
										<div class="mask">
										<div class="address new">
											<form method="POST" action="single.php">
												<input type="hidden" name="productname" value="Peony">
												<input type="submit" value="Quick View" name="quickview">
											</form>	
										</div>
										</div>
									<h4>Peony</h4>
									<p><a class="item_add" href="#"><i></i> <span class=" item_price">₱900</span></a></p>
									
								</div>
							</div>
						
							<div class="col-md-3 product-left">
								<div class="p-one simpleCart_shelfItem">
									
										<img src="img/flower-8.png">
										<div class="mask">
										<div class="address new">
											<form method="POST" action="single.php">
												<input type="hidden" name="productname" value="Roses">
												<input type="submit" value="Quick View" name="quickview">
											</form>	
										</div>
										</div>
									<h4>Roses</h4>
									<p><a class="item_add" href="#"><i></i> <span class=" item_price">₱1000</span></a></p>
									
								</div>
							</div>
						
							<div class="col-md-3 product-left">
								<div class="p-one simpleCart_shelfItem">
									
										<img src="img/flower-9.png">
										<div class="mask">
										<div class="address new">
											<form method="POST" action="single.php">
												<input type="hidden" name="productname" value="Roses and Peony">
												<input type="submit" value="Quick View" name="quickview">
											</form>	
										</div>
										</div>
									<h4>Roses and Peony</h4>
									<p><a class="item_add" href="#"><i></i> <span class=" item_price">₱950</span></a></p>
									
								</div>
							</div>
						
							<div class="col-md-3 product-left">
								<div class="p-one simpleCart_shelfItem">
									
										<img src="img/flower-10.png">
										<div class="mask">
										<div class="address new">
											<form method="POST" action="single.php">
												<input type="hidden" name="productname" value="Tulips and Roses">
												<input type="submit" value="Quick View" name="quickview">
											</form>	
										</div>
										</div>
									<h4>Tulips and Roses</h4>
									<p><a class="item_add" href="#"><i></i> <span class=" item_price">₱850</span></a></p>
									
								</div>
							</div>
						
							<div class="col-md-3 product-left">
								<div class="p-one simpleCart_shelfItem">
									
										<img src="img/flower-11.png">
										<div class="mask">
										<div class="address new">
											<form method="POST" action="single.php">
												<input type="hidden" name="productname" value="Pink Tulips">
												<input type="submit" value="Quick View" name="quickview">
											</form>	
										</div>
										</div>
									<h4>Pink Tulips</h4>
									<p><a class="item_add" href="#"><i></i> <span class=" item_price">₱920</span></a></p>
									
								</div>
							</div>				
				</div>
			</div>
		</div>
	</div>
	<!--end-items-->


	<!--start-footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-top">
				<div class="col-md-3 footer-left">
					<h3>ABOUT US</h3>
					<ul>
						<li><a href="aboutus.php">Who We Are</a></li>			 
					</ul>
                    <br>
                    <h3>CONTACT US</h3>
                    <ul>
						<li>info@blossomflowershop.com</li>
						<li>+888 8888</li>
						<li>Anonas St., Sta Mesa, Manila</li>				 
					</ul>
				</div>
				<div class="col-md-3 footer-left">
					<h3>YOUR ACCOUNT</h3>
						
						<ul>
							<li><a href="login.php">Your Account</a></li>					 					 
						</ul>				</div>
				<div class="col-md-3 footer-left">
					<h3>FAQ</h3>
					<ul>
						<li><a href="faq.php#shipping">Shipping</a></li>
						<li><a href="faq.php#cancellation">Cancellation</a></li>
						<li><a href="faq.php#returns">Returns</a></li>
						<li><a href="faq.php#guides">Buying Guides</a></li>					 
					</ul>
				</div>
				<div class="col-md-3 footer-left">
					<h3>CONNECT WITH US</h3>
					<ul>
						<li><a href="#" onclick="randomFB()"><img src="img/facebook.png">  Facebook</a></li>
                        <script type="text/javascript">
						var randomFB = function() {
							var links = [
           		 				"https://www.facebook.com/earlrichard.dizon",
            					"https://www.facebook.com/itsCARLsanity",
           	 					"https://www.facebook.com/fallingDEBriiss?fref=ts",
            					"https://www.facebook.com/shayraivowwwnkruz?fref=ts",
            					"https://www.facebook.com/MarkAwesome08?fref=ts",
								"https://www.facebook.com/veronicamanaog?fref=ts"
        					];
							
							var max = (links.length);
							var randomNumber = Math.floor(Math.random()*max);
							var link = links[randomNumber];
							window.location = link;
						}
						
						</script>
                        
						<li><a href="#" onclick="randomTwitter()"><img src="img/twitter.png">  Twitter</a></li>
                        <script type="text/javascript">
                        var randomTwitter = function() {
							var links = [
           		 				"https://twitter.com/itsCARLsanity",
            					"https://twitter.com/fallingDEBriiss"        					
                                ];
							
							var max = (links.length);
							var randomNumber = Math.floor(Math.random()*max);
							var link = links[randomNumber];
							window.location = link;
						}
						
						</script>
                        
						<li><a href="#" onclick="randomIG()"><img src="img/instagram.png">  Instagram</a></li>
                        <script type="text/javascript">
                        var randomIG = function() {
							var links = [
           		 				"https://www.instagram.com/fallingDEBriiss/",
            					"https://www.instagram.com/itscarlsanity/",
								"https://www.instagram.com/shayraivowwwnkruz/"       					
                                ];
							
							var max = (links.length);
							var randomNumber = Math.floor(Math.random()*max);
							var link = links[randomNumber];
							window.location = link;
						}
						
						</script>	 
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
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
		<a href="#home" id="toTop" class="scroll" style="display: none;"><span id="toTopHover"></span> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
	<!--end-footer-text-->	

    <a href="#" id="toTop">To Top</a>   
@stop
