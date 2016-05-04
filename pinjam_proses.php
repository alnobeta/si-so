<?php
error_reporting(0);
require('fpdf/fpdf.php');
include "formpeminjamaninventaris.html";
session_start();
$nama_pemohon = htmlentities($_POST['nama_pemohon']);
$tanggal = htmlentities($_POST['tanggal']);
$nama_perusahaan = htmlentities($_POST['nama_tempat']);
$jml_barang = htmlentities($_POST['jumlah_barang']);

 if(!empty($nama_pemohon) && !empty($nama_perusahaan) && !empty($jml_barang) ) {
		include "dbConnect.php";
			$hasil = mysql_query("INSERT INTO surat_peminjaman_kelas(nama_pemohon,nama_tempat,tujuan,tanggal) 
				VALUES('$nama_pemohon','$nama_perusahaan','$jml_barang','$tanggal')");
			if ($hasil){
				
				?>

				<script language="JavaScript">alert('sukses');
				document.location='formpeminjamaninventaris.html'</script>
				<?php
			}
			else{ 
				echo "<p>kiriman gagal</p>";
				?>
				<script language="JavaScript">alert('DATA TIDAK BERHASIL DIKIRIM');
				document.location='formpeminjamaninventaris.html?page=login'</script>
				<?php
			}
		}
	
else{ 
echo "Data yang akan dikirim tidak lengkap";}


class pdf extends FPDF{
	function letak($gambar){
	//memasukkan gambar untuk header
	$this->Image($gambar,10,10,25,25);
	//menggeser posisi sekarang
	}

	function judul($teks1, $teks2, $teks3, $teks4, $teks5){
	$this->Cell(25);
	$this->SetFont('Times','B','12');
	$this->Cell(0,5,$teks1,0,1,'C');
	$this->Cell(25);
	$this->SetFont('Times','B','15');
	$this->Cell(0,5,$teks2,0,1,'C');
	$this->Cell(25);
	$this->Cell(0,5,$teks3,0,1,'C');
	$this->Cell(25);
	$this->SetFont('Times','I','8');
	$this->Cell(0,5,$teks4,0,1,'C');
	$this->Cell(25);
	$this->Cell(0,2,$teks5,0,1,'C');
	}

	function garis(){
	$this->SetLineWidth(1);
	$this->Line(10,36,138,36);
	$this->SetLineWidth(0);
	$this->Line(10,37,138,37);
	}

	//menampilan tulisan PENGUMUMAN dan NOMOR
	   	function surat($hal, $nomor){
	        $this->Ln(8);
	        $this->SetFont('Times','B',16);
	        $this->Cell(137,5,$hal,0,1,'C');
	        $this->SetFont('Times','B',12);
	        $this->Cell(137,5,$nomor,0,1,'C');
	    }

	//isi surat
	    function body1($teks){
	        $this->Ln(3);
	        $this->SetFont('Times','',12);
	        for ($i=0;$i < count($teks);$i++)
	        $this->MultiCell(0,5,$teks[$i]);
	}
	function body2($tutup){
	        $this->Ln(2);
	        $this->SetFont('Times','',12);
	        for ($i=0;$i < count($tutup);$i++)
	        $this->MultiCell(0,5,$tutup[$i]);
	    }

	function tembusan($ctt){
	        $this->Ln(0);
	        $this->SetFont('Times','B',11);
	        $this->Cell(0,5,'Tembusan Kepada Yth.',0,1,'L');
	        $this->SetFont('Times','I',10);
	        for ($i=0;$i < count($ctt);$i++)
	        $this->MultiCell(0,3,$ctt[$i]);
	    }

	function idMahasiswa($nama_pemohon, $tanggal,$nama_perusahaan,$jml_barang){
	        $this->Ln(2);
	        $this->SetFont('Times','',12);
	        $this->Cell(15);
	        $this->Cell(10,5,'Nama :',0,0,'L');
	        $this->Cell(15);
	        $this->Cell(2,5,':',0,0,'L');
	        $this->Cell(5);
	        $this->Cell(1,5,$nama_pemohon,0,1,'L');
	        $this->Cell(15);
	        $this->Cell(10,5,'Tanggal :',0,0,'L');
	        $this->Cell(15);
	        $this->Cell(2,2,':',0,0,'L');
	        $this->Cell(5);
        	$this->Cell(1,5,$tanggal,0,1,'L');
        	$this->Cell(15);
        	$this->Cell(10,5,'Lokasi :',0,0,'L');
        	$this->Cell(15);
        	$this->Cell(2,5,':',0,0,'L');
        	$this->Cell(5);
        	$this->Cell(1,5,$nama_perusahaan,0,1,'L');
        	$this->Cell(15);
        	$this->Cell(10,5,'Jumlah barang :',0,0,'L');
        	$this->Cell(15);
        	$this->Cell(2,5,':',0,0,'L');
        	$this->Cell(5);
        	$this->Cell(1,5,$jml_barang,0,1,'L');
        	
        	}
	function dosen(){
	        $this->Ln(5);
	        $this->Cell(75);
	        $this->Cell(0,5,'Bagian Perlengkapan',0,1,'L');
	        $this->Cell(75);
	        $this->Cell(0,5,'Fakultas Ilmu Komputer,',0,1,'L');    
	    }
    function namadosen(){
        $this->Ln(20);
        $this->Cell(75);
        $this->SetFont('Times','B',12);
        $this->Cell(0,5,'Muhammad Risqi, S.ST.,M.TI',0,1,'L');
        $this->SetFont('Times','',12);
        $this->Cell(75);
        $this->Cell(0,5,'NIK. 86042116110426,',0,1,'L');
    }

	function dosen2(){
	        $this->Ln(3);
	        $this->Cell(10);
	        $this->Cell(0,5,'Bagian Perlengkapan',0,1,'L');
	        $this->Cell(10);
	        $this->Cell(0,5,'Fakultas Ilmu Komputer,',0,1,'L');    
	    }
    function namadosen2(){
        $this->Ln(20);
        $this->Cell(10);
        $this->SetFont('Times','B',12);
        $this->Cell(0,5,'Muhammad Risqi, S.ST.,M.TI',0,1,'L');
        $this->SetFont('Times','',12);
        $this->Cell(10);
        $this->Cell(0,5,'NIK. 86042116110426,',0,1,'L');
    }
	function legalitas($legal){
		$this->Ln(15);
		$this->SetFont('Arial','I',8);
		$this->Cell(0,3,$legal,0,1,'L');
	}
 }
$pdf = new pdf();

$pdf->AddPage('P', 'A5');
//meletakkan gambar
$pdf->letak('images/ptiik.jpg');
//meletakkan judul disamping logo diatas
$pdf->judul('KEMENTRIAN PENDIDIKAN DAN KEBUDAYAAN', 'UNIVERSITAS BRAWIJAYA','FAKULTAS ILMU KOMPUTER','Jl. Veteran No.8, Malang, 65145, Indonesia Telp. : +62-341-577911; Fax : +62-341-577911', 'Website : http://ptiik.ub.ac.id | E-Mail: ptiik@ub.ac.id');
//membuat garis ganda tebal dan tipis
$pdf->garis();
//membuat header surat dan penomoran
$pdf->surat('Peminjaman Inventaris', 'Nomor:     /UN10.36/AK/2015');

$teks = file('peminjamaninventaris.txt');
$pdf->body1($teks);
$pdf->idMahasiswa($nama_pemohon, $tanggal,$nama_perusahaan,$jml_barang);
//bodi surat 2
$teks2 = file('peminjamaninventaris2.txt');
$pdf->body2($teks2);

$teks3 = file('peminjamaninventaris3.txt');
$pdf->body2($teks3);
//$pdf->dosen2();

//$pdf->namadosen2();

$pdf->dosen();

$pdf->namadosen();

$date=date("d-M-Y  h:i:s");
$pdf->legalitas('printed on: '.$date );

$pdf->Output('suratpinjam.pdf');

?>
