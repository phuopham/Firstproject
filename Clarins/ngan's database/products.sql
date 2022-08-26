-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 26, 2022 lúc 03:24 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `clarins`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `productID` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `catalogID` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `brandID` int(11) NOT NULL,
  `sell_quantity` int(11) DEFAULT 0,
  `price` int(11) NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `pic1` varchar(40) DEFAULT NULL,
  `pic2` varchar(40) DEFAULT NULL,
  `pic3` varchar(40) DEFAULT NULL,
  `pic4` varchar(40) DEFAULT NULL,
  `create_by` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`productID`, `name`, `catalogID`, `description`, `brandID`, `sell_quantity`, `price`, `discount`, `pic1`, `pic2`, `pic3`, `pic4`, `create_by`) VALUES
(1, 'Nourishing Strengthening Hair Mask', 2, 'This wonderfully scented mask is perfect for dry or damaged hair. Its formula is enriched with organic shea butter and organic argan oil, known for their nourishing properties, to help strengthen the scalp and intensely nourish the hair fibre. Instantly restores your hair&#039;s shine, strength and softness to look more beautiful with every application.', 1, 0, 31, 20, 'img/product-55.jpg', 'img/product-56.jpg', 'img/product-57.jpg', 'img/product-54.jpg', '2022-08-25 23:36:31'),
(2, 'ClarinsMen Shampoo &amp; Shower', 1, 'An invigorating, 2-in-1 wash that gently cleanses hair and body. Tones skin with energising Bison Grass and Chinese Galanga. Conditions hair with Provitamin B5. Gentle enough to use each morning and evening. For all hair and skin types, even sensitive skin.\r\nThe uplifting scent of plant essences awakens the senses for a complete fresh feeling. Suitable for all skin and hair types.', 1, 0, 20, 0, 'img/product-61.jpg', 'img/product-59.jpg', 'img/product-60.jpg', 'img/product-58.jpg', '2022-08-25 23:40:16'),
(3, 'Nourishing Beauty Hair Oil', 2, 'With a heavenly scent, this delicate lightweight oil beautifies and brightens your hair without weighing it down. Multi-tasking hair oil that nourishes, fights frizz, and delivers a healthy-looking sheen to dry or damaged hair. Formulated with natural oils of Organic Argan and Camellia, this lightweight hair oil deeply nourishes to leave hair instantly soft, smooth, and radiant. Nutrient-rich formula helps shield hair from damaging effects of heat styling, sun, sea water, and other external aggressors.\r\n', 1, 0, 23, 15, 'img/product-63.jpg', 'img/product-65.jpg', 'img/product-64.jpg', 'img/product-62.jpg', '2022-08-25 23:42:20'),
(4, 'Double Serum Limited Edition', 4, 'Clarins Double Serum is a Complete Age Control Concentrate formulated to give you healthier, visibly younger looking skin. \r\nClarins Double Serum acts on the appearance of major signs of skin-aging and contains 21 active plant extracts, including turmeric, renowned for its exceptional anti-aging properties. Skin is left looking more radiant, firmer, fine lines are smoothed and pores appear reduced.\r\nThe bottle’s rotating push button also delivers a made-to-measure dosage of serum.', 1, 0, 102, 0, 'img/product-69.jpg', 'img/product-67.jpg', 'img/product-68.jpg', 'img/product-66.jpg', '2022-08-25 23:44:54'),
(5, 'Hydra-Essentiel Bi-phase Serum - Normal to Dry Skin', 4, 'As light as it is comfortable, this intense hydrating bi-phase serum quenches irritated, dull, and uneven skin.\r\nIts secret?\r\nOrganic, medicinal kalanchoe extract, a powerful natural hydration activator that boosts the skin’s hyaluronic acid* production.\r\nIts beauty bonus?\r\nBi-Phase Serum refines the skin’s texture and smooths its surface. Your quenched skin is fresh, comfortable, radiant, and vibrant. For even more hydration, Bi-Phase Serum can be used together with the Hydra-Essentiel cream suitable for your skin type.', 1, 0, 46, 10, 'img/product-73.jpg', 'img/product-71.jpg', 'img/product-70.jpg', 'img/product-72.jpg', '2022-08-25 23:47:04'),
(6, 'Bright Plus Dark Spot Targeting Milky Essence', 3, 'A hydrating treatment essence for normal to dry skin that targets dullness and dark spots for a visibly brighter, more even skin tone. Formulated with 91% ingredients of natural origin, this breakthrough skincare innovation is powered by Clarins’ advanced Brightening Complex of Organic Lady’s Mantle, Organic Sea Lily extracts, and a vitamin C derivative to visibly brighten and reduce the appearance of dark spots. Two powerful superfruits—a blend of Rose Myrtle and Vitamin C-rich Organic Acerola Seed extracts—deliver a double shot of oxygen to promote healthy-looking, radiant skin. The sensorial milky texture contains deeply hydrating Vegetable Squalane from Sugar Cane for a soft, supple, comfortable complexion. Use after cleansing to boost the benefits of the Clarins skincare to follow.', 1, 0, 37, 15, 'img/product-74.jpg', 'img/product-75.jpg', 'img/product-77.jpg', 'img/product-76.jpg', '2022-08-25 23:50:34'),
(7, 'Super Restorative Remodelling Serum', 4, 'This exceptional anti-ageing treatment lifts the features, replenishes the skin, reshapes and redefines contours and the face shape, all while diminishing the appearance of age spots.\r\nCLARINS ANTI-AGING VOLUME INNOVATION\r\nPrecious narrow-leaf plantain combined with organic harungana extract helps protect the facial contours. By limiting the elimination of lipids by adipocytes, it prevents the melting of adipose tissue caused by ageing fibroblasts. It redefines the contours of the face and preserves harmonious facial contours.\r\nIMPROVED DENSITY\r\nIn combination, organic harungana extract, a &#039;healing&#039; tree from Madagascar, reactivates hormone-depleted fibroblasts, which restores the substance of the dermis to combat the effects of gravity and help slow down skin slackening around the chin.\r\nCORRECTING AGE SPOTS\r\nOrganic Montpellier rock-rose extract, nicknamed the &#039;phoenix plant&#039;, helps visibly reduce the look of age-related dark spots and restores the complexion&#039;s luminosity.', 1, 0, 109, 0, 'img/product-84.jpg', 'img/product-79.jpg', 'img/product-78.jpg', 'img/product-83.jpg', '2022-08-26 16:57:28'),
(8, 'My Clarins RE-MOVE Micellar Cleansing Water', 3, 'My Clarins new Micellar Cleansing Water gently removes make-up, with Organic golden gentian extract to and smoothen and soften the skin whilst detoxifying and purifying thanks to moringa extract. This product is ideal for micellar water lovers and anyone looking for a refreshing cleanser.', 1, 0, 18, 0, 'img/product-85.jpg', 'img/product-86.jpg', 'img/product-87.jpg', 'img/product-88.jpg', '2022-08-26 17:00:39'),
(9, 'Total Cleansing Oil', 3, 'Refreshing, easy-rinse lightweight cleansing oil, formulated with purifying Alpine herbs and 47% Organic Sunflower oil, water-activates into a silky milk that immediately dissolves even heavy, long-wearing, and waterproof makeup and pollutants while preserving the skin&#039;s microbiota to leave skin feeling soft, clean, and comfortable. The duo of two organic Alpine plant extracts—Organic Golden Gentian and Organic Lemon Balm—make up our exclusive Gentle Complex to soothe and soften skin, and are sourced responsibly from Le Domaine Clarins—our open-air laboratory and farm located in the French Alps. ', 1, 0, 24, 0, 'img/product-89.jpg', 'img/product-90.jpg', 'img/product-91.jpg', 'img/product-92.jpg', '2022-08-26 17:02:32'),
(10, 'Super Restorative Smoothing Treatment Essence', 3, 'New innovation for menopausal skin\r\nSuper Restorative Soothing Treatment Essence supports all women whose skin has been affected by hormonal changes linked to menopause. Perfect for all skin types, combines powerful botanical ingredients and a hyaluronic acid complex to intensely moisturize skin for 8 hours*, while renewing and reenergizing it.\r\nIts age-specific formula helps visibly smooth and replenish. It also preps the skin to absorb skin care applied afterwards. A comforting texture that dives deep, leaving skin feeling plump and supple. Its eco-designed bottle uses a minimum of 25% recycled plastic. *Clinical test, 25 women\r\nThe production of the hormone, oestrogen, is significantly affected by the menopause which in turn leads to a slower production process within cells, such as fibroblasts.\r\nFibroblasts are responsible for producing collagen, elastin and the dermal matrix, the skin’s natural mattress filling. During the menopause, they lose over 99% of their tone, meaning they are unable to maintain the tension between the collagen and elastin fibres, which are necessary for a toned, firmed appearance in the skin.', 1, 0, 50, 0, 'img/product-93.jpg', 'img/product-95.jpg', 'img/product-94.jpg', 'img/product-96.jpg', '2022-08-26 17:06:01'),
(11, 'My Clarins RE-FRESH Hydrating Beauty Mist', 3, 'Our deliciously fruity beauty mist packs a powerful plant extract punch with 90% natural ingredients. Infused with our Healthy Skin [In &amp; Out] complex containing nourishing organic coconut water and detoxifying Alpenrose extract, it’s the ultimate skin smoothie. While fig extract delivers a heavy dose of hydration, robina flower water softens skin and the radiance-boosting acerola seed extract gets to work on your glow.\r\nFresh and fast, RE-FRESH is the ultimate quick fix for total hydration. Use morning and night, after cleansing or over make-up to quench thirsty, dehydrated or sensitive skin.\r\n\r\n', 1, 0, 18, 15, 'img/product-97.jpg', 'img/product-98.jpg', 'img/product-100.jpg', 'img/product-99.jpg', '2022-08-26 17:11:14'),
(12, 'Total Eye Lift', 5, 'A new era of our Total Eye Concentrate. This plant-powered, silky gel-cream glides onto the eye area to lift, smooth and brighten from temple to temple. Suitable for sensitive eyes and contact lens wearers.', 1, 0, 59, 0, 'img/product-101.jpg', 'img/product-102.jpg', 'img/product-103.jpg', 'img/product-104.jpg', '2022-08-26 17:13:42'),
(13, 'Total Eye Hydrate', 5, 'A super-hydrating cooling balm-mask for fresh and revived eyes in just 10 minutes. With its cream-gel texture and a cooling formula, it helps to reduce signs of dehydration and fatigue for instantly brighter-looking eyes. Contains organic leaf of life to boost skin’s ability to retain moisture, as well as Irish moss which soothes the skin, and horse chestnut which boosts radiance.', 1, 0, 30, 0, 'img/product-108.jpg', 'img/product-106.jpg', 'img/product-105.jpg', 'img/product-107.jpg', '2022-08-26 17:15:28'),
(14, 'V Shaping Facial Lift Tightening &amp; Anti-Puffiness Eye Concentrate', 5, 'Our tightening and depuffing eye concentrate is designed to visibly reduce puffiness around the eyes.\r\nPacked with botanical extracts that reduce puffiness and visibly lift, this innovative eye care delivers a visibly awakened, brighter and bolder look.', 1, 0, 42, 16, 'img/product-110.jpg', 'img/product-109.jpg', 'img/product-111.jpg', 'img/product-112.jpg', '2022-08-26 17:17:16'),
(15, 'Lip Comfort Oil', 6, 'New Lip Comfort Oil. A tinted lip oil powered by Clarins skin care expertise. A new era of our iconic Lip Comfort Oil reformulated with a trio of plant oils including Organic Sweetbriar Rose oil to help revive, comfort, and protect lips while visibly plumping with all day hydration and nourishment. This lip care treatment kisses lips with a sheer hint of colour and mirror-like shine. The conditioning oil texture glides smoothly over lips with an even lighter, non-sticky feel that delivers a cushioned, cocooned effect.\r\nDeveloped with the same expertise as Clarins&#039; skincare, this intensive lip treatment oil is formulated with 93% ingredients of natural origin to hydrate, comfort and cocoon skin with a sheer kiss of colour and shine.\r\nUpdated in a sleek, new package our beloved curved sponge applicator hugs lip and contours for precise, glide-on application that leaves lips feeling cocooned with ultra-glossy shine.', 1, 0, 20, 0, 'img/product-113.jpg', 'img/product-116.jpg', 'img/product-115.jpg', 'img/product-114.jpg', '2022-08-26 17:19:35'),
(16, 'Extra-Firming Lip and Contour Balm', 6, 'Soothing balm—with smoothing Raspberry Seed Oil and nourishing Shea Butter—visibly repairs, replenishes, softens and moisturises chapped lips. Smoothes the appearance of fine vertical lines and wrinkles on the lip contour area. Lips appear naturally fuller, younger and beautifully defined—with results that improve with every use.\r\nFeatured in The Anti-Ageing Beauty Bible', 1, 0, 32, 10, 'img/product-117.jpg', 'img/product-118.jpg', 'img/product-119.jpg', 'img/product-120.jpg', '2022-08-26 17:22:53'),
(17, 'Lip Comfort Oil - Limited Edition', 6, 'One bottle, one colour, one essential oil and one mood! Lip Comfort Oil is now available in a collection of limited edition mood-boosting shades: which colour will you choose? It&#039;s 4 colours represent 4 mood boosters. Enriched with essential oils for an uplifting, soothing, relaxing or mood-lifting effect, it guarantees shine, nourishment, comfort and great make-up results: both natural and with a glossy finish.\r\nFormula enriched with 93% ingredients of natural origin, including an ultra-nourishing trio of plant-based oils containing organic rose hip oil—which helps strengthen the barrier function and thus protect against external aggressors—as well as organic jojoba and hazelnut.', 1, 0, 20, 0, 'img/product-121.jpg', 'img/product-124.jpg', 'img/product-122.jpg', 'img/product-123.jpg', '2022-08-26 17:24:49'),
(18, 'Joli Rouge Lip Lacquer', 10, 'A melting, nourishing stick with a unique texture offering the intense shine of a liquid lacquer and simple application.', 1, 0, 23, 5, 'img/product-125.jpg', 'img/product-127.jpg', 'img/product-128.jpg', 'img/product-129.jpg', '2022-08-26 17:30:17'),
(19, 'Clarin&#039;s Eyebrow Pencil ', 11, 'A long-wearing eyebrow pencil that defines and corrects the shape of your brows.\r\nA dual-ended tool for a perfect line: the soft and precise pencil defines the curve of the brows while the spiral brush grooms and tames them.\r\nDermatologically and ophthalmologically tested.', 1, 0, 19, 5, 'img/product-130.jpg', 'img/product-131.jpg', 'img/product-132.jpg', 'img/product-133.jpg', '2022-08-26 17:58:52'),
(20, 'Graphik Ink Eyeliner', 12, 'Instead of a cat-eye, what about a doe-eyed or a graphic look? The Graphik Ink eyeliner allows women to let their personalities run wild: its precise, easy-to-use felt tip makes it easy to create any type of line.\r\nThis new liner combines a perfect line and is intense black thanks to its pure “carbon black” pigments: they catch the light and provide a denser colour.  An ultra-intense look all the time.\r\nThis infallible, transfer-proof, long-wear eyeliner defines your eyes for hours on end:  your liner stays clean and sharp all day long!', 1, 0, 22, 0, 'img/product-137.jpg', 'img/product-134.jpg', 'img/product-135.jpg', 'img/product-136.jpg', '2022-08-26 18:05:10'),
(21, 'Wonder Perfect Mascara 4D Waterproof', 13, 'The 1st Clarins multi-dimensional mascara that is both waterproof and smudge proof. Enriched in plant extracts, contains blue lotus wax to add volume and protect the lashes.\r\nWith an iconic brush that distributes the perfect amount of mascara and creates intense definition for flawless four-dimensional eyes as it visibly lengthens and thickens lashes and an intense black colour which thanks to mineral pigments will not smudge.\r\nClarins Lash Boosting Complex\r\nAll Clarins mascaras have been enriched with a unique lash-boosting serum that gives 2-in-1 make-up and lash care. Formulated by Clarins Research to visibly lengthen and strengthen lashes after each application, the complex contains vitamin B5 panthenol, meaning lashes are left thicker and visibly longer with just a single brushstroke.', 1, 0, 23, 0, 'img/product-139.jpg', 'img/product-140.jpg', 'img/product-141.jpg', 'img/product-138.jpg', '2022-08-26 18:08:50'),
(22, 'Instant Concealer', 14, 'Our bestselling, smoothing concealer instantly brightens, conceals imperfections, and diminishes signs of fatigue. It delivers customisable correction for all types of dark circles, restoring a natural skin tone to the undereye area. Enriched with hydrating aloe vera, the fluid texture blends flawlessly and smoothes eye contours for crease-free coverage. Caffeine extract visibly brightens and refreshes the undereye area, reducing the appearance of puffiness. Long-wearing formula lasts all day.', 1, 0, 23, 5, 'img/product-142.jpg', 'img/product-143.jpg', 'img/product-145.jpg', 'img/product-144.jpg', '2022-08-26 18:13:33'),
(23, 'LA NUIT TRÉSOR NUDE', 17, 'Trésor introduces a new chapter with La Nuit Trésor Nude: Shades of dazzling rose intertwine with bright citrus and are balanced with creamy coconut and warm vanilla.\r\nLa Nuit Trésor Nude is authentic, beautiful love personified in an elegant, gem-shaped perfume bottle.', 4, 0, 102, 20, 'img/product-148.jpg', 'img/product-147.jpg', 'img/product-146.jpg', 'img/product-149.jpg', '2022-08-26 18:28:24'),
(24, 'Clarins Tonic Body Treatment Oil', 7, 'Clarins Tonic Body Treatment Oil with a formula of 100% natural essential oils combined with massage movements to help nourish and make skin soft, smooth, improve elasticity and stretch marks. The product is very suitable for women after giving birth, puberty or in the case of erratic weight gain and loss. By gently acting through massage movements, the product helps to relax the muscles, stimulate blood and lymph circulation, encourage the removal of toxic substances from the tissues, providing a wonderful feeling of relaxation. , dissipating fatigue, making the body more resilient.', 1, 0, 50, 10, 'img/product-200.jpg', 'img/product-201.jpg', 'img/product-202.jpg', 'img/product-204.jpg', '2022-08-26 19:40:06'),
(25, 'Clarins Relax Bath &amp; Shower Concentrate', 8, 'If you apply to a damp, warm sponge or cloth, use it as you would any shower gel and inhale deeply you will reap the benefits of this sensual Clarins product. If you, like me, suffer from the Gremlins, aka tension knots, in the shoulders do yourself a massive favour and massage the gel into your tense muscles and feel them loosen up.', 1, 0, 25, 25, 'img/product-205.jpg', 'img/product-206.jpg', 'img/product-207.jpg', NULL, '2022-08-26 19:49:53'),
(26, 'Hand &amp; Treatment Treatment Cream', 9, 'How do I care for dehydrated skin using body moisturisers? Dehydrated skin on your body shows signs of dryness and feels tight. The only way to relieve this discomfort is to make up for a loss of moisture. After bathing or showering, apply body lotion straight away for soft, supple skin, a far cry away from dry skin lacking nourishment. Don&#039;t forget to exfoliate your body every week to get a gorgeous glow: The Clarins range of body exfoliators offers a selection of exfoliators to suit even the most sensitive of skin types.', 1, 0, 30, 12, 'img/product-209.jpg', 'img/product-209.jpg', 'img/product-210.jpg', NULL, '2022-08-26 19:56:22'),
(27, 'Clarins UV Plus Anti-Pollution Sunscreen Multi-Protection', 15, 'This was the first sunscreen that I’ve integrated into my daily regimen. And at first, I loved it. It’s lightweight, water consistency, and perfect for under makeup. But after trying out other sunscreens, I’ve realized that this was not worth it for the money you pay for. Compared to other ones, this one IS lightweight and watery, but you have to wait for your skincare to completely absorb into the skin. Then you can apply this UV protectant without it being patchy and uneven. There’s is a light fragrance, so I don’t think this would suit sensitive skin.', 1, 0, 24, 12, 'img/product-211.jpg', 'img/product-212.jpg', 'img/product-214.jpg', NULL, '2022-08-26 20:02:13'),
(28, 'Clarins After Sun Refreshing After Sun Gel - For Face &amp; Body', 16, 'Fresh, non-greasy &amp; non-sticky gel texture penetrates instantly into skin.Enriched with botanical extracts &amp; anti-oxidants to quench sun damaged skin with refreshing coolness.Soothes &amp; moisturizes skin for 24 hours.Protects against free-radical damage while regenerating skin.Beautifies, extends &amp; intensifies tans.Infused with a pleasant scent that reminds you of the sun &amp; holidays.Leaves skin calm, soothed &amp; comfortable.Perfect for all skin types.', 1, 0, 26, 12, 'img/product-215.jpg', 'img/product-216.jpg', 'img/product-217.jpg', NULL, '2022-08-26 20:11:38');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `catalogID` (`catalogID`),
  ADD KEY `brandID` (`brandID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`catalogID`) REFERENCES `catalogs` (`catalogID`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`brandID`) REFERENCES `brands` (`brandID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
