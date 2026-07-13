<!-- scripts -->
    <script src="assets/js/vendor/jquery.min.js"></script>
    <script src="assets/js/vendor/waw.js"></script>

    <!-- gsap plugins -->
    <script src="assets/js/vendor/gsap.js"></script>
    <script src="assets/js/vendor/metismenu.js"></script>
    <script src="assets/js/plugins/scrolltiger.js"></script>
    <script src="assets/js/plugins/scrolltoplugin.js"></script>
    <!-- <script src="assets/js/plugins/smoothscroll.js"></script> -->
    <script src="assets/js/plugins/splittext.js"></script>
    <!-- gsap plugins end-->

    <script src="assets/js/vendor/magnifying-popup.js"></script>

    <!-- swiper JS 10.2.0 -->
    <script src="assets/js/plugins/swiper.js"></script>
    <script src="assets/js/plugins/counterup.js"></script>
    <script src="assets/js/vendor/waypoint.js"></script>
    <script src="assets/js/vendor/chroma.min.js"></script>
    <!-- bootstrap 5.0.2 -->
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <!-- dymanic Contact Form -->
    <script src="assets/js/plugins/contact.form.js"></script>

    <!-- main Js -->
    <script src="assets/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.8.0/pikaday.min.js"></script>
<script>
  var picker = new Pikaday({
    field: document.getElementById('s_schedule'),
    format: 'YYYY-MM-DD'
  });
</script>


<script>
    $('.fname').on('input', function() { 
        let value = $(this).val();
        let cleaned = value.replace(/[^A-Za-z ]/g, '');

        if (value !== cleaned) {
            alert("Only letters and spaces are allowed");
            // $("#nameError").text("Only letters and spaces are allowed");
            $(this).val(cleaned);
        }
    });

    $(".telli").on("input", function() {
        var value = $(this).val();
        var cleaned = value.replace(/[^0-9]/g, '');

        if (value !== cleaned) {
            alert("Only numbers are allowed");
            $(this).val(cleaned);
        }
    });

    // Enquire Now Form JS start

    $(document).on('click', '.enquire_now_btn', function(event) {
         event.preventDefault();

        var form = $(this).closest('.enquire_form');

        var name = form.find('[name="name"]').val();
        var email = form.find('[name="email"]').val();
        var mobile = form.find('[name="mobile"]').val();
        var location = form.find('[name="location"]').val();
        var requirement = form.find('[name="requirement"]').val();
        var message = form.find('[name="message"]').val();

        var source = form.find('[name="utm_source"]').val();
        var campaignname = form.find('[name="utm_campaign_name"]').val();
        var campaignid = form.find('[name="utm_campaign_id"]').val();
        var campaigncity = form.find('[name="utm_campaign_city"]').val();
        var utm_medium = form.find('[name="utm_medium"]').val();
        var utm_term = form.find('[name="utm_term"]').val();
        var utm_adid = form.find('[name="utm_adid"]').val();
        var utm_device = form.find('[name="utm_device"]').val();
        var utm_matchtype = form.find('[name="utm_matchtype"]').val();
        var utm_location = form.find('[name="utm_location"]').val();
        var gclid = form.find('[name="gclid"]').val();
        var user_id = form.find('[name="user_id"]').val();

        var patternn = /^[a-zA-Z ]*$/;
        var pattern2 = /^\d{10}$/;
        var epart1 = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (name == "" || !patternn.test(name)) {
            alert("Enter valid name");
            form.find('[name="name"]').focus().css("border", "1px solid #ff0000");
            return;
        }

        if (email == "" || !epart1.test(email)) {
            alert("Enter valid email");
            form.find('[name="email"]').focus().css("border", "1px solid #ff0000");
            return;
        }

        if (mobile == "" || !pattern2.test(mobile)) {
            alert("Enter valid mobile number");
            form.find('[name="mobile"]').focus().css("border", "1px solid #ff0000");

            return;
        }
        if (location == "") {
            alert("Select location");
            form.find('[name="location"]').focus().css("border", "1px solid #ff0000");
            return;
        }

        if (requirement == "") {
            alert("Select requirement");
            form.find('[name="requirement"]').focus().css("border", "1px solid #ff0000");
            return;
        }

        if (message == "") {
            alert("Enter your message");
            form.find('[name="message"]').focus().css("border", "1px solid #ff0000");
            return;
        }

        if (!form.find('.term-check').is(':checked')) {
            alert("Please accept terms");
            return;
        }

        // check unique
        $.ajax({
            url: 'libs/php/check_unique.php',
            type: 'POST',
            data: {
                email: email,
                mobile: mobile
            },
            dataType: 'json',
            success: function(response) {

                if (!response.isEmailUnique) {
                    alert("Email already exists");
                    return;
                }

                if (!response.isMobileUnique) {
                    alert("Mobile already exists");
                    return;
                }

                var btn = form.find('.enquire_now_btn');
                btn.html('Loading...');

                var d = new Date();
                var strDate = d.getFullYear() + "/" + (d.getMonth() + 1) + "/" + d.getDate();

                var form_name="enquire_now";

                var dataString = form.serialize() + '&strDate=' + strDate + '&form_name=' + form_name;


                $.ajax({
                    url: 'libs/php/save-lead.php',
                    type: 'POST',
                    data: dataString,
                    success: function(res) {

                        var response = jQuery.parseJSON(res);

                        btn.html('Send');

                        if (response.status == 200) {

                            // alert(response);

                            // window.dataLayer = window.dataLayer || [];

                            // dataLayer.push({

                            //     event: "generate_lead",

                            //     leadData: {

                            //         lead: {

                            //             id: response.lead_id,

                            //             name: name,

                            //             email: email,

                            //             mobile: mobile,

                            //             requirement: requirement,

                            //             form_name: "main_form",

                            //             project_name: "Nexus Genesis",

                            //             timestamp: new Date().toISOString()

                            //         },

                            //         attribution: {

                            //             user_id: user_id,

                            //             utm_source: source,

                            //             utm_medium: utm_medium,

                            //             utm_campaign: campaignid,

                            //             utm_campaign_name: campaignname,

                            //             utm_term: utm_term,

                            //             gclid: gclid,

                            //             utm_adid: utm_adid,

                            //             utm_device: utm_device,

                            //             utm_matchtype: utm_matchtype,

                            //             utm_location: utm_location

                            //         }


                            //     }

                            // });

                            window.location.replace("thank-you.php");

                        } else {
                            alert("Something went wrong");
                        }
                    }
                });

            }
        });

    });
