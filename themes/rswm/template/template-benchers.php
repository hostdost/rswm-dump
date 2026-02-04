<?php
/* Template Name: benchers */
get_header();
?>
<!-- script -->
<div class="script">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- contact-form -->
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
        $(document).ready(function() {
            $('#enquire').on('submit', function(e) {
                e.preventDefault();
                var $form = $(this);

                $.post($form.attr('action'), {
                    captcha: grecaptcha.getResponse()
                }, function(data) {
                    $("div#result").css('display', 'inline', 'important');
                    $("div#result").html(data);
                });
            });
        });
    </script>

</div>
<!--/ script -->


<section class="">
    <div class="til"></div>

    <div class="forBusibess edgeForBusibess">
        <h1>For Business Enquiries</h1>

        <form method="post" id="checker">
            <div class="newform-group form-fields">
                <input type="text" id="name" name="name" placeholder="name" class="isvalid" />
            </div>

            <div class="newform-group form-fields">
                <input type="text" id="phone" name="phone" placeholder="phone number" class="isvalid" />
            </div>

            <div class="newform-group form-fields">
                <input type="text" id="email" name="email" placeholder="email address" class="isvalid" />
            </div>
            <div class="newform-group form-fields">
                <input type="text" id="company" name="company" placeholder="company" class="isvalid" />
            </div>

            <div class="newform-group">
                <input type="text" id="target_market_location" name="target_market_location" placeholder="Target market location" />
            </div>
            <div class="newform-group">
                <textarea name="message" placeholder="message"></textarea>
            </div>

            <!-- set captcha -->
            <div class="newform-group">
                <div class="g-recaptcha" data-sitekey="6LfOtsYZAAAAAB9N4mqthsvmpZ-cxltQGlbEVwMh"></div>
            </div>
            <!--/ set captcha -->

            <div class="newform-group">
                <input type="hidden" name="action" value="responser">
                <button id="submit_btn">Submit</button>
                <div id="result"></div>
            </div>
        </form>
        <div class="responsive"></div>
    </div>


    <style>
        .forBusibess input {
            width: 100%;
            display: block;
            float: unset;
            margin: 0px 0px;
            margin-bottom: 0;
            border: 1px solid #b7b7b7;
            padding: 7px;
            outline: none;
        }

        .newform-group.form-fields {
            width: 50%;
            float: left;


        }

        .newform-group {
            margin-bottom: 20px;
            padding: 0 10px;
        }

        .newform-group input#target_market_location {
            width: 100%;
        }

        .forBusibess textarea {
            width: 100%;
        }

        form#enquire {
            margin: 0 -10px;
        }

        .newform-group span.en_error {
            display: block;
            color: red;
            margin-top: 5px;
        }

        @media screen and (max-width: 767px) {
            .newform-group.form-fields {
                width: 100%;
                float: left;
            }

            .newform-group {
                margin-bottom: 15px;
                padding: 0 10px;
            }

            .forBusibess form {
                padding: 0px 20px;
            }

        }
    </style>


</section>





<!-- footer -->
<footer>
    <div class="stickyButtontwo">
        <a href="<?php echo site_url('/'); ?>wp-content/uploads/2020/04/RSWM_Cares_covid19.pdf" target="blank" style=""> RSWM's Response to <span class="covid"> COVID-19 </span></a>
    </div>
    <div class="stickyButtonthree">
        <a href="<?php echo site_url('/'); ?>wp-content/themes/rswm/images/pdf/RSWM_SOP_Back_to_Work.pdf" target="blank" style=""> Back to work <span class="covid"> after COVID-19</span></a>
    </div>

    <div class="container">
        <div class="row">
            <div class="col span_12">
                <ul class="footer_menu">
                    <?php $obj = get_queried_object();  ?>
                    <li><a href="<?php echo get_permalink(95) ?>" class="<?php echo $obj->ID == 95 ? 'active' : '' ?>" title="Yarn Supplier and Manufacturer">About</a></li>
                    <li><a href="<?php echo get_permalink(1066) ?>" class="<?php echo $obj->ID == 1066 ? 'active' : '' ?>" title="Events by RSWM Ltd.">Events</a></li>
                    <li><a href="<?php echo get_permalink(5); ?>#business-units" class="<?php echo $obj->ID == 5 ? 'active' : '' ?>" title="Premier Yarns Manufacturer">Business Units</a></li>
                    <li><a href="<?php echo get_permalink(103) ?>" class="<?php echo $obj->ID == 103 ? 'active' : '' ?>" title="Functional Blended Yarns">RSWM Edge<sup>TM</sup></a></li>
                    <li><a href="<?php echo get_permalink(131) ?>" class="<?php echo $obj->ID == 131 ? 'active' : '' ?>" title="Annual Reports and Investor Relations">Investors</a></li>
                    <li><a href="<?php echo get_permalink(108) ?>" class="<?php echo $obj->ID == 108 ? 'active' : '' ?>" title="RSWM Sustainable Initiatives ">Sustainability</a></li>
                    <li><a href="<?php echo get_permalink(95) ?>#locationBlock" class="location_menu" title="RSWM Ltd. Locations">Locations</a></li>
                    <li><a href="<?php echo get_permalink(2093) ?>" class="<?php echo $obj->ID == 2093 ? 'active' : '' ?>" title="Yarn collections">Collections</a></li>
                    <li><a href="<?php echo get_template_directory_uri() ?>/images/pdf/rswm-corporate-brochure.pdf" target="_blank" title="RSWM Corporate Brochure">Corporate Brochure</a></li>
                    <li><a href="<?php echo get_permalink(1021) ?>" class="<?php echo $obj->ID == 1021 ? 'active' : '' ?>" title="Contact RSWM Ltd.">Contact</a></li>
                    <li class="socials-icon">
                        <ul>
                            <li class="instagram1"><a href="https://www.instagram.com/rswmofficial/" target="_blank" title="RSWM Ltd. Official Instagram Page"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li class="twitter"><a href="https://twitter.com/rswmofficial?lang=en" target="_blank" title="RSWM Ltd. Official Twitter Page"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li class="facebook1"><a href="https://www.facebook.com/rswmofficial/" target="_blank" title="RSWM Ltd. Official Facebook Page"><i class="fa fa-facebook-f" aria-hidden="true"></i></a></li>
                            <li class="facebook1"><a href="https://www.linkedin.com/company/rswmofficial/" target="_blank" title="RSWM Ltd. Official Linkedin Page"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                    </li>
                </ul>


                <div class="copyright">
                    All Rights Reserved <?php date('Y') ?> | rswm.in<br />
                    <a href="http://www.hostdost.in" target="_blank">HOSTDOST</a>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>


<!--/ end footer -->