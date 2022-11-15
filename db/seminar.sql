-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 15, 2022 at 11:00 AM
-- Server version: 10.3.36-MariaDB-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zrhngjpd_seminarweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `periode` mediumtext NOT NULL,
  `narasumber` varchar(255) NOT NULL,
  `mc` varchar(255) NOT NULL,
  `kontak` varchar(255) NOT NULL,
  `deskripsi` mediumtext NOT NULL,
  `kuota` mediumtext NOT NULL,
  `mulai` mediumtext NOT NULL,
  `selesai` mediumtext NOT NULL,
  `file` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `gform` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`id`, `nama`, `periode`, `narasumber`, `mc`, `kontak`, `deskripsi`, `kuota`, `mulai`, `selesai`, `file`, `gambar`, `gform`) VALUES
(8, 'Teknik Menjauhi Gawai', 'Jan 1, 2020 10:00:00', 'Manusia', 'Manusia', '0812992682', 'Lorem ipsum', '100', '1 Januari 07:00', '1 Januari 14:00', '1_7.pdf', '1_12.jpg', 'https://forms.gle/e7GVWA9bTdydVc7y7'),
(9, 'Fullstack Developer', 'Feb 1, 2020 09:00:00', 'Manusia', 'Manusia', '0812992682', 'Lorem', '100', '1 Februari 2022 09:00', '1 Februari 2022 12:00', '1_8.pdf', '1_13.jpg', 'https://forms.gle/SJHYXoRPbtgWuhnP7'),
(10, 'Cara Makan Menggunakan Sendok', 'Mar 5, 2023 09:00:00', 'Manusia', 'Manusia', '0812992682', 'Lorem', '1', '5 Maret 2023 07:00', '5 Maret 2023 08:00', '1_9.pdf', '1_14.jpg', 'https://forms.gle/s9k887NuFNmsXRk58'),
(11, 'Teknik Menjauhi Gawai', 'Jan 1, 2020 10:00:00', 'Manusia', 'Manusia', '0812992682', 'Lorem ipsum', '100', '1 Januari 07:00', '1 Januari 14:00', '1_7.pdf', '1_12.jpg', 'https://forms.gle/e7GVWA9bTdydVc7y7'),
(12, 'Fullstack Developer', 'Feb 1, 2020 09:00:00', 'Manusia', 'Manusia', '0812992682', 'Lorem', '100', '1 Februari 2022 09:00', '1 Februari 2022 12:00', '1_8.pdf', '1_13.jpg', 'https://forms.gle/SJHYXoRPbtgWuhnP7'),
(13, 'Cara Makan Menggunakan Sendok', 'Mar 5, 2023 09:00:00', 'Manusia', 'Manusia', '0812992682', 'Lorem', '1', '5 Maret 2023 07:00', '5 Maret 2023 08:00', '1_9.pdf', '1_14.jpg', 'https://forms.gle/s9k887NuFNmsXRk58'),
(14, 'Teknik Menjauhi Gawai', 'Jan 1, 2020 10:00:00', 'Manusia', 'Manusia', '0812992682', 'Lorem ipsum', '100', '1 Januari 07:00', '1 Januari 14:00', '1_7.pdf', '1_12.jpg', 'https://forms.gle/e7GVWA9bTdydVc7y7'),
(15, 'Fullstack Developer', 'Feb 1, 2020 09:00:00', 'Manusia', 'Manusia', '0812992682', 'Lorem', '100', '1 Februari 2022 09:00', '1 Februari 2022 12:00', '1_8.pdf', '1_13.jpg', 'https://forms.gle/SJHYXoRPbtgWuhnP7'),
(16, 'Cara Makan Menggunakan Sendok', 'Mar 5, 2023 09:00:00', 'Manusia', 'Manusia', '0812992682', 'Lorem', '1', '5 Maret 2023 07:00', '5 Maret 2023 08:00', '1_9.pdf', '1_14.jpg', 'https://forms.gle/s9k887NuFNmsXRk58'),
(17, 'Teknik Menjauhi Gawai', 'Jan 1, 2020 10:00:00', 'Manusia', 'Manusia', '0812992682', 'Lorem ipsum', '100', '1 Januari 07:00', '1 Januari 14:00', '1_7.pdf', '1_12.jpg', 'https://forms.gle/e7GVWA9bTdydVc7y7'),
(18, 'Fullstack Developer', 'Feb 1, 2020 09:00:00', 'Manusia', 'Manusia', '0812992682', 'Lorem', '100', '1 Februari 2022 09:00', '1 Februari 2022 12:00', '1_8.pdf', '1_13.jpg', 'https://forms.gle/SJHYXoRPbtgWuhnP7'),
(19, 'Cara Makan Menggunakan Sendok', 'Mar 5, 2023 09:00:00', 'Manusia', 'Manusia', '0812992682', 'Lorem', '1', '5 Maret 2023 07:00', '5 Maret 2023 08:00', '1_9.pdf', '1_14.jpg', 'https://forms.gle/s9k887NuFNmsXRk58'),
(20, 'Teknik Menjauhi Gawai', 'Jan 1, 2020 10:00:00', 'Manusia', 'Manusia', '0812992682', 'Lorem ipsum', '100', '1 Januari 07:00', '1 Januari 14:00', '1_7.pdf', '1_12.jpg', 'https://forms.gle/e7GVWA9bTdydVc7y7'),
(21, 'Fullstack Developer', 'Feb 1, 2020 09:00:00', 'Manusia', 'Manusia', '0812992682', 'Lorem', '100', '1 Februari 2022 09:00', '1 Februari 2022 12:00', '1_8.pdf', '1_13.jpg', 'https://forms.gle/SJHYXoRPbtgWuhnP7'),
(22, 'Cara Makan Menggunakan Sendok', 'Mar 5, 2023 09:00:00', 'Manusia', 'Manusia', '0812992682', 'Lorem', '1', '5 Maret 2023 07:00', '5 Maret 2023 08:00', '1_9.pdf', '1_14.jpg', 'https://forms.gle/s9k887NuFNmsXRk58'),
(23, 'Teknik Menjauhi Gawai', 'Jan 1, 2020 10:00:00', 'Manusia', 'Manusia', '0812992682', 'Lorem ipsum', '100', '1 Januari 07:00', '1 Januari 14:00', '1_7.pdf', '1_12.jpg', 'https://forms.gle/e7GVWA9bTdydVc7y7'),
(24, 'Fullstack Developer', 'Feb 1, 2020 09:00:00', 'Manusia', 'Manusia', '0812992682', 'Lorem', '100', '1 Februari 2022 09:00', '1 Februari 2022 12:00', '1_8.pdf', '1_13.jpg', 'https://forms.gle/SJHYXoRPbtgWuhnP7'),
(25, 'Cara Makan Menggunakan Sendok', 'Mar 5, 2023 09:00:00', 'Manusia', 'Manusia', '0812992682', 'Lorem', '1', '5 Maret 2023 07:00', '5 Maret 2023 08:00', '1_9.pdf', '1_14.jpg', 'https://forms.gle/s9k887NuFNmsXRk58'),
(26, 'Cara Makan Menggunakan Sendok', 'Mar 5, 2023 09:00:00', 'Manusia', 'Manusia', '0812992682', 'Lorem', '1', '5 Maret 2023 07:00', '5 Maret 2023 08:00', '1_9.pdf', '1_14.jpg', 'https://forms.gle/s9k887NuFNmsXRk58'),
(27, 'Teknik Menjauhi Gawai', 'Jan 1, 2020 10:00:00', 'Manusia', 'Manusia', '0812992682', 'Lorem ipsum', '100', '1 Januari 07:00', '1 Januari 14:00', '1_7.pdf', '1_12.jpg', 'https://forms.gle/e7GVWA9bTdydVc7y7'),
(28, 'Fullstack Developer', 'Feb 1, 2020 09:00:00', 'Manusia', 'Manusia', '0812992682', 'Lorem', '100', '1 Februari 2022 09:00', '1 Februari 2022 12:00', '1_8.pdf', '1_13.jpg', 'https://forms.gle/SJHYXoRPbtgWuhnP7'),
(29, 'Teknik Menjauhi Gawai', 'Jan 1, 2020 10:00:00', 'Manusia', 'Manusia', '0812992682', 'Lorem ipsum', '100', '1 Januari 07:00', '1 Januari 14:00', '1_7.pdf', '1_12.jpg', 'https://forms.gle/e7GVWA9bTdydVc7y7'),
(30, 'Fullstack Developer', 'Feb 1, 2020 09:00:00', 'Manusia', 'Manusia', '0812992682', 'Lorem', '100', '1 Februari 2022 09:00', '1 Februari 2022 12:00', '1_8.pdf', '1_13.jpg', 'https://forms.gle/SJHYXoRPbtgWuhnP7'),
(31, 'Cara Makan Menggunakan Sendok', 'Mar 5, 2023 09:00:00', 'Manusia', 'Manusia', '0812992682', 'Lorem', '1', '5 Maret 2023 07:00', '5 Maret 2023 08:00', '1_9.pdf', '1_14.jpg', 'https://forms.gle/s9k887NuFNmsXRk58');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `subject` mediumtext NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `subject`, `email`, `message`) VALUES
(1, 'Anton', 'Seminar', 'anton@gmail.com', 'Ingin membuat seminar'),
(7, 'Sinta', 'Seminar', 'sinta@gmail.com', 'seminarr');

