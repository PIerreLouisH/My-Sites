-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: mysql-chin.alwaysdata.net
-- Generation Time: Sep 08, 2018 at 11:45 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chin_bibli`
--

-- --------------------------------------------------------

--
-- Table structure for table `bibli`
--

CREATE TABLE `bibli` (
  `numBibli` int(11) NOT NULL,
  `motFr` varchar(50) NOT NULL,
  `Prononciation` varchar(50) NOT NULL,
  `SigneChi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bibli`
--

INSERT INTO `bibli` (`numBibli`, `motFr`, `Prononciation`, `SigneChi`) VALUES
(11, 'je', 'wǒ', '我'),
(12, 'tu', 'nǐ', '你'),
(13, 'ceci', 'shè', '这'),
(20, 'Combien', 'duōshǎo ', '多少'),
(21, 'argent', 'qián ', '钱'),
(22, 'mademoiselle', 'xiǎojiě', '小姐'),
(23, 'classificateur chose', 'ge', '个'),
(24, 'cela', 'nà', '那'),
(25, 'zero', ' líng ', '零'),
(26, 'un', ' yī ', '一'),
(27, 'deux', ' èr ', '二'),
(28, 'trois', ' sān ', '三'),
(29, 'quatre', ' sì ', '四'),
(30, 'cinq', ' wǔ ', '五'),
(31, 'six', ' liù ', '六'),
(32, 'sept', 'qī', '七'),
(33, 'huit', ' bā ', '八 	'),
(34, 'neuf', ' jiǔ ', '九'),
(35, 'dix', 'shí', '十'),
(36, 'cent', ' bǎi ', '百'),
(37, 'mille', ' qiān ', '千'),
(38, 'dix mille ', ' wàn ', '万'),
(39, 'classificateur argent', ' kuài ', '块 	'),
(40, 'Monsieur', ' xiānsheng ', '先生'),
(41, 'tu / toi', 'nǐ', '你'),
(42, 'je / moi', ' wǒ ', '我'),
(43, 'il / lui', ' tā ', '他'),
(44, 'elle', ' tā ', '她'),
(45, 'vous politesse', ' nín ', '您'),
(46, 'manger', 'chī', '吃'),
(47, 'boire', ' hē ', '喝'),
(48, 'quoi / quel', ' shénme ', '什么'),
(49, 'deux quantité', 'liǎng', '两'),
(50, 'baozi', 'bāozi', '包子'),
(51, 'classificateur verre / coupe', 'bēi', '杯'),
(52, 'thé', 'chá', '茶'),
(53, 'au total', 'yígòng', '一共'),
(54, 'merci', 'xièxie', '谢谢'),
(55, 'acheter', ' mǎi ', '买'),
(56, 'chose', 'dōngxi', '东西'),
(57, 'est', 'dōng', '东'),
(58, 'ouest', 'xī', '西'),
(59, 'bonjour (matin)', 'zǎo a ', '早啊'),
(60, 'tôt', 'zǎo', '早'),
(61, 'particule exclamative', 'a', '啊'),
(62, 'madame, épouse', ' tàitai ', '太太'),
(63, 'chou chinois', 'báicài', '白菜'),
(64, 'blanc', 'bái', '白'),
(65, 'légume plat', 'cài', '菜'),
(66, 'bon à manger', 'hǎochī', '好吃'),
(67, 'bon', 'hǎo', '好'),
(68, 'particule interrogative Q fermées', 'ma', '吗'),
(69, '500 grammes, une livre', 'jīn', '斤'),
(70, 'combien (<10)', 'jǐ', '几'),
(71, 'vouloir', 'yào', '要'),
(72, 'Donner', 'gěi', '给'),
(73, 'pronom pluriel', 'men', '们'),
(74, 'avoir', 'yǒu', '有'),
(75, 'ne pas (pour avoir)', 'méi', '沒'),
(76, 'Japon', 'Rìběn', '日本'),
(77, 'USA', 'Měiguó', '美国'),
(78, 'pays', 'guó', '国'),
(79, 'Chine', 'Zhōngguó', '中国'),
(80, 'voiture', 'chē', '车'),
(81, 'désolé / pardon', 'duìbuqǐ', '对不起'),
(82, 'négation', 'bù/bú ', '不'),
(83, 'vendre', 'mài', '卖'),
(84, 'classificateur sorte, variété, genre', 'zhǒng', '种'),
(85, 'très', 'hěn', '很'),
(86, 'trop', 'tài', '太'),
(87, 'particule', 'le', '了'),
(88, 'cher, onéreux', 'guì', '贵'),
(89, 'bon marché, pas cher', 'piányi', '便宜'),
(90, 'un petit peu', 'yìdiǎn er', '一点儿'),
(91, 'point', 'diǎn', '点'),
(92, 'être ok, acceptable', 'xíng', '行'),
(93, 'payer', 'fù ', '付'),
(94, 'faire une réduction', 'dǎzhé', '打折'),
(95, 'pouvoir (adverbe)', 'kěyǐ', '可以'),
(96, 'payer par carte bancaire', 'shuākǎ', '刷卡'),
(97, 'recevoir, accepter un moyen de paiement', 'shōu', '收'),
(98, 'carte de crédit', 'xìnyòngkǎ', '信用卡'),
(99, 'alors, dans ce cas', 'nàme', '那么'),
(100, 'argent liquide', 'xiànjīn', '现金'),
(101, 'chèque', 'zhīpiào', '支票'),
(102, 'OH', 'ō', '噢'),
(103, 'au fait', 'duì le ', '对了'),
(104, 'etre exact, etre correct', 'duì', '对'),
(105, 'classificateur livre', 'běn', '本'),
(106, 'nouveau, neuf', 'xīn', '新'),
(107, 'ancien, vieux', 'jiù', '旧'),
(108, 'livre', 'shū', '书'),
(109, 'être venu, être arrivé', 'lái le ', '来了'),
(110, 'venir', 'lái', '来'),
(111, 'frapper, taper', 'dǎ', '打'),
(112, 'téléphoner', 'dǎ diànhuà ', '打电话'),
(113, 'téléphone', 'diàn huà ', '电话'),
(114, 'particule appartenance', 'de', '的'),
(115, 'numero', 'hào', '号'),
(116, 'être', 'shì', '是'),
(117, 'se nommer (nom de famille)', 'xìng', '姓'),
(118, 'je vous en prie, de rien', 'bú kèqi ', '不客气 	'),
(119, 'être poli', 'kèqi', '客气 	'),
(120, 'qui', ' shuí / shéi ', '谁'),
(121, 'changer, échanger', 'huàn', '换'),
(122, 'dollard américain', 'měijīn', '美金'),
(123, 'dollard taiwanais', 'táibì', '台币'),
(124, 'compter', 'diǎn', '点'),
(125, 'priez de, veuillez', 'qǐng', '请'),
(126, 'remplir un formulaire', 'tiánbiǎo', '填表'),
(127, 'formulaire', ' biǎo ', '表'),
(128, 'remplir', 'tián', '填'),
(129, 'classificateur objet plat', 'zhāng', '张'),
(130, 'tous', 'dōu', '都'),
(131, 'chèque de voyage', 'lǚxíng zhīpiào', '旅行支票'),
(132, 'voyager', 'lǚxíng', '旅行'),
(133, 'attendre', 'děng', '等'),
(134, 'un moment, un instant', 'yíxià', '一下');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bibli`
--
ALTER TABLE `bibli`
  ADD PRIMARY KEY (`numBibli`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bibli`
--
ALTER TABLE `bibli`
  MODIFY `numBibli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
