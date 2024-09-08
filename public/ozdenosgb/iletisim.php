<!DOCTYPE html>
<html lang="tr-TR">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="canonical" href="http://www.ozdenosgb.com/iletisim" />
	
	<title>Bizimle İletişime Geçin » Özden OSGB</title>
	<meta name="description" content="Müşteri memnuniyetine en çok önem veren OSGB ve Ölçüm Laboratuvarıyla çalışmak istemez misiniz? Hemen Özden OSGB'yle iletişime geçin."/>

	<?php include("static_files.php"); ?>
	
    <!-- 
        You need to include this script tag on any page that has a Google Map.

        The following script tag will work when opening this example locally on your computer.
        But if you use this on a localhost server or a live website you will need to include an API key. 
        Sign up for one here (it's free for small usage): 
            https://developers.google.com/maps/documentation/javascript/tutorial#api_key

        After you sign up, use the following script tag with YOUR_GOOGLE_API_KEY replaced with your actual key.
            <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_API_KEY"></script>
    -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDxCeKGU7R76HYbqDiDJ6yoT3BP5Jop1co"></script>
    
    <script type="text/javascript">
        // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);
    
        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 11,

                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(40.993484, 29.102066), // New York

                // How you would like to style the map. 
                // This is where you would paste any style found on Snazzy Maps.
                styles: [{"featureType":"all","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"all","elementType":"labels","stylers":[{"visibility":"off"},{"saturation":"-100"}]},{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40},{"visibility":"off"}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"off"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"color":"#4d6059"}]},{"featureType":"landscape","elementType":"geometry.stroke","stylers":[{"color":"#4d6059"}]},{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"color":"#4d6059"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"lightness":21}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#4d6059"}]},{"featureType":"poi","elementType":"geometry.stroke","stylers":[{"color":"#4d6059"}]},{"featureType":"road","elementType":"geometry","stylers":[{"visibility":"on"},{"color":"#7f8d89"}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"color":"#7f8d89"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#7f8d89"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#7f8d89"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#7f8d89"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#7f8d89"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"color":"#7f8d89"}]},{"featureType":"road.local","elementType":"geometry.stroke","stylers":[{"color":"#7f8d89"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#2b3638"},{"visibility":"on"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#2b3638"},{"lightness":17}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#24282b"}]},{"featureType":"water","elementType":"geometry.stroke","stylers":[{"color":"#24282b"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels.text.stroke","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels.icon","stylers":[{"visibility":"off"}]}]
            };

            // Get the HTML DOM element that will contain your map 
            // We are using a div with id="map" seen below in the <body>
            var mapElement = document.getElementById('map');

            // Create the Google Map using our element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);

            // Let's also add a marker while we're at it
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(40.993484, 29.102066),
                map: map,
                title: 'Snazzy!'
            });
			
			var contentString = 
                '<div id="content" style="text-align:center; font-size:25px; font-weight:500;">' +
					'Genel Müdürlük' + 
                '</div>';
			
			var infowindow = new google.maps.InfoWindow({
				content: contentString,
				maxWidth: 400
			});
			
			google.maps.event.addListener(marker, 'click', function() {
			   infowindow.open(map,marker);
			});
			infowindow.open(map,marker);
        }
    </script>
