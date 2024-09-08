<!DOCTYPE html>
<html lang="tr-TR">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:url"           content="http://www.ozdenosgb.com/blog/evde-isg-sampiyonu-musunuz.php" />
	<meta property="og:type"          content="website" />
	<meta property="og:title"         content="Evden Çalışırken İSG Kurallarına Uyuyor musun? Kendini Test Et." />
	<meta property="og:description"   content="Karantina süresince evden çalışıyorsun. Peki iş sağlığı ve güvenliği kurallarına ne kadar uyuyorsun?" />
	<meta property="og:image"         content="http://www.ozdenosgb.com/img/blog/isg-sampiyonu.jpg" />

	<link rel="canonical" href="http://www.ozdenosgb.com/blog/evde-isg-sampiyonu-musunuz" />

    <title>Evde İSG Şampiyonu musunuz? » Özden OSGB </title>
    <meta name="description" content="İş sağlığı ve güvenliği kanunun getirdiği yenilikleri ve yükümlülükleri 10 soruda inceledik.">

	<? 
        $prefix = './../';	
		include("./../static_files.php"); 
	?>
	<style type="text/css">
		h2{
			border:0px !important;
			margin-top: 0px;
			margin-bottom: 10px;
		}
		[type=radio] { 
		  position: absolute;
		  opacity: 0;
		  width: 0;
		  height: 0;
		}

		/* IMAGE STYLES */
		[type=radio] + img {
		  cursor: pointer;
		}

		/* CHECKED STYLES */
		[type=radio]:checked + img {
		  outline: 2px solid #333;
		}
	</style>
