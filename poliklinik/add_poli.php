<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Pendaftaran | esemka-his</title>
  	<link rel="stylesheet" href="../assets/css/style.css">
	  <!--link bootstrap-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		  <!--/link bootstrap-->
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>
<body>
	<div class="wrapper">
			<nav id="sidebar">
				<div class="sidebar-header">
					<a href="../index.php"><h3>Esemka-His</h3>
					<strong>EH</strong>
					</a>
				</div>
				<ul class="list-unstyled components">
					<li>
						<a href="../index.php">
							<i class="fas fa-home"></i>
							Dashboard
						</a>
					</li>
					<li>
						<a href="../pendaftaran.php">
							<i class="fas fa-american-sign-language-interpreting"></i>
							Data Pasien
						</a>
					</li>
					<li>
						<a href="../dokter/data_dokter.php">
							<i class="fas fa-diagnoses"></i>
							Data Dokter
						</a>
					</li>
					<li>
						<a href="../poliklinik/data_poli.php">
							<i class="fas fa-briefcase"></i>
							Data PoliKlinik
						</a>
					</li>
					<li>
						<a href="../obat/data_obat.php">
							<i class="fas fa-briefcase"></i>
							Data Obat
						</a>
					</li>
					<li>
						<a href="../pelayanan.php">
							<i class="fas fa-briefcase"></i>
							Rekam Medis
						</a>
					</li>
					<li>
						<a href="../logout.php">
							<i class="fas fa-sign-out-alt"></i>
							<font color="red">Logout</font><br>
						</a>
					</li>
				</ul>
				
					<button type="button" id="sidebarCollapse" class="btn btn-default">
							<i class="fas fa-angle-double-right"></i>
					</button>
			</nav>		
		<div id="content">
 			
		
			<nav class="navbar navbar-expand-lg ">
                <div class="container-fluid">

				<marquee>Selamat Datang Di Halaman Utama Aplikasi Rumah Sakit Sederhana Esemka-His Berbasis Web</marquee>
					
				
				</div>
			</nav>

			<div id="page-wrapper" >
				<div style="padding: 15px 20px;background-color: #fbf9f9; min-height: 600px; margin-right: 15px; margin-left: 5px; margin-bottom: 0px;" >
					<div id="page-inner">
                        <div class="box">
                            <h1>PoliKlinik</h1>
                            <h4>
                                <small>Tambah Data Poliklinik</small>
                                <div class="pull-right">
                                    <button type="button"><a href=""><i class="glyphicon glyphicon-refresh"></i></a></button>
                                    <a href="data_poli.php" class="btn btn-info btn-xs">Data</a>
                                    <a href="generate.php" class="btn btn-primary btn-xs">Tambah Data Lagi</a>
                                </div>
                            </h4>
                            <div class="row">
                                <div class="col-lg-8 col-lg-offset-2">
                                    <form action="proses_poli.php" method="POST">
                                        <input type="hidden" name="total" value="<?=@$_POST['count_add']?>">
                                        <table class="table">
                                            <tr>
                                                <th>#</th>
                                                <th>Nama PoliKlinik</th>
                                                <th>Gedung</th>
                                            </tr>
                                            <?php
                                            for ($i=1; $i <=$_POST['count_add']; $i++) { ?>
                                                <tr>
                                                    <td><?=$i?></td>
                                                    <td>
                                                        <input type="text" name="nama-<?=$i?>" class="form-control"required>
                                                    </td>
                                                    <td>
                                                        <input type="text" name="gedung-<?=$i?>" class="form-control"required>
                                                    </td>
                                                </tr>
                                            <?php   
                                            }
                                            ?>
                                        </table>
                                        <div class="form-group pull-right">
                                            <input type="submit" name="add_poli" value="Simpan Semua" class="btn btn-success">
										</div>
                                </form> 
                                </div>
                            </div>

                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>

	

	<!-- jQuery CDN - Slim version (=without AJAX) -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>
</html>

