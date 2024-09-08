<!DOCTYPE html>
<html lang="tr-TR">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="canonical" href="http://www.ozdenosgb.com/blog/ergonomi-testi" />

    <title>Ergonomi Testi (Rapid Office Strain Assessment - ROSA) » Özden OSGB </title>
    <meta name="description" content="Ergonomi Testi">

	<?php 
        $prefix = './../';	
		include("./../static_files.php"); 
	?>

</head>
<body>
	<?php include("./../header.php"); ?>
	
	<div class="page-image-header">
		<div class="container">
			<h1>Ergonomi Testi</h1>
			<p>Rapid Office Strain Assessment - ROSA</p>
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
				<a href="<?php echo $prefix ?>blog/ergonomi-testi" title="Ergonomi Testi" itemprop="item">
					<span itemprop="name">Ergonomi Testi</span>
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
						<img src="<?php echo $prefix ?>img/blog/ergonomi.png" alt="ergonomi nedir" class="img-responsive">
					</div>
					<div class="writer-area">
						<p><i class="fa fa-user"></i> <b>Yazan:</b> Dr. İsmail Hakkı Serin</p>
						<p><i class="fa fa-calendar"></i> <b>Tarih:</b> 28/03/2022</p>
					</div>
				</div>
				<div class="col-md-8">
					<p>Evden çalışma, yeni çalışma ve eğitim hayatının kalıcı bir parçası olacak gibi görünüyor. Bu durum pek çok sonucunun yanında ev ortamının çalışanlar ve öğrenciler için ergonomik uygunluğunun değerlendirilmesi ihtiyacını doğurması açısından da önemli.</p>

					<p>Rapid office strain assessment (ROSA) çalışma ortamını hızlı değerlendirmek ve sonrasında yapılacak iyileştirmelerle ilgili fikir vermek için uygun bir yöntem. Bir ofisin olası rahatsızlıklarla ilgili içerdiği genel risk seviyesini gösteren, gerektiğinde kendi kendine de uygulanabilen bir ofis ergonomisi değerlendirme aracı olarak oldukça pratik.</p>

					<p>Aşağıdaki link aracılığı ile çalışma ortamınızı değerlendirebilirsiniz.</p>

					<div class="ilgi">
						<a style="font-size:22px; color:white;" href="<?php echo $prefix ?>blog/rosa" class="text-center">
							<p>Teste Başla (32 Soru - 5 dk)</p>
						</a>
					</div>
				</div>
			</div>
		</div>
	
			
			
		</div>
	</section>

	<?php include("./../footer.php"); ?>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jquery.steps@1.1.1/dist/jquery-steps.min.css">
	<script src="https://cdn.jsdelivr.net/npm/jquery.steps@1.1.1/dist/jquery-steps.min.js"></script>

	<style type="text/css">
		.step-app>.step-steps>li.active {
			background-color: #2184be;
		}
		.step-app>.step-steps>li.done {
			background-color: #9dc8e2;
		}
	</style>
	
</body>
</html>
