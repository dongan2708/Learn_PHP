SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `An-coffee` (
                        `id` int(11) NOT NULL,
                        `name` varchar(30) DEFAULT NULL,
                        `size` char(1) DEFAULT NULL,
                        `price` int(11) DEFAULT NULL,
                        `image` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
4

INSERT INTO `An-coffee` (`ID`, `Name`, `Price`, `Size`, `Image`) VALUES
(1, 'Cà phê Americano', '30000', 'M', 'https://www.starbucks.vn/media/Caffe-Americano_tcm90-2059_w1024_n.jpg'),
(2, 'Cà Phê Mocha', '50000', 'M', 'https://www.starbucks.vn/media/caffee-mocha_tcm90-24781_w1024_n.jpg'),
(3, 'Caramel Macchiato', '45000', 'L', 'https://www.starbucks.vn/media/caramel-macchiato-thumb_tcm90-11384_w1024_n.jpg'),
(4, 'Caramel Macchiato Đá', '50000', 'L', 'https://www.starbucks.vn/media/IcedCaramelMacchiato-pt_tcm90-11270_w1024_n.jpg'),
(5, 'Cappuccino', '40000', 'M', 'https://www.starbucks.vn/media/Cappuccino_tcm90-2066_w1024_n.jpg');

ALTER TABLE `An-coffee`
    ADD PRIMARY KEY (`id`);
COMMIT;

