<?php 
	/* Template Name: Greige Yarn*/ 
	
	get_header(); 
	global $post;
	$postid  						= $post->ID; 
	$wpcfbanner  					= get_post_meta($postid, 'wpcf-banner', true); 
	$wpcftitlebanner  				= get_post_meta($postid, 'wpcf-title-banner', true); 
	$wpcfshortdescriptionbanner  	= get_post_meta($postid, 'wpcf-short-description-banner', true); 
	$wpcfmiddlebannerimage  	    = get_post_meta($postid, 'wpcf-middle-banner-image', true); 
	$wpcfmiddledescription  	    = get_post_meta($postid, 'wpcf-middle-description', true); 
	$wpcfmiddlelogoimage  	        = get_post_meta($postid, 'wpcf-middle-logo-image', true); 
?>

<div class="greige-yarn-banner">
    <img src="<?php echo $wpcfbanner ?>" alt="<?php echo rswm_get_attachment_alt_title_url( $wpcfbanner, 'alt' ) ?>">
    <div class="greige-yarn-banner-text">
        <h2><span><?php echo $wpcftitlebanner ?></span></h2>
        <p><?php echo $wpcfshortdescriptionbanner ?></p>
    </div>

</div>
<div class="gerige-next-banner greige-yarn-border">
    
    <div class="container">
		     <?php echo wpautop(get_post_field( 'post_content', $postid )); ?>
        <div class="greige-yarnlogo">
        <img src="<?php echo $wpcfmiddlelogoimage ?>" style="width:auto" alt="<?php echo rswm_get_attachment_alt_title_url( $wpcfmiddlebannerimage, 'alt' ) ?>">
        </div>
        <?php echo wpautop($wpcfmiddledescription); ?>
    </div>
</div>
<div class="greige-list greige-yarn-business">
    <div class="container">
        <h2> Our manufacturing unit </h2>
        <ul>
            <li>
                <div class="greige-inner">
                    <img src="<?php echo get_template_directory_uri() ?>/images/Greige-img.jpg" alt="Trutzschler & LMW Blow Room" title="Trutzschler & LMW Blow Room">
                </div>
                <div class="greige-list-detail">
                    <p>Trutzschler & <br/>LMW Blow Room</p>
                </div>
            </li>
            <li>
                <div class="greige-inner">
                    <img src="<?php echo get_template_directory_uri() ?>/images/Greige-img2.jpg" alt="LMW RSB 851-Draw Frame" title="LMW RSB 851-Draw Frame"> </div>
                <div class="greige-list-detail">
                    <p>LMW RSB 851-Draw Frame</p>
                </div>
            </li>
            <li>
                <div class="greige-inner">
                    <img src="<?php echo get_template_directory_uri() ?>/images/Greige-img3.jpg" alt="LMW LR-9 AXL - Ring Frame" title="LMW LR-9 AXL - Ring Frame">
                </div>
                <div class="greige-list-detail">
                    <p>LMW LR-9 AXL - Ring Frame</p>
                </div>
            </li>
            <li>
                <div class="greige-inner">
                    <img src="<?php echo get_template_directory_uri() ?>/images/Greige-img4.jpg" alt="Peass - Cheese Winding" title="Peass - Cheese Winding">
                </div>
                <div class="greige-list-detail">
                    <p>Peass - Cheese Winding</p>
                </div>
            </li>
            <li>
                <div class="greige-inner">
                    <img src="<?php echo get_template_directory_uri() ?>/images/Greige-img5.jpg" alt="LMW LC333- Carding" title="LMW LC333- Carding">
                </div>
                <div class="greige-list-detail">
                    <p>LMW LC333- Carding</p>
                </div>
            </li>
            <li>
                <div class="greige-inner">
                    <img src="<?php echo get_template_directory_uri() ?>/images/Greige-img6.jpg" title="Fully Automatic LMW LF4200 AX - Speed frame" alt="Fully Automatic LMW LF4200 AX - Speed frame">
                </div>
                <div class="greige-list-detail">
                    <p>Fully Automatic<br/> LMW LF 4200 AX - Speed frame</p>
                </div>
            </li>
            <li>
                <div class="greige-inner">
                    <img src="<?php echo get_template_directory_uri() ?>/images/Greige-img7.jpg" title="Muratec 21C - Link Coner" alt="Muratec 21C - Link Coner">
                </div>
                <div class="greige-list-detail">
                    <p>Muratac 21C - Link Coner</p>
                </div>
            </li>
            <li>
                <div class="greige-inner">
                    <img src="<?php echo get_template_directory_uri() ?>/images/Greige-img8.jpg" title="Neuenhauser - Fully Automatic Package Unloading and Packing System" alt="Neuenhauser - Fully Automatic Package Unloading and Packing System">
                </div>
                <div class="greige-list-detail">
                    <p>Neuenhauser - Fully Automatic <br/>Package Unloading and<br/> Packing System</p>
                </div>
            </li>
        </ul>
    </div>
</div>



<div class="testimonials-block" id="jamp">
    <div class="container">
        <div class="lnjBhilwaraContent businessUnitHeading">
            <h2>Our Business Units</h2>
        </div>
        <?php get_header('ourbusiness'); ?>

    </div>
</div>


<?php get_template_part('contact-form') ?>
<style>
    .greige-yarn-banner {
        position: relative;
        overflow: hidden;
    }
    
    .greige-yarn-banner img {
        width: 100%;
        max-width: 100%;
        display: block;
    }
    
    .greige-yarn-banner-text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%); 
    }
    
    .greige-yarn-banner-text h2 {
        font-size: 30px;
        color: #fff;
        text-align: center;
    }
    
    .greige-yarn-banner-text h2 span {
        display: inline-block;
        border-bottom: 1px solid #fff;
        padding-bottom: 18px;
        margin-bottom: 18px;
        margin-bottom: 18px;
        font-family: 'gotham_lightregular';
        font-weight: 100;
        font-size: 30px;  
        
    }
    
    .greige-yarn-banner-text p {
        color: #fff;
        width: 84%;
        text-align: center;
        margin: 0 auto;
        font-family: 'gotham_lightregular', serif;
        font-size: 25px;
        line-height: 36px;
    }
    
    .greige-list ul li {
        display: inline-block;
        width: calc(25% - 5px);
        padding: 10px;
        position: relative;
    }
    
    .greige-list ul {
        margin: 0 -10px;
    }
    
    .greige-list ul li img {
        width: 100%;
        max-width: 100%;
        display: block;
    }
    
    .greige-inner {
        overflow: hidden;
    }
    
    .greige-list-detail {
        position: absolute;
        top: 50%;
        color: #fff;
        font-size: 15px;
        text-align: center;
        width: 100%;
        font-weight: 700;
        transform: translateY(-50%)translateX(-50%);
        left: 50%;
    }
    
    .greige-list-detail p {
        text-align: center;
        line-height: 21px;
    }
    
    .greige-list {
        margin-top: 50px;
        margin-bottom: 50px;
    }
    
    .gerige-next-banner img {
        width: 100%;
        display: block;
        max-width: 100%;
    }
    
    .gerige-next-banner-inner {
        overflow: hidden;
    }
    
    .gerige-next-banner {
        border-bottom: 1px solid #ccc;
    }
    
    .gerige-next-banner p {
        font-size: 14px;
        line-height: 25px;
        text-align: center;
        color: #000;
        margin: 18px 0;
    }

</style>



<!-- Footer Start -->
<?php get_footer(); ?>
    <!-- Footer End -->