</script>



<script>

    // schedule form js
$(document).on('click', '.schedule_now_btn', function(event) {
         event.preventDefault();

        var form = $(this).closest('.schedule_form');

        var name = form.find('[name="name"]').val();
        var email = form.find('[name="email"]').val();
        var mobile = form.find('[name="mobile"]').val();
        var scheduleDate = form.find('[name="s_schedule"]').val();
        var location = form.find('[name="location"]').val();
        var requirement = form.find('[name="requirement"]').val();
       // var message = form.find('[name="message"]').val();

        var source = form.find('[name="utm_source"]').val();
        var campaignname = form.find('[name="utm_campaign_name"]').val();
        var campaignid = form.find('[name="utm_campaign_id"]').val();
        var campaigncity = form.find('[name="utm_campaign_city"]').val();
        var utm_medium = form.find('[name="utm_medium"]').val();
        var utm_term = form.find('[name="utm_term"]').val();
        var utm_adid = form.find('[name="utm_adid"]').val();
        var utm_device = form.find('[name="utm_device"]').val();
        var utm_matchtype = form.find('[name="utm_matchtype"]').val();
        var utm_location = form.find('[name="utm_location"]').val();
        var gclid = form.find('[name="gclid"]').val();
        var user_id = form.find('[name="user_id"]').val();

        var patternn = /^[a-zA-Z ]*$/;
        var pattern2 = /^\d{10}$/;
        var epart1 = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (name == "" || !patternn.test(name)) {
            alert("Enter valid name");
            form.find('[name="name"]').focus().css("border", "1px solid #ff0000");
            return;
        }

        if (email == "" || !epart1.test(email)) {
            alert("Enter valid email");
            form.find('[name="email"]').focus().css("border", "1px solid #ff0000");
            return;
        }

        if (mobile == "" || !pattern2.test(mobile)) {
            alert("Enter valid mobile number");
            form.find('[name="mobile"]').focus().css("border", "1px solid #ff0000");

            return;
        }

        if (scheduleDate == "") {
            alert("Select schedule date");
            form.find('[name="s_schedule"]').focus().css("border", "1px solid #ff0000");
            return;
        }

        if (location == "") {
            alert("Select location");
            form.find('[name="location"]').focus().css("border", "1px solid #ff0000");
            return;
        }

        if (requirement == "") {
            alert("Select requirement");
            form.find('[name="requirement"]').focus().css("border", "1px solid #ff0000");
            return;
        }


        // if (!form.find('.term-check').is(':checked')) {
        //     alert("Please accept terms");
        //     return;
        // }

        // check unique
        $.ajax({
            url: 'libs/php/check_unique.php',
            type: 'POST',
            data: {
                email: email,
                mobile: mobile
            },
            dataType: 'json',
            success: function(response) {

                if (!response.isEmailUnique) {
                    alert("Email already exists");
                    return;
                }

                if (!response.isMobileUnique) {
                    alert("Mobile already exists");
                    return;
                }

                var btn = form.find('.schedule_now_btn');
                btn.html('Loading...');

                var d = new Date();
                var strDate = d.getFullYear() + "/" + (d.getMonth() + 1) + "/" + d.getDate();

                var form_name="scheduleform";

                var dataString = form.serialize() + '&strDate=' + strDate + '&form_name=' + form_name;

                $.ajax({
                    url: 'libs/php/save-lead.php',
                    type: 'POST',
                    data: dataString,
                    success: function(res) {

                        var response = jQuery.parseJSON(res);

                        btn.html('Send');

                        if (response.status == 200) {

                            // alert(response);

                            // window.dataLayer = window.dataLayer || [];

                            // dataLayer.push({

                            //     event: "generate_lead",

                            //     leadData: {

                            //         lead: {

                            //             id: response.lead_id,

                            //             name: name,

                            //             email: email,

                            //             mobile: mobile,

                            //             requirement: requirement,

                            //             form_name: "main_form",

                            //             project_name: "Nexus Genesis",

                            //             timestamp: new Date().toISOString()

                            //         },

                            //         attribution: {

                            //             user_id: user_id,

                            //             utm_source: source,

                            //             utm_medium: utm_medium,

                            //             utm_campaign: campaignid,

                            //             utm_campaign_name: campaignname,

                            //             utm_term: utm_term,

                            //             gclid: gclid,

                            //             utm_adid: utm_adid,

                            //             utm_device: utm_device,

                            //             utm_matchtype: utm_matchtype,

                            //             utm_location: utm_location

                            //         }


                            //     }

                            // });

                            window.location.replace("thank-you.php");

                        } else {
                            alert("Something went wrong");
                        }
                    }
                });

            }
        });

    });
