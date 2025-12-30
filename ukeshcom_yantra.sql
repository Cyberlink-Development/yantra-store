-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 30, 2025 at 12:07 PM
-- Server version: 5.7.44
-- PHP Version: 8.1.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukeshcom_yantra`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` int(11) DEFAULT NULL,
  `address1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_primary` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `user_id`, `first_name`, `last_name`, `company`, `country`, `city`, `zip_code`, `address1`, `address2`, `is_primary`, `created_at`, `updated_at`) VALUES
(12, 1, NULL, NULL, NULL, NULL, NULL, 54353, 'tokyo', 'japan', 0, '2021-01-08 05:16:43', '2021-01-08 05:16:43'),
(13, 2, NULL, NULL, NULL, NULL, NULL, 3231, 'dasda', 'dsada', 0, '2021-01-08 05:23:27', '2021-01-08 05:23:27');

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `client_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `open_in_new_tab` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `ad_position` enum('after_hot_deals','after_categories','gone_in_seconds_sidebar','after_brands') COLLATE utf8mb4_unicode_ci NOT NULL,
  `ad_layout` enum('single','two_column','sidebar_stack') COLLATE utf8mb4_unicode_ci NOT NULL,
  `ordering` int(11) NOT NULL DEFAULT '1',
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `title`, `description`, `client_name`, `image`, `image_size`, `link`, `open_in_new_tab`, `ad_position`, `ad_layout`, `ordering`, `status`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(1, 'Home Hot Deals - 1', NULL, NULL, '1761762507_69025ccba2c40.jpeg', NULL, NULL, '1', 'after_hot_deals', 'two_column', 1, '1', NULL, NULL, '2025-08-21 04:56:12', '2025-10-29 12:43:27'),
(3, 'Home Hot Deals -2', NULL, NULL, '1761762633_69025d498cdd9.jpeg', NULL, 'https://demo5.ukesh.com/category/black-friday', '0', 'after_hot_deals', 'two_column', 2, '1', NULL, NULL, '2025-08-21 06:16:07', '2025-10-29 12:45:33'),
(4, 'Home After Category', '<div>\r\n<h5><span style=\"color: #ecf0f1;\">Hurry up! Limited time offer</span></h5>\r\n<div>\r\n<h3><span style=\"color: #ecf0f1;\">Grab all the discount Appliances</span></h3>\r\n</div>\r\n</div>', NULL, '1761762878_69025e3e70e50.jpg', NULL, NULL, '0', 'after_categories', 'single', 3, '1', NULL, NULL, '2025-08-21 06:20:35', '2025-10-29 12:49:38'),
(5, 'Home Gone In Second 1', NULL, NULL, '1761763710_6902617e7f816.webp', NULL, NULL, '0', 'gone_in_seconds_sidebar', 'sidebar_stack', 4, '1', NULL, NULL, '2025-08-21 06:41:19', '2025-10-29 13:03:30'),
(6, 'Home Gone In Second 2', NULL, NULL, '1761762700_69025d8cab44e.webp', NULL, NULL, '0', 'gone_in_seconds_sidebar', 'single', 5, '1', NULL, NULL, '2025-08-21 06:45:45', '2025-10-29 12:46:40'),
(7, 'Home After Brands', '<p><a href=\"https://us.store.tp-link.com/pages/best-deals?utm_campaign=xmas&amp;utm_medium=tpl_top_banner&amp;utm_source=tpl\" target=\"_blank\" rel=\"noopener\">https://us.store.tp-link.com/pages/best-deals?utm_campaign=xmas&amp;utm_medium=tpl_top_banner&amp;utm_source=tpl</a></p>', NULL, '1766167723_694594abe7be2.jpg', NULL, 'https://us.store.tp-link.com', '1', 'after_brands', 'two_column', 6, '1', NULL, NULL, '2025-08-21 06:46:47', '2025-12-19 12:26:31');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `content` longtext NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `content`, `image`, `slug`, `created_at`, `updated_at`) VALUES
(10, 'Buying Pure Cashmere Shawls From Nepal: A Parisian\'s Guide to Unveiling Luxury', '<p data-sourcepos=\"3:1-3:20\">Bonjour, mes amis!</p>\r\n<p data-sourcepos=\"5:1-5:312\">For those of you who know me, you know my love affair with timeless elegance and quality craftsmanship. As a Parisian who gets her fill of exquisite fashion daily, I still find myself drawn to the exotic and the authentic. This is precisely why I fell head over heels with the world of Nepalese cashmere shawls.</p>\r\n<p data-sourcepos=\"7:1-7:309\">These aren\'t your average scarves. Cashmere shawls from Nepal are whispered tales of ancient traditions woven into threads of unparalleled softness. They are luxurious heirlooms waiting to be discovered, and today, I want to be your guide on this journey of acquiring a piece of Nepal\'s rich textile heritage.</p>\r\n<h3 data-sourcepos=\"9:1-9:58\">Why Nepal? Unveiling the Cashmere Capital of the World</h3>\r\n<p data-sourcepos=\"11:1-11:401\">Nepal, nestled in the majestic Himalayas, boasts a long and storied history with cashmere. For centuries, the high-altitude pastures of this region have been home to Chyangra goats, a special breed renowned for producing the world\'s finest cashmere. These goats, adapted to the harsh conditions, grow an incredibly soft undercoat known as Pashmina (derived from the Persian word for \"woolen shawl\").</p>\r\n<p data-sourcepos=\"13:1-13:424\">The cool mountain air and the unique diet of these goats contribute to the exceptional quality of the fibers. Nepalese artisans, with generations of knowledge passed down, have honed the art of processing and weaving this precious material. This meticulous process, often involving hand-combing and hand-looming techniques, results in the unparalleled softness, warmth, and lightweight drape that defines Nepalese cashmere.</p>\r\n<p data-sourcepos=\"15:1-15:58\"><strong>What sets Nepalese cashmere apart?</strong> Here\'s a breakdown:</p>\r\n<ul data-sourcepos=\"17:1-21:0\">\r\n<li data-sourcepos=\"17:1-17:153\"><strong>Fiber Fineness:</strong> Nepalese Chyangra goats produce some of the finest cashmere fibers in the world, leading to an incredibly soft and luxurious feel.</li>\r\n<li data-sourcepos=\"18:1-18:153\"><strong>Warmth and Breathability:</strong> Cashmere\'s natural insulating properties keep you warm without feeling bulky, while also allowing the fabric to breathe.</li>\r\n<li data-sourcepos=\"19:1-19:136\"><strong>Lightweight and Drape:</strong> Nepalese cashmere shawls are surprisingly light despite their warmth and create a beautiful flowing drape.</li>\r\n<li data-sourcepos=\"20:1-21:0\"><strong>Durability:</strong> When cared for properly, a cashmere shawl can be a cherished possession for years to come.</li>\r\n</ul>\r\n<h3 data-sourcepos=\"22:1-22:56\">Unveiling the Cashmere Journey: From Goat to Garment</h3>\r\n<p data-sourcepos=\"24:1-24:138\">Understanding the journey of your cashmere shawl will deepen your appreciation for this unique product. Here\'s a glimpse into the process:</p>\r\n<ol data-sourcepos=\"26:1-31:0\">\r\n<li data-sourcepos=\"26:1-26:172\"><strong>Combing the Undercoat:</strong> During the spring moulting season, the soft underfleece of the Chyangra goats is gently combed by hand, ensuring no harm comes to the animal.</li>\r\n<li data-sourcepos=\"27:1-27:182\"><strong>Sorting and Cleaning:</strong> The raw fibers are meticulously sorted by hand according to their length, fineness, and color. They are then carefully cleaned to remove any impurities.</li>\r\n<li data-sourcepos=\"28:1-28:163\"><strong>Spinning the Yarn:</strong> Skilled artisans spin the clean fibers into fine yarn using traditional techniques, often involving a spinning wheel called a \"charkha.\"</li>\r\n<li data-sourcepos=\"29:1-29:199\"><strong>Weaving or Knitting:</strong> The yarn is then woven or knitted on looms, many of which are handcrafted by local artisans. This stage can involve creating intricate patterns or adding embellishments.</li>\r\n<li data-sourcepos=\"30:1-31:0\"><strong>Finishing Touches:</strong> The finished shawl undergoes a final inspection and may be washed and brushed to enhance its softness.</li>\r\n</ol>\r\n<p data-sourcepos=\"32:1-32:191\"><strong>Important Note:</strong> While some cashmere processing might involve modern equipment, the true essence of Nepalese cashmere lies in the significant amount of handwork that goes into each piece.</p>\r\n<h3 data-sourcepos=\"34:1-34:60\">A Buyer\'s Guide: Navigating the Nepalese Cashmere Market</h3>\r\n<p data-sourcepos=\"36:1-36:154\">Now that you understand the magic behind these shawls, let\'s delve into acquiring your own piece of Nepalese luxury. Here are some key points to consider:</p>\r\n<p data-sourcepos=\"38:1-38:33\"><strong>1. Identifying Pure Cashmere:</strong></p>\r\n<ul data-sourcepos=\"40:1-43:0\">\r\n<li data-sourcepos=\"40:1-40:170\"><strong>Look for Labels:</strong> A genuine Nepalese cashmere shawl will typically have a label stating the percentage of cashmere used. Aim for shawls with 100% cashmere content.</li>\r\n<li data-sourcepos=\"41:1-41:167\"><strong>The Feel Test:</strong> Cashmere should feel incredibly soft and smooth against your skin. Run your fingers lightly across the fabric; it should feel almost weightless.</li>\r\n<li data-sourcepos=\"42:1-43:0\"><strong>The Burn Test:</strong> (<strong>Disclaimer:</strong> Please conduct this test with a tiny thread from a hidden area of the shawl, not on the main body). Real cashmere will burn slowly with a faint, hair-like smell. It should also turn into a brittle ash that crumbles easily.</li>\r\n</ul>\r\n<p data-sourcepos=\"44:1-44:20\"><strong>2. Where to Buy:</strong></p>\r\n<p data-sourcepos=\"46:1-46:61\">There are two main ways to acquire a Nepalese cashmere shawl:</p>\r\n<ul data-sourcepos=\"48:1-49:188\">\r\n<li data-sourcepos=\"48:1-48:238\"><strong>Visiting Nepal:</strong> This offers the most immersive experience. You can visit Kathmandu or other major cities to explore markets and shops specializing in cashmere products. Bargaining is a common practice, so be prepared to negotiate.</li>\r\n<li data-sourcepos=\"49:1-49:188\"><strong>Online Retailers:</strong> Several reputable online retailers specialize in Nepalese cashmere shawls. Look for those that provide detailed product descriptions, high-quality photographs.</li>\r\n</ul>', '1718521205.jpg', 'buying-pure-cashmere-shawls-from-nepal-a-parisians-guide-to-unveiling-luxury', '2024-06-16 11:00:05', '2024-06-16 11:00:05'),
(11, 'How Cashmere Products are Made in Nepal: A Journey from Himalayas to New York City Chic', '<p data-sourcepos=\"3:1-3:323\">Hey Upper East Siders and beyond! It\'s your girl, Olivia, back with another dive into the world of high-quality fabrics and timeless style. Today, we\'re taking a virtual trip halfway across the globe, to the majestic Himalayas of Nepal, to uncover the fascinating story behind some of the world\'s finest cashmere products.</p>\r\n<p data-sourcepos=\"5:1-5:590\">Cashmere &ndash; that luxurious, whisper-soft fabric synonymous with elegance and warmth &ndash; takes on a whole new meaning when we delve into its origins in Nepal. Here, nestled amidst breathtaking peaks and steeped in ancient traditions, lies the secret to the incredible quality that graces our winter wardrobes. So, grab your favorite cup of cocoa (because let\'s face it, cashmere screams cozy!), settle in, and get ready to explore the meticulous process that transforms raw fiber into the coveted shawls, scarves, and sweaters that adorn the most discerning fashionistas from New York to Tokyo.</p>\r\n<h3 data-sourcepos=\"7:1-7:56\">The Source: Chyangra Goats and the Himalayan Embrace</h3>\r\n<p data-sourcepos=\"9:1-9:364\">Nepal\'s claim to cashmere fame starts with its unique geography. High in the Himalayas roam the Chyangra goats, a special breed perfectly adapted to the harsh mountain climate. Their thick winter coats shield them from the biting cold, and it\'s this undercoat, known as Pashmina (derived from the Persian word for \"woolen shawl\"), that holds the key to our story.</p>\r\n<p data-sourcepos=\"11:1-11:245\">The cool, dry air and the specific diet of these goats contribute to the exceptional quality of their underfleece. The fibers are incredibly fine, much finer than human hair, leading to that unparalleled softness that defines Nepalese cashmere.</p>\r\n<h3 data-sourcepos=\"13:1-13:71\">A Time-Honored Tradition: From Gentle Hands to Exquisite Products</h3>\r\n<p data-sourcepos=\"15:1-15:135\">The journey from goat to garment is a testament to the skill and dedication of Nepalese artisans. Here\'s where the magic truly unfolds:</p>\r\n<ul data-sourcepos=\"17:1-22:0\">\r\n<li data-sourcepos=\"17:1-17:258\"><strong>Combing with Care:</strong> Twice a year, during the spring and fall moulting seasons, the Chyangra goats are gently combed by hand to collect the precious underfleece. This ensures no harm comes to the animal and allows for the selection of the finest fibers.</li>\r\n<li data-sourcepos=\"18:1-18:224\"><strong>Sorting and Cleaning:</strong> The raw fibers are meticulously sorted by hand according to their length, fineness, and color. This delicate process separates the best fibers for the creation of high-quality cashmere products.</li>\r\n<li data-sourcepos=\"19:1-19:312\"><strong>Spinning the Yarn:</strong> Skilled artisans, often women who have inherited this knowledge for generations, transform the sorted fibers into fine yarn. This is typically done using a traditional spinning wheel called a \"charkha.\" The speed and skill of the spinner determine the thickness and quality of the yarn.</li>\r\n<li data-sourcepos=\"20:1-20:264\"><strong>Weaving or Knitting:</strong> The yarn is then brought to life on looms, many of which are handcrafted by local artisans. This stage can involve creating intricate patterns or adding delicate embellishments, showcasing the artistry of Nepalese weavers and knitters.</li>\r\n<li data-sourcepos=\"21:1-22:0\"><strong>Finishing Touches:</strong> The finished product undergoes a final inspection and may be washed and brushed to enhance its softness and luster.</li>\r\n</ul>\r\n<p data-sourcepos=\"23:1-23:323\"><strong>The Importance of Handwork:</strong> While some modern equipment might be used in specific stages, the soul of Nepalese cashmere lies in the significant amount of handwork that goes into each piece. This meticulous process, passed down through generations, imbues each garment with a unique charm and a story waiting to be told.</p>\r\n<h3 data-sourcepos=\"25:1-25:58\">Beyond Technique: Sustainability and Ethical Practices</h3>\r\n<p data-sourcepos=\"27:1-27:175\">When considering luxury goods, ethical sourcing and sustainability are crucial factors. The good news is that Nepalese cashmere production generally aligns with these values.</p>\r\n<ul data-sourcepos=\"29:1-32:0\">\r\n<li data-sourcepos=\"29:1-29:122\"><strong>Sustainable Goat Herding:</strong> Chyangra goats graze freely in the high pastures, minimizing their environmental impact.</li>\r\n<li data-sourcepos=\"30:1-30:156\"><strong>Low Energy Consumption:</strong> Traditional techniques used in processing and weaving rely on minimal energy consumption, making it an eco-friendly process.</li>\r\n<li data-sourcepos=\"31:1-32:0\"><strong>Fair Trade Practices:</strong> Looking for certified Fair Trade products ensures fair compensation for the artisans involved in the production process.</li>\r\n</ul>\r\n<p data-sourcepos=\"33:1-33:194\">By supporting Nepalese cashmere producers, you\'re not just acquiring a luxurious garment; you\'re contributing to the preservation of a rich cultural heritage and promoting sustainable practices.</p>\r\n<h3 data-sourcepos=\"35:1-35:56\">A Touch of the Himalayas in Your New York City Style</h3>\r\n<p data-sourcepos=\"37:1-37:211\">Now that you\'ve embarked on this journey into the world of Nepalese cashmere, how can you integrate this exquisite fabric into your own New York City style? Here are some ideas to inspire your inner fashionista:</p>\r\n<ul data-sourcepos=\"39:1-40:205\">\r\n<li data-sourcepos=\"39:1-39:322\"><strong>The Classic Cashmere Shawl:</strong> Think Audrey Hepburn in Breakfast at Tiffany\'s. A timeless piece that adds a touch of elegance and warmth to any outfit. Wrap it around your shoulders for a sophisticated brunch look downtown, or drape it over your arm for a touch of effortless chic while strolling through Central Park.</li>\r\n<li data-sourcepos=\"40:1-40:205\"><strong>The Effortlessly Chic Cashmere Sweater:</strong> Perfect for those brisk New York mornings or cozy evenings curled up with a good book, a cashmere sweater provides both warmth and style.</li>\r\n</ul>', '1718521429.jpg', 'how-cashmere-products-are-made-in-nepal-a-journey-from-himalayas-to-new-york-city-chic', '2024-06-16 11:03:49', '2024-06-16 11:03:49'),
(12, 'Trendy Hemp Backpacks from Nepal: Sustainable Style for the Urban Explorer', '<p data-sourcepos=\"3:1-3:74\">Hey there, eco-conscious New Yorkers! Olivia here, your resident guide to all things fashion-forward and environmentally friendly. Today, we\'re ditching the crowded streets and concrete jungle for a virtual trek to the foothills of the Himalayas, where a unique blend of tradition and sustainability is weaving its way into the hottest accessory trend: <strong>trendy hemp backpacks from Nepal</strong>.</p>\r\n<p data-sourcepos=\"5:1-5:39\">Forget your bulky, synthetic backpacks! These Nepalese beauties are crafted from a material as old as civilization itself &ndash; hemp. But this isn\'t your grandma\'s hemp. Nepali artisans are giving this natural fiber a modern makeover, creating stylish and functional backpacks perfect for navigating the bustling streets of New York City while keeping your green thumb firmly planted.</p>\r\n<p data-sourcepos=\"7:1-7:206\">So, buckle up, because we\'re about to delve into the world of hemp backpacks, exploring why they\'re the next big thing, how they\'re made in Nepal, and how to rock one with that signature New York City edge.</p>\r\n<h3 class=\"\" data-sourcepos=\"9:1-9:32\">Hemp: Nature\'s Wonder Fiber</h3>\r\n<p data-sourcepos=\"11:1-11:25\">Hemp, a close relative of cannabis, boasts a surprising range of benefits that make it ideal for creating trendy and sustainable backpacks. Here\'s what makes hemp such a star player:</p>\r\n<ul data-sourcepos=\"13:1-18:0\">\r\n<li data-sourcepos=\"13:1-13:184\"><strong>Eco-Friendly Hero:</strong> Hemp grows rapidly and requires minimal water and pesticides, making it a much greener alternative to conventional backpack materials like nylon or polyester.</li>\r\n<li data-sourcepos=\"14:1-14:194\"><strong>Durable and Strong:</strong> The long, sturdy fibers of hemp create backpacks that can withstand the daily wear and tear of city life. Say goodbye to flimsy bags that rip after a few subway rides!</li>\r\n<li data-sourcepos=\"15:1-15:268\"><strong>Lightweight and Breathable:</strong> Hemp backpacks are surprisingly lightweight, making them ideal for carrying around all your city essentials without feeling weighed down. The natural breathability keeps your back cool and comfortable on even the hottest summer days.</li>\r\n<li data-sourcepos=\"16:1-16:183\"><strong>Naturally Antibacterial:</strong> Hemp possesses natural antibacterial properties, which helps to keep your backpack odor-free &ndash; a definite plus when navigating crowded buses or trains.</li>\r\n<li data-sourcepos=\"17:1-18:0\"><strong>Softens with Age:</strong> Unlike some materials that become stiff and uncomfortable over time, hemp backpacks actually become softer and more supple with use, developing a unique, vintage-like character.</li>\r\n</ul>\r\n<h3 class=\"\" data-sourcepos=\"19:1-19:78\">From Himalayan Foothills to Your Back: The Art of Nepalese Hemp Backpacks</h3>\r\n<p data-sourcepos=\"21:1-21:175\">The journey of a trendy hemp backpack from Nepal starts nestled amidst the breathtaking mountains. Here\'s a glimpse into the traditional craftsmanship that goes into each one:</p>\r\n<ul data-sourcepos=\"23:1-28:0\">\r\n<li data-sourcepos=\"23:1-23:116\"><strong>Cultivating the Hemp:</strong> Hemp plants are grown using sustainable methods, minimizing their environmental impact.</li>\r\n<li data-sourcepos=\"24:1-24:136\"><strong>Processing the Fibers:</strong> The hemp stalks are carefully harvested and processed to extract the long, strong fibers used for weaving.</li>\r\n<li data-sourcepos=\"25:1-25:146\"><strong>Hand-Looming the Fabric:</strong> Skilled artisans meticulously weave the hemp fibers into a strong, yet lightweight fabric using traditional looms.</li>\r\n<li data-sourcepos=\"26:1-26:177\"><strong>Crafting the Backpack:</strong> Experienced craftspeople then take the woven hemp fabric and transform it into stylish backpacks, often incorporating unique designs and features.</li>\r\n<li data-sourcepos=\"27:1-28:0\"><strong>Finishing Touches:</strong> The finished backpacks undergo a final inspection and may be treated with natural oils or waxes to enhance their durability and water resistance.</li>\r\n</ul>\r\n<p data-sourcepos=\"29:1-29:202\"><strong>The Importance of Handwork:</strong> A significant amount of handwork goes into each Nepalese hemp backpack. This meticulous process, passed down through generations, imbues each bag with a unique charm and supports the livelihoods of local artisans.</p>\r\n<h3 class=\"\" data-sourcepos=\"31:1-31:40\">A Backpack for Every Urban Adventure</h3>\r\n<p data-sourcepos=\"33:1-33:115\">The beauty of Nepalese hemp backpacks lies in their versatility. Here\'s how to rock yours with New York City style:</p>\r\n<ul data-sourcepos=\"35:1-39:0\">\r\n<li data-sourcepos=\"35:1-35:282\"><strong>The Eco-Conscious Commuter:</strong> A sleek, minimalist hemp backpack is perfect for carrying your laptop, notebooks, and gym clothes to and from work. The natural look pairs beautifully with tailored trousers or a flowy dress, adding a touch of laid-back chic to your daily commute.</li>\r\n<li data-sourcepos=\"36:1-36:276\"><strong>The Weekend Explorer:</strong> Planning a day trip to explore the Hudson Valley or Brooklyn\'s trendy neighborhoods? A spacious hemp backpack can hold everything you need for your adventure &ndash; water bottle, snacks, camera, guidebook &ndash; all while remaining comfortable and stylish.</li>\r\n<li data-sourcepos=\"37:1-37:224\"><strong>The Festival Fanatic:</strong> Heading to Governors Ball or another outdoor festival? A lightweight hemp backpack is your savior. It\'ll hold your essentials without weighing you down, leaving you free to dance the night away.</li>\r\n<li data-sourcepos=\"38:1-39:0\"><strong>The Sustainable Shopper:</strong> Ditch the plastic bags! Opt for a stylish hemp backpack when hitting the farmers market or your local shops. It\'s a sustainable statement piece that promotes eco-conscious living.</li>\r\n</ul>\r\n<h3 class=\"\" data-sourcepos=\"40:1-40:40\">Sustainable Style with a Conscience</h3>\r\n<p data-sourcepos=\"42:1-42:372\">Owning a trendy hemp backpack from Nepal is more than just a fashion statement. It\'s a conscious choice that supports sustainable practices, celebrates traditional craftsmanship, and allows you to explore the city with a lighter footprint. So, ditch the mass-produced bags and invest in a piece that reflects your individual style and your commitment to a greener future.</p>', '1718522958.jpg', 'trendy-hemp-backpacks-from-nepal-sustainable-style-for-the-urban-explorer', '2024-06-16 11:29:18', '2024-06-16 11:29:18'),
(13, 'Stylish Cashmere Ponchos From Nepal: Unveiling a Timeless Wrap for the Fulham Fashionista', '<p data-sourcepos=\"3:1-3:63\">Greetings, fellow Fulham folk! Today, we take a detour from the charming streets and bustling markets to embark on a journey to the majestic Himalayas, the birthplace of a luxurious fabric: cashmere. Here, nestled amidst breathtaking peaks and steeped in ancient traditions, lies the secret behind a timeless garment &ndash; the <strong>stylish cashmere poncho from Nepal</strong>.</p>\r\n<p data-sourcepos=\"5:1-5:71\">Forget the bulky cardigans and predictable coats. Nepalese cashmere ponchos offer a touch of effortless elegance and undeniable comfort, perfectly suited for the discerning Fulham fashionista. Imagine yourself wrapped in a whisper-soft cloud, exuding sophistication whether strolling through Bishop\'s Park or enjoying an afternoon tea at a quaint cafe. So, let\'s ditch the ordinary and delve into the world of these exquisite garments, exploring their origins, the meticulous craftsmanship behind them, and how to integrate them seamlessly into your Fulham style.</p>\r\n<h3 class=\"\" data-sourcepos=\"7:1-7:57\">The Source: Chyangra Goats and the Himalayan Embrace</h3>\r\n<p data-sourcepos=\"9:1-9:127\">Nepal\'s claim to cashmere fame begins with its unique geography. High in the Himalayas roam the Chyangra goats, a special breed perfectly adapted to the harsh mountain climate. Their thick winter coats shield them from the biting cold, and it\'s this underfleece, known as Pashmina (derived from the Persian word for \"woolen shawl\"), that holds the key to our story.</p>\r\n<p data-sourcepos=\"11:1-11:244\">The cool, dry air and the specific diet of these goats contribute to the exceptional quality of their underfleece. The fibers are incredibly fine, much finer than human hair, leading to that unparalleled softness that defines Nepalese cashmere.</p>\r\n<h3 class=\"\" data-sourcepos=\"13:1-13:61\">A Timeless Tradition: From Mountain Goats to Chic Ponchos</h3>\r\n<p data-sourcepos=\"15:1-15:167\">The journey from humble beginnings to a luxurious poncho is a testament to the skill and dedication of Nepalese artisans. Here\'s a glimpse into the magic that unfolds:</p>\r\n<ul data-sourcepos=\"17:1-17:210\">\r\n<li data-sourcepos=\"17:1-17:210\"><strong>Combing with Care:</strong> Twice a year, during the moulting seasons, the Chyangra goats are gently combed by hand to collect the precious underfleece. This ensures no harm comes to the animal and allows for the selection of the finest fibers.</li>\r\n<li data-sourcepos=\"18:1-18:215\"><strong>Sorting and Cleaning:</strong> The raw fibers are meticulously sorted by hand according to their length, fineness, and color. This delicate process separates the best fibers for creating high-quality cashmere ponchos.</li>\r\n<li data-sourcepos=\"19:1-19:280\"><strong>Spinning the Yarn:</strong> Skilled artisans, often women with generations of knowledge passed down, transform the sorted fibers into fine yarn using a traditional spinning wheel called a \"charkha.\" The speed and skill of the spinner determine the thickness and quality of the yarn.</li>\r\n<li data-sourcepos=\"20:1-20:236\"><strong>Weaving the Poncho:</strong> The yarn is then woven on looms, many of which are handcrafted by local artisans. This stage allows for creating unique shapes and incorporating intricate patterns, showcasing the artistry of Nepalese weavers.</li>\r\n<li data-sourcepos=\"21:1-22:0\"><strong>Finishing Touches:</strong> The finished poncho undergoes a final inspection and may be washed and brushed to enhance its softness and luster.</li>\r\n</ul>\r\n<p data-sourcepos=\"23:1-23:239\"><strong>The Importance of Handwork:</strong> While some modern equipment might be used in specific stages, the soul of a Nepalese cashmere poncho lies in the significant amount of handwork that goes into each piece. This meticulous process imbues each poncho with a unique charm and a story waiting to be told.</p>\r\n<h3 class=\"\" data-sourcepos=\"25:1-25:44\">Beyond Luxury: Sustainability and Ethics</h3>\r\n<p data-sourcepos=\"27:1-27:171\">In today\'s conscious world, ethical sourcing and sustainability are crucial factors. The good news is that Nepalese cashmere production generally aligns with these values:</p>\r\n<ul data-sourcepos=\"29:1-32:0\">\r\n<li data-sourcepos=\"29:1-29:122\"><strong>Sustainable Goat Herding:</strong> Chyangra goats graze freely in the high pastures, minimizing their environmental impact.</li>\r\n<li data-sourcepos=\"30:1-30:156\"><strong>Low Energy Consumption:</strong> Traditional techniques used in processing and weaving rely on minimal energy consumption, making it an eco-friendly process.</li>\r\n<li data-sourcepos=\"31:1-32:0\"><strong>Fair Trade Practices:</strong> Looking for certified Fair Trade products ensures fair compensation for the artisans involved in the production process.</li>\r\n</ul>\r\n<p data-sourcepos=\"33:1-33:194\">By supporting Nepalese cashmere producers, you\'re not just acquiring a luxurious garment; you\'re contributing to the preservation of a rich cultural heritage and promoting sustainable practices.</p>\r\n<h3 class=\"\" data-sourcepos=\"35:1-35:51\">The Cashmere Poncho: A Fulham Fashion Statement</h3>\r\n<p data-sourcepos=\"37:1-37:187\">Now that you\'ve embarked on this journey into the world of Nepalese cashmere ponchos, how can you integrate them into your Fulham style? Here\'s how to turn heads with effortless elegance:</p>\r\n<ul data-sourcepos=\"39:1-41:91\">\r\n<li data-sourcepos=\"39:1-39:311\"><strong>The Classic Cashmere Poncho:</strong> This is the epitome of timeless chic. Opt for a neutral tone like beige or grey for versatility. Pair it with a crisp white shirt and tailored trousers for a sophisticated work outfit, or throw it over a flowing maxi dress for a touch of bohemian elegance at a garden party.</li>\r\n<li data-sourcepos=\"40:1-40:283\"><strong>The Statement Cashmere Poncho:</strong> Embrace bold colors or intricate patterns for a touch of personality. Imagine a vibrant red poncho adding a pop of color to a simple black dress, or a beautifully patterned poncho that becomes the focal point of your outfit at a gallery opening.</li>\r\n<li data-sourcepos=\"41:1-41:91\"><strong>The Layered Look:</strong> Cashmere ponchos are perfect for layering, offering endless outfit.</li>\r\n</ul>', '1719130002.jpg', 'stylish-cashmere-ponchos-from-nepal-unveiling-a-timeless-wrap-for-the-fulham-fashionista', '2024-06-23 12:06:42', '2024-06-23 12:06:42'),
(14, 'Buy the Best Singing Bowl From Nepal: A Guide for Inner Harmony and Exquisite Craftsmanship', '<p data-sourcepos=\"3:1-3:69\">Greetings, fellow seekers of wellness and unique treasures! Today, we embark on a journey beyond the bustling cityscapes of the USA to the mystical Himalayas of Nepal. Here, nestled amidst breathtaking peaks and steeped in ancient traditions, lies the birthplace of a fascinating instrument &ndash; the singing bowl.</p>\r\n<p data-sourcepos=\"5:1-5:96\">Singing bowls, also known as Tibetan singing bowls, are much more than just instruments. They\'re vessels of sound, believed to promote relaxation, meditation, and a sense of inner peace. But with a vast array of options available, especially from Nepal, where singing bowl craftsmanship thrives, how do you find the \"best\" one for you?</p>\r\n<p data-sourcepos=\"7:1-7:316\">Fear not, fellow explorers! This guide will equip you with the knowledge to navigate the world of Nepalese singing bowls, ensuring you acquire a piece that resonates with your needs and desires. So, grab your metaphorical walking stick, settle in, and let\'s delve into the enchanting world of Nepalese singing bowls.</p>\r\n<h3 class=\"\" data-sourcepos=\"9:1-9:58\">Understanding the Symphony: Materials and Construction</h3>\r\n<p data-sourcepos=\"11:1-11:155\">The magic of a singing bowl lies in its unique construction and materials. Here\'s a breakdown of the key factors that influence a bowl\'s sound and quality:</p>\r\n<p data-sourcepos=\"13:1-13:14\"><strong>Materials:</strong></p>\r\n<ul data-sourcepos=\"15:1-15:9\">\r\n<li data-sourcepos=\"15:1-15:9\"><strong>Metal Alloys:</strong> Traditional singing bowls are crafted from a blend of metals, often including bronze, copper, tin, and even precious metals like silver or gold. The specific combination of metals influences the sound\'s quality, pitch, and harmonics.</li>\r\n<li data-sourcepos=\"16:1-17:0\"><strong>Handcrafted vs Machine-Made:</strong> The soul of a Nepalese singing bowl lies in the hands of skilled artisans. While some bowls are now machine-made, handcrafted bowls offer a superior quality and resonance due to the meticulous attention to detail.</li>\r\n</ul>\r\n<p data-sourcepos=\"18:1-18:17\"><strong>Construction:</strong></p>\r\n<ul data-sourcepos=\"20:1-22:0\">\r\n<li data-sourcepos=\"20:1-20:214\"><strong>Shaping Techniques:</strong> Nepalese artisans employ traditional techniques like hammering and shaping to create singing bowls. These methods influence the bowl\'s thickness, which in turn affects the sound produced.</li>\r\n<li data-sourcepos=\"21:1-22:0\"><strong>Surface Finish:</strong> Some bowls have a smooth, polished finish, while others are left with a more rustic, hammered texture. This aesthetic choice doesn\'t necessarily impact the sound, but it can influence your visual preference.</li>\r\n</ul>\r\n<h3 class=\"\" data-sourcepos=\"23:1-23:71\">Finding Your Perfect Pitch: Exploring Singing Bowl Sizes and Sounds</h3>\r\n<p data-sourcepos=\"25:1-25:135\">Singing bowls come in a variety of sizes, and each size produces a distinct sound. Here\'s a basic guide to help you find the right fit:</p>\r\n<ul data-sourcepos=\"27:1-30:0\">\r\n<li data-sourcepos=\"27:1-27:196\"><strong>Small Bowls (up to 4 inches):</strong> These bowls produce high-pitched sounds, often associated with mental clarity and alertness. They\'re perfect for meditation or personal sound therapy sessions.</li>\r\n<li data-sourcepos=\"28:1-28:159\"><strong>Medium Bowls (4-8 inches):</strong> These bowls offer a broader range of sound frequencies, making them versatile for both meditation and sound healing purposes.</li>\r\n<li data-sourcepos=\"29:1-30:0\"><strong>Large Bowls (8 inches and above):</strong> These bowls produce deep, resonant sounds often linked to relaxation, stress reduction, and promoting balance. They\'re ideal for sound baths or creating a calming atmosphere.</li>\r\n</ul>\r\n<p data-sourcepos=\"31:1-31:161\"><strong>Important Note:</strong> It\'s not always about size! The quality of craftsmanship and the specific metal alloy used can also influence the sound of a singing bowl.</p>\r\n<h3 class=\"\" data-sourcepos=\"33:1-33:61\">Beyond the Basics: Additional Features and Considerations</h3>\r\n<p data-sourcepos=\"35:1-35:115\">While size and materials are key, here are some additional factors to consider when buying a Nepalese singing bowl:</p>\r\n<ul data-sourcepos=\"37:1-37:13\">\r\n<li data-sourcepos=\"37:1-37:13\"><strong>Playing Mallets:</strong> Many bowls come with a mallet, traditionally made of wood or wrapped in felt. The type of mallet can affect the way you play the bowl and the resulting sound.</li>\r\n<li data-sourcepos=\"38:1-38:105\"><strong>Cushions:</strong> Some singers bowls rest on a cushion or ring, which can enhance the sound and stability.</li>\r\n<li data-sourcepos=\"39:1-39:135\"><strong>Engravings or Embellishments:</strong> Some singing bowls have decorative engravings or embellishments, adding to their aesthetic appeal.</li>\r\n<li data-sourcepos=\"40:1-41:0\"><strong>Fair Trade Certification:</strong> Supporting fair trade practices ensures ethical sourcing and proper compensation for the Nepalese artisans involved in creating the singing bowl.</li>\r\n</ul>\r\n<h3 class=\"\" data-sourcepos=\"42:1-42:69\">The Hunt Begins: Where to Buy a Nepalese Singing Bowl in the USA</h3>\r\n<p data-sourcepos=\"44:1-44:112\">Now that you\'re armed with knowledge, let\'s explore your options for finding a Nepalese singing bowl in the USA:</p>\r\n<ul data-sourcepos=\"46:1-50:0\">\r\n<li data-sourcepos=\"46:1-46:219\"><strong>Online Retailers:</strong> Several reputable online retailers specialize in ethically sourced singing bowls directly from Nepal. Look for websites with detailed descriptions, quality photos, and positive customer reviews.</li>\r\n<li data-sourcepos=\"47:1-47:142\"><strong>Importer Shops:</strong> Some specialty import shops, particularly those focusing on Asian art and culture, might carry Nepalese singing bowls.</li>\r\n<li data-sourcepos=\"48:1-48:115\"><strong>Mindfulness Centers and Yoga Studios:</strong> These establishments sometimes sell singing bowls as meditation tools.</li>\r\n<li data-sourcepos=\"49:1-50:0\"><strong>Travelling Events:</strong> Keep an eye out for cultural events or festivals featuring Nepalese artisans, where you can directly purchase a singing bowl and appreciate the craftsmanship firsthand.</li>\r\n</ul>', '1719130659.jpg', 'buy-the-best-singing-bowl-from-nepal-a-guide-for-inner-harmony-and-exquisite-craftsmanship', '2024-06-23 12:17:39', '2024-06-23 12:17:39'),
(15, 'Shop for the Best Felt Products from Nepal: Where Quality Meets Tradition in the Heart of the Himalayas', '<p data-sourcepos=\"3:1-3:71\">Greetings, meine lieben Freunde (my dear friends) in Austria! Today, we take a virtual journey beyond the snow-capped peaks of the Alps and embark on an adventure to the majestic Himalayas, the birthplace of a fascinating craft &ndash; Nepalese felt.</p>\r\n<p data-sourcepos=\"5:1-5:170\">Felt, that wonderfully versatile and warm material, takes on a whole new meaning when we venture into the heart of Nepal. Here, nestled amidst breathtaking landscapes and steeped in ancient traditions, skilled artisans transform raw wool into a stunning array of felt products, renowned for their exceptional quality, vibrant colors, and intricate designs.</p>\r\n<p data-sourcepos=\"7:1-7:423\">So, whether you\'re seeking a cozy scarf to ward off winter chills or a unique decorative piece to add a touch of the Himalayas to your Austrian home, this guide will equip you with the knowledge to shop for the best Nepalese felt products. From understanding the traditional production methods to navigating different buying options, we\'ll ensure you find a piece that reflects both Nepalese artistry and your unique style.</p>\r\n<h3 class=\"\" data-sourcepos=\"9:1-9:61\">From Sheep to Shop: The Magic of Nepalese Felt Production</h3>\r\n<p data-sourcepos=\"11:1-11:11\">The journey of a Nepalese felt product begins in the high pastures of the Himalayas, where sheep graze freely in the crisp mountain air. Here\'s a glimpse into the remarkable process that transforms raw wool into exquisite felt:</p>\r\n<ul data-sourcepos=\"13:1-17:0\">\r\n<li data-sourcepos=\"13:1-13:223\"><strong>The Source: Quality Wool:</strong> Nepalese felt uses wool from indigenous sheep breeds known for their thick, insulating fleeces. This high-quality wool contributes significantly to the final product\'s warmth and durability.</li>\r\n<li data-sourcepos=\"14:1-14:191\"><strong>Carding and Layering:</strong> Skilled artisans meticulously card the raw wool, aligning the fibers to create a smooth, even layer. This crucial step ensures the felt\'s strength and uniformity.</li>\r\n<li data-sourcepos=\"15:1-15:208\"><strong>Wet Felting:</strong> The layered wool is then subjected to a traditional wet felting process using water and soap. By applying pressure and friction, the fibers intertwine, creating a dense and felted material.</li>\r\n<li data-sourcepos=\"16:1-17:0\"><strong>Drying and Finishing:</strong> The felted wool is carefully shaped, dried, and sometimes dyed using natural pigments. The final touches may involve intricate hand embroidery or other embellishments, showcasing the artistry of Nepalese craftspeople.</li>\r\n</ul>\r\n<p data-sourcepos=\"18:1-18:19\"><strong>The Importance of Handwork:</strong> A significant amount of handwork goes into every piece of Nepalese felt. This meticulous process, passed down through generations, imbues each product with a distinct character and tells a story of cultural heritage.</p>\r\n<h3 class=\"\" data-sourcepos=\"20:1-20:48\">Beyond Beauty: Sustainability and Fair Trade</h3>\r\n<p data-sourcepos=\"22:1-22:138\">In today\'s world, ethical and sustainable practices are vital considerations. Here\'s what makes Nepalese felt production a winning choice:</p>\r\n<ul data-sourcepos=\"24:1-27:0\">\r\n<li data-sourcepos=\"24:1-24:147\"><strong>Natural Materials:</strong> Felt is made from wool, a naturally renewable resource, making it an eco-friendly option compared to synthetic materials.</li>\r\n<li data-sourcepos=\"25:1-25:117\"><strong>Low Energy Consumption:</strong> Traditional wet felting relies on minimal energy, minimizing its environmental impact.</li>\r\n<li data-sourcepos=\"26:1-27:0\"><strong>Fair Trade Practices:</strong> Looking for certified Fair Trade products ensures fair compensation for the Nepalese artisans who create these beautiful pieces.</li>\r\n</ul>\r\n<p data-sourcepos=\"28:1-28:200\">By supporting Nepalese felt producers, you\'re not just acquiring a unique and stylish product; you\'re contributing to the preservation of a rich cultural tradition and promoting sustainable practices.</p>\r\n<h3 class=\"\" data-sourcepos=\"30:1-30:77\">A Touch of Nepal in Your Austrian Home: Exploring Nepalese Felt Products</h3>\r\n<p data-sourcepos=\"32:1-32:158\">Now that you\'ve embarked on this journey into the world of Nepalese felt, let\'s explore how you can integrate this beautiful material into your Austrian home:</p>\r\n<ul data-sourcepos=\"34:1-34:73\">\r\n<li data-sourcepos=\"34:1-34:73\"><strong>Cozy Winter Essentials:</strong> Embrace the warmth of the Himalayas with a hand-felted scarf or hat. The natural insulating properties of wool will keep you toasty during those chilly Austrian winters.</li>\r\n<li data-sourcepos=\"35:1-35:162\"><strong>Home Decor with a Touch of Himalayan Charm:</strong> Nepalese felt wall hangings, rugs, or coasters add a vibrant touch and showcase the artistic heritage of Nepal.</li>\r\n<li data-sourcepos=\"36:1-37:0\"><strong>Unique Gifts with a Story:</strong> Spoil your loved ones with a hand-felted tote bag, phone case, or decorative ornament. Each piece is a unique and meaningful gift that tells a story of craftsmanship and cultural exchange.</li>\r\n</ul>\r\n<h3 class=\"\" data-sourcepos=\"38:1-38:66\">Shopping for Nepalese Felt in Austria: Exploring Your Options</h3>\r\n<p data-sourcepos=\"40:1-40:161\">While Nepal might seem geographically distant, finding high-quality Nepalese felt products in Austria is easier than you might think. Here are some ways to shop:</p>\r\n<ul data-sourcepos=\"42:1-45:0\">\r\n<li data-sourcepos=\"42:1-42:210\"><strong>Online Marketplaces:</strong> Several reputable online retailers specialize in ethically sourced Nepalese felt products. Look for websites with detailed descriptions, quality photos, and positive customer reviews.</li>\r\n<li data-sourcepos=\"43:1-43:128\"><strong>Specialty Import Shops:</strong> Some stores specializing in Asian crafts or fair trade goods might carry Nepalese felt products.</li>\r\n<li data-sourcepos=\"44:1-45:0\"><strong>Travel Souvenirs:</strong> If you\'re fortunate enough to visit Nepal yourself, consider purchasing felt products directly from local artisans or shops in Kathmandu or other cultural hubs. This allows you to appreciate the craftsmanship firsthand and potentially bargain for a unique piece.</li>\r\n</ul>', '1719131468.jpg', 'shop-for-the-best-felt-products-from-nepal-where-quality-meets-tradition-in-the-heart-of-the-himalayas', '2024-06-23 12:29:19', '2024-06-23 12:31:08');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `slug`, `brand_name`, `brand_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'dell', 'DELL', '1761761557.png', 1, '2020-10-20 22:33:04', '2025-10-29 12:27:37'),
(5, 'samsung', 'Samsung', '1761761566.png', 1, '2021-01-31 11:20:06', '2025-10-29 12:27:46'),
(10, 'ugreen', 'UGREEN', '1761761621.png', 1, '2025-08-30 11:05:12', '2025-10-29 12:28:41'),
(11, 'tiandy', 'Tiandy', '1761761747.webp', 1, '2025-10-29 12:30:47', '2025-10-29 12:30:47'),
(12, 'hikvision', 'Hikvision', '1761761919.png', 1, '2025-10-29 12:33:39', '2025-10-29 12:33:39'),
(13, 'hp', 'Hp', '1761761994.jpg', 1, '2025-10-29 12:34:54', '2025-10-29 12:34:54'),
(14, 'hi-tech', 'Hi-Tech', '1761762136.jpg', 1, '2025-10-29 12:37:16', '2025-10-29 12:37:16'),
(15, 'msi', 'Msi', '1761762278.png', 1, '2025-10-29 12:39:38', '2025-10-29 12:39:38'),
(16, 'miccell', 'Miccell', '1762685813.png', 1, '2025-11-09 05:11:53', '2025-11-09 05:11:53'),
(17, 'logitech', 'Logitech', '1764091409.png', 1, '2025-11-25 11:38:29', '2025-11-25 11:38:29'),
(18, 'anker', 'Anker', '1764091498.png', 1, '2025-11-25 11:39:58', '2025-11-25 11:39:58'),
(19, 'belkin', 'Belkin', '1764091553.png', 1, '2025-11-25 11:40:53', '2025-11-25 11:40:53'),
(20, 'kingston', 'Kingston', '1764091626.png', 1, '2025-11-25 11:42:06', '2025-11-25 11:42:06'),
(21, 'asus', 'ASUS', '1764091837.png', 1, '2025-11-25 11:45:37', '2025-11-25 11:45:37'),
(22, 'benq', 'BenQ', '1764091896.png', 1, '2025-11-25 11:46:36', '2025-11-25 11:46:36'),
(23, 'rapoo', 'Rapoo', '1764092007.png', 1, '2025-11-25 11:48:27', '2025-11-25 11:48:27'),
(24, 'verbatim', 'Verbatim', '1764092059.png', 1, '2025-11-25 11:49:19', '2025-11-25 11:49:19'),
(25, 'microsoft', 'Microsoft', '1764092128.png', 1, '2025-11-25 11:50:28', '2025-11-25 11:50:28'),
(26, 'apple', 'Apple', '1764092196.png', 1, '2025-11-25 11:51:36', '2025-11-25 11:51:36'),
(27, 'lenovo', 'Lenovo', '1764092241.png', 1, '2025-11-25 11:52:21', '2025-11-25 11:52:21'),
(28, 'sandisk', 'SanDisk', '1764092303.png', 1, '2025-11-25 11:53:23', '2025-11-25 11:53:23'),
(29, 'seagate', 'Seagate', '1764092339.png', 1, '2025-11-25 11:53:59', '2025-11-25 11:53:59'),
(30, 'transcend', 'Transcend', '1764092382.png', 1, '2025-11-25 11:54:42', '2025-11-25 11:54:42'),
(31, 'adata', 'ADATA', '1764092418.png', 1, '2025-11-25 11:55:18', '2025-11-25 11:55:18'),
(32, 'lexar', 'Lexar', '1764092454.png', 1, '2025-11-25 11:55:54', '2025-11-25 11:55:54'),
(33, 'tp-link', 'TP-Link', '1764092521.png', 1, '2025-11-25 11:57:01', '2025-11-25 11:57:01'),
(34, 'netgear', 'Netgear', '1764092563.png', 1, '2025-11-25 11:57:43', '2025-11-25 11:57:43'),
(35, 'd-link', 'D-Link', '1764092600.png', 1, '2025-11-25 11:58:20', '2025-11-25 11:58:20'),
(36, 'linksys', 'Linksys', '1764092644.jpg', 1, '2025-11-25 11:59:04', '2025-11-25 11:59:04'),
(37, 'ubiquiti', 'Ubiquiti', '1764092680.png', 1, '2025-11-25 11:59:40', '2025-11-25 11:59:40'),
(38, 'jbl', 'JBL', '1764092740.png', 1, '2025-11-25 12:00:40', '2025-11-25 12:00:40'),
(39, 'sony', 'Sony', '1764092785.png', 1, '2025-11-25 12:01:25', '2025-11-25 12:01:25'),
(40, 'viewsonic', 'ViewSonic', '1764092844.png', 1, '2025-11-25 12:02:24', '2025-11-25 12:02:24'),
(41, 'philips', 'Philips', '1764092890.png', 1, '2025-11-25 12:03:10', '2025-11-25 12:03:10'),
(42, 'apc', 'APC', '1764092951.png', 1, '2025-11-25 12:04:11', '2025-11-25 12:04:11'),
(43, 'brother', 'Brother', '1764093036.png', 1, '2025-11-25 12:05:36', '2025-11-25 12:05:36'),
(44, 'canon', 'Canon', '1764093085.png', 1, '2025-11-25 12:06:25', '2025-11-25 12:06:25'),
(45, 'cisco', 'Cisco', '1764093121.png', 1, '2025-11-25 12:07:01', '2025-11-25 12:07:01'),
(46, 'cooler-master', 'Cooler Master', '1764093156.png', 1, '2025-11-25 12:07:36', '2025-11-25 12:07:36'),
(47, 'epson', 'Epson', '1764093215.png', 1, '2025-11-25 12:08:35', '2025-11-25 12:08:35'),
(48, 'havit', 'Havit', '1764093287.png', 1, '2025-11-25 12:09:47', '2025-11-25 12:09:47'),
(49, 'huawei', 'Huawei', '1764093323.png', 1, '2025-11-25 12:10:23', '2025-11-25 12:10:23'),
(50, 'kaspersky', 'Kaspersky', '1764093470.jpg', 1, '2025-11-25 12:12:50', '2025-11-25 12:12:50'),
(51, 'wd', 'WD', '1764093586.png', 1, '2025-11-25 12:14:46', '2025-11-25 12:14:46'),
(52, 'mikrotik', 'MikroTik', '1764093671.png', 1, '2025-11-25 12:16:11', '2025-11-25 12:16:11'),
(53, 'fortinet', 'Fortinet', '1764093710.png', 1, '2025-11-25 12:16:50', '2025-11-25 12:16:50'),
(54, 'palo-alto-networks', 'Palo Alto Networks', '1764093748.png', 1, '2025-11-25 12:17:28', '2025-11-25 12:17:28'),
(55, 'sophos', 'Sophos', '1764093785.png', 1, '2025-11-25 12:18:05', '2025-11-25 12:18:05'),
(56, 'tenda', 'Tenda', '1764093820.png', 1, '2025-11-25 12:18:40', '2025-11-25 12:18:40'),
(57, 'totolink', 'TOTOLINK', '1764093868.png', 1, '2025-11-25 12:19:28', '2025-11-25 12:19:28'),
(58, 'trendnet', 'TRENDnet', '1764093938.jpg', 1, '2025-11-25 12:20:38', '2025-11-25 12:20:38'),
(59, 'panduit', 'Panduit', '1764093989.png', 1, '2025-11-25 12:21:29', '2025-11-25 12:21:29'),
(60, 'dahua', 'Dahua', '1764094050.png', 1, '2025-11-25 12:22:30', '2025-11-25 12:22:30'),
(61, 'ezviz', 'Ezviz', '1765907281.jpg', 1, '2025-12-16 12:03:01', '2025-12-16 12:03:01'),
(63, 'ruijie-reyee', 'Ruijie Reyee', '1766852694.svg', 1, '2025-12-27 10:39:54', '2025-12-27 10:39:54');

