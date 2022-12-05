<!DOCTYPE HTML>
<html>

<head>
	<link href="{{asset('cvreq/css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
	<script src="{{asset('cvreq/js/jquery.min.js') }}"></script>
<!-- Custom Theme files -->
	<link href="{{asset('cvreq/css/dashboard.css') }}" rel="stylesheet type='text/css'">
 	<link href="{{asset('cvreq/css/style.css') }}" rel='stylesheet'type='text/css' />

	<!-- Custom Theme files -->
	<!--//theme-style-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Curriculum Vitae Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script
		type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
	<!-- start menu -->

</head>

<body>
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		<div class="content">
			<div class="details_header">
				<ul>
					<li><a href="/"><span class="glyphicon glyphicon-file" aria-hidden="true"></span>Resume</a></li>
					<li><a href="datapribadi"><span class="glyphicon glyphicon-file" aria-hidden="true"></span>Data Pribadi</a></li>
					<li><a href="riwayatpekerjaan"><span class="glyphicon glyphicon-file"aria-hidden="true"></span>Riwayat Pekerjaan</a></li>
					<li><a href="skill"><span class="glyphicon glyphicon-file"aria-hidden="true"></span>Professional Skills</a></li>
					<li><a href="edukasi"><span class="glyphicon glyphicon-file"aria-hidden="true"></span>Edukasi</a></li>
					<li><a href="print"><span class="glyphicon glyphicon-print" aria-hidden="true"></span>Print CV</a></li>
					<li><a href="fotoupload"><span class="glyphicon glyphicon-picture"aria-hidden="true"></span>Upload Foto</a></li>

					<!-- <script>
						$(document).ready(function () {
							$('.popup-with-zoom-anim').magnificPopup({
								type: 'inline',
								fixedContentPos: false,
								fixedBgPos: true,
								overflowY: 'auto',
								closeBtnInside: true,
								preloader: false,
								midClick: true,
								removalDelay: 300,
								mainClass: 'my-mfp-zoom-in'
							});
						});
					</script> -->
				</ul>
			</div>

			<div class="company contact-grid">
				<div class="control-group">
					<h2> Form Riwayat Pekerjaan</h1>
					<form action="form-control" id="form">
						<div class="control-group after-add-more">
						  <label>Nama Perusahaan</label>
						  <br>
						  <!-- id diganti class -->
						  <input type="text" value="Nama Perusahaan" class="form-control namaperusahaan" onfocus="this.value='';"
							onblur="if (this.value == '') {this.value ='Contoh : Dr Techly';}">
							<br>
							<label>Masa Kerja</label>
							<input type="text" value="Masa Kerja" class="form-control masakerja" onfocus="this.value='';"
							onblur="if (this.value == '') {this.value ='Contoh : Juni 2019 - Sekarang';}">
							<br>
							<label>Posisi Kerja</label>
							<input type="text" value="Posisi Kerja" class="form-control posisikerja" onfocus="this.value='';"
							onblur="if (this.value == '') {this.value ='Contoh : CFO';}">
							<br>
							<label>Deskripsi Pekerjaan</label>
							<input type="text" value="Deskripsi Pekerjaan" class="form-control deskripsipekerjaan" onfocus="this.value='';"
							onblur="if (this.value == '') {this.value ='Saya bekerja sebagai CTO dimana bertugas untuk mengatasi semua masalah perusahaan yang berhubungan dengan teknologi........';}">
							<br>
							<button class="btn btn-success add-more" type="button">
							<i class="glyphicon glyphicon-plus"></i> Add
							</button>
						  <hr>
						</div>
						<div class="send">
						  <input type="submit" value="Kirim"> <button
							  onclick="document.getElementById('riwayatpekerjaan').value = ''">Hapus Data</button>
					  </div>
					  </form>

				<div class="copy hide">
					<div class="control-group1">
						<label>Nama Perusahaan</label>
						<br>
						<!-- id diganti class -->
						<input type="text" value="Nama Perusahaan" class="form-control namaperusahaan" onfocus="this.value='';"
						onblur="if (this.value == '') {this.value ='Contoh : Dr Techly';}">
						<br>
						<label>Masa Kerja</label>
						<input type="text" value="Masa Kerja" class="form-control masakerja" onfocus="this.value='';"
						onblur="if (this.value == '') {this.value ='Contoh : Juni 2019 - Sekarang';}">
						<br>
						<label>Posisi Kerja</label>
						<input type="text" value="Posisi Kerja" class="form-control posisikerja" onfocus="this.value='';"
						onblur="if (this.value == '') {this.value ='Contoh : CFO';}">
						<br>
						<label>Deskripsi Pekerjaan</label>
						<input type="text" value="Deskripsi Pekerjaan" class="form-control deskripsipekerjaan" onfocus="this.value='';"
						onblur="if (this.value == '') {this.value ='Saya bekerja sebagai CTO dimana bertugas untuk mengatasi semua masalah perusahaan yang berhubungan dengan teknologi........';}">
						<br>
					    <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
						<hr>
					</div>
				  </div>
				</div>
			</div>
		</div>
		<!-- fungsi javascript untuk menampilkan form dinamis  -->
		<!-- penjelasan : saat tombol add-more ditekan, maka akan memunculkan div dengan class copy -->
		
		 <!-- menambah variabel + increment pekerjaan -->
		<script type="text/javascript">
			var pekerjaan = 1;
			$( document ).ready(function() {
			$(".add-more").click(function(){ 
				var html = $(".copy").html();
				$(".after-add-more").after(html);
				pekerjaan++;
			});
				// saat tombol remove dklik control group akan dihapus 
				$("body").on("click", ".remove", function () {
					$(this).parents(".control-group1").remove();
				});
			});
		</script>

 <!-- mengambil komponen form -->
<script>
	const form = document.getElementById('form');
		form.addEventListener('submit', function (func) {
			func.preventDefault();
			localStorage.setItem('jmlPekerjaan', pekerjaan);
			for (var i = 0; i < pekerjaan; i++) {
			  const namaperusahaanValue = $(".namaperusahaan").eq(i).val();
			  const masakerjaValue = $(".masakerja").eq(i).val()
			  const posisikerjaValue = $(".posisikerja").eq(i).val()
			  const deskripsipekerjaanValue = $(".deskripsipekerjaan").eq(i).val()
	
			  localStorage.setItem('namaperusahaan-' + i, namaperusahaanValue);
			  localStorage.setItem('masakerja-' + i, masakerjaValue);
			  localStorage.setItem('posisikerja-' + i, posisikerjaValue);
			  localStorage.setItem('deskripsipekerjaan-' + i, deskripsipekerjaanValue);
			}
			window.location.href = '/';
		});
	</script>  
	</div>
</body>
</html>