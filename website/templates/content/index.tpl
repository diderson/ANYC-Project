<!-- __________________________________________________ Start Top -->       
            <section id="top">
              {include file="html-slider.tpl"}
            </section>
            <!-- _________________________  Finish Top _________________________ -->

            <!-- _________________________ Start Top Sidebar _________________________ -->      
            <section class="top_sidebar">
               {include file="html-top-side-slider.tpl"}
            </section>
            <!-- _________________________ Finish Top Sidebar _________________________ -->     
            <div class="content_wrap fullwidth">

                <!--_________________________ Start Content _________________________ -->       
                <section id="middle_content" role="main">
                    
                    <div class="entry">
                        <div class="cmsms_cc">
                            {include file="block/tout-savoir.tpl"} 
                            {if $publiciteData}
                              <div class="one_first first_column">
                                  <section id="services_shortcode_535774340eace" class="post_type_shortcode">
                                      <div class="post_type_shortcode_inner">
                                          <h3>Annonces</h3>
                                          <script type="text/javascript"> 
                                              jQuery(document).ready(function () {
                                                  jQuery('#services_shortcode_535774340eace .post_type_list').cmsmsResponsiveContentSlider({
                                                      sliderWidth: '100%',
                                                      sliderHeight: 'auto',
                                                      animationSpeed: 500,
                                                      animationEffect: 'slide',
                                                      animationEasing: 'easeInOutExpo',
                                                      pauseTime: 0,
                                                      activeSlide: 1,
                                                      touchControls: false,
                                                      pauseOnHover: false,
                                                      arrowNavigation: true,
                                                      slidesNavigation: false
                                                  });
                                              });
                                          </script>
                                          <ul class="post_type_list services_container responsiveContentSlider">
                                              <li>
                                                 {section name=a loop=$publiciteData start=0 max=4}
                                                    <article class="service type-service hentry one_fourth format-slider">
                                                        <a href="diagnosis_clinic.html"></a>
                                                        <figure>
                                                            <a class="preloader" href="diagnosis_clinic.html" title="Pediatric Clinic">
                                                                <img width="440" height="440" src="{$publiciteData[a].pub_image}" class="fullwidth wp-post-image" alt="Pediatric Clinic" title="Pediatric Clinic" />      
                                                            </a>
                                                        </figure>
                                                        <div class="service_rollover">
                                                            <header class="entry-header">
                                                                <h5 class="entry-title">
                                                                    <a href="{$publiciteData[a].pub_link}" title="{$publiciteData[a].pub_titre}">{$publiciteData[a].pub_titre}</a>
                                                                </h5>
                                                            </header>
                                                            <footer class="entry-meta">
                                                                <span class="post_category">
                                                                    <a href="{$publiciteData[a].pub_link}" rel="tag">{$publiciteData[a].pub_linktitre}</a>,
                                                                </span>
                                                            </footer>
                                                            <div class="entry-content">
                                                                <p>
                                                                    {$publiciteData[a].pub_content}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </article>
                                                  {/section}
                                              </li>

                                              <li>
                                                 {section name=a loop=$publiciteData start=5 max=4}
                                                    <article class="service type-service hentry one_fourth format-slider">
                                                        <a href="diagnosis_clinic.html"></a>
                                                        <figure>
                                                            <a class="preloader" href="diagnosis_clinic.html" title="Pediatric Clinic">
                                                                <img width="440" height="440" src="{$publiciteData[a].pub_image}" class="fullwidth wp-post-image" alt="Pediatric Clinic" title="Pediatric Clinic" />      
                                                            </a>
                                                        </figure>
                                                        <div class="service_rollover">
                                                            <header class="entry-header">
                                                                <h5 class="entry-title">
                                                                    <a href="{$publiciteData[a].pub_link}" title="{$publiciteData[a].pub_titre}">{$publiciteData[a].pub_titre}</a>
                                                                </h5>
                                                            </header>
                                                            <footer class="entry-meta">
                                                                <span class="post_category">
                                                                    <a href="{$publiciteData[a].pub_link}" rel="tag">{$publiciteData[a].pub_linktitre}</a>,
                                                                </span>
                                                            </footer>
                                                            <div class="entry-content">
                                                                <p>
                                                                    {$publiciteData[a].pub_content}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </article>
                                                  {/section}
                                              </li>
                                          </ul>
                                          <div class="cl"></div>
                                      </div>
                                  </section>
                              </div>
                              {/if}
                            <!-- {if $newsData}
                              <div class="one_half first_column">
                                  <section class="post_type_shortcode type_post">
                                      <div class="post_type_shortcode_inner">
                                          <h3>Actualités</h3>
                                          {section name=a loop=$newsData}
                                            <article class="type-post format-standard hentry category-home-post category-medical one_fourth">
                                                <figure class="cmsms_post_type_img">
                                                    <img width="150" height="150" src="{$newsData[a].news_image}" class="attachment-thumbnail wp-post-image" alt="Center for Medical Technology Innovation" title="Center for Medical Technology Innovation" />     
                                                </figure>
                                                <header class="entry-header">
                                                    <h4 class="entry-title">
                                                        <a href="/news-detail/{$newsData[a].id_news}">{$newsData[a].news_title}</a>
                                                    </h4>
                                                    <div class="cmsms_post_info"> <abbr class="published" title="January 24, 2014">{$newsData[a].cdate|date_format:"%e %B %Y %H:%M:%S"|escape:"html"}</abbr>
                                                        <span class="cmsms_comments_wrap">
                                                            {* Comments (
                                                            <a class="cmsms_comments" href="#" title="Comment on Center for Medical Technology Innovation">0</a>
                                                            )*}
                                                        </span>
                                                    </div>
                                                </header>
                                                <div class="entry-content">
                                                    
                                                        {$newsData[a].news_intro}
                                                    
                                                </div>
                                            </article>
                                          {/section}
                                          <div class="cl"></div>
                                      </div>
                                  </section>
                              </div>
                            {/if}
                            {if $testimonyData}
                              <div class="one_half">
                                  <section id="services_shortcode_5357743422388" class="post_type_shortcode type_testimonial">
                                      <div class="post_type_shortcode_inner">
                                          <h3>Témoignages</h3>
                                          <script type="text/javascript">
                                              jQuery(document).ready(function () {
                                                  jQuery('#services_shortcode_5357743422388 .post_type_list').cmsmsResponsiveContentSlider({
                                                      sliderWidth: '100%',
                                                      sliderHeight: 'auto',
                                                      animationSpeed: 500,
                                                      animationEffect: 'slide',
                                                      animationEasing: 'easeInOutExpo',
                                                      pauseTime: 0,
                                                      activeSlide: 1,
                                                      touchControls: false,
                                                      pauseOnHover: false,
                                                      arrowNavigation: true,
                                                      slidesNavigation: false
                                                  });
                                              });
                                          </script>
                                          <ul class="post_type_list services_container responsiveContentSlider">
                                              {section name=t loop=$testimonyData}
                                                <li>
                                                    <article class="testimonial type-testimonial hentry one_first">
                                                        <div class="tl-content_wrap">
                                                            <div class="tl-content">
                                                                <blockquote>
                                                                    {$testimonyData[t].testimony_content}
                                                                </blockquote>
                                                            </div>
                                                        </div>
                                                        <img width="150" height="150" src="{$testimonyData[t].testimony_image}" class="attachment-thumbnail wp-post-image" alt="Fredrick Keen" title="Fredrick Keen" />        
                                                        <a target="_blank" href="#" class="tl_author">{$testimonyData[t].testimony_name}</a>
                                                        <p class="tl_company">{$testimonyData[t].testimony_age}</p>
                                                    </article>
                                                </li>
                                              {/section}
                                          </ul>
                                          <div class="cl"></div>
                                      </div>
                                  </section>
                              </div>
                            {/if} -->
                           {* {include file="block/content-before-bottom-tweet.tpl"} *}
                        </div>
                    </div>
                    
                </section>
                <!-- _________________________ Finish Content _________________________ -->     

                <div class="cl"></div>
            </div>