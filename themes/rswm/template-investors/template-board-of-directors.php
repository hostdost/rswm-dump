<?php 
/* 
 * Template Name: Board of Directors
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
						<!--li><a href="<?php echo get_permalink(155) ?>"> Public Notice</a></li-->
					</ul>
				</div>
			</aside>
			
			<section class="program-description">
				<div class="row">
					<div class="col span_12">
						<div class="program-heading">
							<h2>Familiarzation Programme</h2>
						</div>
						
						<div class="date-description">
							<div class="board_directors_address_layout">
							<p>
								<span><strong>Mr. Lakshmi Niwas Jhunjhunwala - Chairman</strong></span> - Emeritus<br>
								63, Friends Colony (East)<br>
								NEW DELHI – 110 025.
							</p>
							</div>
						</div>
						<div class="date-description">
							<h4>Board of Directors</h4>
							<div class="board_directors_address_layout">
								<p>
									<span><strong>Mr. Ravi Jhunjhunwala</strong></span><br>
									63, Friends Colony (East)<br> 
									NEW DELHI – 110 065
								</p>
							</div>
							<div class="board_directors_address_layout">
								<p>
									<span><strong>Mr. Shekhar Agarwal</strong></span><br>
									7, Sadhna Enclave <br>
									NEW DELHI – 110 017.
								</p>
							</div>
							<div class="board_directors_address_layout">
								<p>
									<span><strong>Mr. Arun Churiwal</strong></span><br>
									4, National Library Avenue <br>
									Alipore, Kolkata - 700027<br>
									WEST BENGAL.
								</p>
							</div>
							<div class="board_directors_address_layout">
								<p>
									<span><strong>Mr. Riju Jhunjhunwala</strong></span> <br>
									63, Friends Colony (East)<br> 
									NEW DELHI – 110 065<br>
								</p>
							</div>
							<!--div class="board_directors_address_layout">
								<p>
									<span><strong>Mr. Prakash Maheshwari</strong></span><br>
									RSWM Limited,<br>
									Kharigram, P.O. Gulabpura<br>
									Distt. Bhilwara<br>
									RAJASTHAN – 311 021<br>

								</p>
							</div-->
							
							<div class="board_directors_address_layout">
								<p>
									<span><strong>Mr. Jagdish Chandra Laddha</strong></span><br>
									37, Kamla Enclave, <br>
									Chittorgarh Road, Bhilwara<br> 
									RAJASTHAN – 311 001<br>
								</p>
							</div>
							<div class="board_directors_address_layout">
								<p>
									<span><strong>Dr. Kamal Gupta</strong></span><br>
									House No.N-23, Sector – XI<br>
									Gautam Budh Nagar<br>
									NOIDA - 201 301 (U. P.)<br>
								</p>
							</div>
							
							
							
							<div class="board_directors_address_layout">
								<p>
									<span><strong>Mr. Amar Nath Choudhary</strong></span><br>
									Tikmany House<br>
									8-C, Alipore Road, 4th Floor,<br>
									KOLKATA – 700 027.
								</p>
							</div>
							
							<div class="board_directors_address_layout">
								<p>
									<span><strong>Mr. P. S. Dasgupta </strong></span><br>
									J-1810, Chittaranjan Park<br>
									NEW DELHI - 110 019<br>
								</p>
							</div>
							<div class="board_directors_address_layout">
								<p>
									<span><strong>Shri Deepak Jain</strong></span> <br>
									Farm No.23, Road No.1,<br> 
									Silver Oak Marg, Ghitorni,<br> 
									NEW DELHI - 110 030<br>
								</p>
							</div>
							<div class="board_directors_address_layout">
								<p>
									<span><strong>Smt. Archana Capoor,</strong></span> <br>
									B-11, 2nd Floor, <br>
									Mayfair Garden <br>
									NEW DELHI - 110 016<br>
								</p>
							</div>
							
							
						</div>
						
					</div>
				</div>
			</section> 
			
			<aside class="aside-right-details"> 
				<div class="date-description">
					<h4>Change in Board of Directors</h4>
					<p>Shri Dharmendar Nath Davar resigned as a Director of the Company w.e.f 24th July, 2019. </p>
					<p>Shri L.N. Jhunjhunwala resigned as a director of the Company w.e.f 21st April, 2014.</p>
					<p>Smt. Geeta Mathur resigned as a Director of the Company w.e.f 9th November, 2017.</p>
					<p>Smt. Archana Capoor appointed as Additional Director w.e.f. 13th February, 2018.</p>
					<p>Shri Prakash Maheshwari ceased from directorship w.e.f. 31st March, 2018.</p>
				</div>
			</aside>
			
		</div>
<?php get_template_part('template-investors/investors', 'footerpart'); ?>


<?php get_footer(); ?>
