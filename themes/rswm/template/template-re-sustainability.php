<?php 
	/* Template Name: Sustainability Test */ 
	get_header();
	global $post;
?>


<div class="Sustainabilitypage">
<section class="homeSliderBlock sustainabilityBanner">
    <a class="scroll-down-arrow" href="javascript:void(0);"> <i class="icon-arrow-down">&nbsp;</i></a>
    <div class="stories-video01">
        <iframe id="stories-video01" width="100%" height="100%" src="https://www.youtube.com/embed/v5btB5TU6Lc?autoplay=0&amp;controls=0&amp;showinfo=0&amp;rel=0&amp;mute=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        <div class="stories-video-close01">
            <i class="fa fa-close"></i>
        </div>
    </div>
    <div class="sliderContent">
        <div class="captionSlider">
            <div class="item">
                <div class="sustainabeContent">
                    <h2>Sustainability</h2>
                    <img src="<?php echo get_template_directory_uri()?>/images/pause-suvideo.svg" class="sustainability" alt="" style="width: 26px; height: 26px;" />
                    <p>PLAY VIDEO</p>
                </div>
            </div>
        </div>
    </div>
    <div class="homeSlider">
        <div class="item" style="background:url(<?php echo get_template_directory_uri()?>/images/susvideobanner.jpg) no-repeat top center / cover">
            <!--iframe width="100%" height="100%" src="https://www.youtube.com/embed/v5btB5TU6Lc?autoplay=1&amp;controls=0&amp;showinfo=0&amp;rel=0&amp;mute=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe-->
        </div>
    </div>
</section>

<div class="rswmCares">
    <div class="container">
        <h2><span>RSWM Cares</span></h2>
        <div class="col span_4">
            <img class="zoomIn" src="<?php echo get_template_directory_uri()?>/images/rswmCares1.png" alt=""/>
            <h3>Water Management</h3>
            <p>
            We offer fabrics dyed with advanced techniques that use less water and chemicals. To round out our efforts, we treat all our post-process water in our own effluent treatment plant and further purify it via reverse osmosis before returning it to the environment cleaner than before.
            </p>
           
            <h4><span class="count">1350</span> kilolitres</h4>
            <h5>Water saved everyday</h5>
        </div>
        <div class="col span_4">
            <img class="translateY" src="<?php echo get_template_directory_uri()?>/images/rswmCares2.png" alt=""/>
            <h3>Energy Conservation</h3>
            <p>
            LNJ Bhilwara Group continues to invest in renewable energy sources, and have successfully commissioning two hydro- and wind- power projects along with a roof top solar power plant, aggregating a total of more than 300 MWs.
            </p>
			
            <h4><span class="count" id="tonnes">800000</span> tonnes</h4>
            <h5>of C02 emissions reduced annually</h5>
        </div>
        <div class="col span_4">
            <img class="rotate" src="<?php echo get_template_directory_uri()?>/images/rswmCares3.png" alt=""/>
            <h3>Recycle & Waste Management</h3>
            <p>
            We proudly offer recycled yarns in our fabrics. Our state-of-the-art Garnett machine efficiently breaks down post-consumer waste fabrics and converts them into new usable fibres, we’re weaving new fabric while eliminating excess waste from landfills.
            </p>
           
            <h4><span class="count">30</span> tonnes</h4>
            <h5>of fabric recycled per month</h5>
        
        </div>
    </div> 
</div>

<div class="largestMenufecture slider">
	<div class="item" style="background:url(<?php echo get_template_directory_uri()?>/images/sustainable.jpg) no-repeat top center / cover;">
		<img src="<?php echo get_template_directory_uri()?>/images/sustainable.jpg" alt="Sustainability"/>
		
	</div>
	<div class="item" style="background:url(<?php echo get_template_directory_uri()?>/images/waste_water.jpg) no-repeat top center / cover;">
		<img src="<?php echo get_template_directory_uri()?>/images/waste_water.jpg" alt="Waste water management"/>
		
	</div>
	
	<div class="item" style="background:url(<?php echo get_template_directory_uri()?>/images/fibre-green.jpg) no-repeat top center / cover;">
		<img src="<?php echo get_template_directory_uri()?>/images/fibre-green.jpg" alt="fibre-green"/>
		
	</div>
	<div class="item" style="background:url(<?php echo get_template_directory_uri()?>/images/garnett-machine.jpg) no-repeat top center / cover;">
		<img src="<?php echo get_template_directory_uri()?>/images/garnett-machine.jpg" alt="garnett-machine"/>
		
	</div>
	<div class="item" style="background:url(<?php echo get_template_directory_uri()?>/images/hydro-power.jpg) no-repeat top center / cover;">
		<img src="<?php echo get_template_directory_uri()?>/images/hydro-power.jpg" alt="hydro-power"/>
		
	</div>
	
