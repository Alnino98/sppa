<style>
    body { padding-top:20px; }
.panel-body .btn:not(.btn-block) { width:120px;margin-bottom:10px; }
.badge-sm {
    min-width: 50em;
    padding: .150em !important;
    margin-left: 35em;
    margin-right: .5em;
    color: white !important;
    cursor: pointer;
}
</style>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ----------> 
     
     <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"> <i class="fas fa-fw fa-tachometer-alt"></i> <?= $title; ?></h1>


                 <!-- Basic Card Example -->
                 <div class="card shadow mb-4">
                    <div class="card-header py-3">
                       <h6 class="m-0 font-weight-bold text-primary">Dashboard</h6>
                    </div>
                    <div class="card-body">
                    <h3>Selamat datang di halaman Form Aplikasi SPPA, <?php echo $_SESSION['staff']?></h3>
                    
					<div class="panel-body">
                        <a href="poling" class="btn btn-danger btn-lg btn-block" role="button"><span class="glyphicon glyphicon-file"></span> FORM SPPA BUS & TRUK</a>
                        <a href="berat"  class="btn btn-warning btn-lg btn-block" role="button"><span class="glyphicon glyphicon-list-alt"></span> ALAT SPPA BERAT</a>
                         <br>
						 
                    <a href="http://www.instagram.com/alninooo98" target="_blank" class="btn btn-success btn-lg btn-block" role="button"><span class="glyphicon glyphicon-globe"></span> Website</a>
                </div>                   
                </div>
                </div>

        </div>
        <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->
