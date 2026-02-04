<?php 
	/* Template Name: Annual Reports-1 */ 
	get_header();
	global $post;
	$default_taxnomy = 'category'; $year_tax = get_terms('year'); $annualyear = get_terms('annual-year');
?>
<?php get_template_part('template-investors/new-top', 'menu') ?>
<div class="container">

<div class="topdetail-content">
<div class="accordian_Innercontent">
				<ul class="compliances_responsive">

					<li><a href="<?php echo get_template_directory_uri()?>/template-investors/pdf/annual-report/ANNUAL-RETURN-2021-22.pdf" target="_blank">
						<img src="<?php echo get_template_directory_uri()?>/images/pdf-icon.png" alt=""/>
					   <?php echo "Annual Return 2021-22" ?>
						</a>
					</li>
						
					<li><a href="<?php echo get_template_directory_uri()?>/template-investors/pdf/annual-report/annual-return-2020-21.pdf" target="_blank">
						<img src="<?php echo get_template_directory_uri()?>/images/pdf-icon.png" alt=""/>
					   <?php echo "Annual Return 2020-21" ?>
						</a>
					</li>
					
							
					<li><a href="<?php echo get_template_directory_uri()?>/template-investors/pdf/annual-report/Annual-Return-2019-20.pdf" target="_blank">
						<img src="<?php echo get_template_directory_uri()?>/images/pdf-icon.png" alt=""/>
					   <?php echo "Annual Return 2019-20" ?>
						</a>
					</li>
					
					</ul>
			</div>
			<?php $terms = get_term_by('id',191,$default_taxnomy);?>
            <div class="investor-select-wrap">
                <h3><?php echo $terms->name ?></h3>
                <div class="accordian_Innercontent">
					<?php $shareholder_args = array("post_type" =>"investor", 'fields' =>'ids',"post_status" => "publish", "posts_per_page" => -1, "orderby" => 'menu_order',
									  "tax_query"  => array( 
															array("taxonomy" => $terms->taxonomy, "field" => "id", "terms" => array($terms->term_id),),
														
														   ) );
						$shareholder_query   = 	new WP_Query($shareholder_args);?>
					<?php if($shareholder_query->have_posts()) { ?>
			<div class="accordian_Innercontent">
				<ul class="compliances_responsive">
						<?php while($shareholder_query->have_posts()) { $shareholder_query->the_post() ?>
							<?php $wpcfpdfurl1   =  get_post_meta(get_the_ID(), 'wpcf-pdf-url', true); ?>
					<li><a href="<?php echo $wpcfpdfurl1 != '' ? $wpcfpdfurl1 : 'javascript:void(0)' ; ?>" target="_blank">
						<img src="<?php echo get_template_directory_uri()?>/images/pdf-icon.png" alt=""/>
					   <?php the_title(); ?>
						</a>
					</li>
						 <?php } ?>
					</ul>
			</div>
			<?php } ?>
                </div>
            </div>
</div>
<div class="topdetail-content">
			<?php $terms = get_term_by('id',188,$default_taxnomy);?>
            <div class="investor-select-wrap">
                <h3><?php echo $terms->name ?></h3>
                <div class="accordian_Innercontent">
					<?php $shareholder_args = array("post_type" =>"investor", 'fields' =>'ids',"post_status" => "publish", "posts_per_page" => -1, "orderby" => 'menu_order',
									  "tax_query"  => array( 
															array("taxonomy" => $terms->taxonomy, "field" => "id", "terms" => array($terms->term_id),),
														   ) );
						
						$shareholder_query   = 	new WP_Query($shareholder_args);?>
					<?php if($shareholder_query->have_posts()) { ?>
			<div class="accordian_Innercontent">
				<ul class="compliances_responsive">
					
						<?php while($shareholder_query->have_posts()) { $shareholder_query->the_post() ?>
							<?php $wpcfpdfurl1   =  get_post_meta(get_the_ID(), 'wpcf-pdf-url', true); ?>
					<li><a href="<?php echo $wpcfpdfurl1 != '' ? $wpcfpdfurl1 : 'javascript:void(0)' ; ?>" target="_blank">
						<img src="<?php echo get_template_directory_uri()?>/images/pdf-icon.png" alt=""/>
					   <?php the_title(); ?>
						</a>
					</li>
						 <?php } ?>
					</ul>
			</div>
			<?php } ?>
                </div>
            </div>
</div>

<div class="topdetail-content">
			<?php $terms = get_term_by('id',113,$default_taxnomy);?>
            <div class="investor-select-wrap">
                <h3><?php echo $terms->name ?></h3>


				<!-- 2022 -->
<div class="topdetail-content">
			<?php $termssss = get_term_by('id',412,$default_taxnomy);?>
            <div class="investor-select-wrap investor-select-wrap-2021">
                <h3><?php echo $termssss->name ?></h3>
               
					<?php $shareholder_args = array(
						"post_type" =>"investor", 'fields' =>'ids',"post_status" => "publish", "posts_per_page" => -1, "orderby" => 'menu_order',
						"tax_query"  => array( array("taxonomy" => $termssss->taxonomy, "field" => "id", "terms" => array($termssss->term_id),),) 
						);
						
						$shareholder_query   = 	new WP_Query($shareholder_args);?>
					<?php if($shareholder_query->have_posts()) { ?>
			<div class="accordian_Innercontent">
				<ul class="compliances_responsive">
					
						<?php while($shareholder_query->have_posts()) { $shareholder_query->the_post() ?>
							<?php $wpcfpdfurl1   =  get_post_meta(get_the_ID(), 'wpcf-pdf-url', true); ?>
					<li><a href="<?php echo $wpcfpdfurl1 != '' ? $wpcfpdfurl1 : 'javascript:void(0)' ; ?>" target="_blank">
						<img src="<?php echo get_template_directory_uri()?>/images/pdf-icon.png" alt=""/>
					   <?php the_title(); ?>
						</a>
					</li>
						 <?php } ?>
					</ul>
			</div>
			<?php } ?>
                </div>
            
