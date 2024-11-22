<?php include('header.php'); ?>

    <main>



        <section>


            <div class="container">
                <div class="row">
                    <p class="home_direction">Home > Speciality > <Strong>General medicine </Strong></p>
                    <h1 class="about_test_cont_head">General medicine </h1>

                    <div class="col-md-6 order-1 order-md-0">





                        <p class="doc_para_text_mini_service">Welcome to Devarsh Hospital, a trusted multi-specialty healthcare centre serving as a vital hub for patients from nearby areas and beyond. Our General Medicine Department plays a pivotal role in providing comprehensive adult healthcare, addressing both routine and </p>
                        <p class="doc_para_text_mini_service">complex medical needs At Devarsh Hospital, the General Medicine Department is dedicated to offering high-quality diagnostic, treatment, and preventive medical care. Our experienced team of internists ensures that each patient receives personalised attention, working collaboratively with other specialties to provide a seamless and coordinated treatment plan.</p>


                    </div>

                    <div class="col-md-6  order-0 order-md-1 ">
                        <img src="assets/img/deversh/medicine (1).png" class="img-fluid  need_img_top" alt="">
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
                            <img src="assets/img/deversh/medicine (2).png" class="img-fluid   " alt="">
                        </div>
                    </div>


                    <div class="col-md-6 mt-5 ">

                        <div class="">
                            <p class="doc_para_text_mini_service ">Chronic Disease Management: We specialise in managing chronic illnesses such as </p>
                            <div class="showthisdiv1  " style="display:none ">
                                <p class="poetsen_font1 doc_para_text_mini_service"> diabetes, hypertension, and cardiovascular disease. Our approach combines medical treatment, lifestyle advice, and ongoing monitoring to improve patient health and quality of life.
                                </p>
                            </div>
                            <div class="d-flex flex-row justify-content-start">
                                <p class="get_in_touch1 read_more_text" style="color: #474FA0; cursor: pointer;" onclick="toggleReadMore1()">
                                    Read More <i class="fa-solid fa-arrow-right"></i></p>
                            </div>
                        </div>


                        <div class="">
                            <p class="doc_para_text_mini_service ">Infectious Disease Treatment: The department is proficient in diagnosing and treating </p>
                            <div class="showthisdiv2  " style="display:none ">
                                <p class="poetsen_font1 doc_para_text_mini_service">various infections, including respiratory illnesses, gastrointestinal infections, and tropical diseases. Our medical team employs the latest diagnostic techniques and treatment protocols for effective patient care.</p>
                                </p>
                            </div>
                            <div class="d-flex flex-row justify-content-start">
                                <p class="get_in_touch2 read_more_text" style="color: #474FA0; cursor: pointer;" onclick="toggleReadMore2()">
                                    Read More <i class="fa-solid fa-arrow-right"></i></p>
                            </div>
                        </div>



                        <div class="">
                            <p class="doc_para_text_mini_service ">Preventive Health Screenings: We emphasize preventive medicine by offering </p>
                            <div class="showthisdiv3  " style="display:none ">
                                <p class="poetsen_font1 doc_para_text_mini_service"> comprehensive health screenings that detect early signs of potential health issues. These screenings are tailored to the patient’s age, lifestyle, and medical history, enabling proactive management and healthier outcomes.
                                </p>
                            </div>
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
                                        <p class="list_p_tag"> What conditions do general medicine doctors treat?

                                            <span class="toggle-icon toggle_padding_icon_one">+</span>
                                        </p>
                                    </div>

                                    <div class="answer">
                                        General medicine doctors manage a wide range of health conditions, including infections, chronic illnesses like diabetes, and preventive health care.
                                    </div>
                                </li>
                                <hr class="hr_line">
                                <li>
                                    <div class="question ">
                                        <p class="list_p_tag"> How often should I see a general physician?

                                            <span class="toggle-icon toggle_padding_icon_two">+</span>
                                        </p>
                                    </div>

                                    <div class="answer">
                                        It’s recommended to visit a general physician annually for routine check-ups or more often if managing chronic conditions.
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
                                        <p class="list_p_tag">What should I bring to a general medicine appointment?

                                            <span class="toggle-icon toggle_padding_icon_three">+</span>
                                        </p>
                                    </div>

                                    <div class="answer">
                                        Bring a list of current medications, any medical history documents, and questions you may have for your doctor.
                                    </div>
                                </li>
                                <hr class="hr_line">

                                <li>
                                    <div class="question ">
                                        <p class="list_p_tag"> Can a general physician refer me to a specialist?

                                            <span class="toggle-icon toggle_padding_icon_four">+</span>
                                        </p>
                                    </div>

                                    <div class="answer">
                                        Yes, general physicians can refer you to specialists when more advanced or targeted treatment is needed.
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