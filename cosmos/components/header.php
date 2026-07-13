<?php
// include_once __DIR__ . '/../libs/php/tracking.php';
include_once __DIR__ . '/db.php';

$user_id = '';
$source         = $_GET['utm_source'] ?? 'Organic Lead';
$capaignname    = $_GET['utm_campaign_name'] ?? 'Search';
$capaignid      = $_GET['utm_campaign_id'] ?? 'Website';

$capaigncity    = $_GET['utm_campaign_city'] ?? 'Pune';
$capaignstate   = $_GET['utm_campaign_state'] ?? 'Maharashtra';

$utm_medium     = $_GET['utm_medium'] ?? '';
$utm_term       = $_GET['utm_term'] ?? '';
$utm_adid       = $_GET['utm_adid'] ?? '';
$utm_device     = $_GET['utm_device'] ?? '';
$utm_matchtype  = $_GET['utm_matchtype'] ?? '';
$utm_location   = $_GET['utm_location'] ?? '';
$gclid          = $_GET['gclid'] ?? '';

$URLinfo = "
<input type='hidden' id='user_id' name='user_id' value='$user_id' />
<input type='hidden' id='utm_source' name='utm_source' value='$source' />
<input type='hidden' id='utm_medium' name='utm_medium' value='$utm_medium' />
<input type='hidden' id='utm_campaign_name' name='utm_campaign_name' value='$capaignname' />
<input type='hidden' id='utm_campaign_id' name='utm_campaign_id' value='$capaignid' />
<input type='hidden' id='utm_campaign_city' name='utm_campaign_city' value='$capaigncity' />
<input type='hidden' id='utm_campaign_state' name='utm_campaign_state' value='$capaignstate' />
<input type='hidden' id='utm_term' name='utm_term' value='$utm_term' />
<input type='hidden' id='utm_adid' name='utm_adid' value='$utm_adid' />
<input type='hidden' id='utm_device' name='utm_device' value='$utm_device' />
<input type='hidden' id='utm_matchtype' name='utm_matchtype' value='$utm_matchtype' />
<input type='hidden' id='utm_location' name='utm_location' value='$utm_location' />
<input type='hidden' id='gclid' name='gclid' value='$gclid' />
";

?>
<!--==============================
    Mobile Menu
  ============================== -->
<div class="th-menu-wrapper">
    <div class="th-menu-area text-center">
        <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
            <a href="<?php echo BASE_URL; ?>index.php"><img class="w-75" src="<?php echo BASE_URL; ?>assets/img/cosmos-laundry-logo.svg" alt="Cosmos"></a>
        </div>
        <div class="th-mobile-menu">
            <ul>
                <li>
                    <a href="<?php echo BASE_URL; ?>index.php">Home</a>
                </li>
                <li><a href="<?php echo BASE_URL; ?>about.php">About Us</a></li>

                <li class="menu-item-has-children">
                    <a href="<?php echo BASE_URL; ?>services.php">Services</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo BASE_URL; ?>services/laundry-service.php">Laundry Services</a></li>
                        <li><a href="<?php echo BASE_URL; ?>services/dry-cleaning.php">Dry Cleaning</a></li>
                        <li><a href="<?php echo BASE_URL; ?>services/premium-wash.php">Premium Wash</a></li>
                        <li><a href="<?php echo BASE_URL; ?>services/steam-ironing.php">Steam Ironing</a></li>
                        <li><a href="<?php echo BASE_URL; ?>services/shoe-cleaning.php">Shoe Cleaning</a></li>
                        <li><a href="<?php echo BASE_URL; ?>services/leather-&-bag-cleaning.php">Leather & Bag Cleaning</a></li>
                        <li><a href="<?php echo BASE_URL; ?>services/leather-jacket-cleaning.php">Leather Jacket Cleaning</a></li>
                        <li><a href="<?php echo BASE_URL; ?>services/traveling-bag-cleaning.php">Traveling Bag Cleaning</a></li>
                        <li><a href="<?php echo BASE_URL; ?>services/carpet-cleaning.php">Carpet Cleaning</a></li>
                        <li><a href="<?php echo BASE_URL; ?>services/sofa-cleaning.php">Sofa Cleaning</a></li>
                        <li><a href="<?php echo BASE_URL; ?>services/curtain-cleaning.php">Curtain Cleaning</a></li>
                        <li><a href="<?php echo BASE_URL; ?>services/blanket-&-bed-linen-cleaning.php">Blanket & Bed Linen Cleaning</a></li>
                        <li><a href="<?php echo BASE_URL; ?>services/bed-mattress-cleaning.php">Bed Mattress Cleaning</a></li>
                        <li><a href="<?php echo BASE_URL; ?>services/institutional-chair-cleaning.php">Institutional Chair Cleaning</a></li>
                        <li><a href="<?php echo BASE_URL; ?>services/bridal-wear-cleaning.php">Bridal Wear Cleaning</a></li>
                        <li><a href="<?php echo BASE_URL; ?>services/saree-dry-cleaning.php">Saree Dry Cleaning</a></li>
                        <li><a href="<?php echo BASE_URL; ?>services/designer-wear-cleaning.php">Designer Wear Cleaning</a></li>
                        <li><a href="<?php echo BASE_URL; ?>services/blazer-&-suit-care.php">Blazer & Suit Care</a></li>
                        <li><a href="<?php echo BASE_URL; ?>services/silk-&-wool-care.php">Silk & Wool Care</a></li>
                        <li><a href="<?php echo BASE_URL; ?>services/toy-cleaning.php">Toy Cleaning</a></li>



                    </ul>
                </li>

                <li>
                    <a href="#">Blogs</a>

                </li>
                <li>
                    <a href="<?php echo BASE_URL; ?>contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<!--==============================
	Header Area
