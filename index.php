<?php
session_start();

/**
 * ============================================================
 *  BCS - Array Based Router
 *  All routes are defined here. Views are in /views/ folder.
 * ============================================================
 */

// 1. Auto-detect Base Path and URL
$script_dir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
define('BASE_PATH', rtrim($script_dir, '/') . '/');
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';
define('BASE_URL', $protocol . $_SERVER['HTTP_HOST'] . BASE_PATH);

// 2. Parse the Route
$request_uri = $_SERVER['REQUEST_URI'];
$route = str_replace(BASE_PATH, '', $request_uri);
$route = explode('?', $route)[0]; // Remove query string
$route = trim($route, '/');

// 3. SEO City-wise Configuration
$seo_data = [
    'website-development-gandhidham' => [
        'city' => 'Gandhidham',
        'title' => 'Website Development Company in Gandhidham | Web Design & Developer',
        'desc' => 'Leading Website Development Company in Gandhidham. We offer premium Web Design and Website Developer services in Gandhidham Kutch.',
        'keywords' => 'Website Development Company in Gandhidham, Web Design Company in Gandhidham, Website Developer in Gandhidham'
    ],
    'website-development-bhuj' => [
        'city' => 'Bhuj',
        'title' => 'Website Development Company in Bhuj | Web Designer in Kutch',
        'desc' => 'Best Website Development Company in Bhuj. Expert Web Designer in Bhuj Kutch providing digital marketing and SEO services.',
        'keywords' => 'Website Development Company in Bhuj, Web Designer in Bhuj Kutch, SEO Company in Bhuj'
    ],
    'website-development-anjar' => [
        'city' => 'Anjar',
        'title' => 'Website Development Company in Anjar | Website Designer Kutch',
        'desc' => 'Premiere Website Development Company in Anjar. Specialized Website Designer in Anjar Kutch for business growth.',
        'keywords' => 'Website Development Company in Anjar, Website Designer in Anjar Kutch, Social Media Marketing Agency in Anjar'
    ],
    'website-development-adipur' => [
        'city' => 'Adipur',
        'title' => 'Website Development Company in Adipur | Web Services Gandhidham',
        'desc' => 'Professional Website Development Company in Adipur. High-end Web Development Services in Adipur and Digital Marketing.',
        'keywords' => 'Website Development Company in Adipur, Web Development Services in Adipur, Digital Marketing Services in Adipur'
    ],
    'shipping-website-kandla' => [
        'city' => 'Kandla',
        'title' => 'Shipping Website Development in Kandla | Logistics Software',
        'desc' => 'Specialized Shipping Website Development in Kandla and Logistics Software Development in Mundra Kutch.',
        'keywords' => 'Website Development Company in Kandla, Web Design Company in Kandla Port, Shipping Website Development in Kandla'
    ],
    'logistics-website-mundra' => [
        'city' => 'Mundra',
        'title' => 'Logistics Website Development in Mundra | Web Developer Kutch',
        'desc' => 'Expert Logistics Website Development in Mundra. Leading Web Developer in Mundra Kutch for shipping and cargo companies.',
        'keywords' => 'Website Development Company in Mundra, Web Developer in Mundra Kutch, Logistics Website Development in Mundra'
    ],
    'digital-marketing-ahmedabad' => [
        'city' => 'Ahmedabad',
        'title' => 'Digital Marketing Agency in Ahmedabad | Website Development',
        'desc' => 'Top Digital Marketing Agency in Ahmedabad & Website Development Company. SEO, SEM, and Payroll Software solutions.',
        'keywords' => 'Website Development Company in Ahmedabad, Web Design Agency Ahmedabad, Digital Marketing Agency in Ahmedabad'
    ]
];

// 4. Main Site Routes
$routes = [
    'home'     => '',
    'about'    => 'about',
    'services' => 'services',
    'products' => 'products',
    'career'   => 'career',
    'contact'  => 'contact'
];

// 5. Match Route → View File
$page = 'home';
$is_seo_page = false;
$current_seo = null;

if ($route === '' || $route === 'index.php') {
    $page = 'home';
} elseif (isset($seo_data[$route])) {
    $page = 'city-service';
    $is_seo_page = true;
    $current_seo = $seo_data[$route];
} elseif (in_array($route, $routes)) {
    $page = array_search($route, $routes);
} else {
    $page = '404';
}

