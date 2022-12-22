<!-- UI NAV -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<!-- js autocomplete -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

<!-- JS UI -->
<!-- <script type="text/javascript" src="<?= base_url();?>assets/js/jquery.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
<!-- <script type='text/javascript'>
$(window).load(function(){
$("#ktp").change(function() {
			console.log($("#ktp option:selected").val());
			if ($("#ktp option:selected").val() == 'Baru') {
				$('#no_pol').prop('hidden', 'true');
                $('#warna').prop('hidden',  'true');
                $('#no_rang').prop('hidden',  'true');
                $('#no_mesin').prop('hidden',  'true');
                $('#no_seri').prop('hidden',  'true');
			} else {
				$('#no_pol').prop('hidden', false);
                $('#warna').prop('hidden', false);
                $('#no_rang').prop('hidden', false);
                $('#no_mesin').prop('hidden', false);
                $('#no_seri').prop('hidden', false);
			}
		});
});
</script> -->

<div class="container">
    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
                <p><small>Form Header</small></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                <p><small>Form Informasi Debitur</small></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                <p><small>Form Premi</small></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                <p><small>Data Kendaraan</small></p>
            </div>
        </div>
    </div>
    
    <form role="form" action="<?php echo base_url('Poling/create') ?>" method="post">
        <div class="panel panel-primary setup-content" id="step-1">
            <div class="panel-heading">
                 <h3 class="panel-title">Nama Asurandur</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label">Kepada</label>
                    <input  type="text" id='kepada' name= 'kepada' required="required" class="form-control" placeholder="Nama Asuransi"/>
                </div>
                <div class="form-group">
                <label class="control-label">Tipe Form Aplikasi (bus/truk)</label>
                <select id='tipe' name= 'tipe' class="form-control">
                <option value="BUS">BUS</option>
                <option value="TRUK">TRUK</option>
                </select>
                 </div>  
                <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
            </div>
        </div>
        
        <div class="panel panel-primary setup-content" id="step-2">
            <div class="panel-heading">
                 <h3 class="panel-title">Debitur</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label">QQ</label>
                    <input maxlength="200" type="text" id='qq' name= 'qq' required="required" class="form-control" placeholder="Company Name" />
                </div>
                <div class="form-group">
                <label class="control-label">Zona Wilayah</label>
                <select id='zona' name= 'zona' class="form-control">
                <option value="1">Sumatra dan Kepulauannya</option>
                <option value="2">Jakarta, Banten dan Jabar</option>
                <option value="3">Selain Wilayah 1 dan 2</option>
                </select>
                </div> 
            <div class="form-row">
                <div class="col-md-2 mb-3">
                <label class="control-label">Plat No</label>
                    <input maxlength="200" type="text" id="plat_no" name="plat_no" required="required" class="form-control" placeholder="No Plat" />
                </div>

                <div class="col-md-2 mb-3">
                <label for="validationServer023">Jenis Plat</label>
                <select id='jenis_plat' name= 'jenis_plat' class="form-control">
                <option value="Plat Kuning">Plat Kuning</option>
                <option value="Plat Hitam">Plat Hitam</option>
                </select>
                </div>

            </div>

            <p>Penggunaan Obyek Pertanggungan:</p>
            <input type="radio" id="html" id='pertanggungan1' name= 'ob_pertanggungan' value="Pemakaian Sendiri">
            <label for="Pemakaian Sendiri">Pemakaian Sendiri</label><br>
            <input type="radio" id="css" id='pertanggungan2' name= 'ob_pertanggungan' value="Disewakan">
            <label for="Disewakan">Disewakan</label><br>
            <br>  
        
            <p>Metode Pembayaran:</p>
            <input name="cok" value="1" hidden>
            <input type="radio" id="metode1" name="metode" value="Full Term">
            <label for="metode1">Full Term</label><br>
            <input type="radio" id="metode2" name="metode" value="Yearly">
            <label for="metode2">Yearly</label><br>  
            <br>
            <div class="form-group">
                <label class="control-label">Yearly</label>
                <select id="yearly" name="yearly" class="form-control">
                <option value="" class="label">Yearly</option>
                <option value="1">1 thn</option>
                <option value="2">2 Thn</option>
                <option value="3">3 Thn</option>
                <option value="4">4 Thn</option>
                <option value="5">5 Thn</option>
                </select>
            </div>
                <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
            </div>
        </div>
        
        <div class="panel panel-primary setup-content" id="step-3">
            <div class="panel-heading">
                 <h3 class="panel-title">Suku Premi</h3>
            </div>
            <div class="panel-body">

            <div class="form-row">
            <div class="col-md-2 mb-3">
                <label class="control-label">Rate (suku premi)</label>
                <select id="rate" name="rate" class="form-control">
                <option value="Rate Comprehensive">Rate Comprehensive</option>
                <option hidden value="TLO">Rate TLO</option>
                <option value="TLO">Rate TLO</option>
                </select>
                </div>
           
                <div class="col-md-2 mb-3">
                <label class="control-label">Jumlah Rate</label>
                    <input maxlength="200" type="text" id="jml_rate" name="jml_rate" required="required" class="form-control" placeholder="Rate %" />
                </div>
            </div>

            <!-- <div class="form-group" id="dynamic_form">
                <div class="row">
	                <div class="col-md-3">
                    <label class="control-label">Rate Lain-lain</label>
	                    <input type="text"  id="rate_lain" name="rate_lain" placeholder="Rate dan nama" class="form-control" required="required">
	                </div>
	                <div class="col-md-3">
                    <label class="control-label">Keterangan (jika ada)</label>
	                    <input type="text" class="form-control" name="ket_rate" id="ket_rate" placeholder="Isi Jika Ada.">
	                </div>
	            
	            </div>
            </div> -->
                
            <div class="form-group">
                <div class="row">
	                <div class="col-md-3">
                    <label class="control-label">Nilai TPL</label>
	                    <input type="number"  id="nominal" name="nominal" placeholder="Jumlah TPL nya" class="form-control" required="required">
	                </div>
	                <div class="col-md-3">
                    <label class="control-label">Nilai PA</label>
                    <font>( *jika ada )</font>
	                    <input type="number" class="form-control" name="pa" id="pa" placeholder="Jumlah PA nya">
	                </div>
	                <div class="button-group">
	                </div>
	            </div>
            </div>
            <!-- <div class="form-group">
                    <label class="control-label">Nilai Pertanggungan</label>
                    <input maxlength="200" id="pertanggungan" name="pertanggungan" type="number" required="required" class="form-control" placeholder="Enter Company Name" />
            </div> -->


                <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
            </div>
        </div>
        
        <div class="panel panel-primary setup-content" id="step-4">
            <div class="panel-heading">
                 <h3 class="panel-title">Data Kendaraan</h3>
            </div>
            <div class="panel-body">

        <div class="form-group">

            <button type="button" class="btn btn-primary nextBtn pull-right" id="btn-tambah-form">Tambah Data Form</button>
            <button type="button" class="btn btn-warning nextBtn pull-right" id="btn-reset-form">Hapus Kembali</button><br><br>
            
            <b>Data Unit 1 :</b>
            <div class="control-group ">
            <label>Jumlah Unit</label>
            <input type="number" name="jml_unit[]" class="form-control" required>
            <label>Nama Unit</label>
            <input type="text" id="unit" name="unit[]" class="form-control">
            <label>Tahun</label>
            <input type="text" id="tahun" name="tahun[]" class="form-control">
            <label>Harga</label>
            <input type="number" id="harga" name="harga[]" class="form-control">
            <br><br>
            <div id="insert-form"></div>
        <!-- Kita buat textbox untuk menampung jumlah data form -->
        <input type="hidden" id="jumlah-form" value="1">

                <div class="form-group">
                <label class="control-label">Kondisi Asset</label>
                        <select id="ktp" name="ktp" class="form-control">
                            <option value="Baru">Baru</option>
                            <option value="Bekas">Bekas</option>
                        </select>
                        <br>
                        <font><i>*tidak Wajib diisi</i></font><br>
                        <label>No Pol</label>
                        <input type="text" name="no_pol" id="no_pol"  class="form-control" />
                        <label>Warna</label>
                        <input type="text" name="warna" id="warna"  class="form-control"  />
                        <label>Rangka</label>
                        <input type="text" name="no_rang" id="no_rang"  class="form-control" />
                        <label>Mesin</label>
                        <input type="text" name="no_mesin" id="no_mesin"  class="form-control" />
                        <label>No Seri</label>
                        <input type="text" name="no_seri" id="no_seri"  class="form-control" />
                </div>

                <button class="btn btn-success pull-right" type="submit">Finish!</button>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript" src="assets/js/step.js"></script> 


