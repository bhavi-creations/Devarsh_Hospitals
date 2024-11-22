<?php
include './db.connection/db_connection.php'; // Include your database connection file

// Retrieve service filter from GET request
$service = isset($_GET['service']) ? $_GET['service'] : '';

// Prepare SQL query with optional service filter
$sql = "SELECT id, title, main_content, main_image, created_at FROM blogs";
if (!empty($service)) {
  $sql .= " WHERE service = ?";
}
$sql .= " ORDER BY created_at DESC";

// Initialize statement
$stmt = $conn->prepare($sql);

// Bind parameters if service is set
if (!empty($service)) {
  $stmt->bind_param("s", $service);
}

// Execute the statement
$stmt->execute();

// Get the result
$result = $stmt->get_result();
?>


<?php include('header.php'); ?>

  <main>
    <!-- Filter Buttons -->
    <div class="container">
      <div class="filter_buttons redirect_section mt-4">
        <a href="blogs.php?service="><button class="redirect_blog_srivice">All</button></a>
        <a href="blogs.php?service=Obstetrics Gynaecology"><button class="redirect_blog_srivice">Obstetrics & Gynaecology</button></a>
        <a href="blogs.php?service=Urology"><button class="redirect_blog_srivice">Urology</button></a>
        <a href="blogs.php?service=General Surgery"><button class="redirect_blog_srivice">General Surgery</button></a>
        <a href="blogs.php?service=General Medicine"><button class="redirect_blog_srivice">General Medicine</button></a>
        <a href="blogs.php?service=Paediatrics"><button class="redirect_blog_srivice">Paediatrics</button></a>
        <a href="blogs.php?service=Cardiology"><button class="redirect_blog_srivice">Cardiology</button></a>
        <a href="blogs.php?service=Gastroenterology"><button class="redirect_blog_srivice">Gastroenterology</button></a>
        <a href="blogs.php?service=Oncology"><button class="redirect_blog_srivice">Oncology</button></a>
        <a href="blogs.php?service=Neurology"><button class="redirect_blog_srivice">Neurology</button></a>
        <a href="blogs.php?service=Plastic"><button class="redirect_blog_srivice">Plastic Surgery </button></a>
        <a href="blogs.php?service=Laparoscopic"><button class="redirect_blog_srivice">Laparoscopic Surgery </button></a>
        <a href="blogs.php?service=Trauma"><button class="redirect_blog_srivice">Trauma & critical </button></a>
        <a href="blogs.php?service=Dermatology"><button class="redirect_blog_srivice">Dermatology </button></a>
        <a href="blogs.php?service=Endocrinology"><button class="redirect_blog_srivice">Endocrinology </button></a>

        <!-- <a href="blogs.php?service=Orthopedic"><button class="redirect_blog_srivice">Orthopedic</button></a> -->


      </div>
    </div>

    <!-- Blogs Section -->
    <div class="container blog-sidebar-list" style="padding-top: 20px; padding-bottom: 20px;">
      <div class="row">
        <div class="col-lg-12">
          <div class="grid row">
            <?php
            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                $image_path = !empty($row['main_image']) ? "admin/uploads/photos/{$row['main_image']}" : "default_image.png";
                echo "
                                    <div class='grid-item col-sm-12 col-lg-4 mb-5'>
                                        <div class='post-box card_bg_div_box'>
                                            <figure>
                                                <a href='fullblog.php?id={$row['id']}'>
                                                    <img src='{$image_path}' alt='Blog Image' class='img-fluid blog_box_image'>
                                                </a>
                                            </figure>
                                            <div class='box-content'>
                                                <h5 class='box-title'><a  class='box-title' href='fullblog.php?id={$row['id']}'>" . htmlspecialchars($row['title']) . "</a></h5>
                                                <p class='post-desc  mt-5' style='text-align: justify;'>" . substr(strip_tags($row['main_content']), 0, 90) . "...</p>
                                                <a href='fullblog.php?id={$row['id']}'><button class='blog_main_btn'>Read More..</button></a>
                                            </div>
                                        </div>
                                    </div>";
              }
            } else {
              echo "<p>No blog posts found.</p>";
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </main>





  <!-- ======= Footer ======= -->
  <?php include('./footer.php'); ?>






  <script>
    let currentSlide = 0;

    function moveSlide(step) {
      const slides = document.querySelectorAll('.carousel .slide');
      const totalSlides = slides.length;
      currentSlide = (currentSlide + step + totalSlides) % totalSlides;
      document.querySelector('.carousel').style.transform = `translateX(-${currentSlide * 100}%)`;
    }
  </script>



  <div id="preloader"></div>
  <!-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


  <!-- Swiper JS -->
  <script src="//cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.js"></script>

  <!-- JavaScript -->
  <!--Uncomment this line-->
  <script src="//cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/script.js"></script>


</body>

</html>


<?php
// Close the statement and connection
$stmt->close();
$conn->close();
?>