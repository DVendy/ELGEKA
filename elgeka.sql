-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2015 at 05:33 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `elgeka`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a_super` smallint(6) NOT NULL DEFAULT '0',
  `a_laporan` smallint(6) NOT NULL DEFAULT '0',
  `a_data` smallint(6) NOT NULL DEFAULT '0',
  `a_konfirmasi` smallint(6) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `admin_username_unique` (`username`),
  UNIQUE KEY `admin_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`, `nama`, `alamat`, `telepon`, `a_super`, `a_laporan`, `a_data`, `a_konfirmasi`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'laporan', '96e79218965eb72c92a549dd5a330112', 'asudhiuaiu', 'Admin Laporan', 'ouqefhowqifoqj', '1385726', 0, 1, 0, 0, NULL, '2015-12-03 07:22:47', '2015-12-03 07:22:47'),
(3, 'data', '96e79218965eb72c92a549dd5a330112', 'aeufweiugwiu', 'Admin Data', 'woigvho4wuhu4', '34646', 0, 0, 1, 0, NULL, '2015-12-03 07:31:17', '2015-12-03 07:31:17'),
(5, 'admin', '96e79218965eb72c92a549dd5a330112', 'rgndgn', 'Administrator', 'rhdtrh drthrthrthr', '568586', 1, 1, 1, 1, NULL, '2015-12-03 07:35:54', '2015-12-03 07:35:54');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `isi` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_id` int(11) NOT NULL,
  `from` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `isi`, `created_at`, `updated_at`, `user_id`, `from`) VALUES
