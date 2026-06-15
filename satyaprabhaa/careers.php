<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Innovat Architecture HTML Template</title>
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
    <div class="rts-section-gap why-chooseus-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 pr--120 pr_sm--0">
                    <!-- why chooseus section start -->
                    <div class="why-choose-us-left-two">
                        <div class="title-left-style-two">
                            <div class="pre-title">
                                <span class="pre-title">Legacy</span>
                                <!-- <img src="assets/images/service/07.png" alt="service"> -->
                            </div>
                            <h2 class="title quote">
                               A Legacy of Design-Led <br>Development
                            </h2>
                        </div>
                        <p class="disc">
                            Lotus Landmarks brings a deep understanding of how spaces shape the way people live and work. Spanning both residential and commercial developments, we combine design sensibility with execution expertise to create beautiful, enduring environments—delivered with consistency, quality, and care.
                        </p>
                    </div>
                    <!-- why chooseus section end -->
                </div>
                <div class="col-lg-5 mt_sm--50">
                    <div class="thumbnail-about-one rts-reveal-one">
                        <img class="rts-reveal-image-one" src="assets/images/about/about-us.webp" alt="about">
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                        <h4 class="mb-0">Frontend Developer</h4>
                        <div class="">
                            <button class="btn btn-dark"
                                data-bs-toggle="modal"
                                data-bs-target="#jobModal"
                                data-title="Frontend Developer"
                                data-exp="2 - 4 Years"
                                data-location="Pune"
                                data-type="Full Time"
                                data-jd="#jd1">
                                View Details
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="job-card d-flex justify-content-between">
                        <h4  class="mb-0">WordPress Developer</h4>
                        <div class="">
                            <button class="btn btn-dark"
                                data-bs-toggle="modal"
                                data-bs-target="#jobModal"
                                data-title="WordPress Developer"
                                data-exp="1 - 3 Years"
                                data-location="Mumbai"
                                data-type="Full Time"
                                data-jd="#jd2">
                                View Details
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="job-card d-flex justify-content-between">
                           <div>     
                        <h4 class="">UI/UX Designer</h4></div>
                        <div class="">
                            <button class="btn btn-dark"
                                data-bs-toggle="modal"
                                data-bs-target="#jobModal"
                                data-title="UI/UX Designer"
                                data-exp="2+ Years"
                                data-location="Remote"
                                data-type="Permanent"
                                data-jd="#jd3">
                                View Details
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 ">
                    <div class="job-card d-flex justify-content-between">
                        <h4 class="mb-0">Digital Marketing Executive</h4>
                        <div class="">
                            <button class="btn btn-dark"
                                data-bs-toggle="modal"
                                data-bs-target="#jobModal"
                                data-title="Digital Marketing Executive"
                                data-exp="1 - 2 Years"
                                data-location="Pune"
                                data-type="Full Time"
                                data-jd="#jd4">
                                View Details
                            </button>
                        </div>
                    </div>
                </div>
            </div>

<!-- Frontend Developer -->
<div id="jd1" class="d-none">
    <h5>Job Overview</h5>
    <p>Develop responsive and modern websites using HTML, CSS, JavaScript and Bootstrap.</p>

    <h5>Responsibilities</h5>
    <ul>
        <li>Create responsive web pages.</li>
        <li>Develop interactive animations.</li>
        <li>Optimize website performance.</li>
    </ul>

    <h5>Requirements</h5>
    <ul>
        <li>HTML5, CSS3, JavaScript.</li>
        <li>Bootstrap knowledge.</li>
        <li>GSAP experience is a plus.</li>
    </ul>
</div>

<!-- WordPress Developer -->
<div id="jd2" class="d-none">
    <h5>Job Overview</h5>
    <p>Build and maintain WordPress websites with Elementor and WooCommerce.</p>

    <h5>Responsibilities</h5>
    <ul>
        <li>Develop custom WordPress themes.</li>
        <li>Manage WooCommerce stores.</li>
        <li>Website maintenance and updates.</li>
    </ul>

    <h5>Requirements</h5>
    <ul>
        <li>WordPress expertise.</li>
        <li>Elementor & WooCommerce.</li>
        <li>Basic PHP knowledge.</li>
    </ul>
</div>

<!-- UI UX Designer -->
<div id="jd3" class="d-none">
    <h5>Job Overview</h5>
    <p>Create user-centered interfaces and engaging digital experiences.</p>

    <h5>Responsibilities</h5>
    <ul>
        <li>Create wireframes and prototypes.</li>
        <li>Design mobile and web interfaces.</li>
        <li>Work closely with developers.</li>
    </ul>

    <h5>Requirements</h5>
    <ul>
        <li>Figma expertise.</li>
        <li>Strong design portfolio.</li>
        <li>UI/UX fundamentals.</li>
    </ul>
</div>

<!-- Digital Marketing -->
<div id="jd4" class="d-none">
    <h5>Job Overview</h5>
    <p>Plan and execute digital marketing campaigns across multiple channels.</p>

    <h5>Responsibilities</h5>
    <ul>
        <li>Manage SEO and SEM campaigns.</li>
        <li>Social media marketing.</li>
        <li>Generate leads and traffic.</li>
    </ul>

    <h5>Requirements</h5>
    <ul>
        <li>Google Ads knowledge.</li>
        <li>SEO experience.</li>
        <li>Analytical mindset.</li>
    </ul>
</div>
            </div>
        </div>
</section>

<div class="modal fade" id="jobModal" tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <div>
                    <span class="badge bg-dark mb-2" id="jobType"></span>
                    <h2 id="jobTitle"></h2>
                </div>

                <button class="btn-close"
                    data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">

                <div class="row">

                    <div class="col-lg-4">
                        <div class="border rounded p-4">

                            <div class="info-item">
                                <small>Experience</small>
                                <h6 id="jobExp"></h6>
                            </div>

                            <div class="mb-3">
                                <small>Location</small>
                                <h6 id="jobLocation"></h6>
                            </div>

                            <div class="mb-4">
                                <small>Employment Type</small>
                                <h6 id="jobType2"></h6>
                            </div>

                            <button class="btn btn-dark w-100"
                                data-bs-toggle="modal"
                                data-bs-target="#applyModal">
                                Apply Now
                            </button>

                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div id="jobDescription"></div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="applyModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h4>Apply Now</h4>
                <button class="btn-close"
                    data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">

                <form>

                    <input type="text"
                        class="form-control mb-3"
                        placeholder="Full Name">

                    <input type="email"
                        class="form-control mb-3"
                        placeholder="Email Address">

                    <input type="tel"
                        class="form-control mb-3"
                        placeholder="Mobile Number">

                    <input type="text"
                        id="applyRole"
                        class="form-control mb-3"
                        readonly>

                    <input type="file"
                        class="form-control mb-3">

                    <button class="btn btn-dark w-100">
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
const jobModal = document.getElementById('jobModal');

jobModal.addEventListener('show.bs.modal', function (event) {

    const button = event.relatedTarget;

    document.getElementById('jobTitle').innerText =
        button.dataset.title;

    document.getElementById('jobExp').innerText =
        button.dataset.exp;

    document.getElementById('jobLocation').innerText =
        button.dataset.location;

    document.getElementById('jobType').innerText =
        button.dataset.type;

    document.getElementById('jobType2').innerText =
        button.dataset.type;

    document.getElementById('applyRole').value =
        button.dataset.title;

    document.getElementById('jobDescription').innerHTML =
        document.querySelector(button.dataset.jd).innerHTML;
});
</script>

</body>

</html>