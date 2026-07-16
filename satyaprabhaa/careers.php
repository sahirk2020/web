<?php include 'libs/php/tracking.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php

$page_title = "Careers at Satyaprabhaa | Real Estate Jobs in Pune";
$page_description = "Join the Satyaprabhaa team in Pune. We are looking for dedicated professionals in real estate, construction, sales and operations. Explore open roles.";
?>
    <?php include 'css.php'; ?>
</head>

<body>
    <!-- header three area start -->
    <?php include 'header.php'; ?>
    <!-- header three area end -->
     <!-- bread croumba rea start -->
    <div class="breadcrumb-area-bg bg_image bg_image_careers">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bread-crumb-area-inner">
                        <div class="breadcrumb-top">
                            <a href="#">Home</a> /
                            <a class="active" href="#">Careers</a>
                        </div>
                        <div class="bottom-title">
                            <h1 class="title">Careers</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bread croumba rea end -->

    <!-- why choose us section start -->
    <!-- <div class="rts-section-gap why-chooseus-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 pr--120 pr_sm--0">
                    <div class="why-choose-us-left-two">
                        <div class="title-left-style-two">
                            <div class="pre-title">
                                <span class="pre-title">Legacy</span>
                            </div>
                            <h2 class="title quote">
                               A Legacy of Design-Led <br>Development
                            </h2>
                        </div>
                        <p class="disc">
                            Lotus Landmarks brings a deep understanding of how spaces shape the way people live and work. Spanning both residential and commercial developments, we combine design sensibility with execution expertise to create beautiful, enduring environments—delivered with consistency, quality, and care.
                        </p>
                    </div>
                </div>
                <div class="col-lg-5 mt_sm--50">
                    <div class="thumbnail-about-one rts-reveal-one">
                        <img class="rts-reveal-image-one" src="assets/images/about/about-us.webp" alt="about">
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- why choose us section end -->
     
     <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="title-style-center">
                        <h2 class="title">Current Openings</h2>
                        <p class="disc">
                            Join our team and be part of a dynamic and innovative company that values creativity, collaboration, and growth. We are currently looking for talented individuals to fill the following positions:
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="job-card d-flex justify-content-between">
                        <div >
                        <h4 class="mb-0">Sales Executive</h4>
                            <div class="info-item mt-2">
                                <!-- <h6 class="mb-0"></h6> -->
                                <small>Exp: 3 to 4 years</small>
                            </div>
                        </div>
                        <div class="">
                            <button class="btn btn-dark w-100"
                                data-title="Sales Executive "
                                data-bs-toggle="modal"
                                data-bs-target="#applyModal">
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="job-card d-flex justify-content-between">
                        <div >
                        <h4 class="mb-0">Team Leader – Commercial Sales </h4>
                            <div class="info-item mt-2">
                                <!-- <h6 class="mb-0"></h6> -->
                                <small>Exp: 6 to 5 years</small>
                            </div>
                        </div>
                        <div class="">
                            <button class="btn btn-dark w-100"
                                data-title="Team Leader – Commercial Sales "
                                data-bs-toggle="modal"
                                data-bs-target="#applyModal">
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>

</section>

<div class="modal fade" id="applyModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h4>Apply Now</h4>
                <button class="btn-close"
                    data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">

                <form class="careers-form" method="post" enctype="multipart/form-data">
               <?= $URLinfo; ?>
                    <input type="text"
                        class="form-control mb-3 fname" name="name"
                        placeholder="Full Name">

                    <input type="email"
                        class="form-control mb-3" name="email"
                        placeholder="Email Address">

                    <input type="tel"
                        class="form-control mb-3 telli" name="mobile" maxlength="10" pattern="[0-9]{10}" required
                        placeholder="Mobile Number">

                    <input
    type="text"
    id="position"
    name="position"
    class="form-control"
    readonly>

                    <input type="file"
                        class="form-control mb-3" name="resume" accept=".pdf,.doc,.docx">

                    <button class="btn btn-dark w-100 career_apply_btn" type="submit" name="submit_application">
                        Submit Application
                    </button>

                </form>

            </div>

        </div>
    </div>
</div>
    <!-- rts footer area start -->
    <?php include 'footer.php'; ?>
    <!-- rts footer area end -->


    <div class="grid-line">
        <div class="grid-lines">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </div>

    
    <!-- start loader -->
    <!-- <div class="loader-wrapper">
    <div class="loader">
    </div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div> -->
    <!-- End loader -->


    <div id="anywhere-home">
    </div>

    <?php include 'js.php'; ?>
    <script>
const applyModal = document.getElementById('applyModal');

applyModal.addEventListener('show.bs.modal', function (event) {

    const button = event.relatedTarget;

    const jobTitle = button.getAttribute('data-title');

    const positionField = applyModal.querySelector('#position');

    positionField.value = jobTitle;
});
</script>

</body>

</html>