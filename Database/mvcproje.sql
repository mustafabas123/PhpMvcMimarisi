-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 07 May 2023, 10:44:36
-- Sunucu sürümü: 10.4.28-MariaDB
-- PHP Sürümü: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `mvcproje`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogrenci`
--

CREATE TABLE `ogrenci` (
  `id` int(11) NOT NULL,
  `ad` varchar(50) NOT NULL,
  `soyad` varchar(50) NOT NULL,
  `yas` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ogrenci`
--

INSERT INTO `ogrenci` (`id`, `ad`, `soyad`, `yas`) VALUES
(1, 'Mustafa', 'Baş', '22'),
(14, 'Ali', 'Kaya', '21'),
(15, 'Mehmet emin', 'Yılmaz', '32'),
(16, 'Elif', 'Benli', '37');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `panel`
--

CREATE TABLE `panel` (
  `id` int(11) NOT NULL,
  `ad` varchar(50) NOT NULL,
  `sifre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `panel`
--

INSERT INTO `panel` (`id`, `ad`, `sifre`) VALUES
(1, 'mustafa', '123');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ogrenci`
--
ALTER TABLE `ogrenci`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `panel`
--
ALTER TABLE `panel`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `ogrenci`
--
ALTER TABLE `ogrenci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Tablo için AUTO_INCREMENT değeri `panel`
--
ALTER TABLE `panel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
