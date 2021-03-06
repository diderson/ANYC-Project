
  <nav role="navigation">
      <ul id="navigation" class="navigation">
          <li {if $pageid eq 'index'}class="menu-item current_page_item"{/if}>
              <a href="/"><span>Accueil</span></a>
          </li>
         {* <li class="dropdown menu-item menu-item-has-children">
              <a><span>Features</span></a>
              <ul class="sub-menu">
                  <li class="dropdown menu-item menu-item-has-children">
                      <a><span>Shortcodes</span></a>
                      <ul class="sub-menu">
                          <li class="dropdown menu-item menu-item-has-children">
                              <a><span>Block Shortcodes</span></a>
                              <ul class="sub-menu">
                                  <li><a href="person_block.html"><span>Person Block</span></a></li>
                                  <li><a href="featured.html"><span>Featured Blocks</span></a></li>
                                  <li><a href="colored_blocks.html"><span>Colored Blocks</span></a></li>
                                  <li><a href="columns.html"><span>Columns</span></a></li>
                                  <li><a href="tabs_and_toggle.html"><span>Tabs &amp; Toggle</span></a></li>
                                  <li><a href="information_boxes.html"><span>Information Boxes</span></a></li>
                                  <li><a href="pricing_tables.html"><span>Pricing Tables</span></a></li>
                              </ul>
                          </li>
                          <li class="dropdown menu-item menu-item-has-children">
                              <a><span>Other Shortcodes</span></a>
                              <ul class="sub-menu">
                                  <li><a href="content_slider.html"><span>Content Slider</span></a></li>
                                  <li><a href="posttype.html"><span>Post type shortcode</span></a></li>
                                  <li><a href="statistics.html"><span>Statistics</span></a></li>
                                  <li><a href="contact_form.html"><span>Contact Form Shortcode</span></a>
                                  <li><a href="lightboxes.html"><span>Lightboxes</span></a></li>
                                  <li><a href="media.html"><span>Media</span></a></li>
                                  <li><a href="player.html"><span>Audio &amp; Video Players</span></a></li>
                                  <li><a href="googlemaps.html"><span>Google Maps</span></a></li>
                              </ul>
                          </li>
                      </ul>
                  </li>
                  <li class="dropdown menu-item menu-item-has-children">
                      <a><span>Layouts</span></a>
                      <ul class="sub-menu">
                          <li><a href="about.html"><span>About Us</span></a></li>
                          <li><a href="error.html"><span>404 Error Page</span></a></li>
                          <li><a href="pass.html"><span>Password-protected page</span></a></li>
                          <li><a href="sitemap.html"><span>Sitemap</span></a></li>
                          <li><a href="lsidebar.html"><span>Left Sidebar</span></a></li>
                          <li><a href="rsidebar.html"><span>Right Sidebar</span></a></li>
                          <li><a href="timeline_service.html"><span>Timeline Service</span></a></li>
                          <li><a href="timeline.html"><span>Timeline Blog</span></a></li>
                      </ul>
                  </li>
                  <li class="menu-item">
                      <a href="testimonials.html"><span>Testimonials</span></a>
                  </li>
                  <li class="dropdown menu-item menu-item-has-children">
                      <a><span>Heading Templates</span></a>
                      <ul class="sub-menu">
                          <li><a href="heading.html"><span>Standard Heading</span></a></li>
                          <li><a href="heading_text.html"><span>With Subtitle</span></a></li>
                          <li><a href="no_heading.html"><span>With Icon</span></a></li>
                          <li><a href="heading_text_icon.html"><span>With Subtitle &#038; Icon</span></a></li>
                      </ul>
                  </li>
                  <li class="menu-item"><a href="typography.html"><span>Typography</span></a></li>
                  <li class="menu-item"><a href="widgets.html"><span>Widgets and sidebars</span></a></li>
              </ul>
          </li> 
          <li class="dropdown menu-item menu-item-has-children">
              <a><span>Services</span></a>
              <ul class="sub-menu">
                  <li class="menu-item"><a href="service_four.html"><span>Four Columns Services Page</span></a></li>
                  <li class="menu-item"><a href="service_three.html"><span>Three Columns Services Page</span></a></li>
                  <li class="menu-item"><a href="service_two.html"><span>Two Columns Services Page</span></a></li>
              </ul>
          </li> *}
          <li {if $pageid eq 'fournisseurs'}class="menu-item current_page_item"{/if}>
            <a href="/fournisseur"><span>Fournisseurs</span></a>
            <ul class="sub-menu">
                  <li class="menu-item"><a href="/fournisseur"><span>Fabricants</span></a></li>
                  {*<li class="menu-item"><a href="#"><span>Distributeurs</span></a></li>*}
                  <li class="menu-item"><a href="#"><span>Distributeurs/Représentants</span></a></li>
                  <li class="menu-item"><a href="#"><span>Pharmacies</span></a></li>
              </ul>
          </li>
          <li {if $pageid eq 'medicaments' || $pageid eq 'recherche'}class="menu-item current_page_item"{/if}>
            <a href="/medicament"><span>Médicaments</span></a>
            <ul class="sub-menu">
                  <li class="menu-item"><a href="/medicament"><span>Par Nom commercial</span></a></li>
                  <li class="menu-item"><a href="/gpetherapeutique"><span>Par Domaine Therapeutique</span></a></li>
                  <li class="menu-item"><a href="/principeactif"><span>Par Substance Active</span></a></li>
                  <li class="menu-item"><a href="/recherche"><span>Recherche Avancé</span></a></li>
              </ul>
          </li>
          <li {if $pageid eq 'news'}class="menu-item current_page_item"{/if}><a href="/news"><span>Actualités</span></a></li>
          <li {if $pageid eq 'alert-info'}class="menu-item current_page_item"{/if}><a href="#"><span>Alertes Infos</span></a></li>
          <li {if $pageid eq 'repertoires'}class="menu-item current_page_item"{/if}><a href="#"><span>Répertoires</span></a></li>
      </ul>
      <div class="cl"></div>
      <div class="wrap_header_search">
          <a class="search_but cmsms_icon" href="javascript:void(0);"></a>
          <div class="search_line">
              <form method="get" action="/recherche">
                  <p>
                      {*<input name="s" id="error_search" placeholder="Tapez le nom d'un médicament" value="" type="text">*}
                      <input name="search_value" id="search_value" placeholder="Tapez le nom d'un médicament" value="" type="text">
                      <input type="hidden" name="search_type" id="search_type" value="medname">
                      <input type="hidden" name="trier_par" id="trier_par" value="ordre_alphabetique">
                      <input value="" type="submit">
                  </p>
              </form>
          </div>
      </div>
  </nav>
  <div class="cl"></div>
