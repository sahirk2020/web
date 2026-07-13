                    <form class="row contact-form-conatct-page enquire_form" method="post"  id="enquire_form">
                        <!-- <p class="top-contact mb--20">Contac Form</p> -->
                        <?=$URLinfo;?> 
                         <div class="col-lg-6">
                            <input type="text" class="fname" name="name" placeholder="Your Name">
                        </div>
                        <div class="col-lg-6">
                            <input type="email" name="email" placeholder="Your Email">
                        </div>
                        <div class="col-lg-6">
                            <input type="tel" class="telli" name="mobile" maxlength="10"  placeholder="Your Number">
                        </div>
                        <!-- <input type="text" class="popup-form-control" id="s_schedule" aria-describedby="scheduleHelp" placeholder="Schedule Date*" readonly="" aria-label="Use the arrow keys to pick a date"> -->
                        <div class="col-lg-6">
                            <select class="form-control" name="location" aria-required="true" aria-invalid="false" data-ml-field="Flat Type">

                                <option value="">Select Your Location</option>
                                <option value="Kothrud">Kothrud</option> 
                                <option value="Aundh">Aundh</option>
                            </select>
                        </div>
                        <div class="col-lg-12">
                            <select class="form-control" name="requirement"  aria-required="true" aria-invalid="false" data-ml-field="Flat Type">

                            <option value="">Select Your Requirement</option>
                            <!-- <option value="2 BHK">2 BHK</option> 
                            <option value="3 BHK">3 BHK</option>
                            <option value="4 BHK">4 BHK</option>
                            <option value="Office Spaces">Office Spaces</option> -->
                        </select>
                        </div>
                          <div class="col-lg-12">
                            <select class="form-control" name="project"  aria-required="true" aria-invalid="false" data-ml-field="Flat Type">

                            <option value="">Select Your Project</option>
                            <!-- <option value="Yojangandha">Yojangandha</option> 
                            <option value="Lotus Shalaka">Lotus Shalaka</option>
                            <option value="Treya">Treya</option>
                            <option value="Deepak Dev">Deepak Dev</option> -->
                        </select>
                        </div>
                        <textarea class="pt-3 px-2"  name="message"  placeholder="Your message"></textarea>
                        <div id="form-messages"></div>
                        <div class="text-center pt-4">
                            <input id="term-tick" class="term-check" name="term-tick" type="checkbox" value="yes" checked> 
				            <p class="consent_tick">I authorize company representatives to contact me via Call, SMS, Email, or WhatsApp regarding its products and 
				                offers. This consent shall override any registration for DNC/NDNC. I have read and agree to the
				                <a target="_blank" href="privacy-policy.php">Privacy Policy.</a>*
                            </p>
                        </div>
                        <div class="d-flex gap-2 justify-content-center">
                            <button class="rts-btn btn-primary mt--30 enquire_now_btn" type="submit">Submit</button>
                            <button type="button" class="rts-btn btn-primary mt--30" data-bs-dismiss="modal" >Close</button>
                        </div>
                    </form>