<?php $baseUrl = 'https://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']); ?>
<?php include $baseUrl . '/gtm-head.php'; ?>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $page_title; ?></title>

<meta name="description" content="<?php echo $page_description; ?>">
<!-- fontawesome 6.4.2 -->
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/plugins/fontawesome-6.css">
    <!-- swiper Css 10.2.0 -->
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/plugins/swiper.min.css">
    <!-- Bootstrap 5.0.2 -->
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/vendor/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/vendor/bootstrap.min.css">
    <!-- metismenu scss -->
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/vendor/metismenu.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo/swastiklogo.svg">
    <!-- lightbox css -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">

    <!-- for date pick -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.8.0/css/pikaday.min.css">

<!-- seo links -->
<link rel="canonical" href="<?php echo $baseUrl . $_SERVER['REQUEST_URI']; ?>" />

<!-- Facebook Meta Tags -->
    <meta property="og:title" content="<?php echo $page_title; ?>">
    <meta property="og:description" content="<?php echo $page_description; ?>">
    <meta property="og:image" content="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . '/assets/images/logo/Satyaprabhaa-logo.svg'; ?>">
    <meta property="og:url" content="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:site_name" content="Satyaprabhaa Developers">
    <meta property="og:type" content="Real Estate Developers">
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $page_title; ?>">
    <meta name="twitter:description" content="<?php echo $page_description; ?>">
    <meta name="twitter:image" content="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . '/assets/images/logo/Satyaprabhaa-logo.svg'; ?>">