</script>





<script>
// request brocher
    $(document).on('click', '.download_brochure_form_btn', function(event) {
         event.preventDefault();

        var form = $(this).closest('.download_brochure_form');

        var name = form.find('[name="name"]').val();
        var email = form.find('[name="email"]').val();
        var mobile = form.find('[name="mobile"]').val();
        var message = form.find('[name="message"]').val();

        var source = form.find('[name="utm_source"]').val();
        var campaignname = form.find('[name="utm_campaign_name"]').val();
        var campaignid = form.find('[name="utm_campaign_id"]').val();
        var campaigncity = form.find('[name="utm_campaign_city"]').val();
        var utm_medium = form.find('[name="utm_medium"]').val();
        var utm_term = form.find('[name="utm_term"]').val();
        var utm_adid = form.find('[name="utm_adid"]').val();
        var utm_device = form.find('[name="utm_device"]').val();
        var utm_matchtype = form.find('[name="utm_matchtype"]').val();
        var utm_location = form.find('[name="utm_location"]').val();
        var gclid = form.find('[name="gclid"]').val();
        var user_id = form.find('[name="user_id"]').val();

        var patternn = /^[a-zA-Z ]*$/;
        var pattern2 = /^\d{10}$/;
        var epart1 = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (name == "" || !patternn.test(name)) {
            alert("Enter valid name");
            form.find('[name="name"]').focus().css("border", "1px solid #ff0000");
            return;
        }

        if (email == "" || !epart1.test(email)) {
            alert("Enter valid email");
            form.find('[name="email"]').focus().css("border", "1px solid #ff0000");
            return;
        }

        if (mobile == "" || !pattern2.test(mobile)) {
            alert("Enter valid mobile number");
            form.find('[name="mobile"]').focus().css("border", "1px solid #ff0000");

            return;
        }
       

        if (message == "") {
            alert("Enter your message");
            form.find('[name="message"]').focus().css("border", "1px solid #ff0000");
            return;
        }

        if (!form.find('.term-check').is(':checked')) {
            alert("Please accept terms");
            return;
        }

        // check unique
        $.ajax({
            url: 'libs/php/check_unique.php',
            type: 'POST',
            data: {
                email: email,
                mobile: mobile
            },
            dataType: 'json',
            success: function(response) {

                if (!response.isEmailUnique) {
                    alert("Email already exists");
                    return;
                }

                if (!response.isMobileUnique) {
                    alert("Mobile already exists");
                    return;
                }

                var btn = form.find('.download_brochure_form_btn');
                btn.html('Loading...');

                var d = new Date();
                var strDate = d.getFullYear() + "/" + (d.getMonth() + 1) + "/" + d.getDate();

                var dataString = form.serialize() + '&strDate=' + strDate;

                $.ajax({
                    url: 'libs/php/download-brochure.php',
                    type: 'POST',
                    data: dataString,
                    success: function(res) {

                        var response = jQuery.parseJSON(res);

                        btn.html('Send');

                        if (response.status == 200) {

                            // alert(response);

                            // window.dataLayer = window.dataLayer || [];

                            // dataLayer.push({

                            //     event: "generate_lead",

                            //     leadData: {

                            //         lead: {

                            //             id: response.lead_id,

                            //             name: name,

                            //             email: email,

                            //             mobile: mobile,

                            //             requirement: requirement,

                            //             form_name: "main_form",

                            //             project_name: "Nexus Genesis",

                            //             timestamp: new Date().toISOString()

                            //         },

                            //         attribution: {

                            //             user_id: user_id,

                            //             utm_source: source,

                            //             utm_medium: utm_medium,

                            //             utm_campaign: campaignid,

                            //             utm_campaign_name: campaignname,

                            //             utm_term: utm_term,

                            //             gclid: gclid,

                            //             utm_adid: utm_adid,

                            //             utm_device: utm_device,

                            //             utm_matchtype: utm_matchtype,

                            //             utm_location: utm_location

                            //         }


                            //     }

                            // });

                            window.location.replace("thank-you.php");

                        } else {
                            alert("Something went wrong");
                        }
                    }
                });

            }
        });

    });
