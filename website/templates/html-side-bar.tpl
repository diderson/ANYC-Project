
					<div class="one_first">
						<aside id="search-2" class="widget widget_search">
							<div class="search_line">
								<form method="get" action="/recherche">
									<p>
										<input name="search_value" id="search_value" placeholder="Tapez le nom d'un médicament" value="" type="text">
                      <input type="hidden" name="search_type" id="search_type" value="medname">
                      <input type="hidden" name="trier_par" id="trier_par" value="ordre_alphabetique">		
										<input value="" type="submit"></p>
								</form>
							</div>
						</aside>
					</div>
					<div class="cl"></div>
					<div class="one_first">
						<aside id="custom-popular-services-2" class="widget widget_custom_popular_services_entries">
							{if $sideNewsData}
								<div class="widget_custom_services_entries_container">
									
									<h3 class="widgettitle">Actualités Recentes</h3>
									{section loop=$sideNewsData name=a}
									<a href="/news-detail/{$sideNewsData[a].id_news}"><img width="50" src="{$sideNewsData[a].news_image}" class="attachment-100x100 wp-post-image" alt="{$sideNewsData[a].news_title}c" style="float:left; padding-right:5px;" title="Pediatric Clinic"> {$sideNewsData[a].news_title}</a>
									<div>
										<div class="divider"></div>
									</div>
									{/section}
								</div>
							{/if}
							<script type="text/javascript">
								jQuery(document).ready(function () {
								    jQuery('#custom-popular-services-2 .widget_custom_services_entries_slides').cmsmsResponsiveContentSlider({
								        sliderWidth: '100%',
								        sliderHeight: 'auto',
								        animationSpeed: 500,
								        animationEffect: 'slide',
								        animationEasing: 'easeInOutExpo',
								        pauseTime: 7000,
								        activeSlide: 1,
								        touchControls: true,
								        pauseOnHover: false,
								        arrowNavigation: true,
								        slidesNavigation: true,
								        afterSliderLoad: function () {
								            if (jQuery('#bottom a.sidebar_button_inner').hasClass('active') && jQuery('#bottom').height() !== 0) {
								                jQuery(window).trigger('resize');
								            }
								        },
								        afterSlideChange: function () {
								            if (jQuery('#bottom a.sidebar_button_inner').hasClass('active') && jQuery('#bottom').height() !== 0) {
								                jQuery(window).trigger('resize');
								            }
								        }
								    });
								});
							</script>
							{if $sidePubliciteData}
							<div class="widget_custom_services_entries_container">
								<h3 class="widgettitle">Annonces</h3>
								<ul class="widget_custom_services_entries_slides responsiveContentSlider">
									{section name=a loop=$sidePubliciteData}
										<li>
											<figure>
												<img width="600" height="370" src="{$sidePubliciteData[a].pub_image}" class="fullwidth wp-post-image" alt="{$sidePubliciteData[a].pub_titre}" title="{$sidePubliciteData[a].pub_titre}" style="width:100%; height:auto;" />		
											</figure>
											<h6 class="service_title">
												<a href="{$sidePubliciteData[a].pub_link}" title="{$sidePubliciteData[a].pub_linktitre}">{$sidePubliciteData[a].pub_titre}</a>
											</h6>
											<div class="entry-content">
												<p>
													{$sidePubliciteData[a].pub_content}
												</p>
											</div>
										</li>
									{/section}
								</ul>
							</div>
							{/if}
						</aside>
					</div>
				
					<div class="one_first">
						<aside id="custom-recent-testimonials-2" class="widget widget_custom_recent_testimonials_entries">
							<script type="text/javascript">
								jQuery(document).ready(function () {
								    jQuery('#custom-recent-testimonials-2 .widget_custom_services_entries_slides').cmsmsResponsiveContentSlider({
								        sliderWidth: '100%',
								        sliderHeight: 'auto',
								        animationSpeed: 500,
								        animationEffect: 'slide',
								        animationEasing: 'easeInOutExpo',
								        pauseTime: 7000,
								        activeSlide: 1,
								        touchControls: true,
								        pauseOnHover: false,
								        arrowNavigation: false,
								        slidesNavigation: false,
								        afterSliderLoad: function () {
								            if (jQuery('#bottom a.sidebar_button_inner').hasClass('active') && jQuery('#bottom').height() !== 0) {
								                jQuery(window).trigger('resize');
								            }
								        },
								        afterSlideChange: function () {
								            if (jQuery('#bottom a.sidebar_button_inner').hasClass('active') && jQuery('#bottom').height() !== 0) {
								                jQuery(window).trigger('resize');
								            }
								        }
								    });
								});
							</script>
							{if $sideTestimonyData}
								<div class="widget_custom_services_entries_container">
									<h3 class="widgettitle">Témoignages</h3>
									<ul class="widget_custom_services_entries_slides responsiveContentSlider">
										{section name=a loop=$sideTestimonyData}
											<li>
												<div class="tl-content_wrap">
													<div class="tl-content">
														<p>
															{$sideTestimonyData[a].testimony_content}
														</p>
													</div>
												</div>
												<figure class="tl_author_img">
													<img width="150" height="150" src="{$sideTestimonyData[a].testimony_image}" class="attachment-thumbnail wp-post-image" alt="{$sideTestimonyData[a].testimony_name}" title="{$sideTestimonyData[a].testimony_name}s" style="width:45px; height:45px;" />		
												</figure>
												<a target="_blank" href="#" class="tl_author">{$sideTestimonyData[a].testimony_name}</a>
												<p class="tl_company">{$sideTestimonyData[a].testimony_age}</p>
											</li>
										{/section}
									</ul>
								</div>
							{/if}
						</aside>
					</div>
				
			
				