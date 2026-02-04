<?php 
/* 
 * Template Name: Shareholders Meetings
*/ 
get_header();
	global $post;
?>
<?php get_template_part('template-investors/investors','toppart'); ?>
	<?php get_template_part('template-investors/investors','menu'); ?>
		
			<div class="container invester-block">
			<aside class="aside-left-menu">
				<ul>
					<?php $obj = get_queried_object();  ?>
					<li><img src="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investor-presentation/invest_txt_rt_img.gif"></li>
					<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-shareholders/RSWM_ANALYST_Presentation_FY_15_16.pdf" target="_blank"> RSWM - Analyst Presentation 2015-16  </a></li>
					<li><a href="<?php echo get_permalink(1028)?>" target="_blank"> Notice to the Members </a></li>
					<!--li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-shareholders/RSWM-EOGMNotice-2014.pdf" target="_blank"> EOGM Notice to Shareholders </a></li-->
					<li><a href="<?php echo get_permalink(143) ?>" class="<?php echo $obj->ID == 143 ? 'active' : '' ?>" target="_blank"> Shareholders’ Meetings - Voting Pattern Reports </a></li>
					<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-shareholders/Letter_of_Appointment_of_Independent_Director.pdf" target="_blank"> Model Letter of appointment of Independent Directors </a></li>
					<li><a href="<?php echo get_permalink(145) ?>" class="<?php echo $obj->ID == 145 ? 'active' : '' ?>" target="_blank"> Familiarization Programme </a></li>
					<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-shareholders/Code_of_Conduct_for_Regulating_Monitoring_and_Reporting_Trading_by_Insiders_and_for_Fair_Disclosure.pdf" target="_blank"> Code of Conduct for Regulating, Monitoring & Reporting Trading by Insiders and for Fair Disclosure </a></li>
					<li><a href="<?php echo get_permalink(147) ?>" class="<?php echo $obj->ID == 147 ? 'active' : '' ?>" target="_blank"> Composition of various Committees of Board of Directors </a></li>
					<li><a href="<?php echo get_permalink(149) ?>" class="<?php echo $obj->ID == 149 ? 'active' : '' ?>" target="_blank"> Newspaper Notice / Advertisement </a></li>
					<li><a href="<?php echo get_permalink(151) ?>" class="<?php echo $obj->ID == 141 ? 'active' : '' ?>" target="_blank"> Various Policies </a></li>
					<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-shareholders/RSWM_AOA.pdf" target="_blank">Articles of Association </a></li>
					<li><a href="<?php echo get_permalink(151) ?>" class="<?php echo $obj->ID == 151 ? 'active' : '' ?>" target="_blank"> Various Policies </a></li>
					<li><a href="<?php echo get_permalink(153) ?>" class="<?php echo $obj->ID == 153 ? 'active' : '' ?>" target="_blank"> Unpaid & Unclaimed Dividend Amount </a></li>
				</ul>
				<div class="date-description">
					<h4>MERGER</h4>
					<ul>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-relations/SCHEMEOFAMALGAMATION.pdf" target="_blank"> Scheme of Amalgamation</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-relations/Modified-Scheme.pdf" target="_blank"> Modified Scheme</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-relations/VALUATION-REPORT.pdf" target="_blank"> Valuation Report</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-relations/FAIRNESS-OPINION.pdf" target="_blank"> Fairness Opinion</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-relations/RSWM-AUDIT-REPORT.pdf" target="_blank"> RSWM - Audit Report</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-relations/CTL-AUDIT-REPORT.pdf" target="_blank"> CTL - Audit Report</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-relations/Auditor-Certificate-24.pdf" target="_blank"> Auditor Certificate</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-relations/RSWM_Observation_Letter_NSE.pdf" target="_blank"> RSWM Observation Letter NSE</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-relations/RSWM_Observation_Letter_BSE.pdf" target="_blank"> RSWM Observation Letter BSE</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-relations/Postal_Ballot_Notice_Explanatory_Statement.pdf" target="_blank"> Notice of Postal Ballat</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-relations/Postal_Ballot_Form.pdf" target="_blank"> Postal Ballat Form</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-relations/Scrutinizer_Report_26_12_2014.pdf" target="_blank"> Scrutinizer Report</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-relations/Clause_35A_26_12_2014.pdf" target="_blank"> Clause 35A</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-relations/CTL-RSWM-AMALGAMATION-COURT-ORDER-CTL.pdf" target="_blank"> Amalgamation Order of High Court at Chennai</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-relations/CTL-RSWM-AMALGAMATION-COURT-ORDER-RSWM.pdf" target="_blank"> Amalgamation Order of High Court at Jodhpur</a></li>
						<li><a href="<?php echo get_permalink(155) ?>" class="<?php echo $obj->ID == 155 ? 'active' : '' ?>"> Public Notice</a></li>
					</ul>
				</div>
			</aside>
			
			<section class="program-description">
				<div class="row">
					<div class="col span_12">
						<div class="program-heading">
							<h2> Shareholders' Mettings - Voting Patterm Reports </h2>
						</div>
						
						<div class="date-description">
							<h4>Annual Gerenal Meeting dated 27th September, 2017</h4>
							<ul>
								<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-shareholders/AGM_Voting_Results_and_Scutinizer_Report-2017.pdf" target="_blank"> AGM Voting Results & Scrutinizer Report 2017</a></li>
								<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-shareholders/AGM_Proceedings-2017.pdf" target="_blank"> AGM Proceedings 2017</a></li>
							</ul>
						</div>
						<div class="date-description">
							<h4>Annual General Meeting dated 27th September, 2016</h4>
							<ul>
								<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-shareholders/agm_vosting2016.pdf" target="_blank"> AGM Voting Results & Scrutinizer Report 2016</a></li>
								<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-shareholders/agm_proceedings_2016.pdf" target="_blank"> AGM Proceedings 2016</a></li>
							</ul>
						</div>
						<div class="date-description">
							<h4>Annual General Meeting dated 25th September, 2015</h4>
							<ul>
								<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-shareholders/Consolidated_Scrutinizer_Report.pdf" target="_blank"> Scrutinizer Report</a></li>
								<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-shareholders/compliance_under_Clause_35A.pdf" target="_blank"> Clause 35A</a></li>
							</ul>
						</div>
						<div class="date-description">
							<h4>Annual General Meeting dated 16-09-2014</h4>
							<ul>
								<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-shareholders/Scrutinizer_Report-E-voting.pdf" target="_blank"> Scrutinizer Report-E-Voting</a></li>
								<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-shareholders/AGM_Voting_Result.pdf" target="_blank"> AGM Voting Result</a></li>
							</ul> 
						</div>
					</div>
				</div>
			</section> 
			
			<aside class="aside-right-details"> 
				
				<div class="date-description">
					
					<ul>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-shareholders/Shareholding_pattern_rswm30-09-2017.pdf" target="_blank"> Shareholding Pattern of the Quarter ended 30th September, 2017</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-shareholders/Corporate_Governance_Report_30-09-2017.pdf" target="_blank"> Compliances Report for the Quarter ended 30th September, 2017</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-shareholders/RSWM_Shar_holding_Pattern_30-06-2017.pdf" target="_blank"> Shareholding Pattern of the Quarter ended 30th June, 2017</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-shareholders/Corporate_Governance_Report_30-06-2017.pdf" target="_blank"> Compliances Report for the Quarter ended 30th June, 2017</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-shareholders/Shareholding_Pattern_31-03-2017.pdf" target="_blank"> Shareholding Pattern of the Quarter ended 31st March, 2017</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-shareholders/Corporate_Governance_Report_31-03-2017.pdf" target="_blank"> Compliances Report for the Quarter ended 31st March, 2017</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-shareholders/Shareholding_Pattern_31-12-2016.pdf" target="_blank"> Shareholding Pattern of the Quarter ended 31st December, 2016</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-shareholders/Quarterly_Corporate_Governane_Report-31-12-2016.pdf" target="_blank"> Compliances Report for the Quarter ended 31st December, 2016</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-shareholders/Shareholding_Pattern_30-09-2016.pdf" target="_blank"> Shareholding Pattern of the Quarter ended 30th September, 2016</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-shareholders/Quarterly_Compliance_Report_30-09-2016.pdf" target="_blank"> Compliances Report for the Quarter ended 30th September, 2016</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-shareholders/Shareholding-Pattern-30-06-2016.pdf" target="_blank"> Shareholding Pattern of the Quarter ended 30th June, 2016</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-shareholders/Quarterly-Compliance-Report-30-06-2016.pdf" target="_blank"> Compliances Report for the Quarter ended 30th June, 2016</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-shareholders/Shareholding_Pattern_31-03-2016.pdf" target="_blank"> Shareholding Pattern of the Quarter ended 31st March, 2016</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-shareholders/Corporate_Governance_Report_31-03-2016.pdf" target="_blank"> Compliances Report for the Quarter ended 31st March, 2016</a></li>
						
					</ul>
                    <div class="archivetext" style="display: none;">
                    <ul>