(3, 'Tentang Elgeka', '<p>Elgeka merupakan Himpunan Masyarakat Peduli LGK (Leukemia Granulositik Kronik) dan GIST (Kanker Saluran Pencernaan) yang didirikan pada tanggal 15 Juni 2006. Awal proses rintisan program ini dilahirkan oleh pasien yang bernama Bapak Fajar Siata (ketua Himpunan Masyarakat Peduli LGK) pada tahun 2003 dengan bimbingan dan pendampingan dari Prof.DR.Ary Haryanto Reksodiputro, yang mempunyai kepedulian sangat tinggi terhadap pasien penderita leukemia, dan atas dukungan Gubernur DKI (pada waktu itu yang menjabat Bapak Sutiyoso), lahirlah program GIPAP untuk para penderita LGK (Leukimia Granulositik Kronik) dan GIST.</p>\r\n<p>Dimana setiap pasien yang telah lolos dalam prosedur pemeriksaan yang dilakukan oleh team dokter, yang direkomendasikan oleh Max Foundation di Indonesia, pasien bisa mendapatkan Glivec (obat untuk leukemia) dengan biaya yang sangat ringan. Himpunan masyarakat peduli LGK memang dibentuk dengan maksud agar para penderita yang telah mendapatkan kesempatan untuk menerima bantuan obat melalui program GIGAP, dapat mempunyai sebuah komunitas.<br />Tujuan lain dibentuknya perkumpulan ini adalah untuk meningkatkan kesadaran sesama pasien penderita LGK (Leukemia Granulositik Kronik) dan GIST, memberikan support moral ke sesama pasien dalam kondisi lemah, menjalin hubungan harmonis antara dokter, penderita, keluarga, atau orang-perorangan yang memberikan perhatian kepada penderita LGK (Leukemia Granulositik Kronik)dan GIST atau yang biasa disebut dengan caregiver, serta mengembangkan dan meningkatkan hubungan dan kepedulian instansi pemerintahan Lembaga Swadaya Masyarakat dan organisasi lainnya baik nasional maupun internasional kepada masyarakat yang peduli terhadap LGK (Leukemia Granulositik Kronik) dan GIST.</p>\r\n<p>Selain itu, para pengurus mempunyai tujuan untuk dapat berkarya lebih luas. Saat ini yang telah berhasil dilakukan selain memfasilitasi kelancaran komunikasi, para pihak pengurus juga memberikan partisipasi berupa bantuan dana kepada sesama pasien yang memerlukan, karena untuk mengambil obat dan melakukan kontrol setiap bulannya, terkadang mereka mengalami kesulitan biaya sehingga para pengurus memberikan bantuan kepada mereka secara nyata (walau jumlah yang diberikan belum sepenuhnya) agar bisa meringankan beban yang mereka rasakan.</p>\r\n<p>Saat ini dalam setiap bulannya Elgeka memiliki pertemuan rutin antara pasien dan para caregiver untuk mengembangkan dan meningkatkan hubungan agar bisa saling berbagi kepedulian, seperti pertemuan untuk pengggalangan dana dari para donatur serta pertemuan untuk melakukan aktivitas yang bersifat sosial untuk meringankan beban para penderita LGK (Leukemia Granulositik Kronik) dan GIST. Selain pertemuan rutin Elgeka juga mengajak pasien dan para caregiver untuk bergabung dalam mailing list (milis) Elgeka, sehingga dapat saling mengenal dan bertukar kabar serta informasi terbaru mengenai LGK (Leukemia Granulositik Kronik) dan penanganannya.</p>', '2015-12-09 16:58:02', '2015-12-09 16:58:02', 5, 1),
(4, 'Artikel 2', '<p>Setiap orang seharusnya memiliki akses yang sama terhadap kesehatan.  Hal tersebut beberapa tahun terakhir ini diwujudkan oleh Novartis Indonesia kepada pasien kanker yang kurang mampu dan kelas menengah untuk mendapatkan obat kanker Imatinib mesylate.\nCML (<em>Chronic Myeloid Leukemia</em> - Leukemia Granulositik Kroniki) dan GIST (<em>Gastrointestinal Stromal Tumor </em>- Tumor/Kanker Saluran Pencernaan) merupakan jenis penyakit kanker yang dapat mengakibatkan kematian dan membutuhkan perawatan intensif untuk meningkatkan harapan hidup pasien. Menurut data dari GLOBOCAN pada tahun 2002, total kasus baru penyakit CML dan GIST mencapai 25.523 orang di seluruh dunia. Data dari Leukemia and Lymphoma Society, total pasien CML tahun 2010 di Amerika Serikat mencapai 4.870 atau 13% dari 37.520 pasien Leukemia semua tipe. Di Indonesia sendiri saat ini ada <span style="text-decoration:underline;">+</span> 1300 pasien CML dan GIST yang tergabung dalam ELGEKA. Jumlah pasien Leukemia CML sendiri lebih dari 1000 pasien sedangkan GIST sendiri belum ada datanya, tetapi diperkirakan di seluruh dunia terdapat 10-20 kasus GIST per 1 juta orang.\n<strong>CML</strong> adalah penyakit kanker pada darah yang melibatkan sel hematopoiesis (pembentuk sel darah merah yang banyak terdapat di sumsum tulang) pada sel myeloid (sel yang terdapat di sumsum tulang) dari sel darah putih yang tidak normal.  Penyebab utama CML adalah ketidaknormalan dari gen kromosom tertentu.  Sedangkan <strong>GIST</strong> adalah penyakit kanker yang terjadi pada saluran cerna yang berawal dari sel stroma (jaringan ikat penyokong organ-organ yang terlibat dalam pencernaan makanan), sedangkan penyebab dari GIST sendiri adalah adanya ketidaknormalan enzim tyrosine kinase (enzim yang bertanggung jawab dalam pengembangan dan pembelahan sel).\nKarena keterbatasan dana, banyak pasien CML maupun GIST dari keluarga tidak mampu secara finansial tidak dapat memperoleh pengobatan yang memadai disebabkan mahalnya harga obat kanker <em>imatinib</em> tersebut karena merupakan obat impor.  Dalam sebulan, pasien memerlukan 120 tablet obat.  Harga satu boks yang berisi 60 tablet sekitar Rp 13.400.000 - Rp. 15.000.000.   Ini berarti pasien harus mengeluarkan uang sekitar  <span style="text-decoration:underline;">+</span> Rp 23 juta. Baru sejak tahun 2003 dimulai program GIPAP (<em>Glivec International Patient Assistence Program</em>) yaitu program kerjasama antara Novartis Indonesia  dan Yayasan Kanker Indonesia cabang Jakarta untuk memberikan obat anti kanker <em>imatinib</em> . Tetapi sayangnya program tersebut  baru bisa menjangkau pasien yang berada di wilayah Jakarta saja &amp; yang termasuk pasien  tidak mampu.  Sedangkan untuk pasien yang hanya setengah mampu tetap harus membayar utuh,  demikian juga pasien yang berada didaerah harus mengambil obat tersebut ke Jakarta.\nOleh karena itu, untuk lebih menjangkau lebih banyak pasien lagi, maka pada tanggal 30 Juni 2009 kemarin Novartis Indonesia bekerjasama dengan YKI mengadakan acara peluncuran program akses pengobatan terbaru yang disebut dengan NOA (Novartis Oncology Access). Program ini dibuat untuk semakin memaksimalkan akses dalam hal keterjangkauan biaya &amp; keberlanjutan terhadap obat kanker <em>imatinib</em> bagi pasien yang menderita leukemia kronik (CML) dan kanker saluran cerna (GIST).\nProgram NOA ini merupakan perluasan dari GIPAP yang sudah dijalankan di Indonesia sejak 2003.  Bedanya, program GIPAP sebelumnya hanya ditujukan bagi untuk mendapatkan obat <em>imatinib.</em> Program NOA ini tidak hanya <em>imatinib </em>tetapi bagi pasien yang membutuhkan keringanan dalam pembiayaan obat <em>nilotinib </em>juga bisa. <em>Nilotinib </em>merupakan merupakan obat <em>second line</em> atau obat yang diperuntukkan bagi pasien yang sudah resisten terhadap <em>imatinib.</em><i>\n</i>\n"Meskipun ada NOA, program GIPAP akan tetap berlanjut," ujar dr. Hj. Ulfana Umar, MARS, ketua bidang pelayanan sosial Yayasan Kanker Indonesia dalam acara peluncuran NOA di Jakarta, Selasa (30/6). Menurut Ulfana, Di Indonesia sudah ada 305 pasien yang masuk dalam GIPAP dengan 205 diantaranya bertahan hidup."Ditargetkan ada 1000 pasien kanker yang bisa dilayani sampai akhir Desember 2010."\nProgram NOA ini, terang Ulfana, menerapkan subsidi silang yang diharapkan akan sangat membantu pasien-pasien di Indonesia."Saya sangat setuju dengan program ini karena tidak mungkin semua pasien yang ekonominya beda diperlakukan sama."\nPasien-pasien yang terdiagnosa mengidap kedua jenis kanker tersebut (CML dan GIST) dan ingin mengikuti program NOA dapat menghubungi dokter hematologis onkologisnya, yang selanjutnya akan dirujuk oleh dokter untuk mendapatkan akses NOA melalui YKI DKI Jakarta.\n<span style="line-height:1.5;">Untuk lebih mempermudah akses mendapatkan propram GIPAP &amp; NOA, maka Novartis juga melakukan kerjasama dengan Bakornas HOMPEDIN &amp; PHTDI selaku asosiasi professional para pakar hematologis &amp; onkologis untuk mendukung penegakan diagnosa CML &amp; GIST serta untuk memantau penyakit tersebut di beberapa  rumah sakit riset di Indonesia.</span>\nProgram NOA ini telah dibuka di 14 titik di Indonesia, 6 untuk leukemia kronik dan 8 untuk kanker saluran cerna. Pusat NOA sudah tersedia di Rumah Sakit Cipto Mangunkusumo (RSCM) Jakarta, RS Kanker Dharmais, Rumah Sakit Hasan Sadikin (RSHS) Bandung, RS Kariadi Semarang, RS Sardjito Yogyakarta dan RS Soetomo Surabaya. Sedang pusat NOA untuk kanker saluran cerna sudah dibuka di RSCM Jakarta, RS kanker Dharmais, RSHS, RS Kariadi, RS Sardjito, RS Soetomo, RS Sanglah Denpasar, dan RS Wahidin Makassar.\nBila ingin mengetahui lebih lanjut tentang program NOA tersebut, dapat menghubungi di Kantor YKI Cab. Jakarta Jl. Baru, Sunter Permai Raya no.2, Jakarta Utara 14340, T. 650 9144, F. 650 7747<p>', '2015-12-09 17:27:10', '2015-12-09 17:27:10', 5, 1),
(5, 'Artikel 3', '<p>Program NOA Novartis Oncology Access adalah program bantuan obat dari PT. Novartis untuk pasien Leukemia tipe CML dan GIST atau Kanker Saluran Pencernaan. Saat ini, syarat dan ketentuan yang digunakan YKI DKI Jakarta selalu Lembaga yang mendistribusikan Obat bantuan dari PT. Novartis ini menggunakan kriteria sebagai berikut. Ketentuan ini berlaku sampai MoU masih berlaku atau sampai bulan Desember 2013 bagi pasien tidak mampu secara finansial yang memiliki Kartu Jamkesmas. Untuk informasi selengkapnya bisa hubungi Kantor YKI Cab, Jakarta.\nBagi pasien yang diresepkan oleh Dr. SpPD-KHOM nya menggunakan Glivec maka Ketentuannya sebagai berikut.\n<ol>\n<li>Pasien Plan A (Pasien tidak mampu dengan dibuktikan minimal Surat Keterangan Miskin) : harus membeli obat Glivec sebanyak ½ bulan kali dosis tiap hari kali sebulan (30 hari), di awal program atau dapat di cicil maksimal 12 bulan (masa Program) dan mendapatkan donasi obat Glivec sebanyak 11  ½ bulan kali dosis tiap hari kali sebulan (30 hari) dalam setahun.</li>\n<li>Pasien Plan B (pemegang kartu ASKES) : mendapat obat Glivec 2 bulan dari Apotik Askes dan mendapatkan obat donasi 10 bulan. Obat Glivec dari Apotik ASKES didapatkan di bulan ke-1 dan ke-7 setiap tahun. Bulan ke-2 s.d Ke-6 dan Bulan ke-8 s.d Ke-12 didapatkan dari YKI Jakarta</li>\n<li>Pasien Plan C (UMUM/MEMBAYAR SENDIRI) : membeli Glivec sebanyak 1 bulan kali dosis tiap hari kali sebulan (30 hari) di awal program atau dapat dicicil maksimal selama 12 bulan dalam setahun masa program dan mendapatkan obat Glivec donasi sebanyak 11 bulan kali dosis tiap hari kali sebulan (30 hari) dalam setahun.</li>\n<li>Pasien Plan D (ASURANSI/JAMINAN KANTOR) : asuransi / kantor membeli 4 bulan di awal program dan donasi 8 bulan dalam setahun.</li>\n</ol>\nContoh,\nJika si pasien A diresepkan Glivec 4 tablet sehari maka dalam 30 hari pasien membutuhkan 120 tablet. Asumsi harga Glivec per tablet adalah Rp. 225.000\n1. Jika termasuk kategori Plan A maka memiliki kewajiban membeli Glivec sebanyak\n<p style="padding-left:30px;">= ½ bulan  x 4 tablet x 30 hari = 60 tablet/tahun (dapat dicicil maksimal 12 bulan)</p>\n<p style="padding-left:30px;">artinya, jika pasien menghendaki kewajibannya dicicil selama 12 bulan maka setiap bulan pasien memiliki kewajiban membeli Glivec sebanyak 60 tablet / 12 bulan = 5 tablet / bulan. Dan mendapatkan Hak obat glivec Donasi tiap bulan sebanyak (120 tablet - 5 tablet) 115 tablet.</p>\n<p style="padding-left:30px;">Beli = 5 tablet x Rp. 225.000 = Rp. 1.125.ooo /bulan (selama setahun)</p>\n<p style="padding-left:30px;">Free = 115 tablet x Rp. 225.000 = Rp. 25.875.000/bulan (selama setahun)</p>\n2. Jika termasuk kategori Plan B maka memiliki kewajiban membeli Glivec sebanyak\n<p style="padding-left:30px;">= 2 bulan  x 4 tablet x 30 hari = 240 tablet/tahun</p>\n<p style="padding-left:30px;">artinya, kewajiban membeli glivec selama 2 bulan ini akan dilakukan oleh ASKES. Sehingga pasien diminta mengambil obat glivec selama 2 bulan di Apotek ASKES di RS center (contoh, Apotek ASKES RSUP Dr. Hasan Sadikin Bandung). Pengambilan di Apotek ASKES dilakukan setiap bulan ke-1 (awal program NOA) dan bulan ke-7. Sisanya sebanyak 10 bulan x dosis per hari mendapatkan obat donasi Glivec dari YKI DKI Jakarta.</p>\n3. Jika termasuk kategori Plan C maka memiliki kewajiban membeli Glivec sebanyak\n<p style="padding-left:30px;">= 1 bulan  x 4 tablet x 30 hari = 120 tablet/tahun (dapat dicicil maksimal 12 bulan)</p>\n<p style="padding-left:30px;">artinya, jika pasien menghendaki kewajibannya dicicil selama 12 bulan maka setiap bulan pasien memiliki kewajiban membeli Glivec sebanyak 120 tablet / 12 bulan = 10 tablet / bulan. Dan mendapatkan Hak obat glivec Donasi tiap bulan sebanyak (120 tablet - 10 tablet) 110 tablet.</p>\n<p style="padding-left:30px;">Beli = 10 tablet x Rp. 225.000 = Rp. 2.225.ooo /bulan (selama setahun)</p>\n<p style="padding-left:30px;">Free = 110 tablet x Rp. 225.000 = Rp. 24.750.000/bulan (selama setahun)</p>\nBagi pasien yang diresepkan oleh Dr. SpPD-KHOM nya menggunakan Tasigna (150mg atau 200mg) maka Ketentuannya sebagai berikut.\n<ol>\n<li>Pasien Plan A (Pasien tidak mampu dengan dibuktikan minimal Surat Keterangan Miskin) : harus membeli obat Tasigna sebanyak 7 hari kali dosis tiap hari kali sebulan (30 hari), di awal program atau dapat di cicil maksimal 12 bulan (masa Program) dan sisanya mendapatkan donasi obat Tasigna dalam setahun dari YKI DKI Jakarta.</li>\n<li>Pasien Plan B (pemegang kartu ASKES) : mendapat obat Tasigna 3 bulan dari Apotik Askes dan mendapatkan obat donasi 9 bulan. Obat Glivec dari Apotik ASKES didapatkan di bulan ke-1, ke-5 dan ke-9 setiap tahun. Sisanya didapatkan dari YKI Jakarta</li>\n<li>Pasien Plan C (UMUM/MEMBAYAR SENDIRI) : membeli Tasigna sebanyak 14 hari kali dosis tiap hari kali sebulan (30 hari) di awal program atau dapat dicicil maksimal selama 12 bulan dalam setahun masa program dan sisanya mendapatkan obat Tasigna donasi dalam setahun dari YKI DKI Jakarta</li>\n</ol>\nContoh,\nJika si pasien A diresepkan Tasigna 4 tablet sehari maka dalam 30 hari pasien membutuhkan 120 tablet. Asumi, harga Tasigna 150mg per kapsul adalah Rp. 290.000; harga Tasigna 200mg per kapsul adalah Rp. 390.000\n1. Jika termasuk kategori Plan A maka memiliki kewajiban membeli Tasigna sebanyak\n= 7 hari x 4 kapsul = 28 tablet/tahun (dapat dicicil maksimal 12 bulan)\nartinya, jika pasien menghendaki kewajibannya dicicil selama 12 bulan maka setiap bulan pasien memiliki kewajiban membeli Tasigna sebanyak 28 tablet / 12 bulan = 3 kapsul selama  4 bulan dan 2 kapsul selama 8 bulan. Dan mendapatkan Hak obat Tasigna Donasi tiap bulan sebanyak = 120 kapsul - X kapsul\nTasigna 150mg :\nBeli = 3 Kapsul x Rp. 290.000 = Rp. 870.000 selama 4 bulan dan mendapatkan Tasigna Free sebanyak (120 - 3 kapsul) x Rp. 290.000 = Rp. 33.930.000 selama 4 bulan dan\nBeli = 2 Kapsul x Rp. 290.000 = Rp. 580.000 selama 8 bulan mendapatkan Tasigna Free sebanyak (120 - 2 kapsul) x Rp. 290.000 = Rp. 34.220.000 selama 8 bulan\nTasigna 200mg :\nBeli = 3 Kapsul x Rp. 390.000 = Rp. 1.170.000 selama 4 bulan dan mendapatkan Tasigna Free sebanyak (120 - 3 kapsul) x Rp. 390.000 = Rp. 45.630.000 selama 4 bulan dan\nBeli = 2 Kapsul x Rp. 390.000 = Rp. 780.000 selama 8 bulan mendapatkan Tasigna Free sebanyak (120 - 2 kapsul) x Rp. 390.000 = Rp. 46.020.000 selama 8 bulan\n<span style="line-height:1.5;">2. Jika termasuk kategori Plan B maka memiliki kewajiban membeli Glivec sebanyak</span>\n= 3 bulan  x 4 kapsul x 30 hari = 360 kapsul/tahun\nartinya, kewajiban membeli Tasigna selama 3 bulan ini akan dilakukan oleh ASKES. Sehingga pasien diminta mengambil obat Tasigna selama 3 bulan di Apotek ASKES di RS center (contoh, Apotek ASKES RSUP Dr. Hasan Sadikin Bandung). Pengambilan di Apotek ASKES dilakukan setiap bulan ke-1 (awal program NOA), bulan ke-5 dan bulan ke-7. Sisanya sebanyak 9 bulan x dosis per hari mendapatkan obat donasi Glivec dari YKI DKI Jakarta.\n3. Jika termasuk kategori Plan C maka memiliki kewajiban membeli Tasigna sebanyak\n= 14 hari x 4 tablet = 60 tablet/tahun (dapat dicicil maksimal 12 bulan)\nartinya, jika pasien menghendaki kewajibannya dicicil selama 12 bulan maka setiap bulan pasien memiliki kewajiban membeli Tasigna sebanyak 60 tablet / 12 bulan = 5 tablet / bulan. Dan mendapatkan Hak obat tasigna Donasi sebanyak (120 tablet - 5 tablet) 115 tablet.\nTasigna 150mg\nBeli = 5 kapsul x Rp. 290.000 = Rp. 1.450.ooo /bulan (selama setahun)\nFree = 115 tablet x Rp. 290.000 = Rp. 33.350.000/bulan (selama setahun)\nTasigna 200mg\nBeli = 5 kapsul x Rp. 390.000 = Rp. 1.950.ooo /bulan (selama setahun)\nFree = 115 tablet x Rp. 390.000 = Rp. 44.80.5000/bulan (selama setahun)</p>', '2015-12-09 17:29:34', '2015-12-09 17:29:34', 5, 1),
(7, 'Artikel 4', '<p>GIST\nSaduran dari e-book : GIST Patient Guide.\nGIST (Gastrointestinal Stromal Tumor) atau Tumor atau Kanker Saluran Pencernaan.\nSebagian besar kanker dimulai dengan cara yang sama, yaitu sebuah sel sehat berubah menjadi sel kanker dalam proses bertahap, dan kemudian berkembang biak tak terkendali. GIST adalah jenis sarcoma jaringan lunak di saluran pencernaan, dan banyak didiagnosis pada tahun-tahun terakhir ini. 50-70 % dari pasien, GIST muncul di perut dan 20-30 % di usus kecil. GIST bisa terjadi di usus besar, tetapi jarang terjadi pada duodenum atau esofagus. Sekitar setengah dari semua pasien yang baru didiagnosis GIST sudah mengalami metastasis. Dalam kasus ini, sel-sel tumor bermigrasi ke organ-organ lain melalui aliran darah dan telah menghasilkan tumor ganas sekunder, suatu proses yang dapat terjadi pada kebanyakan kanker.\nMetastasis GIST yang paling sering ditemukan di hati atau rongga perut , dan sangat jarang di organ lain, seperti paru-paru, tulang, otak atau kelenjar getah bening. Salah satu masalah adalah GIST jarang sekali pasien didiagnosis di fase-fase awal, karena mereka berkembang secara perlahan . Usia rata-rata pada awal penyakit adalah antara 55 dan 65 . GIST sangat jarang terjadi pada orang di bawah 40 . Namun, ada kasus yang sangat jarang pada anak-anak dan remaja. Para ahli memperkirakan bahwa akan ada sekitar 15 kasus baru GIST per juta penduduk setiap tahun.\n<strong>Gejala</strong>\nGIST seringkali sudah memiliki ukuran yang cukup besar pada saat pertama kali didiagnosis, karena GIST tidak memiliki gejala disaat ukuran GIST masih kecil. Gejala pertama tergantung pada ukuran tumor dan lokasi. Sebagian besar tumor ini ditemukan selama operasi, atau intervensi untuk  beberapa keluhan lain. Gejala yang paling umum ditemukan sakit pada perut dan duodenum yaitu adalah perasaan kenyang, rasa sakit atau ketidaknyamanan, perdarahan gastrointestinal (menghasilkan tinja berwarna hitam atau berlama-lama) atau mual.\nTumor di usus kecil sering mencapai ukuran besar sebelum merasakan rasa sakit. Nyeri ini biasanya disebabkan oleh perpindahan organ lainnya, perdarahan atau obstruksi. Tumor di usus besar juga dapat ditandai dengan adanya pendarahan atau obstruksi. Tumor yang berada di kerongkongan kemungkinan dapat menyebabkan masalah pada proses menelan.\n<strong> Penyebab</strong>\nTidak diketahui mengapa beberapa orang didiagnosis dengan GIST. Penyebab GIST adalah mutasi pada gen yang menghasilkan perubahan pada reseptor sinyal (protein reseptor) pada permukaan sel-sel tertentu. Kebanyakan mutasi terjadi pada GIST adalah pada gen KIT, dan jumlah yang sangat kecil memiliki mutasi pada gen PDGFR. Gen ini masing-masing memiliki fungsi untuk memproduksi KIT dan PDGF reseptor. Sinyal Reseptor ini berfungsi sebagai faktor yang menyebabkan pertumbuhan GIST menjadi lebih besar. Misalnya, ketika salah satu faktor pertumbuhan atau utusan ini berikatan dengan reseptor KIT, enzim diaktifkan dan memulai pertumbuhan sel. Bila sambungan ini terganggu, enzim yang dinonaktifkan dan sel-sel berhenti membelah. Dalam kasus cacat Namun, enzim ini, yang disebut tyrosine kinase, terus aktif dan tidak bisa lagi "dimatikan". Hal ini menyebabkan pertumbuhan sel yang tidak terkendali dan GIST yang berkembang. Menurut ilmu pengetahuan terkini, GIST muncul secara acak dan tidak diwariskan. Hanya beberapa keluarga telah diidentifikasi di seluruh dunia, di mana GIST tampaknya memiliki dasar genetik. Penemuan bahwa GIST dapat dideteksi dengan menggunakan protein KIT, membantu menunjukkan bahwa GIST timbul dari sel-sel interstisial Cajal atau prekursor mereka. Ini adalah sel-sel kecil yang terletak di dinding luar saluran pencernaan. Oleh karena itu GIST berkembang di dinding organ pencernaan. Dari sana mereka biasanya tidak menyebar ke organ-organ mereka melekat, namun tumbuh menjadi rongga perut. Inilah sebabnya mengapa mereka sering hanya didiagnosis setelah beberapa waktu, ketika mereka telah men</p>', '2015-12-09 17:30:33', '2015-12-09 17:30:33', 5, 1),
(8, 'Artikel 5', 'Definisi dan Epidemiologi Leukemia adalah suatu jenis penyakit kanker yang menyerang sel-sel darah putih yang diproduksi oleh sumsum tulang (bone marrow). Sumsum tulang dalam tubuh manusia ini memproduksi tiga tipe sel darah diantaranya sel darah putih yang berfungsi sebagai daya tahan tubuh melawan infeksi, sel darah merah yang berfungsi membawa oxygen kedalam tubuh, dan platelet (trombosit) yang merupakan bagian kecil sel darah yang membantu proses pembekuan darah. Dalam keadaan normal, sel darah putih, berfungsi sebagai pertahanan tubuh, akan terus membelah dalam suatu kontrol yang teratur.</p>\n<p style="text-align:justify;">Pada kasus Leukemia, sel darah putih tidak merespon kepada signal yang diberikan. Akhirnya produksi yang berlebihan tidak terkontrol (abnormal) akan keluar dari sumsum tulang dan dapat ditemukan di dalam darah perifer atau darah tepi. Jumlah sel darah putih yang abnormal ini bila berlebihan dapat mengganggu fungsi normal sel lainnya. Pada pasien leukemia akan menunjukkan beberapa gejala seperti; mudah terkena penyakit infeksi, anemia dan perdarahan.</p>\n<p style="text-align:justify;">Leukemia umumnya muncul pada diri seseorang sejak dimasa kecilnya. Sumsum tulang tanpa diketahui dengan jelas penyebabnya telah memproduksi sel darah putih yang berkembang tidak normal atau abnormal. Normalnya, sel darah putih mereproduksi ulang bila tubuh memerlukannya atau ada tempat bagi sel darah itu sendiri. Tubuh manusia akan memberikan signal secara teratur kapan sel darah diharapkan be-reproduksi kembali.</p>\n<p style="text-align:justify;">Pada pasien leukemia, terjadi pembentukkan sel darah putih abnormal (sel leukemia) yang berbeda dan tidak berfungsi seperti sel darah putih normal. Pada pasien leukemia, sumsum tulang memproduksi sel darah putih yang tidak normal yang disebut sel leukemia. Sel leukemia yang terdapat dalam sumsum tulang akan terus membelah dan semakin mendesak sel normal, sehingga produksi sel darah normal akan mengalami penurunan.</p>\n<p style="text-align:justify;">Leukemia digolongkan menurut cepatnya penyakit ini berkembang dan memburuk, yaitu :\n1. Leukemia akut : Sel darah sangat tidak normal, tidak dapat berfungsi seperti sel normal, dan jumlahnya meningkat secara cepat. Kondisi pasien dengan leukemia jenis ini memburuk dengan cepat.</p>\n<p style="text-align:justify;">2. Leukemia kronik : Pada awalnya sel darah yang abnormal masih dapat berfungsi, dan orang dengan leukemia jenis ini mungkin tidak menunjukkan gejala. Perlahan-lahan, leukemia kronik memburuk dan mulai menunjukkan gejala ketika sel leukemia bertambah banyak dan produksi sel normal berkurang.</p>\n<p style="text-align:justify;">Leukemia juga digolongkan menurut tipe sel darah putih yang terkena. Maksudnya, leukemia dapat muncul dari sel limfoid (disebut leukemia limfositik) atau mieloid (disebut leukemia mieloid). Secara keseluruhan, leukemia dibagi menjadi :\n1. Leukemia limfositik kronik (CLL), terutama mengenai orang berusia &gt;55 tahun, dan jarang sekali mengenai anak-anak.\n2. Leukemia mieloid kronik (CML), terutama mengenai orang dewasa.\n3. Leukemia limfositik akut (ALL), terutama mengenai anak-anak, namun dapat juga mengenai dewasa. Leukemia jenis ini merupakan jenis leukemia terbanyak pada anak (sekitar 75 – 80 % leukemia pada anak)\n4. Leukemia mieloid akut (AML), dapat mengenai anak maupun orang dewasa. Merupakan 20 % leukemia pada anak.</p>\n<p style="text-align:justify;"><strong>Chronic Myelogenous Leukemia (CML)</strong></p>\n<p style="text-align:justify;">Leukemia Granulositik Kronik/Chronic Myeloid Leukemia (LGK/CML) merupakan salah satu penyakit keganasan darah yang ditandai oleh meningkatnya jumlah sel-sel darah putih (leukosit); terutama sel-sel seri myeloid. Kelainan pada CML ini disebabkan oleh abnormalitas kromosom yang khas yaitu Philadelphia Chromosome (Ph). Pada CML terjadi translokasi kromosom resiprokal 9 (ABL) dan 22 (BCR) atau t(9;22) menghasilkan protein BCR-ABL yang memiliki aktivitas tyrosine kinase yang merangsang diferensiasi (pertumbuhan dan perkembangan) leukosit di sumsum tulang dan mencegah apoptosis (kematian sel yang sudah terprogram).</p>\n<p style="text-align:justify;"><strong>Gejala-Gejala CML</strong></p>\n<p style="text-align:justify;">CML biasanya terjadi pada orang-orang paruh usia atau lebih tua, meskipun juga dapat terjadi pada anak-anak. Lazimnya CML maju secara perlahan. Pada stadium pertama dari CML, kebanyakan orang tidak mempunyai gejala-gejala kanker. Ketika gejala-gejala timbul, muncul perasaan tidak memiliki tenaga, demam, kehilangan nafsu makan, dan sering keluar keringat malam. Limpa (di kanan bagian atas dari perut) bengkak dan membesar dengan nyata.</p>\n<p style="text-align:justify;">Jika ada gejala-gejala, tes darah dilakukan untuk menghitung jumlah setiap jenis sel-sel darah yang berbeda dan untuk menguji penampakannya. Jika hasil dari tes darah abnormal, biopsi sumsum tulang dilakukan (Bone Marrow Test = Pengambilan contoh sumsum tulang). Selama tes ini, jarum dimasukan ke dalam tulang dan sejumlah kecil sumsum tulang diambil keluar dan diperiksa dibawah mikroskop. Tes-tes lain yang mungkin dilakukan termasuk studi-studi kromosom (karyotypes) dari sel-sel darah dan sumsum tulang dan studi-studi molekul dari sel-sel ini.</p>\n<p style="text-align:justify;">Mendiagnosa CML</p>\n<p style="text-align:justify;">Sekali CML telah didiagnosa, tes-tes yang lebih banyak dilakukan untuk mencari apakah sel-sel leukemia telah menyebar kedalam bagian-bagian lain tubuh. Ini disebut pen-stadiuman (staging). CML maju melaui fase-fase yang berbeda dan fase-fase ini adalah stadium-stadium yang digunakan untuk merencanakan perawatan. Stadium-stadium berikut digunakan untuk chronic myelogenous leukemia:\n1. Chronic phase, ada sedikit sel-sel blast dalam darah dan sumsum tulang dan mungkin tidak ada gejala-gejala dari leukemia. Fase ini berlangsung beberapa bulan sampai beberapa tahun.\n2. Accelerated phase, ada lebih banyak sel-sel blast dalam darah dan sumsum tulang, dan lebih sedikiit sel-sel normal.\n3. Blastic phase, lebih dari 30% dari sel-sel dalam darah dan sumsum tulang adalah sel-sel blast dan sel-sel blast mungkin membentuk tumor-tumor diluar sumsum tulang pada tempat-tempat seperti tulang atau nodul-nodul limfa. Ini juga disebut blast crisis.\n4. Refractory CML, sel-sel leukemia tidak berkurang meskipun perawatan diberikan.</p>\n<p style="text-align:justify;"><strong>Perawatan CML</strong>\nAda perawatan-perawatan untuk semua pasien-pasien dengan CML. Perawatan-perawatan ini mungkin termasuk:\n1. Kemoterapi, menggunakan obat-obat untuk membunuh sel-sel kanker yaitu Glivec (Imatinib Mesylate)\n2. Terapi biologi, perawatan yang menggunakan sistim imun pasien untuk melawan kanker\n3. Terapi radiasi, menggunakan x-rays dosis tinggi atau sinar-sinar tenaga tinggi lainnya untuk membunuh sel-sel leukemia;\n4. Kemoterapi dosis tinggi dengan transplantasi sel induk (untuk tumbuh ke dalam dan memugar kembali sel-sel darah tubuh);\n5. Donor lymphocyte infusion atau DLI (setelah transplantasi sel induk).\n6. Operasi (splenectomy, operasi untuk mengeluarkan limpa).</p>\n<p style="text-align:justify;">Kemoterapi menggunakan obat-obat untuk membunuh sel-sel kanker. Kemoterapi dilakukan dengan meminum pil, atau mungkin dimasukan ke dalam tubuh dengan jarum pada vena atau otot. Kemoterapi disebut perawatan sistemik karena obat memasuki aliran darah, berjalan melalui seluruh tubuh, dan dapat memnbunuh sel-sel kanker diseluruh tubuh. Kemoterapi juga dapat dimasukan secara langsung ke dalam cairan sekitar otak dan sumsum tulang belakang (spinal cord) melalui tabung yang dimasukan ke dalam otak atau punggung. Ini disebut intrathecal chemotherapy.</p>\n<p style="text-align:justify;">Imatinib Mesylate (Glivec) adalah tipe baru dari obat kanker, yang disebut tyrosine kinase inhibitor. Imatinib Mesylate menghalangi enzim, tyrosine kinase, yang menyebabkan sel-sel induk untuk berkembang ke sel-sel darah putih yang lebih banyak daripada yang dibutuhkan oleh tubuh. Glivec telah muncul sebagai obat kunci yang mentargetkan gen untuk perawatan CML. Saat ini telah muncul juga obat Nilotinib (Tasigna) yang menjadi second line bagi pasien-pasien CML yang sudah resisten terhadap imatinib. Bahkan di Jawa Barat, saat ini mayoritas pasien baru yang didiagnosa CML pada tahun 2013 ini sudah menggunakan nilotinib sebagai obat first line atau obat utama menggantikan imatinib.</p>\n<p style="text-align:justify;">Terapi radiasi menggunakan x-rays atau sinar-sinar tenaga tinggi untuk membunuh sel-sel kanker dan menyusutkan tumor-tumor. Radiasi untuk CML biasanya datang dari mesin diluar tubuh (external radiation therapy) dan adakalanya digunakan untuk menghilangkan gejala-gejala atau sebagai bagian dari terapi yang diberikan sebelum transplantasi sumsum tulang.</p>\n<p style="text-align:justify;">Transplantasi sumsum tulang digunakan untuk menggantikan sumsum tulang pasien dengan sumsum tulang yang sehat. Pertama, semua sumsum tulang dalam tubuh dihancurkan dengan kemoterapi dosis tinggi dengan atau tanpa terapi radiasi. Sumsum sehat kemudian diambil dari orang lain (donor) yang jaringannya sama atau hampir sama seperti punya pasien. Donor mungkin bisa diambil dari saudara kembar (pencocokan yang paling baik), saudara laki atau perempuan, atau orang lain yang tidak berhubungan. Sumsum sehat dari donor diberikan ke pasien melalui jarum ke dalam vena, dan sumsum ini menggantikan sumsum yang telah dihancurkan. Transplantasi sumsum tulang yang menggunakan sumsum dari saudara atau yang tidak berhubungan pada pasien disebut allogeneic bone marrow transplant.</p>\n<p style="text-align:justify;">Tipe lain dari transplantasi sumsum tulang, disebut autologous bone marrow transplant, sedang diuji pada percobaan-percobaan klinik. Untuk melakukan transplantasi tipe ini, sumsum tulang diambil dari pasien dan dirawat dengan obat-obat untuk membunuh segala sel-sel kanker. Sumsum kemudian dibekukan untuk disimpan. Pasien diberikan kemoterapi dosis tinggi dengan atau tanpa terapi radiasi untuk menghancurkan semua sumsum yang tersisa. Sumsum yang dibekukan yang telah disimpan kemudian dicairkan dan diberikan kembali ke pasien melalui jarum ke dalam vena untuk menggantikan sumsum yang telah dihancurkan.</p>\n<p style="text-align:justify;">Kemoterapi dosis tinggi degan transplantasi sel induk adalah metode yang memberikan kemoterapi dosis tinggi dan menggantikan sel-sel pembentuk darah yang dihancurkan oleh perawatan kanker. Sel-sel induk (sel-sel darah yang belum dewasa) dikeluarkan dari darah atau sumsum tulang pasien atau donor dan dibekukan dan disimpan. Setelah kemoterapi selesai, sel-sel induk yang disimpan dicairkan dan diberikan kembali ke pasien melalui infus. Sel-sel induk yang di-infuskan kembali tumbuh kedalam (dan memperbaiki) sel-sel darah tubuh.</p>\n<p style="text-align:justify;">Donor lymphocyte infusion (DLI) adalah perawatan kanker yang mungkin digunakan setelah transplantasi sel induk. Lymphocytes (suatu tipe dari sel darah putih) dari donor transplantasi sel induk dikeluarkan dari darah donor dan mungkin dibekukan untuk penyimpanan. Lymphocytes donor dicairkan jika dibekukan sebelumnya dan kemudian diberikan pada pasien melalui satu atau lebih infusi-infusi. Lymphocytes melihat sel-sel kanker pasien sebagai bukan kepunyaan tubuh dan menyerang mereka.</p>\n<p style="text-align:justify;">Terapi biologi mencoba untuk membuat tubuh menyerang kanker. Terapi ini menggunakan material-material yang dibuat oleh tubuh atau dibuat di dalam laboratorium untuk memperkuat, mengarahkan, atau memperbaiki pertahanan alami tubuh melawan penyakit. Terapi biologi adakalanya disebut biological response modifier (BRM) therapy atau immunotherapy.</p>\n<p style="text-align:justify;">Jika limpa sangat membesar, limpa mungkin dikeluarkan dalam operasi yang disebut splenectomy.</p>\n<p style="text-align:justify;">Perawatan standar pada setiap stadium dipertimbangkan sesuai dengan keefektifannya pada pasien-pasien pada studi-studi sebelumnya.</p>\n<p style="text-align:justify;">Chronic phase, salah satu dari perawatan yang mungkin dapat dilakukan adalah sebagai berikut:\n1. Kemoterapi dosis tinggi dengan transplantasi sel induk donor.\n2. Terapi biologi (interferon) dengan atau tanpa kemoterapi.\n3. Terapi obat Glivec.\n4. Kemoterapi untuk menurunkan jumlah sel-sel darah putih.\n5. Operasi untuk mengangkat limpa (splenectomy).</p>\n<p style="text-align:justify;">Accelerated phase: Perawatan mungkin salah satu dari yang berikut:\n1. Transplantasi sel induk.\n2. Terapi obat Glivec.\n3. Terapi biologi (interferon) dengan atau tanpa kemoterapi.\n4. Kemoterapi dosis tinggi.\n5. Kemoterapi untuk menurunkan jumlah sel-sel darah putih.\n6. Terapi transfusi untuk menggantikan sel-sel darah merah, platelets (trombosit), dan adakalanya sel-sel darah putih, untuk menghilangkan gejala-gejala dan memperbaiki kualitas hidup.</p>\n<p style="text-align:justify;">Blastic phase: Perawatan mungkin salah satu dari yang berikut:\n1. Terapi obat Glivec\n2. Kemoterapi yang menggunakan satu atau lebih obat-obat.\n3. Kemoterapi dosis tinggi.\n4. Transplantasi sel induk donor.\n5. Kemoterapi sebagai terapi yang meredakan untuk menghilangkan gejala-gejala dan memperbaiki kualitas hidup.</p>\n<p style="text-align:justify;">Kesempatan penyembuhan tergantung pada sejumlah faktor-faktor termasuk fase dari CML, jumlah dari blasts dalam darah atau sumsum tulang, ukuran dari limpa pada saat diagnosis, kesehatan keseluruhan pasien, dan umur pasien\nPada awalnya obat Hydrea merupakan satu-satunya terapi standar untuk pasien-pasien CML; terutama apabila leukosit &gt; 100.000/uL (cytoreductive therapy), dimana Hydrea mampu menurunkan jumlah leukosit, mengecilkan ukuran limpa, dan menghilangkan keluhan. Namun sejalan dengan perkembangan penyakitnya itu sendiri Hydrea tidak lagi dapat dijadikan satu-satunya terapi CML. Bahkan Hydrea sudah tidak dipasarkan di Indonesia.</p>\n<p style="text-align:justify;">Saat ini, obat Glivec (imatinib mesylate) direkomendasikan sebagai terapi lini pertama CML fase kronis dengan dosis 1x400 mg/hari (4 x 100mg tablet/hari), dimana Glivec untuk pasien CML mampu menghilangkan Kromosom Philadelpia, BCR-ABL tidak terbentuk, jumlah leukosit menurun bahkan menjadi normal dan limpa tidak teraba (normal). Uji klinis terhadap pasien menunjukkan tingkat keberhasilan sebanyak 83% dengan usia harapan hidup bisa diperpanjang lebih dari 7 tahun.</p>\n<p style="text-align:justify;">Glivec juga direkomendasikan khusus untuk pasien dewasa yang mengalami GIST c-Kit / cd-117 positif yang tidak dapat dibedah dan atau yang bersifat metastatis. Uji klinis menunjukkan pasien GIST stadium lanjut yang mendapat imatinib bisa bertahan hidup lebih dari 5 tahun.\nSumber : dari berbagai sumber.', '2015-12-09 17:32:39', '2015-12-09 17:32:39', 5, 1);
INSERT INTO `artikel` (`id`, `judul`, `isi`, `created_at`, `updated_at`, `user_id`, `from`) VALUES
(9, 'Artikel 6', '<p>HIMPUNAN MASYARAKAT PEDULI ELGEKA\nHimpunan Masyarakat Peduli ELGEKA Indonesia (ELGEKA) adalah sebuah organisasi dari Komunitas para pasien Chronic Myeloid Leukemia atau Leukemia Granulositik Kronik (CML/LGK) dan pasien Gastrointestinal Strumor Tumor atau Kanker Saluran Pencernaan (GIST) di Indonesia. ELGEKA didirikan oleh beberapa pasien GIPAP. Glivec International Patient Assistance Program</em>) pada 15 Juni 2006 di Jakarta atas prakarsa Prof. Dr. dr. A. Harryanto Reksodiputro, Sp.PD-KHOM seorang dokter spesialis Hematologi-Oncologi Medis dari Rumah Sakit Cipto Mangunkusumo (RSCM) sebagai Ketua Badan Koordinasi Nasional Perhimpunan Dokter Spesialis Penyakit Dalam sub Spesialis Hematologi-Oncologi Medis Indonesia (PERHOMPEDIN).</p>\n<p style="text-align:justify;">ELGEKA Indonesia memiliki visi Menjadi Himpunan Masyarakat Peduli CML dan GIST yang peduli akan kebutuhan anggota menuju hidup sehat dan pantang menyerah dan salah satu misinya adalah membantu pasien dalam mendapatkan akses kepada terapi pengobatan dan meningkatkan pengetahuan tentang CML dan GIST kepada semua pasien dan menyebarluaskan informasi yang berkaitan dengan CML dan GIST selain kepada pasien dan <em>caregiver</em> juga kepada masyarakat pada umumnya.</p>\n<p style="text-align:justify;"><strong>AKSES PENGOBATAN BAGI PASIEN CML</strong></p>\n<p style="text-align:justify;">Akses pengobatan atau terapi terhadap obat <em>Tirosine Kinase Inhibitor</em> (TKI) di Indonesia diawali dengan adanya Program GIPAP dari Max Foundation sebuah Organisasi non-Pemerintah nirlaba dari Amerika Serikat pada tahun 2003 sampai kurang lebih akhir pertengahan tahun 2009. Setelah Program GIPAP tidak lagi menerima pasien baru dan program akses kepada pengobatan khusus CML ini digantikan dengan adanya Program NOA (<em>Novartis Oncology Access</em>). Sesuai namanya, Program ini adalah program donasi yang dimiliki oleh PT. Novartis Indonesia (Novartis Oncology Global). Akses terhadap obat tidak lagi hanya terhadap obat <em>imatinib</em> (Glivec) sebagai obat lini pertama bagi pasien CML, tetapi pada sekitar tahun 2011 pasien di Indonesia dapat mengakses obat lini kedua yaitu <em>Nilotinib</em> (Tasigna).</p>\n<p style="text-align:justify;">Berbeda dengan Program GIPAP, dimana akses terhadap obat <em>Imatinib</em> dilakukan dengan “gratis” (walaupun terbatas hanya untuk obat Glivec), Program NOA pada dasarnya adalah program dengan berbasiskan “<em>cost sharing</em>”, dimana pasien CML ataupun GIST masih dibebankan biaya untuk pembelian obat. Pasien masih harus membeli obat dengan suatu skema tertentu yang telah ditentukan oleh Donatur, melalui Yayasan Kanker Indonesia (YKI) Cabang DKI Jakarta. Namun walaupun begitu, karena harga obat TKI ini (Glivec dan Tasigna) sangat mahal, kalau dihitung per butir (tablet/kapsul) maka harga obat untuk Glivec 100mg (<em>imatinib</em>) <u>+</u> @Rp. 250.000 dan <u>+</u>@Rp. 400.000 untuk Tasigna 200mg (<em>Nilotinib</em>) dan skema <em>cost sharing</em> yang relatif ringan dibandingkan bila harus membeli setiap bulannya, banyak pasien yang masih tidak mampu memenuhi persyaratan sesuai skema dan pada akhirnya lebih memilih untuk berhenti minum obat.</p>\n<p style="text-align:justify;">Skema akses pengobatan khususnya untuk CML di Indonesia telah mengalami perubahan secara signifikan sejak tahun 2003 yang diawali dengan Program GIPAP, kemudian menjadi NOA. Diawali pada pertengahan akhir tahun 2009, NOA pun mengalami beberapa kali perubahan skema <em>cost sharing</em>.</p>\n<p style="text-align:justify;">Seperti yang terlihat pada gambar di atas, skema akses pengobatan untuk pasien CML di Indonesia diawali oleh Program GIPAP dari Max Foundation, pasien mendapatkan obat melalui YKI DKI Jakarta setiap bulannya, dan dalam perspektif pasien obat dapat diakses tanpa biaya dan tanpa batasan jumlah obat selama sesuai dengan persetujuan atau permintaan dokter hematologi-onkologi medis dan mendapatkan persetujuan dari Max Foundation. Setelah Program GIPAP tidak lagi menerima pasien untuk mendapatkan akses obat <em>imatinib</em>, Program pengganti bagi pasien baru adalah Program NOA.</p>\n<p style="text-align:justify;">Berbeda dengan Program GIPAP yang bebas biaya untuk askes terhadap obat, Program NOA pada dasarnya menggunakan konsep <em>cost sharing</em> dimana pasien masih memiliki kewajiban membeli sekian tablet per bulannya. Program NOA dibagi menjadi empat skema sesuai peruntukkan pasien yang mengaksesnya, antara lain Plan A atau skema yang diperuntukkan bagi pasien yang memiliki Kartu Jaminan Kesehatan Masyarakat Nasional (JAMKESMAS) dari Pemerintah Pusat atau dengan kata lain skema ini untuk pasien kategori miskin; Plan B atau skema yang diperuntukkan bagi pasien pemegang Kartu Asuransi Kesehatan (ASKES) yaitu pasien-pasien dari keluarga Pegawai dan/atau Pensiunan Negeri Sipil atau Pensiunan TNI/Polri; Plan C atau skema yang diperuntukkan bagi pasien umum yang tidak memiliki kartu JAMKESMAS ataupun ASKES; dan Plan D atau skema yang diperuntukkan bagi pasien yang memiliki jaminas asuransi lainnya (swasta).</p>\n<p style="text-align:justify;">Masing-masing skema memiliki ketentuan dalam skema <em>cost sharing </em>–nya.</p>\n<ul style="text-align:justify;">\n<li><strong>Plan A</strong>, pasien dibebankan kewajiban membeli obat sebanyak 1 bulan kali dosis per hari, dan mendapatkan 11 bulan kali dosis per hari selama periode satu tahun, yang setelah itu dapat diperpanjang kembali. Kewajiban pembelian obat dibebankan kepada pasien sendiri atau kata lain pasien harus mengeluarkan biaya sebesar kurang lebih 30 hari x 4 tablet x Rp. 250.000 dalam setahun. Biaya ini bisa dicicil selama satu tahun, sehingga dalam sebulan pasien harus mengeluarkan <u>+</u> 2.500.000 (dua juta lima ratus ribu rupiah). Biaya ini khusus untuk pasien yang menggunakan <em>imatinib</em>, sedangkan bagi pasien yang menggunakan <em>nilotinib </em>biaya yang dikeluarkan jauh lebih besar. Karena harga obat <u>+</u>@Rp. 400.000/kapsul, sehingga biaya yang harus dikeluarkan selama setahun menjadi 30 hari x 4 kapsul x Rp. 400.000 atau jika dicicil per bulan pasien harus mengeluarkan biaya sebesar <u>+</u> Rp. 4.000.0000 (empat juta rupiah).</li>\n<li><strong>Plan B</strong>, pasien dibebankan kewajiban membeli obat sebanyak 2 bulan kali dosis per hari, dan mendapatkan 10 bulan kali dosis per hari selama periode satu tahun, yang setelah itu dapat diperpanjang kembali. Berbeda dengan plan A bagi pasien kategori Miskin dan bagi pemegang Kartu JAMKESMAS, plan B diperuntukkan bagi Pegawai dan/atau pensiunan pegawai negeri sipili atau pensiunan TNI/Polri, kewajiban pembelian obat sebanyak 2 bulan kali dosis per hari dilakukan oleh pemerintah melalui rumah sakit (RS) kelas 3 (biasanya RS Propinsi). Sehingga pasien sama sekali tidak dikenakan biaya sama sekali, pasien hanya diwajibkan mengambil obat selama 2 bulan dalam setahun di Apotek RS Kelas 3, dan sisanya pengambilan sama dengan pasien skema lain yaitu di YKI DKI Jakarta.</li>\n<li><strong>Plan C</strong>, pasien dibebankan kewajiban membeli obat sebanyak 3 bulan kali dosis per hari, dan mendapatkan 9 bulan kali dosis per hari selama periode satu tahun, yang setelah itu dapat diperpanjang kembali. Biaya yang harus dikeluarkan oleh pasien skema ini <u>+</u> 3 kali lipat pasien dengan skema plan A, dan</li>\n<li><strong>Plan C</strong>, pasien dibebankan kewajiban membeli obat sebanyak 4 bulan kali dosis per hari, dan mendapatkan 8 bulan kali dosis per hari selama periode satu tahun, yang setelah itu dapat diperpanjang kembali. Seperti halnya pasien dengan skema Plan B, kewajiban pembelian obat sebanyak 4 bulan kali dosis per hari dilakukan oleh Institusi penyedia asuransi yang dimiliki oleh pasien.</li>\n</ul>\n<p style="text-align:justify;">Dalam perjalanannya skema akses terhadap pengobatan obat TKI khususnya bagi pasien CML, masih sangat memberatkan. Dengan kondisi rata-rata pendapatan pasien yang tidak lebih dari dua juta perbulan maka, dengan menggunakan skema plan A saja sudah sangat memberatkan. Apalagi jika si pasien adalah seorang kepala keluarga atau jumlah anggota keluarga dengan masih memiliki kewajiban anak sekolah dan lainnya, biaya yang harus dikeluarkan sangat memberatkan. Skema akses terhadap pengobatan kemudian berubah menjadi</p>\n<ul style="text-align:justify;">\n<li>Plan A, perubahan kewajiban pembelian menjadi setengah bulan kali dosis per hari dalam periode satu tahun</li>\n<li>Plan C, perubahan kewajiban pembelian menjadi satu bulan kali dosis per hari dalam periode satu tahun.</li>\n</ul>\n<p style="text-align:justify;">Walaupun skema akses terhadap obat TKI mengalami perubahan, masih banyak pasien yang terpaksa <em>drop out </em>atau bahkan putus berobat sama sekali (<em>stop treatment</em>) karena beratnya kewajiban yang dibebankan kepada pasien. Ketidakmampuan secara finansial membuat banyak pasien akhirnya memutuskan untuk berhenti melakukan pengobatan TKI.</p>\n<p style="text-align:justify;">Bagi pasien yang masih dapat memaksakan untuk memenuhi kewajiban sesuai skema yang sesuai dengan kemampuan, pada akhirnyapun banyak melakukan penurusan dosis atau menurunkan dosis yang seharusnya dengan alasan agar hemat dan masih dapat meminum obat setiap harinya, tetapi dengan dosis yang dikurangi dari anjuran dokter hematologi-onkologi medis. Selain itu, banyak pasien yang dengan sengaja menghentikan pengobatan karena merasa sudah sehat, hanya dari kondisi fisik yang dirasakan tidak bermasalah dan/atau hasil laboratorium darah rutin membaik atau normal.</p>\n<p style="text-align:justify;">Pada awal tahun 2014, pemerintah Indonesia mulai menerapkan Program Jaminan Kesehatan Nasional (JKN) dari BPJS Kesehatan, dimana <em>imatinib</em> 100mg dan <em>nilotinib</em> 200mg dapat diakses oleh pasien CML seluruh Indonesia berdasarkan Formularium Nasional sesuai Surat Keputusan (SK) Menteri Kesehatan RI Nomor 328/MENKES/SK/IX/2013 yang kemudian dilakukan perubahan melalui SK Menkes RI nomor 159/MENKES/SK/V/2014. Tetapi pada kenyataannya, program JKN ini tidak berjalan dengan baik diawal tahun (masa transisi), masih banyak RS yang belum siap dalam penerapan Program JKN ini, sehingga pasien masih harus mengalami kendala dalam akses terhadap TKI ini. Program JKN khususnya bagi pasien CML untuk mendapatkan akses ke TKI baru dapat berjalan dengan baik di akhir pertengahan tahun 2014.</p>\n<p style="text-align:justify;"><strong>MASALAH UMUM DAN TERKINI PADA PASIEN CML</strong></p>\n<p style="text-align:justify;">Permasalahan implementasi Program JKN saat ini disetiap daerah tentu berbeda-beda, tidak semua berjalan dengan mulus. Akses terhadap TKI pada program JKN masih terbatas di beberapa RS kelas 3 di beberapa propinsi besar saja. Belum meratanya akses obat TKI ini, selain tergantung dari kemampuan masing-masing RS, juga bisa jadi karena keberadaan dokter hematologi-onkologi medis yang masih belum banyak dan merata di seluruh daerah di Indonesia. Akses obat ke TKI melalui Program JKN masih perlu terus diperjuangkan agar merata ke seluruh daerah di Indonesia. Dan jikapun ada di beberapa RS kelas 3, masih belum ada jaminan sepenuhnya obat dapat sewaktu-waktu bisa didapatkan sesuai dosis yang direkomendasikan dokter. Di beberapa daerah masih terdapat stok obat yang belum memadai atau sebanding dengan jumlah pasien yang ada.</p>\n<p style="text-align:justify;">Untuk itu, pada acara <em>press conference</em> dengan media pada Hari CML Sedunia 22 September 2015 di Jakarta, Ketua ELGEKA Indonesia, bapak Mahirudin Achmad mengatakan bahwa “Terutama di Indonesia, perhatian utama kami pada pemerataan terhadap akses pengobatan di seluruh Indonesia, jaminan ketersedian obat sesuai dengan rekomendasi para ahli terutama di Rumah Sakit - Rumah Sakit penyedia Program Jaminan Kesehatan Nasional (JKN) dari BPJS Kesehatan di seluruh Indonesia, sesuai kebutuhan pasien setiap waktu dan ketersedian informasi mengenai CML yang mudah dijangkau”.</p>\n<p style="text-align:justify;">Sebelum era Program JKN, banyak pasien berhenti melakukan terapi pengobatan TKI karena faktor finansial. Skema <em>cost sharing</em>, masih dirasakan berat untuk dipenuhi oleh pasien. Saat ini di era JKN, permasalahan umum yang masih sering banyak ditemui adalah masih banyak pasien CML yang belum memahami betul apa itu CML dan GIST, sehingga banyak pasien yang masih dengan sengaja menurunkan dosis obat tidak sesuai dengan anjuran dokter hematologi-onkologi medis nya. Pasien merasa sudah sehat dan/atau sembuh, mengakibatkan tidak disiplin melakukan pengobatan bahkan beberapa pasien dengan sengaja tidak disiplin melakukan pengobatan. Perasaan sehat dan/atau sudah sembuh hanya didasarkan pada hasil laboratorium darah rutin saja (leukosit, trombosit dan hemoglobin yang normal) dan akibat dari kebiasaan dan keputusan menghentikan pengobatan menjadikan kondisi pasien menjadi lebih buruk dalam jangka waktu panjang.</p>\n<p style="text-align:justify;"><strong>DASAR PERTIMBANGAN</strong></p>\n<p style="text-align:justify;">Berdasarkan Ringkasan <strong>Disertasi</strong> dengan Judul “<em>Peran Mutasi Gen BCR-Abl pada perjalanan klinis pasien Leukemia Granulositik Kronik (LGK) : Kaitannya dengan aspek terapi imatinib mesylate (IM)”</em>, dari Dr. dr. Hilman Tadjoedin, Sp.PD-KHOM pada Program Doktoral Ilmu Kedokteran Universitas Indonesia, Juli 2015, dimana penelitian disertasi berdasarkan pasien dari RSCM dan RS Kanker Dharmais Jakarta, menyatakan “ ... the criteria from ELN (evaluation of BCR-Abl not only conducted at 18<sup>th</sup> month but also 3<sup>rd</sup>, 6<sup>th</sup> and 12<sup>th</sup> month. ELN include decreased of BCR-Abl gene expression value in those months as criteria mentioned). That criteria has not been applied yet in Indonesia, but it is potential to enrich our knowledge in analyzing and applying in for the future when the laboratorium resource are ready. Not all laboratories in Indonesia can conduct this kind of analysis.”</p>\n<p style="text-align:justify;">Jika diterjemahkan bebas kurang lebih intinya adalah bahwa kriteria pada <em>European Leukemia Net</em> (ELN) yang menyatakan bahwa evaluasi terhadap BCR-Abl tidak hanya dilakukan pada bulan ke-18 saja, tetapi juga dilakukan pada bulan ke-3, ke-6 dan ke-12. Dimana pada ELN dinyatakan bahwa evaluasi pada bulan-bulan sesuai kriteria tersebut terdapat penurunan nilai BCR-Abl. Kriteria yang disebutkan pada ELN belum dapat diimplementasikan di Indonesia, tetapi ini merupakan peluang atau tantangan bagi para hematolog untuk meningkatkan kemampuan dan pengetahuan di bidang analisis pada level molekuler dan dapat diterapkan pada masa yang akan datang pada saat sumber daya laboratorium yang ada di Indonesia sudah siap dan memadai. Belum semua laboratorium dapat melakukan analisis mendalam sampai level molekuler.</p>\n<p style="text-align:justify;">Dari ringkasan disertasi di atas secara eksplisit menyatakan bahwa kriteria pada ELN belum diterapkan di Indonesia, karena kebanyakan sumber daya Laboratorium di Indonesia belum dapat melakukan analisis mendalam sampai pada level molekuler untuk pengawasan (<em>monitoring</em>) terhadap respon pengobatan sesuai kriteria ELN pada pasien CML.</p>\n<p style="text-align:justify;"><em>The European Leukemia Net</em> merupakan sebuah jaringan penelitian unggulan di bidang Leukemia yang didanai oleh Uni Eropa yang memberikan rekomendasi pengobatan berdasarkan pada konsensus dari 32 ahli CML dari Eropa, Amerika dan Asia-Pasifik. Rekomendasi ini berdasarkan data ilmiah terbaik yang tersedia pada publikasi-publikasi ilmiah bidang Leukemia. Rekomendasi ini dikembangkan untuk menjadi pegangan para dokter hematologi-oncologi medis sebagai standar pengobatan dan perawatan pasien CML dan membantu pasien CML untuk mendapatkan standar pengobatan dan perawatan terbaik di seluruh dunia.</p>\n<p style="text-align:justify;">Di Indonesia, walaupun ada beberapa laboratorium yang sudah dapat melakukan analisis mendalam sampai pada level molekuler, biaya pemeriksaan laboratorium ini relatif masih sangat mahal dan tentu belum masuk ke dalam pembiayaan yang ditanggung oleh Program JKN.</p>\n<p style="text-align:justify;">Berdasarkan pemaparan Prof. Hari Menon. MD., DM., seorang Professor pada Leukemia Lymphoma Unit Dept of Medical Oncology Tata Memorial Hospital Parel, Mumbai – India, pada acara CML Horizons 2015, dinyatakan bahwa kasus menghentikan pengobatan, di negara-negara berkembang saat ini belum dieksplorasi, baik karena pasien masih ketakutan akan kehilangan akses terhadap TKI (khususnya di India, melalui Program GIPAP) atau karena kurangnya dokumentasi diagnosa yang sensitive (<em>deeply molecular analysis</em>), akses ke TKI yang mudah dan sesuai keperluan, dan lain-lain.</p>\n<p style="text-align:justify;">Sedangkan berdasarkan pemaparan pada acara yang sama, Prof. Dr. Andreas Hochhaus seorang Professor dan Kepada Departemen Hematologi-oncologi University Medical Center Jena di Jerman, menyatakan bahwa penghentian pengobatan diperuntukan bagi pasien CML tertentu saja dan harus dalam rangka untuk kepentingan penelitian (<em>clinical trial</em>) dengan beberapa syarat dan ketentuan. Beberapa ketentuan diantaranya adalah untuk menghindari kekambuhan yang lebih cepat, perlu adanya laporan hasil analisis mendalam pada level molekuler (<em>very low residual response or even deep molecular response</em>). Sebab dinyatakan bahwa status remisi (sembuh) yang dimiliki oleh seorang pasien CML sebenarnya belum benar-benar komplit (belum sembuh sepenuhnya), hal ini salah satu diantaranya dapat dilihat dari fluktuasi nilai PCR (respon pengobatan) dari bulan ke bulan yang artinya setiap pasien masih memiliki kemungkinan “sisa” dari CML itu sendiri (<em>residual disease</em>), walaupun daya tahan yang dimiliki seorang pasien sangat kuat untuk membuat “sisa” penyakit masih dapat terkontrol dengan baik. Dan terakhir dinyatakan perlu juga pertimbangan sudah seberapa lama pasien (durasi) telah melakukan pengobatan sebelum diambil keputusan untuk menghentikan pengobatan.</p>\n<p style="text-align:justify;">CML Horizons 2015 di Barcelona Spanyol, 1-3 Mei 2015 adalah sebuah konferensi yang diselenggarakan oleh <em><a href="http://www.cmladvocates.net/education/cml-glossary?view=glossary&amp;amp;letter=c#cml">CML</a> Advocates Network</em> yang dihadiri oleh 118 delegasi dimana 30 delegasi diantaranya adalah pendatang baru. Semua delegasi yang hadir merupakan organisasi dari komunitas pasien dan keluarga pasien CML yang diselenggarakan setiap tahun. Delegasi yang hadir berasal dari 65 negara di seluruh dunia (Eropa, Amerika Utara, Asia, Afrika, Timur Tengah, dan Amerika Latin) datang bersama-sama dengan para pembicara yang merupakan pakar di bidang kedokteran yang berkaitan dengan CML, saling berbagi pengetahuan untuk meningkatkan kapasitas organisasi yang hadir. CML Advocate Network itu sendiri merupakan sebuah sebuah perkumpulan yang menghubungkan organisasi pasien dan keluarga pasien atau pemerhati baik terhadap pasien CML maupun terhadap penyakit CML itu sendiri dan berkerja dengan berbasiskan <em>social media</em> untuk melakukan advokasi dan membangun keahlian, mengkoordinasi kampanye, membangun kerjasama dan kemitraan dan berbagi pengetahuan terkini.</p>\n<p style="text-align:justify;">Pada acara CML Horizons 2015 tersebut, ELGEKA Indonesia menjadi salah satu delegasi yang hadir sekaligus pendatang baru di organisasi CML Sedunia ini. Dimana sebelumnya ELGEKA Indonesia resmi menjadi anggota yang ke-99 pada Januari 2015.</p>\n<p style="text-align:justify;">Berdasarkan “<em>Treatment Recommendations for People Living with CML: A patient-friendly summary of the European LeukemiaNet recommendations (2013) for the management of Chronic Myeloid Leukemia</em>” atau “Rekomendasi Pengobatan untuk Orang dengan CML: Sebuah Ringkasan dari rekomendasi European Leukemia Net (2013) untuk pengelolaan Leukemia Myeloid Kronis" Versi 19 September 2014 (v3.4/2014) yang dipublikasikan oleh CML Advocates Network, menyatakan bahwa</p>\n<p style="text-align:justify;">“ ... Stopping treatment may be considered in individual patients, also outside of clinical studies, if high quality and certified molecular monitoring can be assured at monthly intervals. ...</p>\n<p style="text-align:justify;">... Unlike other cancer patients, CML patients who are in remission are not cured, and current knowledge cannot recommend stopping treatment outside of controlled clinical studies except in individual patients with proper, high quality monitoring at monthly intervals. Even if tests can’t find any trace of CML in your cells, the disease can still reappear and result in a relapse.”</p>\n<p style="text-align:justify;">jika diterjemah-bebaskan dalam bahasa Indonesia,</p>\n<p style="text-align:justify;">“... menghentikan pengobatan dapat dipertimbangkan juga untuk pasien individu, di luar kepentingan studi klinis, jika terdapat sumber daya pemantauan sampai pada level molekuler yang berkualitas tinggi dan dan bersertifikat Internasional yang dapat dilakukan pada setiap interval bulanan ...”</p>\n<p style="text-align:justify;">“... Tidak seperti pasien kanker lainnya, pasien CML yang telah mencapai atau berada pada status remisi, sebenarnya belum dapat dinyatakan sembuh (tidak sembuh sepenuhnya), dan pengetahuan yang ada saat ini belum dapat merekomendasikan untuk menghentikan pengobatan di luar studi klinis yang terkontrol kecuali pada pasien individu dengan pemantauan kualitas tinggi yang tepat pada interval bulanan. Bahkan jika tes tidak dapat menemukan jejak CML dalam sel, penyakit ini sebenarnya masih bisa muncul kembali dan menyebabkan kekambuhan. "</p>\n<p style="text-align:justify;">Berdasarkan perspektif dan rekomendasi ELN yang telah dijelaskan di atas, sudah sangat jelas bahwa "<em>Stop Treatment</em>" (Menghentikan Pengobatan) belum masuk ke dalam rekomendasi pada ELN bagi pasien CML. Pilihan untuk menghentikan pengobatan bagi pasien CML masih berada pada level penelitian (studi klinis) di negara-negara maju dimana sumber daya laboratorium sudah lebih maju bila dibandingkan di Indonesia.</p>\n<p style="text-align:justify;">Sedangkan dalam perspektif kebanyakan pasien, bahwa <em>stop treatment</em> atau menghentikan pengobatan adalah sebuah keputusan yang masih menakutkan dan perlu pertimbangan yang sangat mendalam, selain efek samping akibat pengentian pengobatan juga dari sisi psikologis. Pasien masih merasakan ketakutan untuk berhenti pengobatan dengan alasan adanya kekhawatiran yang mendalam terhadap efek samping dalam jangka waktu panjang, yaitu bila terjadi kekambuhan yang lebih parah dan kekhawatiran terjadinya resisten, atau sisa sel leukemia yang ada mengalami resistensi terhadap obat yang ada. Jika sel leukemia pada tubuh pasien mengalami resistensi terhadap <em>imatinib</em> maka masih ada kemungkinan untuk “mencoba” berpindah pengobatan ke obat lini kedua yaitu <em>Nilotinib</em>, tetapi jika <em>nilotinib</em> pun sudah tidak “cocok” atau resisten maka akses kepada TKI lainnya, semakin sulit. Karena obat TKI untuk pasien CML di Indonesia hanya dua jenis, yaitu <em>imatinib</em> dan <em>nilotinib</em>.</p>\n<p style="text-align:justify;"><strong>KESIMPULAN </strong></p>\n<p style="text-align:justify;">Berdasarkan kondisi dan pertimbangan yang dijelaskan di atas, bahwa <em>Stop treatment </em>atau menghentikan pengobatan bagi pasien CML belum menjadi sebuah pilihan bagi Pasien CML di Indonesia.</p>\n<p style="text-align:justify;">Tetapi tentu, sebagai bentuk kepedulian dan sebuah motivasi, wacana <em>stop treatment</em> bukanlah menjadi topik yang tabu untuk dibicarakan.</p>\n<p style="text-align:justify;">Wacana <em>stop treatment</em> perlu dibicarakan untuk tujuan untuk meningkatkan kepedulian bagi pasien untuk terus disiplin dalam melakukan pengobatan dan monitoring terhadap respon pengobatan yang dilakukan juga sebagai bentuk untuk mendorong para ahli di bidang hematolog untuk meningkatkan kapasitasnya baik dari sisi peningkatan pengetahuan juga mendorong pemerintah atau pihak-pihak yang berkaitan untuk meningkatkan sumber daya laboratorium yang dapat melakukan analisis lebih mendalam sampai level molekuler.</p>\n<p style="text-align:justify;">Dari penjelasan di atas, ELGEKA Indonesia sebagai sebuah organisasi resmi dari Komunitas pasien CML di Indonesia, memiliki tantangan yang besar ke depannya, antara lain</p>\n<ol style="text-align:justify;">\n<li>Perlunya mengedukasi pasien CML secara periodik, selain untuk pasien CML yang baru terdiagnosis juga meningkatkan pengetahuan dan memberikan informasi mengenai kemajuan pengobatan terbaru yang ada di bidang CML kepada pasien lama.</li>\n<li>Perlunya penyediaan informasi berkaitan dengan CML dan kemajuan pengobatan terbaru yang ada di Dunia Internasional dalam bahasa Indonesia, karena kebanyakan informasi mengenal CML masih dalam bentuk Bahasa Inggris.</li>\n<li>Perlu terus melakukan kampanye kepedulian akan pentingnya kedisiplinan dalam pengobatan sehari-hari bagi pasien CML</li>\n<li>Mendorong para hematolog untuk bersama-sama berjuang meningkatkan kapasitas pengetahuan di bidang CML dan pengobatannya juga mendorong agar di Indonesia dapat menyediakan fasilitas laboratorium yang memadai dan terjangkau untuk melakukan monitoring bagi pengobatan pasien CML sampai pada level molekuler sehingga kriteria yang terdapat pada Rekomendasi ELN dapat diterapkan dengan sebaik-baiknya.</li>\n<li>Perlunya advokasi kepada pemangku kebijakan dan pemerintah untuk melakukan modifikasi atau revisi formularium nasional sebagai dasar referensi pengobatan yang diacu oleh Program JKN, sehingga semua akses pengobatan bagi pasien CML mulai dari diagnosa sampai monitoring pengobatan sesuai rekomendasi yang berlaku di Dunia Internasional, menjamin ketersediaan obat sesuai kebutuhan dan rekomendasi para hematolog bagi pasien CML serta dapat menyediakan semua jenis obat TKI yang ada di Dunia Internasional, selain <em>imatinib</em> dan <em>nilotinib</em>.</li>\n</ol>\noleh Andrian Rakhmatsyah</p>', '2015-12-09 17:33:13', '2015-12-09 17:33:13', 5, 1),
(10, 'sdfgsdf', '<p>argergsdg</p>', '2015-12-10 06:55:30', '2015-12-10 06:55:30', 5, 1),
(11, 'fgsserh', '<p><img src="images/artikel/images/axe.png" alt="" /></p>', '2015-12-10 06:55:40', '2015-12-10 06:55:40', 5, 1),
(12, 'dgrhdrtjdtjtj', '<p><img src="/elgeka/public/images/artikel/images/axe.png" alt="" /></p>', '2015-12-10 07:27:50', '2015-12-10 07:27:50', 5, 1),
(13, 'Italy', '<p>Italy loooollll</p>\r\n<p><img src="/elgeka/public/images/artikel/images/w.png" alt="" /></p>', '2015-12-10 07:33:50', '2015-12-10 07:33:50', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `artikel_tag`
--

CREATE TABLE IF NOT EXISTS `artikel_tag` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `artikel_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `asuransi`
--

CREATE TABLE IF NOT EXISTS `asuransi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_asuransi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `asuransi`
--

INSERT INTO `asuransi` (`id`, `nama_asuransi`, `created_at`, `updated_at`) VALUES
(4, 'Asuransi 1', '2015-10-29 01:00:01', '2015-10-29 01:00:01'),
(5, 'Asuransi 2', '2015-10-29 01:00:10', '2015-10-29 01:00:10'),
(6, 'Asuransi 3', '2015-10-29 01:00:34', '2015-10-29 01:00:34');

-- --------------------------------------------------------

--
-- Table structure for table `asuransi_history`
--

CREATE TABLE IF NOT EXISTS `asuransi_history` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `asuransi_id` int(11) NOT NULL,
  `tgl` datetime NOT NULL,
  `login` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE IF NOT EXISTS `dokter` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_dokter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id`, `nama_dokter`, `created_at`, `updated_at`) VALUES
(1, 'Dokter 1', '2015-09-17 00:15:29', '2015-11-01 22:24:20'),
(2, 'Dokter 2', '2015-11-01 22:24:28', '2015-11-01 22:24:28'),
(3, 'Dokter 3', '2015-11-01 22:24:35', '2015-11-01 22:24:35'),
(4, 'Dokter 4', '2015-11-01 22:24:40', '2015-11-01 22:24:40');

-- --------------------------------------------------------

--
-- Table structure for table `dokter_history`
--

CREATE TABLE IF NOT EXISTS `dokter_history` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `dokter_id` int(11) NOT NULL,
  `tgl` datetime NOT NULL,
  `login` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `indikasi`
--

CREATE TABLE IF NOT EXISTS `indikasi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_indikasi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `indikasi`
--

INSERT INTO `indikasi` (`id`, `nama_indikasi`, `created_at`, `updated_at`) VALUES
(1, 'Pusing 7 keliling', '2015-09-17 00:35:04', '2015-09-17 00:35:21');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE IF NOT EXISTS `kecamatan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_kecamatan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `kotakab_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id`, `nama_kecamatan`, `created_at`, `updated_at`, `kotakab_id`) VALUES
(1, 'Kecamatan 1', '2015-10-29 01:05:11', '2015-10-29 01:05:11', 1),
(2, 'Kecamatan 2', '2015-10-29 01:05:20', '2015-10-29 01:05:20', 3),
(3, 'Kecamatan 3', '2015-10-29 01:05:31', '2015-10-29 01:05:31', 2),
(4, 'Kecamatan 4', '2015-10-29 01:05:47', '2015-10-29 01:05:47', 4),
(5, 'Kecamatan 5', '2015-10-29 01:06:01', '2015-10-29 01:06:01', 3);

-- --------------------------------------------------------

--
-- Table structure for table `kelurahan`
--

CREATE TABLE IF NOT EXISTS `kelurahan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_kelurahan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `kecamatan_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `kelurahan`
--

INSERT INTO `kelurahan` (`id`, `nama_kelurahan`, `created_at`, `updated_at`, `kecamatan_id`) VALUES
(1, 'Kelurahan 1', '2015-10-29 01:06:18', '2015-10-29 01:06:18', 1),
(2, 'Kelurahan 2', '2015-10-29 01:06:27', '2015-10-29 01:06:27', 3),
(3, 'Kelurahan 3', '2015-10-29 01:06:39', '2015-10-29 01:06:39', 5),
(4, 'Kelurahan 4', '2015-10-29 01:07:03', '2015-10-29 01:07:03', 4),
(5, 'Kelurahan 5', '2015-10-29 01:07:22', '2015-10-29 01:07:22', 2);

-- --------------------------------------------------------

--
-- Table structure for table `kotakab`
--

CREATE TABLE IF NOT EXISTS `kotakab` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_kotakab` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `provinsi_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `kotakab`
--

INSERT INTO `kotakab` (`id`, `nama_kotakab`, `created_at`, `updated_at`, `provinsi_id`) VALUES
(1, 'Kota 1', '2015-10-29 01:04:16', '2015-10-29 01:04:16', 1),
(2, 'Kota 2', '2015-10-29 01:04:24', '2015-10-29 01:04:24', 1),
(3, 'Kota 3', '2015-10-29 01:04:42', '2015-10-29 01:04:42', 2),
(4, 'Kota 4', '2015-10-29 01:04:51', '2015-10-29 01:04:51', 3);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_08_02_151429_genesis', 1),
('2015_09_03_142118_edit_kolom_jk', 1),
('2015_09_11_095634_edit_ttl', 2),
('2015_09_29_172522_damn_relasi', 3),
('2015_10_08_041504_relasi_artikel_creator', 4),
('2015_10_19_060522_revisi', 5),
('2015_10_20_064618_edit_penyakit', 6),
('2015_10_29_100124_edit_rs', 7),
('2015_11_06_054748_revisi2', 8),
('2015_11_09_065941_revisi_dokter', 9),
('2015_11_17_105502_tabel_admin', 10),
('2015_12_09_203042_artikel_noob', 11);

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE IF NOT EXISTS `obat` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_obat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id`, `nama_obat`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 'Obat 1', 1, '2015-09-16 01:18:52', '2015-11-02 01:53:15'),
(2, 'Obat 2', 412, '2015-09-16 01:19:02', '2015-11-02 01:53:21'),
(3, 'Obat 3', 1, '2015-11-02 01:53:38', '2015-11-02 01:53:38'),
(4, 'Obat 4', 2, '2015-11-02 01:53:43', '2015-11-02 01:53:43'),
(5, 'Obat 5', 6, '2015-11-02 01:53:52', '2015-11-02 01:53:52'),
(6, 'Obat 6', 2, '2015-11-05 20:57:10', '2015-11-05 20:57:10');

