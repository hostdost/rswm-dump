<?php
/*Template Name: Blogs Listing*/
 ?>
 <?php get_header(); ?>
<div class="testimonials-block" id="jamp">
    <div class="container">
    	<div class="col span_12 mb-30">
    		<h1><?php echo get_the_title(5342); ?></h1>
    	</div>
        <div class="row">
        	<?php 
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => -1,    
                    );

                    $post_query = new WP_Query($args);

                    if($post_query->have_posts() ) :
                        while($post_query->have_posts() ) : ?>
                    <?php 
                        $post_query->the_post();
                        if ( has_post_thumbnail()) {
                           $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
                    
                       }     
                    ?><div class="col span_4 mb-30">
						    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					        	<div class="servicesBlock" id="blog-tbl-content">
						            <img src="<?php echo $image_url[0] ?>" title="Premier Yarn Manufacturer" alt="RSWM Ltd. is a Premier Yarn Manufacturer in India">
						            <div class="servicesContent">
						                <h3><?php the_title(); ?> </h3>
						            </div>
						            <div class="servicesHover">
						                <div class="servicesTable">
						                    <div class="servicesTablecell">
						                        <h3><?php the_title(); ?></h3>
						                        <!-- <p class="spotlights" style="display: none;"><?php the_excerpt(); ?><br> -->
						                        <i class="fa fa-angle-right" aria-hidden="true" style="color: #fff;font-size: 20px;"></i></p>
						                    </div>
						                </div>
						            </div>
					        	</div>
				        	</a>
				    	</div>
       					<?php endwhile;?>
         			<?php endif;?>
         			<?php wp_reset_postdata();?> 
	   		
		</div>
    </div>
</div>
<style type="text/css">
	.mb-30{
		margin-bottom: 30px;
	}
	#blog-tbl-content h3 {
	    text-transform: unset;
	    line-height: 1.2;
  }
</style>
 <?php get_footer(); ?>