<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-shareholders/Shareholding_Pattern_31_12_2015.pdf" target="_blank"> Shareholding Pattern of the Quarter ended 31st December, 2015</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-shareholders/Quarterly_Corporate_Governance_31_12_2015.pdf" target="_blank"> Compliances Report for the Quarter ended 31st December, 2015</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-shareholders/Shareholding_Pattern_30_09_2015.pdf" target="_blank"> Shareholding Pattern of the Quarter ended 30th September, 2015</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-shareholders/Quarterly_Compliance_Report_30_09_2015.pdf" target="_blank"> Compliances Report for the Quarter ended 30th September, 2015</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-shareholders/Shareholding_Pattern_30-06-2015.pdf" target="_blank"> Shareholding Pattern of the Quarter ended 30th June, 2015</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-shareholders/Quarterly_Compliance_Report_30-06-2015.pdf" target="_blank"> Compliances Report for the Quarter ended 30th June, 2015</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-shareholders/RSWM-Shareholding-Pattern-31-03-2015.pdf" target="_blank"> Shareholding Pattern of the Quarter ended 31st March, 2015</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-shareholders/RSWM-CR-on-Corporate-Goverance-31-03-2015.pdf" target="_blank"> Compliances Report for the Quarter ended 31st March, 2015</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-shareholders/Shareholding-Pattern-31-12-2014.pdf" target="_blank"> Shareholding Pattern of the Quarter ended 31st December, 2014</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-shareholders/Quarterly-Compliance-Report 31-12-2014.pdf" target="_blank"> Compliances Report for the Quarter ended 31st December, 2014</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-shareholders/Shareholding-Pattern-30-09-2014.pdf" target="_blank"> Shareholding Pattern of the Quarter ended 30th September, 2014</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-shareholders/Quarterly-Compliance-Report-30-09-2014.pdf" target="_blank"> Compliances Report for the Quarter ended 30th September, 2014</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-shareholders/Shareholding_Pattern_30-06-2014.pdf" target="_blank"> Shareholding Pattern of the Quarter ended 30th June, 2014</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-shareholders/Quarterly_Compliacne_Report_30-06-2014.pdf" target="_blank"> Compliances Report for the Quarter ended 30th June, 2014</a></li>   
                    </ul>    
                    
                    </div> 
                    <div class="view-archive">
                        <a href="#" class="toggle">Show Archive</a>
                    </div>
				</div>
			</aside>
			
		</div>
<?php get_template_part('template-investors/investors', 'footerpart'); ?>
<?php get_footer(); ?>