-- --------------------------------------------------------

--
-- Table structure for table `obat_history`
--

CREATE TABLE IF NOT EXISTS `obat_history` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `obat_id` int(11) NOT NULL,
  `tgl` datetime NOT NULL,
  `login` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `obat_user`
--

CREATE TABLE IF NOT EXISTS `obat_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `obat_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=515 ;

--
-- Dumping data for table `obat_user`
--

INSERT INTO `obat_user` (`id`, `obat_id`, `users_id`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 1, '2015-11-18 06:13:19', '2015-11-18 06:13:19'),
(2, 5, 1, 1, '2015-11-18 06:13:19', '2015-11-18 06:13:19'),
(3, 5, 1, 1, '2015-11-18 06:13:19', '2015-11-18 06:13:19'),
(4, 6, 2, 1, '2015-11-18 06:13:19', '2015-11-18 06:13:19'),
(5, 1, 2, 1, '2015-11-18 06:13:19', '2015-11-18 06:13:19'),
(6, 4, 3, 1, '2015-11-18 06:13:20', '2015-11-18 06:13:20'),
(7, 2, 3, 1, '2015-11-18 06:13:20', '2015-11-18 06:13:20'),
(8, 3, 4, 1, '2015-11-18 06:13:20', '2015-11-18 06:13:20'),
(9, 1, 5, 1, '2015-11-18 06:13:20', '2015-11-18 06:13:20'),
(10, 3, 5, 1, '2015-11-18 06:13:20', '2015-11-18 06:13:20'),
(11, 1, 6, 1, '2015-11-18 06:13:20', '2015-11-18 06:13:20'),
(12, 4, 7, 1, '2015-11-18 06:13:20', '2015-11-18 06:13:20'),
(13, 6, 8, 1, '2015-11-18 06:13:20', '2015-11-18 06:13:20'),
(14, 6, 8, 1, '2015-11-18 06:13:20', '2015-11-18 06:13:20'),
(15, 4, 9, 1, '2015-11-18 06:13:21', '2015-11-18 06:13:21'),
(16, 5, 10, 1, '2015-11-18 06:13:21', '2015-11-18 06:13:21'),
(17, 3, 10, 1, '2015-11-18 06:13:21', '2015-11-18 06:13:21'),
(18, 2, 10, 1, '2015-11-18 06:13:21', '2015-11-18 06:13:21'),
(19, 4, 10, 1, '2015-11-18 06:13:21', '2015-11-18 06:13:21'),
(20, 4, 10, 1, '2015-11-18 06:13:21', '2015-11-18 06:13:21'),
(21, 1, 11, 1, '2015-11-18 06:13:21', '2015-11-18 06:13:21'),
(22, 3, 12, 1, '2015-11-18 06:13:21', '2015-11-18 06:13:21'),
(23, 6, 12, 1, '2015-11-18 06:13:21', '2015-11-18 06:13:21'),
(24, 3, 12, 1, '2015-11-18 06:13:21', '2015-11-18 06:13:21'),
(25, 4, 12, 1, '2015-11-18 06:13:21', '2015-11-18 06:13:21'),
(26, 6, 13, 1, '2015-11-18 06:13:21', '2015-11-18 06:13:21'),
(27, 5, 13, 1, '2015-11-18 06:13:21', '2015-11-18 06:13:21'),
(28, 1, 13, 1, '2015-11-18 06:13:21', '2015-11-18 06:13:21'),
(29, 6, 14, 1, '2015-11-18 06:13:22', '2015-11-18 06:13:22'),
(30, 6, 15, 1, '2015-11-18 06:13:22', '2015-11-18 06:13:22'),
(31, 3, 15, 1, '2015-11-18 06:13:22', '2015-11-18 06:13:22'),
(32, 4, 16, 1, '2015-11-18 06:13:22', '2015-11-18 06:13:22'),
(33, 1, 16, 1, '2015-11-18 06:13:22', '2015-11-18 06:13:22'),
(34, 4, 16, 1, '2015-11-18 06:13:22', '2015-11-18 06:13:22'),
(35, 1, 16, 1, '2015-11-18 06:13:22', '2015-11-18 06:13:22'),
(36, 4, 17, 1, '2015-11-18 06:13:22', '2015-11-18 06:13:22'),
(37, 2, 17, 1, '2015-11-18 06:13:22', '2015-11-18 06:13:22'),
(38, 1, 18, 1, '2015-11-18 06:13:22', '2015-11-18 06:13:22'),
(39, 5, 18, 1, '2015-11-18 06:13:22', '2015-11-18 06:13:22'),
(40, 6, 18, 1, '2015-11-18 06:13:22', '2015-11-18 06:13:22'),
(41, 1, 18, 1, '2015-11-18 06:13:22', '2015-11-18 06:13:22'),
(42, 3, 19, 1, '2015-11-18 06:13:23', '2015-11-18 06:13:23'),
(43, 5, 19, 1, '2015-11-18 06:13:23', '2015-11-18 06:13:23'),
(44, 5, 19, 1, '2015-11-18 06:13:23', '2015-11-18 06:13:23'),
(45, 6, 19, 1, '2015-11-18 06:13:23', '2015-11-18 06:13:23'),
(46, 5, 19, 1, '2015-11-18 06:13:23', '2015-11-18 06:13:23'),
(47, 6, 20, 1, '2015-11-18 06:13:23', '2015-11-18 06:13:23'),
(48, 6, 21, 1, '2015-11-18 06:13:23', '2015-11-18 06:13:23'),
(49, 1, 21, 1, '2015-11-18 06:13:23', '2015-11-18 06:13:23'),
(50, 3, 21, 1, '2015-11-18 06:13:23', '2015-11-18 06:13:23'),
(51, 4, 21, 1, '2015-11-18 06:13:23', '2015-11-18 06:13:23'),
(52, 4, 22, 1, '2015-11-18 06:13:23', '2015-11-18 06:13:23'),
(53, 4, 22, 1, '2015-11-18 06:13:23', '2015-11-18 06:13:23'),
(54, 6, 22, 1, '2015-11-18 06:13:23', '2015-11-18 06:13:23'),
(55, 2, 23, 1, '2015-11-18 06:13:23', '2015-11-18 06:13:23'),
(56, 2, 23, 1, '2015-11-18 06:13:23', '2015-11-18 06:13:23'),
(57, 6, 24, 1, '2015-11-18 06:13:24', '2015-11-18 06:13:24'),
(58, 4, 24, 1, '2015-11-18 06:13:24', '2015-11-18 06:13:24'),
(59, 5, 25, 1, '2015-11-18 06:13:24', '2015-11-18 06:13:24'),
(60, 4, 25, 1, '2015-11-18 06:13:24', '2015-11-18 06:13:24'),
(61, 2, 26, 1, '2015-11-18 06:13:24', '2015-11-18 06:13:24'),
(62, 1, 26, 1, '2015-11-18 06:13:24', '2015-11-18 06:13:24'),
(63, 3, 27, 1, '2015-11-18 06:13:24', '2015-11-18 06:13:24'),
(64, 6, 27, 1, '2015-11-18 06:13:24', '2015-11-18 06:13:24'),
(65, 6, 27, 1, '2015-11-18 06:13:24', '2015-11-18 06:13:24'),
(66, 4, 28, 1, '2015-11-18 06:13:24', '2015-11-18 06:13:24'),
(67, 1, 28, 1, '2015-11-18 06:13:24', '2015-11-18 06:13:24'),
(68, 5, 28, 1, '2015-11-18 06:13:24', '2015-11-18 06:13:24'),
(69, 3, 29, 1, '2015-11-18 06:13:25', '2015-11-18 06:13:25'),
(70, 1, 29, 1, '2015-11-18 06:13:25', '2015-11-18 06:13:25'),
(71, 2, 29, 1, '2015-11-18 06:13:25', '2015-11-18 06:13:25'),
(72, 4, 29, 1, '2015-11-18 06:13:25', '2015-11-18 06:13:25'),
(73, 4, 30, 1, '2015-11-18 06:13:25', '2015-11-18 06:13:25'),
(74, 6, 30, 1, '2015-11-18 06:13:25', '2015-11-18 06:13:25'),
(75, 3, 31, 1, '2015-11-18 06:13:25', '2015-11-18 06:13:25'),
(76, 2, 31, 1, '2015-11-18 06:13:25', '2015-11-18 06:13:25'),
(77, 3, 31, 1, '2015-11-18 06:13:25', '2015-11-18 06:13:25'),
(78, 4, 32, 1, '2015-11-18 06:13:25', '2015-11-18 06:13:25'),
(79, 1, 33, 1, '2015-11-18 06:13:25', '2015-11-18 06:13:25'),
(80, 3, 33, 1, '2015-11-18 06:13:26', '2015-11-18 06:13:26'),
(81, 1, 33, 1, '2015-11-18 06:13:26', '2015-11-18 06:13:26'),
(82, 3, 34, 1, '2015-11-18 06:13:26', '2015-11-18 06:13:26'),
(83, 2, 34, 1, '2015-11-18 06:13:26', '2015-11-18 06:13:26'),
(84, 5, 34, 1, '2015-11-18 06:13:26', '2015-11-18 06:13:26'),
(85, 5, 35, 1, '2015-11-18 06:13:26', '2015-11-18 06:13:26'),
(86, 6, 35, 1, '2015-11-18 06:13:26', '2015-11-18 06:13:26'),
(87, 2, 36, 1, '2015-11-18 06:13:26', '2015-11-18 06:13:26'),
(88, 4, 36, 1, '2015-11-18 06:13:26', '2015-11-18 06:13:26'),
(89, 5, 37, 1, '2015-11-18 06:13:26', '2015-11-18 06:13:26'),
(90, 5, 38, 1, '2015-11-18 06:13:26', '2015-11-18 06:13:26'),
(91, 2, 38, 1, '2015-11-18 06:13:26', '2015-11-18 06:13:26'),
(92, 6, 38, 1, '2015-11-18 06:13:26', '2015-11-18 06:13:26'),
(93, 5, 39, 1, '2015-11-18 06:13:27', '2015-11-18 06:13:27'),
(94, 5, 39, 1, '2015-11-18 06:13:27', '2015-11-18 06:13:27'),
(95, 4, 39, 1, '2015-11-18 06:13:27', '2015-11-18 06:13:27'),
(96, 4, 40, 1, '2015-11-18 06:13:27', '2015-11-18 06:13:27'),
(97, 5, 40, 1, '2015-11-18 06:13:27', '2015-11-18 06:13:27'),
(98, 6, 40, 1, '2015-11-18 06:13:27', '2015-11-18 06:13:27'),
(99, 6, 41, 1, '2015-11-18 06:13:27', '2015-11-18 06:13:27'),
(100, 3, 41, 1, '2015-11-18 06:13:27', '2015-11-18 06:13:27'),
(101, 3, 41, 1, '2015-11-18 06:13:27', '2015-11-18 06:13:27'),
(102, 3, 42, 1, '2015-11-18 06:13:27', '2015-11-18 06:13:27'),
(103, 4, 42, 1, '2015-11-18 06:13:27', '2015-11-18 06:13:27'),
(104, 6, 42, 1, '2015-11-18 06:13:27', '2015-11-18 06:13:27'),
(105, 6, 42, 1, '2015-11-18 06:13:27', '2015-11-18 06:13:27'),
(106, 5, 43, 1, '2015-11-18 06:13:27', '2015-11-18 06:13:27'),
(107, 4, 43, 1, '2015-11-18 06:13:27', '2015-11-18 06:13:27'),
(108, 4, 44, 1, '2015-11-18 06:13:28', '2015-11-18 06:13:28'),
(109, 1, 44, 1, '2015-11-18 06:13:28', '2015-11-18 06:13:28'),
(110, 1, 45, 1, '2015-11-18 06:13:28', '2015-11-18 06:13:28'),
(111, 4, 45, 1, '2015-11-18 06:13:28', '2015-11-18 06:13:28'),
(112, 1, 45, 1, '2015-11-18 06:13:28', '2015-11-18 06:13:28'),
(113, 3, 45, 1, '2015-11-18 06:13:28', '2015-11-18 06:13:28'),
(114, 2, 46, 1, '2015-11-18 06:13:28', '2015-11-18 06:13:28'),
(115, 2, 46, 1, '2015-11-18 06:13:28', '2015-11-18 06:13:28'),
(116, 6, 46, 1, '2015-11-18 06:13:28', '2015-11-18 06:13:28'),
(117, 6, 47, 1, '2015-11-18 06:13:28', '2015-11-18 06:13:28'),
(118, 5, 47, 1, '2015-11-18 06:13:28', '2015-11-18 06:13:28'),
(119, 3, 47, 1, '2015-11-18 06:13:28', '2015-11-18 06:13:28'),
(120, 2, 47, 1, '2015-11-18 06:13:28', '2015-11-18 06:13:28'),
(121, 6, 48, 1, '2015-11-18 06:13:28', '2015-11-18 06:13:28'),
(122, 1, 49, 1, '2015-11-18 06:13:28', '2015-11-18 06:13:28'),
(123, 4, 50, 1, '2015-11-18 06:13:29', '2015-11-18 06:13:29'),
(124, 3, 51, 1, '2015-11-18 06:13:29', '2015-11-18 06:13:29'),
(125, 4, 51, 1, '2015-11-18 06:13:29', '2015-11-18 06:13:29'),
(126, 1, 52, 1, '2015-11-18 06:13:29', '2015-11-18 06:13:29'),
(127, 1, 53, 1, '2015-11-18 06:13:29', '2015-11-18 06:13:29'),
(128, 1, 53, 1, '2015-11-18 06:13:29', '2015-11-18 06:13:29'),
(129, 2, 53, 1, '2015-11-18 06:13:29', '2015-11-18 06:13:29'),
(130, 5, 54, 1, '2015-11-18 06:13:29', '2015-11-18 06:13:29'),
(131, 3, 54, 1, '2015-11-18 06:13:29', '2015-11-18 06:13:29'),
(132, 4, 54, 1, '2015-11-18 06:13:29', '2015-11-18 06:13:29'),
(133, 2, 55, 1, '2015-11-18 06:13:30', '2015-11-18 06:13:30'),
(134, 4, 56, 1, '2015-11-18 06:13:30', '2015-11-18 06:13:30'),
(135, 6, 56, 1, '2015-11-18 06:13:30', '2015-11-18 06:13:30'),
(136, 3, 56, 1, '2015-11-18 06:13:30', '2015-11-18 06:13:30'),
(137, 6, 57, 1, '2015-11-18 06:13:30', '2015-11-18 06:13:30'),
(138, 6, 57, 1, '2015-11-18 06:13:30', '2015-11-18 06:13:30'),
(139, 5, 57, 1, '2015-11-18 06:13:30', '2015-11-18 06:13:30'),
(140, 3, 57, 1, '2015-11-18 06:13:30', '2015-11-18 06:13:30'),
(141, 1, 58, 1, '2015-11-18 06:13:30', '2015-11-18 06:13:30'),
(142, 2, 59, 1, '2015-11-18 06:13:30', '2015-11-18 06:13:30'),
(143, 2, 59, 1, '2015-11-18 06:13:30', '2015-11-18 06:13:30'),
(144, 2, 59, 1, '2015-11-18 06:13:30', '2015-11-18 06:13:30'),
(145, 3, 60, 1, '2015-11-18 06:13:31', '2015-11-18 06:13:31'),
(146, 5, 61, 1, '2015-11-18 06:13:31', '2015-11-18 06:13:31'),
(147, 1, 61, 1, '2015-11-18 06:13:31', '2015-11-18 06:13:31'),
(148, 6, 61, 1, '2015-11-18 06:13:31', '2015-11-18 06:13:31'),
(149, 6, 62, 1, '2015-11-18 06:13:31', '2015-11-18 06:13:31'),
(150, 5, 62, 1, '2015-11-18 06:13:31', '2015-11-18 06:13:31'),
(151, 6, 62, 1, '2015-11-18 06:13:31', '2015-11-18 06:13:31'),
(152, 3, 63, 1, '2015-11-18 06:13:31', '2015-11-18 06:13:31'),
(153, 5, 63, 1, '2015-11-18 06:13:31', '2015-11-18 06:13:31'),
(154, 4, 64, 1, '2015-11-18 06:13:31', '2015-11-18 06:13:31'),
(155, 1, 64, 1, '2015-11-18 06:13:31', '2015-11-18 06:13:31'),
(156, 2, 64, 1, '2015-11-18 06:13:31', '2015-11-18 06:13:31'),
(157, 6, 65, 1, '2015-11-18 06:13:32', '2015-11-18 06:13:32'),
(158, 3, 66, 1, '2015-11-18 06:13:32', '2015-11-18 06:13:32'),
(159, 2, 66, 1, '2015-11-18 06:13:32', '2015-11-18 06:13:32'),
(160, 5, 66, 1, '2015-11-18 06:13:32', '2015-11-18 06:13:32'),
(161, 3, 67, 1, '2015-11-18 06:13:32', '2015-11-18 06:13:32'),
(162, 1, 67, 1, '2015-11-18 06:13:32', '2015-11-18 06:13:32'),
(163, 1, 68, 1, '2015-11-18 06:13:32', '2015-11-18 06:13:32'),
(164, 6, 69, 1, '2015-11-18 06:13:32', '2015-11-18 06:13:32'),
(165, 5, 69, 1, '2015-11-18 06:13:32', '2015-11-18 06:13:32'),
(166, 2, 70, 1, '2015-11-18 06:13:32', '2015-11-18 06:13:32'),
(167, 4, 70, 1, '2015-11-18 06:13:32', '2015-11-18 06:13:32'),
(168, 6, 70, 1, '2015-11-18 06:13:32', '2015-11-18 06:13:32'),
(169, 6, 70, 1, '2015-11-18 06:13:32', '2015-11-18 06:13:32'),
(170, 5, 70, 1, '2015-11-18 06:13:32', '2015-11-18 06:13:32'),
(171, 1, 71, 1, '2015-11-18 06:13:33', '2015-11-18 06:13:33'),
(172, 6, 71, 1, '2015-11-18 06:13:33', '2015-11-18 06:13:33'),
(173, 5, 71, 1, '2015-11-18 06:13:33', '2015-11-18 06:13:33'),
(174, 2, 72, 1, '2015-11-18 06:13:33', '2015-11-18 06:13:33'),
(175, 5, 73, 1, '2015-11-18 06:13:33', '2015-11-18 06:13:33'),
(176, 2, 74, 1, '2015-11-18 06:13:33', '2015-11-18 06:13:33'),
(177, 3, 74, 1, '2015-11-18 06:13:33', '2015-11-18 06:13:33'),
(178, 4, 74, 1, '2015-11-18 06:13:33', '2015-11-18 06:13:33'),
(179, 1, 74, 1, '2015-11-18 06:13:33', '2015-11-18 06:13:33'),
(180, 5, 75, 1, '2015-11-18 06:13:33', '2015-11-18 06:13:33'),
(181, 1, 75, 1, '2015-11-18 06:13:33', '2015-11-18 06:13:33'),
(182, 5, 76, 1, '2015-11-18 06:13:33', '2015-11-18 06:13:33'),
(183, 3, 76, 1, '2015-11-18 06:13:33', '2015-11-18 06:13:33'),
(184, 5, 77, 1, '2015-11-18 06:13:34', '2015-11-18 06:13:34'),
(185, 1, 77, 1, '2015-11-18 06:13:34', '2015-11-18 06:13:34'),
(186, 4, 77, 1, '2015-11-18 06:13:34', '2015-11-18 06:13:34'),
(187, 3, 78, 1, '2015-11-18 06:13:34', '2015-11-18 06:13:34'),
(188, 5, 78, 1, '2015-11-18 06:13:34', '2015-11-18 06:13:34'),
(189, 2, 79, 1, '2015-11-18 06:13:34', '2015-11-18 06:13:34'),
(190, 4, 79, 1, '2015-11-18 06:13:34', '2015-11-18 06:13:34'),
(191, 4, 80, 1, '2015-11-18 06:13:34', '2015-11-18 06:13:34'),
(192, 5, 80, 1, '2015-11-18 06:13:34', '2015-11-18 06:13:34'),
(193, 3, 80, 1, '2015-11-18 06:13:34', '2015-11-18 06:13:34'),
(194, 3, 80, 1, '2015-11-18 06:13:34', '2015-11-18 06:13:34'),
(195, 6, 81, 1, '2015-11-18 06:13:34', '2015-11-18 06:13:34'),
(196, 2, 81, 1, '2015-11-18 06:13:34', '2015-11-18 06:13:34'),
(197, 2, 81, 1, '2015-11-18 06:13:34', '2015-11-18 06:13:34'),
(198, 6, 82, 1, '2015-11-18 06:13:35', '2015-11-18 06:13:35'),
(199, 1, 83, 1, '2015-11-18 06:13:35', '2015-11-18 06:13:35'),
(200, 1, 83, 1, '2015-11-18 06:13:35', '2015-11-18 06:13:35'),
(201, 5, 83, 1, '2015-11-18 06:13:35', '2015-11-18 06:13:35'),
(202, 3, 83, 1, '2015-11-18 06:13:35', '2015-11-18 06:13:35'),
(203, 6, 84, 1, '2015-11-18 06:13:35', '2015-11-18 06:13:35'),
(204, 3, 84, 1, '2015-11-18 06:13:35', '2015-11-18 06:13:35'),
(205, 5, 85, 1, '2015-11-18 06:13:35', '2015-11-18 06:13:35'),
(206, 1, 85, 1, '2015-11-18 06:13:35', '2015-11-18 06:13:35'),
(207, 1, 85, 1, '2015-11-18 06:13:35', '2015-11-18 06:13:35'),
(208, 6, 85, 1, '2015-11-18 06:13:35', '2015-11-18 06:13:35'),
(209, 5, 85, 1, '2015-11-18 06:13:35', '2015-11-18 06:13:35'),
(210, 5, 86, 1, '2015-11-18 06:13:35', '2015-11-18 06:13:35'),
(211, 5, 87, 1, '2015-11-18 06:13:35', '2015-11-18 06:13:35'),
(212, 6, 87, 1, '2015-11-18 06:13:35', '2015-11-18 06:13:35'),
(213, 4, 87, 1, '2015-11-18 06:13:35', '2015-11-18 06:13:35'),
(214, 4, 87, 1, '2015-11-18 06:13:35', '2015-11-18 06:13:35'),
(215, 5, 87, 1, '2015-11-18 06:13:35', '2015-11-18 06:13:35'),
(216, 1, 88, 1, '2015-11-18 06:13:36', '2015-11-18 06:13:36'),
(217, 5, 88, 1, '2015-11-18 06:13:36', '2015-11-18 06:13:36'),
(218, 5, 88, 1, '2015-11-18 06:13:36', '2015-11-18 06:13:36'),
(219, 2, 88, 1, '2015-11-18 06:13:36', '2015-11-18 06:13:36'),
(220, 1, 89, 1, '2015-11-18 06:13:36', '2015-11-18 06:13:36'),
(221, 3, 90, 1, '2015-11-18 06:13:36', '2015-11-18 06:13:36'),
(222, 6, 90, 1, '2015-11-18 06:13:36', '2015-11-18 06:13:36'),
(223, 3, 90, 1, '2015-11-18 06:13:36', '2015-11-18 06:13:36'),
(224, 2, 90, 1, '2015-11-18 06:13:36', '2015-11-18 06:13:36'),
(225, 4, 91, 1, '2015-11-18 06:13:36', '2015-11-18 06:13:36'),
(226, 4, 91, 1, '2015-11-18 06:13:36', '2015-11-18 06:13:36'),
(227, 6, 92, 1, '2015-11-18 06:13:36', '2015-11-18 06:13:36'),
(228, 2, 92, 1, '2015-11-18 06:13:36', '2015-11-18 06:13:36'),
(229, 6, 93, 1, '2015-11-18 06:13:37', '2015-11-18 06:13:37'),
(230, 3, 93, 1, '2015-11-18 06:13:37', '2015-11-18 06:13:37'),
(231, 5, 93, 1, '2015-11-18 06:13:37', '2015-11-18 06:13:37'),
(232, 4, 94, 1, '2015-11-18 06:13:37', '2015-11-18 06:13:37'),
(233, 6, 94, 1, '2015-11-18 06:13:37', '2015-11-18 06:13:37'),
(234, 5, 94, 1, '2015-11-18 06:13:37', '2015-11-18 06:13:37'),
(235, 5, 94, 1, '2015-11-18 06:13:37', '2015-11-18 06:13:37'),
(236, 1, 95, 1, '2015-11-18 06:13:37', '2015-11-18 06:13:37'),
(237, 5, 95, 1, '2015-11-18 06:13:37', '2015-11-18 06:13:37'),
(238, 2, 96, 1, '2015-11-18 06:13:37', '2015-11-18 06:13:37'),
(239, 4, 97, 1, '2015-11-18 06:13:37', '2015-11-18 06:13:37'),
(240, 3, 97, 1, '2015-11-18 06:13:37', '2015-11-18 06:13:37'),
(241, 5, 97, 1, '2015-11-18 06:13:37', '2015-11-18 06:13:37'),
(242, 5, 97, 1, '2015-11-18 06:13:37', '2015-11-18 06:13:37'),
(243, 3, 97, 1, '2015-11-18 06:13:37', '2015-11-18 06:13:37'),
(244, 5, 98, 1, '2015-11-18 06:13:38', '2015-11-18 06:13:38'),
(245, 2, 98, 1, '2015-11-18 06:13:38', '2015-11-18 06:13:38'),
(246, 5, 98, 1, '2015-11-18 06:13:38', '2015-11-18 06:13:38'),
(247, 2, 99, 1, '2015-11-18 06:13:38', '2015-11-18 06:13:38'),
(248, 1, 99, 1, '2015-11-18 06:13:38', '2015-11-18 06:13:38'),
(249, 4, 99, 1, '2015-11-18 06:13:38', '2015-11-18 06:13:38'),
(250, 1, 99, 1, '2015-11-18 06:13:38', '2015-11-18 06:13:38'),
(251, 3, 100, 1, '2015-11-18 06:13:38', '2015-11-18 06:13:38'),
(252, 3, 101, 1, '2015-11-18 06:13:38', '2015-11-18 06:13:38'),
(253, 2, 101, 1, '2015-11-18 06:13:38', '2015-11-18 06:13:38'),
(254, 5, 101, 1, '2015-11-18 06:13:38', '2015-11-18 06:13:38'),
(255, 1, 102, 1, '2015-11-18 06:13:38', '2015-11-18 06:13:38'),
(256, 2, 102, 1, '2015-11-18 06:13:38', '2015-11-18 06:13:38'),
(257, 4, 102, 1, '2015-11-18 06:13:39', '2015-11-18 06:13:39'),
(258, 6, 103, 1, '2015-11-18 06:13:39', '2015-11-18 06:13:39'),
(259, 5, 103, 1, '2015-11-18 06:13:39', '2015-11-18 06:13:39'),
(260, 3, 103, 1, '2015-11-18 06:13:39', '2015-11-18 06:13:39'),
(261, 6, 104, 1, '2015-11-18 06:13:39', '2015-11-18 06:13:39'),
(262, 1, 104, 1, '2015-11-18 06:13:39', '2015-11-18 06:13:39'),
(263, 3, 104, 1, '2015-11-18 06:13:39', '2015-11-18 06:13:39'),
(264, 2, 105, 1, '2015-11-18 06:13:39', '2015-11-18 06:13:39'),
(265, 2, 106, 1, '2015-11-18 06:13:39', '2015-11-18 06:13:39'),
(266, 4, 106, 1, '2015-11-18 06:13:39', '2015-11-18 06:13:39'),
(267, 3, 106, 1, '2015-11-18 06:13:39', '2015-11-18 06:13:39'),
(268, 2, 106, 1, '2015-11-18 06:13:39', '2015-11-18 06:13:39'),
(269, 6, 106, 1, '2015-11-18 06:13:39', '2015-11-18 06:13:39'),
(270, 1, 107, 1, '2015-11-18 06:13:39', '2015-11-18 06:13:39'),
(271, 2, 107, 1, '2015-11-18 06:13:39', '2015-11-18 06:13:39'),
(272, 6, 107, 1, '2015-11-18 06:13:39', '2015-11-18 06:13:39'),
(273, 1, 107, 1, '2015-11-18 06:13:39', '2015-11-18 06:13:39'),
(274, 6, 108, 1, '2015-11-18 06:13:40', '2015-11-18 06:13:40'),
(275, 1, 108, 1, '2015-11-18 06:13:40', '2015-11-18 06:13:40'),
(276, 6, 108, 1, '2015-11-18 06:13:40', '2015-11-18 06:13:40'),
(277, 4, 108, 1, '2015-11-18 06:13:40', '2015-11-18 06:13:40'),
(278, 4, 109, 1, '2015-11-18 06:13:40', '2015-11-18 06:13:40'),
(279, 3, 109, 1, '2015-11-18 06:13:40', '2015-11-18 06:13:40'),
(280, 3, 109, 1, '2015-11-18 06:13:40', '2015-11-18 06:13:40'),
(281, 6, 110, 1, '2015-11-18 06:13:40', '2015-11-18 06:13:40'),
(282, 2, 110, 1, '2015-11-18 06:13:40', '2015-11-18 06:13:40'),
(283, 3, 111, 1, '2015-11-18 06:13:40', '2015-11-18 06:13:40'),
(284, 2, 111, 1, '2015-11-18 06:13:40', '2015-11-18 06:13:40'),
(285, 3, 111, 1, '2015-11-18 06:13:40', '2015-11-18 06:13:40'),
(286, 5, 111, 1, '2015-11-18 06:13:40', '2015-11-18 06:13:40'),
(287, 2, 111, 1, '2015-11-18 06:13:40', '2015-11-18 06:13:40'),
(288, 1, 112, 1, '2015-11-18 06:13:40', '2015-11-18 06:13:40'),
(289, 3, 112, 1, '2015-11-18 06:13:40', '2015-11-18 06:13:40'),
(290, 5, 112, 1, '2015-11-18 06:13:40', '2015-11-18 06:13:40'),
(291, 4, 112, 1, '2015-11-18 06:13:41', '2015-11-18 06:13:41'),
(292, 3, 113, 1, '2015-11-18 06:13:41', '2015-11-18 06:13:41'),
(293, 6, 113, 1, '2015-11-18 06:13:41', '2015-11-18 06:13:41'),
(294, 1, 113, 1, '2015-11-18 06:13:41', '2015-11-18 06:13:41'),
(295, 4, 113, 1, '2015-11-18 06:13:41', '2015-11-18 06:13:41'),
(296, 4, 113, 1, '2015-11-18 06:13:41', '2015-11-18 06:13:41'),
(297, 2, 114, 1, '2015-11-18 06:13:41', '2015-11-18 06:13:41'),
(298, 1, 114, 1, '2015-11-18 06:13:41', '2015-11-18 06:13:41'),
(299, 2, 114, 1, '2015-11-18 06:13:41', '2015-11-18 06:13:41'),
(300, 2, 114, 1, '2015-11-18 06:13:41', '2015-11-18 06:13:41'),
(301, 1, 115, 1, '2015-11-18 06:13:41', '2015-11-18 06:13:41'),
(302, 1, 115, 1, '2015-11-18 06:13:41', '2015-11-18 06:13:41'),
(303, 4, 116, 1, '2015-11-18 06:13:41', '2015-11-18 06:13:41'),
(304, 1, 116, 1, '2015-11-18 06:13:41', '2015-11-18 06:13:41'),
(305, 6, 116, 1, '2015-11-18 06:13:41', '2015-11-18 06:13:41'),
(306, 5, 117, 1, '2015-11-18 06:13:41', '2015-11-18 06:13:41'),
(307, 5, 117, 1, '2015-11-18 06:13:41', '2015-11-18 06:13:41'),
(308, 3, 118, 1, '2015-11-18 06:13:42', '2015-11-18 06:13:42'),
(309, 2, 118, 1, '2015-11-18 06:13:42', '2015-11-18 06:13:42'),
(310, 6, 118, 1, '2015-11-18 06:13:42', '2015-11-18 06:13:42'),
(311, 3, 118, 1, '2015-11-18 06:13:42', '2015-11-18 06:13:42'),
(312, 4, 119, 1, '2015-11-18 06:13:42', '2015-11-18 06:13:42'),
(313, 3, 120, 1, '2015-11-18 06:13:42', '2015-11-18 06:13:42'),
(314, 5, 120, 1, '2015-11-18 06:13:42', '2015-11-18 06:13:42'),
(315, 4, 121, 1, '2015-11-18 06:13:42', '2015-11-18 06:13:42'),
(316, 1, 121, 1, '2015-11-18 06:13:42', '2015-11-18 06:13:42'),
(317, 2, 121, 1, '2015-11-18 06:13:42', '2015-11-18 06:13:42'),
(318, 1, 122, 1, '2015-11-18 06:13:42', '2015-11-18 06:13:42'),
(319, 5, 122, 1, '2015-11-18 06:13:42', '2015-11-18 06:13:42'),
(320, 2, 122, 1, '2015-11-18 06:13:42', '2015-11-18 06:13:42'),
(321, 6, 122, 1, '2015-11-18 06:13:42', '2015-11-18 06:13:42'),
(322, 1, 122, 1, '2015-11-18 06:13:42', '2015-11-18 06:13:42'),
(323, 6, 123, 1, '2015-11-18 06:13:43', '2015-11-18 06:13:43'),
(324, 4, 124, 1, '2015-11-18 06:13:43', '2015-11-18 06:13:43'),
(325, 3, 124, 1, '2015-11-18 06:13:43', '2015-11-18 06:13:43'),
(326, 2, 124, 1, '2015-11-18 06:13:43', '2015-11-18 06:13:43'),
(327, 3, 125, 1, '2015-11-18 06:13:43', '2015-11-18 06:13:43'),
(328, 1, 126, 1, '2015-11-18 06:13:43', '2015-11-18 06:13:43'),
(329, 4, 126, 1, '2015-11-18 06:13:43', '2015-11-18 06:13:43'),
(330, 5, 127, 1, '2015-11-18 06:13:43', '2015-11-18 06:13:43'),
(331, 1, 127, 1, '2015-11-18 06:13:43', '2015-11-18 06:13:43'),
(332, 4, 128, 1, '2015-11-18 06:13:43', '2015-11-18 06:13:43'),
(333, 4, 128, 1, '2015-11-18 06:13:44', '2015-11-18 06:13:44'),
(334, 5, 128, 1, '2015-11-18 06:13:44', '2015-11-18 06:13:44'),
(335, 6, 129, 1, '2015-11-18 06:13:44', '2015-11-18 06:13:44'),
(336, 5, 130, 1, '2015-11-18 06:13:44', '2015-11-18 06:13:44'),
(337, 4, 130, 1, '2015-11-18 06:13:44', '2015-11-18 06:13:44'),
(338, 2, 130, 1, '2015-11-18 06:13:44', '2015-11-18 06:13:44'),
(339, 2, 131, 1, '2015-11-18 06:13:44', '2015-11-18 06:13:44'),
(340, 3, 131, 1, '2015-11-18 06:13:44', '2015-11-18 06:13:44'),
(341, 6, 132, 1, '2015-11-18 06:13:44', '2015-11-18 06:13:44'),
(342, 2, 132, 1, '2015-11-18 06:13:44', '2015-11-18 06:13:44'),
(343, 4, 132, 1, '2015-11-18 06:13:44', '2015-11-18 06:13:44'),
(344, 4, 133, 1, '2015-11-18 06:13:44', '2015-11-18 06:13:44'),
(345, 5, 133, 1, '2015-11-18 06:13:44', '2015-11-18 06:13:44'),
(346, 5, 133, 1, '2015-11-18 06:13:44', '2015-11-18 06:13:44'),
(347, 3, 134, 1, '2015-11-18 06:13:45', '2015-11-18 06:13:45'),
(348, 5, 134, 1, '2015-11-18 06:13:45', '2015-11-18 06:13:45'),
(349, 2, 134, 1, '2015-11-18 06:13:45', '2015-11-18 06:13:45'),
(350, 6, 135, 1, '2015-11-18 06:13:45', '2015-11-18 06:13:45'),
(351, 2, 135, 1, '2015-11-18 06:13:45', '2015-11-18 06:13:45'),
(352, 6, 135, 1, '2015-11-18 06:13:45', '2015-11-18 06:13:45'),
(353, 1, 136, 1, '2015-11-18 06:13:45', '2015-11-18 06:13:45'),
(354, 5, 136, 1, '2015-11-18 06:13:45', '2015-11-18 06:13:45'),
(355, 1, 137, 1, '2015-11-18 06:13:45', '2015-11-18 06:13:45'),
(356, 4, 137, 1, '2015-11-18 06:13:45', '2015-11-18 06:13:45'),
(357, 3, 138, 1, '2015-11-18 06:13:45', '2015-11-18 06:13:45'),
(358, 2, 138, 1, '2015-11-18 06:13:45', '2015-11-18 06:13:45'),
(359, 5, 139, 1, '2015-11-18 06:13:45', '2015-11-18 06:13:45'),
(360, 1, 139, 1, '2015-11-18 06:13:45', '2015-11-18 06:13:45'),
(361, 2, 140, 1, '2015-11-18 06:13:46', '2015-11-18 06:13:46'),
(362, 1, 140, 1, '2015-11-18 06:13:46', '2015-11-18 06:13:46'),
(363, 4, 140, 1, '2015-11-18 06:13:46', '2015-11-18 06:13:46'),
(364, 3, 141, 1, '2015-11-18 06:13:46', '2015-11-18 06:13:46'),
(365, 3, 141, 1, '2015-11-18 06:13:46', '2015-11-18 06:13:46'),
(366, 1, 142, 1, '2015-11-18 06:13:46', '2015-11-18 06:13:46'),
(367, 5, 142, 1, '2015-11-18 06:13:46', '2015-11-18 06:13:46'),
(368, 2, 142, 1, '2015-11-18 06:13:46', '2015-11-18 06:13:46'),
(369, 2, 142, 1, '2015-11-18 06:13:46', '2015-11-18 06:13:46'),
(370, 2, 143, 1, '2015-11-18 06:13:46', '2015-11-18 06:13:46'),
(371, 2, 143, 1, '2015-11-18 06:13:46', '2015-11-18 06:13:46'),
(372, 3, 143, 1, '2015-11-18 06:13:46', '2015-11-18 06:13:46'),
(373, 2, 143, 1, '2015-11-18 06:13:46', '2015-11-18 06:13:46'),
(374, 6, 144, 1, '2015-11-18 06:13:46', '2015-11-18 06:13:46'),
(375, 1, 144, 1, '2015-11-18 06:13:47', '2015-11-18 06:13:47'),
(376, 6, 144, 1, '2015-11-18 06:13:47', '2015-11-18 06:13:47'),
(377, 6, 145, 1, '2015-11-18 06:13:47', '2015-11-18 06:13:47'),
(378, 3, 145, 1, '2015-11-18 06:13:47', '2015-11-18 06:13:47'),
(379, 4, 145, 1, '2015-11-18 06:13:47', '2015-11-18 06:13:47'),
(380, 6, 145, 1, '2015-11-18 06:13:47', '2015-11-18 06:13:47'),
(381, 5, 146, 1, '2015-11-18 06:13:47', '2015-11-18 06:13:47'),
(382, 5, 146, 1, '2015-11-18 06:13:47', '2015-11-18 06:13:47'),
(383, 2, 146, 1, '2015-11-18 06:13:47', '2015-11-18 06:13:47'),
(384, 2, 146, 1, '2015-11-18 06:13:47', '2015-11-18 06:13:47'),
(385, 2, 147, 1, '2015-11-18 06:13:47', '2015-11-18 06:13:47'),
(386, 3, 147, 1, '2015-11-18 06:13:47', '2015-11-18 06:13:47'),
(387, 1, 148, 1, '2015-11-18 06:13:47', '2015-11-18 06:13:47'),
(388, 1, 149, 1, '2015-11-18 06:13:48', '2015-11-18 06:13:48'),
(389, 1, 149, 1, '2015-11-18 06:13:48', '2015-11-18 06:13:48'),
(390, 3, 150, 1, '2015-11-18 06:13:48', '2015-11-18 06:13:48'),
(391, 3, 150, 1, '2015-11-18 06:13:48', '2015-11-18 06:13:48'),
(392, 4, 150, 1, '2015-11-18 06:13:48', '2015-11-18 06:13:48'),
(393, 4, 151, 1, '2015-11-18 06:13:48', '2015-11-18 06:13:48'),
(394, 2, 152, 1, '2015-11-18 06:13:48', '2015-11-18 06:13:48'),
(395, 1, 152, 1, '2015-11-18 06:13:48', '2015-11-18 06:13:48'),
(396, 6, 152, 1, '2015-11-18 06:13:48', '2015-11-18 06:13:48'),
(397, 4, 152, 1, '2015-11-18 06:13:48', '2015-11-18 06:13:48'),
(398, 6, 153, 1, '2015-11-18 06:13:48', '2015-11-18 06:13:48'),
(399, 6, 153, 1, '2015-11-18 06:13:48', '2015-11-18 06:13:48'),
(400, 5, 154, 1, '2015-11-18 06:13:49', '2015-11-18 06:13:49'),
(401, 3, 155, 1, '2015-11-18 06:13:49', '2015-11-18 06:13:49'),
(402, 2, 155, 1, '2015-11-18 06:13:49', '2015-11-18 06:13:49'),
(403, 6, 155, 1, '2015-11-18 06:13:49', '2015-11-18 06:13:49'),
(404, 2, 156, 1, '2015-11-18 06:13:49', '2015-11-18 06:13:49'),
(405, 5, 157, 1, '2015-11-18 06:13:49', '2015-11-18 06:13:49'),
(406, 1, 157, 1, '2015-11-18 06:13:49', '2015-11-18 06:13:49'),
(407, 4, 158, 1, '2015-11-18 06:13:49', '2015-11-18 06:13:49'),
(408, 4, 158, 1, '2015-11-18 06:13:49', '2015-11-18 06:13:49'),
(409, 1, 158, 1, '2015-11-18 06:13:49', '2015-11-18 06:13:49'),
(410, 4, 158, 1, '2015-11-18 06:13:49', '2015-11-18 06:13:49'),
(411, 6, 159, 1, '2015-11-18 06:13:49', '2015-11-18 06:13:49'),
(412, 3, 159, 1, '2015-11-18 06:13:49', '2015-11-18 06:13:49'),
(413, 1, 159, 1, '2015-11-18 06:13:50', '2015-11-18 06:13:50'),
(414, 2, 160, 1, '2015-11-18 06:13:50', '2015-11-18 06:13:50'),
(415, 3, 160, 1, '2015-11-18 06:13:50', '2015-11-18 06:13:50'),
(416, 4, 161, 1, '2015-11-18 06:13:50', '2015-11-18 06:13:50'),
(417, 2, 161, 1, '2015-11-18 06:13:50', '2015-11-18 06:13:50'),
(418, 6, 161, 1, '2015-11-18 06:13:50', '2015-11-18 06:13:50'),
(419, 5, 162, 1, '2015-11-18 06:13:50', '2015-11-18 06:13:50'),
(420, 3, 163, 1, '2015-11-18 06:13:50', '2015-11-18 06:13:50'),
(421, 4, 164, 1, '2015-11-18 06:13:50', '2015-11-18 06:13:50'),
(422, 5, 164, 1, '2015-11-18 06:13:50', '2015-11-18 06:13:50'),
(423, 3, 165, 1, '2015-11-18 06:13:50', '2015-11-18 06:13:50'),
(424, 3, 165, 1, '2015-11-18 06:13:50', '2015-11-18 06:13:50'),
(425, 3, 165, 1, '2015-11-18 06:13:50', '2015-11-18 06:13:50'),
(426, 3, 166, 1, '2015-11-18 06:13:51', '2015-11-18 06:13:51'),
(427, 2, 166, 1, '2015-11-18 06:13:51', '2015-11-18 06:13:51'),
(428, 5, 166, 1, '2015-11-18 06:13:51', '2015-11-18 06:13:51'),
(429, 2, 167, 1, '2015-11-18 06:13:51', '2015-11-18 06:13:51'),
(430, 1, 167, 1, '2015-11-18 06:13:51', '2015-11-18 06:13:51'),
(431, 3, 167, 1, '2015-11-18 06:13:51', '2015-11-18 06:13:51'),
(432, 1, 168, 1, '2015-11-18 06:13:51', '2015-11-18 06:13:51'),
(433, 5, 169, 1, '2015-11-18 06:13:51', '2015-11-18 06:13:51'),
(434, 2, 169, 1, '2015-11-18 06:13:51', '2015-11-18 06:13:51'),
(435, 1, 169, 1, '2015-11-18 06:13:51', '2015-11-18 06:13:51'),
(436, 3, 170, 1, '2015-11-18 06:13:51', '2015-11-18 06:13:51'),
(437, 3, 170, 1, '2015-11-18 06:13:51', '2015-11-18 06:13:51'),
(438, 6, 170, 1, '2015-11-18 06:13:51', '2015-11-18 06:13:51'),
(439, 6, 170, 1, '2015-11-18 06:13:51', '2015-11-18 06:13:51'),
(440, 3, 171, 1, '2015-11-18 06:13:52', '2015-11-18 06:13:52'),
(441, 2, 171, 1, '2015-11-18 06:13:52', '2015-11-18 06:13:52'),
(442, 4, 172, 1, '2015-11-18 06:13:52', '2015-11-18 06:13:52'),
(443, 5, 172, 1, '2015-11-18 06:13:52', '2015-11-18 06:13:52'),
(444, 2, 173, 1, '2015-11-18 06:13:52', '2015-11-18 06:13:52'),
(445, 1, 173, 1, '2015-11-18 06:13:52', '2015-11-18 06:13:52'),
(446, 3, 174, 1, '2015-11-18 06:13:52', '2015-11-18 06:13:52'),
(447, 2, 175, 1, '2015-11-18 06:13:52', '2015-11-18 06:13:52'),
(448, 1, 175, 1, '2015-11-18 06:13:52', '2015-11-18 06:13:52'),
(449, 3, 176, 1, '2015-11-18 06:13:52', '2015-11-18 06:13:52'),
(450, 1, 177, 1, '2015-11-18 06:13:53', '2015-11-18 06:13:53'),
(451, 6, 177, 1, '2015-11-18 06:13:53', '2015-11-18 06:13:53'),
(452, 1, 177, 1, '2015-11-18 06:13:53', '2015-11-18 06:13:53'),
(453, 2, 178, 1, '2015-11-18 06:13:53', '2015-11-18 06:13:53'),
(454, 1, 178, 1, '2015-11-18 06:13:53', '2015-11-18 06:13:53'),
(455, 1, 179, 1, '2015-11-18 06:13:53', '2015-11-18 06:13:53'),
(456, 3, 179, 1, '2015-11-18 06:13:53', '2015-11-18 06:13:53'),
(457, 2, 180, 1, '2015-11-18 06:13:53', '2015-11-18 06:13:53'),
(458, 5, 181, 1, '2015-11-18 06:13:53', '2015-11-18 06:13:53'),
(459, 2, 181, 1, '2015-11-18 06:13:53', '2015-11-18 06:13:53'),
(460, 2, 181, 1, '2015-11-18 06:13:53', '2015-11-18 06:13:53'),
(461, 5, 181, 1, '2015-11-18 06:13:53', '2015-11-18 06:13:53'),
(462, 4, 182, 1, '2015-11-18 06:13:53', '2015-11-18 06:13:53'),
(463, 4, 182, 1, '2015-11-18 06:13:53', '2015-11-18 06:13:53'),
(464, 6, 182, 1, '2015-11-18 06:13:54', '2015-11-18 06:13:54'),
(465, 3, 182, 1, '2015-11-18 06:13:54', '2015-11-18 06:13:54'),
(466, 4, 183, 1, '2015-11-18 06:13:54', '2015-11-18 06:13:54'),
(467, 4, 183, 1, '2015-11-18 06:13:54', '2015-11-18 06:13:54'),
(468, 1, 184, 1, '2015-11-18 06:13:54', '2015-11-18 06:13:54'),
(469, 6, 184, 1, '2015-11-18 06:13:54', '2015-11-18 06:13:54'),
(470, 2, 184, 1, '2015-11-18 06:13:54', '2015-11-18 06:13:54'),
(471, 2, 184, 1, '2015-11-18 06:13:54', '2015-11-18 06:13:54'),
(472, 6, 184, 1, '2015-11-18 06:13:54', '2015-11-18 06:13:54'),
(473, 4, 185, 1, '2015-11-18 06:13:54', '2015-11-18 06:13:54'),
(474, 1, 186, 1, '2015-11-18 06:13:54', '2015-11-18 06:13:54'),
(475, 5, 186, 1, '2015-11-18 06:13:54', '2015-11-18 06:13:54'),
(476, 1, 187, 1, '2015-11-18 06:13:54', '2015-11-18 06:13:54'),
(477, 3, 187, 1, '2015-11-18 06:13:55', '2015-11-18 06:13:55'),
(478, 4, 187, 1, '2015-11-18 06:13:55', '2015-11-18 06:13:55'),
(479, 3, 187, 1, '2015-11-18 06:13:55', '2015-11-18 06:13:55'),
(480, 5, 188, 1, '2015-11-18 06:13:55', '2015-11-18 06:13:55'),
(481, 4, 188, 1, '2015-11-18 06:13:55', '2015-11-18 06:13:55'),
(482, 4, 188, 1, '2015-11-18 06:13:55', '2015-11-18 06:13:55'),
(483, 1, 188, 1, '2015-11-18 06:13:55', '2015-11-18 06:13:55'),
(484, 1, 189, 1, '2015-11-18 06:13:55', '2015-11-18 06:13:55'),
(485, 2, 189, 1, '2015-11-18 06:13:55', '2015-11-18 06:13:55'),
(486, 2, 190, 1, '2015-11-18 06:13:55', '2015-11-18 06:13:55'),
(487, 3, 190, 1, '2015-11-18 06:13:55', '2015-11-18 06:13:55'),
(488, 1, 191, 1, '2015-11-18 06:13:55', '2015-11-18 06:13:55'),
(489, 2, 192, 1, '2015-11-18 06:13:55', '2015-11-18 06:13:55'),
(490, 2, 193, 1, '2015-11-18 06:13:56', '2015-11-18 06:13:56'),
(491, 1, 193, 1, '2015-11-18 06:13:56', '2015-11-18 06:13:56'),
(492, 2, 193, 1, '2015-11-18 06:13:56', '2015-11-18 06:13:56'),
(493, 3, 193, 1, '2015-11-18 06:13:56', '2015-11-18 06:13:56'),
(494, 4, 194, 1, '2015-11-18 06:13:56', '2015-11-18 06:13:56'),
(495, 4, 194, 1, '2015-11-18 06:13:56', '2015-11-18 06:13:56'),
(496, 1, 194, 1, '2015-11-18 06:13:56', '2015-11-18 06:13:56'),
(497, 4, 194, 1, '2015-11-18 06:13:56', '2015-11-18 06:13:56'),
(498, 2, 195, 1, '2015-11-18 06:13:56', '2015-11-18 06:13:56'),
(499, 2, 195, 1, '2015-11-18 06:13:56', '2015-11-18 06:13:56'),
(500, 5, 195, 1, '2015-11-18 06:13:56', '2015-11-18 06:13:56'),
(501, 4, 196, 1, '2015-11-18 06:13:56', '2015-11-18 06:13:56'),
(502, 6, 196, 1, '2015-11-18 06:13:56', '2015-11-18 06:13:56'),
(503, 6, 197, 1, '2015-11-18 06:13:56', '2015-11-18 06:13:56'),
(504, 5, 197, 1, '2015-11-18 06:13:57', '2015-11-18 06:13:57'),
(505, 5, 197, 1, '2015-11-18 06:13:57', '2015-11-18 06:13:57'),
(506, 3, 198, 1, '2015-11-18 06:13:57', '2015-11-18 06:13:57'),
(507, 2, 198, 1, '2015-11-18 06:13:57', '2015-11-18 06:13:57'),
(508, 5, 199, 1, '2015-11-18 06:13:57', '2015-11-18 06:13:57'),
(509, 6, 199, 1, '2015-11-18 06:13:57', '2015-11-18 06:13:57'),
(510, 4, 199, 1, '2015-11-18 06:13:57', '2015-11-18 06:13:57'),
(511, 3, 200, 1, '2015-11-18 06:13:57', '2015-11-18 06:13:57'),
(512, 5, 200, 1, '2015-11-18 06:13:57', '2015-11-18 06:13:57'),
(513, 2, 200, 1, '2015-11-18 06:13:57', '2015-11-18 06:13:57'),
(514, 5, 200, 1, '2015-11-18 06:13:57', '2015-11-18 06:13:57');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE IF NOT EXISTS `penyakit` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_penyakit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id`, `nama_penyakit`, `created_at`, `updated_at`) VALUES
(2, 'Penyakit 1', '2015-10-19 23:49:49', '2015-10-19 23:49:49'),
(3, 'Penyakit 2', '2015-10-19 23:49:59', '2015-10-19 23:50:06'),
(4, 'Penyakit 3', '2015-10-19 23:50:15', '2015-10-19 23:50:15');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit_history`
--

