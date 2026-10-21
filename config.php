<?php
// config.php - Central Database Configuration using PDO

define('DB_HOST', '127.0.0.1');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'sohealvaseem_db');

$pdo = null;

function getDbConnection() {
    global $pdo;
    if ($pdo !== null) {
        return $pdo;
    }

    // Try port 3307 first (XAMPP configured port), fallback to 3306
    $ports = [3307, 3306];
    
    foreach ($ports as $port) {
        try {
            // First connect without db to ensure database exists
            $initPdo = new PDO(
                "mysql:host=" . DB_HOST . ";port=" . $port . ";charset=utf8mb4",
                DB_USER,
                DB_PASS,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_TIMEOUT => 2
                ]
            );
            $initPdo->exec("CREATE DATABASE IF NOT EXISTS `" . DB_NAME . "` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");

            // Connect to target database
            $conn = new PDO(
                "mysql:host=" . DB_HOST . ";port=" . $port . ";dbname=" . DB_NAME . ";charset=utf8mb4",
                DB_USER,
                DB_PASS,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES => false,
                ]
            );

            // Auto-create enquiries and quotes tables if not exist
            $conn->exec("CREATE TABLE IF NOT EXISTS enquiries (
                id INT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(150) NOT NULL,
                email VARCHAR(150) NOT NULL,
                message TEXT NOT NULL,
                ip_address VARCHAR(45) NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;");

            $conn->exec("CREATE TABLE IF NOT EXISTS quotes (
                id INT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(150) NOT NULL,
                designation VARCHAR(150) NULL,
                organization VARCHAR(150) NULL,
                city VARCHAR(100) NULL,
                mobile VARCHAR(20) NULL,
                email VARCHAR(150) NOT NULL,
                website VARCHAR(200) NULL,
                quotefor VARCHAR(100) NULL,
                subject VARCHAR(200) NULL,
                message TEXT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;");

            $pdo = $conn;
            return $pdo;
        } catch (Exception $e) {
            // Try next port
            continue;
        }
    }

    return null;
}

// Initialize connection
$pdo = getDbConnection();

/**
 * Retrieve verified portfolio projects from database or fallback array
 */