</div>
<!--/ 2022 -->


				<!-- 2021 -->
<div class="topdetail-content">
			<?php $termssss = get_term_by('id',403,$default_taxnomy);?>
            <div class="investor-select-wrap investor-select-wrap-2021">
                <h3><?php echo $termssss->name ?></h3>
               
					<?php $shareholder_args = array(
						"post_type" =>"investor", 'fields' =>'ids',"post_status" => "publish", "posts_per_page" => -1, "orderby" => 'menu_order',
						"tax_query"  => array( array("taxonomy" => $termssss->taxonomy, "field" => "id", "terms" => array($termssss->term_id),),) 
						);
						
						$shareholder_query   = 	new WP_Query($shareholder_args);?>
					<?php if($shareholder_query->have_posts()) { ?>
			<div class="accordian_Innercontent">
				<ul class="compliances_responsive">
					
						<?php while($shareholder_query->have_posts()) { $shareholder_query->the_post() ?>
							<?php $wpcfpdfurl1   =  get_post_meta(get_the_ID(), 'wpcf-pdf-url', true); ?>
					<li><a href="<?php echo $wpcfpdfurl1 != '' ? $wpcfpdfurl1 : 'javascript:void(0)' ; ?>" target="_blank">
						<img src="<?php echo get_template_directory_uri()?>/images/pdf-icon.png" alt=""/>
					   <?php the_title(); ?>
						</a>
					</li>
						 <?php } ?>
					</ul>
			</div>
			<?php } ?>
                </div>
            
</div>
<!--/ 2021 -->


                <div class="accordian_Innercontent">
					<?php $shareholder_args = array("post_type" =>"investor", 'fields' =>'ids',"post_status" => "publish", "posts_per_page" => -1, "orderby" => 'menu_order',
									  "tax_query"  => array( 
															array("taxonomy" => $terms->taxonomy, "field" => "id", "terms" => array($terms->term_id), 'include_children'=>false),
														   ), );
						
						$shareholder_query   = 	new WP_Query($shareholder_args);?>
					<?php if($shareholder_query->have_posts()) { ?>
			<div class="accordian_Innercontent">
				<ul class="compliances_responsive">
						<?php while($shareholder_query->have_posts()) { $shareholder_query->the_post() ?>
							<?php $wpcfpdfurl1   =  get_post_meta(get_the_ID(), 'wpcf-pdf-url', true); ?>
					<li><a href="<?php echo $wpcfpdfurl1 != '' ? $wpcfpdfurl1 : 'javascript:void(0)' ; ?>" target="_blank">
						<img src="<?php echo get_template_directory_uri()?>/images/pdf-icon.png" alt=""/>
					   <?php the_title(); ?>
						</a>
					</li>
						 <?php } ?>
					</ul>
			</div>
			<?php } ?>
                </div>
            </div>
</div>

<div class="topdetail-content">
			<?php $terms = get_term_by('id',402,$default_taxnomy);?>
            <div class="investor-select-wrap">
                <h3><?php echo $terms->name ?></h3>
                <div class="accordian_Innercontent">
					<?php $shareholder_args = array("post_type" =>"investor", 'fields' =>'ids',"post_status" => "publish", "posts_per_page" => -1, "orderby" => 'menu_order',
									  "tax_query"  => array( 
															array("taxonomy" => $terms->taxonomy, "field" => "id", "terms" => array($terms->term_id), 'include_children'=>false),
														   ), );
						
						$shareholder_query   = 	new WP_Query($shareholder_args);?>
					<?php if($shareholder_query->have_posts()) { ?>
			<div class="accordian_Innercontent">
				<ul class="compliances_responsive">
						<?php while($shareholder_query->have_posts()) { $shareholder_query->the_post() ?>
							<?php $wpcfpdfurl1   =  get_post_meta(get_the_ID(), 'wpcf-pdf-url', true); ?>
					<li><a href="<?php echo $wpcfpdfurl1 != '' ? $wpcfpdfurl1 : 'javascript:void(0)' ; ?>" target="_blank">
						<img src="<?php echo get_template_directory_uri()?>/images/pdf-icon.png" alt=""/>
					   <?php the_title(); ?>
						</a>
					</li>
						 <?php } ?>
					</ul>
			</div>
			<?php } ?>
                </div>
            </div>
</div>

</div>

<style>
.topdetail-content .investor-select-wrap.investor-select-wrap-2021 h3:after {
    content: '+';
    margin-left: 10px;
}


.investor-select-wrap.investor-select-wrap-2021 .accordian_Innercontent{
	display:none;
}


.investor-select-wrap.investor-select-wrap-2021 h3.highlightslide:after {
    content: '-';
}
	</style>
<?php get_template_part('template-investors/new-footer', 'menu') ?>