</head>
<body>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	    var js, fjs = d.getElementsByTagName(s)[0];
	    if (d.getElementById(id)) return;
	    js = d.createElement(s); js.id = id;
	    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
	    fjs.parentNode.insertBefore(js, fjs);
	  	}(document, 'script', 'facebook-jssdk'));
	</script>

	<?php include("./../header.php"); ?>
	
	<div class="page-image-header">
		<div class="container">
			<h1>EVDEN ÇALIŞMALARDA İSG KURALLARINA NE KADAR UYUYORSUNUZ?</h1>
			<p>Karantina döneminde evden çalışırken iş sağlığı ve güvenliği kurallarına ne kadar uyduğunuzu test edebilirsiniz.</p>
		</div>
	</div>
	
	<div class="container breadcrumb-container">
		<ol class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
			<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				<a href="<?echo $prefix ?>" title="Özden OSGB Anasayfası" itemprop="item">
					<i class="fa fa-home"></i> 
					<span itemprop="name">Anasayfa</span>
				</a>
				<meta itemprop="position" content="1" />
			</li>
			<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				<a href="<?echo $prefix ?>blog/" title="Özden OSGB Kütüphanesi" itemprop="item">
					<span itemprop="name">Blog</span>
				</a>
				<meta itemprop="position" content="2" />
			</li>
			<li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				<a href="<?echo $prefix ?>blog/evde-isg-sampiyonu-musunuz" title="10 Soruda Yeni İş Sağlığı ve Güvenliği Kanunu" itemprop="item">
					<span itemprop="name">Evde İSG Şampiyonu musunuz?</span>
				</a>
				<meta itemprop="position" content="3" />
			</li>
		</ol>
	</div>
	
	<section class="blog">
		<div class="container">
			<div class="row">
				<div class="col-md-4 left-side">
					<div class="thumbnail">
						<img src="<?echo $prefix ?>img/blog/isg-sampiyonu.jpg" alt="Evde İSG Şampiyonu Kim?" class="img-responsive">
					</div>
					<div class="writer-area">
						<p><i class="fa fa-user"></i> <b>Yazan:</b> Oktay Coşkun</p>
						<p><i class="fa fa-calendar"></i> <b>Tarih:</b> 08/04/2020</p>
					</div>
				</div>
				<div class="col-md-8">

					Siz de Corona salgını süresince evden çalışan 4 milyar insandan biriyseniz, alışılagelmiş işyeri düzeninizin dışına çıkmışsınız demektir. Normalde iş güvenliği uzmanı ve işyeri hekiminizin gözetimde olan işyeri ortamı şuanda tamamen sizin sorumluluğunuzda. Bu soruları sizin için hazırladık.
					<br><br>

					<?php
					  $z = [];
					  array_push($z, ['yes', 'Çalışma masanızı konumu ve yönünü sizi fiziki ve mental olarak strese sokmayacak şekilde ayarladınız mı?']);
					  array_push($z, ['yes', 'Ortam aydınlatması, yapılan işler için yeterli mi?']);
					  array_push($z, ['yes', 'Çalışma ortamı, oda sıcaklığı, nemi ve hava akımı açısında rahat hissedilecek düzeyde mi?']);
                      array_push($z, ['no', 'Çalışma ortamını etkileyen aşırı gürültü var mı?']);
                      array_push($z, ['yes', 'Çalışma ortamı, evdeki diğer tehlikelerden, örneğin mutfakta sıcak pişirme yüzeyinden ayrılmış mı?']);
                      array_push($z, ['yes', 'Geçiş yolları takılmayı neden olacak eşya ve malzemelerden arındırılmış, açık ve temiz durumda mı?']);
                      array_push($z, ['yes', 'Zeminin veya üzerinde bulunan yüzeyin(halı, kilim v.b) kaymaması için gerekli önlemler alınmış mı?']);
                      array_push($z, ['yes', 'Balkon korkuluk yükseklikleri en az 1metre mi?']);
                      array_push($z, ['yes', 'Eletrik panosunda(ev içi) kaçak akım rölesi var mı?']);
                      array_push($z, ['yes', 'İşle ilgili ekipman için (bilgisayar, vs.) topraklama mevcut mu?']);
                      array_push($z, ['no', 'Kırık priz, ucu açık veya izolasyonu yıpranmış/açılmış elektrik kablosu var mı?']);
                      array_push($z, ['no', 'Ara/uzatma kabloları kullanılıyor mu?']);
                      array_push($z, ['yes', 'Gaz kullanılan alanlarda (örn: mutfak) gaz detektörleri mevcut mu?']);
                      array_push($z, ['yes', 'Çalışma masa ve sandalyenizi doğru oturuş poziyonunu alacak şekilde ayarlanabiliyor mu?']);
                      array_push($z, ['yes', 'Çalışma masasının altında yeterli bacak boşluğu var mı?']);
                      array_push($z, ['yes', 'Kollarınızı masaya koyduğunuzda alt kol kısmınız yere paralel mi?']);
                      array_push($z, ['yes', 'Ayak desteği kullanılıyor mu?']);
                      array_push($z, ['yes', 'Oturma pozisyonunda, en sık kullanılan parçalara kolayca ulaşılabiliyor mu?']);
                      array_push($z, ['yes', 'Sandalyenin bel desteği ayarlanabiliyor mu?']);
                      array_push($z, ['yes', 'Klavye önünde bilek desteği mevcut mu?']);
                      array_push($z, ['yes', 'Fare kalvyenin yanında ve klavye ile aynı seviyede mi?']);
                      array_push($z, ['yes', 'Ekran yüksekliği, ekranın üstü göz seviyesinde veya biraz daha düşük olacak şekilde ayarlanabiliyor mu?(Göz hizasından hizasından 15°-50° aşağıda)']);
                      array_push($z, ['yes', 'Ekran ne çok yakın, ne de uzak olacak şekilde ayarlanabiliyor mu? (50-75cm)']);
                      array_push($z, ['yes', 'Ekranda görünen karakterler kolayca seçilebilecek sekil ve formda, uygun büyüklükte, satır ve karakterler arasında yeterli boşluk bulunacak şekilde ayarlanabiliyor mu?']);
                      array_push($z, ['yes', 'Ekran görüntüsü stabil, görüntünün titremesi ve benzeri olumsuzlukların önüne geçilebiliyor mu?']);
                      array_push($z, ['yes', 'Herhangi bir kaldırma ve/veya taşıma sırasında fiziksel kapasite ve ergonomi kuralları gözetiliyor mu?']);
                      array_push($z, ['yes', 'Bilekler düz tutuluyor ve yazarken herhangi bir destek kullanılıyor mu?']);
                      array_push($z, ['yes', 'Düzenli mola veriliyor mu?']);
                      array_push($z, ['yes', 'Yangın detektörleri(tesisatlı/pilli/şarjlı) mevcut mu?']);
                      array_push($z, ['yes', 'Yangın söndürme cihazı var mı?']);
                      array_push($z, ['yes', 'Binanızda yangın söndürme sistemi mevcut mu?']);
                      array_push($z, ['no', 'Açık alev bulunan(ocak, soba, şömine v.b) alanların yakınında yanıcı malzeme var mı?']);
                      array_push($z, ['yes', 'Kimyasal sıvı ve jel kimyasallar(deterjanlar dahil) gibi çabuk alevlenir maddeler açık alev kaynaklarından ve diğer sıcak yüzeylerden yeterince uzakta konumlandırılmış mı?']);
                      array_push($z, ['yes', 'Binanın yangın merdiveni mevcut mu?']);
                      array_push($z, ['yes', 'Yangın anında asansör kullanımının yasak olduğunu, kaçış merdivenlerinin kullanılması gerektiği biliniyor mu?']);
                      array_push($z, ['yes', 'Devrilebilecek eşyalar sabitlenmiş mi?']);
                      array_push($z, ['yes', 'Mobilyaların ve rafların üzerinden düşebilecek malzemeler kaldırılmış veya sabitlenmiş mi?']);
                      array_push($z, ['yes', 'Avizeler düşmelere karşı sabitlenmiş mi?']);
                      array_push($z, ['yes', 'İçinde devrilebilecek eşya bulunan dolaplar(mutfak dolabı v.b) ve kitaplıklar kapaklı mı?']);
                      array_push($z, ['yes', 'Dolap kapakları kilitlenebiliyor mu?']);
                      array_push($z, ['yes', 'Var ise hareketli ekipmanların tekerlekleri kilitenebiliyor mu?']);
                      array_push($z, ['yes', 'Yaşam üçgeni oluşturabilecek alanlar belirlendi mi?']);
                      array_push($z, ['yes', 'Var ise arabada bulundurulmak üzere deprem/afet çantası hazırlanmış mı?']);
                      array_push($z, ['yes', 'Evde yaşayan tüm bireyler ile acil durum anında hareket tarzı belilenmiş mi?']);
                      array_push($z, ['yes', 'Acil durumlarda veya sonrasında nerede buluşulacağı ve ne şekilde haberleşileceği belirlenmiş mi?']);
                      array_push($z, ['yes', 'Tüm yetişkinler elektrik, gaz, su ve diğer enerji kaynaklarının nereden ve ne şekilde kesileceğini biliyor mu?']);
                      array_push($z, ['yes', 'Evde yaşayan tüm bireyler acil durum halinde asansör yerine acil çıkış merdivenlerini kullanması gerektiğini biliyor mu?']);
                      array_push($z, ['yes', 'Evde çocuk/bebek olması durumunda, çocuk/bebek ile ilgili yetişkinler görev dağılımı yaptı mı ve görevlerini biliyor mu?']);
                      array_push($z, ['yes', 'Deprem/Afet çantası/çantaları mevcut mu?']);
                      array_push($z, ['yes', 'Tüm yetişkinler deprem/afet çantalarının yerini biliyor mu?']);
                      array_push($z, ['yes', 'İlkyardım çantası/çantaları mevcut mu?']);
                      array_push($z, ['yes', 'Tüm yetişkinler ilkyardım çantalarının yerini biliyor mu?']);
                      array_push($z, ['yes', 'İlkyardım çantalarının içeriği ve malzemelerin güncelliği periyodik olarak kontrol ediliyor mu?']);
                      array_push($z, ['yes', 'Daire içi ve dışı acil çıkış yolları belirlenmiş mi ve açık/temiz durumda mı?']);
                      array_push($z, ['yes', 'Acil çıkış yollarında enerji kesintisine karşın acil durum aydınlatması mevcut mu?']);
                      array_push($z, ['yes', 'İçinde bulunulan binanın Acil Durum Toplanma Alanı var mı?']);
                      array_push($z, ['yes', 'Acil Durum Toplanma Alanının yeri herkes tarafından biliniyor mu?']);    

					?>
					

					<?php foreach ($z as $key=>$value): ?>
						<h2><?=$key+1?>. <?=$value[1]?></h2>
						<div class="row">
							<div class="col-md-4">
								<div style="margin-bottom: 20px;">
									<label>
										<input type="radio" name="key_<?=$key?>" value="<?php if ($value[0] == 'yes'): ?>yes<?php endif; ?>">
										<img src="<?echo $prefix ?>/img/blog/icon/evet.jpg">
									</label>
									<label>
										<input type="radio" name="key_<?=$key?>" value="<?php if ($value[0] == 'no'): ?>yes<?php endif; ?>">
										<img src="<?echo $prefix ?>/img/blog/icon/hayir.jpg">
									</label>
								</div>
							</div>
							<div class="col-md-8">
		
							</div>
						</div>

					<?php endforeach ?>

					<br>
					<a class="btn btn-info" style="" href="javascript:sonuclari_gor();">Sonuçları Gör</a>

					<div id="score_area" style="display: none;">
						<br>
						<br>
						<br>
						<br>
						<h4>Evde İSG Puanın: <span id="score"></span> / 100</h4>
						<div class="row">
							<div class="col-md-4">
								<img id="up" style="display: none;" src="<?echo $prefix ?>/img/blog/isgchamp_up.jpg">
								<img id="down" style="display: none;" src="<?echo $prefix ?>/img/blog/isgchamp_down.jpg">
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>

	<?php include("./../footer.php"); ?>
	<script type="text/javascript">
		$(document).ready(function () {
	        $('input:radio').change(function () {
	        	$("#up").hide();
	        	$("#down").hide();
	        	if($('input:radio:checked').length == <?=count($z) ?>) {
	        		$("#score_area").show();
	        		score = $('input:radio[value=yes]:checked').length * 100 / <?=count($z) ?>;
	        		$("#score").html(score.toFixed(0));
	        		
	        		if(score >= 85) {
	        			$("#up").show();
	        		}
	        		else {
	        			$("#down").show();
	        		}
					
					window.location.hash = '#score_area';
	        	}
	        });
	    });
	    function sonuclari_gor() {
	    	$("#up").hide();
	        $("#down").hide();

	    	$("#score_area").show();
    		score = $('input:radio[value=yes]:checked').length * 100 / <?=count($z) ?>;
    		$("#score").html(score.toFixed(0));
    		
    		if(score >= 85) {
    			$("#up").show();
    		}
    		else {
    			$("#down").show();
    		}
			
			window.location.hash = '#score_area';
	    }
	</script>
</body>
</html>
