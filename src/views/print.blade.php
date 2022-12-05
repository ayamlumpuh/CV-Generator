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

</head>
<body>

<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
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
					 <img src="images/g4.jpg" alt=""/>
				 </div>
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
			 <h3 class="clr1">Print CV</h3>
             <br>
             <br>
			 
            <body>
                <iframe 
                    src="cv" id="myFrame" 
                        frameborder="0" style="border:0;" 
                            width="300" height="300">
                </iframe>
                <br>
                <br>
                <p>
                    <input type="button" id="bt" onclick="print()" value="Print PDF" />
                </p>

            </body>
            
            <script>
                let print = () => {
                    let objFra = document.getElementById('myFrame');
                    objFra.contentWindow.focus();
                    objFra.contentWindow.print();
                }
            </script>
		 </div>
	 </div>
</div>
<!---->
</body>
</html>