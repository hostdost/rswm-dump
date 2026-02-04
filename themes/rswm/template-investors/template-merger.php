<?php /* Template Name: Merger */ 
get_header();
	global $post;
	$default_taxnomy = 'category';
	$year_tax = get_terms('year');
	$annualyear = get_terms('annual-year');
?>
<?php get_template_part('template-investors/new-top', 'menu') ?>

<div class="container">
<div class="topdetail-content">
		<?php $mearge_terms = get_term_by('id',128,$default_taxnomy);?>
            <div class="investor-select-wrap">
                <h3><?php echo $mearge_terms->name ?></h3>
                <div class="accordian_Innercontent">
					<?php $meage_child_terrm = get_term_children( 128, $default_taxnomy ); ?>
					<?php foreach($meage_child_terrm as $meage_child ) { ?>
						<?php $mearge_child_terms = get_term_by('id',$meage_child,$default_taxnomy); ?>
					<?php 
						$mearge_child_args = array("post_type" =>"investor",'fields' =>'ids', "post_status" => "publish", "posts_per_page" => -1, "orderby" => 'menu_order',
									  "tax_query"  => array( 
															array("taxonomy" => $mearge_child_terms->taxonomy, "field" => "id", "terms" => array($mearge_child_terms->term_id),),
															//array("taxonomy" => $annualy->taxonomy, "field" => "id", "terms" => array($annualy->term_id),),
															
														   ));
						
						$mearge_child_query   = 	new WP_Query($mearge_child_args);

						 if($mearge_child_query->have_posts()) { 
					?>
					 <p class="merge-term-title" id="<?php echo $mearge_child_terms->slug ?>"><?php echo $mearge_child_terms->name ?></p>
                    <ul class="mearge-li-section">
						
							<?php while($mearge_child_query->have_posts() ) {  $mearge_child_query->the_post() ?>
								<?php $wpcfpdfurl1   =  get_post_meta(get_the_ID(), 'wpcf-pdf-url', true); ?>
                       
                           
                          
					<li><a href="<?php echo $wpcfpdfurl1 != '' ? $wpcfpdfurl1 : 'javascript:void(0)' ; ?>" target="_blank">
						<img src="<?php echo get_template_directory_uri()?>/images/pdf-icon.png" alt=""/>
						<?php the_title(); ?>
						</a>
					</li>
                            
                       
                         <?php } ?>
                        
                        
                    </ul>
                    <?php } ?>
                  <?php } ?>
                </div>
                
            </div>

</div>

</div>


<?php get_template_part('template-investors/new-footer', 'menu') ?>
