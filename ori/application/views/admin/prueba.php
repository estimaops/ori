<html>
  

   

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

<head>
  <title>Hola a tudu mundo</title>
   <script src="<?php echo base_url() ?>css/popup/dist/jquery.magnific-popup.js"></script> 
    <script src="<?php echo base_url() ?>css/popup/dist/jquery.magnific-popup.min.js"></script> 
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 

<link rel="stylesheet" href="<?php echo base_url() ?>css/popup/dist/magnific-popup.css"> 

    <script src="<?php echo base_url() ?>css/popup/dist/magnific-popup.css"></script> 
    <script src="<?php echo base_url() ?>css/popup/Gruntfile.js"></script> 
    <script src="<?php echo base_url() ?>css/popup/"></script> 

</head>
<body>
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
$(document).ready(function() {
  $('.image-link').magnificPopup({type:'image'});
});
$('.test-popup-link').magnificPopup({ 
  type: 'image'
  // other options
});
</script>
<!-- link that opens popup -->
<a class="popup-with-form" href="#test-form">Open form</a>

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


<a class="test-popup-link" href="path-to-image.jpg">Open popup 2</a>


</body>
</html>