</div>

<div class="menufacturersFactory">
    <div class="container">
    <ul>
        
        <li>
			<div class="contain_overflow">
				<img src="<?php echo get_template_directory_uri()?>/images/menufacturerFactory1.jpg" alt=""/>
				<span class="border_inset"></span>
			</div>	
            <h2>Recycling 30 tonnes</h2>
            <p>
            of used
                fabric every month
            </p>
        </li>
        <li>
			<div class="contain_overflow">
				<img src="<?php echo get_template_directory_uri()?>/images/menufacturerFactory2.jpg" alt=""/>
				<span class="border_inset"></span>
			</div>
            <h2>Hydro Power</h2>
            <p>
            India’s first merchant hydro
                power plant
            </p>
        </li>
        <li>
			<div class="contain_overflow">
				<img src="<?php echo get_template_directory_uri()?>/images/solar_cell.png" alt=""/>
				<span class="border_inset"></span>
			</div>	
            <h2>Solar Power</h2>
            <p>
            Generating renewable energy
            </p>
        </li>
        
    </ul>
    </div>
</div>

<div class="fibreGroon">
    <div class="container">
        <div class="row">
            <div class="col span_7">
                <img src="<?php echo get_template_directory_uri()?>/images/febreGroon.png" alt=""/>
            </div>
            <div class="col span_5">
                <p>
                Fibre Green is made by processing waste material into fibre. In this process, the loss of useful resources is minimised. Disposed PET bottles are converted into flakes which are finally turned into fibre in different denier and cut for spinning into yarn. By using waste PET bottles which would otherwise have been incinerated or dumped into landfills or oceans. In terms of performance, these recycled 100% polyester fibres are just like virgin polyester fibres.
                </p>
            </div>
        </div>
    </div>
</div>
<!--<div class="recyeclingArea">
    <div class="row table-row">
        <div class="col span_6 tablecell-col">
            <div class="recyeclingLeft">
                <h2>Sustainable Water Managment</h2> 
                <p>We offer fabrics dyed with advanced techniques that use less water and chemicals. To round out our efforts, we treat all our post-process water in our own effluent treatment plant and further purify it via reverse osmosis before returning it to the environment cleaner than before.</p>
            </div>
        </div>
        <div class="col span_6 tablecell-col">
            <div class="recyeclingRight">
                <img src="<?php echo get_template_directory_uri()?>/images/water-save.jpg" alt=""/>
                <div class="recycle-overlay">
                    <div class="overlay-table">
                        <div class="overlay-tablecell">
                            <h3>1350 Kilo Litres</h3>
                            <h4>water saved per day</h4>
                        </div>
                    </div>
                </div>
            </div>    
        </div>  
    </div> 
    <div class="row table-row">
        <div class="col span_6 tablecell-col">
           <div class="recyeclingRight">
                <img src="<?php echo get_template_directory_uri()?>/images/fibregreen.jpg" alt=""/>
                <div class="recycle-overlay">
                    <div class="overlay-table">
                        <div class="overlay-tablecell">
                            <h3>Producing 50 Tonnes</h3>
                            <h4>of recycled polyester fibre each day</h4>
                        </div>
                    </div>
                </div>
            </div>    
        </div>  
        <div class="col span_6 tablecell-col">
            <div class="recyeclingLeft">
                <h2>Recycling for the planet</h2> 
                <p>Fibre Green is made by processing waste material into fibre. In this process, the loss of useful resources is minimised. Disposed PET bottles are converted into flakes which are finally turned into fibre in different denier and cut for spinning into yarn</p>
                <p>These fibres help in reducing dependence on fossil fuels and natural resources by using waste PET bottles which would otherwise have been incinerated or dumped into landfills or oceans. In terms of performance, these recycled 100% polyester fibres are just like virgin polyester fibres.</p>
            </div>
        </div>
    </div> 
    <div class="row table-row">
        <div class="col span_6 tablecell-col">
            <div class="recyeclingLeft">
                <h2>Responsible Production by Recycling</h2> 
                <p>We proudly offer recycled yarns in our fabrics. Our state-of-the-art Garnett machine efficiently breaks down post-consumer waste fabrics and converts them into new usable fibres—we’re weaving new fabric while eliminating excess waste from landfills.</p>
            </div>
        </div>
        <div class="col span_6 tablecell-col">
           <div class="recyeclingRight">
                <img src="<?php echo get_template_directory_uri()?>/images/recycle.jpg" alt=""/>
                <div class="recycle-overlay">
                    <div class="overlay-table">
                        <div class="overlay-tablecell">
                            <h3>30 tonnes of fabric</h3>
                            <h4>recycled per month</h4>
                        </div>
                    </div>
                </div>
            </div>    
        </div>  
    </div> 
    <div class="row table-row">
        <div class="col span_6 tablecell-col">
           <div class="recyeclingRight">
                <img src="<?php echo get_template_directory_uri()?>/images/clean-enery.jpg" alt=""/>
                <div class="recycle-overlay">
                    <div class="overlay-table">
                        <div class="overlay-tablecell">
                            <h3>Reducing 1,30,000 tonnes of CO2</h3>
                            <h4>emissions annually</h4>
                        </div>
                    </div>
                </div>
            </div>    
        </div>  
        <div class="col span_6 tablecell-col">
            <div class="recyeclingLeft">
                <h2>Clean Energy</h2> 
                <p>We continue to invest in renewable energy sources, sucessfully commissioning two solar and one wind power plant in various parts of Rajasthan.</p>
            </div>
        </div>
    </div> 
