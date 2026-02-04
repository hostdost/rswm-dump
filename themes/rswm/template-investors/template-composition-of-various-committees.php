<?php 
/* 
 * Template Name: Composition of various Committees
*/ 
get_header();
global $post;
?>
<?php get_template_part('template-investors/investors','toppart'); ?>
	<?php get_template_part('template-investors/investors','menu'); ?>
			<div class="container invester-block">
			<aside class="aside-left-menu">
				<?php $obj = get_queried_object();  ?>
				<ul>
					<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-shareholders/RSWM_ANALYST_Presentation_FY_15_16.pdf" target="_blank"> RSWM - Analyst Presentation 2015-16  </a></li>
					<li><a href="<?php echo get_permalink(1028)?>" target="_blank"> Notice to the Members </a></li>
					<!--li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-shareholders/RSWM-EOGMNotice-2014.pdf" target="_blank"> EOGM Notice to Shareholders </a></li-->
					<li><a href="<?php echo get_permalink(143) ?>" class="<?php echo $obj->ID == 143 ? 'active' : '' ?>" target="_blank"> Shareholders’ Meetings - Voting Pattern Reports </a></li>
					<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-shareholders/Letter_of_Appointment_of_Independent_Director.pdf" target="_blank"> Model Letter of appointment of Independent Directors </a></li>
					<li><a href="<?php echo get_permalink(145) ?>" class="<?php echo $obj->ID == 145 ? 'active' : '' ?>" target="_blank"> Familiarization Programme </a></li>
					<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-shareholders/Code_of_Conduct_for_Regulating_Monitoring_and_Reporting_Trading_by_Insiders_and_for_Fair_Disclosure.pdf" target="_blank"> Code of Conduct for Regulating, Monitoring & Reporting Trading by Insiders and for Fair Disclosure </a></li>
					<li><a href="<?php echo get_template_directory_uri() ?>/template-investors/pdf/investors-composition/RSWM_for_Website.pdf" target="_blank"> AGM - NEWSPAPER NOTICE/ADVERTISEMENT </a></li>
					<li><a href="<?php echo get_permalink(147) ?>" class="<?php echo $obj->ID == 147 ? 'active' : '' ?>" target="_blank"> Composition of various Committees of Board of Directors </a></li>
					<li><a href="<?php echo get_permalink(149) ?>" class="<?php echo $obj->ID == 149 ? 'active' : '' ?>" target="_blank"> Newspaper Notice / Advertisement </a></li>
					<li><a href="<?php echo get_permalink(151) ?>" class="<?php echo $obj->ID == 151 ? 'active' : '' ?>" target="_blank"> Various Policies </a></li>
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
							<h2>Audit Committee</h2>
						</div>
						<style>td {padding:5px;}</style>
						<div class="date-destcription">
							<table border="1">
								<tr>
									<td>Sl. No.</td>
									<td>Name</td>
									<td>Designation</td>
								</tr>
								<tr>
									<td>1</td>
									<td>Dr. Kamal Gupta</td>
									<td>Chairman</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Shri D.N. Davar</td>
									<td>Member</td>
								</tr>
								<tr>
									<td>3</td>
									<td>Shri Amar Nath Choudhary</td>
									<td>Member</td>
								</tr>
							</table>
						</div>
						<div class="date-description">
							<h4 style="margin-top:10px;margin-bottom:5px;">Stakeholder’s Relationship Committee</h4>
							<table border="1">
								<tr>
									<td>Sl. No.</td>
									<td>Name</td>
									<td>Designation</td>
								</tr>
								<tr>
									<td>1</td>
									<td>Dr. Kamal Gupta</td>
									<td>Chairman</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Shri Shekhar Agarwal</td>
									<td>Member</td>
								</tr>
								<tr>
									<td>3</td>
									<td>Shri Arun Churiwal</td>
									<td>Member</td>
								</tr>
								<tr>
									<td>4</td>
									<td>Shri D.N. Davar</td>
									<td>Member</td>
								</tr>
							</table>
						</div>
							<div class="date-description">
							<h4 style="margin-top:10px;margin-bottom:5px;">Nomination and Remuneration Committee</h4>
							<table border="1">
								<tr>
									<td>Sl. No.</td>
									<td>Name</td>
									<td>Designation</td>
								</tr>
								<tr>
									<td>1</td>
									<td>Dr. Kamal Gupta</td>
									<td>Chairman</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Shri D.N. Davar</td>
									<td>Member</td>
								</tr>
								<tr>
									<td>3</td>
									<td>Shri Shekhar Agarwal</td>
									<td>Member</td>
								</tr>
								
							</table>
						</div>
						
						<div class="date-description">
							<h4 style="margin-top:10px;margin-bottom:5px;">Corporate Social Responsibility Committee</h4>
							<table border="1">
								<tr>
									<td>Sl. No.</td>
									<td>Name</td>
									<td>Designation</td>
								</tr>
								<tr>
									<td>1</td>
									<td>Shri Arun Churiwal</td>
									<td>Chairman</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Shri Riju Jhunjhunwala</td>
									<td>Member</td>
								</tr>
								<tr>
									<td>3</td>
									<td>Shri A.N. Choudhary</td>
									<td>Member</td>
								</tr>
								
							</table>
						</div>
					</div>
				</div>
			</section> 
			<aside class="aside-right-details"> </aside>
		</div>
<?php get_template_part('template-investors/investors', 'footerpart'); ?>
<?php get_footer(); ?>

