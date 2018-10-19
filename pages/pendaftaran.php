<?php
session_start();
include "../koneksi.php";
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Kampung Inggris Alifia</title>
<!-- Bootstrap -->
<link href="../css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="assets/bootstrap.min.css">
<script type="text/javascript" src="assets/jquery.js"></script>
<script type="text/javascript" src="assets/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="../css/blue.css" rel="stylesheet" type="text/css" media="all" />
<!----font-Awesome----->
   	<link rel="stylesheet" href="../fonts/css/font-awesome.min.css">
<!----font-Awesome----->
<!-- start plugins -->
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<!--start slider -->
    <link rel="stylesheet" href="../css/fwslider.css" media="all">
    <script src="../js/jquery-ui.min.js"></script>
    <script src="../js/css3-mediaqueries.js"></script>
    <script src="../js/fwslider.js"></script>
<!--end slider -->
<!-- must have -->
<link href="../css/allinone_carousel.css" rel="stylesheet" type="text/css">
<script src="../js/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
<script src="../js/jquery.ui.touch-punch.min.js" type="text/javascript"></script>
<script src="../js/allinone_carousel.js" type="text/javascript"></script>
<!--[if IE]><script src="../js/excanvas.compiled.js" type="text/javascript"></script><![endif]-->
<!-- must have -->

	<script>
		jQuery(function() {

			jQuery('#allinone_carousel_charming').allinone_carousel({
				skin: 'charming',
				width: 990,
				height: 454,
				responsive:true,
				autoPlay: 3,
				resizeImages:true,
				autoHideBottomNav:false,
				showElementTitle:false,
				verticalAdjustment:50,
				showPreviewThumbs:false,
				//easing:'easeOutBounce',
				numberOfVisibleItems:5,
				nextPrevMarginTop:23,
				playMovieMarginTop:0,
				bottomNavMarginBottom:-10
			});		
		});
	</script>
<!-- Owl Carousel Assets -->
<link href="../css/owl.carousel.css" rel="stylesheet">
<script src="../js/owl.carousel.js"></script>
		<script>
			$(document).ready(function() {

				$("#owl-demo").owlCarousel({
					items : 4,
					lazyLoad : true,
					autoPlay : true,
					navigation : true,
					navigationText : ["", ""],
					rewindNav : false,
					scrollPerPage : false,
					pagination : false,
					paginationNumbers : false,
				});

			});
		</script>
		<!-- //Owl Carousel Assets -->
<!-- start circle -->
<script>
(function($){
	$.fn.percentPie = function(options){

		var settings = $.extend({
			width: 100,
			trackColor: "EEEEEE",
			barColor: "E2534B",
			barWeight: 30,
			startPercent: 0,
			endPercent: 1,
			fps: 60
		}, options);

		this.css({
			width: settings.width,
			height: settings.width
		});

		var	that = this,
			hoverPolice = false,
			canvasWidth = settings.width,
			canvasHeight = canvasWidth,
			id = $('canvas').length,
			canvasElement = $('<canvas id="'+ id +'" width="' + canvasWidth + '" height="' + canvasHeight + '"></canvas>'),
			canvas = canvasElement.get(0).getContext("2d"),
			centerX = canvasWidth/2,
			centerY = canvasHeight/2,
			radius = settings.width/2 - settings.barWeight/2;
			counterClockwise = false,
			fps = 1000 / settings.fps,
			update = .01;
			this.angle = settings.startPercent;

		this.drawArc = function(startAngle, percentFilled, color){
			var drawingArc = true;
			canvas.beginPath();
			canvas.arc(centerX, centerY, radius, (Math.PI/180)*(startAngle * 360 - 90), (Math.PI/180)*(percentFilled * 360 - 90), counterClockwise);
			canvas.strokeStyle = color;
			canvas.lineWidth = settings.barWeight;
			canvas.stroke();
			drawingArc = false;
		}

		this.fillChart = function(stop){
			var loop = setInterval(function(){
				hoverPolice = true;
				canvas.clearRect(0, 0, canvasWidth, canvasHeight);

				that.drawArc(0, 360, settings.trackColor);
				that.angle += update;
				that.drawArc(settings.startPercent, that.angle, settings.barColor);

				if(that.angle > stop){
					clearInterval(loop);
					hoverPolice = false;
				}
			}, fps);
		}

		this.mouseover(function(){
			if(hoverPolice == false){
				that.angle = settings.startPercent;
				that.fillChart(settings.endPercent);
			}
		});

		this.fillChart(settings.endPercent);
		this.append(canvasElement);
		return this;
	}
}(jQuery));

