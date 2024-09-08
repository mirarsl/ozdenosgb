<!DOCTYPE html>
<html lang="tr-TR">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="canonical" href="http://www.ozdenosgb.com/blog/su-kullanimi-afisleri" />
    <title>Su Kullanımı Afişleri » Özden OSGB</title>
    <meta name="description" content="Su Kullanımı Afişleri">
	<?php 
        $prefix = './../';	
		include("./../static_files.php"); 
	?>
</head>
<body>
	<?php include("./../header.php"); ?>
	
	<div class="page-image-header">
		<div class="container">
			<h1>SU KULLANIMI AFİŞLERİ</h1>
			<p>Küresel ısınmadan dolayı yağmur yağmaması, temiz su kaynaklarını verimli kullanmamız gerekliliğini bize tekrar hatırlattı. Farkındalık yaratması için hazırladığımız su kullanımı afişlerini işyerlerinize asabilirsiniz.</p>
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
				<a href="<?php echo $prefix ?>blog/su-kullanimi-afisleri" itemprop="item">
					<span itemprop="name">Su Kullanımı Afişleri</span>
				</a>
				<meta itemprop="position" content="3" />
			</li>
		</ol>
	</div>
	
	<section class="blog">
		<div class="container">
			<div class="row">
				<div class="col-md-4 left-side">
					<div class="writer-area">
						<p><i class="fa fa-user"></i> <b>Hazırlayan:</b> Elif Öztekin</p>
						<p><i class="fa fa-calendar"></i> <b>Tarih:</b> 13/01/2020</p>
					</div>
				</div>
				<div class="col-md-8">
					<div class="row">
						<div class="col-md-10">
							<div class="thumbnail">
								<img src="<?php echo $prefix ?>img/afis/suyu_koruyalim.jpg" alt="Suyu Koruyalım Afişi" class="img-responsive">
							</div>
						</div>
						<div class="col-md-2">
							<a href="<?php echo $prefix ?>img/afis/suyu_koruyalim.jpg" download class="btn btn-sm btn-primary" role = "button">
								<i class="fa fa-download"></i> İndir 
								<br>
								1920 x 1080
							</a> 
						</div>
					</div>

					<br>

					<div class="row">
						<div class="col-md-10">
							<div class="thumbnail">
								<img src="<?php echo $prefix ?>img/afis/su_israfi.jpg" alt="Su İsrafı Afişi" class="img-responsive">
							</div>
						</div>
						<div class="col-md-2">
							<a href="<?php echo $prefix ?>img/afis/su_israfi.jpg" download class="btn btn-sm btn-primary" role = "button">
								<i class="fa fa-download"></i> İndir
								<br>
								(1920 x 1080)
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php include("./../footer.php"); ?>
</body>
</html>
