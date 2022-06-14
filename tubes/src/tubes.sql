-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2022 at 07:18 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `bootstrap`
--

CREATE TABLE `bootstrap` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `judul` char(50) NOT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `author` char(35) NOT NULL,
  `link` char(100) NOT NULL,
  `dibuat_dengan` char(40) NOT NULL,
  `browser_yang_kompatibel` char(50) NOT NULL,
  `responsive` char(4) NOT NULL,
  `ketergantungan` char(50) NOT NULL,
  `bootstrap_versi` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bootstrap`
--

INSERT INTO `bootstrap` (`id`, `gambar`, `judul`, `keterangan`, `author`, `link`, `dibuat_dengan`, `browser_yang_kompatibel`, `responsive`, `ketergantungan`, `bootstrap_versi`) VALUES
(2, '62a475a8e030dbootstrap-card-grid.jpg', 'BOOTSTRAP CARD GRID', 'Bootstrap cards for use in blogs, portfolios, or eCommerce sites using linear-gradients with dark th', 'Nikki Peel', 'https://codepen.io/nikki-peel/pen/RwavQer', 'HTML / CSS', 'Chrome, Edge, Firefox, Opera, Safari', 'Ya', 'font-awesome.css', '4.5.0'),
(22, '62a4765ecc2c7events-card-widget.png', 'BOOTSTRAP EVENTS CARD WIDGET', '', 'Dey Dey', 'https://www.bootdey.com/snippets/view/events-card-widget', 'HTML / CSS', 'Chrome, Edge, Firefox, Opera, Safari', 'Ya', '-', '4.4.1'),
(24, '62a48b149d934news-card-animation.png', 'BOOTSTRAP 4 NEWS CARD WITH ANIMATION', '', 'BBBootstrap Team', 'https://bbbootstrap.com/snippets/news-card-animation-28849510', 'HTML / CSS / JS', 'Chrome, Edge, Firefox, Opera, Safari', 'Ya', 'font-awesome.css, materialize.css, jquery.js', '4.0.0'),
(25, '62a48bb9027ebminimal-statistics-bootstrap-cards.png', 'BOOTSTRAP CARDS', 'Statistics on minimal cards. Statistics on minimal cards with title &amp; sub title.', 'les', 'https://codepen.io/lesliesamafful/pen/oNXgmBG', 'HTML / CSS / JS', 'Chrome, Edge, Firefox, Opera, Safari', 'Ya', 'stack-responsive-bootstrap-4-admin-template.css', '4.4.1'),
(26, '62a4982e6ce813-bootstrap-cards.jpg', 'BOOTSTRAP CARDS', '', 'Bekir BAYAR', 'https://bootstrapious.com/p/bootstrap-cards', 'HTML / CSS', 'Chrome, Edge, Firefox, Opera, Safari', 'Ya', 'font-awesome.css, jquery.js', '4.1.1'),
(27, '62a499d07ef37bootstrap-cards-your-next-trip.jpg', 'BOOTSTRAP CARDS', '', 'Ericnsamba', 'https://codepen.io/Ericode7/pen/EdQBPm', 'HTML / CSS', 'Chrome, Edge, Firefox, Opera, Safari', 'Ya', '-', '3.2.0'),
(28, '62a49a2677e6dbootstrap-card-tile-layout.jpg', 'BOOTSTRAP CARD TILE LAYOUT', 'Bootstrap cards in tile formation. Ideal for blog posts.', 'Matt Ruddick', 'https://codepen.io/MattRuddick/pen/xaZXgE', 'HTML / CSS / JS', 'Chrome, Edge, Firefox, Opera, Safari', 'Ya', 'font-awesome.css', '4.0.0'),
(29, '62a49a741ddf9bootstrap-quote.png', 'BOOTSTRAP QUOTE', 'Build a nicely styled quote in Bootstrap 4.', 'Bootstrapious', 'https://bootstrapious.com/p/bootstrap-quote', 'HTML / CSS / JS', 'Chrome, Edge, Firefox, Opera, Safari', 'Ya', 'font-awesome.css, jquery.js', '4.3.1'),
(30, '62a49ab94d943bootstrap-weather-card-ui.png', 'BOOTSTRAP WEATHER CARD UI', '', 'anik117', 'https://bootsnipp.com/snippets/Bq1eE', '  with HTML / CSS', 'Chrome, Edge, Firefox, Opera, Safari', 'Ya', 'linearicons.css', '4.0.0');

-- --------------------------------------------------------

--
-- Table structure for table `css`
--

CREATE TABLE `css` (
  `id` int(11) NOT NULL,
  `gambar` char(40) NOT NULL,
  `judul` char(50) NOT NULL,
  `author` char(35) NOT NULL,
  `link` char(100) NOT NULL,
  `dibuat_dengan` char(40) NOT NULL,
  `browser_yang_kompatibel` char(50) NOT NULL,
  `responsive` char(5) NOT NULL,
  `ketergantungan` char(50) NOT NULL,
  `bootstrap_versi` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `css`
--

INSERT INTO `css` (`id`, `gambar`, `judul`, `author`, `link`, `dibuat_dengan`, `browser_yang_kompatibel`, `responsive`, `ketergantungan`, `bootstrap_versi`) VALUES
(5, '629a8c198c7f5.jpg', 'fgh', 'fgh', 'fgh', 'html, css', 'fgh', 'fgh', 'fgh', 'fgh'),
(7, '629a8ddabb8a9.png', 'BOOTSTRAP 4 CARD WITH BACKGROUND IMAGE', 'Oz Coruhlu', 'https://codepen.io/creativemanner/pen/NWrNWrd', 'HTML / CSS (SCSS)', 'Chrome, Edge, Firefox, Opera, Safari', 'YAA', 'font-awesome.css', '4.5.0'),
(9, '629c28c1cc7a4logo.png', 'CARD HOVER EFFECT', 'Kalpesh Singh Rajpurohit', 'https://codepen.io/kalpeshpurohit/pen/ZEWVrKj', 'HTML / CSS', 'Chrome, Edge, Firefox, Opera, Safari', 'Ya', '-', '4.3.1'),
(10, '629c29cda8529story-image1.jpg', 'BOOTSTRAP 5 ECOMMERCE CARDS', 'Stew', 'https://bbbootstrap.com/snippets/bootstrap-5-bootstrap-5-ecommerce-cards-70379369', 'HTML / CSS', 'Chrome, Edge, Firefox, Opera, Safari', 'yes', 'font-awesome.css', '4.0.1'),
(11, '629c426c917acGod_of_War_II_cover.jpg', 'BOOTSTRAP CARD GRID', 'Nikki Peel', 'https://codepen.io/nikki-peel/pen/RwavQer', 'HTML / CSS', 'Chrome, Edge, Firefox, Opera, Safari', 'Ya', 'font-awesome.css', '4.5.0');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin123', '$2y$10$PF4R2UBMrnAcMB.0OlrVFeY.j3AqBpHvlZKonVjFnF3m8lydKNK2i');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bootstrap`
--
ALTER TABLE `bootstrap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `css`
--
ALTER TABLE `css`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bootstrap`
--
ALTER TABLE `bootstrap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `css`
--
ALTER TABLE `css`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