</head>
<body>
	<?php include("header.php"); ?>
	
	<div class="page-image-header">
		<div class="container">
			<h1>ÖZDEN OSGB İLE TANIŞIN</h1>
			<p>Ekibimizle iletişime geçerek dilediğiniz konuda bilgi alabilir, hizmetlerimizi daha detaylı bir şekilde öğrenebilir ve özel bir teklif alabilirsiniz.</p>
		</div>
	</div>
	
	<div class="container breadcrumb-container">
		<ol class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
			<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				<a href="/" title="Özden OSGB Anasayfası" itemprop="item">
					<i class="fa fa-home"></i> 
					<span itemprop="name">Anasayfa</span>
				</a>
				<meta itemprop="position" content="1" />
			</li>
			<li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				<a href="iletisim" title="Özden OSGB'yle Hemen İletişime Geçin" itemprop="item">
					<span itemprop="name">İletişim</span>
				</a>
				<meta itemprop="position" content="2" />
			</li>
		</ol>
	</div>
	
	<section class="iletisim">
		<div class="container">
			<div class="row circles">
				<div class="col-md-10 col-md-offset-1 ">
					<div class="row">
						<div class="col-sm-3 col-xs-6">
							<div class="contacts">
								<a href="tel: 0216 6123360" title="Özden OSGB Müşteri Hizmetleri Telefon Numarası">
									<img src="img/iletisim/tel.png" alt="telefon numarası">
									<br/>
									0216 612 33 60
								</a>
							</div>
						</div>
						<div class="col-sm-3 col-xs-6">
							<div class="contacts">
								<a href="mailto:bilgi@ozdenosgb.com">
									<img src="img/iletisim/email.png" alt="Email Adresi">
									<br/>
									bilgi@ozdenosgb.com
								</a>
							</div>
						</div>
						<div class="col-sm-3 col-xs-6">
							<div class="contacts">
								<a href="https://www.instagram.com/ozdenosgb" target="_blank">
									<img src="img/iletisim/instagram.png" alt="instagram">
									<br/>
									@ozdenosgb
								</a>
							</div>
						</div>
						<div class="col-sm-3 col-xs-6">
							<div class="contacts">
								<a href="https://www.facebook.com/ozdenosgb" target="_blank">
									<img src="img/iletisim/facebook.png" alt="facebook">
									<br/>
									/OzdenOSGB
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row top80">
				<div class="col-md-12">
					<h2 class="first-header">Kapsama Alanımız</h2>
				</div>
				<div class="col-md-3">
					<p>Hedefimiz üstün hizmet kalitesiyle tüm Türkiye'nin OSGB'si olmak ve bu hedefe ulaşmak için sürekli yeni şubeler açıyor süreçlerimizi iyileştiriyoruz.</p>
					<p>OSGB hizmeti verdiğimiz tüm illere <a href="kapsama-alanimiz">kapsama alanımız</a> sayfasından ulaşabilirsiniz.</p>
				</div>
				<div class="col-md-9">
					<img src="img/index/hizmet-verdigimiz-iller.png?v=5" alt="Özden OSGB Şubeleri" class="img-responsive">
				</div>
			</div>
		
			<div class="row top80">
				<div class="col-md-12">
					<h2 class="first-header">OSGB Genel Müdürlüğü ve İş Hijyeni Laboratuvarı</h2>
				</div>
				<div class="col-md-8">
			
					<div class="row offices">
						<div class="col-md-12">
							<div class="breadcrumb">
								<h3>OSGB Genel Müdürlük</h3>
								Varyap Meridian Otel & Ofis
								<br/>
								Barbaros Mah. Mor Sümbül Sk. No:1/178 
								<br/>
								(Sheraton Grand Ataşehir Binası)
								<br/>
								Batı Ataşehir / İSTANBUL
								<br/>
								<b>0 216 612 33 60</b>
							</div>
						</div>
					</div>
					<div class="row offices">
						<div class="col-md-12">
							<div class="breadcrumb">
								<h3>OSGB Şubelerimiz</h3>
								<div class="row kapsama-alanimiz">
									<div class="col-md-4">
										<a href="osgb-istanbul" title="Özden OSGB İstanbul" class="btn btn-primary white">34 - İstanbul</a>
									</div>
									<div class="col-md-4">
										<a href="osgb-ankara" title="Özden OSGB Ankara" class="btn btn-primary white">06 - Ankara</a>
									</div>
									<div class="col-md-4">
										<a href="osgb-izmir" title="Özden OSGB İzmir" class="btn btn-primary white">35 - İzmir</a>
									</div>
									<div class="col-md-4">
										<a href="izmit" title="Özden OSGB Kocaeli (İzmit)" class="btn btn-primary white">41 - Kocaeli (İzmit)</a>
									</div>
									<div class="col-md-4">
										<a href="bursa" title="Özden OSGB Bursa" class="btn btn-primary white">16 - Bursa</a>
									</div>
									<div class="col-md-4">
										<a href="adana" title="Özden OSGB Adana" class="btn btn-primary white">01 - Adana</a>
									</div>
									<div class="col-md-4">
										<a href="antalya" title="Özden OSGB Antalya" class="btn btn-primary white">07 - Antalya</a>
									</div>
									<div class="col-md-4">
										<a href="kapsama-alanimiz" title="Özden OSGB Konya" class="btn btn-primary white">42 - Konya</a>
									</div>
									<div class="col-md-4">
										<a href="kapsama-alanimiz" title="Özden OSGB Mersin" class="btn btn-primary white">33 - Mersin</a>
									</div>
									<div class="col-md-4">
										<a href="kapsama-alanimiz" title="Özden OSGB Manisa" class="btn btn-primary white">45 - Manisa</a>
									</div>
									<div class="col-md-4">
										<a href="kapsama-alanimiz" title="Özden OSGB Aydın" class="btn btn-primary white">09 - Aydın</a>
									</div>
									<div class="col-md-4">
										<a href="kapsama-alanimiz" title="Özden OSGB Denizli" class="btn btn-primary white">20 - Denizli</a>
									</div>
									<div class="col-md-4">
										<a href="kapsama-alanimiz" title="Özden OSGB Sakarya (Adapazarı)" class="btn btn-primary white">54 - Sakarya (Adapazarı)</a>
									</div>
									<div class="col-md-4">
										<a href="kapsama-alanimiz" title="Özden OSGB Tekirdağ" class="btn btn-primary white">59 - Tekirdağ</a>
									</div>
									<div class="col-md-4">
										<a href="kapsama-alanimiz" title="Özden OSGB Muğla" class="btn btn-primary white">48 - Muğla</a>
									</div>
									<div class="col-md-4">
										<a href="kapsama-alanimiz" title="Özden OSGB Eskişehir" class="btn btn-primary white">26 - Eskişehir</a>
									</div>
									<div class="col-md-4">
										<a href="kapsama-alanimiz" title="Özden OSGB Zonguldak" class="btn btn-primary white">67 - Zonguldak</a>
									</div>
									<div class="col-md-4">
										<a href="kapsama-alanimiz" title="Özden OSGB Düzce" class="btn btn-primary white">81 - Düzce</a>
									</div>
									<div class="col-md-4">
										<a href="kapsama-alanimiz" title="Özden OSGB Bolu" class="btn btn-primary white">14 - Bolu</a>
									</div>
									<div class="col-md-4">
										<a href="kapsama-alanimiz" title="Özden OSGB Karabük" class="btn btn-primary white">78 - Karabük</a>
									</div>
									<div class="col-md-4">
										<a href="kapsama-alanimiz" title="Özden OSGB Bilecik" class="btn btn-primary white">11 - Bilecik</a>
									</div>
									<div class="col-md-4">
										<a href="kapsama-alanimiz" title="Özden OSGB Çankırı" class="btn btn-primary white">18 - Çankırı</a>
									</div>
									<div class="col-md-4">
										<a href="kapsama-alanimiz" title="Özden OSGB Niğde" class="btn btn-primary white">51 - Niğde</a>
									</div>
									<div class="col-md-4">
										<a href="kapsama-alanimiz" title="Özden OSGB Karaman" class="btn btn-primary white">70 - Karaman</a>
									</div>
									<div class="col-md-4">
										<a href="kapsama-alanimiz" title="Özden OSGB Yalova" class="btn btn-primary white">77 - Yalova</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row offices">
						<div class="col-md-12">
							<div class="breadcrumb">
								<h3>Ortam Ölçümü Laboratuvarı</h3>
								Merkür Palace İş Merkezi
								<br/>
								Tatlısu Mah. Akif İnan Sk. No:8/16
								<br/>
								Ümraniye / İSTANBUL
								<br/>
								<b>0 216 612 33 80</b>
							</div>
						</div>
					</div>
					<div class="breadcrumb coffee">
						<i class="fa fa-lg fa-coffee"></i> Kahvemizi içmeye bekliyoruz
					</div>
				</div>
				<div class="col-md-4">
					<div class="breadcrumb varyap">
						<img src="img/iletisim/varyap.jpg" alt="Varyap Meridian Ofis & Otel" class="img-responsive"/>
						<p>Varyap Meridian Otel & Ofis binasındayız.<br/>(Sheraton Otel binası)</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<div id="map"></div>

	<?php include("footer.php"); ?>
</body>
</html>