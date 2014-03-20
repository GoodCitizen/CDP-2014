<div class="off-canvas-wrap">
  <div class="inner-wrap">
    <nav class="tab-bar off-canvas-tab-bar hide-for-large-up">
      <section class="left-small">
        <a class="left-off-canvas-toggle menu-icon"><span></span></a>
      </section>
    </nav>

    <aside class="left-off-canvas-menu">
      <?php
        if (has_nav_menu('mobile_navigation')) :
          wp_nav_menu(array('theme_location' => 'mobile_navigation', 'menu_class' => 'off-canvas-list'));
        endif;
      ?>
    </aside>

<header>
  <div class="container">
    <div class="row">
      <div class="large-5 columns">
        <div class="logo">
          <a href="<?php echo home_url(); ?>/">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo-trans.png">
          </a>
        </div>
      </div>
      <div class="large-7 columns">
        <div class="but-right">
          <nav class="top-bar">
            <div class="top-bar-section secondary-nav show-for-large-up">
              <?php
                 if (has_nav_menu('primary_navigation')) :
                   wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'left'));
                 endif;
               ?>
            </div>
          </nav>
          <form role="search" method="get" action="<?php echo home_url('/'); ?>">
            <div class="search">
              <input type="search" value="<?php if (is_search()) { echo get_search_query(); } ?>" name="s" placeholder="<?php _e('Search', 'roots'); ?> <?php bloginfo('name'); ?>">
            </div>
          </form>
        </div>
      </div>
    </div> <!-- /.row -->
    <div class="row hide-for-small-only">
      <div class="large-10 columns">
        <div class="main-nav">
          <dl class="accordion" data-accordion>
            <dd>
              <a class="main-menu-stack disasters-link" href="#panel1">
                Disasters
              </a>
              <a class="main-menu-stack services-link" href="#panel2">
                Services
              </a>
              <a class="main-menu-stack learning-link" href="#panel3">
                Learning Center
              </a>
            </dd>
            <dd>
              <div id="panel1" class="content disasters-panel">
                <dl class="tabs vertical left-menu" data-tab>
                  <dd class="active"><a href="panel1a">Disasters</a></dd>
                </dl>
                <div class="tabs-content vertical">
                  <div class="content disaster-menu-tabs active" id="panel1a">
                    <div class="menu-disaster-menu-container">
                      <div class="large-6 columns center-menu">
                        <ul>
                          <li class="list-link-title"><a href="<?php echo home_url(); ?>/disasters/">Disasters</a></li>
                          <li id="menu-item-6427" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6427"><a href="<?php echo home_url(); ?>/where/disaster-statistics/">Disaster Statistics</a></li>
                          <li id="" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?php echo home_url(); ?>/where/what-we-cover/">What We Cover</a></li>

                          <li id="menu-item-6425" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-6425 link-group-header"><a href="<?php echo home_url(); ?>/where/current-disasters/">Developing/Ongoing Disasters</a></li>

                          <li id="menu-item-6444" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6444"><a href="<?php echo home_url(); ?>/disasters/central-african-republic-car/">Central African Republic</a></li>
                          <li id="menu-item-6430" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6430"><a href="<?php echo home_url(); ?>/disasters/horn-of-africa-famine/">Horn of Africa</a></li>
                          <li id="menu-item-6447" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6447"><a href="<?php echo home_url(); ?>/disasters/mali/">Mali</a></li>
                          <li id="menu-item-6446" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6446"><a href="<?php echo home_url(); ?>/disasters/2013-philippines-earthquake-and-typhoon/">Philippines: Typhoon Haiyan</a></li>
                          <li id="menu-item-6429" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6429"><a href="<?php echo home_url(); ?>/disasters/sahel-food-crisis/">The Sahel</a></li>
                          <li id="menu-item-6443" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6443"><a href="<?php echo home_url(); ?>/disasters/hurricane-sandy/">Hurricane Sandy</a></li>
                          <li id="menu-item-6445" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6445"><a href="<?php echo home_url(); ?>/disasters/south-sudan/">South Sudan</a></li>
                          <li id="menu-item-6448" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6448"><a href="<?php echo home_url(); ?>/disasters/syria-crisis/">Syria</a></li>
                        </ul>
                      </div>
                      <div class="large-6 columns far-right-menu">
                        <ul>
                          <li id="menu-item-6426" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-6426 list-link-title"><a href="<?php echo home_url(); ?>/where/archived-disasters/">Past Disasters</a>
                          <li id="menu-item-6451" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6451"><a href="<?php echo home_url(); ?>/disasters/colorado-floods-2013-2/">2013: Colorado Floods</a></li>
                          <!-- <li id="menu-item-6441" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6441"><a href="<?php echo home_url(); ?>/what-we-provide/events/other-upcoming-events/moore-oklahoma-tornado-teleconference/">2013: Moore, OK Tornado</a></li> -->
                          <li id="menu-item-6457" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6457"><a href="<?php echo home_url(); ?>/disasters/oklahoma-tornadoes/">2013: Oklahoma Tornadoes</a></li>
                          <li id="menu-item-6452" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6452"><a href="<?php echo home_url(); ?>/disasters/pakistan/">2013: Pakistan Flooding</a></li>
                          <li id="menu-item-6455" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6455"><a href="<?php echo home_url(); ?>/disasters/cyclone-phailin/">2013: Philippines: Typhoon Phailin</a></li>
                          <li id="menu-item-6458" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6458"><a href="<?php echo home_url(); ?>/disasters/typhoon-bopha-philippines/">2013: Philippines: Typhoon Bopha</a></li>
                          <li id="menu-item-6456" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6456"><a href="<?php echo home_url(); ?>/disasters/china-sichuan-province-earthquake/">2013: Sichuan Province Earthquake</a></li>
                          <li id="menu-item-6454" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6454"><a href="<?php echo home_url(); ?>/disasters/vietnam-typhoons-and-floods/">2013: Vietnam Flooding</a></li>
                          <li id="menu-item-6449" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6449"><a href="<?php echo home_url(); ?>/disasters/western-wildfires-2013/">2013: Western Wildfires</a></li>
                          <li id="menu-item-6450" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6450"><a href="<?php echo home_url(); ?>/disasters/hurricane-isaac/">2012: Hurricane Isaac</a></li>
                          <li id="menu-item-6440" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6440"><a href="<?php echo home_url(); ?>/where/archived-disasters/mid-atlantic-derecho/">2012: Mid-Atlantic Derecho</a></li>
                          <li id="menu-item-6432" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6432"><a href="<?php echo home_url(); ?>/where/archived-disasters/thailand-flooding/">2012: Thailand Flooding</a></li>
                          <li id="menu-item-6431" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6431"><a href="<?php echo home_url(); ?>/where/archived-disasters/western-wildfires/">2012: Western Wildfires</a></li>
                          <li id="menu-item-6435" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6435"><a href="<?php echo home_url(); ?>/where/archived-disasters/hurricane-irene/">2011: Hurricane Irene</a></li>
                          <li id="menu-item-6437" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6437"><a href="<?php echo home_url(); ?>/where/archived-disasters/tornadoes-in-joplin-mo-and-tuscaloosa-al/">2011:  Joplin, Mo., and Tuscaloosa, Ala. Tornadoes</a></li>
                          <li id="menu-item-6436" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6436"><a href="<?php echo home_url(); ?>/where/archived-disasters/mid-south-flooding/">2011: Mid-South Flooding</a></li>
                          <li id="menu-item-6453" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6453"><a href="<?php echo home_url(); ?>/disasters/typhoons-in-the-philippines/">2011: Philippines Typhoons</a></li>
                          <li id="menu-item-6433" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6433"><a href="<?php echo home_url(); ?>/where/archived-disasters/texas-wildfires-2011/">2011: Texas Wildfires</a></li>
                          <li id="menu-item-6438" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6438"><a href="<?php echo home_url(); ?>/where/archived-disasters/earthquake-in-haiti/">2010: Haiti Earthquake</a></li>
                          <li id="menu-item-6439" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6439"><a href="<?php echo home_url(); ?>/where/archived-disasters/indian-ocean-tsunami/">2004: Indian Ocean Tsunami</a></li>
                        </ul>
                      </div>
                    </div>
                    <!--
                      <?php
                        if (has_nav_menu('disaster_navigation')) :
                          wp_nav_menu(array('theme_location' => 'disaster_navigation', 'menu_class' => ''));
                        endif;
                      ?>
                    -->
                  </div>
                </div>
              </div>
            </dd>
            <dd>
              <div id="panel2" class="content services-panel">
                <!--
                <dl class="tabs vertical">
                  <dd class="active"><a href="<?php echo home_url(); ?>/what-we-provide/">Services</a></dd>
                </dl>
                -->
                <dl class="tabs vertical dl-single-friend left-menu" data-tab>
                  <dd class="active"><a href="#panel1a">Services</a></dd>
                  <dd><a href="#panel2a">Custom Approaches</a></dd>
                  <dd><a href="#panel3a">Donor Collaboration</a></dd>
                  <!-- <dd><a href="#panel4a">Community of Practice</a></dd> -->
                  <dd><a href="#panel5a">Events</a></dd>
                </dl>
                <div class="tabs-content vertical">
                  <div class="content services-tabs active" id="panel1a">
                    <div class="large-12 columns center-menu">
                      <ul>
                        <li id="menu-item-6318" class="list-link-title"><a href="<?php echo home_url(); ?>/what-we-provide/">Services - Overview</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="content services-tabs" id="panel2a">
                    <div class="large-12 columns center-menu">
                      <ul>
                        <li id="menu-item-6354" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6354 list-link-title"><a href="<?php echo home_url(); ?>/what-we-provide/custom-approaches/">Custom Approaches - Overview</a></li>
                        <li id="menu-item-6354" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6354"><a href="<?php echo home_url(); ?>/what-we-provide/custom-approaches/strategic-guidance/">Strategic One-on-One Guidance</a></li>
                        <li id="menu-item-6356" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6356"><a href="<?php echo home_url(); ?>/what-we-provide/custom-approaches/disaster-philanthropy-hotline/">CDP Disaster Philanthropy Hotline</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="content services-tabs" id="panel3a">
                    <div class="large-12 columns center-menu">
                      <ul>
                        <li id="menu-item-6361" class="menu-item list-link-title"><a href="<?php echo home_url(); ?>/what-we-provide/donor-collaboration/">Donor Collaboration - Overview</a></li>
                        <li id="menu-item-6361" class="menu-item"><a href="<?php echo home_url(); ?>/what-we-provide/donor-collaboration/disaster-recovery-fund/">CDP Disaster Recovery Fund</a></li>
                        <li id="menu-item-6366" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6366"><a href="<?php echo home_url(); ?>/what-we-provide/donor-collaboration/disaster-recovery-fund/why-give-to-the-fund/">Why Give to the Fund</a></li>
                        <li id="menu-item-6365" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6365"><a href="<?php echo home_url(); ?>/what-we-provide/donor-collaboration/disaster-recovery-fund/how-the-fund-will-be-used/">How the Fund will be Used</a></li>
                        <li id="menu-item-6367" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6367"><a href="<?php echo home_url(); ?>/what-we-provide/donor-collaboration/disaster-recovery-fund/how-to-give-to-the-fund/">How to Give to the Fund</a></li>
                        <li id="menu-item-6362" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6362"><a href="<?php echo home_url(); ?>/what-we-provide/donor-collaboration/cdp-typhoon-haiyan-recovery-fund/">CDP Typhoon Haiyan Recovery Fund</a></li>
                        <li id="menu-item-6363" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6363"><a href="<?php echo home_url(); ?>/what-we-provide/donor-collaboration/the-cdp-hurricane-sandy-disaster-fund/">CDP Hurricane Sandy Disaster Fund</a></li>
                        <li id="menu-item-6364" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6364"><a href="<?php echo home_url(); ?>/what-we-provide/donor-collaboration/atc-when-disaster-strikes-fund/">ATC “When Disaster Strikes Fund”</a></li>
                      </ul>
                    </div>
                  </div>
                  <!--
                  <div class="content services-tabs" id="panel4a">
                    <div class="large-12 columns center-menu">
                      <ul>
                        <li id="menu-item-6360" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-6360 list-link-title"><a href="<?php echo home_url(); ?>/what-we-provide/community-of-practice/">Community of Practice - Overview</a></li>
                      </ul>
                    </div>
                  </div>
                  -->
                  <div class="content services-tabs" id="panel5a">
                    <div class="large-12 columns center-menu">
                      <ul>
                        <li id="menu-item-6357" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-6357 list-link-title"><a href="<?php echo home_url(); ?>/what-we-provide/events/">Events - Overview</a></li>
                        <li id="menu-item-6358" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6358"><a href="<?php echo home_url(); ?>/what-we-provide/events/upcoming-events/">Upcoming Events</a></li>
                        <li id="menu-item-6359" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6359"><a href="<?php echo home_url(); ?>/what-we-provide/events/other-upcoming-events/">Event Highlights</a></li>
                      </ul>
                    </div>
                  </div>
                </div>

                <!--
                <?php
                  if (has_nav_menu('services_navigation')) :
                    wp_nav_menu(array('theme_location' => 'services_navigation', 'menu_class' => ''));
                  endif;
                ?>
              -->
              </div>
            </dd>
            <dd>
              <div id="panel3" class="content learning-panel">
                <dl class="tabs vertical left-menu" data-tab>

                  <dd class="active"><a href="#panel1a">Learning Center</a></dd>
                  <dd><a href="#panel2a">Issue Insights</a></dd>
                  <dd><a href="#panel3a">CDP Spotlight</a></dd>
                  <dd><a href="#panel4a">Funding Worth Following</a></dd>
                  <dd><a href="#panel5a">Principles for Disaster Philanthropists</a></dd>
                </dl>
                <div class="tabs-content vertical">
                  <div class="content learning-tabs active" id="panel1a">
                    <div class="large-6 columns center-menu">
                      <ul>
                        <li id="menu-item-6368" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-6368 list-link-title"><a href="<?php echo home_url(); ?>/learning-center/">Learning Center</a></li>
                        <li id="menu-item-6369" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6369"><a href="<?php echo home_url(); ?>/learning-center/basic-tips-for-disaster-giving/">Basic Tips for Disaster Giving</a></li>
                      </ul>
                    </div>
                    <div class="large columns far-right-menu">

                    </div>
                  </div>
                  <div class="content learning-tabs" id="panel2a">
                    <div class="large-6 columns center-menu">
                      <ul>
                        <li id="menu-item-6371" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-6371 list-link-title"><a href="<?php echo home_url(); ?>/learning-center/issue-insights/">Issue Insights</a>
                        <li id="menu-item-6390" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6390"><a href="<?php echo home_url(); ?>/learning-center/issue-insights/advocating-awareness-through-art/">Artists</a></li>
                        <li id="menu-item-6382" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6382"><a href="<?php echo home_url(); ?>/learning-center/issue-insights/climate-change-and-extreme-weather-patterns/">Climate Change and Extreme Weather</a></li>
                        <li id="menu-item-6410" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6410"><a href="<?php echo home_url(); ?>/learning-center/issue-insights/the-disaster-life-cycle/">The Disaster Life Cycle</a></li>
                        <li id="menu-item-6391" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6391"><a href="<?php echo home_url(); ?>/learning-center/issue-insights/complex-humanitarian-emergencies/">Complex Humanitarian Emergencies</a></li>
                        <li id="menu-item-6384" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6384"><a href="<?php echo home_url(); ?>/learning-center/issue-insights/floods/">Floods</a></li>
                        <li id="menu-item-6389" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6389"><a href="<?php echo home_url(); ?>/learning-center/issue-insights/hurricanes/">Hurricanes,Typhoons and Cyclones</a></li>
                        <li id="menu-item-6386" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6386"><a href="<?php echo home_url(); ?>/learning-center/issue-insights/insurance-rules-changing-following-the-rise-in-natural-disasters/">Insurance</a></li>
                        <li id="menu-item-6406" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6406"><a href="<?php echo home_url(); ?>/learning-center/issue-insights/education/">Education</a></li>
                        <li id="menu-item-6396" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6396"><a href="<?php echo home_url(); ?>/learning-center/issue-insights/earthquakes/">Earthquakes</a></li>
                        <li id="menu-item-6395" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6395"><a href="<?php echo home_url(); ?>/learning-center/issue-insights/famine/">Famine</a></li>
                        <li id="menu-item-6415" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6415"><a href="<?php echo home_url(); ?>/learning-center/issue-insights/the-role-of-fema-in-disasters/">FEMA</a></li>
                        <li id="menu-item-6407" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6407"><a href="<?php echo home_url(); ?>/learning-center/issue-insights/logistics/">Logistics</a></li>
                        <li id="menu-item-6409" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6409"><a href="<?php echo home_url(); ?>/learning-center/issue-insights/mental-health/">Mental Health</a></li>
                        <li id="menu-item-6399" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6399"><a href="<?php echo home_url(); ?>/learning-center/issue-insights/how-ngos-make-giving-decisions/">NGOs’  Funding Decisions</a></li>
                        <li id="menu-item-6414" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6414"><a href="<?php echo home_url(); ?>/learning-center/issue-insights/the-national-disaster-recovery-framework/">The National Disaster Recovery Framework</a></li>
                      </ul>
                    </div>
                    <div class="large-6 columns far-right-menu">
                      <ul>
                        <li id="menu-item-6408" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6408"><a href="<?php echo home_url(); ?>/learning-center/issue-insights/nutrition/">Nutrition</a></li>
                        <li id="menu-item-6411" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6411"><a href="<?php echo home_url(); ?>/learning-center/issue-insights/the-impact-of-disasters-on-public-health/">Public Health</a></li>
                        <li id="menu-item-6402" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6402"><a href="<?php echo home_url(); ?>/learning-center/issue-insights/issues-insights-recovery/">Recovery</a></li>
                        <li id="menu-item-6403" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6403"><a href="<?php echo home_url(); ?>/learning-center/issue-insights/remittances/">Remittances</a></li>
                        <li id="menu-item-6400" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6400"><a href="<?php echo home_url(); ?>/learning-center/issue-insights/hurricane-sandy-one-year-reflections/">Hurricane Sandy: Reflections on the One-Year Mark</a></li>
                        <li id="menu-item-6401" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6401"><a href="<?php echo home_url(); ?>/what-we-provide/events/other-upcoming-events/cdp-hurricane-sandy-audiovideo/hurricane-sandy-the-road-behind-the-journey-still-ahead/">Hurricane Sandy: The Road Behind, The Recovery Journey Ahead</a></li>
                        <li id="menu-item-6393" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6393"><a href="<?php echo home_url(); ?>/learning-center/issue-insights/the-long-road-to-recovery-from-hurricane-sandy/">Hurricane Sandy:The Long Road to Recovery</a></li>
                        <li id="menu-item-6413" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6413"><a href="<?php echo home_url(); ?>/learning-center/issue-insights/shelter/">Shelter</a></li>
                        <li id="menu-item-6416" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6416"><a href="<?php echo home_url(); ?>/learning-center/issue-insights/the-stafford-act/">The Stafford Act</a></li>
                        <li id="menu-item-6394" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6394"><a href="<?php echo home_url(); ?>/learning-center/issue-insights/issues-insights-technology/">Technology</a></li>
                        <li id="menu-item-6398" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6398"><a href="<?php echo home_url(); ?>/learning-center/issue-insights/tornadoes/">Tornadoes</a></li>
                        <li id="menu-item-6385" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6385"><a href="<?php echo home_url(); ?>/learning-center/issue-insights/why-was-super-typhoon-haiyan-different/">Typhoon Haiyan</a></li>
                        <li id="menu-item-6405" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6405"><a href="<?php echo home_url(); ?>/learning-center/issue-insights/wildfires/">Wildfires</a></li>
                        <li id="menu-item-6397" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6397"><a href="<?php echo home_url(); ?>/learning-center/issue-insights/water-sanitation-and-hygiene-wash/">Water, Sanitation, and Hygiene (WASH)</a></li>

                      </ul>
                    </div>
                  </div>
                  <div class="content learning-tabs" id="panel3a">
                    <div class="large-6 columns center-menu">
                      <ul>
                        <li id="menu-item-6373" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-6373 list-link-title"><a href="<?php echo home_url(); ?>/learning-center/cdp-spotlight/">CDP Spotlight</a></li>
                        <!-- <li id="menu-item-6381" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6381"><a href="<?php echo home_url(); ?>/learning-center/cdp-spotlight/making-the-most-of-donated-funds/">Donor Spotlight: Ansara’s Believe in Maximizing Gifts</a></li> -->
                        <li id="" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?php echo home_url(); ?>/learning-center/cdp-spotlight/spotlight-the-conrad-n-hilton-foundation-makes-grants-for-syrian-relief-efforts/">The Conrad N. Hilton Foundation</a></li>
                        <li id="" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?php echo home_url(); ?>/learning-center/cdp-spotlight/spotlight-greater-kansas-community-foundation/">Greater Kansas Community Foundation</a></li>
                        <li id="" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?php echo home_url(); ?>/learning-center/cdp-spotlight/spotlight-human-services-council-of-new-york/">Human Services Council of New York</a></li>
                      </ul>
                    </div>
                    <div class="large-6 columns far-right-menu">
                    </div>
                  </div>
                  <div class="content learning-tabs" id="panel4a">
                    <div class="large-6 columns center-menu">
                      <ul>
                        <li id="menu-item-6372" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-6372 list-link-title"><a href="<?php echo home_url(); ?>/when/funding-worth-following/">Funding Worth Following</a>
                        <li id="menu-item-6375" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6375"><a href="<?php echo home_url(); ?>/when/funding-worth-following/americares-and-japan/">AmeriCares and Japan</a></li>
                        <li id="menu-item-6376" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6376"><a href="<?php echo home_url(); ?>/when/funding-worth-following/cisco-and-nethope-improving-disaster-communications-through-technology/">Cisco and NetHope</a></li>
                        <li id="menu-item-6379" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6379"><a href="<?php echo home_url(); ?>/when/funding-worth-following/the-greater-cedar-rapids-community-foundation-rebuilding-cedar-rapids-through-the-flood-2008-fund/">The Greater Cedar Rapids Community Foundation</a></li>
                        <li id="menu-item-6377" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6377"><a href="<?php echo home_url(); ?>/when/funding-worth-following/mattel-childrens-foundation-and-save-the-children/">Mattel Children’s Foundation and Save the Children</a></li>
                        <li id="menu-item-6374" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6374"><a href="<?php echo home_url(); ?>/when/funding-worth-following/pennington-disaster-resilience-fund-and-the-childrens-health-fund-reforming-disaster-case-management/">Pennington Disaster Resilience Fund and the Children’s Health Fund</a></li>
                        <li id="menu-item-6380" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6380"><a href="<?php echo home_url(); ?>/when/funding-worth-following/the-ups-foundation-targeted-grants-to-improve-logistics-efficiencies/">The UPS Foundation: Targeted Grants to Improve Logistics Efficiencies</a></li>
                      </ul>
                    </div>
                    <div class="large-6 columns far-right-menu">
                    </div>
                  </div>
                  <div class="content learning-tabs" id="panel5a">
                    <div class="large-6 columns center-menu">
                      <ul>
                        <li id="menu-item-6370" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-6370 list-link-title"><a href="<?php echo home_url(); ?>/learning-center/principles-of-disaster-management/">Principles for Disaster Philanthropists</a></li>
                        <li id="menu-item-6418" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6418"><a href="<?php echo home_url(); ?>/learning-center/principles-of-disaster-management/code-of-conduct/">Code of Conduct</a></li>
                        <li id="menu-item-6424" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6424"><a href="<?php echo home_url(); ?>/learning-center/principles-of-disaster-management/network-for-goods-five-steps-to-effective-corporate-disaster-campaigns/">5 Steps for Effective Corporate Disaster Campaigns</a></li>
                        <li id="menu-item-6417" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6417"><a href="<?php echo home_url(); ?>/learning-center/principles-of-disaster-management/lessons-from-the-gulf-coast/">Lessons from the Gulf Coast</a></li>
                        <li id="menu-item-6419" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6419"><a href="<?php echo home_url(); ?>/learning-center/principles-of-disaster-management/examining-linkages/">Links Between Disaster Risk Reduction and Livelihoods</a></li>
                        <li id="menu-item-6423" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6423"><a href="<?php echo home_url(); ?>/learning-center/principles-of-disaster-management/the-measure-of-america-2010-2011-mapping-risks-and-resilience/">Mapping Risks and Resilience</a></li>
                        <li id="menu-item-6420" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6420"><a href="<?php echo home_url(); ?>/learning-center/principles-of-disaster-management/partnership-for-recovery-and-a-stronger-future/">Partnership for Recovery and a Stronger Future</a></li>
                        <li id="menu-item-6421" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6421"><a href="<?php echo home_url(); ?>/learning-center/principles-of-disaster-management/population-vulnerabilities/">Vulnerable Populations</a></li>
                      </ul>
                    </div>
                    <div class="large-6 columns far-right-menu">
                    </div>
                  </div>

                </div>
                <!--
                <?php
                  if (has_nav_menu('learning_navigation')) :
                    wp_nav_menu(array('theme_location' => 'learning_navigation', 'menu_class' => ''));
                  endif;
                ?>
                -->
              </div>
            </dd>
          </dl>
        </div>
      </div>
      <div class="large-2 columns">
        <div class="social-nav">
          <ul>
            <li>
              <a href="https://www.facebook.com/funds4disaster" target="_blank">
                <i class='fa fa-facebook'></i>
              </a>
            </li>
            <li>
              <a href="https://twitter.com/funds4disaster" target="_blank">
                <i class="fa fa-twitter"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div> <!-- /.row -->
  </div> <!-- /.container -->
</header>