<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

<script>
  $(document).ready(function(){ // Ketika halaman sudah diload dan siap
    $("#btn-tambah-form").click(function(){ // Ketika tombol Tambah Data Form di klik
      var jumlah = parseInt($("#jumlah-form").val()); // Ambil jumlah data form pada textbox jumlah-form
      var nextform = jumlah + 1; // Tambah 1 untuk jumlah form nya
      
      // Kita akan menambahkan form dengan menggunakan append
      // pada sebuah tag div yg kita beri id insert-form
      $("#insert-form").append("<b>Data Unit " + nextform + " :</b>" +
      "<div class='control-group '>"+
            "<label>Jumlah Unit</label>"+
            "<input type='number' name='jml_unit[]' class='form-control' required>"+
            "<label>Nama Unit</label>"+
            "<input type='text' id='unit' name='unit[]' class='form-control'>"+
            "<label>Tahun</label>"+
            "<input type='text' id='tahun' name='tahun[]' class='form-control'>"+
            "<label>Harga</label>"+
            "<input type='number' id='harga' name='harga[]' class='form-control'>"+
        "<br><br>");
      
      $("#jumlah-form").val(nextform); // Ubah value textbox jumlah-form dengan variabel nextform
    });
    
    // Buat fungsi untuk mereset form ke semula
    $("#btn-reset-form").click(function(){
      $("#insert-form").html(""); // Kita kosongkan isi dari div insert-form
      $("#jumlah-form").val("1"); // Ubah kembali value jumlah form menjadi 1
    });
  });
