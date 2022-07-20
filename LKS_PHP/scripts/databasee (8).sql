CREATE DATABASE IF NOT EXISTS `LKS`;

USE `LKS`;

CREATE TABLE IF NOT EXISTS `tblKhachHang`(
    `id` INT(3) ZEROFILL NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `tenKH` VARCHAR(255) NOT NULL DEFAULT '',
    `diaChi` VARCHAR(255) NOT NULL DEFAULT '',
    `matKhau` VARCHAR(255) NOT NULL DEFAULT '',
    `soDT` VARCHAR(255) NOT NULL DEFAULT ''
);

CREATE TABLE IF NOT EXISTS `tblNhanVien`(
    `id` INT(3) ZEROFILL NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `tenNV` VARCHAR(255) NOT NULL DEFAULT '',
    `taiKhoan` VARCHAR(255) NOT NULL,
    `matKhau` VARCHAR(255) NOT NULL DEFAULT '123',
    `SDT` VARCHAR(255) NOT NULL DEFAULT '',
    `chucVu` VARCHAR(255) NOT NULL DEFAULT 'Nhân Viên Bán Hàng'
);

CREATE TABLE IF NOT EXISTS `tblCompany` (
  `id` INT(2) ZEROFILL NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `tenCompany` VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS `tblTheLoai` (
  `id` INT(2) ZEROFILL NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `tenTheLoai` VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS `tblSanPham`(
    `id` INT(5) ZEROFILL NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `idTheLoai` INT(2) ZEROFILL NOT NULL,
    `idCompany` INT(2) ZEROFILL NOT NULL,
    `tenSP` VARCHAR(255) NOT NULL DEFAULT '',
    `donGia` FLOAT(53) NOT NULL,
    `moTa` VARCHAR(255) NOT NULL DEFAULT '',
    `trangThaiSP` INT(11) NOT NULL DEFAULT 0,
    FOREIGN KEY(`idTheLoai`) REFERENCES tblTheLoai(`id`),
    FOREIGN KEY(`idCompany`) REFERENCES tblCompany(`id`)
);

CREATE TABLE IF NOT EXISTS `tblVoucher` (
  `id` INT(8) ZEROFILL NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `idSanPham` INT(5) ZEROFILL NOT NULL,
  `tenVoucher` VARCHAR(255) NOT NULL,
  `discount` FLOAT(53) NOT NULL,
  `date` DATE,
  FOREIGN KEY(`idSanPham`) REFERENCES tblSanPham(`id`)
);

CREATE TABLE IF NOT EXISTS `tblHoaDon`(
    `id` INT(8) ZEROFILL NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `idNhanVien` INT(3) ZEROFILL NOT NULL,
    `idKhachHang` INT(3) ZEROFILL NOT NULL,
    `idVoucher` INT(8) ZEROFILL NOT NULL,
    `diaChi` VARCHAR(255) NOT NULL,
    `trangThaiHD` INT(11) NOT NULL DEFAULT 0,
    `ngayMua` DATE,
    FOREIGN KEY(`idNhanVien`) REFERENCES tblNhanVien(`id`),
    FOREIGN KEY(`idKhachHang`) REFERENCES tblKhachHang(`id`),
    FOREIGN KEY(`idVoucher`) REFERENCES tblVoucher(`id`)
);

CREATE TABLE IF NOT EXISTS `tblCTHD`(
    `id` INT(8) ZEROFILL NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `idHoaDon` INT(8) ZEROFILL NOT NULL,
    `idSanPham` INT(5) ZEROFILL NOT NULL,
    `soLuong` INT(11) NOT NULL,
    FOREIGN KEY(`idHoaDon`) REFERENCES tblHoaDon(`id`),
    FOREIGN KEY(`idSanPham`) REFERENCES tblSanPham(`id`)
);

CREATE TABLE IF NOT EXISTS `tblImage`(
    `id` INT(8) ZEROFILL NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `idSanPham` INT(5) ZEROFILL NOT NULL,
    `imgUrl` VARCHAR(255) NOT NULL,
    FOREIGN KEY(`idSanPham`) REFERENCES tblSanPham(`id`)
);

-- INSERT INTO

INSERT INTO tblKhachHang (tenKH, diaChi, matKhau, soDT) VALUES 
('Nhan Nguyen Thanh','57 / D6 Quốc Lộ 13, P. 26, Q. Bình Thạnh', '1234', '08062803022'), 
('Tri Pham Hoang','60 Tỉnh Lộ 741, 1 Thuận Phú, Phú Thuận', '1234', '08035960894'), 
('Long Phan Thien','Thị trấn Ea Kar, Huyện Ea Kar.', '1234', '08036731398'), 
('Long Doan','381 Hoàng Quốc Việt', '1234', '08054597505'),
('Nhut Minh','148 Lý Chính Thắng, P.7, Q.3', '1234', '08030701339'), 
('Thao Thu','Lô 46, Khu công nghiệp Quang Minh', '1234', '08087342287'), 
('Linh Nguyen','314 Đại lộ Bình Dương', '1234', '08103888893'), 
('Quy Nhan','1 Võ Thị Sáu, Phường Vĩnh Trường', '1234', '07027950732'), 
('Bao Quoc','218/33/5 Minh Phụng, P. 6, Q. 3, Tp. 6', '1234', '08064416049'), 
('Sang Sang','266 Nguyễn Văn Luông, Phường 16', '1234', '07035102330');

INSERT INTO tblNhanVien (tenNV, taiKhoan, matKhau, SDT, chucVu) VALUES
('Zachary Henry', 'nhanvien01', '123', '08037212070', 'Trưởng phòng'),
('Minnie Mclaughlin', 'nhanvien02', '123', '08032165647', 'Nhân viên'),
('Gertrude Mccormick', 'nhanvien03', '123', '08060384653', 'Nhân viên'),
('Dana Hammond', 'nhanvien04', '123', '08035014555', 'Nhân viên'),
('Clifford Douglas', 'nhanvien05', '123', '08032034493', 'Nhân viên'),
('Jo Allen', 'nhanvien06', '123', '08036687799', 'Nhân viên'),
('Dale Adams', 'nhanvien07', '123', '08036687799', 'Nhân viên'),
('Wm Larson', 'nhanvien08', '123', '08033278822', 'Nhân viên'),
('Melanie Gonzales', 'nhanvien09', '123', '07057413469', 'Nhân viên'),
('Trevor Gill', 'nhanvien10', '123', '08089614317', 'Nhân viên');

INSERT INTO tblTheLoai (tenTheLoai) VALUES 
('MAIN'),
('CPU'),
('GTU'),
('RAM'),
('ROM'),
('PSU'),
('SSD'),
('HDD'),
('VGA');

INSERT INTO tblCompany (tenCompany) VALUES 
('MSI'),
('Asus'),
('Gigabyte'),
('Asrock'),
('Intel');

INSERT INTO tblSanPham (idTheLoai, idCompany, tenSP, donGia, moTa, trangThaiSP) VALUES 
(01, 01, 'VGA GTX 1080 Ti', 1999999, 'lorem ipsum', 0),
(01, 01, 'VGA Asus ROG STRIX RTX 3070 Ti OC', 2999999, 'lorem ipsum', 0),
(01, 01, 'Mainboard NZXT N7 Z590 MATTE WHITE', 3999999, 'lorem ipsum', 0),
(01, 01, 'CPU INTEL ROCKET I7 11700K', 4999999, 'lorem ipsum', 0),
(01, 01, 'CPU AMD Ryzen 5 5600G', 5999999, 'lorem ipsum', 0),
(01, 02, 'RAM ADATA DDR5 XPG HUNTER 8GB 5200 BLACK', 6999999, 'lorem ipsum', 0),
(01, 02, 'Main Asus B660-G ROG STRIX GAMING WIFI', 7999999, 'lorem ipsum', 0),
(02, 02, 'CPU AMD RYZEN 5 PRO 4650G MPK', 8999999, 'lorem ipsum', 0),
(02, 02, 'CPU AMD Ryzen 5 5600X', 9999999, 'lorem ipsum', 0),
(02, 02, 'SSD Kingston A400 2.5" 120GB', 9999999, 'lorem ipsum', 0),
(02, 03, 'PSU máy tính Antec ATOM V550 - 550W', 9999999, 'lorem ipsum', 0),
(02, 03, 'CPU AMD Athlon 3000G', 9999999, 'lorem ipsum', 0),
(02, 03, 'Mainboard MSI B360M MORTAR', 9999999, 'lorem ipsum', 0),
(02, 03, 'VGA Galax GeForce RTX 3080 SG 1-Click OC', 9999999, 'lorem ipsum', 0),
(03, 03, 'CPU Intel Pentium Gold G6405', 9999999, 'lorem ipsum', 0),
(03, 03, 'VGA Asus ROG Strix GeForce RTX 3090 OC Gaming', 9999999, 'lorem ipsum', 0),
(03, 04, 'RAM Desktop GSkill Ripjaws V 4GB', 9999999, 'lorem ipsum', 0),
(03, 04, 'SSD Western SN750 M.2 1TB WDS100T3X0C', 9999999, 'lorem ipsum', 0),
(03, 04, 'HDD Western Caviar Blue 1TB 3.5" 7200RPM 64MB', 9999999, 'lorem ipsum', 0),
(03, 04, 'HDD Seagate Barracuda 1TB 3.5" 7200RPM 64MB', 9999999, 'lorem ipsum', 0),
(03, 04, 'Mainboard MSI B365M PRO-VH', 9999999, 'lorem ipsum', 0),
(04, 05, 'RAM Desktop DDR4 Kingston Server 16GB 2400MHz', 9999999, 'lorem ipsum', 0),
(04, 05, 'Mainboard ASUS ROG STRIX Z490-F GAMING', 9999999, 'lorem ipsum', 0),
(04, 05, 'CPU Intel Core i5-10400', 9999999, 'lorem ipsum', 0),
(04, 05, 'CPU Intel Core i9-10900', 9999999, 'lorem ipsum', 0),
(04, 05, 'RAM Desktop DDR4 Kuijia 4GB 2400MHz (1x4GB)', 9999999, 'lorem ipsum', 0),
(04, 05, 'SSD Apacer Panther AS340X 120GB', 9999999, 'lorem ipsum', 0),
(04, 01, 'VGA Zotac Gaming GeForce GTX 1650 AMP Core', 9999999, 'lorem ipsum', 0),
(05, 01, 'CPU AMD Ryzen 9 5950X', 2999999, 'lorem ipsum', 0);

INSERT INTO tblVoucher (idSanPham, tenVoucher, discount, date) VALUES
(00003, 'Voucher tri ân giảm 30k', 30000, '2020-09-11'),
(00002, 'Voucher hè giảm 50k', 50000, '2020-09-21'),
(00007, 'Voucher 22/03 giảm 100k', 100000, '2020-09-30'),
(00005, 'Voucher rực rỡ giảm 50k', 50000, '2020-09-25'),
(00009, 'Voucher siêu giảm 40k', 40000, '2020-09-14');

INSERT INTO tblHoaDon (idNhanVien, idKhachHang, idVoucher, diaChi, trangThaiHD, ngayMua) VALUES 
(001, 001, 00000001, '44B Ly Thuong Kiet Street', 0, '2021-09-25' ),
(002, 002, 00000002, 'A8-25 Lang Ha St., Thanh Cong Ward', 0, '2020-09-25' ),
(003, 003, 00000003, '1223 Provincial Road 43, Blk 2, Binh Chieu Ward', 0, '2020-09-25' ),
(004, 004, 00000004, '69/11 Pham Van Chieu, Ward 12', 0, '2020-09-25' ),
(005, 005, 00000005, '817 Tran Xuan Soan, Tan Hung Ward, Dist.7', 0, '2020-09-25' ),
(006, 006, 00000001, '284/19/24 Nguyen Trung Truc Street', 0, '2020-09-25' ),
(007, 007, 00000002, '53/5, Tran Hung Dao Street', 0, '2020-09-25' ),
(008, 008, 00000003, '37B Ly Thai To, Ward 1, Dist.10', 0, '2020-09-25' ),
(009, 009, 00000004, '283 Pham Ngu Lao Q.1', 0, '2020-09-25' ),
(010, 010, 00000005, '186Bis Nguyen Van Thu Street, Da Kao Ward,', 0, '2022-08-20' );

INSERT INTO tblCTHD (idHoaDon, idSanPham, soLuong) VALUES 
(00000010, 00001, 2),
(00000009, 00002, 1),
(00000008, 00003, 3),
(00000007, 00004, 4),
(00000006, 00005, 1),
(00000005, 00006, 1),
(00000004, 00007, 3),
(00000003, 00008, 4),
(00000002, 00009, 6),
(00000001, 00010, 1);

INSERT INTO tblImage (idSanPham, imgUrl) VALUES
(00001,'https://product.hstatic.net/200000301000/product/z690_aero_g-01_675a0192c4d44042a9f3236c2b1bcb0a_1__5f5644c4fbaf429fb84b6457bc26399d.png'),
(00002,'https://product.hstatic.net/200000301000/product/z690_aero_g-01_675a0192c4d44042a9f3236c2b1bcb0a_1__5f5644c4fbaf429fb84b6457bc26399d.png'),
(00003,'https://product.hstatic.net/200000301000/product/z690_aero_g-01_675a0192c4d44042a9f3236c2b1bcb0a_1__5f5644c4fbaf429fb84b6457bc26399d.png'),
(00001,'https://cdn.tgdd.vn/Files/2021/08/02/1372466/cpucoreli5_1280x720-800-resize.jpg'),
(00002,'https://cdn.tgdd.vn/Files/2021/08/02/1372466/cpucoreli5_1280x720-800-resize.jpg'),
(00003,'https://cdn.tgdd.vn/Files/2021/08/02/1372466/cpucoreli5_1280x720-800-resize.jpg'),
(00001,'https://hoanghapc.vn/media/product/1443_gskill_f4_3200c16d_32gtzr_1_min.jpg'),
(00002,'https://hoanghapc.vn/media/product/1443_gskill_f4_3200c16d_32gtzr_1_min.jpg'),
(00003,'https://hoanghapc.vn/media/product/1443_gskill_f4_3200c16d_32gtzr_1_min.jpg'),
(00004,'https://product.hstatic.net/200000301000/product/z690_aero_g-01_675a0192c4d44042a9f3236c2b1bcb0a_1__5f5644c4fbaf429fb84b6457bc26399d.png'),
(00005,'https://product.hstatic.net/200000301000/product/z690_aero_g-01_675a0192c4d44042a9f3236c2b1bcb0a_1__5f5644c4fbaf429fb84b6457bc26399d.png'),
(00006,'https://product.hstatic.net/200000301000/product/z690_aero_g-01_675a0192c4d44042a9f3236c2b1bcb0a_1__5f5644c4fbaf429fb84b6457bc26399d.png'),
(00004,'https://cdn.tgdd.vn/Files/2021/08/02/1372466/cpucoreli5_1280x720-800-resize.jpg'),
(00005,'https://cdn.tgdd.vn/Files/2021/08/02/1372466/cpucoreli5_1280x720-800-resize.jpg'),
(00006,'https://cdn.tgdd.vn/Files/2021/08/02/1372466/cpucoreli5_1280x720-800-resize.jpg'),
(00004,'https://hoanghapc.vn/media/product/1443_gskill_f4_3200c16d_32gtzr_1_min.jpg'),
(00005,'https://hoanghapc.vn/media/product/1443_gskill_f4_3200c16d_32gtzr_1_min.jpg'),
(00006,'https://hoanghapc.vn/media/product/1443_gskill_f4_3200c16d_32gtzr_1_min.jpg'),
(00007,'https://product.hstatic.net/200000301000/product/z690_aero_g-01_675a0192c4d44042a9f3236c2b1bcb0a_1__5f5644c4fbaf429fb84b6457bc26399d.png'),
(00008,'https://product.hstatic.net/200000301000/product/z690_aero_g-01_675a0192c4d44042a9f3236c2b1bcb0a_1__5f5644c4fbaf429fb84b6457bc26399d.png'),
(00009,'https://product.hstatic.net/200000301000/product/z690_aero_g-01_675a0192c4d44042a9f3236c2b1bcb0a_1__5f5644c4fbaf429fb84b6457bc26399d.png'),
(00007,'https://cdn.tgdd.vn/Files/2021/08/02/1372466/cpucoreli5_1280x720-800-resize.jpg'),
(00008,'https://cdn.tgdd.vn/Files/2021/08/02/1372466/cpucoreli5_1280x720-800-resize.jpg'),
(00009,'https://cdn.tgdd.vn/Files/2021/08/02/1372466/cpucoreli5_1280x720-800-resize.jpg'),
(00007,'https://hoanghapc.vn/media/product/1443_gskill_f4_3200c16d_32gtzr_1_min.jpg'),
(00008,'https://hoanghapc.vn/media/product/1443_gskill_f4_3200c16d_32gtzr_1_min.jpg'),
(00009,'https://hoanghapc.vn/media/product/1443_gskill_f4_3200c16d_32gtzr_1_min.jpg'),
(00010,'https://product.hstatic.net/200000301000/product/z690_aero_g-01_675a0192c4d44042a9f3236c2b1bcb0a_1__5f5644c4fbaf429fb84b6457bc26399d.png'),
(00011,'https://product.hstatic.net/200000301000/product/z690_aero_g-01_675a0192c4d44042a9f3236c2b1bcb0a_1__5f5644c4fbaf429fb84b6457bc26399d.png'),
(00012,'https://product.hstatic.net/200000301000/product/z690_aero_g-01_675a0192c4d44042a9f3236c2b1bcb0a_1__5f5644c4fbaf429fb84b6457bc26399d.png'),
(00010,'https://cdn.tgdd.vn/Files/2021/08/02/1372466/cpucoreli5_1280x720-800-resize.jpg'),
(00011,'https://cdn.tgdd.vn/Files/2021/08/02/1372466/cpucoreli5_1280x720-800-resize.jpg'),
(00012,'https://cdn.tgdd.vn/Files/2021/08/02/1372466/cpucoreli5_1280x720-800-resize.jpg'),
(00010,'https://hoanghapc.vn/media/product/1443_gskill_f4_3200c16d_32gtzr_1_min.jpg'),
(00011,'https://hoanghapc.vn/media/product/1443_gskill_f4_3200c16d_32gtzr_1_min.jpg'),
(00012,'https://hoanghapc.vn/media/product/1443_gskill_f4_3200c16d_32gtzr_1_min.jpg'),
(00013,'https://product.hstatic.net/200000301000/product/z690_aero_g-01_675a0192c4d44042a9f3236c2b1bcb0a_1__5f5644c4fbaf429fb84b6457bc26399d.png'),
(00014,'https://product.hstatic.net/200000301000/product/z690_aero_g-01_675a0192c4d44042a9f3236c2b1bcb0a_1__5f5644c4fbaf429fb84b6457bc26399d.png'),
(00015,'https://product.hstatic.net/200000301000/product/z690_aero_g-01_675a0192c4d44042a9f3236c2b1bcb0a_1__5f5644c4fbaf429fb84b6457bc26399d.png'),
(00013,'https://cdn.tgdd.vn/Files/2021/08/02/1372466/cpucoreli5_1280x720-800-resize.jpg'),
(00014,'https://cdn.tgdd.vn/Files/2021/08/02/1372466/cpucoreli5_1280x720-800-resize.jpg'),
(00015,'https://cdn.tgdd.vn/Files/2021/08/02/1372466/cpucoreli5_1280x720-800-resize.jpg'),
(00013,'https://hoanghapc.vn/media/product/1443_gskill_f4_3200c16d_32gtzr_1_min.jpg'),
(00014,'https://hoanghapc.vn/media/product/1443_gskill_f4_3200c16d_32gtzr_1_min.jpg'),
(00015,'https://hoanghapc.vn/media/product/1443_gskill_f4_3200c16d_32gtzr_1_min.jpg'),
(00016,'https://product.hstatic.net/200000301000/product/z690_aero_g-01_675a0192c4d44042a9f3236c2b1bcb0a_1__5f5644c4fbaf429fb84b6457bc26399d.png'),
(00017,'https://product.hstatic.net/200000301000/product/z690_aero_g-01_675a0192c4d44042a9f3236c2b1bcb0a_1__5f5644c4fbaf429fb84b6457bc26399d.png'),
(00018,'https://product.hstatic.net/200000301000/product/z690_aero_g-01_675a0192c4d44042a9f3236c2b1bcb0a_1__5f5644c4fbaf429fb84b6457bc26399d.png'),
(00016,'https://cdn.tgdd.vn/Files/2021/08/02/1372466/cpucoreli5_1280x720-800-resize.jpg'),
(00017,'https://cdn.tgdd.vn/Files/2021/08/02/1372466/cpucoreli5_1280x720-800-resize.jpg'),
(00018,'https://cdn.tgdd.vn/Files/2021/08/02/1372466/cpucoreli5_1280x720-800-resize.jpg'),
(00016,'https://hoanghapc.vn/media/product/1443_gskill_f4_3200c16d_32gtzr_1_min.jpg'),
(00017,'https://hoanghapc.vn/media/product/1443_gskill_f4_3200c16d_32gtzr_1_min.jpg'),
(00018,'https://hoanghapc.vn/media/product/1443_gskill_f4_3200c16d_32gtzr_1_min.jpg'),
(00019,'https://product.hstatic.net/200000301000/product/z690_aero_g-01_675a0192c4d44042a9f3236c2b1bcb0a_1__5f5644c4fbaf429fb84b6457bc26399d.png'),
(00020,'https://product.hstatic.net/200000301000/product/z690_aero_g-01_675a0192c4d44042a9f3236c2b1bcb0a_1__5f5644c4fbaf429fb84b6457bc26399d.png'),
(00021,'https://product.hstatic.net/200000301000/product/z690_aero_g-01_675a0192c4d44042a9f3236c2b1bcb0a_1__5f5644c4fbaf429fb84b6457bc26399d.png'),
(00019,'https://cdn.tgdd.vn/Files/2021/08/02/1372466/cpucoreli5_1280x720-800-resize.jpg'),
(00020,'https://cdn.tgdd.vn/Files/2021/08/02/1372466/cpucoreli5_1280x720-800-resize.jpg'),
(00021,'https://cdn.tgdd.vn/Files/2021/08/02/1372466/cpucoreli5_1280x720-800-resize.jpg'),
(00019,'https://hoanghapc.vn/media/product/1443_gskill_f4_3200c16d_32gtzr_1_min.jpg'),
(00020,'https://hoanghapc.vn/media/product/1443_gskill_f4_3200c16d_32gtzr_1_min.jpg'),
(00021,'https://hoanghapc.vn/media/product/1443_gskill_f4_3200c16d_32gtzr_1_min.jpg'),
(00022,'https://product.hstatic.net/200000301000/product/z690_aero_g-01_675a0192c4d44042a9f3236c2b1bcb0a_1__5f5644c4fbaf429fb84b6457bc26399d.png'),
(00023,'https://product.hstatic.net/200000301000/product/z690_aero_g-01_675a0192c4d44042a9f3236c2b1bcb0a_1__5f5644c4fbaf429fb84b6457bc26399d.png'),
(00024,'https://product.hstatic.net/200000301000/product/z690_aero_g-01_675a0192c4d44042a9f3236c2b1bcb0a_1__5f5644c4fbaf429fb84b6457bc26399d.png'),
(00022,'https://cdn.tgdd.vn/Files/2021/08/02/1372466/cpucoreli5_1280x720-800-resize.jpg'),
(00023,'https://cdn.tgdd.vn/Files/2021/08/02/1372466/cpucoreli5_1280x720-800-resize.jpg'),
(00024,'https://cdn.tgdd.vn/Files/2021/08/02/1372466/cpucoreli5_1280x720-800-resize.jpg'),
(00022,'https://hoanghapc.vn/media/product/1443_gskill_f4_3200c16d_32gtzr_1_min.jpg'),
(00023,'https://hoanghapc.vn/media/product/1443_gskill_f4_3200c16d_32gtzr_1_min.jpg'),
(00024,'https://hoanghapc.vn/media/product/1443_gskill_f4_3200c16d_32gtzr_1_min.jpg'),
(00025,'https://product.hstatic.net/200000301000/product/z690_aero_g-01_675a0192c4d44042a9f3236c2b1bcb0a_1__5f5644c4fbaf429fb84b6457bc26399d.png'),
(00026,'https://product.hstatic.net/200000301000/product/z690_aero_g-01_675a0192c4d44042a9f3236c2b1bcb0a_1__5f5644c4fbaf429fb84b6457bc26399d.png'),
(00027,'https://product.hstatic.net/200000301000/product/z690_aero_g-01_675a0192c4d44042a9f3236c2b1bcb0a_1__5f5644c4fbaf429fb84b6457bc26399d.png'),
(00025,'https://cdn.tgdd.vn/Files/2021/08/02/1372466/cpucoreli5_1280x720-800-resize.jpg'),
(00026,'https://cdn.tgdd.vn/Files/2021/08/02/1372466/cpucoreli5_1280x720-800-resize.jpg'),
(00027,'https://cdn.tgdd.vn/Files/2021/08/02/1372466/cpucoreli5_1280x720-800-resize.jpg'),
(00025,'https://hoanghapc.vn/media/product/1443_gskill_f4_3200c16d_32gtzr_1_min.jpg'),
(00026,'https://hoanghapc.vn/media/product/1443_gskill_f4_3200c16d_32gtzr_1_min.jpg'),
(00027,'https://hoanghapc.vn/media/product/1443_gskill_f4_3200c16d_32gtzr_1_min.jpg'),
(00028,'https://product.hstatic.net/200000301000/product/z690_aero_g-01_675a0192c4d44042a9f3236c2b1bcb0a_1__5f5644c4fbaf429fb84b6457bc26399d.png'),
(00029,'https://product.hstatic.net/200000301000/product/z690_aero_g-01_675a0192c4d44042a9f3236c2b1bcb0a_1__5f5644c4fbaf429fb84b6457bc26399d.png'),
(00028,'https://product.hstatic.net/200000301000/product/z690_aero_g-01_675a0192c4d44042a9f3236c2b1bcb0a_1__5f5644c4fbaf429fb84b6457bc26399d.png'),
(00029,'https://product.hstatic.net/200000301000/product/z690_aero_g-01_675a0192c4d44042a9f3236c2b1bcb0a_1__5f5644c4fbaf429fb84b6457bc26399d.png'),
(00028,'https://cdn.tgdd.vn/Files/2021/08/02/1372466/cpucoreli5_1280x720-800-resize.jpg'),
(00029,'https://cdn.tgdd.vn/Files/2021/08/02/1372466/cpucoreli5_1280x720-800-resize.jpg');


