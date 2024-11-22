<?php include('header.php'); ?>



  <main id="main">

    <section class="sectionForm my-5 pt-5">

      <div class="container">
        <div class="row">
          <p class="home_apoitment">Home > <Strong> Appointment </Strong></p>

        </div>
      </div>
      <div class="container appointment_bg" style="  background-color: #E7F3FE80;">

        <div class="section-title text-center">
          <h1 class="test_cont_head mb-3">Make An Appointment</h1>

        </div>


        <div class="row">

          <div class="col-md-6 d-none d-md-block">
            <img src="assets/img/deversh/appotiment.png" class="img-fluid">
          </div>


          <div class="col-md-6 mt-5">
            <form action="appointmentform.php" method="post" role="form" class="php-email-form"
              data-aos-delay="100">
              <div class="row">
                <div class="col-md-6 form-group mt-4 mt-md-0 mb-4">
                  <input type="text" name="name" class="form-control  " id="name"
                    style="border-radius: 23px; " placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-4 mt-md-0">
                  <input type="email" class="form-control  " name="email" id="email"
                    style="border-radius: 23px;" placeholder="Your Email" required>
                </div>
                <div class="col-md-6 form-group mt-5 mt-md-0">
                  <input type="tel" class="form-control  " name="phone" id="phone"
                    style="border-radius: 23px;" placeholder="Your Phone" required>
                </div>
                <div class="col-md-6 form-group mt-4  mt-md-0">
                  <input type="date" name="date" class="form-control datepicker  "
                    style="border-radius: 23px;" id="date" placeholder="Appointment Date" required>
                </div>
              </div>
              <div class="row">

                <div class="  form-group mt-4">
                  <select name="department" id="department" style="border-radius: 23px;"
                    class="form-select" required>
                    <option value="">Select Service</option>
                    <option value="Urology"> Urology</option>
                    <option value="Obstetrics & Gynaecology">Obstetrics & Gynaecology</option>
                    <option value="Orthopedic">Orthopedic</option>
                    <option value="paediatrics">paediatrics</option>
                    <option value="General Surgery ">General Surgery </option>
                    <option value="Cardiology">Cardiology</option>
                    <option value="Neurology ">Neurology </option>
                    <option value="Dermatology">Dermatology</option>
                    <option value="Radiology">Radiology</option>


                  </select>
                </div>

              </div>

              <div class="form-group mt-4 mb-5">
                <textarea class="form-control" name="message" style="border-radius: 23px;" rows="5"
                  placeholder="Message (Optional)"></textarea>
              </div>

              <div class="text-center maker"><button type="submit" class="makee">Make an
                  Appointment</button></div>
            </form>
          </div>



        </div>
      </div>
    </section>


  </main>


  <?php include('./footer.php'); ?>

  <div id="preloader"></div>
  <!-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <script src="assets/js/main.js"></script>

</body>

</html>