==============================-->
<header class="th-header header-layout3">
    <div class="header-top">
        <div class="container ">
            <div class="row justify-content-end justify-content-lg-between align-items-center gy-2">
                <div class="col-auto d-none d-md-block">
                    <div class="header-links">
                        <ul>
                            <li><i class="fa-solid fa-phone"></i>Phone:<a href="tel:+919284630260">+919284630260</a></li>
                            <li><i class="fa-solid fa-envelope"></i>Email:<a href="mailto:info@cosmos.com">info@cosmos.com</a>
                            </li>
                            <li><i class="fa-solid fa-clock"></i>Opening Hours:<span>Monday to Saturday(9:00 AM - 8:00 PM)</span></li>

                        </ul>
                    </div>
                </div>
                <div class="col-auto padding-right-30">
                    <div class="social-links">
                        <span class="social-title">Follow Us On:</span>
                        <a href="https://www.facebook.com/profile.php?id=100077069439683#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/laundrycosmos/" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://wa.me/919284630260?text=Hello%20I%20want%20to%20know%20more%20about%20your%20services." target="_blank"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-wrapper">
        <!-- Main Menu Area -->
        <div class="container">
            <div class="menu-area">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="<?php echo BASE_URL; ?>index.php">
                                <img src="<?php echo BASE_URL; ?>assets/img/cosmos-laundry-logo.svg" alt="Cosmos Laundry" width="200">
                            </a>
                        </div>
                    </div>
                    <div class="col-auto me-xl-auto">
                        <nav class="main-menu d-none d-lg-inline-block">
                            <ul>
                                <li>
                                    <a href="<?php echo BASE_URL; ?>index.php">Home</a>

                                </li>
                                <li><a href="<?php echo BASE_URL; ?>about.php">About Us</a></li>
                                <li>
                                    <a href="<?php echo BASE_URL; ?>services.php">Services</a>
                                    <ul class="sub-menu">
                                        <div class="row">
                                            <div class="col-5 pr-0">
                                                <li><a href="<?php echo BASE_URL; ?>services/laundry-service.php">Laundry Service</a></li>
                                                <li><a href="<?php echo BASE_URL; ?>services/dry-cleaning.php">Dry Cleaning</a></li>
                                                <li><a href="<?php echo BASE_URL; ?>services/premium-wash.php">Premium Wash</a></li>
                                                <li><a href="<?php echo BASE_URL; ?>services/steam-ironing.php">Steam Ironing</a></li>
                                                <li><a href="<?php echo BASE_URL; ?>services/shoe-cleaning.php">Shoe Cleaning</a></li>
                                                <li><a href="<?php echo BASE_URL; ?>services/leather-&-bag-cleaning.php">Leather & Bag Cleaning</a></li>
                                                <li><a href="<?php echo BASE_URL; ?>services/leather-jacket-cleaning.php">Leather Jacket Cleaning</a></li>
                                                <li><a href="<?php echo BASE_URL; ?>services/traveling-bag-cleaning.php">Traveling Bag Cleaning</a></li>
                                                <li><a href="<?php echo BASE_URL; ?>services/carpet-cleaning.php">Carpet Cleaning</a></li>
                                                <li><a href="<?php echo BASE_URL; ?>services/sofa-cleaning.php">Sofa Cleaning</a></li>

                                            </div>
                                            <div class="col-7 pl-0">
                                                <li><a href="<?php echo BASE_URL; ?>services/curtain-cleaning.php">Curtain Cleaning</a></li>
                                                <li><a href="<?php echo BASE_URL; ?>services/blanket-&-bed-linen-cleaning.php">Blanket & Bed Linen Cleaning</a></li>
                                                <li><a href="<?php echo BASE_URL; ?>services/bed-mattress-cleaning.php">Bed Mattress Cleaning</a></li>
                                                <li><a href="<?php echo BASE_URL; ?>services/institutional-chair-cleaning.php">Institutional Chair Cleaning</a></li>
                                                <li><a href="<?php echo BASE_URL; ?>services/bridal-wear-cleaning.php">Bridal Wear Cleaning</a></li>
                                                <li><a href="<?php echo BASE_URL; ?>services/saree-dry-cleaning.php">Saree Dry Cleaning</a></li>
                                                <li><a href="<?php echo BASE_URL; ?>services/designer-wear-cleaning.php">Designer Wear Cleaning</a></li>
                                                <li><a href="<?php echo BASE_URL; ?>services/blazer-&-suit-care.php">Blazer & Suit Care</a></li>
                                                <li><a href="<?php echo BASE_URL; ?>services/silk-&-wool-care.php">Silk & Wool Care</a></li>
                                                <li><a href="<?php echo BASE_URL; ?>services/toy-cleaning.php">Toy Cleaning</a></li>
                                                <!-- <li><a href="<?php echo BASE_URL; ?>services/express-service.php">Express Service</a></li> -->
                                            </div>
                                        </div>




                                    </ul>
                                </li>

                                <li>
                                    <a href="#">Blogs</a>

                                </li>
                                <li>
                                    <a href="<?php echo BASE_URL; ?>contact.php">Contact</a>
                                </li>
                            </ul>
                        </nav>
                        <button type="button" class="th-menu-toggle d-block d-lg-none"><i class="far fa-bars"></i></button>
                    </div>
                    <div class="col-auto d-none d-xl-block">
                        <div class="header-button">
                            <!-- <button type="button" class="icon-btn2 searchBoxToggler"><i class="far fa-search"></i></button> -->
                            <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="th-btn th-radius">Schedule A Pickup</a>
                            <!-- <a href="#" class="icon-btn2 sideMenuToggler d-none d-lg-block"><i class="far fa-bars"></i></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="logo-bg"></div>
    </div>
