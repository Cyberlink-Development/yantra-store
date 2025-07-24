-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2025 at 08:49 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) DEFAULT NULL,
  `last_name` varchar(191) DEFAULT NULL,
  `company` varchar(191) DEFAULT NULL,
  `country` varchar(191) DEFAULT NULL,
  `city` varchar(191) DEFAULT NULL,
  `zip_code` int(11) DEFAULT NULL,
  `address1` varchar(191) NOT NULL,
  `address2` varchar(191) DEFAULT NULL,
  `is_primary` tinyint(1) NOT NULL DEFAULT 0,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `slug` varchar(191) DEFAULT NULL,
  `brand_name` varchar(191) NOT NULL,
  `brand_image` varchar(191) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `slug`, `brand_name`, `brand_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'dell', 'DELL', '1753096555.svg', 1, '2020-10-20 22:33:04', '2025-07-22 02:33:14'),
(3, 'nike', 'Nike', '1603253914.png', NULL, '2020-10-20 22:33:34', '2020-10-20 22:33:34'),
(4, 'fila', 'Fila', '1603254252.png', NULL, '2020-10-20 22:39:12', '2020-10-20 22:39:12'),
(5, 'samsung', 'Samsung', '1614064539.jpg', NULL, '2021-01-31 11:20:06', '2021-02-23 12:15:39'),
(6, 'godrej', 'Godrej', '1612075027.png', NULL, '2021-01-31 11:37:07', '2021-01-31 11:37:07');

-- --------------------------------------------------------

--
-- Table structure for table `brand_discounts`
--

CREATE TABLE `brand_discounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `discount_type` enum('percentage','fixed') NOT NULL DEFAULT 'percentage',
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
(2, 3, 'fixed', 10.00, '2025-07-23', '2025-07-30', '2025-07-22 05:40:43', '2025-07-22 06:16:15');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `name` varchar(191) NOT NULL,
  `description` longtext DEFAULT NULL,
  `slug` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `banner` varchar(200) DEFAULT NULL,
  `is_special` varchar(191) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `seo_keyword` varchar(1000) DEFAULT NULL,
  `seo_description` varchar(1000) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `name`, `description`, `slug`, `image`, `banner`, `is_special`, `status`, `seo_keyword`, `seo_description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 0, 'Cashmere Product', '<p>Cashmere products are luxury items made from the soft undercoat of cashmere goats. This incredibly fine fiber is known for its unmatched softness, warmth, and lightweight feel. Cashmere garments, like sweaters, scarves, and hats, are prized for their ability to drape elegantly and provide exceptional insulation. &nbsp;The natural fiber comes in a variety of styles, making it a versatile choice for both cozy comfort and adding a touch of sophistication to your wardrobe.</p>', 'cashmere-product', '1663931321.jpg', '8575671715929373.jpg', '1', '1', 'Cashmere', 'Our luxurious women\'s pure cashmere cardigans are all crafted by us with comfort and style in mind. Effortless elegance and the highest quality yarn combine to make the perfect cashmere cardigan collection.\r\nButtoned cardigans, zip cardigans, and those in-between, our cardigans offer year-round practicality in attractive colours in the finest cashmere.', NULL, '2020-10-20 22:34:36', '2024-05-17 11:02:53'),
(3, 0, 'Yak Wool Product', NULL, 'yak-wool-product', '1663067528.jpg', NULL, '0', '0', NULL, NULL, NULL, '2020-10-20 22:36:31', '2024-05-30 12:24:42'),
(4, 1, 'Cashmere Poncho', NULL, 'cashmere-poncho', '1663067106.jpg', NULL, '1', '1', '<p>Cashmere Poncho, Cashmere Product</p>', '<p>This is branded cashmere product from Nepal.</p>', NULL, '2020-10-20 23:01:09', '2022-09-19 04:01:39'),
(22, 1, 'Cashmere Shawl', NULL, 'cashmere-shawl', NULL, NULL, '0', '1', NULL, NULL, NULL, '2022-09-23 12:04:15', '2024-05-22 11:01:25'),
(23, 0, 'Singing Bowl', '<p>Singing bowls are ancient instruments traditionally used in the Himalayan region. These metal bowls vibrate and produce deep, rich tones when played. &nbsp;They are often used in meditation and religious ceremonies to create a calming atmosphere and promote relaxation. &nbsp;The resonant sounds and vibrations are believed to have therapeutic benefits, and singing bowls are finding use in modern sound therapy practices for stress reduction and overall well-being. &nbsp;Some practitioners even incorporate them into yoga classes and massage sessions.</p>', 'singing-bowl', NULL, '6233101715929592.jpg', '0', '1', NULL, NULL, NULL, '2022-09-23 12:05:23', '2024-05-17 11:06:32'),
(24, 0, 'Cotton Product', '<p>Cotton products are everywhere in our daily lives thanks to the versatility of this natural fiber. Cotton\'s breathability and absorbency make it ideal for clothing, from comfy t-shirts and jeans to soft towels and bedsheets. &nbsp;It\'s also used in a surprising range of household items like curtains, tablecloths, and even rugs. &nbsp;Beyond clothing and homeware, cotton\'s strength finds uses in industrial applications like tents, tarpaulins, and even some medical supplies. &nbsp;Cotton can even be blended with other fibers to create new textures and functionalities, making it a truly essential part of the textile world.</p>', 'cotton-product', NULL, '1278931715929892.jpg', '0', '1', NULL, NULL, NULL, '2022-09-23 12:05:58', '2024-05-17 11:11:32'),
(25, 0, 'Hemp Product', '<p>Hemp, a relative of cannabis, boasts a surprising range of uses. The strong, fibrous stalks of the hemp plant are processed into durable materials like rope, twine, and even high-quality textiles for clothing and home furnishings. &nbsp;Hemp\'s eco-friendly properties are another perk - it grows quickly and requires minimal water and pesticides. &nbsp;But hemp\'s uses extend far beyond textiles. The nutritious seeds are a complete protein source and can be eaten whole, ground into flour, or pressed for oil used in cooking and beauty products. The woody inner core of the hemp stalk (hemp hurd) finds uses in construction materials like insulation and even hempcrete, a sustainable alternative to concrete. Overall, hemp is a versatile and valuable resource with applications in many aspects of our lives.</p>', 'hemp-product', NULL, NULL, '0', '1', NULL, NULL, NULL, '2022-09-23 12:06:07', '2024-05-17 11:13:31'),
(26, 0, 'Felt Product', '<p>Felt products are made from a unique fabric created by compressing and interlocking fibers together. Traditionally made from wool or animal fur, felt can now also be crafted from synthetic fibers like acrylic. &nbsp;This process creates a soft, dense material with various uses. Felt\'s sound-absorbing properties make it ideal for insulation and padding, while its durability allows it to be used in everything from hats and bags to polishing cloths and industrial filters. &nbsp;In the creative world, felt\'s versatility shines in craft projects, toys, and home decor. &nbsp;With its wide range of colors and thicknesses, felt offers endless possibilities for creative expression and functional applications.</p>', 'felt-product', NULL, NULL, '0', '1', NULL, NULL, NULL, '2022-09-23 12:06:15', '2024-05-17 11:16:12'),
(27, 1, 'Cashmere Sweater', NULL, 'cashmere-sweater', NULL, NULL, '0', '1', NULL, NULL, NULL, '2022-09-23 12:06:44', '2022-09-23 12:06:44'),
(28, 1, 'Cashmere Blanket', NULL, 'cashmere-blanket', NULL, NULL, '0', '1', NULL, NULL, NULL, '2022-09-23 12:07:02', '2022-09-23 12:07:02'),
(29, 1, 'Cashmere Outer', NULL, 'cashmere-outer', NULL, NULL, '0', '1', NULL, NULL, NULL, '2022-09-23 12:07:14', '2022-09-23 12:07:14'),
(30, 1, 'Cashmere Scarf', NULL, 'cashmere-scarf', NULL, NULL, '0', '1', NULL, NULL, NULL, '2022-09-23 12:07:25', '2022-09-23 12:07:25'),
(31, 1, 'Cashmere Accessories', NULL, 'cashmere-accessories', NULL, NULL, '0', '1', NULL, NULL, NULL, '2022-09-23 12:07:38', '2022-09-23 12:07:38'),
(32, 22, 'Embroidery Shawl', NULL, 'embroidery-shawl', NULL, NULL, '0', '1', NULL, NULL, NULL, '2022-09-23 12:50:36', '2022-09-23 12:50:36'),
(33, 22, 'Cashmere Double Shed Color Shawl', NULL, 'cashmere-double-shed-color-shawl', NULL, NULL, '0', '1', NULL, NULL, NULL, '2022-09-23 12:52:37', '2022-09-23 12:52:37'),
(34, 22, 'Cashmere Natural Border Shawl', NULL, 'cashmere-natural-border-shawl', NULL, NULL, '0', '1', NULL, NULL, NULL, '2022-09-23 12:53:06', '2022-09-23 12:53:06'),
(35, 22, 'Cashmere Natural Thick Shawl', NULL, 'cashmere-natural-thick-shawl', NULL, NULL, '0', '1', NULL, NULL, NULL, '2022-09-23 12:54:04', '2022-09-23 12:54:04'),
(36, 22, 'Fine Wool Shawl', NULL, 'fine-wool-shawl', NULL, NULL, '0', '1', '<p>Fine Wool Shawl</p>', '<p>Fine Wool Shawl</p>', NULL, '2022-09-23 12:57:26', '2022-09-23 12:57:26'),
(37, 22, 'Kaju Pashmina Shawl', NULL, 'kaju-pashmina-shawl', NULL, NULL, '0', '1', NULL, NULL, NULL, '2022-09-23 12:57:42', '2022-09-23 12:57:42'),
(38, 22, 'Cashmere Ring Shawl', NULL, 'cashmere-ring-shawl', NULL, NULL, '0', '1', NULL, NULL, NULL, '2022-09-23 12:57:50', '2022-09-23 12:57:50'),
(39, 22, 'Cashmere Natural Shawl', NULL, 'cashmere-natural-shawl', NULL, NULL, '0', '1', NULL, NULL, NULL, '2022-09-23 12:57:59', '2022-09-23 12:57:59'),
(40, 22, 'Color Shawl', NULL, 'color-shawl', NULL, NULL, '0', '1', NULL, NULL, NULL, '2022-09-23 12:58:05', '2022-09-23 12:58:05'),
(46, 23, 'Handmade Singing Bowl', NULL, 'handmade-singing-bowl', NULL, NULL, '0', '1', NULL, NULL, NULL, '2022-09-23 12:59:33', '2022-09-23 12:59:33'),
(47, 23, 'Machinemade Singing Bowl', NULL, 'machinemade-singing-bowl', NULL, NULL, '0', '1', NULL, NULL, NULL, '2022-09-23 12:59:40', '2022-09-23 13:32:38'),
(48, 24, 'Cotton Jackets', NULL, 'cotton-jackets', NULL, NULL, '0', '1', NULL, NULL, NULL, '2022-09-23 12:59:58', '2022-09-23 12:59:58'),
(49, 24, 'Cotton Trousers', NULL, 'cotton-trousers', NULL, NULL, '0', '1', NULL, NULL, NULL, '2022-09-23 13:00:04', '2022-09-23 13:00:04'),
(50, 24, 'Cotton Dress', NULL, 'cotton-dress', NULL, NULL, '0', '1', NULL, NULL, NULL, '2022-09-23 13:33:32', '2022-09-23 13:33:32'),
(51, 24, 'Cotton Tops', NULL, 'cotton-tops', NULL, NULL, '0', '1', NULL, NULL, NULL, '2022-09-23 13:33:39', '2022-09-23 13:33:39'),
(52, 24, 'Cotton Kurta', NULL, 'cotton-kurta', NULL, NULL, '0', '1', NULL, NULL, NULL, '2022-09-23 13:33:46', '2022-09-23 13:33:46'),
(53, 25, 'Hemp Bagpack', NULL, 'hemp-bagpack', NULL, NULL, '0', '1', NULL, NULL, NULL, '2022-09-23 14:23:45', '2022-09-23 14:23:45'),
(54, 25, 'Hemp Kids Bagpack', NULL, 'hemp-kids-bagpack', NULL, NULL, '0', '1', NULL, NULL, NULL, '2022-09-23 14:23:52', '2022-09-23 14:23:52'),
(55, 25, 'Hemp Fanny Bag', NULL, 'hemp-fanny-bag', NULL, NULL, '0', '1', NULL, NULL, NULL, '2022-09-23 14:24:02', '2022-09-23 14:24:02'),
(56, 25, 'Hemp Purse', NULL, 'hemp-purse', NULL, NULL, '0', '1', NULL, NULL, NULL, '2022-09-23 14:24:09', '2022-09-23 14:24:09'),
(57, 25, 'Hemp Hat', NULL, 'hemp-hat', NULL, NULL, '0', '1', NULL, NULL, NULL, '2022-09-23 14:24:16', '2022-09-23 14:24:16'),
(58, 25, 'Hemp Slipper', NULL, 'hemp-slipper', NULL, NULL, '0', '1', NULL, NULL, NULL, '2022-09-23 14:24:23', '2022-09-23 14:24:23'),
(59, 25, 'Handmade Dream Catcher', NULL, 'handmade-dream-catcher', NULL, NULL, '0', '1', NULL, NULL, NULL, '2022-09-23 14:24:30', '2022-09-23 14:24:30'),
(60, 25, 'Hemp Passport Bag', NULL, 'hemp-passport-bag', NULL, NULL, '0', '1', NULL, NULL, NULL, '2022-09-23 14:24:38', '2022-09-23 14:24:38'),
(61, 26, 'Bag', NULL, 'bag', NULL, NULL, '0', '1', NULL, NULL, NULL, '2022-09-23 14:24:57', '2022-09-23 14:24:57'),
(62, 26, 'Decorative Items', NULL, 'decorative-items', NULL, NULL, '0', '1', NULL, NULL, NULL, '2022-09-23 14:25:05', '2022-09-23 14:26:42'),
(63, 26, 'Shoes', NULL, 'shoes', NULL, NULL, '0', '1', NULL, NULL, NULL, '2022-09-23 14:25:15', '2022-09-23 14:25:15'),
(64, 26, 'Hats', NULL, 'hats', NULL, NULL, '0', '1', NULL, NULL, NULL, '2022-09-23 14:25:22', '2022-09-23 14:25:22'),
(65, 26, 'Coaster', NULL, 'coaster', NULL, NULL, '0', '1', NULL, NULL, NULL, '2022-09-23 14:25:30', '2022-09-23 14:25:30'),
(66, 26, 'Purse', NULL, 'purse', NULL, NULL, '0', '1', NULL, NULL, NULL, '2022-09-23 14:25:40', '2022-09-23 14:46:16'),
(71, 32, 'Lavinia Rodriquez', NULL, 'lavinia-rodriquez', '1663938716.jpg', '1663938716.jpg', '0', '1', 'Labore maiores vitae', 'Rerum ut pariatur D', NULL, '2022-09-23 17:11:56', '2022-09-23 17:11:56'),
(72, 40, 'Ifeoma Acevedo', '<p>sdfsdf</p>', 'ifeoma-acevedo', '1663938820.jpg', '1663938820.jpg', '1', '1', 'Vel deleniti reicien', 'Voluptate consequatu', NULL, '2022-09-23 17:13:40', '2022-09-23 17:13:40'),
(75, 0, 'Handicraft Product', '<p>Handicraft products are items made by hand using traditional skills and techniques, as opposed to being mass-produced in factories. These products encompass a vast range of objects, from textiles and clothing &nbsp;to jewelry, pottery, furniture, and decorative items. The uses of handicraft products are just as diverse as the products themselves. They can be utilitarian, serving practical purposes in everyday life. For example, handwoven baskets might be used for storage, while hand-carved wooden spoons are used for eating. Handicrafts can also be decorative, adding a touch of beauty and cultural heritage to a home. A hand-painted ceramic vase or a woven tapestry can be a stunning focal point in any room.</p>\r\n<p data-sourcepos=\"6:1-6:372\">Furthermore, handicraft products can hold cultural significance, reflecting the traditions and heritage of a particular region or community. The techniques used to create these items are often passed down through generations, preserving cultural knowledge and skills. Owning a handicraft product can be a way to connect with a particular culture or support local artisans.</p>', 'handicraft-product', NULL, '1612451715930614.jpg', '1', '1', NULL, NULL, NULL, '2024-05-16 13:38:14', '2024-05-17 11:23:34'),
(76, 0, 'Wooden Craft Product', '<p>Wooden handicraft products are objects created by skilled artisans using wood as the primary material. Unlike factory-made furniture or tools, wooden handicrafts are crafted by hand using traditional techniques and tools. This results in unique pieces that often showcase intricate designs, beautiful wood grains, and the individual artist\'s touch. Wooden handicrafts can also hold cultural significance, reflecting the traditional woodworking skills and design sensibilities of a particular region. Owning a piece of wooden handicraft can be a way to connect with a specific culture or support local artisans who keep these traditions alive.</p>', 'wooden-craft-product', NULL, '5487331715930828.jpg', '1', '1', NULL, NULL, NULL, '2024-05-16 13:38:40', '2024-05-17 11:27:08'),
(77, 0, 'Ritual Product', '<p>Ritual products can also refer to<strong> </strong>items used in specific religious or cultural ceremonies. This encompasses a wide range of objects, from incense burners employed in meditation to prayer beads used in rosaries. It could include smudging sticks for cleansing rituals or specific clothing worn during traditional ceremonies. These products carry symbolic meaning and contribute to creating a specific atmosphere or following established practices.</p>', 'ritual-product', NULL, '1839661715931008.jpg', '1', '1', NULL, NULL, NULL, '2024-05-16 13:38:58', '2024-05-17 11:30:08'),
(78, 0, 'Thanka', '<p>Thanka (also spelled thangka, tangka, or tanka) are vibrant Tibetan Buddhist paintings. Made on cotton or silk, they typically depict Buddhist deities, scenes from the Buddha\'s life, or mandalas (symbolic diagrams). These aren\'t just beautiful works of art; they serve several purposes. Thanka function as teaching tools, illustrating Buddhist concepts and stories for followers. They are also used as aids to meditation, allowing practitioners to focus on the depicted deity or scene. Thanka can be displayed in homes and monasteries, serving as a focal point for worship and prayer. These portable paintings are also used in religious ceremonies, adding a visual dimension to rituals.</p>', 'thanka', NULL, NULL, '1', '1', NULL, NULL, NULL, '2024-05-16 13:39:15', '2024-05-17 13:56:15');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
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
  `title` varchar(191) NOT NULL,
  `slug` varchar(191) DEFAULT NULL,
  `caption` varchar(191) DEFAULT NULL,
  `content` varchar(191) DEFAULT NULL,
  `picture` text DEFAULT NULL,
  `link` varchar(191) DEFAULT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cl_banner`
--

INSERT INTO `cl_banner` (`id`, `title`, `slug`, `caption`, `content`, `picture`, `link`, `status`, `created_at`, `updated_at`) VALUES
(6, 'Cloud-Soft Pure Cashmere', NULL, 'Banner 1', 'Slow Fashion to Help our Environment', '1663065849.jpg', 'https://www.youtube.com/', '1', '2020-12-28 16:56:17', '2022-09-13 06:40:25'),
(7, 'The Summer Collection', NULL, 'Banner 2', 'Luxurious Cashmere Softness', '1663065898.jpg', 'https://www.youtube.com/watch?v=cB-ZRijjIMY', '1', '2020-12-28 16:56:35', '2022-09-13 05:06:11'),
(8, 'Banner test', NULL, NULL, 'Banner 3', '1663065912.jpg', NULL, '1', '2020-12-28 16:56:52', '2022-10-13 13:39:30'),
(12, 'Handicraft special', NULL, 'special products', 'content goes here', '1663928922.jpg', 'https://demo5.lakhetech.com/category/yak-wool-dhaka-blanket', '1', '2022-09-22 10:00:53', '2022-09-23 14:30:04');

-- --------------------------------------------------------

--
-- Table structure for table `cl_settings`
--

CREATE TABLE `cl_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) DEFAULT NULL,
  `site_description` longtext DEFAULT NULL,
  `about` text DEFAULT NULL,
  `objective` varchar(191) DEFAULT NULL,
  `mission` varchar(191) DEFAULT NULL,
  `vision` varchar(191) DEFAULT NULL,
  `twitter_link` varchar(191) DEFAULT NULL,
  `googleplus_link` varchar(191) DEFAULT NULL,
  `instagram_link` varchar(191) DEFAULT NULL,
  `facebook_link` varchar(191) DEFAULT NULL,
  `contact_no` varchar(191) DEFAULT NULL,
  `address` varchar(191) DEFAULT NULL,
  `website` varchar(191) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `google_map` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cl_settings`
--

INSERT INTO `cl_settings` (`id`, `title`, `site_description`, `about`, `objective`, `mission`, `vision`, `twitter_link`, `googleplus_link`, `instagram_link`, `facebook_link`, `contact_no`, `address`, `website`, `email`, `google_map`, `created_at`, `updated_at`) VALUES
(1, 'Himalayan Handicraft', 'Himalayan Handicraft', 'Himalayan Handicraft', 'Himalayan Handicraft', 'Himalayan Handicraft', 'Himalayan Handicraft', 'Himalayan Handicraft', 'Himalayan Handicraft', 'Himalayan Handicraft', 'Himalayan Handicraft', '948989', 'Himalayan Handicraft', 'Himalayan Handicraft', 'Himalayan Handicraft', 'Himalayan Handicraft', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
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
  `stock` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `color_stocks`
--

INSERT INTO `color_stocks` (`id`, `product_id`, `color_id`, `stock`, `created_at`, `updated_at`) VALUES
(17, 10, 1, 4, NULL, NULL),
(18, 10, 2, 5, NULL, NULL),
(35, 21, 1, 3, NULL, NULL),
(42, 21, 2, 646, NULL, NULL),
(53, 30, 2, 9, NULL, NULL),
(54, 31, 2, 2, NULL, NULL),
(56, 33, 4, 0, NULL, NULL),
(57, 34, 4, 10, NULL, NULL),
(58, 36, 4, 0, NULL, NULL),
(59, 37, 4, 10, NULL, NULL),
(60, 38, 4, 0, NULL, NULL),
(61, 38, 2, 0, NULL, NULL),
(63, 40, 1, 7, NULL, NULL),
(64, 41, 1, 10, NULL, NULL),
(66, 41, 2, 13, NULL, NULL),
(68, 41, 3, 2, NULL, NULL),
(69, 41, 4, 8, NULL, NULL),
(70, 43, 1, 100, NULL, NULL),
(71, 44, 1, 10, NULL, NULL),
(72, 45, 1, 10, NULL, NULL),
(73, 46, 1, 10, NULL, NULL),
(74, 47, 1, 10, NULL, NULL),
(75, 48, 1, 10, NULL, NULL),
(76, 49, 1, 10, NULL, NULL),
(77, 50, 1, 8, NULL, NULL),
(78, 51, 1, 10, NULL, NULL),
(79, 52, 1, 10, NULL, NULL),
(80, 53, 1, 10, NULL, NULL),
(81, 54, 1, 10, NULL, NULL),
(82, 55, 1, 10, NULL, NULL),
(83, 56, 1, 10, NULL, NULL),
(84, 57, 1, 10, NULL, NULL),
(85, 58, 1, 10, NULL, NULL),
(86, 59, 1, 10, NULL, NULL),
(87, 60, 1, 10, NULL, NULL),
(88, 61, 1, 10, NULL, NULL),
(89, 62, 1, 10, NULL, NULL),
(90, 63, 1, 10, NULL, NULL),
(91, 64, 1, 10, NULL, NULL),
(92, 65, 1, 10, NULL, NULL),
(93, 66, 1, 10, NULL, NULL),
(94, 67, 1, 10, NULL, NULL),
(95, 68, 1, 10, NULL, NULL),
(96, 69, 1, 10, NULL, NULL),
(97, 70, 1, 10, NULL, NULL),
(98, 71, 1, 10, NULL, NULL),
(99, 72, 1, 10, NULL, NULL),
(100, 73, 1, 10, NULL, NULL),
(101, 74, 1, 10, NULL, NULL),
(102, 75, 1, 10, NULL, NULL),
(103, 76, 1, 10, NULL, NULL),
(104, 77, 1, 10, NULL, NULL),
(105, 78, 1, 10, NULL, NULL),
(106, 79, 1, 10, NULL, NULL),
(107, 80, 1, 10, NULL, NULL),
(108, 81, 1, 10, NULL, NULL),
(109, 82, 1, 10, NULL, NULL),
(110, 83, 1, 10, NULL, NULL),
(111, 84, 1, 10, NULL, NULL),
(112, 85, 1, 10, NULL, NULL),
(113, 86, 1, 10, NULL, NULL),
(114, 87, 1, 10, NULL, NULL),
(115, 88, 1, 10, NULL, NULL),
(116, 89, 1, 10, NULL, NULL),
(117, 90, 1, 10, NULL, NULL),
(118, 91, 1, 10, NULL, NULL),
(119, 92, 1, 10, NULL, NULL),
(120, 93, 1, 10, NULL, NULL),
(121, 94, 1, 10, NULL, NULL),
(122, 95, 1, 10, NULL, NULL),
(123, 96, 1, 10, NULL, NULL),
(124, 97, 1, 10, NULL, NULL),
(125, 98, 1, 10, NULL, NULL),
(126, 99, 1, 10, NULL, NULL),
(127, 100, 1, 10, NULL, NULL),
(128, 101, 1, 10, NULL, NULL),
(129, 102, 1, 10, NULL, NULL),
(130, 103, 1, 10, NULL, NULL),
(131, 104, 1, 10, NULL, NULL),
(132, 105, 1, 10, NULL, NULL),
(133, 106, 1, 10, NULL, NULL),
(134, 107, 1, 10, NULL, NULL),
(135, 108, 1, 10, NULL, NULL),
(136, 109, 1, 10, NULL, NULL),
(137, 110, 1, 10, NULL, NULL),
(138, 111, 1, 10, NULL, NULL),
(139, 112, 1, 10, NULL, NULL),
(140, 113, 1, 10, NULL, NULL),
(141, 114, 1, 10, NULL, NULL),
(142, 115, 1, 10, NULL, NULL),
(143, 116, 1, 10, NULL, NULL),
(144, 117, 1, 10, NULL, NULL),
(145, 118, 1, 10, NULL, NULL),
(146, 119, 1, 10, NULL, NULL),
(147, 120, 1, 10, NULL, NULL),
(148, 121, 1, 10, NULL, NULL),
(149, 122, 1, 10, NULL, NULL),
(150, 123, 1, 10, NULL, NULL),
(151, 124, 1, 10, NULL, NULL),
(152, 125, 1, 10, NULL, NULL),
(153, 126, 1, 10, NULL, NULL),
(154, 127, 1, 10, NULL, NULL),
(155, 128, 1, 10, NULL, NULL),
(156, 129, 1, 10, NULL, NULL),
(157, 130, 1, 10, NULL, NULL),
(158, 131, 1, 10, NULL, NULL),
(159, 132, 1, 10, NULL, NULL),
(160, 133, 1, 10, NULL, NULL),
(161, 134, 1, 10, NULL, NULL),
(162, 135, 1, 10, NULL, NULL),
(163, 136, 1, 10, NULL, NULL),
(164, 137, 1, 10, NULL, NULL),
(165, 138, 1, 10, NULL, NULL),
(166, 139, 1, 10, NULL, NULL),
(167, 140, 1, 10, NULL, NULL),
(168, 141, 1, 10, NULL, NULL),
(169, 142, 1, 10, NULL, NULL),
(170, 143, 1, 10, NULL, NULL),
(171, 144, 1, 10, NULL, NULL),
(172, 145, 1, 10, NULL, NULL),
(173, 146, 1, 10, NULL, NULL),
(174, 147, 1, 10, NULL, NULL),
(175, 148, 1, 10, NULL, NULL),
(176, 149, 1, 10, NULL, NULL),
(177, 150, 1, 10, NULL, NULL),
(178, 151, 1, 10, NULL, NULL),
(179, 152, 1, 10, NULL, NULL),
(180, 153, 1, 10, NULL, NULL),
(181, 154, 1, 10, NULL, NULL),
(182, 155, 1, 10, NULL, NULL),
(183, 156, 1, 10, NULL, NULL),
(184, 157, 1, 4, NULL, NULL),
(185, 158, 1, 10, NULL, NULL),
(186, 159, 1, 10, NULL, NULL),
(187, 160, 1, 10, NULL, NULL),
(188, 161, 1, 10, NULL, NULL),
(189, 162, 1, 10, NULL, NULL),
(190, 163, 1, 10, NULL, NULL),
(191, 164, 1, 10, NULL, NULL),
(192, 165, 1, 10, NULL, NULL),
(193, 166, 1, 10, NULL, NULL),
(194, 167, 1, 10, NULL, NULL),
(195, 168, 1, 10, NULL, NULL),
(196, 169, 1, 10, NULL, NULL),
(197, 170, 1, 10, NULL, NULL),
(198, 171, 1, 10, NULL, NULL),
(199, 172, 1, 10, NULL, NULL),
(200, 173, 1, 10, NULL, NULL),
(201, 174, 1, 10, NULL, NULL),
(202, 175, 1, 10, NULL, NULL),
(203, 176, 1, 10, NULL, NULL),
(204, 177, 1, 10, NULL, NULL),
(205, 178, 1, 10, NULL, NULL),
(206, 179, 1, 10, NULL, NULL),
(207, 180, 1, 10, NULL, NULL),
(208, 181, 1, 10, NULL, NULL),
(209, 182, 1, 10, NULL, NULL),
(210, 183, 1, 10, NULL, NULL),
(211, 184, 1, 10, NULL, NULL),
(212, 185, 1, 10, NULL, NULL),
(213, 186, 1, 10, NULL, NULL),
(214, 187, 1, 10, NULL, NULL),
(215, 188, 1, 10, NULL, NULL),
(216, 189, 1, 10, NULL, NULL),
(217, 190, 1, 10, NULL, NULL),
(218, 191, 1, 10, NULL, NULL),
(219, 192, 1, 10, NULL, NULL),
(220, 193, 1, 10, NULL, NULL),
(221, 194, 1, 10, NULL, NULL),
(222, 195, 1, 10, NULL, NULL),
(223, 196, 1, 10, NULL, NULL),
(224, 197, 1, 10, NULL, NULL),
(225, 198, 1, 10, NULL, NULL),
(226, 199, 1, 10, NULL, NULL),
(227, 200, 1, 10, NULL, NULL),
(228, 201, 1, 10, NULL, NULL),
(229, 202, 1, 10, NULL, NULL),
(230, 203, 1, 10, NULL, NULL),
(231, 204, 1, 10, NULL, NULL),
(232, 205, 1, 10, NULL, NULL),
(233, 206, 1, 10, NULL, NULL),
(234, 207, 1, 10, NULL, NULL),
(235, 208, 1, 10, NULL, NULL),
(236, 209, 1, 10, NULL, NULL),
(237, 210, 1, 10, NULL, NULL),
(238, 211, 1, 10, NULL, NULL),
(239, 212, 1, 10, NULL, NULL),
(240, 213, 1, 10, NULL, NULL),
(241, 214, 1, 10, NULL, NULL),
(242, 215, 1, 10, NULL, NULL),
(243, 216, 1, 10, NULL, NULL),
(244, 217, 1, 10, NULL, NULL),
(245, 218, 1, 10, NULL, NULL),
(246, 219, 1, 10, NULL, NULL),
(247, 220, 1, 10, NULL, NULL),
(248, 221, 1, 10, NULL, NULL),
(249, 222, 1, 10, NULL, NULL),
(250, 223, 1, 10, NULL, NULL),
(251, 224, 1, 10, NULL, NULL),
(252, 225, 1, 10, NULL, NULL),
(253, 226, 1, 10, NULL, NULL),
(254, 227, 1, 10, NULL, NULL),
(255, 228, 1, 10, NULL, NULL),
(256, 229, 1, 10, NULL, NULL),
(257, 230, 1, 10, NULL, NULL),
(258, 231, 1, 10, NULL, NULL),
(259, 232, 1, 10, NULL, NULL),
(260, 233, 1, 10, NULL, NULL),
(261, 234, 1, 10, NULL, NULL),
(262, 235, 1, 10, NULL, NULL),
(263, 236, 1, 10, NULL, NULL),
(264, 237, 1, 10, NULL, NULL),
(265, 238, 1, 10, NULL, NULL),
(266, 239, 1, 10, NULL, NULL),
(267, 240, 1, 10, NULL, NULL),
(268, 241, 1, 10, NULL, NULL),
(269, 242, 1, 10, NULL, NULL),
(270, 243, 1, 10, NULL, NULL),
(271, 244, 1, 10, NULL, NULL),
(272, 245, 1, 10, NULL, NULL),
(273, 246, 1, 10, NULL, NULL),
(274, 247, 1, 10, NULL, NULL),
(275, 248, 1, 10, NULL, NULL),
(276, 249, 1, 10, NULL, NULL),
(277, 250, 1, 10, NULL, NULL),
(278, 251, 1, 10, NULL, NULL),
(279, 251, 2, 20, NULL, NULL),
(280, 251, 3, 30, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `configurations`
--

CREATE TABLE `configurations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `configuration_key` varchar(191) NOT NULL,
  `configuration_value` longtext DEFAULT NULL,
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
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
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
  `title` varchar(191) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `descriptions`
--

INSERT INTO `descriptions` (`id`, `product_id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(17, 10, 'home', '<p>Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui. Excepteur sint occaecat cupidatat non proident.</p>', '2020-10-20 23:45:43', '2022-09-21 06:29:43'),
(18, 10, 'profile', '<p>Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui. Excepteur sint occaecat cupidatat non proident.</p>', '2020-10-20 23:45:43', '2022-09-21 06:29:43'),
(32, 21, '940', '51', '2020-11-05 01:16:36', '2020-11-05 01:16:36'),
(34, 18, 'best ejans', '<p>best quality jeans</p>', '2020-11-18 00:35:52', '2022-09-22 05:38:41'),
(37, 21, NULL, NULL, '2020-12-16 03:53:00', '2020-12-16 03:53:00'),
(48, 30, NULL, NULL, '2021-01-31 11:44:45', '2021-01-31 11:44:45'),
(49, 31, NULL, NULL, '2021-02-23 12:25:19', '2021-02-23 12:25:19'),
(51, 33, NULL, NULL, '2021-02-24 12:36:12', '2021-02-24 12:36:12'),
(52, 34, NULL, NULL, '2021-02-24 12:42:35', '2021-02-24 12:42:35'),
(53, 36, NULL, NULL, '2021-02-24 12:50:37', '2021-02-24 12:50:37'),
(54, 37, NULL, NULL, '2021-02-24 13:41:09', '2021-02-24 13:41:09'),
(55, 38, NULL, NULL, '2021-02-24 14:06:21', '2021-02-24 14:06:21'),
(57, 40, NULL, NULL, '2022-09-19 00:18:06', '2022-09-19 00:18:06'),
(58, 41, NULL, NULL, '2022-09-19 02:17:46', '2022-09-19 02:17:46'),
(62, 42, NULL, NULL, '2022-09-22 09:46:03', '2022-09-22 09:46:03'),
(63, 43, NULL, NULL, '2023-05-24 12:50:55', '2024-05-30 10:49:54'),
(64, 44, NULL, NULL, '2023-05-24 13:18:25', '2023-05-24 13:18:25'),
(65, 45, NULL, NULL, '2023-05-25 10:43:13', '2023-05-25 10:43:13'),
(66, 46, NULL, NULL, '2023-05-25 11:04:01', '2023-05-25 11:04:01'),
(67, 47, NULL, NULL, '2023-05-25 11:06:17', '2023-05-25 11:06:17'),
(68, 48, NULL, NULL, '2023-05-25 11:08:52', '2023-05-25 11:08:52'),
(69, 49, NULL, NULL, '2023-05-25 11:11:34', '2023-05-25 11:11:34'),
(70, 50, NULL, NULL, '2023-05-25 11:14:59', '2023-05-25 11:14:59'),
(71, 51, NULL, NULL, '2023-05-25 11:24:13', '2023-05-25 11:24:13'),
(72, 52, NULL, NULL, '2023-05-25 11:26:26', '2023-05-25 11:26:26'),
(73, 53, NULL, NULL, '2023-05-25 11:28:01', '2023-05-25 11:28:01'),
(74, 54, NULL, NULL, '2023-05-25 11:30:14', '2023-05-25 11:30:14'),
(75, 55, NULL, NULL, '2023-05-25 11:32:26', '2023-05-25 11:32:26'),
(76, 56, NULL, NULL, '2023-05-25 11:34:29', '2023-05-25 11:34:29'),
(77, 57, NULL, NULL, '2023-05-26 11:58:41', '2023-05-26 11:58:41'),
(78, 58, NULL, NULL, '2023-05-26 12:06:08', '2023-05-26 12:06:08'),
(79, 59, NULL, NULL, '2023-05-26 12:08:54', '2023-05-26 12:08:54'),
(80, 60, NULL, NULL, '2023-05-26 12:11:24', '2023-05-26 12:11:24'),
(81, 61, NULL, NULL, '2023-05-26 12:13:11', '2023-05-26 12:13:11'),
(82, 62, NULL, NULL, '2023-05-26 12:15:12', '2023-05-26 12:15:12'),
(83, 63, NULL, NULL, '2023-05-26 12:17:01', '2023-05-26 12:17:01'),
(84, 64, NULL, NULL, '2023-05-26 12:19:52', '2023-05-26 12:19:52'),
(85, 65, NULL, NULL, '2023-05-26 12:21:53', '2023-05-26 12:21:53'),
(86, 66, NULL, NULL, '2023-05-26 12:24:13', '2023-05-26 12:24:13'),
(87, 67, NULL, NULL, '2023-05-26 12:26:30', '2023-05-26 12:26:30'),
(88, 68, NULL, NULL, '2023-05-26 12:28:24', '2023-05-26 12:28:24'),
(89, 69, NULL, NULL, '2023-05-26 12:30:34', '2023-05-26 12:30:34'),
(90, 70, NULL, NULL, '2023-05-26 12:32:28', '2023-05-26 12:32:28'),
(91, 71, NULL, NULL, '2023-05-26 12:34:30', '2023-05-26 12:34:30'),
(92, 72, NULL, NULL, '2023-05-26 12:36:16', '2023-05-26 12:36:16'),
(93, 73, NULL, NULL, '2023-05-26 12:38:12', '2023-05-26 12:38:12'),
(94, 74, NULL, NULL, '2023-05-26 12:39:37', '2023-05-26 12:39:37'),
(95, 75, NULL, NULL, '2023-05-26 12:41:20', '2023-05-26 12:41:20'),
(96, 76, NULL, NULL, '2023-05-26 12:42:50', '2023-05-26 12:42:50'),
(97, 77, NULL, NULL, '2023-05-26 12:44:14', '2023-05-26 12:44:14'),
(98, 78, NULL, NULL, '2023-05-26 12:46:41', '2023-05-26 12:46:41'),
(99, 79, NULL, NULL, '2023-05-29 10:25:39', '2023-05-29 10:25:39'),
(100, 80, NULL, NULL, '2023-05-29 10:26:58', '2023-05-29 10:26:58'),
(101, 81, NULL, NULL, '2023-05-29 10:28:26', '2023-05-29 10:28:26'),
(102, 82, NULL, NULL, '2023-05-29 10:31:22', '2023-05-29 10:31:22'),
(103, 83, NULL, NULL, '2023-05-29 10:32:43', '2023-05-29 10:32:43'),
(104, 84, NULL, NULL, '2023-05-29 10:34:16', '2023-05-29 10:34:16'),
(105, 85, NULL, NULL, '2023-05-29 10:36:05', '2023-05-29 10:36:05'),
(106, 86, NULL, NULL, '2023-05-29 10:37:39', '2023-05-29 10:37:39'),
(107, 87, NULL, NULL, '2023-05-29 10:39:25', '2023-05-29 10:39:25'),
(108, 88, NULL, NULL, '2023-05-29 10:40:52', '2023-05-29 10:40:52'),
(109, 89, NULL, NULL, '2023-05-29 10:42:26', '2023-05-29 10:42:26'),
(110, 90, NULL, NULL, '2023-05-29 10:43:45', '2023-05-29 10:43:45'),
(111, 91, NULL, NULL, '2023-05-29 10:45:23', '2023-05-29 10:45:23'),
(112, 92, NULL, NULL, '2023-05-29 10:47:00', '2023-05-29 10:47:00'),
(113, 93, NULL, NULL, '2023-05-29 10:48:25', '2023-05-29 10:48:25'),
(114, 94, NULL, NULL, '2023-05-29 10:49:38', '2023-05-29 10:49:38'),
(115, 95, NULL, NULL, '2023-05-29 10:51:13', '2023-05-29 10:51:13'),
(116, 96, NULL, NULL, '2023-05-29 10:52:37', '2023-05-29 10:52:37'),
(117, 97, NULL, NULL, '2023-05-29 10:54:18', '2023-05-29 10:54:18'),
(118, 98, NULL, NULL, '2023-05-29 10:55:38', '2023-05-29 10:55:38'),
(119, 99, NULL, NULL, '2023-05-29 10:57:35', '2023-05-29 10:57:35'),
(120, 100, NULL, NULL, '2023-05-29 10:59:04', '2023-05-29 10:59:04'),
(121, 101, NULL, NULL, '2023-05-29 11:00:41', '2023-05-29 11:00:41'),
(122, 102, NULL, NULL, '2023-05-29 11:02:09', '2023-05-29 11:02:09'),
(123, 103, NULL, NULL, '2023-05-29 11:03:50', '2023-05-29 11:03:50'),
(124, 104, NULL, NULL, '2023-05-29 11:05:24', '2023-05-29 11:05:24'),
(125, 105, NULL, NULL, '2023-05-29 11:06:49', '2023-05-29 11:06:49'),
(126, 106, NULL, NULL, '2023-05-29 11:08:31', '2023-05-29 11:08:31'),
(127, 107, NULL, NULL, '2023-05-29 11:10:34', '2023-05-29 11:10:34'),
(128, 108, NULL, NULL, '2023-05-29 11:12:31', '2023-05-29 11:12:31'),
(129, 109, NULL, NULL, '2023-05-29 11:13:59', '2023-05-29 11:13:59'),
(130, 110, NULL, NULL, '2023-05-29 11:20:00', '2023-05-29 11:20:00'),
(131, 111, NULL, NULL, '2023-05-29 11:22:44', '2023-05-29 11:22:44'),
(132, 112, NULL, NULL, '2023-05-29 11:27:03', '2023-05-29 11:27:03'),
(133, 113, NULL, NULL, '2023-05-29 11:29:30', '2023-05-29 11:29:30'),
(134, 114, NULL, NULL, '2023-05-29 11:31:23', '2023-05-29 11:31:23'),
(135, 115, NULL, NULL, '2023-05-29 11:36:27', '2023-05-29 11:36:27'),
(136, 116, NULL, NULL, '2023-05-29 11:38:46', '2023-05-29 11:38:46'),
(137, 117, NULL, NULL, '2023-05-29 11:43:14', '2023-05-29 11:43:14'),
(138, 118, NULL, NULL, '2023-05-29 11:46:11', '2023-05-29 11:46:11'),
(139, 119, NULL, NULL, '2023-05-29 12:07:16', '2023-05-29 12:07:16'),
(140, 120, NULL, NULL, '2023-05-29 12:09:32', '2023-05-29 12:09:32'),
(141, 121, NULL, NULL, '2023-05-29 12:11:04', '2023-05-29 12:11:04'),
(142, 122, NULL, NULL, '2023-05-29 12:12:50', '2023-05-29 12:12:50'),
(143, 123, NULL, NULL, '2023-05-29 12:14:10', '2023-05-29 12:14:10'),
(144, 124, NULL, NULL, '2023-05-29 12:16:01', '2023-05-29 12:16:01'),
(145, 125, NULL, NULL, '2023-05-29 12:17:05', '2023-05-29 12:17:05'),
(146, 126, NULL, NULL, '2023-05-29 12:18:56', '2023-05-29 12:18:56'),
(147, 127, NULL, NULL, '2023-05-30 10:11:50', '2023-05-30 10:11:50'),
(148, 128, NULL, NULL, '2023-05-30 10:13:13', '2023-05-30 10:13:13'),
(149, 129, NULL, NULL, '2023-05-30 10:14:42', '2023-05-30 10:14:42'),
(150, 130, NULL, NULL, '2023-05-30 10:17:12', '2023-05-30 10:17:12'),
(151, 131, NULL, NULL, '2023-05-30 10:19:19', '2023-05-30 10:19:19'),
(152, 132, NULL, NULL, '2023-05-30 10:22:05', '2023-05-30 10:22:05'),
(153, 133, NULL, NULL, '2023-05-30 10:24:55', '2023-05-30 10:24:55'),
(154, 134, NULL, NULL, '2023-05-30 10:27:40', '2023-05-30 10:27:40'),
(155, 135, NULL, NULL, '2023-05-30 10:29:13', '2023-05-30 10:29:13'),
(156, 136, NULL, NULL, '2023-05-30 10:32:58', '2023-05-30 10:32:58'),
(157, 137, NULL, NULL, '2023-05-30 10:34:18', '2023-05-30 10:34:18'),
(158, 138, NULL, NULL, '2023-05-30 10:35:14', '2023-05-30 10:35:14'),
(159, 139, NULL, NULL, '2023-05-30 10:36:53', '2023-05-30 10:36:53'),
(160, 140, NULL, NULL, '2023-05-30 10:38:57', '2023-05-30 10:38:57'),
(161, 141, NULL, NULL, '2023-05-30 10:40:51', '2023-05-30 10:40:51'),
(162, 142, NULL, NULL, '2023-05-30 10:43:18', '2023-05-30 10:43:18'),
(163, 143, NULL, NULL, '2023-05-30 10:45:43', '2023-05-30 10:45:43'),
(164, 144, NULL, NULL, '2023-05-30 10:48:50', '2023-05-30 10:48:50'),
(165, 145, NULL, NULL, '2023-05-30 10:50:32', '2023-05-30 10:50:32'),
(166, 146, NULL, NULL, '2023-05-30 10:57:08', '2023-05-30 10:57:08'),
(167, 147, NULL, NULL, '2023-05-30 10:59:16', '2023-05-30 10:59:16'),
(168, 148, NULL, NULL, '2023-05-30 11:01:18', '2023-05-30 11:01:18'),
(169, 149, NULL, NULL, '2023-05-30 11:04:00', '2023-05-30 11:04:00'),
(170, 150, NULL, NULL, '2023-05-30 11:07:19', '2023-05-30 11:07:19'),
(171, 151, NULL, NULL, '2023-05-30 11:10:44', '2023-05-30 11:10:44'),
(172, 152, NULL, NULL, '2023-05-30 11:12:34', '2023-05-30 11:12:34'),
(173, 153, NULL, NULL, '2023-05-30 11:15:03', '2023-05-30 11:15:03'),
(174, 154, NULL, NULL, '2023-05-30 11:16:15', '2023-05-30 11:16:15'),
(175, 155, NULL, NULL, '2023-05-30 11:17:43', '2023-05-30 11:17:43'),
(176, 156, NULL, NULL, '2023-05-30 11:18:56', '2023-05-30 11:18:56'),
(177, 157, NULL, NULL, '2023-06-13 10:23:58', '2023-06-13 10:23:58'),
(178, 158, NULL, NULL, '2023-06-13 10:29:30', '2023-06-13 10:29:30'),
(179, 159, NULL, NULL, '2023-06-14 10:29:16', '2023-06-14 10:29:16'),
(180, 160, NULL, NULL, '2023-06-14 10:30:57', '2023-06-14 10:30:57'),
(181, 161, NULL, NULL, '2023-06-14 10:32:50', '2023-06-14 10:32:50'),
(182, 162, NULL, NULL, '2023-06-14 10:39:58', '2023-06-14 10:39:58'),
(183, 163, NULL, NULL, '2023-06-14 10:41:44', '2023-06-14 10:41:44'),
(184, 164, NULL, NULL, '2023-06-14 10:43:31', '2023-06-14 10:43:31'),
(185, 165, NULL, NULL, '2023-06-14 10:45:15', '2023-06-14 10:45:15'),
(186, 166, NULL, NULL, '2023-06-14 10:46:27', '2023-06-14 10:46:27'),
(187, 167, NULL, NULL, '2023-06-14 10:49:50', '2023-06-14 10:49:50'),
(188, 168, NULL, NULL, '2023-06-14 10:51:46', '2023-06-14 10:51:46'),
(189, 169, NULL, NULL, '2023-06-14 10:53:59', '2023-06-14 10:53:59'),
(190, 170, NULL, NULL, '2023-06-14 10:55:45', '2023-06-14 10:55:45'),
(191, 171, NULL, NULL, '2023-06-14 10:59:23', '2023-06-14 10:59:23'),
(192, 172, NULL, NULL, '2023-06-14 11:01:34', '2023-06-14 11:01:34'),
(193, 173, NULL, NULL, '2023-06-14 11:03:51', '2023-06-14 11:03:51'),
(194, 174, NULL, NULL, '2023-06-14 11:06:20', '2023-06-14 11:06:20'),
(195, 175, NULL, NULL, '2023-06-14 11:09:13', '2023-06-14 11:09:13'),
(196, 176, NULL, NULL, '2023-06-14 11:11:27', '2023-06-14 11:11:27'),
(197, 177, NULL, NULL, '2023-06-14 11:13:59', '2023-06-14 11:13:59'),
(198, 178, NULL, NULL, '2023-06-14 11:15:29', '2023-06-14 11:15:29'),
(199, 179, NULL, NULL, '2023-06-14 12:57:14', '2023-06-14 12:57:14'),
(200, 180, NULL, NULL, '2023-06-14 12:59:08', '2023-06-14 12:59:08'),
(201, 181, NULL, NULL, '2023-06-14 13:00:49', '2023-06-14 13:00:49'),
(202, 182, NULL, NULL, '2023-06-14 13:03:22', '2023-06-14 13:03:22'),
(203, 183, NULL, NULL, '2023-06-14 13:05:52', '2023-06-14 13:05:52'),
(204, 184, NULL, NULL, '2023-06-14 13:08:02', '2023-06-14 13:08:02'),
(205, 185, NULL, NULL, '2023-06-14 13:10:08', '2023-06-14 13:10:08'),
(206, 186, NULL, NULL, '2023-06-14 13:12:45', '2023-06-14 13:12:45'),
(207, 187, NULL, NULL, '2023-06-14 13:14:48', '2023-06-14 13:14:48'),
(208, 188, NULL, NULL, '2023-06-14 13:17:17', '2023-06-14 13:17:17'),
(209, 189, NULL, NULL, '2023-06-14 13:19:39', '2023-06-14 13:19:39'),
(210, 190, NULL, NULL, '2023-06-14 13:23:22', '2023-06-14 13:23:22'),
(211, 191, NULL, NULL, '2023-06-14 13:26:06', '2023-06-14 13:26:06'),
(212, 192, NULL, NULL, '2023-06-14 13:29:01', '2023-06-14 13:29:01'),
(213, 193, NULL, NULL, '2023-06-14 13:30:31', '2023-06-14 13:30:31'),
(214, 194, NULL, NULL, '2023-06-14 13:32:25', '2023-06-14 13:32:25'),
(215, 195, NULL, NULL, '2023-06-14 13:34:34', '2023-06-14 13:34:34'),
(216, 196, NULL, NULL, '2023-06-14 13:36:09', '2023-06-14 13:36:09'),
(217, 197, NULL, NULL, '2023-06-14 13:37:29', '2023-06-14 13:37:29'),
(218, 198, NULL, NULL, '2023-06-14 13:38:59', '2023-06-14 13:38:59'),
(219, 199, NULL, NULL, '2023-06-14 13:40:20', '2023-06-14 13:40:20'),
(220, 200, NULL, NULL, '2023-06-15 10:49:21', '2023-06-15 10:49:21'),
(221, 201, NULL, NULL, '2023-06-15 10:51:09', '2023-06-15 10:51:09'),
(222, 202, NULL, NULL, '2023-06-15 10:52:49', '2023-06-15 10:52:49'),
(223, 203, NULL, NULL, '2023-06-15 10:54:10', '2023-06-15 10:54:10'),
(224, 204, NULL, NULL, '2023-06-15 10:55:40', '2023-06-15 10:55:40'),
(225, 205, NULL, NULL, '2023-06-15 10:57:35', '2023-06-15 10:57:35'),
(226, 206, NULL, NULL, '2023-06-15 10:59:12', '2023-06-15 10:59:12'),
(227, 207, NULL, NULL, '2023-06-15 11:00:59', '2023-06-15 11:00:59'),
(228, 208, NULL, NULL, '2023-06-15 11:02:41', '2023-06-15 11:02:41'),
(229, 209, NULL, NULL, '2023-06-15 11:04:06', '2023-06-15 11:04:06'),
(230, 210, NULL, NULL, '2023-06-15 11:32:35', '2023-06-15 11:32:35'),
(231, 211, NULL, NULL, '2023-06-15 11:36:00', '2023-06-15 11:36:00'),
(232, 212, NULL, NULL, '2023-06-15 11:38:39', '2023-06-15 11:38:39'),
(233, 213, NULL, NULL, '2023-06-15 11:40:16', '2023-06-15 11:40:16'),
(234, 214, NULL, NULL, '2023-06-15 11:41:50', '2023-06-15 11:41:50'),
(235, 215, NULL, NULL, '2023-06-15 11:43:09', '2023-06-15 11:43:09'),
(236, 216, NULL, NULL, '2023-06-15 11:45:17', '2023-06-15 11:45:17'),
(237, 217, NULL, NULL, '2023-06-15 11:47:50', '2023-06-15 11:47:50'),
(238, 218, NULL, NULL, '2023-06-15 11:49:34', '2023-06-15 11:49:34'),
(239, 219, NULL, NULL, '2023-06-15 11:50:57', '2023-06-15 11:50:57'),
(240, 220, NULL, NULL, '2023-06-15 12:12:07', '2023-06-15 12:12:07'),
(241, 221, NULL, NULL, '2023-06-15 12:13:27', '2023-06-15 12:13:27'),
(242, 222, NULL, NULL, '2023-06-15 12:14:40', '2023-06-15 12:14:40'),
(243, 223, NULL, NULL, '2023-06-15 12:16:49', '2023-06-15 12:16:49'),
(244, 224, NULL, NULL, '2023-06-15 12:18:59', '2023-06-15 12:18:59'),
(245, 225, NULL, NULL, '2023-06-15 12:19:59', '2023-06-15 12:19:59'),
(246, 226, NULL, NULL, '2023-06-15 12:22:02', '2023-06-15 12:22:02'),
(247, 227, NULL, NULL, '2023-06-15 12:23:45', '2023-06-15 12:23:45'),
(248, 228, NULL, NULL, '2023-06-15 12:24:41', '2023-06-15 12:24:41'),
(249, 229, NULL, NULL, '2023-06-15 12:26:15', '2023-06-15 12:26:15'),
(250, 230, NULL, NULL, '2023-06-15 12:27:39', '2023-06-15 12:27:39'),
(251, 231, NULL, NULL, '2023-06-15 12:28:57', '2023-06-15 12:28:57'),
(252, 232, NULL, NULL, '2023-06-15 12:34:40', '2023-06-15 12:34:40'),
(253, 233, NULL, NULL, '2023-06-15 12:36:06', '2023-06-15 12:36:06'),
(254, 234, NULL, NULL, '2023-06-15 12:37:36', '2023-06-15 12:37:36'),
(255, 235, NULL, NULL, '2023-06-15 12:39:18', '2023-06-15 12:39:18'),
(256, 236, NULL, NULL, '2023-06-15 12:41:37', '2023-06-15 12:41:37'),
(257, 237, NULL, NULL, '2023-06-15 12:43:26', '2023-06-15 12:43:26'),
(258, 238, NULL, NULL, '2023-06-15 12:45:01', '2023-06-15 12:45:01'),
(259, 239, NULL, NULL, '2023-06-15 12:46:37', '2023-06-15 12:46:37'),
(260, 240, NULL, NULL, '2023-06-15 13:26:54', '2023-06-15 13:26:54'),
(261, 241, NULL, NULL, '2023-06-15 13:28:22', '2023-06-15 13:28:22'),
(262, 242, NULL, NULL, '2023-06-15 13:30:09', '2023-06-15 13:30:09'),
(263, 243, NULL, NULL, '2023-06-15 13:31:26', '2023-06-15 13:31:26'),
(264, 244, NULL, NULL, '2023-06-15 13:32:40', '2023-06-15 13:32:40'),
(265, 245, NULL, NULL, '2023-06-15 13:34:20', '2023-06-15 13:34:20'),
(266, 246, NULL, NULL, '2023-06-15 13:35:42', '2023-06-15 13:35:42'),
(267, 247, NULL, NULL, '2023-06-15 13:37:09', '2023-06-15 13:37:09'),
(268, 248, NULL, NULL, '2023-06-15 13:38:47', '2023-06-15 13:38:47'),
(269, 249, NULL, NULL, '2023-06-15 13:40:16', '2023-06-15 13:40:16'),
(270, 250, NULL, NULL, '2023-06-15 13:42:09', '2023-06-15 13:42:09'),
(271, 251, NULL, NULL, '2025-07-21 04:06:32', '2025-07-21 04:06:32');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `description` longtext NOT NULL,
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
  `image` varchar(191) NOT NULL,
  `is_main` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `product_id`, `image`, `is_main`, `created_at`, `updated_at`) VALUES
(107, 10, '1662623711137.jpg', 1, '2022-09-08 02:10:11', '2022-09-08 02:10:31'),
(108, 21, '1662631397244.jpg', 1, '2022-09-08 04:18:17', '2022-09-08 04:18:28'),
(109, 33, '1662631654759.jpg', 1, '2022-09-08 04:22:34', '2022-09-08 04:23:36'),
(110, 36, '1662708959723.jpg', 1, '2022-09-09 01:50:59', '2022-09-09 01:51:06'),
(111, 38, '1663068258455.jpg', 1, '2022-09-13 05:39:18', '2022-09-13 05:39:25'),
(112, 37, '1663068728205.jpg', 1, '2022-09-13 05:47:08', '2022-09-13 05:47:14'),
(113, 34, '1663069060364.jpg', 1, '2022-09-13 05:52:40', '2022-09-13 05:52:49'),
(115, 31, '1663069358294.jpg', 1, '2022-09-13 05:57:38', '2022-09-13 05:57:57'),
(116, 30, '1663069484238.jpg', 1, '2022-09-13 05:59:44', '2022-09-13 05:59:49'),
(118, 36, '1663136339214.jpg', 0, '2022-09-14 00:33:59', '2022-09-14 00:33:59'),
(120, 33, '1663136363212.jpg', 0, '2022-09-14 00:34:23', '2022-09-14 00:34:23'),
(121, 33, '1663136363950.jpg', 0, '2022-09-14 00:34:23', '2022-09-14 00:34:23'),
(122, 10, '1663136373642.jpg', 0, '2022-09-14 00:34:33', '2022-09-14 00:34:33'),
(123, 37, '1663136383593.jpg', 0, '2022-09-14 00:34:43', '2022-09-14 00:34:43'),
(124, 38, '1663136393943.jpg', 0, '2022-09-14 00:34:53', '2022-09-14 00:34:53'),
(125, 21, '1663136402650.jpg', 0, '2022-09-14 00:35:02', '2022-09-14 00:35:02'),
(126, 38, '1663139650106.jpg', 0, '2022-09-14 01:29:10', '2022-09-14 01:29:10'),
(127, 18, '1663141344515.jpg', 1, '2022-09-14 01:57:24', '2022-09-14 01:57:29'),
(128, 18, '1663141394485.jpg', 0, '2022-09-14 01:58:14', '2022-09-14 01:58:14'),
(130, 40, '1663567386248.jpg', 1, '2022-09-19 00:18:06', '2022-09-19 00:18:06'),
(131, 41, '1663574566306.jpg', 1, '2022-09-19 02:17:46', '2022-10-10 10:52:40'),
(151, 42, '1663929096376.jpg', 1, '2022-09-23 14:31:36', '2022-09-23 14:31:44'),
(152, 43, '1684918255637.jpg', 1, '2023-05-24 12:50:55', '2023-05-24 12:50:55'),
(153, 43, '1684918255786.jpg', 0, '2023-05-24 12:50:55', '2023-05-24 12:54:34'),
(154, 43, '1684918255204.jpg', 0, '2023-05-24 12:50:55', '2023-05-24 12:54:34'),
(155, 43, '1684918255656.jpg', 0, '2023-05-24 12:50:55', '2023-05-24 12:54:34'),
(156, 44, '1684919905340.jpg', 1, '2023-05-24 13:18:25', '2023-05-24 13:18:25'),
(157, 44, '1684919905367.jpg', 0, '2023-05-24 13:18:25', '2023-05-25 11:37:52'),
(158, 44, '1684919905603.jpg', 0, '2023-05-24 13:18:25', '2023-05-25 11:37:52'),
(159, 44, '1684919905741.jpg', 0, '2023-05-24 13:18:25', '2023-05-25 11:37:52'),
(160, 34, '1684921027329.jpg', 0, '2023-05-24 13:37:07', '2023-05-24 13:37:07'),
(161, 34, '1684921027331.jpg', 0, '2023-05-24 13:37:07', '2023-05-24 13:37:07'),
(162, 34, '1684921027513.jpg', 0, '2023-05-24 13:37:07', '2023-05-24 13:37:07'),
(163, 45, '1684996993249.jpg', 1, '2023-05-25 10:43:13', '2023-05-25 10:43:13'),
(164, 45, '1684996993528.jpg', 0, '2023-05-25 10:43:13', '2023-05-25 11:37:45'),
(165, 45, '1684996993488.jpg', 0, '2023-05-25 10:43:13', '2023-05-25 11:37:45'),
(166, 45, '1684996993705.jpg', 0, '2023-05-25 10:43:13', '2023-05-25 11:37:45'),
(167, 46, '1684998241635.jpg', 1, '2023-05-25 11:04:01', '2023-05-25 11:04:01'),
(168, 46, '1684998241804.jpg', 0, '2023-05-25 11:04:01', '2023-05-25 11:37:39'),
(169, 46, '1684998241326.jpg', 0, '2023-05-25 11:04:01', '2023-05-25 11:37:39'),
(170, 46, '1684998241299.jpg', 0, '2023-05-25 11:04:01', '2023-05-25 11:37:39'),
(171, 47, '1684998377473.jpg', 1, '2023-05-25 11:06:17', '2023-05-25 11:06:17'),
(172, 47, '1684998377704.jpg', 0, '2023-05-25 11:06:17', '2023-05-25 11:37:07'),
(173, 47, '1684998377384.jpg', 0, '2023-05-25 11:06:17', '2023-05-25 11:37:07'),
(174, 47, '1684998377393.jpg', 0, '2023-05-25 11:06:17', '2023-05-25 11:37:07'),
(175, 48, '1684998532346.jpg', 1, '2023-05-25 11:08:52', '2023-05-25 11:08:52'),
(176, 48, '1684998532809.jpg', 0, '2023-05-25 11:08:52', '2023-05-25 11:37:00'),
(177, 48, '1684998532170.jpg', 0, '2023-05-25 11:08:52', '2023-05-25 11:37:00'),
(178, 48, '1684998532517.jpg', 0, '2023-05-25 11:08:52', '2023-05-25 11:37:00'),
(179, 49, '1684998694587.jpg', 1, '2023-05-25 11:11:34', '2023-05-25 11:11:34'),
(180, 49, '1684998694792.jpg', 0, '2023-05-25 11:11:34', '2023-05-25 11:36:52'),
(181, 50, '1684998899300.jpg', 1, '2023-05-25 11:14:59', '2023-05-25 11:14:59'),
(182, 50, '1684998899368.jpg', 0, '2023-05-25 11:14:59', '2023-05-25 11:36:10'),
(183, 50, '1684998899781.jpg', 0, '2023-05-25 11:14:59', '2023-05-25 11:36:10'),
(184, 50, '1684998899769.jpg', 0, '2023-05-25 11:14:59', '2023-05-25 11:36:10'),
(185, 51, '1684999453245.jpg', 1, '2023-05-25 11:24:13', '2023-05-25 11:24:13'),
(186, 51, '1684999453692.jpg', 0, '2023-05-25 11:24:13', '2023-05-25 11:36:02'),
(187, 51, '1684999453848.jpg', 0, '2023-05-25 11:24:13', '2023-05-25 11:36:02'),
(188, 51, '1684999453908.jpg', 0, '2023-05-25 11:24:13', '2023-05-25 11:36:02'),
(189, 52, '1684999586193.jpg', 1, '2023-05-25 11:26:26', '2023-05-25 11:26:26'),
(190, 52, '1684999586414.jpg', 0, '2023-05-25 11:26:26', '2023-05-25 11:35:50'),
(191, 52, '1684999586539.jpg', 0, '2023-05-25 11:26:26', '2023-05-25 11:35:50'),
(192, 52, '1684999586886.jpg', 0, '2023-05-25 11:26:26', '2023-05-25 11:35:50'),
(193, 53, '1684999681373.jpg', 1, '2023-05-25 11:28:01', '2023-05-25 11:28:01'),
(194, 53, '1684999681131.jpg', 0, '2023-05-25 11:28:01', '2023-05-25 11:35:42'),
(195, 54, '1684999814695.jpg', 1, '2023-05-25 11:30:14', '2023-05-25 11:30:14'),
(196, 54, '1684999814974.jpg', 0, '2023-05-25 11:30:14', '2023-05-25 11:35:35'),
(197, 54, '1684999814596.jpg', 0, '2023-05-25 11:30:14', '2023-05-25 11:35:35'),
(198, 54, '1684999814709.jpg', 0, '2023-05-25 11:30:14', '2023-05-25 11:35:35'),
(199, 55, '1684999946944.jpg', 1, '2023-05-25 11:32:26', '2023-05-25 11:32:26'),
(200, 55, '1684999946977.jpg', 0, '2023-05-25 11:32:26', '2023-05-25 11:35:24'),
(201, 55, '1684999946953.jpg', 0, '2023-05-25 11:32:26', '2023-05-25 11:35:24'),
(202, 56, '1685000069387.jpg', 1, '2023-05-25 11:34:29', '2023-05-25 11:34:29'),
(203, 56, '1685000069177.jpg', 0, '2023-05-25 11:34:29', '2023-05-25 11:34:49'),
(204, 56, '1685000069753.jpg', 0, '2023-05-25 11:34:29', '2023-05-25 11:34:49'),
(205, 56, '1685000069156.jpg', 0, '2023-05-25 11:34:29', '2023-05-25 11:34:49'),
(206, 57, '1685087921433.jpg', 1, '2023-05-26 11:58:41', '2023-05-26 11:58:41'),
(207, 57, '1685087921464.jpg', 0, '2023-05-26 11:58:41', '2023-05-29 10:23:15'),
(208, 57, '1685087921929.jpg', 0, '2023-05-26 11:58:41', '2023-05-29 10:23:15'),
(209, 57, '1685087921786.jpg', 0, '2023-05-26 11:58:41', '2023-05-29 10:23:15'),
(210, 58, '1685088368874.jpg', 1, '2023-05-26 12:06:08', '2023-05-26 12:06:08'),
(211, 58, '1685088368959.jpg', 0, '2023-05-26 12:06:08', '2023-05-29 10:23:05'),
(212, 58, '1685088368261.jpg', 0, '2023-05-26 12:06:08', '2023-05-29 10:23:05'),
(213, 58, '1685088368455.jpg', 0, '2023-05-26 12:06:08', '2023-05-29 10:23:05'),
(214, 59, '1685088534318.jpg', 1, '2023-05-26 12:08:54', '2023-05-26 12:08:54'),
(215, 59, '1685088534943.jpg', 0, '2023-05-26 12:08:54', '2023-05-29 10:22:19'),
(216, 59, '1685088534535.jpg', 0, '2023-05-26 12:08:54', '2023-05-29 10:22:19'),
(217, 59, '1685088534428.jpg', 0, '2023-05-26 12:08:54', '2023-05-29 10:22:19'),
(218, 60, '1685088684610.jpg', 1, '2023-05-26 12:11:24', '2023-05-26 12:11:24'),
(219, 60, '1685088684529.jpg', 0, '2023-05-26 12:11:24', '2023-05-29 10:22:04'),
(220, 60, '1685088684617.jpg', 0, '2023-05-26 12:11:24', '2023-05-29 10:22:04'),
(221, 60, '1685088684484.jpg', 0, '2023-05-26 12:11:24', '2023-05-29 10:22:04'),
(222, 61, '1685088791686.jpg', 1, '2023-05-26 12:13:11', '2023-05-26 12:13:11'),
(223, 61, '1685088791379.jpg', 0, '2023-05-26 12:13:11', '2023-05-29 10:21:52'),
(224, 61, '1685088791572.jpg', 0, '2023-05-26 12:13:11', '2023-05-29 10:21:52'),
(225, 61, '1685088791475.jpg', 0, '2023-05-26 12:13:11', '2023-05-29 10:21:52'),
(226, 62, '1685088912673.jpg', 1, '2023-05-26 12:15:12', '2023-05-26 12:15:12'),
(227, 62, '1685088912282.jpg', 0, '2023-05-26 12:15:12', '2023-05-29 10:21:39'),
(228, 62, '1685088912360.jpg', 0, '2023-05-26 12:15:12', '2023-05-29 10:21:39'),
(229, 62, '1685088912380.jpg', 0, '2023-05-26 12:15:12', '2023-05-29 10:21:39'),
(230, 63, '1685089021668.jpg', 1, '2023-05-26 12:17:01', '2023-05-26 12:17:01'),
(231, 63, '1685089021212.jpg', 0, '2023-05-26 12:17:01', '2023-05-29 10:21:24'),
(232, 63, '1685089021481.jpg', 0, '2023-05-26 12:17:01', '2023-05-29 10:21:24'),
(233, 64, '1685089192771.jpg', 1, '2023-05-26 12:19:52', '2023-05-26 12:19:52'),
(234, 64, '1685089192744.jpg', 0, '2023-05-26 12:19:52', '2023-05-29 10:21:17'),
(235, 64, '1685089192279.jpg', 0, '2023-05-26 12:19:52', '2023-05-29 10:21:17'),
(236, 64, '1685089192833.jpg', 0, '2023-05-26 12:19:52', '2023-05-29 10:21:17'),
(237, 65, '1685089313846.jpg', 1, '2023-05-26 12:21:53', '2023-05-26 12:21:53'),
(238, 65, '1685089313565.jpg', 0, '2023-05-26 12:21:53', '2023-05-29 10:21:04'),
(239, 65, '1685089313962.jpg', 0, '2023-05-26 12:21:53', '2023-05-29 10:21:04'),
(240, 65, '1685089313114.jpg', 0, '2023-05-26 12:21:53', '2023-05-29 10:21:04'),
(241, 66, '1685089453584.jpg', 1, '2023-05-26 12:24:13', '2023-05-26 12:24:13'),
(242, 66, '1685089453744.jpg', 0, '2023-05-26 12:24:13', '2023-05-29 10:20:57'),
(243, 66, '1685089453603.jpg', 0, '2023-05-26 12:24:13', '2023-05-29 10:20:57'),
(244, 66, '1685089453767.jpg', 0, '2023-05-26 12:24:13', '2023-05-29 10:20:57'),
(245, 67, '1685089590731.jpg', 1, '2023-05-26 12:26:30', '2023-05-26 12:26:30'),
(246, 67, '1685089590230.jpg', 0, '2023-05-26 12:26:30', '2023-05-29 10:20:47'),
(247, 67, '1685089590979.jpg', 0, '2023-05-26 12:26:30', '2023-05-29 10:20:47'),
(248, 68, '1685089704848.jpg', 1, '2023-05-26 12:28:24', '2023-05-26 12:28:24'),
(249, 68, '1685089704708.jpg', 0, '2023-05-26 12:28:24', '2023-05-29 10:20:38'),
(250, 68, '1685089704469.jpg', 0, '2023-05-26 12:28:24', '2023-05-29 10:20:38'),
(251, 68, '1685089704925.jpg', 0, '2023-05-26 12:28:24', '2023-05-29 10:20:38'),
(252, 69, '1685089834410.jpg', 1, '2023-05-26 12:30:34', '2023-05-26 12:30:34'),
(253, 69, '1685089834182.jpg', 0, '2023-05-26 12:30:34', '2023-05-29 10:19:40'),
(254, 69, '1685089834787.jpg', 0, '2023-05-26 12:30:34', '2023-05-29 10:19:40'),
(255, 69, '1685089834950.jpg', 0, '2023-05-26 12:30:34', '2023-05-29 10:19:40'),
(256, 70, '1685089948204.jpg', 1, '2023-05-26 12:32:28', '2023-05-26 12:32:28'),
(257, 70, '1685089948104.jpg', 0, '2023-05-26 12:32:28', '2023-05-29 10:19:28'),
(258, 70, '1685089948688.jpg', 0, '2023-05-26 12:32:28', '2023-05-29 10:19:28'),
(259, 70, '1685089948307.jpg', 0, '2023-05-26 12:32:28', '2023-05-29 10:19:28'),
(260, 71, '1685090070284.jpg', 1, '2023-05-26 12:34:30', '2023-05-29 10:19:18'),
(261, 71, '1685090070898.jpg', 0, '2023-05-26 12:34:30', '2023-05-29 10:19:18'),
(262, 71, '1685090070556.jpg', 0, '2023-05-26 12:34:30', '2023-05-29 10:19:18'),
(263, 71, '1685090070841.jpg', 0, '2023-05-26 12:34:30', '2023-05-29 10:19:18'),
(264, 72, '1685090176448.jpg', 1, '2023-05-26 12:36:16', '2023-05-26 12:36:16'),
(265, 72, '1685090176377.jpg', 0, '2023-05-26 12:36:16', '2023-05-29 10:19:04'),
(266, 72, '1685090176153.jpg', 0, '2023-05-26 12:36:16', '2023-05-29 10:19:04'),
(267, 72, '1685090176716.jpg', 0, '2023-05-26 12:36:16', '2023-05-29 10:19:04'),
(268, 73, '1685090292733.jpg', 1, '2023-05-26 12:38:12', '2023-05-26 12:38:12'),
(269, 73, '1685090292301.jpg', 0, '2023-05-26 12:38:12', '2023-05-29 10:18:52'),
(270, 73, '1685090292967.jpg', 0, '2023-05-26 12:38:12', '2023-05-29 10:18:52'),
(271, 73, '1685090292122.jpg', 0, '2023-05-26 12:38:12', '2023-05-29 10:18:52'),
(272, 74, '1685090377737.jpg', 1, '2023-05-26 12:39:37', '2023-05-26 12:39:37'),
(273, 74, '1685090377111.jpg', 0, '2023-05-26 12:39:37', '2023-05-29 10:18:40'),
(274, 74, '1685090377606.jpg', 0, '2023-05-26 12:39:37', '2023-05-29 10:18:40'),
(275, 74, '1685090377166.jpg', 0, '2023-05-26 12:39:37', '2023-05-29 10:18:40'),
(276, 75, '1685090480293.jpg', 1, '2023-05-26 12:41:20', '2023-05-26 12:41:20'),
(277, 75, '1685090480104.jpg', 0, '2023-05-26 12:41:20', '2023-05-29 10:18:30'),
(278, 75, '1685090480770.jpg', 0, '2023-05-26 12:41:20', '2023-05-29 10:18:30'),
(279, 75, '1685090480358.jpg', 0, '2023-05-26 12:41:20', '2023-05-29 10:18:30'),
(280, 76, '1685090570909.jpg', 1, '2023-05-26 12:42:50', '2023-05-26 12:42:50'),
(281, 76, '1685090570719.jpg', 0, '2023-05-26 12:42:50', '2023-05-29 10:18:20'),
(282, 76, '1685090570483.jpg', 0, '2023-05-26 12:42:50', '2023-05-29 10:18:20'),
(283, 76, '1685090570264.jpg', 0, '2023-05-26 12:42:50', '2023-05-29 10:18:20'),
(284, 77, '1685090654558.jpg', 1, '2023-05-26 12:44:14', '2023-05-26 12:44:14'),
(285, 77, '1685090654644.jpg', 0, '2023-05-26 12:44:14', '2023-05-29 10:18:05'),
(286, 77, '1685090654237.jpg', 0, '2023-05-26 12:44:14', '2023-05-29 10:18:05'),
(287, 77, '1685090654171.jpg', 0, '2023-05-26 12:44:14', '2023-05-29 10:18:05'),
(288, 78, '1685090801351.jpg', 1, '2023-05-26 12:46:41', '2023-05-26 12:46:41'),
(289, 78, '1685090801669.jpg', 0, '2023-05-26 12:46:41', '2023-05-29 10:17:50'),
(290, 78, '1685090801256.jpg', 0, '2023-05-26 12:46:41', '2023-05-29 10:17:50'),
(291, 78, '1685090801460.jpg', 0, '2023-05-26 12:46:41', '2023-05-29 10:17:50'),
(292, 79, '1685341539923.jpg', 1, '2023-05-29 10:25:39', '2023-05-29 10:25:39'),
(293, 79, '1685341539149.jpg', 0, '2023-05-29 10:25:39', '2023-05-29 11:54:58'),
(294, 79, '1685341539580.jpg', 0, '2023-05-29 10:25:39', '2023-05-29 11:54:58'),
(295, 79, '1685341539830.jpg', 0, '2023-05-29 10:25:39', '2023-05-29 11:54:58'),
(296, 80, '1685341618565.jpg', 1, '2023-05-29 10:26:58', '2023-05-29 10:26:58'),
(297, 80, '1685341618784.jpg', 0, '2023-05-29 10:26:58', '2023-05-29 11:55:08'),
(298, 80, '1685341618255.jpg', 0, '2023-05-29 10:26:58', '2023-05-29 11:55:08'),
(299, 81, '1685341706778.jpg', 1, '2023-05-29 10:28:26', '2023-05-29 10:28:26'),
(300, 81, '1685341706984.jpg', 0, '2023-05-29 10:28:26', '2023-05-29 11:55:17'),
(301, 81, '1685341706291.jpg', 0, '2023-05-29 10:28:26', '2023-05-29 11:55:17'),
(302, 81, '1685341706539.jpg', 0, '2023-05-29 10:28:26', '2023-05-29 11:55:17'),
(303, 82, '1685341882352.jpg', 1, '2023-05-29 10:31:22', '2023-05-29 10:31:22'),
(304, 82, '1685341882234.jpg', 0, '2023-05-29 10:31:22', '2023-05-29 11:55:28'),
(305, 82, '1685341882724.jpg', 0, '2023-05-29 10:31:22', '2023-05-29 11:55:28'),
(306, 82, '1685341882738.jpg', 0, '2023-05-29 10:31:22', '2023-05-29 11:55:28'),
(307, 83, '1685341963282.jpg', 1, '2023-05-29 10:32:43', '2023-05-29 10:32:43'),
(308, 83, '1685341963871.jpg', 0, '2023-05-29 10:32:43', '2023-05-29 11:55:36'),
(309, 83, '1685341963149.jpg', 0, '2023-05-29 10:32:43', '2023-05-29 11:55:36'),
(310, 83, '1685341963824.jpg', 0, '2023-05-29 10:32:43', '2023-05-29 11:55:36'),
(311, 84, '1685342056822.jpg', 1, '2023-05-29 10:34:16', '2023-05-29 10:34:16'),
(312, 84, '1685342056897.jpg', 0, '2023-05-29 10:34:16', '2023-05-29 11:55:46'),
(313, 84, '1685342056454.jpg', 0, '2023-05-29 10:34:16', '2023-05-29 11:55:46'),
(314, 84, '1685342056234.jpg', 0, '2023-05-29 10:34:16', '2023-05-29 11:55:46'),
(315, 85, '1685342165569.jpg', 1, '2023-05-29 10:36:05', '2023-05-29 10:36:05'),
(316, 85, '1685342165785.jpg', 0, '2023-05-29 10:36:05', '2023-05-29 11:55:55'),
(317, 85, '1685342165659.jpg', 0, '2023-05-29 10:36:05', '2023-05-29 11:55:55'),
(318, 85, '1685342165326.jpg', 0, '2023-05-29 10:36:05', '2023-05-29 11:55:55'),
(319, 86, '1685342259226.jpg', 1, '2023-05-29 10:37:39', '2023-05-29 10:37:39'),
(320, 86, '1685342259559.jpg', 0, '2023-05-29 10:37:39', '2023-05-29 11:56:04'),
(321, 86, '1685342259926.jpg', 0, '2023-05-29 10:37:39', '2023-05-29 11:56:04'),
(322, 86, '1685342259391.jpg', 0, '2023-05-29 10:37:39', '2023-05-29 11:56:04'),
(323, 87, '1685342365158.jpg', 1, '2023-05-29 10:39:25', '2023-05-29 10:39:25'),
(324, 87, '1685342365544.jpg', 0, '2023-05-29 10:39:25', '2023-05-29 11:56:13'),
(325, 87, '1685342365437.jpg', 0, '2023-05-29 10:39:25', '2023-05-29 11:56:13'),
(326, 87, '1685342365646.jpg', 0, '2023-05-29 10:39:25', '2023-05-29 11:56:13'),
(327, 88, '1685342452720.jpg', 1, '2023-05-29 10:40:52', '2023-05-29 10:40:52'),
(328, 88, '1685342452863.jpg', 0, '2023-05-29 10:40:52', '2023-05-29 11:56:23'),
(329, 88, '1685342452794.jpg', 0, '2023-05-29 10:40:52', '2023-05-29 11:56:23'),
(330, 88, '1685342452976.jpg', 0, '2023-05-29 10:40:52', '2023-05-29 11:56:23'),
(331, 89, '1685342546717.jpg', 1, '2023-05-29 10:42:26', '2023-05-29 10:42:26'),
(332, 89, '1685342546684.jpg', 0, '2023-05-29 10:42:26', '2023-05-29 11:52:06'),
(333, 89, '1685342546991.jpg', 0, '2023-05-29 10:42:26', '2023-05-29 11:52:06'),
(334, 89, '1685342546263.jpg', 0, '2023-05-29 10:42:26', '2023-05-29 11:52:06'),
(335, 90, '1685342625674.jpg', 1, '2023-05-29 10:43:45', '2023-05-29 10:43:45'),
(336, 90, '1685342625354.jpg', 0, '2023-05-29 10:43:45', '2023-05-29 11:52:16'),
(337, 90, '1685342625870.jpg', 0, '2023-05-29 10:43:45', '2023-05-29 11:52:16'),
(338, 90, '1685342625722.jpg', 0, '2023-05-29 10:43:45', '2023-05-29 11:52:16'),
(339, 91, '1685342723210.jpg', 1, '2023-05-29 10:45:23', '2023-05-29 10:45:23'),
(340, 91, '1685342723511.jpg', 0, '2023-05-29 10:45:23', '2023-05-29 11:52:31'),
(341, 91, '1685342723682.jpg', 0, '2023-05-29 10:45:23', '2023-05-29 11:52:31'),
(342, 91, '1685342723408.jpg', 0, '2023-05-29 10:45:23', '2023-05-29 11:52:31'),
(343, 92, '1685342820178.jpg', 1, '2023-05-29 10:47:00', '2023-05-29 10:47:00'),
(344, 92, '1685342820409.jpg', 0, '2023-05-29 10:47:00', '2023-05-29 11:52:39'),
(345, 92, '1685342820571.jpg', 0, '2023-05-29 10:47:00', '2023-05-29 11:52:39'),
(346, 92, '1685342820852.jpg', 0, '2023-05-29 10:47:00', '2023-05-29 11:52:39'),
(347, 93, '1685342905391.jpg', 1, '2023-05-29 10:48:25', '2023-05-29 10:48:25'),
(348, 93, '1685342905474.jpg', 0, '2023-05-29 10:48:25', '2023-05-29 11:52:46'),
(349, 93, '1685342905998.jpg', 0, '2023-05-29 10:48:25', '2023-05-29 11:52:46'),
(350, 93, '1685342905155.jpg', 0, '2023-05-29 10:48:25', '2023-05-29 11:52:46'),
(351, 94, '1685342978137.jpg', 1, '2023-05-29 10:49:38', '2023-05-29 10:49:38'),
(352, 94, '1685342978265.jpg', 0, '2023-05-29 10:49:38', '2023-05-29 11:52:58'),
(353, 94, '1685342978364.jpg', 0, '2023-05-29 10:49:38', '2023-05-29 11:52:58'),
(354, 94, '1685342978991.jpg', 0, '2023-05-29 10:49:38', '2023-05-29 11:52:58'),
(355, 95, '1685343073804.jpg', 1, '2023-05-29 10:51:13', '2023-05-29 10:51:13'),
(356, 95, '1685343073201.jpg', 0, '2023-05-29 10:51:13', '2023-05-29 11:53:07'),
(357, 95, '1685343073616.jpg', 0, '2023-05-29 10:51:13', '2023-05-29 11:53:07'),
(358, 95, '1685343073867.jpg', 0, '2023-05-29 10:51:13', '2023-05-29 11:53:07'),
(359, 96, '1685343157796.jpg', 1, '2023-05-29 10:52:37', '2023-05-29 10:52:37'),
(360, 96, '1685343157901.jpg', 0, '2023-05-29 10:52:37', '2023-05-29 11:53:21'),
(361, 96, '1685343157932.jpg', 0, '2023-05-29 10:52:37', '2023-05-29 11:53:21'),
(362, 96, '1685343157670.jpg', 0, '2023-05-29 10:52:37', '2023-05-29 11:53:21'),
(363, 97, '1685343258316.jpg', 1, '2023-05-29 10:54:18', '2023-05-29 10:54:18'),
(364, 97, '1685343258863.jpg', 0, '2023-05-29 10:54:18', '2023-05-29 11:53:33'),
(365, 97, '1685343258783.jpg', 0, '2023-05-29 10:54:18', '2023-05-29 11:53:33'),
(366, 97, '1685343258309.jpg', 0, '2023-05-29 10:54:18', '2023-05-29 11:53:33'),
(367, 98, '1685343338286.jpg', 1, '2023-05-29 10:55:38', '2023-05-29 10:55:38'),
(368, 98, '1685343338437.jpg', 0, '2023-05-29 10:55:38', '2023-05-29 11:53:42'),
(369, 98, '1685343338291.jpg', 0, '2023-05-29 10:55:38', '2023-05-29 11:53:42'),
(370, 98, '1685343338986.jpg', 0, '2023-05-29 10:55:38', '2023-05-29 11:53:42'),
(371, 99, '1685343455454.jpg', 1, '2023-05-29 10:57:35', '2023-05-29 10:57:35'),
(372, 99, '1685343455665.jpg', 0, '2023-05-29 10:57:35', '2023-05-29 11:49:26'),
(373, 100, '1685343544447.jpg', 1, '2023-05-29 10:59:04', '2023-05-29 10:59:04'),
(374, 100, '1685343544152.jpg', 0, '2023-05-29 10:59:04', '2023-05-29 11:49:36'),
(375, 100, '1685343544590.jpg', 0, '2023-05-29 10:59:04', '2023-05-29 11:49:36'),
(376, 100, '1685343544492.jpg', 0, '2023-05-29 10:59:04', '2023-05-29 11:49:36'),
(377, 101, '1685343641369.jpg', 1, '2023-05-29 11:00:41', '2023-05-29 11:00:41'),
(378, 101, '1685343641990.jpg', 0, '2023-05-29 11:00:41', '2023-05-29 11:49:49'),
(379, 101, '1685343641332.jpg', 0, '2023-05-29 11:00:41', '2023-05-29 11:49:49'),
(380, 101, '1685343641861.jpg', 0, '2023-05-29 11:00:41', '2023-05-29 11:49:49'),
(381, 102, '1685343729789.jpg', 1, '2023-05-29 11:02:09', '2023-05-29 11:02:09'),
(382, 102, '1685343729871.jpg', 0, '2023-05-29 11:02:09', '2023-05-29 11:50:01'),
(383, 102, '1685343729424.jpg', 0, '2023-05-29 11:02:09', '2023-05-29 11:50:01'),
(384, 102, '1685343729882.jpg', 0, '2023-05-29 11:02:09', '2023-05-29 11:50:01'),
(385, 103, '1685343830266.jpg', 1, '2023-05-29 11:03:50', '2023-05-29 11:03:50'),
(386, 103, '1685343830844.jpg', 0, '2023-05-29 11:03:50', '2023-05-29 11:50:12'),
(387, 103, '1685343830776.jpg', 0, '2023-05-29 11:03:50', '2023-05-29 11:50:12'),
(388, 103, '1685343830364.jpg', 0, '2023-05-29 11:03:50', '2023-05-29 11:50:12'),
(389, 104, '1685343924721.jpg', 1, '2023-05-29 11:05:24', '2023-05-29 11:05:24'),
(390, 104, '1685343924346.jpg', 0, '2023-05-29 11:05:24', '2023-05-29 11:50:21'),
(391, 104, '1685343924210.jpg', 0, '2023-05-29 11:05:24', '2023-05-29 11:50:21'),
(392, 104, '1685343924432.jpg', 0, '2023-05-29 11:05:24', '2023-05-29 11:50:21'),
(393, 105, '1685344009920.jpg', 1, '2023-05-29 11:06:49', '2023-05-29 11:06:49'),
(394, 105, '1685344009299.jpg', 0, '2023-05-29 11:06:49', '2023-05-29 11:50:30'),
(395, 105, '1685344009126.jpg', 0, '2023-05-29 11:06:49', '2023-05-29 11:50:30'),
(396, 105, '1685344009655.jpg', 0, '2023-05-29 11:06:49', '2023-05-29 11:50:30'),
(397, 106, '1685344111487.jpg', 1, '2023-05-29 11:08:31', '2023-05-29 11:08:31'),
(398, 106, '1685344111395.jpg', 0, '2023-05-29 11:08:31', '2023-05-29 11:50:37'),
(399, 106, '1685344111658.jpg', 0, '2023-05-29 11:08:31', '2023-05-29 11:50:37'),
(400, 106, '1685344111226.jpg', 0, '2023-05-29 11:08:31', '2023-05-29 11:50:37'),
(401, 107, '1685344234657.jpg', 1, '2023-05-29 11:10:34', '2023-05-29 11:10:34'),
(402, 107, '1685344234298.jpg', 0, '2023-05-29 11:10:34', '2023-05-29 11:50:48'),
(403, 107, '1685344234226.jpg', 0, '2023-05-29 11:10:34', '2023-05-29 11:50:48'),
(404, 107, '1685344234457.jpg', 0, '2023-05-29 11:10:34', '2023-05-29 11:50:48'),
(405, 108, '1685344351581.jpg', 1, '2023-05-29 11:12:31', '2023-05-29 11:12:31'),
(406, 108, '1685344351867.jpg', 0, '2023-05-29 11:12:31', '2023-05-29 11:50:59'),
(407, 108, '1685344351820.jpg', 0, '2023-05-29 11:12:31', '2023-05-29 11:50:59'),
(408, 108, '1685344351832.jpg', 0, '2023-05-29 11:12:31', '2023-05-29 11:50:59'),
(409, 109, '1685344439503.jpg', 1, '2023-05-29 11:13:59', '2023-05-29 11:13:59'),
(410, 109, '1685344439723.jpg', 0, '2023-05-29 11:13:59', '2023-05-29 11:48:29'),
(411, 109, '1685344439698.jpg', 0, '2023-05-29 11:13:59', '2023-05-29 11:48:29'),
(412, 109, '1685344439870.jpg', 0, '2023-05-29 11:13:59', '2023-05-29 11:48:29'),
(413, 110, '1685344800848.jpg', 1, '2023-05-29 11:20:00', '2023-05-29 11:20:00'),
(414, 110, '1685344800842.jpg', 0, '2023-05-29 11:20:00', '2023-05-29 11:48:18'),
(415, 110, '1685344800604.jpg', 0, '2023-05-29 11:20:00', '2023-05-29 11:48:18'),
(416, 110, '1685344800171.jpg', 0, '2023-05-29 11:20:00', '2023-05-29 11:48:18'),
(417, 111, '1685344964664.jpg', 1, '2023-05-29 11:22:44', '2023-05-29 11:22:44'),
(418, 111, '1685344964979.jpg', 0, '2023-05-29 11:22:44', '2023-05-29 11:48:07'),
(419, 111, '1685344964240.jpg', 0, '2023-05-29 11:22:44', '2023-05-29 11:48:07'),
(420, 111, '1685344964405.jpg', 0, '2023-05-29 11:22:44', '2023-05-29 11:48:07'),
(421, 112, '1685345223990.jpg', 1, '2023-05-29 11:27:03', '2023-05-29 11:27:03'),
(422, 112, '1685345223441.jpg', 0, '2023-05-29 11:27:03', '2023-05-29 11:47:58'),
(423, 112, '1685345223589.jpg', 0, '2023-05-29 11:27:03', '2023-05-29 11:47:58'),
(424, 112, '1685345223478.jpg', 0, '2023-05-29 11:27:03', '2023-05-29 11:47:58'),
(425, 113, '1685345370386.jpg', 1, '2023-05-29 11:29:30', '2023-05-29 11:29:30'),
(426, 113, '1685345370350.jpg', 0, '2023-05-29 11:29:30', '2023-05-29 11:47:47'),
(427, 113, '1685345370953.jpg', 0, '2023-05-29 11:29:30', '2023-05-29 11:47:47'),
(428, 113, '1685345370961.jpg', 0, '2023-05-29 11:29:30', '2023-05-29 11:47:47'),
(429, 114, '1685345483222.jpg', 1, '2023-05-29 11:31:23', '2023-05-29 11:31:23'),
(430, 114, '1685345483868.jpg', 0, '2023-05-29 11:31:23', '2023-05-29 11:47:39'),
(431, 114, '1685345483610.jpg', 0, '2023-05-29 11:31:23', '2023-05-29 11:47:39'),
(432, 114, '1685345483862.jpg', 0, '2023-05-29 11:31:23', '2023-05-29 11:47:39'),
(433, 115, '1685345787470.jpg', 1, '2023-05-29 11:36:27', '2023-05-29 11:36:27'),
(434, 115, '1685345787432.jpg', 0, '2023-05-29 11:36:27', '2023-05-29 11:47:30'),
(435, 115, '1685345787150.jpg', 0, '2023-05-29 11:36:27', '2023-05-29 11:47:30'),
(436, 115, '1685345787222.jpg', 0, '2023-05-29 11:36:27', '2023-05-29 11:47:30'),
(437, 116, '1685345926362.jpg', 1, '2023-05-29 11:38:46', '2023-05-29 11:38:46'),
(438, 116, '1685345926908.jpg', 0, '2023-05-29 11:38:46', '2023-05-29 11:47:20'),
(439, 116, '1685345926726.jpg', 0, '2023-05-29 11:38:46', '2023-05-29 11:47:20'),
(440, 116, '1685345926878.jpg', 0, '2023-05-29 11:38:46', '2023-05-29 11:47:20'),
(441, 117, '1685346194184.jpg', 1, '2023-05-29 11:43:14', '2023-05-29 11:43:14'),
(442, 117, '1685346194257.jpg', 0, '2023-05-29 11:43:14', '2023-05-29 11:47:01'),
(443, 117, '1685346194399.jpg', 0, '2023-05-29 11:43:14', '2023-05-29 11:47:01'),
(444, 117, '1685346194223.jpg', 0, '2023-05-29 11:43:14', '2023-05-29 11:47:01'),
(445, 118, '1685346371177.jpg', 1, '2023-05-29 11:46:11', '2023-05-29 11:46:11'),
(446, 118, '1685346371190.jpg', 0, '2023-05-29 11:46:11', '2023-05-29 11:46:51'),
(447, 118, '1685346371253.jpg', 0, '2023-05-29 11:46:11', '2023-05-29 11:46:51'),
(448, 118, '1685346371160.jpg', 0, '2023-05-29 11:46:11', '2023-05-29 11:46:51'),
(449, 119, '1685347636695.jpg', 1, '2023-05-29 12:07:16', '2023-05-29 12:07:16'),
(450, 119, '1685347636219.jpg', 1, '2023-05-29 12:07:16', '2023-05-29 12:07:16'),
(451, 120, '1685347772252.jpg', 1, '2023-05-29 12:09:32', '2023-05-29 12:09:32'),
(452, 120, '1685347772579.jpg', 1, '2023-05-29 12:09:32', '2023-05-29 12:09:32'),
(453, 121, '1685347864174.jpg', 1, '2023-05-29 12:11:04', '2023-05-29 12:11:04'),
(454, 121, '1685347864169.jpg', 1, '2023-05-29 12:11:04', '2023-05-29 12:11:04'),
(455, 121, '1685347864994.jpg', 1, '2023-05-29 12:11:04', '2023-05-29 12:11:04'),
(456, 121, '1685347864957.jpg', 1, '2023-05-29 12:11:04', '2023-05-29 12:11:04'),
(457, 122, '1685347970391.jpg', 1, '2023-05-29 12:12:50', '2023-05-29 12:12:50'),
(458, 122, '1685347970457.jpg', 1, '2023-05-29 12:12:50', '2023-05-29 12:12:50'),
(459, 123, '1685348050835.jpg', 1, '2023-05-29 12:14:10', '2023-05-29 12:14:10'),
(460, 123, '1685348050136.jpg', 1, '2023-05-29 12:14:10', '2023-05-29 12:14:10'),
(461, 124, '1685348161858.jpg', 1, '2023-05-29 12:16:01', '2023-05-29 12:16:01'),
(462, 124, '1685348161971.jpg', 1, '2023-05-29 12:16:01', '2023-05-29 12:16:01'),
(463, 125, '1685348225964.jpg', 1, '2023-05-29 12:17:05', '2023-05-29 12:17:05'),
(464, 125, '1685348225861.jpg', 1, '2023-05-29 12:17:05', '2023-05-29 12:17:05'),
(465, 126, '1685348336584.jpg', 1, '2023-05-29 12:18:56', '2023-05-29 12:18:56'),
(466, 126, '1685348336892.jpg', 1, '2023-05-29 12:18:56', '2023-05-29 12:18:56'),
(467, 127, '1685427110610.jpg', 1, '2023-05-30 10:11:50', '2023-05-30 10:11:50'),
(468, 127, '1685427110360.jpg', 1, '2023-05-30 10:11:50', '2023-05-30 10:11:50'),
(469, 128, '1685427193269.jpg', 1, '2023-05-30 10:13:13', '2023-05-30 10:13:13'),
(470, 128, '1685427193752.jpg', 1, '2023-05-30 10:13:13', '2023-05-30 10:13:13'),
(471, 129, '1685427282883.jpg', 1, '2023-05-30 10:14:42', '2023-05-30 10:14:42'),
(472, 129, '1685427282992.jpg', 1, '2023-05-30 10:14:42', '2023-05-30 10:14:42'),
(473, 130, '1685427432625.jpg', 1, '2023-05-30 10:17:12', '2023-05-30 10:17:12'),
(474, 130, '1685427432219.jpg', 1, '2023-05-30 10:17:12', '2023-05-30 10:17:12'),
(475, 131, '1685427559463.jpg', 1, '2023-05-30 10:19:19', '2023-05-30 10:19:19'),
(476, 131, '1685427559792.jpg', 1, '2023-05-30 10:19:19', '2023-05-30 10:19:19'),
(477, 132, '1685427725797.jpg', 1, '2023-05-30 10:22:05', '2023-05-30 10:22:05'),
(478, 132, '1685427725278.jpg', 1, '2023-05-30 10:22:05', '2023-05-30 10:22:05'),
(479, 133, '1685427895222.jpg', 1, '2023-05-30 10:24:55', '2023-05-30 10:24:55'),
(480, 133, '1685427895785.jpg', 1, '2023-05-30 10:24:55', '2023-05-30 10:24:55'),
(481, 134, '1685428060422.jpg', 1, '2023-05-30 10:27:40', '2023-05-30 10:27:40'),
(482, 134, '1685428060566.jpg', 1, '2023-05-30 10:27:40', '2023-05-30 10:27:40'),
(483, 135, '1685428153554.jpg', 1, '2023-05-30 10:29:13', '2023-05-30 10:29:13'),
(484, 135, '1685428153800.jpg', 1, '2023-05-30 10:29:13', '2023-05-30 10:29:13'),
(485, 136, '1685428378924.jpg', 1, '2023-05-30 10:32:58', '2023-05-30 10:32:58'),
(486, 136, '1685428378142.jpg', 1, '2023-05-30 10:32:58', '2023-05-30 10:32:58'),
(487, 137, '1685428458996.jpg', 1, '2023-05-30 10:34:18', '2023-05-30 10:34:18'),
(488, 137, '1685428458638.jpg', 1, '2023-05-30 10:34:18', '2023-05-30 10:34:18'),
(489, 138, '1685428514962.jpg', 1, '2023-05-30 10:35:14', '2023-05-30 10:35:14'),
(490, 138, '1685428514715.jpg', 1, '2023-05-30 10:35:14', '2023-05-30 10:35:14'),
(491, 139, '1685428613268.jpg', 1, '2023-05-30 10:36:53', '2023-05-30 10:36:53'),
(492, 139, '1685428613904.jpg', 1, '2023-05-30 10:36:53', '2023-05-30 10:36:53'),
(493, 140, '1685428737726.jpg', 1, '2023-05-30 10:38:57', '2023-05-30 10:38:57'),
(494, 140, '1685428737855.jpg', 1, '2023-05-30 10:38:57', '2023-05-30 10:38:57'),
(495, 141, '1685428851185.jpg', 1, '2023-05-30 10:40:51', '2023-05-30 10:40:51'),
(496, 141, '1685428851346.jpg', 1, '2023-05-30 10:40:51', '2023-05-30 10:40:51'),
(497, 142, '1685428998768.jpg', 1, '2023-05-30 10:43:18', '2023-05-30 10:43:18'),
(498, 142, '1685428998199.jpg', 1, '2023-05-30 10:43:18', '2023-05-30 10:43:18'),
(499, 143, '1685429143758.jpg', 1, '2023-05-30 10:45:43', '2023-05-30 10:45:43'),
(500, 143, '1685429143405.jpg', 1, '2023-05-30 10:45:43', '2023-05-30 10:45:43'),
(501, 144, '1685429330239.jpg', 1, '2023-05-30 10:48:50', '2023-05-30 10:48:50'),
(502, 144, '1685429330525.jpg', 1, '2023-05-30 10:48:50', '2023-05-30 10:48:50'),
(503, 145, '1685429432117.jpg', 1, '2023-05-30 10:50:32', '2023-05-30 10:50:32'),
(504, 145, '1685429432518.jpg', 1, '2023-05-30 10:50:32', '2023-05-30 10:50:32'),
(505, 146, '1685429828417.jpg', 1, '2023-05-30 10:57:08', '2023-05-30 10:57:08'),
(506, 146, '1685429828920.jpg', 1, '2023-05-30 10:57:08', '2023-05-30 10:57:08'),
(507, 147, '1685429956368.jpg', 1, '2023-05-30 10:59:16', '2023-05-30 10:59:16'),
(508, 147, '1685429956611.jpg', 1, '2023-05-30 10:59:16', '2023-05-30 10:59:16'),
(509, 148, '1685430078374.jpg', 1, '2023-05-30 11:01:18', '2023-05-30 11:01:18'),
(510, 148, '1685430078847.jpg', 1, '2023-05-30 11:01:18', '2023-05-30 11:01:18'),
(511, 149, '1685430240431.jpg', 1, '2023-05-30 11:04:00', '2023-05-30 11:04:00'),
(512, 149, '1685430240276.jpg', 1, '2023-05-30 11:04:00', '2023-05-30 11:04:00'),
(513, 150, '1685430439770.jpg', 1, '2023-05-30 11:07:19', '2023-05-30 11:07:19'),
(514, 150, '1685430439513.jpg', 1, '2023-05-30 11:07:19', '2023-05-30 11:07:19'),
(515, 151, '1685430644667.jpg', 1, '2023-05-30 11:10:44', '2023-05-30 11:10:44'),
(516, 151, '1685430644583.jpg', 1, '2023-05-30 11:10:44', '2023-05-30 11:10:44'),
(517, 152, '1685430754479.jpg', 1, '2023-05-30 11:12:34', '2023-05-30 11:12:34'),
(518, 152, '1685430754134.jpg', 1, '2023-05-30 11:12:34', '2023-05-30 11:12:34'),
(519, 153, '1685430903125.jpg', 1, '2023-05-30 11:15:03', '2023-05-30 11:15:03'),
(520, 153, '1685430903707.jpg', 1, '2023-05-30 11:15:03', '2023-05-30 11:15:03'),
(521, 154, '1685430975214.jpg', 1, '2023-05-30 11:16:15', '2023-05-30 11:16:15'),
(522, 154, '1685430975513.jpg', 1, '2023-05-30 11:16:15', '2023-05-30 11:16:15'),
(523, 155, '1685431063998.jpg', 1, '2023-05-30 11:17:43', '2023-05-30 11:17:43'),
(524, 155, '1685431063355.jpg', 1, '2023-05-30 11:17:43', '2023-05-30 11:17:43'),
(525, 156, '1685431136317.jpg', 0, '2023-05-30 11:18:56', '2023-06-06 10:51:55'),
(526, 156, '1685431136672.jpg', 1, '2023-05-30 11:18:56', '2023-06-06 10:51:55'),
(527, 157, '1686637438668.jpg', 1, '2023-06-13 10:23:58', '2023-06-13 10:23:58'),
(528, 157, '1686637438674.jpg', 0, '2023-06-13 10:23:58', '2023-06-13 10:24:40'),
(529, 157, '1686637438578.jpg', 0, '2023-06-13 10:23:58', '2023-06-13 10:24:40'),
(530, 157, '1686637438469.jpg', 0, '2023-06-13 10:23:58', '2023-06-13 10:24:40'),
(531, 158, '1686637770318.jpg', 1, '2023-06-13 10:29:30', '2023-06-13 10:29:30'),
(532, 158, '1686637770786.jpg', 1, '2023-06-13 10:29:30', '2023-06-13 10:29:30'),
(533, 158, '1686637770102.jpg', 1, '2023-06-13 10:29:30', '2023-06-13 10:29:30'),
(534, 158, '1686637770623.jpg', 1, '2023-06-13 10:29:30', '2023-06-13 10:29:30'),
(535, 159, '1686724156154.jpg', 1, '2023-06-14 10:29:16', '2023-06-14 10:29:16'),
(536, 159, '1686724156373.jpg', 1, '2023-06-14 10:29:16', '2023-06-14 10:29:16'),
(537, 159, '1686724156334.jpg', 1, '2023-06-14 10:29:16', '2023-06-14 10:29:16'),
(538, 159, '1686724156874.jpg', 1, '2023-06-14 10:29:16', '2023-06-14 10:29:16'),
(539, 160, '1686724257977.jpg', 1, '2023-06-14 10:30:57', '2023-06-14 10:30:57'),
(540, 160, '1686724257419.jpg', 1, '2023-06-14 10:30:57', '2023-06-14 10:30:57'),
(541, 160, '1686724257734.jpg', 1, '2023-06-14 10:30:57', '2023-06-14 10:30:57'),
(542, 160, '1686724257303.jpg', 1, '2023-06-14 10:30:57', '2023-06-14 10:30:57'),
(543, 161, '1686724370827.jpg', 1, '2023-06-14 10:32:50', '2023-06-14 10:32:50'),
(544, 161, '1686724370395.jpg', 1, '2023-06-14 10:32:50', '2023-06-14 10:32:50'),
(545, 161, '1686724370788.jpg', 1, '2023-06-14 10:32:50', '2023-06-14 10:32:50'),
(546, 161, '1686724370556.jpg', 1, '2023-06-14 10:32:50', '2023-06-14 10:32:50'),
(547, 161, '1686724370369.jpg', 1, '2023-06-14 10:32:50', '2023-06-14 10:32:50'),
(548, 162, '1686724798162.jpg', 1, '2023-06-14 10:39:58', '2023-06-14 10:39:58'),
(549, 162, '1686724798586.jpg', 1, '2023-06-14 10:39:58', '2023-06-14 10:39:58'),
(550, 162, '1686724798612.jpg', 1, '2023-06-14 10:39:58', '2023-06-14 10:39:58'),
(551, 162, '1686724798517.jpg', 1, '2023-06-14 10:39:58', '2023-06-14 10:39:58'),
(552, 162, '1686724798129.jpg', 1, '2023-06-14 10:39:58', '2023-06-14 10:39:58'),
(553, 163, '1686724904304.jpg', 1, '2023-06-14 10:41:44', '2023-06-14 10:41:44'),
(554, 163, '1686724904935.jpg', 1, '2023-06-14 10:41:44', '2023-06-14 10:41:44'),
(555, 163, '1686724904888.jpg', 1, '2023-06-14 10:41:44', '2023-06-14 10:41:44'),
(556, 163, '1686724904669.jpg', 1, '2023-06-14 10:41:44', '2023-06-14 10:41:44'),
(557, 164, '1686725011350.jpg', 1, '2023-06-14 10:43:31', '2023-06-14 10:43:31'),
(558, 164, '1686725011877.jpg', 1, '2023-06-14 10:43:31', '2023-06-14 10:43:31'),
(559, 164, '1686725011386.jpg', 1, '2023-06-14 10:43:31', '2023-06-14 10:43:31'),
(560, 164, '1686725011902.jpg', 1, '2023-06-14 10:43:31', '2023-06-14 10:43:31'),
(561, 165, '1686725115602.jpg', 1, '2023-06-14 10:45:15', '2023-06-14 10:45:15'),
(562, 165, '1686725115356.jpg', 1, '2023-06-14 10:45:15', '2023-06-14 10:45:15'),
(563, 165, '1686725115667.jpg', 1, '2023-06-14 10:45:15', '2023-06-14 10:45:15'),
(564, 165, '1686725115835.jpg', 1, '2023-06-14 10:45:15', '2023-06-14 10:45:15'),
(565, 166, '1686725187935.jpg', 1, '2023-06-14 10:46:27', '2023-06-14 10:46:27'),
(566, 166, '1686725187192.jpg', 1, '2023-06-14 10:46:27', '2023-06-14 10:46:27'),
(567, 167, '1686725391956.jpg', 1, '2023-06-14 10:49:51', '2023-06-14 10:49:51'),
(568, 167, '1686725391774.jpg', 1, '2023-06-14 10:49:51', '2023-06-14 10:49:51'),
(569, 167, '1686725391599.jpg', 1, '2023-06-14 10:49:51', '2023-06-14 10:49:51'),
(570, 167, '1686725391688.jpg', 1, '2023-06-14 10:49:51', '2023-06-14 10:49:51'),
(571, 168, '1686725506139.jpg', 1, '2023-06-14 10:51:46', '2023-06-14 10:51:46'),
(572, 168, '1686725506916.jpg', 1, '2023-06-14 10:51:46', '2023-06-14 10:51:46'),
(573, 168, '1686725506811.jpg', 1, '2023-06-14 10:51:46', '2023-06-14 10:51:46'),
(574, 168, '1686725506870.jpg', 1, '2023-06-14 10:51:46', '2023-06-14 10:51:46'),
(575, 169, '1686725639750.jpg', 1, '2023-06-14 10:53:59', '2023-06-14 10:53:59'),
(576, 169, '1686725639248.jpg', 1, '2023-06-14 10:53:59', '2023-06-14 10:53:59'),
(577, 169, '1686725639260.jpg', 1, '2023-06-14 10:53:59', '2023-06-14 10:53:59'),
(578, 169, '1686725639619.jpg', 1, '2023-06-14 10:53:59', '2023-06-14 10:53:59'),
(579, 170, '1686725745770.jpg', 1, '2023-06-14 10:55:45', '2023-06-14 10:55:45'),
(580, 170, '1686725745653.jpg', 1, '2023-06-14 10:55:45', '2023-06-14 10:55:45'),
(581, 170, '1686725745379.jpg', 1, '2023-06-14 10:55:45', '2023-06-14 10:55:45'),
(582, 170, '1686725745453.jpg', 1, '2023-06-14 10:55:45', '2023-06-14 10:55:45'),
(583, 171, '1686725963980.jpg', 1, '2023-06-14 10:59:23', '2023-06-14 10:59:23'),
(584, 171, '1686725963620.jpg', 1, '2023-06-14 10:59:23', '2023-06-14 10:59:23'),
(585, 171, '1686725963302.jpg', 1, '2023-06-14 10:59:23', '2023-06-14 10:59:23'),
(586, 171, '1686725963120.jpg', 1, '2023-06-14 10:59:23', '2023-06-14 10:59:23'),
(587, 172, '1686726094546.jpg', 1, '2023-06-14 11:01:34', '2023-06-14 11:01:34'),
(588, 172, '1686726094951.jpg', 1, '2023-06-14 11:01:34', '2023-06-14 11:01:34'),
(589, 172, '1686726094175.jpg', 1, '2023-06-14 11:01:34', '2023-06-14 11:01:34'),
(590, 172, '1686726094390.jpg', 1, '2023-06-14 11:01:34', '2023-06-14 11:01:34'),
(591, 173, '1686726231398.jpg', 1, '2023-06-14 11:03:51', '2023-06-14 11:03:51'),
(592, 173, '1686726231698.jpg', 1, '2023-06-14 11:03:51', '2023-06-14 11:03:51'),
(593, 173, '1686726231186.jpg', 1, '2023-06-14 11:03:51', '2023-06-14 11:03:51'),
(594, 173, '1686726231356.jpg', 1, '2023-06-14 11:03:51', '2023-06-14 11:03:51'),
(595, 174, '1686726380765.jpg', 1, '2023-06-14 11:06:20', '2023-06-14 11:06:20'),
(596, 174, '1686726380133.jpg', 1, '2023-06-14 11:06:20', '2023-06-14 11:06:20'),
(597, 174, '1686726380652.jpg', 1, '2023-06-14 11:06:20', '2023-06-14 11:06:20'),
(598, 174, '1686726380577.jpg', 1, '2023-06-14 11:06:20', '2023-06-14 11:06:20'),
(599, 175, '1686726553761.jpg', 1, '2023-06-14 11:09:13', '2023-06-14 11:09:13'),
(600, 175, '1686726553878.jpg', 1, '2023-06-14 11:09:13', '2023-06-14 11:09:13'),
(601, 175, '1686726553321.jpg', 1, '2023-06-14 11:09:13', '2023-06-14 11:09:13'),
(602, 175, '1686726553837.jpg', 1, '2023-06-14 11:09:13', '2023-06-14 11:09:13'),
(603, 176, '1686726687217.jpg', 1, '2023-06-14 11:11:27', '2023-06-14 11:11:27'),
(604, 176, '1686726687343.jpg', 1, '2023-06-14 11:11:27', '2023-06-14 11:11:27'),
(605, 176, '1686726687468.jpg', 1, '2023-06-14 11:11:27', '2023-06-14 11:11:27'),
(606, 176, '1686726687219.jpg', 1, '2023-06-14 11:11:27', '2023-06-14 11:11:27'),
(607, 177, '1686726839799.jpg', 1, '2023-06-14 11:13:59', '2023-06-14 11:13:59'),
(608, 177, '1686726839371.jpg', 1, '2023-06-14 11:13:59', '2023-06-14 11:13:59'),
(609, 177, '1686726839301.jpg', 1, '2023-06-14 11:13:59', '2023-06-14 11:13:59'),
(610, 177, '1686726839801.jpg', 1, '2023-06-14 11:13:59', '2023-06-14 11:13:59'),
(611, 177, '1686726839597.jpg', 1, '2023-06-14 11:13:59', '2023-06-14 11:13:59'),
(612, 178, '1686726929940.jpg', 1, '2023-06-14 11:15:29', '2023-06-14 11:15:29'),
(613, 178, '1686726929636.jpg', 1, '2023-06-14 11:15:29', '2023-06-14 11:15:29'),
(614, 179, '1686733034405.jpg', 1, '2023-06-14 12:57:14', '2023-06-14 12:57:14'),
(615, 180, '1686733148457.jpg', 1, '2023-06-14 12:59:08', '2023-06-14 12:59:08'),
(616, 180, '1686733148640.jpg', 1, '2023-06-14 12:59:08', '2023-06-14 12:59:08'),
(617, 180, '1686733148749.jpg', 1, '2023-06-14 12:59:08', '2023-06-14 12:59:08'),
(618, 180, '1686733148269.jpg', 1, '2023-06-14 12:59:08', '2023-06-14 12:59:08'),
(619, 181, '1686733249712.jpg', 1, '2023-06-14 13:00:49', '2023-06-14 13:00:49'),
(620, 181, '1686733249936.jpg', 1, '2023-06-14 13:00:49', '2023-06-14 13:00:49'),
(621, 181, '1686733249213.jpg', 1, '2023-06-14 13:00:49', '2023-06-14 13:00:49'),
(622, 181, '1686733249563.jpg', 1, '2023-06-14 13:00:49', '2023-06-14 13:00:49'),
(623, 182, '1686733402636.jpg', 1, '2023-06-14 13:03:22', '2023-06-14 13:03:22'),
(624, 182, '1686733402926.jpg', 1, '2023-06-14 13:03:22', '2023-06-14 13:03:22'),
(625, 182, '1686733402794.jpg', 1, '2023-06-14 13:03:22', '2023-06-14 13:03:22'),
(626, 182, '1686733402923.jpg', 1, '2023-06-14 13:03:22', '2023-06-14 13:03:22'),
(627, 183, '1686733552771.jpg', 1, '2023-06-14 13:05:52', '2023-06-14 13:05:52'),
(628, 183, '1686733552240.jpg', 1, '2023-06-14 13:05:52', '2023-06-14 13:05:52'),
(629, 184, '1686733682163.jpg', 1, '2023-06-14 13:08:02', '2023-06-14 13:08:02'),
(630, 184, '1686733682790.jpg', 1, '2023-06-14 13:08:02', '2023-06-14 13:08:02'),
(631, 184, '1686733682108.jpg', 1, '2023-06-14 13:08:02', '2023-06-14 13:08:02'),
(632, 185, '1686733808176.jpg', 1, '2023-06-14 13:10:08', '2023-06-14 13:10:08'),
(633, 185, '1686733808638.jpg', 1, '2023-06-14 13:10:08', '2023-06-14 13:10:08'),
(634, 185, '1686733808762.jpg', 1, '2023-06-14 13:10:08', '2023-06-14 13:10:08'),
(635, 186, '1686733965496.jpg', 1, '2023-06-14 13:12:45', '2023-06-14 13:12:45'),
(636, 186, '1686733965667.jpg', 1, '2023-06-14 13:12:45', '2023-06-14 13:12:45'),
(637, 186, '1686733965832.jpg', 1, '2023-06-14 13:12:45', '2023-06-14 13:12:45'),
(638, 186, '1686733965475.jpg', 1, '2023-06-14 13:12:45', '2023-06-14 13:12:45'),
(639, 187, '1686734088359.jpg', 1, '2023-06-14 13:14:48', '2023-06-14 13:14:48'),
(640, 187, '1686734088553.jpg', 1, '2023-06-14 13:14:48', '2023-06-14 13:14:48'),
(641, 187, '1686734088916.jpg', 1, '2023-06-14 13:14:48', '2023-06-14 13:14:48'),
(642, 187, '1686734088121.jpg', 1, '2023-06-14 13:14:48', '2023-06-14 13:14:48'),
(643, 188, '1686734237527.jpg', 1, '2023-06-14 13:17:17', '2023-06-14 13:17:17'),
(644, 188, '1686734237310.jpg', 1, '2023-06-14 13:17:17', '2023-06-14 13:17:17'),
(645, 188, '1686734237884.jpg', 1, '2023-06-14 13:17:17', '2023-06-14 13:17:17'),
(646, 188, '1686734237747.jpg', 1, '2023-06-14 13:17:17', '2023-06-14 13:17:17'),
(647, 189, '1686734379969.jpg', 1, '2023-06-14 13:19:39', '2023-06-14 13:19:39'),
(648, 189, '1686734379452.jpg', 1, '2023-06-14 13:19:39', '2023-06-14 13:19:39'),
(649, 190, '1686734602923.jpg', 1, '2023-06-14 13:23:22', '2023-06-14 13:23:22'),
(650, 190, '1686734602325.jpg', 1, '2023-06-14 13:23:22', '2023-06-14 13:23:22'),
(651, 190, '1686734602823.jpg', 1, '2023-06-14 13:23:22', '2023-06-14 13:23:22'),
(652, 191, '1686734766276.jpg', 1, '2023-06-14 13:26:06', '2023-06-14 13:26:06'),
(653, 191, '1686734766479.jpg', 1, '2023-06-14 13:26:06', '2023-06-14 13:26:06'),
(654, 192, '1686734941654.jpg', 1, '2023-06-14 13:29:01', '2023-06-14 13:29:01'),
(655, 192, '1686734941765.jpg', 1, '2023-06-14 13:29:01', '2023-06-14 13:29:01'),
(656, 192, '1686734941275.jpg', 1, '2023-06-14 13:29:01', '2023-06-14 13:29:01'),
(657, 192, '1686734941122.jpg', 1, '2023-06-14 13:29:01', '2023-06-14 13:29:01'),
(658, 193, '1686735031247.jpg', 1, '2023-06-14 13:30:31', '2023-06-14 13:30:31'),
(659, 193, '1686735031435.jpg', 1, '2023-06-14 13:30:31', '2023-06-14 13:30:31'),
(660, 193, '1686735031681.jpg', 1, '2023-06-14 13:30:31', '2023-06-14 13:30:31'),
(661, 193, '1686735031772.jpg', 1, '2023-06-14 13:30:31', '2023-06-14 13:30:31'),
(662, 194, '1686735145862.jpg', 1, '2023-06-14 13:32:25', '2023-06-14 13:32:25'),
(663, 194, '1686735145652.jpg', 1, '2023-06-14 13:32:25', '2023-06-14 13:32:25'),
(664, 194, '1686735145498.jpg', 1, '2023-06-14 13:32:25', '2023-06-14 13:32:25'),
(665, 194, '1686735145730.jpg', 1, '2023-06-14 13:32:25', '2023-06-14 13:32:25'),
(666, 195, '1686735274968.jpg', 1, '2023-06-14 13:34:34', '2023-06-14 13:34:34'),
(667, 195, '1686735274353.jpg', 1, '2023-06-14 13:34:34', '2023-06-14 13:34:34'),
(668, 195, '1686735274243.jpg', 1, '2023-06-14 13:34:34', '2023-06-14 13:34:34'),
(669, 195, '1686735274668.jpg', 1, '2023-06-14 13:34:34', '2023-06-14 13:34:34'),
(670, 196, '1686735369783.jpg', 1, '2023-06-14 13:36:09', '2023-06-14 13:36:09'),
(671, 196, '1686735369714.jpg', 1, '2023-06-14 13:36:09', '2023-06-14 13:36:09'),
(672, 196, '1686735369653.jpg', 1, '2023-06-14 13:36:09', '2023-06-14 13:36:09'),
(673, 197, '1686735449968.jpg', 1, '2023-06-14 13:37:29', '2023-06-14 13:37:29'),
(674, 197, '1686735449420.jpg', 1, '2023-06-14 13:37:29', '2023-06-14 13:37:29'),
(675, 198, '1686735539604.jpg', 1, '2023-06-14 13:38:59', '2023-06-14 13:38:59'),
(676, 198, '1686735539496.jpg', 1, '2023-06-14 13:38:59', '2023-06-14 13:38:59'),
(677, 198, '1686735539382.jpg', 1, '2023-06-14 13:38:59', '2023-06-14 13:38:59'),
(678, 199, '1686735620376.jpg', 1, '2023-06-14 13:40:20', '2023-06-14 13:40:20'),
(679, 199, '1686735620374.jpg', 1, '2023-06-14 13:40:20', '2023-06-14 13:40:20'),
(680, 199, '1686735620345.jpg', 1, '2023-06-14 13:40:20', '2023-06-14 13:40:20'),
(681, 199, '1686735620923.jpg', 1, '2023-06-14 13:40:20', '2023-06-14 13:40:20'),
(682, 200, '1686811761674.jpg', 1, '2023-06-15 10:49:21', '2023-06-15 10:49:21'),
(683, 201, '1686811869886.jpg', 1, '2023-06-15 10:51:09', '2023-06-15 10:51:09'),
(684, 201, '1686811869265.jpg', 1, '2023-06-15 10:51:09', '2023-06-15 10:51:09'),
(685, 201, '1686811869185.jpg', 1, '2023-06-15 10:51:09', '2023-06-15 10:51:09'),
(686, 201, '1686811869273.jpg', 1, '2023-06-15 10:51:09', '2023-06-15 10:51:09'),
(687, 201, '1686811869533.jpg', 1, '2023-06-15 10:51:09', '2023-06-15 10:51:09'),
(688, 202, '1686811969247.jpg', 1, '2023-06-15 10:52:49', '2023-06-15 10:52:49'),
(689, 203, '1686812050543.jpg', 1, '2023-06-15 10:54:10', '2023-06-15 10:54:10'),
(690, 204, '1686812140286.jpg', 1, '2023-06-15 10:55:40', '2023-06-15 10:55:40'),
(691, 204, '1686812140559.jpg', 1, '2023-06-15 10:55:40', '2023-06-15 10:55:40'),
(692, 205, '1686812255153.jpg', 1, '2023-06-15 10:57:35', '2023-06-15 10:57:35'),
(693, 205, '1686812255607.jpg', 1, '2023-06-15 10:57:35', '2023-06-15 10:57:35'),
(694, 205, '1686812255493.jpg', 1, '2023-06-15 10:57:35', '2023-06-15 10:57:35'),
(695, 205, '1686812255177.jpg', 1, '2023-06-15 10:57:35', '2023-06-15 10:57:35'),
(696, 206, '1686812352312.jpg', 1, '2023-06-15 10:59:12', '2023-06-15 10:59:12'),
(697, 206, '1686812352857.jpg', 1, '2023-06-15 10:59:12', '2023-06-15 10:59:12'),
(698, 206, '1686812352333.jpg', 1, '2023-06-15 10:59:12', '2023-06-15 10:59:12'),
(699, 206, '1686812352465.jpg', 1, '2023-06-15 10:59:12', '2023-06-15 10:59:12'),
(700, 207, '1686812459384.jpg', 1, '2023-06-15 11:00:59', '2023-06-15 11:00:59'),
(701, 207, '1686812459279.jpg', 1, '2023-06-15 11:00:59', '2023-06-15 11:00:59'),
(702, 207, '1686812459119.jpg', 1, '2023-06-15 11:00:59', '2023-06-15 11:00:59'),
(703, 207, '1686812459451.jpg', 1, '2023-06-15 11:00:59', '2023-06-15 11:00:59'),
(704, 208, '1686812561302.jpg', 1, '2023-06-15 11:02:41', '2023-06-15 11:02:41'),
(705, 208, '1686812561240.jpg', 1, '2023-06-15 11:02:41', '2023-06-15 11:02:41'),
(706, 208, '1686812561934.jpg', 1, '2023-06-15 11:02:41', '2023-06-15 11:02:41'),
(707, 208, '1686812561820.jpg', 1, '2023-06-15 11:02:41', '2023-06-15 11:02:41'),
(708, 209, '1686812646977.jpg', 1, '2023-06-15 11:04:06', '2023-06-15 11:04:06'),
(709, 209, '1686812646945.jpg', 1, '2023-06-15 11:04:06', '2023-06-15 11:04:06'),
(710, 209, '1686812646128.jpg', 1, '2023-06-15 11:04:06', '2023-06-15 11:04:06'),
(711, 210, '1686814355606.jpg', 1, '2023-06-15 11:32:35', '2023-06-15 11:32:35'),
(712, 210, '1686814355733.jpg', 1, '2023-06-15 11:32:35', '2023-06-15 11:32:35'),
(713, 211, '1686814560876.jpg', 1, '2023-06-15 11:36:00', '2023-06-15 11:36:00'),
(714, 211, '1686814560685.jpg', 1, '2023-06-15 11:36:00', '2023-06-15 11:36:00'),
(715, 211, '1686814560280.jpg', 1, '2023-06-15 11:36:00', '2023-06-15 11:36:00'),
(716, 211, '1686814560622.jpg', 1, '2023-06-15 11:36:00', '2023-06-15 11:36:00'),
(717, 212, '1686814719788.jpg', 1, '2023-06-15 11:38:39', '2023-06-15 11:38:39'),
(718, 212, '1686814719372.jpg', 1, '2023-06-15 11:38:39', '2023-06-15 11:38:39'),
(719, 213, '1686814816918.jpg', 1, '2023-06-15 11:40:16', '2023-06-15 11:40:16'),
(720, 213, '1686814816481.jpg', 1, '2023-06-15 11:40:16', '2023-06-15 11:40:16'),
(721, 213, '1686814816848.jpg', 1, '2023-06-15 11:40:16', '2023-06-15 11:40:16'),
(722, 214, '1686814910722.jpg', 1, '2023-06-15 11:41:50', '2023-06-15 11:41:50'),
(723, 214, '1686814910610.jpg', 1, '2023-06-15 11:41:50', '2023-06-15 11:41:50'),
(724, 215, '1686814989351.jpg', 1, '2023-06-15 11:43:09', '2023-06-15 11:43:09'),
(725, 215, '1686814989650.jpg', 1, '2023-06-15 11:43:09', '2023-06-15 11:43:09'),
(726, 216, '1686815117593.jpg', 1, '2023-06-15 11:45:17', '2023-06-15 11:45:17'),
(727, 216, '1686815117395.jpg', 1, '2023-06-15 11:45:17', '2023-06-15 11:45:17'),
(728, 217, '1686815270124.jpg', 1, '2023-06-15 11:47:50', '2023-06-15 11:47:50'),
(729, 217, '1686815270378.jpg', 1, '2023-06-15 11:47:50', '2023-06-15 11:47:50'),
(730, 217, '1686815270942.jpg', 1, '2023-06-15 11:47:50', '2023-06-15 11:47:50'),
(731, 217, '1686815270850.jpg', 1, '2023-06-15 11:47:50', '2023-06-15 11:47:50'),
(732, 218, '1686815374167.jpg', 1, '2023-06-15 11:49:34', '2023-06-15 11:49:34'),
(733, 218, '1686815374683.jpg', 1, '2023-06-15 11:49:34', '2023-06-15 11:49:34'),
(734, 218, '1686815374532.jpg', 1, '2023-06-15 11:49:34', '2023-06-15 11:49:34'),
(735, 218, '1686815374157.jpg', 1, '2023-06-15 11:49:34', '2023-06-15 11:49:34'),
(736, 219, '1686815457293.jpg', 1, '2023-06-15 11:50:57', '2023-06-15 11:50:57'),
(737, 220, '1686816727134.jpg', 1, '2023-06-15 12:12:07', '2023-06-15 12:12:07'),
(738, 220, '1686816727290.jpg', 1, '2023-06-15 12:12:07', '2023-06-15 12:12:07'),
(739, 220, '1686816727190.jpg', 1, '2023-06-15 12:12:07', '2023-06-15 12:12:07'),
(740, 220, '1686816727932.jpg', 1, '2023-06-15 12:12:07', '2023-06-15 12:12:07'),
(741, 221, '1686816807403.jpg', 1, '2023-06-15 12:13:27', '2023-06-15 12:13:27'),
(742, 221, '1686816807479.jpg', 1, '2023-06-15 12:13:27', '2023-06-15 12:13:27'),
(743, 221, '1686816807757.jpg', 1, '2023-06-15 12:13:27', '2023-06-15 12:13:27'),
(744, 221, '1686816807905.jpg', 1, '2023-06-15 12:13:27', '2023-06-15 12:13:27'),
(745, 222, '1686816880458.jpg', 1, '2023-06-15 12:14:40', '2023-06-15 12:14:40'),
(746, 223, '1686817009321.jpg', 1, '2023-06-15 12:16:49', '2023-06-15 12:16:49'),
(747, 223, '1686817009245.jpg', 1, '2023-06-15 12:16:49', '2023-06-15 12:16:49'),
(748, 223, '1686817009499.jpg', 1, '2023-06-15 12:16:49', '2023-06-15 12:16:49'),
(749, 223, '1686817009656.jpg', 1, '2023-06-15 12:16:49', '2023-06-15 12:16:49'),
(750, 224, '1686817139238.jpg', 1, '2023-06-15 12:18:59', '2023-06-15 12:18:59'),
(751, 225, '1686817199409.jpg', 1, '2023-06-15 12:19:59', '2023-06-15 12:19:59'),
(752, 226, '1686817322131.jpg', 1, '2023-06-15 12:22:02', '2023-06-15 12:22:02'),
(753, 226, '1686817322680.jpg', 1, '2023-06-15 12:22:02', '2023-06-15 12:22:02'),
(754, 226, '1686817322312.jpg', 1, '2023-06-15 12:22:02', '2023-06-15 12:22:02'),
(755, 226, '1686817322603.jpg', 1, '2023-06-15 12:22:02', '2023-06-15 12:22:02');
INSERT INTO `images` (`id`, `product_id`, `image`, `is_main`, `created_at`, `updated_at`) VALUES
(756, 227, '1686817425949.jpg', 1, '2023-06-15 12:23:45', '2023-06-15 12:23:45'),
(757, 228, '1686817481922.jpg', 1, '2023-06-15 12:24:41', '2023-06-15 12:24:41'),
(758, 229, '1686817575601.jpg', 1, '2023-06-15 12:26:15', '2023-06-15 12:26:15'),
(759, 229, '1686817575725.jpg', 1, '2023-06-15 12:26:15', '2023-06-15 12:26:15'),
(760, 229, '1686817575643.jpg', 1, '2023-06-15 12:26:15', '2023-06-15 12:26:15'),
(761, 229, '1686817575794.jpg', 1, '2023-06-15 12:26:15', '2023-06-15 12:26:15'),
(762, 230, '1686817659493.jpg', 1, '2023-06-15 12:27:39', '2023-06-15 12:27:39'),
(763, 230, '1686817659583.jpg', 1, '2023-06-15 12:27:39', '2023-06-15 12:27:39'),
(764, 230, '1686817659165.jpg', 1, '2023-06-15 12:27:39', '2023-06-15 12:27:39'),
(765, 230, '1686817659948.jpg', 1, '2023-06-15 12:27:39', '2023-06-15 12:27:39'),
(766, 231, '1686817737581.jpg', 1, '2023-06-15 12:28:57', '2023-06-15 12:28:57'),
(767, 231, '1686817737322.jpg', 1, '2023-06-15 12:28:57', '2023-06-15 12:28:57'),
(768, 231, '1686817737100.jpg', 1, '2023-06-15 12:28:57', '2023-06-15 12:28:57'),
(769, 232, '1686818080912.jpg', 1, '2023-06-15 12:34:40', '2023-06-15 12:34:40'),
(770, 232, '1686818080465.jpg', 1, '2023-06-15 12:34:40', '2023-06-15 12:34:40'),
(771, 232, '1686818080597.jpg', 1, '2023-06-15 12:34:40', '2023-06-15 12:34:40'),
(772, 232, '1686818080379.jpg', 1, '2023-06-15 12:34:40', '2023-06-15 12:34:40'),
(773, 233, '1686818166651.jpg', 1, '2023-06-15 12:36:06', '2023-06-15 12:36:06'),
(774, 233, '1686818166958.jpg', 1, '2023-06-15 12:36:06', '2023-06-15 12:36:06'),
(775, 233, '1686818166388.jpg', 1, '2023-06-15 12:36:06', '2023-06-15 12:36:06'),
(776, 233, '1686818166628.jpg', 1, '2023-06-15 12:36:06', '2023-06-15 12:36:06'),
(777, 234, '1686818256507.jpg', 1, '2023-06-15 12:37:36', '2023-06-15 12:37:36'),
(778, 234, '1686818256516.jpg', 1, '2023-06-15 12:37:36', '2023-06-15 12:37:36'),
(779, 234, '1686818256823.jpg', 1, '2023-06-15 12:37:36', '2023-06-15 12:37:36'),
(780, 234, '1686818256768.jpg', 1, '2023-06-15 12:37:36', '2023-06-15 12:37:36'),
(781, 235, '1686818358902.jpg', 1, '2023-06-15 12:39:18', '2023-06-15 12:39:18'),
(782, 235, '1686818358985.jpg', 1, '2023-06-15 12:39:18', '2023-06-15 12:39:18'),
(783, 235, '1686818358545.jpg', 1, '2023-06-15 12:39:18', '2023-06-15 12:39:18'),
(784, 235, '1686818358752.jpg', 1, '2023-06-15 12:39:18', '2023-06-15 12:39:18'),
(785, 236, '1686818497347.jpg', 1, '2023-06-15 12:41:37', '2023-06-15 12:41:37'),
(786, 236, '1686818497702.jpg', 1, '2023-06-15 12:41:37', '2023-06-15 12:41:37'),
(787, 236, '1686818497578.jpg', 1, '2023-06-15 12:41:37', '2023-06-15 12:41:37'),
(788, 236, '1686818497838.jpg', 1, '2023-06-15 12:41:37', '2023-06-15 12:41:37'),
(789, 237, '1686818606949.jpg', 1, '2023-06-15 12:43:26', '2023-06-15 12:43:26'),
(790, 237, '1686818606312.jpg', 1, '2023-06-15 12:43:26', '2023-06-15 12:43:26'),
(791, 237, '1686818606276.jpg', 1, '2023-06-15 12:43:26', '2023-06-15 12:43:26'),
(792, 237, '1686818606329.jpg', 1, '2023-06-15 12:43:26', '2023-06-15 12:43:26'),
(793, 238, '1686818701373.jpg', 1, '2023-06-15 12:45:01', '2023-06-15 12:45:01'),
(794, 238, '1686818701230.jpg', 1, '2023-06-15 12:45:01', '2023-06-15 12:45:01'),
(795, 238, '1686818701506.jpg', 1, '2023-06-15 12:45:01', '2023-06-15 12:45:01'),
(796, 238, '1686818701852.jpg', 1, '2023-06-15 12:45:01', '2023-06-15 12:45:01'),
(797, 239, '1686818797657.jpg', 1, '2023-06-15 12:46:37', '2023-06-15 12:46:37'),
(798, 239, '1686818797486.jpg', 1, '2023-06-15 12:46:37', '2023-06-15 12:46:37'),
(799, 239, '1686818797812.jpg', 1, '2023-06-15 12:46:37', '2023-06-15 12:46:37'),
(800, 239, '1686818797293.jpg', 1, '2023-06-15 12:46:37', '2023-06-15 12:46:37'),
(801, 239, '1686818797467.jpg', 1, '2023-06-15 12:46:37', '2023-06-15 12:46:37'),
(802, 240, '1686821214414.jpg', 1, '2023-06-15 13:26:54', '2023-06-15 13:26:54'),
(803, 240, '1686821214455.jpg', 1, '2023-06-15 13:26:54', '2023-06-15 13:26:54'),
(804, 240, '1686821214126.jpg', 1, '2023-06-15 13:26:54', '2023-06-15 13:26:54'),
(805, 240, '1686821214229.jpg', 1, '2023-06-15 13:26:54', '2023-06-15 13:26:54'),
(806, 241, '1686821302978.jpg', 1, '2023-06-15 13:28:22', '2023-06-15 13:28:22'),
(807, 241, '1686821302378.jpg', 1, '2023-06-15 13:28:22', '2023-06-15 13:28:22'),
(808, 241, '1686821302822.jpg', 1, '2023-06-15 13:28:22', '2023-06-15 13:28:22'),
(809, 241, '1686821302588.jpg', 1, '2023-06-15 13:28:22', '2023-06-15 13:28:22'),
(810, 242, '1686821409468.jpg', 1, '2023-06-15 13:30:09', '2023-06-15 13:30:09'),
(811, 242, '1686821409712.jpg', 1, '2023-06-15 13:30:09', '2023-06-15 13:30:09'),
(812, 242, '1686821409394.jpg', 1, '2023-06-15 13:30:09', '2023-06-15 13:30:09'),
(813, 242, '1686821409724.jpg', 1, '2023-06-15 13:30:09', '2023-06-15 13:30:09'),
(814, 243, '1686821486550.jpg', 1, '2023-06-15 13:31:26', '2023-06-15 13:31:26'),
(815, 243, '1686821486567.jpg', 1, '2023-06-15 13:31:26', '2023-06-15 13:31:26'),
(816, 243, '1686821486414.jpg', 1, '2023-06-15 13:31:26', '2023-06-15 13:31:26'),
(817, 243, '1686821486735.jpg', 1, '2023-06-15 13:31:26', '2023-06-15 13:31:26'),
(818, 244, '1686821560503.jpg', 1, '2023-06-15 13:32:40', '2023-06-15 13:32:40'),
(819, 244, '1686821560267.jpg', 1, '2023-06-15 13:32:40', '2023-06-15 13:32:40'),
(820, 244, '1686821560900.jpg', 1, '2023-06-15 13:32:40', '2023-06-15 13:32:40'),
(821, 244, '1686821560431.jpg', 1, '2023-06-15 13:32:40', '2023-06-15 13:32:40'),
(822, 245, '1686821660365.jpg', 1, '2023-06-15 13:34:20', '2023-06-15 13:34:20'),
(823, 245, '1686821660968.jpg', 1, '2023-06-15 13:34:20', '2023-06-15 13:34:20'),
(824, 245, '1686821660678.jpg', 1, '2023-06-15 13:34:20', '2023-06-15 13:34:20'),
(825, 246, '1686821742701.jpg', 1, '2023-06-15 13:35:42', '2023-06-15 13:35:42'),
(826, 246, '1686821742178.jpg', 1, '2023-06-15 13:35:42', '2023-06-15 13:35:42'),
(827, 246, '1686821742540.jpg', 1, '2023-06-15 13:35:42', '2023-06-15 13:35:42'),
(828, 247, '1686821830590.jpg', 1, '2023-06-15 13:37:10', '2023-06-15 13:37:10'),
(829, 247, '1686821830739.jpg', 1, '2023-06-15 13:37:10', '2023-06-15 13:37:10'),
(830, 248, '1686821927195.jpg', 1, '2023-06-15 13:38:47', '2023-06-15 13:38:47'),
(831, 248, '1686821927435.jpg', 1, '2023-06-15 13:38:47', '2023-06-15 13:38:47'),
(832, 248, '1686821927652.jpg', 1, '2023-06-15 13:38:47', '2023-06-15 13:38:47'),
(833, 248, '1686821927266.jpg', 1, '2023-06-15 13:38:47', '2023-06-15 13:38:47'),
(834, 249, '1686822016554.jpg', 1, '2023-06-15 13:40:16', '2023-06-15 13:40:16'),
(835, 249, '1686822016426.jpg', 1, '2023-06-15 13:40:16', '2023-06-15 13:40:16'),
(836, 249, '1686822016983.jpg', 1, '2023-06-15 13:40:16', '2023-06-15 13:40:16'),
(837, 249, '1686822016644.jpg', 1, '2023-06-15 13:40:16', '2023-06-15 13:40:16'),
(838, 250, '1686822129827.jpg', 1, '2023-06-15 13:42:09', '2023-06-15 13:42:09'),
(839, 250, '1686822129237.jpg', 1, '2023-06-15 13:42:09', '2023-06-15 13:42:09'),
(840, 250, '1686822129661.jpg', 1, '2023-06-15 13:42:09', '2023-06-15 13:42:09'),
(841, 251, '1753091492158.webp', 1, '2025-07-21 04:06:32', '2025-07-21 04:06:32');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
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
(35, '2022_11_02_062632_create_shipping_prices_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `subtotal` varchar(191) NOT NULL,
  `tax` varchar(191) DEFAULT NULL,
  `discount` varchar(191) DEFAULT NULL,
  `grand_total` varchar(191) NOT NULL,
  `weight` float DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `order_track` varchar(191) NOT NULL,
  `shipping_id` int(10) UNSIGNED DEFAULT NULL,
  `courier_id` int(11) NOT NULL,
  `order_note` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `subtotal`, `tax`, `discount`, `grand_total`, `weight`, `status`, `order_track`, `shipping_id`, `courier_id`, `order_note`, `created_at`, `updated_at`) VALUES
(8, 1, '2000', '0', NULL, '2055', 100, 0, 'OT1-1667461159', NULL, 2, NULL, '2022-11-03 01:54:19', '2022-11-03 01:54:19'),
(9, 1, '4500', '0', NULL, '4575', 90, 0, 'OT1-1667461213', NULL, 5, NULL, '2022-11-03 01:55:13', '2022-11-03 01:55:13'),
(10, 1, '1000', '0', NULL, '1140', 30, 0, 'OT1-1667462492', NULL, 3, NULL, '2022-11-03 02:16:32', '2022-11-03 02:16:32'),
(11, 1, '1000', '0', NULL, '1055', 100, 0, 'OT1-1667462573', NULL, 2, NULL, '2022-11-03 02:17:53', '2022-11-03 02:17:53'),
(12, 1, '1500', '0', NULL, '1550', 30, 0, 'OT1-1667462691', NULL, 4, NULL, '2022-11-03 02:19:51', '2022-11-03 02:19:51'),
(13, 1, '1000', '0', NULL, '1140', 30, 0, 'OT1-1667462741', NULL, 3, NULL, '2022-11-03 02:20:41', '2022-11-03 02:20:41'),
(14, 1, '552', '0', NULL, '692', 50, 0, 'OT1-1667462862', NULL, 3, NULL, '2022-11-03 02:22:42', '2022-11-03 02:22:42'),
(15, 1, '792', '0', NULL, '1292', 150, 0, 'OT1-1667462907', NULL, 10, NULL, '2022-11-03 02:23:27', '2022-11-03 02:23:27'),
(16, 1, '3000', '0', NULL, '3075', 60, 0, 'OT1-1667462980', NULL, 5, NULL, '2022-11-03 02:24:40', '2022-11-03 02:24:40'),
(17, 1, '1000', '0', NULL, '1140', 30, 0, 'OT1-1667463015', NULL, 3, NULL, '2022-11-03 02:25:15', '2022-11-03 02:25:15'),
(18, 1, '1656', '0', NULL, '2156', 150, 0, 'OT1-1667463083', NULL, 10, NULL, '2022-11-03 02:26:23', '2022-11-03 02:26:23'),
(19, 1, '792', '0', NULL, '1292', 150, 0, 'OT1-1667463126', NULL, 10, NULL, '2022-11-03 02:27:06', '2022-11-03 02:27:06'),
(20, 1, '3620', '0', NULL, '4120', 505, 0, 'OT1-1667463523', NULL, 10, NULL, '2022-11-03 02:33:43', '2022-11-03 02:33:43'),
(21, 1, '724', '0', NULL, '1224', 101, 0, 'OT1-1667464772', NULL, 10, 'Unde sit excepteur n', '2022-11-03 02:54:32', '2022-11-03 02:54:32'),
(22, 1, '1448', '0', NULL, '1948', 202, 0, 'OT1-1667464972', NULL, 10, NULL, '2022-11-03 02:57:52', '2022-11-03 02:57:52'),
(23, 1, '724', '0', NULL, '1224', 101, 0, 'OT1-1667465038', NULL, 10, NULL, '2022-11-03 02:58:58', '2022-11-03 02:58:58'),
(24, 1, '545', '0', NULL, '600', 101, 0, 'OT1-1683883889', NULL, 2, 'test', '2023-05-12 13:31:29', '2023-05-12 13:31:29'),
(25, 39, '1556', '0', NULL, '1606', 30, 0, 'OT39-1684907637', NULL, 4, 'nice', '2023-05-24 09:53:57', '2023-05-24 09:53:57'),
(26, 41, '23', '0', NULL, '523', 1300, 0, 'OT41-1685016192', NULL, 10, NULL, '2023-05-25 16:03:12', '2023-05-25 16:03:12'),
(27, 1, '122', '0', NULL, '622', 1750, 0, 'OT1-1687846894', NULL, 10, 'Ad aut vero reiciend', '2023-06-27 10:21:34', '2023-06-27 10:21:34'),
(28, 1, '1224', '0', NULL, '1724', 375, 0, 'OT1-1689077048', NULL, 10, NULL, '2023-07-11 16:04:08', '2023-07-11 16:04:08');

-- --------------------------------------------------------

--
-- Table structure for table `order_addresses`
--

CREATE TABLE `order_addresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) NOT NULL,
  `last_name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone` varchar(191) NOT NULL,
  `company` varchar(191) DEFAULT NULL,
  `country` varchar(191) NOT NULL,
  `city` varchar(191) NOT NULL,
  `zip_code` int(11) DEFAULT NULL,
  `address1` varchar(191) NOT NULL,
  `address2` varchar(191) DEFAULT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_addresses`
--

INSERT INTO `order_addresses` (`id`, `first_name`, `last_name`, `email`, `phone`, `company`, `country`, `city`, `zip_code`, `address1`, `address2`, `order_id`, `created_at`, `updated_at`) VALUES
(6, 'admin', 'hero', 'admin@gmail.com', '01421755', NULL, 'Nepal', 'Kathmandu', NULL, '84 Nobel Parkway', '11 White Milton Street', 8, '2022-11-03 01:54:19', '2022-11-03 01:54:19'),
(7, 'admin', 'hero', 'admin@gmail.com', '01421755', NULL, 'Nepal', 'Pariatur Dolor aliq', NULL, '84 Nobel Parkway', '11 White Milton Street', 9, '2022-11-03 01:55:13', '2022-11-03 01:55:13'),
(8, 'admin', 'hero', 'admin@gmail.com', '01421755', NULL, 'Nepal', 'Kathmandu', NULL, '40 Old Lane', '11 White Milton Street', 10, '2022-11-03 02:16:32', '2022-11-03 02:16:32'),
(9, 'admin', 'hero', 'admin@gmail.com', '01421755', NULL, 'Nepal', 'Kathmandu', NULL, 'Kritipur', NULL, 11, '2022-11-03 02:17:53', '2022-11-03 02:17:53'),
(10, 'admin', 'hero', 'admin@gmail.com', '01421755', NULL, 'Nepal', 'Kathmandu', NULL, 'From cart page', NULL, 12, '2022-11-03 02:19:51', '2022-11-03 02:19:51'),
(11, 'admin', 'hero', 'admin@gmail.com', '01421755', NULL, 'Nepal', 'Kathmandu', NULL, 'By order now method', NULL, 13, '2022-11-03 02:20:41', '2022-11-03 02:20:41'),
(12, 'admin', 'hero', 'admin@gmail.com', '01421755', NULL, 'Nepal', 'Kathmandu', NULL, 'Simple test with free size', NULL, 14, '2022-11-03 02:22:42', '2022-11-03 02:22:42'),
(13, 'admin', 'hero', 'admin@gmail.com', '01421755', NULL, 'Nepal', 'Kathmandu', NULL, 'From cart page', NULL, 15, '2022-11-03 02:23:27', '2022-11-03 02:23:27'),
(14, 'admin', 'hero', 'admin@gmail.com', '01421755', NULL, 'Nepal', 'Kathmandu', NULL, '84 Nobel Parkway', '11 White Milton Street', 16, '2022-11-03 02:24:40', '2022-11-03 02:24:40'),
(15, 'admin', 'hero', 'admin@gmail.com', '01421755', NULL, 'Nepal', 'Kathmandu', NULL, '84 Nobel Parkway', '11 White Milton Street', 17, '2022-11-03 02:25:15', '2022-11-03 02:25:15'),
(16, 'admin', 'hero', 'admin@gmail.com', '01421755', NULL, 'Nepal', 'Kathmandu', NULL, '40 Old Lane', NULL, 18, '2022-11-03 02:26:23', '2022-11-03 02:26:23'),
(17, 'admin', 'hero', 'admin@gmail.com', '01421755', NULL, 'Nepal', 'Kathmandu', NULL, '84 Nobel Parkway', NULL, 19, '2022-11-03 02:27:06', '2022-11-03 02:27:06'),
(18, 'admin', 'hero', 'admin@gmail.com', '01421755', NULL, 'Nepal', 'Kathmandu', NULL, '84 Nobel Parkway', NULL, 20, '2022-11-03 02:33:43', '2022-11-03 02:33:43'),
(19, 'Jack', 'Cantrell', 'qacufij@mailinator.com', '+1 (318) 167-9073', NULL, 'Natus exercitationem', 'Consequat In conseq', 65260, '462 Rocky Clarendon Extension', '69 Old Court', 21, '2022-11-03 02:54:32', '2022-11-03 02:54:32'),
(20, 'admin', 'hero', 'admin@gmail.com', '01421755', NULL, 'Nepal', 'Kathmandu', NULL, '84 Nobel Parkway', NULL, 22, '2022-11-03 02:57:52', '2022-11-03 02:57:52'),
(21, 'admin', 'hero', 'admin@gmail.com', '01421755', NULL, 'Nepal', 'Kathmandu', NULL, '84 Nobel Parkway', '11 White Milton Street', 23, '2022-11-03 02:58:58', '2022-11-03 02:58:58'),
(22, 'admin', 'hero', 'admin@gmail.com', '01421755', NULL, 'Nepal', 'Kathmandu', 4600, 'thamel', NULL, 24, '2023-05-12 13:31:29', '2023-05-12 13:31:29'),
(23, 'Pratikshya', 'Nakarmi', 'pratikshya.cyberlink@gmail.com', '9825698839', NULL, 'Nepal', 'Lalitpur', 44600, 'Kirtipur', 'kirtipur', 25, '2023-05-24 09:53:57', '2023-05-24 09:53:57'),
(24, 'bijaya', 'chhetri', 'bijay0710@gmail.com', '9867201618', NULL, 'Nepal', 'Kathmandu', 44600, 'Pako New road', NULL, 26, '2023-05-25 16:03:12', '2023-05-25 16:03:12'),
(25, 'Ursa', 'Benjamin', 'vequcyhoqy@mailinator.com', '+1 (486) 725-9191', NULL, 'Ea ut quis eius illu', 'Repudiandae maiores', 74061, '854 West New Extension', '817 South Nobel Lane', 27, '2023-06-27 10:21:34', '2023-06-27 10:21:34'),
(26, 'admin', 'hero', 'admin@gmail.com', '01421755', NULL, 'nepal', 'kathmandu', NULL, 'Kathmandu', NULL, 28, '2023-07-11 16:04:08', '2023-07-11 16:04:08');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `price` varchar(191) NOT NULL,
  `quantity` int(11) NOT NULL,
  `size` varchar(191) DEFAULT NULL,
  `discount` varchar(191) DEFAULT NULL,
  `total` varchar(191) NOT NULL,
  `color` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `price`, `quantity`, `size`, `discount`, `total`, `color`, `created_at`, `updated_at`) VALUES
(4, 8, 10, '2000', 1, NULL, '0', '2000', 'Red', '2022-11-03 01:54:19', '2022-11-03 01:54:19'),
(5, 9, 42, '1500', 3, 'M', '0', '4500', 'Red', '2022-11-03 01:55:13', '2022-11-03 01:55:13'),
(6, 10, 42, '1000', 1, '{\"id\":2,\"title\":\"S\",\"slug\":\"s\",\"created_at\":\"2020-10-21T04:17:28.000000Z\",\"updated_at\":\"2020-10-21T04:17:28.000000Z\"}', '0', '1000', 'Blue', '2022-11-03 02:16:32', '2022-11-03 02:16:32'),
(7, 11, 10, '1000', 1, NULL, '0', '1000', 'Blue', '2022-11-03 02:17:53', '2022-11-03 02:17:53'),
(8, 12, 42, '1500', 1, 'L', '0', '1500', 'Blue', '2022-11-03 02:19:51', '2022-11-03 02:19:51'),
(9, 13, 42, '1000', 1, 'L', '0', '1000', 'Blue', '2022-11-03 02:20:41', '2022-11-03 02:20:41'),
(10, 14, 40, '552', 1, NULL, '0', '552', 'Blue', '2022-11-03 02:22:42', '2022-11-03 02:22:42'),
(11, 15, 40, '264', 3, NULL, '0', '792', 'Blue', '2022-11-03 02:23:27', '2022-11-03 02:23:27'),
(12, 16, 42, '1500', 2, 'S', '0', '3000', 'Blue', '2022-11-03 02:24:40', '2022-11-03 02:24:40'),
(13, 17, 42, '1000', 1, 'S', '0', '1000', 'Blue', '2022-11-03 02:25:15', '2022-11-03 02:25:15'),
(14, 18, 40, '552', 3, NULL, '0', '1656', 'Blue', '2022-11-03 02:26:23', '2022-11-03 02:26:23'),
(15, 19, 40, '264', 3, NULL, '0', '792', 'Blue', '2022-11-03 02:27:06', '2022-11-03 02:27:06'),
(16, 20, 41, '724', 5, NULL, '0', '3620', 'Black', '2022-11-03 02:33:43', '2022-11-03 02:33:43'),
(17, 21, 41, '724', 1, NULL, '0', '724', 'Black', '2022-11-03 02:54:32', '2022-11-03 02:54:32'),
(18, 22, 41, '724', 2, NULL, '0', '1448', 'Red', '2022-11-03 02:57:52', '2022-11-03 02:57:52'),
(19, 23, 41, '724', 1, NULL, '0', '724', 'Black', '2022-11-03 02:58:58', '2022-11-03 02:58:58'),
(20, 24, 41, '545', 1, NULL, '0', '545', 'Red', '2023-05-12 13:31:29', '2023-05-12 13:31:29'),
(21, 25, 30, '56', 1, NULL, '0', '56', 'Red', '2023-05-24 09:53:57', '2023-05-24 09:53:57'),
(22, 25, 42, '1500', 1, 'S', '0', '1500', 'Blue', '2023-05-24 09:53:57', '2023-05-24 09:53:57'),
(23, 26, 50, '11.5', 2, NULL, '0', '23', 'Blue', '2023-05-25 16:03:12', '2023-05-25 16:03:12'),
(24, 27, 157, '24.5', 5, NULL, '0', '122.5', 'Blue', '2023-06-27 10:21:34', '2023-06-27 10:21:34'),
(25, 28, 18, '1200', 1, 'M', '0', '1200', 'Red', '2023-07-11 16:04:08', '2023-07-11 16:04:08'),
(26, 28, 157, '24.5', 1, NULL, '0', '24.5', 'Blue', '2023-07-11 16:04:08', '2023-07-11 16:04:08');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
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
  `name` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
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
  `product_name` longtext NOT NULL,
  `slug` longtext NOT NULL,
  `price` double NOT NULL,
  `weight` float DEFAULT 0,
  `discount_price` double(8,2) NOT NULL,
  `wholesale_price` double DEFAULT NULL,
  `views` varchar(191) NOT NULL DEFAULT '0',
  `short_description` varchar(10091) NOT NULL,
  `long_description` longtext DEFAULT NULL,
  `size_variation` tinyint(1) NOT NULL DEFAULT 0,
  `video` varchar(191) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `is_featured` varchar(191) DEFAULT NULL,
  `is_popular` varchar(191) NOT NULL,
  `on_sale` tinyint(1) NOT NULL DEFAULT 0,
  `is_special` tinyint(1) NOT NULL DEFAULT 0,
  `sku` varchar(191) DEFAULT NULL,
  `brand_id` int(10) UNSIGNED DEFAULT NULL,
  `audio` varchar(191) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `slug`, `price`, `weight`, `discount_price`, `wholesale_price`, `views`, `short_description`, `long_description`, `size_variation`, `video`, `status`, `is_featured`, `is_popular`, `on_sale`, `is_special`, `sku`, `brand_id`, `audio`, `deleted_at`, `created_at`, `updated_at`) VALUES
(10, 'Cashmere Shwal red', 'cashmere-shwal-red', 2000, 100, 1000.00, 0, '0', '<p>Composition</p>\r\n<ul>\r\n<li>Elastic rib: Cotton 95%, Elastane 5%</li>\r\n<li>Lining: Cotton 100%</li>\r\n<li>Cotton 80%, Polyester 20%</li>\r\n</ul>\r\n<p>Art. No.</p>\r\n<ul>\r\n<li>183260098</li>\r\n</ul>', '<p>Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui. Excepteur sint occaecat cupidatat non proident.Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui. Excepteur sint occaecat cupidatat non proident.</p>', 0, NULL, 1, 'featured', 'notpopular', 0, 1, 'sweaadsada', NULL, NULL, NULL, '2020-10-20 23:45:42', '2022-11-02 02:29:07'),
(18, 'Cashmere sweater', 'cashmere-sweater', 1500, 25, 1200.00, 1000, '0', '<p>dsadadsa</p>', '<p>dsada</p>', 1, NULL, 1, 'featured', 'popular', 0, 1, 'Ea lorem aut culpa', NULL, NULL, NULL, '2020-11-18 00:35:51', '2022-11-03 01:20:23'),
(21, 'Ocean Blue Cashmere Color shawl (MHCS10)', 'ocean-blue-cashmere-color-shawl-mhcs10', 479, 50, 145.00, 825, '0', '<p>dsada</p>', NULL, 0, NULL, 1, 'unfeatured', 'popular', 0, 1, 'Labore ratione aute', NULL, '1608111480.mp3', NULL, '2020-12-16 03:53:00', '2022-11-02 03:37:57'),
(30, 'Cashmere Blue Colorshawl (MHSC01)', 'cashmere-blue-colorshawl-mhsc01', 66, NULL, 56.00, NULL, '0', '<p>ddasdsad</p>', '<p>dasda</p>', 0, NULL, 1, 'featured', 'popular', 0, 1, 'MHSC01', 6, NULL, NULL, '2021-01-31 11:44:45', '2022-09-13 05:59:44'),
(31, 'Dark Red Cashmere Color Shawl (MHCS03)', 'dark-red-cashmere-color-shawl-mhcs03', 250, NULL, 200.00, NULL, '0', '<ul>\r\n<li>Brand: Samsung</li>\r\n<li>Model No: RR20M2741R2/IM</li>\r\n<li>Color: Maroon</li>\r\n<li>Capacity: 192 LTRS</li>\r\n<li>Door Type: Single Door</li>\r\n<li>Cooling Type: External Condenser</li>\r\n<li>Anti bacterial gasket</li>\r\n<li>Egg cum and Ice Tray</li>\r\n<li>Works without Stabilizer</li>\r\n<li>Door Lock: Yes</li>\r\n<li>Fastest Ice Making :Yes</li>\r\n<li>Moist Balance Crisper: Yes</li>\r\n<li>Anti Bacteria Gasket :Yes</li>\r\n<li>Shelves Toughened Glass Shelves</li>\r\n<li>Exteriors High Gloss Designer Panel, Bar Handle</li>\r\n<li>Transparent Freezer Door, Transparent Shelf Utility</li>\r\n<li>Warranty: 2 years,Compressor 5 years</li>\r\n</ul>', NULL, 0, NULL, 1, 'featured', 'popular', 0, 1, 'MHCS03', 5, NULL, NULL, '2021-02-23 12:25:19', '2022-09-21 06:34:12'),
(33, 'Shady Pink Cashmere Color Shawl (MHCS06)', 'shady-pink-cashmere-color-shawl-mhcs06', 130, NULL, 150.00, NULL, '0', '<p>Attract the person you like with this beautiful red cashmere shawl. Beautiful, minimalistic, majestic, and handmade, the wrap is one of the many experiences that bring the ultimate delight into your life is the Cashmere Shawl.</p>', NULL, 0, NULL, 1, 'featured', 'popular', 0, 0, 'UA55M5500', 5, NULL, NULL, '2021-02-24 12:36:12', '2022-09-13 05:53:44'),
(34, 'Urban Hemp Backpack (MH-HBP01)', 'urban-hemp-backpack-mh-hbp01', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Three pocket hemp backpack. It is made up of a mixture of organic hemp and cotton. It has large zippered main compartment and two side water bottle holder pockets. There is three pockets at front with zippers. It also has a&nbsp;laptop compartment inside main pocket. It has adjustable and comfortable straps. It is 100% handmade in Nepal.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li style=\"margin: 0px; color: #777777; font-family: sans-serif;\"><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li style=\"margin: 0px; color: #777777; font-family: sans-serif;\"><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li style=\"margin: 0px; color: #777777; font-family: sans-serif;\"><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41&nbsp;cm) high x 10\" (25 cm) length x 5\" (13&nbsp;cm) depth</li>\r\n<li style=\"margin: 0px; color: #777777; font-family: sans-serif;\"><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;650 grams</li>\r\n<li style=\"margin: 0px; color: #777777; font-family: sans-serif;\"><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', '<p>Three pocket hemp backpack. It is made up of a mixture of organic hemp and cotton. It has large zippered main compartment and two side water bottle holder pockets. There is three pockets at front with zippers. It also has a laptop compartment inside main pocket. It has adjustable and comfortable straps. It is 100% handmade in Nepal.</p>\r\n<h3><strong>Logistics Partner &amp; Shipping Time</strong></h3>\r\n<p>We offer worldwide shipping (except India and Russia) with delivery times of 7-10 days. Stock items are dispatched within 1-3 days, while custom and bulk orders may take 2-3 weeks for production, depending on the design and quantities.</p>\r\n<p>Please note that we do not have control over shipment delays by the courier company. Once your order is shipped, we will provide you with a tracking number to monitor your shipment in real-time.</p>\r\n<h3><strong>Custom &amp; Duties Tax</strong></h3>\r\n<p>International orders may be subject to customs duty. The buyer is responsible for those charges. Mountain Handicrafts will not be responsible for any fee/customs/duty imposed as it differs country to country.</p>\r\n<p>However, we have recently been able to deliver goods to Europe without incurring any customs fees. While we cannot guarantee this, we will do our best to ensure your goods are delivered without any customs duties.</p>', 0, NULL, 1, NULL, 'popular', 0, 0, 'MH-HBP01', NULL, NULL, NULL, '2021-02-24 12:42:35', '2024-05-30 14:09:09'),
(36, 'Woolen Jacket (MHWJK-01)', 'woolen-jacket-mhwjk-01', 190, NULL, 135.00, NULL, '0', '<ul><li><strong>Display</strong><ul><li>32-inch Display</li><li>HD</li><li>1366x768 Screen Resolution</li><li>LED Screen Type</li><li>Ideal viewing distance of 4 - 6 ft</li></ul></li><li><strong>Size</strong><ul><li>738.4 x 441.7 x 93.2 mm Product Dimensions</li><li>6 kg Item Weight</li></ul></li><li><strong>Connectivity</strong><ul><li>1 USB Port</li><li>1 HDMI Port</li></ul></li><li><strong>Audio</strong><ul><li>Stereo 20W Speakers</li></ul></li></ul>', NULL, 0, NULL, 1, 'featured', 'popular', 0, 0, 'UA32FH4003R', 5, NULL, NULL, '2021-02-24 12:50:37', '2022-09-13 05:51:28'),
(37, 'Baby Pink Double Shed Color Shawl (MHDC02)', 'baby-pink-double-shed-color-shawl-mhdc02', 85, 100, 70.00, NULL, '0', '<figure class=\"table\">\r\n<table>\r\n<thead>\r\n<tr>\r\n<th colspan=\"2\">GENERAL SPECIFICATIONS</th>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<td>Dimensions (mm)</td>\r\n<td>561.8 x 349.1 x 47.9</td>\r\n</tr>\r\n<tr>\r\n<td>Weight with Stand</td>\r\n<td>4.1kg</td>\r\n</tr>\r\n<tr>\r\n<td>Weight without Stand</td>\r\n<td>3.9kg</td>\r\n</tr>\r\n<tr>\r\n<td>Remote</td>\r\n<td>Standard Remote</td>\r\n</tr>\r\n<tr>\r\n<td>Power Consumption (In Use)</td>\r\n<td>33W</td>\r\n</tr>\r\n<tr>\r\n<td>Warranty</td>\r\n<td>1 Year</td>\r\n</tr>\r\n<tr>\r\n<td>Package Contents</td>\r\n<td>TV Unit, Remote Control, TV Stand, Wall Mount</td>\r\n</tr>\r\n<tr>\r\n<td>Convenience Features</td>\r\n<td>On/Off Timer, Clock, Auto Channel Search</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</figure>', NULL, 0, NULL, 1, 'featured', 'popular', 0, 0, 'MHDC02', NULL, NULL, NULL, '2021-02-24 13:41:09', '2023-05-24 09:56:40'),
(38, 'Red Cashmere Color Shawl (MHCS03)', 'red-cashmere-color-shawl-mhcs03', 60, NULL, 75.00, NULL, '0', '<p><strong>GENERAL</strong></p><p><strong>Brand</strong></p><p>Samsung</p><p><strong>Model Name</strong></p><p>UA32M4010DRLXL</p><p><strong>Color</strong></p><p>Black</p><p><strong>Smart Tv</strong></p><p>No</p><p><strong>Curve TV</strong></p><p>No</p><p><strong>HD</strong></p><p>Full HD</p><p><strong>Package includes</strong></p><p>LED, remote, user guide, and warranty card.</p><p>&nbsp;</p>', NULL, 0, NULL, 1, 'featured', 'popular', 0, 0, 'MHCS03', 5, NULL, NULL, '2021-02-24 14:06:21', '2022-09-13 05:39:18'),
(40, 'Cashmere Shwal', 'cashmere-shwal', 552, 50, 264.00, NULL, '0', '<p>Nemo dolorem veniam.</p>', '<p>Quidem aute magna se.</p>', 0, NULL, 1, 'featured', 'popular', 0, 0, 'Non voluptate qui au', NULL, NULL, NULL, '2022-09-19 00:18:06', '2022-11-02 02:28:41'),
(41, 'Yak Sweater', 'yak-sweater', 724, 101, 545.00, NULL, '0', '<p>&nbsp;</p>\r\n<table class=\"uk-table uk-table-striped\" style=\"border-collapse: collapse; border-spacing: 0px; width: 1120px; margin-bottom: 0px; color: #666666; font-family: Rubik, sans-serif; font-size: 15px; letter-spacing: 1.5px; background-color: #f0f0f0;\">\r\n<tbody>\r\n<tr style=\"transition: background-color 0.1s linear 0s; background: #f8f8f8; border-top: 1px solid #e5e5e5; border-bottom: 1px solid #e5e5e5;\">\r\n<td style=\"padding: 16px 12px; vertical-align: middle;\">XS</td>\r\n<td style=\"padding: 16px 12px; vertical-align: middle;\">S</td>\r\n<td style=\"padding: 16px 12px; vertical-align: middle;\">M</td>\r\n<td style=\"padding: 16px 12px; vertical-align: middle;\">L</td>\r\n<td style=\"padding: 16px 12px; vertical-align: middle;\">XL</td>\r\n<td style=\"padding: 16px 12px; vertical-align: middle;\">2XL</td>\r\n<td style=\"padding: 16px 12px; vertical-align: middle;\">3XL</td>\r\n</tr>\r\n<tr style=\"transition: background-color 0.1s linear 0s;\">\r\n<td style=\"padding: 16px 12px; vertical-align: middle;\">34</td>\r\n<td style=\"padding: 16px 12px; vertical-align: middle;\">37</td>\r\n<td style=\"padding: 16px 12px; vertical-align: middle;\">40</td>\r\n<td style=\"padding: 16px 12px; vertical-align: middle;\">43</td>\r\n<td style=\"padding: 16px 12px; vertical-align: middle;\">46</td>\r\n<td style=\"padding: 16px 12px; vertical-align: middle;\">49</td>\r\n<td style=\"padding: 16px 12px; vertical-align: middle;\">52</td>\r\n</tr>\r\n</tbody>\r\n</table>', '<p>Debitis beatae conse.</p>', 0, NULL, 0, NULL, 'popular', 0, 1, 'yk-540', NULL, NULL, NULL, '2022-09-19 02:17:45', '2024-05-22 11:07:29'),
(42, 'Ocean Blue Cashmere Color shawl (MHCS100)', 'ocean-blue-cashmere-color-shawl-mhcs100', 1000, 30, 1500.00, NULL, '0', '<p>this is test product</p>', '<p>this is test product this is test product this is test product</p>', 1, NULL, 0, 'unfeatured', 'notpopular', 0, 0, 'MHCS10', NULL, NULL, NULL, '2022-09-22 09:46:03', '2022-11-03 00:40:21'),
(43, 'Mountain Travel Hemp Backpack (MH-HBP02)', 'mountain-travel-hemp-backpack-mh-hbp02', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Mountain Hemp Backpack. It is four&nbsp;pocket hemp backpack. It has two spacious compartments with zipper. A laptop compartment inside main pocket. It has additional flap closure on top with zipper. It has adjustable and comfortable straps. It is 100% handmade in Nepal.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;40 cm high x 12 cm depth x 34 cm depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', '<p>Three pocket hemp backpack. It is made up of a mixture of organic hemp and cotton. It has large zippered main compartment and two side water bottle holder pockets. There is three pockets at front with zippers. It also has a laptop compartment inside main pocket. It has adjustable and comfortable straps. It is 100% handmade in Nepal.</p>\r\n<h3><strong>Logistics Partner &amp; Shipping Time</strong></h3>\r\n<p>We offer worldwide shipping (except India and Russia) with delivery times of 7-10 days. Stock items are dispatched within 1-3 days, while custom and bulk orders may take 2-3 weeks for production, depending on the design and quantities.</p>\r\n<p>Please note that we do not have control over shipment delays by the courier company. Once your order is shipped, we will provide you with a tracking number to monitor your shipment in real-time.</p>\r\n<h3><strong>Custom &amp; Duties Tax</strong></h3>\r\n<p>International orders may be subject to customs duty. The buyer is responsible for those charges. Mountain Handicrafts will not be responsible for any fee/customs/duty imposed as it differs country to country.</p>\r\n<p>However, we have recently been able to deliver goods to&nbsp;Europe without incurring any customs fees. While we cannot guarantee this, we will do our best to ensure your goods are delivered without any customs duties.</p>', 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP02', NULL, NULL, NULL, '2023-05-24 12:50:55', '2024-05-30 14:07:07'),
(44, 'Hemp Travel Backpack (MH-HBP03)', 'hemp-travel-backpack-mh-hbp03', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Hemp Travel Backpack. Two pocket hemp backpack. Made up of a mixture of organic hemp and cotton. A large main compartment with zipper. Stripe pattern on side pockets and front pocketsA laptop compartment inside main pocket . It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP03', NULL, NULL, NULL, '2023-05-24 13:18:25', '2023-05-25 11:37:55'),
(45, 'Nepali Travel Hemp Backpack (MH-HBP04)', 'nepali-travel-hemp-backpack-mh-hbp04', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Nepali Travel Hemp Backpack. Three pocket backpack. Made up of a mixture of organic hemp and cotton. A large main compartment with zipper. Two water bottle holder side pockets. A laptop compartment inside main pocket. Two small compartment with zipper on front. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'popular', 0, 0, 'MH-HBP04', NULL, NULL, NULL, '2023-05-25 10:43:13', '2023-05-25 10:43:13'),
(46, 'Nepali Hemp Backpack (MH-HBP06)', 'nepali-hemp-backpack-mh-hbp06', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Nepali Hemp Backpack. Three pocket backpack. Made up of a mixture of organic hemp and cotton. A large main compartment with zipper. Two water bottle holder side pockets. A laptop compartment inside main pocket. Two small compartment with zipper on front. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP06', NULL, NULL, NULL, '2023-05-25 11:04:01', '2023-05-25 11:04:01'),
(47, 'Modern Hemp College Backpack (MH-HBP07)', 'modern-hemp-college-backpack-mh-hbp07', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Modern Hemp College Backpack. Two pocket hemp backpack. Made up of a mixture of organic hemp and cotton. A large main compartment with zipper. A small compartment with zipper on front. A laptop compartment inside main pocket. It has adjustable and comfortable straps.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP07', NULL, NULL, NULL, '2023-05-25 11:06:17', '2023-05-25 11:06:17'),
(48, 'Casual Hemp Backpack (MH-HBP10)', 'casual-hemp-backpack-mh-hbp10', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Casual&nbsp;Hemp Backpack. Four pocket hemp backpack. Made up of a mixture of organic hemp and cotton. A main compartment with zipper. Two water bottle holder side pockets. Three small pocket with zipper at front. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP10', NULL, NULL, NULL, '2023-05-25 11:08:52', '2023-05-25 11:08:52'),
(49, 'Natural Hemp Backpack (MH-HBP11)', 'natural-hemp-backpack-mh-hbp11', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Natural&nbsp;Hemp Backpack. Two pocket hemp backpack. Made up of a mixture of organic hemp and cotton. A main compartment with zipper. A small compartment with zipper at front. It has adjustable and comfortable straps. A laptop compartment inside main pocket. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP11', NULL, NULL, NULL, '2023-05-25 11:11:34', '2023-05-25 11:11:34'),
(50, 'Hippie Hemp Backpack (MH-HBP12)', 'hippie-hemp-backpack-mh-hbp12', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Hippie&nbsp;Hemp Backpack. Four pocket hemp backpack. Made up of a mixture of organic hemp and cotton. A single main compartment with zipper. Two water bottle holder side pockets. Three small compartment at front with zipper. It has adjustable and comfortable straps. A laptop compartment inside main pocket. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (40.64 cm) high x 10\" (25.4 cm) length x 5\" (12.7 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'popular', 0, 0, 'MH-HBP12', NULL, NULL, NULL, '2023-05-25 11:14:59', '2023-05-25 11:14:59'),
(51, 'Skull Printed Hemp Backpack (MH-HBP13)', 'skull-printed-hemp-backpack-mh-hbp13', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Skull Printed&nbsp;Hemp Backpack. Two pocket hemp backpack. Made up of a mixture of organic hemp and cotton. A skull design printed at front. A large main compartment with zipper. Two water bottle holder side pockets. A laptop compartment inside main pocket. It has adjustable and comfortable straps. A small compartment at front with zipper. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'popular', 0, 0, 'MH-HBP13', NULL, NULL, NULL, '2023-05-25 11:24:13', '2023-05-25 11:24:13'),
(52, 'Boho Hippie Hemp Backpack (MH-HBP14)', 'boho-hippie-hemp-backpack-mh-hbp14', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Boho Hippie&nbsp;Hemp Backpack. Three pocket hemp backpack. Made up of a mixture of organic hemp and cotton. A main compartment with zipper. Two water bottle holder side pockets. Two small compartment with zipper at front. A laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP14', NULL, NULL, NULL, '2023-05-25 11:26:26', '2023-05-25 11:26:26'),
(53, 'Hemp Hiking Backpack (MH-HBP15)', 'hemp-hiking-backpack-mh-hbp15', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Hemp Hiking Backpack. Three pocket hemp backpack. Made up of a mixture of organic hemp and cotton. A main compartment with zipper. Two water bottle holder side pockets. Two small compartment with zipper at front. A laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP15', NULL, NULL, NULL, '2023-05-25 11:28:01', '2023-05-25 11:28:01'),
(54, 'Multicolored Hemp Backpack (MH-HBP16)', 'multicolored-hemp-backpack-mh-hbp16', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Multicolored Hemp Backpack. Three pocket hemp backpack. Made up of a mixture of organic hemp and cotton. A main compartment with zipper. Two water bottle holder side pockets. Two small compartment with zipper at front. A laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP16', NULL, NULL, NULL, '2023-05-25 11:30:14', '2023-05-25 11:30:14'),
(55, 'Om Printed Hippie Hemp Backpack (MH-HBP17)', 'om-printed-hippie-hemp-backpack-mh-hbp17', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Om Printed Hippie&nbsp;Hemp Backpack. Two pocket hemp backpack. Made up of a mixture of organic hemp and cotton. Om design printed on the front. A main compartment with zipper. Two water bottle holder side pockets. One&nbsp;small compartment with zipper at front. A laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP17', NULL, NULL, NULL, '2023-05-25 11:32:26', '2023-05-25 11:32:26'),
(56, 'Multicolored Boho Hemp Backpack (MH-HBP18)', 'multicolored-boho-hemp-backpack-mh-hbp18', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Multicolored Boho&nbsp;Hemp Backpack. Three pocket hemp backpack. Made up of a mixture of organic hemp and cotton. A main compartment with zipper. Two water bottle holder side pockets. Two small compartment at front with zipper. A laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP18', NULL, NULL, NULL, '2023-05-25 11:34:29', '2023-05-25 11:34:29'),
(57, 'Hemp Backpack with Messi Print Design (MH-HBP19)', 'hemp-backpack-with-messi-print-design-mh-hbp19', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Hemp Backpack with Messi Print Design has two pockets. It is made up of a mixture of organic hemp and cotton and has Footballer Messi&nbsp;printed on the front. It has a main compartment with zipper and two water bottle holder side pockets. It also has one&nbsp;compartment with zipper at front and a laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'popular', 0, 0, 'MH-HBP19', NULL, NULL, NULL, '2023-05-26 11:58:41', '2023-05-26 11:58:41'),
(58, 'Organic Hemp Backpack (MH-HBP20)', 'organic-hemp-backpack-mh-hbp20', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Organic Hemp Backpack wiht four&nbsp;pockets. It is made up of a mixture of organic hemp and cotton. It has a main compartment with zipper and two water bottle holder side pockets. It also has three&nbsp;small compartment with zipper at front and a laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP20', NULL, NULL, NULL, '2023-05-26 12:06:08', '2023-05-26 12:06:08'),
(59, 'Owl Printed Hemp Bag (MH-HBP21)', 'owl-printed-hemp-bag-mh-hbp21', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Owl&nbsp;Printed Hemp Bag with two pockets. It is made up of a mixture of organic hemp and cotton. Owl design printed on the front. It has a main compartment with zipper and two water bottle holder side pockets. One&nbsp;small compartment with zipper at front. A laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP21', NULL, NULL, NULL, '2023-05-26 12:08:54', '2023-05-26 12:08:54'),
(60, 'Colorful Om Printed Hemp Bag (MH-HBP22)', 'colorful-om-printed-hemp-bag-mh-hbp22', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Colorful Om Printed Hemp Bag with two pockets. It is made up of a mixture of organic hemp and cotton with Om design printed on the front. It also has&nbsp;a main compartment with zipper and two water bottle holder side pockets. It hasone&nbsp;small compartment with zipper at front and&nbsp;laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP22', NULL, NULL, NULL, '2023-05-26 12:11:24', '2023-05-26 12:11:24'),
(61, 'Cannabis Printed Hemp Bag (MH-HBP23)', 'cannabis-printed-hemp-bag-mh-hbp23', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Cannabis&nbsp;Printed Hemp Bag with four&nbsp;pockets.Made up of a mixture of organic hemp and cotton with Hemp leaf&nbsp;design printed on the front. It has a&nbsp;main compartment with zipper and two water bottle holder side pockets. It also has three&nbsp;small compartments with zipper at front and&nbsp;a laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP23', NULL, NULL, NULL, '2023-05-26 12:13:11', '2023-05-26 12:13:11'),
(62, 'Natural Hemp Backpack (MH-HBP24)', 'natural-hemp-backpack-mh-hbp24', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Natural&nbsp;Hemp Backpack with three&nbsp;pockets. It is made up of a mixture of organic hemp and cotton. It has a&nbsp;main compartment with zipper and two water bottle holder side pockets. It also has two&nbsp;small compartment at front with zipper and a&nbsp;laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP24', NULL, NULL, NULL, '2023-05-26 12:15:12', '2023-05-26 12:15:12'),
(63, 'Hippie Hemp Bag (MH-HBP25)', 'hippie-hemp-bag-mh-hbp25', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Hippie&nbsp;Hemp Bag with four&nbsp;pockets. It is made up of a mixture of organic hemp and cotton. It has a&nbsp;main compartment with zipper and two water bottle holder side pockets. It also has three&nbsp;small compartments at front with zipper and a&nbsp;laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP25', NULL, NULL, NULL, '2023-05-26 12:17:01', '2023-05-26 12:17:01'),
(64, 'Uchiha Itachi Printed Hemp Bag (MH-HBP26)', 'uchiha-itachi-printed-hemp-bag-mh-hbp26', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Om Printed Hippie&nbsp;Hemp Backpack with two pockets. It is made up of a mixture of organic hemp and cotton with Om design printed on the front. It has a&nbsp;main compartment with zipper and two water bottle holder side pockets. It has one&nbsp;small compartment at front with zipper and a&nbsp;laptop compartment inside main pocket. It has adjustable and comfortable straps.It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP26', NULL, NULL, NULL, '2023-05-26 12:19:52', '2023-05-26 12:19:52'),
(65, 'Rainbow Designed Hemp Bag (MH-HBP27)', 'rainbow-designed-hemp-bag-mh-hbp27', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Rainbow Designed&nbsp;Hemp Bag with three&nbsp;pockets. It is made up of a mixture of organic hemp and cotton with rainbow design on the front. It has a main compartment with zipper and two water bottle holder side pockets.It also has two&nbsp;small compartment at front with zipper and a laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP27', NULL, NULL, NULL, '2023-05-26 12:21:53', '2023-05-26 12:21:53'),
(66, 'Tree, Sun and Moon Printed Hemp Bag (MH-HBP28)', 'tree-sun-and-moon-printed-hemp-bag-mh-hbp28', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Tree, Sun and Moon Printed Hemp Bag with two pockets. It is made up of a mixture of organic hemp and cotton with printed with tree, the sun and the moon at front. It has a&nbsp;main compartment with zipper and two water bottle holder side pockets. It also has one&nbsp;small compartment at front with zipper and a&nbsp;laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP28', NULL, NULL, NULL, '2023-05-26 12:24:13', '2023-05-26 12:24:13'),
(67, 'Boho Hippie Hemp Bag (MH-HBP29)', 'boho-hippie-hemp-bag-mh-hbp29', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Boho Hippie&nbsp;Hemp Bag with four&nbsp;pockets. It is made up of a mixture of organic hemp and cotton. It has a&nbsp;main compartment with zipper and two water bottle holder side pockets. It also has&nbsp;three&nbsp;small compartment at front with zipper and a&nbsp;laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP29', NULL, NULL, NULL, '2023-05-26 12:26:30', '2023-05-26 12:26:30'),
(68, 'Simple Hemp Backpack (MH-HBP30)', 'simple-hemp-backpack-mh-hbp30', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Simple&nbsp;Hemp Backpack with three pockets. It is made up of a mixture of organic hemp and cotton. It has a&nbsp;main compartment with zipper and two water bottle holder side pockets. It also has two&nbsp;small compartment at front with zipper and a laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP30', NULL, NULL, NULL, '2023-05-26 12:28:24', '2023-05-26 12:28:24');
INSERT INTO `products` (`id`, `product_name`, `slug`, `price`, `weight`, `discount_price`, `wholesale_price`, `views`, `short_description`, `long_description`, `size_variation`, `video`, `status`, `is_featured`, `is_popular`, `on_sale`, `is_special`, `sku`, `brand_id`, `audio`, `deleted_at`, `created_at`, `updated_at`) VALUES
(69, 'Unique Skull Printed Hemp Bag (MH-HBP31)', 'unique-skull-printed-hemp-bag-mh-hbp31', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Unique Skull Printed Hemp Bag with two pockets. It is made up of a mixture of organic hemp and cotton with Skull&nbsp;design printed on the front. It has a&nbsp;main compartment with zipper and two water bottle holder side pockets. It also has one&nbsp;small compartment at front with zipper and a&nbsp;laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP31', NULL, NULL, NULL, '2023-05-26 12:30:34', '2023-05-26 12:30:34'),
(70, 'Colorful Owl Printed Hemp Bag (MH-HBP32)', 'colorful-owl-printed-hemp-bag-mh-hbp32', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Colorful Owl Printed Hemp Backpack with&nbsp;two pockets. It is made up of a mixture of organic hemp and cotton with beautiful owl design printed on the front. It has a&nbsp;main compartment with zipper and two water bottle holder side pockets. It also has one&nbsp;small compartment at front with zipper and a&nbsp;laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP32', NULL, NULL, NULL, '2023-05-26 12:32:28', '2023-05-26 12:32:28'),
(71, 'Tree Printed Hemp Backpack (MH-HBP33)', 'tree-printed-hemp-backpack-mh-hbp33', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Tree&nbsp;Printed Hemp Backpack with two pockets. It is made up of a mixture of organic hemp and cotton with tree&nbsp;design printed on the front. It has a&nbsp;main compartment with zipper and two water bottle holder side pockets. It also has one&nbsp;small compartment at front with zipper and a&nbsp;laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP33', NULL, NULL, NULL, '2023-05-26 12:34:30', '2023-05-26 12:34:30'),
(72, 'Beautiful Owl Printed Hemp Bag (MH-HBP34)', 'beautiful-owl-printed-hemp-bag-mh-hbp34', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Beautiful Owl Printed Hemp Bag with two pockets. It is made up of a mixture of organic hemp and cotton with beautiful owl&nbsp;design printed on the front. It has a&nbsp;main compartment with zipper and two water bottle holder side pockets. It also has one&nbsp;small compartment at front with zipper and a&nbsp;laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP34', NULL, NULL, NULL, '2023-05-26 12:36:16', '2023-05-26 12:36:16'),
(73, 'Simple Hemp School Backpack (MH-HBP35)', 'simple-hemp-school-backpack-mh-hbp35', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Simple Hemp School Backpack with three pockets. It is made up of a mixture of organic hemp and cotton. It has a&nbsp;main compartment with zipper and two water bottle holder side pockets. It also has two&nbsp;small compartments at front with zipper and a&nbsp;laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP35', NULL, NULL, NULL, '2023-05-26 12:38:12', '2023-05-26 12:38:12'),
(74, 'Trendy Hippie Hemp Bag (MH-HBP36)', 'trendy-hippie-hemp-bag-mh-hbp36', 12, 650, 11.60, NULL, '0', '<p style=\"margin: 20px 0px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Trendy&nbsp;Hippie&nbsp;Hemp Bag with three pockets. It is made up of a mixture of organic hemp and cotton. It has a&nbsp;main compartment with zipper and two water bottle holder side pockets. It also has two&nbsp;small compartment with zipper at front and a&nbsp;laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP36', NULL, NULL, NULL, '2023-05-26 12:39:37', '2023-05-26 12:39:37'),
(75, 'Casual Boho Hemp Bag (MH-HBP37)', 'casual-boho-hemp-bag-mh-hbp37', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Casual Boho&nbsp;Hemp Bag with four&nbsp;pockets. It is made up of a mixture of organic hemp and cotton with a&nbsp;set of string to adjust the space of the bag. It has a&nbsp;main compartment with zipper and two water bottle holder side pockets. It also has three&nbsp;small compartment with zipper at front and a&nbsp;laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP37', NULL, NULL, NULL, '2023-05-26 12:41:20', '2023-05-26 12:41:20'),
(76, 'Hemp Laptop Backpack (MH-HBP38)', 'hemp-laptop-backpack-mh-hbp38', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Hemp laptop Backpack with three pockets. It is made up of a mixture of organic hemp and cotton. It has&nbsp;a main compartment with zipper and two water bottle holder side pockets. It also has one&nbsp;small compartment with zipper at front and one compartment with flap and button. It has a&nbsp;laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP38', NULL, NULL, NULL, '2023-05-26 12:42:50', '2023-05-26 12:42:50'),
(77, 'Hemp Travel Bag (MH-HBP39)', 'hemp-travel-bag-mh-hbp39', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Hemp Travel Backpack with four&nbsp;pockets. It is made up of a mixture of organic hemp and cotton. It has a&nbsp;main compartment with zipper and two water bottle holder side pockets. It also has three&nbsp;small compartment with zipper at front and a&nbsp;laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP39', NULL, NULL, NULL, '2023-05-26 12:44:14', '2023-05-26 12:44:14'),
(78, 'Natural Hippie Hemp Bag (MH-HBP40)', 'natural-hippie-hemp-bag-mh-hbp40', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Natural&nbsp;Hippie&nbsp;Hemp Bag with two pockets. It is made up of a mixture of organic hemp and cotton. It has a&nbsp;main compartment with zipper and two water bottle holder side pockets. It also has one&nbsp;small compartment with zipper at front and a&nbsp;laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP40', NULL, NULL, NULL, '2023-05-26 12:46:41', '2023-05-26 12:46:41'),
(79, 'Hippie Travel Hemp Bag (MH-HBP41)', 'hippie-travel-hemp-bag-mh-hbp41', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Hippie Travel Hemp Bag with four&nbsp;pockets. It is made up of a mixture of organic hemp and cotton. It has a&nbsp;main compartment with zipper and two water bottle holder side pocketss. It also has three&nbsp;small compartment with zipper at front and a&nbsp;laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP41', NULL, NULL, NULL, '2023-05-29 10:25:39', '2023-05-29 10:25:39'),
(80, 'Hippie Hemp School Backpack (MH-HBP42)', 'hippie-hemp-school-backpack-mh-hbp42', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Hippie Hemp School Backpack with five&nbsp;pockets. It is made up of a mixture of organic hemp and cotton with a&nbsp;strap on top to hang it on the wall. It has a&nbsp;main compartment with zipper and two water bottle holder side pockets: one with zipper and other with elastic strap. It also has four&nbsp;small compartment with zipper at front and a&nbsp;laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP42', NULL, NULL, NULL, '2023-05-29 10:26:58', '2023-05-29 10:26:58'),
(81, 'Hemp Backpack with Tree Print (MH-HBP43)', 'hemp-backpack-with-tree-print-mh-hbp43', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Tree Printed Hemp Backpack with two pockets. It is made up of a mixture of organic hemp and cotton with tree&nbsp;design printed on the front. It has a&nbsp;main compartment with zipper and two water bottle holder side pockets. It also has one&nbsp;small compartment with zipper at front and a&nbsp;laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP43', NULL, NULL, NULL, '2023-05-29 10:28:26', '2023-05-29 10:28:26'),
(82, 'Boho Hemp School Backpack (MH-HBP44)', 'boho-hemp-school-backpack-mh-hbp44', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Boho&nbsp;Hemp School Backpack with three pockets. It is made up of a mixture of organic hemp and cotton. It has a&nbsp;main compartment with zipper and two water bottle holder side pockets with zipper. It also has two&nbsp;small compartment with zipper at front and a&nbsp;laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP44', NULL, NULL, NULL, '2023-05-29 10:31:22', '2023-05-29 10:31:22'),
(83, 'Natural Hemp Travel Bag (MH-HBP45)', 'natural-hemp-travel-bag-mh-hbp45', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Natural&nbsp;Hemp Travel Bag with three pockets. It is made up of a mixture of organic hemp and cotton. It has a&nbsp;main compartment with zipper and two water bottle holder side pockets. It also has two&nbsp;small compartment with zipper at front and&nbsp;a laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP45', NULL, NULL, NULL, '2023-05-29 10:32:43', '2023-05-29 10:32:43'),
(84, 'Natural Hippie Hemp Backpack (MH-HBP46)', 'natural-hippie-hemp-backpack-mh-hbp46', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Natural&nbsp;Hippie&nbsp;Hemp Backpack with three pockets. It is made up of a mixture of organic hemp and cotton. It has a&nbsp;main compartment with zipper and two water bottle holder side pockets. It also has two&nbsp;small compartment with zipper at front and a&nbsp;laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP46', NULL, NULL, NULL, '2023-05-29 10:34:16', '2023-05-29 10:34:16'),
(85, 'Nepali Traditional Art Printed Hemp Backpack (MH-HBP47)', 'nepali-traditional-art-printed-hemp-backpack-mh-hbp47', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Nepali Art Printed Hemp Backpack with two pockets. It is made up of a mixture of organic hemp and cotton with traditional Nepali art printed at front. It has a&nbsp;main compartment with zipper and two water bottle holder side pockets. It also has one small compartment with zipper at front and a&nbsp;laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP47', NULL, NULL, NULL, '2023-05-29 10:36:05', '2023-05-29 10:36:05'),
(86, 'Raven and Skull Printed Hemp Bag (MH-HBP48)', 'raven-and-skull-printed-hemp-bag-mh-hbp48', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Raven and Skull Printed Hemp Bag with two pockets. It is made up of a mixture of organic hemp and cotton and raven and skull printed at fron. It has a&nbsp;main compartment with zipper and two water bottle holder side pockets. It also has one&nbsp;small compartment with zipper at front and&nbsp;a laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP48', NULL, NULL, NULL, '2023-05-29 10:37:39', '2023-05-29 10:37:39'),
(87, 'Skull Printed Hippie Backpack (MH-HBP49)', 'skull-printed-hippie-backpack-mh-hbp49', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Skull Printed&nbsp;Hemp Backpack with two pockets. It is made up of a mixture of organic hemp and cotton with artistic skull printed at front. It has a&nbsp;main compartment with zipper and two water bottle holder side pockets. It also has one&nbsp;small compartment with zipper at front and a&nbsp;laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP49', NULL, NULL, NULL, '2023-05-29 10:39:25', '2023-05-29 10:39:25'),
(88, 'Ganesha Printed Hemp Backpack (MH-HBP50)', 'ganesha-printed-hemp-backpack-mh-hbp50', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Ganesha&nbsp;Hemp Backpack with two pockets. It is made up of a mixture of organic hemp and cotton with Lord Ganesh printed at front. It has a&nbsp;main compartment with zipper and two water bottle holder side pockets. It also has one&nbsp;small compartment with zipper at front and a&nbsp;laptop compartment inside main pocket. It has adjustable and comfortable straps.It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP50', NULL, NULL, NULL, '2023-05-29 10:40:52', '2023-05-29 10:40:52'),
(89, 'Simple Black Hemp Backpack (MH-HBP51)', 'simple-black-hemp-backpack-mh-hbp51', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Simple Black&nbsp;Hemp Backpack with three pockets. It is made up of a mixture of organic hemp and cotton. It has a main compartment with zipper and two water bottle holder side pockets. It also has two&nbsp;small compartment with zipper at front and a&nbsp;laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP51', NULL, NULL, NULL, '2023-05-29 10:42:26', '2023-05-29 10:42:26'),
(90, 'Blue Hippie Hemp Backpack (MH-HBP52)', 'blue-hippie-hemp-backpack-mh-hbp52', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Blue&nbsp;Hippie&nbsp;Hemp Backpack with three pockets. It is made up of a mixture of organic hemp and cotton. It has a&nbsp;main compartment with zipper and two water bottle holder side pockets. It also has two&nbsp;small compartment with zipper at front and a&nbsp;laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP52', NULL, NULL, NULL, '2023-05-29 10:43:45', '2023-05-29 10:43:45'),
(91, 'Classic Hemp School Backpack (MH-HBP53)', 'classic-hemp-school-backpack-mh-hbp53', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Classic&nbsp;Hemp School Backpack with three pockets. It is made up of a mixture of organic hemp and cotton. It has a main compartment with zipper with a small strap at top to hang on wall. It also has two water bottle holder side pockets. It has two&nbsp;small compartment with zipper at front and a laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP53', NULL, NULL, NULL, '2023-05-29 10:45:23', '2023-05-29 10:45:23'),
(92, 'Hippie Travel Hemp Backpack (MH-HBP54)', 'hippie-travel-hemp-backpack-mh-hbp54', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Hippie Travel Hemp Backpack with three pockets. It is made up of a mixture of organic hemp and cotton. It has a&nbsp;main compartment with zipper and two water bottle holder side pockets. It also has two&nbsp;small compartment with zipper at front and a&nbsp;laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP54', NULL, NULL, NULL, '2023-05-29 10:47:00', '2023-05-29 10:47:00'),
(93, 'Hemp Backpack For School (MH-HBP55)', 'hemp-backpack-for-school-mh-hbp55', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Hemp Backpack for School with three pockets. It is made up of a mixture of organic hemp and cotton. It thas a&nbsp;main compartment with zipper and two water bottle holder side pockets. It also has two&nbsp;small compartment with zipper at front and a&nbsp;laptop compartment inside main pocket. It has adjustable and comfortable straps.It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP55', NULL, NULL, NULL, '2023-05-29 10:48:25', '2023-05-29 10:48:25'),
(94, 'Boho Hippie Travel Hemp Backpack (MH-HBP56)', 'boho-hippie-travel-hemp-backpack-mh-hbp56', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Boho&nbsp;Hippie Travel Hemp Backpack with four&nbsp;pockets. It is made up of a mixture of organic hemp and cotton. It has a&nbsp;main compartment with zipper and two water bottle holder side pockets. It also has three small compartment with zipper at front and&nbsp;a laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP56', NULL, NULL, NULL, '2023-05-29 10:49:38', '2023-05-29 10:49:38'),
(95, 'Hippie Designed Hemp Backpack (MH-HBP57)', 'hippie-designed-hemp-backpack-mh-hbp57', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Hippie Designed Hemp Backpack with three pockets. It is made up of a mixture of organic hemp and cotton. It has a&nbsp;main compartment with zipper and two water bottle holder side pockets. It has two&nbsp;small compartment with zipper at front and a&nbsp;laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.&nbsp;</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP57', NULL, NULL, NULL, '2023-05-29 10:51:13', '2023-05-29 10:51:13'),
(96, 'Simple Designed Hemp Backpack (MH-HBP58)', 'simple-designed-hemp-backpack-mh-hbp58', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Simple Designed&nbsp;Hemp Backpack with one&nbsp;pocket. It is made up of a mixture of organic hemp and cotton. It has a&nbsp;main compartment with zipper and two water bottle holder side pockets with strap to adjust. It has a&nbsp;laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP58', NULL, NULL, NULL, '2023-05-29 10:52:37', '2023-05-29 10:52:37'),
(97, 'Hemp School Backpack (MH-HBP59)', 'hemp-school-backpack-mh-hbp59', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Hemp School Backpack with three pockets. It is made up of a mixture of organic hemp and cotton. It also has&nbsp;a main compartment with zipper and two water bottle holder side pockets. It also has two&nbsp;small compartment with zipper at front and a&nbsp;laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP59', NULL, NULL, NULL, '2023-05-29 10:54:18', '2023-05-29 10:54:18'),
(98, 'Hemp Travel Backpack (MH-HBP60)', 'hemp-travel-backpack-mh-hbp60', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Hemp Travel Backpack with three pockets. It is made up of a mixture of organic hemp and cotton. It has a&nbsp;main compartment with zipper and two water bottle holder side pockets. It also has two&nbsp;small compartment with zipper at front and a&nbsp;laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP60', NULL, NULL, NULL, '2023-05-29 10:55:38', '2023-05-29 10:55:38'),
(99, 'Traditional Boho Designed Hemp Backpack (MH-HBP61)', 'traditional-boho-designed-hemp-backpack-mh-hbp61', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Traditional Boho Designed&nbsp;Hemp Backpack with four&nbsp;pockets. It is made up of a mixture of organic hemp and cotton. It has a&nbsp;main compartment with zipper and two water bottle holder side pockets. It also has three small compartment with zipper at front and a&nbsp;laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for&nbsp;travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP61', NULL, NULL, NULL, '2023-05-29 10:57:35', '2023-05-29 10:57:35'),
(100, 'Boho Hemp Backpack For School (MH-HBP62)', 'boho-hemp-backpack-for-school-mh-hbp62', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Boho&nbsp;Hemp Backpack For School with three pockets. It is made up of a mixture of organic hemp and cotton. It has a&nbsp;main compartment with zipper and two water bottle holder side pockets. It also has two&nbsp;small compartment with zipper at front and a&nbsp;laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP62', NULL, NULL, NULL, '2023-05-29 10:59:04', '2023-05-29 10:59:04'),
(101, 'Hemp Backpack with Traditional Art (MH-HBP63)', 'hemp-backpack-with-traditional-art-mh-hbp63', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Hemp Backpack With Traditional Art with two pockets. It is made up of a mixture of organic hemp and cotton with traditional art printed at front. It has a&nbsp;main compartment with zipper and two water bottle holder side pockets. It also has one&nbsp;small compartment with zipper at front and a&nbsp;laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP63', NULL, NULL, NULL, '2023-05-29 11:00:41', '2023-05-29 11:00:41'),
(102, 'Om Printed Hippie Hemp Bag (MH-HBP64)', 'om-printed-hippie-hemp-bag-mh-hbp64', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Om Printed&nbsp;Hippie&nbsp;Hemp Bag with two pockets. It is made up of a mixture of organic hemp and cotton. It has a&nbsp;main compartment with zipper and two water bottle holder side pockets. It also has one&nbsp;small compartment with zipper at front and a&nbsp;laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP64', NULL, NULL, NULL, '2023-05-29 11:02:09', '2023-05-29 11:02:09');
INSERT INTO `products` (`id`, `product_name`, `slug`, `price`, `weight`, `discount_price`, `wholesale_price`, `views`, `short_description`, `long_description`, `size_variation`, `video`, `status`, `is_featured`, `is_popular`, `on_sale`, `is_special`, `sku`, `brand_id`, `audio`, `deleted_at`, `created_at`, `updated_at`) VALUES
(103, 'Om Printed Hemp School Bag (MH-HBP65)', 'om-printed-hemp-school-bag-mh-hbp65', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Om Printed Hemp&nbsp;School Bag with two pocket. It is made up of a mixture of organic hemp and cotton. It has a&nbsp;main compartment with zipper and two water bottle holder side pockets. It also has one&nbsp;small compartment with zipper at front and a laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP65', NULL, NULL, NULL, '2023-05-29 11:03:50', '2023-05-29 11:03:50'),
(104, 'Shiva Printed Hemp Backpack (MH-HBP66)', 'shiva-printed-hemp-backpack-mh-hbp66', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Shiva Printed&nbsp;Hemp Backpack with two pocket hemp backpack. It is made up of a mixture of organic hemp and cotton with Lord Shiva printed at front. It has a&nbsp;main compartment with zipper and two water bottle holder side pockets. It also has one&nbsp;small compartment with zipper at front and&nbsp;laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP66', NULL, NULL, NULL, '2023-05-29 11:05:24', '2023-05-29 11:05:24'),
(105, 'Multi Pocket Hemp Backpack (MH-HBP67)', 'multi-pocket-hemp-backpack-mh-hbp67', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Multi Pocket&nbsp;Hemp Backpack with five&nbsp;pockets It is made up of a mixture of organic hemp and cotton. It has a&nbsp;main compartment with zipper and two water bottle holder side pockets. It also has four&nbsp;small compartment with zipper at front and a&nbsp;laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP67', NULL, NULL, NULL, '2023-05-29 11:06:49', '2023-05-29 11:06:49'),
(106, 'Hemp Backpack For Traveling (MH-HBP68)', 'hemp-backpack-for-traveling-mh-hbp68', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Hemp Backpack For Travelling with three pockets. It is made up of a mixture of organic hemp and cotton. It has a&nbsp;main compartment with zipper and&nbsp;flap with magnetic button to cover main compartment. It also has two water bottle holder side pockets. It has one&nbsp;small compartment with zipper at front and one small compartment at front with zipper on the flap and&nbsp;laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP68', NULL, NULL, NULL, '2023-05-29 11:08:31', '2023-05-29 11:08:31'),
(107, 'Trendy Hippie Hemp Bag (MH-HBP69)', 'trendy-hippie-hemp-bag-mh-hbp69', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Trendy&nbsp;Hippie&nbsp;Hemp Bag with four pockets. It is made up of a mixture of organic hemp and cotton. It has a&nbsp;main compartment with zipper and two water bottle holder side pockets with zipper. It also has three small compartment with zipper at front and a&nbsp;laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP69', NULL, NULL, NULL, '2023-05-29 11:10:34', '2023-05-29 11:10:34'),
(108, 'Long Hemp Backpack For School (MH-HBP70)', 'long-hemp-backpack-for-school-mh-hbp70', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Long&nbsp;Hemp Backpack For School with three pockets. It is made up of a mixture of organic hemp and cotton. It has a&nbsp;main compartment with zipper and a&nbsp;flap with magnetic button to cover main compartment. It also has two water bottle holder side pockets and one&nbsp;small compartment with zipper at front. It has one small compartment at front with zipper on the flap and a&nbsp;laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP70', NULL, NULL, NULL, '2023-05-29 11:12:31', '2023-05-29 11:12:31'),
(109, 'Urban Hippie Hemp Backpack (MH-HBP71)', 'urban-hippie-hemp-backpack-mh-hbp71', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Urban&nbsp;Hippie&nbsp;Hemp Backpack with three pockets. It is made up of a mixture of organic hemp and cotton. It has a large main compartment with flap and button loop closure with&nbsp;flap to cover main compartment with clips. It also has two water bottle holder side pockets with zipper and two&nbsp;small compartment with zipper at front. It has a&nbsp;laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP71', NULL, NULL, NULL, '2023-05-29 11:13:59', '2023-05-29 11:13:59'),
(110, 'Affordable Hemp Bagpack (MH-HBP72)', 'affordable-hemp-bagpack-mh-hbp72', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Affordable Hemp Backpack with three pockets. It is made up of a mixture of organic hemp and cotton. It has a large main compartment with flap and button loop closure with flap to cover main compartment with clips. It also has two water bottle holder side pockets with zipper and two small compartment with zipper at front. It has a laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP72', NULL, NULL, NULL, '2023-05-29 11:20:00', '2023-05-29 11:20:00'),
(111, 'Hemp Laptop Bagpack (MH-HBP73)', 'hemp-laptop-bagpack-mh-hbp73', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Hemp Laptop Backpack with three pockets. It is made up of a mixture of organic hemp and cotton. It has a large main compartment with flap and button loop closure with flap to cover main compartment with clips. It also has two water bottle holder side pockets with zipper and two small compartment with zipper at front. It has a laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP73', NULL, NULL, NULL, '2023-05-29 11:22:44', '2023-05-29 11:22:44'),
(112, 'Simple Laptop Hemp Backpack (MH-HBP74)', 'simple-laptop-hemp-backpack-mh-hbp74', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Simple Laptop Hemp Backpack with three pockets. It is made up of a mixture of organic hemp and cotton. It has a large main compartment with flap and button loop closure with flap to cover main compartment with clips. It also has two water bottle holder side pockets with zipper and two small compartment with zipper at front. It has a laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP74', NULL, NULL, NULL, '2023-05-29 11:27:03', '2023-05-29 11:27:03'),
(113, 'Pattern Printed Hemp Backpack (MH-HBP75)', 'pattern-printed-hemp-backpack-mh-hbp75', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Pattern Printed Hemp Backpack with three pockets. It is made up of a mixture of organic hemp and cotton. It has a large main compartment with flap and button loop closure with flap to cover main compartment with clips. It also has two water bottle holder side pockets with zipper and two small compartment with zipper at front. It has a laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP75', NULL, NULL, NULL, '2023-05-29 11:29:30', '2023-05-29 11:29:30'),
(114, 'Multi Pocket Hemp Backpack (MH-HBP76)', 'multi-pocket-hemp-backpack-mh-hbp76', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Multi Pocket Hemp Backpack with three pockets. It is made up of a mixture of organic hemp and cotton. It has a large main compartment with flap and button loop closure with flap to cover main compartment with clips. It also has two water bottle holder side pockets with zipper and two small compartment with zipper at front. It has a laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP76', NULL, NULL, NULL, '2023-05-29 11:31:23', '2023-05-29 11:31:23'),
(115, 'Fashionable Hemp Travel Backpack (MH-HBP77)', 'fashionable-hemp-travel-backpack-mh-hbp77', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Fashionable Hemp Travel Backpack with three pockets. It is made up of a mixture of organic hemp and cotton. It has a large main compartment with flap and button loop closure with flap to cover main compartment with clips. It also has two water bottle holder side pockets with zipper and two small compartment with zipper at front. It has a laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP77', NULL, NULL, NULL, '2023-05-29 11:36:27', '2023-05-29 11:36:27'),
(116, 'Stylish Hemp Backpack (MH-HBP78)', 'stylish-hemp-backpack-mh-hbp78', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Stylish Hemp Backpack with three pockets. It is made up of a mixture of organic hemp and cotton. It has a large main compartment with flap and button loop closure with flap to cover main compartment with clips. It also has two water bottle holder side pockets with zipper and two small compartment with zipper at front. It has a laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP78', NULL, NULL, NULL, '2023-05-29 11:38:46', '2023-05-29 11:38:46'),
(117, 'Trendy Fashionable Hemp Backpack (MH-HBP79)', 'trendy-fashionable-hemp-backpack-mh-hbp79', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Trendy Fashionable Hemp Backpack with three pockets. It is made up of a mixture of organic hemp and cotton. It has a large main compartment with flap and button loop closure with flap to cover main compartment with clips. It also has two water bottle holder side pockets with zipper and two small compartment with zipper at front. It has a laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP79', NULL, NULL, NULL, '2023-05-29 11:43:14', '2023-05-29 11:43:14'),
(118, 'Fashionable and Stylish Hemp Laptop Backpack (MH-HBP80)', 'fashionable-and-stylish-hemp-laptop-backpack-mh-hbp80', 12, 650, 11.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Fashionable and Stylish Hemp Laptop Backpack with three pockets. It is made up of a mixture of organic hemp and cotton. It has a large main compartment with flap and button loop closure with flap to cover main compartment with clips. It also has two water bottle holder side pockets with zipper and two small compartment with zipper at front. It has a laptop compartment inside main pocket. It has adjustable and comfortable straps. It can be used for travelling, store books, laptop and other accessories etc.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Material:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;16\" (41 cm) high x 10\" (25 cm) length x 5\" (13 cm) depth</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:</span>&nbsp;22.93 oz (650 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HBP80', NULL, NULL, NULL, '2023-05-29 11:46:11', '2023-05-29 11:46:11'),
(119, 'Cannabis Printed Hemp Purse (MH-HP01)', 'cannabis-printed-hemp-purse-mh-hp01', 7, 90, 6.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Cannabis Printed Hemp Purse. It is made of&nbsp;hemp and cotton. It has 3 pockets. It is a shoulder strap bag with adjustable shoulder strap. The shoulder strap can be detached. It has a practical belt loop at back for hands free wearing.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Fabric:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Height:&nbsp;</span>6.3\" (16 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Width:&nbsp;</span>10.63\" (27 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Waist belt:&nbsp;</span>Adjustable up to 50.39\" (128 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:&nbsp;</span>3.17 oz (90 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HP01', NULL, NULL, NULL, '2023-05-29 12:07:16', '2023-05-29 12:20:53'),
(120, 'Peace Sign Embroidered Hemp Purse (MH-HP02)', 'peace-sign-embroidered-hemp-purse-mh-hp02', 7, 90, 6.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Peace Sign Embroidered Hemp Purse. It is made of&nbsp;hemp and cotton. It has 3 pockets. It is a shoulder strap bag with adjustable shoulder strap. The shoulder strap can be detached. It has a practical belt loop at back for hands free wearing.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Fabric:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Height:&nbsp;</span>6.3\" (16 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Width:&nbsp;</span>10.63\" (27 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Waist belt:&nbsp;</span>Adjustable up to 50.39\" (128 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:&nbsp;</span>3.17 oz (90 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HP02', NULL, NULL, NULL, '2023-05-29 12:09:32', '2023-05-29 12:20:45'),
(121, 'Simple Hemp Purse (MH-HP03)', 'simple-hemp-purse-mh-hp03', 7, 90, 6.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Simple Hemp Purse. It is made of&nbsp;hemp and cotton. It has 3 pockets. It is a shoulder strap bag with adjustable shoulder strap. The shoulder strap can be detached. It has a practical belt loop at back for hands free wearing.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;Assorted/Mixed (Moss green and Blue)</li>\r\n<li><span style=\"font-weight: bolder;\">Fabric:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Height:&nbsp;</span>6.3\" (16 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Width:&nbsp;</span>10.63\" (27 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Waist belt:&nbsp;</span>Adjustable up to 50.39\" (128 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:&nbsp;</span>3.17 oz (90 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HP03', NULL, NULL, NULL, '2023-05-29 12:11:04', '2023-05-29 12:20:34'),
(122, 'Natural Hemp Purse (MH-HP04)', 'natural-hemp-purse-mh-hp04', 7, 90, 6.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Natural Hemp Purse. It is made of&nbsp;hemp and cotton. It has 3 pockets. It is a shoulder strap bag with adjustable shoulder strap. The shoulder strap can be detached. It has a practical belt loop at back for hands free wearing.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Fabric:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Height:&nbsp;</span>6.3\" (16 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Width:&nbsp;</span>10.63\" (27 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Waist belt:&nbsp;</span>Adjustable up to 50.39\" (128 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:&nbsp;</span>3.17 oz (90 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HP04', NULL, NULL, NULL, '2023-05-29 12:12:50', '2023-05-29 12:20:23'),
(123, 'Hemp Card Holder Purse (MH-HP05)', 'hemp-card-holder-purse-mh-hp05', 7, 90, 6.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Hemp Card Holder Purse. It is made of&nbsp;hemp and cotton. It has 3 pockets. It is a shoulder strap bag with adjustable shoulder strap. The shoulder strap can be detached. It has a practical belt loop at back for hands free wearing.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Fabric:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Height:&nbsp;</span>6.3\" (16 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Width:&nbsp;</span>10.63\" (27 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Waist belt:&nbsp;</span>Adjustable up to 50.39\" (128 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:&nbsp;</span>3.17 oz (90 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HP05', NULL, NULL, NULL, '2023-05-29 12:14:10', '2023-05-29 12:20:13'),
(124, 'Purple Colored Hemp Purse (MH-HP06)', 'purple-colored-hemp-purse-mh-hp06', 7, 90, 6.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Purple Colored Hemp Purse. It is made of&nbsp;hemp and cotton. It has 3 pockets. It is a shoulder strap bag with adjustable shoulder strap. The shoulder strap can be detached. It has a practical belt loop at back for hands free wearing.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Fabric:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Height:&nbsp;</span>6.3\" (16 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Width:&nbsp;</span>10.63\" (27 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Waist belt:&nbsp;</span>Adjustable up to 50.39\" (128 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:&nbsp;</span>3.17 oz (90 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HP06', NULL, NULL, NULL, '2023-05-29 12:16:01', '2023-05-29 12:20:03'),
(125, 'Embroidered Hemp Purse (MH-HP07)', 'embroidered-hemp-purse-mh-hp07', 7, 90, 6.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Embroidered Hemp Purse. It is made of&nbsp;hemp and cotton. It has 3 pockets. It is a shoulder strap bag with adjustable shoulder strap. The shoulder strap can be detached. It has a practical belt loop at back for hands free wearing.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Fabric:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Height:&nbsp;</span>6.3\" (16 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Width:&nbsp;</span>10.63\" (27 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Waist belt:&nbsp;</span>Adjustable up to 50.39\" (128 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:&nbsp;</span>3.17 oz (90 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HP07', NULL, NULL, NULL, '2023-05-29 12:17:05', '2023-05-29 12:19:22'),
(126, 'Hemp Smoking Case Purse (MH-HP08)', 'hemp-smoking-case-purse-mh-hp08', 7, 90, 6.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Hemp Smoking Case Purse from Nepal. It is made of&nbsp;hemp and cotton. It has 3 pockets. It is a shoulder strap bag with adjustable shoulder strap. The shoulder strap can be detached. It has a practical belt loop at back for hands free wearing.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Fabric:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Height:&nbsp;</span>6.3\" (16 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Width:&nbsp;</span>10.63\" (27 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Waist belt:&nbsp;</span>Adjustable up to 50.39\" (128 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:&nbsp;</span>3.17 oz (90 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HP08', NULL, NULL, NULL, '2023-05-29 12:18:56', '2023-05-29 12:18:56'),
(127, 'Natural Hemp Passport Bag (MH-HPB01)', 'natural-hemp-passport-bag-mh-hpb01', 10, 90, 9.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Natural Hemp Passport Bag. It is made of&nbsp;hemp and cotton. It has 3 pockets. It is a shoulder strap bag with adjustable shoulder strap. The shoulder strap can be detached. It has a practical belt loop at back for hands free wearing.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Fabric:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Height:&nbsp;</span>6.3\" (16 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Width:&nbsp;</span>10.63\" (27 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Waist belt:&nbsp;</span>Adjustable up to 50.39\" (128 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:&nbsp;</span>3.17 oz (90 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'popular', 0, 0, 'MH-HPB01', NULL, NULL, NULL, '2023-05-30 10:11:50', '2023-05-30 10:11:50'),
(128, 'Red Hemp Passport Bag (MH-HPB02)', 'red-hemp-passport-bag-mh-hpb02', 10, 90, 9.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Red Hemp Passport Bag. It is made of&nbsp;hemp and cotton. It has 3 pockets. It is a shoulder strap bag with adjustable shoulder strap. The shoulder strap can be detached. It has a practical belt loop at back for hands free wearing.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Fabric:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Height:&nbsp;</span>6.3\" (16 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Width:&nbsp;</span>10.63\" (27 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Waist belt:&nbsp;</span>Adjustable up to 50.39\" (128 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:&nbsp;</span>3.17 oz (90 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HPB02', NULL, NULL, NULL, '2023-05-30 10:13:13', '2023-05-30 10:13:13'),
(129, 'Simple Hemp Passport Bag (MH-HPB03)', 'simple-hemp-passport-bag-mh-hpb03', 10, 90, 9.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Simple Hemp Passport Bag. It is made of&nbsp;hemp and cotton. It has 3 pockets. It is a shoulder strap bag with adjustable shoulder strap. The shoulder strap can be detached. It has a practical belt loop at back for hands free wearing.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Fabric:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Height:&nbsp;</span>6.3\" (16 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Width:&nbsp;</span>10.63\" (27 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Waist belt:&nbsp;</span>Adjustable up to 50.39\" (128 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:&nbsp;</span>3.17 oz (90 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'popular', 0, 0, 'MH-HPB03', NULL, NULL, NULL, '2023-05-30 10:14:42', '2023-05-30 10:14:42'),
(130, 'Stylish Hemp Passport Bag (MH-HPB04)', 'stylish-hemp-passport-bag-mh-hpb04', 10, 90, 9.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Stylish Hemp Passport Bag. It is made of&nbsp;hemp and cotton. It has 3 pockets. It is a shoulder strap bag with adjustable shoulder strap. The shoulder strap can be detached. It has a practical belt loop at back for hands free wearing.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Fabric:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Height:&nbsp;</span>6.3\" (16 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Width:&nbsp;</span>10.63\" (27 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Waist belt:&nbsp;</span>Adjustable up to 50.39\" (128 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:&nbsp;</span>3.17 oz (90 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HPB04', NULL, NULL, NULL, '2023-05-30 10:17:12', '2023-05-30 10:17:12'),
(131, 'Hippie Hemp Passport Bag (MH-HPB05)', 'hippie-hemp-passport-bag-mh-hpb05', 10, 90, 9.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Hippie Hemp Passport Bag. It is made of&nbsp;hemp and cotton. It has 3 pockets. It is a shoulder strap bag with adjustable shoulder strap. The shoulder strap can be detached. It has a practical belt loop at back for hands free wearing.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Fabric:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Height:&nbsp;</span>6.3\" (16 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Width:&nbsp;</span>10.63\" (27 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Waist belt:&nbsp;</span>Adjustable up to 50.39\" (128 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:&nbsp;</span>3.17 oz (90 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HPB05', NULL, NULL, NULL, '2023-05-30 10:19:19', '2023-05-30 10:19:19'),
(132, 'Striped Hemp Passport Bag (MH-HPB06)', 'striped-hemp-passport-bag-mh-hpb06', 10, 90, 9.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Striped Hemp Passport Bag. It is made of&nbsp;hemp and cotton. It has 3 pockets. It is a shoulder strap bag with adjustable shoulder strap. The shoulder strap can be detached. It has a practical belt loop at back for hands free wearing.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Fabric:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Height:&nbsp;</span>6.3\" (16 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Width:&nbsp;</span>10.63\" (27 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Waist belt:&nbsp;</span>Adjustable up to 50.39\" (128 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:&nbsp;</span>3.17 oz (90 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HPB06', NULL, NULL, NULL, '2023-05-30 10:22:05', '2023-05-30 10:22:05'),
(133, 'Trendy Hemp Passport Bag (MH-HPB07)', 'trendy-hemp-passport-bag-mh-hpb07', 10, 90, 9.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Trendy Hemp Passport Bag. It is made of&nbsp;hemp and cotton. It has 3 pockets. It is a shoulder strap bag with adjustable shoulder strap. The shoulder strap can be detached. It has a practical belt loop at back for hands free wearing.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Fabric:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Height:&nbsp;</span>6.3\" (16 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Width:&nbsp;</span>10.63\" (27 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Waist belt:&nbsp;</span>Adjustable up to 50.39\" (128 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:&nbsp;</span>3.17 oz (90 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HPB07', NULL, NULL, NULL, '2023-05-30 10:24:55', '2023-05-30 10:24:55'),
(134, 'Yellow Hemp Passport Bag (MH-HPB08)', 'yellow-hemp-passport-bag-mh-hpb08', 10, 90, 9.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Yellow Hemp Passport Bag. It is made of&nbsp;hemp and cotton. It has 3 pockets. It is a shoulder strap bag with adjustable shoulder strap. The shoulder strap can be detached. It has a practical belt loop at back for hands free wearing.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Fabric:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Height:&nbsp;</span>6.3\" (16 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Width:&nbsp;</span>10.63\" (27 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Waist belt:&nbsp;</span>Adjustable up to 50.39\" (128 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:&nbsp;</span>3.17 oz (90 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HPB08', NULL, NULL, NULL, '2023-05-30 10:27:40', '2023-05-30 10:27:40'),
(135, 'Boho Hemp Passport Bag (MH-HPB09)', 'boho-hemp-passport-bag-mh-hpb09', 10, 90, 9.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Boho Hemp Passport Bag. It is made of&nbsp;hemp and cotton. It has 3 pockets. It is a shoulder strap bag with adjustable shoulder strap. The shoulder strap can be detached. It has a practical belt loop at back for hands free wearing.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Fabric:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Height:&nbsp;</span>6.3\" (16 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Width:&nbsp;</span>10.63\" (27 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Waist belt:&nbsp;</span>Adjustable up to 50.39\" (128 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:&nbsp;</span>3.17 oz (90 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'popular', 0, 0, 'MH-HPB09', NULL, NULL, NULL, '2023-05-30 10:29:13', '2023-05-30 10:29:13'),
(136, 'Hippie Boho Hemp Passport Bag (MH-HPB10)', 'hippie-boho-hemp-passport-bag-mh-hpb10', 10, 90, 9.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Hippie Boho Hemp Passport Bag. It is made of hemp and cotton. It has 3 pockets. It is a shoulder strap bag with adjustable shoulder strap. The shoulder strap can be detached. It has a practical belt loop at back for hands free wearing.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Fabric:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Height:&nbsp;</span>6.3\" (16 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Width:&nbsp;</span>10.63\" (27 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Waist belt:&nbsp;</span>Adjustable up to 50.39\" (128 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:&nbsp;</span>3.17 oz (90 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HPB10', NULL, NULL, NULL, '2023-05-30 10:32:58', '2023-05-30 10:32:58');
INSERT INTO `products` (`id`, `product_name`, `slug`, `price`, `weight`, `discount_price`, `wholesale_price`, `views`, `short_description`, `long_description`, `size_variation`, `video`, `status`, `is_featured`, `is_popular`, `on_sale`, `is_special`, `sku`, `brand_id`, `audio`, `deleted_at`, `created_at`, `updated_at`) VALUES
(137, 'Patterned Hemp Passport Bag (MH-HPB11)', 'patterned-hemp-passport-bag-mh-hpb11', 10, 90, 9.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Patterned Hemp Passport Bag. It is made of&nbsp;hemp and cotton. It has 3 pockets. It is a shoulder strap bag with adjustable shoulder strap. The shoulder strap can be detached. It has a practical belt loop at back for hands free wearing.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Fabric:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Height:&nbsp;</span>6.3\" (16 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Width:&nbsp;</span>10.63\" (27 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Waist belt:&nbsp;</span>Adjustable up to 50.39\" (128 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:&nbsp;</span>3.17 oz (90 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'popular', 0, 0, 'MH-HPB11', NULL, NULL, NULL, '2023-05-30 10:34:18', '2023-05-30 10:34:18'),
(138, 'Reddish Boho Hemp Passport Bag (MH-HPB12)', 'reddish-boho-hemp-passport-bag-mh-hpb12', 10, 90, 9.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Reddish Boho Hemp Passport Bag. It is made of&nbsp;hemp and cotton. It has 3 pockets. It is a shoulder strap bag with adjustable shoulder strap. The shoulder strap can be detached. It has a practical belt loop at back for hands free wearing.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Fabric:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Height:&nbsp;</span>6.3\" (16 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Width:&nbsp;</span>10.63\" (27 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Waist belt:&nbsp;</span>Adjustable up to 50.39\" (128 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:&nbsp;</span>3.17 oz (90 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HPB12', NULL, NULL, NULL, '2023-05-30 10:35:14', '2023-05-30 10:35:14'),
(139, 'Gheri Designed Hemp Passport Bag (MH-HPB13)', 'gheri-designed-hemp-passport-bag-mh-hpb13', 10, 90, 9.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Gheri Designed Hemp Passport Bag. It is made of&nbsp;hemp and cotton. It has 3 pockets. It is a shoulder strap bag with adjustable shoulder strap. The shoulder strap can be detached. It has a practical belt loop at back for hands free wearing.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Fabric:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Height:&nbsp;</span>6.3\" (16 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Width:&nbsp;</span>10.63\" (27 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Waist belt:&nbsp;</span>Adjustable up to 50.39\" (128 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:&nbsp;</span>3.17 oz (90 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HPB13', NULL, NULL, NULL, '2023-05-30 10:36:53', '2023-05-30 10:36:53'),
(140, 'Hemp and Cotton Passport Bag (MH-HPB14)', 'hemp-and-cotton-passport-bag-mh-hpb14', 10, 90, 9.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Hemp and Cotton Passport Bag. It is made of&nbsp;hemp and cotton. It has 3 pockets. It is a shoulder strap bag with adjustable shoulder strap. The shoulder strap can be detached. It has a practical belt loop at back for hands free wearing.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Fabric:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Height:&nbsp;</span>6.3\" (16 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Width:&nbsp;</span>10.63\" (27 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Waist belt:&nbsp;</span>Adjustable up to 50.39\" (128 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:&nbsp;</span>3.17 oz (90 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HPB14', NULL, NULL, NULL, '2023-05-30 10:38:57', '2023-05-30 10:38:57'),
(141, 'Affordable Hemp Passport Bag (MH-HPB15)', 'affordable-hemp-passport-bag-mh-hpb15', 10, 90, 95.00, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Affordable Hemp Passport Bag. It is made of&nbsp;hemp and cotton. It has 3 pockets. It is a shoulder strap bag with adjustable shoulder strap. The shoulder strap can be detached. It has a practical belt loop at back for hands free wearing.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Fabric:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Height:&nbsp;</span>6.3\" (16 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Width:&nbsp;</span>10.63\" (27 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Waist belt:&nbsp;</span>Adjustable up to 50.39\" (128 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:&nbsp;</span>3.17 oz (90 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'popular', 0, 0, 'MH-HPB15', NULL, NULL, NULL, '2023-05-30 10:40:51', '2023-05-30 10:40:51'),
(142, 'Rectangular Hemp Passport Bag (MH-HPB16)', 'rectangular-hemp-passport-bag-mh-hpb16', 10, 90, 9.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Rectangular Hemp Passport Bag. It is made of&nbsp;hemp and cotton. It has 3 pockets. It is a shoulder strap bag with adjustable shoulder strap. The shoulder strap can be detached. It has a practical belt loop at back for hands free wearing.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span> Mixed</li>\r\n<li><span style=\"font-weight: bolder;\">Fabric:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Height:&nbsp;</span>6.3\" (16 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Width:&nbsp;</span>10.63\" (27 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Waist belt:&nbsp;</span>Adjustable up to 50.39\" (128 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:&nbsp;</span>3.17 oz (90 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HPB16', NULL, NULL, NULL, '2023-05-30 10:43:18', '2023-05-30 10:43:18'),
(143, 'Hemp Passport Bag with Gheri Design (MH-HPB17)', 'hemp-passport-bag-with-gheri-design-mh-hpb17', 10, 90, 9.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Hemp Passport Bag with Gheri Design. It is made of hemp and cotton. It has 3 pockets. It is a shoulder strap bag with adjustable shoulder strap. The shoulder strap can be detached. It has a practical belt loop at back for hands free wearing.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Fabric:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Height:&nbsp;</span>6.3\" (16 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Width:&nbsp;</span>10.63\" (27 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Waist belt:&nbsp;</span>Adjustable up to 50.39\" (128 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:&nbsp;</span>3.17 oz (90 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HPB17', NULL, NULL, NULL, '2023-05-30 10:45:43', '2023-05-30 10:45:43'),
(144, 'Circular Hemp Passport Bag (MH-HPB18)', 'circular-hemp-passport-bag-mh-hpb18', 10, 90, 9.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Circular Hemp Passport Bag. It is made of&nbsp;hemp and cotton. It has 3 pockets. It is a shoulder strap bag with adjustable shoulder strap. The shoulder strap can be detached. It has a practical belt loop at back for hands free wearing.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Fabric:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Height:&nbsp;</span>6.3\" (16 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Width:&nbsp;</span>10.63\" (27 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Waist belt:&nbsp;</span>Adjustable up to 50.39\" (128 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:&nbsp;</span>3.17 oz (90 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'popular', 0, 0, 'MH-HPB18', NULL, NULL, NULL, '2023-05-30 10:48:50', '2023-05-30 10:48:50'),
(145, 'Hemp Shoulder Passport Bag (MH-HPB19)', 'hemp-shoulder-passport-bag-mh-hpb19', 10, 90, 9.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Hemp Shoulder Passport Bag. It is made of&nbsp;hemp and cotton. It has 3 pockets. It is a shoulder strap bag with adjustable shoulder strap. The shoulder strap can be detached. It has a practical belt loop at back for hands free wearing.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Fabric:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Height:&nbsp;</span>6.3\" (16 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Width:&nbsp;</span>10.63\" (27 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Waist belt:&nbsp;</span>Adjustable up to 50.39\" (128 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:&nbsp;</span>3.17 oz (90 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HPB20', NULL, NULL, NULL, '2023-05-30 10:50:32', '2023-05-30 10:50:32'),
(146, 'Gheri Shoulder Passport Bag (MH-HPB20)', 'gheri-shoulder-passport-bag-mh-hpb20', 10, 90, 9.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Gheri Shoulder Passport Bag. It is made of&nbsp;hemp and cotton. It has 3 pockets. It is a shoulder strap bag with adjustable shoulder strap. The shoulder strap can be detached. It has a practical belt loop at back for hands free wearing.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Fabric:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Height:&nbsp;</span>6.3\" (16 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Width:&nbsp;</span>10.63\" (27 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Waist belt:&nbsp;</span>Adjustable up to 50.39\" (128 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:&nbsp;</span>3.17 oz (90 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HPB20', NULL, NULL, NULL, '2023-05-30 10:57:08', '2023-05-30 10:57:08'),
(147, 'Hippie Hemp Shoulder Passport Bag (MH-HPB21)', 'hippie-hemp-shoulder-passport-bag-mh-hpb21', 10, 90, 9.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Hippie Hemp Shoulder Passport Bag. It is made of&nbsp;hemp and cotton. It has 3 pockets. It is a shoulder strap bag with adjustable shoulder strap. The shoulder strap can be detached. It has a practical belt loop at back for hands free wearing.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Fabric:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Height:&nbsp;</span>6.3\" (16 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Width:&nbsp;</span>10.63\" (27 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Waist belt:&nbsp;</span>Adjustable up to 50.39\" (128 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:&nbsp;</span>3.17 oz (90 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HPB21', NULL, NULL, NULL, '2023-05-30 10:59:16', '2023-05-30 10:59:16'),
(148, 'Pink Gheri Hemp Passport Bag (MH-HPB22)', 'pink-gheri-hemp-passport-bag-mh-hpb22', 10, 90, 9.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Pink Gheri Hemp Passport Bag. It is made of&nbsp;hemp and cotton. It has 3 pockets. It is a shoulder strap bag with adjustable shoulder strap. The shoulder strap can be detached. It has a practical belt loop at back for hands free wearing.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Fabric:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Height:&nbsp;</span>6.3\" (16 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Width:&nbsp;</span>10.63\" (27 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Waist belt:&nbsp;</span>Adjustable up to 50.39\" (128 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:&nbsp;</span>3.17 oz (90 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HPB22', NULL, NULL, NULL, '2023-05-30 11:01:18', '2023-05-30 11:01:18'),
(149, 'Stylish Hemp Shoulder Passport Bag (MH-HPB23)', 'stylish-hemp-shoulder-passport-bag-mh-hpb23', 10, 90, 9.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Stylish Hemp Shoulder Passport Bag. It is made of&nbsp;hemp and cotton. It has 3 pockets. It is a shoulder strap bag with adjustable shoulder strap. The shoulder strap can be detached. It has a practical belt loop at back for hands free wearing.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Fabric:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Height:&nbsp;</span>6.3\" (16 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Width:&nbsp;</span>10.63\" (27 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Waist belt:&nbsp;</span>Adjustable up to 50.39\" (128 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:&nbsp;</span>3.17 oz (90 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HPB23', NULL, NULL, NULL, '2023-05-30 11:04:00', '2023-05-30 11:04:00'),
(150, 'Elegant Hemp Passport Bag (MH-HPB24)', 'elegant-hemp-passport-bag-mh-hpb24', 10, 90, 9.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Elegant Hemp Passport Bag. It is made of&nbsp;hemp and cotton. It has 3 pockets. It is a shoulder strap bag with adjustable shoulder strap. The shoulder strap can be detached. It has a practical belt loop at back for hands free wearing.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Fabric:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Height:&nbsp;</span>6.3\" (16 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Width:&nbsp;</span>10.63\" (27 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Waist belt:&nbsp;</span>Adjustable up to 50.39\" (128 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:&nbsp;</span>3.17 oz (90 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HPB24', NULL, NULL, NULL, '2023-05-30 11:07:19', '2023-05-30 11:07:19'),
(151, 'Elegant Gheri Designed Hemp Passport Bag (MH-HPB25)', 'elegant-gheri-designed-hemp-passport-bag-mh-hpb25', 10, 90, 9.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Elegant Gheri Designed Hemp Passport Bag. It is made of&nbsp;hemp and cotton. It has 3 pockets. It is a shoulder strap bag with adjustable shoulder strap. The shoulder strap can be detached. It has a practical belt loop at back for hands free wearing.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Fabric:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Height:&nbsp;</span>6.3\" (16 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Width:&nbsp;</span>10.63\" (27 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Waist belt:&nbsp;</span>Adjustable up to 50.39\" (128 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:&nbsp;</span>3.17 oz (90 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'popular', 0, 0, 'MH-HPB25', NULL, NULL, NULL, '2023-05-30 11:10:44', '2023-05-30 11:10:44'),
(152, 'Organic Hemp Passport Bag (MH-HPB26)', 'organic-hemp-passport-bag-mh-hpb26', 10, 90, 9.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Organic Hemp Passport Bag. It is made of&nbsp;hemp and cotton. It has 3 pockets. It is a shoulder strap bag with adjustable shoulder strap. The shoulder strap can be detached. It has a practical belt loop at back for hands free wearing.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Fabric:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Height:&nbsp;</span>6.3\" (16 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Width:&nbsp;</span>10.63\" (27 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Waist belt:&nbsp;</span>Adjustable up to 50.39\" (128 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:&nbsp;</span>3.17 oz (90 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HPB26', NULL, NULL, NULL, '2023-05-30 11:12:34', '2023-05-30 11:12:34'),
(153, 'Gheri Designed Hemp Shoulder Passport Bag (MH-HPB27)', 'gheri-designed-hemp-shoulder-passport-bag-mh-hpb27', 10, 90, 9.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Gheri Designed Hemp Shoulder Passport Bag. It is made of&nbsp;hemp and cotton. It has 3 pockets. It is a shoulder strap bag with adjustable shoulder strap. The shoulder strap can be detached. It has a practical belt loop at back for hands free wearing.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Fabric:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Height:&nbsp;</span>6.3\" (16 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Width:&nbsp;</span>10.63\" (27 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Waist belt:&nbsp;</span>Adjustable up to 50.39\" (128 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:&nbsp;</span>3.17 oz (90 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HPB27', NULL, NULL, NULL, '2023-05-30 11:15:03', '2023-05-30 11:15:03'),
(154, 'Red Colored Hemp Passport Bag (MH-HPB29)', 'red-colored-hemp-passport-bag-mh-hpb29', 10, 90, 9.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Red Colored Hemp Passport Bag. It is made of&nbsp;hemp and cotton. It has 3 pockets. It is a shoulder strap bag with adjustable shoulder strap. The shoulder strap can be detached. It has a practical belt loop at back for hands free wearing.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Fabric:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Height:&nbsp;</span>6.3\" (16 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Width:&nbsp;</span>10.63\" (27 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Waist belt:&nbsp;</span>Adjustable up to 50.39\" (128 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:&nbsp;</span>3.17 oz (90 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HPB29', NULL, NULL, NULL, '2023-05-30 11:16:15', '2023-05-30 11:16:15'),
(155, 'Green Gheri Designed Hemp Passport Bag (MH-HPB30)', 'green-gheri-designed-hemp-passport-bag-mh-hpb30', 10, 90, 9.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Green Gheri Designed Hemp Passport Bag. It is made of&nbsp;hemp and cotton. It has 3 pockets. It is a shoulder strap bag with adjustable shoulder strap. The shoulder strap can be detached. It has a practical belt loop at back for hands free wearing.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Fabric:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Height:&nbsp;</span>6.3\" (16 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Width:&nbsp;</span>10.63\" (27 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Waist belt:&nbsp;</span>Adjustable up to 50.39\" (128 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:&nbsp;</span>3.17 oz (90 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HPB30', NULL, NULL, NULL, '2023-05-30 11:17:43', '2023-05-30 11:17:43'),
(156, 'Simple Hemp Shoulder Passport Bag (MH-HPB31)', 'simple-hemp-shoulder-passport-bag-mh-hpb31', 10, 90, 9.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Simple Hemp Shoulder Passport Bag. It is made of&nbsp;hemp and cotton. It has 3 pockets. It is a shoulder strap bag with adjustable shoulder strap. The shoulder strap can be detached. It has a practical belt loop at back for hands free wearing.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Colors:</span>&nbsp;As seen in picture</li>\r\n<li><span style=\"font-weight: bolder;\">Fabric:</span>&nbsp;45% hemp and 55% cotton</li>\r\n<li><span style=\"font-weight: bolder;\">Height:&nbsp;</span>6.3\" (16 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Width:&nbsp;</span>10.63\" (27 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Waist belt:&nbsp;</span>Adjustable up to 50.39\" (128 cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Unit weight:&nbsp;</span>3.17 oz (90 grams)</li>\r\n<li><span style=\"font-weight: bolder;\">Handmade in Nepal</span></li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MH-HPB31', NULL, NULL, NULL, '2023-05-30 11:18:56', '2023-05-30 11:18:56'),
(157, 'Black Lotus Hand Embroidered Fine Shawl (MHES01)', 'black-lotus-hand-embroidered-fine-shawl-mhes01', 25, 350, 24.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Enjoy wearing the perfect Embroided fine shawl that gives you a bright vibe. The shawl has the perfect fiber needled to get an optimistic view. It can be worn on any occasion that attracts the people with its captivating embroidery threads.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:&nbsp;</span>Pure Cashmere Wool</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:&nbsp;</span>350 gram</li>\r\n<li><span style=\"font-weight: bolder;\">Size:&nbsp;</span>28\"/ 80\"</li>\r\n<li><span style=\"font-weight: bolder;\">Color:&nbsp;</span>White Printed in Black</li>\r\n<li>Meticulously embroidered&nbsp; by craftswomen of Nepal</li>\r\n<li>Prints of Lotus in White and Black shade</li>\r\n<li>Comfortable when worn</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'popular', 0, 0, 'MHES01', NULL, NULL, NULL, '2023-06-13 10:23:58', '2023-06-13 10:23:58'),
(158, 'Pink Flowered Hand Embroidered Shawl with Flower(MHES02)', 'pink-flowered-hand-embroidered-shawl-with-flowermhes02', 25, 350, 24.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">The pink flower design on the shawl makes it a perfect gift. With a high-quality fabric embroidered in the shawl, makes it a perfect fit on special occasions. A special dark and bright shades of the shawl gives you a beautiful aura around.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:&nbsp;</span>Pure Cashmere Wool</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:&nbsp;</span>350 gram</li>\r\n<li><span style=\"font-weight: bolder;\">Size:&nbsp;</span>28\"/ 80\"</li>\r\n<li><span style=\"font-weight: bolder;\">Color:&nbsp;</span>Pink&nbsp;Printed in Black</li>\r\n<li>A perfect gift to give</li>\r\n<li>Prints of flower in the Pink</li>\r\n<li>Comfortable when worn</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'popular', 0, 0, 'MHES02', NULL, NULL, NULL, '2023-06-13 10:29:30', '2023-06-13 10:29:30'),
(159, 'Hand Embroidered Cashmere Shawl (MHES03)', 'hand-embroidered-cashmere-shawl-mhes03', 25, 350, 24.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Bright, Elegant and smoothing design is what makes an Embroidered Cashmere Shawl better. Needled with high-quality fiber makes the shawl a lite. You can wear this shawl casually in and out from home and make yourself warm when you wrap it around.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:&nbsp;</span>Pure Cashmere Wool</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:&nbsp;</span>350 gram</li>\r\n<li><span style=\"font-weight: bolder;\">Size:&nbsp;</span>28\"/ 80\"</li>\r\n<li><span style=\"font-weight: bolder;\">Color:&nbsp;</span>Threads of Red in Lite Purple</li>\r\n<li>&nbsp;Diligently embroidered by skilled craftswomen&nbsp;</li>\r\n<li>Prints of Branch in Red in solid Purple</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MHES03', NULL, NULL, NULL, '2023-06-14 10:29:16', '2023-06-14 10:29:16'),
(160, 'White Colored Embroidered Shawl (MHES04)', 'white-colored-embroidered-shawl-mhes04', 25, 350, 24.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">The White Colored Embroidered shawl is the perfect thing to wear for casual outings. Wrap around yourself to feel the cozy warmth it provides.&nbsp; Wear the shawl when you head casually to cast a positive and bold image of yourself.&nbsp;</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:&nbsp;</span>Pure Cashmere Wool</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:&nbsp;</span>350 gram</li>\r\n<li><span style=\"font-weight: bolder;\">Size:&nbsp;</span>28\"/ 80\"</li>\r\n<li><span style=\"font-weight: bolder;\">Color:&nbsp;</span>Golden Brown threads&nbsp;in pure White</li>\r\n<li>&nbsp;Diligently embroidered by skilled craftswomen&nbsp;</li>\r\n<li>Designed with golden brown fabric makes it more fashionable</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'popular', 0, 0, 'MHES04', NULL, NULL, NULL, '2023-06-14 10:30:57', '2023-06-14 10:30:57'),
(161, 'Mustard Color Embroidered Shawl (MHES05)', 'mustard-color-embroidered-shawl-mhes05', 25, 350, 24.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">A perfect shawl that can be gifted to show respect. Mustard Embroidered Shawl reflects a shrine of love and cares to anyone you give. It can be worn on special occasions to stand out from others. With a perfect fabric and color combination, this shawl can be your best choice to gift someone.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:&nbsp;</span>Pure Cashmere Wool</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:&nbsp;</span>350 gram</li>\r\n<li><span style=\"font-weight: bolder;\">Size:&nbsp;</span>28\"/ 80\"</li>\r\n<li><span style=\"font-weight: bolder;\">Color:&nbsp;</span>Threads of Golden brown in Ghee Color</li>\r\n<li>The needled design is smooth and neat&nbsp;</li>\r\n<li>Prints of Branch in Golden brown in Ghee color</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MHES05', NULL, NULL, NULL, '2023-06-14 10:32:50', '2023-06-14 10:32:50'),
(162, 'Heena Green Colored Embroidered Shawl (MHES06)', 'heena-green-colored-embroidered-shawl-mhes06', 25, 350, 24.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Shaded in green this shawl is a perfect partner for you in winter. Spend your winter wrapping around this Heena Green Shal that provides warmth with its pure Cashmere wool. A fashionable shawl handwoven in the most splendid way.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:&nbsp;</span>pure Cashmere Wool</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:&nbsp;</span>350 gram</li>\r\n<li><span style=\"font-weight: bolder;\">Size:&nbsp;</span>28\"/ 80\"</li>\r\n<li><span style=\"font-weight: bolder;\">Color:&nbsp;</span>Threads of Yellow in dark green</li>\r\n<li>&nbsp;A perfect option to wear in Winter</li>\r\n<li>Warm, fuzzy and beautiful</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'popular', 0, 0, 'MHES06', NULL, NULL, NULL, '2023-06-14 10:39:58', '2023-06-14 10:39:58'),
(163, 'Amber Colored Embroidered Shawl (MHES07)', 'amber-colored-embroidered-shawl-mhes07', 25, 350, 24.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">The golden-brown embroidered shawl gives you a bright effect. Perfectly handwoven by the craftswomen on Nepal with pure cashmere wool is all that you need to kick winter. Made with a&nbsp; pure cashmere Himalayan wool carries the aura on its own.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:&nbsp;</span>Pure Cashmere Wool</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:&nbsp;</span>350 gram</li>\r\n<li><span style=\"font-weight: bolder;\">Size:&nbsp;</span>28\"/ 80\"</li>\r\n<li><span style=\"font-weight: bolder;\">Color:&nbsp;</span>Threads of Golden Yellow in Turmeric color</li>\r\n<li>&nbsp;Diligently embroidered by skilled craftswomen&nbsp;</li>\r\n<li>Simple prints of golden threads</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MHES07', NULL, NULL, NULL, '2023-06-14 10:41:44', '2023-06-14 10:41:44'),
(164, 'Multi Colored Black Embroidered Shawl (MHES08)', 'multi-colored-black-embroidered-shawl-mhes08', 25, 350, 24.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Dark classic and party-themed Embroidered shawl can be worn during a party. The shawl reflects the glamourous looks with its perfectly waved patterns.&nbsp;In its splendor and majesty, the shawl is set to keep you hooked up in its muted shade and spirited patterns.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:&nbsp;</span>Pure Cashmere Wool</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:&nbsp;</span>350 gram</li>\r\n<li><span style=\"font-weight: bolder;\">Size:&nbsp;</span>28\"/ 80\"</li>\r\n<li><span style=\"font-weight: bolder;\">Color:&nbsp;</span>Black</li>\r\n<li>&nbsp;Gives a perfect glamorous look</li>\r\n<li>Prints of multicolor flowers in solid Black</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'popular', 0, 0, 'MHES08', NULL, NULL, NULL, '2023-06-14 10:43:31', '2023-06-14 10:43:31'),
(165, 'Hot Pink Colored Embroidered Shawl (MHES09)', 'hot-pink-colored-embroidered-shawl-mhes09', 25, 350, 24.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Bright shades, fine fabrics, and a pleasant touch of warm Cashmere wool with brilliantly weaved fabric wools defines a perfect Embroidery Shawl. Grace your winter with the adorable pink shawl to shine off in a most elegant way.&nbsp;Wear the shawl to those chilly casual night outs and exude a feminine yet powerful aura.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:&nbsp;</span>Pure Cashmere Wool</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:&nbsp;</span>350 gram</li>\r\n<li><span style=\"font-weight: bolder;\">Size:&nbsp;</span>28\"/ 80\"</li>\r\n<li><span style=\"font-weight: bolder;\">Color:&nbsp;</span>Pink</li>\r\n<li>&nbsp;Gives a perfect glamorous look</li>\r\n<li>Prints of multicolor flowers in solid Pink</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MHES09', NULL, NULL, NULL, '2023-06-14 10:45:15', '2023-06-14 10:45:15'),
(166, 'Himalayan Exclusive Embroidered Shawl (MHES10)', 'himalayan-exclusive-embroidered-shawl-mhes10', 25, 350, 24.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">A lovely shade of maroon to light up your spirits this winter, in the artfulness and warmth of absolutely handwoven Cashmere Embroidery Shawl is up for you. Wear this delicate and dazzling texture and feel the distinction in the warm grasp it nestles you in.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:&nbsp;</span>Pure Cashmere Wool</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:&nbsp;</span>350 gram</li>\r\n<li><span style=\"font-weight: bolder;\">Size:&nbsp;</span>28\"/ 80\"</li>\r\n<li><span style=\"font-weight: bolder;\">Color:&nbsp;</span>Red</li>\r\n<li>&nbsp;A sweet red Shawl to brighten up your mood.</li>\r\n<li>Needled with silver threads on red gives a royal look</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'popular', 0, 0, 'MHES10', NULL, NULL, NULL, '2023-06-14 10:46:27', '2023-06-14 10:46:27'),
(167, 'Warm Tone Colored Double Shed Shawl (MHDCS01)', 'warm-tone-colored-double-shed-shawl-mhdcs01', 21, 150, 20.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">This double shed cashmere shawl gives a warm tone. Wrap around yourself in both winter and summer. With low weight, the shawl is comfortable to wear.&nbsp;</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;Exclusive Blended Cashmere Wool</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:&nbsp;</span>150 gram</li>\r\n<li><span style=\"font-weight: bolder;\">Size:&nbsp;</span>28\"/ 80\"</li>\r\n<li><span style=\"font-weight: bolder;\">Color:&nbsp;</span>Mix of Orange and White color to give a warm tone</li>\r\n<li>Plain design to make it more simple and fashionable</li>\r\n<li>Pure Handmade in Nepal</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'popular', 0, 0, 'MHDCS01', NULL, NULL, NULL, '2023-06-14 10:49:50', '2023-06-14 10:49:50'),
(168, 'Baby Pink Double Shed Color Shawl (MHDCS02)', 'baby-pink-double-shed-color-shawl-mhdcs02', 21, 150, 20.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Leave a bold yet girly aura with this pink double shed color shawl. The shawl matches with your simple outfit and reflects the innocence within you.&nbsp;</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;Exclusive Branded Cashmere</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:&nbsp;</span>150 gram</li>\r\n<li><span style=\"font-weight: bolder;\">Size:&nbsp;</span>28\"/ 80\"</li>\r\n<li><span style=\"font-weight: bolder;\">Color:&nbsp;</span>Mix of Pink and White color to give a girlish tone</li>\r\n<li>Extremely comfortable to put on.</li>\r\n<li>Can be worn form both sides</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MHDCS02', NULL, NULL, NULL, '2023-06-14 10:51:46', '2023-06-14 10:51:46'),
(169, 'Hot Pink Double Shed Color Shawl (MHDCS03)', 'hot-pink-double-shed-color-shawl-mhdcs03', 21, 150, 20.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">The handwoven and bright sades of Cashmere are what make a shawl outstanding. Put this hot pink double shed shawl as it throws off a warm cozy vibe.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;Exclusive Branded Cashmere</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:&nbsp;</span>150 gram</li>\r\n<li><span style=\"font-weight: bolder;\">Size:&nbsp;</span>28\"/ 80\"</li>\r\n<li><span style=\"font-weight: bolder;\">Color:&nbsp;</span>Solid hot pink</li>\r\n<li>Can be worn in any occasions</li>\r\n<li>Extra lite and comfortable to wear</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'popular', 0, 0, 'MHDCS03', NULL, NULL, NULL, '2023-06-14 10:53:59', '2023-06-14 10:53:59'),
(170, 'Coffee Grey Double Shed Color Shawl (MHDCS04)', 'coffee-grey-double-shed-color-shawl-mhdcs04', 21, 150, 20.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">The handwoven and bright sades of Cashmere are what make a shawl outstanding. Put this light and dark double shed shawl as it throws off a warm cozy vibe.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;Exclusive Branded Cashmere</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:&nbsp;</span>150 gram</li>\r\n<li><span style=\"font-weight: bolder;\">Size:&nbsp;</span>28\"/ 80\"</li>\r\n<li><span style=\"font-weight: bolder;\">Color:&nbsp;</span>Coffee and White color</li>\r\n<li>Can be worn in any occasions</li>\r\n<li>Extra lite and comfortable to wear</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MHDCS04', NULL, NULL, NULL, '2023-06-14 10:55:45', '2023-06-14 10:55:45'),
(171, 'Grey Cashmere with Golden Orange Natural Border Shawl (MHNBS01)', 'grey-cashmere-with-golden-orange-natural-border-shawl-mhnbs01', 20, 210, 19.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">The simple yet warm looks of Cashmere wool shawl is made from the high-quality fabrics by woven by skilled Nepalese craftswomen. The border shawl is your perfect partner for winter.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;Pure Fine Wool</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:&nbsp;</span>210 gram</li>\r\n<li><span style=\"font-weight: bolder;\">Size:&nbsp;</span>32\"/ 86\"</li>\r\n<li><span style=\"font-weight: bolder;\">Color:&nbsp;</span>Simple Grey&nbsp;</li>\r\n<li><span style=\"font-weight: bolder;\">Border Color:</span>&nbsp;Golden Orange</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:&nbsp;</span>4 Paddles</li>\r\n<li>Double-sided pattern</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'popular', 0, 0, 'MHNBS01', NULL, NULL, NULL, '2023-06-14 10:59:23', '2023-06-14 10:59:23'),
(172, 'Grey Shawl with Pink Natural Border(MHNBS02)', 'grey-shawl-with-pink-natural-bordermhnbs02', 20, 210, 19.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Grayish Pink Border shawl has the perfect color combination that is neither too bright nor too dark. Hand weaved by the craftswomen gives you a perfect Himalayan feeling of Cashmere wool.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;Pure Fine Wool</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:&nbsp;</span>210 gram</li>\r\n<li><span style=\"font-weight: bolder;\">Size:&nbsp;</span>32\"/ 86\"</li>\r\n<li><span style=\"font-weight: bolder;\">Color:&nbsp;</span>Simple Grey&nbsp;</li>\r\n<li><span style=\"font-weight: bolder;\">Border Color:</span>&nbsp;Lite Pink</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:&nbsp;</span>4 paddles</li>\r\n<li>Double-sided pattern</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MHNBS02', NULL, NULL, NULL, '2023-06-14 11:01:34', '2023-06-14 11:01:34'),
(173, 'Simple Grey Cashmere with Light Pink Natural Border Shawl (MHNBS03)', 'simple-grey-cashmere-with-light-pink-natural-border-shawl-mhnbs03', 20, 210, 19.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Grayish Pink Border shawl has the perfect color combination that is neither too bright nor too dark. Hand weaved by the craftswomen gives you a perfect Himalayan feeling of Cashmere wool.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;Pure Fine Wool</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:&nbsp;</span>210 gram</li>\r\n<li><span style=\"font-weight: bolder;\">Size:&nbsp;</span>32\"/ 86\"</li>\r\n<li><span style=\"font-weight: bolder;\">Color:&nbsp;</span>Simple Grey&nbsp;</li>\r\n<li><span style=\"font-weight: bolder;\">Border Color:</span>&nbsp;Lite Pink</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:&nbsp;</span>4 paddles</li>\r\n<li>Double-sided pattern</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MHNBS03', NULL, NULL, NULL, '2023-06-14 11:03:51', '2023-06-14 11:03:51');
INSERT INTO `products` (`id`, `product_name`, `slug`, `price`, `weight`, `discount_price`, `wholesale_price`, `views`, `short_description`, `long_description`, `size_variation`, `video`, `status`, `is_featured`, `is_popular`, `on_sale`, `is_special`, `sku`, `brand_id`, `audio`, `deleted_at`, `created_at`, `updated_at`) VALUES
(174, 'White Woolen Cashmere Light Blue Natural Border Shawl (MHNBS04)', 'white-woolen-cashmere-light-blue-natural-border-shawl-mhnbs04', 20, 210, 19.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">It has a perfect blueish natural cashmere wool border. Wrap around you with this elegant border shawl to any outings you go. With a holiday mood, the shawl can be your best friend in winter.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;Pure Fine Wool</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:&nbsp;</span>210 gram</li>\r\n<li><span style=\"font-weight: bolder;\">Size:&nbsp;</span>32\"/ 86\"</li>\r\n<li><span style=\"font-weight: bolder;\">Color:&nbsp;</span>&nbsp;Plain White</li>\r\n<li><span style=\"font-weight: bolder;\">Border Color:</span>&nbsp;Lite Blue</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:&nbsp;</span>4 paddles</li>\r\n<li>Double-sided pattern</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'popular', 0, 0, 'MHNBS04', NULL, NULL, NULL, '2023-06-14 11:06:20', '2023-06-14 11:06:20'),
(175, 'Crimson Colored Natural Border Shawl (MHNBS05)', 'crimson-colored-natural-border-shawl-mhnbs05', 20, 210, 19.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">The mixture of marron and silver grey color on the bordered shawl makes it outstanding from the others. Suitable for both men and women the shawl is a perfect thing to wrap around you when you go for any outings.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;Pure Fine Wool</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:&nbsp;</span>210 gram</li>\r\n<li><span style=\"font-weight: bolder;\">Size:&nbsp;</span>32\"/ 86\"</li>\r\n<li><span style=\"font-weight: bolder;\">Color:&nbsp;</span>Simple Grey&nbsp;</li>\r\n<li><span style=\"font-weight: bolder;\">Border Color:</span>&nbsp;Maroon</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:&nbsp;</span>4 paddles</li>\r\n<li>Double-sided pattern</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MHNBS05', NULL, NULL, NULL, '2023-06-14 11:09:12', '2023-06-14 11:09:12'),
(176, 'Exclusive Moss Green Colored Natural Border Shawl (MHNBS06)', 'exclusive-moss-green-colored-natural-border-shawl-mhnbs06', 20, 210, 19.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">The bright tone of this natural border shawl is perfect to reflect simplicity. With 210 grams of weight, the shawl is easier to wear and gives off enough warmth.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;Pure Fine Wool</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:&nbsp;</span>210 gram</li>\r\n<li><span style=\"font-weight: bolder;\">Size:&nbsp;</span>32\"/ 86\"</li>\r\n<li><span style=\"font-weight: bolder;\">Color:&nbsp;</span>Simple Grey&nbsp;</li>\r\n<li><span style=\"font-weight: bolder;\">Border Color:</span>&nbsp;Green</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:&nbsp;</span>4 paddles</li>\r\n<li>Double-sided pattern</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MHNBS06', NULL, NULL, NULL, '2023-06-14 11:11:27', '2023-06-14 11:11:27'),
(177, 'Maroon Colored  Bordered Natural Shawl (MHNBS07)', 'maroon-colored-bordered-natural-shawl-mhnbs07', 20, 210, 19.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">The maroon shawl with the Pink border is the luxurious shawl handwoven by the skilled craftswomen of Nepal. The length of the natural shawl are more than enough to cover your half than the body. Stay warm and beautiful with the pure fine wool shawl.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;Pure Fine Wool</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:&nbsp;</span>210 gram</li>\r\n<li><span style=\"font-weight: bolder;\">Size:&nbsp;</span>32\"/ 86\"</li>\r\n<li><span style=\"font-weight: bolder;\">Color:&nbsp;</span>Simple Pink</li>\r\n<li><span style=\"font-weight: bolder;\">Border Color:</span>&nbsp;Maroon</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:&nbsp;</span>4 paddles</li>\r\n<li>Double-sided pattern</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MHNBS07', NULL, NULL, NULL, '2023-06-14 11:13:59', '2023-06-14 11:13:59'),
(178, 'Exclusive Fine Natural Border Shawl (MHNBS10)', 'exclusive-fine-natural-border-shawl-mhnbs10', 20, 210, 19.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">The bright tone of this natural border shawl is perfect to reflect simplicity. With 210 grams of weight, the shawl is easier to wear and gives off enough warmth.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;Pure Fine Wool</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:&nbsp;</span>210 gram</li>\r\n<li><span style=\"font-weight: bolder;\">Size:&nbsp;</span>32\"/ 86\"</li>\r\n<li><span style=\"font-weight: bolder;\">Color:&nbsp;</span>Simple Grey&nbsp;</li>\r\n<li><span style=\"font-weight: bolder;\">Border Color:</span>&nbsp;Dark Grey</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:&nbsp;</span>4 paddles</li>\r\n<li>Double-sided pattern</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'popular', 0, 0, 'MHNBS10', NULL, NULL, NULL, '2023-06-14 11:15:29', '2023-06-14 11:15:29'),
(179, 'Flint Gray Natural Thick Shawl (MHNTS01)', 'flint-gray-natural-thick-shawl-mhnts01', 22.5, 220, 21.00, NULL, '0', '<div class=\"uk-margin\" style=\"margin-bottom: 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Our luxurious and beautiful thick shawls are so unbelievably delicate. Enveloping with one of these feels like the warmest, most warm hug you have ever had.</div>\r\n<form class=\"cart\" style=\"color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\" action=\"https://mountainhandicraft.com/cart\" method=\"post\">\r\n<div class=\"uk-margin\" style=\"margin-bottom: 20px;\">\r\n<div class=\"uk-padding-small uk-background-primary-lighten uk-border-rounded\" style=\"border-radius: 4px; padding: 15px; background-color: #d8eafc;\">\r\n<div class=\"uk-grid-small uk-child-width-1-1 uk-grid uk-grid-stack\" style=\"display: flex; flex-wrap: wrap; padding: 0px; list-style: none; margin: 0px 0px 0px -15px;\">\r\n<ul style=\"margin: 0px; padding-left: 15px; box-sizing: border-box; width: 544px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;Exclusive Yakwool Dhaka with Polymade</li>\r\n<li><span style=\"font-weight: bolder;\">Color:&nbsp;</span></li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;32\"/88\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;220 gram</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;8 Paddles</li>\r\n<li style=\"margin-bottom: 0px;\">Double-sided Pattern</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</form>', NULL, 0, NULL, 1, NULL, 'popular', 0, 0, 'MHNTS01', NULL, NULL, NULL, '2023-06-14 12:57:14', '2023-06-14 12:57:14'),
(180, 'Brown Natural Thick Shawl (MHNTS02)', 'brown-natural-thick-shawl-mhnts02', 22.5, 220, 21.00, NULL, '0', '<div style=\"color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Ideal lasting through the year. They will keep you warm on cool winter evenings and for covering cold shoulders on summer nights. They can be worn as a scarf, muffler and as a tie.</div>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;Exclusive Yakwool Dhaka with Polyamide</li>\r\n<li><span style=\"font-weight: bolder;\">Color:&nbsp;</span>Beige</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;32\"/88\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;220 gram</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;8 Paddles</li>\r\n<li>Double-sided Pattern</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MHNTS02', NULL, NULL, NULL, '2023-06-14 12:59:08', '2023-06-14 12:59:08'),
(181, 'Exclusive Grey Patterned Natural Thick Shawl (MHNTS03)', 'exclusive-grey-patterned-natural-thick-shawl-mhnts03', 22.5, 220, 21.00, NULL, '0', '<div style=\"color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">A warm cozy wrap inside this exclusive natural thick shawl is a blessing to a fashion. Weighing only 220 grams the shawl is extremely comfortable to put on and walk.</div>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;Exclusive Yakwool Dhaka with Polyamide</li>\r\n<li><span style=\"font-weight: bolder;\">Color:&nbsp;</span>Lite Grey</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;32\"/88\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;220 gram</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;8 Paddles</li>\r\n<li>Smooth curve Pattern</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'popular', 0, 0, 'MHNTS03', NULL, NULL, NULL, '2023-06-14 13:00:49', '2023-06-14 13:00:49'),
(182, 'Plain Patterned Natural Thick Shawl (MHNTS04)', 'plain-patterned-natural-thick-shawl-mhnts04', 22.5, 220, 21.00, NULL, '0', '<div style=\"color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Ideal lasting through the year. They will keep you warm on cool winter evenings and for covering cold shoulders on summer nights.</div>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;Exclusive Yakwool Dhaka with Polyamide</li>\r\n<li><span style=\"font-weight: bolder;\">Color:&nbsp;</span>Silver White</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;32\"/88\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;220 gram</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;8 Paddles</li>\r\n<li>Zig-zag Pattern</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MHNTS04', NULL, NULL, NULL, '2023-06-14 13:03:22', '2023-06-14 13:03:22'),
(183, 'Diamond Patterned Natural Thick Shawl (MHNTS05)', 'diamond-patterned-natural-thick-shawl-mhnts05', 22.5, 220, 21.00, NULL, '0', '<div style=\"color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">The stunning white pashmina stole in the finesse of pure pashmina, soft, warm and the epitome of classic style.&nbsp;Drape on a cold winter day and set an exclusive statement of style forever.</div>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;Exclusive Yakwool Dhaka with Polyamide</li>\r\n<li><span style=\"font-weight: bolder;\">Color:&nbsp;</span>Silver white</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;32\"/88\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;220 gram</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;8 Paddles</li>\r\n<li>Diamond box Pattern</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'popular', 0, 0, 'MHNTS05', NULL, NULL, NULL, '2023-06-14 13:05:52', '2023-06-14 13:05:52'),
(184, 'Silver Arrowhead Patterned Natural Thick Shawl (MHNTS06)', 'silver-arrowhead-patterned-natural-thick-shawl-mhnts06', 22.5, 220, 21.00, NULL, '0', '<div style=\"color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Our luxurious and beautiful thick shawls are so unbelievably delicate. Enveloping with one of these feels like the warmest, most warm hug you have ever had.</div>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;Exclusive Yakwool Dhaka with Polymide</li>\r\n<li><span style=\"font-weight: bolder;\">Color:&nbsp;</span>Silver</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;32\"/88\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;220 gram</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;8 Paddles</li>\r\n<li>Unended arrow Pattern</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MHNTS06', NULL, NULL, NULL, '2023-06-14 13:08:02', '2023-06-14 13:08:02'),
(185, 'Unened Arrow Patterned Natural Thick Shawl (MHNTS07)', 'unened-arrow-patterned-natural-thick-shawl-mhnts07', 22.5, 220, 21.00, NULL, '0', '<div style=\"color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">The coziest accessory you will find this winter. We know as it has been tried and tested here at the House of So Cosy. Warm, lightweight and oversized.</div>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;Exclusive Yakwool Dhaka with Polymide</li>\r\n<li><span style=\"font-weight: bolder;\">Color:&nbsp;&nbsp;</span>Dark&nbsp;Silver</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;32\"/88\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;220 gram</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;8 Paddles</li>\r\n<li>Unended arrow Pattern</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MHNTS07', NULL, NULL, NULL, '2023-06-14 13:10:08', '2023-06-14 13:10:08'),
(186, 'Lined Patterned Natural Thick Shawl (MHNTS08)', 'lined-patterned-natural-thick-shawl-mhnts08', 22.5, 220, 21.00, NULL, '0', '<div style=\"color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Our luxurious and beautiful thick shawls are so unbelievably delicate. Enveloping with one of these feels like the warmest, most warm hug you have ever had.</div>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;Exclusive Yakwool Dhaka with Polymide</li>\r\n<li><span style=\"font-weight: bolder;\">Color:&nbsp;</span>Silver</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;32\"/88\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;220 gram</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;8 Paddles</li>\r\n<li>Unended arrow Pattern</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'popular', 0, 0, 'MHNTS08', NULL, NULL, NULL, '2023-06-14 13:12:45', '2023-06-14 13:12:45'),
(187, 'Butterfly Designed Fine Wool Shawl (MHFWS01)', 'butterfly-designed-fine-wool-shawl-mhfws01', 25, 210, 24.50, NULL, '0', '<div style=\"color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">The coziest accessory you will find this winter. We know as it has been tried and tested here at the Himalaya. Warm, lightweight and oversized.</div>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;Exclusive Yakwool Dhaka&nbsp;</li>\r\n<li><span style=\"font-weight: bolder;\">Color:&nbsp;</span>Multicolor</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;32\"/88\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;210 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;8 Paddles</li>\r\n<li>Colorful patterns that look beautiful</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'popular', 0, 0, 'MHFWS01', NULL, NULL, NULL, '2023-06-14 13:14:47', '2023-06-14 13:14:47'),
(188, 'Reddish Elegant Designed Fine Wool Shawl (MHFWS02)', 'reddish-elegant-designed-fine-wool-shawl-mhfws02', 25, 210, 24.60, NULL, '0', '<div style=\"color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">The fine wool shawl is extremely soft and weaved with high-quality fabric. Fashionable and brilliantly designed, this shawl is the perfect thing to wrap around you in special occasions.</div>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;Exclusive Yakwool Dhaka&nbsp;</li>\r\n<li><span style=\"font-weight: bolder;\">Color:&nbsp;</span>Multicolor</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;32\"/88\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;210 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;8 Paddles</li>\r\n<li>Beautiful patterns in Red Color</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MHFWS02', NULL, NULL, NULL, '2023-06-14 13:17:17', '2023-06-14 13:17:17'),
(189, 'Classic Nepali Style Fine Wool Shawl (MHFWS03)', 'classic-nepali-style-fine-wool-shawl-mhfws03', 25, 210, 24.50, NULL, '0', '<div style=\"color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">The classic color combination of red and brown crafted in the most luxurious accessories of all - a fine wool shawl, to lead up your ethnic style in the most exquisite way.</div>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;Exclusive Yakwool Dhaka&nbsp;</li>\r\n<li><span style=\"font-weight: bolder;\">Color:&nbsp;</span>Multicolor</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;32\"/88\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;210 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;8 Paddles</li>\r\n<li>Colorful patterns that look simple</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MHFWS03', NULL, NULL, NULL, '2023-06-14 13:19:39', '2023-06-14 13:24:05'),
(190, 'Maroon Cashmere Fine Wool Shawl (MHFWS04)', 'maroon-cashmere-fine-wool-shawl-mhfws04', 25, 210, 24.50, NULL, '0', '<div style=\"color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">The beautiful shawl you will find this winter. We value your choice so we made it extra delicate, oversized and beautiful. The wool shawl is embroid beautifully by Nepalese craftswomen.</div>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;Exclusive Yakwool Dhaka&nbsp;</li>\r\n<li><span style=\"font-weight: bolder;\">Color:&nbsp;</span>Multicolor</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;32\"/88\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;210 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;8 Paddles</li>\r\n<li>Colorful patterns that look beautiful</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'popular', 0, 0, 'MHFWS04', NULL, NULL, NULL, '2023-06-14 13:23:22', '2023-06-14 13:23:22'),
(191, 'Exclusive Fine Wool Shawl (MHFWS05)', 'exclusive-fine-wool-shawl-mhfws05', 25, 210, 24.50, NULL, '0', '<div style=\"color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">The looks from brown and red fine wool shawl are always warming. Indeed a better option to wrap yourself with exclusive yak wool Dhaka this winter.</div>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;Exclusive Yakwool Dhaka&nbsp;</li>\r\n<li><span style=\"font-weight: bolder;\">Color:&nbsp;</span>Multicolor</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;32\"/88\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;210 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;8 Paddles</li>\r\n<li>Colorful patterns that are beautiful</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MHFWS05', NULL, NULL, NULL, '2023-06-14 13:26:06', '2023-06-14 13:26:06'),
(192, 'Hot Pink Kaju Pashmina Shawl (MHKPS01)', 'hot-pink-kaju-pashmina-shawl-mhkps01', 19, 160, 18.50, NULL, '0', '<div style=\"color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Wollen Pashmina Shawl in a pink is what adds beauty in girl\'s physique.&nbsp; Embroided delicately, the shawl is handpicked to you to make you stand out of the crowd.</div>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;Exclusive polyamide wool</li>\r\n<li><span style=\"font-weight: bolder;\">Color:&nbsp;</span>Pink</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;28\"/80\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;160 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;2 Paddles</li>\r\n<li>Designs are water printed that shines both in light and dark</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'popular', 0, 0, 'MHKPS01', NULL, NULL, NULL, '2023-06-14 13:29:01', '2023-06-14 13:29:01'),
(193, 'Olive Green Kaju Pashmina Shawl (MHKPS02)', 'olive-green-kaju-pashmina-shawl-mhkps02', 19, 160, 18.50, NULL, '0', '<div style=\"color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">The shawl is extremely silky and has a smooth grasp at the edges. Not only the shawl is extremely lite and beautiful, but the shawl can also be worn as a muffler, tie or as you wish.</div>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;Exclusive polyamide wool</li>\r\n<li><span style=\"font-weight: bolder;\">Color:</span>&nbsp;Olive</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;28\"/80\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;160 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;2 Paddles</li>\r\n<li>Designs are water printed that shines both in light and dark</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MHKPS02', NULL, NULL, NULL, '2023-06-14 13:30:31', '2023-06-14 13:41:00'),
(194, 'Crimson Colored Designed Kaju Pashmina Shawl (MHKPS03)', 'crimson-colored-designed-kaju-pashmina-shawl-mhkps03', 19, 160, 18.50, NULL, '0', '<div style=\"color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">One\'s boldness is color. And in the same colors, a Kaju Pashmina Shawl is handwoven in perfection and hence comes into the world of luxury accessorizing a winter accessory worth keeping. Pair the shawl with your plain winter outfits and let the colors reflect your bravery as you walk with them around.</div>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;Exclusive polyamide wool</li>\r\n<li><span style=\"font-weight: bolder;\">Color:</span>&nbsp;Olive</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;28\"/80\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;160 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;2 Paddles</li>\r\n<li>Designs are water printed that shines both in light and dark</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'popular', 0, 0, 'MHKPS03', NULL, NULL, NULL, '2023-06-14 13:32:25', '2023-06-14 13:32:25'),
(195, 'Colorful Designed Kaju Pashmina Shawl (MHKPS04)', 'colorful-designed-kaju-pashmina-shawl-mhkps04', 19, 160, 18.50, NULL, '0', '<div style=\"color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Nothing looks great than a girl in Chocolaty color pashmina shawl. With extra lite and delicate designs wrap around yourself in the chilling winter as well as in summer.</div>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;Exclusive polyamide wool</li>\r\n<li><span style=\"font-weight: bolder;\">Color:</span>&nbsp;Choclate</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;28\"/80\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;160 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;2 Paddles</li>\r\n<li>Designs are water printed that shines both in light and dark</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'popular', 0, 0, 'MHKPS04', NULL, NULL, NULL, '2023-06-14 13:34:34', '2023-06-14 13:34:34'),
(196, 'Multi Colored Kaju Pashmina Shawl (MHKPS05)', 'multi-colored-kaju-pashmina-shawl-mhkps05', 19, 160, 18.50, NULL, '0', '<div style=\"color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">One\'s boldness is color. And in the same colors, a Kaju Pashmina Shawl is handwoven in perfection and hence comes into the world of luxury accessorizing a winter accessory worth keeping. Pair the shawl with your plain winter outfits and let the colors reflect your bravery as you walk with them around.</div>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;Exclusive polyamide wool</li>\r\n<li><span style=\"font-weight: bolder;\">Color:</span>&nbsp;Olive</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;28\"/80\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;160 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;2 Paddles</li>\r\n<li>Designs are water printed that shines both in light and dark</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MHKPS05', NULL, NULL, NULL, '2023-06-14 13:36:09', '2023-06-14 13:36:09'),
(197, 'Nepali Pashmina Kaju Print Shawl (MHKPS06)', 'nepali-pashmina-kaju-print-shawl-mhkps06', 19, 160, 18.50, NULL, '0', '<div style=\"color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">The shawl is extremely silky and has a smooth grasp at the edges. Not only the shawl is extremely lite and beautiful, but the shawl can also be worn as a muffler, tie or as you wish.</div>\r\n<div style=\"color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<ul style=\"margin: 0px 0px 20px; padding-left: 30px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;Exclusive polyamide wool</li>\r\n<li><span style=\"font-weight: bolder;\">Color:</span>&nbsp;Multicolor</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;28\"/80\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;160 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;2 Paddles</li>\r\n<li>Designs are water printed that shines both in light and dark</li>\r\n</ul>\r\n</div>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MHKPS06', NULL, NULL, NULL, '2023-06-14 13:37:29', '2023-06-14 13:37:29'),
(198, 'Baby Pink Designed Kaju Pashmina Shawl (MHKPS07)', 'baby-pink-designed-kaju-pashmina-shawl-mhkps07', 19, 160, 18.50, NULL, '0', '<div style=\"color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">The shawl is extremely silky and has a smooth grasp at the edges. The baby pink color of the shawl with added design gives a positive and bright aura as you walk by. Spread love.&nbsp;</div>\r\n<div style=\"color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<ul style=\"margin: 0px 0px 20px; padding-left: 30px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;Exclusive polyamide wool</li>\r\n<li><span style=\"font-weight: bolder;\">Color:</span>&nbsp;Pink</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;28\"/80\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;160 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;2 Paddles</li>\r\n<li>Designs are water printed that shines both in light and dark</li>\r\n</ul>\r\n</div>', NULL, 0, NULL, 1, NULL, 'popular', 0, 0, 'MHKPS07', NULL, NULL, NULL, '2023-06-14 13:38:59', '2023-06-14 13:38:59'),
(199, 'Floral Designed Kaju Pashmina Shawl (MHKPS08)', 'floral-designed-kaju-pashmina-shawl-mhkps08', 19, 160, 18.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Dream about your fantasy as you wrap this beautiful pashmina shawl. Silky like Cadbury silk, and smooth like a cream, the shawl is comfortable and extremely lite to wear.&nbsp;</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;Exclusive polyamide wool</li>\r\n<li><span style=\"font-weight: bolder;\">Color:</span>&nbsp;Pink</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;28\"/80\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;160 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;2 Paddles</li>\r\n<li>Designs are water printed that shines both in light and dark</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'popular', 0, 0, 'MHKPS08', NULL, NULL, NULL, '2023-06-14 13:40:20', '2023-06-14 13:40:20'),
(200, 'Dark Coffee Colored Natural Shawl (MHNS01)', 'dark-coffee-colored-natural-shawl-mhns01', 20, 150, 19.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">The plain shawl adopts the natural color of Cashmere wool. No color indigents are used. This natural shawl is warm and has a smooth fabric texture when wrapped around.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;Exclusive branded Cashmere</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;150 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;28\"/ 80\" inches</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;2 Paddles</li>\r\n<li><span style=\"font-weight: bolder;\">Color:</span>&nbsp;Coffee</li>\r\n<li>It is a perfect natural wool shawl for those who are allergic to color and wool as well.</li>\r\n<li>The shawls are purely hand made in Nepal</li>\r\n<li>The materials used are eco-friendly</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'popular', 0, 0, 'MHNS01', NULL, NULL, NULL, '2023-06-15 10:49:21', '2023-06-15 10:49:21'),
(201, 'Charcoal Black Colored Natural Shawl (MHNS02)', 'charcoal-black-colored-natural-shawl-mhns02', 20, 150, 19.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">The perfect blends of black and grey make the Natural Cashmere Shawl even more attractive. The lite weight of the shawl makes you a perfect wrap around your body.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;Exclusive branded Cashmere</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;150 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;28\"/ 80\" inches</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;2 Paddles</li>\r\n<li><span style=\"font-weight: bolder;\">Color:</span>&nbsp;Charcoal</li>\r\n<li>It is a perfect natural wool shawl for those who are allergic to color and wool as well.</li>\r\n<li>The materials used are eco-friendly</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'popular', 0, 0, 'MHNS02', NULL, NULL, NULL, '2023-06-15 10:51:09', '2023-06-15 10:51:09'),
(202, 'Light Beige Colored Natural Shawl (MHNS03)', 'light-beige-colored-natural-shawl-mhns03', 20, 150, 19.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">The plain shawl adopts the natural color of Cashmere wool. No color indigents are used. This natural shawl is warm and has a smooth fabric texture when wrapped around.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;Exclusive branded Cashmere</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;150 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;28\"/ 80\" inches</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;2 Paddles</li>\r\n<li><span style=\"font-weight: bolder;\">Color:</span> Light Beige</li>\r\n<li>It is a perfect natural wool shawl for those who are allergic to color and wool as well.</li>\r\n<li>The shawls are purely hand made in Nepal</li>\r\n<li>The materials used are eco-friendly</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MHNS03', NULL, NULL, NULL, '2023-06-15 10:52:49', '2023-06-15 10:52:49'),
(203, 'Light Baby Pink Colored Natural Shawl (MHNS04)', 'light-baby-pink-colored-natural-shawl-mhns04', 20, 150, 19.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">The smooth fabrics in a lite pink color add brightness to the shawl. To add the queenly grace to your appearance, wrap it around you and walk by.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;Exclusive branded Cashmere</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;150 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;28\"/ 80\" inches</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;2 Paddles</li>\r\n<li><span style=\"font-weight: bolder;\">Color:</span> Light Baby Pink</li>\r\n<li>It is a perfect natural wool shawl for those who are allergic to color and wool as well.</li>\r\n<li>The shawls are purely hand made in Nepal</li>\r\n<li>The materials used are eco-friendly</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MHNS04', NULL, NULL, NULL, '2023-06-15 10:54:10', '2023-06-15 10:54:10'),
(204, 'Medium Beige Colored Natural Shawl (MHNS05)', 'medium-beige-colored-natural-shawl-mhns05', 20, 150, 19.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">This pashmina shawl is a perfect wrap of lovely fabrics and sweet colors of cream pie. With a wrap of this splendid shawl, you can flaunt in any attire you wear.&nbsp;</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;Exclusive branded Cashmere</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;150 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;28\"/ 80\" inches</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;2 Paddles</li>\r\n<li><span style=\"font-weight: bolder;\">Color:</span>&nbsp;Medium Beige</li>\r\n<li>It is a perfect natural wool shawl for those who are allergic to color and wool as well.</li>\r\n<li>The shawls are purely hand made in Nepal</li>\r\n<li>The materials used are eco-friendly</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MHNS05', NULL, NULL, NULL, '2023-06-15 10:55:40', '2023-06-15 10:55:40'),
(205, 'Coffee Brown Colored Natural Shawl (MHNS06)', 'coffee-brown-colored-natural-shawl-mhns06', 20, 150, 19.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">A beautiful mix of brown and grey, flavoring each other the color tone is produced without a flaw in an elegant way. With soft and warm fabrics, the shawl is also very comfortable to wear.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;Exclusive branded Cashmere</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;150 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;28\"/ 80\" inches</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;2 Paddles</li>\r\n<li><span style=\"font-weight: bolder;\">Color:</span>&nbsp;Coffee Brown</li>\r\n<li>It is a perfect natural wool shawl for those who are allergic to color and wool as well.</li>\r\n<li>The shawls are purely hand made in Nepal</li>\r\n<li>The materials used are eco-friendly</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MHNS06', NULL, NULL, NULL, '2023-06-15 10:57:35', '2023-06-15 10:57:35'),
(206, 'Pink and Grey Mixed Cashmere Natural Check Shawl (MHNS07)', 'pink-and-grey-mixed-cashmere-natural-check-shawl-mhns07', 20, 150, 19.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">The fine fabric will flow just right through your hand as you grab it smoothly. Shaded beautifully you can find the woven wool perfectly and feel the texture.&nbsp;</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;Exclusive branded Cashmere</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;150 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;28\"/ 80\" inches</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;2 Paddles</li>\r\n<li><span style=\"font-weight: bolder;\">Color:</span>&nbsp;Pink and Grey</li>\r\n<li>Only natural colors are used.&nbsp;</li>\r\n<li>Solely handmade in Nepal</li>\r\n<li>Materials that are eco-friendly is used</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'popular', 0, 0, 'MHNS07', NULL, NULL, NULL, '2023-06-15 10:59:12', '2023-06-15 10:59:12'),
(207, 'Grey and Beige Colored Checkered Natural Shawl (MHNS08)', 'grey-and-beige-colored-checkered-natural-shawl-mhns08', 20, 150, 19.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">The shawl has a tuned color in grey and beige forming a check stripe neatly. Wear it on casual occasions like to college, work or even when you go out for fun.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;Exclusive branded Cashmere</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;150 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;28\"/ 80\" inches</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;2 Paddles</li>\r\n<li><span style=\"font-weight: bolder;\">Color:</span>&nbsp;grey and beige</li>\r\n<li>It is a perfect natural wool shawl for those who are allergic to color and wool as well.</li>\r\n<li>The shawls are purely hand made in Nepal</li>\r\n<li>The materials used are eco-friendly</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MHNS08', NULL, NULL, NULL, '2023-06-15 11:00:58', '2023-06-15 11:00:58'),
(208, 'Black & White Color Checkered Natural Shawl (MHNS09)', 'black-white-color-checkered-natural-shawl-mhns09', 20, 150, 19.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">The light and dark have come together, yet the winter sun can be completely enjoyed by this fine fabric Cashmere after you embrace it for the warmness. The shawl is designed with check spots to match your winter attire.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;Exclusive branded Cashmere</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;150 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;28\"/ 80\" inches</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;2 Paddles</li>\r\n<li><span style=\"font-weight: bolder;\">Color:</span>&nbsp;Black and White</li>\r\n<li>It is a perfect natural wool shawl for those who are allergic to color and wool as well.</li>\r\n<li>The shawls are purely hand made in Nepal</li>\r\n<li>The materials used are eco-friendly</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'popular', 0, 0, 'MHNS09', NULL, NULL, NULL, '2023-06-15 11:02:41', '2023-06-15 11:02:41'),
(209, 'Fine Cashmere Natural Shawl (MHNS10)', 'fine-cashmere-natural-shawl-mhns10', 20, 150, 19.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">A beautiful mix of brown with lined grey, flavoring each other the color tone is produced without a flaw in an elegant way. With soft and warm fabrics, the shawl is also very comfortable to wear.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;Exclusive branded Cashmere</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;150 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;28\"/ 80\" inches</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;2 Paddles</li>\r\n<li><span style=\"font-weight: bolder;\">Color:</span>&nbsp;Coffee</li>\r\n<li>It is a perfect natural wool shawl for those who are allergic to color and wool as well.</li>\r\n<li>The shawls are purely hand made in Nepal</li>\r\n<li>The materials used are eco-friendly</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MHNS10', NULL, NULL, NULL, '2023-06-15 11:04:06', '2023-06-15 11:04:06'),
(210, 'Arctic Blue Cashmere Color Shawl (MHCS01)', 'arctic-blue-cashmere-color-shawl-mhcs01', 20, 95, 19.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Out style yourself with this pure cashmere shawl. Perfect to make you warm when you are out.&nbsp;The smooth blue color catches the perfect attention when it comes to any occasion. It\'s a perfect choice that is comfortable and beautiful to wear.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;Exclusive branded Cashmere</li>\r\n<li><span style=\"font-weight: bolder;\">Color:</span>&nbsp; Arctic Blue</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;28\"/80\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;95 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;4 Paddles</li>\r\n<li>Purely Handmade in Nepal</li>\r\n<li>Double-sided Pattern&nbsp;</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'popular', 0, 0, 'MHCS01', NULL, NULL, NULL, '2023-06-15 11:32:35', '2023-06-15 11:32:35'),
(211, 'Dark Orange Colored Cashmere Color Shawl (MHCS02)', 'dark-orange-colored-cashmere-color-shawl-mhcs02', 20, 95, 19.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Attract the person you like with this beautiful red cashmere shawl.&nbsp;Beautiful, minimalistic, majestic, and handmade, the wrap is one of the many experiences that bring the ultimate delight into your life is the Cashmere Shawl.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;Exclusive branded Cashmere</li>\r\n<li><span style=\"font-weight: bolder;\">Color:</span>&nbsp; Dark Orange</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;28\"/80\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;95 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;4 Paddles</li>\r\n<li>Purely Handmade in Nepal</li>\r\n<li>Double-sided Pattern</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MHCS02', NULL, NULL, NULL, '2023-06-15 11:36:00', '2023-06-15 11:36:00'),
(212, 'Soft Pink Cashemere Color Shawl (MHCS03)', 'soft-pink-cashemere-color-shawl-mhcs03', 20, 95, 19.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Pink cashmere shawl gives you a girlish vibe. Wear the shawl to those chilly casual night outs or formal occasions and exude a feminine yet powerful aura.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;Exclusive branded Cashmere</li>\r\n<li><span style=\"font-weight: bolder;\">Color:</span>&nbsp; Soft Pink</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;28\"/80\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;95 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;4 Paddles</li>\r\n<li>Purely Handmade in Nepal</li>\r\n<li>Double-sided Pattern&nbsp;</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'popular', 0, 0, 'MHCS03', NULL, NULL, NULL, '2023-06-15 11:38:39', '2023-06-15 11:38:39');
INSERT INTO `products` (`id`, `product_name`, `slug`, `price`, `weight`, `discount_price`, `wholesale_price`, `views`, `short_description`, `long_description`, `size_variation`, `video`, `status`, `is_featured`, `is_popular`, `on_sale`, `is_special`, `sku`, `brand_id`, `audio`, `deleted_at`, `created_at`, `updated_at`) VALUES
(213, 'Shady Pink Cashmere Color Shawl (MHCS04)', 'shady-pink-cashmere-color-shawl-mhcs04', 20, 95, 19.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Extraordinarily soft, minimalistic, majestic, and handmade, the wrap is one of the many experiences that bring the ultimate delight into your life.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;Exclusive branded Cashmere</li>\r\n<li><span style=\"font-weight: bolder;\">Color:</span>&nbsp; Shady Pink</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;28\"/80\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;95 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;4 Paddles</li>\r\n<li>Purely Handmade in Nepal</li>\r\n<li>Double-sided Pattern&nbsp;</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MHCS04', NULL, NULL, NULL, '2023-06-15 11:40:16', '2023-06-15 11:40:16'),
(214, 'Mustard Yellow Colored Cashmere Shawl (MHCS05)', 'mustard-yellow-colored-cashmere-shawl-mhcs05', 20, 95, 19.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">The Mustard Cashmere Shawl reflects the bright and fine texture. With a warm touch of good quality fabrics, the shawl is perfect to wrap around in winter.&nbsp;</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;Exclusive branded Cashmere</li>\r\n<li><span style=\"font-weight: bolder;\">Color:</span>&nbsp; Shady Pink</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;28\"/80\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;95 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;4 Paddles</li>\r\n<li>Purely Handmade in Nepal</li>\r\n<li>Double-sided Pattern&nbsp;</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MHCS05', NULL, NULL, NULL, '2023-06-15 11:41:50', '2023-06-15 11:41:50'),
(215, 'Pure White Cashmere Color Shawl (MHCS06)', 'pure-white-cashmere-color-shawl-mhcs06', 20, 95, 19.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">The classic style of Cashmere Shawl in White is beautiful as snow. The extremely delicate fibers to wrap up a total shawl is smooth when worn.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;Exclusive branded Cashmere</li>\r\n<li><span style=\"font-weight: bolder;\">Color:</span>&nbsp; White</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;28\"/80\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;95 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;4 Paddles</li>\r\n<li>Purely Handmade in Nepal</li>\r\n<li>Can be worn from both sides</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MHCS06', NULL, NULL, NULL, '2023-06-15 11:43:09', '2023-06-15 11:43:09'),
(216, 'Ocean Blue Cashmere Color shawl (MHCS07)', 'ocean-blue-cashmere-color-shawl-mhcs07', 20, 95, 19.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">The bright shades and fine smooth textures make the Cashmere shawl perfect to flaunt your style. With lite weight and good fabrics, the shawl heats off a warm feeling when you embrace it around.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;Exclusive branded Cashmere</li>\r\n<li><span style=\"font-weight: bolder;\">Color:</span>&nbsp; Navy Blue</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;28\"/80\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;95 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;4 Paddles</li>\r\n<li>Purely Handmade in Nepal</li>\r\n<li>Can be worn both sides</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'popular', 0, 0, 'MHCS07', NULL, NULL, NULL, '2023-06-15 11:45:17', '2023-06-15 11:45:17'),
(217, 'Fine Designed Cashmere Color shawl (MHCS08)', 'fine-designed-cashmere-color-shawl-mhcs08', 20, 150, 19.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Put on these handwoven Cashmere Shawal with extra design.&nbsp;</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li>Composition: 60% Cashmere 40% Cotton</li>\r\n<li>Size: 28X80 Inches&nbsp;</li>\r\n<li>Weight: 150 gram</li>\r\n<li>Paddle: 4 Paddles</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'popular', 0, 0, 'MHCS08', NULL, NULL, NULL, '2023-06-15 11:47:50', '2023-06-15 11:47:50'),
(218, 'Green Colored Designer Cashmere Color Shawl (MHCS09)', 'green-colored-designer-cashmere-color-shawl-mhcs09', 20, 150, 19.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Perfect if you don&rsquo;t want to draw someone&rsquo;s attention. Just make your self warm with this cashmere shawl. Also with the added embroidery design, the shawl makes a perfect wrap in the winter.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;Exclusive branded Cashmere</li>\r\n<li><span style=\"font-weight: bolder;\">Color:</span>&nbsp; Green</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;28\"/80\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;95 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;4 Paddles</li>\r\n<li>Purely Handmade in Nepal</li>\r\n<li>Double-sided Pattern&nbsp;</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MHCS09', NULL, NULL, NULL, '2023-06-15 11:49:34', '2023-06-15 11:49:34'),
(219, 'Beautiful Designed White Cashmere Color shawl (MHCS10)', 'beautiful-designed-white-cashmere-color-shawl-mhcs10', 20, 95, 19.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">The design in white makes the White Cashmere Shawl flawless. The shawl looks stunning with its high-quality fabric and embroidered designs. The shawl can be a beautiful choice to style your dress.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;Exclusive branded Cashmere</li>\r\n<li><span style=\"font-weight: bolder;\">Color:</span>&nbsp; Arctic Blue</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;28\"/80\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;95 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;4 Paddles</li>\r\n<li>Purely Handmade in Nepal</li>\r\n<li>Double-sided Pattern&nbsp;</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MHCS10', NULL, NULL, NULL, '2023-06-15 11:50:57', '2023-06-15 11:50:57'),
(220, 'Light Blue Ring Designed Shawl (MHRDS01)', 'light-blue-ring-designed-shawl-mhrds01', 20, 95, 19.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">The Cashmere Ring Shawl is perfectly designed to wrap yourself around in summer as well. The silky texture of the fiber provides you smooth comfortable feeling.&nbsp;</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;60% Cashmere 40% Wool</li>\r\n<li><span style=\"font-weight: bolder;\">Color:</span>&nbsp; Sky Blue</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;28\"/80\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;95 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;Single Paddle</li>\r\n<li>Double-sided Pattern</li>\r\n<li>Perfect to wrap yourself in summer too</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'popular', 0, 0, 'MHRDS01', NULL, NULL, NULL, '2023-06-15 12:12:07', '2023-06-15 12:12:07'),
(221, 'Rosy Pink Ring Designed Shawl (MHRDS02)', 'rosy-pink-ring-designed-shawl-mhrds02', 20, 95, 19.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">This Marshmellow Ring shawl can be admired for most of the females out there. With extra lite weight, the shawl is delicately designed by the skilled craftswomen in Nepal.&nbsp;</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;60% Cashmere 40% Wool</li>\r\n<li><span style=\"font-weight: bolder;\">Color:</span>&nbsp; Rose Pink</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;28\"/80\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;95 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;Single Paddle</li>\r\n<li>Double-sided Pattern</li>\r\n<li>Perfect to wrap yourself in summer too</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MHRDS02', NULL, NULL, NULL, '2023-06-15 12:13:27', '2023-06-15 12:13:27'),
(222, 'Floral Printed Ring Designed Shawl (MHRDS03)', 'floral-printed-ring-designed-shawl-mhrds03', 20, 95, 19.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">The charming chocolate color catches the perfect attention when it comes to any occasion. It\'s a perfect choice that is comfortable and beautiful to wear.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;60% Cashmere 40% Wool</li>\r\n<li><span style=\"font-weight: bolder;\">Color:</span>&nbsp; Pink Crimson</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;28\"/80\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;95 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;Single Paddle</li>\r\n<li>Double-sided Pattern</li>\r\n<li>It looks rich and embroidered</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'popular', 0, 0, 'MHRDS03', NULL, NULL, NULL, '2023-06-15 12:14:40', '2023-06-15 12:14:40'),
(223, 'Flint Grey Ring Designed Shawl (MHRDS04)', 'flint-grey-ring-designed-shawl-mhrds04', 20, 95, 19.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Wrap yourself around with the flint grey ring shawl. The shawl is perfectly blended by the gray color to make yourself feel not too shiny. These can be worn for warm weather.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;60% Cashmere 40% Wool</li>\r\n<li><span style=\"font-weight: bolder;\">Color:</span>&nbsp; Rose Pink</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;28\"/80\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;95 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;Single Paddle</li>\r\n<li>Double-sided Pattern</li>\r\n<li>Much comfortable and perfect to protect your body from tan also</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MHRDS04', NULL, NULL, NULL, '2023-06-15 12:16:48', '2023-06-15 12:16:48'),
(224, 'Creamy Colored Ring Designed Shawl (MHRDS05)', 'creamy-colored-ring-designed-shawl-mhrds05', 20, 95, 19.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Grab a piece of flawless smooth ring shawl to flaunt your style. With a beige color print in the shawl, it looks even more stunning. The shawl can be your perfect math in the summer as well.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;60% Cashmere 40% Wool</li>\r\n<li><span style=\"font-weight: bolder;\">Color:</span>&nbsp;Pink and Beige</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;28\"/80\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;95 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;Single Paddle</li>\r\n<li>Double-sided Pattern</li>\r\n<li>Perfect to wrap yourself in summer too</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'popular', 0, 0, 'MHRDS05', NULL, NULL, NULL, '2023-06-15 12:18:59', '2023-06-15 12:18:59'),
(225, 'Bluish White Fine Ring Designed Shawl (MHRDS06)', 'bluish-white-fine-ring-designed-shawl-mhrds06', 20, 95, 19.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">The Cashmere Ring Shawl is perfectly designed to wrap yourself around in summer as well. The silky texture of the fiber provides you smooth comfortable feeling.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;60% Cashmere 40% Wool</li>\r\n<li><span style=\"font-weight: bolder;\">Color:</span>&nbsp;White&nbsp;</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;28\"/80\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;95 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;Single Paddle</li>\r\n<li>Double-sided Pattern</li>\r\n<li>Stylish and can be a match for regular dresses as well</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MHRDS06', NULL, NULL, NULL, '2023-06-15 12:19:59', '2023-06-15 12:19:59'),
(226, 'Pink and Crimson Ring Designed Shawl (MHRDS07)', 'pink-and-crimson-ring-designed-shawl-mhrds07', 20, 95, 19.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">The engaging color of both crimson and pink catches the perfect attention when it comes to any occasion. It\'s a perfect choice that is comfortable and beautiful to wear.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;60% Cashmere 40% Wool</li>\r\n<li><span style=\"font-weight: bolder;\">Color:</span>&nbsp; Pink Crimson</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;28\"/80\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;95 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;Single Paddle</li>\r\n<li>Double-sided Pattern</li>\r\n<li>Stylish and can be a match for regular dresses as well</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'popular', 0, 0, 'MHRDS07', NULL, NULL, NULL, '2023-06-15 12:22:02', '2023-06-15 12:22:02'),
(227, 'Pattered Cream Colored Ring Designed Shawl (MHRDS08)', 'pattered-cream-colored-ring-designed-shawl-mhrds08', 20, 50, 19.50, NULL, '0', '<ul style=\"margin: 0px 0px 20px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Used Color:</span>&nbsp;Wheat Color</li>\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;60% fine wool 40% cashmere</li>\r\n<li><span style=\"font-weight: bolder;\">Dimensions:</span>&nbsp;&nbsp;27 inch / 76 inch (68.6cm&nbsp;/&nbsp;193cm)</li>\r\n<li><span style=\"font-weight: bolder;\">Unit Weight:&nbsp;</span>50 gram</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'popular', 0, 0, 'MHRDS08', NULL, NULL, NULL, '2023-06-15 12:23:45', '2023-06-15 12:23:45'),
(228, 'Baby Pink Colored Ring Designed Shawl (MHRDS09)', 'baby-pink-colored-ring-designed-shawl-mhrds09', 20, 95, 19.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">This shawl in pink is sweet as chocolate. The shawl is weaved beautifully by the craftswomen of Nepal. The pure cashmere wool gives a smooth feeling when wrapped around.&nbsp;</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;60% Cashmere 40% Wool</li>\r\n<li><span style=\"font-weight: bolder;\">Color:</span>&nbsp; Pink&nbsp;</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;28\"/80\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;95 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;Single Paddle</li>\r\n<li>Double-sided Pattern</li>\r\n<li>Extremely smooth</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MHRDS09', NULL, NULL, NULL, '2023-06-15 12:24:41', '2023-06-15 12:24:41'),
(229, 'Blue Colored Patterend Ring Designed Shawl (MHRDS10)', 'blue-colored-patterend-ring-designed-shawl-mhrds10', 20, 95, 19.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">The casual navy ring shawl is designed perfectly by the skilled craftswomen of Nepal. You can grab a piece of flawless smooth ring shawl to flaunt your style.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;60% Cashmere 40% Wool</li>\r\n<li><span style=\"font-weight: bolder;\">Color:</span>&nbsp; Blue</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;28\"/80\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;95 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;Single Paddle</li>\r\n<li>Double-sided Pattern</li>\r\n<li>Stylish and can be a match for regular dresses as well</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MHRDS10', NULL, NULL, NULL, '2023-06-15 12:26:15', '2023-06-15 12:26:15'),
(230, 'Patterned Colored Rainbow Ring Designed Shawl (MHRDS11)', 'patterned-colored-rainbow-ring-designed-shawl-mhrds11', 20, 95, 19.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">The crisp breeze of the early fall rumbles within the folds of its soft base and plays all over its essence in subtle hues, as a rainbow ring shawl narrates the unmatched skill of its designing and the classy choice of its wearer.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;60% Cashmere 40% Wool</li>\r\n<li><span style=\"font-weight: bolder;\">Color:</span>&nbsp; Pink Crimson</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;28\"/80\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;95 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;Single Paddle</li>\r\n<li>Double-sided Pattern</li>\r\n<li>Stylish and can be a match for regular dresses as well</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'popular', 0, 0, 'MHRDS11', NULL, NULL, NULL, '2023-06-15 12:27:39', '2023-06-15 12:27:39'),
(231, 'Floral Designed Ring Shawl (MHRDS12)', 'floral-designed-ring-shawl-mhrds12', 20, 95, 19.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">The engaging color of both pink and rosy catches perfect attention when it comes to any occasion. It\'s a perfect choice that is comfortable and beautiful to wear.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;60% Cashmere 40% Wool</li>\r\n<li><span style=\"font-weight: bolder;\">Color:</span>&nbsp; Pink Crimson</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;28\"/80\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;95 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;Single Paddle</li>\r\n<li>Double-sided Pattern</li>\r\n<li>Beautiful and comfortable</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MHRDS12', NULL, NULL, NULL, '2023-06-15 12:28:57', '2023-06-15 12:28:57'),
(232, 'Pink Floral Ring Shawl (MHRPS01)', 'pink-floral-ring-shawl-mhrps01', 20, 95, 19.50, NULL, '0', '<div class=\"uk-margin\" style=\"margin-bottom: 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">A bright rose-pink pashmina with tassels. Soft and fine yet warm - ideal for over the shoulders on those cooler&nbsp;winter&nbsp;days and evenings.</div>\r\n<div class=\"uk-margin\" style=\"margin-bottom: 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px; margin-top: 20px !important;\">\r\n<div class=\"uk-margin\" style=\"margin-bottom: 20px;\">\r\n<div class=\" \">\r\n<ul style=\"margin: 0px 0px 20px; padding-left: 30px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;60% Cashmere 40% Wool</li>\r\n<li><span style=\"font-weight: bolder;\">Color:</span>&nbsp;Floral Pink</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;28\"/80\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;95 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;Single Paddle</li>\r\n<li>Double-sided Pattern</li>\r\n<li>Perfect to wrap yourself in summer too</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>', NULL, 0, NULL, 1, NULL, 'popular', 0, 0, 'MHRPS01', NULL, NULL, NULL, '2023-06-15 12:34:40', '2023-06-15 12:34:40'),
(233, 'Multicolor Floral Ring Shawl (MHRPS02)', 'multicolor-floral-ring-shawl-mhrps02', 20, 95, 19.50, NULL, '0', '<div class=\"uk-margin\" style=\"margin-bottom: 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Handwoven and hand-embroidered - this beautiful shawl passes through the hands of different craftswomen to achieve perfection. This shawl is diligently beautiful.</div>\r\n<form class=\"cart\" style=\"color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\" action=\"https://mountainhandicraft.com/cart\" method=\"post\">\r\n<div class=\"uk-margin\" style=\"margin-bottom: 20px;\">\r\n<div class=\"uk-margin\" style=\"margin-bottom: 20px;\">\r\n<div class=\" \">\r\n<ul style=\"margin: 0px 0px 20px; padding-left: 30px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;60% Cashmere 40% Wool</li>\r\n<li><span style=\"font-weight: bolder;\">Color:</span>&nbsp;Floral Orange</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;28\"/80\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;95 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;Single Paddle</li>\r\n<li>Double-sided Pattern</li>\r\n<li>Perfect to wrap yourself in summer too</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</form>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MHRPS02', NULL, NULL, NULL, '2023-06-15 12:36:06', '2023-06-15 12:36:06'),
(234, 'Floral Designed Ring Shawl (MHRPS03)', 'floral-designed-ring-shawl-mhrps03', 20, 95, 19.50, NULL, '0', '<div class=\"uk-margin\" style=\"margin-bottom: 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Handwoven and hand-embroidered - this beautiful shawl passes through the hands of different craftswomen to achieve perfection. This shawl is diligently beautiful.</div>\r\n<form class=\"cart\" style=\"color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\" action=\"https://mountainhandicraft.com/cart\" method=\"post\">\r\n<div class=\"uk-margin\" style=\"margin-bottom: 20px;\">\r\n<div class=\"uk-margin\" style=\"margin-bottom: 20px;\">\r\n<div class=\" \">\r\n<ul style=\"margin: 0px 0px 20px; padding-left: 30px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;60% Cashmere 40% Wool</li>\r\n<li><span style=\"font-weight: bolder;\">Color:</span>&nbsp;Floral Purple</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;28\"/80\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;95 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;Single Paddle</li>\r\n<li>Double-sided Pattern</li>\r\n<li>Perfect to wrap yourself in summer too</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</form>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MHRPS03', NULL, NULL, NULL, '2023-06-15 12:37:36', '2023-06-15 12:37:36'),
(235, 'Floral Pattern Ring Shawl (MHRPS04)', 'floral-pattern-ring-shawl-mhrps04', 20, 95, 19.50, NULL, '0', '<ul style=\"margin: 0px 0px 20px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li>Composition: 80% Yakwool Dhaka</li>\r\n<li>Double-sided Pattern</li>\r\n<li>Size: 28\"/80\" Inches</li>\r\n<li>Weight: 150 gram</li>\r\n<li>Dimensions: 255 X 155 cm</li>\r\n<li>Paddle: 4 Paddles</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'popular', 0, 0, 'MHRPS04', NULL, NULL, NULL, '2023-06-15 12:39:18', '2023-06-15 12:39:18'),
(236, 'Fox Printed Ring Shawl (MHRPS05)', 'fox-printed-ring-shawl-mhrps05', 20, 95, 19.50, NULL, '0', '<div class=\"uk-margin\" style=\"margin-bottom: 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">In the luxury of pure Pashmina comes this alluring wrap for all the beautiful ladies out there. Drawn out in the charming winter creamy purple, this stole is a must-have for the casual office look.</div>\r\n<form class=\"cart\" style=\"color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\" action=\"https://mountainhandicraft.com/cart\" method=\"post\">\r\n<div class=\"uk-margin\" style=\"margin-bottom: 20px;\">\r\n<div class=\"uk-margin\" style=\"margin-bottom: 20px;\">\r\n<div class=\" \">\r\n<ul style=\"margin: 0px 0px 20px; padding-left: 30px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;60% Cashmere 40% Wool</li>\r\n<li><span style=\"font-weight: bolder;\">Color:</span>&nbsp;Floral Purple</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;28\"/80\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;95 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;Single Paddle</li>\r\n<li>Double-sided Pattern</li>\r\n<li>Perfect to wrap yourself in summer too</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</form>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MHRPS05', NULL, NULL, NULL, '2023-06-15 12:41:37', '2023-06-15 12:41:37'),
(237, 'Floral Green Ring Printed Shawl (MHRPS06)', 'floral-green-ring-printed-shawl-mhrps06', 20, 95, 19.50, NULL, '0', '<div class=\"uk-margin\" style=\"margin-bottom: 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">In the luxury of pure Pashmina comes this alluring wrap for all the beautiful ladies out there. Drawn out in the charming winter green, this stole is a must-have for the casual office look.</div>\r\n<form class=\"cart\" style=\"color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\" action=\"https://mountainhandicraft.com/cart\" method=\"post\">\r\n<div class=\"uk-margin\" style=\"margin-bottom: 20px;\">\r\n<div class=\"uk-margin\" style=\"margin-bottom: 20px;\">\r\n<div class=\" \">\r\n<ul style=\"margin: 0px 0px 20px; padding-left: 30px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;60% Cashmere 40% Wool</li>\r\n<li><span style=\"font-weight: bolder;\">Color:</span>&nbsp;Floral Purple</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;28\"/80\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;95 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;Single Paddle</li>\r\n<li>Double-sided Pattern</li>\r\n<li>Perfect to wrap yourself in summer too</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</form>', NULL, 0, NULL, 1, NULL, 'popular', 0, 0, 'MHRPS06', NULL, NULL, NULL, '2023-06-15 12:43:26', '2023-06-15 12:43:26'),
(238, 'Orange Floral Printed Ring Shawl (MHRPS07)', 'orange-floral-printed-ring-shawl-mhrps07', 20, 95, 19.50, NULL, '0', '<div class=\"uk-margin\" style=\"margin-bottom: 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Handwoven and hand-embroidered - this beautiful shawl passes through the hands of different craftswomen to achieve perfection. This shawl is diligently beautiful.</div>\r\n<form class=\"cart\" style=\"color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\" action=\"https://mountainhandicraft.com/cart\" method=\"post\">\r\n<div class=\"uk-margin\" style=\"margin-bottom: 20px;\">\r\n<div class=\"uk-margin\" style=\"margin-bottom: 20px;\">\r\n<div class=\" \">\r\n<ul style=\"margin: 0px 0px 20px; padding-left: 30px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;60% Cashmere 40% Wool</li>\r\n<li><span style=\"font-weight: bolder;\">Color:</span>&nbsp;Floral Orange</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;28\"/80\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;95 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;Single Paddle</li>\r\n<li>Double-sided Pattern</li>\r\n<li>Perfect to wrap yourself in summer too</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</form>', NULL, 0, NULL, 1, NULL, 'popular', 0, 0, 'MHRPS07', NULL, NULL, NULL, '2023-06-15 12:45:01', '2023-06-15 12:45:01'),
(239, 'Pink Green Floral Ring Printed Shawl (MHRPS08)', 'pink-green-floral-ring-printed-shawl-mhrps08', 20, 95, 19.50, NULL, '0', '<div class=\"uk-margin\" style=\"margin-bottom: 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Handwoven and hand-embroidered - this beautiful shawl passes through the hands of different craftswomen to achieve perfection. This shawl is diligently beautiful.</div>\r\n<form class=\"cart\" style=\"color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\" action=\"https://mountainhandicraft.com/cart\" method=\"post\">\r\n<div class=\"uk-margin\" style=\"margin-bottom: 20px;\">\r\n<div class=\"uk-margin\" style=\"margin-bottom: 20px;\">\r\n<div class=\" \">\r\n<ul style=\"margin: 0px 0px 20px; padding-left: 30px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;60% Cashmere 40% Wool</li>\r\n<li><span style=\"font-weight: bolder;\">Color:</span>&nbsp;Floral Purple</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;28\"/80\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;95 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;Single Paddle</li>\r\n<li>Double-sided Pattern</li>\r\n<li>Perfect to wrap yourself in summer too</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</form>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MHRPS08', NULL, NULL, NULL, '2023-06-15 12:46:37', '2023-06-15 12:46:37'),
(240, 'Sunflower Ring Printed Shawl (MHRPS09)', 'sunflower-ring-printed-shawl-mhrps09', 20, 95, 19.50, NULL, '0', '<div class=\"uk-margin\" style=\"margin-bottom: 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Handwoven and hand-embroidered - this beautiful shawl passes through the hands of different craftswomen to achieve perfection. This shawl is diligently beautiful.</div>\r\n<div class=\"uk-margin\" style=\"margin-bottom: 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px; margin-top: 20px !important;\">\r\n<div class=\"uk-margin\" style=\"margin-bottom: 20px;\">\r\n<div class=\" \">\r\n<ul style=\"margin: 0px 0px 20px; padding-left: 30px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;60% Cashmere 40% Wool</li>\r\n<li><span style=\"font-weight: bolder;\">Color:&nbsp;</span>Sunflower</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;28\"/80\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;95 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;Single Paddle</li>\r\n<li>Double-sided Pattern</li>\r\n<li>Perfect to wrap yourself in summer too</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>', NULL, 0, NULL, 1, NULL, 'popular', 0, 0, 'MHRPS09', NULL, NULL, NULL, '2023-06-15 13:26:54', '2023-06-15 13:26:54'),
(241, 'Exclusive Pink Floral Designed Ring Printed Shawl (MHRPS10)', 'exclusive-pink-floral-designed-ring-printed-shawl-mhrps10', 20, 95, 19.50, NULL, '0', '<div class=\"uk-margin\" style=\"margin-bottom: 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Bright shades, fine texture and a cozy warm touch of the ever loved Pashmina is what defines the shawl which is handwoven in a floral pattern to grace your winter ensembles in the most elegant demeanor.</div>\r\n<div class=\"uk-margin\" style=\"margin-bottom: 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px; margin-top: 20px !important;\">\r\n<div class=\"uk-margin\" style=\"margin-bottom: 20px;\">\r\n<div class=\" \">\r\n<ul style=\"margin: 0px 0px 20px; padding-left: 30px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;60% Cashmere 40% Wool</li>\r\n<li><span style=\"font-weight: bolder;\">Color:</span>&nbsp;Floral Purple</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;28\"/80\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;95 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;Single Paddle</li>\r\n<li>Double-sided Pattern</li>\r\n<li>Perfect to wrap yourself in summer too</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MHRPS10', NULL, NULL, NULL, '2023-06-15 13:28:22', '2023-06-15 13:28:22'),
(242, 'Pink Floral Patterned Ring Printed Shawl (MHRPS11)', 'pink-floral-patterned-ring-printed-shawl-mhrps11', 20, 95, 19.50, NULL, '0', '<div class=\"uk-margin\" style=\"margin-bottom: 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">The shawl crafted is warmer than the regular Pashmina and more comfortable to wear. This striped pink shawl is then passed onto other craftswomen who embroiders its borders beautifully, by a specialized type of needlework that uses intricate strokes of a needle to create elegant embellishments.</div>\r\n<div class=\"uk-margin\" style=\"margin-bottom: 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px; margin-top: 20px !important;\">\r\n<div class=\"uk-margin\" style=\"margin-bottom: 20px;\">\r\n<div class=\" \">\r\n<ul style=\"margin: 0px 0px 20px; padding-left: 30px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;60% Cashmere 40% Wool</li>\r\n<li><span style=\"font-weight: bolder;\">Color:</span>&nbsp;Floral Purple</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;28\"/80\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;95 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;Single Paddle</li>\r\n<li>Double-sided Pattern</li>\r\n<li>Perfect to wrap yourself in summer too</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>', NULL, 0, NULL, 1, NULL, 'popular', 0, 0, 'MHRPS11', NULL, NULL, NULL, '2023-06-15 13:30:09', '2023-06-15 13:30:09'),
(243, 'Orange Red Floral Ring Printed Shawl (MHRPS12)', 'orange-red-floral-ring-printed-shawl-mhrps12', 20, 95, 19.50, NULL, '0', '<div class=\"uk-margin\" style=\"margin-bottom: 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Handwoven and hand-embroidered - this beautiful shawl passes through the hands of different craftswomen to achieve perfection. This shawl is diligently beautiful.</div>\r\n<form class=\"cart\" style=\"color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\" action=\"https://mountainhandicraft.com/cart\" method=\"post\">\r\n<div class=\"uk-margin\" style=\"margin-bottom: 20px;\">\r\n<div class=\"uk-margin\" style=\"margin-bottom: 20px;\">\r\n<div class=\" \">\r\n<ul style=\"margin: 0px 0px 20px; padding-left: 30px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;60% Cashmere 40% Wool</li>\r\n<li><span style=\"font-weight: bolder;\">Color:</span>&nbsp;Floral Purple</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;28\"/80\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;95 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;Single Paddle</li>\r\n<li>Double-sided Pattern</li>\r\n<li>Perfect to wrap yourself in summer too</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</form>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MHRPS12', NULL, NULL, NULL, '2023-06-15 13:31:26', '2023-06-15 13:31:26'),
(244, 'Simple Floral Ring Printed Shawl (MHRPS13)', 'simple-floral-ring-printed-shawl-mhrps13', 20, 95, 19.50, NULL, '0', '<div class=\"uk-margin\" style=\"margin-bottom: 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">The shawl crafted is warmer than the regular Pashmina and more comfortable to wear. This striped pink shawl is then passed onto other craftswomen who embroiders its borders beautifully, by a specialized type of needlework that uses intricate strokes of a needle to create elegant embellishments.</div>\r\n<div class=\"uk-margin\" style=\"margin-bottom: 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px; margin-top: 20px !important;\">\r\n<div class=\"uk-margin\" style=\"margin-bottom: 20px;\">\r\n<div class=\" \">\r\n<ul style=\"margin: 0px 0px 20px; padding-left: 30px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;60% Cashmere 40% Wool</li>\r\n<li><span style=\"font-weight: bolder;\">Color:</span>&nbsp;Floral Purple</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;28\"/80\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;95 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;Single Paddle</li>\r\n<li>Double-sided Pattern</li>\r\n<li>Perfect to wrap yourself in summer too</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MHRPS13', NULL, NULL, NULL, '2023-06-15 13:32:40', '2023-06-15 13:32:40'),
(245, 'Floral Pattern Designed Ring Printed Shawl (MHRPS14)', 'floral-pattern-designed-ring-printed-shawl-mhrps14', 20, 95, 19.50, NULL, '0', '<div class=\"uk-margin\" style=\"margin-bottom: 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">This beautiful ring shawl reflects the holiday vibe. The designs are skillfully hand weaved by the high-quality fibers to make you warm.</div>\r\n<form class=\"cart\" style=\"color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\" action=\"https://mountainhandicraft.com/cart\" method=\"post\">\r\n<div class=\"uk-margin\" style=\"margin-bottom: 20px;\">\r\n<div class=\"uk-margin\" style=\"margin-bottom: 20px;\">\r\n<div class=\" \">\r\n<ul style=\"margin: 0px 0px 20px; padding-left: 30px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;60% Cashmere 40% Wool</li>\r\n<li><span style=\"font-weight: bolder;\">Color:</span>&nbsp;Floral Purple</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;28\"/80\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;95 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;Single Paddle</li>\r\n<li>Double-sided Pattern</li>\r\n<li>Perfect to wrap yourself in summer too</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</form>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MHRPS14', NULL, NULL, NULL, '2023-06-15 13:34:20', '2023-06-15 13:34:20'),
(246, 'Exclusive Multi-color Floral Ring Printed Shawl (MHRPS15)', 'exclusive-multi-color-floral-ring-printed-shawl-mhrps15', 20, 95, 19.50, NULL, '0', '<div class=\"uk-margin\" style=\"margin-bottom: 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Handwoven and hand-embroidered - this beautiful shawl passes through the hands of different craftswomen to achieve perfection. This shawl is diligently beautiful.</div>\r\n<form class=\"cart\" style=\"color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\" action=\"https://mountainhandicraft.com/cart\" method=\"post\">\r\n<div class=\"uk-margin\" style=\"margin-bottom: 20px;\">\r\n<div class=\"uk-margin\" style=\"margin-bottom: 20px;\">\r\n<div class=\" \">\r\n<ul style=\"margin: 0px 0px 20px; padding-left: 30px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;60% Cashmere 40% Wool</li>\r\n<li><span style=\"font-weight: bolder;\">Color:</span>&nbsp;Floral Purple</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;28\"/80\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;95 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;Single Paddle</li>\r\n<li>Double-sided Pattern</li>\r\n<li>Perfect to wrap yourself in summer too</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</form>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MHRPS15', NULL, NULL, NULL, '2023-06-15 13:35:42', '2023-06-15 13:35:42'),
(247, 'Blue Pink Floral Ring Printed Shawl (MHRPS16)', 'blue-pink-floral-ring-printed-shawl-mhrps16', 20, 95, 19.50, NULL, '0', '<div class=\"uk-margin\" style=\"margin-bottom: 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">The much-loved artistic designs and the ever-charming Cashmere Pashmina have been clubbed together to make for you a perfect winter ensemble.</div>\r\n<form class=\"cart\" style=\"color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\" action=\"https://mountainhandicraft.com/cart\" method=\"post\">\r\n<div class=\"uk-margin\" style=\"margin-bottom: 20px;\">\r\n<div class=\"uk-margin\" style=\"margin-bottom: 20px;\">\r\n<div class=\" \">\r\n<ul style=\"margin: 0px 0px 20px; padding-left: 30px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;60% Cashmere 40% Wool</li>\r\n<li><span style=\"font-weight: bolder;\">Color:</span>&nbsp;Floral Purple</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;28\"/80\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;95 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;Single Paddle</li>\r\n<li>Double-sided Pattern</li>\r\n<li>Perfect to wrap yourself in summer too</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</form>', NULL, 0, NULL, 1, NULL, 'popular', 0, 0, 'MHRPS16', NULL, NULL, NULL, '2023-06-15 13:37:09', '2023-06-15 13:37:09'),
(248, 'Adorable Floral Patterned Ring Printed Shawl (MHRPS17)', 'adorable-floral-patterned-ring-printed-shawl-mhrps17', 20, 95, 19.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Handwoven and hand-embroidered - this beautiful shawl passes through the hands of different craftswomen to achieve perfection. This shawl is diligently beautiful.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;60% Cashmere 40% Wool</li>\r\n<li><span style=\"font-weight: bolder;\">Color:</span>&nbsp;Floral Purple</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;28\"/80\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;95 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;Single Paddle</li>\r\n<li>Double-sided Pattern</li>\r\n<li>Perfect to wrap yourself in summer too</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'popular', 0, 0, 'MHRPS17', NULL, NULL, NULL, '2023-06-15 13:38:47', '2023-06-15 13:38:47'),
(249, 'Purple Colored Floral Designed Ring Printed Shawl (MHRPS18)', 'purple-colored-floral-designed-ring-printed-shawl-mhrps18', 20, 95, 19.50, NULL, '0', '<p style=\"margin: 0px 0px 20px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Handwoven and hand-embroidered - this beautiful shawl passes through the hands of different craftswomen to achieve perfection. This shawl is diligently beautiful.</p>\r\n<ul style=\"margin: 20px 0px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li><span style=\"font-weight: bolder;\">Composition:</span>&nbsp;60% Cashmere 40% Wool</li>\r\n<li><span style=\"font-weight: bolder;\">Color:</span>&nbsp;Floral Purple</li>\r\n<li><span style=\"font-weight: bolder;\">Size:</span>&nbsp;28\"/80\" Inches</li>\r\n<li><span style=\"font-weight: bolder;\">Weight:</span>&nbsp;95 grams</li>\r\n<li><span style=\"font-weight: bolder;\">Paddle:</span>&nbsp;Single Paddle</li>\r\n<li>Double-sided Pattern</li>\r\n<li>Perfect to wrap yourself in summer too</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'popular', 0, 0, 'MHRPS18', NULL, NULL, NULL, '2023-06-15 13:40:16', '2023-06-15 13:40:16'),
(250, 'Exclusive Multi Color Ring Printed Shawl (MHRPS20)', 'exclusive-multi-color-ring-printed-shawl-mhrps20', 20, 95, 19.50, NULL, '0', '<ul style=\"margin: 0px 0px 20px; padding-left: 30px; color: #666666; font-family: Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">\r\n<li>Composition: 80% Yakwool</li>\r\n<li>Double-sided Pattern</li>\r\n<li>Size: 28\"/80\" Inches</li>\r\n<li>Weight: 100 gram</li>\r\n<li>Dimensions: 255 X 155 cm</li>\r\n<li>Paddle: 4 Paddles</li>\r\n</ul>', NULL, 0, NULL, 1, NULL, 'notpopular', 0, 0, 'MHRPS20', NULL, NULL, NULL, '2023-06-15 13:42:09', '2023-06-15 13:42:09');
INSERT INTO `products` (`id`, `product_name`, `slug`, `price`, `weight`, `discount_price`, `wholesale_price`, `views`, `short_description`, `long_description`, `size_variation`, `video`, `status`, `is_featured`, `is_popular`, `on_sale`, `is_special`, `sku`, `brand_id`, `audio`, `deleted_at`, `created_at`, `updated_at`) VALUES
(251, 'Laptops By Brand Lenovo LOQ Series Lenovo LOQ 15IAX9 Gaming Laptop (12th Gen Intel Core i5 12600HX Processor | 16GB RAM | 512GB SSD | NVIDIA GeForce RTX 4050 6GB Graphics | 15.6\" FHD (1920 x 1080) IPS Display | 1 Year Warranty) Lenovo LOQ 15IAX9 Gaming Laptop (12th Gen Intel Core i5 12600HX Processor | 16GB RAM | 512GB SSD | NVIDIA GeForce RTX 4050 6GB Graphics | 15.6\" FHD (1920 x 1080) IPS Display | 1 Year Warranty)', 'laptops-by-brand-lenovo-loq-series-lenovo-loq-15iax9-gaming-laptop-12th-gen-intel-core-i5-12600hx-processor-16gb-ram-512gb-ssd-nvidia-geforce-rtx-4050-6gb-graphics-156-fhd-1920-x-1080-ips-display-1-year-warranty-lenovo-loq-15iax9-gami', 126000, 3, 114999.00, NULL, '0', '<ul>\r\n<li>12th Gen Intel Core i5 12600HX Processor</li>\r\n<li>16GB DDR5 RAM | 512GB Gen 4 SSD</li>\r\n<li>NVIDIA GeForce RTX 4050 6GB Graphics</li>\r\n<li>15.6-inch FHD (1920 x 1080) 144Hz IPS Display</li>\r\n<li>Free Laptop Bag, Gaming Mouse, and Mousepad</li>\r\n</ul>', '<h2><strong>LENOVO LOQ 15IAX9 2025 LAPTOP FULL SPECIFICATIONS</strong></h2>\r\n<table border=\"1\">\r\n<tbody>\r\n<tr>\r\n<td>Brand</td>\r\n<td>Lenovo</td>\r\n</tr>\r\n<tr>\r\n<td>Series</td>\r\n<td>LOQ Series</td>\r\n</tr>\r\n<tr>\r\n<td>Model</td>\r\n<td>15IXA9</td>\r\n</tr>\r\n<tr>\r\n<td>Type</td>\r\n<td><a href=\"https://mudita.com.np/laptops-nepal.html?laptop_types=389\"><strong>Gaming Laptop</strong></a></td>\r\n</tr>\r\n<tr>\r\n<td>Model Year</td>\r\n<td>2025</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>\r\n<p><strong>CORE SPECIFICATIONS</strong></p>\r\n<table border=\"1\">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<ul>\r\n<li>CPU/Processor</li>\r\n</ul>\r\n</td>\r\n<td>\r\n<ul>\r\n<li><strong>Intel Core i5 12600HX Processor</strong></li>\r\n</ul>\r\n<br>\r\n<ul>\r\n<li><strong>Core:</strong>&nbsp;12 (4 P-core + 8 E-core)</li>\r\n<li><strong>Threads:</strong>&nbsp;16</li>\r\n<li><strong>Base Frequency:</strong>&nbsp;P-core 2.5GHz / E-core 1.8GHz</li>\r\n<li><strong>Max Frequency:</strong>&nbsp;P-core 4.6GHz / E-core 3.3GHz</li>\r\n<li><strong>Cache:</strong>&nbsp;18MB</li>\r\n<li><strong>Processor Graphics:&nbsp;</strong>Intel UHD Graphics</li>\r\n</ul>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>Processor Family</td>\r\n<td>12th Gen Intel Core i5 Processor</td>\r\n</tr>\r\n<tr>\r\n<td>Memory</td>\r\n<td>16GB DDR5-4800MHz RAM (up to 32GB)</td>\r\n</tr>\r\n<tr>\r\n<td>Memory Slots</td>\r\n<td>Two DDR5 SO-DIMM slots, dual-channel capable</td>\r\n</tr>\r\n<tr>\r\n<td>Storage&nbsp;</td>\r\n<td>512GB NVMe Gen4 SSD</td>\r\n</tr>\r\n<tr>\r\n<td>Storage Slots</td>\r\n<td>Two M.2 2280 PCIe 4.0 x4 slots</td>\r\n</tr>\r\n<tr>\r\n<td>Graphics Card</td>\r\n<td>\r\n<ul>\r\n<li><strong>NVIDIA GeForce RTX 4050 GPU</strong></li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li><strong>Type:&nbsp;</strong>Dedicated</li>\r\n<li><strong>Memory:&nbsp;</strong>6GB GDDR6</li>\r\n<li><strong>Boost Clock:&nbsp;</strong>2370 MHz</li>\r\n<li><strong>TGP:&nbsp;</strong>105W</li>\r\n<li><strong>Key Features:&nbsp;</strong>Advanced Optimus, DLSS 3.5, Dynamic Boost 2.0, DirectX 12 Ultimate</li>\r\n</ul>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>Display</td>\r\n<td>\r\n<ul>\r\n<li><strong>15.6&Prime; FHD (1920 x 1080) Display</strong></li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li><strong>Touch:&nbsp;</strong>None</li>\r\n<li><strong>Type:&nbsp;</strong>IPS</li>\r\n<li><strong>Brightness:&nbsp;</strong>300nits</li>\r\n<li><strong>Surface:&nbsp;</strong>Anti-Glare</li>\r\n<li><strong>Aspect Ratio:&nbsp;</strong>16:9</li>\r\n<li><strong>Color Gamut:&nbsp;</strong>100% sRGB</li>\r\n<li><strong>Refresh Rate:&nbsp;</strong>144Hz</li>\r\n<li><strong>Key Features:&nbsp;</strong>Advanced Optimus, NVIDIA G-SYNC, T&Uuml;V Low Blue Light (Software)</li>\r\n</ul>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>Camera</td>\r\n<td>720p; E-Shutter</td>\r\n</tr>\r\n<tr>\r\n<td>Keyboard</td>\r\n<td>White Backlit, Eclipse Black - English (US)</td>\r\n</tr>\r\n<tr>\r\n<td>Ports</td>\r\n<td>\r\n<ul>\r\n<li><strong>3 x USB-A (USB 5Gbps/USB 3.2 Gen 1)</strong></li>\r\n<li><strong>1 x USB-C (USB 10Gbps/USB 3.2 Gen 2), with Lenovo PD 140W and DisplayPort 1.4</strong></li>\r\n<li><strong>1 x HDMI 2.1, up to 8K/60Hz</strong></li>\r\n<li><strong>1 x Headphone/microphone combo jack (3.5mm)</strong></li>\r\n<li><strong>1 x Ethernet (RJ-45)</strong></li>\r\n<li><strong>1 x Power connector</strong></li>\r\n</ul>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>Wireless Connectivity</td>\r\n<td>\r\n<ul>\r\n<li>\r\n<p>Intel&nbsp;WiFi 6 (802.11ax) &amp; Bluetooth 5.1</p>\r\n</li>\r\n</ul>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>Dimensions (H x W x D)</td>\r\n<td>0.86&Prime;~0.94&Prime; x 14.17&Prime; x 10.19&Prime;</td>\r\n</tr>\r\n<tr>\r\n<td>Weight</td>\r\n<td>Starting at 2.38 kg</td>\r\n</tr>\r\n<tr>\r\n<td>Sound</td>\r\n<td>4-Watt Stereo Speakers with High-Definition Audio, Optimized with Nahimic Audio</td>\r\n</tr>\r\n<tr>\r\n<td>Audio Jack Port</td>\r\n<td>3.5mm - Headphone/Microphone Combo Port</td>\r\n</tr>\r\n<tr>\r\n<td>Color</td>\r\n<td>Luna Grey</td>\r\n</tr>\r\n<tr>\r\n<td>Battery</td>\r\n<td>60 Watt Hours Non-removable</td>\r\n</tr>\r\n<tr>\r\n<td>Power Supply</td>\r\n<td>\r\n<ul>\r\n<li>170W slim tip (3-pin) AC adapter, 100-240V, 50-60Hz</li>\r\n</ul>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>Base Warranty</td>\r\n<td>1 Year</td>\r\n</tr>\r\n<tr>\r\n<td>Support</td>\r\n<td>Lenovo Support</td>\r\n</tr>\r\n<tr>\r\n<td>Included Freebies</td>\r\n<td>Laptop Bag, Gaming Mouse, and Mousepad</td>\r\n</tr>\r\n<tr>\r\n<td>Lenovo LOQ 15IAX9 2025 Price in Nepal</td>\r\n<td>NPR 114,999 (i5 12600HX, RTX 4050)</td>\r\n</tr>\r\n</tbody>\r\n</table>', 0, NULL, 1, NULL, 'popular', 0, 1, NULL, NULL, NULL, NULL, '2025-07-21 04:06:31', '2025-07-21 04:06:31');

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
(12, 10, 4, NULL, NULL),
(38, 18, 1, NULL, NULL),
(70, 33, 4, NULL, NULL),
(73, 36, 4, NULL, NULL),
(74, 37, 4, NULL, NULL),
(75, 38, 4, NULL, NULL),
(78, 21, 4, NULL, NULL),
(81, 40, 4, NULL, NULL),
(83, 30, 4, NULL, NULL),
(84, 31, 1, NULL, NULL),
(86, 42, 4, NULL, NULL),
(89, 34, 53, NULL, NULL),
(90, 43, 53, NULL, NULL),
(91, 44, 53, NULL, NULL),
(92, 45, 53, NULL, NULL),
(93, 46, 53, NULL, NULL),
(94, 47, 53, NULL, NULL),
(95, 48, 53, NULL, NULL),
(96, 49, 53, NULL, NULL),
(97, 50, 53, NULL, NULL),
(98, 51, 53, NULL, NULL),
(99, 52, 53, NULL, NULL),
(100, 53, 53, NULL, NULL),
(101, 54, 53, NULL, NULL),
(102, 55, 53, NULL, NULL),
(103, 56, 53, NULL, NULL),
(104, 57, 53, NULL, NULL),
(105, 58, 53, NULL, NULL),
(106, 59, 53, NULL, NULL),
(107, 60, 53, NULL, NULL),
(108, 61, 53, NULL, NULL),
(109, 62, 53, NULL, NULL),
(110, 63, 53, NULL, NULL),
(111, 64, 53, NULL, NULL),
(112, 65, 53, NULL, NULL),
(113, 66, 53, NULL, NULL),
(114, 67, 53, NULL, NULL),
(115, 68, 53, NULL, NULL),
(116, 69, 53, NULL, NULL),
(117, 70, 53, NULL, NULL),
(118, 71, 53, NULL, NULL),
(119, 72, 53, NULL, NULL),
(120, 73, 53, NULL, NULL),
(121, 74, 53, NULL, NULL),
(122, 75, 53, NULL, NULL),
(123, 76, 53, NULL, NULL),
(124, 77, 53, NULL, NULL),
(125, 78, 53, NULL, NULL),
(126, 79, 53, NULL, NULL),
(127, 80, 53, NULL, NULL),
(128, 81, 53, NULL, NULL),
(129, 82, 53, NULL, NULL),
(130, 83, 53, NULL, NULL),
(131, 84, 53, NULL, NULL),
(132, 85, 53, NULL, NULL),
(133, 86, 53, NULL, NULL),
(134, 87, 53, NULL, NULL),
(135, 88, 53, NULL, NULL),
(136, 89, 53, NULL, NULL),
(137, 90, 53, NULL, NULL),
(138, 91, 53, NULL, NULL),
(139, 92, 53, NULL, NULL),
(140, 93, 53, NULL, NULL),
(141, 94, 53, NULL, NULL),
(142, 95, 53, NULL, NULL),
(143, 96, 53, NULL, NULL),
(144, 97, 53, NULL, NULL),
(145, 98, 53, NULL, NULL),
(146, 99, 53, NULL, NULL),
(147, 100, 53, NULL, NULL),
(148, 101, 53, NULL, NULL),
(149, 102, 53, NULL, NULL),
(150, 103, 53, NULL, NULL),
(151, 104, 53, NULL, NULL),
(152, 105, 53, NULL, NULL),
(153, 106, 53, NULL, NULL),
(154, 107, 53, NULL, NULL),
(155, 108, 53, NULL, NULL),
(156, 109, 53, NULL, NULL),
(157, 110, 53, NULL, NULL),
(158, 111, 53, NULL, NULL),
(159, 112, 53, NULL, NULL),
(160, 113, 53, NULL, NULL),
(161, 114, 53, NULL, NULL),
(162, 115, 53, NULL, NULL),
(163, 116, 53, NULL, NULL),
(164, 117, 53, NULL, NULL),
(165, 118, 53, NULL, NULL),
(166, 119, 56, NULL, NULL),
(167, 120, 56, NULL, NULL),
(168, 121, 56, NULL, NULL),
(169, 122, 56, NULL, NULL),
(170, 123, 56, NULL, NULL),
(171, 124, 56, NULL, NULL),
(172, 125, 56, NULL, NULL),
(173, 126, 56, NULL, NULL),
(174, 127, 60, NULL, NULL),
(175, 128, 60, NULL, NULL),
(176, 129, 60, NULL, NULL),
(177, 130, 60, NULL, NULL),
(178, 131, 60, NULL, NULL),
(179, 132, 60, NULL, NULL),
(180, 133, 60, NULL, NULL),
(181, 134, 60, NULL, NULL),
(182, 135, 60, NULL, NULL),
(183, 136, 60, NULL, NULL),
(184, 137, 60, NULL, NULL),
(185, 138, 60, NULL, NULL),
(186, 139, 60, NULL, NULL),
(187, 140, 60, NULL, NULL),
(188, 141, 60, NULL, NULL),
(189, 142, 60, NULL, NULL),
(190, 143, 60, NULL, NULL),
(191, 144, 60, NULL, NULL),
(192, 145, 60, NULL, NULL),
(193, 146, 60, NULL, NULL),
(194, 147, 60, NULL, NULL),
(195, 148, 60, NULL, NULL),
(196, 149, 60, NULL, NULL),
(197, 150, 60, NULL, NULL),
(198, 151, 60, NULL, NULL),
(199, 152, 60, NULL, NULL),
(200, 153, 60, NULL, NULL),
(201, 154, 60, NULL, NULL),
(202, 155, 60, NULL, NULL),
(203, 156, 60, NULL, NULL),
(204, 157, 32, NULL, NULL),
(205, 158, 32, NULL, NULL),
(206, 159, 32, NULL, NULL),
(207, 160, 32, NULL, NULL),
(208, 161, 32, NULL, NULL),
(209, 162, 32, NULL, NULL),
(210, 163, 32, NULL, NULL),
(211, 164, 32, NULL, NULL),
(212, 165, 32, NULL, NULL),
(213, 166, 32, NULL, NULL),
(214, 167, 33, NULL, NULL),
(215, 168, 33, NULL, NULL),
(216, 169, 33, NULL, NULL),
(217, 170, 33, NULL, NULL),
(218, 171, 34, NULL, NULL),
(219, 172, 34, NULL, NULL),
(220, 173, 34, NULL, NULL),
(221, 174, 34, NULL, NULL),
(222, 175, 34, NULL, NULL),
(223, 176, 34, NULL, NULL),
(224, 177, 34, NULL, NULL),
(225, 178, 34, NULL, NULL),
(226, 179, 35, NULL, NULL),
(227, 180, 35, NULL, NULL),
(228, 181, 35, NULL, NULL),
(229, 182, 35, NULL, NULL),
(230, 183, 35, NULL, NULL),
(231, 184, 35, NULL, NULL),
(232, 185, 35, NULL, NULL),
(233, 186, 35, NULL, NULL),
(234, 187, 36, NULL, NULL),
(235, 188, 36, NULL, NULL),
(236, 189, 36, NULL, NULL),
(237, 190, 36, NULL, NULL),
(238, 191, 36, NULL, NULL),
(239, 192, 37, NULL, NULL),
(240, 193, 37, NULL, NULL),
(241, 194, 37, NULL, NULL),
(242, 195, 37, NULL, NULL),
(243, 196, 37, NULL, NULL),
(244, 197, 37, NULL, NULL),
(245, 198, 37, NULL, NULL),
(246, 199, 37, NULL, NULL),
(247, 200, 39, NULL, NULL),
(248, 201, 39, NULL, NULL),
(249, 202, 39, NULL, NULL),
(250, 203, 39, NULL, NULL),
(251, 204, 39, NULL, NULL),
(252, 205, 39, NULL, NULL),
(253, 206, 39, NULL, NULL),
(254, 207, 39, NULL, NULL),
(255, 208, 39, NULL, NULL),
(256, 209, 39, NULL, NULL),
(257, 210, 40, NULL, NULL),
(258, 211, 40, NULL, NULL),
(259, 212, 40, NULL, NULL),
(260, 213, 40, NULL, NULL),
(261, 214, 40, NULL, NULL),
(262, 215, 40, NULL, NULL),
(263, 216, 40, NULL, NULL),
(264, 217, 40, NULL, NULL),
(265, 218, 40, NULL, NULL),
(266, 219, 40, NULL, NULL),
(267, 220, 38, NULL, NULL),
(268, 221, 38, NULL, NULL),
(269, 222, 38, NULL, NULL),
(270, 223, 38, NULL, NULL),
(271, 224, 38, NULL, NULL),
(272, 225, 38, NULL, NULL),
(273, 226, 38, NULL, NULL),
(274, 227, 38, NULL, NULL),
(275, 228, 38, NULL, NULL),
(276, 229, 38, NULL, NULL),
(277, 230, 38, NULL, NULL),
(278, 231, 38, NULL, NULL),
(279, 232, 38, NULL, NULL),
(280, 233, 38, NULL, NULL),
(281, 234, 38, NULL, NULL),
(282, 235, 38, NULL, NULL),
(283, 236, 38, NULL, NULL),
(284, 237, 38, NULL, NULL),
(285, 238, 38, NULL, NULL),
(286, 239, 38, NULL, NULL),
(287, 240, 38, NULL, NULL),
(288, 241, 38, NULL, NULL),
(289, 242, 38, NULL, NULL),
(290, 243, 38, NULL, NULL),
(291, 244, 38, NULL, NULL),
(292, 245, 38, NULL, NULL),
(293, 246, 38, NULL, NULL),
(294, 247, 38, NULL, NULL),
(295, 248, 38, NULL, NULL),
(296, 249, 38, NULL, NULL),
(297, 250, 38, NULL, NULL),
(299, 41, 3, NULL, NULL),
(300, 251, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `quotations`
--

CREATE TABLE `quotations` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `country` varchar(50) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `message` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quotations`
--

INSERT INTO `quotations` (`id`, `full_name`, `email`, `product_id`, `country`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(4, 'Ashely Delgado', 'vefadym@mailinator.com', 33, 'Omnis voluptas esse', '+1 (435) 225-7136', 'Dolore itaque eu des', '2022-09-21 02:08:40', '2022-09-21 02:08:40'),
(5, 'Ashely Delgado', 'vefadym@mailinator.com', 33, 'Omnis voluptas esse', '+1 (435) 225-7136', 'Dolore itaque eu des', '2022-09-21 02:08:54', '2022-09-21 02:08:54'),
(6, 'Ashely Delgado', 'vefadym@mailinator.com', 33, 'Omnis voluptas esse', '+1 (435) 225-7136', 'Dolore itaque eu des', '2022-09-21 02:09:34', '2022-09-21 02:09:34'),
(7, 'Niraj Khanal', 'homesniraj@gmail.com', 41, 'Nepal', '9841768827', 'sagmjhxa', '2022-10-13 14:02:05', '2022-10-13 14:02:05'),
(8, 'Odessa Woodward', 'rycahol@mailinator.com', 251, 'Tempore earum non o', '+1 (525) 816-4583', 'Hic laborum similiqu', '2025-07-23 02:15:43', '2025-07-23 02:15:43');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `rating` double(8,2) NOT NULL,
  `review` varchar(191) NOT NULL,
  `show` tinyint(4) NOT NULL DEFAULT 0,
  `cons` varchar(191) DEFAULT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `email`, `rating`, `review`, `show`, `cons`, `product_id`, `user_id`, `created_at`, `updated_at`) VALUES
(7, 'Saurab', 'srbunitydeveloper@gmail.com', 3.00, 'ewdgdfgdfgdfg', 0, NULL, 41, 29, '2022-09-20 05:20:27', '2022-09-20 05:20:27'),
(8, 'admin', 'admin@gmail.com', 5.00, 'asdasd', 0, NULL, 42, 1, '2022-09-22 10:03:52', '2022-09-22 10:03:52'),
(9, 'admin', 'admin@gmail.com', 4.00, 'jhjtjthg', 0, NULL, 10, 1, '2022-10-13 14:07:24', '2022-10-13 14:07:24');

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE `seos` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `seo_keyword` varchar(191) DEFAULT NULL,
  `seo_description` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seos`
--

INSERT INTO `seos` (`id`, `product_id`, `seo_keyword`, `seo_description`, `created_at`, `updated_at`) VALUES
(1, 18, '<p>dasda</p>', '<p>dsada</p>', '2020-11-18 00:35:52', '2022-11-03 01:20:23'),
(2, 41, '<p>Edited SEO Keyword</p>', '<p>Edited SEO Description</p>', '2022-09-19 02:17:46', '2024-05-30 12:30:33');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` int(10) UNSIGNED NOT NULL,
  `shipping_location` varchar(191) NOT NULL,
  `shipping_price` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `zip_code` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `shipping_location`, `shipping_price`, `status`, `zip_code`, `created_at`, `updated_at`) VALUES
(1, 'Kathmandu', 100, 1, '0', '2020-10-20 22:41:29', '2020-10-20 22:41:29'),
(3, 'Melbourne', 500, 0, '0', '2020-10-20 22:41:56', '2020-12-08 02:06:24'),
(5, 'Dharan', 200, 1, '0', '2022-09-15 05:51:31', '2022-09-15 05:51:31'),
(6, 'Sydney', 550, 1, '0', '2022-09-15 05:51:44', '2022-09-15 05:51:44');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_media`
--

CREATE TABLE `shipping_media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shipping_prices`
--

CREATE TABLE `shipping_prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shipping_media_id` bigint(20) UNSIGNED NOT NULL,
  `weight_id` bigint(20) UNSIGNED NOT NULL,
  `price` double(8,2) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart`
--

CREATE TABLE `shopping_cart` (
  `id` varchar(191) NOT NULL,
  `instance` varchar(191) NOT NULL,
  `content` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
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
  `stock` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`id`, `product_id`, `size_id`, `color_id`, `stock`, `created_at`, `updated_at`) VALUES
(1, 18, 1, 2, 103, '2020-11-18 00:35:52', '2022-10-13 13:57:23'),
(2, 18, 3, 2, 0, '2020-11-18 00:35:52', '2022-10-13 13:57:23'),
(3, 18, 1, 2, 103, '2020-11-18 00:35:52', '2020-11-18 00:35:52'),
(4, 42, 2, 1, 6, '2022-09-22 09:46:03', '2022-09-22 18:21:16'),
(6, 42, 3, 1, 8, '2022-09-22 09:46:03', '2022-09-22 09:46:03'),
(7, 42, 1, 2, 2, '2022-09-22 09:46:03', '2022-09-23 09:07:36'),
(11, 18, 1, 2, 103, NULL, NULL),
(12, 18, 1, 2, 103, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) DEFAULT NULL,
  `last_name` varchar(191) DEFAULT NULL,
  `email` varchar(191) NOT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) DEFAULT NULL,
  `verified` varchar(191) NOT NULL DEFAULT '0',
  `roles` varchar(191) DEFAULT NULL,
  `provider_id` varchar(191) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `phone`, `email_verified_at`, `password`, `verified`, `roles`, `provider_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'hero', 'admin@gmail.com', '01421755', NULL, '$2y$10$n0ZU0pZ3DVmvjr.ruDiVRuXaC88hKOCMaIerfNJoz7..0QI8ZaJ2W', '1', 'admin', NULL, 'gHFTreq6KRqOhDFTVPnbDM5TDXNuYZmqxN0TRTiYLzH699A7fSKBI8MqKdng', '2020-10-20 22:20:44', '2023-01-04 12:49:51'),
(2, 'Bibek fjdl', 'Baldwin', 'bibekaryal0@gmail.com', '981319043546', NULL, '$2y$10$WsxWZvz9XuL/kmN1iLSOhOhQQNx4wJLbMBABabXzRlWcD3MwjE8M2', '1', 'user', NULL, '9PwXTSkeMmPPUdQVVlVbs50b50pyQmJC0ZRu6uHx9vIpHhL0Lt3YtV5x1okC', '2020-11-10 23:27:45', '2022-09-19 06:41:52'),
(5, 'Arsenio', 'Howe', 'wholesale@gmail.com', '+1 (443) 996-5502', NULL, '$2y$10$Simo5.yl0SNyT8kmsibGj.eaBtBgCbpLm5EA1pByf6siJGRDCwgES', '1', 'wholeseller', NULL, NULL, '2020-11-11 10:08:39', '2020-11-11 10:08:39'),
(6, 'Subir', 'joshi', 'kebib96@gmail.com', '312312321', NULL, '$2y$10$SQ9wWxgbgjJIzr4a5EZYh.wFrCToRI0lhqMPPqy4qeAsAUWqgfi0O', '0', 'user', NULL, NULL, '2020-12-08 00:11:37', '2020-12-08 00:11:37'),
(12, NULL, NULL, 'bibekaryal79@yahoo.com', NULL, NULL, NULL, '0', NULL, NULL, NULL, '2020-12-16 02:51:18', '2020-12-16 02:51:18'),
(27, 'Colby', 'Prince', 'arundg2018@gmail.com', '1365868317', NULL, '$2y$10$XK03AY5LmP3VkPoNs5ImP.NVxJV6wmQKBh0Ei20lPBTdjRxhsiIki', '1', 'user', NULL, NULL, '2021-01-20 14:24:35', '2021-01-20 14:26:14'),
(28, 'Manish', 'Adjdo', 'manishadhikari241@gmail.com', '728283838', NULL, '$2y$10$dcyBs5wcEP.XxCydtz0fLOaM03bV.YCjThRx8zrXl2CC/16iSznxK', '0', 'user', NULL, NULL, '2021-01-20 17:44:55', '2021-01-20 17:44:55'),
(29, 'Saurab', 'Kunwar', 'srbunitydeveloper@gmail.com', '9840601527', NULL, '$2y$10$KGEpPRgbpPfvs4FFD7WiPOKV/UAIQ.qKXSEG5lzvMwb6C8EUJjRuq', '1', 'user', NULL, NULL, '2022-09-15 02:37:58', '2022-09-21 01:53:48'),
(30, 'Ram', 'Prasad', 'ram@gmail.com', '9843982398', NULL, '$2y$10$Ry3V6pvzEZo6oMZ7v99Ok.LyYbUdP6xvL4Mf0Gm/yxMhKklkqpF1.', '1', 'user', NULL, NULL, '2022-09-16 01:58:51', '2022-09-16 01:58:55'),
(31, 'Hayfa', 'Vincent', 'lojym@mailinator.com', '9867564534', NULL, '$2y$10$U6t8C7S.vKDQU7czjm601.dDDbsXo0syas.4PQFTk0XBiBlZ8I6XK', '1', 'user', NULL, NULL, '2022-09-18 05:12:11', '2022-09-18 05:12:44'),
(32, 'Keelie', 'William', 'fymirat@mailinator.com', '399', NULL, '$2y$10$yjbGpY7kd331sDjGnPUfj.7HOpSLbe7mPp7OzsZ10BYAt15sg8Iey', '0', 'user', NULL, NULL, '2022-09-20 00:40:48', '2022-09-20 00:40:48'),
(33, 'Jonah', 'Camacho', 'junepudasaini@gmail.com', '702', NULL, '$2y$10$GUVMkFO/TQpJsfgrh64U1O1WLT/6nlINRAErkTu/oLyHzZK5JM57S', '0', 'user', NULL, NULL, '2022-09-23 10:43:27', '2022-09-23 10:43:27'),
(37, 'test', 'name', 'subaj2010@gmail.com', '456534323', NULL, '$2y$10$tAQwWMaAj6f4SdjqO2VtUO8MjRgCU5iWRMa.v8szdX9Db3ZVpYZHa', '0', 'user', NULL, NULL, '2022-09-23 10:59:02', '2022-09-23 10:59:02'),
(38, 'binod', 'Sapkota', 'binodsapkota96@gmail.com', '9851207299', NULL, '$2y$10$FWZC0tjhuLKsSrU83sd8cOLLrtS87b0Ae5uFRa4FmfgG08aglpYuO', '1', 'user', NULL, NULL, '2023-05-09 09:12:54', '2023-05-09 09:13:36'),
(39, 'Pratikshya', 'Nakarmi', 'pratikshya.cyberlink@gmail.com', '9825698839', NULL, '$2y$10$s8mfZr/JZEI.4P0gbq0Hzu8oPX3rny.YQqMm4UoGzMhxOnA1cmN6q', '1', 'user', NULL, NULL, '2023-05-24 09:42:45', '2023-05-24 09:44:13'),
(40, 'subir', 'joshi', 'suveer.joc@gmail.com', '9845604457', NULL, '$2y$10$J3okizqyMsul2HN6Yc00f.c.p15uH4xE7Gnx3w89g7UpPjwf7JZ8G', '1', 'user', NULL, NULL, '2023-05-25 16:00:43', '2023-05-25 16:01:09'),
(41, 'bijaya', 'chhetri', 'bijay0710@gmail.com', '9867201618', NULL, '$2y$10$hHmiDef93TfdYtleUd.ojuB2J1bCYVQBSmtiiKls7kVwf7jCVACw2', '1', 'user', NULL, NULL, '2023-05-25 16:00:51', '2023-05-25 16:01:20'),
(42, 'Inga', 'Rosales', 'developer.cyberlink@gmail.com', '43', NULL, '$2y$10$dWNr1JQpb21YThJlOmX7leZ5TXajlnHk8x3mr16HtS7Mus85p6px6', '0', 'user', NULL, NULL, '2023-07-25 10:41:09', '2023-07-25 10:41:09');

-- --------------------------------------------------------

--
-- Table structure for table `verify_users`
--

CREATE TABLE `verify_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `token` varchar(191) NOT NULL,
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
(32, 42, '97LoPyoTG2NJjwGbBnZJ', '2023-07-25 10:41:09', '2023-07-25 10:41:09');

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
(4, 1, 21, '2020-12-22 04:50:53', '2020-12-22 04:50:53');

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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
  ADD UNIQUE KEY `products_slug_unique` (`slug`) USING HASH,
  ADD KEY `products_brand_id_foreign` (`brand_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_categories_product_id_foreign` (`product_id`),
  ADD KEY `product_categories_category_id_foreign` (`category_id`);

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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `brand_discounts`
--
ALTER TABLE `brand_discounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cl_banner`
--
ALTER TABLE `cl_banner`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `color_stocks`
--
ALTER TABLE `color_stocks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=281;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `descriptions`
--
ALTER TABLE `descriptions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=272;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=842;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `order_addresses`
--
ALTER TABLE `order_addresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=252;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=301;

--
-- AUTO_INCREMENT for table `quotations`
--
ALTER TABLE `quotations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `shipping_media`
--
ALTER TABLE `shipping_media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `verify_users`
--
ALTER TABLE `verify_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `weights`
--
ALTER TABLE `weights`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD CONSTRAINT `product_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `product_categories_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
