-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Feb 2019 pada 01.47
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lppbarang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jns_brg`
--

CREATE TABLE `jns_brg` (
  `id_jns` varchar(6) NOT NULL,
  `jns_brg` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jns_brg`
--

INSERT INTO `jns_brg` (`id_jns`, `jns_brg`) VALUES
('JNS001', 'Alat tulis kantor'),
('JNS002', 'Perlengkapan komputer'),
('JNS003', 'Elektrik'),
('JNS004', 'Kertas'),
('JNS005', 'Otomotif'),
('JNS006', 'Rokok'),
('JNS007', 'Obat-obatan'),
('JNS008', 'Makanan'),
('JNS009', 'Minuman'),
('JNS010', 'Pakaian'),
('JNS011', 'Sabun - shampoo'),
('JNS012', 'Kosmetik'),
('JNS013', 'Alat rumah tangga'),
('JNS014', 'Benda Pos'),
('JNS015', 'Benda Astral');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_brg`
--

CREATE TABLE `tb_brg` (
  `kd_brg` varchar(30) NOT NULL,
  `nm_brg` varchar(30) NOT NULL,
  `hrg_bli` int(11) NOT NULL,
  `hrg_jwl` int(11) NOT NULL,
  `stk` int(11) NOT NULL,
  `expr` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_brg`
--