-- --------------------------------------------------------

--
-- Table structure for table `brand_discounts`
--

CREATE TABLE `brand_discounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `discount_type` enum('percentage','fixed') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'percentage',
  `discount_value` decimal(10,2) DEFAULT NULL,
  `starts_at` date DEFAULT NULL,
  `ends_at` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brand_discounts`
--

INSERT INTO `brand_discounts` (`id`, `brand_id`, `discount_type`, `discount_value`, `starts_at`, `ends_at`, `created_at`, `updated_at`) VALUES
(2, 10, 'percentage', 50.00, '2025-08-30', '2025-09-30', '2025-07-22 05:40:43', '2025-08-30 11:06:14');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_special` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_header` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `in_home` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_footer` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `in_slider` tinyint(1) NOT NULL DEFAULT '0',
  `in_moving_text` tinyint(1) NOT NULL DEFAULT '0',
  `meta_title` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `name`, `caption`, `description`, `slug`, `image`, `banner`, `is_special`, `status`, `is_header`, `in_home`, `is_footer`, `in_slider`, `in_moving_text`, `meta_title`, `meta_description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 0, 'Laptop', NULL, '<p>Cashmere products are luxury items made from the soft undercoat of cashmere goats. This incredibly fine fiber is known for its unmatched softness, warmth, and lightweight feel. Cashmere garments, like sweaters, scarves, and hats, are prized for their ability to drape elegantly and provide exceptional insulation.  The natural fiber comes in a variety of styles, making it a versatile choice for both cozy comfort and adding a touch of sophistication to your wardrobe.sss</p>', 'laptop', '1756271050_68ae91ca51b39.jpg', NULL, NULL, '1', '0', '1', '1', 1, 1, 'dfadfad', 'adsfads', NULL, '2020-10-20 22:34:36', '2025-09-23 02:11:57'),
(22, 1, 'Dell Laptop', NULL, NULL, 'dell-laptop', NULL, NULL, '0', '1', '0', '0', '0', 0, 0, NULL, NULL, NULL, '2022-09-23 12:04:15', '2025-09-12 04:44:44'),
(25, 1, 'Acer Laptop', NULL, '<p>Hemp, a relative of cannabis, boasts a surprising range of uses. The strong, fibrous stalks of the hemp plant are processed into durable materials like rope, twine, and even high-quality textiles for clothing and home furnishings.  Hemp\'s eco-friendly properties are another perk - it grows quickly and requires minimal water and pesticides.  But hemp\'s uses extend far beyond textiles. The nutritious seeds are a complete protein source and can be eaten whole, ground into flour, or pressed for oil used in cooking and beauty products. The woody inner core of the hemp stalk (hemp hurd) finds uses in construction materials like insulation and even hempcrete, a sustainable alternative to concrete. Overall, hemp is a versatile and valuable resource with applications in many aspects of our lives.</p>', 'acer-laptop', NULL, NULL, '0', '1', '0', '0', '0', 0, 0, NULL, NULL, NULL, '2022-09-23 12:06:07', '2025-09-12 04:45:29'),
(32, 1, 'Asus Laptop', NULL, NULL, 'asus-laptop', NULL, NULL, '0', '1', '0', '0', '0', 0, 0, NULL, NULL, NULL, '2022-09-23 12:50:36', '2025-09-12 04:46:18'),
(38, 1, 'Apple', NULL, NULL, 'apple', NULL, NULL, '0', '1', '0', '0', '0', 0, 0, NULL, NULL, NULL, '2022-09-23 12:57:50', '2025-12-16 11:47:05'),
(83, 1, 'Lenovo', NULL, NULL, 'lenovo', NULL, NULL, NULL, '1', '0', '0', '0', 0, 0, NULL, NULL, NULL, '2025-09-12 05:05:51', '2025-09-12 05:05:51'),
(84, 0, 'Black Friday', 'Black Friday', NULL, 'black-friday', NULL, NULL, NULL, '0', '0', '0', '0', 0, 0, NULL, NULL, NULL, '2025-09-23 02:19:01', '2025-11-17 02:14:29'),
(85, 86, 'MacBook Air', 'MacBook Air', NULL, 'macbook-air', NULL, NULL, NULL, '1', '1', '0', '0', 0, 0, NULL, NULL, NULL, '2025-11-09 05:19:35', '2025-11-09 05:29:27'),
(86, 38, 'Mac', NULL, NULL, 'mac', NULL, NULL, NULL, '1', '0', '0', '0', 0, 0, NULL, NULL, NULL, '2025-11-09 05:29:08', '2025-11-09 05:29:08'),
(88, 0, 'Computer & Accessories', NULL, NULL, 'computer-accessories', '1765908200_69419ee80000c.avif', NULL, NULL, '1', '0', '1', '0', 0, 0, NULL, NULL, NULL, '2025-11-09 05:39:30', '2025-12-16 12:18:20'),
(89, 88, 'Monitors', NULL, NULL, 'monitors', NULL, NULL, NULL, '1', '0', '0', '0', 0, 0, NULL, NULL, NULL, '2025-11-09 05:40:18', '2025-12-16 11:21:33'),
(90, 88, 'Desktop', NULL, NULL, 'desktop', NULL, NULL, NULL, '1', '0', '0', '0', 0, 0, NULL, NULL, NULL, '2025-11-09 05:40:38', '2025-12-16 11:21:56'),
(91, 0, 'Network Accessories', NULL, NULL, 'network-accessories', '1765908276_69419f34db6de.png', NULL, NULL, '1', '0', '1', '0', 0, 0, NULL, NULL, NULL, '2025-11-09 05:42:02', '2025-12-16 12:19:36'),
(92, 91, 'Router & Switches', NULL, NULL, 'router-switches', NULL, NULL, NULL, '1', '0', '0', '0', 0, 0, NULL, NULL, NULL, '2025-11-09 05:43:47', '2025-11-09 05:43:47'),
(93, 91, 'Cat6 Cable', NULL, NULL, 'cat6-cable', NULL, NULL, NULL, '1', '0', '0', '0', 0, 0, NULL, NULL, NULL, '2025-11-09 05:44:58', '2025-11-09 05:48:42'),
(94, 93, 'Dahua', NULL, NULL, 'dahua', NULL, NULL, NULL, '1', '0', '0', '0', 0, 0, NULL, NULL, NULL, '2025-11-09 05:47:11', '2025-11-09 05:47:11'),
(95, 93, 'Prolink', NULL, NULL, 'prolink', NULL, NULL, NULL, '1', '0', '0', '0', 0, 0, NULL, NULL, NULL, '2025-11-09 05:47:22', '2025-11-09 05:47:22'),
(96, 93, 'D-Link', NULL, NULL, 'd-link', NULL, NULL, NULL, '1', '0', '0', '0', 0, 0, NULL, NULL, NULL, '2025-11-09 05:47:36', '2025-11-09 05:47:36'),
(97, 93, 'Digicom', NULL, NULL, 'digicom', NULL, NULL, NULL, '1', '0', '0', '0', 0, 0, NULL, NULL, NULL, '2025-11-09 05:51:42', '2025-11-09 05:51:42'),
(98, 92, 'Rujie', NULL, NULL, 'rujie', NULL, NULL, NULL, '1', '0', '0', '0', 0, 0, NULL, NULL, NULL, '2025-11-09 06:13:07', '2025-11-09 06:13:07'),
(99, 92, 'Cisco', NULL, NULL, 'cisco', NULL, NULL, NULL, '1', '0', '0', '0', 0, 0, NULL, NULL, NULL, '2025-11-09 06:13:19', '2025-11-09 06:13:19'),
(100, 92, 'TP-link', NULL, NULL, 'tp-link', NULL, NULL, NULL, '1', '0', '0', '0', 0, 0, NULL, NULL, NULL, '2025-11-09 06:13:45', '2025-11-09 06:13:45'),
(101, 92, 'Raisecom', NULL, NULL, 'raisecom', NULL, NULL, NULL, '1', '0', '0', '0', 0, 0, NULL, NULL, NULL, '2025-11-09 06:14:31', '2025-11-09 06:14:31'),
(102, 91, 'Networking Rack', NULL, NULL, 'networking-rack', NULL, NULL, NULL, '1', '0', '0', '0', 0, 0, NULL, NULL, NULL, '2025-11-09 06:20:48', '2025-11-09 06:20:48'),
(103, 102, 'Panduit', NULL, NULL, 'panduit', NULL, NULL, NULL, '1', '0', '0', '0', 0, 0, NULL, NULL, NULL, '2025-11-09 06:22:32', '2025-11-09 06:22:32'),
(104, 102, 'D-Link', NULL, NULL, 'd-link-1', NULL, NULL, NULL, '1', '0', '0', '0', 0, 0, NULL, NULL, NULL, '2025-11-09 06:24:52', '2025-12-19 12:17:30'),
(105, 38, 'IPHONE', NULL, NULL, 'iphone', NULL, NULL, NULL, '1', '0', '0', '0', 1, 0, NULL, NULL, NULL, '2025-11-09 06:25:05', '2025-11-09 06:30:55'),
(106, 104, '4U', NULL, NULL, '4u', NULL, NULL, NULL, '1', '0', '0', '0', 0, 0, NULL, NULL, NULL, '2025-11-09 06:25:16', '2025-11-09 06:25:16'),
(107, 104, '9U', NULL, NULL, '9u', NULL, NULL, NULL, '1', '0', '0', '0', 0, 0, NULL, NULL, NULL, '2025-11-09 06:25:32', '2025-11-09 06:25:32'),
(109, 38, 'ACCESSORIES', NULL, NULL, 'accessories', NULL, NULL, NULL, '1', '0', '0', '0', 0, 0, NULL, NULL, NULL, '2025-11-09 06:32:20', '2025-11-09 06:32:20'),
(110, 88, 'Flash Drive', NULL, NULL, 'flash-drive', NULL, NULL, NULL, '1', '0', '0', '0', 0, 0, NULL, NULL, NULL, '2025-12-16 11:35:00', '2025-12-16 11:35:00'),
(111, 88, 'Mouse', NULL, NULL, 'mouse', NULL, NULL, NULL, '1', '0', '0', '0', 0, 0, NULL, NULL, NULL, '2025-12-16 11:36:29', '2025-12-16 11:36:29'),
(112, 88, 'Ink Toner, & Cartridges', NULL, NULL, 'ink-toner-cartridges', NULL, NULL, NULL, '1', '0', '0', '0', 0, 0, NULL, NULL, NULL, '2025-12-16 11:38:07', '2025-12-16 11:38:07'),
(113, 88, 'Keyboard', NULL, NULL, 'keyboard', NULL, NULL, NULL, '1', '0', '0', '0', 0, 0, NULL, NULL, NULL, '2025-12-16 11:38:28', '2025-12-16 11:38:28'),
(114, 86, 'iMac', NULL, NULL, 'imac', NULL, NULL, NULL, '1', '0', '0', '0', 0, 0, NULL, NULL, NULL, '2025-12-16 11:39:40', '2025-12-16 11:39:40'),
(115, 0, 'Appliances', NULL, NULL, 'appliances', NULL, NULL, NULL, '1', '0', '0', '0', 0, 0, NULL, NULL, NULL, '2025-12-16 11:40:38', '2025-12-16 11:40:38'),
(116, 115, 'Electric Water Heater', NULL, NULL, 'electric-water-heater', NULL, NULL, NULL, '1', '0', '0', '0', 0, 0, NULL, NULL, NULL, '2025-12-16 11:41:08', '2025-12-16 11:41:08'),
(117, 115, 'Landline Phones & Parts', NULL, NULL, 'landline-phones-parts', NULL, NULL, NULL, '1', '0', '0', '0', 0, 0, NULL, NULL, NULL, '2025-12-16 11:41:28', '2025-12-16 11:41:28'),
(118, 115, 'Vacuum Cleaner', NULL, NULL, 'vacuum-cleaner', NULL, NULL, NULL, '1', '0', '0', '0', 0, 0, NULL, NULL, NULL, '2025-12-16 11:41:57', '2025-12-16 11:41:57'),
(119, 38, 'Airpods', NULL, NULL, 'airpods', NULL, NULL, NULL, '1', '0', '0', '0', 0, 0, NULL, NULL, NULL, '2025-12-16 11:42:23', '2025-12-16 11:42:23'),
(120, 88, 'Bluetooth Earbuds', NULL, NULL, 'bluetooth-earbuds', NULL, NULL, NULL, '1', '0', '0', '0', 0, 0, NULL, NULL, NULL, '2025-12-16 11:42:40', '2025-12-16 11:42:40'),
(121, 88, 'Gaming Headphone', NULL, NULL, 'gaming-headphone', NULL, NULL, NULL, '1', '0', '0', '0', 0, 0, NULL, NULL, NULL, '2025-12-16 11:42:54', '2025-12-16 11:42:54'),
(122, 88, 'Audio Devices', NULL, NULL, 'audio-devices', NULL, NULL, NULL, '1', '0', '0', '0', 0, 0, NULL, NULL, NULL, '2025-12-16 11:43:21', '2025-12-16 11:43:21'),
(123, 122, 'Headphone', NULL, NULL, 'headphone', NULL, NULL, NULL, '1', '0', '0', '0', 0, 0, NULL, NULL, NULL, '2025-12-16 11:43:59', '2025-12-16 11:43:59'),
(124, 122, 'Microphone', NULL, NULL, 'microphone', NULL, NULL, NULL, '1', '0', '0', '0', 0, 0, NULL, NULL, NULL, '2025-12-16 11:44:18', '2025-12-16 11:44:18'),
(125, 122, 'Speaker', NULL, NULL, 'speaker', NULL, NULL, NULL, '1', '0', '0', '0', 0, 0, NULL, NULL, NULL, '2025-12-16 11:44:33', '2025-12-16 11:44:33'),
(126, 122, 'Earphone', NULL, NULL, 'earphone', NULL, NULL, NULL, '1', '0', '0', '0', 0, 0, NULL, NULL, NULL, '2025-12-16 11:44:49', '2025-12-16 11:44:49'),
(127, 0, 'Security & Surveillance', NULL, NULL, 'security-surveillance', '1765908090_69419e7a1276c.webp', NULL, NULL, '1', '0', '1', '0', 0, 0, NULL, NULL, NULL, '2025-12-16 11:45:30', '2025-12-16 12:23:03'),
(128, 134, 'Ezviz', NULL, NULL, 'ezviz', NULL, '1765909272_6941a3183dda4.jpg', NULL, '1', '0', '0', '0', 0, 0, NULL, NULL, NULL, '2025-12-16 12:05:45', '2025-12-16 12:36:12'),
(129, 134, 'Hikvision', NULL, NULL, 'hikvision', NULL, NULL, NULL, '1', '0', '0', '0', 0, 0, NULL, NULL, NULL, '2025-12-16 12:09:28', '2025-12-16 12:33:35'),
(130, 128, 'Camera', NULL, NULL, 'camera', NULL, NULL, NULL, '1', '0', '0', '0', 0, 0, NULL, NULL, NULL, '2025-12-16 12:11:27', '2025-12-16 12:11:27'),
(131, 129, 'NVR', NULL, NULL, 'nvr', NULL, NULL, NULL, '1', '0', '0', '0', 0, 0, NULL, NULL, NULL, '2025-12-16 12:12:11', '2025-12-16 12:12:11'),
(132, 129, 'DVR', NULL, NULL, 'dvr', NULL, NULL, NULL, '1', '0', '0', '0', 0, 0, NULL, NULL, NULL, '2025-12-16 12:12:25', '2025-12-16 12:12:25'),
(133, 127, 'Biometrics', NULL, NULL, 'biometrics', NULL, NULL, NULL, '1', '0', '0', '0', 0, 0, NULL, NULL, NULL, '2025-12-16 12:25:01', '2025-12-16 12:25:01'),
(134, 127, 'CC Camera', NULL, NULL, 'cc-camera', NULL, NULL, NULL, '1', '0', '0', '0', 0, 0, NULL, NULL, NULL, '2025-12-16 12:25:33', '2025-12-16 12:25:33'),
(135, 88, 'Storage Device', NULL, NULL, 'storage-device', NULL, NULL, NULL, '1', '0', '0', '0', 0, 0, NULL, NULL, NULL, '2025-12-16 12:26:51', '2025-12-16 12:26:51'),
(136, 135, 'External Hard Drive', NULL, NULL, 'external-hard-drive', NULL, NULL, NULL, '1', '0', '0', '0', 0, 0, NULL, NULL, NULL, '2025-12-16 12:27:15', '2025-12-16 12:27:15'),
(137, 135, 'Internal HDD', NULL, NULL, 'internal-hdd', NULL, NULL, NULL, '1', '0', '0', '0', 0, 0, NULL, NULL, NULL, '2025-12-16 12:27:36', '2025-12-16 12:27:36'),
(138, 135, 'MicroSD', NULL, NULL, 'microsd', NULL, NULL, NULL, '1', '0', '0', '0', 0, 0, NULL, NULL, NULL, '2025-12-16 12:27:55', '2025-12-16 12:27:55'),
(139, 135, 'SSD', NULL, NULL, 'ssd', NULL, NULL, NULL, '1', '0', '0', '0', 0, 0, NULL, NULL, NULL, '2025-12-16 12:28:08', '2025-12-16 12:28:08'),
(140, 1, 'Lenovo Laptops', NULL, NULL, 'lenovo-laptops', NULL, NULL, NULL, '1', '0', '0', '0', 0, 0, NULL, NULL, NULL, '2025-12-16 12:31:06', '2025-12-16 12:31:06'),
(141, 100, 'Amazfit Bip 3 Pro', NULL, NULL, 'amazfit-bip-3-pro', NULL, NULL, NULL, '1', '0', '0', '0', 0, 0, NULL, NULL, NULL, '2025-12-19 12:18:18', '2025-12-19 12:18:18');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) VALUES
(1, 'Kathmandu', 1, '2020-10-20 22:40:33', '2020-10-20 22:40:33'),
(2, 'Dharan', 1, '2020-10-20 22:40:40', '2020-10-20 22:40:40'),
(3, 'Melbourne', 2, '2020-10-20 22:41:03', '2020-10-20 22:41:03'),
(4, 'Sydney', 2, '2020-10-20 22:41:14', '2020-10-20 22:41:14');

-- --------------------------------------------------------

--
-- Table structure for table `cl_banner`
--

CREATE TABLE `cl_banner` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caption` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture` text COLLATE utf8mb4_unicode_ci,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cl_banner`
--

INSERT INTO `cl_banner` (`id`, `title`, `slug`, `caption`, `content`, `picture`, `link`, `status`, `created_at`, `updated_at`) VALUES
(13, 'Banner First', NULL, NULL, NULL, '1761762413_69025c6dcc0ea.jpeg', NULL, '1', '2025-08-20 23:57:39', '2025-10-29 12:41:53'),
(14, 'Banner 2', NULL, NULL, NULL, '1761762400_69025c60e1165.jpeg', NULL, '1', '2025-08-20 23:58:01', '2025-10-29 12:41:40');

-- --------------------------------------------------------

--
-- Table structure for table `cl_posts`
--

CREATE TABLE `cl_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `associated_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_content` longtext COLLATE utf8mb4_unicode_ci,
  `post_excerpt` text COLLATE utf8mb4_unicode_ci,
  `price` int(11) DEFAULT NULL,
  `template` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uri` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visitor` int(11) DEFAULT NULL,
  `post_type` int(11) DEFAULT NULL,
  `post_parent` bigint(20) UNSIGNED DEFAULT NULL,
  `post_order` int(11) DEFAULT '0',
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `external_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `is_header` int(11) DEFAULT '0',
  `is_footer` int(11) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cl_posts`
--

INSERT INTO `cl_posts` (`id`, `post_title`, `sub_title`, `associated_title`, `post_content`, `post_excerpt`, `price`, `template`, `uri`, `page_key`, `visitor`, `post_type`, `post_parent`, `post_order`, `thumbnail`, `banner`, `meta_keyword`, `meta_description`, `external_link`, `status`, `is_header`, `is_footer`, `created_at`, `updated_at`) VALUES
(1, 'Cloud Computing', 'By accessing this website or placing an order, you agree to accept all the terms listed below.', 'Cloud Computing Solutions', 'Our Cloud Services Include:\r\nInfrastructure as a Service (IaaS)\r\nPlatform as a Service (PaaS)\r\nSoftware as a Service (SaaS)\r\nCloud Migration & Deployment\r\nCloud Security & Backup\r\nWe provide fully managed cloud infrastructure tailored to your business needs. Our certified cloud experts ensure high availability, security, and performance across all deployments.', 'Scalable, secure, and cost-effective cloud services to power your business operations.', 10000, 'template-service', 'cloud-computing', NULL, 18, 4, NULL, 1, '1755583755_cloud-computing.jpg', '1755583755_cloud-computing.png', NULL, NULL, NULL, 1, 0, 0, '2025-08-19 00:24:15', '2025-12-15 19:30:01'),
(2, 'What types of electronics do you sell?', NULL, NULL, '<p>We offer a wide range of electronics including smartphones, laptops, tablets, smartwatches, audio devices, gaming accessories, home appliances, and more from top brands.</p>', NULL, NULL, 'single', 'what-types-of-electronics-do-you-sell', NULL, NULL, 7, NULL, 1, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, '2025-08-27 23:07:15', '2025-08-27 23:07:15'),
(3, 'Are your products original and brand new?', NULL, NULL, '<p>We offer a wide range of electronics including smartphones, laptops, tablets, smartwatches, audio devices, gaming accessories, home appliances, and more from top brands.</p>', NULL, NULL, 'single', 'are-your-products-original-and-brand-new', NULL, NULL, 7, NULL, 2, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, '2025-08-27 23:07:47', '2025-08-27 23:07:47'),
(4, 'AMC', NULL, NULL, NULL, 'Please contact us 9803027278', NULL, 'single', 'amc', NULL, 16, 4, NULL, 2, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, '2025-08-28 07:37:20', '2025-12-29 05:42:01');