// 6. Set Metadata
$site_title = "BCS | Business Care Solutions";
$meta_desc = "Empowering brands with precision-driven digital solutions. Gandhidham's premier hub for Web Development, Digital Marketing, and HR Solutions.";
$meta_keywords = "Website Development Gandhidham, Digital Marketing Kutch, HR Software Gujarat, Shipping Solutions Kandla";

if ($is_seo_page) {
    $site_title = $current_seo['title'] . " | BCS";
    $meta_desc = $current_seo['desc'];
    $meta_keywords = $current_seo['keywords'];
} elseif ($page !== 'home' && $page !== '404') {
    $site_title = ucfirst($page) . " | BCS - Business Care Solutions";
}

// 7. Set the view file path
$view_file = __DIR__ . '/views/' . $page . '.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_title; ?></title>
    <meta name="description" content="<?php echo $meta_desc; ?>">
    <meta name="keywords" content="<?php echo $meta_keywords; ?>">
    <link rel="canonical" href="<?php echo BASE_URL . $route; ?>">
    <meta name="robots" content="index, follow">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo BASE_URL . $route; ?>">
    <meta property="og:title" content="<?php echo $site_title; ?>">
    <meta property="og:description" content="<?php echo $meta_desc; ?>">
    <meta property="og:image" content="<?php echo BASE_URL; ?>public/images/logo/logo01.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo BASE_URL . $route; ?>">
    <meta property="twitter:title" content="<?php echo $site_title; ?>">
    <meta property="twitter:description" content="<?php echo $meta_desc; ?>">
    <meta property="twitter:image" content="<?php echo BASE_URL; ?>public/images/logo/logo01.png">

    <!-- Base URL for assets -->
    <base href="<?php echo BASE_URL; ?>">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Outfit:wght@300;400;600;700&family=Playfair+Display:wght@700;800;900&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="public/css/style.css">

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="public/images/icons/icons/bcs-fav.svg">
    <link rel="alternate icon" type="image/png" href="public/images/logo/bcslogo.png">
    <link rel="apple-touch-icon" href="public/images/logo/bcslogo.png">

    <!-- JSON-LD Local Business Schema -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "LocalBusiness",
            "name": "BCS - Business Care Solutions",
            "image": "<?php echo BASE_URL; ?>public/images/logo/logo01.png",
            "@id": "<?php echo BASE_URL; ?>",
            "url": "<?php echo BASE_URL; ?>",
            "telephone": "+919925818323",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Plot no 300, Ward: 12/b, Shree Ambika Arcade, Office no 106, 1st Floor",
                "addressLocality": "Gandhidham",
                "postalCode": "370201",
                "addressRegion": "Gujarat",
                "addressCountry": "IN"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": 23.0754,
                "longitude": 70.1337
            },
            "openingHoursSpecification": {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": [
                    "Monday",
                    "Tuesday",
                    "Wednesday",
                    "Thursday",
                    "Friday",
                    "Saturday"
                ],
                "opens": "10:00",
                "closes": "19:00"
            },
            "sameAs": [
                "https://www.facebook.com/businesscaresolutions",
                "https://www.instagram.com/business_care_solutions/",
                "https://www.linkedin.com/company/businesscaresolutions/"
            ],
            "department": [{
                "@type": "LocalBusiness",
                "name": "BCS - Ahmedabad Branch",
                "address": {
                    "@type": "PostalAddress",
                    "streetAddress": "5th Floor Office no 14-F, Kalapurnam Complex, Navrangpura",
                    "addressLocality": "Ahmedabad",
                    "postalCode": "380009",
                    "addressRegion": "Gujarat",
                    "addressCountry": "IN"
                }
            }]
        }
    </script>
</head>

