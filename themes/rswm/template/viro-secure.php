<?php 
    /* Template Name: viro-secure */
?>

<?php echo get_header(); 

	global $post;
	$postid 						=  $post->ID;
	$wpcfbanner  					=  get_post_meta($postid, 'wpcf-viro-top-banner', true);	
	$wpcftitlebelowbanner 			=  get_post_meta($postid, 'wpcf-title-below-banner', true);
	$wpcffirsticon    				=  get_post_meta($postid, 'wpcf-first-icon-image', true);
	$wpcffirsticoncontent    		=  get_post_meta($postid, 'wpcf-first-icons-content', true);
	$wpcfsecondicon    				=  get_post_meta($postid, 'wpcf-second-icon', true);
	$wpcfsecondiconcontent    		=  get_post_meta($postid, 'wpcf-second-icons-content', true);
	$wpcfthirdicon    				=  get_post_meta($postid, 'wpcf-third-icon', true);
	$wpcfthirdiconcontent    		=  get_post_meta($postid, 'wpcf-third-icons-content', true);	

	
	$imageupcontent  				=  get_post_meta($postid, 'wpcf-image-up-content', true);
	$imagemiddle  				    =  get_post_meta($postid, 'wpcf-image-middle', true);
	$imagedowncontent  	            =  get_post_meta($postid, 'wpcf-content-lower-image', true);
	
	$imageleftone 				    =  get_post_meta($postid, 'wpcf-image-left-one', true);
	$imagerightone  				=  get_post_meta($postid, 'wpcf-image-right-one', true);
	$imagelefttwo  	                =  get_post_meta($postid, 'wpcf-image-left-two', true);	
	
	$contentrighttwo  			    =  get_post_meta($postid, 'wpcf-content-right-two', true);
	$imageleftthree 				=  get_post_meta($postid, 'wpcf-image-left-three', true);
	$imagerightthree  	            =  get_post_meta($postid, 'wpcf-image-right-three', true);
    $contentwithimage  	            =  get_post_meta($postid, 'wpcf-content-with-image', true);



?>

<main id="maincontent" class="viro-secure">
    <section id="hero-banner">
        <div class="banner">
        <a href=""><img src="<?php echo $wpcfbanner ; ?>" alt="" /></a>
        </div>
    </section>
    <div class="container">
        <div class="RSWM-Ltd-text">
            <p><?php echo $wpcftitlebelowbanner; ?></p>
        </div>
    </div>
    <section id="viro_secure">
        <div class="container">
            <div class="content">
                <img class="logo" src="<?php echo $wpcffirsticon; ?>" alt="" />
                <p><?php echo $wpcffirsticoncontent; ?></p>
            </div>
            <div class="content">
                <img class="logo" src="<?php echo $wpcfsecondicon; ?>" alt="" />
                <p><?php echo $wpcfsecondiconcontent; ?></p>
            </div>
            <div class="content">
                <img class="logo" src="<?php echo $wpcfthirdicon; ?>" alt="" />
                <p><?php echo $wpcfthirdiconcontent; ?></p>
            </div>
            <p class="BTM-para"><?php echo $imageupcontent; ?></p>
        </div>
    </section>
    <section id="middle-banner" class="middle-banner">
        <div class="short-banner">
        <a href=""><img src="<?php echo $imagemiddle; ?>" alt=""></a>
        </div>
    </section>

    <div class="middle-text">
        <div class="container">
        <p><?php echo $imagedowncontent; ?></p>
        </div>
    </div>

    <section id="mask-banners">
        <div class="row">
            <div class="col span_6">
            <a href=""><img src="<?php echo $imageleftone; ?>" alt=""></a>
            </div>
            <div class="col span_6">
            <a href=""><img src="<?php echo $imagerightone; ?>" alt=""></a>
            </div>
        </div>
    </section>
    <section id="SO-20743">
            <div class="row">
                <div class="col span_6">
                    <a href=""><img src="<?php echo $imagelefttwo; ?>" alt="" /></a>
                </div>
                <div class="col span_6">
                    <div class="content">
                       <?php echo $contentrighttwo; ?>
					   </div>
            </div>
        </div>
    </section>
    <section id="mayur-address" class="mayur-images">
        <div class="row">
            <div class="col span_6">
              <a href=""><img src="<?php echo $imageleftthree ; ?>" alt=""></a>
            </div>
            <div class="col span_6">
                <div class="right-side-text">
                 <a href=""><img src="<?php echo $imagerightthree ; ?>" alt=""></a>
                 <p><?php echo $contentwithimage; ?></p>
				 </div>
            </div>
        </div>
    </section>

    <section class="aboutContact_form">
        <?php get_template_part('contact-form') ?>
    </section>

</main>

<?php echo get_footer(); ?>