-- --------------------------------------------------------

--
-- Table structure for table `cl_post_type`
--

CREATE TABLE `cl_post_type` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uri` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `posttype_content` text COLLATE utf8mb4_unicode_ci,
  `template` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ordering` int(11) DEFAULT '0',
  `status` tinyint(1) DEFAULT '1',
  `is_header` tinyint(1) DEFAULT '0',
  `is_footer` tinyint(1) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cl_post_type`
--

INSERT INTO `cl_post_type` (`id`, `post_type`, `uri`, `caption`, `banner`, `posttype_content`, `template`, `ordering`, `status`, `is_header`, `is_footer`, `created_at`, `updated_at`) VALUES
(4, 'Services', 'Services', 'sb', NULL, 'sbsdsd', 'posttypeTemplate-services', 0, 1, 1, 1, '2025-08-13 06:31:34', '2025-08-25 06:03:33'),
(5, 'Contact Us', 'Contact-Us', 'Contact Us', '1756101993_contact-us.jpg', NULL, 'posttypeTemplate-contact_us', 1, 1, 0, 1, '2025-08-25 00:21:33', '2025-08-25 03:56:08'),
(6, 'Terms & Conditions', 'Terms-Conditions', 'Terms & Conditions', NULL, '<p>Welcome to <strong>YourStore</strong>! These Terms and Conditions outline the rules and regulations for using our website and purchasing products from our store.</p>\r\n<p>By accessing this website or placing an order, you agree to accept all the terms listed below. Please read them carefully.</p>\r\n<h4>1. General Information</h4>\r\n<ul>\r\n<li>This website is operated by <strong>YourStore</strong>.</li>\r\n<li>By using our site, you agree to these Terms, including additional policies referenced here.</li>\r\n</ul>\r\n<h4>2. Eligibility</h4>\r\n<ul>\r\n<li>You must be at least 18 years old to place an order.</li>\r\n<li>All information you provide must be accurate and complete.</li>\r\n</ul>\r\n<h4>3. Products &amp; Availability</h4>\r\n<ul>\r\n<li>All products are subject to availability.</li>\r\n<li>We strive to display accurate images and descriptions, but we cannot guarantee screen accuracy.</li>\r\n</ul>\r\n<h4>4. Pricing &amp; Payment</h4>\r\n<ul>\r\n<li>All prices are listed in your local currency.</li>\r\n<li>We may change pricing at any time without prior notice.</li>\r\n<li>Orders will be processed after full payment is received.</li>\r\n</ul>\r\n<h4>5. Shipping &amp; Delivery</h4>\r\n<ul>\r\n<li>Delivery details are available on our <a href=\"https://cyberlinknepal.com/design/yantra/terms.php\">Shipping Policy</a> page.</li>\r\n<li>We are not responsible for delays caused by courier partners.</li>\r\n</ul>\r\n<h4>6. Returns &amp; Refunds</h4>\r\n<ul>\r\n<li>Our full return policy is available <a href=\"https://cyberlinknepal.com/design/yantra/terms.php\">here</a>.</li>\r\n<li>Returned items must be in original condition and packaging.</li>\r\n</ul>\r\n<h4>7. Warranty</h4>\r\n<ul>\r\n<li>Products may come with manufacturer warranties as mentioned in product details.</li>\r\n<li>Claims must be made through the manufacturer unless stated otherwise.</li>\r\n</ul>\r\n<h4>8. Prohibited Uses</h4>\r\n<p>You may not use this website for:</p>\r\n<ul>\r\n<li>Illegal activities</li>\r\n<li>Uploading malicious software or spam</li>\r\n<li>Violating copyright or intellectual property</li>\r\n</ul>\r\n<h4>9. Intellectual Property</h4>\r\n<ul>\r\n<li>All content is the property of <strong>YourStore</strong>.</li>\r\n<li>Unauthorized use or copying is strictly prohibited.</li>\r\n</ul>', 'posttypeTemplate-terms&conditions', 2, 1, 0, 1, '2025-08-25 06:17:41', '2025-08-27 23:09:17'),
(7, 'FAQs', 'FAQs', 'FAQ', NULL, NULL, 'posttypeTemplate-faq', 3, 1, 0, 1, '2025-08-25 06:25:25', '2025-08-25 06:25:25');

-- --------------------------------------------------------

--
-- Table structure for table `cl_settings`
--

CREATE TABLE `cl_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo_white` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `welcome_text` text COLLATE utf8mb4_unicode_ci,
  `copyright_text` text COLLATE utf8mb4_unicode_ci,
  `phone1` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone2` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_primary` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_secondary` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `days` int(11) DEFAULT NULL,
  `hours` int(11) DEFAULT NULL,
  `minutes` int(11) DEFAULT NULL,
  `seconds` int(11) DEFAULT NULL,
  `flash_enable` tinyint(1) DEFAULT NULL,
  `flash_ends_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cl_settings`
--

INSERT INTO `cl_settings` (`id`, `logo_white`, `title`, `welcome_text`, `copyright_text`, `phone1`, `phone2`, `address`, `email_primary`, `email_secondary`, `twitter_link`, `instagram_link`, `facebook_link`, `days`, `hours`, `minutes`, `seconds`, `flash_enable`, `flash_ends_at`, `meta_title`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'logo-white.jpg', 'Yantranetwork solutions Pvt Ltd', '<p>Welcome to yantra store</p>', '<p>Copyright © 2025<strong>  Yantra Network Solution Pvt. Ltd. </strong> All rights reserved.</p>', '9802376499', '9841001550', 'Tarakeshwor-11, Kathmandu, Nepal', 'support@yantranetwork.com', 'orders@yantranetwork.com', 'https://facebook.com', 'https://instagram.com', NULL, NULL, NULL, NULL, NULL, 1, '2025-12-21 06:15:00', 'Yantra meta title', 'Yantra meta description', NULL, '2025-12-19 12:52:04');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Blue', 'blue', '2020-10-20 22:33:57', '2020-10-20 22:33:57'),
(2, 'Red', 'red', '2020-10-20 22:34:01', '2020-10-20 22:34:01'),
(3, 'Green', 'green', '2020-10-20 22:34:04', '2020-10-20 22:34:04'),
(4, 'Black', 'black', '2021-01-31 11:20:41', '2021-01-31 11:20:41');

-- --------------------------------------------------------

--
-- Table structure for table `color_stocks`
--

CREATE TABLE `color_stocks` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `color_id` int(10) UNSIGNED NOT NULL,
  `stock` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `color_stocks`
--

