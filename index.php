<?php
session_start();

// 1. Core Logic & Helper Functions
require_once __DIR__ . '/includes/functions.php';

// --- Routing Logic ---

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

// 3. Match Route → View File
$page = 'home';
$routes = [
    'home'     => '',
    'about'    => 'about',
    'services' => 'services',
    'products' => 'products',
    'career'   => 'career',
    'contact'  => 'contact'
];

$seo_routes = [
    'website-development-gandhidham',
    'website-development-bhuj',
    'website-development-anjar',
    'website-development-adipur',
    'shipping-website-kandla',
    'logistics-website-mundra',
    'digital-marketing-ahmedabad',
    'website-development-surat',
    'website-development-vadodara',
    'website-development-rajkot',
    'website-development-jamnagar',
    'website-development-bhavnagar',
    'website-development-vapi',
    'website-development-bharuch',
    'website-development-morbi',
    'website-development-mehsana',
    'website-development-gandhinagar'
];

if ($route === '' || $route === 'index.php') {
    $page = 'home';
} elseif (in_array($route, $seo_routes)) {
    $page = 'city-service';
} elseif (in_array($route, $routes)) {
    $page = array_search($route, $routes);
} else {
    $page = '404';
}

$view_file = __DIR__ . '/views/' . $page . '.php';

// 4. Load Header (SEO metadata logic is now inside header.php)
require_once __DIR__ . '/includes/header.php';
?>

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