$(document).ready(function() {

	$('.google').percentPie({
		width: 100,
		trackColor: "E2534B",
		barColor: "76C7C0",
		barWeight: 20,
		endPercent: .9,
		fps: 60
	});
  
  $('.moz').percentPie({
		width: 100,
		trackColor: "E2534B",
		barColor: "76C7C0",
		barWeight: 20,
		endPercent: .75,
		fps: 60
	});
  
  $('.safari').percentPie({
		width: 100,
		trackColor: "E2534B",
		barColor: "#76C7C0",
		barWeight: 20,
		endPercent: .5,
		fps: 60
	});
    
});
</script>
<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getuser1.php?q="+str,true);
        xmlhttp.send();
    }
}
function showPaket(str){
  if(str == ""){
    document.getElementById("paket").innerHTML = "";
    return;
  }else {
    if (window.XMLHttpRequest) {
      xmlhttp = new XMLHttpRequest();
    }
    else{
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function(){
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("paket").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "getpaket.php?a="+str, true);
    xmlhttp.send();
  }

}
</script>


</head>
<body>
<div class="header_bg">
<div class="container">
	<div class="header">
		<div class="logo">
			<a href="index.html" style="font-size: 30px;color: #fff; text-decoration: none;">Alifia</a>
		</div>
		<div class="h_menu">
		<a id="touch-menu" class="mobile-menu" href="#">Menu</a>
		<nav>
		<ul class="menu list-unstyled">
			<li class="activate"><a href="index.html">HOME</a></li>
			<li><a href="#">ABOUT</a></li>
			<li><a href="#">services</a></li>
			<li><a href="#">CONTACT</a></li>
		</ul>
		</nav>
		<script src="../js/menu.js" type="text/javascript"></script>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
</div>
    <div id="fwslider"><!-- start slider -->
        <div class="slider_container">
            <div class="slide"> 
                <!-- Slide image -->
                    <img src="../images/slide/slide_intro.jpg">
                <!-- /Slide image -->
                <!-- Texts container -->
                <div class="slide_content">
                    <div class="slide_content_wrap">
                       
                    </div>
                </div>
                 <!-- /Texts container -->
            </div>
            <!-- /Duplicate to create more slides -->
            <div class="slide">
                <img src="../images/slide/slide 1.jpg">
                <div class="slide_content">
                    <div class="slide_content_wrap">
                       
                    </div>
                </div>
            </div>
            <div class="slide">
                <img src="../images/slide/slide 2.jpg">
                <div class="slide_content">
                    <div class="slide_content_wrap">
                       
                    </div>
                </div>
            </div>
            <div class="slide">
                <img src="../images/slide/slide 3.jpg">
                <div class="slide_content">
                    <div class="slide_content_wrap">
                       
                    </div>
                </div>
            </div>
            <div class="slide">
                <img src="../images/slide/slide 4.jpg">
                <div class="slide_content">
                    <div class="slide_content_wrap">
                       
                    </div>
                </div>
            </div>
            <!--/slide -->
        </div>
        <div class="timers"></div>
        <div class="slidePrev"><span></span></div>
        <div class="slideNext"><span></span></div>
    </div><!--/slider -->
<div class="main_bg"><!-- start main -->
<div class="container">
	<div class="main_grid">
			<div class="container"><div class="row">
			<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-body"><h3>Registrasi</h3><hr>

			<font size="2.5">
			<form class="row-border" action="action.php?action=tambah" method="post">
			<div class="form-group">
			<label>Nama Lengkap <span class="required">*</span></label>
			<input name="nama" type="text" class="required form-control">
			</div>

			
			<div class="form-group">
			<label>Tempat, tanggal lahir<span class="required">*</span></label>
			<input name="tetala" type="text" class="required form-control">
			</div>

			<div class="form-group">
			<label>Telp. Siswa <span class="required">*</span></label>
			<input name="TelpSiswa" type="text" class="required form-control">
			</div>


			<div class="form-group">
			<label>Tel. Ortu <span class="required">*</span></label>
			<input name="TelpOrtu" type="text" class="required form-control">
			</div>


			<div class="form-group">
			<label>Pilihan Paket<span class="required"></span></label>
			<select name="paket" class="required form-control" onchange="showPaket(this.value)">
    		<?php
			      $q="select * from Paket order by id_paket";

			      $show= mysqli_query($koneksi,$q);
			      while ($r= mysqli_fetch_array($show)) {
			         ?>
			      <option value="<?= $r['id_paket'] ?>"><?= $r['nama_paket']." (". $r['lama']?>)</option>

			    <?php      }    ?>

			</select>
			</div>

			<div class="form-group">
			<label>Harga Paket <span class="required"></span></label>
			<div id="paket"></div>
			</div>

			<div class="form-group">
			<label>Asrama<span class="required"></span></label>
			<select name="asrama" class="required form-control" onchange="showUser(this.value)">
				<?php

				$sql="SELECT * FROM asrama order by id";
				$result = mysqli_query($koneksi,$sql);

				while($row = mysqli_fetch_array($result)) {

				?>

				<option value="<?= $row['id']?>"><?= $row['nama'] ?> (<?= $row['tipe'] ?>)</option>

				<?php } ?>
			</select>
			</div>

			<div class="form-group">
			<label>Harga Asrama <span class="required"></span></label>
			<div id="txtHint"></div>
			</div>


			<div class="form-actions">
			<button class="btn  btn-warning" type="reset">Reset</button>
			<button class="btn btn-primary" name="Daftar" type="submit">Registrasi</button>
			<br>
			<p style="font-size: 10pt; font-weight: bold;">* Jangan lupa untuk mencetak/print terlebih dahulu formulir yang telah terdownload, untuk selanjutnya dibawa saat registrasi ulang di Pare (Tidak ada biaya tambahan untuk registrasi ulang).</p>
			</div>
			</form>
			</div></div>

			</div></div>
			
			<div class="clearfix"></div>
		</div>

	</div>
