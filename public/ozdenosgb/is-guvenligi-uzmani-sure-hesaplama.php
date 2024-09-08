<!DOCTYPE html>
<html lang="tr-TR">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="canonical" href="http://www.ozdenosgb.com/is-guvenligi-uzmani-sure-hesaplama" />
	
	<title>İş Güvenliği Uzmanı Süre Hesaplama » Özden OSGB</title>
	<meta name="description" content="Ayda kaç saat iş güvenliği uzmanı hizmeti almanız gerektiğini, Özden OSGB'nin hazırladığı hesaplama aracını kullanarak hesaplayın."/>

	<?php include("static_files.php"); ?>
</head>
<body>
	<?php include("header.php"); ?>

	<div class="page-image-header">
		<div class="container">
			<h1>UZMAN ÇALIŞMA SÜRESİ HESAPLAMA</h1>
			<p>Bu sayfa, sektördeki en popüler süre hesaplama aracıdır. Binlerce kişi bu sayfayı kullanarak işyerlerinin uzman, hekim ve sağlık personeli bulundurma zorunluluğunu hesaplıyor.</p>
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
			<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				<a href="hizmetlerimiz" title="İSG Hizmetleri" itemprop="item">
					<span itemprop="name">Hizmetlerimiz</span>
				</a>
				<meta itemprop="position" content="2" />
			</li>
			<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				<a href="hizmet-suresi-hesaplama" title="Uzman, Hekim, Hemşire Çalışma Süresi Hesaplama" itemprop="item">
					<span itemprop="name">Hizmet Süresi Hesaplama</span>
				</a>
				<meta itemprop="position" content="3" />
			</li>
			<li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				<a href="is-guvenligi-uzmani-sure-hesaplama" title="İş Güvenliği Uzmanı hizmet süresi hesaplama" itemprop="item">
					<span itemprop="name">İş Güvenliği Uzmanı</span>
				</a>
				<meta itemprop="position" content="4" />
			</li>
		</ol>
	</div>
	
    <div class="container sure-hesaplama-section">
		<h2>Ayda kaç saat iş güvenliği uzmanı hizmeti almanız gerekiyor? Hemen hesaplayın</h2>
		<div class="row hesapla-row">
            <div class="col-md-4 col-md-offset-4">
                <div class="input-group">
                  <input id="calisan_sayisi" type="text" class="form-control" placeholder="İşyeri Çalışan Sayısı">
                  <span class="input-group-btn">
                    <button onclick="sureHesapla2016('uzman');" class="btn btn-success" type="button">Hesapla</button>
                  </span>
                </div>
            </div>
        </div>
		
		
		<div class="row" id="hesaplama-result">
            <div class="col-md-8 col-md-offset-2">
                <div class="thumbnail">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="img/osgb/uzman.png" alt="İş Güvenliği Uzmanı" class="img-responsive">
                        </div>
                        <div class="col-md-3">
                            <div class="tehlike-area">
                                <b>Az Tehlikeli İşyeri</b>
                                <hr/>
								<br/>
								<p id="sureC"></p>
								<br/>
								<br/>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="tehlike-area">
                                <b>Tehlikeli İşyeri</b>
                                <hr/>
								<br/>
								<p id="sureB"></p>
								<br/>
								<br/>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="tehlike-area">
                                <b>Çok Tehlikeli İşyeri</b>
                                <hr/>
								<br/>
								<p id="sureA"></p>
								<br/>
								<br/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	<?php include("footer.php"); ?>
	<script src="js/sure_hesaplama.js"></script>	
</body>
</html>
