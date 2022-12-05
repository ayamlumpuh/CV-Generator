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
					<h2> Form Edukasi</h1>
					<form action="form-control" id="form">
						<div class="control-group after-add-more">
						  <label>Nama Sekolah</label>
						  <br>
						  <!-- id diganti class -->
						  <input type="text" value="Nama Sekolah" class="form-control namasekolah" onfocus="this.value='';"
							onblur="if (this.value == '') {this.value ='Contoh : SMAN 5 Surabaya';}">
							<br>
							<label>Masa Pendidikan</label>
							<input type="text" value="Masa Pendidikan" class="form-control masapendidikan" onfocus="this.value='';"
							onblur="if (this.value == '') {this.value ='Contoh : Juni 2019 - Sekarang';}">
							<br>
							<label>Gelar</label>
							<input type="text" value="Gelar" class="form-control gelar" onfocus="this.value='';"
							onblur="if (this.value == '') {this.value ='Contoh : Sarjana Komputer';}">
							<br>
							<label>Deskripsi Edukasi</label>
							<input type="text" value="Deskripsi Edukasi" class="form-control deskripsiedukasi" onfocus="this.value='';"
							onblur="if (this.value == '') {this.value ='Saya telah lulus dalam 3,5 tahun dengan IPK 3,76 dan meraih banyak penghargaan........';}">
							<br>
							<button class="btn btn-success add-more" type="button">
							<i class="glyphicon glyphicon-plus"></i> Add
							</button>
						  <hr>
						</div>
						<div class="send">
						  <input type="submit" value="Kirim"> <button
							  onclick="document.getElementById('edukasi').value = ''">Hapus Data</button>
					  </div>
					  </form>

				<div class="copy hide">
					<div class="control-group1">
						<label>Nama Sekolah</label>
						<br>
						<!-- id diganti class -->
                        <input type="text" value="Nama Sekolah" class="form-control namasekolah" onfocus="this.value='';"
                        onblur="if (this.value == '') {this.value ='Contoh : SMAN 5 Surabaya';}">
                        <br>
                        <label>Masa Pendidikan</label>
                        <input type="text" value="Masa Pendidikan" class="form-control masapendidikan" onfocus="this.value='';"
                        onblur="if (this.value == '') {this.value ='Contoh : Juni 2019 - Sekarang';}">
                        <br>
                        <label>Gelar</label>
                        <input type="text" value="Gelar" class="form-control gelar" onfocus="this.value='';"
                        onblur="if (this.value == '') {this.value ='Contoh : Sarjana Komputer';}">
                        <br>
                        <label>Deskripsi Edukasi</label>
                        <input type="text" value="Deskripsi Edukasi" class="form-control deskripsiedukasi" onfocus="this.value='';"
                        onblur="if (this.value == '') {this.value ='Saya telah lulus dalam 3,5 tahun dengan IPK 3,76 dan meraih banyak penghargaan........';}">
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
			var edukasi = 1;
			$( document ).ready(function() {
			$(".add-more").click(function(){ 
				var html = $(".copy").html();
				$(".after-add-more").after(html);
				edukasi++;
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
			localStorage.setItem('jmlEdukasi', edukasi);
			for (var i = 0; i < edukasi; i++) {
			  const namasekolahValue = $(".namasekolah").eq(i).val();
			  const masapendidikanValue = $(".masapendidikan").eq(i).val()
			  const gelarValue = $(".gelar").eq(i).val()
			  const deskripsiedukasiValue = $(".deskripsiedukasi").eq(i).val()
	
			  localStorage.setItem('namasekolah-' + i, namasekolahValue);
			  localStorage.setItem('masapendidikan-' + i, masapendidikanValue);
			  localStorage.setItem('gelar-' + i, gelarValue);
			  localStorage.setItem('deskripsiedukasi-' + i, deskripsiedukasiValue);
			}
			window.location.href = '/';
		});
	</script>  
	</div>
</body>
</html>