<?php
/* Template Name: Sustainability */
get_header('hd');
global $post;
?>


<div class="Sustainabilitypage">
    <section class="homeSliderBlock sustainabilityBanner">
        <a class="scroll-down-arrow" href="javascript:void(0);"> <i class="icon-arrow-down">&nbsp;</i></a>
        <div class="stories-video01">
            <!-- <iframe id="stories-video01" width="100%" height="100%" src="https://www.youtube.com/embed/qMz9-z7iaEk?autoplay=0&amp;controls=0&amp;showinfo=0&amp;rel=0&amp;mute=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> -->
            <iframe id="stories-video01" width="100%" height="100%"
                src="https://www.youtube.com/embed/HGjgj5J-z44?autoplay=0&amp;controls=0&amp;showinfo=0&amp;rel=0&amp;mute=0"
                frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

            <div class="stories-video-close01">
                <i class="fa fa-close"></i>
            </div>
        </div>
        <div class="sliderContent">
            <div class="captionSlider">
                <div class="item">
                    <div class="sustainabeContent">
                        <h2>Sustainability</h2>
                        <img src="<?php echo get_template_directory_uri() ?>/images/pause-suvideo.svg"
                            class="sustainability" alt="" style="width: 26px; height: 26px;" />
                        <p>PLAY VIDEO</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="homeSlider">
            <div class="item"
                style="background:url(<?php echo get_template_directory_uri() ?>/images/susvideobanner.jpg) no-repeat top center / cover">
                <!--iframe width="100%" height="100%" src="https://www.youtube.com/embed/v5btB5TU6Lc?autoplay=1&amp;controls=0&amp;showinfo=0&amp;rel=0&amp;mute=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe-->
            </div>
        </div>
    </section>

    <div class="rswmCares">
        <style>
            .sustainability-img {
                max-width: 220px !important;
                width: 100%;
            }

            .sustainability-box {
                /* border:1px solid #ccc;
            box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important; */
                padding: 20px 5px;
                border-radius: 20px;
                /* margin: 8px; */

            }

            .sustainability-box p {
                font-size: 13px !important;
                padding: 10px;
            }

            .sustainability-box h3 {
                font-weight: bold !important;
            }

            .sustainability-box h4 {
                font-size: 30px !important;

            }

            .sustainability-box b {
                text-align: center !important;
                display: block;
            }

            .clogo {
                width: 120px !important;
                margin: auto auto;
            }

            h1 {
                font-size: 1.5rem;
            }
        </style>
        <div class="container">
            <h1 style="margin-bottom: 30px;"><span>we only take what we can give</span></h1>
            <p>For over 60 years, RSWM Limited has been at the forefront
                of sustainable practices, driven not by mandates but by a
                deep passion to give back to nature what we take from it.
                <br>
                We maintain a reciprocal relationship with
                nature, taking only what we can give back.
                <br>
                In the 21st century, our sustainability efforts have evolved.
                From harnessing renewable energy and recycling crores of
                PET bottles annually to reducing CO2 emissions and
                conserving water, our initiatives reflect our unwavering
                commitment to the environment.

            </p>
            <?php //if($_GET['mode']=='debug'):
            ?>
            <!-- grid start -->
            <div class="row">
                <div class="col-12">
                    <div class="lnjBhilwaraContent text-center" style="margin-top: 20px;">


                        <iframe allowfullscreen="" allow="clipboard-write" scrolling="no" class="fp-iframe"
                            style="border: 1px solid lightgray; width: 100%; height: 500px;"
                            src="https://heyzine.com/flip-book/31b7951764.html"></iframe>


                    </div>
                </div>
            </div>
            <!-- grid start -->
            <div class="row">
                <div class="col-12">
                    <div class="lnjBhilwaraContent text-center">
                        <h3><a href="https://rswm.in/assets/pdf/RSWM Sustainability Report LR_2.pdf"
                                target="_blank">Sustainability Report</a></h3>
                    </div>
                </div>
            </div>
            <h2><span>Our Green Initiatives</span></h2>
            <div class="row" style="display: flex; margin-bottom:20px;">

                <div class="col-md-4 col-12 span_4 sustainability-box">
                    <img class="zoomIn sustainability-img" src="https://rswm.in/sustainability-icons/green-energy.png"
                        alt="" />
                    <h3>GREEN ENERGY</h3>
                    <p>
                        At RSWM, our efforts to reduce reliance on traditional
                        modes of energy have led us to adopt renewable sources
                        like solar and wind for our power needs.
                    </p>

                    <h4><span class="count">102</span> MN KW</h4>
                    <b>Solar + Wind
                        Power Used Annually</b>
                </div>
                <div class="col-md-4 col-12 span_4 sustainability-box  border-right border-left">
                    <img class="zoomIn sustainability-img" src="https://rswm.in/sustainability-icons/bio-fuel.png"
                        alt="" />
                    <h3>BIO FUEL</h3>
                    <p>
                        In order to replace fossil fuel consumption and reduce
                        dependencies on harmful substances, we use dry husks to
                        create biofuel to aid in our manufacturing processes.

                    </p>

                    <h4><span class="count">14713.80</span> MT </h4>
                    <b>Bio Fuel Used Annually</b>
                </div>
                <div class="col-md-4 col-12 span_4 sustainability-box">
                    <img class="zoomIn sustainability-img" src="https://rswm.in/sustainability-icons/water-care.png"
                        alt="" />
                    <h3>WATER CARE</h3>
                    <p>
                        Our facilities combat water consumption concerns in the
                        textile industry by using advanced multi-stage treatment
                        plants to recycle water.

                    </p>

                    <h4><span class="count">2230734</span> KL</h4>
                    <b>Recycled Water Used Annually
                    </b>
                </div>

            </div>
            <div class="row" style="display: flex;">
                <div class="col-md-4 col-12 span_4 sustainability-box">
                    <img class="zoomIn sustainability-img"
                        src="https://rswm.in/sustainability-icons/recycled-polyester.png" alt="" />
                    <h3>Recycled Polyester</h3>
                    <p>
                        Plastic waste has engulfed the world in landfills and
                        garbage patches on our oceans. To reverse this ecological
                        crisis, we find ways to upcycle polyester in our products.
                    </p>

                    <h4><span class="count">38270</span> MT</h4>
                    <b>Recycled
                        Polyester Used Annually</b>
                </div>
                <div class="col-md-4 col-12 span_4 sustainability-box border-left border-right">
                    <img class="zoomIn sustainability-img" src="https://rswm.in/sustainability-icons/organic-cotton.jpg"
                        alt="" />
                    <h3>Organic Cotton</h3>
                    <p>
                        Integrating organic cotton into our product offerings, we actively support the growing demand
                        for eco-conscious materials and contribute to a more resilient, sustainable future.

                    </p>

                    <h4><span class="count">11674</span> MT</h4>
                    <b>Organic Cotton
                        Used Annually</b>
                </div>
                <div class="col-md-4 col-12 span_4 sustainability-box">
                    <img class="zoomIn sustainability-img" src="https://rswm.in/sustainability-icons/organic-manure.png"
                        alt="" />
                    <h3>Organic Manure
                    </h3>
                    <p>
                        For ages, manure has been a vital resource that aids in
                        all kinds of manufacturing and production processes.
                        When used well, it provides optimum benefits.

                    </p>

                    <h4><span class="count">91611</span> KG</h4>
                    <b>Organic Manure Used Annually

                    </b>
                </div>
            </div>
            <!-- grid start -->
            <?php //endif; 
            ?>
            <div class="col span_4" style="display: none;">
                <!-- <img class="zoomIn" src="<?php //echo get_template_directory_uri()
                                                ?>/images/rswmCares1.png" alt=""/> -->
                <img class="zoomIn" src="https://rswm.in/icons/Water_Conservation.png" alt="" />
                <h3>Water Management</h3>
                <p>
                    We offer fabrics dyed with advanced techniques that use less water and chemicals. To round out our
                    efforts, we treat all our post-process water in our own effluent treatment plant and further purify
                    it via reverse osmosis before returning it to the environment cleaner than before.
                </p>

                <h4><span class="count">400592</span> kilolitres</h4>
                <h5>Water saved annually</h5>
            </div>
            <div class="col span_4" style="display: none;">
                <!-- <img class="translateY" src="<?php //echo get_template_directory_uri()
                                                    ?>/images/rswmCares2.png" alt=""/> -->
                <img class="zoomIn" src="https://rswm.in/icons/CO2_Emissions.png" alt="" />
                <h3>Energy Conservation</h3>
                <p>
                    LNJ Bhilwara Group continues to invest in renewable energy sources, and have successfully
                    commissioning two hydro- and wind- power projects along with a roof top solar power plant,
                    aggregating a total of more than 300 MWs.
                </p>

                <h4><span class="count" id="tonnes">800000</span> tonnes</h4>
                <h5>of C02 emissions reduced annually</h5>
            </div>
            <div class="col span_4" style="display: none;">
                <!-- <img class="rotate" src="<?php //echo get_template_directory_uri()
                                                ?>/images/rswmCares3.png" alt=""/> -->
                <img class="zoomIn" src="https://rswm.in/icons/Fabric_Recycling.png" alt="" />
                <h3>Recycle & Waste Management</h3>
                <p>
                    We proudly offer recycled yarns in our fabrics. Our state-of-the-art Garnett machine efficiently
                    breaks down post-consumer waste fabrics and converts them into new usable fibres, we’re weaving new
                    fabric while eliminating excess waste from landfills.
                </p>

                <h4><span class="count">1866</span> MT tonnes</h4>
                <h5>of fabric recycled Annually</h5>

            </div>
        </div>
    </div>

    <div class="largestMenufecture slider">
        <div class="item"
            style="background:url(<?php echo get_template_directory_uri() ?>/images/sustainable.jpg) no-repeat top center / cover;">
            <img src="<?php echo get_template_directory_uri() ?>/images/sustainable.jpg" alt="Sustainability" />

        </div>
        <div class="item"
            style="background:url(<?php echo get_template_directory_uri() ?>/images/waste_water.jpg) no-repeat top center / cover;">
            <img src="<?php echo get_template_directory_uri() ?>/images/waste_water.jpg" alt="Waste water management" />

        </div>

        <div class="item"
            style="background:url(<?php echo get_template_directory_uri() ?>/images/fibre-green.jpg) no-repeat top center / cover;">
            <img src="<?php echo get_template_directory_uri() ?>/images/fibre-green.jpg" alt="fibre-green" />

        </div>
        <div class="item"
            style="background:url(<?php echo get_template_directory_uri() ?>/images/garnett-machine.jpg) no-repeat top center / cover;">
            <img src="<?php echo get_template_directory_uri() ?>/images/garnett-machine.jpg" alt="garnett-machine" />

        </div>
        <!-- <div class="item" style="background:url(<?php //echo get_template_directory_uri()
                                                        ?>/images/hydro-power.jpg) no-repeat top center / cover;">
		<img src="<?php //echo get_template_directory_uri()
                    ?>/images/hydro-power.jpg" alt="hydro-power"/>
		
	</div> -->

    </div>

    <div class="menufacturersFactory d-none">
        <div class="container">
            <ul>

                <li>
                    <div class="contain_overflow">
                        <img src="<?php echo get_template_directory_uri() ?>/images/menufacturerFactory1.jpg" alt="" />
                        <span class="border_inset"></span>
                    </div>
                    <h2>Recycling 30 tonnes</h2>
                    <p>
                        of used
                        fabric every month
                    </p>
                </li>
                <!-- <li>
			<div class="contain_overflow">
				<img src="<?php //echo get_template_directory_uri()
                            ?>/images/menufacturerFactory2.jpg" alt=""/>
				<span class="border_inset"></span>
			</div>
            <h2>Hydro Power</h2>
            <p>
            India’s first merchant hydro
                power plant
            </p>
        </li> -->
                <li>
                    <div class="contain_overflow">
                        <img src="<?php echo get_template_directory_uri() ?>/images/solar_cell.jpg" alt="" />
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
        <div class="container mt-3">
            <!-- <h2 class="text-center mb-3"><span>6.5 MN PET Bottles Consumed Daily</span></h2> -->
            <div class="row">
                <div class="col span_7">
                    <img src="<?php echo get_template_directory_uri() ?>/images/febreGroon.png" alt="" />
                </div>
                <div class="col span_5">
                    <h2 class="text-left mb-3"><span>6.5 MN PET Bottles Consumed Daily</span></h2>
                    <p>
                        Fibre Green is made by processing waste material into fibre. In this process, the loss of useful
                        resources is minimised. Disposed PET bottles are converted into flakes which are finally turned
                        into fibre in different denier and cut for spinning into yarn. By using waste PET bottles which
                        would otherwise have been incinerated or dumped into landfills or oceans. In terms of
                        performance, these recycled 100% polyester fibres are just like virgin polyester fibre having a
                        production capacity of 6.5 MN PET Bottles Consumed Daily.

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
                <img src="<?php //echo get_template_directory_uri()
                            ?>/images/water-save.jpg" alt=""/>
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
                <img src="<?php //echo get_template_directory_uri()
                            ?>/images/fibregreen.jpg" alt=""/>
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
                <img src="<?php //echo get_template_directory_uri()
                            ?>/images/recycle.jpg" alt=""/>
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
                <img src="<?php //echo get_template_directory_uri()
                            ?>/images/clean-enery.jpg" alt=""/>
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

            <!-- -->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <!-- <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol> -->
                <div class="clientsSlider">
                    <div class="item active">
                        <img src="<?php echo site_url(); ?>/assets/img/certificates/1.png" alt=""
                            class="d-block w-100 clogo" />
                    </div>
                    <div class="item">
                        <img src="<?php echo site_url(); ?>/assets/img/certificates/2.png" alt=""
                            class="d-block w-100 clogo" />
                    </div>
                    <div class="item">
                        <img src="<?php echo site_url(); ?>/assets/img/certificates/3.png" alt=""
                            class="d-block w-100 clogo" />
                    </div>
                    <div class="item">
                        <img src="<?php echo site_url(); ?>/assets/img/certificates/4.png" alt=""
                            class="d-block w-100 clogo" />
                    </div>
                    <div class="item">
                        <img src="<?php echo site_url(); ?>/assets/img/certificates/5.png" alt=""
                            class="d-block w-100 clogo" />
                    </div>
                    <div class="item">
                        <img src="<?php echo site_url(); ?>/assets/img/certificates/6.png" alt=""
                            class="d-block w-100 clogo" />
                    </div>
                    <div class="item">
                        <img src="<?php echo site_url(); ?>/assets/img/certificates/7.png" alt=""
                            class="d-block w-100 clogo" />
                    </div>
                    <div class="item">
                        <img src="<?php echo site_url(); ?>/assets/img/certificates/8.png" alt=""
                            class="d-block w-100 clogo" />
                    </div>
                    <div class="item">
                        <img src="<?php echo site_url(); ?>/assets/img/certificates/9.png" alt=""
                            class="d-block w-100 clogo" />
                    </div>
                    <div class="item">
                        <img src="<?php echo site_url(); ?>/assets/img/certificates/10.png" alt=""
                            class="d-block w-100 clogo" />
                    </div>
                    <div class="item">
                        <img src="<?php echo site_url();
                                    ?>/assets/img/certificates/0.png" alt=""
                            class="d-block w-100 clogo" />
                    </div>
                    <div class="item">
                        <img src="<?php echo site_url(); ?>/assets/img/certificates/12.png" alt=""
                            class="d-block w-100 clogo" />
                    </div>
                    <div class="item d-none">
                        <img src="<?php echo site_url(); ?>/assets/img/certificates/13.png" alt=""
                            class="d-block w-100 clogo" />
                    </div>
                    <div class="item">
                        <img src="<?php echo site_url(); ?>/assets/img/certificates/14.png" alt=""
                            class="d-block w-100 clogo" />
                    </div>
                    <div class="item">
                        <img src="<?php echo site_url(); ?>/assets/img/certificates/15.png" alt=""
                            class="d-block w-100 clogo" />
                    </div>

                </div>
                <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators"
                    data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators"
                    data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </button>
            </div>
            <!-- -->
        </div>
    </div>

    <div class="testimonials-block0" id="jamp" style="margin-top: 50px;">
        <div class="container">
            <div class="row">
                <!-- <div class="col-12 col-md-6 text-alignl">
            <div class="lnjBhilwaraContent">
            <h3><a href="<?php //echo site_url() 
                            ?>/assets/pdf/RSWM Sustainability Report LR_2.pdf" target="_blank" >Sustainability Report</a></h3>
        </div>
            </div> -->
                <div class="col-12 d-none">
                    <div class="lnjBhilwaraContent text-center">
                        <h3><a href="<?php echo site_url() ?>/assets/pdf/RSWM_sustainability_policy.pdf"
                                target="_blank">Sustainability Policy</a></h3>
                    </div>
                </div>
            </div>




        </div>
    </div>


    <div class="testimonials-block0" id="jamp" style="text-align: center;">
        <div class="container">
            <div class="lnjBhilwaraContent">
                <h2>OUR BUSINESS UNITS</h2>
            </div>
            <?php get_header('ourbusiness'); ?>


        </div>
    </div>
