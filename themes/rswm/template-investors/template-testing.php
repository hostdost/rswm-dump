<?php
/* Template Name: Testing HD */
get_header('hd');
$default_taxnomy = 'category';
$year_tax = get_terms('year', array('hide_empty' => false));
$annualyear = get_terms('annual-year', array('hide_empty' => false));

?>
<?php get_template_part('template-investors/hd-top', 'menu') ?>
<style>
.d-none {
    display: none;
}
</style>
<!-- -->
<style>
.investeTBanner img {

    width: 100%;

    display: block;

}

.investeTBanner {

    position: relative;

    margin-top: 92px;

}

.investeTBannerContent {

    position: absolute;

    top: 50%;

    left: 50%;

    transform: translate(-50%, -50%);

}

.inversterGrid .grid {

    margin: 0 -1px;

}

.investeTBannerContent h2 {

    font-size: 37px;

    text-transform: uppercase;

    font-family: 'gotham_htfbook';

    color: #fff;

    font-weight: normal;

    letter-spacing: 7px;

    border-bottom: 1px solid #fff;

    padding-bottom: 20px;

}

.grid-item,
.grid-sizer {

    width: 33.33%;

}

.grid-item {

    float: left;

    overflow: hidden;

    padding: 0 1px;

    margin-bottom: 2px;

}

.grid-item.width_2 {

    width: 66.66%
}

.grid-item img {

    object-fit: cover;

    height: 100%;

    width: 100%;

}

.grid-item img,
.grid-item a {

    display: block;

    height: 100%;

}

.height1 {

    height: 210px;

}

.height2 {

    height: 420px;

}

.height3 {

    height: 630px;

}

.investorCaption {

    position: absolute;

    left: 50%;

    top: 50%;

    transform: translate(-50%, -50%);

    width: 100%;

    object-fit: cover;

    width: 100%;





}

.investorCaption h2 {

    font-size: 19px;

    text-transform: uppercase;

    font-family: 'gotham_htfbook';

    color: #fff;

    font-weight: normal;

    text-align: center;

}

.investorCaption h2 a {

    text-decoration: none;

    color: #fff;

}

.inversterGrid {

    margin-bottom: 40px;

}



* {

    -webkit-box-sizing: border-box;

    -moz-box-sizing: border-box;

    box-sizing: border-box;

}





/*grid new*/



.inversterGrid1 ul li {

    float: left;

}



.inversterGrid1 ul li img {

    display: block;

    width: 100%;

}

.inversterGrid1 ul:after {

    content: '';

    display: block;

    clear: both;

}

.inversterGrid1 {

    margin-bottom: 40px;

}

.title {
    text-transform: capitalize;
}

