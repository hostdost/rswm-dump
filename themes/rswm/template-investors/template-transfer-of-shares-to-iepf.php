<?php 
/* 
 * Template Name: Transfer of Shares to IEPF
*/ 
get_header('less');
global $post;
?>
<?php get_template_part('template-investors/investors','toppart'); ?>
<?php get_template_part('template-investors/investors','menu'); ?>
<div class="container invester-block">
	<aside class="aside-left-menu"><?php get_template_part('template-investors/investors', 'leftmenu');  ?></aside>
	<section class="program-description">
		<div class="row">
			<div class="col span_12">
				<div class="program-heading">
					<h2>Transfer of Shares to IEPF</h2>
				</div>
				<div class="date-description">
					<h4>Dividend 2009-10</h4>
					<ul>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/transfer-of-shares-to-iepf/RSWM_IEPF_4_DATA_DIVIDEND_2009-10.pdf" target="_blank"> Transfer of Shares to IEPF - Dividend 2009-10</a></li>						
					</ul>
				</div>
				<div class="date-description">
					<h4>Interim Dividend 2010-11</h4>
					<ul>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/transfer-of-shares-to-iepf/RSWM_IEPF_4_DATA_INTERIM_DIVIDEND_2010-11.pdf" target="_blank"> Transfer of Shares of IEPF - Interim Dividend 2010-11</a></li>						
					</ul>
				</div>
				<div class="date-description">
					<h4>RSWM IEPF NOTICE</h4>
					<ul>
						<li>RSWM IEPF NOTICE - <a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/transfer-of-shares-to-iepf/RSWM_IEPF_NOTICE-English.pdf" target="_blank"> English</a> | <a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/transfer-of-shares-to-iepf/RSWM_IEPF_NOTICE-Hindi.pdf" target="_blank"> Hindi</a></li>						
					</ul>
				</div>
			</div>
		</div>
	</section> 
	
	<aside class="aside-right-details"> </aside>
	
</div>
<?php get_template_part('template-investors/investors', 'footerpart'); ?>
<?php get_footer('less'); ?>