</div>


<section class="aboutContact_form top30pxMargin">
    <div class="container">
        <?php get_template_part('contact-form') ?>
    </div>

</section>


<style>
    @media only screen and (max-width: 720px) {
        .text-alignl {
            text-align: center !important;
        }

        .text-alignr {
            text-align: center !important;
        }
    }

    @media only screen and (min-width: 721px) {
        .text-alignl {
            text-align: right !important;
        }

        .text-alignr {
            text-align: left !important;
        }
    }


    .lnjBhilwaraContent h3 {
        background: #4c913f;
        padding: 8px 34px;
        color: #fff;
        border-radius: 7px;

        font-family: 'gotham_htfbook';
        font-size: 18px;
        letter-spacing: 1px;
        text-transform: uppercase;
        display: inline-block;
    }

    .lnjBhilwaraContent h3 a {
        color: #fff;
        text-decoration: none;
    }


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
        /* min-height: 140px; */
    }

    .largestMenufecture.slider .item img {
        width: 100%;
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

    .Sustainabilitypage .rswmCares h5,
    .Sustainabilitypage .rswmCares h6 {
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
        z-index: 4;
        position: relative;
    }

    .Sustainabilitypage .largestMenufecture {
        padding: 150px 0px;
        margin-top: 70px;
    }

    .largestMenufecture .item {
        padding: 0 !important;
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

    .zoomIn,
    .translateY {
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

        .Sustainabilitypage .rswmCares h5,
        .rswmCares h6 {
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
            position: relative;
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

<style>
    .client-logos {
        /* background-color: #fff; */
    }

    /* Slider */
    .slick-slide {
        margin: 0px 20px;
    }

    .slick-slide img {
        width: 117px;
        /* width: auto; */
        /*max-width:160px;*/
        vertical-align: middle;
    }

    @media only screen and (max-width: 600px) {
        .slick-slide img {
            width: auto !important;
        }
    }

    .slick-slider {
        position: relative;
        display: block;
        box-sizing: border-box;

        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;

        -webkit-touch-callout: none;
        -khtml-user-select: none;
        -ms-touch-action: pan-y;
        touch-action: pan-y;
        -webkit-tap-highlight-color: transparent;
    }

    .slick-list {
        position: relative;
        display: block;
        overflow: hidden;

        margin: 0;
        padding: 0;
    }

    .slick-list:focus {
        outline: none;
    }

    .slick-list.dragging {
        cursor: pointer;
        cursor: hand;
    }

    .slick-slider .slick-track,
    .slick-slider .slick-list {
        -webkit-transform: translate3d(0, 0, 0);
        -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
        -o-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }

    .slick-track {
        position: relative;
        top: 0;
        left: 0;

        display: block;
    }

    .slick-track:before,
    .slick-track:after {
        display: table;

        content: '';
    }

    .slick-track:after {
        clear: both;
    }

    .slick-loading .slick-track {
        visibility: hidden;
    }

    .slick-slide {
        display: none;
        float: left;

        height: 100%;
        min-height: 1px;
    }

    [dir='rtl'] .slick-slide {
        float: right;
    }

    .slick-slide img {
        display: block;
    }

    .slick-slide.slick-loading img {
        display: none;
    }

    .slick-slide.dragging img {
        pointer-events: none;
    }

    .slick-initialized .slick-slide {
        display: block;
    }

    .slick-loading .slick-slide {
        visibility: hidden;
    }

    .slick-vertical .slick-slide {
        display: block;

        height: auto;

        border: 1px solid transparent;
    }

    .slick-arrow.slick-hidden {
        display: none;
    }

    /* .slide{
    display: block;
    width: fit-content;
} */
</style>
<!-- <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>	 -->
<script type="text/javascript" src="https://rswm.in/assets/vendors/slick/slick.min.js"></script>
<!-- <script>
$(document).ready(function(){
    $('.clientsSlider').slick({
      dots: false,
      infinite: true,
      autoplaySpeed: 1000,
      speed: 500,
      autoplay: true,
      slidesToShow: 6,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 6,
            slidesToScroll: 1,
            infinite: true,
            dots: false
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 5,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1
          }
        }
      ]
    });
		});
</script> -->
<?php get_footer(); ?>