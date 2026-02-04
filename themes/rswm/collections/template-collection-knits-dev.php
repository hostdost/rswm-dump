<?php /* Template Name: collection Knits Dev*/ ?>
<?php get_header('collection') ?>

<div class="new-collection">
	
	        <div class="row">
			    <div class="col span_12">
                    <div class="new-collection-heading">
                        <img src="<?php echo get_template_directory_uri() ?>/images//collection/knits_banner.jpg"/>
                        <br>
                        <h1 class="hider">KNITS COLLECTIONS</h1>
                    </div>
			    </div>
	        </div>
            <!-- Flipbook -->
            <div class="container">
            <iframe allowfullscreen="allowfullscreen" scrolling="no" class="fp-iframe" src="https://heyzine.com/flip-book/cb09c309c4.html" style="border: 1px solid lightgray; width: 100%; height: 474px;"></iframe>
            </div>
            <!-- Flipbook -->
	<div class="container">
		<div class="new-collection-para">
			<div class="row">
				<div class="col span_12">
					<p>Sustainable production has been one of the foremost focus of major industries all around the world. As the climate evolves, we evolve. Embracing this evolution, our team of textile designers, textile engineers, and researchers, came up with stories that symbolise the shift in yarn innovation.</p>
					<p> Using fibres like organic cotton, hemp, jute, linen, silk, wool and many others obtained from Mother Nature herself, we have devised a new line of products that bask in the glory of being fair to the environment. But we didn't want to stop there. </p>
					<p>Capturing the essence of humanity's transition into a sustainable era was of supreme importance to us at RSWM. We studied compositions, patterns and colours that carry with them an emotional pulse of all that's happening around the world.</p>
				</div>
			</div>
		</div>
		
		<div class="new-collection-thumb">
			<?php $collection_num=4;
			if($collection_num%2!=0){ ?>
			<div class="row singlecollection-wrap">
				<?php }else{ ?>
					<div class="row">
					
					<?php } ?>	

	<!-- The Stones and Sutras -->
	
   <!--/ The The Stones and Sutras  -->
   <!-- The KNitscape -->
	<div class="col-md-6 col-12 span_6 ">
	  <div class="new-collection-thumb-image">
	<a href="<?php echo get_permalink(7091) ?>" class="<?php echo $obj->ID == 7091 ? 'active' : '' ?>" title="KNITSCAPE">
	<img src="https://rswm.in/wp-content/uploads/2024/02/collection-knitscapemin.jpg"/>
	</a>
	  <h4>
	      <a href="<?php echo get_permalink(7091) ?>" class="<?php echo $obj->ID == 7091 ? 'active' : '' ?>" title="KNITSCAPE">KNITSCAPE </a>
	  </h4>
	</div>
</div>
   <!--/ The KNitscape  -->

				

		    </div>
		
	</div>
	
</div>


<?php get_footer()?>