</div>
</div>
<div class="main1_bg"><!-- start main1 -->
<div class="container">
	<div class="main slider_text texxt-center">
		<h4>Alur Pendaftaran</h4>
		
</div>
</div>
<!-- start banner -->
<div id="bannerBg">
<div id="containingDiv">
            <div id="allinone_carousel_charming">
            	<div class="myloader"></div>
                <!-- CONTENT -->
                <ul class="allinone_carousel_list">
               		<li><img src="../images/slide/slide 1.jpg" alt="" class="img-responsive"/></li>
                    <li><img src="../images/slide/slide 2.jpg" alt="" class="img-responsive"/></li>
                    <li><img src="../images/slide/slide 3.jpg" alt="" class="img-responsive"/></li>
                    <li><img src="../images/slide/slide 4.jpg" alt="" class="img-responsive"/></li>
                    
                      
                </ul>    
          </div>
</div>
</div>
 <!-- end banner -->
</div>

<div class="footer_bg"><!-- start footer -->

</div>
</div>
<div class="footer1_bg"><!-- start footer1 -->
<div class="container">
	<div class="footer1">
		<div class="copy pull-left">
			<p class="link"><span>&#169; All rights reserved | &copy NajiBul Hoir</span></p>
		</div>
		<div class="soc_icons pull-right">
			<ul class="list-unstyled text-center">
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
</div>
</body>
</html>