<?php
/**
 * ============================================================
 *  BCS - Array Based Router
 *  Extracts routing logic from index.php
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
$view_file = __DIR__ . '/../views/' . $page . '.php';
