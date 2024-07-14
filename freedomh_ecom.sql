-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 04, 2024 at 04:55 PM
-- Server version: 8.0.36
-- PHP Version: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freedomh_ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` bigint UNSIGNED NOT NULL,
  `about_us` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `about_us`, `created_at`, `updated_at`) VALUES
(1, '<h2 style=\"font-size: 2rem; color: rgb(33, 37, 41); font-family: Inter, sans-serif;\"><br></h2><h2 style=\"font-size: 2rem; color: rgb(33, 37, 41); font-family: Inter, sans-serif;\">About Us</h2><p style=\"font-size: 2rem; color: rgb(33, 37, 41); font-family: Inter, sans-serif;\"><br></p><div style=\"color: rgb(33, 37, 41); font-family: Inter, sans-serif; font-size: 16px;\"><p data-mce-style=\"text-align: left;\">Sailor is an eminent lifestyle brand (a concern of Epyllion Holdings Limited) in the retail fashion industry of Bangladesh with the purpose of Sailing life. As a fashion brand, Sailor is renowned for its unique style and variety of collections. We crafted our fashionable attires &amp; accessories for all age ranges who believe themselves to be stand out with their unique fashion sense and style statement.</p><p data-mce-style=\"text-align: left;\">Sailor celebrates all festivals and seasons with an extraordinary collection of products that are designed in-house as we have one of the largest design teams to deliver a fabulous new fashion every season.<br>In this journey of fashion, we always want to make a quality effort to provide better products and services to our customers.</p><p data-mce-style=\"text-align: left;\">&nbsp;</p><p data-mce-style=\"text-align: left;\" style=\"margin-bottom: 1rem;\">Thank you for choosing to shop with us!</p></div>', '2023-11-24 21:57:55', '2023-11-24 21:57:55');

-- --------------------------------------------------------

--
-- Table structure for table `apply_promo_codes`
--

CREATE TABLE `apply_promo_codes` (
  `id` bigint UNSIGNED NOT NULL,
  `promo_code_id` bigint NOT NULL,
  `user_id` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `short_description`, `image`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, '1700793011.avif', '2023-11-22 23:34:41', '2023-11-23 20:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `blog_category_id` bigint UNSIGNED NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `trending` tinyint NOT NULL DEFAULT '0',
  `status` tinyint NOT NULL DEFAULT '0' COMMENT '1 = Active, 0 = Deactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `slug`, `user_id`, `blog_category_id`, `description`, `image`, `trending`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Best Travel Adventures', 'best-travel-adventures-1281', 1, 1, '<div class=\"sqs-block html-block sqs-block-html\" data-block-type=\"2\" id=\"block-f60e6037944a45b4286d\" style=\"position: relative; height: auto; padding: 0px 17px 17px; clear: none; width: 1037.55px; margin-right: auto; margin-left: auto; color: rgba(29, 29, 29, 0.7); font-family: Rubik; font-size: 20px;\"><div class=\"sqs-block-content\" style=\"outline: none;\"><div class=\"sqs-html-content\" style=\"outline: none; overflow-wrap: break-word; margin-top: 0px; margin-bottom: 0px;\"><h3 class=\"wp-block-heading\" id=\"h-hiking-top-layer-s\" style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; font-family: Oswald, sans-serif; font-size: 25px; line-height: 1.5; letter-spacing: 2px; text-transform: uppercase; color: rgb(31, 38, 51);\">HIKING TOP LAYER(S)</h3><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; font-size: 16px; line-height: 1.8; color: rgb(0, 0, 0); font-family: Montserrat, sans-serif;\">There are varying degrees of top layers, all appropriate for different temperatures. When Austin gets hot in the summertime, I might add a thin, long-sleeve button-down shirt over a tank, so that my arms have protection from the sun’s hot rays. Here’s an example of a&nbsp;<a href=\"https://stylishlyme.com/what-to-wear/summer-hiking-outfit/\" target=\"_blank\" rel=\"noopener\" style=\"margin: 0px; padding: 0px; color: rgb(207, 163, 0); cursor: pointer; transition: all 0.3s ease 0s;\">summer hiking outfit</a>&nbsp;I wore when hiked around near Bass Lake in California.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; font-size: 16px; line-height: 1.8; color: rgb(0, 0, 0); font-family: Montserrat, sans-serif;\">In more moderate weather, I might swap out the button-down for a yoga half-zip, windbreaker, or lightweight fleece. Or, start with the button-down shirt and add a down vest, like the red one I am wearing here.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; font-size: 16px; line-height: 1.8; color: rgb(0, 0, 0); font-family: Montserrat, sans-serif;\">As the temperatures drop, however, your winter hiking outfit will need more and more layers over your base. I like the idea of the half-zip, either in a thinner dry-fit material or fleece. The higher neck keeps cold air from going down my shirt, and if you get warm, it can be unzipped for ventilation. Then you can layer on either a down vest or down jacket.</p><div class=\"google-auto-placed ap_container\" style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Montserrat, sans-serif; font-size: 13px; width: 735px; height: auto; clear: both; text-align: center;\"><ins data-ad-format=\"auto\" class=\"adsbygoogle adsbygoogle-noablate\" data-ad-client=\"ca-pub-5323936780826811\" data-adsbygoogle-status=\"done\" data-ad-status=\"unfilled\" style=\"margin: auto; padding: 0px; text-decoration-line: none; background: transparent; display: block; height: 0px;\"><div id=\"aswift_5_host\" tabindex=\"0\" title=\"Advertisement\" aria-label=\"Advertisement\" style=\"margin: 0px; padding: 0px; border: none; height: 0px; width: 735px; position: relative; visibility: visible; background-color: transparent; display: inline-block; overflow: hidden; opacity: 0;\"><iframe id=\"aswift_5\" name=\"aswift_5\" browsingtopics=\"true\" sandbox=\"allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation\" width=\"735\" height=\"0\" frameborder=\"0\" marginwidth=\"0\" marginheight=\"0\" vspace=\"0\" hspace=\"0\" allowtransparency=\"true\" scrolling=\"no\" allow=\"attribution-reporting\" src=\"https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-5323936780826811&amp;output=html&amp;h=280&amp;adk=143277100&amp;adf=3058690360&amp;pi=t.aa~a.2480893159~i.42~rp.4&amp;w=735&amp;fwrn=4&amp;fwrnh=100&amp;lmt=1700822118&amp;num_ads=1&amp;rafmt=1&amp;armr=3&amp;sem=mc&amp;pwprc=8804774228&amp;ad_type=text_image&amp;format=735x280&amp;url=https%3A%2F%2Fstylishlyme.com%2Ftravel-clothes%2Fhiking-outfit%2F&amp;ea=0&amp;fwr=0&amp;pra=3&amp;rh=184&amp;rw=735&amp;rpe=1&amp;resp_fmts=3&amp;wgl=1&amp;fa=27&amp;uach=WyJXaW5kb3dzIiwiMTAuMC4wIiwieDg2IiwiIiwiMTE5LjAuNjA0NS4xNjAiLG51bGwsMCxudWxsLCI2NCIsW1siR29vZ2xlIENocm9tZSIsIjExOS4wLjYwNDUuMTYwIl0sWyJDaHJvbWl1bSIsIjExOS4wLjYwNDUuMTYwIl0sWyJOb3Q_QV9CcmFuZCIsIjI0LjAuMC4wIl1dLDBd&amp;dt=1700821936761&amp;bpp=1&amp;bdt=1750&amp;idt=1&amp;shv=r20231109&amp;mjsv=m202311140101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3D6bab9c866d6e47cb%3AT%3D1700821740%3ART%3D1700822114%3AS%3DALNI_MbM2izBYRmny9jf983dZ3VzUfshog&amp;gpic=UID%3D00000c965b7a5b54%3AT%3D1700821740%3ART%3D1700822114%3AS%3DALNI_MaGAXn47Y3W3dhFYlq5ZMSJxTXaNQ&amp;prev_fmts=0x0%2C735x280%2C1005x124%2C735x280%2C735x280%2C735x280&amp;nras=7&amp;correlator=294959660701&amp;frm=20&amp;pv=1&amp;ga_vid=443077680.1700821740&amp;ga_sid=1700821936&amp;ga_hid=1897549303&amp;ga_fc=1&amp;ga_cid=1887686480.1700821740&amp;u_tz=360&amp;u_his=4&amp;u_h=900&amp;u_w=1440&amp;u_ah=860&amp;u_aw=1440&amp;u_cd=24&amp;u_sd=1&amp;dmc=4&amp;adx=344&amp;ady=8482&amp;biw=1423&amp;bih=751&amp;scr_x=0&amp;scr_y=5481&amp;eid=44759875%2C44759926%2C31079438%2C44795922%2C44809316%2C31078297%2C31079756%2C44807754%2C44806141%2C44807763%2C44808148%2C44808284%2C44809053%2C31078663%2C31078665%2C31078668%2C31078670&amp;oid=2&amp;psts=AOrYGsksCU2QEr1csMixbJznPO31qYdEn1ze_P9tOEmPQ1jtm-rc8qWsZ-FmeOv1mLDFBTFDo7MbRpMEDYMakx53S1mO91rh-x6UxII1qjJTn5IpOYWgFQ&amp;pvsid=2523874477506651&amp;tmod=1263884581&amp;uas=3&amp;nvt=1&amp;ref=https%3A%2F%2Fstylishlyme.com%2Flooks%2Fwinter-outfits%2F&amp;fc=1408&amp;brdim=0%2C0%2C0%2C0%2C1440%2C0%2C1440%2C860%2C1440%2C751&amp;vis=1&amp;rsz=%7C%7Cs%7C&amp;abl=NS&amp;fu=128&amp;bc=31&amp;td=1&amp;psd=W251bGwsbnVsbCxudWxsLDNd&amp;nt=1&amp;ifi=6&amp;uci=a!6&amp;btvi=6&amp;fsb=1&amp;dtd=M\" data-google-container-id=\"a!6\" data-google-query-id=\"CInaoJG43IIDFTodgwMdPyEKtQ\" data-load-complete=\"true\" style=\"margin: 0px; padding: 0px; left: 0px; position: absolute; top: 0px; border-width: 0px; border-style: initial; width: 735px; height: 0px;\"></iframe></div></ins></div><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; font-size: 16px; line-height: 1.8; color: rgb(0, 0, 0); font-family: Montserrat, sans-serif;\">If it’s raining, or you anticipate rain, you can either swap out the down topper or add a water-resistant shell layer, like this&nbsp;<a href=\"http://rstyle.me/n/cccz2npdaw\" target=\"_blank\" rel=\"noopener\" style=\"margin: 0px; padding: 0px; color: rgb(207, 163, 0); cursor: pointer; transition: all 0.3s ease 0s;\">Joules Coast Jacket</a>&nbsp;or&nbsp;<a href=\"http://rstyle.me/n/cccz22pdaw\" target=\"_blank\" rel=\"noopener\" style=\"margin: 0px; padding: 0px; color: rgb(207, 163, 0); cursor: pointer; transition: all 0.3s ease 0s;\">The North Face Venture Jacket</a>. I also like the idea of this&nbsp;<a href=\"http://rstyle.me/n/cccz4npdaw\" target=\"_blank\" rel=\"noopener\" style=\"margin: 0px; padding: 0px; color: rgb(207, 163, 0); cursor: pointer; transition: all 0.3s ease 0s;\">3-in-1 jacket from The North Face</a>, which has a breathable shell and quilted, insulated inner layer. You can wear both layers together for warmth and rain protection, or wear each separately.</p></div></div></div>', 'best-travel-adventures-20191700821231.webp', 0, 1, '2023-11-24 04:20:31', '2023-11-24 04:37:00'),
(3, 'HIKING IN STYLE: FINDING THE RIGHT HIKING OUTFIT FOR YOU', 'hiking-in-style-finding-the-right-hiking-outfit-for-you-4341', 1, 3, '<h2 class=\"wp-block-heading\" id=\"h-hiking-conditions-will-determine-what-to-wear-hiking\" style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; font-family: Oswald, sans-serif; font-size: 28px; line-height: 1.5; letter-spacing: 2px; text-transform: uppercase; color: rgb(31, 38, 51);\">HIKING CONDITIONS WILL DETERMINE WHAT TO WEAR HIKING</h2><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; font-size: 16px; line-height: 1.8; color: rgb(0, 0, 0); font-family: Montserrat, sans-serif;\">Your hiking outfit will depend upon your destination, the weather, and the length of your hike.</p><h3 class=\"wp-block-heading\" id=\"h-hiking-destination\" style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; font-family: Oswald, sans-serif; font-size: 25px; line-height: 1.5; letter-spacing: 2px; text-transform: uppercase; color: rgb(31, 38, 51);\">HIKING DESTINATION</h3><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; font-size: 16px; line-height: 1.8; color: rgb(0, 0, 0); font-family: Montserrat, sans-serif;\">Are you heading out to a paved trail or a dusty hiking path? Will you be mucking through mud or trekking across rocky terrain or boulders? Taking it easy on a flat trail or climbing up and down a mountain?&nbsp;<span style=\"margin: 0px 0px 20px; padding: 0px; font-weight: 700;\">The answer to each of these will help to determine your hiking attire.</span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; font-size: 16px; line-height: 1.8; color: rgb(0, 0, 0); font-family: Montserrat, sans-serif;\">If you are on a nice level paved trail, then you probably won’t be exerting a lot of energy that will make you perspire and shed layers as you go. You also won’t need heavy-duty hiking boots.</p><div class=\"google-auto-placed ap_container\" style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Montserrat, sans-serif; width: 735px; height: auto; clear: both; text-align: center;\"><ins data-ad-format=\"auto\" class=\"adsbygoogle adsbygoogle-noablate\" data-ad-client=\"ca-pub-5323936780826811\" data-adsbygoogle-status=\"done\" data-ad-status=\"unfilled\" style=\"margin: auto; padding: 0px; text-decoration-line: none; background: transparent; display: block; height: 0px;\"><div id=\"aswift_1_host\" tabindex=\"0\" title=\"Advertisement\" aria-label=\"Advertisement\" style=\"margin: 0px; padding: 0px; border: none; height: 0px; width: 735px; position: relative; visibility: visible; background-color: transparent; display: inline-block; overflow: hidden; opacity: 0;\"><iframe id=\"aswift_1\" name=\"aswift_1\" browsingtopics=\"true\" sandbox=\"allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation\" width=\"735\" height=\"0\" frameborder=\"0\" marginwidth=\"0\" marginheight=\"0\" vspace=\"0\" hspace=\"0\" allowtransparency=\"true\" scrolling=\"no\" allow=\"attribution-reporting\" src=\"https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-5323936780826811&amp;output=html&amp;h=280&amp;adk=143277100&amp;adf=2361699484&amp;pi=t.aa~a.2480893159~i.9~rp.4&amp;w=735&amp;fwrn=4&amp;fwrnh=100&amp;lmt=1700821936&amp;num_ads=1&amp;rafmt=1&amp;armr=3&amp;sem=mc&amp;pwprc=8804774228&amp;ad_type=text_image&amp;format=735x280&amp;url=https%3A%2F%2Fstylishlyme.com%2Ftravel-clothes%2Fhiking-outfit%2F&amp;ea=0&amp;fwr=0&amp;pra=3&amp;rh=184&amp;rw=735&amp;rpe=1&amp;resp_fmts=3&amp;wgl=1&amp;fa=27&amp;uach=WyJXaW5kb3dzIiwiMTAuMC4wIiwieDg2IiwiIiwiMTE5LjAuNjA0NS4xNjAiLG51bGwsMCxudWxsLCI2NCIsW1siR29vZ2xlIENocm9tZSIsIjExOS4wLjYwNDUuMTYwIl0sWyJDaHJvbWl1bSIsIjExOS4wLjYwNDUuMTYwIl0sWyJOb3Q_QV9CcmFuZCIsIjI0LjAuMC4wIl1dLDBd&amp;dt=1700821936737&amp;bpp=2&amp;bdt=1726&amp;idt=2&amp;shv=r20231109&amp;mjsv=m202311140101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3D6bab9c866d6e47cb%3AT%3D1700821740%3ART%3D1700821740%3AS%3DALNI_MbM2izBYRmny9jf983dZ3VzUfshog&amp;gpic=UID%3D00000c965b7a5b54%3AT%3D1700821740%3ART%3D1700821740%3AS%3DALNI_MaGAXn47Y3W3dhFYlq5ZMSJxTXaNQ&amp;prev_fmts=0x0&amp;nras=2&amp;correlator=294959660701&amp;frm=20&amp;pv=1&amp;ga_vid=443077680.1700821740&amp;ga_sid=1700821936&amp;ga_hid=1897549303&amp;ga_fc=1&amp;ga_cid=1887686480.1700821740&amp;u_tz=360&amp;u_his=4&amp;u_h=900&amp;u_w=1440&amp;u_ah=860&amp;u_aw=1440&amp;u_cd=24&amp;u_sd=1&amp;dmc=4&amp;adx=344&amp;ady=2241&amp;biw=1423&amp;bih=751&amp;scr_x=0&amp;scr_y=0&amp;eid=44759875%2C44759926%2C31079438%2C44795922%2C44809316%2C31078297%2C31079756%2C44807754%2C44806141%2C44807763%2C44808148%2C44808284%2C44809053%2C31078663%2C31078665%2C31078668%2C31078670&amp;oid=2&amp;pvsid=2523874477506651&amp;tmod=1263884581&amp;uas=0&amp;nvt=1&amp;ref=https%3A%2F%2Fstylishlyme.com%2Flooks%2Fwinter-outfits%2F&amp;fc=1408&amp;brdim=0%2C0%2C0%2C0%2C1440%2C0%2C1440%2C860%2C1440%2C751&amp;vis=1&amp;rsz=%7C%7Cs%7C&amp;abl=NS&amp;fu=128&amp;bc=31&amp;td=1&amp;psd=W251bGwsbnVsbCxudWxsLDNd&amp;nt=1&amp;ifi=2&amp;uci=a!2&amp;btvi=1&amp;fsb=1&amp;dtd=43\" data-google-container-id=\"a!2\" data-google-query-id=\"CJ-V4rq33IIDFe8cgwMdEiUCfw\" data-load-complete=\"true\" style=\"margin: 0px; padding: 0px; left: 0px; position: absolute; top: 0px; border-width: 0px; border-style: initial; width: 735px; height: 0px;\"></iframe></div></ins></div><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; font-size: 16px; line-height: 1.8; color: rgb(0, 0, 0); font-family: Montserrat, sans-serif;\">If you will be crossing creeks or mucking through mud, you’ll want to make sure your hiking shoes are waterproof or at least water-resistant, and easy to clean. You’ll also need a good tread that grips and keeps you from falling. The length of your pants is also a consideration here, as longer pants will not only get wet, but also attract dirt and mud.</p>', 'hiking-in-style-finding-the-right-hiking-outfit-for-you-33421700821979.jpg', 0, 1, '2023-11-24 04:32:59', '2023-11-24 04:39:57'),
(4, 'Readme 9 Pro', 'readme-9-pro-1418', 1, 2, '<h2 class=\"wp-block-heading\" id=\"h-putting-together-a-stylish-appropriate-hiking-outfit\" style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; font-family: Oswald, sans-serif; font-size: 28px; line-height: 1.5; letter-spacing: 2px; text-transform: uppercase; color: rgb(31, 38, 51);\">PUTTING TOGETHER A STYLISH &amp; APPROPRIATE HIKING OUTFIT</h2><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; font-size: 16px; line-height: 1.8; color: rgb(0, 0, 0); font-family: Montserrat, sans-serif;\">Let’s start from the top and work our way down. I’m offering up both practical and stylish hiking clothes that will protect you from the element and look good at the same time. You never know who you’ll run into on that hiking trail!</p><h3 class=\"wp-block-heading\" id=\"h-the-right-hiking-hat\" style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; font-family: Oswald, sans-serif; font-size: 25px; line-height: 1.5; letter-spacing: 2px; text-transform: uppercase; color: rgb(31, 38, 51);\">THE RIGHT HIKING HAT</h3><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; font-size: 16px; line-height: 1.8; color: rgb(0, 0, 0); font-family: Montserrat, sans-serif;\">No matter the weather, a hat is usually a necessary option. When it’s sunny, you need to be protected from the strong rays; rain requires something to keep your head dry; and snow necessitates a warm hat that covers both head and ears.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; font-size: 16px; line-height: 1.8; color: rgb(0, 0, 0); font-family: Montserrat, sans-serif;\">I prefer to stay away from baseball caps, as they don’t protect my neck in any way. For sun protection, you can done a nice Panama hat,&nbsp;<a href=\"https://stylishlyme.com/what-to-wear/what-to-wear-with-white-shorts/\" target=\"_blank\" rel=\"noopener\" style=\"margin: 0px; padding: 0px; color: rgb(207, 163, 0); cursor: pointer; transition: all 0.3s ease 0s;\">floppy straw hat</a>, summer fedora, or check out some&nbsp;<a href=\"https://stylishlyme.com/style-guides/how-to-wear-a-hat/\" target=\"_blank\" rel=\"noopener\" style=\"margin: 0px; padding: 0px; color: rgb(207, 163, 0); cursor: pointer; transition: all 0.3s ease 0s;\">stylish ways to wear a hat</a>&nbsp;in my hat guide, they might not all work for hiking but you’ll get some outfit ideas.</p><div class=\"google-auto-placed ap_container\" style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Montserrat, sans-serif; width: 735px; height: auto; clear: both; text-align: center;\"><ins data-ad-format=\"auto\" class=\"adsbygoogle adsbygoogle-noablate\" data-ad-client=\"ca-pub-5323936780826811\" data-adsbygoogle-status=\"done\" data-ad-status=\"unfilled\" style=\"margin: auto; padding: 0px; text-decoration-line: none; background: transparent; display: block; height: 0px;\"><div id=\"aswift_3_host\" tabindex=\"0\" title=\"Advertisement\" aria-label=\"Advertisement\" style=\"margin: 0px; padding: 0px; border: none; height: 0px; width: 735px; position: relative; visibility: visible; background-color: transparent; display: inline-block; overflow: hidden; opacity: 0;\"><iframe id=\"aswift_3\" name=\"aswift_3\" browsingtopics=\"true\" sandbox=\"allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation\" width=\"735\" height=\"0\" frameborder=\"0\" marginwidth=\"0\" marginheight=\"0\" vspace=\"0\" hspace=\"0\" allowtransparency=\"true\" scrolling=\"no\" allow=\"attribution-reporting\" src=\"https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-5323936780826811&amp;output=html&amp;h=280&amp;adk=143277100&amp;adf=3309113751&amp;pi=t.aa~a.2480893159~i.26~rp.4&amp;w=735&amp;fwrn=4&amp;fwrnh=100&amp;lmt=1700821988&amp;num_ads=1&amp;rafmt=1&amp;armr=3&amp;sem=mc&amp;pwprc=8804774228&amp;ad_type=text_image&amp;format=735x280&amp;url=https%3A%2F%2Fstylishlyme.com%2Ftravel-clothes%2Fhiking-outfit%2F&amp;ea=0&amp;fwr=0&amp;pra=3&amp;rh=184&amp;rw=735&amp;rpe=1&amp;resp_fmts=3&amp;wgl=1&amp;fa=27&amp;uach=WyJXaW5kb3dzIiwiMTAuMC4wIiwieDg2IiwiIiwiMTE5LjAuNjA0NS4xNjAiLG51bGwsMCxudWxsLCI2NCIsW1siR29vZ2xlIENocm9tZSIsIjExOS4wLjYwNDUuMTYwIl0sWyJDaHJvbWl1bSIsIjExOS4wLjYwNDUuMTYwIl0sWyJOb3Q_QV9CcmFuZCIsIjI0LjAuMC4wIl1dLDBd&amp;dt=1700821936750&amp;bpp=2&amp;bdt=1739&amp;idt=2&amp;shv=r20231109&amp;mjsv=m202311140101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3D6bab9c866d6e47cb%3AT%3D1700821740%3ART%3D1700821740%3AS%3DALNI_MbM2izBYRmny9jf983dZ3VzUfshog&amp;gpic=UID%3D00000c965b7a5b54%3AT%3D1700821740%3ART%3D1700821740%3AS%3DALNI_MaGAXn47Y3W3dhFYlq5ZMSJxTXaNQ&amp;prev_fmts=0x0%2C735x280%2C1005x124%2C735x280&amp;nras=5&amp;correlator=294959660701&amp;frm=20&amp;pv=1&amp;ga_vid=443077680.1700821740&amp;ga_sid=1700821936&amp;ga_hid=1897549303&amp;ga_fc=1&amp;ga_cid=1887686480.1700821740&amp;u_tz=360&amp;u_his=4&amp;u_h=900&amp;u_w=1440&amp;u_ah=860&amp;u_aw=1440&amp;u_cd=24&amp;u_sd=1&amp;dmc=4&amp;adx=344&amp;ady=5755&amp;biw=1423&amp;bih=751&amp;scr_x=0&amp;scr_y=2769&amp;eid=44759875%2C44759926%2C31079438%2C44795922%2C44809316%2C31078297%2C31079756%2C44807754%2C44806141%2C44807763%2C44808148%2C44808284%2C44809053%2C31078663%2C31078665%2C31078668%2C31078670&amp;oid=2&amp;psts=AOrYGsksCU2QEr1csMixbJznPO31qYdEn1ze_P9tOEmPQ1jtm-rc8qWsZ-FmeOv1mLDFBTFDo7MbRpMEDYMakx53S1mO91rh-x6UxII1qjJTn5IpOYWgFQ&amp;pvsid=2523874477506651&amp;tmod=1263884581&amp;uas=1&amp;nvt=1&amp;ref=https%3A%2F%2Fstylishlyme.com%2Flooks%2Fwinter-outfits%2F&amp;fc=1408&amp;brdim=0%2C0%2C0%2C0%2C1440%2C0%2C1440%2C860%2C1440%2C751&amp;vis=1&amp;rsz=%7C%7Cs%7C&amp;abl=NS&amp;fu=128&amp;bc=31&amp;td=1&amp;psd=W251bGwsbnVsbCxudWxsLDNd&amp;nt=1&amp;ifi=4&amp;uci=a!4&amp;btvi=4&amp;fsb=1&amp;dtd=51805\" data-google-container-id=\"a!4\" data-google-query-id=\"CJmkutO33IIDFdVFnQkda_AFPw\" data-load-complete=\"true\" style=\"margin: 0px; padding: 0px; left: 0px; position: absolute; top: 0px; border-width: 0px; border-style: initial; width: 735px; height: 0px;\"></iframe></div></ins></div><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; font-size: 16px; line-height: 1.8; color: rgb(0, 0, 0); font-family: Montserrat, sans-serif;\">When it comes to rain, you are bit more limited style-wise. L.L. Bean has&nbsp;<a href=\"http://www.llbean.com/llb/shop/502976?page=womens-hats-and-headbands&amp;nav=ln-502976&amp;gnrefine=1*STYLE*Rain+Hat%5E1*ACTVTY*Hiking\" target=\"_blank\" rel=\"noopener\" style=\"margin: 0px; padding: 0px; color: rgb(207, 163, 0); cursor: pointer; transition: all 0.3s ease 0s;\">three good options</a>, or be a bit more unconventional and wear this&nbsp;<a href=\"http://rstyle.me/n/cb3nz6pdaw\" target=\"_blank\" rel=\"noopener\" style=\"margin: 0px; padding: 0px; color: rgb(207, 163, 0); cursor: pointer; transition: all 0.3s ease 0s;\">Oilcloth Outback Hat from Orvis</a>&nbsp;(designed for men, but we can make it work, I wear Peter’s hat all the time).</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; font-size: 16px; line-height: 1.8; color: rgb(0, 0, 0); font-family: Montserrat, sans-serif;\">For colder climates and snow, you’ll want something to keep your head and ears warm. And there are sooooo many fun, colorful and stylish choices to wear with your hiking outfit! I’m wearing a ribbed knit beanie in blue and gray (to match the top and sunglasses!). You can find similar beanies major department stores, just make sure they are not only stylish but keep your head warm! Here are a&nbsp;<a href=\"http://rstyle.me/n/cb3ps9pdaw\" target=\"_blank\" rel=\"noopener\" style=\"margin: 0px; padding: 0px; color: rgb(207, 163, 0); cursor: pointer; transition: all 0.3s ease 0s;\">lot of cute options</a>. Look for cuffed beanies, cable-knit beanies, or try this&nbsp;<a href=\"http://rstyle.me/n/cb3n7wpdaw\" target=\"_blank\" rel=\"noopener\" style=\"margin: 0px; padding: 0px; color: rgb(207, 163, 0); cursor: pointer; transition: all 0.3s ease 0s;\">Yukon Cap</a>. I love the fleece lining and the convertible earflaps!</p>', 'readme-9-pro-14181700822176.jpg', 0, 1, '2023-11-24 04:36:16', '2023-11-24 04:36:16');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0' COMMENT '1 = Active, 0 = Deactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Winter', '-3244', 1, '2023-11-24 04:19:12', '2023-11-24 04:19:12'),
(2, 'New Arrival', '-2629', 1, '2023-11-24 04:19:22', '2023-11-24 04:19:22'),
(3, 'Summer', '-4496', 1, '2023-11-24 04:19:30', '2023-11-24 04:19:30');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `slug`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Gucci', 'gucci-4669', '', 'gucci-46691700793578.jpg', 1, '2023-11-23 20:39:38', '2023-11-23 20:39:38'),
(2, 'Samsung', 'samsung-3200', '', 'samsung-32001700793606.jpg', 1, '2023-11-23 20:40:06', '2023-11-23 20:40:06'),
(3, 'Sailor', 'sailor-1007', '', 'sailor-10071700793646.jpeg', 1, '2023-11-23 20:40:46', '2023-11-23 20:40:46'),
(4, 'Sony', 'sony-2451', '', 'sony-24511700793670.png', 1, '2023-11-23 20:41:10', '2023-11-23 20:41:10'),
(5, 'Naviforce', 'naviforce-1211', '', 'naviforce-12111700793686.png', 1, '2023-11-23 20:41:26', '2023-11-23 20:41:26'),
(6, 'Apple', 'apple-1749', '', 'apple-17491700815953.jpg', 1, '2023-11-24 02:52:33', '2023-11-24 02:52:33'),
(7, 'Raon', 'raon-3958', '', 'raon-39581700816790.jpg', 1, '2023-11-24 03:06:30', '2023-11-24 03:06:30'),
(8, 'Godrej', 'godrej-3055', '', 'godrej-30551700816920.png', 1, '2023-11-24 03:08:41', '2023-11-24 03:08:41');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint NOT NULL,
  `product_id` bigint NOT NULL,
  `product_qty` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `product_qty`, `created_at`, `updated_at`) VALUES
(14, 5, 4, 1, '2023-11-27 11:35:19', '2023-11-27 11:35:19'),
(15, 1, 2, 3, '2023-12-13 10:19:38', '2024-03-09 03:08:24');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `popular` tinyint NOT NULL DEFAULT '0',
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `status`, `popular`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Men\'s Fashion', 'mens-fashion-2630', '', 1, 0, 'mens-fashion-26301700792237.jpg', '2023-11-23 20:17:17', '2023-11-23 20:17:17'),
(2, 'Women\'s Fashion', 'womens-fashion-4902', '', 1, 0, 'womens-fashion-49021700792342.jpg', '2023-11-23 20:19:02', '2023-11-23 20:19:02'),
(3, 'Smartphone and Tabs', 'smartphone-and-tabs-4089', '', 1, 0, 'smartphone-and-tabs-40891700792680.jpg', '2023-11-23 20:24:40', '2023-11-23 20:24:40'),
(4, 'Winter Collections', 'winter-collections-1912', '', 1, 0, 'winter-collections-19121700792770.jpg', '2023-11-23 20:26:10', '2023-11-23 20:26:10'),
(5, 'Jewllery and Watches', 'jewllery-and-watches-4505', '', 1, 0, 'jewellery-and-watches-16541700793194.webp', '2023-11-23 20:33:14', '2023-12-09 12:14:06'),
(6, 'Health and Beauty', 'health-and-beauty-4953', '', 1, 0, 'health-and-beauty-49531700793401.avif', '2023-11-23 20:36:41', '2024-03-09 03:08:31'),
(7, 'Accessories', 'accessories-2312', '', 1, 0, 'accessories-23121700793523.avif', '2023-11-23 20:38:43', '2024-03-09 03:08:31');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'sailor21@gmail.com', 'Hello', '2023-11-26 11:50:59', '2023-11-26 11:50:59'),
(2, 'Dennis P.', 'pat@aneesho.com', 'Do you need help with graphic design - brochures, banners, flyers, advertisements, social media posts, logos etc. ? \r\n\r\nWe charge a low fixed monthly fee. Let me know if you\'re interested and would like to see our portfolio.', '2024-02-26 04:51:55', '2024-02-26 04:51:55');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_information`
--

