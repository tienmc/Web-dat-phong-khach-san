SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE TABLE `quan_ly` (
  `id` int(20) NOT NULL ,
  `name` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




INSERT INTO `quan_ly`(`id`, `name`, `pass`, `fullname`, `email`) VALUES
(1, 'admin', '1234', 'admin', 'admin@gmail.com');




CREATE TABLE `phong` (
  `id_phong` int(200) NOT NULL ,
  `loai_phong` text NOT NULL,
  `ngay_dat` date NOT NULL,
  `ngay_tra` date NOT NULL,
  `name` text NOT NULL,
  `phone` int(100) NOT NULL,
  `trang_thai` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `phong` (`id_phong`, `loai_phong`, `ngay_dat`, `ngay_tra`, `name`, `phone`, `trang_thai`) VALUES
(1, 'Gia Đình', '0000-00-00', '0000-00-00', '', 0, 'false'),
(2, 'Gia Đình', '0000-00-00', '0000-00-00', '', 0, 'false'),
(3, 'Gia Đình', '0000-00-00', '0000-00-00', '', 0, 'false'),
(4, 'Siêu tiện ích', '2017-05-19', '2017-05-22', 'Nguyen Van A', 12345, 'true'),
(5, 'Siêu tiện ích', '0000-00-00', '0000-00-00', '', 0, 'false'),
(6, 'Siêu tiện ích', '0000-00-00', '0000-00-00', '', 0, 'false'),
(7, 'Phòng Đôi', '0000-00-00', '0000-00-00', '', 0, 'false'),
(8, 'Phòng Đôi', '0000-00-00', '0000-00-00', '', 0, 'false');



CREATE TABLE `loai_phong` (
  `ten_loai` text NOT NULL ,
  `so_phong` int(11) NOT NULL,
  `kha_dung` int(11) NOT NULL,
  `trang_thai` int(11) NOT NULL,
  `so_giuong` int(11) NOT NULL,
  `loai_giuong` text NOT NULL,
  `tien_ich` text NOT NULL,
  `gia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `loai_phong` (`ten_loai`, `so_phong`, `kha_dung`, `trang_thai`, `so_giuong`, `loai_giuong`, `tien_ich`, `gia`) VALUES
('Phòng Đôi', 5, 5, 0, 2, 'Đơn', 'AC, TV, Wifi', 1500),
('Gia Đình', 5, 5, 0, 2, 'Đôi', 'Sofa, TV, WIFI', 3500),
('Siêu tiện ích', 5, 5, 0, 1, 'Đôi', 'AC, TV, WIFI', 2200);

ALTER TABLE `quan_ly`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `phong`
  ADD PRIMARY KEY (`id_phong`);


ALTER TABLE `loai_phong`
  ADD PRIMARY KEY (`ten_loai`(100));


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


