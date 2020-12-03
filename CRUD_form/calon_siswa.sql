-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Nov 2020 pada 07.54
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sfh`

-- --------------------------------------------------------

--
-- Struktur dari tabel `calon_siswa`
--

CREATE TABLE `sfh`.`calon_siswa` (
    `id` INT NOT NULL AUTO_INCREMENT ,  
    `siswa` VARCHAR(64) NOT NULL ,  
    `angka` INTEGER(255) NOT NULL ,  
    `jurusan` VARCHAR(255) NOT NULL ,  
    `Tanggal` VARCHAR(255) NOT NULL ,
    `email_pengunjung` VARCHAR(255) NOT NULL ,      
    PRIMARY KEY  (`id`)
) ENGINE = InnoDB;

    --
-- Dumping data untuk tabel `calon_siswa`
--

INSERT INTO `calon_siswa` (`id`, `siswa`, `angka`, `jurusan`, `Tanggal`, `email_pengunjung`) VALUE
(2, 'Achmad Tsany Wicaksono', '11', 'rpl2', '12-02-2020', 'ahmadtsani112@gmail.com'),
(3, 'Siti nur aini', '11', 'rpl2', '12-02-2020', 'ainiulala112@gmail.com'),
(4, 'Lia ', '11', 'rpl2', '12-02-2020', 'Liaulala112@gmail.com'),
(5, 'Melly', '11', 'rpl2', '12-02-2020', 'Mellyulala112@gmail.com')
