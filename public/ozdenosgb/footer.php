<section id="teklif-section">
	<div class="container">
		<div class="teklif-iste row">
			<div class="col-sm-2">
				<img src="<?php echo $prefix ?>img/index/saka.png" class="img-responsive" alt="İş Güvenliği Şakaya Gelmez" title="İş Güvenliği Şakaya Gelmez"/>
			</div>
			<div class="col-sm-5" id="column-content">
				Gözünüz arkada kalmasın istiyorsanız,
				siz de <span id="cm">Türkiye'nin en başarılı OSGB'siyle çalışın.</span>
			</div>
			<div class="col-sm-5">
				<a href="<?php echo $prefix ?>iletisim" class="btn btn-lg btn-success cm-btn">Hemen Teklif İsteyin</a>
			</div>
		</div>
	</div>
</section>
<footer id="myFooter">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="logo"><a href="<?php echo $prefix ?>" title="Özden OSGB Anasayfası"><img src="<?php echo $prefix ?>img/logo_footer.png" alt="Özden OSGB Logo" title="Özden OSGB Logo"/></a></div>
            </div>
            <div class="col-sm-2 col-sm-offset-1">
                <p class="title">OSGB</p>
                <ul>
                    <li><a href="<?php echo $prefix ?>is-guvenligi-uzmani">İş Güvenliği Uzmanı</a></li>
                    <li><a href="<?php echo $prefix ?>isyeri-hekimi">İşyeri Hekimi</a></li>
                    <li><a href="<?php echo $prefix ?>saglik-personeli">Sağlık Personeli</a></li>
                    <li><a href="<?php echo $prefix ?>hizmet-suresi-hesaplama">Süre Hesaplama</a></li>
                </ul>
            </div>
            <div class="col-sm-2">
                <p class="title">ÖLÇÜM</p>
                <ul>
                    <li><a href="<?php echo $prefix ?>isyeri-ortam-olcumleri">Ortam Ölçümleri</a></li>
                    <li><a href="<?php echo $prefix ?>periyodik-test-ve-kontroller">Periyodik Kontrol</a></li>
                    <li><a href="<?php echo $prefix ?>akreditasyonlarimiz">Akreditasyonlarimiz</a></li>
                </ul>
            </div>
            <div class="col-sm-2">
                <p class="title">İSG PORTAL</p>
                <ul>
                    <li><a href="<?php echo $prefix ?>portal">İSG Yazılımı</a></li>
					<li><a href="<?php echo $prefix ?>is-sagligi-ve-guvenligi">İş Sağlığı ve Güvenliği</a></li>
					<li><a href="<?php echo $prefix ?>is-sagligi-ve-guvenligi-kanunu">İş Sağlığı ve Güvenliği Kanunu</a></li>
                </ul>
            </div>
            <div class="col-sm-2">
                <div class="social-networks">
                    <a href="https://twitter.com/ozdenosgb" class="twitter" target="_blank" title="Özden OSGB Twitter Hesabı"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.facebook.com/OzdenOsgb/" class="facebook" target="_blank" title="Özden OSGB Facebook Hesabı"><i class="fa fa-facebook"></i></a>
                    <a href="https://plus.google.com/117272397345116958309" class="google" target="_blank" title="Özden OSGB Google Plus Hesabı"><i class="fa fa-google-plus"></i></a>
                    <a href="https://instagram.com/ozdenosgb" class="google" target="_blank" title="Özden OSGB Instagram Hesabı"><i class="fa fa-instagram"></i></a>
                </div>
                <a href="<?php echo $prefix ?>iletisim" type="button" class="btn btn-default">İletişim</a>
            </div>
        </div>
    </div>
</footer>
<script src="<?php echo $prefix ?>js/jquery.min.js?v=2"></script>
<script src="<?php echo $prefix ?>js/bootstrap.min.js"></script>
<?php if (!isset($_SERVER['HTTP_USER_AGENT']) || stripos($_SERVER['HTTP_USER_AGENT'], 'Speed Insights') === false): ?>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-34807943-1', 'auto');
	  ga('send', 'pageview');
	</script>
<?php endif; ?>
<noscript id="deferred-styles">
   <link rel="stylesheet" type="text/css" href="<?php echo $prefix ?>font-awesome/css/font-awesome.min.css"/>
   <link rel="stylesheet" type="text/css" href="<?php echo $prefix ?>css/owl-carousel.min.css"/>
</noscript>
<script>
  var loadDeferredStyles = function() {
    var addStylesNode = document.getElementById("deferred-styles");
    var replacement = document.createElement("div");
    replacement.innerHTML = addStylesNode.textContent;
    document.body.appendChild(replacement)
    addStylesNode.parentElement.removeChild(addStylesNode);
  };
  var raf = requestAnimationFrame || mozRequestAnimationFrame ||
      webkitRequestAnimationFrame || msRequestAnimationFrame;
  if (raf) raf(function() { window.setTimeout(loadDeferredStyles, 0); });
  else window.addEventListener('load', loadDeferredStyles);
</script>

<?php
    if($page != "ai")
        echo '<script
          src="https://app.livechatai.com/embed.js"
          data-id="clncw2kv30009l30f0bx7yz0q"
          async defer>
        </script>'
?>