</script>
<script>
// dynamic requirement and project dropdowns
$(document).on('change', 'select[name="location"]', function () {

    var $form = $(this).closest('form');
    var location = $(this).val();

    var $requirement = $form.find('select[name="requirement"]');
    var $project = $form.find('select[name="project"]');

    var requirementOptions = {
        "Kothrud": ["2 BHK", "3 BHK", "4 BHK"],
        "Aundh": ["Commercial Spaces"]
    };

    $requirement.html('<option value="">Select Your Requirement</option>');
    $project.html('<option value="">Select Your Project</option>');

    if (requirementOptions[location]) {
        $.each(requirementOptions[location], function (i, value) {
            $requirement.append('<option value="' + value + '">' + value + '</option>');
        });
    }

});

$(document).on('change', 'select[name="requirement"]', function () {

    var $form = $(this).closest('form');
    var location = $form.find('select[name="location"]').val();
    var requirement = $(this).val();

    var $project = $form.find('select[name="project"]');

    var projectMap = {
        "Kothrud": {
            "2 BHK": ["Yojangandha", "Treya"],
            "3 BHK": ["Yojangandha", "Treya"],
            "4 BHK": ["Yojangandha", "Treya"]
        },
        "Aundh": {
            "Commercial Spaces": ["Lotus Shalaka", "Deepak Dev"]   
        }
    };

    $project.html('<option value="">Select Your Project</option>');

    if (projectMap[location] && projectMap[location][requirement]) {
        $.each(projectMap[location][requirement], function (i, value) {
            $project.append('<option value="' + value + '">' + value + '</option>');
        });
    }

});
</script>




