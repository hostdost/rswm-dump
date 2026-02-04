<?php /* Template Name: collection Yarns */ ?>
<?php get_header('collection') ?>
<style>
	.hider {
		/* display: none!important; */
	}
</style>
<div class="new-collection">

	<div class="row">
		<div class="col span_12">
			<div class="new-collection-heading">
				<img src="<?php echo get_template_directory_uri() ?>/images/collection/yarn_banner.jpg" />
				<br>
				<h1 class="hider">YARN COLLECTIONS</h1>
			</div>
		</div>
	</div>
	<!-- Flipbook -->
	<!-- <div class="container">
	<iframe allowfullscreen="allowfullscreen" scrolling="no" class="fp-iframe" src="https://heyzine.com/flip-book/a49f00c31c.html" style="border: 1px solid lightgray; width: 100%; height: 498px;"></iframe>
            </div> -->
	<!-- Flipbook -->
	<div class="container">
		<div class="new-collection-para">
			<div class="row">
				<div class="col span_12">
					<p>Sustainable production has been one of the foremost focus of major industries all around the
						world. As the climate evolves, we evolve. Embracing this evolution, our team of textile
						designers, textile engineers, and researchers, came up with stories that symbolise the shift in
						yarn innovation.</p>
					<p> Using fibres like organic cotton, hemp, jute, linen, silk, wool and many others obtained from
						Mother Nature herself, we have devised a new line of products that bask in the glory of being
						fair to the environment. But we didn't want to stop there. </p>
					<p>Capturing the essence of humanity's transition into a sustainable era was of supreme importance
						to us at RSWM. We studied compositions, patterns and colours that carry with them an emotional
						pulse of all that's happening around the world.</p>
				</div>
			</div>
		</div>

		<div class="new-collection-thumb">
			<?php $collection_num = 4;
			if ($collection_num % 2 != 0) { ?>
				<div class="row singlecollection-wrap">
				<?php } else { ?>
					<div class="row">

					<?php } ?>
					<!-- Performance wear -->
					<div class="col-md-6 col-12 span_6">
						<div class="new-collection-thumb-image">
							<a href="<?php echo get_permalink(7656)
										?>" class="<?php echo $obj->ID == 7656 ? 'active' : '' ?>" title="PERFORMANCE WEAR">
								<img
									src="https://assets-rswm.s3.ap-south-1.amazonaws.com/collection/performance-wear-thumbnail.png" />
							</a>
							<h4>
								<a href="<?php echo get_permalink(7656)
											?>" class="<?php echo $obj->ID == 7656 ? 'active' : ''
														?>" title="PERFORMANCE WEAR">PERFORMANCE WEAR</a>
								<!-- <a href="<?php //echo get_permalink(7656) 
												?>" class="<?php //echo $obj->ID == 7656 ? 'active' : '' 
															?>" title="GREIGE YARN">COMING SOON</a> -->
							</h4>
						</div>
					</div>
					<!-- Performance wear -->
					<!-- GREIGE YARN -->
					<div class="col-md-6 col-12 span_6">
						<div class="new-collection-thumb-image">
							<a href="<?php echo get_permalink(7451) ?>"
								class="<?php echo $obj->ID == 7451 ? 'active' : '' ?>" title="GREIGE YARN">
								<img
									src="https://assets-rswm.s3.ap-south-1.amazonaws.com/collection/collection-yarn.jpg" />
							</a>
							<h4>
								<a href="<?php echo get_permalink(7451) ?>"
									class="<?php echo $obj->ID == 7451 ? 'active' : '' ?>" title="GREIGE YARN">GREIGE
									YARN</a>
							</h4>
						</div>
					</div>

					<!-- GREIGE YARN -->
					<!-- Soul -->
					<div class="col-md-6 col-12 span_6">
						<div class="new-collection-thumb-image">
							<a href="<?php echo get_permalink(7293) ?>"
								class="<?php echo $obj->ID == 7293 ? 'active' : '' ?>" title="SOUL AW 25.26">
								<img src="https://rswm.in/wp-content/uploads/2024/07/collection-soul.jpg" />
							</a>
							<h4>
								<a href="<?php echo get_permalink(7293) ?>"
									class="<?php echo $obj->ID == 7293 ? 'active' : '' ?>" title="SOUL AW 25.26">SOUL AW
									25.26</a>
							</h4>
						</div>
					</div>

					<!-- Soul -->
					<!-- The Stones and Sutras -->
					<div class="col-md-6 col-12 span_6">
						<div class="new-collection-thumb-image">
							<a href="<?php echo get_permalink(7131) ?>"
								class="<?php echo $obj->ID == 7131 ? 'active' : '' ?>" title="STONES & SUTRAS">
								<img
									src="https://rswm.in/wp-content/uploads/2024/02/collection-stones-sutras-min.jpg" />
							</a>
							<h4>
								<a href="<?php echo get_permalink(7131) ?>"
									class="<?php echo $obj->ID == 7131 ? 'active' : '' ?>"
									title="STONES & SUTRAS">STONES & SUTRAS </a>
							</h4>
						</div>
					</div>
					<!--/ The The Stones and Sutras  -->
					<!-- The KNitscape -->
					<div class="col-md-6 col-12 span_6 d-none">
						<div class="new-collection-thumb-image">
							<a href="<?php echo get_permalink(7091) ?>"
								class="<?php echo $obj->ID == 7091 ? 'active' : '' ?>" title="KNITSCAPE">
								<img src="https://rswm.in/wp-content/uploads/2024/02/collection-knitscapemin.jpg" />
							</a>
							<h4>
								<a href="<?php echo get_permalink(7091) ?>"
									class="<?php echo $obj->ID == 7091 ? 'active' : '' ?>" title="KNITSCAPE">KNITSCAPE
								</a>
							</h4>
						</div>
					</div>
					<!--/ The KNitscape  -->

					<!-- The Harmonzie -->
					<div class="col-md-6 col-12 span_6">
						<div class="new-collection-thumb-image">
							<a href="<?php echo get_permalink(6641) ?>"
								class="<?php echo $obj->ID == 6641 ? 'active' : '' ?>" title="Autumn Winter 24.25">
								<img src="https://rswm.in/wp-content/uploads/2023/07/collection-harmonize-min.jpg" />
							</a>
							<h4>
								<a href="<?php echo get_permalink(6641) ?>"
									class="<?php echo $obj->ID == 6641 ? 'active' : '' ?>"
									title="AUTUMN WINTER 24.25">Autumn Winter 24.25 </a>
							</h4>
						</div>
					</div>
					<!--/ The Harmonzie  -->

					<!-- The Botanica -->
					<div class="col-md-6 col-12 span_6">
						<div class="new-collection-thumb-image">
							<a href="<?php echo get_permalink(5942) ?>"
								class="<?php echo $obj->ID == 5942 ? 'active' : '' ?>" title="The Summer Canvas">
								<img
									src="https://www.rswm.in/wp-content/uploads/2022/07/collections-botonica-min.png" />
							</a>
							<h4>
								<a href="<?php echo get_permalink(5942) ?>"
									class="<?php echo $obj->ID == 5942 ? 'active' : '' ?>"
									title="AUTUMN WINTER 22.23">Autumn Winter 23.24 </a>
							</h4>
						</div>
					</div>
					<!--/ The Botanica  -->

					<!-- The Wellbeing -->
					<div class="col-md-6 col-12 span_6">
						<div class="new-collection-thumb-image">
							<a href="<?php echo get_permalink(5852) ?>"
								class="<?php echo $obj->ID == 5852 ? 'active' : '' ?>" title="The Summer Canvas">
								<img
									src="<?php echo get_template_directory_uri() ?>/images/wellbeing-collections-2023.png" />
							</a>
							<h4>
								<a href="<?php echo get_permalink(5852) ?>"
									class="<?php echo $obj->ID == 5852 ? 'active' : '' ?>"
									title="AUTUMN WINTER 22.23">SPRING SUMMER 2023 </a>
							</h4>
						</div>
					</div>
					<!--/ The Wellbeing  -->

					<!-- The Shift -->
					<div class="col-md-6 col-12 span_6">
						<div class="new-collection-thumb-image">
							<a href="<?php echo get_permalink(5783) ?>"
								class="<?php echo $obj->ID == 5783 ? 'active' : '' ?>" title="The Summer Canvas">
								<img
									src="<?php echo get_template_directory_uri() ?>/images/shift-collection-22-23.png" />
							</a>
							<h4>
								<a href="<?php echo get_permalink(5783) ?>"
									class="<?php echo $obj->ID == 5783 ? 'active' : '' ?>"
									title="The Summer Canvas">Autumn Winter 22.23 </a>
							</h4>
						</div>
					</div>
					<!--/ The Shift  -->


					<!-- The Summer Canvas -->
					<div class="col-md-6 col-12 span_6">
						<div class="new-collection-thumb-image">
							<a href="<?php echo get_permalink(5456) ?>"
								class="<?php echo $obj->ID == 5456 ? 'active' : '' ?>" title="The Summer Canvas">
								<img src="<?php echo get_template_directory_uri() ?>/images/canvas-collection.jpg" />
							</a>
							<h4>
								<a href="<?php echo get_permalink(5456) ?>"
									class="<?php echo $obj->ID == 5456 ? 'active' : '' ?>" title="The Summer Canvas">The
									Summer Canvas </a>
							</h4>
						</div>
					</div>
					<!--/ The summer canvas  -->


					<!-- autumn winter 21.22 -->
					<div class="col-md-6 col-12 span_6">
						<div class="new-collection-thumb-image">
							<a href="<?php echo get_permalink(4944) ?>"
								class="<?php echo $obj->ID == 4944 ? 'active' : '' ?>" title="Autumn Winter 21.22">
								<img src="<?php echo get_template_directory_uri() ?>/images/autumn-reboot.jpg" />
							</a>

							<h4>
								<a href="<?php echo get_permalink(4944) ?>"
									class="<?php echo $obj->ID == 4944 ? 'active' : '' ?>"
									title="Autumn Winter 21.22">Autumn Winter 21.22 </a>
							</h4>
						</div>

					</div>

					<!--/ autumn winter 21.22  -->
					<div class="col-md-6 col-12 span_6">
						<div class="new-collection-thumb-image">
							<a href="<?php echo get_permalink(2795) ?>"
								class="<?php echo $obj->ID == 2795 ? 'active' : '' ?>" title="Divercity">
								<img src="<?php echo site_url() ?>/wp-content/uploads/2020/02/divercity.jpg" />
							</a>

							<h4>
								<a href="<?php echo get_permalink(2795) ?>"
									class="<?php echo $obj->ID == 2795 ? 'active' : '' ?>" title="Escapism">
									Divercity</a>
							</h4>
						</div>
					</div>
					<!-- -->
					<div class="col-md-6 col-12 span_6">
						<div class="new-collection-thumb-image">
							<a href="<?php echo get_permalink(2732) ?>"
								class="<?php echo $obj->ID == 2732 ? 'active' : '' ?>" title="Escapism">
								<img
									src="<?php echo get_template_directory_uri() ?>/images/escapism_collection_page.jpg" />
							</a>

							<h4>
								<a href="<?php echo get_permalink(2732) ?>"
									class="<?php echo $obj->ID == 2732 ? 'active' : '' ?>" title="Escapism">
									Escapism</a>
							</h4>
						</div>
					</div>
					<!-- -->
					<div class="col-md-6 col-12 span_6">
						<div class="new-collection-thumb-image">
							<a href="<?php echo get_permalink(2272) ?>"
								class="<?php echo $obj->ID == 2272 ? 'active' : '' ?>" title="Reneu">
								<img
									src="<?php echo get_template_directory_uri() ?>/images/RSWM-Reneu-tumbal-6-march.jpg" />
							</a>

							<h4>
								<a href="<?php echo get_permalink(2272) ?>"
									class="<?php echo $obj->ID == 2272 ? 'active' : '' ?>" title="Reneu">Reneu </a>
							</h4>
						</div>

					</div>
					<!-- -->
					<div class="col-md-6 col-12 span_6">
						<div class="new-collection-thumb-image">
							<a href="<?php echo get_permalink(2093) ?>"
								class="<?php echo $obj->ID == 2093 ? 'active' : '' ?>" title="Freequency">
								<img
									src="<?php echo get_template_directory_uri() ?>/images/RSWM-freequency-tumbal-6-march.jpg" />
							</a>

							<h4>
								<a href="<?php echo get_permalink(2093) ?>"
									class="<?php echo $obj->ID == 2093 ? 'active' : '' ?>" title="Freequency">
									FreeQuency</a>
							</h4>
						</div>
					</div>


					</div>

				</div>

		</div>


		<?php get_footer() ?>