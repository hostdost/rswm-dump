<?php 
	/* Template Name: Investors Test */ 
	get_header();
	global $post;
?>
<style>
.investeTBanner img {
    width: 100%;
    display: block;
}
.investeTBanner {
    position: relative;
    margin-top: 92px;
}
.investeTBannerContent {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
    .inversterGrid .grid {
    margin: 0 -1px;
}
.investeTBannerContent h2 {
    font-size: 37px;
    text-transform: uppercase;
    font-family: 'gotham_htfbook';
    color: #fff;
    font-weight: normal;
    letter-spacing: 7px;
    border-bottom: 1px solid #fff;
    padding-bottom: 20px;
}
.grid-item, .grid-sizer {
    width: 33.33%;
}
.grid-item {
    float: left;
    overflow: hidden;
    padding: 0 1px;
    margin-bottom: 2px;
}
    .grid-item.width_2{
        width: 66.66%
    }
    .grid-item img{
        object-fit: cover;
        height: 100%;
        width: 100%;
    }
    .grid-item img, .grid-item a{
        display: block;
        height: 100%;
    }
    .height1{
        height: 210px;
    }
    .height2{
        height: 420px;
    }
    .height3{
        height: 630px;
    }
.investorCaption {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    width: 100%;
    object-fit: cover;
    width: 100%;
    
    
}
.investorCaption h2 {
    font-size: 19px;
    text-transform: uppercase;
    font-family: 'gotham_htfbook';
    color: #fff;
    font-weight: normal;
    text-align: center; 
}
.investorCaption h2 a {
    text-decoration: none;
    color: #fff;
}
.inversterGrid {
    margin-bottom: 40px;
}

* {
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
}
    
    
/*grid new*/  
    
.inversterGrid1 ul li {
    float: left;
}

.inversterGrid1 ul li img {
    display: block;
    width: 100%;
}
.inversterGrid1 ul:after {
    content: '';
    display: block;
    clear: both;
}    
.inversterGrid1 {
    margin-bottom: 40px;
}  
    
    
    
    
    
    
    
</style>
<div class="investeTBanner">
    <img src="<?php echo get_template_directory_uri()?>/images/invester5-12-2018Banner.jpg" alt=""/>
    <div class="investeTBannerContent">
        <h1>Investors</h1>
    </div>
</div>

<div class="grid">
    <div class="grid-sizer"></div>
        <div class="grid-item ">
    </div>
</div>





<div class="inversterGrid">
    <div class="grid">
        <div class="grid-sizer"></div>
         <div class="grid-item height2">
             <a href="<?php echo get_permalink(131) ?>">
            <img src="<?php echo get_template_directory_uri()?>/images/investor-img-1.jpg" alt=""/>
            </a>
            <div class="investorCaption">  
                <h2><a href="<?php echo get_permalink(131) ?>">Annual Reports</a></h2>
            </div>  
        </div>
         <div class="grid-item height2">
             <a href="<?php echo get_permalink(1280) ?>"><img src="<?php echo get_template_directory_uri()?>/images/investor-img-2.jpg" alt=""/></a>
            <div class="investorCaption">  
                <h2><a href="<?php echo get_permalink(1280) ?>">Investors Relations</a></h2>
            </div>  
        </div>
<!--
        <div class="grid-item height1">
             <a href="#"><img src="<?php echo get_template_directory_uri()?>/images/investor-img-8.jpg" alt=""/></a>
             <div class="investorCaption">  
                 <h2><a href="#">Merger</a></h2>
            </div> 
        </div>
-->
         <div class="grid-item height3">
             <a href="<?php echo get_permalink(129) ?>"><img src="<?php echo get_template_directory_uri()?>/images/imag3.jpg" alt=""/></a>
            <div class="investorCaption">  
                <h2><a href="<?php echo get_permalink(129) ?>">Investors Correspondence</a></h2>
            </div>  
        </div>
          <div class="grid-item height2">
             <a href="<?php echo get_permalink(139) ?>"><img src="<?php echo get_template_directory_uri()?>/images/investor-img-4.jpg" alt=""/></a>
            <div class="investorCaption">  
                <h2><a href="<?php echo get_permalink(139) ?>">Transfer of Shares to IEPF</a></h2>
            </div> 
        </div>
            <div class="grid-item height2">
             <a href="<?php echo get_permalink(137) ?>"><img src="<?php echo get_template_directory_uri()?>/images/investor-img-5.jpg" alt=""/></a>
            <div class="investorCaption">  
                <h2><a href="<?php echo get_permalink(137) ?>">Code of Conduct</a></h2>
            </div> 
        </div>
       
     
         <div class="grid-item height2">
             <a href="<?php echo get_permalink(133) ?>"><img src="<?php echo get_template_directory_uri()?>/images/investor-img-6.jpg" alt=""/></a>
            <div class="investorCaption">  
                <h2><a href="<?php echo get_permalink(133) ?>">Board of Directors</a></h2>
            </div> 
        </div>
         <div class="grid-item height2">
             <a href="<?php echo get_permalink(135) ?>"><img src="<?php echo get_template_directory_uri()?>/images/investor-img-7.jpg" alt=""/></a>
            <div class="investorCaption">  
                <h2><a href="<?php echo get_permalink(135) ?>">Financial Performance</a></h2>
            </div>
        </div>
         <div class="grid-item height2">
             <a href="<?php echo get_permalink(1089) ?>">
            <img src="<?php echo get_template_directory_uri()?>/images/Stockexchange.jpg" alt=""/>
            </a>
            <div class="investorCaption">  
                <h2><a href="<?php echo get_permalink(1089) ?>">Intimation to Stock Exchange</a></h2>
            </div>  
        </div>
    
        <div class="grid-item height1">
             <a href="<?php echo get_permalink(1777) ?>"><img src="<?php echo get_template_directory_uri()?>/images/investor-img-8.jpg" alt=""/></a>
             <div class="investorCaption">  
                 <h2><a href="<?php echo get_permalink(1777) ?>">Merger</a></h2>
            </div> 
        </div>
	</div>     
</div>


		
<?php get_template_part('footerpart'); ?>

<div class="allSocialIcon">
    <ul>
        <li>
            <a href="https://www.instagram.com/rswmofficial/" target="_blank">
                <img src="<?php echo get_template_directory_uri()?>/images/instagram-symbol.png" alt=""/>
            </a>
        </li>
        <li>
            <a href="https://twitter.com/rswmofficial?lang=en" target="_blank">
                <img src="<?php echo get_template_directory_uri()?>/images/twitter-logo-silhouette.png" alt=""/>
            </a>
        </li>
        <li>
            <a href="https://www.facebook.com/rswmofficial/" target="_blank">
                <img src="<?php echo get_template_directory_uri()?>/images/facebook-letter-logo.png" alt=""/> 
            </a>
        </li>
        <li>
			<a href="https://www.linkedin.com/company/rswmofficial/" target="_blank">
				<i class="fa fa-linkedin" aria-hidden="true" style="color: #c9bfaf;        font-size: 18px;vertical-align: bottom;"></i>
			</a>
		</li>
<!--        <li>
            <a href="#">
                <img src="<?php echo get_template_directory_uri()?>/images/musica-searcher-.png" alt=""/>
            </a>
        </li>-->
    </ul>
</div>
<?php get_footer(); ?>

<script type="text/javascript">
    $(document).ready(function() {
var $griditem = $('.grid').imagesLoaded( function() {	  
            $griditem.masonry({
                itemSelector: '.grid-item',
                columnWidth: '.grid-sizer',
               
            });
        });
    });
</script>
