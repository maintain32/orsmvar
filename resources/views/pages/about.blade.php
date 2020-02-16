@extends('layout.default')
@section('content')

<body style="">
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

            <h1 class="entry-title">How to get to us</h1>
            
    <div class="section-inner-wrap">
	
		<div class="section-overlay" id="rpsV4KEAWODM6P93QY73R2V46EO71MYBTIH-overlay"></div>
		
	<div class="skeleton section-content auto_align clearfix" data-width="default">
         <div class="row default">
					
<div class="artlgnc_builder-container  layout_element  one_half first  top   clearfix" id="rpcQIOJQM61ECQ24TC3XU43DRV4S9U10QEB" data-layout="one_half" style="background-image: none;">
	<div class="artlgnc_builder-inner-container clearfix">
	
<div data-key="artlgnc_builder_text_widget" id="rpwRWJJQ8AR5S5YFS8LWQF01UH04GCIW29O" class=" w_full w_layout_element  top   artlgnc_builder_text_widget">


<div class="ARTLGNC-text-column none  col-align-left  clearfix"> 
      <div class="ARTLGNC-text-area">
       <div class="text-title-wrap ">
        </div>
        <strong>Take a flight or a ferry to Salamangka Beach and Dive Resort on the southern shore of  Siquijor. </strong>
          <p>Located on the island of Siquijor in the Visayas region of the Philippines,
               Salamangka Beach and Dive Resort can be easily accessed via internal flights and ferries.
                We recommend flying from Manila to Dumaguete. From there, you can take the ferry from 
                Dumaguete Harbour to Siquijor or Larena. Alternatively, Air Juan now offers flights 
                directly from Cebu to Siquijor airport. In the table below, you can see the transfer times,
                 frequencies and rates.</p>
</body>
@stop
