<!doctype html>
<html class="no-js" lang="zxx">

<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
?>



<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>
        Laun - Laundry Service & Dry Cleaning HTML Template - Home Laundry
        Services
    </title>
    <meta name="author" content="Laun" />
    <meta
        name="description"
        content="Laun - Laundry Service & Dry Cleaning HTML Template" />
    <meta
        name="keywords"
        content="Laun - Laundry Service & Dry Cleaning HTML Template" />
    <meta name="robots" content="INDEX,FOLLOW" />

    <!-- Mobile Specific Metas -->
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <?php include_once "../css.php" ?>

    <link rel="manifest" href="<?php echo BASE_URL; ?>assets/img/favicons/manifest.json" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta
        name="msapplication-TileImage"
        content="<?php echo BASE_URL; ?>assets/img/favicons/ms-icon-144x144.png" />
    <meta name="theme-color" content="#ffffff" />

    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Archivo:wght@300;400;500;600;700;800;900&family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500;9..40,600;9..40,700;9..40,800;9..40,900&display=swap"
        rel="stylesheet" />

    <!--==============================
	    All CSS File
	============================== -->

</head>

<body>

    <?php include '../components/header.php'; ?>
    <!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper services-banner" data-bg-src="<?php echo BASE_URL; ?>assets/img/banners/Premium-Wash.webp">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title sec-title1">Premium Wash</h1>
                <ul class="breadcumb-menu">
                    <li><a href="<?php echo BASE_URL; ?>index.php">Home</a></li>
                    <li>Premium Wash</li>
                </ul>
            </div>
        </div>
    </div>

    <!--======== / Hero Section ========--><!--==============================
About Area  
==============================-->
    <!-- <div class="about-sec overflow-hidden space-top" id="about-sec"> -->
    <div class="overflow-hidden space-top" id="about-sec">
        <div class="container">
            <div class="row">

                <div class="col-xl-6">

                    <div class="title-area mb-25">
                        <span class="sub-title style1">About Service</span>
                        <h2 class="sec-title mb-20">
                            Superior Everyday Garment Care
                        </h2>
                        <p class="about-desc">
                            Our premium wash service provides deep yet gentle cleaning for your everyday clothing. We use high-quality detergents, fabric-friendly processes, and advanced washing equipment to remove dirt, sweat, and odors while protecting fabric softness and color. Each garment is handled with care and processed according to its fabric requirements. Ideal for daily wear, office attire, and casual clothing, this service ensures your garments are returned fresh, hygienic, neatly finished, and ready to wear, offering convenience without compromising on quality.
                        </p>
                    </div>

                    <!-- <div class="btn-group justify-content-start">
                        <a href="about.html" class="th-btn">More About Us</a>
                    </div> -->

                </div>

                <div class="col-xl-6">
                    <div class="img-box1">
                        <div class="img1">
                            <img src="<?php echo BASE_URL; ?>assets/img/services/premium-wash.webp" alt="About" />
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>


    <!--==============================
Faq Area
==============================-->
    <div class="space  overflow-hidden process" id="faq-sec">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-xl-12 text-center text-xl-start align-self-center">
                    <div class="">
                        <div class="title-area text-center text-xl-start">
                            <span class="sub-title style1">FAQ</span>
                            <h2 class="sec-title">Frequently Asked Have Any Questions</h2>
                        </div>
                        <div class="accordion" id="faqAccordion">


                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-1">
                                    <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">What is Premium Wash and how does it differ from standard laundry?</button>
                                </div>
                                <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Premium Wash is an advanced garment care service that uses high-quality detergents, a gentler washing process, and more detailed hand-finishing compared to standard laundry. It is ideal for semi-formal clothing, premium casual wear, and garments that need extra care without requiring full dry cleaning.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">Which clothes are best suited for Premium Wash?</button>
                                </div>
                                <div id="collapse-2" class="accordion-collapse collapse " aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Premium Wash is best suited for branded clothing, semi-formal shirts, linen garments, premium cotton wear, light ethnic wear, and any garments that are of higher value or require a cleaner, crisper finish than everyday laundry delivers.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">Does Premium Wash include ironing and finishing?</button>
                                </div>
                                <div id="collapse-3" class="accordion-collapse collapse " aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Yes. Premium Wash includes detailed finishing, which covers steam pressing or ironing to ensure garments come back crisp, neat, and ready to wear. The finishing quality is notably superior to standard laundry, reflecting the premium care applied throughout the process.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">Is Premium Wash safe for sensitive skin?</button>
                                </div>
                                <div id="collapse-4" class="accordion-collapse collapse " aria-labelledby="collapse-item-4" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Yes. The detergents used in our Premium Wash are selected for their effectiveness and fabric safety, making them suitable for people with sensitive skin. If you have a specific skin sensitivity or allergy concern, please inform us when booking so we can accommodate accordingly.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">How long does Premium Wash take?</button>
                                </div>
                                <div id="collapse-5" class="accordion-collapse collapse " aria-labelledby="collapse-item-5" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Premium Wash orders are typically ready within 48 hours of pickup. The additional care and finishing steps take slightly longer than standard laundry. If you have a deadline, please mention it when booking and we will do our best to accommodate your timing.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-6">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">Can Premium Wash remove stains effectively?</button>
                                </div>
                                <div id="collapse-6" class="accordion-collapse collapse " aria-labelledby="collapse-item-6" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Yes. Premium Wash includes stain pre-treatment as part of the process. Our specialists assess each garment individually and apply targeted stain removal before washing, improving outcomes for common stains such as food, sweat, and light oil marks.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include '../components/footer.php'; ?>