<form class="contact-form-conatct-page row download_brochure_form" method="post" id="contact-form">

<?= $URLinfo; ?>
<input type="hidden" name="project" value="">
<input type="hidden" name="requirement" value="Download Brochure">
                        <!-- <p class="top-contact mb--20">Contac Form</p> -->
                         <div class="col-md-12">
                            <input class="px-2" type="text" name="name" placeholder="Your Name" required>
                        </div>
                        <div class="col-md-6">
                            <input class="px-2" type="email" name="email"  placeholder="Your Email" required>
                        </div>
                        <div class="col-md-6">
                            <input class="px-2" type="tel" maxlength="10" name="mobile"  placeholder="Your Number" required>
                        </div>
                        <!-- <input type="text" class="popup-form-control" id="s_schedule" aria-describedby="scheduleHelp" placeholder="Schedule Date*" readonly="" aria-label="Use the arrow keys to pick a date"> -->
                        <div class="col-md-12">
                            <textarea class="px-2" name="message"  placeholder="Your message"></textarea>
                        </div>
                        <div id="form-messages"></div>
                        <div class="text-center"><input id="term-check" class="term-check" name="term-tick" type="checkbox" value="yes" checked> 
				  <span class="consent_tick">I authorize company representatives to contact me via Call, SMS, Email, or WhatsApp regarding its products and 
				  offers. This consent shall override any registration for DNC/NDNC. I have read and agree to the
				  <a target="_blank" href="privacy-policy.php">Privacy Policy.</a>*</span>

                 </div>
                        <div class="d-flex gap-2 justify-content-center">
                        <button class="rts-btn btn-primary mt--30 download_brochure_form_btn" type="submit">Submit</button>
                        <button type="button" class="rts-btn btn-primary mt--30" data-bs-dismiss="modal" >Close</button>
                    </form>