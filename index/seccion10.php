<div id="contact" class="swiper-slide" data-hash="contact">
  <section class="container contact-form">
    <form method="post" action="contact-mail.php" data-toggle="appear" data-appear-class="fadeInDownTwo" class="appear" onsubmit="_gaq.push(['_trackEvent', 'desktop', 'contact', 'contact'])">
      <div class="row">
        <div class="col-12">
          <h1 class="my-0 my-lg-4">Ready to Get Started?</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 contact-form-phone">
          <div class="row pb-0 pb-lg-3">
            <div class="col-3 d-flex align-items-center">
              <img src="assets/images/icon-mail.png" class="img-fluid">
            </div>
            <div class="col-9 p-0 text-center text-direction">
              <strong>info@phenomixsciences.com</strong><br>
              1000 Westgate Drive<br>
              Suite 1002-1003<br>
              St. Paul, MN 55114<br>
            </div>
          </div>
          <div class="row">
            <div class="col-3 d-flex align-items-center">
              <img src="assets/images/icon-phone.png" class="img-fluid">
            </div>
            <div class="col-9 p-0 text-direction text-center d-flex align-items-center justify-content-center">
              <p class="m-0">
                <strong>1-877-673-0981</strong>
                <br>
                (Toll Free)</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group mb-0 mb-lg-3">
            <input type="text" class="form-input" name="firstName" placeholder="First Name">
          </div>
          <div class="form-group mb-0 mb-lg-3">
            <input type="text" class="form-input" name="lastName" placeholder="Last Name">
          </div>
          <div class="form-group mb-0 mb-lg-3 required">
            <div class="as"></div>
            <input type="email" class="form-input" name="email" placeholder="Email Address" required>
          </div>
          <div class="form-group mb-0 mb-lg-3 ">
            <p class="d-none p-0 d-lg-block">(*) Required fields</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group mb-0 mb-lg-3 required">
            <div class="as"></div>
            <input type="text" class="form-input" name="phone" placeholder="Phone Number" required>
          </div>
          <div class="form-group mb-0 mb-lg-3 form-group-select">
            <select class="form-select" name="inquiryType">
              <option class="d-none">Inquiry Type</option>
              <option>Questions about testing</option>
              <option>Billing inquiries</option>
              <option>Media inquiry</option>
              <option>Investment inquiries</option>
              <option>Other</option>
            </select>
          </div>
          <div class="form-group mb-0 mb-lg-3 form-group-select required">
            <select class="form-select" name="iAm">
              <option class="d-none">I am a...</option>
              <option>Patient</option>
              <option>Healthcare Provider</option>
              <option>Other</option>
            </select>
          </div>
          <div class="form-group mb-0 mb-lg-3 ">
            <p class="d-block d-lg-none">(*) Required fields</p>
          </div>
          <div class="form-group mb-0 mb-lg-3 mb-3">
            <label class="container-label text-right" for="customRadioInline1">
              <input type="checkbox" id="customRadioInline1" name="customRadioInline1" class="checkmark" required>
              <span class="checkmark"></span>
              Accept Terms & Conditions
            </label>
          </div>  
          <div class="style-submit col-lg-9 offset-lg-3 px-lg-0">
            <button type="submit" class="btn-block">SEND</button>
          </div>
        </div>
      </div>
    </form>
  </section>
</div>
