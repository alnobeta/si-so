<?php
include ("modul/jpgraph.php");
include ("modul/jpgraph_line.php");
include ("modul/jpgraph_bar.php");

$datasurat = array();
$datapeminjaman = array();
// koneksi ke mysql

include ("dbConnect.php");

// query SQL untuk menampilkan nama negara dan jumlah prianya pada tahun 1990

 $query1 = mysql_query("SELECT * FROM surat_tugas");
 $query2 = mysql_query("SELECT * FROM surat_peminjaman_kelas");
 $jumlah_surat_tugas = mysql_num_rows($query1);
  $jumlah_surat_peminjaman_kelas = mysql_num_rows($query2);
 array_unshift($datasurat, $jumlah_surat_tugas);
 array_unshift($datapeminjaman, $jumlah_surat_peminjaman_kelas);

// membuat image dengan ukuran 400x200 px
$graph = new Graph(300,300,"auto");
$graph->img->SetMargin(80,30,30,40);    
$graph->SetScale("textlin");
$graph->SetShadow();

// menampilkan diagram batang untuk data pria dengan warna orange
// pada diagram batang ditampilkan value data
$bplot1 = new BarPlot($datasurat);
$bplot1->SetFillColor("orange");
$bplot1->SetWidth(40);
$bplot1->value->show();

// menampilkan diagram batang untuk data wanita dengan warna biru
// pada diagram batang ditampilkan value data
$bplot2 = new BarPlot($datapeminjaman);
$bplot2->SetFillColor("blue");
$bplot2->SetWidth(40);
$bplot2->value->show();

// mengelompokkan grafik batang berdasarkan pria dan wanita
$gbplot = new GroupBarPlot(array($bplot1,$bplot2));
$graph->Add($gbplot);

// membuat legend untuk keterangan pria dan wanita
$bplot1->SetLegend("Surat Tugas");
$bplot2->SetLegend("Surat Peminjaman ");
$graph->legend->Pos(0.05,0.5,"right","center");

// mengatur margin image
$graph->img->SetMargin(40,110,20,40);

// menampilkan title grafik dan nama masing-masing sumbu

$graph->xaxis->title->Set("Jenis Surat");
$graph->yaxis->title->Set("Jumlah");

// menampilkan nama negara ke sumbu x
//belum ditentukan 
$graph->xaxis->SetTickLabels($jumlah_surat_tugas);

// format font title grafik
$graph->title->SetFont(FF_FONT1,FS_BOLD);

// menampilkan efek shadow pada image
$graph->SetShadow();

// menampilkan image ke browser
$graph->Stroke();

?>