CREATE TABLE `delivery_information` (
  `id` bigint UNSIGNED NOT NULL,
  `delivery_information` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `delivery_information`
--

INSERT INTO `delivery_information` (`id`, `delivery_information`, `created_at`, `updated_at`) VALUES
(1, '<h2 style=\"font-size: 2rem; color: rgb(33, 37, 41); font-family: Inter, sans-serif;\"><br></h2><h2 style=\"font-size: 2rem; color: rgb(33, 37, 41); font-family: Inter, sans-serif;\">Shipping &amp; Charges</h2><p style=\"font-size: 2rem; color: rgb(33, 37, 41); font-family: Inter, sans-serif;\"><br></p><div style=\"color: rgb(33, 37, 41); font-family: Inter, sans-serif; font-size: 16px;\"><p>After selecting your desired product from the checkout page, you have to choose shipping options, to confirm how the item will be delivered to you. We are offering below shipping method for your conveniences –</p><p><br><span style=\"font-weight: bolder;\">Standard shipping</span></p><ul style=\"padding-left: 2rem; list-style-type: circle;\"><li>Inside Dhaka:&nbsp;&nbsp; Delivers within 1-3 business days</li><li>Outside Dhaka: Delivers within 5-7 business days</li></ul><p style=\"margin-bottom: 1rem;\"><span style=\"font-weight: bolder;\">Delivery Charge Details:&nbsp;</span></p><table border=\"1px\" style=\"caption-side: bottom; height: 118px; width: 383px;\"><tbody style=\"border-width: 0px; border-style: solid; border-image: initial;\"><tr style=\"border-width: 0px; border-style: solid; border-image: initial;\"><td style=\"border-width: 0px; border-style: solid; border-image: initial; border-color: inherit;\">No of Items Per Order</td><td style=\"border-width: 0px; border-style: solid; border-image: initial; border-color: inherit;\">Inside Dhaka</td><td style=\"border-width: 0px; border-style: solid; border-image: initial; border-color: inherit;\">Outside Dhaka</td></tr><tr style=\"border-width: 0px; border-style: solid; border-image: initial;\"><td style=\"border-width: 0px; border-style: solid; border-image: initial; border-color: inherit;\">Upto 2 Pcs</td><td style=\"border-width: 0px; border-style: solid; border-image: initial; border-color: inherit;\">65Tk</td><td style=\"border-width: 0px; border-style: solid; border-image: initial; border-color: inherit;\">120Tk</td></tr><tr style=\"border-width: 0px; border-style: solid; border-image: initial;\"><td style=\"border-width: 0px; border-style: solid; border-image: initial; border-color: inherit;\">Upto 4 Pcs</td><td style=\"border-width: 0px; border-style: solid; border-image: initial; border-color: inherit;\">120Tk</td><td style=\"border-width: 0px; border-style: solid; border-image: initial; border-color: inherit;\">200Tk</td></tr><tr style=\"border-width: 0px; border-style: solid; border-image: initial;\"><td style=\"border-width: 0px; border-style: solid; border-image: initial; border-color: inherit;\">Upto 6 Pcs</td><td style=\"border-width: 0px; border-style: solid; border-image: initial; border-color: inherit;\">170Tk</td><td style=\"border-width: 0px; border-style: solid; border-image: initial; border-color: inherit;\">270Tk</td></tr><tr style=\"border-width: 0px; border-style: solid; border-image: initial;\"><td style=\"border-width: 0px; border-style: solid; border-image: initial; border-color: inherit;\">Upto 8 Pcs</td><td style=\"border-width: 0px; border-style: solid; border-image: initial; border-color: inherit;\">200Tk</td><td style=\"border-width: 0px; border-style: solid; border-image: initial; border-color: inherit;\">320Tk</td></tr><tr style=\"border-width: 0px; border-style: solid; border-image: initial;\"><td style=\"border-width: 0px; border-style: solid; border-image: initial; border-color: inherit;\">After That Per Pcs</td><td style=\"border-width: 0px; border-style: solid; border-image: initial; border-color: inherit;\">20Tk</td><td style=\"border-width: 0px; border-style: solid; border-image: initial; border-color: inherit;\">35Tk<br><br></td></tr></tbody></table></div>', '2023-11-24 21:57:11', '2023-11-24 21:57:11');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `general_settings`
--

CREATE TABLE `general_settings` (
  `id` bigint UNSIGNED NOT NULL,
  `key` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'header_logo', '1701063645.png', '2023-11-22 23:34:30', '2023-11-26 23:40:46'),
(2, 'header_message', 'Free Shipping for all Order of 1000 BDT', '2023-11-22 23:34:30', '2023-11-26 23:40:45'),
(3, 'shop_address', 'Dhaka - 1203, Bangladesh', '2023-11-22 23:34:30', '2023-11-26 23:40:46'),
(4, 'shop_phone', '01521429619', '2023-11-22 23:34:30', '2023-11-26 23:40:46'),
(5, 'shop_email', 'sailor21@gmail.com', '2023-11-22 23:34:30', '2023-11-26 23:40:46'),
(6, 'currency', '৳', '2023-11-22 23:34:30', '2023-11-26 23:40:46'),
(7, 'footer_logo', '1700821037.png', '2023-11-22 23:34:30', '2023-11-24 04:17:17'),
(8, 'facebook_link', 'https://www.facebook.com/sarkermajid21/', '2023-11-22 23:34:30', '2023-11-26 23:40:46'),
(9, 'instagram_link', 'https://www.instagram.com/sarker_majid/', '2023-11-22 23:34:30', '2023-11-26 23:40:46'),
(10, 'twitter_link', NULL, '2023-11-22 23:34:30', '2023-11-26 23:40:46'),
(11, 'linkedin_link', 'https://www.linkedin.com/in/sarkermajid/', '2023-11-22 23:34:30', '2023-11-26 23:40:46'),
(12, 'open_time', '10 AM - 10 PM', '2023-11-22 23:34:30', '2023-11-26 23:40:46'),
(13, 'frontend_site_link', 'https://ecom.freedomhotelinn.com/', NULL, '2023-11-26 23:40:46');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(60, '2014_10_12_000000_create_users_table', 1),
(61, '2014_10_12_100000_create_password_resets_table', 1),
(62, '2019_08_19_000000_create_failed_jobs_table', 1),
(63, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(64, '2023_11_05_095824_create_categories_table', 1),
(65, '2023_11_06_054700_create_brands_table', 1),
(66, '2023_11_07_043952_create_products_table', 1),
(67, '2023_11_08_035914_create_contacts_table', 1),
(68, '2023_11_08_042527_create_blogs_table', 1),
(69, '2023_11_08_055017_create_blog_categories_table', 1),
(70, '2023_11_09_121352_create_banners_table', 1),
(71, '2023_11_11_172247_create_wishlists_table', 1),
(72, '2023_11_12_061227_create_carts_table', 1),
(73, '2023_11_18_023218_create_orders_table', 1),
(74, '2023_11_18_023833_create_order_items_table', 1),
(75, '2023_11_19_062250_create_promo_codes_table', 1),
(76, '2023_11_20_163151_create_about_us_table', 1),
(77, '2023_11_20_171918_create_privacy_policies_table', 1),
(78, '2023_11_21_035436_create_terms_and_conditions_table', 1),
(79, '2023_11_21_171424_create_delivery_information_table', 1),
(80, '2023_11_21_173939_create_general_settings_table', 1),
(81, '2023_11_22_084052_create_apply_promo_codes_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` int NOT NULL,
  `total_price` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `tracking_number` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `phone`, `address`, `city`, `zip_code`, `total_price`, `status`, `tracking_number`, `created_at`, `updated_at`) VALUES
(1, 2, 'User', '01428967482', 'Malibag', 'Dhaka', 1204, '0', 1, '456812', '2023-11-25 21:34:54', '2023-12-09 12:14:43'),
(2, 2, 'User', '01521474785', 'Malibag', 'Dhaka', 1204, '0', 3, '453624', '2023-11-25 21:35:37', '2023-12-09 12:14:45'),
(3, 1, 'Sohel Rana', '59', 'Commodi optio volup', 'Consequat Omnis eni', 90695, '0', 0, '321912', '2023-11-26 12:32:17', '2023-11-26 12:32:17'),
(4, 4, 'MD. ABDUR RAHMAN', '01701276622', 'Mughda,Manda', 'Dhaka, Bangladesh', 1214, '60', 1, '154432', '2023-11-27 07:43:02', '2023-12-03 21:41:04'),
(5, 7, 'ravi sarker', '5343434354353', 'greger', 'ertert', 353, '7600', 0, '198820', '2024-03-09 02:58:16', '2024-03-09 03:00:22');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint UNSIGNED NOT NULL,
  `order_id` bigint NOT NULL,
  `product_id` bigint NOT NULL,
  `product_qty` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `product_qty`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 7, '1', '300', '2023-11-25 21:34:54', '2023-11-25 21:34:54'),
(2, 1, 8, '1', '2199', '2023-11-25 21:34:54', '2023-11-25 21:34:54'),
(3, 1, 13, '1', '1550', '2023-11-25 21:34:54', '2023-11-25 21:34:54'),
(4, 2, 1, '1', '1790', '2023-11-25 21:35:37', '2023-11-25 21:35:37'),
(5, 3, 1, '4', '1790', '2023-11-26 12:32:17', '2023-11-26 12:32:17'),
(6, 4, 10, '1', '60', '2023-11-27 07:43:02', '2023-11-27 07:43:02'),
(7, 5, 2, '3', '1200', '2024-03-09 02:58:16', '2024-03-09 02:58:16'),
(8, 5, 3, '2', '2000', '2024-03-09 02:58:16', '2024-03-09 02:58:16');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `privacy_policies`
--

CREATE TABLE `privacy_policies` (
  `id` bigint UNSIGNED NOT NULL,
  `privacy_policy` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privacy_policies`
--

INSERT INTO `privacy_policies` (`id`, `privacy_policy`, `created_at`, `updated_at`) VALUES
(1, '<h2 style=\"font-size: 2rem; color: rgb(33, 37, 41); font-family: Inter, sans-serif;\"><br></h2><h2 style=\"font-size: 2rem; color: rgb(33, 37, 41); font-family: Inter, sans-serif;\">Privacy Policy</h2><p style=\"font-size: 2rem; color: rgb(33, 37, 41); font-family: Inter, sans-serif;\"><br></p><div style=\"color: rgb(33, 37, 41); font-family: Inter, sans-serif; font-size: 16px;\"><div class=\"page-body\"><p>At sailor.clothing, accessible from www.sailor.clothing, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by sailor.clothing and how we use it.</p><p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.</p><p>This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in sailor.clothing. This policy is not applicable to any information collected offline or via channels other than this website.</p><h2 style=\"font-size: 2rem;\">Consent</h2><p>By using our website, you hereby consent to our Privacy Policy and agree to its terms.</p><h2 style=\"font-size: 2rem;\">Information we collect</h2><p>The personal information that you are asked to provide, and the reasons why you are asked to provide it, will be made clear to you at the point we ask you to provide your personal information.</p><p>If you contact us directly, we may receive additional information about you such as your name, email address, phone number, the contents of the message and/or attachments you may send us, and any other information you may choose to provide.</p><p>When you register for an Account, we may ask for your contact information, including items such as name, company name, address, email address, and telephone number.</p><h2 style=\"font-size: 2rem;\">How we use your information</h2><p>We use the information we collect in various ways, including to:</p><ul style=\"padding-left: 2rem; list-style-type: none;\"><li>Provide, operate, and maintain our webste</li><li>Improve, personalize, and expand our webste</li><li>Understand and analyze how you use our webste</li><li>Develop new products, services, features, and functionality</li><li>Communicate with you, either directly or through one of our partners, including for customer service, to provide you with updates and other information relating to the webste, and for marketing and promotional purposes</li><li>Send you emails</li><li>Find and prevent fraud</li></ul><h2 style=\"font-size: 2rem;\">Log Files</h2><p>sailor.clothing follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services\' analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users\' movement on the website, and gathering demographic information.</p><h2 style=\"font-size: 2rem;\">Cookies and Web Beacons</h2><p>Like any other website, sailor.clothing uses \'cookies\'. These cookies are used to store information including visitors\' preferences, and the pages on the website that the visitor accessed or visited. The information is used to optimize the users\' experience by customizing our web page content based on visitors\' browser type and/or other information.</p><h2 style=\"font-size: 2rem;\">Advertising Partners Privacy Policies</h2><p>You may consult this list to find the Privacy Policy for each of the advertising partners of sailor.clothing.</p><p>Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on sailor.clothing, which are sent directly to users\' browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.</p><p>Note that sailor.clothing has no access to or control over these cookies that are used by third-party advertisers.</p><h2 style=\"font-size: 2rem;\">Third Party Privacy Policies</h2><p>sailor.clothing\'s Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options. You may find a complete list of these Privacy Policies and their links here: Privacy Policy Links.</p><p>You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers\' respective websites. What Are Cookies?</p><h2 style=\"font-size: 2rem;\">CCPA Privacy Rights (Do Not Sell My Personal Information)</h2><p>Under the CCPA, among other rights, California consumers have the right to:</p><p>Request that a business that collects a consumer\'s personal data disclose the categories and specific pieces of personal data that a business has collected about consumers.</p><p>Request that a business delete any personal data about the consumer that a business has collected.</p><p>Request that a business that sells a consumer\'s personal data, not sell the consumer\'s personal data.</p><p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p><h2 style=\"font-size: 2rem;\">GDPR Data Protection Rights</h2><p>We would like to make sure you are fully aware of all of your data protection rights. Every user is entitled to the following:</p><p>The right to access – You have the right to request copies of your personal data. We may charge you a small fee for this service.</p><p>The right to rectification – You have the right to request that we correct any information you believe is inaccurate. You also have the right to request that we complete the information you believe is incomplete.</p><p>The right to erasure – You have the right to request that we erase your personal data, under certain conditions.</p><p>The right to restrict processing – You have the right to request that we restrict the processing of your personal data, under certain conditions.</p><p>The right to object to processing – You have the right to object to our processing of your personal data, under certain conditions.</p><p>The right to data portability – You have the right to request that we transfer the data that we have collected to another organization, or directly to you, under certain conditions.</p><p style=\"margin-bottom: 1rem;\">If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p></div></div>', '2023-11-24 21:55:43', '2023-11-24 21:55:43');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `brand_id` bigint UNSIGNED NOT NULL,
  `short_description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` bigint NOT NULL,
  `discount_type` tinyint DEFAULT NULL COMMENT '1 = percentage, 0 = fixed amount',
  `price` double NOT NULL,
  `currency` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_amount` double DEFAULT NULL,
  `trending` tinyint NOT NULL DEFAULT '0',
  `status` tinyint NOT NULL DEFAULT '0' COMMENT '1 = Active, 0 = Deactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `category_id`, `brand_id`, `short_description`, `description`, `image`, `qty`, `discount_type`, `price`, `currency`, `weight`, `discount_amount`, `trending`, `status`, `created_at`, `updated_at`) VALUES
(1, 'MEN\'S CASUAL SHIRT (H/S)', 'mens-casual-shirt-hs-4603', 1, 3, 'Presenting our Men\'s Half Shirt, adorned with a French placket and straight-cut hem for a sleek look. Adorned with an abstract floral and leaf-inspired print, this regular-fit shirt is made from breathable rayon poplin, perfect for summer comfort. Elevate your warm-weather style with this unique and versatile choice.', '<p>Presenting our Men\'s Half Shirt, adorned with a French placket and straight-cut hem for a sleek look. Adorned with an abstract floral and leaf-inspired print, this regular-fit shirt is made from breathable rayon poplin, perfect for summer comfort. Elevate your warm-weather style with this unique and versatile choice.<br></p>', 'mens-casual-shirt-hs-46031700794171.jpg', 45, NULL, 1790, NULL, '350gm', NULL, 10, 1, '2023-11-23 20:49:31', '2024-03-18 01:47:36'),
(2, 'MEN\'S FUSION PANAJBI', 'mens-fusion-panajbi-2069', 1, 1, 'Elevate your style with our gathered sleeve short top. Crafted from 100% viscose, it offers comfort and features a flattering princess cut and a classic shirt collar for a timeless look that\'s perfect for any occasion', NULL, 'mens-fusion-panajbi-20691700794759.jpg', 47, NULL, 1500, NULL, '300gm', 1200, 16, 1, '2023-11-23 20:59:19', '2024-03-09 02:58:16'),
(3, 'MEN\'S FORMAL SHIRT (H/S)', 'mens-formal-shirt-hs-4013', 1, 3, 'Presenting our Men\'s Half Shirt, adorned with a French placket and straight-cut hem for a sleek look. Adorned with an abstract floral and leaf-inspired print, this regular-fit shirt is made from breathable rayon poplin, perfect for summer comfort. Elevate your warm-weather style with this unique and versatile choice.', '<p>Presenting our Men\'s Half Shirt, adorned with a French placket and straight-cut hem for a sleek look. Adorned with an abstract floral and leaf-inspired print, this regular-fit shirt is made from breathable rayon poplin, perfect for summer comfort. Elevate your warm-weather style with this unique and versatile choice.<br></p>', 'mens-formal-shirt-hs-40131700794847.jpg', 58, NULL, 2000, NULL, '400gm', NULL, 8, 1, '2023-11-23 21:00:47', '2024-03-09 03:07:18'),
(4, 'WOMEN\'S WOVEN LONG KURTI', 'womens-woven-long-kurti-3390', 2, 3, 'Elevate your style with our gathered sleeve short top. Crafted from 100% viscose, it offers comfort and features a flattering princess cut and a classic shirt collar for a timeless look that\'s perfect for any occasion', '<p><span style=\"color: rgb(73, 80, 87);\">Elevate your style with our gathered sleeve short top. Crafted from 100% viscose, it offers comfort and features a flattering princess cut and a classic shirt collar for a timeless look that\'s perfect for any occasion</span><br></p>', 'womens-woven-long-kurti-15611700795658.jpg', 20, NULL, 2500, NULL, NULL, 2200, 9, 1, '2023-11-23 21:14:18', '2024-02-27 14:55:52'),
(5, 'Samsung Galaxy A14 5G', 'samsung-galaxy-a14-5g-3611', 3, 2, 'Samsung Galaxy A15 5G launch is yet to be confirmed officially by the South Korean smartphone maker, but a new leak has disclosed possible design and specifications of the purported smartphone. The renders suggest that the upcoming Galaxy A series handset will have a waterdrop-style notch display at the front.', '<h2 class=\"_hd\" style=\"outline: 0px; -webkit-tap-highlight-color: transparent; font-size: var(--fshd); font-weight: 600; color: rgb(0, 0, 0); letter-spacing: var(--lshd); margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 5px; font-family: Titillium, sans-serif;\">Samsung Galaxy A14 5G Summary</h2><div class=\"_inrcntr _shrinkjs\" style=\"outline: 0px; -webkit-tap-highlight-color: transparent; overflow: hidden; transition: all 0.2s ease 0s; color: rgb(0, 0, 0); font-family: Titillium, sans-serif; font-size: 16px;\"><p style=\"outline: 0px; -webkit-tap-highlight-color: transparent; font-size: var(--fs); line-height: var(--lh); font-family: &quot;Open Sans&quot;; margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\">Samsung Galaxy A14 5G mobile was launched on 16th January 2023. The phone comes with a 90 Hz refresh rate 6.60-inch display offering a resolution of 1080x2408 pixels (FHD+). Samsung Galaxy A14 5G is powered by a 2.2Ghz MHz octa-core processor. It comes with 4GB, 6GB, 8GB of RAM. The Samsung Galaxy A14 5G runs Android 13 and is powered by a 5000mAh battery.</p><p style=\"outline: 0px; -webkit-tap-highlight-color: transparent; font-size: var(--fs); line-height: var(--lh); font-family: &quot;Open Sans&quot;; margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\">As far as the cameras are concerned, the Samsung Galaxy A14 5G on the rear packs a triple camera setup featuring a 50-megapixel (f/1.8) primary camera; a 2-megapixel (f/2.4) camera, and a 2-megapixel (f/2.4) camera. The rear camera setup has autofocus. It has a single front camera setup for selfies, featuring a 13-megapixel sensor with an f/2.0 aperture.</p><p style=\"outline: 0px; -webkit-tap-highlight-color: transparent; font-size: var(--fs); line-height: var(--lh); font-family: &quot;Open Sans&quot;; margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\">The Samsung Galaxy A14 5G runs One UI 5.0 is based on Android 13 and packs 64GB, 128GB of inbuilt storage that can be expanded via microSD card (up to 1TBGB) with a dedicated slot. The Samsung Galaxy A14 5G measures 167.70 x 78.00 x 9.10mm (height x width x thickness) and weighs 204.00 grams. It was launched in Silver, Maroon, Black, and Light Green colours.</p><p style=\"outline: 0px; -webkit-tap-highlight-color: transparent; font-size: var(--fs); line-height: var(--lh); font-family: &quot;Open Sans&quot;; margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\">Connectivity options on the Samsung Galaxy A14 5G include Wi-Fi 802.11 a/b/g/n/ac, GPS, Bluetooth v5.20, NFC, and USB Type-C. Sensors on the phone include accelerometer, ambient light sensor, barometer, compass/ magnetometer, gyroscope, proximity sensor, and fingerprint sensor.</p><p style=\"outline: 0px; -webkit-tap-highlight-color: transparent; font-size: var(--fs); line-height: var(--lh); font-family: &quot;Open Sans&quot;; margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\">As of 24th November 2023, Samsung Galaxy A14 5G price in India starts at Rs. 15,999.</p></div>', '1700815812.jpg', 20, NULL, 15999, NULL, NULL, 13998, 4, 1, '2023-11-24 02:49:29', '2024-02-19 17:17:56'),
(6, 'Apple iPhone 12 Pro Max', 'apple-iphone-12-pro-max-1835', 3, 6, 'Apple iPhone 12 Pro Max comes with a 6.7 inches Super Retina XDR OLED screen which is one of its main specialties. It has a classical Apple iPhone notch design. The back camera is of quad 12+12+12 MP + TOF 3D with powerful image processing capability and Ultra HD 4K video recording. The front one is of Dual 12 MP and SL 3D camera.', '<p style=\"padding: 0px; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; list-style: none; border: 0px; outline: none; line-height: 26px; color: rgb(44, 47, 52); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Oxygen-Sans, Ubuntu, Cantarell, &quot;Helvetica Neue&quot;, &quot;Open Sans&quot;, Arial, sans-serif; font-size: 15px;\">iPhone 12 Pro Max comes with Li-ion battery with 18W fast charging solution. It has 6 GB RAM, Hexa-core CPU and Apple GPU. It is powered by a 5 nm Apple A14&nbsp;Bionic chipset. The device comes with 128, 256 or 512 GB internal storage.</p><p style=\"padding: 0px; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; list-style: none; border: 0px; outline: none; line-height: 26px; color: rgb(44, 47, 52); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Oxygen-Sans, Ubuntu, Cantarell, &quot;Helvetica Neue&quot;, &quot;Open Sans&quot;, Arial, sans-serif; font-size: 15px;\">Among other features, there is Face ID, Apple Pay, Siri, Qi Wireless Charging etc. There is no FM Radio, 3.5mm jack and MicroSD slot in this phone. The device is IP68 certified waterproof and 5G supported.</p><figure class=\"wp-block-table aligncenter\" style=\"padding: 0px; list-style: none; border: 0px; outline: none; display: table; clear: both; text-align: center; overflow-x: auto; width: auto; color: rgb(44, 47, 52); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Oxygen-Sans, Ubuntu, Cantarell, &quot;Helvetica Neue&quot;, &quot;Open Sans&quot;, Arial, sans-serif; font-size: 15px; margin-right: auto !important; margin-bottom: 0px !important; margin-left: auto !important;\"><div class=\"table-is-responsive\" style=\"padding: 0px; margin: 0px; list-style: none; border: 0px; outline: none; clear: both; overflow-x: auto;\"><table style=\"padding: 0px; margin: 0px 0px 1.5em; list-style: none; border: 0px; outline: none; border-spacing: 0px; width: 950.688px;\"><tbody style=\"padding: 0px; margin: 0px; list-style: none; border: 0px; outline: none;\"><tr style=\"padding: 0px; margin: 0px; list-style: none; border: 0px; outline: none;\"><td style=\"padding: 0.5em; margin: 0px; list-style: none; border: 1px solid rgba(0, 0, 0, 0.1); outline: none; vertical-align: top; text-align: left; word-break: keep-all !important; overflow-wrap: normal !important;\"><span style=\"padding: 0px; margin: 0px; list-style: none; border: 0px; outline: none; font-weight: 600;\">Pros</span></td><td style=\"padding: 0.5em; margin: 0px; list-style: none; border: 1px solid rgba(0, 0, 0, 0.1); outline: none; vertical-align: top; text-align: left; word-break: keep-all !important; overflow-wrap: normal !important;\"><span style=\"padding: 0px; margin: 0px; list-style: none; border: 0px; outline: none; font-weight: 600;\">Cons</span></td></tr><tr style=\"padding: 0px; margin: 0px; list-style: none; border: 0px; outline: none; background: rgba(0, 0, 0, 0.03);\"><td style=\"padding: 0.5em; margin: 0px; list-style: none; border: 1px solid rgba(0, 0, 0, 0.1); outline: none; vertical-align: top; text-align: left; word-break: keep-all !important; overflow-wrap: normal !important;\">✔ Powerful next gen. camera for pro photography and filming</td><td style=\"padding: 0.5em; margin: 0px; list-style: none; border: 1px solid rgba(0, 0, 0, 0.1); outline: none; vertical-align: top; text-align: left; word-break: keep-all !important; overflow-wrap: normal !important;\">✘ 60Hz refresh rate display</td></tr><tr style=\"padding: 0px; margin: 0px; list-style: none; border: 0px; outline: none;\"><td style=\"padding: 0.5em; margin: 0px; list-style: none; border: 1px solid rgba(0, 0, 0, 0.1); outline: none; vertical-align: top; text-align: left; word-break: keep-all !important; overflow-wrap: normal !important;\">✔ 5G Support</td><td style=\"padding: 0.5em; margin: 0px; list-style: none; border: 1px solid rgba(0, 0, 0, 0.1); outline: none; vertical-align: top; text-align: left; word-break: keep-all !important; overflow-wrap: normal !important;\">✘ 18W Charger only in the box, 20W charger or up is sold separately</td></tr><tr style=\"padding: 0px; margin: 0px; list-style: none; border: 0px; outline: none; background: rgba(0, 0, 0, 0.03);\"><td style=\"padding: 0.5em; margin: 0px; list-style: none; border: 1px solid rgba(0, 0, 0, 0.1); outline: none; vertical-align: top; text-align: left; word-break: keep-all !important; overflow-wrap: normal !important;\">✔ 6.7″ large Quad HD+ Super Retina XDR OLED display</td><td style=\"padding: 0.5em; margin: 0px; list-style: none; border: 1px solid rgba(0, 0, 0, 0.1); outline: none; vertical-align: top; text-align: left; word-break: keep-all !important; overflow-wrap: normal !important;\">✘ No fingerprint sensor</td></tr><tr style=\"padding: 0px; margin: 0px; list-style: none; border: 0px; outline: none;\"><td style=\"padding: 0.5em; margin: 0px; list-style: none; border: 1px solid rgba(0, 0, 0, 0.1); outline: none; vertical-align: top; text-align: left; word-break: keep-all !important; overflow-wrap: normal !important;\">✔ Speedy next gen. 5 nm Apple A14 Bionic chipset</td><td style=\"padding: 0.5em; margin: 0px; list-style: none; border: 1px solid rgba(0, 0, 0, 0.1); outline: none; vertical-align: top; text-align: left; word-break: keep-all !important; overflow-wrap: normal !important;\">✘ No 3.5mm Jack or MicroSD slot</td></tr><tr style=\"padding: 0px; margin: 0px; list-style: none; border: 0px; outline: none; background: rgba(0, 0, 0, 0.03);\"><td style=\"padding: 0.5em; margin: 0px; list-style: none; border: 1px solid rgba(0, 0, 0, 0.1); outline: none; vertical-align: top; text-align: left; word-break: keep-all !important; overflow-wrap: normal !important;\">✔ Corning Ceramic Shield material display protection</td><td style=\"padding: 0.5em; margin: 0px; list-style: none; border: 1px solid rgba(0, 0, 0, 0.1); outline: none; vertical-align: top; text-align: left; word-break: keep-all !important; overflow-wrap: normal !important;\"></td></tr><tr style=\"padding: 0px; margin: 0px; list-style: none; border: 0px; outline: none;\"><td style=\"padding: 0.5em; margin: 0px; list-style: none; border: 1px solid rgba(0, 0, 0, 0.1); outline: none; vertical-align: top; text-align: left; word-break: keep-all !important; overflow-wrap: normal !important;\">✔ IP68 dust/water resistant (up to 6m for 30 mins)</td><td style=\"padding: 0.5em; margin: 0px; list-style: none; border: 1px solid rgba(0, 0, 0, 0.1); outline: none; vertical-align: top; text-align: left; word-break: keep-all !important; overflow-wrap: normal !important;\"></td></tr><tr style=\"padding: 0px; margin: 0px; list-style: none; border: 0px; outline: none; background: rgba(0, 0, 0, 0.03);\"><td style=\"padding: 0.5em; margin: 0px; list-style: none; border: 1px solid rgba(0, 0, 0, 0.1); outline: none; vertical-align: top; text-align: left; word-break: keep-all !important; overflow-wrap: normal !important;\">✔ Apple optimized hardware and software for futuristic 5G experience</td><td style=\"padding: 0.5em; margin: 0px; list-style: none; border: 1px solid rgba(0, 0, 0, 0.1); outline: none; vertical-align: top; text-align: left; word-break: keep-all !important; overflow-wrap: normal !important;\"></td></tr></tbody></table></div></figure>', 'apple-iphone-12-pro-max-18351700816060.jpg', 20, NULL, 150000, NULL, '900gm', 145000, 9, 1, '2023-11-24 02:54:20', '2024-02-09 16:35:20'),
(7, 'Bahubali Earrings Jhumka', 'bahubali-earrings-jhumka-2823', 5, 1, 'Simple & Elegant Design Jewellery Sets Bahubali Earrings Jhumka Tana Kanerdul Necklaces & Tikli For Women & Girls', '<p><span style=\"color: rgb(33, 33, 33); font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; font-size: 22px;\">Simple &amp; Elegant Design Jewellery Sets Bahubali Earrings Jhumka Tana Kanerdul Necklaces &amp; Tikli For Women &amp; Girls</span><br></p>', 'bahubali-earrings-jhumka-28231700816466.jpg', 89, NULL, 300, NULL, '80gm', NULL, 5, 1, '2023-11-24 03:01:06', '2024-02-10 02:46:52'),
(8, 'Naviforce NF9185', 'naviforce-nf9185-1830', 5, 5, NULL, '<h2 style=\"font-weight: 700; font-family: &quot;Work Sans&quot;, Arial, sans-serif; color: var(--mf-dark-color); font-size: 30px;\">Naviforce NF9185 Price in Bangladesh</h2><p style=\"margin-bottom: 1.7em; color: rgb(102, 102, 102); font-family: &quot;Work Sans&quot;, Arial, sans-serif; font-size: 14px; font-weight: 700;\"><strong style=\"font-weight: bold;\">Feature:&nbsp;</strong></p><ul style=\"list-style-type: square; padding-left: 20px; color: rgb(102, 102, 102); font-family: &quot;Work Sans&quot;, Arial, sans-serif; font-size: 14px; font-weight: 700;\"><li style=\"margin-bottom: 7px;\">100% brand new and high quality.</li><li style=\"margin-bottom: 7px;\">Date Week 24 hour Function.</li><li style=\"margin-bottom: 7px;\">Precise quartz movement for accurate time keeping.</li><li style=\"margin-bottom: 7px;\">3ATM water resistant,perfect for protect little water like wash hands and rainy,but can not put into water or shower or swim.</li><li style=\"margin-bottom: 7px;\">Color may not appear as exactly as in real life due to variations between the computer monitors and nacked eye color difference.</li><li style=\"margin-bottom: 7px;\">Gift box choise,It is a pretty good gift for family/friends/lover/yourself.</li></ul><p style=\"margin-bottom: 1.7em; color: rgb(102, 102, 102); font-family: &quot;Work Sans&quot;, Arial, sans-serif; font-size: 14px; font-weight: 700;\"><strong style=\"font-weight: bold;\">Specification:</strong></p><ul style=\"list-style-type: square; padding-left: 20px; color: rgb(102, 102, 102); font-family: &quot;Work Sans&quot;, Arial, sans-serif; font-size: 14px; font-weight: 700;\"><li style=\"margin-bottom: 7px;\"><span class=\"property-title\">Brand Name:&nbsp;</span><span class=\"property-desc line-limit-length\" title=\"NAVIFORCE\">NAVIFORCE</span></li><li style=\"margin-bottom: 7px;\"><span class=\"property-title\">Band Length:&nbsp;</span><span class=\"property-desc line-limit-length\" title=\"24cm\">24cm</span></li><li style=\"margin-bottom: 7px;\"><span class=\"property-title\">Style:&nbsp;</span><span class=\"property-desc line-limit-length\" title=\"Fashion &amp; Casual\">Fashion &amp; Casual</span></li><li style=\"margin-bottom: 7px;\"><span class=\"property-title\">Clasp Type:&nbsp;</span><span class=\"property-desc line-limit-length\" title=\"Bracelet Clasp\">Bracelet Clasp</span></li><li style=\"margin-bottom: 7px;\"><span class=\"property-title\">Origin:&nbsp;</span><span class=\"property-desc line-limit-length\" title=\"Mainland China\">Mainland China</span></li><li style=\"margin-bottom: 7px;\"><span class=\"property-title\">Movement:&nbsp;</span><span class=\"property-desc line-limit-length\" title=\"Quartz\">Quartz</span></li><li style=\"margin-bottom: 7px;\"><span class=\"property-title\">Water Resistance Depth:&nbsp;</span><span class=\"property-desc line-limit-length\" title=\"3Bar\">3Bar</span></li><li style=\"margin-bottom: 7px;\"><span class=\"property-title\">Case Material:&nbsp;</span><span class=\"property-desc line-limit-length\" title=\"Alloy\">Alloy</span></li><li style=\"margin-bottom: 7px;\"><span class=\"property-title\">Case Thickness:&nbsp;</span><span class=\"property-desc line-limit-length\" title=\"13.4mm\">13.4mm</span></li><li style=\"margin-bottom: 7px;\"><span class=\"property-title\">Band Material Type:&nbsp;</span><span class=\"property-desc line-limit-length\" title=\"Stainless steel\">Stainless steel</span></li><li style=\"margin-bottom: 7px;\"><span class=\"property-title\">Model Number:&nbsp;</span><span class=\"property-desc line-limit-length\" title=\"mens wrist watches NF9185\">mens wrist watches NF9185</span></li><li style=\"margin-bottom: 7px;\"><span class=\"property-title\">Band Width:&nbsp;</span><span class=\"property-desc line-limit-length\" title=\"23mm\">23mm</span></li><li style=\"margin-bottom: 7px;\"><span class=\"property-title\">Feature:&nbsp;</span><span class=\"property-desc line-limit-length\" title=\"Shock Resistant,Auto Date,Complete Calendar,Water Resistant,Week Display,luminous hands\">Shock Resistant, Auto Date, Complete Calendar, Water Resistant, Week Display, luminous hands</span></li><li style=\"margin-bottom: 7px;\"><span class=\"property-title\">Dial Diameter:&nbsp;</span><span class=\"property-desc line-limit-length\" title=\"45mm\">45mm</span></li><li style=\"margin-bottom: 7px;\"><span class=\"property-title\">Certification:&nbsp;</span><span class=\"property-desc line-limit-length\" title=\"NONE\">NONE</span></li><li style=\"margin-bottom: 7px;\"><span class=\"property-title\">Case Shape:&nbsp;</span><span class=\"property-desc line-limit-length\" title=\"Round\">Round</span></li><li style=\"margin-bottom: 7px;\"><span class=\"property-title\">Dial Window Material Type:&nbsp;</span><span class=\"property-desc line-limit-length\" title=\"Hardlex\">Hardlex</span></li><li style=\"margin-bottom: 7px;\"><span class=\"property-title\">Occasion:&nbsp;</span><span class=\"property-desc line-limit-length\" title=\"Anniversary Engagement Gift Party Wedding Business Dress\">Anniversary Engagement Gift Party Wedding Business Dress</span></li><li style=\"margin-bottom: 7px;\"><span class=\"property-title\">Feture:&nbsp;</span><span class=\"property-desc line-limit-length\" title=\"military army sport fashion casual business classic top luxury\">military army sport fashion casual business classic top luxury</span></li><li style=\"margin-bottom: 7px;\"><span class=\"property-title\">masculino:&nbsp;</span><span class=\"property-desc line-limit-length\" title=\"relogio masculino,relogio,reloj hombre,montre homme,horloges mannen\">relogio masculino,relogio,reloj hombre,montre homme,horloges mannen</span></li><li style=\"margin-bottom: 7px;\"><span class=\"property-title\">sale:&nbsp;</span><span class=\"property-desc line-limit-length\" title=\"retail wholesale dropship dropshipping\">retail wholesale dropship dropshipping</span></li><li style=\"margin-bottom: 7px;\"><span class=\"property-title\">3ATM Watch Proof:&nbsp;</span><span class=\"property-desc line-limit-length\" title=\"can not put into water or shower\">can not put into water or shower</span></li><li style=\"margin-bottom: 7px;\"><span class=\"property-title\">Power:&nbsp;</span><span class=\"property-desc line-limit-length\" title=\"Imported Japanese Movement and Battery\">Imported Japanese Movement and Battery</span></li><li style=\"margin-bottom: 7px;\"><span class=\"property-title\">Strap:&nbsp;</span><span class=\"property-desc line-limit-length\" title=\"stainless steel band belt watchband bracelet\">stainless steel band belt watchband bracelet</span></li></ul>', 'naviforce-nf9185-18301700816592.jpg', 79, NULL, 2500, NULL, '700gm', 2199, 10, 1, '2023-11-24 03:03:13', '2024-02-13 03:39:25'),
(9, 'Raon Black Argan Oil', 'raon-black-argan-oil-2810', 6, 7, NULL, '<table class=\"woocommerce-product-attributes shop_attributes\" style=\"margin: 0px auto; padding: 0px; border: 0px; vertical-align: baseline; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: 1.4; font-family: Lato, Arial, Helvetica, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-size: 14px; width: 650px; border-spacing: 0px; overflow: hidden; --wd-attr-v-gap: 30px; --wd-attr-h-gap: 30px; --wd-attr-col: 1; --wd-attr-brd-width: 1px; --wd-attr-brd-style: solid; --wd-attr-brd-color: var(--brdcolor-gray-300); --wd-attr-img-width: 24px; max-width: 650px; color: rgb(119, 119, 119);\"><tbody style=\"margin-top: 0px; margin-right: 0px; margin-bottom: calc(-1 * (var(--wd-attr-v-gap) + var(--wd-attr-brd-width))); margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; display: grid; grid-template-columns: repeat(var(--wd-attr-col), 1fr); column-gap: var(--wd-attr-h-gap);\"><tr class=\"woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_ingredients\" style=\"margin-top: 0px; margin-right: 0px; margin-bottom: calc(var(--wd-attr-v-gap) / 2); margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: calc(var(--wd-attr-v-gap) / 2); padding-left: 0px; border-top: 0px; border-right: 0px; border-bottom: var(--wd-attr-brd-width) var(--wd-attr-brd-style) var(--wd-attr-brd-color); border-left: 0px; border-image: initial; vertical-align: baseline; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; display: flex; align-items: center; justify-content: space-between;\"><th class=\"woocommerce-product-attributes-item__label\" style=\"margin: 0px 20px 0px 0px; padding: 0px; border: none; vertical-align: middle; font-style: var(--wd-title-font-style); font-variant: inherit; font-weight: var(--wd-title-font-weight); font-stretch: inherit; line-height: inherit; font-family: var(--wd-text-font); font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-size: inherit; text-align: left; color: var(--wd-title-color); flex: 0 0 auto;\"><span style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: middle; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit;\">Ingredients</span></th><td class=\"woocommerce-product-attributes-item__value\" style=\"margin: 0px; padding: 0px; border: none; vertical-align: middle; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; text-align: right;\"><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit;\"><a href=\"https://koreanmartbd.com/ingredients/salicylic-acid/\" rel=\"tag\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; touch-action: manipulation; color: var(--wd-link-color); transition: all 0.25s ease 0s; box-shadow: none;\">Salicylic Acid</a></p></td></tr><tr class=\"woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_skin-concern\" style=\"margin-top: 0px; margin-right: 0px; margin-bottom: calc(var(--wd-attr-v-gap) / 2); margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: calc(var(--wd-attr-v-gap) / 2); padding-left: 0px; border-top: 0px; border-right: 0px; border-bottom: var(--wd-attr-brd-width) var(--wd-attr-brd-style) var(--wd-attr-brd-color); border-left: 0px; border-image: initial; vertical-align: baseline; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; display: flex; align-items: center; justify-content: space-between;\"><th class=\"woocommerce-product-attributes-item__label\" style=\"margin: 0px 20px 0px 0px; padding: 0px; border: none; vertical-align: middle; font-style: var(--wd-title-font-style); font-variant: inherit; font-weight: var(--wd-title-font-weight); font-stretch: inherit; line-height: inherit; font-family: var(--wd-text-font); font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-size: inherit; text-align: left; color: var(--wd-title-color); flex: 0 0 auto;\"><span style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: middle; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit;\">Skin Concern</span></th><td class=\"woocommerce-product-attributes-item__value\" style=\"margin: 0px; padding: 0px; border: none; vertical-align: middle; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; text-align: right;\"><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit;\"><a href=\"https://koreanmartbd.com/skin-concern/damage-dandurff-solution/\" rel=\"tag\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; touch-action: manipulation; color: var(--wd-link-color); transition: all 0.25s ease 0s; box-shadow: none;\">Damage &amp; Dandurff Solution</a></p></td></tr><tr class=\"woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_skin-type\" style=\"margin-top: 0px; margin-right: 0px; margin-bottom: calc(var(--wd-attr-v-gap) / 2); margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: calc(var(--wd-attr-v-gap) / 2); padding-left: 0px; border-top: 0px; border-right: 0px; border-bottom: var(--wd-attr-brd-width) var(--wd-attr-brd-style) var(--wd-attr-brd-color); border-left: 0px; border-image: initial; vertical-align: baseline; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; display: flex; align-items: center; justify-content: space-between;\"><th class=\"woocommerce-product-attributes-item__label\" style=\"margin: 0px 20px 0px 0px; padding: 0px; border: none; vertical-align: middle; font-style: var(--wd-title-font-style); font-variant: inherit; font-weight: var(--wd-title-font-weight); font-stretch: inherit; line-height: inherit; font-family: var(--wd-text-font); font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-size: inherit; text-align: left; color: var(--wd-title-color); flex: 0 0 auto;\"><span style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: middle; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit;\">Skin Type</span></th><td class=\"woocommerce-product-attributes-item__value\" style=\"margin: 0px; padding: 0px; border: none; vertical-align: middle; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; text-align: right;\"><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit;\"><a href=\"https://koreanmartbd.com/skin-type/dry/\" rel=\"tag\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; touch-action: manipulation; color: var(--wd-link-color); transition: all 0.25s ease 0s; box-shadow: none;\">Dry</a></p></td></tr><tr class=\"woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_brand\" style=\"margin-top: 0px; margin-right: 0px; margin-bottom: calc(var(--wd-attr-v-gap) / 2); margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: calc(var(--wd-attr-v-gap) / 2); padding-left: 0px; border-top: 0px; border-right: 0px; border-bottom: var(--wd-attr-brd-width) var(--wd-attr-brd-style) var(--wd-attr-brd-color); border-left: 0px; border-image: initial; vertical-align: baseline; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; display: flex; align-items: center; justify-content: space-between;\"><th class=\"woocommerce-product-attributes-item__label\" style=\"margin: 0px 20px 0px 0px; padding: 0px; border: none; vertical-align: middle; font-style: var(--wd-title-font-style); font-variant: inherit; font-weight: var(--wd-title-font-weight); font-stretch: inherit; line-height: inherit; font-family: var(--wd-text-font); font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-size: inherit; text-align: left; color: var(--wd-title-color); flex: 0 0 auto;\"><span style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: middle; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit;\">Brand</span></th><td class=\"woocommerce-product-attributes-item__value\" style=\"margin: 0px; padding: 0px; border: none; vertical-align: middle; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; text-align: right;\"><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit;\"><a href=\"https://koreanmartbd.com/brand/raon/\" rel=\"tag\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; touch-action: manipulation; color: var(--wd-link-color); transition: all 0.25s ease 0s; box-shadow: none;\">RAON</a></p></td></tr><tr class=\"woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_size\" style=\"margin-top: 0px; margin-right: 0px; margin-bottom: calc(var(--wd-attr-v-gap) / 2); margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: calc(var(--wd-attr-v-gap) / 2); padding-left: 0px; border-top: 0px; border-right: 0px; border-bottom: var(--wd-attr-brd-width) var(--wd-attr-brd-style) var(--wd-attr-brd-color); border-left: 0px; border-image: initial; vertical-align: baseline; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; display: flex; align-items: center; justify-content: space-between;\"><th class=\"woocommerce-product-attributes-item__label\" style=\"margin: 0px 20px 0px 0px; padding: 0px; border: none; vertical-align: middle; font-style: var(--wd-title-font-style); font-variant: inherit; font-weight: var(--wd-title-font-weight); font-stretch: inherit; line-height: inherit; font-family: var(--wd-text-font); font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-size: inherit; text-align: left; color: var(--wd-title-color); flex: 0 0 auto;\"><span style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: middle; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit;\">Size</span></th><td class=\"woocommerce-product-attributes-item__value\" style=\"margin: 0px; padding: 0px; border: none; vertical-align: middle; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; text-align: right;\"><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit;\"><a href=\"https://koreanmartbd.com/size/100ml/\" rel=\"tag\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; touch-action: manipulation; color: var(--wd-link-color); transition: all 0.25s ease 0s; box-shadow: none;\">100ml</a></p></td></tr></tbody></table>', 'raon-black-argan-oil-28101700816851.jpg', 20, NULL, 200, NULL, '60gm', 190, 6, 1, '2023-11-24 03:07:31', '2024-03-01 10:36:41');
INSERT INTO `products` (`id`, `name`, `slug`, `category_id`, `brand_id`, `short_description`, `description`, `image`, `qty`, `discount_type`, `price`, `currency`, `weight`, `discount_amount`, `trending`, `status`, `created_at`, `updated_at`) VALUES
(10, 'Acwell Licorice', 'acwell-licorice-3448', 6, 8, NULL, '<p style=\"margin-right: 0px; margin-bottom: var(--wd-tags-mb); margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: inherit; font-family: Lato, Arial, Helvetica, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-size: 14px; color: rgb(119, 119, 119);\">The Acwell Licorice pH Balancing Cleansing Toner is designed to help balance the pH level of your skin, which can improve skin health and appearance. The main active ingredient, licorice extract, has anti-inflammatory and brightening properties that can soothe skin, reduce redness, and even out skin tone. The toner also helps to hydrate and nourish the skin, leaving it feeling refreshed and moisturized. Overall, the Acwell Licorice pH Balancing Cleansing Toner is a great addition to any skincare routine for those looking for a gentle, yet effective toner to improve their skin health.</p><p style=\"margin-right: 0px; margin-bottom: var(--wd-tags-mb); margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: inherit; font-family: Lato, Arial, Helvetica, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-size: 14px; color: rgb(119, 119, 119);\"><span style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-style: inherit; font-variant: inherit; font-weight: 600; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit;\">Key Benefits:</span></p><ul style=\"margin-right: 0px; margin-bottom: var(--list-mb); margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: var(--li-pl); border: 0px; vertical-align: baseline; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: inherit; font-family: Lato, Arial, Helvetica, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-size: 14px; list-style-position: initial; list-style-image: initial; --list-mb: 20px; --li-mb: 10px; --li-pl: 17px; color: rgb(119, 119, 119);\"><li style=\"margin-top: 0px; margin-right: 0px; margin-bottom: var(--li-mb); margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit;\"><span style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-style: inherit; font-variant: inherit; font-weight: 600; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit;\">Brightening:</span>&nbsp;Licorice extract is known for its brightening properties, and can help to improve the appearance of dark spots and hyperpigmentation.</li><li style=\"margin-top: 0px; margin-right: 0px; margin-bottom: var(--li-mb); margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit;\"><span style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-style: inherit; font-variant: inherit; font-weight: 600; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit;\">Soothing:</span>&nbsp;This toner contains licorice extract, which is known for its soothing and anti-inflammatory properties, making it ideal for sensitive skin types.</li><li style=\"margin-top: 0px; margin-right: 0px; margin-bottom: var(--li-mb); margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit;\"><span style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-style: inherit; font-variant: inherit; font-weight: 600; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit;\">Balancing:</span>&nbsp;This toner helps to restore the skin’s natural pH balance, which can be disrupted by environmental factors or other skincare products.</li><li style=\"margin-top: 0px; margin-right: 0px; margin-bottom: var(--li-mb); margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit;\"><span style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-style: inherit; font-variant: inherit; font-weight: 600; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit;\">Hydrating:</span>&nbsp;This toner contains hydrating ingredients such as hyaluronic acid and glycerin, which can help to keep the skin moisturized and plump.</li><li style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit;\"><span style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-style: inherit; font-variant: inherit; font-weight: 600; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit;\">Refreshing:</span>&nbsp;The lightweight, water-based formula of this toner provides a refreshing and cooling sensation on the skin, making it ideal for use in the morning or after exercise.</li></ul><p style=\"margin-right: 0px; margin-bottom: var(--wd-tags-mb); margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: inherit; font-family: Lato, Arial, Helvetica, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-size: 14px; color: rgb(119, 119, 119);\"><span style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-style: inherit; font-variant: inherit; font-weight: 600; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit;\">Key Ingredients:</span></p><ul style=\"margin-right: 0px; margin-bottom: var(--list-mb); margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: var(--li-pl); border: 0px; vertical-align: baseline; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: inherit; font-family: Lato, Arial, Helvetica, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-size: 14px; list-style-position: initial; list-style-image: initial; --list-mb: 20px; --li-mb: 10px; --li-pl: 17px; color: rgb(119, 119, 119);\"><li style=\"margin-top: 0px; margin-right: 0px; margin-bottom: var(--li-mb); margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit;\">Licorice extract: helps brighten the skin and reduce the appearance of dark spots</li><li style=\"margin-top: 0px; margin-right: 0px; margin-bottom: var(--li-mb); margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit;\">Portulaca oleracea extract: provides hydration and soothes irritated skin</li><li style=\"margin-top: 0px; margin-right: 0px; margin-bottom: var(--li-mb); margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit;\">Centella asiatica extract: helps calm and soothe irritated skin</li><li style=\"margin-top: 0px; margin-right: 0px; margin-bottom: var(--li-mb); margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit;\">Witch hazel: helps control oil and sebum production</li><li style=\"margin-top: 0px; margin-right: 0px; margin-bottom: var(--li-mb); margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit;\">Allantoin: helps soothe and calm the skin</li><li style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit;\">Dipotassium glycyrrhizate: helps brighten the skin and reduce inflammation</li></ul>', 'acwell-licorice-34481700817057.png', 79, NULL, 60, NULL, '20gm', NULL, 5, 1, '2023-11-24 03:10:58', '2024-03-14 02:17:20'),
(11, 'Samsung Galaxy Buds2 Pro', 'samsung-galaxy-buds2-pro-1351', 7, 2, NULL, '<div class=\"section-head\" style=\"margin: 0px; padding: 0px 0px 20px; color: rgb(0, 0, 0); font-family: &quot;Trebuchet MS&quot;, sans-serif; font-size: 15px;\"><h2 style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding: 0px; font-weight: bold; font-size: 20px; line-height: 26px;\">Description</h2></div><div class=\"full-description\" itemprop=\"description\" style=\"margin: 0px; padding: 0px; line-height: 24px; color: rgb(0, 0, 0); font-family: &quot;Trebuchet MS&quot;, sans-serif; font-size: 15px;\"><h2 style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding: 0px; font-weight: bold; font-size: 20px; line-height: 26px;\">Samsung Galaxy Buds2 Pro True Wireless Earbuds</h2><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; color: rgb(1, 19, 45); line-height: 26px;\">Samsung Galaxy Buds2 features&nbsp;booming bass and crystal-clear treble through two-way dynamic speakers. It comes with active noise cancellation technology that filters out up to 98% of ambient sound. It also comes with ambient modes that allow the world back in without having to remove the earbuds. The advanced microphone technology helps you be heard clearly, even in noisy environments.</p><h3 style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding: 0px; font-weight: bold; font-size: 18px; line-height: 24px;\">Ambient Sound Modes</h3><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; color: rgb(1, 19, 45); line-height: 26px;\">With Samsung Galaxy Buds2, you can select from 3 different ambient sound modes to dial in how much of the outside world you want to let back in. It\'s an ideal feature to have when you need to hear if your order is ready, to be more aware of nearby traffic, or to have a quick chat with someone.</p><h3 style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding: 0px; font-weight: bold; font-size: 18px; line-height: 24px;\">Advanced Call Quality</h3><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; color: rgb(1, 19, 45); line-height: 26px;\">Samsung Galaxy Buds2 TWS Earbuds leverages advanced audio technology to make sure you the small earbuds can provide clear hands-free calls, even when outside or around other people. The earbuds utilize three different microphones and a VPU (voice pickup unit) to capture your voice, while integrated machine learning helps to filter out unwanted sound from entering your conversations. Even the physical shape of the earbuds help with calls by being curved in such a way that they work to shield the microphones from wind noise.</p><h3 style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding: 0px; font-weight: bold; font-size: 18px; line-height: 24px;\">Long Battery Life</h3><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; color: rgb(1, 19, 45); line-height: 26px;\">The Galaxy Buds2 provides up to 5 hours of battery life with ANC on, and up to 7.5 hours with ANC off. The included charging case has enough power for 15 additional hours of life with ANC turned on. To recharge your Galaxy Buds2, simply place them inside the case and close it.</p></div>', 'samsung-galaxy-buds2-pro-13511700819032.webp', 60, NULL, 1250, NULL, '200gm', NULL, 8, 1, '2023-11-24 03:43:52', '2024-03-06 11:45:12'),
(12, 'Apple iPad Pro', 'apple-ipad-pro-1381', 3, 6, NULL, '<table class=\"data-table flex-table\" cellpadding=\"0\" cellspacing=\"0\" style=\"margin: -20px 0px 0px; padding: 0px; display: flex; flex-direction: column; width: 920px; color: rgb(0, 0, 0); font-family: &quot;Trebuchet MS&quot;, sans-serif; font-size: 15px;\"><thead style=\"margin: 0px; padding: 0px;\"><tr style=\"margin: 0px; padding: 0px; display: flex;\"><td class=\"heading-row\" colspan=\"3\" style=\"margin: 20px 0px 0px; padding: 6px 20px; flex: 1 1 auto; display: flex; background: var(--s-s-bg); color: var(--s-secondary); font-size: 16px; line-height: 30px; font-weight: bold; border-radius: 5px;\">Main Feature</td></tr></thead><tbody style=\"margin: 0px; padding: 0px;\"><tr style=\"margin: 0px; padding: 0px; display: flex;\"><td class=\"name\" style=\"margin: 0px; padding: 10px 20px; flex: 0 0 250px; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239); color: rgb(102, 102, 102);\">Display Type</td><td class=\"value\" style=\"margin: 0px; padding: 10px 20px; flex: 1 1 auto; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239);\">Liquid Retina display<br style=\"margin: 0px; padding: 0px;\">11-inch (diagonal) LED backlit Multi‑Touch display with IPS technology</td></tr><tr style=\"margin: 0px; padding: 0px; display: flex;\"><td class=\"name\" style=\"margin: 0px; padding: 10px 20px; flex: 0 0 250px; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239); color: rgb(102, 102, 102);\">Size</td><td class=\"value\" style=\"margin: 0px; padding: 10px 20px; flex: 1 1 auto; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239);\">11 -inch</td></tr><tr style=\"margin: 0px; padding: 0px; display: flex;\"><td class=\"name\" style=\"margin: 0px; padding: 10px 20px; flex: 0 0 250px; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239); color: rgb(102, 102, 102);\">Resolution</td><td class=\"value\" style=\"margin: 0px; padding: 10px 20px; flex: 1 1 auto; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239);\">Resolution: 2388 x 1668<br style=\"margin: 0px; padding: 0px;\">Pixel Density: 264 ppi<br style=\"margin: 0px; padding: 0px;\"></td></tr><tr style=\"margin: 0px; padding: 0px; display: flex;\"><td class=\"name\" style=\"margin: 0px; padding: 10px 20px; flex: 0 0 250px; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239); color: rgb(102, 102, 102);\">Processor</td><td class=\"value\" style=\"margin: 0px; padding: 10px 20px; flex: 1 1 auto; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239);\">8-core CPU with 4 performance cores and 4 efficiency cores</td></tr><tr style=\"margin: 0px; padding: 0px; display: flex;\"><td class=\"name\" style=\"margin: 0px; padding: 10px 20px; flex: 0 0 250px; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239); color: rgb(102, 102, 102);\">RAM</td><td class=\"value\" style=\"margin: 0px; padding: 10px 20px; flex: 1 1 auto; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239);\">8GB RAM</td></tr><tr style=\"margin: 0px; padding: 0px; display: flex;\"><td class=\"name\" style=\"margin: 0px; padding: 10px 20px; flex: 0 0 250px; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239); color: rgb(102, 102, 102);\">Storage</td><td class=\"value\" style=\"margin: 0px; padding: 10px 20px; flex: 1 1 auto; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239);\">256GB</td></tr><tr style=\"margin: 0px; padding: 0px; display: flex;\"><td class=\"name\" style=\"margin: 0px; padding: 10px 20px; flex: 0 0 250px; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239); color: rgb(102, 102, 102);\">Connectivity</td><td class=\"value\" style=\"margin: 0px; padding: 10px 20px; flex: 1 1 auto; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239);\">5G NR (Bands n1, n2, n3, n5, n7, n8, n12, n20, n25, n28, n38, n40, n41, n66, n71, n77, n78, n79)4<br style=\"margin: 0px; padding: 0px;\">5G NR mmWave (Bands n260, n261)<br style=\"margin: 0px; padding: 0px;\">FDD-LTE (Bands 1, 2, 3, 4, 5, 7, 8, 11, 12, 13, 14, 17, 18, 19, 20, 21, 25, 26, 28, 29, 30, 32, 66, 71)<br style=\"margin: 0px; padding: 0px;\">TD-LTE (Bands 34, 38, 39, 40, 41, 42, 46, 48)<br style=\"margin: 0px; padding: 0px;\">UMTS/HSPA/HSPA+/DC‑HSDPA (850, 900, 1700/2100, 1900, 2100 MHz)<br style=\"margin: 0px; padding: 0px;\">GSM/EDGE (850, 900, 1800, 1900 MHz)<br style=\"margin: 0px; padding: 0px;\">Data only<br style=\"margin: 0px; padding: 0px;\">Wi-Fi calling<br style=\"margin: 0px; padding: 0px;\">eSIM</td></tr><tr style=\"margin: 0px; padding: 0px; display: flex;\"><td class=\"name\" style=\"margin: 0px; padding: 10px 20px; flex: 0 0 250px; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239); color: rgb(102, 102, 102);\">Operating System</td><td class=\"value\" style=\"margin: 0px; padding: 10px 20px; flex: 1 1 auto; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239);\">iPadOS 14</td></tr><tr style=\"margin: 0px; padding: 0px; display: flex;\"><td class=\"name\" style=\"margin: 0px; padding: 10px 20px; flex: 0 0 250px; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239); color: rgb(102, 102, 102);\">Audio</td><td class=\"value\" style=\"margin: 0px; padding: 10px 20px; flex: 1 1 auto; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239);\">Four speaker audio<br style=\"margin: 0px; padding: 0px;\">Audio formats supported: AAC‑LC, HE‑AAC, HE‑AAC v2, Protected AAC, MP3, Linear PCM, Apple Lossless, FLAC, Dolby Digital (AC‑3), Dolby Digital Plus (E‑AC‑3), Dolby Atmos, and Audible (formats 2, 3, 4, Audible Enhanced Audio, AAX, and AAX+)<br style=\"margin: 0px; padding: 0px;\">Spatial audio playback<br style=\"margin: 0px; padding: 0px;\">User-conﬁgurable maximum volume limit</td></tr></tbody><thead style=\"margin: 0px; padding: 0px;\"><tr style=\"margin: 0px; padding: 0px; display: flex;\"><td class=\"heading-row\" colspan=\"3\" style=\"margin: 20px 0px 0px; padding: 6px 20px; flex: 1 1 auto; display: flex; background: var(--s-s-bg); color: var(--s-secondary); font-size: 16px; line-height: 30px; font-weight: bold; border-radius: 5px;\">Physical Spec</td></tr></thead><tbody style=\"margin: 0px; padding: 0px;\"><tr style=\"margin: 0px; padding: 0px; display: flex; background: rgb(250, 251, 252);\"><td class=\"name\" style=\"margin: 0px; padding: 10px 20px; flex: 0 0 250px; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239); color: rgb(102, 102, 102);\">SIM</td><td class=\"value\" style=\"margin: 0px; padding: 10px 20px; flex: 1 1 auto; display: flex; line-height: 22px; border-bottom: 1px solid rgb(236, 237, 239);\">Nano‑SIM (supports Apple SIM)</td></tr></tbody></table>', 'apple-ipad-pro-13811700819154.jpg', 10, NULL, 110000, NULL, '950gm', NULL, 3, 1, '2023-11-24 03:45:54', '2024-02-22 13:28:07'),
(13, 'Hoodie Black', 'hoodie-black-1657', 4, 1, 'Add a cool GoodyBox for 99 BDT only with your products. Special packaging box made for your convenience.', '<p><span style=\"color: rgb(27, 30, 47); font-size: 17px;\">Add a cool GoodyBox for 99 BDT only with your products. Special packaging box made for your convenience.</span><br></p>', 'hoodie-black-16571700819300.webp', 49, NULL, 1550, NULL, '800gm', NULL, 7, 1, '2023-11-24 03:48:20', '2024-03-18 01:47:39'),
(14, 'WOMEN\'S WOVEN SHORT TOPS', 'womens-woven-short-tops-4766', 2, 3, 'WOMEN\'S WOVEN SHORT TOPS', NULL, 'womens-woven-short-tops-47661700819411.jpg', 50, NULL, 2999, NULL, '700gm', 2500, 5, 1, '2023-11-24 03:50:11', '2024-02-21 15:55:56'),
(15, 'WOMEN\'S WOVEN KURTI', 'womens-woven-kurti-4158', 2, 1, NULL, '<h4 style=\"margin-bottom: 5px; font-weight: 600; font-size: 14px; word-break: break-word; text-transform: capitalize; color: rgb(34, 34, 34); font-family: Inter, sans-serif;\">WOMEN\'S WOVEN KURTI</h4>', 'womens-woven-kurti-41581700819490.jpg', 65, NULL, 1000, NULL, '500gm', 850, 11, 1, '2023-11-24 03:51:30', '2024-02-10 18:44:39'),
(16, 'WOMEN\'S WOVEN KURTI', 'womens-woven-kurti-1616', 2, 3, 'WOMEN\'S WOVEN KURTI', '<h4 style=\"margin-bottom: 5px; font-weight: 600; font-size: 14px; word-break: break-word; text-transform: capitalize; color: rgb(34, 34, 34); font-family: Inter, sans-serif;\">WOMEN\'S WOVEN KURTI</h4>', 'womens-woven-kurti-16161700819589.jpg', 70, NULL, 3500, NULL, '450gm', 2850, 7, 1, '2023-11-24 03:53:09', '2024-02-04 11:53:52');

-- --------------------------------------------------------

--
-- Table structure for table `promo_codes`
--

CREATE TABLE `promo_codes` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint NOT NULL DEFAULT '0' COMMENT '1 = percentage, 0 = fixed',
  `code` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `limit` int NOT NULL,
  `used` int NOT NULL DEFAULT '0',
  `discount` double NOT NULL,
  `expire_date` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0' COMMENT '0 = inactive, 1 = active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `terms_and_conditions`
--

CREATE TABLE `terms_and_conditions` (
  `id` bigint UNSIGNED NOT NULL,
  `terms_and_condition` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terms_and_conditions`
--

INSERT INTO `terms_and_conditions` (`id`, `terms_and_condition`, `created_at`, `updated_at`) VALUES
(1, '<h2 style=\"font-size: 2rem; color: rgb(33, 37, 41); font-family: Inter, sans-serif;\"><br></h2><h2 style=\"font-size: 2rem; color: rgb(33, 37, 41); font-family: Inter, sans-serif;\">Terms and Conditions</h2><p style=\"font-size: 2rem; color: rgb(33, 37, 41); font-family: Inter, sans-serif;\"><br></p><div style=\"color: rgb(33, 37, 41); font-family: Inter, sans-serif; font-size: 16px;\"><div class=\"page-body\"><p>Welcome and Thanks for your interest in Sailor.clothing.Before assessing the terms &amp; conditions please note that terms &amp; conditions might change anytime. Therefore, please check the terms &amp; condition every time you place an order.</p><p><span style=\"font-weight: bolder;\">Order Policy:</span></p><ul style=\"padding-left: 2rem; list-style-type: none;\"><li>Order is possible for available items only</li><li>Paid orders cannot be cancelled or refunded, for both Cash on Delivery (COD) &amp; Online Payments.</li><li>Home Delivery orders will be processed after the confirmation from our Customer Care representative.</li><li>Please contact our Customer Care for any kind of order related issues.</li></ul><p>Customer Care contact number: 01777-702000 (Service available through out the week, Time: 9:00AM-6:00PM)</p><p><span style=\"font-weight: bolder;\">Pricing policy:</span></p><ul style=\"padding-left: 2rem; list-style-type: none;\"><li>All our product prices are&nbsp;excluded of VAT &amp; TAX</li><li>Price of a product might vary in Sailor bricks and mortar store &amp; website due to periodic promotional offers</li><li>Technical error in pricing information might take place due to system malfunction. In such situation, Sailor has the authority to cancel the order. We apologize for any inconvenience that may occur.</li></ul><p><span style=\"font-weight: bolder;\">Shipping Policy:</span></p><p>We are committed to delivering your order accurately, in good condition, and on time.</p><p>Please note our shipping policy as follows:</p><ul style=\"padding-left: 2rem; list-style-type: none;\"><li>Inside Dhaka delivery: Deliver within 3 business days</li><li>Outside Dhaka delivery: Deliver within 5 business days</li></ul><p>Please note that we are associated with a shipping company to deliver orders. Hence, the delivery process is not completely in our control. We apologize for occurrence of any damage &amp; promise to compensate for it.</p><p><span style=\"font-weight: bolder;\">Color Inconsistency:</span></p><p>We have tried our best to portray the accurate color of the products on website. However, still customers might experience color inaccuracy due to monitor discrepancies.</p><p><span style=\"font-weight: bolder;\">Information Inconsistency Disclaimers:</span></p><p style=\"margin-bottom: 1rem;\">The website might display inaccurate information regarding product price, availability, pictures, size &amp; color at times due to technical malfunctions. Sailor reserves the authority to correct &amp; update that information from time to time.</p></div></div>', '2023-11-24 21:56:36', '2023-11-24 21:56:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '1 = active, 0 = deactive',
  `role_as` tinyint NOT NULL DEFAULT '0' COMMENT '1 = Admin, 0 = Users',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `address`, `city`, `zip_code`, `image`, `status`, `role_as`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, NULL, '$2y$10$ZRuBdJdBEbGg/FPK7VG3VOgH5P5LQRXdlsGTd.74sAJM.dDpin.96', 'Commodi optio volup', 'Consequat Omnis eni', '90695', '1700722847.jpg', '1', 1, NULL, '2023-11-22 23:34:47', '2023-11-26 12:32:17'),
(2, 'User', 'user@gmail.com', NULL, NULL, '$2y$10$/kevmU0WnSH0OKZZK0NjPe1Gj04S3l0HXqdo8rxWHvU5ariz3JhHe', 'Malibag', 'Dhaka', '1204', NULL, '1', 0, NULL, '2023-11-22 23:34:47', '2023-11-25 21:34:54'),
(4, 'MD. ABDUR RAHMAN', 'abdurrahman12833@gmail.com', NULL, NULL, '$2y$10$XHj9M7KrULEsAfAgPw6JYOWBUIdSirbWAFXgcYM5qdDxpZ2vk9sfS', 'Mughda,Manda', 'Dhaka, Bangladesh', '1214', NULL, '1', 0, NULL, '2023-11-26 10:38:31', '2023-11-27 07:43:02'),
(5, 'aaaaaa', 'a@gmail.com', NULL, NULL, '$2y$10$JipYcOsFnhaqdgt502fkXOyEvBn.I9tkRuB8HpPhsctH2f5XMF5rW', NULL, NULL, NULL, NULL, '1', 0, NULL, '2023-11-27 11:34:14', '2023-11-27 11:34:14');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint NOT NULL,
  `user_id` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `product_id`, `user_id`, `created_at`, `updated_at`) VALUES
(11, 4, 5, '2023-11-27 11:34:56', '2023-11-27 11:34:56'),
(12, 2, 7, '2024-03-09 02:56:51', '2024-03-09 02:56:51'),
(13, 3, 7, '2024-03-09 02:56:55', '2024-03-09 02:56:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apply_promo_codes`
--
ALTER TABLE `apply_promo_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_slug_unique` (`slug`),
  ADD KEY `blogs_user_id_foreign` (`user_id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blog_categories_slug_unique` (`slug`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_slug_unique` (`slug`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_information`
--
ALTER TABLE `delivery_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `general_settings`
--
ALTER TABLE `general_settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `general_settings_key_unique` (`key`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `privacy_policies`
--
ALTER TABLE `privacy_policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_brand_id_foreign` (`brand_id`);

--
-- Indexes for table `promo_codes`
--
ALTER TABLE `promo_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms_and_conditions`
--
ALTER TABLE `terms_and_conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `apply_promo_codes`
--
ALTER TABLE `apply_promo_codes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `delivery_information`
--
ALTER TABLE `delivery_information`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `privacy_policies`
--
ALTER TABLE `privacy_policies`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `promo_codes`
--
ALTER TABLE `promo_codes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `terms_and_conditions`
--
ALTER TABLE `terms_and_conditions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`),
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
