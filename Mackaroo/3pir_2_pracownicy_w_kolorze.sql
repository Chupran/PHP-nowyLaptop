-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 17 Mar 2023, 08:32
-- Wersja serwera: 10.4.22-MariaDB
-- Wersja PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `3pir_2_pracownicy_w_kolorze`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `mock_data`
--

CREATE TABLE `mock_data` (
  `id` int(11) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `ip_address` varchar(20) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `mock_data`
--

INSERT INTO `mock_data` (`id`, `first_name`, `last_name`, `email`, `gender`, `ip_address`, `color`) VALUES
(1, 'Agnese', 'Leggate', 'aleggate0@artisteer.com', 'Female', '119.52.195.209', '#29554a'),
(2, 'Niki', 'Dossantos', 'ndossantos1@cbsnews.com', 'Male', '222.61.36.29', '#2e89d9'),
(3, 'Cherye', 'Catlow', 'ccatlow2@accuweather.com', 'Female', '235.15.6.114', '#cdd5aa'),
(4, 'Vevay', 'Cockshut', 'vcockshut3@g.co', 'Female', '227.120.221.236', '#4298fe'),
(5, 'Launce', 'Bernucci', 'lbernucci4@dot.gov', 'Male', '117.180.93.18', '#26c1f4'),
(6, 'Jordan', 'de Mendoza', 'jdemendoza5@pinterest.com', 'Female', '232.37.155.213', '#6fcd79'),
(7, 'Katrinka', 'Ritchings', 'kritchings6@cbsnews.com', 'Female', '169.191.197.204', '#3dd6b7'),
(8, 'Rusty', 'Ledster', 'rledster7@bloglovin.com', 'Male', '106.241.109.233', '#ab0131'),
(9, 'Mirabella', 'Cure', 'mcure8@ed.gov', 'Female', '22.13.80.134', '#3feebd'),
(10, 'Antons', 'Fellibrand', 'afellibrand9@macromedia.com', 'Male', '121.155.1.188', '#563152'),
(11, 'Clayborne', 'Massingham', 'cmassinghama@prweb.com', 'Male', '225.161.161.113', '#0b9dc0'),
(12, 'Maure', 'Whichelow', 'mwhichelowb@spiegel.de', 'Genderqueer', '152.87.40.242', '#898c1a'),
(13, 'Briant', 'MacCole', 'bmaccolec@themeforest.net', 'Male', '33.248.190.37', '#846748'),
(14, 'Bentlee', 'Galland', 'bgallandd@instagram.com', 'Male', '97.42.133.35', '#3edcea'),
(15, 'Tallia', 'Bonus', 'tbonuse@edublogs.org', 'Female', '40.38.42.88', '#2f3b33'),
(16, 'Ilka', 'Leonard', 'ileonardf@g.co', 'Female', '138.72.116.4', '#3c0e54'),
(17, 'Sholom', 'Cardiff', 'scardiffg@virginia.edu', 'Male', '66.251.222.138', '#ad57ce'),
(18, 'Fax', 'Witz', 'fwitzh@t.co', 'Genderfluid', '173.233.123.114', '#5508f7'),
(19, 'Glori', 'Diegan', 'gdiegani@examiner.com', 'Female', '62.130.57.30', '#ce8691'),
(20, 'Deeanne', 'Frostdicke', 'dfrostdickej@slate.com', 'Female', '17.115.92.123', '#ccf451'),
(21, 'Des', 'Marcham', 'dmarchamk@theguardian.com', 'Male', '8.175.3.242', '#89fef8'),
(22, 'Fabiano', 'Lazenbury', 'flazenburyl@businesswire.com', 'Male', '110.128.202.86', '#ef7bcc'),
(23, 'Donia', 'Barlee', 'dbarleem@yolasite.com', 'Female', '236.39.96.119', '#6b2878'),
(24, 'Borg', 'Tschursch', 'btschurschn@storify.com', 'Male', '58.218.85.170', '#208518'),
(25, 'Deina', 'Cicutto', 'dcicuttoo@sourceforge.net', 'Female', '1.15.97.132', '#8f1475'),
(26, 'Kaela', 'Peat', 'kpeatp@gizmodo.com', 'Female', '3.81.35.0', '#12eb04'),
(27, 'Alex', 'Howford', 'ahowfordq@over-blog.com', 'Male', '49.246.135.73', '#5021cf'),
(28, 'Forster', 'Gerding', 'fgerdingr@yahoo.com', 'Male', '216.7.6.32', '#bb5694'),
(29, 'Page', 'Olyunin', 'polyunins@themeforest.net', 'Male', '154.167.123.0', '#f445c6'),
(30, 'Thane', 'Mallock', 'tmallockt@ucla.edu', 'Male', '245.126.250.44', '#9e2dfa'),
(31, 'Fredek', 'Youles', 'fyoulesu@ebay.co.uk', 'Male', '73.28.100.171', '#19aca2'),
(32, 'Cathe', 'Tomaskov', 'ctomaskovv@chron.com', 'Polygender', '223.191.33.226', '#3a5f7d'),
(33, 'Cece', 'Baroux', 'cbarouxw@themeforest.net', 'Male', '50.143.202.108', '#f9b439'),
(34, 'Teri', 'Cromblehome', 'tcromblehomex@about.com', 'Female', '27.197.78.27', '#c10182'),
(35, 'Lynett', 'Rimbault', 'lrimbaulty@behance.net', 'Female', '252.198.195.151', '#ddeeaa'),
(36, 'La verne', 'Domotor', 'ldomotorz@pbs.org', 'Female', '247.91.253.127', '#b3e37d'),
(37, 'Lois', 'Breznovic', 'lbreznovic10@wunderground.com', 'Female', '203.32.218.34', '#fcb92e'),
(38, 'Benny', 'Dogerty', 'bdogerty11@si.edu', 'Female', '251.54.236.177', '#aad82f'),
(39, 'Codee', 'Kemster', 'ckemster12@jalbum.net', 'Female', '221.88.146.17', '#ca21a3'),
(40, 'Seth', 'Yarnold', 'syarnold13@fastcompany.com', 'Male', '103.115.6.103', '#5f3ebd'),
(41, 'Mart', 'Buckle', 'mbuckle14@mtv.com', 'Male', '65.68.215.1', '#94534b'),
(42, 'Mignon', 'Josefovic', 'mjosefovic15@weibo.com', 'Female', '135.52.222.188', '#b1af39'),
(43, 'Rich', 'Malmar', 'rmalmar16@drupal.org', 'Male', '248.233.186.254', '#7876f1'),
(44, 'Baird', 'Haliday', 'bhaliday17@sciencedaily.com', 'Male', '244.127.163.9', '#2cef5e'),
(45, 'Vonny', 'McPharlain', 'vmcpharlain18@4shared.com', 'Female', '183.149.168.187', '#35bacc'),
(46, 'Isak', 'Cresser', 'icresser19@dagondesign.com', 'Male', '114.180.14.0', '#2af3fb'),
(47, 'Cinnamon', 'Sibery', 'csibery1a@altervista.org', 'Female', '210.32.92.182', '#cf1c97'),
(48, 'Winnah', 'Cruse', 'wcruse1b@virginia.edu', 'Female', '57.164.69.123', '#44c741'),
(49, 'Elspeth', 'Mabson', 'emabson1c@vimeo.com', 'Female', '87.192.31.188', '#ffbabe'),
(50, 'Putnem', 'Mifflin', 'pmifflin1d@github.com', 'Male', '0.207.119.0', '#4f19ad');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
