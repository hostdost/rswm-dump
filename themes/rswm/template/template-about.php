<?php
/* Template Name: About Us */

get_header();
global $post;
$postid                = $post->ID;
$wpcftopbanner         = get_post_meta($postid, 'wpcf-top-banner', true);
$wpcfmobilebanner     = get_post_meta($postid, 'wpcf-mobile-banner', true);
$wpcfbannertext     = get_post_meta($postid, 'wpcf-banner-text', true);
$awardsrecognitions = get_post_meta($postid, 'wpcf-awards-recognitions', false);
?>
<style>
  h2.strike{
    margin-bottom: 30px;
    border-bottom: 1px solid #999;
  }
  h2 span {
    position: relative;
    top: 13px;
    background: #fff;
    padding: 0px 15px;
}

</style>
<link rel='stylesheet' href="<?php echo get_template_directory_uri() ?>/css/custom-new.css">
<!-- Header End -->
<div class="rswmAboutBannr">
    <img class="aboutBannerImages" src="<?php echo $wpcftopbanner ?>" title="<?php echo rswm_get_attachment_alt_title_url($wpcftopbanner, 'title') ?>" alt="<?php echo rswm_get_attachment_alt_title_url($wpcftopbanner, 'alt') ?>" />
    <img class="mobileaboutBannerImages" src="<?php echo $wpcfmobilebanner ?>" title="<?php echo rswm_get_attachment_alt_title_url($wpcftopbanner, 'title') ?>" alt="<?php echo rswm_get_attachment_alt_title_url($wpcfmobilebanner, 'alt') ?>" />
    <div class="rswmAboutBannrContent about-page">
        <h2><?php echo $wpcfbannertext ?></h2>
    </div>
</div>

<div class="testimonials-block onAbout" id="jamp">
    <div class="container">
        <div class="lnjBhilwaraContent">
            <?php //echo wpautop(get_post_field('post_content', $postid)); ?>
            <h2 class="strike"><span>RSWM LTD.</span></h2>
            <p style="margin-top: 20px;;">RSWM Limited, the flagship company of LNJ Bhilwara Group, is one of the leading manufacturers and exporters of synthetic, cotton and blended spun yarns in India. Under the leadership of Mr. Riju Jhunjhunwala, Chairman and Managing Director of RSWM Ltd, the textile company exports a wide range of fabric and yarns to over 70 countries across the globe. </p>


<p>Its 12 manufacturing plants with 6.25 lakh spindles, 172 looms, 95 circular and flat knitting machines produce high-quality cotton, melange, synthetic novelty yarns, denim & knitted fabrics. Its annually producing 1,21,000 MT Greige Yarn, 24,000 MT Melange yarn, 32,000 MT Dyed yarn, 32 M Meters Denim Fabric, 9000+ MT Knits Fabric, 43,000 MT Green Fibre.</p>
        </div>
        <?php get_header('ourbusiness2'); ?>

    </div>
</div>

<section class="markets" style="display: none;">
    <div class="container">
        <div class="row">
            <div class="col span_12">
                <div class="lnjBhilwaraContent">
                    <h2 class="strike"><span>RSWM Markets</span></h2>
                    <p>Our diverse products are used in many different markets worldwide. Our
                        yarns and fabrics can be customised for high-end fashion apparel and
                        activewear. With our advanced technology in fire retardancy, bacterial
                        resistance and moisture control, we create fabrics and yarns suitable
                        for uniforms for students and government professionals as well as
                        protective wear for military personnel and other high-risk professions.
                        We also specialise in home and commercial interior textiles used for
                        curtains, carpets, bed covers and upholstery.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="awardsAria">
    <h2>Awards & Recognitions</h2>
    <ul>
        <?php foreach ($awardsrecognitions as $row) { ?>
            <li>
                <img src="<?php echo get_template_directory_uri() ?>/images/awards.png" title="Awards & Recognitions" alt="Awards & Recognitions" />
                <div class="awardsAriaContent">
                    <p><?php echo $row ?></p>
                </div>
            </li>
        <?php } ?>

    </ul>
