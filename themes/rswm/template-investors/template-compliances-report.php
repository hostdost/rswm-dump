<?php 
/* 
 * Template Name: Compliances Report
 */ 
get_header();
	global $post;
?>

<?php get_template_part('template-investors/investors','toppart'); ?>
	<?php get_template_part('template-investors/investors','menu'); ?>
		<div class="container invester-block">
			<?php $obj = get_queried_object();  ?>
			<aside class="aside-left-menu">
				<ul>
					<li><a href="<?php echo get_permalink(1028)?>" target="_blank"> Notice to the Members </a></li>
					<!--li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-relations/RSWM-EOGMNotice-2014.pdf" target="_blank"> EOGM Notice to Share Holder </a></li-->
					<li><a href="javascript:void(0)"> Whistle Blower Policy </a></li>
					<li><a href="<?php echo get_permalink(143) ?>" class="<?php echo $obj->ID == 143 ? 'active' : '' ?>"> Share Holder's Meetings voting Pattern reports </a></li>
					<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-relations/Policy_on_Related_Party_Transaction.pdf" target="_blank"> Related Party Transaction Policy </a></li>
					<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-relations/Letter_of_Appointment_of_Independent_Director.pdf" target="_blank"> Model letter of appointment of Independent directors </a></li>
					<li><a href="<?php echo get_permalink(145) ?>" class="<?php echo $obj->ID == 145 ? 'active' : '' ?>">Familiarization programme </a></li>
					
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
					<h2>Compliances Report</h2>
				</div>
				<div class="date-description">
					<h4>Document</h4>
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
					</div>
				</div>
			</section> 
			<aside class="aside-right-details"> </aside>
		</div>
<?php get_template_part('template-investors/investors', 'footerpart'); ?>
<?php get_footer(); ?>