</div>-->


<div class="sustainableSrviceImg">
    <div class="container">
       <ul>
           <li class="item">
               <a href="#"><img src="<?php echo get_template_directory_uri()?>/images/sustainablelogo.png" alt=""/></a>
           </li>
           <li class="item">
               <a href="#"><img src="<?php echo get_template_directory_uri()?>/images/sustainablelogo2.png" alt=""/></a>
           </li>
           <li class="item">
               <a href="#"><img src="<?php echo get_template_directory_uri()?>/images/sustainablelogo3.png" alt=""/></a>
           </li>
           <li class="item">
               <a href="#"><img src="<?php echo get_template_directory_uri()?>/images/sustainablelogo5.png" alt=""/></a>
           </li>
        </ul>
    </div>
</div>


<div class="testimonials-block" id="jamp">
    <div class="container">
        <div class="lnjBhilwaraContent">
            <h2>OUR BUSINESS UNITS</h2>
        </div>
         <?php get_header('ourbusiness'); ?>
     
        
    </div>
</div>
</div>


<section class="aboutContact_form top30pxMargin">
<?php get_template_part('contact-form') ?>
</section>


<style>
    .Sustainabilitypage .rswmCares h2 {
    color: #000;
    font-size: 25px;
    font-family: 'Bodoni Std Book';
    text-transform: uppercase;
    text-align: center;
    border-bottom: 1px solid #ccc;
    position: relative;
    margin-bottom: 70px;
}

 .Sustainabilitypage .rswmCares h2 span {
    position: relative;
    top: 13px;
    background: #fff;
    padding: 0px 15px;
}

 .Sustainabilitypage .rswmCares {
    overflow: hidden;
    margin-top: 40px;
}
 .Sustainabilitypage .rswmCares img {
    max-width: 120px;
    width: 100%;
    margin: 0 auto;
    display: block;
}

 .Sustainabilitypage .rswmCares h3 {
    font-family: 'gotham_htfbook';
    font-weight: normal;
    font-size: 15px;
    text-align: center;
    color: #000;
    margin-top: 20px;
}

 .Sustainabilitypage .rswmCares p {
    font-family: 'gotham_htfbook';
    font-weight: normal;
    font-size: 12px;
    text-align: center;
    color: #000;
    line-height: 19px;
    margin-top: 20px;
	min-height: 140px;
}

.largestMenufecture.slider .item img {
	width:100%;
}
 
 .Sustainabilitypage .rswmCares h4 {
    font-size: 37px;
    font-family: 'gotham_htfmedium';
    color: #000;
    text-align: center;
    font-weight: 500;
    margin-bottom: 5px;
    text-transform: uppercase;
}
 .Sustainabilitypage .rswmCares h5,  .Sustainabilitypage .rswmCares h6 {
    font-family: 'gotham_htfmedium';
    color: #525456;
    text-align: center;
    font-weight: 500;
    font-size: 18px;
    text-transform: uppercase;
    line-height: 26px;
}   
 .Sustainabilitypage .rswmCares h6 {
    margin-top: 30px;
    margin-bottom: 8px;
} 
 .Sustainabilitypage .largestMenufecture h2 {
    font-family: 'gotham_htfbook';
    text-align: center;
    color: #fff;
    font-weight: normal;
    text-transform: uppercase;
    font-size: 25px;
	z-index:4;
	position:relative;
}
   
 .Sustainabilitypage .largestMenufecture {
    padding: 150px 0px;
    margin-top: 70px;
}   

