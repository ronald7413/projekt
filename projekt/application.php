<?php
      include("partials/header.php");    // vlozeny menu
    ?>

  <body>
    
<section class="row">
  <div class="col-lg-12 tm-form-header pl-5 pr-5">
    <h2 class="tm-container-inner tm-text-color-white">Application Form</h2>
  </div>
  <div class="col-lg-12 pl-2 pl-sm-3 pl-md-5 pr-2 pr-sm-3 pr-md-5">
    <form action="index.html" method="post" class="row tm-container-inner tm-contact-form">
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
        <div class="form-group">
          <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Full Name"  required/>
        </div>
        <div class="form-group">
          <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Your Email"  required/>
        </div>
        <div class="form-group">
          <select>
            <option value="">Position</option>
            <option value="ceo">Chief Executive Officer</option>
            <option value="ms">Marketing Specialist</option>
            <option value="om">Operating Manager</option>
            <option value="sa">Sales Assistant</option>
          </select>
        </div>
        <div class="form-group">
          <select>
            <option value="">Salary</option>
            <option value="100k">$100,000-$140,000</option>
            <option value="200k">$200,000-$260,000</option>
            <option value="300k">$300,000-$375,000</option>
          </select>
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
        <div class="form-group">
          <div class="row">
            <div class="col-lg-6">
              <label>
                <input type="radio" name="gender" value="m" required> Male
              </label>
            </div>
            <div class="col-lg-6">
              <label>
                <input type="radio" name="gender" value="f" required> Female
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <textarea id="contact_message" name="contact_message" class="form-control" rows="6" placeholder="Additional Message" required></textarea>
        </div>
      </div>
      <div class="col-xs-12 mt-4 tm-center">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
</section>

<?php
  include("partials/footer.php");
?>

</body>

</html>