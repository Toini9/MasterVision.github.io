-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 17, 2020 at 11:50 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `baseClient`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `nom` varchar(255) NOT NULL,
  `prn` varchar(255) NOT NULL,
  `mai` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `adr` varchar(255) NOT NULL,
  `pos` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