CREATE TABLE IF NOT EXISTS `penyakit_history` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `penyakit_id` int(11) NOT NULL,
  `tgl` datetime NOT NULL,
  `login` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE IF NOT EXISTS `provinsi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_provinsi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id`, `nama_provinsi`, `created_at`, `updated_at`) VALUES
(1, 'Provinsi 1', '2015-10-29 01:03:34', '2015-10-29 01:03:34'),
(2, 'Provinsi 2', '2015-10-29 01:03:43', '2015-10-29 01:03:43'),
(3, 'Provinsi 3', '2015-10-29 01:03:48', '2015-10-29 01:03:48');

-- --------------------------------------------------------

--
-- Table structure for table `rs`
--

CREATE TABLE IF NOT EXISTS `rs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_rs` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `kelurahan_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `rs`
--

INSERT INTO `rs` (`id`, `nama_rs`, `created_at`, `updated_at`, `kelurahan_id`) VALUES
(1, 'Rumah Sakit 1', '2015-10-29 01:07:43', '2015-10-29 01:07:43', 1),
(2, 'Rumah Sakit 2', '2015-10-29 01:07:54', '2015-10-29 01:07:54', 2),
(3, 'Rumah Sakit 3', '2015-10-29 01:08:12', '2015-10-29 01:08:12', 3),
(4, 'Rumah Sakit 4', '2015-10-29 01:08:22', '2015-10-29 01:08:22', 4),
(5, 'Rumah Sakit 5', '2015-10-29 01:08:37', '2015-10-29 01:08:37', 5),
(6, 'Rumah Sakit 6', '2015-10-29 03:05:11', '2015-10-29 03:05:11', 3);

-- --------------------------------------------------------

--
-- Table structure for table `rs_history`
--

CREATE TABLE IF NOT EXISTS `rs_history` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `rs_id` int(11) NOT NULL,
  `tgl` datetime NOT NULL,
  `login` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE IF NOT EXISTS `tag` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama_pasien` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ttl_tl` datetime NOT NULL,
  `tgl_masuk` datetime NOT NULL,
  `status` smallint(6) NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `telp_rumah` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hp1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hp2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ttl_t` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rs_id` int(11) NOT NULL,
  `asuransi_id` int(11) NOT NULL,
  `penyakit_id` int(11) NOT NULL,
  `kelurahan_id` int(11) NOT NULL,
  `dokter_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=201 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `jk`, `nama_pasien`, `ttl_tl`, `tgl_masuk`, `status`, `alamat`, `telp_rumah`, `hp1`, `hp2`, `role`, `remember_token`, `created_at`, `updated_at`, `ttl_t`, `rs_id`, `asuransi_id`, `penyakit_id`, `kelurahan_id`, `dokter_id`) VALUES