-- --------------------------------------------------------

--
-- Table structure for table `doc`
--

CREATE TABLE `doc` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `1st-img` varchar(255) NOT NULL,
  `2nd-img` varchar(255) NOT NULL,
  `3rd-img` varchar(255) NOT NULL,
  `4th-img` varchar(255) NOT NULL,
  `5th-img` varchar(255) NOT NULL,
  `6th-img` varchar(255) NOT NULL,
  `ppt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doc`
--

INSERT INTO `doc` (`id`, `nama`, `video`, `image`, `1st-img`, `2nd-img`, `3rd-img`, `4th-img`, `5th-img`, `6th-img`, `ppt`) VALUES
(14, 'Teknik Menjauhi Gawai', 'https://www.youtube.com/embed/b8ZCha_7wAI', '1_12.jpg', '2nd_2.jpg', '3rd_3.jpg', '4th_3.jpg', '6th_4.jpg', '2nd_3.jpg', '5th_3.jpg', 'M12 Produk Transformasi.pdf'),
(15, 'Fullstack Developer', 'https://www.youtube.com/embed/ll4d5Lt-Ie8', '1_13.jpg', 'a_7.jpg', 'b_7.jpg', 'c_7.jpg', 'd_6.jpg', 'e_6.jpg', 'f_6.jpg', 'M12 Produk Transformasi_1.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doc`
--
ALTER TABLE `doc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `doc`
--
ALTER TABLE `doc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