.Accordian_content h5 {
    font-size: 15px;
    font-weight: 600;
}
</style>
<div class="container">
    <div class="page-content-wrapper section-space--inner--120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 order-1 order-lg-2">
                    <div class="service-details-page-content">
                        <div class="service-details-image-block section-space--bottom--50 d-none">
                            <div class="image">
                                <img src="<?php echo site_url('/'); ?>assets/img/banners/banner_maral.jpg"
                                    class="img-fluid" alt="">
                            </div>

                        </div>







                        <div class="service-details-text-wrapper section-space--bottom--50">
                            <h2 class="title">Disclosure under Regulation
                                30<?php //echo the_title(); 
                                    ?>
                            </h2>
                            <div class="faq-wrapper">

                                <?php $terms = get_term_by('id', 117, $default_taxnomy); ?>
                                <div id="accordion">
                                    <!-- Board of Directors -->
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapseOne" aria-expanded="false"
                                                    aria-controls="collapseOne">
                                                    Board of Directors <span> <i class="ion-plus"></i>
                                                        <i class="ion-minus"></i> </span>
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <!-- -->

                                                <div class="Accordian_content" style="display: block;">
                                                    <div class="accordian_Innercontent">
                                                        <ul class="compliances_responsive director-table">
                                                            <li>
                                                                <table class="table">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>Mr. Lakshmi Niwas Jhunjhunwala </td>
                                                                            <td>:</td>
                                                                            <td>Chairman-Emeritus
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="3"><b>BOARD OF DIRECTORS
                                                                                </b></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Mr. Riju Jhunjhunwala</td>
                                                                            <td>:</td>
                                                                            <td>Chairman and Managing Director & CEO
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Mr. Ravi Jhunjhunwala </td>
                                                                            <td>:</td>
                                                                            <td>Director</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Mr. Shekhar Agarwal </td>
                                                                            <td>:</td>
                                                                            <td>Director</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Mr. Brij Mohan Sharma </td>
                                                                            <td>:</td>
                                                                            <td>Joint Managing Director

                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Mr. Arun Kumar Churiwal </td>
                                                                            <td>:</td>
                                                                            <td>Director</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Dr. Kamal Gupta</td>
                                                                            <td>:</td>
                                                                            <td>Independent Director

                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Mr. Amar Nath Choudhary</td>
                                                                            <td>:</td>
                                                                            <td>Independent Director

                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Mr. Priya Shankar Dasgupta</td>
                                                                            <td>:</td>
                                                                            <td>Independent Director

                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Mr. Deepak Jain</td>
                                                                            <td>:</td>
                                                                            <td>Independent Director

                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td>Mrs. Archana Capoor</td>
                                                                            <td>:</td>
                                                                            <td>Independent Director</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="3"><b>CHANGE IN BOARD OF
                                                                                    DIRECTORS</b></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="3">1. Mr. Brij Mohan Sharma
                                                                                appointed as an Additional Director and
                                                                                Joint Managing Director of the Company
                                                                                w.e.f. 7th August, 2018.</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="3">2. Mr. Prakash Maheshwari
                                                                                resigned from the Directorship of the
                                                                                Company w.e.f 1st April, 2018.</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="3">3. Mrs. Archana Capoor
                                                                                appointed as an Additional Director
                                                                                (Independent) w.e.f. 13th February,
                                                                                2018.</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="3">4. Mrs. Geeta Mathur
                                                                                resigned from the Directorship of the
                                                                                Company w.e.f. 9th November, 2017.</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="3">5. Mr. Deepak Jain appointed
                                                                                as an Additional Director (Independent)
                                                                                of the Company w.e.f. 11th May, 2016
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="3">6. Mr. Sushil Jhunjhunwala
                                                                                resigned from the Directorship of the
                                                                                Company w.e.f. 1st February, 2016</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="3">7. Mr. Prakash Maheshwari
                                                                                appointed as an Additional Director and
                                                                                Executive Director of the Company w.e.f.
                                                                                1st April, 2015.</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="3">8. Mrs. Geeta Mathur
                                                                                appointed as an Additional Director
                                                                                (Independent) of the Company w.e.f 11th
                                                                                November, 2014.</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="3">9. Mr. T.G. Regunathan
                                                                                resigned from the Directorship of the
                                                                                Company w.e.f. 13th June, 2014</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="3">10. Mr. L.N. Jhunjhunwala
                                                                                resigned from the Directorship of the
                                                                                Company w.e.f 21st April, 2014.</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Board of Directors -->
                                    <!-- Code of Conduct for Procedure of Fair disclosure of Unpublished Price Sensitive Information’s -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed">
                                                    <a href="https://www.rswm.in/wp-content/uploads/2018/07/Code-of-Conduct-for-Insider-Trading-RSWM.pdf"
                                                        target="_blank">Code of Conduct for Procedure of Fair disclosure
                                                        of Unpublished Price Sensitive Information’s </a>
                                                </button>
                                            </h5>
                                        </div>

                                    </div>
                                    <!-- Code of Conduct for Procedure of Fair disclosure of Unpublished Price Sensitive Information’s -->
                                    <!-- corporate announcements -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapseTwo" aria-expanded="false"
                                                    aria-controls="collapseFour">
                                                    Outcome of Board Meetings /
                                                    Corporate Announcement <span> <i class="ion-plus"></i>
                                                        <i class="ion-minus"></i> </span>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <div class="accordian_Innercontent">
                                                    <ul class="accordian_Innercontent">
                                                        <li><a target="_blank"
                                                                href="https://rswm.in/wp-content/uploads/2022/12/OutcomeOfRICMeeting12122022.pdf">Outcome
                                                                of
                                                                RIC Meeting held on 12-12-2022</a></li>
                                                        <li><a target="_blank"
                                                                href="https://www.rswm.in/wp-content/uploads/2022/11/RSWMTranscriptOfInvestorsConferenceCall15112022.pdf">Transcript
                                                                of
                                                                Investors Conference Call held on 15-11-2022</a></li>
                                                        <li><a target="_blank"
                                                                href="https://www.rswm.in/wp-content/uploads/2022/11/RSWM-Audio-Recording-of-Investors-Conference-Call-15-11-2022.mp3">Investors
                                                                Conference Call held on 15-11-2022</a></li>
                                                        <li><a target="_blank"
                                                                href="https://www.rswm.in/wp-content/uploads/2022/08/RSWMTranscriptOfInvestorsConferenceCall10082022.pdf">Transcript
                                                                of Investors Confernece Call held on 10-08-2022</a></li>
                                                        <li><a target="_blank"
                                                                href="https://www.rswm.in/wp-content/themes/rswm/images/RSWM-Audio-Recording-Investors-Conference-Call-10-08-2022.mp3">Investors
                                                                Conference Call held on 10-08-2022</a></li>
                                                        <li><a target="_blank"
                                                                href="https://www.rswm.in/Outcomeof Board Meeting 08/08/2022">Outcome
                                                                of
                                                                Board Meeting 8th August, 2022</a></li>
                                                        <li><a target="_blank"
                                                                href="https://www.rswm.in/wp-content/uploads/2022/08/RSWMPressRelease30062022.pdf">Press
                                                                Release on Q1 Results 08th August , 2022</a></li>
                                                        <li><a target="_blank"
                                                                href="https://www.rswm.in/wp-content/uploads/2022/08/RSWMIntimationInvestorsConferenceCall10082022.pdf">Intimation
                                                                of Schedule of Investors Conference Call on
                                                                10-08-2022</a></li>
                                                        <li><a target="_blank"
                                                                href="https://www.rswm.in/wp-content/uploads/2022/07/RSWMSEIntimationUnclaimedDividendIEPF4.pdf">Intimation
                                                                Unclaimed Dividend IEPF 4 20-07-2022</a></li>

                                                        <li><a target="_blank"
                                                                href="https://www.rswm.in/wp-content/uploads/2022/07/RSWMSEIntimationKYCUpdationReminder.pdf">Intimation
                                                                to Physical Shareholders Reminder-1 15-07-2022 </a></li>
                                                        <li><a target="_blank"
                                                                href="https://www.rswm.in/wp-content/uploads/2022/07/RSWMSEIntimationTDSOnDividend.pdf">Intimation
                                                                on Tax Deducted on Dividend 11-07-2022 </a></li>
                                                        <li><a target="_blank"
                                                                href="https://www.rswm.in/wp-content/uploads/2022/06/RSWMSELetterPFT29062022.pdf">Intimation
                                                                PFT 29-06-2022 </a></li>
                                                        <li><a target="_blank"
                                                                href="https://www.rswm.in/wp-content/uploads/2022/06/RSWMTranscriptOfInvestorsConferenceCall30052022.pdf">Transcript
                                                                of Investors Conference Call held on 30-05-2022 </a>
                                                        </li>
                                                        <li><a target="_blank"
                                                                href="https://www.rswm.in/wp-content/themes/rswm/images/RSWM-Audio-Recording-Investors-Conference-Call-30-05-2022.mp3">Confernce
                                                                Call Scheduled on 30-05-2022 </a></li>
                                                        <li><a target="_blank" href="#">Outcome of Board Meeting 27th
                                                                May, 2022 </a></li>
                                                        <li><a target="_blank"
                                                                href="https://www.rswm.in/wp-content/uploads/2022/03/RSWMSEIntimationBTA29032022.pdf">Intimation
                                                                BTA 29 March, 2022 </a></li>
                                                        <li><a target="_blank"
                                                                href="https://www.rswm.in/wp-content/uploads/2022/03/OutcomeOfAnalystMeet24022022.pdf">Outcome
                                                                of Analyst Meet 24-02-2022 </a></li>
                                                        <li><a target="_blank"
                                                                href="https://www.rswm.in/wp-content/uploads/2022/02/RSWMAnalystMeet24022022.pdf">Intimation
                                                                of Analyst Meet 24-02-2022 </a></li>

                                                        <li><a target="_blank"
                                                                href="https://www.rswm.in/wp-content/uploads/2022/02/RSWM-Outcome-of-Investors-Conference.pdf">Outcome
                                                                of Investors Conference Call 08-02-2022 </a></li>
                                                        <li><a target="_blank"
                                                                href="https://www.rswm.in/wp-content/uploads/2022/02/RSWMPressReleaseQ3FY2122.pdf">Press
                                                                Release Q3 on 08-02-2022 </a></li>
                                                        <li><a target="_blank" href="#">Outcome of Board Meeting 7th
                                                                February, 2022 </a></li>
                                                        <li><a target="_blank"
                                                                href="<?php echo get_permalink(6112) ?>">Credit
                                                                Rating Letter 03-02-2022 </a></li>
                                                        <li><a target="_blank"
                                                                href="https://www.rswm.in/wp-content/uploads/2022/02/RSWMIntimationOfInvestorsConference08022022.pdf">Intimation
                                                                of Schedule of Investors Conference Call on 08-02-2022
                                                            </a></li>
                                                        <li><a target="_blank"
                                                                href="https://www.rswm.in/wp-content/uploads/2021/12/Press-release-Q2-and-H2-FY22.pdf">Press
                                                                Release on 08-11-2021 </a></li>
                                                        <li><a target="_blank" href="">Outcome of Board Meeting 8th
                                                                November, 2021 </a></li>
                                                        <li><a target="_blank"
                                                                href="https://www.rswm.in/wp-content/uploads/2021/11/RSWMIntimationOfInvestorsConference09112021.pdf">Intimation
                                                                of Schedule of Investors Conference Call on 09-11-2021
                                                            </a></li>
                                                        <li><a target="_blank" href="">Outcome of Board meeting 12th
                                                                August, 2021 </a></li>
                                                        <li><a target="_blank"
                                                                href="https://www.rswm.in/wp-content/uploads/2021/06/RSWMIntimationOfConferenceCall02062021.pdf">Intimation
                                                                of Schedule of Investors Conference Call on 02-06-2021
                                                            </a></li>
                                                        <li><a target="_blank" href="">Outcome of Board Meeting 28th
                                                                May, 2021 </a></li>

                                                        <li><a target="_blank" href="">Credit Rating Letter 01-04-2021
                                                            </a></li>
                                                        <li><a target="_blank" href="">Outcome of Board Meeting 11th
                                                                February, 2021 </a></li>
                                                        <li><a target="_blank" href="">Outcome of Board Meeting 11th
                                                                November, 2020 </a></li>
                                                        <li><a target="_blank" href="">Outcome of Board Meeting 11th
                                                                August, 2020 </a></li>
                                                        <li><a target="_blank"
                                                                href="https://www.rswm.in/wp-content/uploads/2020/06/RSWM-Press-Release16-06-2020.pdf">Press
                                                                Release 16-06-2020 </a></li>
                                                        <li><a target="_blank" href="">Outcome of Board Meeting 15th
                                                                June, 2020 </a></li>
                                                        <li><a target="_blank"
                                                                href="https://www.rswm.in/wp-content/uploads/2020/03/stock-exchange-update.pdf">Stock
                                                                Exchange Letter 30-03-2020 </a></li>
                                                        <li><a target="_blank" href="">Outcome of Board Meeting 12th
                                                                February, 2020 </a></li>
                                                        <li><a target="_blank" href="">Credit Rating Letter 11-12-2019
                                                            </a></li>
                                                        <li><a target="_blank"
                                                                href="https://www.rswm.in/wp-content/uploads/2019/12/RSWM-Outcome-of-Board-Meeting-11-12-2019-Rights-Issue.pdf">Outcome
                                                                of Board Meeting 11-12-2019 </a></li>
                                                        <li><a target="_blank" href="">Outcome of Board Meeting 8th
                                                                November, 2019 </a></li>
                                                        <li><a target="_blank"
                                                                href="https://www.rswm.in/wp-content/uploads/2019/09/RSWM-Newspaper-Cutting-Details-of-Transfer-Request.pdf">Newspaper
                                                                Cutting Details of Transfer Request </a></li>
                                                        <li><a target="_blank" href="">Outcome of Board Meeting 12th
                                                                August, 2019 </a></li>

                                                        <li><a target="_blank" href="">Outcome of Board Meeting 21st
                                                                May, 2019 </a></li>
                                                        <li><a target="_blank" href="">Credit Rating Letter 12-03-2019
                                                            </a></li>
                                                        <li><a target="_blank"
                                                                href="https://www.rswm.in/wp-content/uploads/2019/02/RSWM-Financial-Results-31-12-2018.pdf">Outcome
                                                                of Board Meeting 13-02-2019 </a></li>
                                                        <li><a target="_blank"
                                                                href="https://www.rswm.in/wp-content/uploads/2018/11/RSWM-Financial-Results-30-09-2018.pdf">Outcome
                                                                of Board Meeting 13-11-2018 </a></li>
                                                        <li><a target="_blank"
                                                                href="https://www.rswm.in/wp-content/uploads/2018/08/RSWM-Financial-Results-30-06-2018.pdf">Outcome
                                                                of Board Meeting 07-08-2018 </a></li>
                                                        <li><a target="_blank"
                                                                href="https://www.rswm.in/wp-content/uploads/2018/07/RSWM-Analyst-investor-Meeting.pdf">Intimation
                                                                of Schedule of Investors Conference Call on 04-06-2018
                                                            </a></li>
                                                        <li><a target="_blank"
                                                                href="https://www.rswm.in/wp-content/uploads/2018/07/RSWM-Closure-of-Units.pdf">Intimation
                                                                regarding closure of Company's Units 29-05-2018 </a>
                                                        </li>
                                                        <li><a target="_blank"
                                                                href="https://www.rswm.in/wp-content/uploads/2018/07/Recommendation-Of-Dividend.pdf">Recommendation
                                                                of Dividend 03-05-2018 </a></li>
                                                        <li><a target="_blank"
                                                                href="https://www.rswm.in/wp-content/themes/rswm/template-investors/pdf/financial-highlights/RSWM-Financial-Results-31-03-2018.pdf">Outcome
                                                                of Board Meeting 10-05-2018 </a></li>
                                                        <li><a target="_blank"
                                                                href="https://www.rswm.in/wp-content/themes/rswm/template-investors/pdf/financial-highlights/RSWM-Financial-Results-31-12-2017.pdf">Outcome
                                                                of Board Meeting 13-02-2018 </a></li>
                                                        <li><a target="_blank"
                                                                href="https://www.rswm.in/wp-content/uploads/2018/07/RSWM_Financial_Results_30_09_2017.pdf">Outcome
                                                                of Board Meeting 07-11-2017 </a></li>

                                                        <li><a target="_blank"
                                                                href="https://www.rswm.in/wp-content/uploads/2018/07/financial_results_june2017.pdf">Outcome
                                                                of Board Meeting 08-08-2017 </a></li>
                                                        <li><a target="_blank"
                                                                href="https://www.rswm.in/wp-content/uploads/2018/07/financial_results_march2017.pdf">Outcome
                                                                of Board Meeting 12-05-2017 </a></li>
                                                        <li><a target="_blank"
                                                                href="https://www.rswm.in/wp-content/uploads/2018/07/financial_results_20170210213253.pdf">Outcome
                                                                of Board Meeting 10-02-2017 </a></li>
                                                        <li><a target="_blank"
                                                                href="https://www.rswm.in/wp-content/uploads/2018/07/financial_results_30_09_2016.pdf">Outcome
                                                                of Board Meeting 10-11-2016 </a></li>
                                                        <li><a target="_blank"
                                                                href="https://www.rswm.in/wp-content/uploads/2018/07/qtr30-06-2016.pdf">Outcome
                                                                of Board
                                                                Meeting 09-08-2016 </a></li>
                                                        <li><a target="_blank"
                                                                href="https://www.rswm.in/wp-content/uploads/2018/07/qtr31-03-2016.pdf">Outcome
                                                                of Board
                                                                Meeting 11-05-2016 </a></li>
                                                        <li><a target="_blank"
                                                                href="https://www.rswm.in/wp-content/uploads/2018/07/qtr31-12-2015.pdf">Outcome
                                                                of Board
                                                                Meeting 01-02-2016 </a></li>
                                                        <li><a target="_blank"
                                                                href="https://www.rswm.in/wp-content/uploads/2018/07/qtr30-09-2015.pdf">Outcome
                                                                of Board
                                                                Meeting 05-11-2015 </a></li>
                                                        <li><a target="_blank"
                                                                href="https://www.rswm.in/wp-content/uploads/2018/07/qtr30-06-2015.pdf">Outcome
                                                                of Board
                                                                Meeting 30-07-2015 </a></li>
                                                        <li><a target="_blank"
                                                                href="https://www.rswm.in/wp-content/uploads/2018/07/qtr31-03-2015.pdf">Outcome
                                                                of Board
                                                                Meeting 08-05-2015 </a></li>


                                                    </ul>
                                                    <ul class="share_holder_responsive" style="display: none;">
                                                        <li><a href="https://www.rswm.in/wp-content/uploads/2022/08/RSWMTranscriptOfInvestorsConferenceCall10082022.pdf"
                                                                target="_blank">
                                                                <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                                                Transcript of Investors Confernece Call
                                                                held on 10-08-2022</a></li>

                                                        <li><a href="https://www.rswm.in/wp-content/themes/rswm/images/RSWM-Audio-Recording-Investors-Conference-Call-10-08-2022.mp3"
                                                                target="_blank">
                                                                <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                                                Investors Conference Call held on
                                                                10-08-2022</a></li>

                                                        <li><a href="https://www.rswm.in/wp-content/uploads/2022/08/RSWMTranscriptOfInvestorsConferenceCall10082022.pdf"
                                                                target="_blank">
                                                                <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                                                Outcome of Board Meeting 8th August,
                                                                2022</a></li>

                                                        <li><a href="https://www.rswm.in/wp-content/uploads/2022/08/RSWMPressRelease30062022.pdf"
                                                                target="_blank">
                                                                <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                                                Intimation of Schedule of Investors
                                                                Conference Call on 10-08-2022</a></li>

                                                        <li><a href="https://www.rswm.in/wp-content/uploads/2022/08/RSWMIntimationInvestorsConferenceCall10082022.pdf"
                                                                target="_blank">
                                                                <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                                                Transcript of Investors Confernece Call
                                                                held on 10-08-2022</a></li>

                                                    </ul>
                                                </div>
                                                <div class="accordian_Innercontent">
                                                    <ul class="share_holder_responsive">

                                                        <li><a target="_blank"
                                                                href="https://www.rswm.in/pdf/reg46/14-11-22/RSWMPressRelease14112022.pdf">Intimation
                                                                to
                                                                Stock Exchange as per Reg. 30 of Listing Regulation
                                                                September, 2022</a></li>
                                                        <li><a target="_blank"
                                                                href="RSWM_Resignation_of_ID_Regulation_30.pdf">Intimation
                                                                of Resignation of
                                                                Independent Director 24th July 2019 </a></li>
                                                        <li><a target="_blank"
                                                                href="RSWM_Resignation_of_NID_Regulation_30.pdf">Intimation
                                                                of Reason of
                                                                Resignation of Independent Director 30 July 2019 </a>
                                                        </li>
                                                        <li><a target="_blank"
                                                                href="RSWM_Intimation_under_Regulation_30-LNJ_Skill.pdf">Intimation
                                                                of M/s.
                                                                LNJ Skills & Rozgar Private Limited ceased to be the
                                                                Subsidiary of our Company 14-05-2019
                                                            </a></li>
                                                        <li><a target="_blank"
                                                                href="RSWM_SE_Letter_23-03-2020.pdf">Intimation of
                                                                closure of operations due
                                                                to lock down-23rd March, 2020 </a></li>
                                                        <li><a target="_blank" href="">Intimation of Resumption of
                                                                Operation 20th April, 2020 </a></li>
                                                        <li><a target="_blank" href="">Intimation of Resumption of
                                                                Operations 25th April, 2020 </a></li>
                                                        <li><a target="_blank" href="">Intimation of Resumption of
                                                                Operations 1st May, 2020 </a></li>
                                                        <li><a target="_blank" href="">Intimation of Resumption of
                                                                Operations 4th May, 2020 </a></li>
                                                        <li><a target="_blank" href="">Intimation for Impact of Covid 30
                                                                May, 2020 </a></li>


                                                        <li><a target="_blank" href="">Intimation of Copy of Postal
                                                                Ballot/E-voting Notice 08-03-2021 </a>
                                                        </li>
                                                        <li><a target="_blank" href="">Intimation of Agreement entered
                                                                with M/s. Donear Industries Ltd. for
                                                                sale of stocks, trade receivables, intangible assets of
                                                                Mayur Fabrics 28-08-2021 </a></li>
                                                        <li><a target="_blank" href="">Intimation of MOU entered with
                                                                Pegasus Inland Container Depot Pvt.
                                                                Ltd. for sale/transfer of PFT 25-10-2021 </a></li>
                                                        <li><a target="_blank" href="">Intimation of Fire Incident at
                                                                Spinning Unit Mordi, Banswara,
                                                                Rajasthan 19-11-2021 </a></li>
                                                        <li><a target="_blank" href="">Intimation of definitive sale
                                                                agreement towards sale/transfer of
                                                                Private Freight Terminal (PFT) 29-03-2022 </a></li>
                                                        <li><a target="_blank" href="">Intimation of Western Railway,
                                                                the competent authority approval for
                                                                transfer of ownership to M/s Pegasus Inland Container
                                                                Depot Private Limited 29-06-2022 </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- corporate announcements -->
                                    <!-- related party transaction -->
                                    <?php $disclosure_terms = get_term_by('id', 187, $default_taxnomy); ?>
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapseThree1111" aria-expanded="false"
                                                    aria-controls="collapseThree1111">
                                                    <?php echo $disclosure_terms->name ?> <span> <i
                                                            class="ion-plus"></i>
                                                        <i class="ion-minus"></i> </span>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree1111" class="collapse" aria-labelledby="headingThree1111"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <?php $disclosure_args = array("post_type" => "investor", 'fields' => 'ids', "post_status" => "publish", "posts_per_page" => -1, "orderby" => 'menu_order', "order" => "ASC", "tax_query" => array(array("taxonomy" => $disclosure_terms->taxonomy, "field" => "id", "terms" => array($disclosure_terms->term_id),),));
                                                $disclosure_query = new WP_Query($disclosure_args); ?>
                                                <?php if ($disclosure_query->have_posts()) { ?>
                                                <div class="accordian_Innercontent">
                                                    <ul class="compliances_responsive">
                                                        <?php while ($disclosure_query->have_posts()) {
                                                                $disclosure_query->the_post() ?>
                                                        <?php $wpcfpdfurl1 = get_post_meta(get_the_ID(), 'wpcf-pdf-url', true); ?>
                                                        <li><a href="<?php echo $wpcfpdfurl1 != '' ? $wpcfpdfurl1 : 'javascript:void(0)'; ?>"
                                                                target="_blank"> <img
                                                                    src="<?php echo get_template_directory_uri() ?>/images/pdf-icon.png"
                                                                    alt="" /> <?php the_title(); ?> </a> </li>
                                                        <?php } ?>
                                                    </ul>
                                                </div>
                                                <?php } ?>

                                            </div>
                                        </div>
                                    </div>


                                    <!-- <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapseThree" aria-expanded="false"
                                                    aria-controls="collapseThree">
                                                    Related Party
                                                    Transactions Disclosure <span> <i class="ion-plus"></i>
                                                        <i class="ion-minus"></i> </span>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <div class="accordian_Innercontent">
                                                    <ul class="share_holder_responsive">
                                                        <li><a target="_blank"
                                                                href="https://rswm.in/wp-content/uploads/2022/12/RSWM-RPT-Disclosure-30-09-2022.pdf">Disclosure
                                                                of related party transactions half year ended 30th
                                                                September,
                                                                2022 </a></li>
                                                        <li><a target="_blank" href="">Disclosure of related party
                                                                transaction for the half year ending 30th
                                                                September, 2020 </a></li>
                                                        <li><a target="_blank" href="">Related Party Transactions
                                                                Disclosure for the half year ended 31st
                                                                March, 2020 </a></li>
                                                        <li><a target="_blank" href="">Disclosure of related party
                                                                transaction for the half year ending 30th
                                                                September, 2019 </a></li>
                                                        <li><a target="_blank" href="">Disclosure of related party
                                                                transactions half year ended 31st March,
                                                                2019 </a></li>




                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- related party transaction -->
                                    <!-- shareholder meesting -->
                                    <?php $ShareHoldersMeetingsvoting_terms = get_term_by('id', 91, $default_taxnomy); ?>
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapseThree111" aria-expanded="false"
                                                    aria-controls="collapseThree111">
                                                    <?php echo $ShareHoldersMeetingsvoting_terms->name ?> <span> <i
                                                            class="ion-plus"></i>
                                                        <i class="ion-minus"></i> </span>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree111" class="collapse" aria-labelledby="headingThree111"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <div class="accordian_Innercontent">
                                                    <?php $term_children = array(413, 404, 400, 392, 189, 184, 92, 93, 94, 95); ?>
                                                    <div class="main_child_div investorPresentation">
                                                        <?php foreach ($term_children as $termchild) { ?>
                                                        <?php $termchild1_terms = get_term_by('id', $termchild, $default_taxnomy); ?>
                                                        <p>
                                                            <?php echo ucfirst($termchild1_terms->name) ?>
                                                        </p>
                                                        <?php $share_meeting_args = array("post_type" => "investor", 'fields' => 'ids', "post_status" => "publish", "posts_per_page" => -1, "orderby" => 'menu_order', "tax_query" => array(array("taxonomy" => $termchild1_terms->taxonomy, "field" => "id", "terms" => array($termchild1_terms->term_id),),));
                                                            $share_meeting_query = new WP_Query($share_meeting_args); ?>
                                                        <div class="accordian_Innercontent">
                                                            <ul class="compliances_responsive">
                                                                <?php if ($share_meeting_query->have_posts()) { ?>
                                                                <?php while ($share_meeting_query->have_posts()) {
                                                                            $share_meeting_query->the_post() ?>
                                                                <?php $wpcfpdfurl1 = get_post_meta(get_the_ID(), 'wpcf-pdf-url', true); ?>
                                                                <li><a href="<?php echo $wpcfpdfurl1 != '' ? $wpcfpdfurl1 : 'javascript:void(0)'; ?>"
                                                                        target="_blank"> <img
                                                                            src="<?php echo get_template_directory_uri() ?>/images/pdf-icon.png"
                                                                            alt="" /> <?php the_title(); ?> </a>
                                                                </li>
                                                                <?php } ?>
                                                                <?php } ?>
                                                            </ul>
                                                        </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                    <!-- shareholder meesting -->
                                    <!-- revision in rating -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed">
                                                    <a href="<?php echo get_permalink(6112) ?>" target="_blank">Revision
                                                        in
                                                        Rating
                                                    </a>
                                                </button>
                                            </h5>
                                        </div>

                                    </div>
                                    <!-- revision in rating -->
                                    <!-- compulsary demat of physical shares -->
                                    <div class="card">

                                        <div class="card-header">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed">
                                                    <a href="https://rswm.in/investors-relations/other-disclosure/compulsory-demat-of-physical-shares/"
                                                        target="_blank">Compulsory Demat of Physical Shares
                                                    </a>
                                                </button>
                                            </h5>
                                        </div>

                                    </div>
                                    <!-- compulsary demat of physical shares -->
                                    <!-- Article of association -->
                                    <div class="card">

                                        <div class="card-header">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed">
                                                    <a href="https://www.rswm.in/wp-content/uploads/2018/07/RSWM_AOA.pdf"
                                                        target="_blank">Articles of Association
                                                    </a>
                                                </button>
                                            </h5>
                                        </div>

                                    </div>
                                    <!-- Article of association -->

                                    <!-- Procedure for Updation of PAN/KYC/Nomination by Physical Shareholders -->
                                    <?php $articleAssociation_terms = get_term_by('id', 405, $default_taxnomy); ?>
                                    <div class="card">
                                        <div class="card-header" id="headingSeven">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapseSeven" aria-expanded="false"
                                                    aria-controls="collapseOne">
                                                    <?php echo $articleAssociation_terms->name ?><span> <i
                                                            class="ion-plus"></i>
                                                        <i class="ion-minus"></i> </span>
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <!-- -->

                                                <div class="Accordian_content" style="display: block;">
                                                    <?php $articleAssociation_args = array("post_type" => "investor", 'fields' => 'ids', "post_status" => "publish", "posts_per_page" => -1, "orderby" => 'menu_order', "tax_query" => array(array("taxonomy" => $articleAssociation_terms->taxonomy, "field" => "id", "terms" => array($articleAssociation_terms->term_id),),));
                                                    $articleAssociation_query = new WP_Query($articleAssociation_args); ?>
                                                    <?php if ($articleAssociation_query->have_posts()) { ?>
                                                    <div class="accordian_Innercontent">
                                                        <ul class="compliances_responsive">
                                                            <?php while ($articleAssociation_query->have_posts()) {
                                                                    $articleAssociation_query->the_post() ?>
                                                            <?php $wpcfpdfurl1 = get_post_meta(get_the_ID(), 'wpcf-pdf-url', true); ?>
                                                            <li><a href="<?php echo $wpcfpdfurl1 != '' ? $wpcfpdfurl1 : 'javascript:void(0)'; ?>"
                                                                    target="_blank"> <img
                                                                        src="<?php echo get_template_directory_uri() ?>/images/pdf-icon.png"
                                                                        alt="" /> <?php the_title(); ?> </a> </li>
                                                            <?php } ?>
                                                        </ul>
                                                    </div>
                                                    <?php } ?>
                                                </div>
                                                <!-- -->


                                            </div>
                                        </div>
                                    </div>
                                    <!-- Procedure for Updation of PAN/KYC/Nomination by Physical Shareholders -->
                                    <!-- Intimation/Communication in respect of Tax Deduction at Source (TDS) on Dividend -->
                                    <?php $IntimationCommunicationTDSterms = get_term_by('id', 409, $default_taxnomy); ?>
                                    <div class="card">
                                        <div class="card-header" id="headingSeven">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapseEight" aria-expanded="false"
                                                    aria-controls="collapseEight">
                                                    <?php echo $IntimationCommunicationTDSterms->name ?><span> <i
                                                            class="ion-plus"></i>
                                                        <i class="ion-minus"></i> </span>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseEight" class="collapse" aria-labelledby="headingEight"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <!-- -->

                                                <div class="Accordian_content" style="display: block;">
                                                    <?php $IntimationCommunicationTDSargs = array("post_type" => "investor", 'fields' => 'ids', "post_status" => "publish", "posts_per_page" => -1, "orderby" => 'menu_order', "tax_query" => array(array("taxonomy" => $IntimationCommunicationTDSterms->taxonomy, "field" => "id", "terms" => array($IntimationCommunicationTDSterms->term_id),),));
                                                    $IntimationCommunicationTDSquery = new WP_Query($IntimationCommunicationTDSargs); ?>
                                                    <?php if ($IntimationCommunicationTDSquery->have_posts()) { ?>
                                                    <div class="accordian_Innercontent">
                                                        <ul class="compliances_responsive">
                                                            <?php while ($IntimationCommunicationTDSquery->have_posts()) {
                                                                    $IntimationCommunicationTDSquery->the_post() ?>
                                                            <?php $wpcfpdfurl1 = get_post_meta(get_the_ID(), 'wpcf-pdf-url', true); ?>
                                                            <li><a href="<?php echo $wpcfpdfurl1 != '' ? $wpcfpdfurl1 : 'javascript:void(0)'; ?>"
                                                                    target="_blank"> <img
                                                                        src="<?php echo get_template_directory_uri() ?>/images/pdf-icon.png"
                                                                        alt="" /> <?php the_title(); ?> </a> </li>
                                                            <?php } ?>
                                                        </ul>
                                                    </div>
                                                    <?php } ?>
                                                </div>
                                                <!-- -->


                                            </div>
                                        </div>
                                    </div>

                                    <!-- Intimation/Communication in respect of Tax Deduction at Source (TDS) on Dividend -->



                                    <!-- appointment share transfer agent -->
                                    <div class="card">
                                        <div class="card-header" id="headingOne11">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapseOne11" aria-expanded="false"
                                                    aria-controls="collapseOne11">
                                                    Appointment or Discontinuation of Share Transfer Agent. <span>
                                                </button>
                                            </h5>
                                        </div>
                                    </div>
                                    <!-- appointment share transfer agent -->

                                    <!-- <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed">
                                                    <a href="https://www.rswm.in/wp-content/uploads/2018/07/Code-of-Conduct-for-Insider-Trading-RSWM.pdf"
                                                        target="_blank">Code of Conduct for Procedure of Fair disclosure
                                                        of Unpublished Price Sensitive Information’s </a>
                                                </button>
                                            </h5>
                                        </div>

                                    </div> -->

                                    <div class="card">

                                        <div id="collapseseven" class="collapse" aria-labelledby="headingFive"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <table class="table">


                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="service-details-text-wrapper">

                        </div>
                        <div class="service-details-list-chart section-space--bottom--50">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12">
                                    <ul class="service-details-list">



                                    </ul>
                                </div>

                            </div>
                        </div>

                        <div class="service-details-text-wrapper">

                        </div>
                        <div class="service-details-list-chart section-space--bottom--80">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12">
                                    <ul class="service-details-list">


                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <?php wp_reset_postdata(); ?>
                <div class="col-lg-4 order-2 order-lg-1">
                    <!-- page sidebar -->
                    <div class="page-sidebar">

                        <!-- single sidebar widget -->
                        <div class="single-sidebar-widget">
                            <h2 class="widget-title">INVESTOR RELATIONS</h2>
                            <ul class="sidebar-category">
                                <li class="active" style="text-transform:capitalize;"><a href="">Disclosure under
                                        Regulation
                                        30<?php //echo the_title(); 
                                            ?></a></li>

                            </ul>
                        </div>





                        <!-- single sidebar widget -->
                        <div class="single-sidebar-widget">

                            <ul class="sidebar-download-items">

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- -->
<?php get_template_part('template-investors/new-footer', 'menu') ?>
<script type="text/javascript" src="<?php echo site_url() ?>/assets/js/bootstrap.min.js"></script>