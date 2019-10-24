<!DOCTYPE html>
<html>
<head>
	<title>Peternakan Pak Mukidin</title>
	<link rel="stylesheet" type="text/css" href="style/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css ">

	<!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="datepicker/datepicker3.css"/> -->
</head>
<body style="background-image: url(farm.jpg); background-size: cover; font-family: Times New Roman, Times, serif;">



	<div class="container" style="margin-top:8%"; >
		<div class="row">
			<div class="col-md-8 col-md-offset-2" style="color: #ffffff; font-size: 18px; font-weight: bold;"> 
				<p>
					<center>
						<h2>Peternakan Pak Mukidin</h2>
					</center>
				</p>
				<br>
				<p>
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah">Tambah Stock</button>
				</p>
				<a href="chart.php">
					<button type="button" class="btn btn-success">Lihat Grafik</button>
				</a>
				<div id="data-peternakan">
				</div>
			</div>
		</div>
		<p>
			<center>Copyright @ 2019 by : Syahfiar Dhani</a></center>
		</p>
		
	</div>

	<div id="modal-tambah" class="modal fade" role="dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<form role="form" id="form-tambah" method="post" action="input.php">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Menambahkan Stock</h4>
					</div>
					<div class="modal-body">

						<div class="form-group">
							<label>Nama Hewan</label>
							<div class="radio">
								<label>
									<input type="radio" name="nama_hewan" value="Ayam" checked>Ayam
								</label>
							</div>
							<div class="radio">
								<label>
									<input type="radio" name="nama_hewan" value="Bebek">Bebek
								</label>
							</div>
							<p style="color:red" id="error_nama_hewan"></p>
						</div>

						<div class="form-group">
							<label>Jenis Hewan</label>
							<div class="radio">
								<label>
									<input type="radio" name="jenis_hewan" value="Pedaging" checked>Pedaging
								</label>
							</div>
							<div class="radio">
								<label>
									<input type="radio" name="jenis_hewan" value="Petelur">Petelur
								</label>
							</div>
							<p style="color:red" id="error_jenis_hewan"></p>
						</div>
						<div class="form-group">
							<label>Stock yang Ditambahkan</label>
							<input id="stock" name="stock" class="form-control" rows="3"></input>
							<p style="color:red" id="error_stock"></p>
						</div>	

						<div class="form-group">
							<label for="tanggal">Tanggal Ditambahkan</label>
							<input type="date" name="tanggal" class="tanggal"></input>
							<p style="color:red" id="error_tanggal"></p>
						</div>						

					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-info" data-dismiss="modal">Batal</button>
						<button type="submit" class="btn btn-primary" >Simpan</button>
					</div>
				</form>		
			</div>
		</div>
	</div>


	<div id="modal-edit" class="modal fade" role="dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<form role="form" id="form-edit" method="post" action="">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Menambahkan Stock</h4>
					</div>
					<div class="modal-body">
						<div id="data-edit">

						</div>				
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-info" data-dismiss="modal">Batal</button>
						<button type="submit" class="btn btn-primary" >Simpan</button>
					</div>
				</form>		
			</div>
		</div>
	</div> 

	<script type="text/javascript" src="style/jquery.js"></script>
	<script type="text/javascript" src="style/bootstrap.js"></script>
	<script type="text/javascript" src="script.js"></script>

    <!-- <script src="datepicker/bootstrap-datepicker.js"></script> -->
  	
</body>
</html>