function getPortfolioProjects($featuredOnly = false, $limit = null) {
    global $pdo;
    
    if ($pdo !== null) {
        try {
            $sql = "SELECT * FROM projects";
            if ($featuredOnly) {
                $sql .= " WHERE is_featured = 1";
            }
            $sql .= " ORDER BY sort_order ASC, id ASC";
            if ($limit !== null) {
                $sql .= " LIMIT " . intval($limit);
            }
            $stmt = $pdo->query($sql);
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if (!empty($results)) {
                return $results;
            }
        } catch (Exception $e) {
            // Fallback to static verified array below
        }
    }
    
    $projects = [
        [
            'id' => 1,
            'title' => 'Vintagio',
            'brand_name' => 'VINTAGIO — Timeless Objects, Stories That Last',
            'category' => 'ecommerce',
            'cat_label' => 'E-Commerce Website Development',
            'description' => 'Curated luxury e-commerce platform for authenticated antiques, vintage clocks, porcelain, and heirloom showpieces across India with real-time inventory.',
            'logo_path' => 'images/portfolio/projects/vintagio_logo.png',
            'image_path' => 'images/portfolio/projects/vintagio_showcase.webp',
            'project_url' => 'https://vintagio.in/',
            'is_featured' => 1,
            'sort_order' => 1
        ],
        [
            'id' => 2,
            'title' => 'FX Recare',
            'brand_name' => 'FX Recare (FX Engineering)',
            'category' => 'ecommerce',
            'cat_label' => 'E-Commerce & Service Booking',
            'description' => 'Dynamic home appliance service, maintenance booking, and e-commerce platform with automated technician scheduling and transparent pricing.',
            'logo_path' => 'images/portfolio/projects/fxrecare_logo.png',
            'image_path' => 'images/portfolio/projects/fxrecare_showcase.webp',
            'project_url' => 'https://fxrecare.com/',
            'is_featured' => 1,
            'sort_order' => 2
        ],
        [
            'id' => 3,
            'title' => 'Morine Bakery',
            'brand_name' => 'Morine Bakery',
            'category' => 'ecommerce',
            'cat_label' => 'Food & Beverage E-Commerce',
            'description' => 'Artisan bakery and confectionery e-commerce platform with online ordering, categorized menu selection, and integrated payment processing.',
            'logo_path' => 'images/portfolio/projects/morine_logo.png',
            'image_path' => 'images/portfolio/projects/morine_showcase.webp',
            'project_url' => 'https://www.morinebakery.com/',
            'is_featured' => 1,
            'sort_order' => 3
        ],
        [
            'id' => 4,
            'title' => 'BazaarAAO',
            'brand_name' => 'BazaarAAO — Your Market, Online',
            'category' => 'ecommerce',
            'cat_label' => 'Hyper-Local Marketplace',
            'description' => 'Hyper-local e-commerce marketplace connecting historic Hyderabad neighborhood bazaars, local artisans, and merchants to digital shoppers.',
            'logo_path' => 'images/portfolio/projects/bazaaraao_logo.jpg',
            'image_path' => 'images/portfolio/projects/bazaaraao_logo.jpg',
            'project_url' => 'https://bazaaraao.com/',
            'is_featured' => 1,
            'sort_order' => 4
        ],
        [
            'id' => 5,
            'title' => 'Royale Heritage Fiesta',
            'brand_name' => 'Royale Heritage Fiesta',
            'category' => 'hospitality',
            'cat_label' => 'Hospitality & Banquets',
            'description' => 'Luxury resort, grand banquet hall, and celebration venue website with reservation workflows, event galleries, and hospitality packages.',
            'logo_path' => 'images/portfolio/projects/royal_logo.png',
            'image_path' => 'images/portfolio/projects/royal_showcase.webp',
            'project_url' => 'https://royaleheritagefiesta.com/',
            'is_featured' => 1,
            'sort_order' => 5
        ],
        [
            'id' => 6,
            'title' => 'Neo Candy Children’s Hospitals',
            'brand_name' => 'Neo Candy Hospitals',
            'category' => 'healthcare',
            'cat_label' => 'Hospital & Healthcare CRM',
            'description' => 'Comprehensive multi-specialty pediatric hospital portal featuring patient inquiry CRM, specialized doctor profiles, and emergency directories.',
            'logo_path' => 'images/portfolio/projects/neo_logo.png',
            'image_path' => 'images/portfolio/projects/neo_showcase.webp',
            'project_url' => 'https://neocandyhospitals.com/',
            'is_featured' => 1,
            'sort_order' => 6
        ],
        [
            'id' => 7,
            'title' => 'Aura ENT Clinic',
            'brand_name' => 'Aura ENT Clinic',
            'category' => 'healthcare',
            'cat_label' => 'Clinic Website & AMC',
            'description' => 'Dynamic healthcare clinic portal providing treatment overviews, specialized ENT medical insights, and digital consultation booking.',
            'logo_path' => 'images/portfolio/projects/aura_logo.jpg',
            'image_path' => 'images/portfolio/projects/aura_showcase.webp',
            'project_url' => 'https://auraentclinic.com/',
            'is_featured' => 0,
            'sort_order' => 7
        ],
        [
            'id' => 8,
            'title' => 'Dr. Bakshi’s World',
            'brand_name' => 'Dr. Bakshi’s World',
            'category' => 'healthcare',
            'cat_label' => 'Healthcare Web Application',
            'description' => 'Specialized healthcare web application and consultation platform optimized for patient engagement, treatment discovery, and SEO visibility.',
            'logo_path' => 'images/portfolio/projects/bakshi_showcase.webp',
            'image_path' => 'images/portfolio/projects/bakshi_showcase.webp',
            'project_url' => 'https://drbakshisworld.com/',
            'is_featured' => 0,
            'sort_order' => 8
        ],
        [
            'id' => 9,
            'title' => 'Olive Sarvodaya Healthcare',
            'brand_name' => 'Olive Sarvodaya Healthcare',
            'category' => 'healthcare',
            'cat_label' => 'Clinical Healthcare Platform',
            'description' => 'Modern clinical healthcare website designed for clear patient navigation, medical department listings, and hospital consultation access.',
            'logo_path' => 'images/portfolio/projects/olive_showcase.webp',
            'image_path' => 'images/portfolio/projects/olive_showcase.webp',
            'project_url' => 'https://olivesarvodaya.com/',
            'is_featured' => 0,
            'sort_order' => 9
        ],
        [
            'id' => 10,
            'title' => 'AYEN FASHION',
            'brand_name' => 'AYEN FASHION',
            'category' => 'fashion',
            'cat_label' => 'Fashion E-Commerce',
            'description' => 'Contemporary ethnic and designer fashion e-commerce storefront with curated lookbooks, responsive sizing guides, and cart checkout.',
            'logo_path' => 'images/portfolio/projects/ayen_logo.webp',
            'image_path' => 'images/portfolio/projects/ayen_showcase.webp',
            'project_url' => 'https://ayenfashion.in/',
            'is_featured' => 0,
            'sort_order' => 10
        ],
        [
            'id' => 11,
            'title' => 'Witt India',
            'brand_name' => 'Witt India',
            'category' => 'tech',
            'cat_label' => 'Dynamic Corporate Landing Page',
            'description' => 'Dynamic corporate engineering platform featuring detailed industrial specifications, full client CMS control, and conversion lead capture.',
            'logo_path' => 'images/portfolio/projects/wittindia_showcase.webp',
            'image_path' => 'images/portfolio/projects/wittindia_showcase.webp',
            'project_url' => 'https://www.wittindia.com/',
            'is_featured' => 0,
            'sort_order' => 11
        ],
        [
            'id' => 12,
            'title' => 'WINIT Tech Startup',
            'brand_name' => 'WINIT Tech',
            'category' => 'tech',
            'cat_label' => 'Technology Startup Branding',
            'description' => 'Scalable corporate tech brand identity and enterprise software digital architecture engineered for cloud mobility solutions.',
            'logo_path' => 'images/portfolio/projects/winit_showcase.webp',
            'image_path' => 'images/portfolio/projects/winit_showcase.webp',
            'project_url' => 'https://www.wittindia.com/',
            'is_featured' => 0,
            'sort_order' => 12
        ],
        [
            'id' => 13,
            'title' => 'New Jubilee Tent House',
            'brand_name' => 'New Jubilee Tent House',
            'category' => 'hospitality',
            'cat_label' => 'Event Infrastructure & Services',
            'description' => 'Premium wedding and grand event infrastructure portal showcasing tenthouse staging, royal shamiana setups, and event logistics.',
            'logo_path' => 'images/portfolio/projects/tent_logo.webp',
            'image_path' => 'images/portfolio/projects/tent_showcase.webp',
            'project_url' => 'https://newjubileetenthouse.com/',
            'is_featured' => 0,
            'sort_order' => 13
        ],
        [
            'id' => 14,
            'title' => 'Marvels Real Estate',
            'brand_name' => 'Marvels',
            'category' => 'realestate',
            'cat_label' => 'Real Estate Development',
            'description' => 'Architectural real estate project showcase highlighting prime residential elevations, commercial layouts, and investor specifications.',
            'logo_path' => 'images/portfolio/projects/marvel_showcase.webp',
            'image_path' => 'images/portfolio/projects/marvel_showcase.webp',
            'project_url' => '#',
            'is_featured' => 0,
            'sort_order' => 14
        ]
    ];
    
    if ($featuredOnly) {
        $projects = array_filter($projects, fn($p) => $p['is_featured'] == 1);
    }
    
    if ($limit !== null) {
        $projects = array_slice($projects, 0, $limit);
    }
    
    return $projects;
}
