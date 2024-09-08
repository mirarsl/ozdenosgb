<!DOCTYPE html>
<html lang="tr-TR">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:url"           content="http://www.ozdenosgb.com/blog/sirketiniz-pandemiye-karsi-ne-kadar-guclu" />
	<meta property="og:type"          content="website" />
	<meta property="og:title"         content="Evden Çalışırken İSG Kurallarına Uyuyor musun? Kendini Test Et." />
	<meta property="og:description"   content="Karantina süresince evden çalışıyorsun. Peki iş sağlığı ve güvenliği kurallarına ne kadar uyuyorsun?" />
	<meta property="og:image"         content="http://www.ozdenosgb.com/img/blog/isg-sampiyonu.jpg" />

	<link rel="canonical" href="http://www.ozdenosgb.com/blog/sirketiniz-pandemiye-karsi-ne-kadar-guclu" />

    <title>Şirketiniz Pandemiye Karşı Ne Kadar Güçlü? » Özden OSGB </title>
    <meta name="description" content="Pandemi'ye ne kadar hazırsınız.">

	<?php 
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
			<h1>ŞİRKETİNİZ PANDEMİYE KARŞI NE KADAR GÜÇLÜ?</h1>
			<p>Pandemi kelimesi hayatımıza girdi ve uzun süre hayatımızda kalmaya devam edecek. Aşağıdaki soruları yanıtlayıp Covid-19 pandemisine ve ileride olabilecek pandemilere ne kadar hazır olduğunuzu görebilirsiniz.</p>
		</div>
	</div>
	
	<div class="container breadcrumb-container">
		<ol class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
			<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				<a href="<?php echo $prefix ?>" title="Özden OSGB Anasayfası" itemprop="item">
					<i class="fa fa-home"></i> 
					<span itemprop="name">Anasayfa</span>
				</a>
				<meta itemprop="position" content="1" />
			</li>
			<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				<a href="<?php echo $prefix ?>blog/" title="Özden OSGB Kütüphanesi" itemprop="item">
					<span itemprop="name">Blog</span>
				</a>
				<meta itemprop="position" content="2" />
			</li>
			<li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				<a href="<?php echo $prefix ?>blog/sirketiniz-pandemiye-karsi-ne-kadar-guclu" title="10 Soruda Yeni İş Sağlığı ve Güvenliği Kanunu" itemprop="item">
					<span itemprop="name">Şirketiniz Pandemiye Karşı Ne Kadar Güçlü?</span>
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
						<img src="<?php echo $prefix ?>img/blog/pandemic_ready.png" alt="Şirketiniz pandemiye hazır mı?" class="img-responsive">
					</div>
					<div class="writer-area">
						<p><i class="fa fa-user"></i> <b>Yazan:</b> Oktay Coşkun</p>
						<p><i class="fa fa-calendar"></i> <b>Tarih:</b> 19/04/2020</p>
					</div>
				</div>
				<div class="col-md-8">

					Asya ülkeleri salgın hastalık tehlikesiyle uzun süredir yüzyüze. Dolayısıyla bu ülkeler adaptasyon sürecinde Avrupa ve Amerika'dan çok öndeler. Siz de hazırladığımız bu checklisti kullanarak, şirketinizin yeni pandemilere ne kadar hazır olduğunu ölçebilirsiniz. 
					<br><br>

					<?php
					  $z = [];
					  array_push($z, ['yes', 2, 'Acil Durum Planına ek olarak Pandemi Durum Planı hazırlandı mı?']);
					  array_push($z, ['yes', 2, 'Bütün çalışanların acil durum planı konusunda bilgisinin sahip olması sağlandı mı?']);
					  array_push($z, ['yes', 2, 'Covid-19 ile ilgili işyeri özelinde tehlikeler belirlenerek risk analizi revize edildi mi?']);
					  array_push($z, ['yes', 2, 'Çalışanların ruhsal sağlığını korumak adına, psikososyal risk etmenleri değerlendirilerek doğru ve etkin bilgilendirme yapılıyor mu? Çalışanlara verilecek olan iş sağlığı ve güvenliği eğitimleri uzaktan eğitim şeklinde, işyeri temizliği ve düzeni, hijyen ve psikososyal risk faktörleri konuları önceliklendirilerek veriliyor mu? Eğitimlerde aile ve toplumsal yaşama ilişkin öneriler de yer alıyor mu?']);
					  array_push($z, ['yes', 2, 'Çalışanlara el yıkama ve hijyen eğitimi verildi mi?']);
					  array_push($z, ['yes', 2, 'Çalışanlara maskenin nasıl kullanılması gerektiği gösterildi mi?']);
					  array_push($z, ['yes', 2, 'Özden OSGB tarafından yapılan Canlı Yayınların tekrarı çalışanlara izletildi mi? Yayınların tamamına <a href="../covid19-cizelge">www.ozdenosgb.com/covid19-cizelge</a> linkinden ulaşabilirsiniz.']);
					  array_push($z, ['yes', 3, 'Fiilen çalışılıyorsa, herkesin ateşi temassız ölçer ile her gün ölçülüyor mu?']);
					  array_push($z, ['yes', 3, 'Fiilen çalışılıyorsa, çalışanların sosyal mesafesi korunuyor mu? Bunun için uyarıcı işaretler vs. yerleştirildi mi?']);
					  array_push($z, ['yes', 3, 'Fiilen çalışılıyorsa, çalışanların hasta olduklarında evde kalmalarını teşvik eden, öksürük ve hapşırma görgü kurallarını içeren ve el hijyeninin önemini anlatan afiş/poster/talimatlar işyerinin girişine ve herkesin görebileceği diğer alanlara asıldı mı?']);
					  array_push($z, ['yes', 3, 'Özden OSGB tarafından gönderilen afişler asıldı mı? Afişlerin tamamına <a href="../covid19-cizelge">www.ozdenosgb.com/covid19-cizelge</a> linkinden ulaşabilirsiniz.']);
					  array_push($z, ['yes', 3, 'Fiilen çalışılıyorsa, çalışanlara tek kullanımlık mendiller ve biyolojik atıklar için ayrı çöp torbaları sağlandı mı?']);
					  array_push($z, ['yes', 3, 'Temizlik personeline, çöplerin içeriğine temas edilmeden boşaltılması için gerekli uyarılar yapıldı mı?']);
					  array_push($z, ['yes', 3, 'Fiilen çalışılıyorsa, el dezenfektanları her yere konuldu mu?']);
					  array_push($z, ['yes', 3, 'Fiilen çalışılan işyerlerinde hassas risk grubunda olanlar evden çalışma için yönlendirildi mi?']);
					  array_push($z, ['yes', 3, 'Fiilen çalışılan yerlerde yüzeylerin, ekipmanın ve çalışma ortamının diğer öğelerinin rutin olarak temizlenmesi ve dezenfekte edilmesi dahil olmak üzere düzenli temizlik uygulamaları sürdürülüyor mu? Fiilen çalışılan yerlerde çalışma alanları, lavabo, tuvalet, banyo, merdiven korkulukları, musluk ve yemekhaneler, yatakhaneler, dinlenme alanları, giyinme/soyunma odaları, kapı, turnike gibi ortak kullanım alanlarında hijyen şartlarına uyuluyor mu?']);
					  array_push($z, ['yes', 3, 'Fiilen çalışılan yerlerde klavyeler ve diğer cihazlar da düzenli olarak temizleniyor mu? Mümkün olduğunca işçilerin diğer çalışanların telefonlarını, masalarını, ofislerini veya diğer çalışma araçlarını ve ekipmanlarını kullanmaları engelleniyor mu?']);
					  array_push($z, ['yes', 3, 'Fiilen çalışılan işyerlerine ziyaret kısıtlamaları getirildi mi? Acil olmayan ziyaretler ve dışardan alınan hizmetlerden acil olmayanlar iptal edildi mi?']);
					  array_push($z, ['yes', 3, 'Fiilen çalışılan yerlerde servis araçlarının özellikle sık temas edilen yüzeyleri başta olmak üzere temizlik ve hijyeni sık aralıklarla sağlanıyor mu?']);
					  array_push($z, ['yes', 3, 'Fiilen çalışılan yerlerde çalışanların işyerlerine giriş-çıkış kayıtları esnasında kullanılacak yöntemler fiziksel temasta bulunmayacakları şekilde düzenlendi mi?']);
					  array_push($z, ['yes', 3, 'Fillen çalışılan yerlerde İşyeri belirli aralıklarla mümkünse doğal yolla havalandırılıyor mu?']);
					  array_push($z, ['yes', 3, 'Fiilen çalışılan yerlerde varsa yemekhanelerde uygun termal konfor şartları ve hijyen sağlanıyor mu? Aynı anda yemek yiyen çalışan sayısı (öncelikli olarak kumanya verilmesi, kapalı kapta tek kullanımlık içme suyu sağlanması, mümkün olmaması durumunda çalışanların vardiyalı şekilde yemek yemesi, aynı anda yemek yiyecek çalışanların mesafeli oturabileceği şekilde bir düzen kurulması veya çalışanın her gün aynı masaya oturmasını sağlayacak numaralandırma sistemi vb.) azaltıldı mı?']);
					  array_push($z, ['yes', 3, 'Fiilen çalışılan yerlerde varsa iş giysileri ve koruyucu ekipmanlar, çalışma alanından ayrılmadan önce çıkarılıyor mu? ve diğer giysilerden ayrı bir yerde muhafaza edilmesi sağlanıyor mu? Kirlenmiş bu giysilerin ve koruyucu ekipmanların virüsten arındırılarak temizliği sağlanıyor mu? gerektiği hallerde ise imha ediliyor mu?']);
					  array_push($z, ['yes', 3, 'Fiilen çalışan yerlerde toplantılar yüzyüze yapılmamalı. Toplantılar online hale getirildi mi?']);
					?>
					

					<?php foreach ($z as $key=>$value): ?>
						<h2><?=$key+1?>. <?=$value[2]?></h2>
						<div class="row">
							<div class="col-md-4">
								<div style="margin-bottom: 20px;">
									<label>
										<input type="radio" name="key_<?=$key?>" value="<?php if ($value[0] == 'yes'): ?>yes<?php endif; ?>">
										<img src="<?php echo $prefix ?>/img/blog/icon/evet.jpg">
									</label>
									<label>
										<input type="radio" name="key_<?=$key?>" value="<?php if ($value[0] == 'no'): ?>yes<?php endif; ?>">
										<img src="<?php echo $prefix ?>/img/blog/icon/hayir.jpg">
									</label>
									<?php if ($value[1] == 3): ?>
										<label>
											<input type="radio" name="key_<?=$key?>" value="<?php if ($value[0] == 'yes'): ?>yes<?php endif; ?>">
											<img src="<?php echo $prefix ?>/img/blog/icon/evdencalisma.jpg">
										</label>
									<?php endif ?>
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
						<h4>Şirketinizin Pandemiye Karşı Gücü: <span id="score"></span> / 100</h4>
						<div class="row">
							<div class="col-md-4">
								<img id="up" style="display: none;" src="<?php echo $prefix ?>/img/blog/pandemi_up.jpg">
								<img id="down" style="display: none;" src="<?php echo $prefix ?>/img/blog/pandemi_down.jpg">
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
