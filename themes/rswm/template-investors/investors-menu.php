<div class="row">
	<div class="col span_12">
		<div class="investor-menu">
		<div class="container">
			<?php $pages = page_children(106); //page id of investors ?>
			<?php $obj = get_queried_object();?>
			<ul>
                <li> <a href="<?php echo get_permalink(131) ?>" class="<?php echo $obj->ID == 131 ? 'active' : '' ?>">Annual Reports</a> </li>
				<li> <a href="<?php echo get_permalink(106) ?>" class="<?php echo $obj->ID == 106 ? 'active' : '' ?>">Investors Relations</a> </li>
				<li> <a href="<?php echo get_permalink(129) ?>" class="<?php echo $obj->ID == 129 ? 'active' : '' ?>">Investors Correspondance</a> </li>
				<li> <a href="<?php echo get_permalink(135) ?>" class="<?php echo $obj->ID == 135 ? 'active' : '' ?>">Financial Performance</a> </li>
				<li> <a href="<?php echo get_permalink(137) ?>" class="<?php echo $obj->ID == 137 ? 'active' : '' ?>">Code of Conduct</a> </li>
				<li> <a href="<?php echo get_permalink(133) ?>" class="<?php echo $obj->ID == 133 ? 'active' : '' ?>">Board of Director</a> </li>
				<li> <a href="<?php echo get_permalink(139) ?>" class="<?php echo $obj->ID == 139 ? 'active' : '' ?>">Transfer of shares to IEPF</a> </li>
				<li> <a href="<?php echo get_permalink(1089) ?>" class="<?php echo $obj->ID == 1089 ? 'active' : '' ?>">Intimation to Stock Exchange</a> </li>
			</ul>
		</div>
		</div>
	</div>
</div> 
