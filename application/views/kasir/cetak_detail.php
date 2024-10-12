<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

	
<?php
$pdf = new FPDF('P','mm','A4');
        $pdf->AddPage();

        $pdf->SetFont('Times','B',10);
        $pdf->SetFillColor(184,134,11);
        $pdf->SetTextColor(0,0,0);

        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'FAKTUR PEMBAYARAN',0,1,'C');
        $pdf->Cell(190,7,'',0,1,'C');
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(170,7,'PT. BREXELLE',0,1,'L');
        $pdf->SetFont('Arial','',6);
        $pdf->Cell(190,1,'Jl. Reni Jaya Utara 1, Pd. Petir, Bojongsari, Kota Depok, Jawa Barat 16517',0,1,'L');
        $pdf->Cell(190,7,'Telp : (62+)859-4661-1125',0,1,'L');
        $pdf->SetFont('Arial','',8);
         $pdf->Cell(150,9,'No transaksi :',0,0,'R');
         $pdf->Cell(7,9,$record->notransaksi,0,0,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,10,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(10,6,'No',1,0,'C');
        $pdf->Cell(40,6,'Nama Customer',1,0,'C');
        $pdf->Cell(45,6,'Alamat',1,0,'C');
        $pdf->Cell(30,6,'Kode Barang',1,0,'C');
        $pdf->Cell(45,6,'Nama Barang',1,0,'C');
        $pdf->Cell(20,6,'Harga',1,1,'C');
        $pdf->SetFont('Arial','',10);
        

        $pdf->SetFont('Arial','',8);
        $pdf->Cell(10,6,'',1,0,'C');
        $pdf->Cell(40,6,$record->namacustomer,1,0,'C');
        $pdf->Cell(45,6,$record->alamat,1,0,'C');
        $pdf->Cell(30,6,$record->kodebarang,1,0,'C');
        $pdf->Cell(45,6,$record->namabarang,1,0,'C');
        $pdf->Cell(20,6,$record->harga,1,1,'R');
        $pdf->Cell(170,6,'Qty pemesanan',1,0,'L');
        $pdf->Cell(20,6,$record->qtypemesanan,1,1,'R');
        $pdf->Cell(170,6,'Total',1,0,'L');
        $pdf->Cell(20,6,$record->total,1,1,'R');
        $pdf->Cell(170,6,'Grand Total',1,0,'L');
        $pdf->Cell(20,6,$record->grandtotal,1,1,'R');
        $pdf->SetFont('Arial','',10);

        $pdf->SetFont('Arial','',10);
        $pdf->Cell(190,7,'',0,1,'R');
        $pdf->Cell(190,7,'Jakarta                         2018',0,0,'R');
        $pdf->Cell(190,7,'',0,1,'R');
        $pdf->Cell(190,7,'',0,1,'R');
        $pdf->Cell(190,7,'',0,1,'R');
        $pdf->Cell(190,7,'',0,1,'R');
        $pdf->Cell(175,7,'Kasir',0,1,'R');
        $pdf->SetFont('Arial','',10);

        $pdf->Output();