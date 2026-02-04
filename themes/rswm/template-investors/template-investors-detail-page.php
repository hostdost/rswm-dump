<?php 
	/* Template Name: Investors Detail page */ 
	get_header();
	global $post;
	$default_taxnomy = 'category'; $year_tax = get_terms('year',array('hide_empty' => false)); $annualyear = get_terms('annual-year',array('hide_empty' => false));
?>
<?php get_template_part('template-investors/new-top', 'menu') ?>
<div class="container container--55">
<div class="topdetail-content">
			<?php $terms = get_term_by('id',76,$default_taxnomy, array());?>
            <div class="investor-select-wrap 76">
                <h3><?php echo $terms->name ?></h3>
                  <div class="investor-select-box">
				<input type="hidden" name="class" value="share_holder_responsive">
				<input type="hidden" name="main_term_id" value="<?php echo $terms->term_id ?>">
                <select name="year" class="select_year">
					<?php foreach($year_tax as $year ) { ?>
                    <option value="<?php echo $year->slug; ?>" <?php echo $year->slug == date('Y') ? 'selected' : '' ?>><?php echo $year->name; ?></option>
                    <?php } ?>
                </select>
                </div>
                <div class="accordian_Innercontent">--------------
					<?php 
						$shareholder_args = array("post_type" =>"investor", 'fields' =>'ids',"post_status" => "publish", "posts_per_page" => -1, "orderby" => 'menu_order',
									  "tax_query"  => array( 
															array("taxonomy" => $terms->taxonomy, "field" => "id", "terms" => array($terms->term_id),),
															array("taxonomy" => "year", "field" => "slug", "terms" => ($year_tax[0]->slug )),
														   )); 
						$shareholder_query   = 	new WP_Query($shareholder_args);?>
                    <ul class="share_holder_responsive">
						<?php if($shareholder_query->have_posts() ) { ?>
							<?php while($shareholder_query->have_posts() ) {  $shareholder_query->the_post() ?>
								<?php $wpcfpdfurl   =  get_post_meta(get_the_ID(), 'wpcf-pdf-url', true); ?>
                        <li><a href="<?php echo $wpcfpdfurl != '' ? $wpcfpdfurl : 'javascript:void(0)' ; ?>" target="_blank">
                           <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                            <?php echo get_the_title() ?>
                            </a>
                        </li>
                         <?php } } ?>
                    </ul>
                </div>
            </div>
			<?php $Compliances_terms = get_term_by('id',77,$default_taxnomy);?>
               <div class="investor-select-wrap">
            <h3><?php echo $Compliances_terms->name; ?> </h3>
           <div class="investor-select-box">
			   <input type="hidden" name="class" value="compliances_responsive_dup">
			   <input type="hidden" name="main_term_id" value="<?php echo $Compliances_terms->term_id ?>">
                <select name="year" class="select_year">
                    <?php foreach($year_tax as $year ) { ?>
                    <option value="<?php echo $year->slug; ?>" <?php echo $year->slug == date("Y") ? 'selected' : '' ?>><?php echo $year->name; ?></option>
                    <?php } ?>
                </select>
                   </div>
                   <?php $Compliances_args = array("post_type" =>"investor",'fields' =>'ids', "post_status" => "publish", "posts_per_page" => -1, "orderby" => 'menu_order',
									  "tax_query"  => array( 
															array("taxonomy" => $Compliances_terms->taxonomy, "field" => "id", "terms" => array($Compliances_terms->term_id),),
															array("taxonomy" => "year", "field" => "slug", "terms" => ($year_tax[0]->slug )),
														   ));
						$Compliances_query   = 	new WP_Query($Compliances_args);?>
                <div class="accordian_Innercontent">
                    <ul class="compliances_responsive_dup">
						<?php if($Compliances_query->have_posts()) { ?>
							<?php while($Compliances_query->have_posts()) { $Compliances_query->the_post() ?>
								<?php $wpcfpdfurl1   =  get_post_meta(get_the_ID(), 'wpcf-pdf-url', true); ?>
                        <li><a href="<?php echo $wpcfpdfurl1 != '' ? $wpcfpdfurl1 : 'javascript:void(0)' ; ?>" target="_blank">
                           <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                           <?php the_title(); ?>
                            </a>
                        </li>
							 <?php } } ?>
                    </ul>
                </div>
            </div>
			<?php $terms146 = get_term_by('id',146,$default_taxnomy);?>
            <div class="investor-select-wrap 146">
                <h3><?php echo $terms146->name ?></h3>
                  <div class="investor-select-box">
				<input type="hidden" name="class" value="share_holder_responsive1">
				<input type="hidden" name="main_term_id" value="<?php echo $terms146->term_id ?>">
                <select name="year" class="select_year">
					<?php foreach($year_tax as $year ) { ?>
                    <option value="<?php echo $year->slug; ?>" <?php echo $year->slug == '2018' ? 'selected' : '' ?>><?php echo $year->name; ?></option>
                    <?php } ?>
                </select>
                </div>
                
                <div class="accordian_Innercontent">
					<?php $shareholder146_args = array("post_type" =>"investor", 'fields' =>'ids',"post_status" => "publish", "posts_per_page" => -1, "orderby" => 'menu_order',
									  "tax_query"  => array( 
															array("taxonomy" => $terms146->taxonomy, "field" => "id", "terms" => array($terms146->term_id),),
															array("taxonomy" => "year", "field" => "slug", "terms" => ($year_tax[1]->slug - 2),),
														   ) );
						
						$shareholder146_query   = 	new WP_Query($shareholder146_args);?>
                    <ul class="share_holder_responsive1">
						<?php if($shareholder146_query->have_posts() ) { ?>
							<?php while($shareholder146_query->have_posts() ) {  $shareholder146_query->the_post() ?>
								<?php $wpcfpdfurl   =  get_post_meta(get_the_ID(), 'wpcf-pdf-url', true); ?>
                        <li><a href="<?php echo $wpcfpdfurl != '' ? $wpcfpdfurl : 'javascript:void(0)' ; ?>" target="_blank">
                           <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                            <?php echo get_the_title() ?>
                            </a>
                        </li>
                         <?php } } ?>
                    </ul>
                </div>
            </div>
		<?php $annual = get_term_by('id',391,$default_taxnomy); ?>
        <div class="investor-select-wrap 76">
         <h3 class="vive"><?php echo $annual->name; ?></h3>
		<div class="accordian_Innercontent">
        <ul class="compliances_responsive_dup" id="prex">
		<?php
		$ments = array(
		'post_type' => 'investor',
		'post_per_page'=> -1 ,
		'category_name'=> 'Annual general Meeting' ,
        'order' => 'ASC',
        'orderby' => 'menu_order'
		);
		$anul = new WP_Query($ments);
		while($anul->have_posts()) : $anul->the_post();  ?>
		<?php $wpcfpdfurl   =  get_post_meta(get_the_ID(), 'wpcf-pdf-url', true); ?>
        <li>
		<a href="<?php echo $wpcfpdfurl != '' ? $wpcfpdfurl : 'javascript:void(0)' ; ?>" target="_blank">
       <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
        <?php echo the_title(); ?>
        </a>
        </li>
		<?php
		endwhile;
		?>
		</ul>
		</div>
		</div>	
</div>
</div>
<style>
.vive{
	margin-bottom:10px!important;
}
ol.num{
*list-style: none;
list-style: decimal;
font-size:18px;
font-family: 'Raleway', sans-serif;
padding: 0;
margin-bottom: 4em;
margin-left: 1.2em;
	}
ol.num li a{
	font-family: 'Raleway', sans-serif;
	font-size:18px;
    position: relative;
    display: block;
    padding: 0.4em .4em .4em 0.2em;
    margin: .5em 0;
    color: #444;
    text-decoration: none;
}	
</style>
<?php get_template_part('template-investors/new-footer', 'menu') ?>
