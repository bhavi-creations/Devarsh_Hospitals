<?php include('header.php'); ?>


    <main>



        <section>


            <div class="container">
                <div class="row">
                    <p class="home_direction">Home > Speciality > <Strong>Paediatrics </Strong></p>
                    <h1 class="about_test_cont_head">Paediatrics </h1>

                    <div class="col-md-6 order-1 order-md-0">





                        <p class="doc_para_text_mini_service">Pediatrics is a medical specialty focused on the health and well-being of children, from infancy through adolescence. Paediatricians are trained to diagnose, treat, and manage a wide range of childhood illnesses, injuries, and conditions. They also provide preventive care and health screenings to ensure healthy growth and development during the formative years. This branch of medicine not only focuses on physical health but also on the emotional, social, and psychological needs of young patients.
                        </p>



                    </div>

                    <div class="col-md-6  order-0 order-md-1 ">
                        <img src="assets/img/deversh/peadritics (1).png" class="img-fluid  need_img_top" alt="">
                    </div>

                </div>
            </div>
        </section>


        <section>

            <div class="container  need_cont_spacew">
                <div class="row ">

                    <h1 class="service_text_head mt-3">Specialities</h1>
                    <div class="col-md-6 ">
                        <div class=" ">
                            <img src="assets/img/deversh/peadritics (2).png" class="img-fluid   " alt="">
                        </div>
                    </div>


                    <div class="col-md-6 mt-5 ">

                        <div class="">
                            <p class="doc_para_text_mini_service ">Paediatric cardiology deals with heart-related conditions in children. It focuses on</p>
                            <div class="showthisdiv1  " style="display:none ">
                                <p class="poetsen_font1 doc_para_text_mini_service"> diagnosing and treating congenital heart defects, arrhythmias, and other cardiovascular disorders specific to children. Paediatric cardiologists are experts in managing conditions such as heart murmurs, heart failure, and hypertension in young patients.
                                </p>
                            </div>
                            <div class="d-flex flex-row justify-content-start">
                                <p class="get_in_touch1 read_more_text" style="color: #474FA0; cursor: pointer;" onclick="toggleReadMore1()">
                                    Read More <i class="fa-solid fa-arrow-right"></i></p>
                            </div>
                        </div>


                        <div class="">
                            <p class="doc_para_text_mini_service ">Paediatric neurology is concerned with the diagnosis and treatment of neurological </p>
                            <div class="showthisdiv2  " style="display:none ">
                                <p class="poetsen_font1 doc_para_text_mini_service"> conditions in children, such as epilepsy, cerebral palsy, and genetic disorders affecting the nervous system. Paediatric neurologists work closely with families to manage conditions like developmental delays, headaches, and neurogenetic disorders.
                                </p>
                            </div>
                            <div class="d-flex flex-row justify-content-start">
                                <p class="get_in_touch2 read_more_text" style="color: #474FA0; cursor: pointer;" onclick="toggleReadMore2()">
                                    Read More <i class="fa-solid fa-arrow-right"></i></p>
                            </div>
                        </div>



                        <div class="">
                            <p class="doc_para_text_mini_service ">Paediatric Endocrinology:This specialty focuses on hormonal issues and disorders in </p>
                            <div class="showthisdiv3  " style="display:none ">
                                <p class="poetsen_font1 doc_para_text_mini_service"> children, such as diabetes, growth disorders, and thyroid problems. Paediatric endocrinologists treat conditions like childhood obesity, early or delayed puberty, and adrenal gland disorders, ensuring that children grow and develop with proper endocrine function.
                                </p>
                            </div>
                            <div class="d-flex flex-row justify-content-start">
                                <p class="get_in_touch3 read_more_text" style="color: #474FA0; cursor: pointer;" onclick="toggleReadMore3()">
                                    Read More <i class="fa-solid fa-arrow-right"></i></p>
                            </div>
                        </div>




                        <script>
                            function toggleReadMore1() {
                                var showThisDiv = document.querySelector('.showthisdiv1');
                                var readMoreText = document.querySelector('.get_in_touch1');

                                if (showThisDiv.style.display === "none") {
                                    showThisDiv.style.display = "block";
                                    readMoreText.innerHTML = 'Read Less <i class="fa-solid fa-arrow-up"></i>';
                                } else {
                                    showThisDiv.style.display = "none";
                                    readMoreText.innerHTML = 'Read More <i class="fa-solid fa-arrow-right"></i>';
                                }
                            }
                        </script>
                        <script>
                            function toggleReadMore2() {
                                var showThisDiv = document.querySelector('.showthisdiv2');
                                var readMoreText = document.querySelector('.get_in_touch2');

                                if (showThisDiv.style.display === "none") {
                                    showThisDiv.style.display = "block";
                                    readMoreText.innerHTML = 'Read Less <i class="fa-solid fa-arrow-up"></i>';
                                } else {
                                    showThisDiv.style.display = "none";
                                    readMoreText.innerHTML = 'Read More <i class="fa-solid fa-arrow-right"></i>';
                                }
                            }
                        </script>
                        <script>
                            function toggleReadMore3() {
                                var showThisDiv = document.querySelector('.showthisdiv3');
                                var readMoreText = document.querySelector('.get_in_touch3');

                                if (showThisDiv.style.display === "none") {
                                    showThisDiv.style.display = "block";
                                    readMoreText.innerHTML = 'Read Less <i class="fa-solid fa-arrow-up"></i>';
                                } else {
                                    showThisDiv.style.display = "none";
                                    readMoreText.innerHTML = 'Read More <i class="fa-solid fa-arrow-right"></i>';
                                }
                            }
                        </script>


                    </div>
                </div>
            </div>
            </div>
            </div>
        </section>

        <section class="ask_qus_sec  need_margin_top">
            <div class="container  ">
                <div class="text-center">
                    <h1 class="test_cont_head">FAQ's</h1>

                </div>
                <div class="row mt-5">

                    <div class="col-lg-6">


                        <div class="faq">
                            <ul class="faq-list">
                                <li class="padding_in_list">
                                    <div class="question ">
                                        <p class="list_p_tag">Can I meet my paediatrician before my baby is born?

                                            <span class="toggle-icon toggle_padding_icon_one">+</span>
                                        </p>
                                    </div>

                                    <div class="answer">
                                        Yes, many parents schedule a meeting with their paediatrician before birth to discuss care plans and ask questions.
                                    </div>
                                </li>
                                <hr class="hr_line">
                                <li>
                                    <div class="question ">
                                        <p class="list_p_tag">How often should my child see the paediatrician?

                                            <span class="toggle-icon toggle_padding_icon_two">+</span>
                                        </p>
                                    </div>

                                    <div class="answer">
                                        Newborns typically visit the paediatrician every few weeks, with check-ups at 2, 4, 6, 9, and 12 months, then annually after that.
                                    </div>
                                </li>

                            </ul>
                        </div>

                        <hr class="hr_line   d-md-none">

                    </div>

                    <div class="col-lg-6">


                        <div class="faq">
                            <ul class="faq-list">


                                <li>
                                    <div class="question ">
                                        <p class="list_p_tag">How long should I breastfeed my baby?

                                            <span class="toggle-icon toggle_padding_icon_three">+</span>
                                        </p>
                                    </div>

                                    <div class="answer">
                                        The American Academy of Pediatrics recommends breastfeeding for at least the first 6 months and continuing as long as desired.
                                    </div>
                                </li>
                                <hr class="hr_line">

                                <li>
                                    <div class="question ">
                                        <p class="list_p_tag"> When should I start feeding my baby solid foods?

                                            <span class="toggle-icon toggle_padding_icon_four">+</span>
                                        </p>
                                    </div>

                                    <div class="answer">
                                        Solid foods can be introduced around 6 months of age, when your baby shows signs of readiness.
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>


            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

            <script>
                $(document).ready(function() {
                    $('.question').click(function() {
                        var $answer = $(this).next('.answer');
                        var $icon = $(this).find('.toggle-icon');

                        // Toggle the answer visibility
                        $answer.slideToggle();

                        // Change icon text
                        $icon.text($icon.text() === '+' ? '-' : '+');

                        // Toggle background color by adding/removing the active-bg class
                        $(this).toggleClass('active-bg');
                        $answer.toggleClass('active-bg');
                    });
                });
            </script>


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