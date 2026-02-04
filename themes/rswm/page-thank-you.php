<?php /* Template Name: Thank You Page */ ?>
<?php get_header(); ?>
<section class="thankYouPage">
    <div class="container">
        <div class="row">
            <div class="col span_12">
                <div class="thankyou-Content">
                    <h1 class="thankYou">Thank You!</h1>
                    <p>Your enquiry has been received. We are happy to serve you &amp; will get back to you soon.</p>
                    <h5><a href="<?php echo site_url(); ?>"> Keep Exploring </a></h5>
                    <p class="goodDay">Have a great day!</p>



                    <style>
                        section.thankYouPage {
                            margin-top: 150px;
                            margin-bottom: 60px;
                        }  

                        .thankYou {
                            font-size: 70px;
                            font-family: georgia;
                            color: #744c26;
                            text-transform: none;
                            text-align: center;
                            margin-bottom: 30px;

                        }

                        .thankyou-Content p {
                            font-family: 'gotham_htfbook', serif;
                            text-align: center;
                            font-size: 16px;
                            margin-bottom: 20px;
                            color: #000;
                            line-height: 25px;
                        }

                        .thankyou-Content h5 {
                            text-align: center;
                            margin-bottom: 10px;
                        }

                        .thankyou-Content h5 a {
                            background: #dec286;
                            color: #000;
                            padding: 8px 20px;
                            display: inline-block;
                            text-decoration: none;
                            font-size: 14px;
                        }
                        
                        p.goodDay{
                            font-size: 14px;
                        }
                    </style>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
