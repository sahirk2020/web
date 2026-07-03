                    <form class="row contact-form-conatct-page" method="post" action="mailer.php" id="contact-form">
                        <!-- <p class="top-contact mb--20">Contac Form</p> -->
                         <div class="col-lg-6">
                            <input type="text" name="name" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="col-lg-6">
                            <input type="email" name="email" id="email" placeholder="Your Email" required>
                        </div>
                        <div class="col-lg-6">
                            <input type="tel" name="phone" id="phone" placeholder="Your Number" required>
                        </div>
                        <!-- <input type="text" class="popup-form-control" id="s_schedule" aria-describedby="scheduleHelp" placeholder="Schedule Date*" readonly="" aria-label="Use the arrow keys to pick a date"> -->
                        <div class="col-lg-6">
                            <select class="form-control" name="location" id="location" aria-required="true" aria-invalid="false" data-ml-field="Flat Type">

                                <option value="">Select Your Location</option>
                                <option value="Kothrud">Kothrud</option> 
                                <option value="Aundh">Aundh</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <select class="form-control" name="requirement" id="requirement" aria-required="true" aria-invalid="false" data-ml-field="Flat Type">

                            <option value="">Select Your Requirement</option>
                            <option value="2 BHK">2 BHK</option> 
                            <option value="3 BHK">3 BHK</option>
                            <option value="4 BHK">4 BHK</option>
                            <option value="Office Spaces">Office Spaces</option>
                        </select>
                        </div>
                        <textarea class="pt-3 px-2"  name="message" id="message" placeholder="Your message"></textarea>
                        <div id="form-messages"></div>
                        <div class="text-center pt-4">
                            <input id="term-tick" name="term-tick" type="checkbox" value="yes"> 
				            <p class="consent_tick">I authorize company representatives to contact me via Call, SMS, Email, or WhatsApp regarding its products and 
				                offers. This consent shall override any registration for DNC/NDNC. I have read and agree to the
				                <a target="_blank" href="privacy-policy.php">Privacy Policy.</a>*
                            </p>
                        </div>
                        <div class="d-flex gap-2 justify-content-center">
                            <button class="rts-btn btn-primary mt--30" type="submit">Submit</button>
                            <button type="button" class="rts-btn btn-primary mt--30" data-bs-dismiss="modal" >Close</button>
                        </div>
                    </form>