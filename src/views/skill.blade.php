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
                    <li><a href="skill"><span class="glyphicon glyphicon-file"aria-hidden="true"></span>Professional Skill</a></li>
					<li><a href="edukasi"><span class="glyphicon glyphicon-file"aria-hidden="true"></span>Edukasi</a></li>
					<li><a href="print"><span class="glyphicon glyphicon-print" aria-hidden="true"></span>Print CV</a></li>
					<li><a href="fotoupload"><span class="glyphicon glyphicon-picture"aria-hidden="true"></span>Upload Foto</a></li>
				</ul>
			</div>

			<div class="company contact-grid">
				<div class="control-group">
					<h2> Form Skills</h2>
					<form action="form-control" id="form">
						<div class="control-group after-add-more-categories">
						  <label>Nama Kategori</label>
						  <br>
						  <!-- id diganti class -->
						  <input type="text" value="Nama Kategori" class="form-control namakategori" onfocus="this.value='';"
							onblur="if (this.value == '') {this.value ='Contoh : Software';}">
						</div>
                        <br>
                        <div class="control-group after-add-more-skills">
							<label>Rincian Skill yang Dimiliki</label>
							<input type="text" value="Rincian Skill yang Dimiliki" class="form-control namaskill" onfocus="this.value='';"
							onblur="if (this.value == '') {this.value ='Contoh : Figma';}">
                        </div>
                        <br>
                        <button class="btn btn-success add-more-categories" type="button">
                            <i class="glyphicon glyphicon-plus"></i> Add Categories
                        </button>
                        <button class="btn btn-success add-more-skills" type="button">
                            <i class="glyphicon glyphicon-plus"></i> Add Skills
                        </button>
						  <br><br>
						<div class="send">
						  <input type="submit" value="Kirim">
                          <button onclick="document.getElementById('skills').value = ''">Hapus Data</button>
					    </div>
					</form>

				    <div class="copy-kategori hide">
                        <div class="control-group">
                            <label>Nama Kategori</label>
                            <br>
                            <!-- id diganti class -->
                            <input type="text" value="Nama Kategori" class="form-control namakategori" onfocus="this.value='';"
                              onblur="if (this.value == '') {this.value ='Contoh : Software';}">
                        </div>
                    </div>

                    <div class="copy-skills hide">
                        <div class="control-group">
							<label>Rincian Skill yang Dimiliki</label>
							<input type="text" value="Rincian Skill yang Dimiliki" class="form-control namaskill" onfocus="this.value='';"
							onblur="if (this.value == '') {this.value ='Contoh : Figma';}">
                        </div>
                    </div>
                          
				    </div>
				</div>
			</div>
		</div>
		<!-- fungsi javascript untuk menampilkan form dinamis  -->
		<!-- penjelasan : saat tombol add-more ditekan, maka akan memunculkan div dengan class copy -->
		
		 <!-- menambah variabel + increment categories -->
		<script type="text/javascript">
			var kategori = 1;
			$( document ).ready(function() {
			$(".add-more-categories").click(function(){ 
				var html = $(".copy-kategori").html();
				$(".after-add-more-categories").after(html);
				kategori++;
			});
				// saat tombol remove dklik control group akan dihapus 
				$("body").on("click", ".remove", function () {
					$(this).parents(".control-group").remove();
				});
			});
		</script>

        <!-- menambah variabel + increment skills -->
		<script type="text/javascript">
			var skill = 1;
			$( document ).ready(function() {
			$(".add-more-skills").click(function(){ 
				var html = $(".copy-skills").html();
				$(".after-add-more-skills").after(html);
				skill++;
			});
				// saat tombol remove dklik control group akan dihapus 
				$("body").on("click", ".remove", function () {
					$(this).parents(".control-group").remove();
				});
			});
		</script>

        <!-- mengambil komponen form-->
        <script>
            $( document ).ready(function() {
                const form = document.getElementById('form');
                form.addEventListener('submit', function (func) {
                    func.preventDefault();
                    localStorage.setItem('jmlKategori', kategori);
                    localStorage.setItem('jmlSkill', skill);
                    for (var i = 0; i < kategori; i++) {
                        const kategoriValue = $(".namakategori").eq(i).val();
                        localStorage.setItem('namakategori-' + i, kategoriValue);
                    }
                    for (var j = 0; j < skill; j++) {
                        const skillValue = $(".namaskill").eq(j).val();
                        localStorage.setItem('namaskill-' + j, skillValue);
                    }
                    window.location.href = '/';
                });
            });
        </script>  
	</div>
</body>
</html>