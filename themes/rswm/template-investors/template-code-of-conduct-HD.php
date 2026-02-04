<?php
/* Template Name: code-of-conduct-HD */
get_header();
global $post;
$default_taxnomy = 'category';
$year_tax = get_terms('year');
$annualyear = get_terms('annual-year');
?>
<?php get_template_part('template-investors/hd-top', 'menu') ?>
<div class="container">
    <div class="topdetail-content">
        <?php $taxnomyresult = get_term_by('id', 118, $default_taxnomy); ?>
        <div class="investor-select-wrap">
            <h3><?php echo $taxnomyresult->name ?></h3>
            <div class="accordian_Innercontent">
                <?php $shareholder_args = array(
					"post_type" => "investor", 'fields' => 'ids', "post_status" => "publish", "posts_per_page" => -1, "orderby" => 'menu_order',
					"tax_query"  => array(
						array("taxonomy" => $taxnomyresult->taxonomy, "field" => "id", "terms" => array($taxnomyresult->term_id),),
						//array("taxonomy" => "year", "field" => "slug", "terms" => $year_tax[0]->slug,),
					)
				);

				$shareholder_query   = 	new WP_Query($shareholder_args); ?>
                <ul class="<?php echo $taxnomyresult->slug ?>_responsive">
                    <?php if ($shareholder_query->have_posts()) { ?>
                    <?php while ($shareholder_query->have_posts()) {
							$shareholder_query->the_post() ?>
                    <?php $wpcfpdfurl   =  get_post_meta(get_the_ID(), 'wpcf-pdf-url', true); ?>
                    <li>
                        <?php the_content() ?>
                    </li>
                    <?php }
					} ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php get_template_part('template-investors/new-footer', 'menu') ?>