<script>
    
    //contact form js
    $(document).on('click', '.contact_form_btn', function(event) {
         event.preventDefault();

        var form = $(this).closest('.contact-form');

        var name = form.find('[name="name"]').val();
        var email = form.find('[name="email"]').val();
        var mobile = form.find('[name="mobile"]').val();
        var requirement = form.find('[name="requirement"]').val();
        var project = form.find('[name="project"]').val();
        var message = form.find('[name="message"]').val();

        var source = form.find('[name="utm_source"]').val();
        var campaignname = form.find('[name="utm_campaign_name"]').val();
        var campaignid = form.find('[name="utm_campaign_id"]').val();
        var campaigncity = form.find('[name="utm_campaign_city"]').val();
        var utm_medium = form.find('[name="utm_medium"]').val();
        var utm_term = form.find('[name="utm_term"]').val();
        var utm_adid = form.find('[name="utm_adid"]').val();
        var utm_device = form.find('[name="utm_device"]').val();
        var utm_matchtype = form.find('[name="utm_matchtype"]').val();
        var utm_location = form.find('[name="utm_location"]').val();
        var gclid = form.find('[name="gclid"]').val();
        var user_id = form.find('[name="user_id"]').val();

        var patternn = /^[a-zA-Z ]*$/;
        var pattern2 = /^\d{10}$/;
        var epart1 = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    

        if (name == "" || !patternn.test(name)) {
            alert("Enter valid name");
            form.find('[name="name"]').focus().css("border", "1px solid #ff0000");
            return;
        }

        if (email == "" || !epart1.test(email)) {
            alert("Enter valid email");
            form.find('[name="email"]').focus().css("border", "1px solid #ff0000");
            return;
        }

        if (mobile == "" || !pattern2.test(mobile)) {
            alert("Enter valid mobile number");
            form.find('[name="mobile"]').focus().css("border", "1px solid #ff0000");

            return;
        }
       

        if (message == "") {
            alert("Enter your message");
            form.find('[name="message"]').focus().css("border", "1px solid #ff0000");
            return;
        }


        // check unique
        $.ajax({
            url: 'libs/php/check_unique.php',
            type: 'POST',
            data: {
                email: email,
                mobile: mobile
            },
            dataType: 'json',
            success: function(response) {

                if (!response.isEmailUnique) {
                    alert("Email already exists");
                    return;
                }

                if (!response.isMobileUnique) {
                    alert("Mobile already exists");
                    return;
                }

                var btn = form.find('.contact_form_btn');
                btn.html('Loading...');

                var d = new Date();
                var strDate = d.getFullYear() + "/" + (d.getMonth() + 1) + "/" + d.getDate();

                var form_name="contact_form";

                var dataString = form.serialize() + '&strDate=' + strDate + '&form_name=' + form_name;


                $.ajax({
                    url: 'libs/php/save-lead.php',
                    type: 'POST',
                    data: dataString,
                    success: function(res) {

                        var response = jQuery.parseJSON(res);

                        btn.html('Send');

                        if (response.status == 200) {

                            // alert(response);

                            // window.dataLayer = window.dataLayer || [];

                            // dataLayer.push({

                            //     event: "generate_lead",

                            //     leadData: {

                            //         lead: {

                            //             id: response.lead_id,

                            //             name: name,

                            //             email: email,

                            //             mobile: mobile,

                            //             requirement: requirement,

                            //             form_name: "contact_form",

                            //             project_name: "Nexus Genesis",

                            //             timestamp: new Date().toISOString()

                            //         },

                            //         attribution: {

                            //             user_id: user_id,

                            //             utm_source: source,

                            //             utm_medium: utm_medium,

                            //             utm_campaign: campaignid,

                            //             utm_campaign_name: campaignname,

                            //             utm_term: utm_term,

                            //             gclid: gclid,

                            //             utm_adid: utm_adid,

                            //             utm_device: utm_device,

                            //             utm_matchtype: utm_matchtype,

                            //             utm_location: utm_location

                            //         }


                            //     }

                            // });

                            window.location.replace("thank-you.php");

                        } else {
                            alert("Something went wrong");
                        }
                    }
                });

            }
        });

    });
</script>


