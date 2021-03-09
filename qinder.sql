-- --------------------------------------------------------
-- Hôte :                        localhost
-- Version du serveur:           5.7.24 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Listage de la structure de la base pour qinder
CREATE DATABASE IF NOT EXISTS `qinder` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `qinder`;

-- Listage de la structure de la table qinder. q
CREATE TABLE IF NOT EXISTS `q` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) NOT NULL,
  `likes` int(11) NOT NULL DEFAULT '0',
  `dislikes` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

-- Listage des données de la table qinder.q : ~65 rows (environ)
/*!40000 ALTER TABLE `q` DISABLE KEYS */;
INSERT INTO `q` (`id`, `url`, `likes`, `dislikes`) VALUES
	(1, 'https://cdn.dribbble.com/users/1913212/screenshots/6414669/01.jpg', 1, 0),
	(2, 'https://cdn.dribbble.com/users/1913212/screenshots/6414661/02.jpg', 0, 0),
	(3, 'https://cdn.dribbble.com/users/2984909/screenshots/6375612/q_logo-01_4x.jpg', 4, 1),
	(4, 'https://cdn.dribbble.com/users/495010/screenshots/6332464/quantum-dot.jpg', 0, 1),
	(5, 'https://cdn.dribbble.com/users/495010/screenshots/6334341/q-d.jpg', 2, 1),
	(6, 'https://cdn.dribbble.com/users/2021586/screenshots/6362821/bq-logo_4x.png', 1, 1),
	(7, 'https://cdn.dribbble.com/users/501966/screenshots/6317628/birdq_4x.jpg', 2, 1),
	(8, 'https://cdn.dribbble.com/users/3405494/screenshots/6278208/rect1510_4x.png', 2, 0),
	(9, 'https://cdn.dribbble.com/users/1919466/screenshots/6178330/quizwer.png', 0, 1),
	(10, 'https://cdn.dribbble.com/users/1935992/screenshots/6186813/01_4x.jpg', 3, 2),
	(11, 'https://cdn.dribbble.com/users/1365445/screenshots/5891947/quotesing-logo.png', 2, 0),
	(12, 'https://cdn.dribbble.com/users/1609948/screenshots/5557851/artboard_1_4x.jpg', 0, 0),
	(13, 'https://cdn.dribbble.com/users/1815004/screenshots/4913629/qazale.jpg', 2, 0),
	(14, 'https://cdn.dribbble.com/users/1189478/screenshots/4953942/qatib-shot.png', 3, 0),
	(15, 'https://cdn.dribbble.com/users/1829216/screenshots/5360547/untitled-2_4x.jpg', 1, 0),
	(16, 'https://cdn.dribbble.com/users/2068059/screenshots/5455224/q-brand-logo.png', 2, 0),
	(17, 'https://cdn.dribbble.com/users/815597/screenshots/4080701/q_grid_dribbble-01.png', 3, 1),
	(18, 'https://cdn.dribbble.com/users/815597/screenshots/4077933/arrow_q-01.png', 0, 0),
	(19, 'https://cdn.dribbble.com/users/978160/screenshots/2431591/ql-minimal-logo-design.jpg', 2, 1),
	(20, 'https://cdn.dribbble.com/users/28308/screenshots/1138067/query_logo-01.png', 2, 0),
	(21, 'https://cdn.dribbble.com/users/278287/screenshots/1204035/q-updated.jpg', 1, 0),
	(22, 'https://cdn.dribbble.com/users/278287/screenshots/1124498/q-wip.jpg', 0, 0),
	(23, 'https://cdn.dribbble.com/users/1362380/screenshots/5744530/ddd_4x.png', 2, 0),
	(24, 'https://cdn.dribbble.com/users/418288/screenshots/6454484/letters_dribble-17_4x.png', 1, 1),
	(25, 'https://cdn.dribbble.com/users/297873/screenshots/6358046/q-06_final_dribbble_4x.jpg', 1, 1),
	(26, 'https://cdn.dribbble.com/users/2694531/screenshots/6180714/shot-cropped-1552613407358.png', 2, 0),
	(27, 'https://cdn.dribbble.com/users/1693462/screenshots/5313697/plan_de_travail_1_copie_3-100.jpg', 2, 3),
	(28, 'https://cdn.dribbble.com/users/846370/screenshots/6525201/logo_1381.jpg', 1, 1),
	(29, 'https://cdn.dribbble.com/users/695545/screenshots/5589895/q-10_4x.jpg', 1, 0),
	(30, 'https://cdn.dribbble.com/users/1559930/screenshots/5774922/dribbble-01.png', 0, 0),
	(31, 'https://cdn.dribbble.com/users/230124/screenshots/4296888/qampersand1.png', 3, 0),
	(32, 'https://cdn.dribbble.com/users/1312159/screenshots/4493879/letter-q-dribbble.png', 1, 2),
	(33, 'https://cdn.dribbble.com/users/1278378/screenshots/6263216/q-tiaose_4x.jpg', 0, 0),
	(34, 'https://cdn.dribbble.com/users/2030073/screenshots/6164472/asset_5.png', 1, 0),
	(35, 'https://cdn.dribbble.com/users/1171903/screenshots/4521213/qtalk-logo-solution-_recovered_.jpg', 3, 0),
	(36, 'https://cdn.dribbble.com/users/846370/screenshots/6519981/logo_1438.jpg', 4, 0),
	(37, 'https://cdn.dribbble.com/users/2884205/screenshots/6024275/q-01_4x.png', 0, 0),
	(38, 'https://cdn.dribbble.com/users/1479564/screenshots/6421844/26.jpg', 2, 0),
	(39, 'https://cdn.dribbble.com/users/1713810/screenshots/6513357/q_4x.jpg', 2, 0),
	(40, 'https://cdn.dribbble.com/users/1584156/screenshots/4521952/17_q_quest_drbl.jpg', 1, 0),
	(41, 'https://cdn.dribbble.com/users/1207383/screenshots/5395643/eq-logo_4x.jpg', 0, 0),
	(42, 'https://cdn.dribbble.com/users/2321724/screenshots/6491924/36days_q.jpg', 1, 0),
	(43, 'https://cdn.dribbble.com/users/2110127/screenshots/4499393/untitled-1.jpg', 0, 0),
	(44, 'https://cdn.dribbble.com/users/180271/screenshots/6248601/q3_4x.jpg', 2, 0),
	(45, 'https://cdn.dribbble.com/users/2239878/screenshots/6322734/parrot_letter_q_logo_1x.jpg', 4, 1),
	(46, 'https://cdn.dribbble.com/users/1158237/screenshots/6445841/dbd_drib_1x1_1600x1600_36-days-q_4x.png', 1, 0),
	(47, 'https://cdn.dribbble.com/users/2363177/screenshots/6359181/q_letter_4x.jpg', 1, 1),
	(48, 'https://cdn.dribbble.com/users/2301819/screenshots/6360150/q_dribbble-02_4x.png', 2, 0),
	(49, 'https://cdn.dribbble.com/users/137192/screenshots/4517628/q.png', 2, 0),
	(50, 'https://cdn.dribbble.com/users/1090562/screenshots/6362009/q-800x600-01_4x.jpg', 1, 0),
	(51, 'https://cdn.dribbble.com/users/873445/screenshots/6361268/q_dribbble.gif', 1, 0),
	(52, 'https://cdn.dribbble.com/users/462448/screenshots/6441532/08102016_dribbble-layout-new-1600x1200_edit__1__4x.jpg', 1, 1),
	(53, 'https://cdn.dribbble.com/users/1672258/screenshots/5336805/q-new-black_4x.png', 2, 0),
	(54, 'https://cdn.dribbble.com/users/86317/screenshots/5559375/in_touch_magazine_q_1_dribbble_4x.jpg', 5, 1),
	(55, 'https://cdn.dribbble.com/users/17126/screenshots/4173116/letter-q.png', 2, 2),
	(56, 'https://cdn.dribbble.com/users/1638653/screenshots/4460660/q.gif', 3, 0),
	(57, 'https://cdn.dribbble.com/users/462982/screenshots/4492799/q_v01_dribbble.jpg', 0, 1),
	(58, 'https://cdn.dribbble.com/users/2405049/screenshots/5645078/q_queen_4x.png', 3, 1),
	(59, 'https://cdn.dribbble.com/users/1358460/screenshots/2941185/dribbble-quest.jpg', 0, 0),
	(60, 'https://cdn.dribbble.com/users/557720/screenshots/5472555/q_4x.jpg', 0, 0),
	(61, 'https://cdn.dribbble.com/users/1193858/screenshots/3736499/q.jpg', 2, 2),
	(62, 'https://cdn.dribbble.com/users/1843676/screenshots/4207046/q.png', 2, 0),
	(63, 'https://cdn.dribbble.com/users/846370/screenshots/6519981/logo_1438.jpg', 3, 0),
	(64, 'https://cdn.dribbble.com/users/2007184/screenshots/5302340/quetzalcoatlus_4x.jpg', 4, 1),
	(65, 'https://cdn.dribbble.com/users/86317/screenshots/5559375/in_touch_magazine_q_1_dribbble_4x.jpg', 3, 0);
/*!40000 ALTER TABLE `q` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
