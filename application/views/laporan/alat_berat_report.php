<div id="exportContent">
<style>
    /*design table 1*/
.b,b, p, i{
    font-family: Arial;
    font-size: 10pt;
    line-height:0,5px;
    margin: 0;
    padding: 0;
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
    <?php foreach($sppa_alat_berat as $s) : ?>
		<tr>
        <td>TO</td>
        <th>: <?= $s['kepada'] ?></th>
        <td>Dari</td>
        <th>: <b>PT.BRI MULTIFINANCE INDONESIA</b></th>
		</tr>
        <td>ATTN.</td>
        <th> </th>
        <td>Tanggal</td>
        <td >: <b><?= $s['tanggal'] ?></b></td>
        <tr>
        <td>No.Telp</td>
        <th> </th>
        <td>Halaman</td>
        <td> <b> 2</b></td>
        </tr>
        <td>Email</td>
        <th> </th>
        <td>LO/Group</td>
        <td>: <b><?= $s['staff'] ?></b> </td>


	</table>	
    <h1>FORM APLIKASI ASURANSI ALAT BERAT</h1>
    <table class="table1"> 
        <tr>
        <td>Nama Tertanggung :</td>
        <th><p>PT. BRI MULTIFINANCE INDONESIA QQ <?= $s['qq'] ?></p></th>
        <td width="250px">Contact No:</td>
    </table>
<br>
<b>Okupasi: </b><?= $s['okupasi']?> <p>
<b>Lokasi Resiko :</b> <?= $s['lokasi']?> <p>
<?php endforeach ?>
<?php 
    $prio =  date('Y') + $s['yearly'];
?>
Periode: _____________<?php echo date('Y');?> s/d ___________<?= $prio ?> (periode <?= $s['yearly']?> Tahun)
            <p>(jam 12.00 siang waktu setempat)</p>
<b>Obyek Pertanggungan :</b>
<?php foreach($merk as $p) : ?>
<b><?= $p['qty']?> Unit <?= $p['unit']?> Tahun <?= $p['thn_merk']?> @ <?= buatRupiah($p['harga'])?>  <b>,-(Termasuk PPN 11%)</b><p></b>
<?php endforeach ?>
<b>SN :</b>
<p><b>Penggunaan Objek Pertanggungan: <input type="checkbox" checked></b><?= $s['objek_pertanggungan']?></p> 
<p>apabila unit yang dipertanggungkan akan disewakan ke pihak ketiga pada saat berjalannya polis,</p> 
<p>Lessee wajib memberitahukan kepada Lessor agar segera dibuatkan perubahannya.</p> 
   <p><b>Metode Pembayaran:  <input type="checkbox" checked /> </b><?= $s['metode_bayar']?></p>   
   <p>
   
   <table class="table1"> 
    <th>Kondisi</th>
    <th>Resiko Sendiri (setiap unit/kejadian)</th>
    <th>Opsi</th>
    <th>Rate</th>
    <th>Premium</th>
    <tr>
        <td><?= $s['rate']?></td>
        <td>Allrisk: 10% of claim, Minimun USD</td>
        <td></td>
        <td><?= $s['jml_rate']?> </td>
        <td>Terlampir</td>
    </tr>
            <td>Total Loss</td>
            <td>TLO: 10% of Claim, Min USD</td>
            <td></td>
            <td></td>
            <td></td>
            <tr>
            <td>Inland Transit (whitin island include loading unloading)</td>
            <td>RSCC: 10% of Claim, Min USD</td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
            <tr>
            <td>Pencurian, Perampokan, dan Perampokan senjata api</td>
            <td>Act of GOD: 10% of Claim, Min USD</td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
            <tr>
            <td>Total Loss</td>
            <td> Inland Transit: 10% of Claim, Min USD</td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
            <tr>
            <td>Total Loss</td>
            <td> Sank, Theft/ Robbery/ Burglary: 20% of claim, Min IDR 30jt a.o.a</td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
        <td  colspan = "3"><font><i>*wajib ditambahkan</i></font> &nbsp; <b>TOTAL</b></td>
        <td></td>
        <td></td>
   </table>
   <br>
    <br>
   <p><b>Total Pertanggungan :</b></p>
   <table class= "table1">
   <?php 
$t = 0;
    foreach($merk as $v) :

    $tanggung1=$v['qty'];
    $tanggung2=$v['harga'];

    $tanggung=$tanggung1*$tanggung2;

    $y = $tanggung;
    
    $t += $y;

    $p = $s['yearly'];
    buatRupiah($t); 
    $z = $t;
    
    endforeach;

    for($i = 1;$i <=$p; $i++){ 
     echo "
     <th> Th $i Rp.{$t} </th>";          
    }

    ?>
    <tr>
        <p><td ><b><i>(Nilai Pertanggungan disyaratkan harus sama dengan Harga Unit Baru.</b></p>
       <p> Jika Nilai Pertanggungan kurang dari jumlah yang disyaratkan, maka ganti rugi akan dihitung </p>
       <p> secara proporsi antara nilai pertanggungan dengan jumlah yang diisyaratkan)  </p>
    </i>
    </td>
    <td colspan="4" style="text-align:center"><i><p>Lesse mengetahui </p>
    <p> menyetujui</i></p>
            <br><br>
         
       
         (...............)
    </td>
    </tr>
   </table>
<i><p> <b>Klausula/Ketentuan :</p>
    lain yang tercantum
    </b>
    <br>
    <p>1. Klausula leasing PT.BRI Multifinance Indonesia. </p>
    <p>2. War and Terorism Exclusion Clause NMA 2918 </p>
    <p>3. Electronic date Recognition Exclusion (EDRE) Clause" </p>
    <p>4. Endorsment Huru Hara untuk asuransiAkat berat</p>
    <p>5. Cover tor Island Trans'J clause (Incl Loading/Loading & unloading (propinsi yang sama).<p>
    <p>6. Klausula clarification agreement </p>
    <p>7. Recovery charge clause (2.5 of TSI or IDR. 25.000.000,-).</p>
    <p>8. Klausula ko asuransi</p>
    <p>9. Klausula ijin melakukan perbaikan (sum insured ≥ 500 juta).</p>
    <p>10. Klausula pengecualian radioaktif</p>
    <p>11.	Earthquake and Volcanic Eruption Extension Clause (if any)</p>
    <p>12.	Klausula pengecualian pengoperasian unit diatas tongkang, tepian sungai atau wet area/at the edge of sea.</p>
    <p>13.	Klausula pengecualian (tidak dijamin) pengoperasian logging & offshore drilling, underground/tunneling, plantation and clearing.</p>
    <p>14.	Klausula pengecualian polusi dan kontaminasi</p>
    <p>15.	Sanction limitation and exclusion clause.</p>
    <br>
    <p><b>Syarat & Ketentuan : </p> 
    <p>1.	Selama periode leasing, polis asuransi tidak dapat dibatalkan.</p>
    <p>2.	Klaim proses dan settlement dihandle langsung oleh pihak Asuransi dengan customer / lessee.</p>

    </b>
    <br>
    <p><b>Catatan Untuk :<p>
    <p>diperhatikan
    </b></i></p>
    <p>1.	SPPA ini berlaku jika sudah ada konfirmasi penerbitan polis asuransi dari BRI Finance.</p>
    <p>2.	Kejadian yang terjadi diluar klausula/ketentuan lain yang tercantum dipolis tidak dapat diajukan klaim.</p>
    <p>3.	Ketika polis asuransi diterima mohon dibaca kembali agar tidak terjadi salah pengertian tentang kondisi penutupan.</p>
    <p>4.	Jika terjadi klaim TLO, nasabah harus melunasi seluruh hutang premi asuransi.</p>
    <br>
    <p><h5>Demikian form aplikasi ini diisi dengan kelengkapan data dan informasi yang sebenar-benarnya</h5></p>

    <table class="table1">
    <th>
    <p> Dilengkapi dan disetujui, </p>
       <p> <?= $s['qq']?></p>
        <br>
        (________________)
    </th>
    <th>
    <p> Diketahui dan disetujui, </p>
    <p>  PT.BRI Multifinance Indonesia</p>
        <br>
        (________________)
    </th>
    <th>
        Dikonfirmasi, <p>
        <?= $s['kepada']?> <p></p>
        <br>
        (________________)
    </th>
    </table>
    <br>
    <table class="table1">
        <tr>
        <td>Nama Lessee :</td>
            <th colspan="3"><?= $s['qq'] ?> </th>
        </tr>
        <td>Asuransi :</td>
        <th colspan="3"><?= $s['kepada'] ?></th>
        <tr></tr>
       
        <?php
        $polis = 60000;
        $rate = $s['rate'];
        $jml_rate = $s['jml_rate'];
        $premi = $z*$jml_rate/100;
        $tam = $premi*$p;

        $total = $polis + $tam;
        
        for ($i = 1; $i <= $p; $i++) {
           
        echo "
        <tr>
            <th>Thn{$i}</th>
            <th>Coverage</th>
            <th>rate</th>
            <th>Nilai Premi</th>
        </tr>
        ";
        echo "
        <td> Th $i Rp.{$t} </td>
        <td> $rate </td>
        <td> $jml_rate </td>
        <td> ".buatRupiah($premi)." </td>
        ";
        }  
        ?>
       <tr>
       <td></td>
        <td></td>
        <td>Biaya Polis</td>
        <td><?= buatRupiah($polis) ?></td>
        <tr>
        <td></td>
        <td></td>
        <td>Total</td>
        <td><?= buatRupiah($tam) ?></td>
        <tr>
        <td> </td>
        <td> </td>
        <td >Total yang harus Dibayar</td>
        <td class='cell-highlight'><?= buatRupiah($total)?></td>
    </table>
<br>

<button onclick="Export2Doc('exportContent', 'Laporan SPPA Asuransi Alat Berat');">Save ke Word</button>

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

