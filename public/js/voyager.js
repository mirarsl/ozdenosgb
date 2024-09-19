// function tinymce_init_callback(editor)
// {  
//    editor.remove();
// }
$(window).on('load', function () {
   tinymce.remove();
   var settings = window.voyagerTinyMCE.getConfig();
   var myettings = {
      menubar: true,
      image_advtab: true,
      base_url: '',
      plugins: 'template link image table code lists',
      toolbar: 'styleselect | bold italic underline | forecolor backcolor | alignleft aligncenter alignright | bullist numlist outdent indent | link image table | code template',
      content_css: '/css/voyager_tinymce.css',
      templates: [
         {
            title: 'Kırmızı Background Beyaz Text Alert',
            description: 'Kırmızı Background Beyaz Text Alert',
            content: '<div class="ilgi"><a style="font-size:22px; color:white;" href="#" class="text-center"><p> İçeriğiniz Buraya Gelecek </p></a></div>'
         }, 
         {
            title: 'İlginizi Çekebilir',
            description: 'İlginizi Çekebilir İSG Videoları',
            content: '<div class="ilgi"><div class="row"><div class="col-xs-3 col-md-2"><img src="/img/index/video-icon.png" alt="isg videoları" class="img-responsive"></div><div class="col-xs-8 col-md-10"><p>İLGİNİZİ ÇEKEBİLİR!</p><p class="sub"><a style="font-size:22px;" target="_blank" href="/isg-videolari"><u>İSG Videoları</u></a></p></div></div></div>'
         }, 
         {
            title: 'Card Danger',
            description:"Bootstrap Card",
            content:'<div class="panel panel-danger"><div class="panel-heading"><b>Eski Hali</b></div><div class="panel-body"></div></div>',
         }
      ],
      init_instance_callback: (editor) => {
      },
   };
   // Sadece myettings'deki yeni özellikleri settings'e ekleyin
   Object.assign(settings, myettings);
   tinymce.init(settings);
});