INSERT INTO `tb_brg` (`kd_brg`, `nm_brg`, `hrg_bli`, `hrg_jwl`, `stk`, `expr`, `status`) VALUES
('BRG001', 'ABC Asam Jawa', 0, 0, 64, '0000-00-00', 1),
('BRG002', 'ABC Exco', 0, 0, 110, '0000-00-00', 0),
('BRG003', 'ABC Juice', 0, 0, 120, '0000-00-00', 0),
('BRG004', 'ABC Kc. Hj.', 0, 0, 10, '0000-00-00', 0),
('BRG005', 'Adem Sari', 0, 0, 3500, '0000-00-00', 0),
('BRG006', 'Amplop Casing F', 0, 0, 9, '0000-00-00', 0),
('BRG007', 'Amplop Casing Map', 0, 0, 0, '0000-00-00', 0),
('BRG008', 'Amplop CD', 0, 0, 14, '0000-00-00', 0),
('BRG009', 'Amplop Merpati B', 0, 0, 20, '0000-00-00', 0),
('BRG010', 'Amplop Merpati K', 0, 0, 0, '0000-00-00', 0),
('BRG011', 'Amplop Merpati Tg', 0, 0, 20, '0000-00-00', 0),
('BRG012', 'Amplop Samson A kabinet', 0, 0, 0, '0000-00-00', 0),
('BRG013', 'Amplop Samson B Super kabinet', 0, 0, 0, '0000-00-00', 0),
('BRG014', 'Amplop Samson C 1/2 kwarto', 0, 0, 10, '0000-00-00', 0),
('BRG015', 'Amplop Samson D Folio', 0, 0, 0, '0000-00-00', 0),
('BRG016', 'Amplop Samson E Map', 0, 0, 0, '0000-00-00', 0),
('BRG017', 'Amplop Sertifikat', 0, 0, 22, '0000-00-00', 0),
('BRG018', 'Aqua 1500ml', 0, 0, 0, '0000-00-00', 0),
('BRG019', 'Aqua 240ml box', 0, 0, 0, '0000-00-00', 0),
('BRG020', 'Aqua 330ml box', 0, 0, 0, '0000-00-00', 0),
('BRG021', 'Aqua 600ml', 0, 0, 0, '0000-00-00', 0),
('BRG022', 'Aqua 600ml box', 0, 0, 0, '0000-00-00', 0),
('BRG023', 'Aqua Galon', 0, 0, 0, '0000-00-00', 0),
('BRG024', 'ASTURO', 0, 0, 0, '0000-00-00', 0),
('BRG025', 'ASTURO STICKER', 0, 0, 0, '0000-00-00', 0),
('BRG026', 'Attack 800 gr', 0, 0, 0, '0000-00-00', 0),
('BRG027', 'BAGOR', 0, 0, 0, '0000-00-00', 0),
('BRG028', 'Bantex 8512', 0, 0, 10, '0000-00-00', 0),
('BRG029', 'Bantex 8522', 0, 0, 0, '0000-00-00', 0),
('BRG030', 'Bantex 8542', 0, 0, 0, '0000-00-00', 0),
('BRG031', 'Bantex 8562', 0, 0, 0, '0000-00-00', 0),
('BRG032', 'Batu LR 41', 0, 0, 0, '0000-00-00', 0),
('BRG033', 'Batu LR 44', 0, 0, 0, '0000-00-00', 0),
('BRG034', 'Bayfresh Gantung', 0, 0, 0, '0000-00-00', 0),
('BRG035', 'Baygon Cair', 0, 0, 0, '0000-00-00', 0),
('BRG036', 'Baygon Electro', 0, 0, 0, '0000-00-00', 0),
('BRG037', 'BC FOLIO', 0, 0, 0, '0000-00-00', 0),
('BRG038', 'BC FOLIO PAK', 0, 0, 0, '0000-00-00', 0),
('BRG039', 'BC PLANO', 0, 0, 0, '0000-00-00', 0),
('BRG040', 'Bimoli 1 lt Refill', 0, 0, 0, '0000-00-00', 0),
('BRG041', 'Bimoli 2 lt Refill', 0, 0, 0, '0000-00-00', 0),
('BRG042', 'Bimoli special 1 lt Refill', 0, 0, 0, '0000-00-00', 0),
('BRG043', 'Bimoli special 2 lt Refill', 0, 0, 0, '0000-00-00', 0),
('BRG044', 'Binder Clip 105', 0, 0, 0, '0000-00-00', 0),
('BRG045', 'Binder Clip 111', 0, 0, 0, '0000-00-00', 0),
('BRG046', 'Binder Clip 155', 0, 0, 0, '0000-00-00', 0),
('BRG047', 'Binder Clip 200', 0, 0, 0, '0000-00-00', 0),
('BRG048', 'Binder Clip 260', 0, 0, 0, '0000-00-00', 0),
('BRG049', 'Bk. 38', 0, 0, 0, '0000-00-00', 0),
('BRG050', 'Bk. 58', 0, 0, 10, '0000-00-00', 0),
('BRG051', 'Bk. Big Bozz 42', 0, 0, 0, '0000-00-00', 0),
('BRG052', 'Bk. Ekspedisi isi 100', 0, 0, 0, '0000-00-00', 0),
('BRG053', 'Bk. Folio Gelatik Kembar isi 2', 0, 0, 0, '0000-00-00', 0),
('BRG054', 'Bk. Folio Gelatik Kembar isi 3', 0, 0, 0, '0000-00-00', 0),
('BRG055', 'Bk. Gambar Kiky k', 0, 0, 100, '0000-00-00', 0),
('BRG056', 'Bk. Gambar Kiky tg', 0, 0, 0, '0000-00-00', 0),
('BRG057', 'Bk. Kas Folio', 0, 0, 0, '0000-00-00', 0),
('BRG058', 'Bk. Kas Folio 3K', 0, 0, 0, '0000-00-00', 0),
('BRG059', 'Bk. Kas Kwarto 3K', 0, 0, 0, '0000-00-00', 0),
('BRG060', 'Bk. Kwarto Gelatik isi 100', 0, 0, 0, '0000-00-00', 0),
('BRG061', 'Bk. Kwarto Gelatik isi 200', 0, 0, 0, '0000-00-00', 0),
('BRG062', 'Bk. Kwarto Gelatik isi 300', 0, 0, 0, '0000-00-00', 0),
('BRG063', 'Bk. Kwarto Gelatik isi 50', 0, 0, 0, '0000-00-00', 0),
('BRG064', 'Bk. Milimeter', 0, 0, 0, '0000-00-00', 0),
('BRG065', 'Bk. Milimeter B', 0, 0, 0, '0000-00-00', 0),
('BRG066', 'Blanko Sertifikat', 0, 0, 0, '0000-00-00', 0),
('BRG067', 'BLOKNOTE SPIRAL B', 0, 0, 0, '0000-00-00', 0),
('BRG068', 'BLOKNOTE SPIRAL K', 0, 0, 0, '0000-00-00', 0),
('BRG069', 'BLUEPRINT 100ML', 0, 0, 0, '0000-00-00', 0),
('BRG070', 'Bodrex Flu & Batuk', 0, 0, 0, '0000-00-00', 0),
('BRG071', 'Body clip', 0, 0, 0, '0000-00-00', 0),
('BRG072', 'Bohlam senter', 0, 0, 0, '0000-00-00', 0),
('BRG073', 'Box File Bantex', 0, 0, 0, '0000-00-00', 0),
('BRG074', 'Box File Gungyu', 0, 0, 0, '0000-00-00', 0),
('BRG075', 'Box MCB', 0, 0, 0, '0000-00-00', 0),
('BRG076', 'BRASSO', 0, 0, 0, '0000-00-00', 0),
('BRG077', 'Brown Coffee', 0, 0, 0, '0000-00-00', 0),
('BRG078', 'BUFALO PLANO', 0, 0, 0, '0000-00-00', 0),
('BRG079', 'BUKU CATATAN', 0, 0, 0, '0000-00-00', 0),
('BRG080', 'BURAM', 0, 0, 0, '0000-00-00', 0),
('BRG081', 'Bussines File (Map Snel Plasti', 0, 0, 0, '0000-00-00', 0),
('BRG082', 'Bussines File (Map Snel Plasti', 0, 0, 0, '0000-00-00', 0),
('BRG083', 'Camilan Criping Pisang', 0, 0, 0, '0000-00-00', 0),
('BRG084', 'Camilan Criping Telo', 0, 0, 0, '0000-00-00', 0),
('BRG085', 'Camilan Kripik Getuk', 0, 0, 0, '0000-00-00', 0),
('BRG086', 'Camilan Krupuk', 0, 0, 0, '0000-00-00', 0),
('BRG087', 'Camilan Puyur', 0, 0, 0, '0000-00-00', 0),
('BRG088', 'CANON 41', 0, 0, 0, '0000-00-00', 0),
('BRG089', 'CANON 5', 0, 0, 0, '0000-00-00', 0),
('BRG090', 'CANON 746 color', 0, 0, 0, '0000-00-00', 0),
('BRG091', 'CANON BC 03', 0, 0, 0, '0000-00-00', 0),
('BRG092', 'CANON BCI 21 Black', 0, 0, 0, '0000-00-00', 0),
('BRG093', 'CANON BCI 21 Colour', 0, 0, 0, '0000-00-00', 0),
('BRG094', 'Card Case B1', 0, 0, 0, '0000-00-00', 0),
('BRG095', 'Card Case B3', 0, 0, 0, '0000-00-00', 0),
('BRG096', 'Card Case B4', 0, 0, 0, '0000-00-00', 0),
('BRG097', 'Casablanca 100 ml', 0, 0, 0, '0000-00-00', 0),
('BRG098', 'CD Camus', 0, 0, 0, '0000-00-00', 0),
('BRG099', 'CD Case B', 0, 0, 0, '0000-00-00', 0),
('BRG100', 'CD Case K', 0, 0, 0, '0000-00-00', 0),
('BRG101', 'CD-R', 0, 0, 0, '0000-00-00', 0),
('BRG102', 'Clear 440ml', 0, 0, 0, '0000-00-00', 0),
('BRG103', 'Clear Holder 40 sheet Quantum', 0, 0, 0, '0000-00-00', 0),
('BRG104', 'Clear Pump', 0, 0, 0, '0000-00-00', 0),
('BRG105', 'Clip File & Spring file Inter ', 0, 0, 0, '0000-00-00', 0),
('BRG106', 'Club 240/Gelas', 0, 0, 0, '0000-00-00', 0),
('BRG107', 'Coca-cola,Fanta,Sprite 425', 0, 0, 0, '0000-00-00', 0),
('BRG108', 'Coffeemix', 0, 0, 0, '0000-00-00', 0),
('BRG109', 'Copy Holder', 0, 0, 0, '0000-00-00', 0),
('BRG110', 'Corset', 0, 0, 0, '0000-00-00', 0),
('BRG111', 'Cutter Kenko A-300 Reffil', 0, 0, 0, '0000-00-00', 0),
('BRG112', 'Cutter Kenko L-500', 0, 0, 0, '0000-00-00', 0),
('BRG113', 'Cutter Kenko L-500 Reffil', 0, 0, 0, '0000-00-00', 0),
('BRG114', 'Decolgen', 0, 0, 0, '0000-00-00', 0),
('BRG115', 'Dettol 100 ml', 0, 0, 0, '0000-00-00', 0),
('BRG116', 'Dettol 105 gr', 0, 0, 0, '0000-00-00', 0),
('BRG117', 'Dettol 65 gr', 0, 0, 0, '0000-00-00', 0),
('BRG118', 'Donlet 2,5\"', 0, 0, 0, '0000-00-00', 0),
('BRG119', 'Double Tape Nachi 2\" ', 0, 0, 0, '0000-00-00', 0),
('BRG120', 'Dove Conditioner 160 ml', 0, 0, 0, '0000-00-00', 0),
('BRG121', 'Dove Shampoo 160 ml', 0, 0, 0, '0000-00-00', 0),
('BRG122', 'Downy Antibacteria', 0, 0, 0, '0000-00-00', 0),
('BRG123', 'DVD-R', 0, 0, 0, '0000-00-00', 0),
('BRG124', 'Ekonomi krim', 0, 0, 0, '0000-00-00', 0),
('BRG125', 'EMBER', 0, 0, 0, '0000-00-00', 0),
('BRG126', 'Energen', 0, 0, 15, '0000-00-00', 0),
('BRG127', 'Energizer 9V', 0, 0, 0, '0000-00-00', 0),
('BRG128', 'Energizer A2', 0, 0, 0, '0000-00-00', 0),
('BRG129', 'Energizer A3', 0, 0, 0, '0000-00-00', 0),
('BRG130', 'Eveready A2', 0, 0, 0, '0000-00-00', 0),
('BRG131', 'Eveready C', 0, 0, 0, '0000-00-00', 0),
('BRG132', 'Eveready Senter LED', 0, 0, 0, '0000-00-00', 0),
('BRG133', 'Fatigon Hydro', 0, 0, 0, '0000-00-00', 0),
('BRG134', 'FD 4 GB Vandisk', 0, 0, 0, '0000-00-00', 0),
('BRG135', 'FD 8 GB Sandisk', 0, 0, 0, '0000-00-00', 0),
('BRG136', 'Fiesta K', 0, 0, 0, '0000-00-00', 0),
('BRG137', 'Filter Pompa ONDA', 0, 0, 0, '0000-00-00', 0),
('BRG138', 'Fiting T5', 0, 0, 0, '0000-00-00', 0),
('BRG139', 'FLIPCHART', 0, 0, 0, '0000-00-00', 0),
('BRG140', 'Folio Garis', 0, 0, 0, '0000-00-00', 0),
('BRG141', 'Fresh Care', 0, 0, 0, '0000-00-00', 0),
('BRG142', 'Gas 12 kg', 0, 0, 0, '0000-00-00', 0),
('BRG143', 'Gas 3 kg', 0, 0, 0, '0000-00-00', 0),
('BRG144', 'Gayung Air/Ciduk', 0, 0, 0, '0000-00-00', 0),
('BRG145', 'Gilette Goal Blue II', 0, 0, 0, '0000-00-00', 0),
('BRG146', 'Gilette Goal Click', 0, 0, 0, '0000-00-00', 0),
('BRG147', 'Gilette Goal Refill', 0, 0, 0, '0000-00-00', 0),
('BRG148', 'GIV 70 ml', 0, 0, 0, '0000-00-00', 0),
('BRG149', 'Glade 250', 0, 0, 0, '0000-00-00', 0),
('BRG150', 'Glade Gantung 70 gr ', 0, 0, 0, '0000-00-00', 0),
('BRG151', 'Glade Matic Refill', 0, 0, 0, '0000-00-00', 0),
('BRG152', 'Glass Cleaner Pump', 0, 0, 0, '0000-00-00', 0),
('BRG153', 'Good day', 0, 0, 0, '0000-00-00', 0),
('BRG154', 'Good day 250 ml', 0, 0, 0, '0000-00-00', 0),
('BRG155', 'Good day capucino', 0, 0, 10, '0000-00-00', 0),
('BRG156', 'Gula Pasir ', 0, 0, 0, '0000-00-00', 0),
('BRG157', 'Gunting 868', 0, 0, 0, '0000-00-00', 0),
('BRG158', 'Gunting 888', 0, 0, 0, '0000-00-00', 0),
('BRG159', 'Gunting SPL', 0, 0, 0, '0000-00-00', 0),
('BRG160', 'Halopika 20 W', 0, 0, 0, '0000-00-00', 0),
('BRG161', 'Halopika 50 W', 0, 0, 0, '0000-00-00', 0),
('BRG162', 'Hand Tally Kenko', 0, 0, 0, '0000-00-00', 0),
('BRG163', 'Handsoap Yuri 375 ml Reffiel', 0, 0, 0, '0000-00-00', 0),
('BRG164', 'Handsoap Yuri 410', 0, 0, 0, '0000-00-00', 0),
('BRG165', 'Hannoch 45 W', 0, 0, 0, '0000-00-00', 0),
('BRG166', 'Hansaflast', 0, 0, 0, '0000-00-00', 0),
('BRG167', 'Harpic 200 ml', 0, 0, 0, '0000-00-00', 0),
('BRG168', 'Harpic 450 ml', 0, 0, 0, '0000-00-00', 0),
('BRG169', 'HIT 225ml', 0, 0, 0, '0000-00-00', 0),
('BRG170', 'HIT 400ml', 0, 0, 0, '0000-00-00', 0),
('BRG171', 'HIT 600+120 ml', 0, 0, 0, '0000-00-00', 0),
('BRG172', 'HIT MAT', 0, 0, 0, '0000-00-00', 0),
('BRG173', 'HIT MAT Refill', 0, 0, 0, '0000-00-00', 0),
('BRG174', 'HP 27', 0, 0, 0, '0000-00-00', 0),
('BRG175', 'HP 28 + 25 Photo Paper', 0, 0, 0, '0000-00-00', 0),
('BRG176', 'HP 60', 0, 0, 0, '0000-00-00', 0),
('BRG177', 'HP 60 color', 0, 0, 0, '0000-00-00', 0),
('BRG178', 'HP Lenovo', 0, 0, 0, '0000-00-00', 0),
('BRG179', 'HP Samsung J1', 0, 0, 0, '0000-00-00', 0),
('BRG180', 'HP Samsung J2', 0, 0, 0, '0000-00-00', 0),
('BRG181', 'HP Samsung J3', 0, 0, 0, '0000-00-00', 0),
('BRG182', 'HP Samsung J3 Pro', 0, 0, 0, '0000-00-00', 0),
('BRG183', 'HP Samsung J5', 0, 0, 0, '0000-00-00', 0),
('BRG184', 'HP Xiaomi 4A', 0, 0, 0, '0000-00-00', 0),
('BRG185', 'HP Xiaomi 4X', 0, 0, 0, '0000-00-00', 0),
('BRG186', 'HVS 70 A3', 0, 0, 0, '0000-00-00', 0),
('BRG187', 'HVS 70 A4', 0, 0, 0, '0000-00-00', 0),
('BRG188', 'HVS 70 FOLIO', 0, 0, 0, '0000-00-00', 0),
('BRG189', 'HVS 70 WARNA ', 0, 0, 0, '0000-00-00', 0),
('BRG190', 'HVS 80 KW', 0, 0, 0, '0000-00-00', 0),
('BRG191', 'ID Kulit', 0, 0, 0, '0000-00-00', 0),
('BRG192', 'Inuoi 89 ml', 0, 0, 0, '0000-00-00', 0),
('BRG193', 'Jaket', 0, 0, 0, '0000-00-00', 0),
('BRG194', 'Jaket', 0, 0, 0, '0000-00-00', 0),
('BRG195', 'Jaket BPDP', 0, 0, 0, '0000-00-00', 0),
('BRG196', 'Jaket Prima', 0, 0, 0, '0000-00-00', 0),
('BRG197', 'Juice Love', 0, 0, 0, '0000-00-00', 0),
('BRG198', 'Jus Madu', 0, 0, 0, '0000-00-00', 0),
('BRG199', 'Kabel Power', 0, 0, 0, '0000-00-00', 0),
('BRG200', 'Kabel roll 9 m', 0, 0, 0, '0000-00-00', 0),
('BRG201', 'Kabel telpon 2 m', 0, 0, 0, '0000-00-00', 0),
('BRG202', 'Kain Lap Gading', 0, 0, 0, '0000-00-00', 0),
('BRG203', 'Kain Lorek', 0, 0, 0, '0000-00-00', 0),
('BRG204', 'Kamper Dahlia + Case', 0, 0, 0, '0000-00-00', 0),
('BRG205', 'Kamper Dahlia 100 gr', 0, 0, 0, '0000-00-00', 0),
('BRG206', 'Kamper Dahlia 150 gr', 0, 0, 0, '0000-00-00', 0),
('BRG207', 'Kamper Dahlia Ball K-31', 0, 0, 0, '0000-00-00', 0),
('BRG208', 'Kamper Dahlia Ball K-31P ', 0, 0, 0, '0000-00-00', 0),
('BRG209', 'Kamper Dahlia Blue clean', 0, 0, 0, '0000-00-00', 0),
('BRG210', 'Kanebo Aion', 0, 0, 0, '0000-00-00', 0),
('BRG211', 'Kanebo Unix', 0, 0, 0, '0000-00-00', 0),
('BRG212', 'Kantong Sampah', 0, 0, 0, '0000-00-00', 0),
('BRG213', 'Kaos BPDP', 0, 0, 0, '0000-00-00', 0),
('BRG214', 'Kaos krah katun', 0, 0, 0, '0000-00-00', 0),
('BRG215', 'Kaos lakos ', 0, 0, 0, '0000-00-00', 0),
('BRG216', 'Kaos lakos Lpj.', 0, 0, 0, '0000-00-00', 0),
('BRG217', 'Kaos oblong', 0, 0, 0, '0000-00-00', 0),
('BRG218', 'Kapas Modern', 0, 0, 0, '0000-00-00', 0),
('BRG219', 'Kapasitor Dispenser 70C', 0, 0, 0, '0000-00-00', 0),
('BRG220', 'Karbon Fax RF402', 0, 0, 0, '0000-00-00', 0),
('BRG221', 'Karet Gelang', 0, 0, 0, '0000-00-00', 0),
('BRG222', 'KARTU ABSEN AMANO', 0, 0, 0, '0000-00-00', 0),
('BRG223', 'Kaset sony C-90', 0, 0, 0, '0000-00-00', 0),
('BRG224', 'Kelereng', 0, 0, 0, '0000-00-00', 0),
('BRG225', 'Kertas Conqueror Crem', 0, 0, 0, '0000-00-00', 0),
('BRG226', 'Kertas Conqueror Green', 0, 0, 0, '0000-00-00', 0),
('BRG227', 'Kertas Conqueror Hijau', 0, 0, 0, '0000-00-00', 0),
('BRG228', 'Kertas Dorslag', 0, 0, 0, '0000-00-00', 0),
('BRG229', 'Kertas Ivory 230 isi 20', 0, 0, 0, '0000-00-00', 0),
('BRG230', 'Kertas Kado', 0, 0, 0, '0000-00-00', 0),
('BRG231', 'Kertas OJIFEX QQ', 0, 0, 0, '0000-00-00', 0),
('BRG232', 'Kertas Origami', 0, 0, 0, '0000-00-00', 0),
('BRG233', 'Kispray Pump', 0, 0, 0, '0000-00-00', 0),
('BRG234', 'Kispray Refill', 0, 0, 0, '0000-00-00', 0),
('BRG235', 'Kispray Refill Gold', 0, 0, 0, '0000-00-00', 0),
('BRG236', 'KIT Black Magic 200 ml Refill', 0, 0, 0, '0000-00-00', 0),
('BRG237', 'KIT Black Magic 35 ml Sachet', 0, 0, 0, '0000-00-00', 0),
('BRG238', 'KIT Motor 100 ml', 0, 0, 0, '0000-00-00', 0),
('BRG239', 'KIT Shampoo Motor', 0, 0, 0, '0000-00-00', 0),
('BRG240', 'Klem kabel 12', 0, 0, 0, '0000-00-00', 0),
('BRG241', 'Klem kabel 14', 0, 0, 0, '0000-00-00', 0),
('BRG242', 'Klem kabel 5', 0, 0, 0, '0000-00-00', 0),
('BRG243', 'Klem kabel 6', 0, 0, 0, '0000-00-00', 0),
('BRG244', 'Klem kabel 8', 0, 0, 0, '0000-00-00', 0),
('BRG245', 'Klem kabel 9', 0, 0, 0, '0000-00-00', 0),
('BRG246', 'Kopi ABC susu', 0, 0, 0, '0000-00-00', 0),
('BRG247', 'Kopi Banaran 100', 0, 0, 0, '0000-00-00', 0),
('BRG248', 'Kopi Banaran 250', 0, 0, 0, '0000-00-00', 0),
('BRG249', 'Kopi Banaran Premium', 0, 0, 0, '0000-00-00', 0),
('BRG250', 'Kopi KA 165g', 0, 0, 0, '0000-00-00', 0),
('BRG251', 'Kopi KA 165g Fresco', 0, 0, 0, '0000-00-00', 0),
('BRG252', 'Kopi KA 380g', 0, 0, 0, '0000-00-00', 0),
('BRG253', 'Kopi KA Mix', 0, 0, 0, '0000-00-00', 0),
('BRG254', 'Korek Gas Bara', 0, 0, 0, '0000-00-00', 0),
('BRG255', 'Kran 1/2\"', 0, 0, 0, '0000-00-00', 0),
('BRG256', 'Kran Frison', 0, 0, 0, '0000-00-00', 0),
('BRG257', 'Kran T', 0, 0, 0, '0000-00-00', 0),
('BRG258', 'Kran wastafel 1/2\" ANDO', 0, 0, 0, '0000-00-00', 0),
('BRG259', 'Kratingdaeng', 0, 0, 0, '0000-00-00', 0),
('BRG260', 'KRUNGKUT', 0, 0, 0, '0000-00-00', 0),
('BRG261', 'Kunir Putih B', 0, 0, 0, '0000-00-00', 0),
('BRG262', 'Kunir Putih K', 0, 0, 0, '0000-00-00', 0),
('BRG263', 'Kwitansi Besar', 0, 0, 0, '0000-00-00', 0),
('BRG264', 'Lakban Bening 2\"', 0, 0, 0, '0000-00-00', 0),
('BRG265', 'Lakban Coklat 2\"', 0, 0, 0, '0000-00-00', 0),
('BRG266', 'Lakban Foam Nachi', 0, 0, 0, '0000-00-00', 0),
('BRG267', 'Lakban Hitam 1\" Nachi', 0, 0, 0, '0000-00-00', 0),
('BRG268', 'Lakban Hitam 1.5\" Nachi', 0, 0, 0, '0000-00-00', 0),
('BRG269', 'Lakban Hitam 2\" Nachi', 0, 0, 0, '0000-00-00', 0),
('BRG270', 'Lakban Kertas 1\" Nachi', 0, 0, 0, '0000-00-00', 0),
('BRG271', 'Lakban Kertas 2\" Nachi', 0, 0, 0, '0000-00-00', 0),
('BRG272', 'Laminating Folio V-TEC', 0, 0, 0, '0000-00-00', 0),
('BRG273', 'Laminating saku SAKURA', 0, 0, 0, '0000-00-00', 0),
('BRG274', 'Laminating saku V-TEC', 0, 0, 0, '0000-00-00', 0),
('BRG275', 'Larutan Botol K', 0, 0, 0, '0000-00-00', 0),
('BRG276', 'Larutan Klg', 0, 0, 0, '0000-00-00', 0),
('BRG277', 'LCD PROJECTOR HITACHI', 0, 0, 0, '0000-00-00', 0),
('BRG278', 'Lem Alteco', 0, 0, 0, '0000-00-00', 0),
('BRG279', 'Lem Castol', 0, 0, 0, '0000-00-00', 0),
('BRG280', 'Lem G', 0, 0, 0, '0000-00-00', 0),
('BRG281', 'Lem Glukol tg', 0, 0, 0, '0000-00-00', 0),
('BRG282', 'Lem GUM Cair', 0, 0, 0, '0000-00-00', 0),
('BRG283', 'Lem Povinal', 0, 0, 0, '0000-00-00', 0),
('BRG284', 'Lem Tikus', 0, 0, 0, '0000-00-00', 0),
('BRG285', 'Lem UHU', 0, 0, 0, '0000-00-00', 0),
('BRG286', 'Lemon Peadge 170gr', 0, 0, 0, '0000-00-00', 0),
('BRG287', 'Lemon Peadge 450 ml Refill', 0, 0, 0, '0000-00-00', 0),
('BRG288', 'Lovy Cookies', 0, 0, 0, '0000-00-00', 0),
('BRG289', 'Madu Nusantara Sachet', 0, 0, 0, '0000-00-00', 0),
('BRG290', 'Magnet 10\'s', 0, 0, 0, '0000-00-00', 0),
('BRG291', 'Magnet 8\'s', 0, 0, 0, '0000-00-00', 0),
('BRG292', 'Mantel Jaket+Celana', 0, 0, 0, '0000-00-00', 0),
('BRG293', 'Mantel Ponco', 0, 0, 0, '0000-00-00', 0),
('BRG294', 'Mantel Ponco Lengan', 0, 0, 0, '0000-00-00', 0),
('BRG295', 'Map Caaryng Case', 0, 0, 0, '0000-00-00', 0),
('BRG296', 'Map Data Bag', 0, 0, 0, '0000-00-00', 0),
('BRG297', 'Map Jaring', 0, 0, 0, '0000-00-00', 0),
('BRG298', 'Map L', 0, 0, 0, '0000-00-00', 0),
('BRG299', 'Marjan ', 0, 0, 0, '0000-00-00', 0),
('BRG300', 'Materai 3000', 0, 0, 0, '0000-00-00', 0),
('BRG301', 'Materai 6000', 0, 0, 0, '0000-00-00', 0),
('BRG302', 'Max Creamer 500', 0, 0, 0, '0000-00-00', 0),
('BRG303', 'Max Creamer 50\'s', 0, 0, 0, '0000-00-00', 0),
('BRG304', 'MCB 16 A', 0, 0, 0, '0000-00-00', 0),
('BRG305', 'MCB 25 A', 0, 0, 0, '0000-00-00', 0),
('BRG306', 'Mika Film', 0, 0, 0, '0000-00-00', 0),
('BRG307', 'Mika Film Dragon', 0, 0, 0, '0000-00-00', 0),
('BRG308', 'Mika Film Lbr', 0, 0, 0, '0000-00-00', 0),
('BRG309', 'Millo Sachet', 0, 0, 0, '0000-00-00', 0),
('BRG310', 'Minyak Tawon', 0, 0, 0, '0000-00-00', 0),
('BRG311', 'Mouse Logitech B100', 0, 0, 0, '0000-00-00', 0),
('BRG312', 'Mouse pad B', 0, 0, 0, '0000-00-00', 0),
('BRG313', 'My Tea B', 0, 0, 0, '0000-00-00', 0),
('BRG314', 'Nachi Tape Isolasi Bening Keci', 0, 0, 0, '0000-00-00', 0),
('BRG315', 'Name Tag NIPPO', 0, 0, 0, '0000-00-00', 0),
('BRG316', 'Napoleon 100 ml', 0, 0, 0, '0000-00-00', 0),
('BRG317', 'Neozep', 0, 0, 0, '0000-00-00', 0),
('BRG318', 'Nescafe set', 0, 0, 0, '0000-00-00', 0),
('BRG319', 'Nutriboost', 0, 0, 0, '0000-00-00', 0),
('BRG320', 'Nutrisari  set', 0, 0, 0, '0000-00-00', 0),
('BRG321', 'Oli Meditran S 1 lt', 0, 0, 0, '0000-00-00', 0),
('BRG322', 'Oli Mesran 2T 1 lt', 0, 0, 0, '0000-00-00', 0),
('BRG323', 'Oli Mesran Super 4 lt', 0, 0, 0, '0000-00-00', 0),
('BRG324', 'Ordner GOBI', 0, 0, 0, '0000-00-00', 0),
('BRG325', 'Ordner Gung Yu ', 0, 0, 0, '0000-00-00', 0),
('BRG326', 'Osram 250 W', 0, 0, 0, '0000-00-00', 0),
('BRG327', 'Panasonic 11 W', 0, 0, 0, '0000-00-00', 0),
('BRG328', 'Panasonic 13 W', 0, 0, 0, '0000-00-00', 0),
('BRG329', 'Panasonic 6 V', 0, 0, 0, '0000-00-00', 0),
('BRG330', 'Panasonic 8 W', 0, 0, 0, '0000-00-00', 0),
('BRG331', 'Panasonic KX-FA 93/KX-FA57E', 0, 0, 0, '0000-00-00', 0),
('BRG332', 'Panasonic LED 6,5 W', 0, 0, 0, '0000-00-00', 0),
('BRG333', 'Panasonic LED 8,5 W', 0, 0, 0, '0000-00-00', 0),
('BRG334', 'Panasonic Spiral 11 W', 0, 0, 0, '0000-00-00', 0),
('BRG335', 'Panasonic Spiral 14 W', 0, 0, 0, '0000-00-00', 0),
('BRG336', 'Panasonic Spiral 19 W', 0, 0, 0, '0000-00-00', 0),
('BRG337', 'Panasonic Spiral 25 W', 0, 0, 0, '0000-00-00', 0),
('BRG338', 'Panasonic Spiral 8 W', 0, 0, 0, '0000-00-00', 0),
('BRG339', 'Paper Clip', 0, 0, 0, '0000-00-00', 0),
('BRG340', 'Paper Clip Jumbo No.5', 0, 0, 0, '0000-00-00', 0),
('BRG341', 'Paper Trimer V-TEC', 0, 0, 0, '0000-00-00', 0),
('BRG342', 'Paramex', 0, 0, 0, '0000-00-00', 0),
('BRG343', 'Pasta Gigi Pepsodent 120 gr', 0, 0, 0, '0000-00-00', 0),
('BRG344', 'Pen Click', 0, 0, 0, '0000-00-00', 0),
('BRG345', 'Pen Click Weiyada', 0, 0, 0, '0000-00-00', 0),
('BRG346', 'Pen Faster C6', 0, 0, 0, '0000-00-00', 0),
('BRG347', 'Pen Gel Click Weiyada', 0, 0, 0, '0000-00-00', 0),
('BRG348', 'Pen KJB Sablon', 0, 0, 0, '0000-00-00', 0),
('BRG349', 'Pen Pilot Balliner', 0, 0, 0, '0000-00-00', 0),
('BRG350', 'Pen Roller Weiyada/TIZO', 0, 0, 0, '0000-00-00', 0),
('BRG351', 'Pen Standart AE-7', 0, 0, 0, '0000-00-00', 0),
('BRG352', 'Pen Zebra Pick Knock', 0, 0, 0, '0000-00-00', 0),
('BRG353', 'Penggaris 30cm', 0, 0, 0, '0000-00-00', 0),
('BRG354', 'Penggaris segitiga b', 0, 0, 0, '0000-00-00', 0),
('BRG355', 'Penghapus White Board', 0, 0, 0, '0000-00-00', 0),
('BRG356', 'Pensil Steadler 2B', 0, 0, 0, '0000-00-00', 0),
('BRG357', 'Perforator Kenko 85', 0, 0, 0, '0000-00-00', 0),
('BRG358', 'Perforator Kenko Punch Kecil', 0, 0, 0, '0000-00-00', 0),
('BRG359', 'Permen Bontea Sachet', 0, 0, 0, '0000-00-00', 0),
('BRG360', 'Permen Kopiko', 0, 0, 0, '0000-00-00', 0),
('BRG361', 'Permen Strepsils', 0, 0, 0, '0000-00-00', 0),
('BRG362', 'Permen Swetco', 0, 0, 0, '0000-00-00', 0),
('BRG363', 'Permen Tolak Angin', 0, 0, 0, '0000-00-00', 0),
('BRG364', 'Philips 8 W', 0, 0, 0, '0000-00-00', 0),
('BRG365', 'Philips LED 13 W', 0, 0, 0, '0000-00-00', 0),
('BRG366', 'Philips LED 18 W', 0, 0, 0, '0000-00-00', 0),
('BRG367', 'Philips LED 7 W', 0, 0, 0, '0000-00-00', 0),
('BRG368', 'Philips TL 36 W', 0, 0, 0, '0000-00-00', 0),
('BRG369', 'PHILLIPS Halogen 150 W', 0, 0, 0, '0000-00-00', 0),
('BRG370', 'Photocop Film YASHICA Transpar', 0, 0, 0, '0000-00-00', 0),
('BRG371', 'Pin set', 0, 0, 0, '0000-00-00', 0),
('BRG372', 'Pines', 0, 0, 0, '0000-00-00', 0),
('BRG373', 'Pita Casio', 0, 0, 0, '0000-00-00', 0),
('BRG374', 'Pita Swallow', 0, 0, 0, '0000-00-00', 0),
('BRG375', 'Plastik 1 kg', 0, 0, 0, '0000-00-00', 0),
('BRG376', 'Plastik 2 kg', 0, 0, 0, '0000-00-00', 0),
('BRG377', 'Plastik 5 kg', 0, 0, 0, '0000-00-00', 0),
('BRG378', 'Plastik Clip 10x7', 0, 0, 0, '0000-00-00', 0),
('BRG379', 'Plastik Clip 12x8', 0, 0, 0, '0000-00-00', 0),
('BRG380', 'Plastik Es 1 kg', 0, 0, 0, '0000-00-00', 0),
('BRG381', 'Plastik Sampah', 0, 0, 0, '0000-00-00', 0),
('BRG382', 'Porstex', 0, 0, 0, '0000-00-00', 0),
('BRG383', 'Post-it', 0, 0, 0, '0000-00-00', 0),
('BRG384', 'Post-it Bantex', 0, 0, 0, '0000-00-00', 0),
('BRG385', 'Post-it Pronto', 0, 0, 0, '0000-00-00', 0),
('BRG386', 'Prestone Brake Fluid', 0, 0, 0, '0000-00-00', 0),
('BRG387', 'Prestone Power Stering', 0, 0, 0, '0000-00-00', 0),
('BRG388', 'Promag', 0, 0, 0, '0000-00-00', 0),
('BRG389', 'Refil parker', 0, 0, 0, '0000-00-00', 0),
('BRG390', 'Refil pensil 2B', 0, 0, 0, '0000-00-00', 0),
('BRG391', 'Refil pentel', 0, 0, 0, '0000-00-00', 0),
('BRG392', 'Refil weiyada/techjob', 0, 0, 0, '0000-00-00', 0),
('BRG393', 'Refil zebra', 0, 0, 0, '0000-00-00', 0),
('BRG394', 'Refil zebra F-07', 0, 0, 0, '0000-00-00', 0),
('BRG395', 'Refill B-Gel', 0, 0, 0, '0000-00-00', 0),
('BRG396', 'REFILL DATA PRINT', 0, 0, 0, '0000-00-00', 0),
('BRG397', 'Refill Mop Nagata', 0, 0, 0, '0000-00-00', 0),
('BRG398', 'Refill Toner HP 285A Veneta', 0, 0, 0, '0000-00-00', 0),
('BRG399', 'Refill Toner HP 435A Veneta', 0, 0, 0, '0000-00-00', 0),
('BRG400', 'Register Rools Telstruk 58x65', 0, 0, 0, '0000-00-00', 0),
('BRG401', 'Register Rools Telstruk 68x65', 0, 0, 0, '0000-00-00', 0),
('BRG402', 'Register Rools Telstruk 75x65', 0, 0, 0, '0000-00-00', 0),
('BRG403', 'Regulator Gas', 0, 0, 0, '0000-00-00', 0),
('BRG404', 'Remover Max', 0, 0, 0, '0000-00-00', 0),
('BRG405', 'Resibon', 0, 0, 0, '0000-00-00', 0),
('BRG406', 'Rexona', 0, 0, 0, '0000-00-00', 0),
('BRG407', 'Ribbon Premium #8758', 0, 0, 0, '0000-00-00', 0),
('BRG408', 'Ribbon Print Ink Epson #s01003', 0, 0, 0, '0000-00-00', 0),
('BRG409', 'Rinso 800 ml', 0, 0, 0, '0000-00-00', 0),
('BRG410', 'Rinso 900 gr', 0, 0, 0, '0000-00-00', 0),
('BRG411', 'Rinso Sachet 23 gr', 0, 0, 0, '0000-00-00', 0),
('BRG412', 'Rokok A Mild 12', 0, 0, 0, '0000-00-00', 0),
('BRG413', 'Rokok BBF', 0, 0, 0, '0000-00-00', 0),
('BRG414', 'Rokok BBR', 0, 0, 0, '0000-00-00', 0),
('BRG415', 'Rokok Clas Mild 12', 0, 0, 0, '0000-00-00', 0),
('BRG416', 'Rokok Clas Mild 16', 0, 0, 0, '0000-00-00', 0),
('BRG417', 'Rokok Diplomat Mild', 0, 0, 0, '0000-00-00', 0),
('BRG418', 'Rokok Djarum 76/16', 0, 0, 0, '0000-00-00', 0),
('BRG419', 'Rokok Djarum MLD Hitam', 0, 0, 0, '0000-00-00', 0),
('BRG420', 'Rokok Dji Sam Soe 12', 0, 0, 0, '0000-00-00', 0),
('BRG421', 'Rokok Dunhill ', 0, 0, 0, '0000-00-00', 0),
('BRG422', 'Rokok GG Signature', 0, 0, 0, '0000-00-00', 0),
('BRG423', 'Rokok GG Surya 12', 0, 0, 0, '0000-00-00', 0),
('BRG424', 'Rokok GG Surya 16', 0, 0, 0, '0000-00-00', 0),
('BRG425', 'Rokok GG Surya Profesional', 0, 0, 0, '0000-00-00', 0),
('BRG426', 'Rokok GG Surya Promild', 0, 0, 0, '0000-00-00', 0),
('BRG427', 'Rokok GGF', 0, 0, 0, '0000-00-00', 0),
('BRG428', 'Rokok Lucky Strike', 0, 0, 0, '0000-00-00', 0),
('BRG429', 'Rokok Lucky Strike Bold', 0, 0, 0, '0000-00-00', 0),
('BRG430', 'Rokok Marlboro', 0, 0, 0, '0000-00-00', 0),
('BRG431', 'Rokok Maxus', 0, 0, 0, '0000-00-00', 0),
('BRG432', 'Rokok Sampoerna Kretek', 0, 0, 0, '0000-00-00', 0),
('BRG433', 'Rokok U Mild 12', 0, 0, 0, '0000-00-00', 0),
('BRG434', 'Sabuk', 0, 0, 0, '0000-00-00', 0),
('BRG435', 'Sabun Sunlight 400ml', 0, 0, 0, '0000-00-00', 0),
('BRG436', 'Sabun Sunlight 800ml', 0, 0, 0, '0000-00-00', 0),
('BRG437', 'Sabut Nilon POLYTEX', 0, 0, 0, '0000-00-00', 0),
('BRG438', 'Sabut Spon POLYTEX', 0, 0, 0, '0000-00-00', 0),
('BRG439', 'Sabut Spon UNIK', 0, 0, 0, '0000-00-00', 0),
('BRG440', 'Sabut Stainles POLYTEX', 0, 0, 0, '0000-00-00', 0),
('BRG441', 'Saklar engkel OB', 0, 0, 0, '0000-00-00', 0),
('BRG442', 'Saklar seri IB', 0, 0, 0, '0000-00-00', 0),
('BRG443', 'Saklar seri OB', 0, 0, 0, '0000-00-00', 0),
('BRG444', 'SAMSON ', 0, 0, 0, '0000-00-00', 0),
('BRG445', 'SAPU CEMARA', 0, 0, 0, '0000-00-00', 0),
('BRG446', 'SAPU IJUK BERLIAN', 0, 0, 0, '0000-00-00', 0),
('BRG447', 'SAPU LIDI', 0, 0, 0, '0000-00-00', 0),
('BRG448', 'SAPU PLASTIK', 0, 0, 0, '0000-00-00', 0),
('BRG449', 'Sarung Tangan ', 0, 0, 0, '0000-00-00', 0),
('BRG450', 'Sarung Tangan ', 0, 0, 0, '0000-00-00', 0),
('BRG451', 'Selotip Nachi 1/2X72', 0, 0, 0, '0000-00-00', 0),
('BRG452', 'Selotip Nachi 1X72', 0, 0, 0, '0000-00-00', 0),
('BRG453', 'Selotip Templek', 0, 0, 0, '0000-00-00', 0),
('BRG454', 'Semir Cololite 20 ml', 0, 0, 0, '0000-00-00', 0),
('BRG455', 'Semir Cololite 35 gr', 0, 0, 0, '0000-00-00', 0),
('BRG456', 'Semir Cololite 45 ml', 0, 0, 0, '0000-00-00', 0),
('BRG457', 'Semir Kiwi 45gr', 0, 0, 0, '0000-00-00', 0),
('BRG458', 'Serbet', 0, 0, 0, '0000-00-00', 0),
('BRG459', 'Serbet gantung', 0, 0, 0, '0000-00-00', 0),
('BRG460', 'Serbet gantung', 0, 0, 0, '0000-00-00', 0),
('BRG461', 'Serok Sampah', 0, 0, 0, '0000-00-00', 0),
('BRG462', 'Setip B Staedler', 0, 0, 0, '0000-00-00', 0),
('BRG463', 'Setip K Debozz', 0, 0, 0, '0000-00-00', 0),
('BRG464', 'Setip K Faber Castel', 0, 0, 0, '0000-00-00', 0),
('BRG465', 'Setip K Staedler', 0, 0, 0, '0000-00-00', 0),
('BRG466', 'Sheet Protector BANTEX', 0, 0, 0, '0000-00-00', 0),
('BRG467', 'Sheet Protector V-TEC 100\'S', 0, 0, 0, '0000-00-00', 0),
('BRG468', 'Sifon Wastafel plastik', 0, 0, 0, '0000-00-00', 0),
('BRG469', 'Sifon Wastafel stainless', 0, 0, 0, '0000-00-00', 0),
('BRG470', 'Sikat', 0, 0, 0, '0000-00-00', 0),
('BRG471', 'Sikat Gigi Formula', 0, 0, 0, '0000-00-00', 0),
('BRG472', 'Sikat Lantai Clean Up 2808', 0, 0, 0, '0000-00-00', 0),
('BRG473', 'Sikat Lion star', 0, 0, 0, '0000-00-00', 0),
('BRG474', 'Sikat Lion star', 0, 0, 0, '0000-00-00', 0),
('BRG475', 'Sikat sepatu', 0, 0, 0, '0000-00-00', 0),
('BRG476', 'Sikat sepatu Eterna', 0, 0, 0, '0000-00-00', 0),
('BRG477', 'Simpatika', 0, 0, 0, '0000-00-00', 0),
('BRG478', 'Sisir K', 0, 0, 0, '0000-00-00', 0),
('BRG479', 'Snel Stik Stopmap', 0, 0, 0, '0000-00-00', 0),
('BRG480', 'Soffel Sachet', 0, 0, 0, '0000-00-00', 0),
('BRG481', 'Softex Charm maxi wing 5', 0, 0, 0, '0000-00-00', 0),
('BRG482', 'Soklin Smart ', 0, 0, 0, '0000-00-00', 0),
('BRG483', 'Speaker Active', 0, 0, 0, '0000-00-00', 0),
('BRG484', 'Spidol Kecil Sign pen', 0, 0, 0, '0000-00-00', 0),
('BRG485', 'Spidol OHP Faber Castel', 0, 0, 0, '0000-00-00', 0),
('BRG486', 'Spidol OHP Snowman', 0, 0, 0, '0000-00-00', 0),
('BRG487', 'Spidol Snowman Marker 450', 0, 0, 0, '0000-00-00', 0),
('BRG488', 'Spidol Snowman Permanen', 0, 0, 0, '0000-00-00', 0),
('BRG489', 'Spidol Snowman WB', 0, 0, 0, '0000-00-00', 0),
('BRG490', 'Spirtus', 0, 0, 0, '0000-00-00', 0),
('BRG491', 'Stabillo Boss', 0, 0, 0, '0000-00-00', 0),
('BRG492', 'Stamp Pad Artline No.1', 0, 0, 0, '0000-00-00', 0),
('BRG493', 'Stapler HD-10', 0, 0, 0, '0000-00-00', 0),
('BRG494', 'Stapler SDI No.3 24/6', 0, 0, 0, '0000-00-00', 0),
('BRG495', 'Staples 24/6 SDI', 0, 0, 0, '0000-00-00', 0),
('BRG496', 'Staples Etona 13/6', 0, 0, 0, '0000-00-00', 0),
('BRG497', 'Staples MAX 1210 FA-H 23/10', 0, 0, 0, '0000-00-00', 0),
('BRG498', 'Staples MAX 1213 FA-H 23/13', 0, 0, 0, '0000-00-00', 0),
('BRG499', 'Staples MAX 1215 FA-H 23/15', 0, 0, 0, '0000-00-00', 0),
('BRG500', 'Staples MAX 1217 FA-H 23/17', 0, 0, 0, '0000-00-00', 0),
('BRG501', 'Staples MAX No.10', 0, 0, 0, '0000-00-00', 0),
('BRG502', 'Staples MAX NO.3-1M 24/6', 0, 0, 0, '0000-00-00', 0),
('BRG503', 'Steker', 0, 0, 0, '0000-00-00', 0),
('BRG504', 'Steker multi BROCO', 0, 0, 0, '0000-00-00', 0),
('BRG505', 'Steker multi LOYAl', 0, 0, 0, '0000-00-00', 0),
('BRG506', 'Stella Car Parfum', 0, 0, 0, '0000-00-00', 0),
('BRG507', 'Stella Gantung', 0, 0, 0, '0000-00-00', 0),
('BRG508', 'Stella Matic', 0, 0, 0, '0000-00-00', 0),
('BRG509', 'Stella Matic Reffiel', 0, 0, 0, '0000-00-00', 0),
('BRG510', 'Stella Mini Matic', 0, 0, 0, '0000-00-00', 0),
('BRG511', 'Stella Mini Reffiel', 0, 0, 0, '0000-00-00', 0),
('BRG512', 'Sticker Labels Champion 103/12', 0, 0, 0, '0000-00-00', 0),
('BRG513', 'Sticker Labels T&J 121/103', 0, 0, 0, '0000-00-00', 0),
('BRG514', 'Sticker Labels T&J A4', 0, 0, 0, '0000-00-00', 0),
('BRG515', 'Stopkontak INBO', 0, 0, 0, '0000-00-00', 0),
('BRG516', 'Stopkontak Lb-1', 0, 0, 0, '0000-00-00', 0),
('BRG517', 'Stopkontak Lb-4', 0, 0, 0, '0000-00-00', 0),
('BRG518', 'Stopkontak Lb-5', 0, 0, 0, '0000-00-00', 0),
('BRG519', 'Stopkontak Lb-6', 0, 0, 0, '0000-00-00', 0),
('BRG520', 'Stopmap Biola', 0, 0, 0, '0000-00-00', 0),
('BRG521', 'Stopmap PANDA', 0, 0, 0, '0000-00-00', 0),
('BRG522', 'SULAK', 0, 0, 0, '0000-00-00', 0),
('BRG523', 'Superpell 800 ml', 0, 0, 0, '0000-00-00', 0),
('BRG524', 'T Closet', 0, 0, 0, '0000-00-00', 0),
('BRG525', 'Tali ID Card', 0, 0, 0, '0000-00-00', 0),
('BRG526', 'TALI RAFIA', 0, 0, 0, '0000-00-00', 0),
('BRG527', 'Tape Dispencer k', 0, 0, 0, '0000-00-00', 0),
('BRG528', 'Tas BPDP - SMK', 0, 0, 0, '0000-00-00', 0),
('BRG529', 'Tas Cangklong hitam', 0, 0, 0, '0000-00-00', 0),
('BRG530', 'Tas Cangklong swadana', 0, 0, 0, '0000-00-00', 0),
('BRG531', 'Tas Esgotado', 0, 0, 0, '0000-00-00', 0),
('BRG532', 'Tas Grand pollo 2609', 0, 0, 0, '0000-00-00', 0),
('BRG533', 'Tas Grand pollo 5206', 0, 0, 0, '0000-00-00', 0),
('BRG534', 'Tas Grand pollo 5210', 0, 0, 0, '0000-00-00', 0),
('BRG535', 'Tas Grand pollo 682', 0, 0, 0, '0000-00-00', 0),
('BRG536', 'Tas Grand pollo villa 3518003', 0, 0, 0, '0000-00-00', 0),
('BRG537', 'Tas Kulit LPP', 0, 0, 0, '0000-00-00', 0),
('BRG538', 'Tas Pavioti 0833', 0, 0, 0, '0000-00-00', 0),
('BRG539', 'Tas Pavioti Black 6500', 0, 0, 0, '0000-00-00', 0),
('BRG540', 'Tas Polo Bruno 8013', 0, 0, 0, '0000-00-00', 0),
('BRG541', 'Tas Polo Clasic', 0, 0, 0, '0000-00-00', 0),
('BRG542', 'Tas Polo Freedom 68011', 0, 0, 0, '0000-00-00', 0),
('BRG543', 'Tas Polo king', 0, 0, 0, '0000-00-00', 0),
('BRG544', 'Tas Polo Maestro ', 0, 0, 0, '0000-00-00', 0),
('BRG545', 'Tas Polo Villa', 0, 0, 0, '0000-00-00', 0),
('BRG546', 'Tas Ransel Doble', 0, 0, 0, '0000-00-00', 0),
('BRG547', 'Tas Ransel Doble + Cover', 0, 0, 0, '0000-00-00', 0),
('BRG548', 'Tas Shicata', 0, 0, 0, '0000-00-00', 0),
('BRG549', 'Tas Shicata', 0, 0, 0, '0000-00-00', 0),
('BRG550', 'Tas Shicata 2914', 0, 0, 0, '0000-00-00', 0),
('BRG551', 'Tas Shicata/Exist 8470', 0, 0, 0, '0000-00-00', 0),
('BRG552', 'Tea Botol Sosro', 0, 0, 0, '0000-00-00', 0),
('BRG553', 'Tea Kaligua', 0, 0, 0, '0000-00-00', 0),
('BRG554', 'Tea Tjatot', 0, 0, 0, '0000-00-00', 0),
('BRG555', 'Tea Tong Tji Curah', 0, 0, 0, '0000-00-00', 0),
('BRG556', 'Tea Tong Tji Jasmine', 0, 0, 0, '0000-00-00', 0),
('BRG557', 'Tea Tong Tji JP', 0, 0, 0, '0000-00-00', 0),
('BRG558', 'TEMPAT SABUN', 0, 0, 0, '0000-00-00', 0),
('BRG559', 'TEMPAT SABUN cair', 0, 0, 0, '0000-00-00', 0),
('BRG560', 'Tempat sampah injak lion star', 0, 0, 0, '0000-00-00', 0),
('BRG561', 'Tempat sampah injak lion star', 0, 0, 0, '0000-00-00', 0),
('BRG562', 'Tempat sampah injak Shinpo', 0, 0, 0, '0000-00-00', 0),
('BRG563', 'Tempat sampah kranjang', 0, 0, 0, '0000-00-00', 0),
('BRG564', 'Tempat sampah kranjang Lion st', 0, 0, 0, '0000-00-00', 0),
('BRG565', 'Tinta Acaciana 100 ml', 0, 0, 0, '0000-00-00', 0),
('BRG566', 'Tinta Cap \"JOGJADAMAI\"', 0, 0, 0, '0000-00-00', 0),
('BRG567', 'Tinta Nomerator Lion', 0, 0, 0, '0000-00-00', 0),
('BRG568', 'Tinta Veneta 70 ml', 0, 0, 0, '0000-00-00', 0),
('BRG569', 'Tinta Zenith', 0, 0, 0, '0000-00-00', 0),
('BRG570', 'Tipp-Ex kenko', 0, 0, 0, '0000-00-00', 0),
('BRG571', 'Tisue Makan toply', 0, 0, 0, '0000-00-00', 0),
('BRG572', 'Tisue Mitu', 0, 0, 0, '0000-00-00', 0),
('BRG573', 'Tisue Nice roll', 0, 0, 0, '0000-00-00', 0),
('BRG574', 'Tisue Paseo K', 0, 0, 0, '0000-00-00', 0),
('BRG575', 'Tisue Paseo Kotak', 0, 0, 0, '0000-00-00', 0),
('BRG576', 'Tisue Paseo Reffiel Biru', 0, 0, 0, '0000-00-00', 0),
('BRG577', 'Tisue Paseo Reffiel Hijau', 0, 0, 0, '0000-00-00', 0),
('BRG578', 'Tisue Paseo Travel', 0, 0, 0, '0000-00-00', 0),
('BRG579', 'TL mini 21 W', 0, 0, 0, '0000-00-00', 0),
('BRG580', 'TL mini 28 W - K', 0, 0, 0, '0000-00-00', 0),
('BRG581', 'TL mini 28 W - P', 0, 0, 0, '0000-00-00', 0),
('BRG582', 'TOA WIRELES MIC', 0, 0, 0, '0000-00-00', 0),
('BRG583', 'Tolak Angin ', 0, 0, 0, '0000-00-00', 0),
('BRG584', 'Toner Minolta', 0, 0, 0, '0000-00-00', 0),
('BRG585', 'Topeng', 0, 0, 0, '0000-00-00', 0),
('BRG586', 'Topi Bludru', 0, 0, 0, '0000-00-00', 0),
('BRG587', 'Topi Laken', 0, 0, 0, '0000-00-00', 0),
('BRG588', 'Tora CafÃ©', 0, 0, 0, '0000-00-00', 0),
('BRG589', 'Transparansi Fullmark', 0, 0, 0, '0000-00-00', 0),
('BRG590', 'TS 100\'s', 0, 0, 0, '0000-00-00', 0),
('BRG591', 'TS 100\'s Diabetic', 0, 0, 0, '0000-00-00', 0),
('BRG592', 'TS 25\'s ', 0, 0, 0, '0000-00-00', 0),
('BRG593', 'TS 50\'s', 0, 0, 0, '0000-00-00', 0),
('BRG594', 'TS 50\'s Diabetic', 0, 0, 0, '0000-00-00', 0),
('BRG595', 'TS Sirup', 0, 0, 0, '0000-00-00', 0),
('BRG596', 'TUDOR', 0, 0, 0, '0000-00-00', 0),
('BRG597', 'Tusuk Gigi B', 0, 0, 0, '0000-00-00', 0),
('BRG598', 'Tusuk Gigi K', 0, 0, 0, '0000-00-00', 0),
('BRG599', 'Ultraflu', 0, 0, 0, '0000-00-00', 0),
('BRG600', 'Vanish 180 ml', 0, 0, 0, '0000-00-00', 0),
('BRG601', 'Vanish 450 ml Refill', 0, 0, 0, '0000-00-00', 0),
('BRG602', 'Vanish 500 ml', 0, 0, 0, '0000-00-00', 0),
('BRG603', 'Vicee', 0, 0, 0, '0000-00-00', 0),
('BRG604', 'Vixal 500 ml', 0, 0, 0, '0000-00-00', 0),
('BRG605', 'Wings krim', 0, 0, 0, '0000-00-00', 0),
('BRG606', 'Wiper Hawai', 0, 0, 0, '0000-00-00', 0),
('BRG607', 'Wiper Kleenup 23 cm', 0, 0, 0, '0000-00-00', 0),
('BRG608', 'Wipol 800 ml', 0, 0, 0, '0000-00-00', 0),
('BRG609', 'Wipol 800 ml Refill', 0, 0, 0, '0000-00-00', 0),
('BRG610', 'Xon-Ce ', 0, 0, 0, '0000-00-00', 0),
('BRG611', 'Yomico 2,5\"', 0, 0, 0, '0000-00-00', 0),
('BRG612', 'You C 1000 ', 0, 0, 0, '0000-00-00', 0),
('BRG613', 'You C 1000 - 500ml', 0, 0, 0, '0000-00-00', 0),
('BRG614', 'Zipper Bag', 0, 0, 0, '0000-00-00', 0),
('BRG615', 'BuahBuahan', 0, 0, 0, '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tempbarang`
--

CREATE TABLE `tempbarang` (
  `tamptransmsk` int(11) NOT NULL,
  `nm_supp` varchar(30) NOT NULL,
  `almtsupp` varchar(100) NOT NULL,
  `tlpsup` varchar(13) NOT NULL,
  `byr` varchar(7) NOT NULL,
  `tempo` date NOT NULL,
  `tgltrans` date NOT NULL,
  `id_jns` varchar(6) NOT NULL,
  `kd_brg` varchar(30) NOT NULL,
  `hrg` int(11) NOT NULL,
  `jmlh` int(11) NOT NULL,
  `satuan` varchar(10) NOT NULL,
  `expr` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transbrg_klr`
--

CREATE TABLE `transbrg_klr` (
  `transbrg_klr` int(11) NOT NULL,
  `transbrg_msk` int(11) NOT NULL,
  `kd_brg` varchar(30) NOT NULL,
  `hrg` int(11) NOT NULL,
  `jlmh` int(11) NOT NULL,
  `nm_supp` varchar(20) NOT NULL,
  `almtsupp` varchar(100) NOT NULL,
  `tlpsup` varchar(13) NOT NULL,
  `ket` varchar(15) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transbrg_klr`
--

INSERT INTO `transbrg_klr` (`transbrg_klr`, `transbrg_msk`, `kd_brg`, `hrg`, `jlmh`, `nm_supp`, `almtsupp`, `tlpsup`, `ket`, `tgl`) VALUES
(2, 1, 'BRG001', 1000, 50, 'CV Buana', 'Magelang', '087789374534', 'Masuk Toko', '2019-01-12'),
(3, 4, 'BRG002', 1000, 50, 'CV Buana', 'Magelang', '087789374534', 'Return', '2019-01-12'),
(4, 3, 'BRG001', 1000, 100, 'CV Buana', 'Magelang', '087789374534', 'Return', '2019-01-12'),
(5, 2, 'BRG002', 1000, 25, 'CV Buana', 'Magelang', '087789374534', 'Masuk Toko', '2019-01-12'),
(6, 1, 'BRG001', 1000, 15, 'CV Buana', 'Magelang', '087789374534', 'Return', '2019-01-12'),
(7, 10, 'BRG006', 1000, 5, 'PT ASDI', 'Solo', '087753423453', 'Return', '2019-01-12'),
(8, 5, 'BRG005', 1500, 4, 'PT Sejahtera', 'Bandung', '089975644465', 'Masuk Toko', '2019-01-12'),
(9, 1, 'BRG001', 1000, 15, 'CV Buana', 'Magelang', '087789374534', 'Masuk Toko', '2019-01-13'),
(10, 2, 'BRG002', 1000, 10, 'CV Buana', 'Magelang', '087789374534', 'Return', '2019-01-13'),
(11, 2, 'BRG002', 1000, 5, 'CV Buana', 'Magelang', '087789374534', 'Masuk Toko', '2019-01-13'),
(12, 1, 'BRG001', 1000, 20, 'CV Buana', 'Magelang', '087789374534', 'Return', '2019-01-14'),
(13, 5, 'BRG005', 1500, 10, 'PT Sejahtera', 'Bandung', '089975644465', 'Return', '2019-01-14'),
(14, 2, 'BRG002', 1000, 10, 'CV Buana', 'Magelang', '087789374534', 'Masuk Toko', '2019-01-14'),
(15, 6, 'BRG006', 1000, 4, 'PT Sejahtera', 'Bandung', '089975644465', 'Return', '2019-01-15'),
(16, 5, 'BRG005', 1500, 4, 'PT Sejahtera', 'Bandung', '089975644465', 'Return', '2019-01-15'),
(17, 7, 'BRG008', 1000, 2, 'PT Maju', 'Randegan', '087753455432', 'Masuk Toko', '2019-01-15'),
(18, 29, 'BRG583', 2000, 10, 'PT Sukamaju', 'Jl. Bahagia no 21 Yogyakarta', '082234544565', 'Masuk Toko', '2019-01-16'),
(19, 29, 'BRG583', 2000, 5, 'PT Sukamaju', 'Jl. Bahagia no 21 Yogyakarta', '082234544565', 'Return', '2019-01-16'),
(20, 5, 'BRG005', 1500, 6, 'PT Sejahtera', 'Bandung', '089975644465', 'Return', '2019-01-16'),
(22, 25, 'BRG005', 1000, 10, 'PT SCDG', 'Velders', '085336044355', 'Return', '2019-01-16'),
(23, 13, 'BRG001', 1000, 12, 'PT Abah Jaya', 'Magelang no 21 Jalan situ', '088734566', 'Return', '2019-01-16'),
(24, 8, 'BRG006', 100, 2, 'PT Boya', 'Randegan', '087734523443', 'Masuk Toko', '2019-01-16'),
(25, 8, 'BRG006', 100, 2, 'PT Boya', 'Randegan', '087734523443', 'Return', '2019-01-16'),
(26, 9, 'BRG006', 1000, 1, 'PT ASMI', 'Yogyakarta', '087764345443', 'Return', '2019-01-16'),
(27, 9, 'BRG006', 1000, 3, 'PT ASMI', 'Yogyakarta', '087764345443', 'Masuk Toko', '2019-01-16'),
(28, 30, 'BRG126', 1500, 15, 'PT Sukamundur', 'Jl Sosial no4 Klaten', '085336044355', 'Return', '2019-01-18'),
(29, 28, 'BRG005', 3500, 30, 'PT Sukamaju', 'Jl. Bahagia no 21 Yogyakarta', '082234544565', 'Masuk Toko', '2019-01-18'),
(30, 31, 'BRG155', 2000, 10, 'PT Sukamundur', 'Jl Sosial no4 Klaten', '085336044355', 'Return', '2019-01-18'),
(31, 6, 'BRG006', 1000, 1, 'PT Sejahtera', 'Bandung', '089975644465', 'Masuk Toko', '2019-01-18'),
(32, 12, 'BRG003', 3200, 8, 'PT Muiza', 'Magelang', '08783475343', 'Masuk Toko', '2019-01-18'),
(33, 12, 'BRG003', 3200, 4, 'PT Muiza', 'Magelang', '08783475343', 'Masuk Toko', '2019-01-19'),
(34, 12, 'BRG003', 3200, 2, 'PT Muiza', 'Magelang', '08783475343', 'Masuk Toko', '2019-01-19'),
(35, 6, 'BRG006', 1000, 2, 'PT Sejahtera', 'Bandung', '089975644465', 'Masuk Toko', '2019-01-19'),
(36, 34, 'BRG007', 100, 1, 'PT Sejahtera', 'Bandung', '089975644465', 'Masuk Toko', '2019-01-19'),
(37, 12, 'BRG003', 3200, 34, 'PT Muiza', 'Magelang', '08783475343', 'Return', '2019-01-26'),
(38, 6, 'BRG006', 1000, 3, 'PT Sejahtera', 'Bandung', '089975644465', 'Masuk Toko', '2019-02-04'),
(39, 7, 'BRG008', 1000, 2, 'PT Maju', 'Randegan', '087753455432', 'Masuk Toko', '2019-02-15'),
(40, 7, 'BRG008', 1000, 1, 'PT Maju', 'Randegan', '087753455432', 'Masuk Toko', '2019-02-15'),
(41, 7, 'BRG008', 1000, 1, 'PT Maju', 'Randegan', '087753455432', 'Return', '2019-02-15'),
(42, 44, 'BRG002', 1000, 1, 'PT Cobo', 'Elder', '099331234455', 'Masuk Toko', '2019-02-15'),
(43, 44, 'BRG002', 1000, 1, 'PT Cobo', 'Elder', '099331234455', 'Masuk Toko', '2019-02-15'),
(44, 46, 'BRG001', 1000, 2, 'PT Mamba', 'Solo', '0878345345', 'Return', '2019-02-15'),
(45, 46, 'BRG001', 1000, 2, 'PT Mamba', 'Solo', '0878345345', 'Return', '2019-02-15'),
(46, 46, 'BRG001', 1000, 2, 'PT Mamba', 'Solo', '0878345345', 'Masuk Toko', '2019-02-15'),
(47, 46, 'BRG001', 1000, 4, 'PT Mamba', 'Solo', '0878345345', 'Return', '2019-02-15'),
(48, 45, 'BRG001', 200, 1, 'PT Mamad', 'Randegan', '081234567890', 'Masuk Toko', '2019-02-15'),
(49, 44, 'BRG002', 1000, 8, 'PT Cobo', 'Elder', '099331234455', 'Masuk Toko', '2019-02-15'),
(50, 47, 'BRG001', 1000, 10, 'PT Agus', 'Magelang', '081234567890', 'Return', '2019-02-15'),
(51, 45, 'BRG001', 200, 9, 'PT Mamad', 'Randegan', '081234567890', 'Masuk Toko', '2019-02-15'),
(52, 48, 'BRG002', 1000, 10, 'PT Sejahtera', 'Randegan', '081234567890', 'Return', '2019-02-15'),
(53, 41, 'BRG001', 10000, 10, 'Maju', 'Elrios', '087823455434', 'Return', '2019-02-15'),
(54, 43, 'BRG004', 1000, 10, 'PT Agung Jaya', 'Bantarsari', '099331234455', 'Masuk Toko', '2019-02-15'),
(55, 7, 'BRG008', 1000, 1, 'PT Maju', 'Randegan', '087753455432', 'Masuk Toko', '2019-02-16'),
(56, 14, 'BRG004', 1000, 15, 'PT Buyo Baru', 'Solo', '09882347543', 'Return', '2019-02-16'),
(57, 15, 'BRG005', 1250, 12, 'PT Coba Lagi', 'Disitu', '099834534', 'Return', '2019-02-16'),
(59, 17, 'BRG001', 1000, 10, 'Cobo Service', 'Verder', '08783453223', 'Return', '2019-02-16'),
(60, 20, 'BRG005', 1000, 10, 'PT Atos', 'Randegan', '08773453345', 'Return', '2019-02-16'),
(63, 18, 'BRG003', 2000, 6, 'Phoru Spa', 'Lanox', '087834522345', 'Return', '2019-02-16'),
(64, 27, 'BRG018', 3000, 10, 'Sampul', 'Sleman', '085336044355', 'Return', '2019-02-16'),
(65, 19, 'BRG001', 1500, 5, 'PT Nur Agung', 'Bantarsari', '0834523556', 'Return', '2019-02-16'),
(66, 36, 'BRG023', 1000, 15, 'PT Hauhiro', 'Rozlos', '085244632188', 'Return', '2019-02-16'),
(67, 40, 'BRG001', 1000, 10, 'PT Luar', 'Magelang', '087834534534', 'Return', '2019-02-16'),
(68, 49, 'BRG001', 1000, 100, 'PT Muiza', 'Solo', '081234567890', 'Return', '2019-02-16'),
(69, 50, 'BRG004', 1000, 10, 'PT Muiza', 'Solo', '081234567890', 'Return', '2019-02-16'),
(70, 51, 'BRG001', 1500, 10, 'PT Buana', 'Negla', '081234567890', 'Masuk Toko', '2019-02-16'),
(71, 52, 'BRG001', 1000, 10, 'Angger Gaming', 'Ngawi', '099331234455', 'Return', '2019-02-16'),
(72, 53, 'BRG001', 1000, 10, 'Nagoya', 'Sinduadi', '099331234455', 'Masuk Toko', '2019-02-16'),
(73, 54, 'BRG001', 1000, 10, 'PT Bojnaja', 'Randegan', '099331234455', 'Masuk Toko', '2019-02-16'),
(74, 8, 'BRG006', 100, 4, 'PT Boya', 'Randegan', '087734523443', 'Return', '2019-02-16'),
(75, 9, 'BRG006', 1000, 2, 'PT ASMI', 'Yogyakarta', '087764345443', 'Masuk Toko', '2019-02-16'),
(76, 56, 'BRG004', 1000, 8, 'Cafela', 'Jatisawit', '099331234455', 'Masuk Toko', '2019-02-16'),
(77, 56, 'BRG004', 1000, 2, 'Cafela', 'Jatisawit', '099331234455', 'Return', '2019-02-16'),
(78, 34, 'BRG007', 100, 9, 'PT Sejahtera', 'Bandung', '089975644465', 'Masuk Toko', '2019-02-16'),
(79, 8, 'BRG006', 100, 2, 'PT Boya', 'Randegan', '087734523443', 'Masuk Toko', '2019-02-16'),
(80, 57, 'BRG003', 23000, 2, 'Mas Rudi', 'Magelang', '099331234455', 'Return', '2019-02-16'),
(81, 58, 'BRG004', 12000, 1, 'Mas Rudi', 'Magelang', '099331234455', 'Return', '2019-02-16'),
(82, 59, 'BRG008', 1000, 5, 'Saudara', 'Magelang', '099331234455', 'Masuk Toko', '2019-02-16'),
(83, 59, 'BRG008', 1000, 5, 'Saudara', 'Magelang', '099331234455', 'Return', '2019-02-16'),
(84, 60, 'BRG005', 2300, 2, 'PT Maju', 'Yogyakarta', '081234567890', 'Masuk Toko', '2019-02-16'),
(85, 60, 'BRG005', 2300, 3, 'PT Maju', 'Yogyakarta', '081234567890', 'Return', '2019-02-16'),
(86, 61, 'BRG005', 3500, 10, 'PT Sukamaju', 'Jl. Bahagia no 21 Yogyakarta', '081234567890', 'Masuk Toko', '2019-02-22'),
(87, 62, 'BRG583', 2000, 10, 'PT Sukamaju', 'Jl. Bahagia no 21 Yogyakarta', '081234567890', 'Masuk Toko', '2019-02-22'),
(88, 62, 'BRG583', 2000, 5, 'PT Sukamaju', 'Jl. Bahagia no 21 Yogyakarta', '081234567890', 'Return', '2019-02-22'),
(89, 60, 'BRG005', 2300, 5, 'PT Maju', 'Yogyakarta', '081234567890', 'Return', '2019-02-22');

--
-- Trigger `transbrg_klr`
--
DELIMITER $$
CREATE TRIGGER `update_after_insert_transbrg_klr` AFTER INSERT ON `transbrg_klr` FOR EACH ROW BEGIN
UPDATE tb_brg set stk = stk - NEW.jlmh WHERE kd_brg = NEW.kd_brg;
UPDATE transbrg_msk set jmlhesc = jmlhesc - NEW.jlmh WHERE transbrg_msk = NEW.transbrg_msk; 
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transbrg_msk`
--

CREATE TABLE `transbrg_msk` (
  `transbrg_msk` int(11) NOT NULL,
  `transmsk` int(11) NOT NULL,
  `id_jns` varchar(6) NOT NULL,
  `kd_brg` varchar(30) NOT NULL,
  `hrg` int(11) NOT NULL,
  `jmlh` int(11) NOT NULL,
  `jmlhesc` int(11) NOT NULL,
  `satuan` varchar(10) NOT NULL,
  `expr` date NOT NULL,
  `byr` varchar(7) NOT NULL,
  `kd_supp` varchar(20) NOT NULL,
  `almtsupp` varchar(100) NOT NULL,
  `tlpsup` varchar(13) NOT NULL,
  `tgl_trans` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transbrg_msk`
--

INSERT INTO `transbrg_msk` (`transbrg_msk`, `transmsk`, `id_jns`, `kd_brg`, `hrg`, `jmlh`, `jmlhesc`, `satuan`, `expr`, `byr`, `kd_supp`, `almtsupp`, `tlpsup`, `tgl_trans`) VALUES
(1, 1, 'JNS009', 'BRG001', 1000, 100, 0, 'Saset', '2019-01-14', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(2, 1, 'JNS009', 'BRG002', 1000, 50, 0, 'Saset', '2019-01-13', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(3, 1, 'JNS009', 'BRG001', 1000, 100, 0, 'Saset', '2019-01-14', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(4, 1, 'JNS009', 'BRG002', 1000, 50, 0, 'Saset', '2019-01-13', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(5, 2, 'JNS009', 'BRG005', 1500, 24, 0, 'Saset', '2019-01-11', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(6, 2, 'JNS001', 'BRG006', 1000, 10, 0, 'Box', '9999-12-28', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(7, 3, 'JNS001', 'BRG008', 1000, 10, 3, 'Box', '9999-12-28', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(8, 4, 'JNS001', 'BRG006', 100, 10, 0, 'Box', '9999-12-28', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(9, 5, 'JNS001', 'BRG006', 1000, 10, 4, 'Box', '9999-12-28', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(10, 6, 'JNS001', 'BRG006', 1000, 10, 5, 'Box', '9999-12-28', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(11, 7, 'JNS001', 'BRG011', 1000, 10, 10, 'Box', '9999-12-28', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(12, 8, 'JNS009', 'BRG003', 3200, 48, 0, 'Saset', '2019-01-24', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(13, 9, 'JNS009', 'BRG001', 1000, 12, 0, 'Saset', '2019-01-24', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(14, 10, 'JNS009', 'BRG004', 1000, 15, 0, 'Saset', '2019-01-24', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(15, 11, 'JNS009', 'BRG005', 1250, 12, 0, 'Saset', '2019-01-24', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(17, 13, 'JNS009', 'BRG001', 1000, 10, 0, 'Saset', '2019-01-29', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(18, 14, 'JNS008', 'BRG003', 2000, 6, 0, 'Buah', '2019-01-29', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(19, 15, 'JNS009', 'BRG001', 1500, 5, 0, 'Saset', '2019-01-28', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(20, 16, 'JNS009', 'BRG005', 1000, 10, 0, 'Saset', '2019-01-26', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(22, 19, 'JNS001', 'BRG009', 1000, 20, 20, 'Box', '9999-12-28', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(25, 21, 'JNS009', 'BRG005', 1000, 10, 0, 'Saset', '2019-01-20', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(26, 22, 'JNS001', 'BRG011', 3000, 10, 10, 'Buah', '9999-12-28', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(27, 23, 'JNS009', 'BRG018', 3000, 10, 0, 'Box', '2019-01-31', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(28, 24, 'JNS009', 'BRG005', 3500, 30, 0, 'Saset', '2019-01-17', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(29, 24, 'JNS009', 'BRG583', 2000, 15, 0, 'Saset', '2019-01-17', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(30, 25, 'JNS009', 'BRG126', 1500, 15, 0, 'Saset', '2019-01-16', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(31, 25, 'JNS009', 'BRG155', 2000, 10, 0, 'Saset', '2019-01-17', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(32, 26, 'JNS001', 'BRG017', 1000, 10, 10, 'Buah', '9999-12-28', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(33, 27, 'JNS002', 'BRG028', 1000, 10, 10, 'Box', '9999-12-28', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(34, 28, 'JNS001', 'BRG007', 100, 10, 0, 'Buah', '9999-12-28', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(35, 29, 'JNS001', 'BRG014', 1000, 10, 10, 'Box', '9999-12-28', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(36, 30, 'JNS009', 'BRG023', 1000, 15, 0, 'Buah', '2019-01-31', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(37, 30, 'JNS002', 'BRG017', 2000, 12, 12, 'Buah', '9999-12-28', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(38, 31, 'JNS001', 'BRG050', 2000, 10, 10, 'Box', '9999-12-28', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(39, 32, 'JNS001', 'BRG055', 1000, 100, 100, 'Buah', '9999-12-28', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(40, 33, 'JNS001', 'BRG001', 1000, 10, 0, 'Buah', '2019-01-27', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(41, 34, 'JNS009', 'BRG001', 10000, 10, 0, 'Box', '2019-02-19', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(42, 35, 'JNS001', 'BRG008', 1000, 1, 1, 'Buah', '9999-12-28', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(43, 36, 'JNS009', 'BRG004', 1000, 10, 0, 'Box', '2019-02-19', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(44, 37, 'JNS009', 'BRG002', 1000, 10, 0, 'Box', '2019-02-18', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(45, 38, 'JNS009', 'BRG001', 200, 10, 0, 'Buah', '2019-02-18', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(46, 39, 'JNS001', 'BRG001', 1000, 10, 0, 'Box', '2019-02-18', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(47, 40, 'JNS008', 'BRG001', 1000, 10, 0, 'Box', '2019-02-18', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(48, 41, 'JNS009', 'BRG002', 1000, 10, 0, 'Box', '2019-02-18', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(49, 42, 'JNS009', 'BRG001', 1000, 100, 0, 'Box', '2019-02-18', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(50, 42, 'JNS009', 'BRG004', 1000, 10, 0, 'Box', '2019-02-18', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(51, 43, 'JNS008', 'BRG001', 1500, 10, 0, 'Box', '2019-02-18', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(52, 44, 'JNS009', 'BRG001', 1000, 10, 0, 'Box', '2019-02-18', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(53, 45, 'JNS009', 'BRG001', 1000, 10, 0, 'Box', '2019-02-18', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(54, 46, 'JNS009', 'BRG001', 1000, 10, 0, 'Box', '2019-02-18', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(55, 47, 'JNS001', 'BRG008', 1000, 10, 10, 'Buah', '9999-12-28', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(56, 48, 'JNS008', 'BRG004', 1000, 10, 0, 'Box', '2019-02-18', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(57, 49, 'JNS009', 'BRG003', 23000, 2, 0, 'Box', '2019-02-18', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(58, 49, 'JNS009', 'BRG004', 12000, 1, 0, 'Box', '2019-02-18', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(59, 50, 'JNS001', 'BRG008', 1000, 10, 0, 'Box', '9999-12-28', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(60, 51, 'JNS009', 'BRG005', 2300, 10, 0, 'Saset', '2019-02-18', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(61, 52, 'JNS009', 'BRG005', 3500, 30, 3490, 'Saset', '2019-02-26', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(62, 52, 'JNS009', 'BRG583', 2000, 15, 0, 'Saset', '2019-02-26', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(63, 53, 'JNS009', 'BRG126', 1500, 15, 15, 'Saset', '2019-02-25', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00'),
(64, 53, 'JNS009', 'BRG155', 2000, 10, 10, 'Saset', '2019-02-25', 'byr', 'kd_supp', 'almtsupp', 'tlpsup', '0000-00-00');

--
-- Trigger `transbrg_msk`
--
DELIMITER $$
CREATE TRIGGER `update_after_insert_transbrg_msk` AFTER INSERT ON `transbrg_msk` FOR EACH ROW BEGIN
UPDATE tb_brg set stk = stk + NEW.jmlh WHERE kd_brg = NEW.kd_brg;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `trans_msk`
--

CREATE TABLE `trans_msk` (
  `transmsk` int(11) NOT NULL,
  `nm_supp` varchar(30) NOT NULL,
  `almtsupp` varchar(100) NOT NULL,
  `tlpsup` varchar(13) NOT NULL,
  `tottrans` int(11) NOT NULL,
  `byr` varchar(7) NOT NULL,
  `tempo` date NOT NULL,
  `tgltrans` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `trans_msk`
--

INSERT INTO `trans_msk` (`transmsk`, `nm_supp`, `almtsupp`, `tlpsup`, `tottrans`, `byr`, `tempo`, `tgltrans`) VALUES
(1, 'CV Buana', 'Magelang', '087789374534', 300000, 'Lunas', '0000-00-00', '2019-01-12'),
(2, 'PT Sejahtera', 'Bandung', '089975644465', 46000, 'Lunas', '0000-00-00', '2019-01-12'),
(3, 'PT Maju', 'Randegan', '087753455432', 10000, 'Lunas', '0000-00-00', '2019-01-12'),
(4, 'PT Boya', 'Randegan', '087734523443', 1000, 'Lunas', '0000-00-00', '2019-01-12'),
(5, 'PT ASMI', 'Yogyakarta', '087764345443', 10000, 'Lunas', '0000-00-00', '2019-01-12'),
(6, 'PT ASDI', 'Solo', '087753423453', 10000, 'Lunas', '0000-00-00', '2019-01-12'),
(7, 'PT CBAN', 'Sleman', '09887345533', 10000, 'Lunas', '2019-01-13', '2019-01-12'),
(8, 'PT Muiza', 'Magelang', '08783475343', 153600, 'Lunas', '2019-01-22', '2019-01-13'),
(9, 'PT Abah Jaya', 'Magelang no 21 Jalan situ', '088734566', 12000, 'Lunas', '2019-02-16', '2019-01-13'),
(10, 'PT Buyo Baru', 'Solo', '09882347543', 15000, 'Lunas', '2019-01-17', '2019-01-13'),
(11, 'PT Coba Lagi', 'Disitu', '099834534', 15000, 'Lunas', '0000-00-00', '2019-01-13'),
(13, 'Cobo Service', 'Verder', '08783453223', 10000, 'Lunas', '2019-01-13', '0000-00-00'),
(14, 'Phoru Spa', 'Lanox', '087834522345', 12000, 'Lunas', '2019-01-13', '0000-00-00'),
(15, 'PT Nur Agung', 'Bantarsari', '0834523556', 7500, 'Lunas', '2019-01-13', '2019-01-13'),
(16, 'PT Atos', 'Randegan', '08773453345', 10000, 'Lunas', '9999-12-28', '2019-01-13'),
(19, 'PT Lyto', 'Solo', '08783455653', 20000, 'Lunas', '2019-01-19', '2019-01-15'),
(21, 'PT SCDG', 'Velders', '085336044355', 10000, 'Lunas', '2019-01-31', '2019-01-15'),
(22, 'CV Bunda', 'Pagongan', '085336044355', 30000, 'Lunas', '2019-01-31', '2019-01-15'),
(23, 'Sampul', 'Sleman', '085336044355', 30000, 'Lunas', '9999-12-28', '2019-01-15'),
(24, 'PT Sukamaju', 'Jl. Bahagia no 21 Yogyakarta', '082234544565', 135000, 'Lunas', '9999-12-28', '2019-01-16'),
(25, 'PT Sukamundur', 'Jl Sosial no4 Klaten', '085336044355', 42500, 'Lunas', '2019-01-19', '2019-01-16'),
(26, 'PT Mahmud', 'Jogja', '085336044355', 10000, 'Lunas', '2019-01-18', '2019-01-18'),
(27, 'PT Yahya', 'Jl Meang', '085336044355', 10000, 'Lunas', '2019-01-20', '2019-01-18'),
(28, 'PT Sejahtera', 'Bandung', '089975644465', 1000, 'Lunas', '9999-12-28', '2019-01-19'),
(29, 'PT Umiumu', 'Dk Mayang Negla', '085336044355', 10000, 'Lunas', '9999-12-28', '2019-01-22'),
(30, 'PT Hauhiro', 'Rozlos', '085244632188', 39000, 'Lunas', '9999-12-28', '2019-01-22'),
(31, 'PT Buaningsih', 'Lumajang', '08782345534', 20000, 'Lunas', '9999-12-28', '2019-01-22'),
(32, 'Ag Jaya', 'Bantarsari', '087745483945', 100000, 'Lunas', '9999-12-28', '2019-01-24'),
(33, 'PT Luar', 'Magelang', '087834534534', 10000, 'Lunas', '2019-01-27', '2019-01-26'),
(34, 'Maju', 'Elrios', '087823455434', 100000, 'Lunas', '2019-02-19', '2019-02-15'),
(35, 'Ade Gaming', 'Ngawi', '0878345345', 1000, 'Lunas', '2019-02-18', '2019-02-15'),
(36, 'PT Agung Jaya', 'Bantarsari', '099331234455', 10000, 'Lunas', '2019-02-18', '2019-02-15'),
(37, 'PT Cobo', 'Elder', '099331234455', 10000, 'Lunas', '2019-02-18', '2019-02-15'),
(38, 'PT Mamad', 'Randegan', '081234567890', 2000, 'Lunas', '9999-12-28', '2019-02-15'),
(39, 'PT Mamba', 'Solo', '0878345345', 10000, 'Lunas', '9999-12-28', '2019-02-15'),
(40, 'PT Agus', 'Magelang', '081234567890', 10000, 'Lunas', '2019-02-16', '2019-02-15'),
(41, 'PT Sejahtera', 'Randegan', '081234567890', 10000, 'Lunas', '2019-02-18', '2019-02-15'),
(42, 'PT Muiza', 'Solo', '081234567890', 110000, 'Lunas', '2019-02-18', '2019-02-16'),
(43, 'PT Buana', 'Negla', '081234567890', 15000, 'Lunas', '2019-02-18', '2019-02-16'),
(44, 'Angger Gaming', 'Ngawi', '099331234455', 10000, 'Lunas', '2019-02-18', '2019-02-16'),
(45, 'Nagoya', 'Sinduadi', '099331234455', 10000, 'Lunas', '2019-02-18', '2019-02-16'),
(46, 'PT Bojnaja', 'Randegan', '099331234455', 10000, 'Lunas', '2019-02-18', '2019-02-16'),
(47, 'Vitco', 'Randegan', '099331234455', 10000, 'Lunas', '9999-12-28', '2019-02-16'),
(48, 'Cafela', 'Jatisawit', '099331234455', 10000, 'Lunas', '2019-02-18', '2019-02-16'),
(49, 'Mas Rudi', 'Magelang', '099331234455', 58000, 'Lunas', '9999-12-28', '2019-02-16'),
(50, 'Saudara', 'Magelang', '099331234455', 10000, 'Lunas', '2019-02-18', '2019-02-16'),
(51, 'PT Maju', 'Yogyakarta', '081234567890', 23000, 'Lunas', '2019-02-18', '2019-02-16'),
(52, 'PT Sukamaju', 'Jl. Bahagia no 21 Yogyakarta', '081234567890', 135000, 'Lunas', '9999-12-28', '2019-02-22'),
(53, 'PT Sukamundur', 'Jl. Sosial no4 Magelang', '099331234455', 42500, 'Piutang', '2019-02-25', '2019-02-22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_ptgs` varchar(20) NOT NULL,
  `nm_ptgs` varchar(20) NOT NULL,
  `jk` char(1) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  `almt` varchar(255) NOT NULL,
  `no_tlp` varchar(13) NOT NULL,
  `lvl` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_ptgs`, `nm_ptgs`, `jk`, `passwd`, `almt`, `no_tlp`, `lvl`) VALUES
('1120140006', 'Ahmad Hanafi', 'L', 'e111d07d384990d217e9a33b1f5d69df', 'Kota Yogyakarta', '085244632188', 1),
('admin', 'Admin', 'L', '21232f297a57a5a743894a0e4a801fc3', 'Yogyakarta', '081234567890', 1),
('nanda', 'Nanda', 'L', '859a37720c27b9f70e11b79bab9318fe', 'Randegan', '081234567890', 0),
('user', 'Rohdi', 'P', 'ee11cbb19052e40b07aac0ca060c23ee', 'Sleman', '099331234455', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jns_brg`
--
ALTER TABLE `jns_brg`
  ADD PRIMARY KEY (`id_jns`);

--
-- Indeks untuk tabel `tb_brg`
--
ALTER TABLE `tb_brg`
  ADD PRIMARY KEY (`kd_brg`);

--
-- Indeks untuk tabel `tempbarang`
--
ALTER TABLE `tempbarang`
  ADD PRIMARY KEY (`tamptransmsk`);

--
-- Indeks untuk tabel `transbrg_klr`
--
ALTER TABLE `transbrg_klr`
  ADD PRIMARY KEY (`transbrg_klr`),
  ADD KEY `transbrg_msk` (`transbrg_msk`);

--
-- Indeks untuk tabel `transbrg_msk`
--
ALTER TABLE `transbrg_msk`
  ADD PRIMARY KEY (`transbrg_msk`),
  ADD KEY `id_jns` (`id_jns`),
  ADD KEY `kd_brg` (`kd_brg`),
  ADD KEY `transmsk` (`transmsk`);

--
-- Indeks untuk tabel `trans_msk`
--
ALTER TABLE `trans_msk`
  ADD PRIMARY KEY (`transmsk`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_ptgs`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tempbarang`
--
ALTER TABLE `tempbarang`
  MODIFY `tamptransmsk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transbrg_klr`
--
ALTER TABLE `transbrg_klr`
  MODIFY `transbrg_klr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT untuk tabel `transbrg_msk`
--
ALTER TABLE `transbrg_msk`
  MODIFY `transbrg_msk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT untuk tabel `trans_msk`
--
ALTER TABLE `trans_msk`
  MODIFY `transmsk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `transbrg_klr`
--
ALTER TABLE `transbrg_klr`
  ADD CONSTRAINT `transbrg_klr_ibfk_1` FOREIGN KEY (`transbrg_msk`) REFERENCES `transbrg_msk` (`transbrg_msk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transbrg_msk`
--
ALTER TABLE `transbrg_msk`
  ADD CONSTRAINT `transbrg_msk_ibfk_1` FOREIGN KEY (`id_jns`) REFERENCES `jns_brg` (`id_jns`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transbrg_msk_ibfk_2` FOREIGN KEY (`kd_brg`) REFERENCES `tb_brg` (`kd_brg`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transbrg_msk_ibfk_3` FOREIGN KEY (`transmsk`) REFERENCES `trans_msk` (`transmsk`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
