<!-- banner -->
<div class="banner">

				<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						 // Slideshow 4
						$("#slider3").responsiveSlides({
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
		<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider3">
				<li>
					<div class="banner1">
						<div class="container">
							<div class="banner-info">
								<h3>Providing<span> Appropriate Health Care </span> For Adult, Seniors and children</h3>
								<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
								sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
								Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, 
								adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et 
								dolore magnam aliquam quaerat voluptatem.</p>
								<a href="#book" class="hvr-outline-out button2 scroll">Book an appointment</a>
							</div>
						</div>
					</div>
				</li> 
				<li>
					<div class="banner2">
						<div class="container">
							<div class="banner-info2 text-center">
								<h3>Providing Eye Care <span>Treatments & Surgeries For All Problems</span></h3>
								<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
								sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
								Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, 
								adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et 
								dolore magnam aliquam quaerat voluptatem.</p>
								<a href="#book" class="hvr-outline-out button2 scroll">Book an appointment</a>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="banner1">
						<div class="container">
							<div class="banner-info">
								<h3>Providing<span> Appropriate Health Care </span> For Adult, Seniors and children</h3>
								<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
								sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
								Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, 
								adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et 
								dolore magnam aliquam quaerat voluptatem.</p>
								<a href="#book" class="hvr-outline-out button2 scroll">Book an appointment</a>
							</div>
						</div>
					</div>
				</li> 
				<li>
					<div class="banner2">
						<div class="container">
							<div class="banner-info2 text-center">
								<h3>Providing Eye Care <span>Treatments & Surgeries For All Problems</span></h3>
								<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
								sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
								Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, 
								adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et 
								dolore magnam aliquam quaerat voluptatem.</p>
								<a href="#book" class="hvr-outline-out button2 scroll">Book an appointment</a>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<div class="clearfix"></div>
</div>
<!-- //banner -->