.largestMenufecture .item {
	padding:0 !important;
}

 .Sustainabilitypage .menufacturersFactory ul li {
    display: inline-block;
    width: calc(33.33% - 4px);
    padding: 0px 9px;
    margin-bottom: 55px;
    vertical-align: top;
}

 .Sustainabilitypage .menufacturersFactory ul {
    text-align: center;
    margin: 0px -11px;
}

 .Sustainabilitypage .menufacturersFactory ul li img {
    display: block;
    width: 100%;
    outline: 8px solid rgba(255, 255, 255, 0.58);
    outline-offset: -8px;
	transition: all 0.3s ease-in-out;
}

 .Sustainabilitypage .menufacturersFactory h2 {
    font-family: 'gotham_htfmedium';
    color: #000;
    text-align: center;
    font-weight: 500;
    font-size: 18px;
    text-transform: uppercase; 
    margin-top: 22px;
}

 .Sustainabilitypage .menufacturersFactory ul li p {
    font-family: 'gotham_htfbook';
    font-weight: normal;
    font-size: 18px;
    text-align: center;
    color: #000;
    margin-top: 6px;
    line-height: 23px;
}

 .Sustainabilitypage .menufacturersFactory {
    margin-top: 65px;
}
 .Sustainabilitypage .fibreGroon img {
    width: auto;
    display: block;
}
 .Sustainabilitypage .fibreGroon p {
    font-family: 'gotham_htfbook';
    font-weight: normal;
    text-align: justify;
	font-size: 13px;
    color: #000;
    line-height: 19px;
}
 .Sustainabilitypage .fibreGroon .row {
    display: table;
    width: 100%;
}

 .Sustainabilitypage .fibreGroon .col {
    display: table-cell;
    float: inherit;
    vertical-align: middle;
}  
	
	.zoomIn, .translateY {
		transition: all .6s ease-in-out;	
	}

	.rotate {
		transition: all 1s ease-in-out;	
	}
	
	.zoomIn:hover {
		transform: scale(1.1);
	}
	
	.translateY:hover {
		transform: translateY(-10%);
	}
	
	.rotate:hover {
		transform: rotate(-180deg);
	}

@media only screen and (max-width:768px) { 
 .Sustainabilitypage .fibreGroon img {
    width: 100%;
}
 .Sustainabilitypage .rswmCares h2 span {
    top: 12px;
}   
 .Sustainabilitypage .rswmCares h2 {
    font-size: 20px;
    margin-bottom: 50px;
}   
 .Sustainabilitypage .rswmCares h5, .rswmCares h6 { 
    font-size: 14px;
    line-height: 23px;
}  
 .Sustainabilitypage .rswmCares p {
    font-size: 11px;
}  
 .Sustainabilitypage .rswmCares h4 {
    font-size: 25px;
}   
 .Sustainabilitypage .largestMenufecture h2 {
    font-size: 20px;
}   
 .Sustainabilitypage .menufacturersFactory h2 {
    font-size: 15px;
}   
 .Sustainabilitypage .menufacturersFactory ul li p {
    font-size: 14px;
    line-height: 20px;
}   
   
      
}  
    
@media only screen and (max-width:600px) {
 .Sustainabilitypage .rswmCares h2 {
    font-size: 18px;
}
 .Sustainabilitypage .rswmCares h2 span {
    top: 12px;
} 
 .Sustainabilitypage .menufacturersFactory ul li {
    width: calc(50% - 4px);
}   
 .Sustainabilitypage .fibreGroon .col {
    display: block;
}
 .Sustainabilitypage .largestMenufecture h2 {
    font-size: 13px;
    line-height: 22px;
    padding: 0px 15px;
}
 .Sustainabilitypage .largestMenufecture img {
    max-width: 110px;
    margin: 0 auto 18px;
	position:relative;
	z-index: 4;
} 
 .Sustainabilitypage .largestMenufecture {
    padding: 93px 0px;
    margin-top: 30px;
}
 .Sustainabilitypage .menufacturersFactory h2 {
    font-size: 13px;
    line-height: 18px;
}
 .Sustainabilitypage .menufacturersFactory ul li p {
    font-size: 13px;
    line-height: 19px;
}
 .Sustainabilitypage .rswmCares h4 {
    font-size: 20px;
} 
    
    
} 

</style>

<?php get_footer(); ?>