INSERT INTO `color_stocks` (`id`, `product_id`, `color_id`, `stock`, `created_at`, `updated_at`) VALUES
(184, 157, 1, 4, NULL, NULL),
(187, 160, 1, 10, NULL, NULL),
(274, 247, 1, 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `component_types`
--

CREATE TABLE `component_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `level` int(11) NOT NULL,
  `status` int(10) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `component_types`
--

INSERT INTO `component_types` (`id`, `name`, `level`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Motherboard', 1, 1, '2025-07-29 23:35:32', '2025-11-03 01:27:36'),
(4, 'Processor', 2, 1, '2025-07-29 23:38:18', '2025-08-29 12:31:15'),
(5, 'Case', 3, 1, '2025-07-29 23:38:31', '2025-08-29 12:31:18'),
(6, 'Power Supply', 4, 1, '2025-07-29 23:38:44', '2025-08-29 12:31:21'),
(7, 'Memory', 5, 1, '2025-07-29 23:39:18', '2025-08-29 12:31:24'),
(8, 'Amazfit', 1, 0, '2025-09-02 11:47:42', '2025-11-03 01:27:38');

-- --------------------------------------------------------

--
-- Table structure for table `configurations`
--

CREATE TABLE `configurations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `configuration_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `configuration_value` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `configurations`
--

INSERT INTO `configurations` (`id`, `configuration_key`, `configuration_value`, `created_at`, `updated_at`) VALUES
(1, 'about', '<p>At Mountain Handicraft, we have extensive experience developing, carving and crafting unique designs for both wholesale and retail purposes. We ship comfy, warm clothing and beautiful handmade crafts worldwide.</p>\r\n<p>Moreover, we, Mountain Handicrafts, are leading manufacturers, wholesalers and exporters of the finest handicrafts in Nepal. Our company is a leading name among Nepalese craft companies, providing the finest crafts including clothing products, felt products, hemp products, pashmina products and many other crafts. With the growing global demand for Nepali handicrafts, we are always ready to help bring you the best handcrafted products. Mountain Handicraft has extensive experience in collecting the best raw materials, processing them, and achieving the best product results. Having been in the craft industry for over 10 years, the quality and durability of our products are top notch. The amazing talents of Nepal\'s remote and talented artisans are justly valued and appreciated.</p>\r\n<p><strong>What do we believe in ?</strong></p>\r\n<p>At Mountain Handicraft, we believe in technology to provide our customers with the highest quality products. Our mission is to foster the skills and lifestyles of all great artisans and showcase their talents around the world. Our main goal is to give them the right value for their sweat and talent. Child labor is prohibited when employing economically disadvantaged groups or women. Our ultimate goal is to foster revolution through arts and crafts.</p>\r\n<p><strong>Products that we supply</strong></p>\r\n<p>-&gt; Hemp Products</p>\r\n<p>-&gt; Cashmere Pashmina</p>\r\n<p>-&gt; Singing Bowl</p>\r\n<p>-&gt; Statues</p>\r\n<p>*add team info if needed*</p>\r\n<p><strong>Why Choose Mountain Handicraft?</strong></p>\r\n<p>Mountain Handicraft offers the highest quality handcrafted products in the best possible way. Nothing beats the quality and reliability of the great products we offer. In addition to producing handicrafts, we also source our products from leading wholesalers and manufacturers. Our ultimate goal is customer satisfaction and the quality of our products and services.</p>\r\n<p>Assuring every product is quality guaranteed, we welcome you to the hub of Mountain Handicraft Products, where you get a variety of products to choose from.. Whether it\'s a pashmina shawl or a handcrafted statues, we always make sure our products meet our quality checklist. Give us a chance to provide our service, we will never let you down.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', '2020-12-17 04:19:49', '2023-06-06 13:04:18'),
(2, 'mission', NULL, '2020-12-17 04:19:49', '2020-12-17 04:19:49'),
(3, 'vision', NULL, '2020-12-17 04:19:49', '2020-12-17 04:19:49'),
(4, 'objective', NULL, '2020-12-17 04:19:49', '2020-12-17 04:19:49'),
(5, 'twitter_link', 'https://twitter.com/', '2020-12-17 04:19:49', '2022-09-19 03:35:01'),
(6, 'googleplus_link', NULL, '2020-12-17 04:19:49', '2020-12-17 04:19:49'),
(7, 'instagram_link', 'https://www.instagram.com/', '2020-12-17 04:19:49', '2022-09-19 03:35:12'),
(8, 'facebook_link', 'https://www.facebook.com/', '2020-12-17 04:19:49', '2022-09-19 03:35:12'),
(9, 'contact_no', '+977-9858745478', '2020-12-17 04:19:49', '2020-12-27 02:42:02'),
(10, 'address', 'Pako, New Road, Kathmandu, Nepal', '2020-12-17 04:19:49', '2022-09-19 01:43:05'),
(11, 'website', NULL, '2020-12-17 04:19:49', '2020-12-17 04:19:49'),
(12, 'email', 'info@mountainhandicraft.com', '2020-12-17 04:19:49', '2022-09-19 01:18:33'),
(13, 'site_title', 'Mountain Handicraft', '2020-12-17 04:19:49', '2022-09-19 04:58:03'),
(14, 'site_description', 'Hemp Clothing, Pashmina and other Handicrafts', '2020-12-17 04:19:49', '2023-06-06 11:33:00'),
(15, 'regulation', NULL, '2020-12-17 04:19:49', '2020-12-17 04:19:49'),
(16, 'recognition', NULL, '2020-12-17 04:19:49', '2020-12-17 04:19:49'),
(17, 'price', NULL, '2020-12-17 04:19:49', '2020-12-17 04:19:49'),
(18, 'link', NULL, '2020-12-17 04:19:49', '2020-12-17 04:19:49'),
(19, 'about_image_1', '1608445269.jpg', '2020-12-20 00:36:09', '2020-12-20 00:36:09'),
(20, 'refund', '<p>For returns and exchanges, please contact us within 7 days of receiving your item. Faulty products can be returned to us if they have the following types of quality defects: Stains, zipper malfunction, ripped or torn, poor quality materials, obvious color difference, major difference between the photographed product and the product received. If you experience the above product issues, please contact us immediately at:</p>\r\n<p><br><strong>info@mountainhandicraft.com</strong></p>\r\n<p><strong><br>Steps to resolve the issue:</strong></p>\r\n<p>1. Email us clear photos or even better a video with the issue and including your order number and issue quantities.<strong><br></strong></p>\r\n<p>2. We will review the issues and provide you solutions, if possible.</p>\r\n<p>3. We will physically check for the issue. Once confirmed, we will refund your due amount.</p>', '2020-12-20 01:14:42', '2024-05-19 12:12:40'),
(21, 'privacy', '<p>Mountain Handicraft a leading manufacture, exporter and wholesaler of Nepali product company based in Kathmandu, Nepal. It respects the privacy of its customers and the visitors and users of its websites.</p>\r\n<div>&nbsp;</div>\r\n<div>This Privacy Policy is intended to inform you of our policies and practices regarding the collection, use and disclosure of any personal information we obtain about you based upon your use products. &ldquo;Personal Information&rdquo; is information about you that is personally identifiable to you such as your name, address, e-mail address, phone number, any transactions you conduct on our websites or offline with us, as well as other non-public information that is associated with the foregoing.</div>\r\n<div>&nbsp;</div>\r\n<h3><strong>User Consent</strong></h3>\r\n<div>By visiting our websites, using our products and submitting Personal Information through our websites, you agree to the terms of this Privacy Policy.</div>\r\n<div>You expressly consent to the processing of your Personal Information according to this Privacy Policy.</div>\r\n<div>&nbsp;</div>\r\n<h2><strong>Collection of Personal Information</strong></h2>\r\n<div>The Personal Information we gather from you helps us learn about our customers and potential customers. We use this information to better tailor the features, performance and support of our products, and to contact you from time to time about with information and offers about our new products.</div>\r\n<div>&nbsp;</div>\r\n<div>Personal Information You Provide to Us</div>\r\n<div>We collect Personal Information that you submit to us voluntarily. We collect Personal Information that includes, but is not limited to, your name, mailing address, Web address, telephone number, e-mail address, and any information you send to us in an e-mail or other communication, or give to us in any other way.</div>\r\n<div>&nbsp;</div>\r\n<h3><strong>Disclosure of Personal Information</strong></h3>\r\n<div>Except as otherwise stated in this Privacy Policy, we do not generally sell your Personal Information to third parties. In order to build the solutions for you, we may engage third parties to assist us, and, in connection with such assistance, we may provide them with Personal Information that you have provided and that is necessary for them to assist us. We may also share your Personal Information with trusted vendors or other third parties in order for them to provide you with offers that we think you will find valuable.</div>\r\n<h3>&nbsp;</h3>\r\n<h3><strong>Disclaimer of Liability</strong></h3>\r\n<div>The material on www.mountainhandicrafts.com is for general informational for selling purposes only. Mountain Handicrafts disclaims all warranties, express or implied. With regard to the information accessed from or via this service or internet including but not limited to all implied warranties or merchant ability or non infringement. Mountain Handicrafts or www.mountainhandicrafts.com &nbsp;does not assume any legal liability or responsibility for the accuracy, completeness or usefulness of any information, product or other material accessible from the service. In no event shall Mountain Handicraft or www.mountainhandicrafts.com be liable for any special, indirect or consequential damages or any damages whatsoever resulting from the use, data, or profits whether in an action of contract or otherwise arising out of or in connection with the use or performance of the information of this service or the internet generally. Any material contained on this service may include inaccuracies or errors. The information provided on this service is provided on an &ldquo;as is&rdquo; basis and &ldquo;as available&rdquo; basis without warranties of any kind, either expressed or implied, including but not limited to warranties of title, non-infringement or implied warranties of merchant ability or fitness for a particular purpose. All users of this service agree to hold harmless Mountain Handicrafts or www.mountainhandicrafts.com &nbsp;and its principals and owners from any claims whatsoever, including losses, expenses, and reasonable attorney fees arising from the use of this service. No advice or information given by Mountain Handicrafts or www.mountainhandicrafts.com shall create any warranty. Reproduction of any material contained in this website is against privacy policy.</div>\r\n<div>&nbsp;</div>\r\n<div>\r\n<p><strong>RETURNS</strong><br>Our Privacy policy notify us of any manufacturing defects, damages or wrong item(s) supplied, within 7 days from the date of delivery, and we will issue a replacement to you at no extra cost in your next order. Email us images of &ldquo;defects/damage&rdquo; before returning the item(s).</p>\r\n<p>You can send the return to our logistic center which are close to you:</p>\r\n<p>Customers will be responsible for all return shipping costs. We inspect all returned items and issue refund only after confirming it.</p>\r\n<p><strong>DAMAGED</strong><br>When receiving a package from the courier agency, verify the quality and quantity of the items if the outer packing is damaged or tampered with, using the invoice as a reference.&nbsp;In case of any discrepancy, either refuse to accept delivery or accept delivery only after putting suitable remark on the proof of delivery.</p>\r\n<p>So that we can pursue the matter with the courier company for refund. &nbsp;Once courier has approved and paid the claim to us, we will forward the applicable amount to you. Pleas note that 99% of shipment has no privacy policy.</p>\r\n</div>', '2020-12-20 01:14:42', '2024-05-30 12:12:53'),
(22, 'google_map', 'https://www.google.com/maps/place/Mountain+Handicraft/@27.710639,85.312268,14z/data=!4m5!3m4!1s0x0:0x71c0674f2c724d5!8m2!3d27.7106393!4d85.312268?hl=en', '2022-09-19 07:16:51', '2022-09-19 01:42:06'),
(23, 'opening_hours', 'Daily 09:00–22:00', '2022-09-19 07:18:22', '2022-09-19 01:42:43'),
(24, 'terms_and_conditions', '<p><strong>Welcome to Mountain Handicrafts </strong>a leading manufacture, exporter and wholesaler of Nepali product company based in Kathmandu Nepal. If you continue to browse and use this website you are agreeing to comply with and be bound by the following terms and conditions of use. Which together with our privacy Mountain Handicraft&lsquo;s relationship with you in relation to this website.</p>\r\n<h3><strong>Invoicing</strong></h3>\r\n<div><strong>Mountain Handicrafts</strong>&nbsp;normally invoices clients in US currency and on FOB Kathmandu Terms and conditions. To eliminate conversion costs of purchasing dollars, EU clients will henceforth be invoiced directly in EURO Currency. Furthermore, we are selling different kind of product around the world tha &nbsp;is why we can&rsquo;t exact shipping for your own destination. Likewise, shipping cost is exclude in our price tag.</div>\r\n<h3><strong>Payment</strong></h3>\r\n<h3><em><strong>Payment will be made in one of two ways:</strong></em></h3>\r\n<ol>\r\n<li>If the shipment is made by courier service, payment in full may be remitted through Moneygram, Western Union and other Electronic Fund Transfer (EFT) Services. Typically courier service is used to ship samples and relatively small packages.</li>\r\n<li>The Nepali Government requires that 100 percent of the funds be paid in advance through bank to bank transfers if shipping is done by air freight. Typically, air freight is used for shipment.</li>\r\n</ol>\r\n<h2><strong>Return and Refund Terms &amp; conditions</strong></h2>\r\n<p>If you want to return an item, make sure it&rsquo;s in good condition and unworn with the tags still on. Otherwise, we can&rsquo;t guarantee we&rsquo;ll accept it. If you decide to return any items, you must return the items to us within 7 days starting from date of delivery in order to receive a full refund.</p>', '2022-09-19 07:44:19', '2024-05-30 12:12:53');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text,
  `country` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Nepal', 'nepal', '2020-10-20 22:40:20', '2020-10-20 22:40:20'),
(2, 'Australia', 'australia', '2020-10-20 22:40:50', '2020-10-20 22:40:50');

-- --------------------------------------------------------

--
-- Table structure for table `descriptions`
--

CREATE TABLE `descriptions` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `descriptions`
--

INSERT INTO `descriptions` (`id`, `product_id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(177, 157, NULL, NULL, '2023-06-13 10:23:58', '2023-06-13 10:23:58'),
(180, 160, NULL, NULL, '2023-06-14 10:30:57', '2023-06-14 10:30:57'),
(267, 247, NULL, NULL, '2023-06-15 13:37:09', '2023-06-15 13:37:09');

-- --------------------------------------------------------

--
-- Table structure for table `discounts`
--

CREATE TABLE `discounts` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(100) NOT NULL,
  `type` enum('flat','percent') DEFAULT NULL,
  `discount` decimal(10,2) NOT NULL,
  `usage_limit` int(10) UNSIGNED DEFAULT NULL,
  `used` int(11) DEFAULT '0',
  `expiry_date` date DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `discounts`
--

INSERT INTO `discounts` (`id`, `code`, `type`, `discount`, `usage_limit`, `used`, `expiry_date`, `status`, `created_at`, `updated_at`) VALUES
(6, 'YS22', 'percent', 5.00, 5, 0, '2025-12-22', 1, '2025-08-30 10:55:45', '2025-12-19 12:50:32');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Pay with Paypal', '<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p><p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore.</p>', '2020-12-20 05:41:09', '2020-12-20 05:41:09');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_main` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `product_id`, `image`, `is_main`, `created_at`, `updated_at`) VALUES
(860, 247, '1757671386780.jpeg', 1, '2025-09-12 04:18:06', '2025-09-12 04:18:21'),
(861, 160, '1757672485924.jpeg', 1, '2025-09-12 04:36:25', '2025-09-12 04:36:45'),
(862, 157, '1757672911878.jpeg', 1, '2025-09-12 04:43:31', '2025-09-12 04:43:54'),
(868, 268, '1765905349209.jpg', 1, '2025-12-16 11:30:49', '2025-12-16 11:30:49'),
(869, 269, '1765906856821.png', 1, '2025-12-16 11:55:56', '2025-12-16 11:55:56'),
(870, 269, '1765906856146.webp', 1, '2025-12-16 11:55:56', '2025-12-16 11:55:56'),
(871, 270, '1765907194709.jpg', 1, '2025-12-16 12:01:34', '2025-12-16 12:01:34'),
(872, 271, '1766168329206.jpg', 1, '2025-12-19 12:33:49', '2025-12-19 12:33:49'),
(873, 271, '1766168329442.jpg', 1, '2025-12-19 12:33:49', '2025-12-19 12:33:49'),
(874, 271, '1766168329800.jpg', 1, '2025-12-19 12:33:49', '2025-12-19 12:33:49'),
(875, 272, '1766168705528.jpg', 1, '2025-12-19 12:40:05', '2025-12-19 12:40:05'),
(876, 272, '1766168705191.jpg', 1, '2025-12-19 12:40:05', '2025-12-19 12:40:05'),
(877, 272, '1766168705692.jpg', 1, '2025-12-19 12:40:05', '2025-12-19 12:40:05'),
(878, 273, '1766169228503.jpg', 1, '2025-12-19 12:48:48', '2025-12-19 12:48:48'),
(879, 273, '1766169228417.jpg', 1, '2025-12-19 12:48:48', '2025-12-19 12:48:48'),
(880, 273, '1766169228623.jpg', 1, '2025-12-19 12:48:48', '2025-12-19 12:48:48'),
(881, 273, '1766169228134.jpg', 1, '2025-12-19 12:48:48', '2025-12-19 12:48:48'),
(882, 274, '1766169818547.jpg', 1, '2025-12-19 12:58:38', '2025-12-19 12:58:38'),
(883, 274, '1766169818403.jpg', 1, '2025-12-19 12:58:38', '2025-12-19 12:58:38'),
(884, 274, '1766169818949.jpg', 1, '2025-12-19 12:58:38', '2025-12-19 12:58:38'),
(885, 275, '1766170182331.jpg', 1, '2025-12-19 13:04:42', '2025-12-19 13:04:42'),
(886, 275, '1766170182616.jpg', 1, '2025-12-19 13:04:42', '2025-12-19 13:04:42'),
(887, 275, '1766170182415.jpg', 1, '2025-12-19 13:04:42', '2025-12-19 13:04:42'),
(888, 276, '1766170456528.jpg', 1, '2025-12-19 13:09:16', '2025-12-19 13:09:16'),
(889, 276, '1766170456133.jpg', 1, '2025-12-19 13:09:16', '2025-12-19 13:09:16'),
(890, 276, '1766170456299.jpg', 1, '2025-12-19 13:09:16', '2025-12-19 13:09:16'),
(891, 277, '1766170826856.jpg', 1, '2025-12-19 13:15:26', '2025-12-19 13:15:26'),
(892, 277, '1766170826336.jpg', 1, '2025-12-19 13:15:26', '2025-12-19 13:15:26'),
(893, 277, '1766170826976.jpg', 1, '2025-12-19 13:15:26', '2025-12-19 13:15:26'),
(894, 277, '1766170827910.jpg', 1, '2025-12-19 13:15:27', '2025-12-19 13:15:27'),
(895, 278, '1766171146847.jpg', 1, '2025-12-19 13:20:46', '2025-12-19 13:20:46'),
(896, 278, '1766171146340.png', 1, '2025-12-19 13:20:46', '2025-12-19 13:20:46'),
(897, 279, '1766171482939.jpg', 1, '2025-12-19 13:26:22', '2025-12-19 13:26:22'),
(898, 279, '1766171482505.jpg', 1, '2025-12-19 13:26:22', '2025-12-19 13:26:22'),
(899, 279, '1766171482363.jpg', 1, '2025-12-19 13:26:22', '2025-12-19 13:26:22'),
(900, 280, '1766171778778.jpg', 1, '2025-12-19 13:31:18', '2025-12-19 13:31:18'),
(901, 280, '1766171778863.jpg', 1, '2025-12-19 13:31:18', '2025-12-19 13:31:18'),
(902, 280, '1766171778816.jpg', 1, '2025-12-19 13:31:18', '2025-12-19 13:31:18'),
(903, 281, '1766171995934.jpg', 1, '2025-12-19 13:34:55', '2025-12-19 13:34:55'),
(904, 281, '1766171995476.png', 1, '2025-12-19 13:34:55', '2025-12-19 13:34:55'),
(905, 281, '1766171995152.jpg', 1, '2025-12-19 13:34:55', '2025-12-19 13:34:55'),
(906, 282, '1766172291842.jpg', 1, '2025-12-19 13:39:51', '2025-12-19 13:39:51'),
(907, 282, '1766172291810.jpg', 1, '2025-12-19 13:39:51', '2025-12-19 13:39:51'),
(908, 282, '1766172291367.jpg', 1, '2025-12-19 13:39:51', '2025-12-19 13:39:51'),
(909, 283, '1766172509781.jpg', 1, '2025-12-19 13:43:29', '2025-12-19 13:43:29'),
(910, 283, '1766172509984.jpg', 1, '2025-12-19 13:43:29', '2025-12-19 13:43:29'),
(911, 283, '1766172509964.jpg', 1, '2025-12-19 13:43:29', '2025-12-19 13:43:29'),
(912, 283, '1766172509474.jpg', 1, '2025-12-19 13:43:29', '2025-12-19 13:43:29'),
(913, 284, '1766852467953.jpg', 1, '2025-12-27 10:36:07', '2025-12-27 10:36:07'),
(914, 284, '1766852467867.jpg', 1, '2025-12-27 10:36:07', '2025-12-27 10:36:07'),
(915, 284, '1766852467207.jpg', 1, '2025-12-27 10:36:07', '2025-12-27 10:36:07'),
(916, 285, '1766853563992.jfif', 1, '2025-12-27 10:54:23', '2025-12-27 10:54:23'),
(917, 285, '1766853621317.jfif', 0, '2025-12-27 10:55:21', '2025-12-27 10:55:21'),
(918, 286, '1766853977611.jfif', 1, '2025-12-27 11:01:17', '2025-12-27 11:01:17'),
(919, 286, '1766853977721.jfif', 1, '2025-12-27 11:01:17', '2025-12-27 11:01:17'),
(920, 287, '1766854314890.jfif', 1, '2025-12-27 11:06:54', '2025-12-27 11:06:54'),
(921, 287, '1766854314474.jfif', 1, '2025-12-27 11:06:54', '2025-12-27 11:06:54'),
(922, 288, '1766854645832.png', 1, '2025-12-27 11:12:25', '2025-12-27 11:12:25'),
(923, 288, '1766854645833.png', 1, '2025-12-27 11:12:25', '2025-12-27 11:12:25'),
(924, 289, '1766854856892.jfif', 1, '2025-12-27 11:15:56', '2025-12-27 11:15:56'),
(925, 289, '1766854856168.jfif', 1, '2025-12-27 11:15:56', '2025-12-27 11:15:56'),
(926, 290, '1766855151727.jfif', 1, '2025-12-27 11:20:51', '2025-12-27 11:20:51'),
(927, 290, '1766855151889.jfif', 1, '2025-12-27 11:20:51', '2025-12-27 11:20:51'),
(928, 290, '1766855151730.jfif', 1, '2025-12-27 11:20:51', '2025-12-27 11:20:51'),
(929, 291, '1766855332880.jfif', 1, '2025-12-27 11:23:52', '2025-12-27 11:23:52'),
(930, 291, '1766855332866.jfif', 1, '2025-12-27 11:23:52', '2025-12-27 11:23:52'),
(931, 291, '1766855332946.jfif', 1, '2025-12-27 11:23:52', '2025-12-27 11:23:52'),
(932, 292, '1766855572397.jfif', 1, '2025-12-27 11:27:52', '2025-12-27 11:27:52'),
(933, 292, '1766855572671.jfif', 1, '2025-12-27 11:27:52', '2025-12-27 11:27:52'),
(934, 293, '1766855760170.jfif', 1, '2025-12-27 11:31:00', '2025-12-27 11:31:00'),
(935, 293, '1766855760859.jfif', 1, '2025-12-27 11:31:00', '2025-12-27 11:31:00'),
(936, 294, '1766855920196.jfif', 1, '2025-12-27 11:33:40', '2025-12-27 11:33:40'),
(937, 294, '1766855920177.jfif', 1, '2025-12-27 11:33:40', '2025-12-27 11:33:40'),
(938, 295, '1766856073261.jfif', 1, '2025-12-27 11:36:13', '2025-12-27 11:36:13'),
(939, 295, '1766856073561.jfif', 1, '2025-12-27 11:36:13', '2025-12-27 11:36:13'),
(940, 296, '1766856446991.jpg', 1, '2025-12-27 11:42:26', '2025-12-27 11:42:26'),
(941, 296, '1766856446797.jpg', 1, '2025-12-27 11:42:26', '2025-12-27 11:42:26'),
(942, 297, '1766856588648.jpg', 1, '2025-12-27 11:44:48', '2025-12-27 11:44:48'),
(943, 297, '1766856588955.jpg', 1, '2025-12-27 11:44:48', '2025-12-27 11:44:48'),
(944, 297, '1766856588942.jpg', 1, '2025-12-27 11:44:48', '2025-12-27 11:44:48'),
(945, 298, '1766856768464.jpg', 1, '2025-12-27 11:47:48', '2025-12-27 11:47:48'),
(946, 299, '1766857005355.jpg', 1, '2025-12-27 11:51:45', '2025-12-27 11:51:45'),
(947, 300, '1766857201894.jpg', 1, '2025-12-27 11:55:01', '2025-12-27 11:55:01'),
(948, 301, '1766857453189.jpg', 1, '2025-12-27 11:59:13', '2025-12-27 11:59:13'),
(949, 301, '1766857453306.jpg', 1, '2025-12-27 11:59:13', '2025-12-27 11:59:13'),
(950, 302, '1766857630766.jpg', 1, '2025-12-27 12:02:10', '2025-12-27 12:02:10'),
(951, 303, '1766857786874.jpg', 1, '2025-12-27 12:04:46', '2025-12-27 12:04:46'),
(952, 304, '1766858153489.jpg', 1, '2025-12-27 12:10:53', '2025-12-27 12:10:53'),
(953, 305, '1766858542860.jpg', 1, '2025-12-27 12:17:22', '2025-12-27 12:17:22'),
(954, 306, '1766859005368.jpg', 1, '2025-12-27 12:25:05', '2025-12-27 12:25:05'),
(955, 306, '1766859005419.jpg', 1, '2025-12-27 12:25:05', '2025-12-27 12:25:05'),
(956, 307, '1766859232928.jpg', 1, '2025-12-27 12:28:52', '2025-12-27 12:28:52'),
(957, 308, '1766859354515.jpg', 1, '2025-12-27 12:30:54', '2025-12-27 12:30:54'),
(958, 309, '1766859486126.jpg', 1, '2025-12-27 12:33:06', '2025-12-27 12:33:06'),
(959, 310, '1766860072863.jpg', 1, '2025-12-27 12:42:52', '2025-12-27 12:42:52'),
(960, 311, '1766860232371.jpg', 1, '2025-12-27 12:45:32', '2025-12-27 12:45:32');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_06_26_000000_create_shopping_cart_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2020_09_03_072255_create_categories_table', 1),
(6, '2020_09_08_044517_create_sizes_table', 1),
(7, '2020_09_08_044650_create_brands_table', 1),
(8, '2020_09_09_075913_create_products_table', 1),
(9, '2020_09_14_083541_create_images_table', 1),
(10, '2020_09_14_090927_create_descriptions_table', 1),
(11, '2020_09_14_091133_create_seos_table', 1),
(12, '2020_09_15_042231_create_product_categories_table', 1),
(13, '2020_09_20_082048_create_verify_users_table', 1),
(14, '2020_09_23_081542_create_wishlists_table', 1),
(15, '2020_09_24_155043_create_addresses_table', 1),
(16, '2020_09_24_155836_create_shippings_table', 1),
(17, '2020_09_27_114424_create_countries_table', 1),
(18, '2020_09_27_114439_create_cities_table', 1),
(19, '2020_09_30_054125_create_colors_table', 1),
(20, '2020_09_30_072418_create_color_stocks_table', 1),
(21, '2020_09_31_043546_create_stocks_table', 1),
(22, '2020_10_04_084815_create_orders_table', 1),
(23, '2020_10_04_090036_create_order_addresses_table', 1),
(24, '2020_10_07_035829_create_order_details_table', 1),
(25, '2020_10_11_105726_create_reviews_table', 1),
(26, '2020_12_08_071034_create_payment_methods_table', 2),
(33, '2022_11_02_062241_create_shipping_media_table', 3),
(34, '2022_11_02_062350_create_weights_table', 3),
(35, '2022_11_02_062632_create_shipping_prices_table', 3),
(36, '2025_08_14_120524_create_tags_table', 4),
(37, '2025_08_14_121136_add_tag_id_in_products_table', 4),
(38, '2025_08_21_061141_create_ads_table', 4),
(39, '2025_09_14_021951_create_jobs_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) DEFAULT NULL,
  `type` tinyint(1) DEFAULT NULL,
  `discount` decimal(8,2) DEFAULT '0.00',
  `status` tinyint(1) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `title`, `sub_title`, `type`, `discount`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Flash Sales', NULL, NULL, 10.00, 1, '2025-09-16 06:45:40', '2025-09-23 01:18:51'),
(2, 'Hot Deals', NULL, NULL, 0.00, 1, '2025-09-16 06:45:56', '2025-09-16 06:45:56'),
(3, 'Early Bird', NULL, NULL, 0.00, 1, '2025-09-16 06:46:13', '2025-09-23 01:36:58');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `subtotal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tax` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_id` int(11) DEFAULT NULL,
  `grand_total` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` float DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `payment_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_track` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_id` int(10) UNSIGNED DEFAULT NULL,
  `courier_id` int(11) DEFAULT NULL,
  `order_note` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_addresses`
--

CREATE TABLE `order_addresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` int(11) DEFAULT NULL,
  `address1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('srbunitydeveloper@gmail.com', '9VSNbaoQhm1ddSdLNcIJf3tIuWVeSjj4hhpZzUnAzCwHRNMxxpqN9sJMhnecUpbj', '2022-09-22 09:31:40'),
('srbunitydeveloper@gmail.com', 'hA1QkoB39yrzDcGP2MKVlunfaZJFQwaRJCfVpr7igwIK0E5wkvDq8Sk8zB4C1UMX', '2022-09-23 10:33:53'),
('srbunitydeveloper@gmail.com', 'FSfJJNSPVycCVB6cjgiAGBKrjSLW3EclsbQwpFv7oEyjeFGfa3BnW47dEoB1ZTo8', '2022-09-23 10:34:14'),
('srbunitydeveloper@gmail.com', 'di0mozGAa9CVuL8IN6SFShHGGCO6GrAgreM5uPwGTOMDqBApiSJP5nJWvBSi2azJ', '2022-09-23 10:34:59'),
('srbunitydeveloper@gmail.com', 'iHGtOPdulAyq7OuWXjTni5cu3i7mpPs8A5wOXYyELprWME1yb38F5fZs8cU9x9DV', '2022-09-23 10:36:52'),
('srbunitydeveloper@gmail.com', 'vTafneO8E74fR1rCgvrjB7FvmkiRQ9EvmpzeSf7dxuv2pOcnDL0QBAPNBbbjjLN4', '2022-09-23 10:38:28');

-- --------------------------------------------------------

--
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_methods`
--

INSERT INTO `payment_methods` (`id`, `name`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Esewa', '1607417973.png', 1, '2020-12-08 03:14:33', '2022-09-19 05:09:24'),
(3, 'Cash on Delivery', '1607418455.png', 1, '2020-12-08 03:22:35', '2020-12-08 03:22:53'),
(5, 'Pay with Credit Card', '1607423168.png', 1, '2020-12-08 04:41:08', '2020-12-08 04:41:08');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_name` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `weight` float DEFAULT '0',
  `discount_price` double(8,2) DEFAULT NULL,
  `discount_percent` int(11) DEFAULT NULL,
  `wholesale_price` double DEFAULT NULL,
  `views` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `long_description` longtext COLLATE utf8mb4_unicode_ci,
  `size_variation` tinyint(1) DEFAULT '0',
  `video` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `latest` tinyint(1) NOT NULL DEFAULT '0',
  `hot` tinyint(1) NOT NULL DEFAULT '0',
  `is_featured` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_popular` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `on_sale` tinyint(1) NOT NULL DEFAULT '0',
  `is_special` tinyint(1) NOT NULL DEFAULT '0',
  `sku` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_id` int(10) UNSIGNED DEFAULT NULL,
  `offer_id` int(11) DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `component_type` int(10) DEFAULT NULL,
  `audio` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tag_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `slug`, `price`, `stock`, `weight`, `discount_price`, `discount_percent`, `wholesale_price`, `views`, `short_description`, `long_description`, `size_variation`, `video`, `status`, `latest`, `hot`, `is_featured`, `is_popular`, `on_sale`, `is_special`, `sku`, `brand_id`, `offer_id`, `model_name`, `component_type`, `audio`, `deleted_at`, `created_at`, `updated_at`, `tag_id`) VALUES
(157, 'ASUS Vivobook Go E1404 2023 Ryzen 3 7320 | 8GB RAM | 512GB SSD | 14\" FHD display | Magic NumPad', 'asus-vivobook-go-e1404-2023-ryzen-3-7320-8gb-ram-512gb-ssd-14-fhd-display-magic-numpad', 60000, 10, NULL, 24.50, NULL, NULL, '0', '<h3>Key Specification:</h3>\r\n<ul>\r\n<li><strong>Model: </strong> Asus VivoBook Go E1404</li>\r\n<li><strong>Processor:</strong> AMD Ryzen™ 3 7320U Mobile Processor</li>\r\n<li><strong>RAM: 8</strong>GB RAM </li>\r\n<li><strong>Storage:</strong> 512GB SSD </li>\r\n<li><strong>Display: </strong>14-inch FHD</li>\r\n<li>2 Years Warranty &amp; Genuine Windows 11 Home</li>\r\n</ul>', NULL, 0, NULL, 1, 0, 0, '0', 'popular', 0, 0, 'MHES01', NULL, NULL, 'Test Model ABCD12345', NULL, NULL, NULL, '2023-06-13 10:23:58', '2025-09-12 04:43:31', NULL),
(160, 'ASUS VIVOBOOK X515EA i3 11TH GEN | 4GB | 256GB | 15.6\" FHD | Backlight Keyboard', 'asus-vivobook-x515ea-i3-11th-gen-4gb-256gb-156-fhd-backlight-keyboard', 55000, 10, NULL, 24.50, NULL, NULL, '0', '<h3>Key Specifications:</h3>\r\n<ul>\r\n<li><strong>Model: </strong>Asus VivoBook 15 X515EA </li>\r\n<li><strong>Processor: </strong>Intel Core i3-1115G4 Processor</li>\r\n<li><strong>RAM: </strong>4GB RAM </li>\r\n<li><strong>Storage:</strong> 256GB SSD </li>\r\n<li><strong>Display: </strong>15.6-inch FHD</li>\r\n<li>2 Years Warranty &amp; Genuine Windows 10 Home</li>\r\n</ul>', NULL, 0, NULL, 1, 0, 0, '0', 'popular', 0, 0, 'MHES04', NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-14 10:30:57', '2025-09-12 04:36:25', NULL),
(247, 'Dell Inspiron 5440-5463BLK Core™ i5-1334U 8GB RAM | 512GB SSD | 14\" (1920x1200) Display | CARBON BLACK | Backlit Keyboard | 1 Year Warranty', 'dell-inspiron-5440-5463blk-core-i5-1334u-8gb-ram-512gb-ssd-14-1920x1200-display-carbon-black-backlit-keyboard-1-year-warranty', 20000, 10, NULL, 19.50, NULL, NULL, '0', '<h3><strong>Key Features</strong></h3>\r\n<figure class=\"table\">\r\n<table>\r\n<tbody>\r\n<tr>\r\n<td>Brand</td>\r\n<td>Dell</td>\r\n</tr>\r\n<tr>\r\n<td>Model Name</td>\r\n<td>Dell Inspiron 14 5440 Laptop</td>\r\n</tr>\r\n<tr>\r\n<td>Screen Size</td>\r\n<td>14 Inches</td>\r\n</tr>\r\n<tr>\r\n<td>Color</td>\r\n<td>Carbon Black</td>\r\n</tr>\r\n<tr>\r\n<td>Hard Disk Size</td>\r\n<td>512 GB</td>\r\n</tr>\r\n<tr>\r\n<td>CPU Model</td>\r\n<td>Core i5 Family</td>\r\n</tr>\r\n<tr>\r\n<td>Ram Memory Installed Size</td>\r\n<td>8 GB</td>\r\n</tr>\r\n<tr>\r\n<td>Operating System</td>\r\n<td>Windows 11 Home</td>\r\n</tr>\r\n<tr>\r\n<td>Special Feature</td>\r\n<td>Lightweight, Anti Glare Coating, Memory Card Slot</td>\r\n</tr>\r\n<tr>\r\n<td>Graphics Card </td>\r\n<td>Integrated</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</figure>\r\n<h1 class=\"hidden mb-5 text-xl font-semibold text-black first-letter:capitalize md:block\"> </h1>', NULL, 0, NULL, 0, 0, 0, '0', 'popular', 0, 0, 'MHRPS16', 1, NULL, NULL, NULL, NULL, NULL, '2023-06-15 13:37:09', '2025-11-25 12:27:30', NULL),
(268, 'D-Link CAT-6 UTP Networking Cable 305 Meter', 'd-link-cat-6-utp-networking-cable-305-meter', 18300, 20, NULL, 18300.00, NULL, NULL, '0', '<ul>\r\n<li><strong>Category</strong> : 6 UTP Solid cable</li>\r\n<li><strong>Conductor</strong> : Conductor :  23 AWG (Solid)</li>\r\n<li><strong>Conductor Meta </strong>: Conductor Meta :  Bare Copper</li>\r\n<li><strong>Insulation Material</strong> : HD-PE</li>\r\n<li><strong>OD</strong> : 6.1mm ±0.2</li>\r\n<li><strong>Resistance Unbalance</strong> : 5% Max</li>\r\n<li><strong>Capacitance Unbalance</strong> : 330pF/100m</li>\r\n<li><strong>Delay Skew : &lt;45nS</strong></li>\r\n</ul>', '<ul>\r\n<li>4-pair unshielded twisted pair (UTP) cable</li>\r\n<li>Pairs are braided in aluminum foil with drain wire</li>\r\n<li>23 AWG solid copper conductor for superior conductivity</li>\r\n<li>HDPE insulation</li>\r\n<li>FR PVC Jacket</li>\r\n<li>Verified compliant with EIA/TIA standards by ETL</li>\r\n<li>UL-listed</li>\r\n<li>Packaged in an easy-to-pull box for easier installation</li>\r\n</ul>', NULL, NULL, 1, 0, 0, '0', 'notpopular', 0, 0, 'YN01', 35, NULL, NULL, NULL, NULL, NULL, '2025-12-16 11:30:49', '2025-12-16 11:32:01', NULL),
(269, 'Ezviz H8C Pro 3K (CS-H8C-R200-1J5WKFL) 5MP', 'ezviz-h8c-pro-3k-cs-h8c-r200-1j5wkfl-5mp', 8000, 10, NULL, 8000.00, NULL, NULL, '0', '<table class=\"table table-bordered\">\r\n<tbody>\r\n<tr>\r\n<td><strong>Resolution</strong></td>\r\n<td>3K Ultra HD (2880 × 1620)</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Lens Options</strong></td>\r\n<td>4mm F1.6 (Wide) &amp; 6mm F1.6 (Zoom)</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Field of View</strong></td>\r\n<td>Pan: 350°, Tilt: 80°</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Night Vision</strong></td>\r\n<td>IR up to 30m / 98ft, 0.5 Lux low-light</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Image Clarity</strong></td>\r\n<td>3D DNR &amp; Digital WDR</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Video Compression</strong></td>\r\n<td>H.265 / H.264, Self-Adaptive Bitrate</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Audio</strong></td>\r\n<td>Two-way Talk, Self-Adaptive Audio Bitrate</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Smart Features</strong></td>\r\n<td>AI Human/Vehicle Detection, Auto Tracking, Custom Alert Zones</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Connectivity</strong></td>\r\n<td>Wi-Fi 2.4 GHz (b/g/n), RJ45 Ethernet 10/100M</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Storage</strong></td>\r\n<td>microSD up to 512GB, EZVIZ CloudPlay (Subscription)</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Durability</strong></td>\r\n<td>Weatherproof, Operating -30°C to 50°C</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Power</strong></td>\r\n<td>DC 12V/1A</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Dimensions &amp; Weight</strong></td>\r\n<td>100 × 136 × 140 mm, Net 539.7g</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p> </p>', '<p>Resolution: 3K Ultra HD<br>View: Pan 350° / Tilt 80°<br>Special Features: 4mm &amp; 6mm lenses, 0.5 Lux low-light<br>Clarity Enhancements: 3D DNR &amp; Digital WDR</p>', NULL, NULL, 1, 0, 0, '0', 'notpopular', 0, 0, 'YC01', 61, NULL, 'H8C Pro', NULL, NULL, NULL, '2025-12-16 11:55:56', '2025-12-16 12:24:18', NULL),
(270, 'Ezviz H8C Pro 4K', 'ezviz-h8c-pro-4k', 8900, NULL, NULL, 8900.00, NULL, NULL, '0', '<table class=\"table table-bordered\" style=\"width: 100%;\">\r\n<tbody>\r\n<tr>\r\n<th style=\"width: 68.1842%;\">Image Sensor</th>\r\n<td style=\"width: 31.8158%;\">1/2.7\" Progressive Scan CMOS</td>\r\n</tr>\r\n<tr>\r\n<th style=\"width: 68.1842%;\">Shutter Speed</th>\r\n<td style=\"width: 31.8158%;\">Self-adaptive shutter</td>\r\n</tr>\r\n<tr>\r\n<th style=\"width: 68.1842%;\">Lens</th>\r\n<td style=\"width: 31.8158%;\">4mm@ F1.6, viewing angle: 48° (Vertical), 91° (Horizontal), 108° (Diagonal) 6mm@ F1.6, viewing angle: 30° (Vertical), 56° (Horizontal), 66° (Diagonal)</td>\r\n</tr>\r\n<tr>\r\n<th style=\"width: 68.1842%;\">PT Angle</th>\r\n<td style=\"width: 31.8158%;\">Pan: 350°, Tilt: 80°</td>\r\n</tr>\r\n<tr>\r\n<th style=\"width: 68.1842%;\">Minimum Illumination</th>\r\n<td style=\"width: 31.8158%;\">0.5 Lux @(F1.6, AGC ON), 0 Lux with IR (*data is obtained from EZVIZ laboratories)</td>\r\n</tr>\r\n<tr>\r\n<th style=\"width: 68.1842%;\">Lens Mount</th>\r\n<td style=\"width: 31.8158%;\">M12</td>\r\n</tr>\r\n<tr>\r\n<th style=\"width: 68.1842%;\">DNR</th>\r\n<td style=\"width: 31.8158%;\">3D DNR</td>\r\n</tr>\r\n<tr>\r\n<th style=\"width: 68.1842%;\">WDR</th>\r\n<td style=\"width: 31.8158%;\">Digital WDR</td>\r\n</tr>\r\n<tr>\r\n<th style=\"width: 68.1842%;\">Black &amp; White Night</th>\r\n<td style=\"width: 31.8158%;\">30m / 98ft</td>\r\n</tr>\r\n<tr>\r\n<th style=\"width: 68.1842%;\">Video &amp; Audio</th>\r\n</tr>\r\n<tr>\r\n<th style=\"width: 68.1842%;\">Max Resolution</th>\r\n<td style=\"width: 31.8158%;\">3840 × 2160</td>\r\n</tr>\r\n<tr>\r\n<th style=\"width: 68.1842%;\">Frame Rate</th>\r\n<td style=\"width: 31.8158%;\">Self-Adaptive during network transmission</td>\r\n</tr>\r\n<tr>\r\n<th style=\"width: 68.1842%;\">Video Compression</th>\r\n<td style=\"width: 31.8158%;\">H.265 / H.264</td>\r\n</tr>\r\n<tr>\r\n<th style=\"width: 68.1842%;\">H.265 Type</th>\r\n<td style=\"width: 31.8158%;\">Main Profile</td>\r\n</tr>\r\n<tr>\r\n<th style=\"width: 68.1842%;\">Video Bit Rate</th>\r\n<td style=\"width: 31.8158%;\">Ultra-HD; Hi-Def; Standard. Adaptive bit rate.</td>\r\n</tr>\r\n<tr>\r\n<th style=\"width: 68.1842%;\">Audio Bit Rate</th>\r\n<td style=\"width: 31.8158%;\">Self-Adaptive</td>\r\n</tr>\r\n<tr>\r\n<th style=\"width: 68.1842%;\">Network</th>\r\n</tr>\r\n<tr>\r\n<th style=\"width: 68.1842%;\">Wi-Fi Standard</th>\r\n<td style=\"width: 31.8158%;\">IEEE802.11b, 802.11g, 802.11n</td>\r\n</tr>\r\n<tr>\r\n<th style=\"width: 68.1842%;\">Frequency Range</th>\r\n<td style=\"width: 31.8158%;\">2.4 GHz ~ 2.4835 GHz</td>\r\n</tr>\r\n<tr>\r\n<th style=\"width: 68.1842%;\">Channel Bandwidth</th>\r\n<td style=\"width: 31.8158%;\">Supports 20MHz</td>\r\n</tr>\r\n<tr>\r\n<th style=\"width: 68.1842%;\">Security</th>\r\n<td style=\"width: 31.8158%;\">WPA-PSK/WPA2-PSK</td>\r\n</tr>\r\n<tr>\r\n<th style=\"width: 68.1842%;\">Transmission Rate</th>\r\n<td style=\"width: 31.8158%;\">11b 11 Mbps, 11g 54 Mbps, 11n: 72 Mbps</td>\r\n</tr>\r\n<tr>\r\n<th style=\"width: 68.1842%;\">Wi-Fi Pairing</th>\r\n<td style=\"width: 31.8158%;\">AP paring</td>\r\n</tr>\r\n<tr>\r\n<th style=\"width: 68.1842%;\">Protocol</th>\r\n<td style=\"width: 31.8158%;\">EZVIZ Cloud Proprietary Protocol</td>\r\n</tr>\r\n<tr>\r\n<th style=\"width: 68.1842%;\">Interface Protocol</th>\r\n<td style=\"width: 31.8158%;\">EZVIZ Cloud Proprietary Protocol</td>\r\n</tr>\r\n<tr>\r\n<th style=\"width: 68.1842%;\">Wired Network</th>\r\n<td style=\"width: 31.8158%;\">RJ45 × 1 (10M / 100M Adaptive Ethernet Port)</td>\r\n</tr>\r\n<tr>\r\n<th style=\"width: 68.1842%;\">Functions</th>\r\n</tr>\r\n<tr>\r\n<th style=\"width: 68.1842%;\">Smart Alarm</th>\r\n<td style=\"width: 31.8158%;\">AI-Powered Human / Vehicle Shape Detection</td>\r\n</tr>\r\n<tr>\r\n<th style=\"width: 68.1842%;\">Auto Tracking</th>\r\n<td style=\"width: 31.8158%;\">Supports</td>\r\n</tr>\r\n<tr>\r\n<th style=\"width: 68.1842%;\">Customized Alert Area</th>\r\n<td style=\"width: 31.8158%;\">Supports</td>\r\n</tr>\r\n<tr>\r\n<th style=\"width: 68.1842%;\">Two-way Talk</th>\r\n<td style=\"width: 31.8158%;\">Supports</td>\r\n</tr>\r\n<tr>\r\n<th style=\"width: 68.1842%;\">General Function</th>\r\n<td style=\"width: 31.8158%;\">Anti-Flicker, Dual-Stream, Heart Beat, Password Protection, Watermark</td>\r\n</tr>\r\n<tr>\r\n<th style=\"width: 68.1842%;\">Storage</th>\r\n</tr>\r\n<tr>\r\n<th style=\"width: 68.1842%;\">Local Storage</th>\r\n<td style=\"width: 31.8158%;\">Supports microSD Card (Up to 512 GB)</td>\r\n</tr>\r\n<tr>\r\n<th style=\"width: 68.1842%;\">Cloud Storage</th>\r\n<td style=\"width: 31.8158%;\">Supports EZVIZ CloudPlay storage (Subscription required)</td>\r\n</tr>\r\n<tr>\r\n<th style=\"width: 68.1842%;\">General</th>\r\n</tr>\r\n<tr>\r\n<th style=\"width: 68.1842%;\">Operating Conditions</th>\r\n<td style=\"width: 31.8158%;\">-30°C to 50°C ( -22 °F to 122 °F ) Humidity 95% or less (non-condensing)</td>\r\n</tr>\r\n<tr>\r\n<th style=\"width: 68.1842%;\">IP Grade</th>\r\n<td style=\"width: 31.8158%;\">Weatherproof Design</td>\r\n</tr>\r\n<tr>\r\n<th style=\"width: 68.1842%;\">Power Supply</th>\r\n<td style=\"width: 31.8158%;\">DC 12V/1A</td>\r\n</tr>\r\n<tr>\r\n<th style=\"width: 68.1842%;\">Power Consumption</th>\r\n<td style=\"width: 31.8158%;\">MAX. 12W</td>\r\n</tr>\r\n<tr>\r\n<th style=\"width: 68.1842%;\">Dimensions</th>\r\n<td style=\"width: 31.8158%;\">100 × 136 × 140mm (3.94 × 5.35 × 5.51 inch)</td>\r\n</tr>\r\n<tr>\r\n<th style=\"width: 68.1842%;\">Packaging Dimensions</th>\r\n<td style=\"width: 31.8158%;\">140 × 140 × 192mm (5.51 × 5.51 × 7.56 inch)</td>\r\n</tr>\r\n<tr>\r\n<th style=\"width: 68.1842%;\">Weight</th>\r\n<td style=\"width: 31.8158%;\">\r\n<p>Net Weight: 539.7g;</p>\r\n<p>With Package: 823.6g</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<th style=\"width: 68.1842%;\">In the box</th>\r\n</tr>\r\n<tr>\r\n<th style=\"width: 68.1842%;\">In the box</th>\r\n<td style=\"width: 31.8158%;\">- H8c Pro 4K Camera</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 68.1842%;\">- Drill Template</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 68.1842%;\">- Screw Kit</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 68.1842%;\">- Waterproof Kit</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 68.1842%;\">- Power Adapter</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 68.1842%;\">- Regulatory Information</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 68.1842%;\">- Quick Start Guide</td>\r\n</tr>\r\n<tr>\r\n<th style=\"width: 68.1842%;\">Certifications</th>\r\n</tr>\r\n<tr>\r\n<th style=\"width: 68.1842%;\">Certifications</th>\r\n<td style=\"width: 31.8158%;\">CE / UL / RoHS / WEEE / REACH</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style=\"text-align: center;\"> </p>', '<p>4K Resolution<br>360° Panoramic Coverage<br>Color Night Vision<br>AI-Powered Human / Vehicle Shape Detection<br>Auto-Zoom Tracking<br>One-Click Return to Pre-Set Directions<br>Weatherproof Design<br>Active Defense with Siren and Strobe Light<br>Two-Way Talk<br>H.265 Video Compression<br>Smart integration with Google Assistant &amp; Alexa<br>Supports up to 512GB microSD card &amp; CloudPlay storage</p>', NULL, NULL, 1, 0, 0, '0', 'notpopular', 0, 0, 'YC02', 61, NULL, 'H8C Pro', NULL, NULL, NULL, '2025-12-16 12:01:34', '2025-12-16 12:23:50', NULL),
(271, 'AC1200 Dual Band Wi-Fi Router', 'ac1200-dual-band-wi-fi-router', 3660, 10, NULL, 3660.00, NULL, NULL, '0', '<p>• Dual Band AC1200 Wi-Fi <br>• Wi-Fi 5 <br>• Beamforming and MU-MIMO Technology <br>• 3-in-1 mode: router, access point or range <br>extender <br>• Single-core CPU </p>', '<ul>\r\n<li><strong>Faster AC Wi-Fi</strong>—AC1200 dual-band is ideal for HD video streaming and high-speed downloading.<a class=\"tp-ada-note-link\" href=\"https://www.tp-link.com/us/home-networking/wifi-router/archer-c54/#footnote-1\" aria-label=\"Footnote 1\">*</a></li>\r\n<li><strong>Far-Reaching Coverage</strong>—4× antennas and Beamforming delivers extensive Wi-Fi coverage and reliable connections.</li>\r\n<li><strong>Multi-Mode 3-in-1</strong>—Supports Router, Access Point, and Range Extender modes for added flexibility.</li>\r\n<li><strong>Parental Controls</strong>—Manages when and how connected devices can access the internet.</li>\r\n<li><strong>Guest Network</strong>—Provides separate access for guests in order to secure the host network.</li>\r\n<li><strong>Smooth HD Streaming</strong>—Supports IGMP Proxy/Snooping, Bridge, and Tag VLAN to optimize IPTV streaming.</li>\r\n<li><strong>IPv6 Supported</strong>—Compatible with the IPv6 (the latest Internet Protocol version 6).</li>\r\n<li><strong>Compact and Mountable</strong>—Designed to conserve space and complement any décor.</li>\r\n</ul>', NULL, NULL, 1, 1, 0, '0', 'popular', 0, 0, 'YN02', 33, NULL, 'Archer C54', NULL, NULL, NULL, '2025-12-19 12:33:49', '2025-12-19 12:41:42', NULL),
(272, 'AX1500 Wi-Fi 6 Router', 'ax1500-wi-fi-6-router', 6000, 10, NULL, 6000.00, NULL, NULL, '0', '<p>• Archer AX1500 Wi-Fi 6 Router <br>• Dual Band router <br>• 1 x Gigabit WAN Port + 3 x Gigabit LAN <br>ports <br>• OFDMA, MU-MIMO Technology <br>• Supports new security standards like WPA3 </p>', '<ul>\r\n<li><strong>Wi-Fi 6 Technology: </strong>Archer AX12 comes equipped with the latest wireless technology, Wi-Fi 6, for faster speeds, greater capacity and reduced network congestion.</li>\r\n<li><strong>Next-Gen 1.5 Gbps Speeds: </strong>Archer AX12 dual-band router reaches even faster speeds up to 1.5 Gbps (1201 Mbps on 5 GHz band and 300 Mbps on 2.4 GHz band)<sup>15</sup></li>\r\n<li><strong>Connect More Devices: </strong>Wi-Fi 6 technology communicates more data to more devices using revolutionary OFDMA and MU-MIMO technology while simultaneously reducing lag.<sup>24</sup></li>\r\n<li><strong>More Reliable Coverage</strong>:  Achieve the strongest, most reliable WiFi coverage with Archer AX12 as it focuses signal strength to your devices using Beamforming technology and four antennas. </li>\r\n<li><strong>Increased Battery Life: </strong>Target Wake Time technology reduces your devices\' power consumption to extend their battery life.<sup>3</sup></li>\r\n<li><strong>Easy Setup: </strong>Set up your router in minutes with the powerful TP-Link Tether App.</li>\r\n<li><strong>Backward Compatible: </strong>Archer AX12 supports all previous 802.11 standards and all WiFi devices.</li>\r\n</ul>', NULL, NULL, 1, 1, 0, '0', 'popular', 0, 0, 'YN03', 33, NULL, 'Archer AX12', NULL, NULL, NULL, '2025-12-19 12:40:05', '2025-12-19 12:41:22', NULL),
(273, 'AXE5400 Tri-Band Wi-Fi 6E Gaming Router', 'axe5400-tri-band-wi-fi-6e-gaming-router', 26100, 10, NULL, 26100.00, NULL, NULL, '0', '<p><br>• AXE5400 Tri-Band Wi-Fi 6E Gaming Router <br>• Game style design with RGB Lighting setting <br>• Dedicated gaming port <br>• Supports WPA3 security standards <br>• Easy Mesh support for extending coverage <br>• 6GHz, 5GHz, 2.4 GHz frequency band </p>', '<ul class=\"\">\r\n<li><strong>5.4 Gbps Tri-Band Wi-Fi: </strong>Up to 5.4 Gbps Tri-Band WiFi enables your devices always ready for the fiercest battles.The brand new 6 GHz band provides exceptional bandwidth and congestion-free channels exclusive to Wi-Fi 6E devices.<sup><a class=\"tp-ada-note-link\" href=\"https://www.tp-link.com/us/home-networking/wifi-router/archer-gxe75/#footnote-1\" aria-label=\"Footnote 1\">†</a><a class=\"tp-ada-note-link\" href=\"https://www.tp-link.com/us/home-networking/wifi-router/archer-gxe75/#footnote-2\" aria-label=\"Footnote 2\">‡</a></sup></li>\r\n<li><strong>2.5G Multi-Gigabit Port: </strong>Supercharge your gaming network with the Archer GXE75 featuring a lightning-fast 2.5G WAN port and four 1G LAN ports for unrivaled speed and seamless multiplayer gaming.<sup><a class=\"tp-ada-note-link\" href=\"https://www.tp-link.com/us/home-networking/wifi-router/archer-gxe75/#footnote-3\" aria-label=\"Footnote 3\">§</a></sup></li>\r\n<li value=\"50\"><strong>4× Optimally Positioned Antennas: </strong>Enjoy uninterrupted gaming in every corner of your home with 4× optimally positioned antennas, proprietary Wi-Fi optimization, and Beamforming technology. </li>\r\n<li><strong>Exclusive Acceleration for Games:</strong> Accelerate game applications, game devices, mobile games, and game servers. Stabilize connections, minimize jitter, lag and ping while boosting speed.</li>\r\n<li><strong>Dedicated Game Panel: </strong>An intuitive game panel provides real-time insights into the battle environment, network status, router performance, rgb settings, accelerated games and gears, enabling players to strategize effectively.</li>\r\n<li><strong>Game-Style Design:</strong> Ignites gaming passions with its volcano-inspired design. Customizable RGB lighting casts a fiery aura, making Archer GXE75 a stylish focal point for any gamer\'s den.</li>\r\n<li><strong>TP-Link HomeShield: </strong>HomeShield provides robust antivirus protection for a secure gaming experience. It defends all your devices and personal data against online threats, ensuring peace of mind while gaming.<sup><a class=\"tp-ada-note-link\" href=\"https://www.tp-link.com/us/home-networking/wifi-router/archer-gxe75/#footnote-4\" aria-label=\"Footnote 4\">△</a></sup></li>\r\n<li class=\"\"><strong>EasyMesh Compatibility</strong>—Works with EasyMesh routers and range extenders to form seamless whole home Mesh WiFi. This connectivity ensures consistent coverage, allowing gamers to collaborate efficiently and dominate team battles.<a class=\"tp-ada-note-link\" href=\"https://www.tp-link.com/us/home-networking/wifi-router/archer-gxe75/#footnote-5\" aria-label=\"Footnote 5\">*</a></li>\r\n</ul>', NULL, NULL, 1, 1, 0, '0', 'popular', 0, 0, NULL, 33, 2, 'Archer GXE75', NULL, NULL, NULL, '2025-12-19 12:48:48', '2025-12-19 12:54:26', NULL),
(274, 'BE9300 Tri-Band Wi-Fi 7 Gaming Router', 'be9300-tri-band-wi-fi-7-gaming-router', 48720, 19, NULL, 48720.00, NULL, NULL, '0', '<p><br>• BE9300 Tri-Band Wi-Fi 7 Gaming Router <br>• Wi-Fi 7 capabilities including 4-K QAM, <br>Multi-Link Operation (MLO), Beamforming, <br>Easy Mesh compatibility <br>• Supports for WPA2, WPA3 <br>• RGB lighting control settings for better gaming <br>experience </p>', '<ul>\r\n<li><strong>Blazing-Fast Gaming Wi-Fi up to 9220 Mbps: </strong>Delivering 5764 Mbps on a 6 GHz band, 2882 Mbps on a 5 GHz band, and 574 Mbps on a 2.4 GHz band, Archer GE550 is always ready for the fiercest battles. Keep your game on track with the dedicated 5GHz gaming band, freeing you from competing with your family’s Netflix 4K streaming. <sup><a class=\"tp-ada-note-link\" href=\"https://www.tp-link.com/sg/home-networking/wifi-router/archer-ge550/#footnote-1\" aria-label=\"Footnote 1\">†</a><a class=\"tp-ada-note-link\" href=\"https://www.tp-link.com/sg/home-networking/wifi-router/archer-ge550/#footnote-2\" aria-label=\"Footnote 2\">‡</a>※</sup></li>\r\n<li><strong>Higher Speeds to Power Your Devices: </strong>Experience online gaming like never before with Multi-Link Operation (MLO) technology using the 6 GHz, and 5 GHz bands simultaneously for stable internet connections and efficient data transfers.<sup><a class=\"tp-ada-note-link\" href=\"https://www.tp-link.com/sg/home-networking/wifi-router/archer-ge550/#footnote-2\" aria-label=\"Footnote 2\">‡</a></sup></li>\r\n<li value=\"50\"><strong>Flexible Network Port Configurations: </strong>With 1× 5 Gbps WAN port, 1× 5 Gbps LAN port, and 3× 2.5 Gbps LAN ports, Archer GE550 ensures ultimate flexibility and maximum throughput. These configurations support massive bandwidth for wired gaming devices and ultra-fast connections, accommodating all gaming needs.<sup><a class=\"tp-ada-note-link\" href=\"https://www.tp-link.com/sg/home-networking/wifi-router/archer-ge550/#footnote-4\" aria-label=\"Footnote 4\">§</a></sup></li>\r\n<li><strong>Exclusive Acceleration for Games:</strong> Accelerate game applications, game devices, mobile games, and game servers. Stabilize connections, minimize jitter, lag and ping while boosting speed.</li>\r\n<li><strong>Dedicated Game Panel: </strong>An intuitive game panel provides real-time insights into the battle environment, network status, router performance, rgb settings, accelerated games and gears, enabling players to strategize effectively.</li>\r\n<li><strong>Game-Style Design:</strong> High-performance launch pad appearance, seamless multicolor lighting, and optimized antenna layout ensure quality connections and a vibrant atmosphere.</li>\r\n<li><strong>TP-Link HomeShield: </strong>HomeShield provides robust antivirus protection for a secure gaming experience. It defends all your devices and personal data against online threats, ensuring peace of mind while gaming.<a class=\"tp-ada-note-link\" href=\"https://www.tp-link.com/sg/home-networking/wifi-router/archer-ge550/#footnote-5\" aria-label=\"Footnote 5\">*</a></li>\r\n<li><strong>EasyMesh Compatibility</strong>—Works with EasyMesh routers and range extenders to form seamless whole home Mesh WiFi. This connectivity ensures consistent coverage, allowing gamers to collaborate efficiently and dominate team battles.<a class=\"tp-ada-note-link\" href=\"https://www.tp-link.com/sg/home-networking/wifi-router/archer-ge550/#footnote-6\" aria-label=\"Footnote 6\">**</a></li>\r\n</ul>', NULL, NULL, 1, 1, 0, '0', 'popular', 0, 0, NULL, 33, 2, 'Archer GE550', NULL, NULL, NULL, '2025-12-19 12:58:38', '2025-12-19 12:58:38', NULL),
(275, 'AC1200 Whole Home Mesh Wi-Fi System', 'ac1200-whole-home-mesh-wi-fi-system', 6120, 2, NULL, 6120.00, NULL, NULL, '0', '<ul>\r\n<li>Deco uses a system of units to achieve seamless whole-home Wi-Fi coverage — eliminate weak signal areas once and for all!<sup><a class=\"tp-ada-note-link\" href=\"https://www.tp-link.com/my/home-networking/deco/deco-m4/#footnote-1\" aria-label=\"Footnote 1\">†</a></sup></li>\r\n<li>With advanced Deco Mesh Technology, units work together to form a unified network with a single network name. Devices automatically switch between Decos as you move through your home for the fastest possible speeds.</li>\r\n<li>A Deco M4 two-pack delivers Wi-Fi to an area of up to 2,800 square feet (EU version)<sup><a class=\"tp-ada-note-link\" href=\"https://www.tp-link.com/my/home-networking/deco/deco-m4/#footnote-1\" aria-label=\"Footnote 1\">†</a></sup>. And if that’s not enough, simply add more Decos to the network anytime to increase coverage.</li>\r\n<li>Deco M4 provides fast and stable connections with speeds of up to 1167 Mbps<sup><a class=\"tp-ada-note-link\" href=\"https://www.tp-link.com/my/home-networking/deco/deco-m4/#footnote-1\" aria-label=\"Footnote 1\">†</a></sup> and works with major internet service provider (ISP) and modem.</li>\r\n<li>Deco can handle traffic from even the busiest of networks, providing lag-free connections for up to 100 devices<sup><a class=\"tp-ada-note-link\" href=\"https://www.tp-link.com/my/home-networking/deco/deco-m4/#footnote-1\" aria-label=\"Footnote 1\">†</a></sup>.</li>\r\n<li>Parental Controls limits online time and block inappropriate websites according to unique profiles created for each family member.</li>\r\n<li>Setup is easier than ever with the Deco app there to walk you through every step.</li>\r\n</ul>', '<p> AC1200 Whole Home Mesh Wi-Fi 5 System <br>• Mesh technology allowing seamless roaming <br>across units <br>• Can handle up to 100 connected Devices <br>• Each unit has 2 Gigabit Ethernet ports <br>(WAN/LAN auto-sensing) </p>', NULL, NULL, 1, 1, 0, '0', 'popular', 0, 0, NULL, 33, 2, 'Deco M4  (1-pack)', NULL, NULL, NULL, '2025-12-19 13:04:42', '2025-12-19 13:04:42', NULL),
(276, 'AX1500 Whole Home Mesh Wi-Fi 6 System', 'ax1500-whole-home-mesh-wi-fi-6-system', 8400, 2, NULL, 8400.00, NULL, NULL, '0', '<ul>\r\n<li><strong>Faster Connections: </strong>Wi-Fi 6 speeds up to 1,500 Mbps—1,201 Mbps on 5 GHz and 300 Mbps on 2.4 GHz.<sup><a class=\"tp-ada-note-link\" href=\"https://www.tp-link.com/my/home-networking/deco/deco-x10/#footnote-1\" aria-label=\"Footnote 1\">†</a></sup></li>\r\n<li><strong>Connect More Devices:</strong> OFDMA and MU-MIMO technology quadruple capacity to enable simultaneous transmission to more devices.<sup><a class=\"tp-ada-note-link\" href=\"https://www.tp-link.com/my/home-networking/deco/deco-x10/#footnote-3\" aria-label=\"Footnote 3\">△</a></sup></li>\r\n<li><strong>Boosted Seamless Coverage:</strong> Achieve seamless whole home coverage with a clearer and stronger whole home Wi-Fi signal generated by Wi-Fi 6.<sup><a class=\"tp-ada-note-link\" href=\"https://www.tp-link.com/my/home-networking/deco/deco-x10/#footnote-2\" aria-label=\"Footnote 2\">‡</a></sup></li>\r\n<li><strong>Ultra-Low Latency: </strong>Greater reduction in latency enables more responsive gaming and video chatting.</li>\r\n<li><strong>One Unified Network: </strong>Multiple units form a whole-home network that auto-selects the best connection as you move around your home.</li>\r\n<li><strong>Robust Parental Controls </strong>– Limit online time and block inappropriate websites according to unique profiles you create for each family member.<sup><a class=\"tp-ada-note-link\" href=\"https://www.tp-link.com/my/home-networking/deco/deco-x10/#footnote-4\" aria-label=\"Footnote 4\">*</a></sup></li>\r\n<li><strong>Setup Made Easier Than Ever:</strong> The Deco app walks you through setup step-by-step.</li>\r\n</ul>', '<p> AX1500 Whole Home Mesh Wi-Fi 6 System <br>• Wi-Fi 6 dual band <br>• 1 unit gives 2100 sq. ft of coverage <br>• Each unit has 2 Gigabit Ethernet ports <br>(WAN/LAN auto-sensing) <br>• OFDMA and MU-MIMO technology to reduce <br>latency </p>', NULL, NULL, 1, 1, 0, '0', 'popular', 0, 0, NULL, 33, 3, 'Deco X10 (1-  pack)', NULL, NULL, NULL, '2025-12-19 13:09:16', '2025-12-19 13:10:03', NULL),
(277, 'AX3000 Whole Home Mesh WiFi 6 System with PoE', 'ax3000-whole-home-mesh-wifi-6-system-with-poe', 45765, NULL, NULL, 45765.00, NULL, NULL, '0', '<ul class=\"\">\r\n<li><strong>AX3000 Dual-Band WiFi –</strong> 2402 Mbps (5 GHz) + 574 Mbps (2.4 GHz).<sup><a class=\"tp-ada-note-link\" href=\"https://www.tp-link.com/us/deco-mesh-wifi/product-family/deco-x50-poe/#footnote-1\" aria-label=\"Footnote 1\">†</a></sup></li>\r\n<li><strong>Multiple Installation Options –</strong> Place it on a tabletop or install it on a ceiling or wall with the adaptive accessories.</li>\r\n<li><strong>PoE Supported –</strong> Power over Ethernet for simplified network deployment.</li>\r\n<li><strong>Multi-Gig 2.5 Gbps Wired Network –</strong> 2× 2.5 Gbps ports.<sup><a class=\"tp-ada-note-link\" href=\"https://www.tp-link.com/us/deco-mesh-wifi/product-family/deco-x50-poe/#footnote-4\" aria-label=\"Footnote 4\">§</a></sup></li>\r\n<li><strong>Seamless AI-Driven Mesh – </strong>Intelligently learns your network environment to provide the ideal WiFi unique to your home.<sup><a class=\"tp-ada-note-link\" href=\"https://www.tp-link.com/us/deco-mesh-wifi/product-family/deco-x50-poe/#footnote-2\" aria-label=\"Footnote 2\">‡</a></sup></li>\r\n<li><strong>TP-Link HomeShield – </strong>Provides comprehensive network protection, robust parental controls, and real-time IoT security.<a class=\"tp-ada-note-link\" href=\"https://www.tp-link.com/us/deco-mesh-wifi/product-family/deco-x50-poe/#footnote-5\" aria-label=\"Footnote 5\">*</a></li>\r\n<li><strong>Universal Compatibility – </strong>Backward compatible with all WiFi generations and works with any internet service provider (ISP) and modem.<sup><a class=\"tp-ada-note-link\" href=\"https://www.tp-link.com/us/deco-mesh-wifi/product-family/deco-x50-poe/#footnote-6\" aria-label=\"Footnote 6\">☆</a></sup></li>\r\n<li class=\"\"><strong>Setup Made Easier Than Ever –</strong> The Deco app walks you through setup step-by-step.</li>\r\n</ul>', '<p> AX3000 Whole Home Mesh Wi-Fi 6 System <br>with PoE <br>• Coverage up to 6500 sq. ft (3-pack) or 2500 sq. <br>ft (1-pack) <br>• Power over Ethernet eliminating need of <br>separate power adapter <br>• Each unit includes2.5 Gbps Ethernet ports </p>', NULL, NULL, 1, 1, 0, '0', 'popular', 0, 0, NULL, 33, 1, 'Deco X50-PoE  (3-pack)', NULL, NULL, NULL, '2025-12-19 13:15:26', '2025-12-19 13:16:51', NULL),
(278, '2.4GHz 300Mbps 9dBi Outdoor CPE', '24ghz-300mbps-9dbi-outdoor-cpe', 6486, 6, NULL, 6486.00, NULL, NULL, '0', '<p><br>• 2.4GHz 300 Mbps 9dBi outdoor CPE <br>• Built-in 9dBi 2x2 dual-polarized directional <br>MIMO antenna <br>• TP-LINK Pharos Maxterm TDMA (Time- <br>Division-Multiple-Access) technology </p>', '<ul class=\"tp-ada-mouseactivate-business\">\r\n<li class=\"tp-ada-mouseactivate-business\">Built-in 9dBi 2x2 dual-polarized directional MIMO antenna</li>\r\n<li>Adjustable transmission power from 0 to 27dBm/500mw</li>\r\n<li>System-level optimizations for more than 5km long range wireless transmission</li>\r\n<li>TP-LINK Pharos MAXtream TDMA (Time-Division-Multiple-Access) technology improves product performance in throughput, capacity and latency performance, ideal for PTMP applications</li>\r\n<li>Centralized Management System – Pharos Control</li>\r\n<li>AP / Client / AP Router / AP Client Router (WISP) operation modes</li>\r\n<li class=\"\">Passive PoE Adapter supports up to 60 meter (200 feet) Power over Ethernet deployment and allows the device to be reset remotely</li>\r\n</ul>', NULL, NULL, 1, 1, 0, '0', 'popular', 0, 0, NULL, 33, 1, 'CPE210', NULL, NULL, NULL, '2025-12-19 13:20:46', '2025-12-19 13:20:46', NULL),
(279, 'AC750 Mesh Wi-Fi Range Extender', 'ac750-mesh-wi-fi-range-extender', 4324, NULL, NULL, 4324.00, NULL, NULL, '0', '<ul class=\"tp-ada-mouseactivate\">\r\n<li class=\"tp-ada-mouseactivate\">Boosts wireless signal to previously unreachable or hard-to-wire areas flawlessly.</li>\r\n<li>Creates a Mesh network by connecting to a TP-Link OneMesh™ router for seamless whole-home coverage.</li>\r\n<li>Compatible with 802.11 b/g/n and 802.11ac Wi-Fi devices</li>\r\n<li>Dual band speeds up to 750 Mbps</li>\r\n<li>Miniature size and wall-mounted design make it easy to deploy and move flexibly</li>\r\n<li class=\"\">Ethernet port allows the Extender to function as a wireless adapter to connect wired devices</li>\r\n</ul>', '<p> Wi-Fi 5 Range Extender/Wi-Fi Repeater <br>• Creates a Mesh network by connecting to a <br>TP-Link One Mesh router for seamless whole- <br>home coverage <br>• Dual band speeds up to 750 Mbps</p>', NULL, NULL, 1, 1, 0, '0', 'popular', 0, 0, NULL, 33, 1, 'RE200', NULL, NULL, NULL, '2025-12-19 13:26:22', '2025-12-19 13:26:22', NULL),
(280, 'AC1350 Wireless MU-MIMO Gigabit Ceiling Mount Access Point', 'ac1350-wireless-mu-mimo-gigabit-ceiling-mount-access-point', NULL, NULL, NULL, NULL, NULL, NULL, '0', '<p>• AC1350 Wireless Dual Band Ceiling <br>   Mount Access Point <br>• Dual-Band Wi-Fi with Wi-Fi 5 <br>• PoE support <br>• Seamless Roaming</p>', '<ul>\r\n<li><strong>Fast Dual-Band Wi-Fi</strong>: Simultaneous 450 Mbps on 2.4 GHz<sup><a class=\"tp-ada-note-link\" href=\"https://www.omadanetworks.com/in/business-networking/omada-wifi-ceiling-mount/eap225/#footnote-4\" aria-label=\"Footnote 4\">△</a></sup> and 867 Mbps on 5 GHz totals 1317 Mbps Wi-Fi speeds.<sup><a class=\"tp-ada-note-link\" href=\"https://www.omadanetworks.com/in/business-networking/omada-wifi-ceiling-mount/eap225/#footnote-1\" aria-label=\"Footnote 1\">†</a></sup></li>\r\n<li><strong>Integrated into Omada SDN</strong>: Zero-Touch Provisioning (ZTP)<sup><a class=\"tp-ada-note-link\" href=\"https://www.omadanetworks.com/in/business-networking/omada-wifi-ceiling-mount/eap225/#footnote-2\" aria-label=\"Footnote 2\">‡</a></sup>, Centralized Cloud Management, and Intelligent Monitoring.</li>\r\n<li><strong>Centralized Management</strong>: Cloud access and Omada app for ultra convenience and easy management.</li>\r\n<li><strong>Seamless Roaming</strong>: Even video streams and voice calls are unaffected as users move between locations.<a class=\"tp-ada-note-link\" href=\"https://www.omadanetworks.com/in/business-networking/omada-wifi-ceiling-mount/eap225/#footnote-3\" aria-label=\"Footnote 3\">*</a></li>\r\n<li><strong>PoE Support</strong>: Support both standard 802.3af and Passive PoE (PoE adapter included)<sup><a class=\"tp-ada-note-link\" href=\"https://www.omadanetworks.com/in/business-networking/omada-wifi-ceiling-mount/eap225/#footnote-4\" aria-label=\"Footnote 4\">△</a></sup> for flexible installations.</li>\r\n<li><strong>Secure Guest Network</strong>: Along with multiple authentication options (SMS/Voucher, etc.) and abundant wireless security technologies.</li>\r\n<li><strong>Advanced Wireless Tech</strong>: Optimize network performance with MU-MIMO, Band Steering, Airtime Fairness and Beamforming technologies</li>\r\n</ul>', NULL, NULL, 1, 1, 0, '0', 'popular', 0, 0, NULL, 33, 1, 'Omada EAP225', NULL, NULL, NULL, '2025-12-19 13:31:18', '2025-12-19 13:31:18', NULL),
(281, 'AX1800 Ceiling Mount WiFi 6 Access Point', 'ax1800-ceiling-mount-wifi-6-access-point', NULL, NULL, NULL, NULL, NULL, NULL, '0', '<p>• AX1800 Ceiling Mount Wi-Fi 6 Access <br>Point <br>• Ultrafast Wi-Fi6 speed <br>• PoE+ powered <br>• Seamless roaming </p>', '<ul>\r\n<li><strong>Ultra-Fast WiFi 6 Speeds</strong>: Simultaneous 574 Mbps on 2.4 GHz and 1201 Mbps on 5 GHz totals 1775 Mbps Wi-Fi speeds.<sup><a class=\"tp-ada-note-link\" href=\"https://www.omadanetworks.com/ph/business-networking/omada-wifi-ceiling-mount/eap610/#footnote-1\" aria-label=\"Footnote 1\">†</a></sup></li>\r\n<li><strong>High-Efficiency WiFi 6</strong>: More connected devices can enjoy faster speeds.</li>\r\n<li><strong>Centralized Cloud Management</strong>: Manage the whole network locally or from the cloud via web UI or Omada app.<sup><a class=\"tp-ada-note-link\" href=\"https://www.omadanetworks.com/ph/business-networking/omada-wifi-ceiling-mount/eap610/#footnote-3\" aria-label=\"Footnote 3\">§</a></sup></li>\r\n<li><strong>Seamless Roaming</strong>: Even video streams and voice calls are unaffected as users move between locations.<sup><a class=\"tp-ada-note-link\" href=\"https://www.omadanetworks.com/ph/business-networking/omada-wifi-ceiling-mount/eap610/#footnote-3\" aria-label=\"Footnote 3\">§</a></sup></li>\r\n<li><strong>Omada Mesh</strong>: Enables wireless connectivity between access points for extended range and flexible deployment.<sup><a class=\"tp-ada-note-link\" href=\"https://www.omadanetworks.com/ph/business-networking/omada-wifi-ceiling-mount/eap610/#footnote-3\" aria-label=\"Footnote 3\">§</a></sup></li>\r\n<li><strong>PoE+ Powered</strong>: Supports both Power over Ethernet (802.3at) and DC power supply for flexible installations.</li>\r\n<li><strong>Secure Guest Network</strong>: Along with multiple authentication options (SMS/Facebook Wi-Fi/ Voucher, etc.) and abundant wireless security technologies</li>\r\n</ul>', NULL, NULL, 1, 1, 0, '0', 'popular', 0, 0, NULL, 33, 2, 'Omada EAP610', NULL, NULL, NULL, '2025-12-19 13:34:55', '2025-12-19 13:34:55', NULL),
(282, 'Omada AC1200 Wireless MU-MIMO Gigabit Wall-Plate Access Point', 'omada-ac1200-wireless-mu-mimo-gigabit-wall-plate-access-point', 8648, 22, NULL, 8648.00, NULL, NULL, '0', '<p>• Omada AC1200 Wireless MU-MIMO <br>Gigabit Wall-Plate Access Point <br>• Fast Dual Band Wi-Fi <br>• 2 Gigabit Ethernet Ports <br>• PoE Support </p>', '<p> </p>\r\n<ul class=\"tp-ada-mouseactivate-business\">\r\n<li class=\"tp-ada-mouseactivate-business\"><strong>Fast Dual-Band Wi-Fi</strong>: Simultaneous 300 Mbps on 2.4 GHz and 867 Mbps on 5 GHz totals 1,167 Mbps Wi-Fi speeds with MU-MIMO.<sup><a class=\"tp-ada-note-link\" href=\"https://www.tp-link.com/us/business-networking/omada-sdn-access-point/eap230-wall/v1/#footnote-1\" aria-label=\"Footnote 1\">†</a></sup></li>\r\n<li><strong>Gigabit Ports</strong>: 2 Gigabit Ethernet ports (1× uplink + 1× downlink).</li>\r\n<li><strong>Integrated into Omada SDN</strong>: Zero-Touch Provisioning (ZTP)<sup><a class=\"tp-ada-note-link\" href=\"https://www.tp-link.com/us/business-networking/omada-sdn-access-point/eap230-wall/v1/#footnote-2\" aria-label=\"Footnote 2\">‡</a></sup>, Centralized Cloud Management, and Intelligent Monitoring.</li>\r\n<li><strong>Centralized Management</strong>: Cloud access and Omada app for ultra convenience and easy management.</li>\r\n<li><strong>Private Connection for Every Room</strong>: Designed to meet every network need in environments with numerous separated rooms, like hotels, offices, and dormitories.</li>\r\n<li><strong>Elegant Appearance</strong>: Unprecedented thin design with just 11 mm, the same size and shape as a light switch or power outlet faceplate to fit perfectly in any room.</li>\r\n<li><strong>Easy Installation and PoE Support</strong>: Easy-mount construction, compatible with 86 mm &amp; EU standard junction box, and 802.3af/at PoE support.</li>\r\n<li class=\"\"><strong>Secure Guest Network</strong>: Along with multiple authentication options (SMS/Voucher, etc.) and abundant wireless security technologies.</li>\r\n</ul>', NULL, NULL, 1, 1, 0, '0', 'popular', 0, 0, NULL, 33, 1, 'Omada EAP230-  Wall', NULL, NULL, NULL, '2025-12-19 13:39:51', '2025-12-19 13:39:51', NULL),
(283, 'Omada 16-Port Gigabit Unmanaged Rackmount Switch', 'omada-16-port-gigabit-unmanaged-rackmount-switch', 12600, NULL, NULL, 12600.00, NULL, NULL, '0', '<p>• Omada 16-Port Gigabit Unmanaged <br>Rackmount Switch <br>• 16× 10/100/1000Mbps RJ45 ports <br>• Supports MAC address self-learning and <br>auto MDI/MDIX </p>', '<ul>\r\n<li>16× 10/100/1000Mbps RJ45 ports</li>\r\n<li>Innovative energy-efficient technology saves power consumption</li>\r\n<li>Supports MAC address self-learning and auto MDI/MDIX</li>\r\n<li>Standard 19-inch rack-mountable steel case</li>\r\n<li>Isolation Mode allows one-click client traffic separation for higher security and performance</li>\r\n<li><span class=\"overview-article\">Monitor and address loop-related issues within your network structure to prevent disruptions caused by looping</span></li>\r\n<li>Plug and Play. No configuration or central management required.*</li>\r\n</ul>', NULL, NULL, 1, 1, 0, '0', 'popular', 0, 0, NULL, 33, 2, 'DS1016G', NULL, NULL, NULL, '2025-12-19 13:43:29', '2025-12-19 13:43:29', NULL),
(284, 'RG-RAP1200(F), Reyee Wi-Fi 5 1267Mbps Wall-mounted Access Point', 'rg-rap1200f-reyee-wi-fi-5-1267mbps-wall-mounted-access-point', 7700, NULL, NULL, 7700.00, NULL, NULL, '0', '<ul>\r\n<li>Dual-radio performance, gigabit wireless wall-mounted AP</li>\r\n<li>Better experience with MU-MIMO under 802.11ac Wave2</li>\r\n<li>Easy installation and full compatibility</li>\r\n<li>Optimization in one-click mode, achieving better Wi-Fi experience</li>\r\n<li>Easy Wi-Fi network construction within 3 minutes</li>\r\n</ul>', '<div id=\"keySpecification\" class=\"n-detail-item\">\r\n<div>\r\n<div class=\"containerCard-content--p--m\">\r\n<div class=\"row-m-b--p--m\">\r\n<div class=\"content-title--p--m\">Product Information</div>\r\n<div class=\"spec-panel\">\r\n<div class=\"description--p--m\">\r\n<div class=\"content-subtitle--p--m\">Product Type</div>\r\n<div class=\"detail--p--m\"><span class=\"t-left--p--m\">Product Type</span>\r\n<ul class=\"t-rigth--p--m\">\r\n<li>Wall AP</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"row-m-b--p--m\">\r\n<div class=\"content-title--p--m\">Hardware Specifications</div>\r\n<div class=\"spec-panel\">\r\n<div class=\"description--p--m\">\r\n<div class=\"content-subtitle--p--m\">Wi-Fi Radio</div>\r\n<div class=\"detail--p--m\"><span class=\"t-left--p--m\">Radio design</span>\r\n<ul class=\"t-rigth--p--m\">\r\n<li>Dual-radio<br>4 spatial streams<br>● 2.4 GHz: 2 x 2, MIMO<br>● 5 GHz: 2 x 2, MIMO</li>\r\n</ul>\r\n</div>\r\n<div class=\"detail--p--m\"><span class=\"t-left--p--m\">Maximum wireless data rate</span>\r\n<ul class=\"t-rigth--p--m\">\r\n<li>1266 Mbps</li>\r\n</ul>\r\n</div>\r\n<div class=\"detail--p--m\"><span class=\"t-left--p--m\">6 GHz wireless data rate</span>\r\n<ul class=\"t-rigth--p--m\">\r\n<li>No</li>\r\n</ul>\r\n</div>\r\n<div class=\"detail--p--m\"><span class=\"t-left--p--m\">5 GHz wireless data rate</span>\r\n<ul class=\"t-rigth--p--m\">\r\n<li>866 Mbps</li>\r\n</ul>\r\n</div>\r\n<div class=\"detail--p--m\"><span class=\"t-left--p--m\">2.4 GHz wireless data rate</span>\r\n<ul class=\"t-rigth--p--m\">\r\n<li>400 Mbps</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<div class=\"description--p--m\">\r\n<div class=\"content-subtitle--p--m\">Antenna</div>\r\n<div class=\"detail--p--m\"><span class=\"t-left--p--m\">Antenna</span>\r\n<ul class=\"t-rigth--p--m\">\r\n<li>Integrated 2.4 GHz and 5 GHz: 2 built-in omnidirectional antennas</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<div class=\"description--p--m\">\r\n<div class=\"content-subtitle--p--m\">Dimensions and Weight</div>\r\n<div class=\"detail--p--m\"><span class=\"t-left--p--m\">Product dimensions (W x D x H)</span>\r\n<ul class=\"t-rigth--p--m\">\r\n<li>86 mm x 29.3 mm x 86 mm (3.39 in. x 1.15 in. x 3.39 in.)</li>\r\n</ul>\r\n</div>\r\n<div class=\"detail--p--m\"><span class=\"t-left--p--m\">Color</span>\r\n<ul class=\"t-rigth--p--m\">\r\n<li>White</li>\r\n</ul>\r\n</div>\r\n<div class=\"detail--p--m\"><span class=\"t-left--p--m\">Weight</span>\r\n<ul class=\"t-rigth--p--m\">\r\n<li>≤ 0.14 kg (0.31 lbs.) (without packaging materials)</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<div class=\"description--p--m\">\r\n<div class=\"content-subtitle--p--m\">Port Specifications</div>\r\n<div class=\"detail--p--m\"><span class=\"t-left--p--m\">Number of 10/100BASE-T ports</span>\r\n<ul class=\"t-rigth--p--m\">\r\n<li>2</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<div class=\"description--p--m\">\r\n<div class=\"content-subtitle--p--m\">Power Supply and Consumption</div>\r\n<div class=\"detail--p--m\"><span class=\"t-left--p--m\">Power supply</span>\r\n<ul class=\"t-rigth--p--m\">\r\n<li>PoE/PoE+</li>\r\n</ul>\r\n</div>\r\n<div class=\"detail--p--m\"><span class=\"t-left--p--m\">Local power supply</span>\r\n<ul class=\"t-rigth--p--m\">\r\n<li>No</li>\r\n</ul>\r\n</div>\r\n<div class=\"detail--p--m\"><span class=\"t-left--p--m\">Dimensions of the DC connector</span>\r\n<ul class=\"t-rigth--p--m\">\r\n<li>No</li>\r\n</ul>\r\n</div>\r\n<div class=\"detail--p--m\"><span class=\"t-left--p--m\">PoE budget</span>\r\n<ul class=\"t-rigth--p--m\">\r\n<li>No</li>\r\n</ul>\r\n</div>\r\n<div class=\"detail--p--m\"><span class=\"t-left--p--m\">Maximum power consumption</span>\r\n<ul class=\"t-rigth--p--m\">\r\n<li>8 W</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<div class=\"description--p--m\">\r\n<div class=\"content-subtitle--p--m\">Environment and Reliability</div>\r\n<div class=\"detail--p--m\"><span class=\"t-left--p--m\">Operating temperature</span>\r\n<ul class=\"t-rigth--p--m\">\r\n<li>0°C to 40°C (32°F to 104°F)</li>\r\n</ul>\r\n</div>\r\n<div class=\"detail--p--m\"><span class=\"t-left--p--m\">Mounting options</span>\r\n<ul class=\"t-rigth--p--m\">\r\n<li>Junction box</li>\r\n</ul>\r\n</div>\r\n<div class=\"detail--p--m\"><span class=\"t-left--p--m\">IP rating</span>\r\n<ul class=\"t-rigth--p--m\">\r\n<li>IP41</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"row-m-b--p--m\">\r\n<div class=\"content-title--p--m\">Software Specifications</div>\r\n<div class=\"spec-panel\">\r\n<div class=\"description--p--m\">\r\n<div class=\"content-subtitle--p--m\">WLAN</div>\r\n<div class=\"detail--p--m\"><span class=\"t-left--p--m\">Maximum number of associated wireless clients</span>\r\n<ul class=\"t-rigth--p--m\">\r\n<li>64 (2.4 GHz)<br>110 (5 GHz)<br>110 (2.4 GHz and 5 GHz enabled)</li>\r\n</ul>\r\n</div>\r\n<div class=\"detail--p--m\"><span class=\"t-left--p--m\">Maximum number of devices that can be managed</span>\r\n<ul class=\"t-rigth--p--m\">\r\n<li>150</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<div class=\"description--p--m\">\r\n<div class=\"content-subtitle--p--m\">IP Service</div>\r\n<div class=\"detail--p--m\"><span class=\"t-left--p--m\">IPv6</span>\r\n<ul class=\"t-rigth--p--m\">\r\n<li>No</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"orderInformation\" class=\"n-detail-item\">\r\n<div class=\"n-detail-item-title\">Order Information</div>\r\n<div id=\"orderInfor\" class=\"n-toggle\">\r\n<div class=\"com-product-QA-main\">\r\n<table border=\"1\">\r\n<tbody>\r\n<tr>\r\n<td><span dir=\"ltr\" role=\"presentation\">Mounting Screw</span></td>\r\n<td>2</td>\r\n</tr>\r\n<tr>\r\n<td><span dir=\"ltr\" role=\"presentation\">Quick Start Guide</span></td>\r\n<td>1</td>\r\n</tr>\r\n<tr>\r\n<td><span dir=\"ltr\" role=\"presentation\">Warranty Card</span></td>\r\n<td>1</td>\r\n</tr>\r\n<tr>\r\n<td><span dir=\"ltr\" role=\"presentation\">Package Weight</span></td>\r\n<td><span dir=\"ltr\" role=\"presentation\">0.19 kg</span></td>\r\n</tr>\r\n<tr>\r\n<td><span dir=\"ltr\" role=\"presentation\">Package Dimension (w x d x h)</span></td>\r\n<td>128 mm x 116 mm x 50 mm</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>\r\n</div>\r\n</div>\r\n<p> </p>', NULL, NULL, 1, 0, 0, '0', 'popular', 0, 0, NULL, 63, NULL, 'RG-RAP1200', NULL, NULL, NULL, '2025-12-27 10:36:07', '2025-12-27 10:40:47', NULL);
INSERT INTO `products` (`id`, `product_name`, `slug`, `price`, `stock`, `weight`, `discount_price`, `discount_percent`, `wholesale_price`, `views`, `short_description`, `long_description`, `size_variation`, `video`, `status`, `latest`, `hot`, `is_featured`, `is_popular`, `on_sale`, `is_special`, `sku`, `brand_id`, `offer_id`, `model_name`, `component_type`, `audio`, `deleted_at`, `created_at`, `updated_at`, `tag_id`) VALUES
(285, 'RG-EG105G-V3 Reyee Cloud Managed Router', 'rg-eg105g-v3-reyee-cloud-managed-router', 14000, 2, NULL, 14000.00, NULL, NULL, '0', '<div class=\"content-title--p--m\"><strong>Hardware Specifications</strong></div>\r\n<div class=\"spec-panel\">\r\n<div class=\"description--p--m\">\r\n<div class=\"content-subtitle--p--m\">Port Specifications</div>\r\n<div class=\"detail--p--m\"><span class=\"t-left--p--m\">Number of 10/100/1000BASE-T ports</span>\r\n<ul class=\"t-rigth--p--m\">\r\n<li>5</li>\r\n</ul>\r\n</div>\r\n<div class=\"detail--p--m\"><span class=\"t-left--p--m\">Number of fixed LAN ports</span>\r\n<ul class=\"t-rigth--p--m\">\r\n<li>3</li>\r\n</ul>\r\n</div>\r\n<div class=\"detail--p--m\"><span class=\"t-left--p--m\">Number of fixed WAN ports</span>\r\n<ul class=\"t-rigth--p--m\">\r\n<li>1</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<div class=\"description--p--m\">\r\n<div class=\"content-subtitle--p--m\">System Specifications</div>\r\n<div class=\"detail--p--m\"><span class=\"t-left--p--m\">CPU</span>\r\n<ul class=\"t-rigth--p--m\">\r\n<li>Dual-core processor, 880 MHz clock frequency per core</li>\r\n</ul>\r\n</div>\r\n<div class=\"detail--p--m\"><span class=\"t-left--p--m\">Flash memory</span>\r\n<ul class=\"t-rigth--p--m\">\r\n<li>32 MB</li>\r\n</ul>\r\n</div>\r\n<div class=\"detail--p--m\"><span class=\"t-left--p--m\">RAM</span>\r\n<ul class=\"t-rigth--p--m\">\r\n<li>128 MB</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<div class=\"description--p--m\">\r\n<div class=\"content-subtitle--p--m\">Dimensions and Weight</div>\r\n<div class=\"detail--p--m\"><span class=\"t-left--p--m\">Product dimensions (W x D x H)</span>\r\n<ul class=\"t-rigth--p--m\">\r\n<li>206.5 mm x 108.5 mm x 28 mm (8.13 in. x 4.27 in. x 1.1 in.)</li>\r\n</ul>\r\n</div>\r\n<div class=\"detail--p--m\"><span class=\"t-left--p--m\">Weight</span>\r\n<ul class=\"t-rigth--p--m\">\r\n<li>0.406 kg (0.9 lbs)</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<div class=\"description--p--m\">\r\n<div class=\"content-subtitle--p--m\">Environment and Reliability</div>\r\n<div class=\"detail--p--m\"><span class=\"t-left--p--m\">Mounting options</span>\r\n<ul class=\"t-rigth--p--m\">\r\n<li>Desk</li>\r\n</ul>\r\n</div>\r\n<div class=\"detail--p--m\"><span class=\"t-left--p--m\">Operating temperature</span>\r\n<ul class=\"t-rigth--p--m\">\r\n<li>0°C to 40°C (32°F to 104°F)</li>\r\n</ul>\r\n<div class=\"content-title--p--m\"><strong>Software Specifications</strong></div>\r\n<div class=\"spec-panel\">\r\n<div class=\"description--p--m\">\r\n<div class=\"content-subtitle--p--m\">System Performance Capacity</div>\r\n<div class=\"detail--p--m\"><span class=\"t-left--p--m\">Recommended number of concurrent clients</span>\r\n<ul class=\"t-rigth--p--m\">\r\n<li>100</li>\r\n</ul>\r\n</div>\r\n<div class=\"detail--p--m\"><span class=\"t-left--p--m\">Throughput</span>\r\n<ul class=\"t-rigth--p--m\">\r\n<li>1000 Mbps (Turbo Mode)<br>600 Mbps (Normal Mode)</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '<div class=\"n-detail-info-title\">Highlight Features</div>\r\n<ul>\r\n<li>Unified Features with Upgraded Flash Storage</li>\r\n<li>User-friendly configuration and easy to use</li>\r\n<li>High reliability and load balancing through WAN ports</li>\r\n<li>Easy to block unwanted applications with automatically updating library</li>\r\n<li>Customized portal page, what you see is what you get (WYSIWYG)</li>\r\n<li>Secure access to internal devices remotely</li>\r\n</ul>', NULL, NULL, 1, 0, 0, '0', 'popular', 0, 0, NULL, 63, 1, 'RG-EG105G-V3', NULL, NULL, NULL, '2025-12-27 10:54:23', '2025-12-27 10:55:21', NULL),
(286, 'Ruijie Reyee RG-EW300N 300Mbps Wireless Smart Router', 'ruijie-reyee-rg-ew300n-300mbps-wireless-smart-router', 2050, 22, NULL, 2050.00, NULL, NULL, '0', '<div class=\"row-m-b--p--m\">\r\n<div class=\"spec-panel\">\r\n<div class=\"description--p--m\">\r\n<div class=\"content-subtitle--p--m\"><strong>Antenna</strong></div>\r\n<div class=\"detail--p--m\"><span class=\"t-left--p--m\">Antenna</span>\r\n<ul class=\"t-rigth--p--m\">\r\n<li>2 x external antennas</li>\r\n</ul>\r\n</div>\r\n<div class=\"detail--p--m\"><span class=\"t-left--p--m\">Antenna gain (2.4 GHz)</span>\r\n<ul class=\"t-rigth--p--m\">\r\n<li>4.5 dBi</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<div class=\"description--p--m\">\r\n<div class=\"content-subtitle--p--m\">Wi-Fi Radio</div>\r\n<div class=\"detail--p--m\"><span class=\"t-left--p--m\">FEM</span>\r\n<ul class=\"t-rigth--p--m\">\r\n<li>iPA</li>\r\n</ul>\r\n</div>\r\n<div class=\"detail--p--m\"><span class=\"t-left--p--m\">Max. Wi-Fi Speed</span>\r\n<ul class=\"t-rigth--p--m\">\r\n<li>2.4 GHz, 300 Mbps</li>\r\n</ul>\r\n</div>\r\n<div class=\"detail--p--m\"><span class=\"t-left--p--m\">Wi-Fi standard</span>\r\n<ul class=\"t-rigth--p--m\">\r\n<li>Wi-Fi 4 (IEEE 802.11n)</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"row-m-b--p--m\">\r\n<div class=\"content-title--p--m\"><strong>Software Specifications</strong></div>\r\n<div class=\"spec-panel\">\r\n<div class=\"description--p--m\">\r\n<div class=\"content-subtitle--p--m\">Network Management and Monitoring</div>\r\n<div class=\"detail--p--m\"><span class=\"t-left--p--m\">Ruijie Cloud management</span>\r\n<ul class=\"t-rigth--p--m\">\r\n<li>Yes</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<div class=\"description--p--m\">\r\n<div class=\"content-subtitle--p--m\">Reyee Mesh 3.0</div>\r\n<div class=\"detail--p--m\"><span class=\"t-left--p--m\">Reyee Mesh 3.0</span>\r\n<ul class=\"t-rigth--p--m\">\r\n<li>No</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<div class=\"description--p--m\">\r\n<div class=\"content-subtitle--p--m\">System Performance Capacity</div>\r\n<div class=\"detail--p--m\"><span class=\"t-left--p--m\">Maximum number of concurrent clients</span>\r\n<ul class=\"t-rigth--p--m\">\r\n<li>16 (2.4 GHz)</li>\r\n</ul>\r\n</div>\r\n<div class=\"detail--p--m\"><span class=\"t-left--p--m\">Recommended number of concurrent clients</span>\r\n<ul class=\"t-rigth--p--m\">\r\n<li>8 (2.4 GHz)</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<div class=\"description--p--m\">\r\n<div class=\"content-subtitle--p--m\">IP Service</div>\r\n<div class=\"detail--p--m\"><span class=\"t-left--p--m\">IPv6</span>\r\n<ul class=\"t-rigth--p--m\">\r\n<li>Yes</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '<div class=\"n-detail-info-title\">Highlight Features</div>\r\n<ul>\r\n<li>Stable as Always</li>\r\n<li>Four Modes supported: Router Mode, Repeater Mode, AP Mode, WISP Mode</li>\r\n<li>Easy Setup</li>\r\n<li>Life-time free cloud management supported</li>\r\n<li>Three-year warranty</li>\r\n</ul>', NULL, NULL, 1, 0, 0, '0', 'popular', 0, 0, NULL, 63, 1, 'RG-EW300N', NULL, NULL, NULL, '2025-12-27 11:01:17', '2025-12-27 11:01:17', NULL),
(287, 'Ruijie Reyee RG-EW3000GX AX3000 Wi-Fi 6 Dual-band Gigabit Mesh Router', 'ruijie-reyee-rg-ew3000gx-ax3000-wi-fi-6-dual-band-gigabit-mesh-router', 10130, 2, NULL, 10130.00, NULL, NULL, '0', '<p>Wi-Fi 6 Router for ultra-fast and stable gigabit connectivity<br>Dual-WAN aggregation ensures consistent network uptime<br>160MHz bandwidth boosts throughput and reduces latency<br>5 external high-gain antennas provide wider, stronger coverage<br>Reyee Mesh 3.0 technology enables seamless whole-home coverage<br>Smart app control via Ruijie Reyee App for easy network setup and management</p>', '<table class=\"table table-bordered\">\r\n<thead>\r\n<tr>\r\n<th><strong>Brand</strong></th>\r\n<th>Ruijie Reyee</th>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<td><strong>Model</strong></td>\r\n<td>RG-EW3000GX</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Wi-Fi Standard</strong></td>\r\n<td>Wi-Fi 6 (IEEE 802.11ax)</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Max Wi-Fi Speed</strong></td>\r\n<td>2.4GHz: 573 Mbps / 5GHz: 2402 Mbps</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Antenna</strong></td>\r\n<td>5 x External Antennas</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Antenna Gain</strong></td>\r\n<td>2.4GHz: 4.5 dBi / 5GHz: 5.5 dBi</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Bandwidth</strong></td>\r\n<td>160 MHz</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Mesh Technology</strong></td>\r\n<td>Exclusive Reyee Mesh 3.0</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Dual-WAN Aggregation</strong></td>\r\n<td>Supported</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Concurrent Clients (Max)</strong></td>\r\n<td>64 (2.4GHz) / 128 (5GHz)</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Recommended Clients</strong></td>\r\n<td>16 (2.4GHz) / 64 (5GHz)</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Cloud Management</strong></td>\r\n<td>Ruijie Cloud via Reyee App</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Warranty</strong></td>\r\n<td>3-Years Authorized Warranty</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p> </p>', NULL, NULL, 1, 0, 0, '0', 'popular', 0, 0, NULL, 63, NULL, 'RG-EW3000GX', NULL, NULL, NULL, '2025-12-27 11:06:54', '2025-12-27 11:06:54', NULL),
(288, 'RG-EW3000GX PRO 3000M Wi-Fi 6 Dual-band Gigabit Gaming Router', 'rg-ew3000gx-pro-3000m-wi-fi-6-dual-band-gigabit-gaming-router', 14770, 2, NULL, 14770.00, NULL, NULL, '0', '<div class=\"content-title--p--m\"><strong>Hardware Specifications</strong></div>\r\n<div class=\"spec-panel\">\r\n<div class=\"description--p--m\">\r\n<div class=\"content-subtitle--p--m\"><strong>Antenna</strong></div>\r\n<div class=\"detail--p--m\"><span class=\"t-left--p--m\">Antenna</span>\r\n<ul class=\"t-rigth--p--m\">\r\n<li>5 x external antennas</li>\r\n</ul>\r\n</div>\r\n<div class=\"detail--p--m\"><span class=\"t-left--p--m\">Antenna gain (2.4 GHz)</span>\r\n<ul class=\"t-rigth--p--m\">\r\n<li>4.5 dBi</li>\r\n</ul>\r\n</div>\r\n<div class=\"detail--p--m\"><span class=\"t-left--p--m\">Antenna gain (5 GHz)</span>\r\n<ul class=\"t-rigth--p--m\">\r\n<li>6 dBi</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<div class=\"description--p--m\">\r\n<div class=\"content-subtitle--p--m\">Wi-Fi Radio</div>\r\n<div class=\"detail--p--m\"><span class=\"t-left--p--m\">FEM</span>\r\n<ul class=\"t-rigth--p--m\">\r\n<li>EPA</li>\r\n</ul>\r\n</div>\r\n<div class=\"detail--p--m\"><span class=\"t-left--p--m\">Max. Wi-Fi Speed</span>\r\n<ul class=\"t-rigth--p--m\">\r\n<li>2.4 GHz, 573 Mbps<br>5 GHz, 2402 Mbps</li>\r\n</ul>\r\n</div>\r\n<div class=\"detail--p--m\"><span class=\"t-left--p--m\">Wi-Fi standard</span>\r\n<ul class=\"t-rigth--p--m\">\r\n<li>Wi-Fi 6 (IEEE 802.11ax)</li>\r\n</ul>\r\n<div class=\"description--p--m\">\r\n<div class=\"content-subtitle--p--m\">Network Management and Monitoring</div>\r\n<div class=\"detail--p--m\"><span class=\"t-left--p--m\">Ruijie Cloud management</span>\r\n<ul class=\"t-rigth--p--m\">\r\n<li>Yes</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<div class=\"description--p--m\">\r\n<div class=\"content-subtitle--p--m\">Reyee Mesh 3.0</div>\r\n<div class=\"detail--p--m\"><span class=\"t-left--p--m\">Reyee Mesh 3.0</span>\r\n<ul class=\"t-rigth--p--m\">\r\n<li>Yes</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<div class=\"description--p--m\">\r\n<div class=\"content-subtitle--p--m\">System Performance Capacity</div>\r\n<div class=\"detail--p--m\"><span class=\"t-left--p--m\">Maximum number of concurrent clients</span>\r\n<ul class=\"t-rigth--p--m\">\r\n<li>64 (2.4 GHz)<br>128 (5 GHz)</li>\r\n</ul>\r\n</div>\r\n<div class=\"detail--p--m\"><span class=\"t-left--p--m\">Recommended number of concurrent clients</span>\r\n<ul class=\"t-rigth--p--m\">\r\n<li>16 (2.4 GHz)<br>64 (5 GHz)</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '<div class=\"n-detail-info-title\">Highlight Features</div>\r\n<ul>\r\n<li>Next-generation gigabit Wi-Fi 6 standard</li>\r\n<li>Dual-WAN aggregation</li>\r\n<li>Gaming engine providing unrivalled gaming experience</li>\r\n<li>Strong signals received</li>\r\n<li>Exclusive Reyee mesh providing full-space-coverage Wi-Fi solution</li>\r\n<li>Control of your home network at your fingertips</li>\r\n</ul>', NULL, NULL, 1, 0, 0, '0', 'popular', 0, 0, NULL, 63, NULL, 'RG-EW3000GX PRO', NULL, NULL, NULL, '2025-12-27 11:12:25', '2025-12-27 11:12:25', NULL),
(289, 'Ruijie Reyee RG-EW3200GX PRO 3200M Wi-Fi 6 Dual-band Gigabit Mesh Router', 'ruijie-reyee-rg-ew3200gx-pro-3200m-wi-fi-6-dual-band-gigabit-mesh-router', 19930, 2, NULL, 19930.00, NULL, NULL, '0', '<table class=\"table table-bordered\">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p><strong>Wi-Fi Standards</strong></p>\r\n</td>\r\n<td>\r\n<p>Wi-Fi 6 (802.11ax)</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p><strong>MIMO</strong></p>\r\n</td>\r\n<td>\r\n<p>2.4 GHz: 4×4 5 GHz: 4×4</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p><strong>Antennas</strong></p>\r\n</td>\r\n<td>\r\n<p>8</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p><strong>Interface</strong></p>\r\n</td>\r\n<td>\r\n<p>1 x 10/100/1000 Base-T WAN Port, 4 x 10/100/1000 Base-T LAN Ports</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p><strong>Weight</strong></p>\r\n</td>\r\n<td>\r\n<p>0.55 kg (packages not included)</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p><strong>Advanced Technology</strong></p>\r\n</td>\r\n<td>\r\n<p>VPN, IPv6, Beamforming, OFDMA</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p><strong>Max. Wi-Fi Speed</strong></p>\r\n</td>\r\n<td>\r\n<p>2.4 GHz: 800 Mbps 5 GHz: 2402 Mbps</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p><strong>Recommended Users</strong></p>\r\n</td>\r\n<td>\r\n<p>60</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p><strong>Antenna Gain</strong></p>\r\n</td>\r\n<td>\r\n<p>2.4 GHz: 5 dBi 5 GHz: 6 dBi</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p><strong>Power Supply</strong></p>\r\n</td>\r\n<td>\r\n<p>DC 12V/2.5A</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p><strong>Dimensions (W x D x H)</strong></p>\r\n</td>\r\n<td>\r\n<p>190 mm x 190 mm x 41 mm</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p><strong>Warranty</strong></p>\r\n</td>\r\n<td>\r\n<p>1 Year</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p> </p>', '<p>Next-Gen Gigabit Wi-Fi 6 Standard<br>Ultra-fast Wi-Fi Speed<br>Strong Signal Received, Feels like “wall-less”<br>Exclusive Reyee Mesh provides full space coverage Wi-Fi solution<br>Better stability under heavy load<br>Take control of your home network at your fingertips</p>', NULL, NULL, 1, 0, 0, '0', 'popular', 0, 0, NULL, 63, NULL, 'RG-EW3200GX PRO', NULL, NULL, NULL, '2025-12-27 11:15:56', '2025-12-27 11:15:56', NULL),
(290, 'Ruijie Reyee RG-RAP52-OD Wi-Fi 5 AC1300 Dual-Band Gigabit Wireless Access Point', 'ruijie-reyee-rg-rap52-od-wi-fi-5-ac1300-dual-band-gigabit-wireless-access-point', 18600, 2, NULL, 18600.00, NULL, NULL, '0', '<table class=\"table table-bordered\">\r\n<tbody>\r\n<tr>\r\n<td>Wi-Fi Protocol</td>\r\n<td>802.11ac Wave 2, 1267 Mbps</td>\r\n</tr>\r\n<tr>\r\n<td>IP Rating</td>\r\n<td>IP65</td>\r\n</tr>\r\n<tr>\r\n<td>Max/Recommended Clients</td>\r\n<td>110/96</td>\r\n</tr>\r\n<tr>\r\n<td>Dimensions</td>\r\n<td>220 mm x 50 mm x 35.7 mm (8.66 in. x 1.97 in. x 1.41 in.)</td>\r\n</tr>\r\n<tr>\r\n<td>Power Supply</td>\r\n<td>IEEE 802.3af, 24 V passive PoE</td>\r\n</tr>\r\n<tr>\r\n<td>Certifications</td>\r\n<td>CE, RoHS</td>\r\n</tr>\r\n<tr>\r\n<td>Port</td>\r\n<td>1 x 10/100/1000Base-T port</td>\r\n</tr>\r\n<tr>\r\n<td>MIMO</td>\r\n<td>2x2 @2.4 GHz, 2x2 @5 GHz</td>\r\n</tr>\r\n<tr>\r\n<td>Operating Temperature</td>\r\n<td>-30°C to +70°C (-22°F to +158°F)</td>\r\n</tr>\r\n<tr>\r\n<td>Weight</td>\r\n<td>≤ 0.4 kg (0.88 lbs)</td>\r\n</tr>\r\n<tr>\r\n<td>Power Consumption</td>\r\n<td>14 W</td>\r\n</tr>\r\n<tr>\r\n<td>Warranty</td>\r\n<td>3 years</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p> </p>', NULL, NULL, NULL, 1, 0, 0, '0', 'popular', 0, 0, NULL, 63, NULL, 'RG-RAP52-OD', NULL, NULL, NULL, '2025-12-27 11:20:51', '2025-12-27 11:20:51', NULL),
(291, 'Ruijie Reyee RG-EST100-E 500m Wireless Bridge', 'ruijie-reyee-rg-est100-e-500m-wireless-bridge', 8000, NULL, NULL, 8000.00, NULL, NULL, '0', '<table class=\"table table-bordered\">\r\n<tbody>\r\n<tr>\r\n<td>Radio Design</td>\r\n<td>2.4 GHz Single-Band Dual-Stream</td>\r\n</tr>\r\n<tr>\r\n<td>Operating Band</td>\r\n<td>802.11b/g/n: 2.400～2.483GHz</td>\r\n</tr>\r\n<tr>\r\n<td>Polarization</td>\r\n<td>Horizontal: 70°, Vertical: 70°</td>\r\n</tr>\r\n<tr>\r\n<td>Spatial Streams</td>\r\n<td>2x2, MU-MIMO</td>\r\n</tr>\r\n<tr>\r\n<td>Maximum Throughput</td>\r\n<td>Up to 300 Mbps at 2.4 GHz</td>\r\n</tr>\r\n<tr>\r\n<td>IP Rating</td>\r\n<td>IP55</td>\r\n</tr>\r\n<tr>\r\n<td>Installation</td>\r\n<td>Wall-mounted/ Pole-mounted</td>\r\n</tr>\r\n<tr>\r\n<td>Weight</td>\r\n<td>0.3 kg</td>\r\n</tr>\r\n<tr>\r\n<td>Transmission Protocol</td>\r\n<td>IEEE 802.11b/g/n</td>\r\n</tr>\r\n<tr>\r\n<td>Antenna</td>\r\n<td>Directional antennas, 8 dBi</td>\r\n</tr>\r\n<tr>\r\n<td>Bridging Distance</td>\r\n<td>500m (recommended)</td>\r\n</tr>\r\n<tr>\r\n<td>Memory/Flash</td>\r\n<td>64 MB/8 MB</td>\r\n</tr>\r\n<tr>\r\n<td>Max. Transmit Power</td>\r\n<td>≤100 mW(20 dBm) (adjustable)</td>\r\n</tr>\r\n<tr>\r\n<td>Lightning Protection</td>\r\n<td>±6 KV(Common Mode)</td>\r\n</tr>\r\n<tr>\r\n<td>Dimensions (D x W x H)</td>\r\n<td>165.5mm×68.7mm×42mm</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p> </p>', NULL, NULL, NULL, 1, 0, 0, '0', 'popular', 0, 0, NULL, 63, NULL, 'RG-EST100-E', NULL, NULL, NULL, '2025-12-27 11:23:52', '2025-12-27 11:25:09', NULL),
(292, 'Ruijie Reyee RG-EST310 V2 5GHz Wireless Bridge', 'ruijie-reyee-rg-est310-v2-5ghz-wireless-bridge', 20000, 2, NULL, 20000.00, NULL, NULL, '0', '<table class=\"table table-bordered\">\r\n<tbody>\r\n<tr>\r\n<td>Router type</td>\r\n<td>Wi-Fi repeater</td>\r\n</tr>\r\n<tr>\r\n<td>Installation location</td>\r\n<td>outside</td>\r\n</tr>\r\n<tr>\r\n<td>Wi-Fi frequency</td>\r\n<td>5 GHz</td>\r\n</tr>\r\n<tr>\r\n<td>Wireless standard</td>\r\n<td>802.11n, 802.11ac</td>\r\n</tr>\r\n<tr>\r\n<td>Antenna type</td>\r\n<td>built-in</td>\r\n</tr>\r\n<tr>\r\n<td>Number of USB ports</td>\r\n<td>no</td>\r\n</tr>\r\n<tr>\r\n<td>Body color</td>\r\n<td>white</td>\r\n</tr>\r\n<tr>\r\n<td>Dimensions (WхHхD)</td>\r\n<td>223 x 82 x 375 mm</td>\r\n</tr>\r\n<tr>\r\n<td>Temperature range</td>\r\n<td>-30...+50°C</td>\r\n</tr>\r\n<tr>\r\n<td>Producing country</td>\r\n<td>China</td>\r\n</tr>\r\n<tr>\r\n<td>Device class</td>\r\n<td>middle</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p> </p>', NULL, NULL, NULL, 1, 0, 0, '0', 'popular', 0, 0, NULL, 63, NULL, 'RG-EST310 V2', NULL, NULL, NULL, '2025-12-27 11:27:52', '2025-12-27 11:27:52', NULL),
(293, 'Ruijie Reyee RG-EST350 V2 5GHz Dual-stream 5KM Wireless Bridge', 'ruijie-reyee-rg-est350-v2-5ghz-dual-stream-5km-wireless-bridge', 28000, 2, NULL, 28000.00, NULL, NULL, '0', '<table class=\"table table-bordered\">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p>Model</p>\r\n</td>\r\n<td>\r\n<p>RG-EST350 V2</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Radio Design</p>\r\n</td>\r\n<td>\r\n<p>5 GHz Single-Band Dual-Stream</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Operating Band</p>\r\n</td>\r\n<td>\r\n<p>802.11a/n/ac: 5.150～5 .350GHz, 5.470~5.725GHz , 5.725～5 .850GHz<br>(country specifc)</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Antenna</p>\r\n</td>\r\n<td>\r\n<p>Directional antennas, 15 dBi</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Polarization</p>\r\n</td>\r\n<td>\r\n<p>Horizontal: 31°, Vertical: 14°</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Bridging Distance</p>\r\n</td>\r\n<td>\r\n<p>5 KM (recommended)</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Spatial Streams</p>\r\n</td>\r\n<td>\r\n<p>2x2, MU-MIMO</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Memory/Flash</p>\r\n</td>\r\n<td>\r\n<p>128 MB/8 MB</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Maximum Throughput</p>\r\n</td>\r\n<td>\r\n<p>Up to 867 Mbps at 5 GHz</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Ports</p>\r\n</td>\r\n<td>\r\n<p>2 10/100/1000Base-T Ethernet ports, port 1 with Passive PoE</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Max. Transmit Power</p>\r\n</td>\r\n<td>\r\n<p>≤400 mW(26 dBm) (adjustable)</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>IP Rating</p>\r\n</td>\r\n<td>\r\n<p>IP54</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Lightning Protection</p>\r\n</td>\r\n<td>\r\n<p>4 KV</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Installation</p>\r\n</td>\r\n<td>\r\n<p>Wall-mounted/ Pole-mounted</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Weight</p>\r\n</td>\r\n<td>\r\n<p>0.5 kg</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Dimensions ( D x W x H )</p>\r\n</td>\r\n<td>\r\n<p>230 mm × 132 mm × 48 mm</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Software Features</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>802.1Q VLAN</p>\r\n</td>\r\n<td>Support</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Multi-VLAN Transparent Transmission</p>\r\n</td>\r\n<td>Support</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>ARP</p>\r\n</td>\r\n<td>\r\n<p>256</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Max. Concurrent Connections</p>\r\n</td>\r\n<td>\r\n<p>8000</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Ping</p>\r\n</td>\r\n<td>Support</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Traceroute</p>\r\n</td>\r\n<td>Support</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Management IP</p>\r\n</td>\r\n<td>\r\n<p>192.168.120.1</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Wireless</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>SSID/SSID Hiding</p>\r\n</td>\r\n<td> </td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Password</p>\r\n</td>\r\n<td>\r\n<p>Open / WPA-PSK / WPA2-PSK / WPA/WPA2-PSK</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>RSSI</p>\r\n</td>\r\n<td>\r\n<p>-58 dBm@1KM<br>-66 dBm@3KM<br>-70 dBm@5KM</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Performance</p>\r\n</td>\r\n<td>\r\n<p>230 Mbps@1KM(HT40)<br>200 Mbps@3KM(HT40)<br>150 Mbps@5KM(HT40)</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>One-Click Optimization</p>\r\n</td>\r\n<td>Support</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>DFS</p>\r\n</td>\r\n<td>Support</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Management</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Zero Provisioning on Cloud</p>\r\n</td>\r\n<td>\r\n<p>QR-Code / Serial Number</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>CWMP(TR069) Support</p>\r\n</td>\r\n<td>Support</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Point-to-Point</p>\r\n</td>\r\n<td>Support</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Point-to-Multipoint</p>\r\n</td>\r\n<td>\r\n<p>Recommended 3</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>AP/CPE Switchover</p>\r\n</td>\r\n<td>Support</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Interface Configuration</p>\r\n</td>\r\n<td>Support</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Maintanance</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Alarm</p>\r\n</td>\r\n<td>Support</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Diagnostics</p>\r\n</td>\r\n<td>Support</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Reboot</p>\r\n</td>\r\n<td>Support</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Cloud Features</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Remote Access</p>\r\n</td>\r\n<td>Support</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Remote Reboot</p>\r\n</td>\r\n<td>Support</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Statistics Monitoring</p>\r\n</td>\r\n<td>Support</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Working mode</p>\r\n</td>\r\n<td>\r\n<p>Normal / High performance / Anti-interference</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Remote SSH</p>\r\n</td>\r\n<td>Support</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Remote EWeb</p>\r\n</td>\r\n<td>Support</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Camera Reference</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>3Mbps Video Bit Rate</p>\r\n</td>\r\n<td>\r\n<p>50 Units/1KM<br>45 Units/3KM<br>20 Units/5KM</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>4-5Mbps Video Bit Rate</p>\r\n</td>\r\n<td>\r\n<p>30 Units/1KM<br>25 Units/3KM<br>12 Units/5KM</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>6Mbps Video Bit Rate</p>\r\n</td>\r\n<td>\r\n<p>20 Units/1KM<br>13 Units/3KM<br>8 Units/5KM</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Physical Features</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>LED indicator</p>\r\n</td>\r\n<td>\r\n<p>LEDs indicate the bridging quality:<br>LED off: No bridging<br>One LED blinking: &lt;-75dBm<br>One LED on: -75dBm&lt; RSSI &lt;-73dBm<br>One LED on and one LED blinking: -73dBm&lt; RSSI &lt;-71dBm<br>Two LEDs on: -71dBm&lt; RSSI &lt;-68dBm<br>Two LEDs on and one LED blinking: -68dBm&lt; RSSI &lt;-64dBm<br>Three LEDs on: &gt;-64dBm</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Hardware Button</p>\r\n</td>\r\n<td>\r\n<p>1 reset button</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Power Supply</p>\r\n</td>\r\n<td>\r\n<p>12 VDC power supply or 24 VDC Passive PoE</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Power Consumption</p>\r\n</td>\r\n<td>\r\n<p>9W</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Environment</p>\r\n</td>\r\n<td>\r\n<p>Operating temperature: -30°C to 65°C (-22°F ~ 149°F)<br>Storage temperature: -40°C to 85°C (-40°F ~ 185°F)<br>Operating humidity: 5% to 95% (noncondensing)<br>Storage humidity: 5% to 95% (noncondensing)</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p> </p>', NULL, NULL, NULL, 1, 0, 0, '0', 'popular', 0, 0, NULL, 63, NULL, 'RG-EST350 V2', NULL, NULL, NULL, '2025-12-27 11:31:00', '2025-12-27 11:31:00', NULL),
(294, 'Ruijie Reyee RG-EG105GW(T) Wi-Fi 5 1267Mbps Wireless All-in-One Business Router', 'ruijie-reyee-rg-eg105gwt-wi-fi-5-1267mbps-wireless-all-in-one-business-router', 15500, 2, NULL, 15500.00, NULL, NULL, '0', '<table class=\"table table-bordered\">\r\n<tbody>\r\n<tr>\r\n<td><strong>Wi-Fi Protocols</strong></td>\r\n<td>802.11ac Wave2, 1267Mbps</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Antenna</strong></td>\r\n<td>Built-in Omni-directional</td>\r\n</tr>\r\n<tr>\r\n<td><strong>CPU</strong></td>\r\n<td>Dual Cores, 880 MHz</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Max. Wi-Fi Speed</strong></td>\r\n<td>1267Mbps</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Dimensions (W x D x H)</strong></td>\r\n<td>120 mm × 120 mm × 28 mm </td>\r\n</tr>\r\n<tr>\r\n<td><strong>MIMO</strong></td>\r\n<td>2x2 @2.4 GHz, 2x2 @5 GHz</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Interface</strong></td>\r\n<td>5 x 10/100/1000 Base-T</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Recommended Bandwidth</strong></td>\r\n<td>600Mbps</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Max / Recommended Users</strong></td>\r\n<td>150/80</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Recommended Total Clients (LAN + WIFI)</strong></td>\r\n<td>150</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Power Supply</strong></td>\r\n<td>DC 12V/1.5A</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Warranty</strong></td>\r\n<td>1 Year</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p> </p>', NULL, NULL, NULL, 1, 0, 0, '0', 'popular', 0, 0, NULL, 63, NULL, 'RG-EG105GW(T)', NULL, NULL, NULL, '2025-12-27 11:33:40', '2025-12-27 11:33:40', NULL),
(295, 'Ruijie Reyee RG-EG105G-P-V3 5-Port Gigabit Smart Cloud Managed Router with 4 PoE+, 54W', 'ruijie-reyee-rg-eg105g-p-v3-5-port-gigabit-smart-cloud-managed-router-with-4-poe-54w', 16000, NULL, NULL, 16000.00, NULL, NULL, '0', '<table class=\"table table-bordered\">\r\n<thead>\r\n<tr>\r\n<th><strong>Specification</strong></th>\r\n<th><strong>Details</strong></th>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<td><strong>Network Interface</strong></td>\r\n<td>5 × 10/100/1000 Base-T</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Max. WAN Ports</strong></td>\r\n<td>2 × 10/100/1000 Base-T</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Throughput</strong></td>\r\n<td>600 Mbps (NAT+Flow Audit), 500 Mbps (Full Load), 1000 Mbps (Turbo Mode)</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Recommended Clients</strong></td>\r\n<td>100 concurrent clients</td>\r\n</tr>\r\n<tr>\r\n<td><strong>PoE Out</strong></td>\r\n<td>802.3af/at on LAN 0-3</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Operating Temperature</strong></td>\r\n<td>0°C ~ 40°C</td>\r\n</tr>\r\n<tr>\r\n<td><strong>CPU</strong></td>\r\n<td>2 Cores, 880 MHz</td>\r\n</tr>\r\n<tr>\r\n<td><strong>RAM</strong></td>\r\n<td>128 MB</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Flash Memory</strong></td>\r\n<td>32 MB</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Power Consumption</strong></td>\r\n<td>&lt;60 W (With PoE Full Load)</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Dimensions (W×D×H)</strong></td>\r\n<td>206.5 mm × 108.5 mm × 28 mm</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Weight</strong></td>\r\n<td>0.406 kg (excluding package)</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Installation</strong></td>\r\n<td>Desk-mounted, Wall-mounted</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Certification</strong></td>\r\n<td>CE, RoHS</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p> </p>', '<p>5× 10/100/1000 Base<br>Supports dual WAN connections<br>Optimized for NAT, flow audit, and security features<br>802.3af/at PoE on LAN 0-3<br>Handles up to 100 active users<br>880 MHz processor<br>128MB RAM &amp; 32MB Flash<br>Supports desk or wall mounting</p>', NULL, NULL, 1, 0, 0, '0', 'popular', 0, 0, NULL, 63, NULL, 'RG-EG105G-P-V3', NULL, NULL, NULL, '2025-12-27 11:36:13', '2025-12-27 11:38:54', NULL),
(296, 'Ruijie Reyee RG-EG209GS Reyee 9-Port Gigabit Cloud Managed SFP Router', 'ruijie-reyee-rg-eg209gs-reyee-9-port-gigabit-cloud-managed-sfp-router', NULL, NULL, NULL, NULL, NULL, NULL, '0', '<table cellspacing=\"0\">\r\n<tbody>\r\n<tr>\r\n<td><strong>Brand</strong></td>\r\n<td>Ruijie Reyee</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Model</strong></td>\r\n<td>RG-EG209GS</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Network Interface</strong></td>\r\n<td>\r\n<p>8 x 10/100/1000 Base-T, 1 × 1GBase-X SFP</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Max. WAN Ports</strong></td>\r\n<td>4 × 10/100/1000 Base-T</td>\r\n</tr>\r\n<tr>\r\n<td><strong>CPU</strong></td>\r\n<td>Dual Cores, 880 MHz</td>\r\n</tr>\r\n<tr>\r\n<td><strong>RAM</strong></td>\r\n<td>256MB DDRIII</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Recommended Bandwidth</strong></td>\r\n<td>600Mbps</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Recommended Concurrent Users</strong></td>\r\n<td>200</td>\r\n</tr>\r\n<tr>\r\n<td><strong>PoE Out</strong></td>\r\n<td>N/A</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Operating Temperature</strong></td>\r\n<td>0°C~40°C</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Dimension</strong></td>\r\n<td>202 mm x 108 mm x 28 mm</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Weight</strong></td>\r\n<td>0.5 kg</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Power Supply</strong></td>\r\n<td>100～240V AC, 50/60Hz</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Power Consumption</strong></td>\r\n<td>&lt;18W</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p> </p>', '<ul>\r\n<li>LAN/WAN switchable SFP port for adding optical fiber connectivity.</li>\r\n<li>User-friendly configuration and ease of use.</li>\r\n<li>Intelligent load balancing and link redundancy between multiple WAN ports.</li>\r\n<li>Efficient bandwidth management based on applications and users.</li>\r\n<li>Customized portal page, what you see is what you get (WYSIWYG).</li>\r\n</ul>', NULL, NULL, 1, 1, 0, '0', 'popular', 0, 0, NULL, 63, NULL, 'RG-EG209GS', NULL, NULL, NULL, '2025-12-27 11:42:26', '2025-12-27 11:42:26', NULL),
(297, 'Ruijie Reyee RG-POE-AF15, 1-Port PoE Injector (1000Base-T, 52 V, 15.6 W)', 'ruijie-reyee-rg-poe-af15-1-port-poe-injector-1000base-t-52-v-156-w', 2000, NULL, NULL, 2000.00, NULL, NULL, '0', '<table cellspacing=\"0\">\r\n<tbody>\r\n<tr>\r\n<td><strong>Brand</strong></td>\r\n<td>Ruijie Reyee</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Model</strong></td>\r\n<td>RG-POE-AF15</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Output Voltage</strong></td>\r\n<td>52 V DC @ 0.3 A</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Port</strong></td>\r\n<td>1 x 1000Base-T port</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Rated Voltage</strong></td>\r\n<td>100-240 V AC @ 50/60 Hz</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Input Current</strong></td>\r\n<td>Max. 0.5 A</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Inrush Current</strong></td>\r\n<td>&lt; 80 A @ 230 V AC</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Operating Temperature</strong></td>\r\n<td>-10°C to +45°C (14°F to 113°F)</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Storage Temperature</strong></td>\r\n<td>-40°C to +70°C (-40°F to 158°F)</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Dimensions</strong></td>\r\n<td>92 x 46. 5 x 29.5 ± 1 mm (3.62 x 1.83 x 1.16 ± 0.04 in.)</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Weight</strong></td>\r\n<td>95 ± 5g (3.35 ± 0.18 oz)</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Surge Protection</strong></td>\r\n<td>N/A</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Max. Discharge Current</strong></td>\r\n<td>2000 A (8/20 µs)</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Warranty</strong></td>\r\n<td>2 years</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p> </p>', NULL, NULL, NULL, 1, 0, 0, '0', 'popular', 0, 0, NULL, 63, NULL, 'RG-POE-AF15', NULL, NULL, NULL, '2025-12-27 11:44:48', '2025-12-27 11:44:59', NULL),
(298, 'Ruijie Reyee RG-RAP6262(G) Wi-Fi 6 AX1800 Outdoor Omni-directional Access Point', 'ruijie-reyee-rg-rap6262g-wi-fi-6-ax1800-outdoor-omni-directional-access-point', 34900, 0, NULL, 34900.00, NULL, NULL, '0', '<table cellspacing=\"0\">\r\n<tbody>\r\n<tr>\r\n<td colspan=\"2\"><strong>Basic Information</strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>Brand</strong></td>\r\n<td>Ruiji Reyee</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Model</strong></td>\r\n<td>RG-RAP6262(G)</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Wireless Protocol</strong></td>\r\n<td>Wi-Fi 6, 1775Mbps</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Antennas</strong></td>\r\n<td>Built-in Omni-directional</td>\r\n</tr>\r\n<tr>\r\n<td><strong>CPU</strong></td>\r\n<td>n/a</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Throughput</strong></td>\r\n<td>1775Mbps</td>\r\n</tr>\r\n<tr>\r\n<td><strong>MIMO</strong></td>\r\n<td>2x2 @2.4 GHz, 2x2 @5 GHz</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Interface</strong></td>\r\n<td>n/a</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Max. WAN Ports</strong></td>\r\n<td>2 x 10/100/1000 Base-T</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Recommended Users</strong></td>\r\n<td>n/a</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Power Supply</strong></td>\r\n<td>802.3at PoE</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Warranty</strong></td>\r\n<td>2 Years</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p> </p>', '<ul>\r\n<li>\'UFO\' design, a perfect blend of Wi-Fi 6 technology and artwork</li>\r\n<li>IP68 protection, rock-solid in harsh environments</li>\r\n<li>Omni-directional coverage with long range</li>\r\n<li>Easily add extra outdoor Wi-Fi with Reyee Mesh</li>\r\n<li>Rack-separated mounting design, easily installation on high</li>\r\n</ul>', NULL, NULL, 1, 0, 0, '0', 'popular', 0, 0, NULL, 63, NULL, 'RG-RAP6262(G)', NULL, NULL, NULL, '2025-12-27 11:47:48', '2025-12-27 11:47:48', NULL),
(299, 'Ruijie Reyee RG-EW1200R 1200M Dual-Band Mesh Wi-Fi Extender', 'ruijie-reyee-rg-ew1200r-1200m-dual-band-mesh-wi-fi-extender', 6270, NULL, NULL, 6270.00, NULL, NULL, '0', '<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"left\">\r\n<tbody>\r\n<tr>\r\n<td>Brand</td>\r\n<td>Ruiji Reyee</td>\r\n</tr>\r\n<tr>\r\n<td>Model</td>\r\n<td>Rg-Ew1200R</td>\r\n</tr>\r\n<tr>\r\n<td>Wi-Fi Standards</td>\r\n<td>Wi-Fi 5 (802.11ac)</td>\r\n</tr>\r\n<tr>\r\n<td>Antennas</td>\r\n<td>2</td>\r\n</tr>\r\n<tr>\r\n<td>Max. Wi-Fi Speed</td>\r\n<td>2.4 GHz: 300 Mbps<br>5 GHz: 867 Mbps</td>\r\n</tr>\r\n<tr>\r\n<td>Antenna Gain</td>\r\n<td>2.4 GHz: 4 dBi<br>5 GHz: 4 dBi</td>\r\n</tr>\r\n<tr>\r\n<td>MIMO</td>\r\n<td>2.4 GHz: 2×2<br>5 GHz: 2×2</td>\r\n</tr>\r\n<tr>\r\n<td>Interface</td>\r\n<td>1×10/100 Base-T WAN/LAN</td>\r\n</tr>\r\n<tr>\r\n<td>Advanced Technology</td>\r\n<td>MU-MIMO</td>\r\n</tr>\r\n<tr>\r\n<td>Recommended Users</td>\r\n<td>24</td>\r\n</tr>\r\n<tr>\r\n<td>Power Supply</td>\r\n<td>100-240V~50/60Hz 0.5A</td>\r\n</tr>\r\n<tr>\r\n<td>Warranty</td>\r\n<td>2 Years</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p> </p>', '<div class=\"woocommerce-product-details__short-description\">\r\n<ul>\r\n<li>Life-time free cloud management supported</li>\r\n<li>Cover your whole home network with one-click</li>\r\n<li>Built-in signal amplifiers，unbreakable Wi-Fi signal throughout your home</li>\r\n<li>Three-bar signal indicator guides you to find the best spot</li>\r\n<li>Reyee Mesh brings you unlimited signal connection everywhere you go</li>\r\n<li>More wireless mode options, more surprise</li>\r\n<li>Take control of your home network at your fingertips</li>\r\n</ul>\r\n<p> </p>\r\n</div>', NULL, NULL, 1, 0, 0, '0', 'popular', 0, 0, NULL, 63, NULL, 'RG-EW1200R', NULL, NULL, NULL, '2025-12-27 11:51:45', '2025-12-27 11:51:45', NULL),
(300, 'Dell E5 90W (UK) Type -C AC Adapter - 492-BCGS', 'dell-e5-90w-uk-type-c-ac-adapter-492-bcgs', 8200, 2, NULL, 8200.00, NULL, NULL, '0', '<h1><strong>Dell E5 90W (UK)  Type -C AC Adapter - 492-BCGS.</strong></h1>\r\n<p>The 90W AC Adapter from Dell™ is specially designed to meet the power needs of your Dell™ laptop. Packed with of 90W power, this adapter enables you to simultaneously operate your system and charge its battery from electrical power outlets.</p>\r\n<ul>\r\n<li>Offers 90W enough to power and charge your laptop</li>\r\n<li>Incorporates a rubber strap for easy cable management and a LED light ring on the DC connector</li>\r\n</ul>\r\n<h2><strong>Compatibility</strong></h2>\r\n<ul>\r\n<li>\r\n<p>Genuine Dell-branded parts undergo rigorous testing by qualified engineers to ensure compatibility and reliability in your Dell system.</p>\r\n</li>\r\n<li>Our sustaining qualification process allows for testing and certification of the newest technology on your Dell system.</li>\r\n</ul>\r\n<h2><strong>Quality</strong></h2>\r\n<ul>\r\n<li>Dell uses only OEM grade quality components.</li>\r\n</ul>\r\n<h2><strong>Warranty</strong></h2>\r\n<ul>\r\n<li>Our Limited One Year Warranty guarantees that if our Genuine Dell-branded parts should fail, we will replace them.</li>\r\n<li>Genuine Dell-branded parts mean that you will not need to worry about voiding your system’s hardware warranty.</li>\r\n<li>Non-Dell parts are not covered and may void your system warranty.</li>\r\n</ul>\r\n<h2><strong>Compatible Devices</strong></h2>\r\n<ul>\r\n<li>Inspiron 14 7000 (7420)</li>\r\n<li>Inspiron 16 7000 (7620) 2-in-1</li>\r\n<li>Latitude 10 Rugged 7030 Extreme</li>\r\n<li>Latitude 12 Rugged 7230 Extreme</li>\r\n<li>Latitude 13 Rugged 7330 Extreme</li>\r\n<li>Latitude 14 Rugged 5430</li>\r\n<li>Latitude 3400</li>\r\n<li>Latitude 3500</li>\r\n<li>Latitude 5289 2-in-1</li>\r\n<li>Latitude 5300</li>\r\n<li>Latitude 5300 2-In-1</li>\r\n<li>Latitude 5300 2-in-1 Chromebook</li>\r\n<li>Latitude 5310</li>\r\n<li>Latitude 5310 2-in-1</li>\r\n<li>Latitude 5320 2-in-1</li>\r\n<li>Latitude 5330</li>\r\n<li>Latitude 5400</li>\r\n<li>Latitude 5400 Chromebook</li>\r\n<li>Latitude 5401</li>\r\n<li>Latitude 5410</li>\r\n<li>Latitude 5411</li>\r\n<li>Latitude 5420</li>\r\n<li>Latitude 5421</li>\r\n<li>Latitude 5430</li>\r\n<li>Latitude 5431</li>\r\n<li>Latitude 5500</li>\r\n<li>Latitude 5501</li>\r\n<li>Latitude 5510</li>\r\n<li>Latitude 5511</li>\r\n<li>Latitude 5520</li>\r\n<li>Latitude 5521</li>\r\n<li>Latitude 5530</li>\r\n<li>Latitude 5531</li>\r\n<li>Latitude 7300</li>\r\n<li>Latitude 7310</li>\r\n<li>Latitude 7320 2-in-1</li>\r\n<li>Latitude 7330</li>\r\n<li>Latitude 7389 2-in-1</li>\r\n<li>Latitude 7390 2-in-1</li>\r\n<li>Latitude 7400</li>\r\n<li>Latitude 7400 2-In-1</li>\r\n<li>Latitude 7410 2-in-1</li>\r\n<li>Latitude 7420 2-in-1</li>\r\n<li>Latitude 7430</li>\r\n<li>Latitude 7520</li>\r\n<li>Latitude 7530</li>\r\n<li>Latitude 9330</li>\r\n<li>Latitude 9410 2-in-1</li>\r\n<li>Latitude 9420 2-in-1</li>\r\n<li>Latitude 9430</li>\r\n<li>Latitude 9510</li>\r\n<li>Latitude 9520 2-in-1</li>\r\n<li>Latitude Chromebook 14 7410 2-in-1</li>\r\n<li>Precision 3470</li>\r\n<li>Precision 3540</li>\r\n<li>Precision 3541</li>\r\n<li>Precision 3550</li>\r\n<li>Precision 3560</li>\r\n<li>Precision 3561</li>\r\n<li>Precision 3570</li>\r\n<li>Precision 3571</li>\r\n<li>Precision 5470</li>\r\n<li>Precision 5550</li>\r\n<li>Precision 5560</li>\r\n<li>Precision 5570</li>\r\n<li>Precision 5750</li>\r\n<li>Precision 5760</li>\r\n<li>Precision 5770</li>\r\n<li>XPS 15 (9500)</li>\r\n<li>XPS 15 (9510)</li>\r\n<li>XPS 15 (9520)</li>\r\n<li>XPS 17 (9700)</li>\r\n<li>XPS 17 (9710)</li>\r\n</ul>', NULL, NULL, NULL, 1, 1, 0, '0', 'popular', 0, 0, NULL, 1, NULL, 'Dell E5 90W', NULL, NULL, NULL, '2025-12-27 11:55:01', '2025-12-27 11:55:01', NULL),
(301, 'Logitech K250 Compact Bluetooth Wireless Keyboard', 'logitech-k250-compact-bluetooth-wireless-keyboard', 3500, 2, NULL, 3500.00, NULL, NULL, '0', '<table cellspacing=\"0\">\r\n<tbody>\r\n<tr>\r\n<td><strong>Technical Specifications</strong></td>\r\n</tr>\r\n<tr>\r\n<td> </td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p><strong>General Specifications</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td> </td>\r\n</tr>\r\n<tr>\r\n<td><strong>Indicator Lights: Connectivity LED</strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>Special Keys: On/Off power buttons</strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>Additional Features: Tilt legs (for 7 degree typing angle)</strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>Layout: Compact layout with number pad</strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>Multi OS printed layout: Yes</strong></td>\r\n</tr>\r\n<tr>\r\n<td> </td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p><strong>Battery &amp; Charging</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td> </td>\r\n</tr>\r\n<tr>\r\n<td><strong>Battery type: Alkaline battery</strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>Battery life: 12 months</strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>Number of Batteries: 2xAAA (included)</strong></td>\r\n</tr>\r\n<tr>\r\n<td> </td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p><strong>Connectivity</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td> </td>\r\n</tr>\r\n<tr>\r\n<td><strong>Connection Type: Long press On/Off power buttons for pairing</strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>Wireless technology: Bluetooth® Low Energy Technology</strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>Wireless range: 10m</strong></td>\r\n</tr>\r\n<tr>\r\n<td> </td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p><strong>System Requirements</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td> </td>\r\n</tr>\r\n<tr>\r\n<td><strong>Requirements: Bluetooth® Low Energy wireless technology</strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>Compatibility: Windows 10, 11 or later; macOS 12 or later; ChromeOS;</strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>                         Linux; iPadOS 15 or later; iOS 15 or later; Android 12 or later</strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>Certified for: This product has been certified to meet Google\'s compatibility standards. </strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>                       Chromebook and the Works With Chromebook badge are trademarks of Google LLC.</strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>Warranty: 1 Year</strong></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p> </p>', '<h1><strong>Logitech K250 Compact Bluetooth Wireless Keyboard </strong></h1>\r\n<h2><strong>Connect in seconds</strong></h2>\r\n<p>You’ll have a frustration-free setup with built-in Bluetooth® wireless technology. Pair K250 effortlessly without the need for a dongle so you can free up a USB port for other devices.</p>\r\n<p><img src=\"https://resource.logitech.com/w_776,h_437,ar_16:9,c_fill,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/logitech/en/products/keyboards/k250/delorean-assets/k-250-keyboard-graphite-key-feature-2.jpg\" alt=\"\"></p>\r\n<h2><strong>Durable, reliable performance</strong></h2>\r\n<p>Spill-resistant*, robust, and with a 12-month battery life**, K250 is designed to withstand consistent daily use. That means more focus and peace of mind for you. Made by Logitech, a brand known for quality since 1981. (*Tested under limited conditions (maximum of 60 ml liquid spillage). Do not immerse the keyboard in liquid. , **Battery life varies with use conditions.)</p>\r\n<p><img src=\"https://resource.logitech.com/w_776,h_437,ar_16:9,c_fill,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/logitech/en/products/keyboards/k250/delorean-assets/hands-typing-on-k-250-keyboard-graphite-key-feature-3.jpg\" alt=\"\"></p>\r\n<h3><strong>Optimal typing comfort</strong></h3>\r\n<p>Enjoy deep-profile keys with fast, responsive action. The K250 provides a familiar and consistent feel, great for accurate keystrokes so you stay focused and comfortable.</p>\r\n<p><img src=\"https://resource.logitech.com/w_776,h_437,ar_16:9,c_fill,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/logitech/en/products/keyboards/k250/k250-keyboard-2-column-blade-compact-yet-complete-graphite-new.png\" alt=\"\"></p>\r\n<h3><strong>Compact yet complete</strong></h3>\r\n<p>Space-saving design includes a numpad and all essential keys. Ideal for tight spaces, it offers efficiency without sacrificing performance or convenience.</p>\r\n<p><img src=\"https://resource.logitech.com/w_776,h_437,ar_16:9,c_fill,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/logitech/en/products/keyboards/k250/delorean-assets/k-250-keyboard-graphite-additional-feature-2.jpg\" alt=\"\"></p>\r\n<h3><strong>Made to last with recycled plastic</strong></h3>\r\n<p>K250 is built with plastic parts using a minimum of 64% recycled plastic* in addition to uncompromising quality. At Logitech, we design for sustainability and durability. (*Keyboard plastic content: minimum 64% post-consumer recycled plastic. Excludes plastic in printed wiring assembly and packaging.)</p>\r\n<p><strong>Dimensions</strong></p>\r\n<ul>\r\n<li>\r\n<p><strong>Keyboard</strong></p>\r\n<ul>\r\n<li>Height: 5.39 in (136.9 mm)</li>\r\n<li>Width: 14.56 in (369.9 mm)</li>\r\n<li>Depth: 0.9 in (22.8 mm)</li>\r\n<li>Weight: 13.4 oz (380 g)</li>\r\n</ul>\r\n</li>\r\n</ul>\r\n<p> </p>', NULL, NULL, 1, 0, 0, '0', 'popular', 0, 0, NULL, 17, NULL, 'Logitech K250', NULL, NULL, NULL, '2025-12-27 11:59:13', '2025-12-27 11:59:13', NULL);
INSERT INTO `products` (`id`, `product_name`, `slug`, `price`, `stock`, `weight`, `discount_price`, `discount_percent`, `wholesale_price`, `views`, `short_description`, `long_description`, `size_variation`, `video`, `status`, `latest`, `hot`, `is_featured`, `is_popular`, `on_sale`, `is_special`, `sku`, `brand_id`, `offer_id`, `model_name`, `component_type`, `audio`, `deleted_at`, `created_at`, `updated_at`, `tag_id`) VALUES
(302, 'Asus ROG Strix G18 WQXGA | Intel Core i9 - 14900HX | 32GB | 2TB SSD | RTX™ 5070 8GB | G815JPR-S9047W', 'asus-rog-strix-g18-wqxga-intel-core-i9-14900hx-32gb-2tb-ssd-rtx-5070-8gb-g815jpr-s9047w', 388000, 1, NULL, 388000.00, NULL, NULL, '0', '<h1><strong>POWER UP</strong></h1>\r\n<p>Game with confidence thanks to Windows 11 Pro and up to Intel® Core™ Ultra 9 processor 275HX. Backed up by the serious gaming muscle of up to NVIDIA® GeForce RTX™ 5080 Laptop GPU and up to 32GB of DDR5-5600 RAM, the 2025 Strix G18 has the perfect amount of power to keep you gaming at peak performance. With additional features like NVIDIA Max-Q technologies, including Advanced Optimus, NVIDIA DLSS 4 with Multi Frame Generation, and a 2TB PCIe Gen 4 SSD, the Strix G18 is truly a force to be reckoned with.</p>\r\n<h2><strong>ASUS ROG Strix G18 (</strong>G815JPR-S9047W<strong>) – Core i9-14900HX | RTX 5070 8GB | 32GB | 2TB SSD | 18″ WQXGA 240Hz</strong></h2>\r\n<p>The ROG Strix G18 is built for players who want smooth performance, fast visuals, and powerful multitasking. It brings together a strong 14th Gen Intel processor, next-gen RTX graphics, and a stunning 2.5K high-refresh display — all wrapped in a stylish ROG design.</p>\r\n<h2><strong>Performance That Makes Games Fly</strong></h2>\r\n<p>Intel Core i9-14900HX<br>This 24-core, 32-thread processor handles heavy gaming, streaming, editing, and everyday work without slowing down. High boost clocks make gameplay snappy and responsive.</p>\r\n<h2><strong>Next-Gen Graphics Power</strong></h2>\r\n<p>NVIDIA GeForce RTX 5070 8GB GDDR7<br>Powered by Ada Lovelace architecture, the RTX 5070 brings smoother frame rates, DLSS support, ray tracing, and solid performance for modern titles. Great for eSports and high-quality AAA gaming.</p>\r\n<h2><strong>Stunning 18″ WQXGA Display</strong></h2>\r\n<ul>\r\n<li>18\" WQXGA (2560 × 1600) resolution</li>\r\n<li>240Hz refresh rate for ultra-smooth gameplay</li>\r\n<li>100% DCI-P3 color for accurate, vibrant visuals</li>\r\n<li>G-SYNC and Dolby Vision support</li>\r\n<li>This screen is fast, bright, and sharp — perfect for gaming and content creation.</li>\r\n</ul>\r\n<h2><strong>High-Speed DDR5 Memory</strong></h2>\r\n<p>32GB DDR5 5600MHz RAM<br>Fast memory for smooth multitasking. You can keep games, streams, and apps open without lag.<br>(Upgradable up to 64GB via two SO-DIMM slots.)</p>\r\n<h2><strong>Fast and Spacious Storage</strong></h2>\r\n<p>2TB PCIe 4.0 NVMe SSD<br>Boots in seconds and loads games quickly. Plenty of room for large titles, apps, and files. Additional M.2 slot available for future expansion.</p>\r\n<h2><strong>ROG Intelligent Cooling</strong></h2>\r\n<p>The Strix G18 uses advanced cooling with upgraded fans, heat pipes, and intelligent controls. This keeps the system stable even during long gaming sessions.</p>\r\n<h2><strong>Premium RGB Keyboard</strong></h2>\r\n<ul>\r\n<li>Per-key RGB lighting</li>\r\n<li>Precision keys with fast response</li>\r\n<li>Dedicated Copilot hotkey</li>\r\n<li>Lighting syncs with other ROG Aura devices for a full RGB setup.</li>\r\n</ul>\r\n<h2><strong>Immersive Audio</strong></h2>\r\n<ul>\r\n<li>Dolby Atmos</li>\r\n<li>Smart Amp speakers</li>\r\n<li>AI noise-canceling microphone</li>\r\n<li>Crisp, clear audio for gaming, calls, and streaming.</li>\r\n</ul>\r\n<h2><strong>Connectivity Ready for Everything</strong></h2>\r\n<ul>\r\n<li>1× Thunderbolt 4</li>\r\n<li>1× USB-C with DisplayPort &amp; Power Delivery</li>\r\n<li>3× USB-A 10Gbps</li>\r\n<li>HDMI 2.1</li>\r\n<li>3.5mm audio jack</li>\r\n<li>RJ45 LAN port</li>\r\n<li>Wi-Fi 7 + Bluetooth 5.4</li>\r\n</ul>\r\n<p><strong>You get every port you need for accessories, monitors, and fast internet.</strong></p>\r\n<h2><strong>Built for Gamers on the Move</strong></h2>\r\n<ul>\r\n<li>Weight: approx. 2.65 kg</li>\r\n<li>Durable ROG design</li>\r\n<li>Often bundled with ROG backpack and gaming mouse (varies by region)</li>\r\n</ul>\r\n<h2><strong>Battery &amp; Power</strong></h2>\r\n<ul>\r\n<li>90Wh long-lasting battery</li>\r\n<li>280W AC adapter for full performance when plugged in</li>\r\n</ul>', '<table cellspacing=\"0\">\r\n<tbody>\r\n<tr>\r\n<td rowspan=\"7\">Processor</td>\r\n<td><strong>14th Gen Intel Core i9 14900HX Processor</strong></td>\r\n</tr>\r\n<tr>\r\n<td> </td>\r\n</tr>\r\n<tr>\r\n<td><strong>Cores: 24</strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>Threads: 32</strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>Base Frequency: 2.2GHz</strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>Max Frequency: 5.8GHz</strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>Cache: 36MB</strong></td>\r\n</tr>\r\n<tr>\r\n<td>Processor Family</td>\r\n<td>14th Gen Intel Core i9 Processor</td>\r\n</tr>\r\n<tr>\r\n<td>Artificial Intelligence</td>\r\n<td>Intel AI Boost NPU up to 13TOPS</td>\r\n</tr>\r\n<tr>\r\n<td>Operating System</td>\r\n<td>Windows 11 Home</td>\r\n</tr>\r\n<tr>\r\n<td rowspan=\"8\">Graphics</td>\r\n<td><strong>NVIDIA GeForce RTX 5070 Laptop GPU</strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>Type: Dedicated</strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>Memory: 8GB GDDR7 VRAM</strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>Boost Clock: Up to 1610MHz</strong></td>\r\n</tr>\r\n<tr>\r\n<td> </td>\r\n</tr>\r\n<tr>\r\n<td> </td>\r\n</tr>\r\n<tr>\r\n<td><strong>TGP: Up to 115W</strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>Key Features: NVIDIA Blackwell Architecture, DLSS 4 with Multi Frame Generation, Full Ray Tracing with Neural Rendering, NVIDIA Reflex 2 with Frame Warp etc.</strong></td>\r\n</tr>\r\n<tr>\r\n<td>Memory</td>\r\n<td>32GB DDR5-5600 SO-DIMM (up to 64GB)</td>\r\n</tr>\r\n<tr>\r\n<td>Storage</td>\r\n<td>2TB PCIe 4.0 NVMe M.2 SSD</td>\r\n</tr>\r\n<tr>\r\n<td rowspan=\"3\">Expansion Slots (Including Used)</td>\r\n<td>2 x DDR5 SO-DIMM slots</td>\r\n</tr>\r\n<tr>\r\n<td> </td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>2 x M.2 PCIe</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td rowspan=\"11\">Display</td>\r\n<td><strong>18\" 2.5K (WQXGA, 2560 x 1600) Display</strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>Touch: None</strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>Size: 18\"</strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>Type: IPS</strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>Resolution: 2.5K (WQXGA, 2560 x 1600)</strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>Brightness: 500 nits (peak brightness)</strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>Aspect Ratio: 16:10</strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>Color Gamut: 100% DCI-P3</strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>Refresh Rate: 240Hz</strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>Response Time: 3ms </strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>Key Features: ROG Nebula Display, NVIDIA G-Sync, Dolby Vision HDR, TÜV Rheinland Certification</strong></td>\r\n</tr>\r\n<tr>\r\n<td>Camera</td>\r\n<td>1080P FHD IR Camera for Windows Hello</td>\r\n</tr>\r\n<tr>\r\n<td>Microphone</td>\r\n<td>Built-in array microphone</td>\r\n</tr>\r\n<tr>\r\n<td rowspan=\"6\">Audio</td>\r\n<td>\r\n<p>Smart Amp Technology</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Dolby Atmos</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>AI noise-canceling technology</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Hi-Res certification (for headphones)</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Built-in array microphones</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>2-speaker system with Smart Amplifier Technology</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td rowspan=\"6\">I/O Ports</td>\r\n<td>\r\n<p><strong>1 x 3.5mm Combo Audio Jack</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p><strong>1 x HDMI 2.1 FRL</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p><strong>3 x USB 3.2 Gen 2 Type-A (Data speed up to 10Gbps)</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p><strong>1 x USB 3.2 Gen 2 Type-C with support for DisplayPort/power delivery (Data speed up to 10Gbps)</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p><strong>1 x RJ45 LAN port</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p><strong>1 x Thunderbolt 4 with support for DisplayPort/power delivery/G-SYNC (Data speed up to 40Gbps)</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td rowspan=\"3\">Keyboard and Touchpad</td>\r\n<td>\r\n<p>Backlit Chiclet Keyboard Per-Key RGB</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Touchpad</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>With Copilot key</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>Wireless Connectivity</td>\r\n<td>\r\n<p>Wi-Fi 7 (802.11be) (Triple band) 2*2+Bluetooth 5.4 Wireless Card</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>Aura Sync</td>\r\n<td>\r\n<p>Yes</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>Device Lighting</td>\r\n<td>\r\n<p>Aura Sync Light Bar</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>Case Material</td>\r\n<td>\r\n<p>Plastic and Aluminum Chassis</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>Case Color</td>\r\n<td>Eclipse Gray</td>\r\n</tr>\r\n<tr>\r\n<td>Weight</td>\r\n<td>3.20 Kg (7.05 lbs)</td>\r\n</tr>\r\n<tr>\r\n<td>Dimension</td>\r\n<td>15.71\" x 11.77\" x 0.93\" ~ 1.26\"</td>\r\n</tr>\r\n<tr>\r\n<td>Battery</td>\r\n<td>\r\n<p>90WHrs, 4S1P, 4-cell Li-ion</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td rowspan=\"2\">Power Supply</td>\r\n<td>\r\n<p>Rectangle Conn, 280W AC Adapter, Output: 20V DC, 14A, 280W, Input: 100-240V AC, 50/60Hz universal</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>TYPE-C, 100W AC Adapter, Output: 20V DC, 5A, 100W, Input: 100~240V AC 50/60Hz universal</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td rowspan=\"2\">Security</td>\r\n<td>\r\n<p>BIOS Administrator Password and User Password Protection</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Trusted Platform Module (Firmware TPM)</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>Included Freebies</td>\r\n<td>\r\n<p>Laptop Bag, Gaming Mouse &amp; Mousepad</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>Warranty</td>\r\n<td><strong>2 Years International Warranty Includes 1 Year Asus Perfect Warranty</strong></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p> </p>', NULL, NULL, 1, 1, 0, '0', 'popular', 0, 0, NULL, NULL, NULL, 'Asus ROG Strix G18 WQXGA', NULL, NULL, NULL, '2025-12-27 12:02:10', '2025-12-27 12:02:10', NULL),
(303, 'Asus Vivobook 16 WUXGA | i7-13620H | 16GB | 512 SSD | Intel Iris Xe | Fingerprint | X1605VA-MB1654W', 'asus-vivobook-16-wuxga-i7-13620h-16gb-512-ssd-intel-iris-xe-fingerprint-x1605va-mb1654w', 115000, 0, NULL, 115000.00, NULL, NULL, '0', '<table cellspacing=\"0\">\r\n<tbody>\r\n<tr>\r\n<td><strong>Brand</strong></td>\r\n<td>Asus</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Series</strong></td>\r\n<td>Vivobook</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Model</strong></td>\r\n<td><strong>X1605VA-MB1654W</strong></td>\r\n</tr>\r\n<tr>\r\n<td colspan=\"2\"><strong>HARDWARE</strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>Processor</strong></td>\r\n<td>Intel® Core™ i7-13620H Processor 2.4 GHz (24MB Cache, up to 4.9 GHz, 10 cores</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Generation /  Series</strong></td>\r\n<td>13th Generation</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Memory</strong></td>\r\n<td>DDR4 16GB</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Max Upgradable Memory</strong></td>\r\n<td>(8GB DDR4 on board + 8GB DDR4 SO-DIMM) expandable upto 24GB using 1x DDR4 SO-DIMM slot</td>\r\n</tr>\r\n<tr>\r\n<td><strong>DIsplay Size</strong></td>\r\n<td>16.0-inch/WUXGA (1920 x 1200) 16:10 aspect ratio</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Display Resolution</strong></td>\r\n<td>WUXGA (1920 x 1200)</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Display Type</strong></td>\r\n<td>IPS-level Panel</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Display Refresh Rate</strong></td>\r\n<td>60Hz </td>\r\n</tr>\r\n<tr>\r\n<td><strong>Touch Screen availability</strong></td>\r\n<td>No</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Storage</strong></td>\r\n<td>512GB M.2 NVMe™ PCIe® 4.0 SSD</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Graphics</strong></td>\r\n<td>Intel Iris Xe</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Battery</strong></td>\r\n<td>42WHrs, 3S1P, 3-cell Li-ion</td>\r\n</tr>\r\n<tr>\r\n<td rowspan=\"7\"><strong>Ports and Connectivity</strong></td>\r\n<td> </td>\r\n</tr>\r\n<tr>\r\n<td>1 x DC-in port</td>\r\n</tr>\r\n<tr>\r\n<td>1 x 3.5mm Combo Audio Jack</td>\r\n</tr>\r\n<tr>\r\n<td>1 x HDMI® 1.4 port</td>\r\n</tr>\r\n<tr>\r\n<td>2 x USB 3.2 Gen 1 Type-A ports (data transfer speed up to 5Gbps)</td>\r\n</tr>\r\n<tr>\r\n<td>1 x USB 3.2 Gen 1 Type-C® port (data transfer speed up to 5Gbps, supports power delivery)</td>\r\n</tr>\r\n<tr>\r\n<td>1 x USB 2.0 Type-A port (data transfer speed up to 480Mbps)</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Finger Print Reader</strong></td>\r\n<td>Yes</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Backlit Keyboard</strong></td>\r\n<td>Backlit Chiclet Keyboard with Num-key</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Dimensions</strong></td>\r\n<td>35.87 x 24.95 x 1.99 ~ 1.99 cm (14.12\" x 9.82\" x 0.78\" ~ 0.78\")</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Weight</strong></td>\r\n<td>1.88 kg</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Adapter Info</strong></td>\r\n<td>ø4.5, 65W AC Adapter, Output: 19V DC, 3.42A, 65W, Input: 100~240V AC 50/60Hz universal</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Color</strong></td>\r\n<td>Cool Silver</td>\r\n</tr>\r\n<tr>\r\n<td colspan=\"2\"><strong>SOFTWARE</strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>Operating System</strong></td>\r\n<td>Windows 11 Home - ASUS recommends Windows 11 Pro for business</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Bundeled Software</strong></td>\r\n<td>No preinstalled OS</td>\r\n</tr>\r\n<tr>\r\n<td colspan=\"2\"><strong>SERVICES</strong></td>\r\n</tr>\r\n<tr>\r\n<td rowspan=\"2\"><strong>Warranty &amp; Insurance</strong></td>\r\n<td><strong>2 Years International Warranty Includes 1 Year Asus Perfect Warranty </strong></td>\r\n</tr>\r\n<tr>\r\n<td><a href=\"http://asus.com/np/microsite/4aguarantee/index.html\">for more information click HERE</a></td>\r\n</tr>\r\n<tr>\r\n<td><strong>Bundeled Accessories</strong></td>\r\n<td>Backpack and Mouse</td>\r\n</tr>\r\n<tr>\r\n<td><strong>EMI Availability</strong></td>\r\n<td>Yes</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p> </p>', NULL, NULL, NULL, 1, 1, 0, '0', 'popular', 0, 0, NULL, NULL, NULL, 'Asus Vivobook 16', NULL, NULL, NULL, '2025-12-27 12:04:46', '2025-12-27 12:04:46', NULL),
(304, 'Apacer 256GB AH25B USB 3.2 Gen 1 Flash Drive', 'apacer-256gb-ah25b-usb-32-gen-1-flash-drive', 3300, 1, NULL, 3300.00, NULL, NULL, '0', '<table>\r\n<tbody>\r\n<tr>\r\n<td>Product</td>\r\n<td>Apacer</td>\r\n</tr>\r\n<tr>\r\n<td>Model</td>\r\n<td>AH25B </td>\r\n</tr>\r\n<tr>\r\n<td>Category</td>\r\n<td>Pendrive</td>\r\n</tr>\r\n<tr>\r\n<td>Storage_Capacity</td>\r\n<td>256GB</td>\r\n</tr>\r\n<tr>\r\n<td>Connector-type</td>\r\n<td>USB 3.2 Gen 1</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p> </p>', '<h1><strong>Apacer 256GB AH25B USB 3.2 Gen 1 Flash Drive</strong></h1>\r\n<p> </p>\r\n<p><img src=\"https://www.apacer.com/upload/media/personal/products/USB/AH25B%20USB%203.2%20Gen%201%20USB/AH25B_feature_01.jpg\" alt=\"\"></p>\r\n<h2><strong>Unique contrast design</strong></h2>\r\n<p>With a unique Contrast Design approach, Apacer\'s design team combines the matte metal shell with a translucent cover to form a dual sight and touch contrast, add more aesthetic gradations with joyfulness when using the products.</p>\r\n<p><img src=\"https://www.apacer.com/upload/media/personal/products/USB/AH25B%20USB%203.2%20Gen%201%20USB/AH25B_feature_02.jpg\" alt=\"\"></p>\r\n<h2><strong>Portable and fashionable</strong></h2>\r\n<p>In addition to ultra-light touch, the smooth matte body is anti-drop and wear proof so that the user doesn’t worry about getting fingerprint marks on it.</p>\r\n<p><img src=\"https://www.apacer.com/upload/media/personal/products/USB/AH25B%20USB%203.2%20Gen%201%20USB/AH25B_feature_03.jpg\" alt=\"\"></p>\r\n<h2><strong>High 16GB capacity</strong></h2>\r\n<p>Available in 16GB, 32GB, 64GB, 128GB, and 256GB. AH25B allows carrying mass data for portable applications and realizing a digital life of unrestricted mobility!</p>\r\n<p><img src=\"https://www.apacer.com/upload/media/personal/products/USB/AH25B%20USB%203.2%20Gen%201%20USB/AH25B_feature_04.jpg\" alt=\"\"></p>\r\n<h2><strong>Dual-color mix and match</strong></h2>\r\n<p>The Sunrise Red AH25B USB 3.2 Gen 1 shows the high contrast of red and black highlights the unique passionate nature of the product. Also, the Deep Valley Black AH25B USB 3.2 Gen 1 reflects the cool and professional image of the user with a mysterious black matte body. The strong distinction manifests the theme of Contrast Design and brings more selectable styles for the user.</p>', NULL, NULL, 1, 0, 0, '0', 'popular', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-12-27 12:10:53', '2025-12-27 12:10:53', NULL),
(305, 'Canon i-SENSYS Printer | LBP2900', 'canon-i-sensys-printer-lbp2900', 28500, 0, NULL, 28500.00, NULL, NULL, '0', '<table>\r\n<tbody>\r\n<tr>\r\n<td>Product</td>\r\n<td>LBP 2900</td>\r\n</tr>\r\n<tr>\r\n<td>Category</td>\r\n<td>Printer</td>\r\n</tr>\r\n<tr>\r\n<td>Brand</td>\r\n<td>Canon</td>\r\n</tr>\r\n<tr>\r\n<td>Color</td>\r\n<td>N/a</td>\r\n</tr>\r\n<tr>\r\n<td>Cost</td>\r\n<td>-</td>\r\n</tr>\r\n<tr>\r\n<td>Interface</td>\r\n<td>USB 2.0 High Speed</td>\r\n</tr>\r\n<tr>\r\n<td>Insurance</td>\r\n<td>-</td>\r\n</tr>\r\n<tr>\r\n<td>Optical Resolution</td>\r\n<td>600 x 600dpi</td>\r\n</tr>\r\n<tr>\r\n<td>Show_countdown</td>\r\n<td>Yes</td>\r\n</tr>\r\n<tr>\r\n<td>Supports Color Printing</td>\r\n<td>N/a</td>\r\n</tr>\r\n<tr>\r\n<td>Warranty</td>\r\n<td>1 Year</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p> </p>', '<h2><strong>Compact, Super-Fast &amp; Powerful</strong></h2>\r\n<p>The <strong>Canon i-SENSYS Printer <a href=\"https://www.canon-europe.com/support/consumer_products/products/printers/laser/i-sensys_lbp2900.html?type=drivers&amp;language=en&amp;os=windows%2010%20(64-bit)\" target=\"_blank\" rel=\"noopener\">LBP2900</a></strong> is one of the smallest and most powerful printers available. This Laser printer has the ability to print a huge number of documents quickly. This printer boasts a space-saving design that allows it to fit into tighter locations.</p>\r\n<h2><strong>12 Black &amp; White Pages Per Minutes</strong></h2>\r\n<p>In the professional laser quality you deserve, print crisp and clear black and white documents, presentations, and more. So, this <a href=\"https://neostore.com.np/product-category/printers-scanners\" target=\"_blank\" rel=\"noopener\">printer</a> combines speed and quality by printing at a rate of 12 pages per minute on A4 paper.</p>\r\n<h2><strong>Quick First Print</strong></h2>\r\n<p>With Canon\'s proprietary On-Demand Fixing Technology, which transfers heat rapidly when engaged, you can get high-quality results quickly and without waiting. Quick Warm-Up time allows the printer to respond rapidly from Standby Mode, allowing you to deliver swiftly while saving energy.</p>\r\n<h2><strong>Ideal For Home &amp; Office Use</strong></h2>\r\n<p>This <strong>Canon i-SENSYS Printer</strong> is perfect for home and small business use on a regular or frequent basis.</p>\r\n<h2><strong>Cartridge Compatibility</strong></h2>\r\n<p>The Canon 303 TS toner cartridge that comes with this printer is also the official laser cartridge for the Laser Shot.</p>\r\n<h2><strong>Canon Printer Service</strong></h2>\r\n<p>Canon Print Service is a piece of software that allows you to print directly from the menus of Android apps that support the printing subsystem. It can print from mobile devices such as <a href=\"https://neostore.com.np/product-category/mobile-brands\" target=\"_blank\" rel=\"noopener\">smartphones</a> and <a href=\"https://neostore.com.np/product-category/tablets\" target=\"_blank\" rel=\"noopener\">tablets</a> to Canon printers that are linked to wireless networks. The following are the main key features:</p>\r\n<ul>\r\n<li>Switching between color and black-and-white printing</li>\r\n<li>2-sided printing</li>\r\n<li>2 on 1 printing</li>\r\n<li>Borderless printing</li>\r\n<li>Stapling pages</li>\r\n<li>Setting paper types</li>\r\n<li>Secure printing</li>\r\n<li>Department ID management</li>\r\n<li>PDF direct printing</li>\r\n<li>Printer discovery by specifying the IP address</li>\r\n<li>Recall from the share menu</li>\r\n</ul>', NULL, NULL, 1, 0, 0, '0', 'popular', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-12-27 12:17:22', '2025-12-27 12:17:22', NULL),
(306, 'Soundcore K20i by Anker Semi-in-Ear Earbuds', 'soundcore-k20i-by-anker-semi-in-ear-earbuds', 2500, 1, NULL, 2500.00, NULL, NULL, '0', '<section class=\"wd-negative-gap elementor-section elementor-top-section elementor-element elementor-element-7c5ae2c wd-section-stretch elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"7c5ae2c\" data-element_type=\"section\">\r\n<div class=\"elementor-container elementor-column-gap-default\">\r\n<div class=\"elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e0794f1 wd-collapsible-content\" data-id=\"e0794f1\" data-element_type=\"column\">\r\n<div class=\"elementor-widget-wrap elementor-element-populated\">\r\n<div class=\"elementor-element elementor-element-1c37dc7 wd-width-100 elementor-widget elementor-widget-wd_title\" data-id=\"1c37dc7\" data-element_type=\"widget\" data-widget_type=\"wd_title.default\">\r\n<div class=\"elementor-widget-container\">\r\n<div class=\"title-wrapper wd-set-mb reset-last-child wd-title-color-default wd-title-style-default wd-title-size-default text-left\">\r\n<div class=\"liner-continer\">\r\n<h4 class=\"woodmart-title-container title wd-fontsize-l\">Product Description</h4>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"elementor-element elementor-element-5a7cd76 wd-single-content elementor-widget elementor-widget-wd_single_product_content\" data-id=\"5a7cd76\" data-element_type=\"widget\" data-widget_type=\"wd_single_product_content.default\">\r\n<div class=\"elementor-widget-container\">\r\n<p><strong>Soundcore K20i by Anker Semi-in-Ear Earbuds</strong></p>\r\n<ul>\r\n<li>The Soundcore K20i by Anker are semi-in-ear Bluetooth wireless earbuds designed for comfort and quality. They offer up to 36 hours of playback time on a single charge and have a fast charging feature. The earbuds deliver clear sound and include two microphones for enhancing call clarity with Environmental Noise Cancellation (ENC). Users can customize their audio experience with a dedicated EQ, and the earbuds are rated IPX5 for water resistance. They are equipped with Bluetooth 5.3 for a stable connection and can be controlled via an app.</li>\r\n</ul>\r\n<p><strong> </strong></p>\r\n<p><strong>Specifications of Soundcore K20i by Anker Semi-in-Ear Earbuds</strong></p>\r\n<table width=\"697\">\r\n<thead>\r\n<tr>\r\n<td><strong>Feature</strong></td>\r\n<td><strong>Details</strong></td>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<td><strong>Audio Technology</strong></td>\r\n<td>12mm Dynamic Drivers for Clear Sound with Enhanced Bass</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Bluetooth Version</strong></td>\r\n<td>5.2</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Battery Life</strong></td>\r\n<td>Up to 8 hours (Earbuds), 30 hours (with Charging Case)</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Charging Port</strong></td>\r\n<td>USB-C</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Fast Charging</strong></td>\r\n<td>10 minutes for 1 hour of playtime</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Water Resistance</strong></td>\r\n<td>IPX4 (Sweat and Splash Resistant)</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Weight</strong></td>\r\n<td>Approximately 4.3g per earbud</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Microphone</strong></td>\r\n<td>Dual Microphones for Clear Calls and Voice Recognition</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Supported Codecs</strong></td>\r\n<td>SBC, AAC</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Connectivity</strong></td>\r\n<td>Bluetooth 5.2 for stable and fast connections</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Control Type</strong></td>\r\n<td>Physical Button Controls</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Charging Time</strong></td>\r\n<td>1.5 hours for earbuds, 2 hours for case</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Eartip Sizes</strong></td>\r\n<td>Multiple sizes included (S, M, L)</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Special Features</strong></td>\r\n<td>Semi-in-Ear Design for Comfortable Fit, Stereo Mode</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Color Options</strong></td>\r\n<td>Black, White</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p><strong>Included in the Box</strong>:</p>\r\n<p>soundcore K20i by Anker are semi-in-ear earbuds<br>Compact Charging Case<br>USB-C Charging Cable<br>Multiple Eartip Sizes<br>User Manual</p>\r\n</div>\r\n</div>\r\n<div class=\"elementor-element elementor-element-e0f4b31 elementor-widget elementor-widget-wd_button\" data-id=\"e0f4b31\" data-element_type=\"widget\" data-widget_type=\"wd_button.default\">\r\n<div class=\"elementor-widget-container\">\r\n<div class=\"wd-button-wrapper text-center wd-collapsible-button\"> </div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>\r\n<section class=\"wd-negative-gap elementor-section elementor-top-section elementor-element elementor-element-7ef7285 wd-section-stretch elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"7ef7285\" data-element_type=\"section\">\r\n<div class=\"elementor-container elementor-column-gap-default\">\r\n<div class=\"elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4002cd1\" data-id=\"4002cd1\" data-element_type=\"column\">\r\n<div class=\"elementor-widget-wrap elementor-element-populated\">\r\n<div class=\"elementor-element elementor-element-376e5e1 wd-width-100 elementor-widget elementor-widget-wd_title\" data-id=\"376e5e1\" data-element_type=\"widget\" data-widget_type=\"wd_title.default\">\r\n<div class=\"elementor-widget-container\">\r\n<div class=\"title-wrapper wd-set-mb reset-last-child wd-title-color-default wd-title-style-default wd-title-size-default text-left\"> </div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>', '<pre><strong>Clear Sound</strong>: Graphene-enhanced drivers for detailed sound with deep bass.\r\n<strong>Comfortable Fit</strong>: Semi-in-ear design with 4 sizes of silicone eartips.\r\n<strong>Long Battery Life</strong>: Up to 7 hours of playtime + 21 hours with the charging case.\r\n<strong>Wireless Convenience</strong>: Bluetooth 5.0 with 50ft range and built-in microphone.\r\n<strong>Durable</strong>: IPX5 water-resistant and reinforced construction.</pre>', NULL, NULL, 1, 0, 0, '0', 'popular', 0, 0, NULL, NULL, NULL, 'Soundcore K20i', NULL, NULL, NULL, '2025-12-27 12:25:05', '2025-12-27 12:25:05', NULL),
(307, 'Hikvision 55” UHD 4K LED Surveillance Monitor | DS-D5055UC-C Professional Display', 'hikvision-55-uhd-4k-led-surveillance-monitor-ds-d5055uc-c-professional-display', 137500, NULL, NULL, 137500.00, NULL, NULL, '0', '<table>\r\n<thead>\r\n<tr>\r\n<th>Specification</th>\r\n<th>Details</th>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<td>Model</td>\r\n<td>DS-D5055UC-C</td>\r\n</tr>\r\n<tr>\r\n<td>Display Size</td>\r\n<td>55 Inches</td>\r\n</tr>\r\n<tr>\r\n<td>Panel Type</td>\r\n<td>LED</td>\r\n</tr>\r\n<tr>\r\n<td>Resolution</td>\r\n<td>3840 × 2160 (UHD 4K)</td>\r\n</tr>\r\n<tr>\r\n<td>Aspect Ratio</td>\r\n<td>16:9</td>\r\n</tr>\r\n<tr>\r\n<td>Screen Finish</td>\r\n<td>Anti-Glare</td>\r\n</tr>\r\n<tr>\r\n<td>Brightness</td>\r\n<td>High Brightness (Professional Grade)</td>\r\n</tr>\r\n<tr>\r\n<td>Usage</td>\r\n<td>Surveillance / Professional Display</td>\r\n</tr>\r\n<tr>\r\n<td>Operation</td>\r\n<td>Long-Hour Continuous Use</td>\r\n</tr>\r\n<tr>\r\n<td>Connectivity</td>\r\n<td>HDMI / Professional Video Inputs</td>\r\n</tr>\r\n<tr>\r\n<td>Brand</td>\r\n<td>Hikvision</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p> </p>', NULL, NULL, NULL, 1, 0, 0, '0', 'popular', 0, 0, NULL, 12, NULL, NULL, NULL, NULL, NULL, '2025-12-27 12:28:52', '2025-12-27 12:28:52', NULL),
(308, 'Hikvision 32” FHD VA Monitor | 75Hz with Built-in Speaker DS-D5032F3-1V0S', 'hikvision-32-fhd-va-monitor-75hz-with-built-in-speaker-ds-d5032f3-1v0s', 40000, 3, NULL, 40000.00, NULL, NULL, '0', '<section class=\"wd-negative-gap elementor-section elementor-top-section elementor-element elementor-element-7c5ae2c wd-section-stretch elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"7c5ae2c\" data-element_type=\"section\">\r\n<div class=\"elementor-container elementor-column-gap-default\">\r\n<div class=\"elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e0794f1 wd-collapsible-content\" data-id=\"e0794f1\" data-element_type=\"column\">\r\n<div class=\"elementor-widget-wrap elementor-element-populated\">\r\n<div class=\"elementor-element elementor-element-5a7cd76 wd-single-content elementor-widget elementor-widget-wd_single_product_content\" data-id=\"5a7cd76\" data-element_type=\"widget\" data-widget_type=\"wd_single_product_content.default\">\r\n<div class=\"elementor-widget-container\">\r\n<table>\r\n<thead>\r\n<tr>\r\n<th>Specification</th>\r\n<th>Details</th>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<td>Model</td>\r\n<td>DS-D5032F3-1V0S</td>\r\n</tr>\r\n<tr>\r\n<td>Display Size</td>\r\n<td>32 Inches</td>\r\n</tr>\r\n<tr>\r\n<td>Panel Type</td>\r\n<td>VA LED</td>\r\n</tr>\r\n<tr>\r\n<td>Resolution</td>\r\n<td>1920×1080 (Full HD)</td>\r\n</tr>\r\n<tr>\r\n<td>Refresh Rate</td>\r\n<td>75Hz</td>\r\n</tr>\r\n<tr>\r\n<td>Contrast Ratio</td>\r\n<td>3000:1</td>\r\n</tr>\r\n<tr>\r\n<td>Connectivity</td>\r\n<td>HDMI, VGA, DisplayPort</td>\r\n</tr>\r\n<tr>\r\n<td>Built-in Speakers</td>\r\n<td>Yes</td>\r\n</tr>\r\n<tr>\r\n<td>Response Time</td>\r\n<td>8 ms</td>\r\n</tr>\r\n<tr>\r\n<td>Features</td>\r\n<td>Flicker-Free, Low Blue Light, Wide Viewing Angle</td>\r\n</tr>\r\n<tr>\r\n<td>Brand</td>\r\n<td>Hikvision</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>\r\n<p> </p>', NULL, NULL, NULL, 1, 0, 0, '0', 'popular', 0, 0, NULL, 12, NULL, NULL, NULL, NULL, NULL, '2025-12-27 12:30:54', '2025-12-27 12:30:54', NULL),
(309, 'MSI MPG 491CQPX QD-OLED Gaming Monitor | 49” Curved DQHD OLED 240Hz Display', 'msi-mpg-491cqpx-qd-oled-gaming-monitor-49-curved-dqhd-oled-240hz-display', 256000, NULL, NULL, 256000.00, NULL, NULL, '0', '<table>\r\n<thead>\r\n<tr>\r\n<th>Specification</th>\r\n<th>Details</th>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<td>Model</td>\r\n<td>MSI MPG 491CQPX</td>\r\n</tr>\r\n<tr>\r\n<td>Screen Size</td>\r\n<td>49 Inches</td>\r\n</tr>\r\n<tr>\r\n<td>Resolution</td>\r\n<td>DQHD (5120 × 1440)</td>\r\n</tr>\r\n<tr>\r\n<td>Panel Type</td>\r\n<td>QD-OLED Curved</td>\r\n</tr>\r\n<tr>\r\n<td>Refresh Rate</td>\r\n<td>240Hz</td>\r\n</tr>\r\n<tr>\r\n<td>Response Time</td>\r\n<td>1ms</td>\r\n</tr>\r\n<tr>\r\n<td>Aspect Ratio</td>\r\n<td>32:9</td>\r\n</tr>\r\n<tr>\r\n<td>Brightness</td>\r\n<td>400 nits</td>\r\n</tr>\r\n<tr>\r\n<td>Contrast Ratio</td>\r\n<td>Infinite (QD-OLED)</td>\r\n</tr>\r\n<tr>\r\n<td>Viewing Angle</td>\r\n<td>178° / 178°</td>\r\n</tr>\r\n<tr>\r\n<td>HDR</td>\r\n<td>HDR True Black</td>\r\n</tr>\r\n<tr>\r\n<td>Adaptive Sync</td>\r\n<td>Supported</td>\r\n</tr>\r\n<tr>\r\n<td>Connectivity</td>\r\n<td>HDMI, DisplayPort</td>\r\n</tr>\r\n<tr>\r\n<td>Eye Care Technology</td>\r\n<td>Anti-Flicker, Less Blue Light</td>\r\n</tr>\r\n<tr>\r\n<td>VESA Mount</td>\r\n<td>Yes</td>\r\n</tr>\r\n<tr>\r\n<td>Bezel Type</td>\r\n<td>Slim Curved Bezel</td>\r\n</tr>\r\n<tr>\r\n<td>Usage</td>\r\n<td>Gaming, Multimedia, Professional Work, Esports, Content Creation</td>\r\n</tr>\r\n<tr>\r\n<td>Build Series</td>\r\n<td>MSI MPG</td>\r\n</tr>\r\n<tr>\r\n<td>Warranty</td>\r\n<td>Manufacturer Warranty</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p> </p>', NULL, NULL, NULL, 1, 0, 0, '0', 'popular', 0, 0, NULL, 15, NULL, NULL, NULL, NULL, NULL, '2025-12-27 12:33:06', '2025-12-27 12:33:06', NULL),
(310, 'MSI MAG B550 TOMAHAWK MAX WIFI AM4 ATX Motherboard', 'msi-mag-b550-tomahawk-max-wifi-am4-atx-motherboard', 30800, 2, NULL, 30800.00, NULL, NULL, '0', '<ul>\r\n<li>MSI MAG B550 TOMAHAWK MAX WIFI AM4 ATX Motherboard from MSI. It’s ideal for the gaming enthusiast who wishes to have complete control over their build without breaking the bank. Sporting the AMD AM4 socket and B550 chipset, you can easily use a wide range of Ryzen 5000, 4000, and 3000 Series processors. Four DDR4 RAM slots allow you to install up to 128GB of RAM with overclocking speeds up to 5100 MHz for greater multitasking, gaming, and render performance. Two M.2 SSD interfaces and six SATA ports allow you to amass multiple storage devices for your games, media, and more. Utilize graphics and utility cards with a series of expansion ports including one PCIe 4.0 x16, one PCIe 3.0 x16 (in x4 mode), and two PCIe 3.0 x1 slots.</li>\r\n</ul>\r\n<p> </p>\r\n<ul>\r\n<li>AMD AM4 socket for AMD Ryzen 3000/4000G/5000(G) processor<br>4 DDR4 5100+ MHz (OC) Dual-Channel memory slots<br>1 x M.2 PCIe 4.0 x4 / SATA 6 Gbit/s + 1 x M.2 PCIe 3.0 x4 with Frozr heatsink<br>1 x PCI-Express 4.0 16x + 1 x PCIe 3.0 16x (4x) with AMD CrossFireX Multi-GPU support<br>USB 3.1 ports including Type-C<br>2.5 GbE LAN + Wi-Fi 6E / Bluetooth 5.2<br>Mystic Light<br>I/O Shield pre-installed</li>\r\n</ul>', '<div class=\"elementor-element elementor-element-1c37dc7 wd-width-100 elementor-widget elementor-widget-wd_title\" data-id=\"1c37dc7\" data-element_type=\"widget\" data-widget_type=\"wd_title.default\">\r\n<div class=\"elementor-widget-container\">\r\n<div class=\"title-wrapper wd-set-mb reset-last-child wd-title-color-default wd-title-style-default wd-title-size-default text-left\">\r\n<div class=\"liner-continer\">\r\n<h4 class=\"woodmart-title-container title wd-fontsize-l\">Product Description</h4>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"elementor-element elementor-element-5a7cd76 wd-single-content elementor-widget elementor-widget-wd_single_product_content\" data-id=\"5a7cd76\" data-element_type=\"widget\" data-widget_type=\"wd_single_product_content.default\">\r\n<div class=\"elementor-widget-container\">\r\n<h4><strong>MSI MAG B550 TOMAHAWK MAX WIFI  Motherboard</strong></h4>\r\n<p> </p>\r\n<ul>\r\n<li>The MSI MAG B550 TOMAHAWK MAX WIFI motherboard with its AM4 socket is designed to accommodate AMD Ryzen processors from the 3rd generation onwards. It will allow you to compose a configuration Gaming It will allow you to build a configuration with the latest technological advances: PCI-Express 4.0 for graphics cards and M.2 SSDs, management of 128 GB of DDR4 RAM. It’s all there for an exhilarating gaming experience.</li>\r\n</ul>\r\n<p> </p>\r\n<ul>\r\n<li>Features<br>ATX Form Factor<br>AMD B550 Chipset<br>Socket AM4<br>4 x Dual-Channel DDR4-5100+ MHz (OC)<br>6 x SATA III, 2 x M.2<br>1 x PCIe 4.0 x16, 1 x PCIe 3.0 x16 Slot<br>2 x PCIe 3.0 x1 Slots<br>Wi-Fi 6E | 2.5 GbE LAN | Bluetooth 5.2<br>7.1-Channel HD Audio<br>Windows 10 &amp; 11</li>\r\n</ul>\r\n</div>\r\n</div>', NULL, NULL, 1, 0, 0, '0', 'popular', 0, 0, NULL, 15, NULL, 'B550TMHWKMWI', 3, NULL, NULL, '2025-12-27 12:42:52', '2025-12-27 12:42:52', NULL),
(311, 'AMD Ryzen 7 3800X 8-Core, 16-Thread Desktop Processor with Wraith Prism LED Cooler', 'amd-ryzen-7-3800x-8-core-16-thread-desktop-processor-with-wraith-prism-led-cooler', 46800, 1, NULL, 46800.00, NULL, NULL, '0', NULL, NULL, NULL, NULL, 1, 0, 0, '0', 'popular', 0, 0, NULL, 15, NULL, NULL, 4, NULL, NULL, '2025-12-27 12:45:32', '2025-12-27 12:46:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `product_id`, `category_id`, `created_at`, `updated_at`) VALUES
(364, 247, 22, NULL, NULL),
(365, 157, 32, NULL, NULL),
(366, 160, 25, NULL, NULL),
(372, 268, 93, NULL, NULL),
(373, 268, 96, NULL, NULL),
(378, 270, 130, NULL, NULL),
(379, 269, 130, NULL, NULL),
(380, 271, 100, NULL, NULL),
(381, 272, 100, NULL, NULL),
(382, 273, 100, NULL, NULL),
(383, 274, 100, NULL, NULL),
(384, 275, 100, NULL, NULL),
(385, 276, 100, NULL, NULL),
(386, 277, 100, NULL, NULL),
(387, 278, 100, NULL, NULL),
(388, 279, 100, NULL, NULL),
(389, 280, 100, NULL, NULL),
(390, 281, 100, NULL, NULL),
(391, 282, 100, NULL, NULL),
(392, 283, 100, NULL, NULL),
(393, 284, 98, NULL, NULL),
(394, 285, 98, NULL, NULL),
(395, 286, 98, NULL, NULL),
(396, 287, 98, NULL, NULL),
(397, 288, 98, NULL, NULL),
(398, 289, 98, NULL, NULL),
(399, 290, 98, NULL, NULL),
(400, 291, 98, NULL, NULL),
(401, 292, 98, NULL, NULL),
(402, 293, 98, NULL, NULL),
(403, 294, 98, NULL, NULL),
(404, 295, 98, NULL, NULL),
(405, 296, 98, NULL, NULL),
(406, 297, 98, NULL, NULL),
(407, 298, 98, NULL, NULL),
(408, 299, 98, NULL, NULL),
(409, 300, 109, NULL, NULL),
(410, 301, 109, NULL, NULL),
(411, 302, 32, NULL, NULL),
(412, 303, 32, NULL, NULL),
(413, 304, 110, NULL, NULL),
(414, 305, 109, NULL, NULL),
(415, 306, 109, NULL, NULL),
(416, 307, 89, NULL, NULL),
(417, 308, 89, NULL, NULL),
(418, 309, 89, NULL, NULL),
(419, 310, 88, NULL, NULL),
(420, 311, 88, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_compatibilities`
--

CREATE TABLE `product_compatibilities` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `compatible_product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quotations`
--

CREATE TABLE `quotations` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `service_id` int(10) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `type` enum('product','service') DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `message` longtext,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` double(8,2) NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `show` tinyint(4) NOT NULL DEFAULT '0',
  `cons` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `email`, `rating`, `message`, `show`, `cons`, `product_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'admin hero', 'admin@gmail.com', 5.00, 'Good product', 0, NULL, 271, 1, '2025-12-19 12:34:49', '2025-12-19 12:34:49'),
(2, 'admin hero', 'admin@gmail.com', 5.00, 'good', 0, NULL, 289, 1, '2025-12-27 11:17:16', '2025-12-27 11:17:16');

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE `seos` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_orders`
--

CREATE TABLE `service_orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `service_id` int(10) UNSIGNED NOT NULL,
  `price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `notes` text,
  `subtotal` decimal(10,2) NOT NULL DEFAULT '0.00',
  `tax` decimal(10,2) DEFAULT '0.00',
  `discount` decimal(10,2) DEFAULT '0.00',
  `discount_id` int(10) UNSIGNED DEFAULT NULL,
  `grand_total` decimal(10,2) NOT NULL DEFAULT '0.00',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `order_track` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_orders`
--

INSERT INTO `service_orders` (`id`, `user_id`, `service_id`, `price`, `notes`, `subtotal`, `tax`, `discount`, `discount_id`, `grand_total`, `status`, `order_track`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 10000.00, NULL, 10000.00, 0.00, 1000.00, 6, 9000.00, 0, 'OT589-1757661589', '2025-09-12 01:34:49', '2025-09-12 01:34:49'),
(2, 1, 1, 10000.00, 'Ut perspiciatis cup', 10000.00, 0.00, 0.00, NULL, 10000.00, 0, 'OT210-1757931848', '2025-09-15 04:39:08', '2025-09-15 04:39:08');

-- --------------------------------------------------------

--
-- Table structure for table `service_order_addresses`
--

CREATE TABLE `service_order_addresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `province` varchar(100) DEFAULT NULL,
  `country` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `zip_code` varchar(20) DEFAULT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_order_addresses`
--

INSERT INTO `service_order_addresses` (`id`, `first_name`, `last_name`, `email`, `phone`, `province`, `country`, `city`, `zip_code`, `address1`, `address2`, `order_id`, `created_at`, `updated_at`) VALUES
(1, 'Lana', 'Horton', 'lacosycali@mailinator.com', '+1 (633) 857-6463', 'Duis voluptatum exer', 'Fugiat laboris labor', 'Eum proident velit', '12905', 'Cupidatat et laboris', NULL, 1, '2025-09-12 01:34:49', '2025-09-12 01:34:49'),
(2, 'Basil', 'Manning', 'kaqyzug@mailinator.com', '+1 (197) 342-5777', 'Non veniam exercita', 'Soluta alias tempori', 'Beatae nulla recusan', '71742', 'Voluptas aut est aut', NULL, 2, '2025-09-15 04:39:08', '2025-09-15 04:39:08');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` int(10) UNSIGNED NOT NULL,
  `shipping_location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_price` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `zip_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `shipping_location`, `shipping_price`, `status`, `zip_code`, `created_at`, `updated_at`) VALUES
(3, 'Melbourne', 500, 1, '0', '2020-10-20 22:41:56', '2025-08-22 06:03:09'),
(5, 'Dharan', 200, 1, '0', '2022-09-15 05:51:31', '2025-08-22 06:13:31'),
(6, 'Sydney', 550, 1, '0', '2022-09-15 05:51:44', '2022-09-15 05:51:44'),
(7, 'Lalit', 69, 1, NULL, '2025-08-22 06:00:39', '2025-08-22 06:00:39'),
(8, 'Sanepaaa', 331, 1, NULL, '2025-08-22 06:18:20', '2025-08-22 06:18:20'),
(9, 'Balaju Area', 0, 1, NULL, '2025-08-31 21:58:33', '2025-08-31 21:58:33'),
(10, 'Basundhara', 20, 1, NULL, '2025-08-31 21:58:55', '2025-08-31 21:58:55'),
(11, 'Chakra path area', 50, 1, NULL, '2025-08-31 21:59:15', '2025-08-31 21:59:15'),
(12, 'Hatti Gauda Area', 50, 1, NULL, '2025-08-31 21:59:38', '2025-08-31 21:59:38'),
(13, 'Budhanilkantha Area', 50, 1, NULL, '2025-08-31 22:00:11', '2025-08-31 22:00:11'),
(14, 'Chabahil Area', 50, 1, NULL, '2025-08-31 22:00:33', '2025-08-31 22:00:33'),
(15, 'Swayambhu Area', 50, 1, NULL, '2025-08-31 22:01:02', '2025-08-31 22:01:02'),
(16, 'Sitapaila Area', 50, 1, NULL, '2025-08-31 22:01:23', '2025-08-31 22:01:23'),
(17, 'Lazimpat Area', 50, 1, NULL, '2025-08-31 22:01:42', '2025-08-31 22:01:42'),
(18, 'Thamel Area', 50, 1, NULL, '2025-08-31 22:01:55', '2025-08-31 22:01:55');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_media`
--

CREATE TABLE `shipping_media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping_media`
--

INSERT INTO `shipping_media` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'plane', '2025-08-19 01:46:17', '2025-08-19 01:46:17');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_prices`
--

CREATE TABLE `shipping_prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shipping_media_id` bigint(20) UNSIGNED NOT NULL,
  `weight_id` bigint(20) UNSIGNED NOT NULL,
  `price` double(8,2) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart`
--

CREATE TABLE `shopping_cart` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instance` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'M', 'm', '2020-10-20 22:32:22', '2020-10-20 22:32:22'),
(2, 'S', 's', '2020-10-20 22:32:28', '2020-10-20 22:32:28'),
(3, 'L', 'l', '2020-10-20 22:32:31', '2020-10-20 22:32:31'),
(5, 'Xl', 'xl', '2021-01-31 11:19:31', '2021-01-31 11:19:31'),
(6, 'XXL', 'xxl', '2024-05-15 11:03:20', '2024-05-15 11:03:20');

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `size_id` int(10) UNSIGNED NOT NULL,
  `color_id` int(10) UNSIGNED NOT NULL,
  `stock` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uri` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `in_home` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `order` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verified` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `roles` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `google_id`, `avatar`, `phone`, `country`, `image`, `email_verified_at`, `password`, `verified`, `roles`, `provider_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'hero', 'admin@gmail.com', NULL, NULL, '01421755', 'Kalimati, Kathmandu', 'profile_images/MfJnB3p96CZz5uqGpdbMNYb4bPBMu6HkTRH995fa.jpg', NULL, '$2y$10$n0ZU0pZ3DVmvjr.ruDiVRuXaC88hKOCMaIerfNJoz7..0QI8ZaJ2W', '1', 'admin', NULL, 'uQ6uQEf3KMLNoliT4exUGcmXSgUmPcrpBm4I7GdYNV2BeZnAoIZuhwox6wRu', '2020-10-20 22:20:44', '2025-09-03 01:58:30'),
(2, 'Test Kumar', 'Baldwin', 'test@gmail.com', NULL, NULL, '981319043546222', 'dfada', 'profile_images/zoaHZdvzrxIeB6zTiUZlJHkZAjSLCGUZnHRlduen.jpg', NULL, '$2y$10$n0ZU0pZ3DVmvjr.ruDiVRuXaC88hKOCMaIerfNJoz7..0QI8ZaJ2W', '1', 'user', NULL, 'AuzE7yvtLhonHryBIrF06pvUmNtl7AE1EfEm7IVfSwVk2foJHTqxygC2NtTL', '2020-11-10 23:27:45', '2025-09-03 03:22:10'),
(43, 'Test', NULL, 'sanagm.cyberlink@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$MvcsBPgLNdfa2fN7H59kleFzEM/Z6ifDr9Ts.KR8eN.2Byukrqxhm', '1', 'user', NULL, NULL, '2025-08-06 01:02:23', '2025-08-06 01:02:23'),
(46, 'anil cyberlink', NULL, 'anilcyberlink@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$n0ZU0pZ3DVmvjr.ruDiVRuXaC88hKOCMaIerfNJoz7..0QI8ZaJ2W', '1', 'user', NULL, NULL, '2025-08-12 02:52:54', '2025-08-12 02:52:54'),
(48, 'Anil Kafle', NULL, 'anilkafle22@gmail.com', '118143842063635026108', 'https://lh3.googleusercontent.com/a/ACg8ocLdTOWZ7yLSTGQjlp-kRe-meW3viRDGN_WNRbmbo2bSLtkUEg=s96-c', NULL, NULL, NULL, NULL, '$2y$10$wvpLZz.m1Im1sQkaPlpOOuJGFhT4PUKM9i8JB2YaCpSPeQT03UmwO', '1', 'user', NULL, NULL, '2025-08-12 03:03:36', '2025-08-12 03:03:36'),
(54, 'Ananta Kattel', NULL, 'support@yantranetwork.com', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$sevABTELDY77QfncLqY/CeqHUR0FHaEIKVZ4WlDckQ7KHNTQMOBAC', '1', 'user', NULL, NULL, '2025-08-28 07:18:46', '2025-08-28 07:19:06'),
(55, 'fdfdf', NULL, 'sales@roomandfood.com', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$60T/3BRii4ka7mHn9/vWheQ5JkwjsEqo/8HtnI9VHhiKhkwWLPpFO', '0', 'user', NULL, NULL, '2025-08-31 22:36:22', '2025-08-31 22:36:22'),
(56, 'K A', NULL, 'orders@yantranetwork.com', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$jpdisZnIwmogbI.vQPB64ueWY0mk/daLKvgMRFjLrqoKkdiwYPuju', '1', 'user', NULL, NULL, '2025-09-02 12:07:24', '2025-09-02 12:07:39'),
(57, 'AK', NULL, 'it.anantakattel@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$f7AAb13Pmw4kYRIRw.nk8OdDmwUF.VhnYlCq//S37bJh.7lFnPRPK', '1', 'user', NULL, NULL, '2025-09-19 13:08:57', '2025-09-19 13:09:04'),
(58, 'AKT', NULL, 'online@yantranetwork.com', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$kk49xXTJKbpYGz5eRaok3edsT/6J8I10HVuBOn3qqa8Ny2VQA784a', '0', 'user', NULL, NULL, '2025-09-23 01:06:01', '2025-09-23 01:06:01'),
(59, 'AE', NULL, 'online@crowneimperial.com', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$shSWK.U7J8SeBxomdizt0.IfMUCmdYMIu0S6pg0LIr9pzXufgkvuy', '0', 'user', NULL, NULL, '2025-09-23 01:08:04', '2025-09-23 01:08:04'),
(60, 'AAA', NULL, 'sharmaananta2025@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$rHQmjrmrzJD6n003Skp9PexG.xGMd5B8TK5tRHv.DkofBXIO2nHhS', '1', 'user', NULL, NULL, '2025-09-23 01:11:55', '2025-09-23 01:12:13');

-- --------------------------------------------------------

--
-- Table structure for table `verify_users`
--

CREATE TABLE `verify_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `verify_users`
--

