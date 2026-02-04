<?php 
/* 
 * Template Name: Financial Performance
 */ 
get_header();
global $post;
?>

<?php get_template_part('template-investors/investors','toppart'); ?>
	<?php get_template_part('template-investors/investors','menu'); ?>
		<div class="container invester-block">
			<aside class="aside-left-menu">
				<?php get_template_part('template-investors/investors', 'leftmenu');  ?>
			</aside>
			<section class="program-description">
				<div class="row">
					<div class="col span_12">
						<div class="date-description">
							<h4>Quarterly Results</h4>
							<ul>
								<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/financial-highlights/RSWM-Financial-Results-31-03-2018.pdf" target="_blank"> Quarter ended 31st March, 2018</a></li>
								<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/financial-highlights/RSWM-Financial-Results-31-12-2017.pdf" target="_blank"> Quarter and nine months ended 31st December, 2017</a></li>
								<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/financial-highlights/RSWM_Financial_Results_30_09_2017.pdf" target="_blank"> Quarter and half year ended 30th September, 2017</a></li>
								<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/financial-highlights/financial_results_june2017.pdf" target="_blank"> Quarter ended 30th June, 2017</a></li>
								<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/financial-highlights/financial_results_march2017.pdf" target="_blank"> Quarter ended 31st March, 2017</a></li>
								<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/financial-highlights/financial_results_20170210213253.pdf" target="_blank"> Quarter ended 31st December, 2016</a></li>
								<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/financial-highlights/financial_results_30_09_2016.pdf" target="_blank"> Quarter ended 30th September, 2016</a></li>
								<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/financial-highlights/qtr30-06-2016.pdf" target="_blank"> Quarter ended 30th June, 2016</a></li>
								<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/financial-highlights/qtr31-03-2016.pdf" target="_blank"> Quarter ended 31st March, 2016</a></li>	
							</ul>
						
                            <div class="archivetext" style="display: none;">
                                <ul>
								<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/financial-highlights/qtr31-12-2015.pdf" target="_blank"> Quarter ended 31st December, 2015</a></li>
								<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/financial-highlights/qtr30-09-2015.pdf" target="_blank"> Quarter ended 30th September, 2015</a></li>
								<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/financial-highlights/qtr30-06-2015.pdf" target="_blank"> Quarter ended 30th June, 2015</a></li>
								<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/financial-highlights/qtr31-03-2015.pdf" target="_blank"> Quarter ended 31st March, 2015</a></li>
                                </ul>
                            </div>
                            <div class="view-archive">
                                <a href="#" class="toggle">Show Archive</a>
                            </div>
						</div>
						<div class="date-description">
							<h4>Quaterly result - News paper</h4>
							<ul>
								<li> Dainik Navjyoti Quarter ended  31st March, 2018
									<a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/inverstors-newspaper/RSWM_March_20x19cm_Dainik-Navjyoti.pdf" target="_blank"> English</a>
									|  
									<a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/inverstors-newspaper/RSWM_March_20x19cm_Dainik-Navjyoti.pdf" target="_blank"> Hindi</a>
									</li>
								<li> Quarter ended  31st March, 2018
									<a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/inverstors-newspaper/RSWM_March_20x19cm_Business-Standard.pdf" target="_blank"> English</a>
									|  
									<a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/inverstors-newspaper/RSWM_March_20x19cm_Business-Standard.pdf" target="_blank"> Hindi</a>
									</li>
								<li> Quarter ended 31st December, 2017
									<a href="<?php echo site_url() ?>/wp-content/uploads/2018/04/quarter-ended-30th-december-2017.pdf" target="_blank"> English</a>
									|
									<a href="<?php echo site_url() ?>/wp-content/uploads/2018/04/quarter-ended-30th-december-2017.pdf" target="_blank"> Hindi</a>
								</li>
								<li> Quarter and Half Year ended 30th September, 2017
									<a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/financial-highlights/RSWM_Newspaper_Results_30-09-2017-BS.pdf" target="_blank"> English</a>
									|
									<a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/financial-highlights/RSWM_Newspaper_Results_30-09-2017-DN.pdf" target="_blank"> Hindi</a>
								</li>
								<li> Quarter ended 30th June, 2017 
									<a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/financial-highlights/RSWM_Newspaper_Result_30-06-2017-BS.pdf" target="_blank"> English</a>
									|
									<a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/financial-highlights/RSWM_Newspaper_Result_30-06-2017-DNY.pdf" target="_blank"> Hindi</a>
								</li>
								<li> Financial Results - Corrigendum
									<a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/financial-highlights/RSWM_Financial_Results_Corrigendum_14-05-2017.pdf" target="_blank"> English</a>
								</li>
								<li> Quarter ended 31st March, 2017
									<a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/financial-highlights/RSWM_News_Paper_Results_31-03-2017_English.pdf" target="_blank"> English</a>
									|
									<a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/financial-highlights/RSWM_News_Paper_Results_31-03-2017_Hindi.pdf" target="_blank"> Hindi</a>
								</li>
								<li> Quarter ended 31st March, 2016
									<a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/financial-highlights/RSWM-NewsPaper-Cutting-12-05-2016-english.pdf" target="_blank"> English</a>
									|
									<a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/financial-highlights/RSWM-NewsPaper-Cutting-12-05-2016-hindi.pdf" target="_blank"> Hindi</a>
								</li>
								<li> Quarter ended 31st December, 2016 
									<a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/financial-highlights/RSWM_Result_Dec_2016_Size_16x16_cm.pdf" target="_blank"> English</a>
									|
									<a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/financial-highlights/RSWM-Newspaper-Results-31-12-2016 -Hindi.pdf" target="_blank"> Hindi</a>
								</li>
								<li> Quarter ended 30th September, 2016
									<a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/financial-highlights/RSWM_Newpaper_Results_30-09-2016-English.pdf" target="_blank"> English</a>
									|
									<a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/financial-highlights/RSWM_News_Paper_Results _0-09-2016-Hindi.pdf" target="_blank"> Hindi</a>
								</li>
								<li> Quarter ended 30th June, 2016
									<a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/financial-highlights/RSWM_Notice_Eng_8x7.pdf" target="_blank"> English</a>
									|
									<a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/financial-highlights/RSWM_Notice_Hindi_8x7.pdf" target="_blank"> Hindi</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</section> 
			
			<aside class="aside-right-details"> 
				<!--div class="program-heading">
					<h2>"Financial Performance</h2>
				</div-->
				<div class="date-description">
					<!--h4>Document</h4>
					<ul>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-relations/RSWM_Corporate_Governance_Report_31-12-2017.pdf" target="_blank"> Compliances Report for the Quarter ended 31st December, 2017</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-relations/Corporate_Governance_Report_30-09-2017.pdf" target="_blank"> Compliances Report for the Quarter ended 30th September, 2017</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-relations/Corporate_Governance_Report_30-09-2017.pdf" target="_blank"> Compliances Report for the Quarter ended 30th June, 2017</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-relations/Corporate_Governance_Report_31-03-2017.pdf" target="_blank"> Compliances Report for the Quarter ended 31st March, 2017</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-relations/Quarterly_Corporate_Governane_Report-31-12-2016.pdf" target="_blank"> Compliances Report for the Quarter ended 31st December, 2016</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-relations/Quarterly_Compliance_Report_30-09-2016.pdf" target="_blank"> Compliances Report for the Quarter ended 30th September, 2016</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-relations/Quarterly-Compliance-Report-30-06-2016.pdf" target="_blank"> Compliances Report for the Quarter ended 30th June, 2016</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-relations/Corporate_Governance_Report_31-03-2016.pdf" target="_blank"> Compliances Report for the Quarter ended 31st March, 2016</a></li>
					</ul-->
                    
                    <div class="archivetext" style="display: none;">
                        <ul>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-relations/Quarterly_Corporate_Governance_31_12_2015.pdf" target="_blank"> Compliances Report for the Quarter ended 31st December, 2015</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-relations/Quarterly_Compliance_Report_30_09_2015.pdf" target="_blank"> Compliances Report for the Quarter ended 30th September, 2015</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-relations/Quarterly_Compliance_Report_30-06-2015.pdf" target="_blank"> Compliances Report for the Quarter ended 30th June, 2015</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-relations/RSWM-CR-on-Corporate-Goverance-31-03-2015.pdf" target="_blank"> Compliances Report for the Quarter ended 31st March, 2015</a></li>						
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-relations/Quarterly-Compliance-Report 31-12-2014.pdf" target="_blank"> Compliances Report for the Quarter ended 31st December, 2014</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-relations/Quarterly-Compliance-Report-30-09-2014.pdf" target="_blank"> Compliances Report for the Quarter ended 30th September, 2014</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-relations/Quarterly_Compliacne_Report_30-06-2014-21.pdf" target="_blank"> Compliances Report for the Quarter ended 30th June, 2014</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-relations/Quarterly-Compliance-Report-31-03-2014.pdf" target="_blank"> Compliances Report for the Quarter ended 31st Mar, 2014</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-relations/Quarterly-Compliance-Report-31-12-2013.pdf" target="_blank"> Compliances Report for the Quarter ended 31st Dec, 2013</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-relations/Quarterly-Compliance-Report-30-09-2013.pdf" target="_blank"> Compliances Report for the Quarter ended 30th Sep, 2013</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-relations/Quarterly_Compliance_Report_30_06_2013.pdf" target="_blank"> Compliances Report for the Quarter ended 30th June, 2013</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-relations/Quarterly_Compliance_Report_31_03_2013_RSWM.pdf" target="_blank"> Compliances Report for the Quarter ended 31st March, 2013</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-relations/Quarterly-Compliance-Report-31-12-2012.pdf" target="_blank"> Compliances Report for the Quarter ended 31st Dec, 2012</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-relations/Compliance-Report-30-09-2012.pdf" target="_blank"> Quaterly Compliances Report for the Quarter ended 30th Sep, 2012</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-relations/Clause-49.pdf" target="_blank"> Quaterly Compliances Report for the Quarter ended 30th June, 2012</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-relations/Compaliance_Report_31.03.2012.pdf" target="_blank"> Quaterly Compliances Report for the Quarter ended 31st March, 2012</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-relations/RSWM-Clause-49.pdf" target="_blank"> Quaterly Compliances Report for the Quarter ended 31st Dec, 2011</a></li>
						<li><a href="javascript:void(0)" target="_blank"> Corporate Governance Report for the year 2010-11</a></li>
						<li><a href="javascript:void(0)" target="_blank"> Quaterly Compliances Report for the Quarter ended 30th September, 2011</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-relations/30th-june-11.pdf" target="_blank"> Quaterly Compliances Report for the Quarter ended 30th June, 2011</a></li>
					</ul>
                    </div>
                    <!--div class="view-archive">
                        <a href="#" class="toggle">Show Archive</a>
                    </div-->
				</div>
			</aside>
		</div>
<?php get_template_part('template-investors/investors', 'footerpart'); ?>
<?php get_footer(); ?>
