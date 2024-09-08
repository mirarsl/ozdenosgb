<!DOCTYPE html>
<html class=" js no-touch cssanimations csstransitions">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Nermin Alpar - Figurative Portrait Artist</title>
	<meta name="description" content="Figurative painting artist Nermin Alpar's website.">
	<meta name="keywords" content="nerminalpar, female artist, figurative painting ">
	<?php include("static_files.php"); ?>
</head>
<body id="body">
	<div class="se-pre-con"></div>

	<div class="theme-layout">
		<div class="boxed-padding">

			<?php 
				$page = 'tatli-tuzlu-kadinlar';
				include("header.php"); 
				$counter = 1;
			?>

			<div class="grid-portfolio-sec">
				<div class="row" id="masonry-grid">

					<div class="col-12 wow fadeInUp" data-wow-delay="<?php echo ($counter * 0.1); ?>s">
						<h4 id="tatli-tuzlu-kadinlar" style="margin-bottom:5px;">Tatlı Tuzlu Kadınlar (2021)</h4>
						<hr style="margin-top: 0px;">
					</div>

					<?php
						$arts = [];
						$tmp = ["name" => "", 		"size" => "100 x 80 cm",	"image" => "./img/tatli/15",  	"status" => ""]; array_push($arts, $tmp);
						$tmp = ["name" => "", 		"size" => "80 x 40 cm",		"image" => "./img/tatli/14",  	"status" => ""]; array_push($arts, $tmp);
						$tmp = ["name" => "", 		"size" => "25 x 25 cm",		"image" => "./img/tatli/29",  	"status" => ""]; array_push($arts, $tmp);
						$tmp = ["name" => "", 		"size" => "80 x 80 cm",		"image" => "./img/tatli/9",  	"status" => "sold"]; array_push($arts, $tmp);
						$tmp = ["name" => "", 		"size" => "60 x 60 cm",		"image" => "./img/tatli/1",  	"status" => ""]; array_push($arts, $tmp);
						$tmp = ["name" => "", 		"size" => "60 x 60 cm",		"image" => "./img/tatli/2",  	"status" => ""]; array_push($arts, $tmp);
						$tmp = ["name" => "", 		"size" => "60 x 60 cm",		"image" => "./img/tatli/4",  	"status" => ""]; array_push($arts, $tmp);
						$tmp = ["name" => "", 		"size" => "60 x 60 cm",		"image" => "./img/tatli/3",  	"status" => ""]; array_push($arts, $tmp);
						$tmp = ["name" => "", 		"size" => "50 x 50 cm",		"image" => "./img/tatli/5",  	"status" => ""]; array_push($arts, $tmp);
						$tmp = ["name" => "", 		"size" => "50 x 50 cm",		"image" => "./img/tatli/6",  	"status" => ""]; array_push($arts, $tmp);
						$tmp = ["name" => "", 		"size" => "50 x 50 cm",		"image" => "./img/tatli/7",  	"status" => ""]; array_push($arts, $tmp);
						$tmp = ["name" => "", 		"size" => "80 x 80 cm",		"image" => "./img/tatli/12",  	"status" => "sold"]; array_push($arts, $tmp);
						$tmp = ["name" => "", 		"size" => "50 x 50 cm",		"image" => "./img/tatli/8",  	"status" => ""]; array_push($arts, $tmp);
						$tmp = ["name" => "", 		"size" => "80 x 80 cm",		"image" => "./img/tatli/10",  	"status" => ""]; array_push($arts, $tmp);
						$tmp = ["name" => "", 		"size" => "80 x 80 cm",		"image" => "./img/tatli/11",  	"status" => ""]; array_push($arts, $tmp);
						$tmp = ["name" => "", 		"size" => "80 x 40 cm",		"image" => "./img/tatli/13",  	"status" => ""]; array_push($arts, $tmp);
						$tmp = ["name" => "", 		"size" => "25 x 25 cm",		"image" => "./img/tatli/26",  	"status" => ""]; array_push($arts, $tmp);
						$tmp = ["name" => "", 		"size" => "100 x 100 cm",	"image" => "./img/tatli/16",  	"status" => ""]; array_push($arts, $tmp);
						$tmp = ["name" => "", 		"size" => "100 x 100 cm",	"image" => "./img/tatli/17",  	"status" => ""]; array_push($arts, $tmp);
						$tmp = ["name" => "", 		"size" => "100 x 100 cm",	"image" => "./img/tatli/18",  	"status" => ""]; array_push($arts, $tmp);
						$tmp = ["name" => "", 		"size" => "40 x 40 cm",		"image" => "./img/tatli/19",  	"status" => ""]; array_push($arts, $tmp);
						$tmp = ["name" => "", 		"size" => "40 x 40 cm",		"image" => "./img/tatli/20",  	"status" => ""]; array_push($arts, $tmp);
						$tmp = ["name" => "", 		"size" => "30 x 60 cm",		"image" => "./img/tatli/21",  	"status" => ""]; array_push($arts, $tmp);
						$tmp = ["name" => "", 		"size" => "30 x 60 cm",		"image" => "./img/tatli/22",  	"status" => ""]; array_push($arts, $tmp);
						$tmp = ["name" => "", 		"size" => "40 x 60 cm",		"image" => "./img/tatli/23",  	"status" => ""]; array_push($arts, $tmp);
						$tmp = ["name" => "", 		"size" => "40 x 60 cm",		"image" => "./img/tatli/24",  	"status" => ""]; array_push($arts, $tmp);
						$tmp = ["name" => "", 		"size" => "25 x 25 cm",		"image" => "./img/tatli/25",  	"status" => "sold"]; array_push($arts, $tmp);
						$tmp = ["name" => "", 		"size" => "25 x 25 cm",		"image" => "./img/tatli/27",  	"status" => ""]; array_push($arts, $tmp);
						$tmp = ["name" => "", 		"size" => "25 x 25 cm",		"image" => "./img/tatli/28",  	"status" => "sold"]; array_push($arts, $tmp);
						$tmp = ["name" => "", 		"size" => "25 x 25 cm",		"image" => "./img/tatli/30",  	"status" => ""]; array_push($arts, $tmp);
					?>

					<?php foreach($arts as $key=>$value): ?>
					    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="<?php echo ($counter * 0.1); ?>s">
					    	<?php $counter += 1; ?>
						    <a href="<?php echo $value['image']; ?>.jpg" data-lightbox="image-1" data-title="<?php echo $value['name']; ?> / <?php echo $value['size']; ?> <?php if ($value['status'] == 'sold') echo '/ SOLD';?> " class="d-none d-xl-block">
								<div class="grid-portfolio">
									<img src="<?php echo $value['image']; ?>.jpg" alt="">
									<div class="grid-title">
										<h3><?php echo $value['name']; ?></h3>
										<small class="art-size"><?php echo $value['size']; ?></small>
										<?php if ($value["status"] == "sold")
											echo "<br><small class='art-size text-danger'>SATILDI / SOLD</small>";
										?>
									</div>
								</div>
							</a>

							<div class="grid-portfolio d-xl-none">
								<img src="<?php echo $value['image']; ?>.jpg" alt="">
								<div class="grid-title">
									<h3><?php echo $value['name']; ?></h3>
									<small class="art-size"><?php echo $value['size']; ?></small> 
									<?php if ($value["status"] == "sold")
										echo "<br><small class='art-size text-danger'>SATILDI / SOLD</small>";
									?>
								</div>
							</div>
						</div>
				    <?php endforeach; ?>
				</div>
			</div>
		</div>
		
		<a href="javascript:void(0);" class="menu-btn d-xl-none">
			<div class="wrapper-menu gray" style="">
				<div class="line-menu half start"></div>
				<div class="line-menu"></div>
				<div class="line-menu half end"></div>
			</div>
		</a>
	</div>
	
</body>