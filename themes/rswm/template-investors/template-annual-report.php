<?php 
/* 
 * Template Name: Annual Reports
 */ 
get_header();
	global $post;
?>
<?php get_template_part('template-investors/investors','toppart'); ?>
	<?php get_template_part('template-investors/investors','menu'); ?>
		<div class="container invester-block">
			<aside class="aside-left-menu"><?php get_template_part('template-investors/investors', 'leftmenu');  ?></aside>
			<section class="program-description">
				<div class="row">
					<div class="col span_12">
						<div class="date-description annual_report_grid">
							<h4>Annual Reports</h4>
							<ul>
                                <li>
                                    <div class="annualwrap-investor">
                                    <a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/annual-report/RSWM_AR_2016-17.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/InvesterReport1.jpg" alt="" /></a>
                                       <div class="annualwrap-caption">
                                          <div class="annualwrap-table"> 
                                    <div class="annualwrap-tablecell"> 
                                    <h2><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/annual-report/RSWM_AR_2016-17.pdf" target="_blank">2016 - 2017</a></h2>
                                     </div>    
                                    </div>
                                    </div>
                                    </div>
                                </li>
                                <li>
                                     <div class="annualwrap-investor">
                                    <a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/annual-report/ar-2015-16.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/InvesterReport2.jpg" alt="" /></a>
                                       <div class="annualwrap-caption">
                                          <div class="annualwrap-table"> 
                                    <div class="annualwrap-tablecell">  
                                    <h2><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/annual-report/ar-2015-16.pdf" target="_blank">2015 - 2016</a></h2>
                                              </div>
                                           </div>
                                         </div>
                                    </div>
                                </li>
                                <li>
                                     <div class="annualwrap-investor">
                                    <a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/annual-report/ar-2014-15.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/InvesterReport3.jpg" alt="" /></a> 
                                       <div class="annualwrap-caption">
                                          <div class="annualwrap-table"> 
                                    <div class="annualwrap-tablecell"> 
                                    <h2><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/annual-report/ar-2014-15.pdf" target="_blank">2014 - 2015</a></h2>
                                         
                                              </div>
                                           </div>
                                         </div>
                                    </div>
                                </li>
                                <li>
                                     <div class="annualwrap-investor">
                                    <a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/annual-report/ar-2013-14.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/InvesterReport4.jpg" alt="" /></a>
                                       <div class="annualwrap-caption">
                                          <div class="annualwrap-table"> 
                                    <div class="annualwrap-tablecell">      
                                    <h2><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/annual-report/ar-2013-14.pdf" target="_blank">2013 - 2014</a></h2> 
                                              </div>
                                           </div>
                                         </div>
                                    </div>
                                </li>
								<!--<li>
                                    <a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/annual-report/RSWM_AR_2016-17.pdf" target="_blank"> Annual Report for the year, 2016-17</a>
                                </li>
								<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/annual-report/ar-2015-16.pdf" target="_blank"> Annual Report for the year, 2015-16</a></li>
								<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/annual-report/ar-2014-15.pdf" target="_blank"> Annual Report for the year, 2014-15</a></li>
								<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/annual-report/ar-2013-14.pdf" target="_blank"> Annual Report for the year, 2013-14</a></li>-->
							</ul>
						</div>
					</div>
				</div>
			</section> 
		</div>
<?php get_template_part('template-investors/investors', 'footerpart'); ?>
<?php get_footer(); ?>