</header>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Enquire Now</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="lead-form">
                    <?php echo $URLinfo; ?>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input
                                type="text"
                                class="form-control fname"
                                name="name"
                                maxlength="50"
                                placeholder="Your Name" />
                            <i class="fal fa-user"></i>
                        </div>
                        <div class="form-group col-md-6">
                            <input
                                type="email"
                                class="form-control"
                                name="email"

                                placeholder="Email Address" />
                            <i class="fal fa-envelope"></i>
                        </div>
                        <div class="form-group col-md-6">
                            <input
                                type="tel"
                                class="form-control telli"
                                name="mobile"
                                maxlength="10"
                                placeholder="Phone Number" />
                            <i class="fal fa-phone"></i>
                        </div>
                        <div class="form-group col-md-6">
                            <select
                                name="service"
                                class="form-select nice-select">
                                <option value="" disabled selected hidden>
                                    Select Service
                                </option>
                                <option value="Dry Cleaning">Dry Cleaning</option>
                                <option value="Wash & Fold">Wash & Fold</option>
                                <option value="Ironing/Pressing">Ironing/Pressing</option>
                                <option value="Garments Transformed">
                                    Garments Transformed
                                </option>
                                <option value="Household Textile Care">
                                    Household Textile Care
                                </option>
                                <option value="Household Textile Care">
                                    Household Textile Care
                                </option>
                            </select>
                        </div>
                        <div class="form-group col-12">
                            <textarea
                                name="message"

                                cols="30"
                                rows="3"
                                class="form-control"
                                placeholder="Your Message"></textarea>
                            <i class="fal fa-pencil"></i>
                        </div>
                        <div class="form-btn col-12 justify-content-end gap-4 d-flex">
                            <button type="button" class="th-btn style3 th-radius" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="submit-btn  th-btn th-radius">Submit</button>
                        </div>
                    </div>
                    <p class="form-messages mb-0 mt-3"></p>
                </form>
            </div>
        </div>
    </div>
</div>