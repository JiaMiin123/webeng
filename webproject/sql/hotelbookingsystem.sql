-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2023 at 03:24 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotelbookingsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoiceid` int(100) NOT NULL,
  `username` varchar(400) NOT NULL,
  `useremail` varchar(400) NOT NULL,
  `invoicedate` date NOT NULL,
  `roomname` varchar(400) NOT NULL,
  `price` varchar(400) NOT NULL,
  `tax` varchar(400) NOT NULL,
  `total` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoiceid`, `username`, `useremail`, `invoicedate`, `roomname`, `price`, `tax`, `total`) VALUES
(1627, 'ng', 'pein@hotmail.my', '2023-06-30', 'Double Room', '150.00', '15', '165'),
(5933, 'as', 'QW@GMAILS.P', '2023-06-30', 'Double Room', '150.00', '15', '165');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `roomid` int(11) NOT NULL,
  `roomname` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `capacity` int(11) DEFAULT NULL,
  `facilities` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`roomid`, `roomname`, `price`, `description`, `capacity`, `facilities`) VALUES
(1, 'Single Room', '90.00', 'Our Single Room at UUM Hotel offers a cozy and comfortable haven for solo travelers. Step into a\r\n                  well-appointed space designed with your needs in mind. The room features a comfortable single bed\r\n                  adorned with plush linens, ensuring a restful night\'s sleep. Relax in a tastefully decorated\r\n                  environment that combines modern aesthetics with a touch of warmth. Catch up on work or connect with\r\n                  loved ones using the convenient work desk and complimentary high-speed Wi-Fi. Unwind in the private\r\n                  en-suite bathroom, equipped with modern fixtures and luxurious amenities. The Single Room provides a\r\n                  peaceful retreat for solo travelers seeking both convenience and comfort during their stay.</p>\r\n            ', 2, '2 Rooms, 1 Bathroom, 1 Balcony, 1 Sofa'),
(2, 'Double Room', '150.00', 'Experience the perfect balance of comfort and style in our Double Room at UUM Hotel. Designed for\r\n                  couples or travelers seeking shared accommodation, the room features a spacious and inviting\r\n                  atmosphere. Sink into the comfort of a plush double bed, adorned with soft linens and cozy pillows,\r\n                  guaranteeing a restful night\'s sleep. The Double Room boasts modern decor and ample space to relax and\r\n                  unwind after a day of exploration. Stay connected with complimentary high-speed Wi-Fi or catch up on\r\n                  work at the dedicated work desk. The private en-suite bathroom offers contemporary fixtures and\r\n                  luxurious amenities for your convenience and indulgence. Whether you\'re traveling with a loved one or\r\n                  a friend, our Double Room provides the perfect retreat for a memorable stay.</p>\r\n             ', 3, 'Wifi, Television, Air Conditioner, Swimming Pool'),
(3, 'Deluxe Room', '200.00', 'Indulge in the epitome of luxury and sophistication in our Deluxe Room at UUM Hotel. Designed for\r\n                  discerning travelers who seek the finer things in life, the Deluxe Room offers an expansive space\r\n                  filled with elegant furnishings and modern comforts. Retreat to a sumptuous king-sized bed adorned\r\n                  with high-quality linens, inviting you to sink into a blissful night\'s sleep. The room boasts a\r\n                  thoughtfully designed sitting area, allowing you to unwind and enjoy the tranquil ambiance. Stay\r\n                  connected with complimentary high-speed Wi-Fi or make use of the dedicated work desk for any business\r\n                  needs. The opulent en-suite bathroom features premium fixtures, a relaxing rain shower, and a deep\r\n                  soaking bathtub, providing a sanctuary for ultimate relaxation. Our Deluxe Room promises an\r\n                  unforgettable experience where luxury and comfort converge, ensuring an exceptional stay for the most\r\n                  discerning guests.', 3, 'Wifi, Television, Air Conditioner, Swimming pool'),
(4, 'Family Room', '200.00', 'Our Family Room at UUM Hotel is designed to provide a spacious and welcoming haven for families\r\n                traveling together. Step into a room that offers ample space for everyone to relax and unwind. The\r\n                Family Room features comfortable beds, ensuring a restful night\'s sleep for both parents and children.\r\n                The thoughtfully designed layout provides privacy and convenience, with separate sleeping areas or\r\n                interconnected rooms, creating a sense of togetherness while allowing for personal space. Enjoy modern\r\n                amenities, including a flat-screen TV, complimentary Wi-Fi, and a well-equipped en-suite bathroom.\r\n                Whether you\'re traveling with little ones or teenagers, our Family Room ensures a comfortable and\r\n                enjoyable stay for the whole family, creating cherished memories together. ', 5, 'Wifi, Television, Air Conditioner, Swimming pool, Parking lot');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `state_code` int(11) NOT NULL,
  `date_of_birth` date NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone_number`, `address`, `state_code`, `date_of_birth`, `password`) VALUES
(1, 'guest', 'tester123@gmail.com', '123', '123', 123, '2312-12-31', '123'),
(2, 'test1', 'test1@gmail.com', '1', '1', 1, '1111-01-01', '$2y$10$KdXupKSPt/MVm675AQw8AekLR0cBm8vQEblE9Je6B5eVy.LNttWj2'),
(3, '123', '123@1.1', '123', '2123', 123, '2311-12-31', '$2y$10$GPiZuijjEFzhTVP0VoqzEenW116YCJ3yBiRc8Rnkw6iV.khOQhLWq'),
(4, 'Abc123', 'abc123@gmail.com', '0129837261', 'abc', 12341, '1996-03-04', '$2y$10$cDel3ApokIlPF/UluztE/uxw.fulAMC0CY1txtFI76lLIhqsTIU/e'),
(5, 'ng', 'pein@hotmail.my', '01293827367', 'No etc', 28177, '2003-12-12', '$2y$10$vAPhtWmw/ImnUCp/toYMqudHv7aedJD4hDmMdBUUyPq8MeS62bDau');

-- --------------------------------------------------------

--
-- Table structure for table `user_comment`
--

CREATE TABLE `user_comment` (
  `uc_name` varchar(100) NOT NULL,
  `uc_email` varchar(100) NOT NULL,
  `uc_subject` varchar(300) NOT NULL,
  `uc_message` varchar(1000) NOT NULL,
  `uc_date` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_comment`