INSERT INTO `verify_users` (`id`, `user_id`, `token`, `created_at`, `updated_at`) VALUES
(1, 2, 'amKjCraGo7qbyxdX8EOI', '2020-11-10 23:27:45', '2020-11-10 23:27:45'),
(2, 6, 'jt6WW8bFGApjDbi2uXlc', '2020-12-08 00:11:37', '2020-12-08 00:11:37'),
(17, 27, 'ytBFZ6DQ4C86O07xGuJ5', '2021-01-20 14:24:35', '2021-01-20 14:24:35'),
(18, 28, 'kDwAoBKgMLiKIvRJPuJU', '2021-01-20 17:44:55', '2021-01-20 17:44:55'),
(19, 29, 'SHQ8DuQvRdFzfylvuIdu', '2022-09-15 02:37:58', '2022-09-15 02:37:58'),
(20, 30, 'DyWvypBDfxPBpsAjpqyx', '2022-09-16 01:58:51', '2022-09-16 01:58:51'),
(21, 31, 'ZO26AhCekCfH7Hr21PNy', '2022-09-18 05:12:11', '2022-09-18 05:12:11'),
(22, 32, 'YsLFOMBO8N1F9ZTlwmV0', '2022-09-20 00:40:48', '2022-09-20 00:40:48'),
(23, 33, 'BifqqVcpA5GO4wQCWVOr', '2022-09-23 10:43:27', '2022-09-23 10:43:27'),
(27, 37, 'HsQnM9NK9CtWsT3OAsqO', '2022-09-23 10:59:02', '2022-09-23 10:59:02'),
(28, 38, 'Qa3T50bpQPcVRPbrJQFp', '2023-05-09 09:12:54', '2023-05-09 09:12:54'),
(29, 39, 'uOg2CVzAgHgmdc6Xf2ux', '2023-05-24 09:42:45', '2023-05-24 09:42:45'),
(30, 40, '5wpf0K7qmcheRaXIYrpq', '2023-05-25 16:00:43', '2023-05-25 16:00:43'),
(31, 41, 'OQxa1nKo9d63qpTr6Hka', '2023-05-25 16:00:51', '2023-05-25 16:00:51'),
(32, 42, '97LoPyoTG2NJjwGbBnZJ', '2023-07-25 10:41:09', '2023-07-25 10:41:09'),
(33, 43, 'lVhORdYWhPj6SMVKN4vf', '2025-08-06 01:02:23', '2025-08-06 01:02:23'),
(34, 49, 'rwfersb9fq2NQNc8ozBv', '2025-08-13 00:51:54', '2025-08-13 00:51:54'),
(40, 55, 'ZAU1EPJBE1Jesbs9z7PU', '2025-08-31 22:36:22', '2025-08-31 22:36:22'),
(42, 58, 'DMAIyUJHhc1ymsxHuxw5', '2025-09-23 01:06:01', '2025-09-23 01:06:01'),
(43, 59, 'lWlAF815nNVC9sHKFIIk', '2025-09-23 01:08:04', '2025-09-23 01:08:04');

