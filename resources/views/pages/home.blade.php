@extends('layout.default')
@section('content')
<<<<<<< Updated upstream
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
=======
    <section class="site-hero overlay" style="background-image: url(img/hero_1.jpg)" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center" data-aos="fade-up">
            <h1 class="heading">Enjoy A Luxury <br> Experience</h1>
          </div>
        </div>
      </div>

      <a class="mouse smoothscroll" href="#next">
        <div class="mouse-icon">
          <span class="mouse-wheel"></span>
        </div>
      </a>
    </section>
    <!-- END section -->

    <section class="section bg-light"  id="next">
      <div class="container">
        <div class="row">
          <div class="col-md-7 mx-auto text-center mb-5">
            <h2 class="heading">Check Availabilty</h2>
          </div>
        </div>
        <div class="row">
          <div class="block-32">

            <form action="#">
              <div class="row">
                <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                  <label for="checkin_date" class="font-weight-bold text-black">Check In</label>
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="icon-calendar"></span></div>
                    <input type="text" id="checkin_date" class="form-control" readonly="readonly">
                  </div>
                </div>
                <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                  <label for="checkout_date" class="font-weight-bold text-black">Check Out</label>
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="icon-calendar"></span></div>
                    <input type="text" id="checkout_date" class="form-control" readonly="readonly">
                  </div>
                </div>
                <div class="col-md-6 mb-3 mb-md-0 col-lg-3">
                  <div class="row">
                    <div class="col-md-6 mb-3 mb-md-0">
                      <label for="adults" class="font-weight-bold text-black">Adults</label>
                      <div class="field-icon-wrap">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="" id="adults" class="form-control">
                          <option value="">1</option>
                          <option value="">2</option>
                          <option value="">3</option>
                          <option value="">4+</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                      <label for="children" class="font-weight-bold text-black">Children</label>
                      <div class="field-icon-wrap">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="" id="children" class="form-control">
                          <option value="">1</option>
                          <option value="">2</option>
                          <option value="">3</option>
                          <option value="">4+</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3 align-self-end">
                  <button class="btn btn-primary btn-block text-white">Check Availabilty</button>
                </div>
              </div>
            </form>
          </div>


        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-12 col-lg-7 ml-auto order-lg-2" data-aos="fade-up">
            <img src="img/about_feature_image.png" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-12 col-lg-4 order-lg-1" data-aos="fade-up">
            <h2 class="heading">Welcome <em>to</em> Casahotel.</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur distinctio, optio odit consectetur adipisci.</p>
            <p class="mb-4">Nobis sunt architecto nulla voluptatem sed, beatae quia consequatur excepturi quisquam itaque optio eveniet, recusandae saepe accusantium harum, temporibus dolores officia. Aspernatur voluptatem vitae optio atque?</p>
            <p><a href="#" class="btn btn-primary text-white py-2 mr-3">Read More</a> <span class="mr-3">or</span> <a href="https://www.youtube.com/watch?v=3mYmbb7--Eo" class="play-button popup-vimeo">See video</a></p>
          </div>

        </div>
      </div>
    </section>

    <section class="section bg-light">

      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8">
            <h2 class="heading" data-aos="fade-up">Great Offers</h2>
            <p class="lead" data-aos="fade-up">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In dolor, iusto doloremque quo odio repudiandae sunt eveniet? Enim facilis laborum voluptate id porro, culpa maiores quis, blanditiis laboriosam alias. Sed.</p>
          </div>
        </div>

        <div class="site-block-half d-flex bg-white" data-aos="fade-up" data-aos-delay="100">
          <a href="#" class="image d-block bg-image" style="background-image: url('img/img_1.jpg');"></a>
          <div class="text">
            <span class="d-block"><span class="display-4 text-primary">$199</span> / per night </span>
            <h2>Superior Room</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis cupiditate deserunt repellendus autem! Incidunt, cupiditate minus ad ipsam eos laudantium eum harum ut consequatur eligendi, accusantium reprehenderit quo saepe neque.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis cupiditate deserunt repellendus autem! Incidunt, cupiditate minus ad ipsam eos laudantium eum harum ut consequatur eligendi, accusantium reprehenderit quo saepe neque.</p>
            <p><a href="#" class="btn btn-primary text-white">Book Now</a></p>
          </div>
        </div>
        <div class="site-block-half d-flex bg-white" data-aos="fade-up" data-aos-delay="200">
          <a href="#" class="image d-block bg-image order-2" style="background-image: url('img/img_2.jpg');"></a>
          <div class="text order-1">
            <span class="d-block"><span class="display-4 text-primary">$299</span> / per night </span>
            <h2>Presidential Room</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis cupiditate deserunt repellendus autem! Incidunt, cupiditate minus ad ipsam eos laudantium eum harum ut consequatur eligendi, accusantium reprehenderit quo saepe neque.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis cupiditate deserunt repellendus autem! Incidunt, cupiditate minus ad ipsam eos laudantium eum harum ut consequatur eligendi, accusantium reprehenderit quo saepe neque.</p>
            <p><a href="#" class="btn btn-primary text-white">Book Now</a></p>
          </div>
        </div>

        <div class="row justify-content-center text-center mt-5" data-aos="fade-up" data-aos-delay="300">
          <div class="col-md-4"><p><a href="#" class="btn btn-primary text-white py-3 px-5">View All Rooms</a></p></div>
        </div>
      </div>
    </section>

    <section class="section slider-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8">
            <h2 class="heading" data-aos="fade-up">See The Gallery</h2>
            <p class="lead" data-aos="fade-up" data-aos-delay="100">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In dolor, iusto doloremque quo odio repudiandae sunt eveniet? Enim facilis laborum voluptate id porro, culpa maiores quis, blanditiis laboriosam alias. Sed.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="home-slider major-caousel owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
              <div class="slider-item">
                <img src="img/slider-1.jpg" alt="Image placeholder" class="img-fluid">
              </div>
              <div class="slider-item">
                <img src="img/slider-2.jpg" alt="Image placeholder" class="img-fluid">
              </div>
              <div class="slider-item">
                <img src="img/slider-3.jpg" alt="Image placeholder" class="img-fluid">
              </div>
              <div class="slider-item">
                <img src="img/slider-4.jpg" alt="Image placeholder" class="img-fluid">
              </div>
              <div class="slider-item">
                <img src="img/slider-5.jpg" alt="Image placeholder" class="img-fluid">
              </div>
              <div class="slider-item">
                <img src="img/slider-6.jpg" alt="Image placeholder" class="img-fluid">
              </div>
              <div class="slider-item">
                <img src="img/slider-7.jpg" alt="Image placeholder" class="img-fluid">
              </div>
            </div>
            <!-- END slider -->
          </div>

          <div class="col-md-12 text-center"><a href="#" class="">View More Photos</a></div>

        </div>
      </div>
    </section>
    <!-- END section -->


    <!-- END section -->
    <section class="section testimonial-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8">
            <h2 class="heading" data-aos="fade-up">Testimonial</h2>
          </div>
        </div>



        <div class="row">
          <div class="js-carousel-2 owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">

            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                <img src="img/person_1.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
              </div>
              <blockquote>

                <p>&ldquo;Et quidem, impedit eum fugiat excepturi iste aliquid suscipit, tempore, delectus rem soluta voluptatem distinctio sed dolores, magni fugit nemo cum expedita. Totam a accusantium sunt aut autem placeat officia.&rdquo;</p>
              </blockquote>
              <p><em>&mdash; Jean Smith</em></p>
            </div>

            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                <img src="img/person_2.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
              </div>
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. In dolor, iusto doloremque quo odio repudiandae sunt eveniet? Enim facilis laborum voluptate id porro, culpa maiores quis, blanditiis laboriosam alias&rdquo;</p>
              </blockquote>
              <p><em>&mdash; John Doe</em></p>
            </div>

            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                <img src="img/person_3.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
              </div>
              <blockquote>

                <p>&ldquo;Nostrum, alias, provident magnam sit blanditiis laboriosam unde quaerat, at ipsam, ratione maiores saepe nisi modi corporis quas! Beatae quam, quod aspernatur debitis nesciunt quasi porro ea iste nobis aliquid perspiciatis nostrum culpa impedit aut, iure blanditiis itaque similique sunt!&rdquo;</p>
              </blockquote>
              <p><em>&mdash; John Doe</em></p>
            </div>


            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                <img src="img/person_1.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
              </div>
              <blockquote>

                <p>&ldquo;Et quidem, impedit eum fugiat excepturi iste aliquid suscipit, tempore, delectus rem soluta voluptatem distinctio sed dolores, magni fugit nemo cum expedita. Totam a accusantium sunt aut autem placeat officia.&rdquo;</p>
              </blockquote>
              <p><em>&mdash; Jean Smith</em></p>
            </div>

            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                <img src="img/person_2.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
              </div>
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. In dolor, iusto doloremque quo odio repudiandae sunt eveniet? Enim facilis laborum voluptate id porro, culpa maiores quis, blanditiis laboriosam alias&rdquo;</p>
              </blockquote>
              <p><em>&mdash; John Doe</em></p>
            </div>

            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                <img src="img/person_3.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
              </div>
              <blockquote>

                <p>&ldquo;Nostrum, alias, provident magnam sit blanditiis laboriosam unde quaerat, at ipsam, ratione maiores saepe nisi modi corporis quas! Beatae quam, quod aspernatur debitis nesciunt quasi porro ea iste nobis aliquid perspiciatis nostrum culpa impedit aut, iure blanditiis itaque similique sunt!&rdquo;</p>
              </blockquote>
              <p><em>&mdash; John Doe</em></p>
            </div>

          </div>
            <!-- END slider -->
        </div>

      </div>
    </section>
    <section class="section blog-post-entry bg-light">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8">
            <h2 class="heading" data-aos="fade-up">Events</h2>
            <p class="lead" data-aos="fade-up">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In dolor, iusto doloremque quo odio repudiandae sunt eveniet? Enim facilis laborum voluptate id porro, culpa maiores quis, blanditiis laboriosam alias. Sed.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="100">

            <div class="media media-custom d-block mb-4">
              <a href="#" class="mb-4 d-block"><img src="img/img_1.jpg" alt="Image placeholder" class="img-fluid"></a>
              <div class="media-body">
                <span class="meta-post">February 26, 2018</span>
                <h2 class="mt-0 mb-3"><a href="#">Unwind with Your Family in our Luxury Services</a></h2>
              </div>
            </div>

          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="200">
            <div class="media media-custom d-block mb-4">
              <a href="#" class="mb-4 d-block"><img src="img/img_2.jpg" alt="Image placeholder" class="img-fluid"></a>
              <div class="media-body">
                <span class="meta-post">February 26, 2018</span>
                <h2 class="mt-0 mb-3"><a href="#">Unwind with Your Family in our Luxury Services</a></h2>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="300">
            <div class="media media-custom d-block mb-4">
              <a href="#" class="mb-4 d-block"><img src="img/img_3.jpg" alt="Image placeholder" class="img-fluid"></a>
              <div class="media-body">
                <span class="meta-post">February 26, 2018</span>
                <h2 class="mt-0 mb-3"><a href="#">Unwind with Your Family in our Luxury Services</a></h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section border-top">
      <div class="container" >
        <div class="row align-items-center">
          <div class="col-md-6" data-aos="fade-up">
            <h2>Make Yourself Comfortable in Any of Our Fully Air-conditioned Rooms</h2>
          </div>
          <div class="col-md-6 text-right" data-aos="fade-up" data-aos-delay="200">
            <a href="reservation.html" class="btn btn-primary py-3 text-white px-5">Reserve Now</a>
          </div>
        </div>
      </div>
    </section>
>>>>>>> Stashed changes
@stop
