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
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
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
				
				 <script>
						$(document).ready(function() {
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

		 <div class="company contact-grid">
			<div class="control-group">
				<h2>Form Data Pribadi</h2>
            	<form action="/action_form.php" id="form">
					<div class="control-group after-add-more">
					<label>Nama</label>
					<br>
					<input type="text" value="Nama" class="form-control nama" id="nama" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Contoh : M Rafly Mumtaz';}">
					<br>
					<label>Nomor Hp</label>
					<br>
					<input type="text" value="Nomor Hp" class="form-control nomorhp" id="phone" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Contoh : 085806474976';}">
					<br>
					<label>Email</label>
					<br>
					<input type="text" value="Email" class="form-control email" id="email" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Contoh : raflymumtaz23@gmail.com';}">				
					<br>
					<label>Alamat Lengkap</label>
					<br>
					<input type="text" value="Alamat Lengkap" class="form-control alamat" id="alamat" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Contoh : Jalan Menuju Kebenaran';}">							
					<hr>
				</div>
					<div class="send">
						<input type="submit" value="Kirim" >   <button onclick="document.getElementById('datapribadi').value = ''">Hapus Data</button>
					</div>
				</div>
			</form>


			<script>
				const form = document.getElementById('form');
				const name = document.getElementById('nama');
				const phone = document.getElementById('phone');
				const email = document.getElementById('email');
				const alamat = document.getElementById('alamat');

				form.addEventListener('submit', function(func) {
					func.preventDefault();
		
					const nameValue = name.value;
					const phoneValue = phone.value;
					const emailValue = email.value;
					const alamatValue = alamat.value;
		
					localStorage.setItem('nama', nameValue); 
					localStorage.setItem('phone', phoneValue);
					localStorage.setItem('email', emailValue);
					localStorage.setItem('alamat', alamatValue);
		
					window.location.href = '/';
				});
			</script>
		 </div>
	 </div>
</div>
<!---->
</body>
</html>