-- --------------------------------------------------------

--
-- Table structure for table `weights`
--

CREATE TABLE `weights` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `min` double(8,2) DEFAULT NULL,
  `max` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `weights`
--

INSERT INTO `weights` (`id`, `min`, `max`, `created_at`, `updated_at`) VALUES
(1, 5.00, 50.00, '2025-08-19 01:46:01', '2025-08-19 01:46:01');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(4, 2, 157, '2020-12-22 04:50:53', '2020-12-22 04:50:53'),
(13, 2, 160, '2025-08-11 07:55:11', '2025-08-11 07:55:11'),
(14, 54, 247, NULL, NULL),
(17, 1, 279, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addresses_user_id_foreign` (`user_id`);

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ads_ad_position_status_index` (`ad_position`,`status`),
  ADD KEY `ads_start_date_end_date_index` (`start_date`,`end_date`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand_discounts`
--
ALTER TABLE `brand_discounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cities_country_id_foreign` (`country_id`);

--
-- Indexes for table `cl_banner`
--
ALTER TABLE `cl_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_posts`
--
ALTER TABLE `cl_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_post_type`
--
ALTER TABLE `cl_post_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color_stocks`
--
ALTER TABLE `color_stocks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `color_stocks_product_id_foreign` (`product_id`),
  ADD KEY `color_stocks_color_id_foreign` (`color_id`);

--
-- Indexes for table `component_types`
--
ALTER TABLE `component_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `descriptions`
--
ALTER TABLE `descriptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `descriptions_product_id_foreign` (`product_id`);

--
-- Indexes for table `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_product_id_foreign` (`product_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_shipping_id_foreign` (`shipping_id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_addresses`
--
ALTER TABLE `order_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_addresses_order_id_foreign` (`order_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`),
  ADD KEY `order_details_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_brand_id_foreign` (`brand_id`),
  ADD KEY `products_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_categories_product_id_foreign` (`product_id`),
  ADD KEY `product_categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `product_compatibilities`
--
ALTER TABLE `product_compatibilities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pc_product` (`product_id`),
  ADD KEY `fk_pc_compatible` (`compatible_product_id`);

--
-- Indexes for table `quotations`
--
ALTER TABLE `quotations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_product_id_foreign` (`product_id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`);

--
-- Indexes for table `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seos_product_id_foreign` (`product_id`);

--
-- Indexes for table `service_orders`
--
ALTER TABLE `service_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_order_addresses`
--
ALTER TABLE `service_order_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_order_address_order` (`order_id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_media`
--
ALTER TABLE `shipping_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_prices`
--
ALTER TABLE `shipping_prices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shipping_prices_shipping_media_id_foreign` (`shipping_media_id`),
  ADD KEY `shipping_prices_weight_id_foreign` (`weight_id`);

--
-- Indexes for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD PRIMARY KEY (`id`,`instance`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stocks_product_id_foreign` (`product_id`),
  ADD KEY `stocks_size_id_foreign` (`size_id`),
  ADD KEY `stocks_color_id_foreign` (`color_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_uri_unique` (`uri`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `verify_users`
--
ALTER TABLE `verify_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `verify_users_user_id_foreign` (`user_id`);

--
-- Indexes for table `weights`
--
ALTER TABLE `weights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wishlists_user_id_foreign` (`user_id`),
  ADD KEY `wishlists_product_id_foreign` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `brand_discounts`
--
ALTER TABLE `brand_discounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cl_banner`
--
ALTER TABLE `cl_banner`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `cl_posts`
--
ALTER TABLE `cl_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cl_post_type`
--
ALTER TABLE `cl_post_type`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `color_stocks`
--
ALTER TABLE `color_stocks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=275;

--
-- AUTO_INCREMENT for table `component_types`
--
ALTER TABLE `component_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `descriptions`
--
ALTER TABLE `descriptions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=268;

--
-- AUTO_INCREMENT for table `discounts`
--
ALTER TABLE `discounts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=961;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `order_addresses`
--
ALTER TABLE `order_addresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=312;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=421;

--
-- AUTO_INCREMENT for table `product_compatibilities`
--
ALTER TABLE `product_compatibilities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quotations`
--
ALTER TABLE `quotations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_orders`
--
ALTER TABLE `service_orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `service_order_addresses`
--
ALTER TABLE `service_order_addresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `shipping_media`
--
ALTER TABLE `shipping_media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shipping_prices`
--
ALTER TABLE `shipping_prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `verify_users`
--
ALTER TABLE `verify_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `weights`
--
ALTER TABLE `weights`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `color_stocks`
--
ALTER TABLE `color_stocks`
  ADD CONSTRAINT `color_stocks_color_id_foreign` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `color_stocks_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `descriptions`
--
ALTER TABLE `descriptions`
  ADD CONSTRAINT `descriptions_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `order_addresses`
--
ALTER TABLE `order_addresses`
  ADD CONSTRAINT `order_addresses_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `order_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `products_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD CONSTRAINT `product_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `product_categories_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `product_compatibilities`
--
ALTER TABLE `product_compatibilities`
  ADD CONSTRAINT `fk_pc_compatible` FOREIGN KEY (`compatible_product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_pc_product` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `seos`
--
ALTER TABLE `seos`
  ADD CONSTRAINT `seos_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `service_order_addresses`
--
ALTER TABLE `service_order_addresses`
  ADD CONSTRAINT `fk_order_address_order` FOREIGN KEY (`order_id`) REFERENCES `service_orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `shipping_prices`
--
ALTER TABLE `shipping_prices`
  ADD CONSTRAINT `shipping_prices_shipping_media_id_foreign` FOREIGN KEY (`shipping_media_id`) REFERENCES `shipping_media` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `shipping_prices_weight_id_foreign` FOREIGN KEY (`weight_id`) REFERENCES `weights` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `stocks`
--
ALTER TABLE `stocks`
  ADD CONSTRAINT `stocks_color_id_foreign` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `stocks_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `stocks_size_id_foreign` FOREIGN KEY (`size_id`) REFERENCES `sizes` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `verify_users`
--
ALTER TABLE `verify_users`
  ADD CONSTRAINT `verify_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD CONSTRAINT `wishlists_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `wishlists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
