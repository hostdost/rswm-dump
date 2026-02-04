<?php $qj = get_queried_object(); ?>


<div class="forBusibess edgeForBusibess" id="businessenquiries">  
    <h3>For Business Enquiries</h3>
   <!--h2> You can call us at <a href="tel:+91-120-4390300">+91-120-4390300</a> or email us at <a href="mailto:info.rswm@lnjbhilwara.com">info.rswm@lnjbhilwara.com</a></h2-->
    <form method="post" name="enquire" id="enquire">
        <div class="newform-group form-fields">
            <input type="text" id="name" name="name" placeholder="name" class="isvalid"/>
        </div>
        
        <div class="newform-group form-fields">
        <input type="text" id="phone" name="phone" placeholder="phone number" class="isvalid"/>
        </div>
        
        <div class="newform-group form-fields">    
        <input type="text" id="email" name="email" placeholder="email address" class="isvalid"/>
        </div>
        <div class="newform-group form-fields">
        <input type="text" id="company" name="company" placeholder="company" class="isvalid"/>
        </div>

        <div class="newform-group form-fields">
          <input type="text" id="target_state" name="target_state" placeholder="Target State"/>
        </div>

        <div class="newform-group form-fields">
		  <input type="text" id="target_market_location" name="target_market_location" placeholder="Target Country"/>
        </div>
        
        <div class="newform-group">
        <textarea name="message" placeholder="message"></textarea>
        </div> 
        <div class="newform-group">
        <input type="hidden" name="action" value="enquire_form_submission">
        <input type="hidden" name="post_id" value="<?php echo $qj->ID ?>">
        </div>
        <div class="newform-group">
        <div class="business-enquires-text" style="width: 59%;margin: 25px auto;">
        </div>
        </div>
		<!-- set captcha -->		
        <div class="newform-group">
         <div class="g-recaptcha" data-sitekey="6LfOtsYZAAAAAB9N4mqthsvmpZ-cxltQGlbEVwMh" data-callback="verifyCaptcha"></div>
        </div>	
        <div id="g-recaptcha-error"></div>		
        <!--/ set captcha -->		
        <div class="newform-group">
        <button id="submit_btn">Submit</button>
        </div>
    </form>
    <div class="responsive"></div>
</div>  