(1, 'pasien1', '$2y$10$HBtx19TTTFeJ7I9Xha7c/OA/Ecj3tsxcBbfW/Cg2U8.MwunygBnXS', 'pasien1@elgeka.com', 'l', 'Pasien 1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:19', '2015-11-18 06:13:19', '', 4, 6, 4, 3, 4),
(2, 'pasien2', '$2y$10$vrIrv7DFk6GTO35k5EXcz.LDFtLdtZpcCvaEelCdTdsPwdsX59j7G', 'pasien2@elgeka.com', 'l', 'Pasien 2', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:19', '2015-11-18 06:13:19', '', 3, 4, 2, 3, 4),
(3, 'pasien3', '$2y$10$uLzlCBoJiA8iMzRRtncL8una.E3n3zrK.qdu1ItjPx0O5k84ahyye', 'pasien3@elgeka.com', 'l', 'Pasien 3', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:20', '2015-11-18 06:13:20', '', 1, 6, 4, 2, 4),
(4, 'pasien4', '$2y$10$Tquj.2m6teAf0aRnsMqL/Oz0XAOXidtCPupak6eYKzkpx1u2vaZ0u', 'pasien4@elgeka.com', 'l', 'Pasien 4', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:20', '2015-11-18 06:13:20', '', 4, 5, 3, 3, 3),
(5, 'pasien5', '$2y$10$a/GZ3DKelQ2NsizIpW6J8O1vwZxJ1cv38ogTHx7qt/WEyDRIjN6Ka', 'pasien5@elgeka.com', 'l', 'Pasien 5', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:20', '2015-11-18 06:13:20', '', 2, 6, 2, 4, 1),
(6, 'pasien6', '$2y$10$hGMC4oUsOAyBsr4An5/oYOdvOjVJcEAdRytFVDXcbM3VrPCTTssw.', 'pasien6@elgeka.com', 'l', 'Pasien 6', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:20', '2015-11-18 06:13:20', '', 1, 6, 3, 4, 3),
(7, 'pasien7', '$2y$10$eh4.6GLtxxL.k6Wd72Uky.JMQVj1C6j154bK5smb./zAfl0GsFl06', 'pasien7@elgeka.com', 'l', 'Pasien 7', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:20', '2015-11-18 06:13:20', '', 1, 4, 2, 3, 1),
(8, 'pasien8', '$2y$10$mvDdsSdu7YZm99FoiciCs.UiN/sJY2Olw9ucz.V./ISA4WCx7RKKa', 'pasien8@elgeka.com', 'l', 'Pasien 8', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:20', '2015-11-18 06:13:20', '', 2, 4, 4, 1, 4),
(9, 'pasien9', '$2y$10$vMYm4m2qP/CJTVfaw7QvOuSYsjDfmuWjTOjkKLuyM6dzaqLMWSjOK', 'pasien9@elgeka.com', 'l', 'Pasien 9', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:21', '2015-11-18 06:13:21', '', 3, 5, 3, 5, 1),
(10, 'pasien10', '$2y$10$4Fx5V87gYdBuaNWhRD7Goun3LVhfO7tUEueO.uZ7Kchv.V.dWaqNK', 'pasien10@elgeka.com', 'l', 'Pasien 10', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:21', '2015-11-18 06:13:21', '', 3, 4, 3, 3, 4),
(11, 'pasien11', '$2y$10$WI4jxvNGq9XwG1CC2RRX3.0X2R8UPMB.ILmg7MBXBwgMFG9cbR78G', 'pasien11@elgeka.com', 'l', 'Pasien 11', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:21', '2015-11-18 06:13:21', '', 2, 6, 3, 3, 3),
(12, 'pasien12', '$2y$10$AF2BBD00EirBuZbplPUdKuZkLQnqgmYKQXhuMFFC67R69U012/TAu', 'pasien12@elgeka.com', 'l', 'Pasien 12', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:21', '2015-11-18 06:13:21', '', 2, 6, 4, 2, 3),
(13, 'pasien13', '$2y$10$dyFk/MpwfIMWwDiKibjZfu.T59g8APBdzrNK/sufRXgGh2hQH4tdG', 'pasien13@elgeka.com', 'l', 'Pasien 13', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:21', '2015-11-18 06:13:21', '', 6, 4, 2, 2, 1),
(14, 'pasien14', '$2y$10$9J.QJOQS7XCE54MXBDzG1e79/aIghnWRGUYKx4PGgzqtTBeFqlYrq', 'pasien14@elgeka.com', 'l', 'Pasien 14', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:21', '2015-11-18 06:13:21', '', 6, 4, 4, 3, 1),
(15, 'pasien15', '$2y$10$9emWY3wJ/IY7ZWcLhbdA5eycfIkak.F95l4CWO8J2CyKTDw1iDyWa', 'pasien15@elgeka.com', 'l', 'Pasien 15', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:22', '2015-11-18 06:13:22', '', 2, 5, 4, 1, 4),
(16, 'pasien16', '$2y$10$N4ma5mlLO6kVlHGUjMcKseoq5gxmH18N4PRVYTf74zhmu1A0SX6/K', 'pasien16@elgeka.com', 'l', 'Pasien 16', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:22', '2015-11-18 06:13:22', '', 3, 5, 4, 2, 4),
(17, 'pasien17', '$2y$10$D1FHEcErCt8OnHNBSAxpMuwggX9HyHvrMldwGsG8T4uXNZMmG1wcS', 'pasien17@elgeka.com', 'l', 'Pasien 17', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:22', '2015-11-18 06:13:22', '', 2, 4, 3, 3, 4),
(18, 'pasien18', '$2y$10$7BmdSnCK9gmcVIMU1RPtLe0AJCC/Cd9H0prWytvD9Qfw7Y8V4V8PS', 'pasien18@elgeka.com', 'l', 'Pasien 18', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:22', '2015-11-18 06:13:22', '', 1, 6, 2, 5, 2),
(19, 'pasien19', '$2y$10$bwnLrv9irusT1iU7fWo61u0CJcZWLgFCpwqnIX0h1w2JCf7AjSD8C', 'pasien19@elgeka.com', 'l', 'Pasien 19', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:23', '2015-11-18 06:13:23', '', 3, 6, 4, 1, 3),
(20, 'pasien20', '$2y$10$8UuGZU0PPl2aHPCX/YO3DO2GxbkAdgZNJUTwbZEbU.WlGDlW9xZ/2', 'pasien20@elgeka.com', 'l', 'Pasien 20', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:23', '2015-11-18 06:13:23', '', 2, 5, 4, 1, 2),
(21, 'pasien21', '$2y$10$7gQmp16LFNusqjQAbZz.kuBzl3JhphrF9j.t28GKXgzHfLlRJC8Ja', 'pasien21@elgeka.com', 'l', 'Pasien 21', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:23', '2015-11-18 06:13:23', '', 1, 5, 3, 2, 1),
(22, 'pasien22', '$2y$10$.sWFfmXJBqEYb9/TXY2oBOEJ7WLRiR17QO58yCwkVWPu6mlIwbUeq', 'pasien22@elgeka.com', 'l', 'Pasien 22', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:23', '2015-11-18 06:13:23', '', 2, 5, 2, 4, 1),
(23, 'pasien23', '$2y$10$Gtej42dBNAIWmRb/BDxA4Ozb2YbKqt8XNySTAp1YrhnynJquN0rnm', 'pasien23@elgeka.com', 'l', 'Pasien 23', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:23', '2015-11-18 06:13:23', '', 2, 6, 4, 2, 2),
(24, 'pasien24', '$2y$10$m1oHIvVQ4hWn6quHhTNGzuryUMtfQIIt63JRUfHFJO8l4167qdJbS', 'pasien24@elgeka.com', 'l', 'Pasien 24', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:24', '2015-11-18 06:13:24', '', 6, 6, 4, 1, 2),
(25, 'pasien25', '$2y$10$yBIu.ZjLFhdljVc6ByAGRuLXoqKPPVkn3O8burvydyw0ZbBEF3JwS', 'pasien25@elgeka.com', 'l', 'Pasien 25', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:24', '2015-11-18 06:13:24', '', 5, 4, 4, 4, 4),
(26, 'pasien26', '$2y$10$27ns7xWn.aPmeZB5w8Fzfu08F5A8XoJQm3y0w26u3UL2AManYJVg2', 'pasien26@elgeka.com', 'l', 'Pasien 26', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:24', '2015-11-18 06:13:24', '', 5, 5, 2, 2, 4),
(27, 'pasien27', '$2y$10$SNq8DheO3JDbDj71oatWJeyjcPKrzEzBKJODuehOOTFGT/exyhUBa', 'pasien27@elgeka.com', 'l', 'Pasien 27', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:24', '2015-11-18 06:13:24', '', 4, 6, 4, 2, 3),
(28, 'pasien28', '$2y$10$a6aw0M4ukQr3R7I0Ed4HfeCYtW0QC6HiJKMTVrdqCHzaxLk4vHMeK', 'pasien28@elgeka.com', 'l', 'Pasien 28', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:24', '2015-11-18 06:13:24', '', 6, 6, 2, 4, 4),
(29, 'pasien29', '$2y$10$QI.eFVXc0n8FFkZlKV87C./1orfDDdUMnUFLml16pfaizh7bEIyWG', 'pasien29@elgeka.com', 'l', 'Pasien 29', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:25', '2015-11-18 06:13:25', '', 4, 5, 2, 1, 3),
(30, 'pasien30', '$2y$10$eWUtJ2OZFo8P0YygnVudculb/TgHHURh8aAWO4SoPhhW5xctESRC.', 'pasien30@elgeka.com', 'l', 'Pasien 30', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:25', '2015-11-18 06:13:25', '', 2, 4, 2, 2, 2),
(31, 'pasien31', '$2y$10$j3pKh0ZZ6Kui5GpYSFZNGOIn1EM9SlH0LfPnmSX.S6Ar/igm0Y6ju', 'pasien31@elgeka.com', 'l', 'Pasien 31', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:25', '2015-11-18 06:13:25', '', 1, 6, 4, 1, 3),
(32, 'pasien32', '$2y$10$QQe/xDr5/d6Ublrw4IdevOe58kyIN1pY1/ZmzRFSBjxDIOWxOuVMO', 'pasien32@elgeka.com', 'l', 'Pasien 32', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:25', '2015-11-18 06:13:25', '', 5, 5, 4, 3, 2),
(33, 'pasien33', '$2y$10$9GcIqRRz0T1lCz/PIXmDJ.xJa7VDF85JkHOlkxg.SzIx30StiYXne', 'pasien33@elgeka.com', 'l', 'Pasien 33', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:25', '2015-11-18 06:13:25', '', 4, 5, 3, 3, 3),
(34, 'pasien34', '$2y$10$Gf7RNZV4zXF.Kcmnh61U7O3mI0TUfbdKLQn8Q355j.N4cw3G2ydtC', 'pasien34@elgeka.com', 'l', 'Pasien 34', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:26', '2015-11-18 06:13:26', '', 6, 4, 3, 1, 4),
(35, 'pasien35', '$2y$10$aSasjBaNbz4q5nC4ipnWReNO5wNW8M2KEYBuJyPKqvhzNcQ/ExX1S', 'pasien35@elgeka.com', 'l', 'Pasien 35', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:26', '2015-11-18 06:13:26', '', 4, 4, 3, 3, 1),
(36, 'pasien36', '$2y$10$0ay9Pw1MzHeWeaqOY/uaQ./5fONKI3TlB4Ty3lhGB8cD031MIVBhS', 'pasien36@elgeka.com', 'l', 'Pasien 36', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:26', '2015-11-18 06:13:26', '', 2, 5, 2, 5, 4),
(37, 'pasien37', '$2y$10$Cm8vpqQ1RZduBqpaqFY09ujHINlZXC8kKryjgP8zY6arxncWR09F.', 'pasien37@elgeka.com', 'l', 'Pasien 37', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:26', '2015-11-18 06:13:26', '', 3, 4, 2, 4, 3),
(38, 'pasien38', '$2y$10$0Dj4wU5L6pkxQjzVxq4tQe8ZNwxBvDp42FGNNbKAa.Wd7/lcdT786', 'pasien38@elgeka.com', 'l', 'Pasien 38', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:26', '2015-11-18 06:13:26', '', 1, 6, 3, 5, 3),
(39, 'pasien39', '$2y$10$12nXnXjy.96Nl/ODDwGP5uNLKUZVntyX9DlwVdDfW0.pDy.meEHz2', 'pasien39@elgeka.com', 'l', 'Pasien 39', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:27', '2015-11-18 06:13:27', '', 6, 4, 4, 5, 4),
(40, 'pasien40', '$2y$10$779M2P46Fw4OSoK5VsPqROOG4nwu3SA8kPUEW.edh7LwWnWKM8k6W', 'pasien40@elgeka.com', 'l', 'Pasien 40', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:27', '2015-11-18 06:13:27', '', 6, 5, 2, 3, 1),
(41, 'pasien41', '$2y$10$HjkDg.g0NwDbWaGmmtFM3uq5n3jJXj5zcVYvj1z8BKnexhr9Z8RIm', 'pasien41@elgeka.com', 'l', 'Pasien 41', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:27', '2015-11-18 06:13:27', '', 2, 4, 4, 4, 1),
(42, 'pasien42', '$2y$10$kXrU/Glmq8uIuu9L7d7cxOCUZP96ciwzzfyVZmfiAEr99WM6snBZq', 'pasien42@elgeka.com', 'l', 'Pasien 42', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:27', '2015-11-18 06:13:27', '', 5, 6, 2, 5, 4),
(43, 'pasien43', '$2y$10$u5Zs7iTh3HC2Jwcge8AhgeLjl4wZoWhReaCuKsO0gu0p5KCpJnbr6', 'pasien43@elgeka.com', 'l', 'Pasien 43', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:27', '2015-11-18 06:13:27', '', 1, 5, 3, 2, 3),
(44, 'pasien44', '$2y$10$MEp9yCKf4kOgmya0EFICfORZs08Rh0TX4M4Fcv1ewtU3xspj.GpaW', 'pasien44@elgeka.com', 'l', 'Pasien 44', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:27', '2015-11-18 06:13:27', '', 6, 5, 2, 4, 4),
(45, 'pasien45', '$2y$10$X/TDs.eYsxuxGK6tA1YPpOt8UM8NAYF89IdVrPQ9fn2JOD7tQ35BW', 'pasien45@elgeka.com', 'l', 'Pasien 45', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:28', '2015-11-18 06:13:28', '', 1, 5, 3, 1, 1),
(46, 'pasien46', '$2y$10$cIH.ecGd/L/xT.KMf4SXUe/MsqdXTOGnFkHzgQNNxjtI6e5ihDi76', 'pasien46@elgeka.com', 'l', 'Pasien 46', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:28', '2015-11-18 06:13:28', '', 3, 6, 2, 4, 1),
(47, 'pasien47', '$2y$10$saKifQro/bkPmV9el/DuZeyhOd4DKno0UfFHkhQc6ql4P5vhwV.pK', 'pasien47@elgeka.com', 'l', 'Pasien 47', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:28', '2015-11-18 06:13:28', '', 5, 4, 2, 1, 2),
(48, 'pasien48', '$2y$10$J2O.NghFXp5pKte1wMcsGuuhAtxJlVhNk6W0LGDZxVZUXoat/Uzvi', 'pasien48@elgeka.com', 'l', 'Pasien 48', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:28', '2015-11-18 06:13:28', '', 1, 6, 4, 4, 2),
(49, 'pasien49', '$2y$10$dT7l8VlF4mHs7451WV9wgeYEJS6EbTLAd9mNTzNZvy0ZtXvHL/D1i', 'pasien49@elgeka.com', 'l', 'Pasien 49', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:28', '2015-11-18 06:13:28', '', 3, 5, 2, 3, 3),
(50, 'pasien50', '$2y$10$gSgqAfGiCALr7Aw8rHpOguOwZK9zrZ8MhKAAaxyrp3qjwG3DqLgM6', 'pasien50@elgeka.com', 'l', 'Pasien 50', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:29', '2015-11-18 06:13:29', '', 4, 4, 3, 2, 4),
(51, 'pasien51', '$2y$10$nNU2wYsnJt.xdFKBMXw3Zur.o2jMDREeuzA8Y2PHRpGM/b2DQ4vte', 'pasien51@elgeka.com', 'l', 'Pasien 51', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:29', '2015-11-18 06:13:29', '', 5, 6, 2, 2, 2),
(52, 'pasien52', '$2y$10$/CQb.G4ulUnnNdWhE63oZOa4aefg8M8/yagS6xFc5z0XzV9v4Kt1.', 'pasien52@elgeka.com', 'l', 'Pasien 52', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:29', '2015-11-18 06:13:29', '', 6, 6, 3, 2, 1),
(53, 'pasien53', '$2y$10$KEfQ6fiEeEioQXAz97Ey6..6F1SvfUrM2IBQYie4hNHHKQqIjMZGm', 'pasien53@elgeka.com', 'l', 'Pasien 53', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:29', '2015-11-18 06:13:29', '', 6, 5, 4, 3, 3),
(54, 'pasien54', '$2y$10$TaMWy7XgEa79yLdxh5tpvOWI0pC0YJDV73UBp46Rcy4NBCOprm4FK', 'pasien54@elgeka.com', 'l', 'Pasien 54', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:29', '2015-11-18 06:13:29', '', 1, 4, 4, 4, 3),
(55, 'pasien55', '$2y$10$dP1BkmR1lfvCuX2xGGQUZuwdDsrbKc104gWsevElcGGG1WPj8GOHG', 'pasien55@elgeka.com', 'l', 'Pasien 55', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:30', '2015-11-18 06:13:30', '', 1, 6, 4, 1, 4),
(56, 'pasien56', '$2y$10$P6DbHTf8p3Got3trJ32W5.rKpHA1qqt2/zmvUn16yfAkh0470wghi', 'pasien56@elgeka.com', 'l', 'Pasien 56', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:30', '2015-11-18 06:13:30', '', 3, 5, 3, 2, 2),
(57, 'pasien57', '$2y$10$O2lWkQGZl3cZtcnfexdD0eLbSbcBGjAOfIoP59iBrMsJdlplSTEdm', 'pasien57@elgeka.com', 'l', 'Pasien 57', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:30', '2015-11-18 06:13:30', '', 1, 6, 4, 2, 3),
(58, 'pasien58', '$2y$10$uFICHOZjtljy/7qxAl3lpu15nh0YiF6SYSjN6jwdYba/ySpP0OJ1q', 'pasien58@elgeka.com', 'l', 'Pasien 58', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:30', '2015-11-18 06:13:30', '', 3, 6, 3, 4, 2),
(59, 'pasien59', '$2y$10$18wkWZRnYRVzO2zp6Bm6u.kgVhpP7EZuyhr..ONoLbELcvNDId2JO', 'pasien59@elgeka.com', 'l', 'Pasien 59', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:30', '2015-11-18 06:13:30', '', 3, 4, 3, 1, 1),
(60, 'pasien60', '$2y$10$PhX9OJ22hSfk0ZU2A7gDpetbnr5m0HLkuwFjttuGbtJrrNf72fWSu', 'pasien60@elgeka.com', 'l', 'Pasien 60', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:31', '2015-11-18 06:13:31', '', 1, 6, 4, 4, 4),
(61, 'pasien61', '$2y$10$pAn.PYsVNy6SC1GIB1Yw1uswPAjg8.ctf.68YoI5CpLZwV.c31qgG', 'pasien61@elgeka.com', 'l', 'Pasien 61', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:31', '2015-11-18 06:13:31', '', 2, 4, 4, 3, 2),
(62, 'pasien62', '$2y$10$EswzE1lKA2r.iOVgSvIpM.x2IVRRLTPfGCo5zVPd5FjWHrOJLSU/e', 'pasien62@elgeka.com', 'l', 'Pasien 62', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:31', '2015-11-18 06:13:31', '', 5, 6, 3, 4, 1),
(63, 'pasien63', '$2y$10$Et1oxIQz3JXnEsMbqyqwtOzlNtLML2kkMh3O/XUEKhuzzkd6m5PXy', 'pasien63@elgeka.com', 'l', 'Pasien 63', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:31', '2015-11-18 06:13:31', '', 6, 6, 4, 4, 2),
(64, 'pasien64', '$2y$10$4Wqz7VQ/3swNStIVmBYlweRJsRp0dvSmpvTJI0TDLSvnZjRDlajZS', 'pasien64@elgeka.com', 'l', 'Pasien 64', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:31', '2015-11-18 06:13:31', '', 3, 5, 4, 3, 2),
(65, 'pasien65', '$2y$10$p/do7ZqapHC4J2uBP6chVOng81NvbKcO0UupaYQpt8qDUR3lhgIKC', 'pasien65@elgeka.com', 'l', 'Pasien 65', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:32', '2015-11-18 06:13:32', '', 4, 4, 4, 2, 4),
(66, 'pasien66', '$2y$10$4jX9I8L9cclVJWEwYfJCAeZMZunLrnHFPxRIO5kwBlmuuNKfshUcy', 'pasien66@elgeka.com', 'l', 'Pasien 66', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:32', '2015-11-18 06:13:32', '', 1, 4, 3, 2, 3),
(67, 'pasien67', '$2y$10$c/GsAS0/Bgj6BnaWLd4ymOQ1pgaMTCrOJyBWVdTvbbp/pXNPFFowu', 'pasien67@elgeka.com', 'l', 'Pasien 67', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:32', '2015-11-18 06:13:32', '', 6, 4, 3, 4, 2),
(68, 'pasien68', '$2y$10$9O1hg88SrnpK0yQtL/2ONO1NN2eQdeXnbAZoHUWz9F9H/ML.Vxheu', 'pasien68@elgeka.com', 'l', 'Pasien 68', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:32', '2015-11-18 06:13:32', '', 3, 5, 3, 5, 4),
(69, 'pasien69', '$2y$10$CEfLObFa.7FiDuF9y/dX3.F6Cfi/nzoHQfuJD28B8hKdAfApn6IUO', 'pasien69@elgeka.com', 'l', 'Pasien 69', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:32', '2015-11-18 06:13:32', '', 4, 6, 4, 2, 1),
(70, 'pasien70', '$2y$10$3EHVtzy4wUrVdDmpehrVq.9rmhJuTU0GjuvWAe./3Ztmnr5aS1tIW', 'pasien70@elgeka.com', 'l', 'Pasien 70', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:32', '2015-11-18 06:13:32', '', 4, 5, 3, 2, 2),
(71, 'pasien71', '$2y$10$luQ7D2SNvvmHXlVErpN95uLqebxmVurGNXGA/kNVbNX3xylIA/rqu', 'pasien71@elgeka.com', 'l', 'Pasien 71', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:33', '2015-11-18 06:13:33', '', 1, 4, 4, 5, 3),
(72, 'pasien72', '$2y$10$57bD8Mc6KT31BWQZ9RqryeUPWNmQmmJUK2OueJ6j1hPQCc2hipsIa', 'pasien72@elgeka.com', 'l', 'Pasien 72', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:33', '2015-11-18 06:13:33', '', 2, 4, 3, 5, 1),
(73, 'pasien73', '$2y$10$9HGLmt6sQikKitQ82HSSWuegV7NbEQzvrZwPyF6tdWPCqzBRMVUGa', 'pasien73@elgeka.com', 'l', 'Pasien 73', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:33', '2015-11-18 06:13:33', '', 5, 4, 3, 3, 4),
(74, 'pasien74', '$2y$10$kvsy/Ey6iIouy5hVRRCCeuQRs5ykLTg2qTdte62g2BzR.Uye1nrzC', 'pasien74@elgeka.com', 'l', 'Pasien 74', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:33', '2015-11-18 06:13:33', '', 5, 6, 2, 3, 1),
(75, 'pasien75', '$2y$10$2X2.ifgc4Qx86Ep/yTCZu.R8K4n1i4YYz6T5WK3diSFatPXT12DX6', 'pasien75@elgeka.com', 'l', 'Pasien 75', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:33', '2015-11-18 06:13:33', '', 2, 4, 4, 1, 4),
(76, 'pasien76', '$2y$10$bae/bf3md6kOrfD4wfgZE.u4yLfl6shKJI94JZ966Iq3fhhzkL5.W', 'pasien76@elgeka.com', 'l', 'Pasien 76', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:33', '2015-11-18 06:13:33', '', 5, 6, 2, 1, 4),
(77, 'pasien77', '$2y$10$LZTY192kLdWtGTLM63mDU.fTcG4R7nOiUaqq4xTLurdZaPj5lT8AO', 'pasien77@elgeka.com', 'l', 'Pasien 77', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:34', '2015-11-18 06:13:34', '', 4, 5, 3, 2, 4),
(78, 'pasien78', '$2y$10$MLw0rnx/vIinPhnutg.bgedGNrZVLfCMwhCw5112oyKKnr/Ij2MoK', 'pasien78@elgeka.com', 'l', 'Pasien 78', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:34', '2015-11-18 06:13:34', '', 3, 6, 2, 2, 2),
(79, 'pasien79', '$2y$10$ydZfPp/ygcG9i8.ScAU2oueT1iflmHSmXH9qOPyylLIVdOif.AxDi', 'pasien79@elgeka.com', 'l', 'Pasien 79', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:34', '2015-11-18 06:13:34', '', 1, 5, 3, 4, 2),
(80, 'pasien80', '$2y$10$VTk24FHeowA9JJTX8kJNXeTVTgCFIjdFXwN1a/lyN8gkFCSlF3op2', 'pasien80@elgeka.com', 'l', 'Pasien 80', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:34', '2015-11-18 06:13:34', '', 2, 6, 4, 2, 3),
(81, 'pasien81', '$2y$10$EAJmXWXQYUM9wPRO4fXm4uQR9DjkrSNIhmJdxoq9XGPrZH3T8ISPK', 'pasien81@elgeka.com', 'l', 'Pasien 81', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:34', '2015-11-18 06:13:34', '', 3, 4, 4, 1, 3),
(82, 'pasien82', '$2y$10$WyQ.ODS/F/cpXo/BT9D7HuP/cxhkawI1BjVIWlTVWo4Hx33SRcs5C', 'pasien82@elgeka.com', 'l', 'Pasien 82', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:34', '2015-11-18 06:13:34', '', 1, 4, 4, 2, 3),
(83, 'pasien83', '$2y$10$vCco/xzJwRoVt65PcrATseW8FLZZliFJp.xPjK32VVN2C4qINDjr2', 'pasien83@elgeka.com', 'l', 'Pasien 83', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:35', '2015-11-18 06:13:35', '', 1, 5, 3, 3, 3),
(84, 'pasien84', '$2y$10$flH1mImPc.nELrT.fUKapuJvSuo9pDLJAQxCsAT3WlmlWur7yENei', 'pasien84@elgeka.com', 'l', 'Pasien 84', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:35', '2015-11-18 06:13:35', '', 1, 6, 3, 4, 3),
(85, 'pasien85', '$2y$10$7Crn0253ckhuzTk8RXCDNOOWayrTdiH0K5JQr4TfnXujatkwJ9cPO', 'pasien85@elgeka.com', 'l', 'Pasien 85', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:35', '2015-11-18 06:13:35', '', 6, 6, 3, 3, 3),
(86, 'pasien86', '$2y$10$GgfrUvQFhaFNn3ffHcBv2O9/Xr00sNwTfd6B8gXNXLKQMejvZvvQS', 'pasien86@elgeka.com', 'l', 'Pasien 86', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:35', '2015-11-18 06:13:35', '', 5, 6, 3, 4, 1),
(87, 'pasien87', '$2y$10$78B3Wgz2mExToDq3Lw9qQOlfz0UXSZGL1bs0LeaBf7EtvKHgrvIQu', 'pasien87@elgeka.com', 'l', 'Pasien 87', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:35', '2015-11-18 06:13:35', '', 3, 6, 2, 3, 1),
(88, 'pasien88', '$2y$10$sUdpKUvgckDwxPIkmhXPv.RxYi/xVngPFdlX3XXDmTRO8kwtFEwMK', 'pasien88@elgeka.com', 'l', 'Pasien 88', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:36', '2015-11-18 06:13:36', '', 6, 6, 3, 4, 1),
(89, 'pasien89', '$2y$10$50jm/IhbHK05RhUBHybJdOkdVp5QrRhY5NwT6VTSzLjQhTRduBO82', 'pasien89@elgeka.com', 'l', 'Pasien 89', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:36', '2015-11-18 06:13:36', '', 1, 6, 4, 2, 3),
(90, 'pasien90', '$2y$10$QNDpcPBqlMui6c5MX3Uaf.2oRHn2Y3Ben3JHrX.eb58pd98JFxCa6', 'pasien90@elgeka.com', 'l', 'Pasien 90', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:36', '2015-11-18 06:13:36', '', 4, 4, 3, 5, 1),
(91, 'pasien91', '$2y$10$d1K8D.DTNdAVI7amNxiKme2MJj7DvLRqPHU4dcSs3eT5eKQ4nR8pS', 'pasien91@elgeka.com', 'l', 'Pasien 91', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:36', '2015-11-18 06:13:36', '', 2, 4, 2, 1, 1),
(92, 'pasien92', '$2y$10$hdzU/FY9IzsYWQPiTGrv8eePDCpvgflNfgivPRDaRgmvq9MbF11GG', 'pasien92@elgeka.com', 'l', 'Pasien 92', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:36', '2015-11-18 06:13:36', '', 2, 4, 4, 4, 4),
(93, 'pasien93', '$2y$10$T3HkZu4Ug3VDbdc8nOV1z.6Szq3kuSic90Cj48cy.6zQaVgcd5eVq', 'pasien93@elgeka.com', 'l', 'Pasien 93', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:37', '2015-11-18 06:13:37', '', 4, 4, 4, 5, 2),
(94, 'pasien94', '$2y$10$vmzzfC2sTFRlhXA77JygtupIby1PgA7shXFkq88e43Zk/1Boz3Zyu', 'pasien94@elgeka.com', 'l', 'Pasien 94', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:37', '2015-11-18 06:13:37', '', 1, 4, 3, 5, 1),
(95, 'pasien95', '$2y$10$TOt9wIUi/TNt.z2P8EoTaOQ64GizdATNSj/Yllvu2HZeQSTQkzCCq', 'pasien95@elgeka.com', 'l', 'Pasien 95', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:37', '2015-11-18 06:13:37', '', 5, 4, 4, 2, 2),
(96, 'pasien96', '$2y$10$cdl3IMHeQObb9kq2T7etHuJEcJx/wX373rWJkhUTyui0JkTqyWdTe', 'pasien96@elgeka.com', 'l', 'Pasien 96', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:37', '2015-11-18 06:13:37', '', 4, 5, 3, 5, 2),
(97, 'pasien97', '$2y$10$MDdj8ib4GFifh/nlYVeSHuz3B2MvXimghiJYL7YIzkCtzvSG/JM2K', 'pasien97@elgeka.com', 'l', 'Pasien 97', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:37', '2015-11-18 06:13:37', '', 6, 5, 3, 3, 1),
(98, 'pasien98', '$2y$10$tGyU7UWYwufVPqFIcrjHoeqb4YfF0/Ioab9s5EPdyurEiKqwhuA9S', 'pasien98@elgeka.com', 'l', 'Pasien 98', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:38', '2015-11-18 06:13:38', '', 6, 5, 2, 3, 4),
(99, 'pasien99', '$2y$10$n1JEN18VG2ATaGBBI.SZ6e5g/89YYTb6bxLw4JEp68JnKQoFclSQy', 'pasien99@elgeka.com', 'l', 'Pasien 99', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:38', '2015-11-18 06:13:38', '', 1, 6, 4, 5, 1),
(100, 'pasien100', '$2y$10$8tb4LkSgxU71HU5W7ETdOeAW4W8E7p7eE.fL6Ssn5HOc2MzY8nfYC', 'pasien100@elgeka.com', 'l', 'Pasien 100', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:38', '2015-11-18 06:13:38', '', 3, 4, 2, 5, 1),
(101, 'pasien101', '$2y$10$EHDbrR4t0pCzchOfysuvzO2GYac10.iX.oPkjdy1RxLzkk4ah8b0i', 'pasien101@elgeka.com', 'l', 'Pasien 101', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:38', '2015-11-18 06:13:38', '', 3, 4, 4, 2, 1),
(102, 'pasien102', '$2y$10$KJKWuFHySZMwrOWZ7qdbPOdiVeXlhSniqpJDz3C1D2QJ0pnXkGIWC', 'pasien102@elgeka.com', 'l', 'Pasien 102', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:38', '2015-11-18 06:13:38', '', 3, 5, 3, 4, 4),
(103, 'pasien103', '$2y$10$zNCOc/NCBXh4MM3KZLNLle3CeB3MkTehatEupq0EgX6HIiejjas5q', 'pasien103@elgeka.com', 'l', 'Pasien 103', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:39', '2015-11-18 06:13:39', '', 3, 5, 3, 3, 1),
(104, 'pasien104', '$2y$10$aXwcQ3w6MTRwRhBuWVIvWO1f58bkLp/ovRtqBIGzAtmH2LioaFu0S', 'pasien104@elgeka.com', 'l', 'Pasien 104', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:39', '2015-11-18 06:13:39', '', 6, 5, 2, 2, 4),
(105, 'pasien105', '$2y$10$wbEDkJlLTg0Ypaf8wfW7BeJ0OlHpMxWBBOdfxBLw4d6A3VC2x4q6K', 'pasien105@elgeka.com', 'l', 'Pasien 105', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:39', '2015-11-18 06:13:39', '', 2, 5, 2, 2, 2),
(106, 'pasien106', '$2y$10$RmmKVsvxHBnju0z0tNC1seOdA/9p4LpuB/KH4BMn5kLJluLtObU4S', 'pasien106@elgeka.com', 'l', 'Pasien 106', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:39', '2015-11-18 06:13:39', '', 6, 5, 3, 3, 4),
(107, 'pasien107', '$2y$10$vEKytUgtIgckxnaQEyzP9.7A8GYWAFRA.H7RUOYUd7dn3jo/r6Rpi', 'pasien107@elgeka.com', 'l', 'Pasien 107', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:39', '2015-11-18 06:13:39', '', 5, 6, 3, 4, 3),
(108, 'pasien108', '$2y$10$nhdNslmayC.t7ciGQwOFye4Duvi0PuEZMqkVDnNsQSYG5YQ7e5YCi', 'pasien108@elgeka.com', 'l', 'Pasien 108', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:40', '2015-11-18 06:13:40', '', 2, 5, 2, 5, 2),
(109, 'pasien109', '$2y$10$XVf1ibcx0KNq84wnnbxTb.bnZ3cnRONVy0HlH2XXQ26v8m/CIhD0.', 'pasien109@elgeka.com', 'l', 'Pasien 109', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:40', '2015-11-18 06:13:40', '', 4, 4, 4, 5, 2),
(110, 'pasien110', '$2y$10$cOuHkmorc39221PbCHXxTOzctjA/J1Klqzf29yhSp0g6NSc9Ugq62', 'pasien110@elgeka.com', 'l', 'Pasien 110', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:40', '2015-11-18 06:13:40', '', 3, 6, 4, 5, 2),
(111, 'pasien111', '$2y$10$yoiSqxBeZcwsZKiVUd2sYexaX8TTlxrIpxjxoI1w3jc/ufAyTHVM.', 'pasien111@elgeka.com', 'l', 'Pasien 111', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:40', '2015-11-18 06:13:40', '', 4, 4, 2, 5, 2),
(112, 'pasien112', '$2y$10$G28otu1uup6RKaXcenmI3eeCLGeZSkrmKr1YWaxELhuzDC5L03cbe', 'pasien112@elgeka.com', 'l', 'Pasien 112', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:40', '2015-11-18 06:13:40', '', 6, 5, 2, 4, 2),
(113, 'pasien113', '$2y$10$YZCb.Cs9/HpmcQclSYGRy.ddcS2KLHg36Xps2FNyG4LD/X/1mlFwe', 'pasien113@elgeka.com', 'l', 'Pasien 113', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:41', '2015-11-18 06:13:41', '', 1, 4, 3, 1, 1),
(114, 'pasien114', '$2y$10$A.5xJ8XGnXPxtBUH6fAE/.BMHVKGEW9OaA/bCs.7p0uj/dY0Wh9EC', 'pasien114@elgeka.com', 'l', 'Pasien 114', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:41', '2015-11-18 06:13:41', '', 1, 5, 2, 5, 3),
(115, 'pasien115', '$2y$10$GE880ny/iSpRZjhDR5lGJeEtdOJVz1x96s7TCvveXA7wG6wqb9LYi', 'pasien115@elgeka.com', 'l', 'Pasien 115', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:41', '2015-11-18 06:13:41', '', 2, 6, 2, 5, 3),
(116, 'pasien116', '$2y$10$3k34juSzhzEQ.nqylvL.ie/ay1.IlWSmEBqDDeqyPDF0jPzh0VkIy', 'pasien116@elgeka.com', 'l', 'Pasien 116', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:41', '2015-11-18 06:13:41', '', 2, 5, 4, 2, 2),
(117, 'pasien117', '$2y$10$T6vm3Bubo99ijsCt4ybkeev4foBQ9BJyFOtcm6lqh3YYIw.E0iuUK', 'pasien117@elgeka.com', 'l', 'Pasien 117', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:41', '2015-11-18 06:13:41', '', 1, 4, 4, 2, 1),
(118, 'pasien118', '$2y$10$vsQwEPWbQva12H7jz3qH/ucnn6mgo8QPPHFpF4P5f6Afopb6cWGca', 'pasien118@elgeka.com', 'l', 'Pasien 118', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:42', '2015-11-18 06:13:42', '', 5, 6, 2, 2, 1),
(119, 'pasien119', '$2y$10$yBOc6HcI5EtomQwWpxlRCOzoC4avR1nBZlofvvQF1EjyUzOFIfE7C', 'pasien119@elgeka.com', 'l', 'Pasien 119', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:42', '2015-11-18 06:13:42', '', 4, 6, 3, 1, 2),
(120, 'pasien120', '$2y$10$CT702sTF.doEEJ6ySXYtgeDYXUOWtHXqLU19QnkhdgHAhxrwZVhW6', 'pasien120@elgeka.com', 'l', 'Pasien 120', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:42', '2015-11-18 06:13:42', '', 2, 5, 2, 4, 1),
(121, 'pasien121', '$2y$10$yC5A/nzEG4u.S9wYIFGSA.tNpOQwfRXl9.YWrGZdIehcHQa8dfTyi', 'pasien121@elgeka.com', 'l', 'Pasien 121', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:42', '2015-11-18 06:13:42', '', 5, 4, 2, 4, 3),
(122, 'pasien122', '$2y$10$q7eMHhtmSSCihNz9zy43cO.wFLeco.GYW7yMgeeXdE/GakCCED0RC', 'pasien122@elgeka.com', 'l', 'Pasien 122', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:42', '2015-11-18 06:13:42', '', 5, 4, 2, 3, 4),
(123, 'pasien123', '$2y$10$cxjBp0kPk/MPnrf/7VsSZe9Sw8454lqhub98t2Emzzw9k2iBqzPYK', 'pasien123@elgeka.com', 'l', 'Pasien 123', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:43', '2015-11-18 06:13:43', '', 1, 5, 2, 3, 2),
(124, 'pasien124', '$2y$10$j7XLUPQrlu05E8cS4KMJJugPeP/svi89OBYlMmhEreYDqGxQEXTty', 'pasien124@elgeka.com', 'l', 'Pasien 124', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:43', '2015-11-18 06:13:43', '', 5, 4, 4, 4, 2),
(125, 'pasien125', '$2y$10$GQIwnt91JPGk3k.z/24e9O3gggvibfC/GRT48TcsbihwLt0C4Kmei', 'pasien125@elgeka.com', 'l', 'Pasien 125', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:43', '2015-11-18 06:13:43', '', 5, 4, 4, 5, 3),
(126, 'pasien126', '$2y$10$k8TUWHiku726zAn8RfwMs.E.dC9awZqSqCo8S4FDkKUQbI.zVPYcu', 'pasien126@elgeka.com', 'l', 'Pasien 126', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:43', '2015-11-18 06:13:43', '', 2, 5, 3, 5, 1),
(127, 'pasien127', '$2y$10$luGKWxtXvs0qEdSPHRyzs.AOMUfinku8/HexMjdVuRV6eFwg7dvoG', 'pasien127@elgeka.com', 'l', 'Pasien 127', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:43', '2015-11-18 06:13:43', '', 1, 5, 3, 1, 3),
(128, 'pasien128', '$2y$10$xrHHS74iLbY0Rdq3hLT2kuI224kTnbAjBaf6L7Thni1vjT3vG/KLS', 'pasien128@elgeka.com', 'l', 'Pasien 128', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:43', '2015-11-18 06:13:43', '', 6, 6, 4, 3, 2),
(129, 'pasien129', '$2y$10$5ey0N4IFhmO9XYW07ezu2ueXLSOT/ZGyPlA9cpXdngvWhEYyku9A.', 'pasien129@elgeka.com', 'l', 'Pasien 129', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:44', '2015-11-18 06:13:44', '', 1, 4, 2, 4, 1),
(130, 'pasien130', '$2y$10$ewv.tLRRS1IuCui216e.euC2UewWOK3QUIr5UfFrjMMoXVevNCngK', 'pasien130@elgeka.com', 'l', 'Pasien 130', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:44', '2015-11-18 06:13:44', '', 5, 5, 4, 4, 4),
(131, 'pasien131', '$2y$10$waUNg2UuByOsNzL/qXHnHOgPAnIpYuvXbLR/5//hsq1LkfraO4YxS', 'pasien131@elgeka.com', 'l', 'Pasien 131', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:44', '2015-11-18 06:13:44', '', 1, 4, 2, 4, 1),
(132, 'pasien132', '$2y$10$QSzwavX.amctYcDH5NXYNOMbUfkIkOXPSBHc5CKAUbauiyNlmw6fO', 'pasien132@elgeka.com', 'l', 'Pasien 132', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:44', '2015-11-18 06:13:44', '', 5, 6, 2, 5, 1),
(133, 'pasien133', '$2y$10$kXN8wItgJysoJJq9ms8i8OfBrf.HTX7.ibwe0Qf1qM00FPEhSSHXW', 'pasien133@elgeka.com', 'l', 'Pasien 133', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:44', '2015-11-18 06:13:44', '', 4, 5, 4, 4, 2),
(134, 'pasien134', '$2y$10$W3aEpbD1JJHWl3SrbTwl4.DetR3okt1TY2hQbSSddWwK2v6fyzqV2', 'pasien134@elgeka.com', 'l', 'Pasien 134', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:45', '2015-11-18 06:13:45', '', 4, 4, 2, 2, 1),
(135, 'pasien135', '$2y$10$R4WKU1CT1fKRgi3KK.83oOAoccLobeXf06fV5UVT2cJh7xxN78ZtW', 'pasien135@elgeka.com', 'l', 'Pasien 135', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:45', '2015-11-18 06:13:45', '', 5, 5, 4, 4, 4),
(136, 'pasien136', '$2y$10$pr5vzhG1b.4ID1FsoA.RBO7Jfu5fqiu.d9k0.hIV4XcvQtgafxBt6', 'pasien136@elgeka.com', 'l', 'Pasien 136', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:45', '2015-11-18 06:13:45', '', 1, 4, 4, 4, 3),
(137, 'pasien137', '$2y$10$vSE.HY4ZHxq8uM8zetJJju.v7ZWXk7dQ78htRwN/ugbj3zMg2KoVa', 'pasien137@elgeka.com', 'l', 'Pasien 137', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:45', '2015-11-18 06:13:45', '', 1, 4, 4, 5, 1),
(138, 'pasien138', '$2y$10$ANF5I.KNIxSxHczITfSHJurs7gZAStO3BHIQ0i3/P/kqYjEZIEg6u', 'pasien138@elgeka.com', 'l', 'Pasien 138', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:45', '2015-11-18 06:13:45', '', 5, 6, 4, 5, 3),
(139, 'pasien139', '$2y$10$u487dQ.TigRt8djUlBi9ZuJIaRU3j7/HSHVSKf8Hdme0se4yiolOu', 'pasien139@elgeka.com', 'l', 'Pasien 139', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:45', '2015-11-18 06:13:45', '', 2, 5, 3, 2, 4),
(140, 'pasien140', '$2y$10$s5acR6IXRtRawQruo39ml.8r.KK1tLZHDmmR8CqaqlNqPjMtU9/6u', 'pasien140@elgeka.com', 'l', 'Pasien 140', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:46', '2015-11-18 06:13:46', '', 2, 6, 4, 5, 2),
(141, 'pasien141', '$2y$10$d03AilS/Ao5O/SuEM2PxqOF02l8ACfgzlwcuFNj82Ib62stgcrJKa', 'pasien141@elgeka.com', 'l', 'Pasien 141', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:46', '2015-11-18 06:13:46', '', 2, 5, 4, 3, 4),
(142, 'pasien142', '$2y$10$hVKlNp2RP/0vPyjktQwOzOpj3JtGhJt6KB3ltVCRsmd2K7y7RwLLe', 'pasien142@elgeka.com', 'l', 'Pasien 142', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:46', '2015-11-18 06:13:46', '', 4, 4, 2, 5, 4),
(143, 'pasien143', '$2y$10$4C08NMd4eWi274thsyfgCOqWUB8N5PCuEVO2BL.33deV6Sg9kMUAq', 'pasien143@elgeka.com', 'l', 'Pasien 143', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:46', '2015-11-18 06:13:46', '', 4, 6, 3, 5, 2),
(144, 'pasien144', '$2y$10$UZ8SkudUY/aZ.uPVhbQE4uGA6.B0He.gWsb0lzX2GwVLzq2yg4X.i', 'pasien144@elgeka.com', 'l', 'Pasien 144', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:46', '2015-11-18 06:13:46', '', 4, 4, 3, 4, 1),
(145, 'pasien145', '$2y$10$pqgJSaJLHaW3EAT7gp1k5.c6leO4xD9Eou6qWu6Sjws..17RJybYC', 'pasien145@elgeka.com', 'l', 'Pasien 145', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:47', '2015-11-18 06:13:47', '', 4, 6, 3, 3, 3),
(146, 'pasien146', '$2y$10$GstHgRt15u/bPDDbyYtQFu9GAHOm61GqUtKpuLWdnho.3sJvnKgp2', 'pasien146@elgeka.com', 'l', 'Pasien 146', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:47', '2015-11-18 06:13:47', '', 6, 5, 4, 3, 1),
(147, 'pasien147', '$2y$10$odkRqHBwguRZNnIRLKx0suY.Mxm.DtrtT7aRBPy9AhxYAHAwqpb7O', 'pasien147@elgeka.com', 'l', 'Pasien 147', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:47', '2015-11-18 06:13:47', '', 1, 4, 2, 3, 4),
(148, 'pasien148', '$2y$10$uNReTMt4o9zoAIdVAeBnAucoD/cts7j0XNg0/NA/kfbocC0Rpzo5C', 'pasien148@elgeka.com', 'l', 'Pasien 148', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:47', '2015-11-18 06:13:47', '', 3, 6, 3, 5, 3),
(149, 'pasien149', '$2y$10$4/18YiUElJC4XoPYQMGrL.Ab4xT1mLbQob9XePEmgrOHcFJ73aLTS', 'pasien149@elgeka.com', 'l', 'Pasien 149', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:48', '2015-11-18 06:13:48', '', 4, 5, 3, 1, 3),
(150, 'pasien150', '$2y$10$VKBHtr.kuNABU9/cDSYf.u0IOLRil4nRgOFFpStQF.iPFnV.QLjNS', 'pasien150@elgeka.com', 'l', 'Pasien 150', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:48', '2015-11-18 06:13:48', '', 6, 4, 4, 1, 1),
(151, 'pasien151', '$2y$10$y2i8xjZXX6Fi7h49GRzWC.OCXF9ZaR98h/vACu.JpHX4.6zQLhtK2', 'pasien151@elgeka.com', 'l', 'Pasien 151', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:48', '2015-11-18 06:13:48', '', 1, 5, 2, 1, 1),
(152, 'pasien152', '$2y$10$D3q87WZjnOfgpW8VSwpAG.malncY0SLazAg0fu5QWnUT9YNxSYflO', 'pasien152@elgeka.com', 'l', 'Pasien 152', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:48', '2015-11-18 06:13:48', '', 5, 6, 3, 2, 1),
(153, 'pasien153', '$2y$10$ZhbSF9XQ5fVu3sfR6VG/veOHoB9Rk8/nPVy5rUiXwkk4Tu8anmTMC', 'pasien153@elgeka.com', 'l', 'Pasien 153', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:48', '2015-11-18 06:13:48', '', 2, 4, 3, 4, 4),
(154, 'pasien154', '$2y$10$hYdqEIF5Yl1B9Yxdk7SmXeA9h3EYEXpat/R.ecVqGDzoqfwlU7F8e', 'pasien154@elgeka.com', 'l', 'Pasien 154', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:49', '2015-11-18 06:13:49', '', 5, 4, 4, 5, 3),
(155, 'pasien155', '$2y$10$oFOjnz3VlaKJytQ5MBSaCefVEmE1Am9W5k88/UysPK4iDz46h5Gki', 'pasien155@elgeka.com', 'l', 'Pasien 155', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:49', '2015-11-18 06:13:49', '', 5, 6, 2, 1, 4),
(156, 'pasien156', '$2y$10$Z7pjPwMOEM1wPtedMnQcTed4HRPx/TA0NqpjdLHBO9h.q7iP1WuvO', 'pasien156@elgeka.com', 'l', 'Pasien 156', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:49', '2015-11-18 06:13:49', '', 6, 5, 2, 3, 2),
(157, 'pasien157', '$2y$10$zacYpsAer7lgr3y8JYeAHOIzYxzEHhfcUP9feIrhu07qnSzxTnMai', 'pasien157@elgeka.com', 'l', 'Pasien 157', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:49', '2015-11-18 06:13:49', '', 3, 5, 3, 2, 4),
(158, 'pasien158', '$2y$10$XJkdMk/uspW27hw9aG3MH.x1gO/IMbpZ3aDLCDUV/uLibF1a.shKu', 'pasien158@elgeka.com', 'l', 'Pasien 158', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:49', '2015-11-18 06:13:49', '', 1, 4, 4, 1, 1),
(159, 'pasien159', '$2y$10$90NifGT6Hic0W/NchrCV9ewo3Q0ipOXXs6zSmu8gP5blKU2ED3G3u', 'pasien159@elgeka.com', 'l', 'Pasien 159', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:49', '2015-11-18 06:13:49', '', 1, 4, 3, 5, 3),
(160, 'pasien160', '$2y$10$unE0.xPKmDKS7vFJsEet9u5JGE6eoJWrbS5RsoDm4k9OqibvK26qC', 'pasien160@elgeka.com', 'l', 'Pasien 160', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:50', '2015-11-18 06:13:50', '', 2, 5, 2, 5, 1),
(161, 'pasien161', '$2y$10$BGiXX10eLhemNNJNdPG4FecMsComCIFO5guBhBoP6zfTj5Fl0JP9m', 'pasien161@elgeka.com', 'l', 'Pasien 161', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:50', '2015-11-18 06:13:50', '', 4, 6, 2, 4, 3),
(162, 'pasien162', '$2y$10$RgltnVhKziDfe.cHxudv/.OYy58NHL473oa4xY.9lgNsHEgYxM9/e', 'pasien162@elgeka.com', 'l', 'Pasien 162', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:50', '2015-11-18 06:13:50', '', 2, 5, 2, 4, 3),
(163, 'pasien163', '$2y$10$o6VlMewX/GlbmjhakIJBXuwU6G6sUhLV3jJZYpMQMAtHTy2wnleg2', 'pasien163@elgeka.com', 'l', 'Pasien 163', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:50', '2015-11-18 06:13:50', '', 3, 6, 3, 2, 4),
(164, 'pasien164', '$2y$10$93Pm1odz6nZKszpzxX88iuO8R.EG7y/JZXseboskDiPPyptNVDbSy', 'pasien164@elgeka.com', 'l', 'Pasien 164', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:50', '2015-11-18 06:13:50', '', 5, 6, 3, 4, 1),
(165, 'pasien165', '$2y$10$xsgD527jAQZxuj5DZVxZ.uVI.p62EMoYEISTaJ3uIw1qjX2sLVcMW', 'pasien165@elgeka.com', 'l', 'Pasien 165', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:50', '2015-11-18 06:13:50', '', 3, 4, 2, 1, 4),
(166, 'pasien166', '$2y$10$ycENr2/reulQs2gan8FeYOmbO2Gv2FwrPM88M3xmoJxF2CCoSo20.', 'pasien166@elgeka.com', 'l', 'Pasien 166', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:51', '2015-11-18 06:13:51', '', 6, 5, 4, 1, 3),
(167, 'pasien167', '$2y$10$lvhBcWfQDCcvR7gdhaHiguaFAkRdOmws3TWa1OtDcSHbDKZpw59Zu', 'pasien167@elgeka.com', 'l', 'Pasien 167', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:51', '2015-11-18 06:13:51', '', 6, 4, 3, 4, 4),
(168, 'pasien168', '$2y$10$KlkGHAF6efo4gzvpOLsP7.NnI2JH1mTZrQt4pspBTXl/jXL74KObe', 'pasien168@elgeka.com', 'l', 'Pasien 168', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:51', '2015-11-18 06:13:51', '', 4, 4, 4, 3, 2),
(169, 'pasien169', '$2y$10$NksAntzfSRA4fq6o5Qc4MOcZph2K1mWyaSFtEvVAz1Baf5pT2s9FK', 'pasien169@elgeka.com', 'l', 'Pasien 169', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:51', '2015-11-18 06:13:51', '', 2, 5, 3, 4, 2),
(170, 'pasien170', '$2y$10$s.70LMegPpdIvQVjCGZDNuVfmHxu7I.BezcNXYB8b75LSpJ3Clxuq', 'pasien170@elgeka.com', 'l', 'Pasien 170', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:51', '2015-11-18 06:13:51', '', 2, 4, 3, 5, 1),
(171, 'pasien171', '$2y$10$LymN7CEZpsrGUY8/OjbYeOsjK02cLrcOxolZHmCcK9kWIcWAuvR1y', 'pasien171@elgeka.com', 'l', 'Pasien 171', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:52', '2015-11-18 06:13:52', '', 3, 5, 2, 4, 4),
(172, 'pasien172', '$2y$10$l/GZuF8captL5PiFHoTts.4y14wdmko18Q4XYoXhLgFG5CIDNebfO', 'pasien172@elgeka.com', 'l', 'Pasien 172', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:52', '2015-11-18 06:13:52', '', 2, 4, 2, 3, 1),
(173, 'pasien173', '$2y$10$45POOOJaolp9H83t0BiDdu8UCiJ/QOjr1k3TP8YdKD2imnVEj79wK', 'pasien173@elgeka.com', 'l', 'Pasien 173', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:52', '2015-11-18 06:13:52', '', 4, 5, 2, 5, 4),
(174, 'pasien174', '$2y$10$ZRcrH6.T8WuZ3b.asWpJJuN9pWENtN/GKZEkA1GMzBMT1yuYyaICm', 'pasien174@elgeka.com', 'l', 'Pasien 174', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:52', '2015-11-18 06:13:52', '', 1, 4, 2, 5, 2),
(175, 'pasien175', '$2y$10$IzYwcxaD/ZCiVIZRrw1H2uKKm0usWBOLn3gwwvGC5.8qPdU/sBQfe', 'pasien175@elgeka.com', 'l', 'Pasien 175', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:52', '2015-11-18 06:13:52', '', 3, 6, 4, 5, 1),
(176, 'pasien176', '$2y$10$ckfSxz5fTcM.h1SmPxhYDeumQuIfq8cD7IZoW43yBc4Vd.lf.pC32', 'pasien176@elgeka.com', 'l', 'Pasien 176', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:52', '2015-11-18 06:13:52', '', 2, 6, 3, 2, 3),
(177, 'pasien177', '$2y$10$eT4UeqAqH3Kkv.hfTAluye1dWLKiLXRH26Vl5qdO7T1zORwnrqqpy', 'pasien177@elgeka.com', 'l', 'Pasien 177', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:53', '2015-11-18 06:13:53', '', 1, 6, 4, 2, 3),
(178, 'pasien178', '$2y$10$lFnddea7uaeHtIuV3qYJAOVKCT8BexpoHdJ7UYGHIKqAdnwava1e6', 'pasien178@elgeka.com', 'l', 'Pasien 178', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:53', '2015-11-18 06:13:53', '', 6, 4, 3, 4, 3),
(179, 'pasien179', '$2y$10$xCchIxShz275.UEd91E2CO.RQw37GHagjaJOUALCRIL4.75Ypc8be', 'pasien179@elgeka.com', 'l', 'Pasien 179', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:53', '2015-11-18 06:13:53', '', 3, 4, 2, 4, 3),
(180, 'pasien180', '$2y$10$dJQWzO9tJvw8pUbjtQZVTuCKx43HJewT4ihkTkiG9J74n5kdSiAta', 'pasien180@elgeka.com', 'l', 'Pasien 180', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:53', '2015-11-18 06:13:53', '', 3, 6, 2, 2, 4),
(181, 'pasien181', '$2y$10$s0g6EJmJAWBGLvkjPry9fuh4k9F09sbk7X/ebesUeYhsDaOxpRzz6', 'pasien181@elgeka.com', 'l', 'Pasien 181', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:53', '2015-11-18 06:13:53', '', 2, 5, 3, 5, 3);
INSERT INTO `users` (`id`, `username`, `password`, `email`, `jk`, `nama_pasien`, `ttl_tl`, `tgl_masuk`, `status`, `alamat`, `telp_rumah`, `hp1`, `hp2`, `role`, `remember_token`, `created_at`, `updated_at`, `ttl_t`, `rs_id`, `asuransi_id`, `penyakit_id`, `kelurahan_id`, `dokter_id`) VALUES
(182, 'pasien182', '$2y$10$dNslcd1HP6eTgJkRiTKl3egecgZBHoJ.7YS4Bl2m2nH1AOTyOwNme', 'pasien182@elgeka.com', 'l', 'Pasien 182', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:53', '2015-11-18 06:13:53', '', 6, 4, 4, 4, 2),
(183, 'pasien183', '$2y$10$5NrHPpZqpYnKrgcZjk5BjuA6UDpRHZlQJx92qwBNTLNwqN.ML/uc.', 'pasien183@elgeka.com', 'l', 'Pasien 183', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:54', '2015-11-18 06:13:54', '', 4, 6, 2, 2, 2),
(184, 'pasien184', '$2y$10$rfmIyMNQs9Mn8I2gm6mkIOa51495RRjy/c5IwDpBXNJ1ocEVW50zC', 'pasien184@elgeka.com', 'l', 'Pasien 184', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:54', '2015-11-18 06:13:54', '', 1, 4, 3, 3, 4),
(185, 'pasien185', '$2y$10$dGPOOBS8MZf2O4nS/eNQouf.vxF9JwO5nKkE42dXSnKuEP3X2Jpkq', 'pasien185@elgeka.com', 'l', 'Pasien 185', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:54', '2015-11-18 06:13:54', '', 3, 6, 4, 5, 1),
(186, 'pasien186', '$2y$10$YfomjPsnVKJSoy1XNKQ/BODQnYqhVhPEMMRcKpwCmg..//dWxRDS2', 'pasien186@elgeka.com', 'l', 'Pasien 186', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:54', '2015-11-18 06:13:54', '', 3, 4, 3, 4, 3),
(187, 'pasien187', '$2y$10$eubdIxl.orGFXiSpxu.q4.LZ053CGcf3AgSblazNAgTDwTcpr5FWm', 'pasien187@elgeka.com', 'l', 'Pasien 187', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:54', '2015-11-18 06:13:54', '', 4, 6, 4, 4, 1),
(188, 'pasien188', '$2y$10$LRJClSan/UAzPp64Xi4nAu0QisA0VgQ5m9/6gbS19iH76YchBr/8u', 'pasien188@elgeka.com', 'l', 'Pasien 188', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:55', '2015-11-18 06:13:55', '', 5, 5, 2, 1, 2),
(189, 'pasien189', '$2y$10$llC84ggDELprW80gGXDEqeOrOOUp94x0J86EYxMQmRRY9L5BAy2WW', 'pasien189@elgeka.com', 'l', 'Pasien 189', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:55', '2015-11-18 06:13:55', '', 1, 4, 4, 3, 1),
(190, 'pasien190', '$2y$10$FAO/vKw8qoA72PyVq9zZK.viiqugWPgo9.E8Y9Kuv53bo0VwFoER.', 'pasien190@elgeka.com', 'l', 'Pasien 190', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:55', '2015-11-18 06:13:55', '', 4, 5, 3, 1, 3),
(191, 'pasien191', '$2y$10$DyvzbgBx5RRD.UJufY1I1uYFcp3wacoFReBAV5mC72bdI4MSq5L.S', 'pasien191@elgeka.com', 'l', 'Pasien 191', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:55', '2015-11-18 06:13:55', '', 4, 5, 3, 4, 3),
(192, 'pasien192', '$2y$10$kbwFPqyEnkPKXCxxud2DR.J6tqqhjuLSFOjK7HoqZFVgEN7iL87r2', 'pasien192@elgeka.com', 'l', 'Pasien 192', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:55', '2015-11-18 06:13:55', '', 4, 4, 2, 5, 3),
(193, 'pasien193', '$2y$10$eo3j8Dz.Pc6PtM3./YBBJ.JPFzBs5nWLztpPcyLyh2MpSFjQ2q8My', 'pasien193@elgeka.com', 'l', 'Pasien 193', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:56', '2015-11-18 06:13:56', '', 6, 6, 2, 1, 2),
(194, 'pasien194', '$2y$10$IzMb3ngArVgnQ6GYdPBJ4.h7nsBi2QWu3ZU82ysCGRPHFD8YIzKxS', 'pasien194@elgeka.com', 'l', 'Pasien 194', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:56', '2015-11-18 06:13:56', '', 6, 4, 3, 4, 3),
(195, 'pasien195', '$2y$10$cBnPujFvLFO1HF9O6RBcfu2TEaBglC4qT1lvvbrmQOJiOCTF3qaE.', 'pasien195@elgeka.com', 'l', 'Pasien 195', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:56', '2015-11-18 06:13:56', '', 4, 4, 2, 5, 3),
(196, 'pasien196', '$2y$10$d6gr37iAqGvk/VF3D3inGeVk8Ls.8t8eMDhxkkSsySSpB22fKfh0q', 'pasien196@elgeka.com', 'l', 'Pasien 196', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:56', '2015-11-18 06:13:56', '', 1, 5, 4, 4, 2),
(197, 'pasien197', '$2y$10$AYwbYKCFrg3mqsSIBtiSVOkD48bJSIsmQV0SVTTnj3UDJi3kksg2G', 'pasien197@elgeka.com', 'l', 'Pasien 197', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:56', '2015-11-18 06:13:56', '', 2, 4, 2, 4, 2),
(198, 'pasien198', '$2y$10$ua9Ch6pq8UeOGDS82hwiAeowrncBPwECKe9.SxNKVesdSbpzXBTii', 'pasien198@elgeka.com', 'l', 'Pasien 198', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:57', '2015-11-18 06:13:57', '', 3, 4, 3, 5, 4),
(199, 'pasien199', '$2y$10$PAruBd5.C6SArVYd.6qrQ.F5e8bqL8fm9s2jOXaO70iWUkb1pDYcK', 'pasien199@elgeka.com', 'l', 'Pasien 199', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:57', '2015-11-18 06:13:57', '', 4, 5, 4, 2, 2),
(200, 'pasien200', '$2y$10$g8RQamaxV3wmdabzU8TChuBBPOpXifnJN1k0CblLgp0YhlxtiZsZa', 'pasien200@elgeka.com', 'l', 'Pasien 200', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Alamat rumah', '', '', '', '', NULL, '2015-11-18 06:13:57', '2015-11-18 06:13:57', '', 1, 4, 4, 1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
