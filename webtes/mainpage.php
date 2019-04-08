<style>
a
{
	text-decoration: none;
}
.corner
{
	border-bottom-left-radius: 95px;
}
.header_menu
{
	z-index:2;
	top:45px;
	left:100px;
	position:absolute;
}
.tab_menu
{
	z-index:2;
	top:20px;
	right:250px;
	position:absolute;
}
.tab_menu_co
{
	z-index:1;
	top:-10px;
	border-radius: 25px;
	position:absolute;
	background-color: #0c6176;
	height:43px;
	width:470px;
	margin-left: 0px;
}
.menu_log
{
	z-index:2;
	top:-5px;
	right:-220px;
	position:absolute;
}
.why
{
	z-index:2;
	width: 100%;
	height: 75%;
	margin-top:30px;
	border-bottom-left-radius: 95px;
	background-color: white;
	position:relative;
}
.berita
{
	z-index:2;
	width: 100%;
	height: 80%;
	margin-top:30px;
	border-bottom-left-radius: 95px;
	background-color: white;
	position:relative;
}
.mitra
{
	z-index:1;
	width: 100%;
	height: 80%;
	margin-top:-80px;
	border-bottom-left-radius: 95px;
	background-color: #0c6176;
	color:white;
}
.download
{
	z-index:1;
	width: 100%;
	height: 50%;
	/*margin-top:-70px;*/
	background-color: #fad41b;
	color:#0c6176;
}
.footer
{
	z-index:1;
	width: 100%;
	height: 50%;
	/*margin-top:80px;*/
	background-color: #0c6176;
}
.img-mitra
{
	width: 50%;
}
.w_left
{
	width: 50%;
}
.kotak-tgl
{
    position: absolute;
    top: 11%;
    left: 8%;
    opacity: 1;
    transform: translate(-50%, -50%);
    height:46px;
    width:40px;
}
.hra {
    margin-top: 20px;
    margin-bottom: 20px;
    border: 15;
    border-top: 1px solid #fad41b;
}
.col-centered {
    float: none;
    margin: 0 auto;
}

.carousel-control { 
    width: 8%;
    width: 0px;
}
.carousel-control.left,
.carousel-control.right { 
    margin-right: 40px;
    margin-left: 32px; 
    background-image: none;
    opacity: 1;
}
.carousel-control > a > span {
    color: white;
	  font-size: 29px !important;
}

.carousel-col { 
    position: relative; 
    min-height: 1px; 
    padding: 5px; 
    float: left;
 }

 .active > div { display:none; }
 .active > div:first-child { display:block; }

/*xs*/
@media (max-width: 767px) {
  .carousel-inner .active.left { left: -50%; }
  .carousel-inner .active.right { left: 50%; }
	.carousel-inner .next        { left:  50%; }
	.carousel-inner .prev		     { left: -50%; }
  .carousel-col                { width: 50%; }
	.active > div:first-child + div { display:block; }
}

/*sm*/
@media (min-width: 768px) and (max-width: 991px) {
  .carousel-inner .active.left { left: -50%; }
  .carousel-inner .active.right { left: 50%; }
	.carousel-inner .next        { left:  50%; }
	.carousel-inner .prev		     { left: -50%; }
  .carousel-col                { width: 50%; }
	.active > div:first-child + div { display:block; }
}

/*md*/
@media (min-width: 992px) and (max-width: 1199px) {
  .carousel-inner .active.left { left: -33%; }
  .carousel-inner .active.right { left: 33%; }
	.carousel-inner .next        { left:  33%; }
	.carousel-inner .prev		     { left: -33%; }
  .carousel-col                { width: 33%; }
	.active > div:first-child + div { display:block; }
  .active > div:first-child + div + div { display:block; }
}

/*lg*/
@media (min-width: 1200px) {
  .carousel-inner .active.left { left: -25%; }
  .carousel-inner .active.right{ left:  25%; }
	.carousel-inner .next        { left:  25%; }
	.carousel-inner .prev		     { left: -25%; }
  .carousel-col                { width: 25%; }
	.active > div:first-child + div { display:block; }
  .active > div:first-child + div + div { display:block; }
	.active > div:first-child + div + div + div { display:block; }
}