--

INSERT INTO `user_comment` (`uc_name`, `uc_email`, `uc_subject`, `uc_message`, `uc_date`) VALUES
('as', 'as@ajsu.s', 'is', 'ijj', '2023-07-05 00:00:00.000000'),
('as', 'as@eee.m', 'as', 'as', '2023-07-05 00:00:00.000000'),
('as', 'as@qqw', '12', '12', '2023-07-05 00:00:00.000000'),
('as', 'iai@ww', 'aki', 'kai', '2023-07-05 00:00:00.000000'),
('as', 'iai@wwa', 'aki', 'kai', '2023-07-05 00:00:00.000000'),
('阿三', 'KA@J', 'AKI', 'KAI', '2023-07-05 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(50) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_phonenumber` varchar(13) NOT NULL,
  `user_address` varchar(400) NOT NULL,
  `user_statecode` varchar(100) NOT NULL,
  `user_dob` date NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_regdate` varchar(6) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `user_name`, `user_email`, `user_phonenumber`, `user_address`, `user_statecode`, `user_dob`, `user_password`, `user_regdate`) VALUES
(1, 'NG PEI NYUK', 'peinyukn@gmail.com', '0129419429', 'abcabc', '47130', '2023-06-20', '$2y$10$tK3UGbiObCqROwC8WER8YeM8GJfLEn2.wgWVRPMiwAfjZINV18guO', '2023-0'),
(2, 'NG PEI NYUK', 'peinyukn@gmail.com', '0129419429', 'abcabc', '47130', '2023-06-20', '$2y$10$UPJQPBNWu8lAJmnjlQfnHeipQ5PqhOrkVEqZxZlTZCIBsgk0ZyswG', '2023-0'),
(3, 'NG PEI NYUK', 'peinyukn@gmail.com', '0129419429', 'abcabc', '47130', '2023-06-20', '$2y$10$8XjSrHjpEgdaHx1jR7IbR.h0A/kNhCH4qR/71bjyHI3nlxV7528Ru', '2023-0'),
(4, 'NG PEI NYUK', 'peinyukn@gmail.com', '0129419429', 'abcabc', '47130', '2023-06-20', '$2y$10$YK9x8DFoNLKNyuEgYOc0AORrLCuzrX7ad0JESQ8f65TGyJSGusf5a', '2023-0'),
(5, 'NG PEI NYUK', 'peinyukn@gmail.com', '0129419429', 'abcabc', '47130', '2023-06-20', '$2y$10$AjQoUvdQALY3WzWadWOf0uTZfYOl3v9f/OGtzE9QavU4S9Vtw.uGC', '2023-0'),
(6, 'EMILY', 'emily@gmail.com', '0129419429', 'abcabc', '47130', '2023-06-20', '$2y$10$Lx1flRhwYHLW36fX9vAH6eCeAdJ5Za9ik47z4XYPJeo86ZE7OF7OS', '2023-0'),
(7, 'EMILY', 'emily@gmail.com', '0129419429', 'abcabc', '47130', '2023-06-20', '$2y$10$eVMShHZtp2ni7V9DfCDIBeGf2zR8aJl/sL87eM7hMgpPcusb6sm4i', '2023-0'),
(8, 'EMILY', 'emily@gmail.com', '0129419429', 'abcabc', '47130', '2023-06-20', '$2y$10$iQryyBmB4w2n7.ntL09FhO2IC5A5t1oxy0VWyxYhkPxeKv3yC79I.', '2023-0'),
(9, 'EMILY', 'emily@gmail.com', '0129419429', 'abcabc', '47130', '2023-06-20', '$2y$10$ZlpPAJiLkvMezuj52a6fLOF09AtiywLH.oMlRS0J4ri.mA/pfSOZW', '2023-0'),
(10, 'EMILY', 'emily@gmail.com', '0129419429', 'abcabc', '47130', '2023-06-20', '$2y$10$vXwrzir/AVT/VHmgM9pfFu4ceHiIlHvf8DRkvgizAgxJxdeh.GjZu', '2023-0'),
(11, 'EMILY', 'emily@gmail.com', '0129419429', 'abcabc', '47130', '2023-06-20', '$2y$10$mJNXI/YWLevP1B5gVpDC2uRqq4yEpPpNFpT.RsMntqhQW0ZtESt3a', '2023-0'),
(12, 'EMILY', 'emily@gmail.com', '0129419429', 'abcabc', '47130', '2023-06-20', '$2y$10$3/OOY7U1BnmsnDHSLe43rOQZffyp6YuMVEnhkBHfZiQLQhsufjz5K', '2023-0'),
(13, 'EMILY', 'emily@gmail.com', '0129419429', 'abcabc', '47130', '2023-06-20', '$2y$10$RyQwwnM/4cJNHD.c96uccewL10JCqa9x44zBzrM1mFk9GfVDbjTDa', '2023-0'),
(14, 'Jenny', 'jenny@gmail.com', '0129273182', 'abcabc', '78271', '2023-06-01', '$2y$10$wgxhwgKvmAFCvzFiBSeQK.lZ9fo4LNyFe66KaV259KNitfnBn4dbi', '2023-0'),
(15, 'Jenny', 'jenny@gmail.com', '0129273182', 'abcabc', '78271', '2023-06-01', '$2y$10$NrJyKtOdTRqHlsvtX.wUpOGbe9wpQDZ4C8EDh1FoXKCqOZhlj38fa', '2023-0'),
(16, 'Jenny', 'jenny@gmail.com', '0129273182', 'abcabc', '78271', '2023-06-01', '$2y$10$y6LR1d1lQRhVoWudPArhSuFE4Qp8C8AR/zTRSq/M7XQipttLn0QfS', '2023-0'),
(17, 'Jenny', 'jenny@gmail.com', '0129273182', 'abcabc', '78271', '2023-06-01', '$2y$10$1jkzGlRLA83zzcqouyDZ2u7vp.BUotE0qaj6/9NggkH8.xQY6V3ba', '2023-0'),
(18, 'Tan', 'tan@gmail.com', '12', '12', '12', '1212-12-12', '$2y$10$iOvKw87zFpTFqFmhjF2kKOLoYpM2qqqVLVtO90nu2niYHuVKnaDRW', '2023-0'),
(19, 'Tan', 'tan@gmail.com', '12', '12', '12', '1212-12-12', '$2y$10$hWI2elQyoZYnW8/NyoRic.vx3eazMpI4QBTMuZ5sPmR2Bh9qBQdyO', '2023-0'),
(20, 'TAN', 'TAN@GMAIL.COM', '12', '2', '12', '1212-12-12', '$2y$10$aLH74HtT.mNvKYvtdfVA2u6/vkaGccgQCTQzW3wTxAs28ah2grxOq', '2023-0'),
(21, 'TAN', 'TAN@GMAIL.COM', '12', '2', '12', '1212-12-12', '$2y$10$6AIV4e13sZ/xRfZ8lZlu0.QYnCLPJbTpLpY6uugWs.v9IGqUJJGs2', '2023-0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoiceid`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`roomid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_comment`
--
ALTER TABLE `user_comment`
  ADD PRIMARY KEY (`uc_email`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
