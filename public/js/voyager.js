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
      content_css: '/css/voyagers.css',
      templates: [
         {
            title: 'Kırmızı Background Beyaz Text Alert',
            description: 'Kırmızı Background Beyaz Text Alert',
            content: '<div class="ilgi"><a style="font-size:22px; color:white;" href="#" class="text-center"><p> İçeriğiniz Buraya Gelecek </p></a></div>'
         }, 
      ],
      init_instance_callback: (editor) => {
         console.log(editor);
      },
   };
   // Sadece myettings'deki yeni özellikleri settings'e ekleyin
   Object.assign(settings, myettings);
   tinymce.init(settings);
});