<body class="d-flex flex-column min-vh-100">

    <!-- Sidebar Navigation Menu -->
    <div class="menu-overlay" id="menu-overlay"></div>
    <nav class="sidebar-nav" id="sidebar-nav">
        <div class="sidebar-header d-flex align-items-center justify-content-between">
            <a href="<?php echo BASE_URL; ?>">
                <img src="public/images/logo/logo01.png" alt="BCS" style="height: 45px; width: auto;">
            </a>
            <button class="menu-close-btn" id="menu-close-btn">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-links">
                <li class="sidebar-link-item"><a href="<?php echo BASE_URL; ?>" class="sidebar-link <?php echo $page === 'home' ? 'active' : ''; ?>">Home</a></li>
                <li class="sidebar-link-item"><a href="<?php echo BASE_URL; ?>about" class="sidebar-link <?php echo $page === 'about' ? 'active' : ''; ?>">About Us</a></li>
                <li class="sidebar-link-item"><a href="<?php echo BASE_URL; ?>services" class="sidebar-link <?php echo $page === 'services' ? 'active' : ''; ?>">Services</a></li>
                <li class="sidebar-link-item"><a href="<?php echo BASE_URL; ?>products" class="sidebar-link <?php echo $page === 'products' ? 'active' : ''; ?>">Products</a></li>
                <li class="sidebar-link-item"><a href="https://blogs.bcsads.com/" class="sidebar-link" target="_blank">Blog</a></li>
                <li class="sidebar-link-item"><a href="<?php echo BASE_URL; ?>career" class="sidebar-link <?php echo $page === 'career' ? 'active' : ''; ?>">Career</a></li>
                <li class="sidebar-link-item"><a href="<?php echo BASE_URL; ?>contact" class="sidebar-link <?php echo $page === 'contact' ? 'active' : ''; ?>">Contact</a></li>
            </ul>
        </div>
        <div class="sidebar-footer">
            <div class="sidebar-brand d-flex align-items-center mb-2">
                <img src="public/images/logo/bcslogo.png" alt="BCS" class="sidebar-logo-img me-2" style="height: 30px; width: auto;">
                <span>Business Care Solutions</span>
            </div>
            <p class="small text-muted mb-0">Strategic Digital Transformation</p>
        </div>
    </nav>

    <!-- Main Header -->
    <header class="main-header" id="main-header">
        <div class="container-fluid px-lg-5">
            <div class="header-inner d-flex align-items-center justify-content-between">
                <!-- Logo -->
                <a href="<?php echo BASE_URL; ?>" class="header-logo d-flex align-items-center">
                    <img src="public/images/logo/logo01.png" alt="BCS ADS Co. Logo" class="header-logo-img me-2">
                </a>

                <!-- Language & Hamburger Controls -->
                <div class="header-controls d-flex align-items-center gap-2">
                    <!-- Language Hamburger Button with Globe Icon -->
                    <button class="lang-hamburger-btn" id="lang-hamburger-btn" aria-label="Change Language" data-bs-toggle="modal" data-bs-target="#languageModal" title="Select Language">
                        <i class="fa-solid fa-globe"></i>
                        <!-- <span class="lang-hamburger-lines">
                            <span class="lang-hamburger-line"></span>
                            <span class="lang-hamburger-line"></span>
                            <span class="lang-hamburger-line"></span>
                        </span> -->
                    </button>

                    <!-- Main Navigation Hamburger Trigger -->
                    <button class="hamburger-btn" id="hamburger-btn" aria-label="Toggle Navigation">
                        <span class="hamburger-line"></span>
                        <span class="hamburger-line"></span>
                        <span class="hamburger-line"></span>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- ============================================ -->
    <!--  DYNAMIC PAGE CONTENT (from /views/ folder)  -->
    <!-- ============================================ -->
    <main id="main-content">
        <?php
        if (file_exists($view_file)) {
            include $view_file;
        } else {
            include __DIR__ . '/views/404.php';
        }
        ?>
    </main>

    <!-- Footer -->
    <?php include __DIR__ . '/views/partials/footer.php'; ?>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Google Translate Widget (Hidden but Functional) -->
    <div id="google_translate_element" style="position: fixed; top: -9999px; left: -9999px; opacity: 0; pointer-events: none; z-index: -9999;"></div>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                includedLanguages: 'en,hi,gu,es,fr,de,ar,zh-CN,ru,pt,it,ja,ko',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                autoDisplay: false
            }, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <!-- Language Modal -->
    <?php include __DIR__ . '/views/partials/language-modal.php'; ?>

    <script src="public/js/main.js"></script>
</body>

</html>