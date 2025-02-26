-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2025-02-23 15:27:48
-- 伺服器版本： 10.4.32-MariaDB
-- PHP 版本： 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `bark_bijou`
--

-- --------------------------------------------------------

--
-- 資料表結構 `article`
--

CREATE TABLE `article` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `valid` tinyint(1) DEFAULT 1,
  `comment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `article`
--

INSERT INTO `article` (`id`, `title`, `content`, `created_date`, `valid`, `comment`) VALUES
(1, '想幫助流浪狗首先怎麼做？', '在路上看到瘦骨嶙峋的流浪狗，我們通常會心生憐憫，希望能給予狗狗幫助。不過，現實不如想像中簡單，在任何善意行動之前，要先有以下觀念，才不會帶給自己太大的負擔，也不會對狗狗造成負面影響哦！\r\n\r\n理性評估自身能力：救援、安頓、送養狗狗到適合的家庭，這之間的過程，需要耗費不少人力、時間與金錢。如果一時衝動帶回狗狗，一旦無法照護或送養困難，很難避免狗狗再次被遺棄，如此一來，不僅人類會陷入自責，對狗狗的心理也會造成二度傷害。建議在行動前，先理性評估自身能力，才能讓善心舉動有更圓滿的結局。\r\n\r\n不要貿然行動、需有耐心：在路上遇到流浪狗，不可輕舉妄動、貿然接近。有些狗狗因在外生活的負面經驗，可能懼怕人類，甚至出現攻擊行為；因此，最好的方式是先觀察，適時試探狗狗的性情，並根據其肢體語言進行判斷。面對人類的接近，若流浪犬出現吠叫等激烈反應，建議暫緩所有動作並避免直視狗狗的眼睛。如果狗狗願意主動走近，代表牠可能不具攻擊性，此時不可心急，可在原地輕喚或拿食物誘惑，等牠願意走到身旁，再慢慢伸手讓牠嗅聞、並輕慢地撫摸；倘若狗狗完全不抗拒，才能利用身邊現有的物品，如繩索或箱子帶牠們離開。\r\n\r\n花時間互動及培養信任：若浪浪不願意離開原先的地方，則要花點時間慢慢親近，和牠們有良好的互動。建立人犬之間的信任感，需要耐心等待與陪伴，千萬不要強迫牠們接受人類的善意，等牠們主動敞開心胸，才有助於牠們走向有愛的未來。\r\n\r\n流浪狗該如何安置？\r\n如果能順利將浪浪帶離原居住地，可依循以下方式處置：\r\n\r\n將狗狗帶到獸醫院掃描晶片，確認是「流浪犬」或「走失犬」，若為走失犬就可聯絡原飼主帶回。\r\n\r\n請獸醫幫狗狗做完整的身體檢查，驅蟲並施打預防針。若狗狗身體狀況異常，則需進一步接受治療；若狗狗健康無虞，則可進行絕育手術。\r\n\r\n延伸閱讀》狗狗絕育、結紮差在哪？絕育好處是什麼？手術費用多少？有補助嗎？狗狗絕育後注意事項有哪些？\r\n\r\n接著需要考量浪浪去向，若自身經濟與條件允許，把狗狗帶回家照顧是很棒的決定；如果無法自行照顧，可尋求身邊親友的飼養意願。另外，也可替狗狗規畫送養計畫，替牠們拍照、記錄故事並張貼相關社團，或是浪浪甘巴爹、台灣認養地圖等送養平台，也可參加各地認養活動、爭取國外送養計畫，替狗狗找到最適合的家。', '2025-02-22 16:16:59', 1, NULL),
(2, '你可以為浪浪做什麼？3種幫助流浪狗的方式', '1. 愛心捐款、捐飼料\r\n這應該是最直接能幫助到流浪狗的方式，因為有許多流浪動物之家、狗園、救援會等等都收容著不少數量的流浪狗，有著巨大的飼料、醫療花費，而部分的費用就由募款取得。\r\n如果想要幫助流浪狗的話，愛心捐款會是一個不錯的方法。但是，要特別注意的是，現在也有許多機構打著愛心捐款的名號卻將大家的愛心中飽私囊。\r\n因此，不妨在捐款之前，先上網查查機構是否合法，捐款是否有真正運用在流浪狗狗們身上。另外，除了找比較知名的流浪動物之家(例如：張媽媽流浪動物之家)，也可以考慮親自去到小型狗園作捐款。\r\n倘若查無資訊或是擔心不肖業者的話，也可以利用捐飼料的方式，讓愛心能夠真正的用在流浪狗身上。\r\n2. 流浪動物之家志工\r\n除了掏腰包愛心捐款之外，也可以選擇出力，以流浪動物之家志工的方式直接幫助流浪狗們。\r\n由於流浪動物之家平常會舉辦一些送養的活動，讓更多民眾認識、領養可愛的浪浪，因此會需要許多志工們的幫忙，不妨前往流浪狗之家的網站登記當志工。\r\n流浪動物之家志工內容根據不同的流浪狗之家也會有不同的需求，有些是幫忙領養活動、清掃狗園，或者是帶狗狗散步、洗澡、陪玩等等。\r\n可以依照自己能力以及流浪動物之家的安排，同時透過志工活動更加深入的了解流浪狗之家在為浪浪們做些甚麼。\r\n3. 以領養代替購買\r\n「以領養代替購買」並不是說叫大家馬上就去收養一隻流浪狗回家養，而是說如果自己或是身邊的人有打算要養狗的話，以領養代替購買就是對流浪狗最大的幫助。\r\n大多數的浪浪都是屬於米克斯犬，雖然不見得每個人都喜歡，但其實米克斯犬有著相當多的優點，且通常浪浪們在經過外面的流浪之後，對於主人都相當忠心也非常聰明。\r\n更重要的是，如果每個人都能以領養代替購買，讓流浪狗有個家，那麼，以繁衍品種犬為目的營利並造成流浪狗來源之一的繁殖場，也許就能從此漸漸消失。', '2025-02-22 16:25:34', 1, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `article_category`
--

CREATE TABLE `article_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `article_img`
--

CREATE TABLE `article_img` (
  `id` int(10) UNSIGNED NOT NULL,
  `article_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `comment`
--

CREATE TABLE `comment` (
  `id` int(11) UNSIGNED NOT NULL,
  `article_id` int(11) DEFAULT NULL,
  `content` text NOT NULL,
  `created_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `article_category`
--
ALTER TABLE `article_category`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `article_img`
--
ALTER TABLE `article_img`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `article`
--
ALTER TABLE `article`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `article_category`
--
ALTER TABLE `article_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `article_img`
--
ALTER TABLE `article_img`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
