<div id="exportContent">
<style>
    /*design table 1*/
.b, p, i{
    font-family: Arial;
    font-size: 10pt;
    line-height:2px;
}
.table1 {
    font-family: Arial;
    color: #232323;
    font-size: 10pt;
    border-collapse: collapse;
}
 
.table, td, th{
    font-family: Arial;
    /* font-size: 10pt; */
  border: 1px solid black;
  border-collapse: collapse;
}
h1 {
        font-family: Arial;
        border: 1px solid #ccc;
        color: #232323;
        font-size: 20px;
        text-align: center;
        text-decoration: underline;
      }
tt{
{background:grey;} /* style css3 untuk kolom kosong */
}
.cell-highlight {
  background-color: grey;
  font-weight: bold;
}
.col-2 p {
    width: 45%
}

.alignright {
    float:right;
}

.alignleft {
    float:left;
}
.clear{
   clear:both;
}
</style>
<?php
// fungsi buatRupiah
function buatRupiah($angka){
    $hasil = "Rp " . number_format($angka,2,',','.');
    return $hasil;
}?>
<html>
<head>
	<link rel="stylesheet" type="text/css">
</head>
<body>
	<h1></h1>
	<img src="data:image/png;base64,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" width="280px" style="margin: 1px;padding: 0px color:white"/> 
	<table class="table1">
    <?php foreach($sppa_kendaraan as $s) : ?>
		<tr>
        <td>Kepada</td>
        <th>: <?= $s['kepada'] ?></th>
        <td>Dari</td>
        <th>: <b>PT.BRI MULTIFINANCE INDONESIA</b></th>
		</tr>
        <td>UP</td>
        <th> </th>
        <td>Tanggal</td>
        <td>: <b><?= $s['tanggal'] ?></b></td>
        <tr>
        <td>No.Telp</td>
        <th> </th>
        <td>Halaman</td>
        <td>: <b>2</b></td>
        </tr>
        <td>Email</td>
        <th> </th>
        <td>LO/Group</td>
        <td>: <b><?= $s['staff'] ?></b></td>
        <?php endforeach ?>
	</table>	

    <h1>FORM APLIKASI ASURANSI  <?= $s['tipe'] ?></h1>

    <table class="table1"> 
        <tr>
        <td>Nama Tertanggung :</td>
        <th><p>PT. BRI MULTIFINANCE INDONESIA QQ <?= $s['qq'] ?></p></th>
        <td width="250px">Contact No:</td>
        </tr> 
        <td>Wilayah Okupasi (truk) :</td>
        <td>Zona Wilayah : <?= $s['zona_wilayah'] ?></td>
        <td>Plat <b><?= $s['plat_no']?> (<?= $s['jenis_plat']?>)</td>
    </table>

    <?php 
    $prio =  date('Y')+$s['yearly'];
    ?>
    <p style="font-family: Arial">Periode: _____________<?php echo date('Y');?> s/d ___________<?= $prio ?> (periode 1 Tahun)(Leasing 4 Tahun)</p>
            <p>(jam 12.00 siang waktu setempat) 
    
   <p><b>Penggunaan Objek Pertanggungan: <input type="checkbox" checked></b><?= $s['objek_pertanggungan']?></p> 
   <p>apabila unit yang dipertanggungkan akan disewakan ke pihak ketiga pada saat berjalannya polis,</p>
   <p>Lessee wajib memberitahukan kepada Lessor agar segera dibuatkan perubahannya.</p>
   <p><b>Metode Pembayaran:  <input type="checkbox" checked /> </b><?= $s['metode_bayar']?></p> 
    
   <p>
   Suku pemi/Nilai :</p>
   pertanggungan/Nilai</p>
   premium/
   (setiap unit/kejadian)
    <br>
    <table class="table1"> 
    <tr>
        <td>Rate (suku premi) dan Zona</td>
        <th>Zona :<?= $s['zona_wilayah'] ?></th>
    </tr>
    <th>A. <?= $s['rate'] ?></th>
    <th><?= $s['jml_rate'] ?></th>
    <tr>
    <th>B. Rate TLO</th>
    <th></th>
    </tr>
    <th>Rate Flood, windstrom</th>
    <td style="text-align:center">-</td>
    <tr>
    <th>Rate Eartquake & tsunami</th>
    <td style="text-align:center">N/A</td>
    </tr>
    <th>Rate RSCC</th>
    <td style="text-align:center">-</td>
    <tr>
    <th>Rate Terorism Sabotage</th>
    <td style="text-align:center">N/A</td>
    <tr>
    <th>Rate (umur>5th-Compre)</th>
    <td></td>
    </tr>
    <tr>
    <th>TPL </th>
    <?php foreach($sppa_kendaraan as $s) : ?>
    <td style="text-align:center"> <b>TPL sebesar <?= buatRupiah($s['nominal'])?></b> </td>
    <tr>
    <th></th>
    <th> <b>PA Driver dan Penumpang <?= buatRupiah($s['pa']) ?> </b></th>
    </tr>
    <?php endforeach ?>
    </tr>
    <td>Total Suku Premi</td>
    <th>TERLAMPIR</th>
    <tr>
    
    <TD RowSpan = "rowspan">Nilai Pertanggungan</TH>

    <?php 
    $t= 0;
    foreach($merk as $v):

    $tanggung1=$v['qty'];
    $tanggung2=$v['harga'];
    $tanggung=$tanggung1*$tanggung2;
    $p = $s['yearly'];
    $y = $tanggung;
    
    $t += $tanggung;
    $hsl = ($t*85/100);
    $hsl2 = ($t*70/100);
    $hsl3 = ($t*60/100);
    $hsl4 = ($t*50/100);
    endforeach;
    if($p == 1){   
     echo "
     <th> Th 1 (100%): ".buatRupiah($t)." <tr></th><th>";          
    }
    if($p == 2){  
        echo "
        <th> Th 1 (100%): ".buatRupiah($t)." <tr></th><th>";   
        echo "
        <th> Th 2 (85%): ".buatRupiah($hsl)."<tr> </th><th>";          
    }
    if($p == 3){   
        echo "
        <th> Th 1 (100%): ".buatRupiah($t)."<tr></th><th>";   
        echo "
        <th> Th 2 (85%): ".buatRupiah($hsl)."<tr> </th><th>";  
        echo " <th> Th 3 (70%): ".buatRupiah($hsl2)."<tr> </th><th>";          
    }
    if($p == 4){   
        echo "
        <th> Th 1 (100%): ".buatRupiah($t)."<tr></th><th>";   
        echo "
        <th> Th 2 (85%): ".buatRupiah($hsl)."<tr> </th><th>";  
        echo " <th> Th 3 (70%):".buatRupiah($hsl2)."<tr> </th><th>";     
        echo "<th> Th 4(60%): ".buatRupiah($hsl3)."<tr> </th><th>";          
    }if($p == 5){
        echo "
        <th> Th 1 (100%): ".buatRupiah($t)."<tr></th><th>";   
        echo "
        <th> Th 2 (85%): ".buatRupiah($hsl)."<tr> </th><th>";  
        echo " <th> Th 3 (70%): ".buatRupiah($hsl2)."<tr> </th><th>";     
        echo "<th> Th 4(60%): ".buatRupiah($hsl3)."<tr> </th><th>";    
        echo "<th> Th 5(50%): ".buatRupiah($hsl4)."<tr></th>";  
    } 
    ?>
    </tr>
    <td>Total Suku Premi (IDR/USD)</td>
    <th>TERLAMPIR</th>
    <tr>
    <th colspan="2"  Align = "center" style="width:100%">Data Kendaraan:</th>
    </tr>  
    <td>Merk & Type </td>
    <th>
    
    <?php 
    //fungsi peruangan sesuai jumlah unit
    foreach($merk as $v) :
    $l=$v['qty'];
    $l2=$v['unit'];
    $l3=$v['thn_merk'];
    $l5=$v['harga'];
    $l4= buatRupiah($v['harga']);
    
    if($l2 == $l2){
        echo "<p>$l Unit $l2 Tahun $l3 @ $l4 ";   
    }
    if($l2 != $l2){
    for ($i = 1; $i <= $l; $i++){
        echo "<p>$l Unit $l2 Tahun $l3 @ $l4 ";    
        }
    }
    endforeach
    ?>
    </th>

    
    <tr>
    <td>Nomor Polisi</td>
    <th><?= $s['no_pol'] ?></th>
    </tr>
    <td>Warna Kendaraan</td>
    <th><?= $s['warna'] ?></th>
    <tr>
    <td>No.Rangka(chasis)</td>
    <th><?= $s['no_rangka'] ?></th>
    </tr>
    <td>No.Mesin</td>
    <th><?= $s['no_mesin'] ?></th>
    </tr>
    <td>No.Seri</td>
    <th><?= $s['no_seri'] ?></th>
    </table>
    <p >
    Klausa & Exclusion  
    (jika ada) : &emsp;
    <p>1. Klausula Kepentingan pihak yang Menyewkan "PT.BRI Multifinance Indonesia" </p>
    <p >2. Additional rate 5% > 5 tahun (untuk Comprehensive saja") </p>
    <p >3. Klausula Pertanggungan Comprehensive" </p>
    <p >4. Klausula Communicable Disease Exclusion" </p>
    <p >5. Klausula Cyber Loss Absolutely Exclusion" </p>
    <p >6. Klausul Komponen Kendaraab Bermotor" </p>
    <p >7. Klausul Kerugian pada kelengkapan tambahan" </p>
    <p >8. Klausula Jaminan Terhadap Pihak ketiga" </p>
    <p >9. Klausula Kecelakaan Diri" </p>
    Catatan Untuk diperhatikan :   <p >- Selama periode leasing, polis asuransi tidak dapat dibatalkan </p>
    <p >- Proses Claim dan penyelesaiannya ditangani langsung oleh pihak Asuransi dengan Lesee </p>

    <p><b> Syarat & Ketentuan : </b></p>
    <p >1. Kejadian yang terhadu diluar klausula/ketentuan lain yang tercantum dipolis tidak dapat diajukan</p><p>klaim</p> 
    <p >2. Ketika polis asuransi diterima mohon dibaca kembali agar tidak terjadi salah pengertian tentang</p><p> kondisi penutupan </p> 
    <p >3. Jika terjadi klaim TLO, nasabah wajib melunasi seluruh premi asuransi </p>
    <p >4. SPPA ini berlaku jika sudah menerima konfirmasi penerbitan polis dari BRI Finance </p>
    <br>
    Demikian form aplikasi ini diisi dengan kelengkapan data dan informasi sebenar-benarnya.
    <table class="table1">
    <th>
        Dilengkapi dan disetujui, <p>
        <?= $s['qq']?> <p></p>
        <br>
        <br>
        <br>
        (________________)
    </th>
    <th>
        Diketahui dan disetujui, <p>
        PT.BRI Multifinance Indonesia</p>
        <br>
        <br>
        <br>
        (________________)
    </th>
    <th>
        Dikonfirmasi, <p>
        <?= $s['kepada']?> <p></p>
        <br>
        <br>
        <br>
        (________________)
    </th>
    </table>
    <br>
    <table class="table1">
        <tr>
        <td>Nama Lessee :</td>
            <th><?= $s['qq'] ?> </th>
        </tr>
        <td>Asuransi :</td>
        <th><?= $s['kepada'] ?></th>
    </table>
<br>
    <table class="table1">
    <?php
    $jml_unit =0;
    foreach($merk as $v):
    $y = $t;
    $tanggung1=+$v['qty'];
    $m =+$tanggung1;
      $nominal = $s['nominal'];
      $jml_unit += $m;
    endforeach;
        $hsl = ($y*85/100);
        $hsl2 = ($y*70/100);
        $hsl3 = ($y*60/100);
        $hsl4 = ($y*50/100);
   $polis = 60000;
   $jml_rate = $s['jml_rate'];
   //premi
   $premi = $y*$jml_rate/100;
   $premi2 = $hsl*$jml_rate/100;
   $premi3 = $hsl2*$jml_rate/100;
   $premi4 = $hsl3*$jml_rate/100;
   $premi5 = $hsl4*$jml_rate/100;

   $up = 0;

   if($nominal > 0 & $nominal <= 25000000){
    $up = 1.50;
   }if($nominal > 25000000 & $nominal <=  50000000){
    $up = 1.50*0.75;
   }if($nominal > 50000000 & $nominal <= 100000000){
    $up = 1.50*0.75*0.375;
   }

   $tpl = $nominal*$up/100;
   $hsltpl = $tpl*$jml_unit;

   $rate = $s['rate'];
   $pa = $s['pa'];
   //perhitungan pa
   $pengemudi = 0.50;
   $penumpang = 0.10;
   $hslpa = $pa * $pengemudi;
   $ttlpa = $pa * $pengemudi * $jml_unit;
   $hslpa2 = $pa * $penumpang;
   $ttlpa2 = $pa * $penumpang * $jml_unit;

    //total
   $total = $polis + $premi + $hsltpl + $ttlpa + $ttlpa2;
   $total2 = $polis + $premi2 + $hsltpl + $ttlpa + $ttlpa2;
   $total3= $polis + $premi3 + $hsltpl + $ttlpa + $ttlpa2;
   $total4 = $polis + $premi4 + $hsltpl + $ttlpa + $ttlpa2;
   $total5 = $polis + $premi5 + $hsltpl + $ttlpa + $ttlpa2;

   
    for ($i = 1; $i <= $p; $i++) {
        echo "
        <tr>
            <th>Thn{$i}</th>
            <th>Coverage</th>
            <th></th>
            <th>rate</th>
            <th>Nilai Premi</th>
        </tr>
        ";  
        if($i == 1){   
            echo"
                <td> ".buatRupiah($t)." </td>
                <td> {$rate}</td> 
                <td> </td>
                <td> {$jml_rate} %</td> 
                <td>".buatRupiah($premi)." </td>  
                <tr>
                <td> ".buatRupiah($nominal)." </td>
                <td>TPL ( $jml_unit Unit)</td>
                <td>".buatRupiah($tpl)."</td>
                <td>$up</td>
                <td>".buatRupiah($hsltpl)."</td>
                </tr>
                <td>".buatRupiah($pa)." </td>
                <td>Pengemudi</td>
                <td>".buatRupiah($hslpa)."</td>
                <td>$pengemudi</td>
                <td>".buatRupiah($ttlpa)."</td>
                <tr>
                <td>".buatRupiah($pa)."</td>
                <td>Penumpang</td>
                <td>".buatRupiah($hslpa2)."</td>
                <td>$penumpang</td>
                <td>".buatRupiah($ttlpa2)."</td>
                <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>Biaya Polis</td>
                <td>".buatRupiah($polis)."</td>
                <tr>
                <td></td>
                <td></td>
                <td></td>
                <td class='cell-highlight'>Grand Total</td>
                <td class='cell-highlight'>".buatRupiah($total)."</td>
                "; 
            }
                if($i == 2){   
                    echo"
                        <td> ".buatRupiah($hsl)." </td>
                        <td> {$rate}</td> 
                        <td> </td>
                        <td> {$jml_rate} %</td> 
                        <td> ".buatRupiah($premi2)." </td>
                        
                        <tr>
                        <td> ".buatRupiah($nominal)."</td>
                        <td>TPL ( $jml_unit Unit)</td>
                        <td>".buatRupiah($tpl)."</td>
                        <td>$up</td>
                        <td>".buatRupiah($hsltpl)."</td>
                        </tr>
                        <td>".buatRupiah($pa)." </td>
                        <td>Pengemudi</td>
                        <td>".buatRupiah($hslpa)."</td>
                        <td>$pengemudi</td>
                        <td>".buatRupiah($ttlpa)."</td>
                        <tr>
                        <td>".buatRupiah($pa)."</td>
                        <td>Penumpang</td>
                        <td>".buatRupiah($hslpa2)."</td>
                        <td>$penumpang</td>
                        <td>".buatRupiah($ttlpa2)."</td>
                        <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Biaya Polis</td>
                        <td>".buatRupiah($polis)."</td>
                        <tr>
                        <td></td>
                        <td></td>
                        <td> </td>
                        <td class='cell-highlight'>Grand Total</td>
                        <td class='cell-highlight'>".buatRupiah($total2)."</td>
                        "; 
                    }
                    if($i == 3){   
                        echo"
                            <td> ".buatRupiah($hsl2)."</td>
                            <td> {$rate}</td> 
                            <td> </td>
                            <td> {$jml_rate} %</td> 
                            <td> ".buatRupiah($premi3)."</td>
                            
                            <tr>
                            <td> ".buatRupiah($nominal)." </td>
                            <td>TPL ( $jml_unit Unit)</td>
                            <td>".buatRupiah($tpl)." </td>
                            <td>$up</td>
                            <td>".buatRupiah($hsltpl)."</td>
                            </tr>
                            <td>".buatRupiah($pa)." </td>
                            <td>Pengemudi</td>
                            <td>".buatRupiah($hslpa)."</td>
                            <td>$pengemudi</td>
                            <td>".buatRupiah($ttlpa)."</td>
                            <tr>
                            <td>".buatRupiah($pa)."</td>
                            <td>Penumpang</td>
                            <td>".buatRupiah($hslpa2)."</td>
                            <td>$penumpang</td>
                            <td>".buatRupiah($ttlpa2)."</td>
                            <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Biaya Polis</td>
                            <td>".buatRupiah($polis)."</td>
                            <tr>
                            <td></td>
                            <td></td>
                            <td> </td>
                            <td class='cell-highlight'>Grand Total</td>
                            <td class='cell-highlight'>".buatRupiah($total3)."</td>
                            "; 
                        }
                        if($i == 4){   
                            echo"
                                <td> ".buatRupiah($hsl3)." </td>
                                <td> {$rate}</td> 
                                <td> </td>
                                <td> {$jml_rate} %</td> 
                                <td> ".buatRupiah($premi4)."</td>   
                                <tr>
                                <td> ".buatRupiah($nominal)." </td>
                                <td>TPL ( $jml_unit Unit)</td>
                                <td>".buatRupiah($tpl)."</td>
                                <td>$up</td>
                                <td>".buatRupiah($hsltpl)."</td>
                                </tr>
                                <td>".buatRupiah($pa)." </td>
                                <td>Pengemudi</td>
                                <td>".buatRupiah($hslpa)."</td>
                                <td>$pengemudi</td>
                                <td>".buatRupiah($ttlpa)."</td>
                                <tr>
                                <td>".buatRupiah($pa)."</td>
                                <td>Penumpang</td>
                                <td>".buatRupiah($hslpa2)."</td>
                                <td>$penumpang</td>
                                <td>".buatRupiah($ttlpa2)."</td>
                                <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Biaya Polis</td>
                                <td>".buatRupiah($polis)."</td>
                                <tr>
                                <td></td>
                                <td></td>
                                <td> </td>
                                <td class='cell-highlight'>Grand Total</td>
                                <td class='cell-highlight'>".buatRupiah($total4)."</td>
                                "; 
                            }
                            if($i == 5){   
                                echo"
                                    <td> ".buatRupiah($hsl4)." </td>
                                    <td> {$rate}</td> 
                                    <td> </td>
                                    <td> {$jml_rate} %</td> 
                                    <td> ".buatRupiah($premi5)."</td>        
                                    <tr>
                                    <td> ".buatRupiah($nominal)." </td>
                                    <td>TPL ( $jml_unit Unit)</td>
                                    <td>".buatRupiah($tpl)."</td>
                                    <td>$up</td>
                                    <td>".buatRupiah($hsltpl)."</td>
                                    </tr>
                                    <td>".buatRupiah($pa)." </td>
                                    <td>Pengemudi</td>
                                    <td>".buatRupiah($hslpa)."</td>
                                    <td>$pengemudi</td>
                                    <td>".buatRupiah($ttlpa)."</td>
                                    <tr>
                                    <td>".buatRupiah($pa)."</td>
                                    <td>Penumpang</td>
                                    <td>".buatRupiah($hslpa2)."</td>
                                    <td>$penumpang</td>
                                    <td>".buatRupiah($ttlpa2)."</td>
                                    <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>Biaya Polis</td>
                                    <td>".buatRupiah($polis)."</td>
                                    <tr>
                                    <td></td>
                                    <td></td>
                                    <td> </td>
                                    <td class='cell-highlight'>Grand Total</td>
                                    <td class='cell-highlight'>".buatRupiah($total5)."</td> 
                                    "; 
                             }
        
    }
  
?>
</table>
</div>
<button onclick="Export2Doc('exportContent', 'Laporan SPPA Asuransi <?= $s['tipe'] ?>');">Export Ke .doc</button>
</body>
</body>
</div>
<script>
    window.onload = function(){
    var button = document.getElementById('apple1');
    button.form.submit();
}
</script>
<!-- <script>
		window.print();
</script> -->

<script>
    function Export2Doc(element, filename = ''){
    var preHtml = "<html xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns='http://www.w3.org/TR/REC-html40'><head><meta charset='utf-8'><title>Export HTML To Doc</title></head><body>";
    var postHtml = "</body></html>";
    var html = preHtml+document.getElementById(element).innerHTML+postHtml;
 
    var blob = new Blob(['\ufeff', html], {
        type: 'application/msword'
    });
     
    // Specify link url
    var url = 'data:application/vnd.ms-word;charset=utf-8,' + encodeURIComponent(html);
     
    // Specify file name
    filename = filename?filename+'.doc':'document.doc';
     
    // Create download link element
    var downloadLink = document.createElement("a");
 
    document.body.appendChild(downloadLink);
     
    if(navigator.msSaveOrOpenBlob ){
        navigator.msSaveOrOpenBlob(blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = url;
         
        // Setting the file name
        downloadLink.download = filename;
         
        //triggering the function
        downloadLink.click();
    }
     
    document.body.removeChild(downloadLink);
}
</script>
</script>
<?php