<script>
    
    //carrear form js
    $(document).on('click', '.career_apply_btn', function(event) {
         event.preventDefault();

        var form = $(this).closest('.careers-form');

        var name = form.find('[name="name"]').val();
        var email = form.find('[name="email"]').val();
        var mobile = form.find('[name="mobile"]').val();
        // var requirement = form.find('[name="requirement"]').val();
        // var project = form.find('[name="project"]').val();
        // var message = form.find('[name="message"]').val();
        var position = form.find('[name="position"]').val();
        var resume = form.find('[name="resume"]').val();

        var source = form.find('[name="utm_source"]').val();
        var campaignname = form.find('[name="utm_campaign_name"]').val();
        var campaignid = form.find('[name="utm_campaign_id"]').val();
        var campaigncity = form.find('[name="utm_campaign_city"]').val();
        var utm_medium = form.find('[name="utm_medium"]').val();
        var utm_term = form.find('[name="utm_term"]').val();
        var utm_adid = form.find('[name="utm_adid"]').val();
        var utm_device = form.find('[name="utm_device"]').val();
        var utm_matchtype = form.find('[name="utm_matchtype"]').val();
        var utm_location = form.find('[name="utm_location"]').val();
        var gclid = form.find('[name="gclid"]').val();
        var user_id = form.find('[name="user_id"]').val();

        var patternn = /^[a-zA-Z ]*$/;
        var pattern2 = /^\d{10}$/;
        var epart1 = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    

        if (name == "" || !patternn.test(name)) {
            alert("Enter valid name");
            form.find('[name="name"]').focus().css("border", "1px solid #ff0000");
            return;
        }

        if (email == "" || !epart1.test(email)) {
            alert("Enter valid email");
            form.find('[name="email"]').focus().css("border", "1px solid #ff0000");
            return;
        }

        if (mobile == "" || !pattern2.test(mobile)) {
            alert("Enter valid mobile number");
            form.find('[name="mobile"]').focus().css("border", "1px solid #ff0000");

            return;
        }
       

        if (position == "") {
            alert("Enter your position");
            form.find('[name="position"]').focus().css("border", "1px solid #ff0000");
            return;
        }


        // check unique
        $.ajax({
            url: 'libs/php/check_unique.php',
            type: 'POST',
            data: {
                email: email,
                mobile: mobile
            },
            dataType: 'json',
            success: function(response) {

                if (!response.isEmailUnique) {
                    alert("Email already exists");
                    return;
                }

                if (!response.isMobileUnique) {
                    alert("Mobile already exists");
                    return;
                }

                var btn = form.find('.career_apply_btn');
                btn.html('Loading...');

                var d = new Date();
                var strDate = d.getFullYear() + "/" + (d.getMonth() + 1) + "/" + d.getDate();

                var form_name="careers_form";

                var dataString = form.serialize() + '&strDate=' + strDate + '&form_name=' + form_name;


                $.ajax({
                    url: 'libs/php/application.php',
                    type: 'POST',
                    data: dataString,
                    success: function(res) {

                        var response = jQuery.parseJSON(res);

                        btn.html('Send');

                        if (response.status == 200) {

                            // alert(response);

                            // window.dataLayer = window.dataLayer || [];

                            // dataLayer.push({

                            //     event: "generate_lead",

                            //     leadData: {

                            //         lead: {

                            //             id: response.lead_id,

                            //             name: name,

                            //             email: email,

                            //             mobile: mobile,

                            //             requirement: requirement,

                            //             form_name: "careers_form",

                            //             project_name: "Nexus Genesis",

                            //             timestamp: new Date().toISOString()

                            //         },

                            //         attribution: {

                            //             user_id: user_id,

                            //             utm_source: source,

                            //             utm_medium: utm_medium,

                            //             utm_campaign: campaignid,

                            //             utm_campaign_name: campaignname,

                            //             utm_term: utm_term,

                            //             gclid: gclid,

                            //             utm_adid: utm_adid,

                            //             utm_device: utm_device,

                            //             utm_matchtype: utm_matchtype,

                            //             utm_location: utm_location

                            //         }


                            //     }

                            // });

                            window.location.replace("thank-you.php");

                        } else {
                            alert("Something went wrong");
                        }
                    }
                });

            }
        });

    });
</script>