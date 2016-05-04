CREATE TABLE IF NOT EXISTS `surat_tugas` (
`id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pemohon` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `nama_perusahaan` varchar(60) COLLATE latin1_general_ci NOT NULL,
  `tujuan` varchar(40) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
ALTER TABLE `surat_tugas`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `surat_tugas`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;