</script>

<script type="text/javascript">
        $(document).ready(function(){
            $( "#staff" ).autocomplete({
              source: "<?php echo site_url('Poling/get_autocomplete');?>" 
            });
        });
</script>
<script type="text/javascript">
        $(document).ready(function(){
            $( "#kepada" ).autocomplete({
              source: "<?php echo site_url('Berat/get_autocomplete');?>" 
            });
        });
</script>
<script type="text/javascript">
        $(document).ready(function(){
            $( "#unit" ).autocomplete({
              source: "<?php echo site_url('Poling/get_unit');?>" 
            });
        });
</script>
 
<script>
    var rupiah = document.getElementById("");
rupiah.addEventListener("keyup", function(e) {
  // tambahkan 'Rp.' pada saat form di ketik
  // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
  rupiah.value = formatRupiah(this.value, "Rp. ");
});

/* Fungsi formatRupiah */
function formatRupiah(angka, prefix) {
  var number_string = angka.replace(/[^,\d]/g, "").toString(),
    split = number_string.split(","),
    sisa = split[0].length % 3,
    rupiah = split[0].substr(0, sisa),
    ribuan = split[0].substr(sisa).match(/\d{3}/gi);

  // tambahkan titik jika yang di input sudah menjadi angka ribuan
  if (ribuan) {
    separator = sisa ? "." : "";
    rupiah += separator + ribuan.join(".");
  }

  rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
  return prefix == undefined ? rupiah : rupiah ? "Rp. " + rupiah : "";
}
</script>
<!-- <script>
$(document).ready(function(){
$("input[name='jml_rate']").on('input', function() {
    $(this).val(function(i, v) {
     return v.replace('%','') + '%';  });
    });
});
</script> -->