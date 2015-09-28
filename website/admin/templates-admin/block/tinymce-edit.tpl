<script type="text/javascript">
/* <![CDATA[ */
var elementId = '{$elementId}'
// tinymce.init({
//     selector: '#'+elementId
//  });

tinymce.init({
    //selector: "#"+elementId,theme: "modern",width: 680,height: 300,
    selector: "#"+elementId,theme: "modern",
    plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak",
         "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
         "table contextmenu directionality emoticons paste textcolor responsivefilemanager"
   ],
   toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
   toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code ",
   image_advtab: true ,
   
   external_filemanager_path:"/filemanager/",
   filemanager_title:"Responsive Filemanager" ,
   external_plugins: { "filemanager" : "plugins/responsivefilemanager/plugin.min.js"}
 });


$(document).ready(function() {
  $.validator.setDefaults({
      ignore: ''
  }); 
});


/* ]]> */
</script>