<html>
  <title></title>
</head>
<body>
  <br>
<br>
<br>
<br>
<br>
<br>
<br>

        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/popup/dist/magnific-popup.css"> 
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/popup/video.css"> 
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/popup/formu.css"> 


        <script src="<?php echo base_url() ?>css/popup/dist/jquery.magnific-popup.min.js"></script> 
        <script src="<?php echo base_url() ?>css/popup/dist/jquery.magnific-popup.js"></script> 
        <script src="<?php echo base_url() ?>css/popup/form.js"></script> 


<script type="text/javascript">
      $(document).ready(function() {
        $('.popup-with-form').magnificPopup({
          type: 'inline',
          preloader: false,
          focus: '#name',

          // When elemened is focused, some mobile browsers in some cases zoom in
          // It looks not nice, so we disable it:
          callbacks: {
            beforeOpen: function() {
              if($(window).width() < 700) {
                this.st.focus = false;
              } else {
                this.st.focus = '#name';
              }
            }
          }
        });
      });

    </script>
    <script type="text/javascript">
    function validarForm(formulario) {
    if(formulario.Pregunta_u.value.length==0) { //comprueba que no esté vacío
      formulario.Pregunta_u.focus();   
      alert('No has escrito pregunta'); 
      return false; //devolvemos el foco
    }
    if(formulario.Respuesta_u.value.length==0) { //comprueba que no esté vacío
      formulario.Respuesta_u.focus();
      alert('No has escrito respuesta');
      return false;
    }
    
    alert('Convenio/universidad Creada Satisfactoriamente! ');
    return true;
  }
  </script>


  
    
<!-- link that opens popup -->

<!-- form itself -->

<div id="test-form" class="white-popup mfp-hide ">

    <link rel="stylesheet" href="<?php echo base_url()?>css/popup/formoid1/formoid-solid-blue.css" type="text/css" />


    <script type="text/javascript" src="preguntas_prueba_files/formoid1/jquery.min.js"></script>


  <form class="formoid-solid-blue" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:800px;min-width:150px" method="post" onsubmit="return validarForm(this)"><div class="title"><h2>Crear Preguntas Frecuentes</h2></div>
    <div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="input" required="required" placeholder="Pregunta"/><span class="icon-place"></span></div></div>
    <div class="element-textarea"><label class="title"><span class="required">*</span></label><div class="item-cont"><textarea class="medium" name="textarea" cols="20" rows="5" required="required" placeholder="Respuesta"></textarea><span class="icon-place"></span></div></div>
    <div class="element-separator"><hr><h3 class="section-break-title"></h3></div>
    <div class="submit"><input type="submit" value="Enviar"/></div></form>
<!-- Stop Formoid form-->

</div>
<a class="popup-with-form" href="#test-form">Open form</a>



<script type="text/javascript">
  $(document).ready(function() {
    $('.image-link').magnificPopup({type:'image'});
  });

</script>
<a class="test-popup-link" href="http://cesf.cl/wordpress/wp-content/uploads/2014/01/becas.png">Open popup</a><br>

<script type="text/javascript">
  $('.test-popup-link').magnificPopup({ 
    type: 'image'
    // other options
  });
</script>


<script type="text/javascript">
$(document).ready(function() {

  $('.simple-ajax-popup-align-top').magnificPopup({
    type: 'ajax',
    alignTop: true,
    overflowY: 'scroll' // as we know that popup content is tall we set scroll overflow by default to avoid jump
  });

  $('.simple-ajax-popup').magnificPopup({
    type: 'ajax'
  });
  
});
</script>
<a class="simple-ajax-popup" href="<?php echo base_url()?>prueba.html">Load content via ajax</a><br>
<a class="simple-ajax-popup" href="site-assets/ajax/test-ajax-2.html">Load another content via ajax</a>
<br>
<br>
<br>
<script type="text/javascript">
$(document).ready(function() {
  $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
    disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,

    fixedContentPos: false
  });
});
</script>

<a class="popup-youtube" href="https://www.youtube.com/watch?v=XKE3dIrRIbg">Open YouTube video</a><br>
<a class="popup-vimeo" href="https://vimeo.com/45830194">Open Vimeo video</a><br>
<a class="popup-gmaps" href="https://www.google.com/maps/dir//Catolica+del+Maule,+Talca,+VII+Región/@-35.4350769,-71.6196063,18z/data=!4m12!1m3!3m2!1s0x9665c72a76402bff:0x156c26b9527edb8a!2sCatolica+del+Maule!4m7!1m0!1m5!1m1!1s0x9665c72a76402bff:0x156c26b9527edb8a!2m2!1d-71.6196063!2d-35.4351905">Open Google Map</a>

<br>
<br>
<br>
<script type="text/javascript">
$(document).ready(function() {
  $('.popup-with-form').magnificPopup({
    type: 'inline',
    preloader: false,
    focus: '#name',

    // When elemened is focused, some mobile browsers in some cases zoom in
    // It looks not nice, so we disable it:
    callbacks: {
      beforeOpen: function() {
        if($(window).width() < 700) {
          this.st.focus = false;
        } else {
          this.st.focus = '#name';
        }
      }
    }
  });
});
</script>

<!-- link that opens popup -->
<a class="popup-with-form" href="#test-form">Open form2</a>

<!-- form itself -->
<form id="test-form" class="white-popup-block mfp-hide">
  <h1>Form</h1>
  <fieldset style="border:0;">
    <p>Lightbox has an option to automatically focus on the first input. It's strongly recommended to use <code>inline</code> popup type for lightboxes with form instead of <code>ajax</code> (to keep entered data if the user accidentally refreshed the page).</p>
    <ol>
      <li>
        <label for="name">Name</label>
        <input id="name" name="name" type="text" placeholder="Name" required="">
      </li>
      <li>
        <label for="email">Email</label>
        <input id="email" name="email" type="email" placeholder="example@domain.com" required="">
      </li>
      <li>
        <label for="phone">Phone</label>
        <input id="phone" name="phone" type="tel" placeholder="Eg. +447500000000" required="">
      </li>
      <li>
        <label for="textarea">Textarea</label><br>
        <textarea id="textarea">Try to resize me to see how popup CSS-based resizing works.</textarea>
      </li>
    </ol>
  </fieldset>
</form>


</body>
</html>