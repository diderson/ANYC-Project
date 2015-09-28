<!--
	#################################
		- THEMEPUNCH BANNER -
	#################################
	-->
	<div class="tp-banner-container">
		<div class="tp-banner" >
			<ul>
				<!-- SLIDE  -->
				<li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
					<!-- MAIN IMAGE -->
					<img src="images/slide/slide1.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
					<!-- LAYERS -->
					<!-- LAYER NR. 1 -->
					<div class="tp-caption lightgrey_divider skewfromrightshort fadeout"
						data-x="85"
						data-y="224"
						data-speed="500"
						data-start="1200"
						data-easing="Power4.easeOut">My Caption
					</div>
					...

				</li>
				<!-- SLIDE  -->
				<li data-transition="zoomout" data-slotamount="7" data-masterspeed="300" >
					<!-- MAIN IMAGE -->
					<img src="images/slide/slide2.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
					<!-- LAYERS -->
					<!-- LAYER NR. 1 -->
					<div class="tp-caption lightgrey_divider skewfromrightshort fadeout"
						data-x="85"
						data-y="224"
						data-speed="500"
						data-start="1200"
						data-easing="Power4.easeOut">My Caption
					</div>
					...
				</li>
				....
			</ul>
		</div>
	</div>

	<script type="text/javascript">
				jQuery(document).ready(function() {
					   jQuery('.tp-banner').revolution(
						{
							delay:9000,
							startwidth:1160,
							startheight:300,
							hideThumbs:10
						});
				});
			</script>