</style>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	</head>
	<body>
	<div class="col-lg-12 col-xs-12">
		<div class="">
			<div id="banner-carousel" class="carousel slide" data-ride="carousel">
				<div class="header_menu">
					<img src="logo_kasirpintar.png" style="width:20%;">
					<div class="tab_menu">
						<div class="" style="z-index:2;position:relative;left:20px">
							<a href="" style="color:white;text-decoration: none;z-index:2;"><b>Ipsum</b></a>
							<a href="" style="color:white;text-decoration: none;z-index:2;"><b>Lorem Ipsum</b></a>
							<a href="" style="color:white;text-decoration: none;z-index:2;"><b>Lorem </b></a>
							<a href="" style="color:white;text-decoration: none;z-index:2;"><b>Dolor</b></a>
						</div>
						<div class="menu_log">
							<button class="btn btn-succes" style="border-radius: 10px;background-color:#ffcb00 ">
								<a href="" style="color:#0c6176;text-decoration: none;"><b>Lorem | </b></a>
								<a href="" style="color:#0c6176;text-decoration: none;"><b>Ipsum</b></a>
							</button>
							<img src="id.png" style="width:12%;">
						</div>
						<div class="tab_menu_co">
						</div>
					</div>
				</div>
				
			    <ol class="carousel-indicators">
					    <li data-target="#banner-carousel" data-slide-to="0" class="active" style="background-color: #0c6176;"></li>
					    <li data-target="#banner-carousel" data-slide-to="1" style="background-color: #0c6176"></li>
					    <li data-target="#banner-carousel" data-slide-to="2" style="background-color: #0c6176;"></li>
			    </ol>
			    <div class="carousel-inner">
			      <div class="item active">
			        <img class ="corner" src="teswebsite-17.png" style="width:100%;">
			      </div>

			      <div class="item">
			        <img class ="corner" src="teswebsite-17.png" style="width:100%;">
			      </div>
			    
			      <div class="item">
			        <img class ="corner" src="teswebsite-17.png" style="width:100%;">
			      </div>
			    </div>
			 </div>
			<div class="why">
				<center>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 w_left">
					<h1 style="text-align: left;"><b>Mengapa</b> <br> <font color="#0c6176">KasirPintar</font></h1>
					<p style="text-align:justify">
						Berawal dari harga mesin kasir yang belum terjangkau oleh banyaknya UMKM terutama yang beroperasi sebagai toko kelontongan, warung/restoran/kafe, salon/babershop, laundry, fotografi, toko pertanian, toko kerajinan, toko elektronik dan percetakan. Pembukuan dan transaksi dilakukan secara tradisional. Yaitu dengan melihat daftar harga barang yang tersedia, menghitung, lalu mencatat hasil transaksi kedalam buku. Padahal selain tidak efisien karena memakan waktu lama, metode ini juga kurang akurat karena presentase kesalahan yang disebabkan human-error tinggi. Karena itulah, kami membuat sebuah aplikasi berbasis Android yang bernama Kasir Pintar. Kami mendesain aplikasi kasir online ini dengan tampilan simple dan mudah untuk dipahami. Transaksi cepat dan dapat digunakan dalam keadaan online dan offline. Dengan Kasir Pintar anda tidak perlu khawatir dengan kehilangan data karena sudah terintegrasi dengan sistem Cloud handal. 
					</p>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 w_left">
					<img src="teswebsite-02.png" style="width:50%;">
				</div>
				</center>
			</div>
			<div class="mitra">
				<div class="clearfix" style="height:100px"></div>
				<center>
				 <div class="row">
				    <div class="col-xs-11 col-md-10 col-centered">
				    	<div class="" style="margin-top:80px;margin-left:80px">
							<h1 style="text-align: left;"><b>Mitra</b> <br>KasirPintar</h1>
							<p style="text-align:justify">
								
							</p>
						</div>
						<div id="carousel" class="carousel slide" data-ride="carousel" data-type="multi" data-interval="2500">
							<div class="carousel-inner">
								<div class="item active">
									<div class="carousel-col">
										<a href="#1"><img src="teswebsite-04.png" class="img-mitra img-responsive"></a>
									</div>
								</div>
								<div class="item">
									<div class="carousel-col">
										<a href="#1"><img src="teswebsite-05.png" class="img-mitra img-responsive"></a>
									</div>
								</div>
								<div class="item">
									<div class="carousel-col">
										<a href="#1"><img src="teswebsite-06.png" class="img-mitra img-responsive"></a>
									</div>
								</div>
								<div class="item">
									<div class="carousel-col">
										<a href="#1"><img src="teswebsite-07.png" class="img-mitra img-responsive"></a>
									</div>
								</div>
							</div>
							<!-- <div class="left carousel-control">
								<a href="#carousel" role="button" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
							</div> -->
							<div class="right carousel-control" style="background-image: none; margin-top:50;margin-right:-200">
								<a href="#carousel" role="button" data-slide="next">
									<img src="teswebsite-03.png" class="img-responsive" style="width:20%">
								</a>
							</div>
						</div>
					</div>
				</div>
				</center>
			</div>
			<div class="berita">
				<div class="clearfix" style="height:10px"></div>
				<h1 style="text-align: center;color="#0c6176"">Update Berita<br>Terbaru</h1>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<div class="kotak-tgl"><center><font style="font-size:14px;color:white;"><b>00</b></font><br><font style="font-size:12px;color:white;"><b>Feb</b></font></center></div>
					<img src="teswebsite-11.png" style="width:100%;">
					<figcaption>By KasirPintar | Apa</figcaption>
					<b>Berita Apa</b>
					<p>
						Lorem ipsum dolor sit atmet,consecter.Lorem ipsum dolor sit atmet,consecter.Lorem ipsum dolor sit atmet,consecter.
					</p>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<div class="kotak-tgl"><center><font style="font-size:14px;color:white;"><b>00</b></font><br><font style="font-size:12px;color:white;"><b>Feb</b></font></center></div>
					<img src="teswebsite-12.png" style="width:100%;">
					<figcaption>By KasirPintar | Apa</figcaption>
					<b>Berita Apa</b>
					<p>
						Lorem ipsum dolor sit atmet,consecter.Lorem ipsum dolor sit atmet,consecter.Lorem ipsum dolor sit atmet,consecter.
					</p>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<div class="kotak-tgl"><center><font style="font-size:14px;color:white;"><b>00</b></font><br><font style="font-size:12px;color:white;"><b>Feb</b></font></center></div>
					<img src="teswebsite-10.png" style="width:100%;">
					<figcaption>By KasirPintar | Apa</figcaption>
					<b>Berita Apa</b>
					<p>
						Lorem ipsum dolor sit atmet,consecter.Lorem ipsum dolor sit atmet,consecter.Lorem ipsum dolor sit atmet,consecter.
					</p>
				</div>
			</div>
			<div class="download">
				<center>
				<div style="margin-top: -80px;position: relative;">
					<div style="display: none"><b>Download KasirPintar</b><br>
					<b>Sekarang Juga</b></div>
				</div>
				<center>
				<div class="col-lg-12 w_left">
					<div class="clearfix" style="height:120px"></div>
					<h1 style="text-align: center;"><b>Download KasirPintar</b><br>
					<b>Sekarang Juga</b>
					</h1>
					<button class="btn btn-succes" style="border-radius: 10px;background-color: #0c6176;color: #fad41b"><b>Download</b></button>
				</div>
				</center>
				</center>
			</div>
			<div class="footer">
				<div class="clearfix" style="height:60px"></div>
				<div class="" style="margin-left: 10%">
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
					<h3 style="color:#fad41b">KasirPintar</h3>
					<a href="" style="color:white">Beranda</a><br>
					<a href="" style="color:white">FAQ</a><br>
					<a href="" style="color:white">Kebijakan Privasi</a>
					
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
					<h3 style="color:#fad41b">Hubungi Kami</h3>
					<a href="" style="color:white">(+62) 81333559040</a><br>
					<a href="" style="color:white">admin@kasirpintar.co.id</a><br>
					<a href="" style="color:white">Setiap Hari (08.00 - 21.00)</a>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
					<h3 style="color:#fad41b">Company</h3>
					<a href="" style="color:white">Tentang Kami</a><br>
					<a href="" style="color:white">Karir</a><br>
					<a href="" style="color:white">Blog</a><br>
					<a href="" style="color:white">Graphic Standart Manual</a>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
					<h3 style="color:#fad41b">Plug In</h3>
					<a href="" style="color:white;text-decoration: none;">Business Account</a><br>
					<a href="" style="color:white;text-decoration: none;">Ingredients</a><br>
					<a href="" style="color:white;text-decoration: none;">Food Menu</a>
					<a href="" style="color:white;text-decoration: none;">Akuntansiku</a>
				</div>
				<div class="clearfix" style="height:160px"></div>
				
				</div>
				<hr class="hra" color="#fad41b" size="80%" width="90%" border="10">
				<div class="row">
					<div class="col-lg-6">
						<h5 style="color:white;margin-left: 70px">Lorem Ipsum dolor</h5>
					</div>
					<div class="col-lg-6">
						<div style="text-align: right;margin-right: 60px">
							<a href=""><img src="teswebsite-13.png" style="width:5%;"></a>
							<a href=""><img src="teswebsite-14.png" style="width:5%;"></a>
							<a href=""><img src="teswebsite-15.png" style="width:5%;"></a>
							<a href=""><img src="teswebsite-16.png" style="width:5%;"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</body>
</html>
<script type="text/javascript">
	$('.carousel[data-type="multi"] .item').each(function() {
	var next = $(this).next();
	if (!next.length) {
		next = $(this).siblings(':first');
	}
	next.children(':first-child').clone().appendTo($(this));

	for (var i = 0; i < 2; i++) {
		next = next.next();
		if (!next.length) {
			next = $(this).siblings(':first');
		}

		next.children(':first-child').clone().appendTo($(this));
	}
});
</script>