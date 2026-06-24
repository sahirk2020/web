<?php

// echo __DIR__;
include_once __DIR__ . '/../config.php';
include_once __DIR__ . '/../css.php';
include_once __DIR__ . '/db.php';
?>

<!--==============================
    Mobile Menu
  ============================== -->
<div class="th-menu-wrapper">
    <div class="th-menu-area text-center">
        <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
            <a href="<?php echo BASE_URL; ?>index.php"><img src="<?php echo BASE_URL; ?>assets/img/cosmos-laundry-logo.svg" alt="Cosmos"></a>
        </div>
        <div class="th-mobile-menu">
            <ul>
                <li>
                    <a href="<?php echo BASE_URL; ?>index.php">Home</a>
                    <!-- <ul class="sub-menu">
                        <li><a href="<?php echo BASE_URL;
                                        ?>home-laundry-services.php">Laundry Services</a></li>
                        <li><a href="<?php echo BASE_URL;
                                        ?>home-dry-cleaning.php">Home Dry Cleaning</a></li>
                        <li><a href="<?php echo BASE_URL;
                                        ?>home-laundry-dry-services.php">Laundry & Dry Services</a></li>
                    </ul> -->
                </li>
                <li><a href="<?php echo BASE_URL; ?>about.php">About Us</a></li>

                <li class="menu-item-has-children">
                    <a href="<?php echo BASE_URL; ?>services.php">Service</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo BASE_URL; ?>services/laundry-service.php">Laundry Services</a></li>

                    </ul>
                </li>
                <!-- <li class="menu-item-has-children">
                    <a href="#">Pages</a>
                    <ul class="sub-menu">
                        <li class="menu-item-has-children">
                            <a href="#">Shop</a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo BASE_URL; ?>shop.php">Shop</a></li>
                                <li><a href="<?php echo BASE_URL; ?>shop-details.php">Shop Details</a></li>
                                <li><a href="<?php echo BASE_URL; ?>cart.php">Cart Page</a></li>
                                <li><a href="<?php echo BASE_URL; ?>checkout.php">Checkout</a></li>
                                <li><a href="<?php echo BASE_URL; ?>wishlist.php">Wishlist</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo BASE_URL; ?>team.php">Team</a></li>
                        <li><a href="<?php echo BASE_URL; ?>team-details.php">Team Details</a></li>
                        <li><a href="<?php echo BASE_URL; ?>gallery.php">Proto Gallery</a></li>
                        <li><a href="<?php echo BASE_URL; ?>faq.php">Faq Page</a></li>
                        <li><a href="<?php echo BASE_URL; ?>price.php">Price Package</a></li>
                        <li><a href="<?php echo BASE_URL; ?>error.php">Error Page</a></li>
                    </ul>
                </li> -->
                <li>
                    <a href="#">Blogs</a>
                    <!-- <ul class="sub-menu">
                        <li>
                            <a href="#">Blog Layout</a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo BASE_URL; ?>blog-grid-2-columns.php">Blog Grid 02 Columns</a></li>
                                <li><a href="<?php echo BASE_URL; ?>blog-grid-3-columns.php">Blog Grid 03 Columns</a></li>
                                <li><a href="<?php echo BASE_URL; ?>blog-list.php">Blog List</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo BASE_URL; ?>blog.php">Blog Sidebar</a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo BASE_URL; ?>blog-left-sidebar.php">Blog Left Sidebar</a></li>
                                <li><a href="<?php echo BASE_URL; ?>blog-right-sidebar.php">Blog Right Sidebar</a></li>
                                <li><a href="<?php echo BASE_URL; ?>blog.php">Blog No Sidebar</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo BASE_URL; ?>blog-details.php">Blog Details</a></li>
                    </ul> -->
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
        <div class="container th-container">
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
        <div class="container th-container">
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
                                    <!-- <ul class="sub-menu">
                                        <li><a href="<?php echo BASE_URL; ?>home-laundry-services.php">Laundry Services</a></li>
                                        <li><a href="<?php echo BASE_URL; ?>home-dry-cleaning.php">Home Dry Cleaning</a></li>
                                        <li><a href="<?php echo BASE_URL; ?>home-laundry-dry-services.php">Laundry & Dry Services</a></li>
                                    </ul> -->
                                </li>
                                <li><a href="<?php echo BASE_URL; ?>about.php">About Us</a></li>
                                <li>
                                    <a href="<?php echo BASE_URL; ?>services.php">Service</a>
                                    <ul class="sub-menu">
                                        <li><a href="<?php echo BASE_URL; ?>services/laundry-service.php">Laundry Service</a></li>

                                    </ul>
                                </li>
                                <!-- <li class="menu-item-has-children">
                                    <a href="#">Pages</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="#">Shop</a>
                                            <ul class="sub-menu">
                                                <li><a href="<?php echo BASE_URL; ?>shop.php">Shop</a></li>
                                                <li><a href="<?php echo BASE_URL; ?>shop-details.php">Shop Details</a></li>
                                                <li><a href="<?php echo BASE_URL; ?>cart.php">Cart Page</a></li>
                                                <li><a href="<?php echo BASE_URL; ?>checkout.php">Checkout</a></li>
                                                <li><a href="<?php echo BASE_URL; ?>wishlist.php">Wishlist</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="<?php echo BASE_URL; ?>team.php">Team</a></li>
                                        <li><a href="<?php echo BASE_URL; ?>team-details.php">Team Details</a></li>
                                        <li><a href="<?php echo BASE_URL; ?>gallery.php">Proto Gallery</a></li>
                                        <li><a href="<?php echo BASE_URL; ?>faq.php">Faq Page</a></li>
                                        <li><a href="<?php echo BASE_URL; ?>price.php">Price Package</a></li>
                                        <li><a href="<?php echo BASE_URL; ?>error.php">Error Page</a></li>
                                    </ul>
                                </li> -->
                                <li>
                                    <a href="#">Blogs</a>
                                    <!-- <ul class="sub-menu">
                                        <li>
                                            <a href="#">Blog Layout</a>
                                            <ul class="sub-menu">
                                                <li><a href="<?php echo BASE_URL; ?>blog-grid-2-columns.php">Blog Grid 02 Columns</a></li>
                                                <li><a href="<?php echo BASE_URL; ?>blog-grid-3-columns.php">Blog Grid 03 Columns</a></li>
                                                <li><a href="<?php echo BASE_URL; ?>blog-list.php">Blog List</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?php echo BASE_URL; ?>blog.php">Blog Sidebar</a>
                                            <ul class="sub-menu">
                                                <li><a href="<?php echo BASE_URL; ?>blog-left-sidebar.php">Blog Left Sidebar</a></li>
                                                <li><a href="<?php echo BASE_URL; ?>blog-right-sidebar.php">Blog Right Sidebar</a></li>
                                                <li><a href="<?php echo BASE_URL; ?>blog.php">Blog No Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="<?php echo BASE_URL; ?>blog-details.php">Blog Details</a></li>
                                    </ul> -->
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
                            <a href="<?php echo BASE_URL; ?>contact.php" class="th-btn th-radius">Schedule A Pickup</a>
                            <!-- <a href="#" class="icon-btn2 sideMenuToggler d-none d-lg-block"><i class="far fa-bars"></i></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="logo-bg"></div>
    </div>
</header>