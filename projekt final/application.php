<?php
      include("partials/header.php");    // vloz hlavicku
    ?>

  <body>
    
<section class="row">
  <div class="col-lg-12 tm-form-header pl-5 pr-5">
    <h2 class="tm-container-inner tm-text-color-white">Comment</h2>
  </div>
  <div class="col-lg-12 pl-2 pl-sm-3 pl-md-5 pr-2 pr-sm-3 pr-md-5">
    <form action="inc/Application/insert.php" method="post" class="row tm-container-inner tm-contact-form">
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
        <div class="form-group">
          <input type="text" id="contact_name" name="firstname" class="form-control" placeholder="Firsname"  required/>
        </div>
        <div class="form-group">
          <input type="text" id="contact_email" name="lastname" class="form-control" placeholder="Lastname"  required/>
        </div>
        
      </div>
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
      
        <div class="form-group">
          <textarea id="contact_message" name="comment" class="form-control" rows="6" placeholder="Additional Message" required></textarea>
        </div>
      </div>
      <div class="col-xs-12 mt-4 tm-center">
              <button type = "submit" name="comm">Submit</button>
      </div>
    </form>
  </div>
</section>

<?php
  include("partials/footer.php");     // vloz patu
?>

</body>

</html>