<body>

    <?php
      include("partials/header.php");    // vloz hlavicku
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
      <h1 class="tm-text-color-white tm-site-name">Learn to code</h1>
    </div>
  </div>
  <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
    <div class="tm-flex-center p-5">
      <q class="tm-quote tm-text-color-gray">Here you can choose between two programming languages and start learning about them.</q>
    </div>
  </div>
</section>

<!-- 2nd section -->
<section class="row tm-section tm-col-md-reverse">
 <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
  <div class="tm-flex-center p-5">
    <div class="tm-md-flex-center">
      <h2 class="tm-text-color-primary mb-4">Programming</h2>
      <p class="mb-4">Nowadays, it is not difficult to learn how to study since we have lots of different training options at our disposition. One of the best option is an online course. We provide a cheap way to start learning.</p>
      <a href="#" class="btn btn-primary float-lg-right tm-md-align-center">Read more</a>
    </div>
  </div>
</div>
<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 p-0">
  <div class="tm-flex-center p-5 tm-bg-color-primary">
    <div class="tm-max-w-400 tm-flex-center tm-flex-col">
      <img src="<?php $Index->get_image(1);?>" alt="Image" class="rounded-circle mb-4">   <!-- vyberem 1.obrazku -->
       
      <p class="tm-text-color-white small tm-font-thin mb-0">There's A First Time For Everything</p>
    </div>
  </div>
</div>
</section>

<!-- 3rd Section -->
<section class="row tm-section tm-mb-30">
  <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 p-0 text-center">
    <img src="<?php $Index->get_image(2);?>" alt="Image" class="img-fluid">   <!-- vyberem 2.obrazku -->
    
  </div>
  <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
    <div class="tm-flex-center p-5">
      <div class="tm-flex-center tm-flex-col">
        <h2 class="tm-align-left">Python</h2>
        <p>Often, programmers fall in love with Python because of the increased productivity it provides. Since there is no compilation step, the edit-test-debug cycle is incredibly fast. </p>
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
     <h2 class="mb-4 tm-text-color-primary">Java</h2>
     <p>Java is a widely-used programming language for coding web applications. It has been a popular choice among developers for over two decades, with millions of Java applications in use today.</p>
     <p class="mb-4">Java is a multi-platform, object-oriented, and network-centric language that can be used as a platform in itself.</p>
     <p class="mb-4">It is a fast, secure, reliable programming language for coding everything from mobile apps and enterprise software to big data applications and server-side technologies.</p>
     <a href="#" class="btn btn-primary float-lg-right tm-md-align-center">Read More</a>
   </div>
 </div>
</div>
<div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 text-xl-right text-md-center text-center mt-5 mt-lg-0 pr-lg-0">
 <img src="<?php $Index->get_image(3);?>" alt="Image" class="img-fluid">    <!-- vyberem 3.obrazku -->
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