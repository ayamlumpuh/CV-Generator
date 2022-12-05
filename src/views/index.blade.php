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

<body id="CV">
	<!-- header -->
	<div class="col-sm-3 col-md-2 sidebar">
		<div class="sidebar_top">
			<h1>
				<label id="nama"></label><br>
			</h1>
			<img src="" id="imageFile" />

			<script>
				let img = document.getElementById('imageFile');
				img.src = localStorage.getItem('image');
			</script>
		</div>
		<div class="details">
			<h3>PHONE</h3>
			<p><label id="phone"></label></p>
			<h3>EMAIL</h3>
			<p><label id="email"></label></p>
			<address>
				<h3>ALAMAT</h3>
				<p><label id="alamat"></label></p>
			</address>

		</div>
		<div class="clearfix"></div>
	</div>

	<script>
		const nama = localStorage.getItem('nama');
		const phone = localStorage.getItem('phone');
		const email = localStorage.getItem('email');
		const alamat = localStorage.getItem('alamat');

		document.getElementById('nama').textContent = nama;
		document.getElementById('phone').textContent = phone;
		document.getElementById('email').textContent = email;
		document.getElementById('alamat').textContent = alamat;
	</script>

	<!---->
	<link href="cvreq/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<script src="cvreq/js/jquery.magnific-popup.js" type="text/javascript"></script>
	<!---//pop-up-box---->
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

					<div id="small-dialog" class="mfp-hide">
						<img src="" alt="" id="imgload" />
						
						<script>
							let img = document.getElementById('imgload');
							img.src = localStorage.getItem('image');
						</script>

					</div>
					<script>
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
					</script>
				</ul>
			</div>

			<div class="company">
				<h3 class="clr1">Riwayat Pekerjaan</h3>
			</div>
			
			<script>
				$(document).ready(function () {
					const jmlPekerjaan = localStorage.getItem("jmlPekerjaan");

					for (var i = 0; i < jmlPekerjaan; i++) {
						$(".company").after(`
							<div class="company_details">
								<h2><b><span id="namaperusahaan"></span></b>	<small><span id="masakerja"></span></small></h2>
								<h4><span id="posisikerja"></span></h4>
								<h6><p class="cmpny1" id="deskripsipekerjaan"></p></h6>
							</div>
						`);
						const namaperusahaan = localStorage.getItem("namaperusahaan-" + i);
						const masakerja = localStorage.getItem("masakerja-" + i);
						const posisikerja = localStorage.getItem("posisikerja-" + i);
						const deskripsipekerjaan = localStorage.getItem("deskripsipekerjaan-" + i);

						console.log(namaperusahaan);
						console.log(masakerja);
						console.log(posisikerja);
						console.log(deskripsipekerjaan);

						document.getElementById("namaperusahaan").textContent = namaperusahaan;
						document.getElementById("masakerja").textContent = masakerja;
						document.getElementById("posisikerja").textContent = posisikerja;
						document.getElementById("deskripsipekerjaan").textContent = deskripsipekerjaan;
					}
				});
			</script>

			<div class="skills" id="skills">
				<h3 class="clr2">Professional Skills</h3>
			</div>

			<script>
				$(document).ready(function () {
					const jmlKategori = localStorage.getItem("jmlKategori");
					const jmlSkill = localStorage.getItem("jmlSkill");

					var rincian = document.createElement("div");
					var br = document.createElement("br");
					rincian.className = "skill_list";

					for (var i = 0; i < jmlKategori; i++) {
						var rincianli = document.createElement("h4");
						rincianli.innerText = localStorage.getItem("namakategori-" + i);
						rincian.appendChild(br);
						rincian.appendChild(rincianli);
						
						for (var j = 0; j < jmlSkill; j++) {
							var rincianli2 = document.createElement("li");
							console.log(localStorage.getItem("namaskill-" + j));
							rincianli2.innerText = localStorage.getItem("namaskill-" + j);
							rincianli2.style.fontWeight = "normal";
							rincianli.appendChild(rincianli2);
						};
					};
					document.getElementById("skills").appendChild(rincian);
					});
			</script>
			
				<br>
				<div class="education">
					<h3 class="clr1">Riwayat Edukasi</h3>
				</div>
	
				<script>
					$(document).ready(function () {
						const jmlEdukasi = localStorage.getItem("jmlEdukasi");
	
						for (var i = 0; i < jmlEdukasi; i++) {
							$(".education").after(`
								<div class="education_details">
									<h2><b><span id="namasekolah"></span></b>	<small><span id="masapendidikan"></span></small></h2>
									<h4><span id="gelar"></span></h4>
									<h6><p class="cmpny1" id="deskripsiedukasi"></p></h6>
								</div>
							`);
							const namasekolah = localStorage.getItem("namasekolah-" + i);
							const masapendidikan = localStorage.getItem("masapendidikan-" + i);
							const gelar = localStorage.getItem("gelar-" + i);
							const deskripsiedukasi = localStorage.getItem("deskripsiedukasi-" + i);
	
							console.log(namasekolah);
							console.log(masapendidikan);
							console.log(gelar);
							console.log(deskripsiedukasi);
	
							document.getElementById("namasekolah").textContent = namasekolah;
							document.getElementById("masapendidikan").textContent = masapendidikan;
							document.getElementById("gelar").textContent = gelar;
							document.getElementById("deskripsiedukasi").textContent = deskripsiedukasi;
						}
					});
				</script>
			
		</div>
	</div>
	<!---->
</body>

</html>