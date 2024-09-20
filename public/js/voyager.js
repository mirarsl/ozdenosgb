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
      toolbar: 'undo redo | styleselect | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | outdent indent | bullist numlist | forecolor backcolor | fontsizeselect fontselect | link image media | code template | removeformat | subscript superscript | table | hr | preview | anchor | spellchecker | searchreplace | visualblocks visualchars | charmap | emoticons | fullscreen | insertdatetime | nonbreaking | save | directionality | print',
      plugins: 'advlist autolink link image lists charmap print preview hr anchor pagebreak searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking save table directionality template paste textpattern ',
      style_formats: [
         { title: 'Headers', items: [
            { title: 'Header 1', format: 'h1' },
            { title: 'Header 2', format: 'h2' },
            { title: 'Header 3', format: 'h3' },
            { title: 'Header 4', format: 'h4' },
            { title: 'Header 5', format: 'h5' },
            { title: 'Header 6', format: 'h6' }
         ]},
         { title: 'Inline', items: [
            { title: 'Bold', icon: 'bold', format: 'bold' },
            { title: 'Italic', icon: 'italic', format: 'italic' },
            { title: 'Underline', icon: 'underline', format: 'underline' },
            { title: 'Strikethrough', icon: 'strikethrough', format: 'strikethrough' },
            { title: 'Superscript', icon: 'superscript', format: 'superscript' },
            { title: 'Subscript', icon: 'subscript', format: 'subscript' },
            { title: 'Code', icon: 'code', format: 'code' }
         ]},
         { title: 'Blocks', items: [
            { title: 'Paragraph', format: 'p' },
            { title: 'Blockquote', format: 'blockquote' },
            { title: 'Div', format: 'div' },
            { title: 'Pre', format: 'pre' }
         ]}
      ],
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
            title:"Card Default",
            description:"Bootstrap Card",
            content:'<div class="panel panel-default"><div class="panel-heading"><b>Başlık</b></div><div class="panel-body"></div></div>',
         }, 
         {
            title: 'Card Danger',
            description:"Bootstrap Card",
            content:'<div class="panel panel-danger"><div class="panel-heading"><b>Başlık</b></div><div class="panel-body"></div></div>',
         },
         {
            title: 'Card Info',
            description:"Bootstrap Card",
            content:'<div class="panel panel-primary"><div class="panel-heading"><b>Başlık</b></div><div class="panel-body"></div></div>',
         },
         {
            title:"Buton",
            description:"Bootstrap Buton",
            content:'<a class="btn btn-primary btn-lg" href="#" title="">Buton Başlığı</a>'
         }
      ],
      init_instance_callback: (editor) => {
      },
      relative_urls: false,
      remove_script_host: true,
   };
   // Sadece myettings'deki yeni özellikleri settings'e ekleyin
   Object.assign(settings, myettings);
   tinymce.init(settings);
});
