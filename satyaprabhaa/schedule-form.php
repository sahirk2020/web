<form class="contact-form-conatct-page schedule_form" method="post" id="schedule_form">
    <?=$URLinfo;?>
                        <!-- <p class="top-contact mb--20">Contac Form</p> -->
                        <input type="text" name="name"  placeholder="Your Name" required>
                        <input type="email" name="email"  placeholder="Your Email" required>
                        <input type="tel" name="mobile" placeholder="Your Number" required>
                        <input type="date" class="popup-form-control" name="s_schedule" aria-describedby="scheduleHelp" placeholder="Schedule Date" aria-label="Use the arrow keys to pick a date">
                        
                        <select class="form-control" name="location"  aria-required="true" aria-invalid="false" data-ml-field="Flat Type">

                            <option value="">Select Your Location</option>
                            <option value="Kothrud">Kothrud</option> 
                            <option value="Aundh">Aundh</option>
                        </select>
                        <select class="form-control" name="requirement"  aria-required="true" aria-invalid="false" data-ml-field="Flat Type">

                            <option value="">Select Your Requirement</option>
                            <!-- <option value="2 BHK">2 BHK</option> 
                            <option value="3 BHK">3 BHK</option>
                            <option value="4 BHK">4 BHK</option>
                            <option value="Office Spaces">Office Spaces</option> -->
                        </select>

                        <select class="form-control" name="project"  aria-required="true" aria-invalid="false" data-ml-field="Flat Type">

                            <option value="">Select Your Project</option>
                            <!-- <option value="Yojangandha">Yojangandha</option> 
                            <option value="Lotus Shalaka">Lotus Shalaka</option>
                            <option value="Treya">Treya</option>
                            <option value="Deepak Dev">Deepak Dev</option> -->
                        </select>
                        <!-- <textarea name="message" id="message" placeholder="Your message"></textarea>
                        <div id="form-messages"></div> -->
                        <div class="d-flex gap-2 justify-content-center">
                        <button class="rts-btn btn-primary mt--30 schedule_now_btn" type="submit">Submit</button>
                        <button type="button" class="rts-btn btn-primary mt--30" data-bs-dismiss="modal" >Close</button>
                    </form>