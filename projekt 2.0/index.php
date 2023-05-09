<body>

    <?php
      include("partials/header.php");    // vlozeny menu
    ?>


  <!-- Loader -->
  <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>

 <div class="container">

  <!-- 1st section -->
  <section class="row tm-section">
   <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 p-0">
    <div class="tm-flex-center p-5 tm-bg-color-primary tm-section-min-h">
      <h1 class="tm-text-color-white tm-site-name">Magazee</h1>
    </div>
  </div>
  <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
    <div class="tm-flex-center p-5">
      <q class="tm-quote tm-text-color-gray">Ut sit amet augue elit. Vivamus eget tortor in ante scelerisque gravida. Vestibulum auctor condimentum sem.</q>
    </div>
  </div>
</section>

<!-- 2nd section -->
<section class="row tm-section tm-col-md-reverse">
 <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
  <div class="tm-flex-center p-5">
    <div class="tm-md-flex-center">
      <h2 class="tm-text-color-primary mb-4">Fusce ac enim at justo</h2>
      <p class="mb-4">Pellentesque sagittis feugiat massa, vitae blandit elit dictum in. Nam eleifend nunc dui, sed cusus justo molestie id. Vestibulum vel sagittis justo.</p>
      <a href="#" class="btn btn-primary float-lg-right tm-md-align-center">Read more</a>
    </div>
  </div>
</div>
<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 p-0">
  <div class="tm-flex-center p-5 tm-bg-color-primary">
    <div class="tm-max-w-400 tm-flex-center tm-flex-col">
      <img src="<?php $Index->get_image(4);?>" alt="Image" class="rounded-circle mb-4">
      <p class="tm-text-color-white small tm-font-thin mb-0">Nullam eleifend, ipsum eu aliquet fermentum , odio urna dignissim ante, semper maximus libero nisl non nibh.</p>
    </div>
  </div>
</div>
</section>

<!-- 3rd Section -->
<section class="row tm-section tm-mb-30">
  <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 p-0 text-center">
    <img src="<?php $Index->get_image(1);?>" alt="Image" class="img-fluid">
  </div>
  <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
    <div class="tm-flex-center p-5">
      <div class="tm-flex-center tm-flex-col">
        <h2 class="tm-align-left">Loerm ipsum dolor sit amet</h2>
        <p>This is one-page HTML5 template that you can use for any purpose. Please tell your friends about <a href="https://www.facebook.com/templatemo" target="_parent">TemplateMo</a> website. Thank you.</p>
        <a href="#" class="btn btn-primary">Read More</a>
      </div>
    </div>
  </div>
</section>

<!-- 4th Section -->
<section class="row tm-section tm-mb-30">
 <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8">
  <div class="tm-flex-center pl-5 pr-5 pt-5 pb-5">
    <div class="tm-md-flex-center">
     <h2 class="mb-4 tm-text-color-primary">Nullam auctor ornare finibus</h2>
     <p>Cras eu dolor lorem. Cras justo mauris, rhoncus in mauris ac, pellentesque pulvinar metus. Suspendisse consectetur consequat diam, ac dignissim mauris gravida vitae. Vestibulum blandit vestibulum mi a viverra.</p>
     <p class="mb-4">Fusce porta lectus vel elit condimentum porttitor. Maecenas at quam congue, sollicitudin risus quis, ultricies enim. Vivamus sodales, tellus ac quismod dignissim, metus ligula porttitor enim.</p>
     <p class="mb-4">Sed fermentum odio mollis libero iaculis ultrices. Mauris et nibh mi. Nullam vel sapien dolor. Vestibulum ipsum quam, aliquet ac pharetra in, suscipit eu risus. Etiam rutrum eros ultrices, consectetur felis ultrices, vehicula purus.</p>
     <a href="#" class="btn btn-primary float-lg-right tm-md-align-center">Read More</a>
   </div>
 </div>
</div>
<div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 text-xl-right text-md-center text-center mt-5 mt-lg-0 pr-lg-0">
 <img src="<?php $Index->get_image(2);?>" alt="Image" class="img-fluid">
</div>
</section>

<?php
  include("partials/plan.php");     
  include("partials/footer.php");
?> 


<script src="js/jquery-3.2.1.slim.min.js"></script>         <!-- https://jquery.com/ -->
<script>
  /* DOM is ready
  ------------------------------------------------*/
  $(function(){

    if(renderPage) {
      $('body').addClass('loaded');
    }

    $('.tm-current-year').text(new Date().getFullYear());  // Update year in copyright
  });

</script>



</body>
</html>