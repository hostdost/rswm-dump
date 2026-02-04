<?php 
	/* Template Name: financial-performance-1.php */ 
	
	get_header();
	global $post;
	$default_taxnomy = 'category'; $year_tax = get_terms('year'); $annualyear = get_terms('annual-year');
?>
<?php get_template_part('template-investors/hd-top', 'menu') ?>
<div class="container">
<div class="topdetail-content">
	<?php $terms = get_term_children(115,$default_taxnomy);?>
	<?php //foreach($terms as $term) { ?>
		<?php $taxnomyresult = get_term_by('id',116 ,$default_taxnomy); //$taxnomyresult = get_term_by('id',$term ,$default_taxnomy); ?>
		<?php //$yyy = $taxnomyresult->term_id == 116 ? $year_tax[0]->slug : $year_tax[0]->slug ?>
		<?php $yyy = 2020; ?>
            <div class="investor-select-wrap">
                <h3><?php echo $taxnomyresult->name ?></h3>
                  <div class="investor-select-box">
				<input type="hidden" name="class" value="<?php echo $taxnomyresult->slug ?>_responsive">
				<input type="hidden" name="main_term_id" value="<?php echo $taxnomyresult->term_id ?>">
                <select name="year" class="select_year">
					<?php foreach($year_tax as $year ) { ?>
                    <option value="<?php echo $year->slug; ?>"  <?php echo $year->slug == date('Y') ? 'selected' : '' ; ?>><?php echo $year->name; ?></option>
                    <?php } ?>
                </select>
                </div>
                <div class="accordian_Innercontent newfinance">
					<?php 
						$shareholder_args = array("post_type" =>"investor", 'fields' =>'ids',"post_status" => "publish", "posts_per_page" => -1, "orderby" => 'menu_order',
									  "tax_query"  => array( 
															array("taxonomy" => $taxnomyresult->taxonomy, "field" => "id", "terms" => array($taxnomyresult->term_id),),
															array("taxonomy" => "year", "field" => "slug", "terms" => date('Y')),
														   ));
						$shareholder_query   = 	new WP_Query($shareholder_args);?>
                    <ul class="<?php echo $taxnomyresult->slug ?>_responsive">
						<?php if($shareholder_query->have_posts() ) { ?>
							<?php while($shareholder_query->have_posts() ) {  $shareholder_query->the_post() ?>
								<?php $wpcfpdfurl   =  get_post_meta(get_the_ID(), 'wpcf-pdf-url', true); ?>
								<?php $wpcfpdfurl2   =  get_post_meta(get_the_ID(), 'wpcf-pdf-url-hindi', true); ?>
                        <li>
						<?php if($wpcfpdfurl != '' && $wpcfpdfurl2 == '' ) { ?>	
							<a href="<?php echo $wpcfpdfurl != '' ? $wpcfpdfurl : 'javascript:void(0)' ; ?>" target="_blank">
                           <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                            <?php echo get_the_title() ?>
                            </a>
                        <?php } else { ?>
							<span class="newspaper-text">  <i class="fa fa-file-pdf-o" aria-hidden="true"></i><?php the_title(); ?> </span>
							<span class="newspaper-vers"><a href="<?php echo $wpcfpdfurl != '' ? $wpcfpdfurl : 'javascript:void(0)' ; ?>" target="_blank">English </a> <span>|</span><a href="<?php echo $wpcfpdfurl2 != '' ? $wpcfpdfurl2 : 'javascript:void(0)' ; ?>" target="_blank">Hindi </a></span>
						<?php } ?>
                        </li>
                         <?php } // } ?>
                    </ul>
                </div>
                
            </div>
    <?php } ?>
</div>
</div>

<?php get_template_part('template-investors/new-footer', 'menu') ?>

