<?php include('header.php'); ?>

    <main>



        <section>


            <div class="container">

                <div class="row">

                </div>
            </div>

        </section>

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