</div>

<div class="aboutMapArai" id="locationBlock">
    <div class="container">
        <!-- <div class="row">
            <div class="col span_6">
                <div class="mapImages">
                    <ul>
                       <li class="map-Content-content tab1" style="display:block;"><img src="<?php echo get_template_directory_uri() ?>/images/location/location-1-19apr.png" alt=""/>
                        <div class="tab1caption allmapsamecaption">
                            <div class="mapcontenthover">
                            <span>Fibre Dyeing, Spinning & Grey Yarn</span></div>
                           </div>
                        
                        </li> 
                       <li class="tab2 map-Contentleft"><img src="<?php echo get_template_directory_uri() ?>/images/location/location-5-19apr.png" alt=""/>
                         <div class="tab2caption allmapsamecaption">  <div class="mapcontenthover"><span>
                             Spinning PV Blended Grey Yarn
                             </span></div></div>
                        
                        </li> 
                       <li class="tab3 map-Contentleft"><img src="<?php echo get_template_directory_uri() ?>/images/location/location-9-19apr.png" alt=""/>
                        
                         <div class="tab3caption allmapsamecaption">  <div class="mapcontenthover"><span>
                         Thermal Power Generation
                             </span></div></div>
                        </li>  
                       <li class="tab4 map-Contentleft"><img src="<?php echo get_template_directory_uri() ?>/images/location/location-2-19apr.png" alt=""/>
                        
                           <div class="tab4caption allmapsamecaption">  <div class="mapcontenthover"><span>
                          Spinning PV Blended, Cotton & Open-End Grey Yarn
                               </span></div></div>
                        </li>  
                       <li class="tab5 map-Contentleft"><img src="<?php echo get_template_directory_uri() ?>/images/location/location-6-19apr.png" alt=""/>
                            <div class="tab5caption allmapsamecaption">  <div class="mapcontenthover"><span>
                         Fibre Dyeing & Spinning Dyed Yarn, Recycled Polyester Fibre (Fibre Green)
                                </span></div></div>
                        </li>  
                       <li class="tab6 map-Contentleft"><img src="<?php echo get_template_directory_uri() ?>/images/location/location-10-19apr.png" alt=""/>
                        
                          <div class="tab6caption allmapsamecaption">  <div class="mapcontenthover"><span>
                          Cotton Spinning and Gassed Yarn
                              </span></div></div> 
                        
                        </li>  
                       <li class="tab7 map-Contentleft"><img src="<?php echo get_template_directory_uri() ?>/images/location/location-3-19apr.png" alt=""/>
                        
                        <div class="tab7caption allmapsamecaption">  <div class="mapcontenthover"><span>
                          Mélange Yarn, Fibre-Dyed & Yarn-Dyed
                            </span></div></div> 
                        </li>  
                       <li class="tab8 map-Contentleft"><img src="<?php echo get_template_directory_uri() ?>/images/location/location-7-19apr.png" alt=""/>
                        
                        <div class="tab8caption allmapsamecaption">  <div class="mapcontenthover"><span>
                         Spinning, Weaving, Processing & Finishing
                            </span></div></div>  
                        
                        </li>  
                       <li class="tab9 map-Contentleft" style="display:none;"><img src="<?php echo get_template_directory_uri() ?>/images/location/location-11-19apr.png" alt=""/>
                        
                          <div class="tab9caption allmapsamecaption">  <div class="mapcontenthover"><span>
                        Cotton Yarn Twisting
                              </span></div></div>  
                        
                        </li>  
                       <li class="tab10 map-Contentleft" style="display:none;"><img src="<?php echo get_template_directory_uri() ?>/images/location/location-4-19apr.png" alt=""/>
                         <div class="tab10caption allmapsamecaption">  <div class="mapcontenthover"><span>
                       Mélange Yarn, Fibre-Dyed & Yarn-Dyed
                             </span></div></div>
                        </li>  
                       <li class="tab11 map-Contentleft" style="display:none;"><img src="<?php echo get_template_directory_uri() ?>/images/location/location-8-19apr.png" alt=""/>
                           <div class="tab11caption allmapsamecaption">  <div class="mapcontenthover"><span>Cotton Ring & Open-End Spinning, Weaving & Rope, Dyeing, Processing & Finishing Denim Fabric and</span></div></div>
                        </li> 
                    </ul>
                </div>
            </div>
            <div class="col span_6">
                <div class="mapTabListright">
                    <h2 class="locationHeading">Locations</h2>
                    <ul>
                        <li data-tabb="tab1">
                            <div class="maPConTent">
                                Kharigram
                            </div>
                          
                        </li>
                        <li data-tabb="tab2">
                            <div class="maPConTent">
                                Rishabhdev
                            </div>
                          
                        </li>
                        <li data-tabb="tab3">
                            <div class="maPConTent">
                                LNJ Nagar, Mordi
                            </div>
                           
                        </li>
                        <li data-tabb="tab4">
                            <div class="maPConTent">
                                Mayur Nagar, Banswara
                            </div>
                           
                        </li>
                        <li data-tabb="tab5">
                            <div class="maPConTent">
                                Ringas
                            </div>
                           
                        </li>
                        
                        <li data-tabb="tab7">
                            <div class="maPConTent">
                                Mandapam
                            </div>
                           
                        </li>
                        <li data-tabb="tab8">
                            <div class="maPConTent">
                                Mordi (Mayur Fabrics)
                            </div>
                          
                        </li>
                     
                        <li data-tabb="tab10">
                            <div class="maPConTent">
                                Kanya Kheri
                            </div>
                          
                        </li>
                        <li data-tabb="tab11">
                            <div class="maPConTent">
                                Mordi (LNJ Denim)
                            </div>
                            
                        </li>
                        <li data-tabb="tab6">
                            <div class="maPConTent">Bagalur
                            </div>
                          
                        </li>
                           <li data-tabb="tab9">
                            <div class="maPConTent">
                                Puducherry
                            </div>
                          
                        </li>
                    </ul> 


                </div>
            </div>
        </div> -->


        <?php

        $mobile_browser = 0;

        if (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android|iemobile)/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
            $mobile_browser++;
        }

        if ((strpos(strtolower($_SERVER['HTTP_ACCEPT']), 'application/vnd.wap.xhtml+xml') > 0) or ((isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE'])))) {
            $mobile_browser++;
        }

        $mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'], 0, 4));
        $mobile_agents = array(
            'w3c ', 'acs-', 'alav', 'alca', 'amoi', 'audi', 'avan', 'benq', 'bird', 'blac',
            'blaz', 'brew', 'cell', 'cldc', 'cmd-', 'dang', 'doco', 'eric', 'hipt', 'inno',
            'ipaq', 'java', 'jigs', 'kddi', 'keji', 'leno', 'lg-c', 'lg-d', 'lg-g', 'lge-',
            'maui', 'maxo', 'midp', 'mits', 'mmef', 'mobi', 'mot-', 'moto', 'mwbp', 'nec-',
            'newt', 'noki', 'palm', 'pana', 'pant', 'phil', 'play', 'port', 'prox',
            'qwap', 'sage', 'sams', 'sany', 'sch-', 'sec-', 'send', 'seri', 'sgh-', 'shar',
            'sie-', 'siem', 'smal', 'smar', 'sony', 'sph-', 'symb', 't-mo', 'teli', 'tim-',
            'tosh', 'tsm-', 'upg1', 'upsi', 'vk-v', 'voda', 'wap-', 'wapa', 'wapi', 'wapp',
            'wapr', 'webc', 'winw', 'winw', 'xda ', 'xda-'
        );

        if (in_array($mobile_ua, $mobile_agents)) {
            $mobile_browser++;
        }

        ?>
        <div class="row">
            <div class="col span_12">
                <h2 class="locationHeading strike" style="text-align:center;"><span>Locations</span></h2>
                <div class="locations_img">
                    <?php if ($mobile_browser <= 0) { ?>
                        <img src="<?php echo site_url('/'); ?>wp-content/uploads/2020/02/Untitled-1.jpg" alt="RSWM Map" title="RSWM Map" />
                    <?php } else if ($mobile_browser > 0) { ?>
                        <img src="<?php echo site_url('/'); ?>wp-content/uploads/2020/02/Untitled-1.jpg" alt="RSWM Map" title="RSWM Map" />
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php //if($_GET['dev']==1){?>
    <div class="row">
            <div class="col span_12">
                <h2 class="locationHeading strike" style="text-align:center;"><span>Timeline</span></h2>
            </div>
    </div>
    <style>
:root {
  --white: #fff;
  --black: #323135;
  --crystal: #a8dadd;
  --columbia-blue: #cee9e4;
  --midnight-green: #66490d;
  --yellow: #e5f33d;
  --timeline-gradient: rgb(153 103 0) 0%, rgb(211 165 71) 50%, rgb(215 162 52 / 0%) 100%;
}
/* .section SECTION
–––––––––––––––––––––––––––––––––––––––––––––––––– */

.section {
  padding: 50px 0;
}

.section .container {
  width: 90%;
  max-width: 1200px;
  margin: 0 auto;
  text-align: center;
}

.section h1 {
  font-size: 2.5rem;
  line-height: 1.25;
}

.section h2 {
  font-size: 1.3rem;
}

        /* TIMELINE
–––––––––––––––––––––––––––––––––––––––––––––––––– */

.timeline {
  position: relative;
  white-space: nowrap;
  max-width: 1400px;
  padding: 0 10px;
  margin: 0 auto;
  /* display: grid; */
  display: block;
  grid-template-columns: 320px auto;
  grid-gap: 20px;
  background: #696969 url(https://rswm.in/wp-content/themes/rswm/images/outHistorybg.jpg) no-repeat center center;

}

.timeline::before,
.timeline::after {
  content: "";
  position: absolute;
  top: 0;
  bottom: 30px;
  width: 100px;
  z-index: 2;
}

.timeline::after {
  right: 0;
  /* background: linear-gradient(270deg, var(--timeline-gradient)); */
}

.timeline::before {
  /* left: 340px; */
  left: 0;
  /* background: linear-gradient(90deg, var(--timeline-gradient)); */
}

.timeline .info {
  display: flex;
  flex-direction: column;
  justify-content: center;
  padding: 20px 40px;
  color: var(--white);
  background: var(--midnight-green);
  white-space: normal;
  border-radius: 10px;
}

.timeline .info img {
  margin-bottom: 20px;
}

.timeline .info p {
  margin-top: 10px;
  color: var(--crystal);
}

.timeline .info a {
  text-decoration: none;
}

.timeline ol::-webkit-scrollbar {
  height: 12px;
}

.timeline ol::-webkit-scrollbar-thumb,
.timeline ol::-webkit-scrollbar-track {
  border-radius: 92px;
}

.timeline ol::-webkit-scrollbar-thumb {
  background: var(--midnight-green);
}

.timeline ol::-webkit-scrollbar-track {
  background: var(--yellow);
}

.timeline ol {
  font-size: 0;
  padding: 250px 0;
  transition: all 1s;
  overflow-x: scroll;
  -ms-scroll-snap-type: x mandatory;
      scroll-snap-type: x mandatory;
  scrollbar-color: #d7b369 #59451f;
}

.timeline ol li {
  position: relative;
  display: inline-block;
  list-style-type: none;
  width: 130px;
  height: 5px;
  background: var(--white);
  scroll-snap-align: start;
}
.timeline ol li:first-child {
  width: 50px;
}
.timeline ol li:last-child {
  width: 340px;
}

.timeline ol li:not(:first-child) {
  margin-left: 14px;
}

.timeline ol li:not(:last-child)::after {
  content: "";
  position: absolute;
  top: 50%;
  left: calc(100% + 1px);
  bottom: 0;
  width: 16px;
  height: 16px;
  transform: translateY(-50%);
  border-radius: 50%;
  background: var(--midnight-green);
  z-index: 1;
}

.timeline ol li div {
  position: absolute;
  left: calc(100% + 7px);
  width: 250px;
  padding: 15px;
  font-size: 1rem;
  white-space: normal;
  color: var(--black);
  /* background: var(--white); */
  background: #f2f2f2;
  border-radius: 0 10px 10px 10px;
}

.timeline ol li div::before {
  content: "";
  position: absolute;
  top: 100%;
  left: 0;
  width: 0;
  height: 0;
  border-style: solid;
}

.timeline ol li:nth-child(odd) div {
  top: -16px;
  transform: translateY(-100%);
  border-radius: 10px 10px 10px 0;
}

.timeline ol li:nth-child(odd) div::before {
  top: 100%;
  border-width: 8px 8px 0 0;
  border-color: var(--white) transparent transparent transparent;
}

.timeline ol li:nth-child(even) div {
  top: calc(100% + 16px);
}

.timeline ol li:nth-child(even) div::before {
  top: -8px;
  border-width: 8px 0 0 8px;
  border-color: transparent transparent transparent var(--white);
}

.timeline logoicon {
  display: block;
  text-align: center;
  font-size: 1rem;
  font-weight: bold;
  margin-bottom: 8px;
  color: #312b21;
}
.timeline content {
  display: block;
  font-size: .75rem;
  font-weight: bold;
  margin-bottom: 8px;
  color: #312b21;
}
.timeline time {
  display: block;
  font-size: 1.15rem;
  font-weight: bold;
  margin-bottom: 8px;
  color: #e3a743;
}
/* GENERAL MEDIA QUERIES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
@media screen and (max-width: 800px) {
  .timeline {
    display: block;
  }

  .timeline::before,
  .timeline::after {
    width: 50px;
  }

  .timeline::before {
    left: 0;
  }

  .timeline .info {
    display: none;
  }
}
    </style>
    <div class="glorious_mobile">
    <h2 class="timeline-heading">Timeline</h2>
    </div>
    <!-- <h2 class="timeline-heading">Timeline</h2> -->
    <section class="timeline">
    
  <!-- <div class="info">
    <img width="50" height="50" src="https://assets.codepen.io/210284/face.svg" alt="" />
    <h2>Company History</h2>
    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
    <p>
        <a href="">Learn more &gt;</a>
    </p>
  </div> -->

  <ol>
    <li>
      <div>
      <logoicon><img src="<?php echo site_url();?>/assets/img/timeline/1960.png"></logoicon>
      <content>RSWM Limited established</content>
        <time>1960</time> 
      </div>
    </li>
    <li>
      <div>
        <logoicon><img src="<?php echo site_url();?>/assets/img/timeline/1973.png"></logoicon>
        <content>Spinning unit 
established at 
Kharigram, 
Gulabpura </content>
        <time>1973</time> 
      </div>
    </li>
    <li>
      <div>
        <logoicon><img src="<?php echo site_url();?>/assets/img/timeline/1989.png"></logoicon>
         <content>Greige yarn 
spinning unit 
established 
at Banswara</content>
            <time>1989</time> 
      </div>
    </li>    
    <li>
      <div>
      <logoicon><img src="<?php echo site_url();?>/assets/img/timeline/1994.png"></logoicon>
      <content>Melange Yarn 
manufacturing 
unit established 
at Mandpam, 
Bhilwara </content>
        <time>1994</time> 
      </div>
    </li>
    <li>
      <div>
      <logoicon><img src="<?php echo site_url();?>/assets/img/timeline/2003.png"></logoicon>
      <content>Acquired the 
Rishabhdev 
plant from 
HEG Limited</content>
        <time>2003</time>
      </div>
    </li>
    <li>
      <div>
      <logoicon><img src="<?php echo site_url();?>/assets/img/timeline/2005.png"></logoicon>
      <content>Acquired Jaipur 
Polyspin Ltd., Ringas 
and Mordi Textiles & 
Processors Ltd. 
at Banswara </content>
        <time>2005</time> 
      </div>
    </li>
    <li>
      <div>
      <logoicon><img src="<?php echo site_url();?>/assets/img/timeline/2007.png"></logoicon>
      <content>LNJ Denim
 launched, alongwith
 a 46 MW thermal
 power plant</content>
        <time>2007</time> 
      </div>
    </li>
    <li>
      <div>
      <logoicon><img src="<?php echo site_url();?>/assets/img/timeline/2011.png"></logoicon>
      <content>SJ-11 RSWM's 
automated spinning 
plant established, 
launched 
RSWM Ultima</content>
        <time>2011</time> 
      </div>
    </li>
    <li>
      <div>
        <logoicon><img src="<?php echo site_url();?>/assets/img/timeline/2014.png"></logoicon>
        <content> RSWM FibreGreen 
launched, a recycled 
polyester fiber made 
from PET Bottles </content>
        <time>2014</time>
      </div>
    </li>
    <li>
      <div>
      <logoicon><img src="<?php echo site_url();?>/assets/img/timeline/2015.png"></logoicon>
      <content>Additional capacity 
at Melange yarn 
unit at
 Kanyakheri, 
Bhilwara</content>
        <time>2015</time>
      </div>
    </li>
    <li>
      <div>
      <logoicon><img src="<?php echo site_url();?>/assets/img/timeline/2016.png"></logoicon>
      <content>RSWM launched its
 new range of value
 added yarns
 “RSWM EDGE”</content>
        <time>2016</time>
      </div>
    </li>
    <li>
      <div>
      <logoicon><img src="<?php echo site_url();?>/assets/img/timeline/2017.png"></logoicon>
      <content>Commissioned a
 3.3 MW Rooftop
 Solar Power Plant</content>
        <time>2017</time>
      </div>
    </li>
    <li>
      <div>
      <logoicon><img src="<?php echo site_url();?>/assets/img/timeline/2020.png"></logoicon>
      <content> 18.7 MW and
 3.3 MW Solar
 Power Plants
 established</content>
        <time>2020</time>
      </div>
    </li>
    <li>
      <div>
      <logoicon><img src="<?php echo site_url();?>/assets/img/timeline/2021.png"></logoicon>
      <content> R-Value, a unique
 trading division of
 yarns, fabric and
 denim is launched</content>
        <time>2021</time>
      </div>
    </li>
    <li>
      <div>
      <logoicon><img src="<?php echo site_url();?>/assets/img/timeline/2021-2.png"></logoicon>
      <content>HJ 21 
Melange yarn 
Kharigram unit
 launched   </content>
        <time>2021</time>
      </div>
    </li>
    <li>
      <div>
      <logoicon><img src="<?php echo site_url();?>/assets/img/timeline/2022.png"></logoicon>
      <content>LNJ Knits launched, 
a new range of 
knitted fabrics </content>
        <time>2022</time>
      </div>
    </li>
    <li>
      <div>
      <logoicon><img src="<?php echo site_url();?>/assets/img/timeline/2023.png"></logoicon>
      <content>Kapaas 100% 
combed compact 
cotton yarn
 launched </content>
        <time>2023</time>
      </div>
    </li>
    <li>
      <div>
      <logoicon><img src="<?php echo site_url();?>/assets/img/timeline/2024.png"></logoicon>
      <content>Chhata unit 
acquired for 
knitted fabric and 
yarn manufacturing </content>
        <time>2024</time>
      </div>
    </li>
    <li>
      <div>
      <logoicon><img src="<?php echo site_url();?>/assets/img/timeline/2024-2.png"></logoicon>
      <content>Acquisition 
of BG Wind Power 
Limited (BGWPL) </content>
        <time>2024</time>
      </div>
    </li>
    <li></li>
  </ol>

</section>
<script  src="<?php echo site_url(); ?>/assets/js/ts.js"></script>
<?php //} ?>


<section class="about-group">
    <div class="container">
        <div class="row">
            <div class="col span_12">
                <div class="lnjBhilwaraContent">
                    <h2 class="strike"><span>LNJ Bhilwara Group</span></h2>
                    <p style="margin-top: 20px;">LNJ Bhilwara Group is one of the country’s esteemed and diverse business conglomerates, with its roots dating back to 1960. The journey of the Group started then in a small Bhilwara city of Rajasthan, when the legendary, Mr. L. N. Jhunjhunwala, established a textile mill there, laying the foundation of what would in due course become one of India’s leading textile companies – RSWM Limited. The sheer determination, conviction and vision of Mr. Jhunjhunwala has led that one textile mill to grow into 17 Companies with its 21 manufacturing units and 9 marketing offices spread across textile, power, graphite electrode, info technology sectors.
                    </p>
                    <p>
                    The Group today stands proud as a multi-products and services conglomerate with an annual turnover in excess of Turnover - INR 10104 Cr, ($1.21 Billion). The Group’s 8 Companies are IS/ISO Certified and 5 Companies are listed with stock exchanges in India.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="aboutContact_form">
    <?php get_template_part('contact-form') ?>
</section>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<?php get_footer(); ?>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
    jQuery(document).ready(function($) {
        var windowWidth = $(window).width();

        if (windowWidth > 800) {

            $('.mapTabListright ul li').mouseenter(function() {
                $('.mapTabListright ul li').removeClass('activelinkMap');
                $(this).parents('.row').find('.mapImages li').css({
                    'display': 'none'
                }).removeClass('heightlightmap');

                $(this).parents('.row').find('.mapImages .' + mapImagedata).children('.allmapsamecaption').hide("slide", {
                    direction: "right"
                }, 10);

                $(this).addClass('activelinkMap');
                var mapImagedata = $(this).attr('data-tabb');

                //    	$(this).parents('.row').find('.mapImages .' +mapImagedata).css({'display':'block'});

                $(this).parents('.row').find('.mapImages .' + mapImagedata).css({
                    'display': 'block'
                }).addClass('heightlightmap');
                //        

                $(this).parents('.row').find('.mapImages .' + mapImagedata).children('.allmapsamecaption').show("slide", {
                    direction: "left"
                }, 400);

            });

            $('.mapTabListright ul li').mouseleave(function() {

                var mapImagedata = $(this).attr('data-tabb');
                $(this).parents('.row').find('.mapImages .' + mapImagedata).children('.allmapsamecaption').hide("slide", {
                    direction: "right"
                }, 10);

                $(this).removeClass('activelinkMap');

            });
        } else {
            $('.mapTabListright ul li').click(function() {
                $('.mapTabListright ul li').removeClass('activelinkMap');
                $(this).parents('.row').find('.mapImages li').css({
                    'display': 'none'
                }).removeClass('heightlightmap');

                $(this).parents('.row').find('.mapImages .' + mapImagedata).children('.allmapsamecaption').hide();

                $(this).addClass('activelinkMap');
                var mapImagedata = $(this).attr('data-tabb');

                //    	$(this).parents('.row').find('.mapImages .' +mapImagedata).css({'display':'block'});

                $(this).parents('.row').find('.mapImages .' + mapImagedata).css({
                    'display': 'block'
                }).addClass('heightlightmap');
                //        

                $(this).parents('.row').find('.mapImages .' + mapImagedata).children('.allmapsamecaption').show();


            });

        }

        $('.cercle').mouseover(function() {
            $(this).siblings('.mouse-hover-content').addClass('transform');
            $(this).siblings('.mouse-hover-image').addClass('transform');
        });

        $('.cercle').mouseout(function() {
            $(this).siblings('.mouse-hover-content').removeClass('transform');
            $(this).siblings('.mouse-hover-image').removeClass('transform');
        });

    });
</script>
<style>
    .forBusibess input {
        width: 100%;
        float: none;
        display: block;
        float: unset;
        margin: 0px 0px;
        margin-bottom: 0;
        border: 1px solid #b7b7b7;
        padding: 7px;
        outline: none;
    }
</style>