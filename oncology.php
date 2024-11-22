<?php include('header.php'); ?>


    <main>



        <section>


            <div class="container">
                <div class="row">
                    <p class="home_direction">Home > Speciality > <Strong>Oncology </Strong></p>
                    <h1 class="about_test_cont_head">Oncology </h1>

                    <div class="col-md-6 order-1 order-md-0">





                        <p class="doc_para_text_mini_service">Oncology is the branch of medicine that focuses on the diagnosis, treatment, and prevention of cancer.
                        </p>
                        <p class="doc_para_text_mini_service">The field has evolved to encompass various approaches to care, including medical, surgical, and radiation oncology, to provide comprehensive cancer treatment. Oncologists collaborate with multidisciplinary teams to tailor patient care based on individual needs and the type and stage of cancer. This field is pivotal as it involves both curative and palliative care, supporting patients through the challenging journey of cancer treatment and survivorship.
                        </p>



                    </div>

                    <div class="col-md-6  order-0 order-md-1 ">
                        <img src="assets/img/deversh/oncology_major.png" class="img-fluid  need_img_top" alt="">
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
                            <img src="assets/img/deversh/oncology_minor.png" class="img-fluid   " alt="">
                        </div>
                    </div>


                    <div class="col-md-6 mt-5 ">

                        <div class="">
                            <p class="doc_para_text_mini_service ">Medical Oncology:
                                This specialty deals with the treatment of cancer using chemotherapy, immunotherapy, and targeted therapy.
                            </p>
                            <div class="showthisdiv1  " style="display:none ">
                                <p class="poetsen_font1 doc_para_text_mini_service"> Medical oncologists manage the overall treatment plan and coordinate care among various specialists. For instance, a medical oncologist at a major cancer centre may oversee a patient's chemotherapy regimen while monitoring progress and side effects.

                                </p>
                            </div>
                            <div class="d-flex flex-row justify-content-start">
                                <p class="get_in_touch1 read_more_text" style="color: #474FA0; cursor: pointer;" onclick="toggleReadMore1()">
                                    Read More <i class="fa-solid fa-arrow-right"></i></p>
                            </div>
                        </div>


                        <div class="">
                            <p class="doc_para_text_mini_service ">Surgical Oncology:
                                Surgical oncologists specialise in performing operations to remove tumours and cancerous tissues. </p>
                            <div class="showthisdiv2  " style="display:none ">
                                <p class="poetsen_font1 doc_para_text_mini_service"> This form of oncology not only aids in treatment but also in diagnosis through biopsies. A hospital may have specialised units for surgeries such as mastectomies for breast cancer or tumour resections for gastrointestinal cancers.
                                </p>
                            </div>
                            <div class="d-flex flex-row justify-content-start">
                                <p class="get_in_touch2 read_more_text" style="color: #474FA0; cursor: pointer;" onclick="toggleReadMore2()">
                                    Read More <i class="fa-solid fa-arrow-right"></i></p>
                            </div>
                        </div>



                        <div class="">
                            <p class="doc_para_text_mini_service ">Radiation Oncology:
                                This specialty uses high-energy radiation to kill or damage cancer cells. Radiation oncologists design treatment plans that maximise the dose to the cancerous area while minimising exposure to healthy tissues.
                            </p>
                            <div class="showthisdiv3  " style="display:none ">
                                <p class="poetsen_font1 doc_para_text_mini_service"> An example in hospitals would be a department equipped with linear accelerators to provide precise radiation therapy for patients with prostate or head and neck cancers.

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
                                        <p class="list_p_tag"> How does radiation therapy work?

                                            <span class="toggle-icon toggle_padding_icon_one">+</span>
                                        </p>
                                    </div>

                                    <div class="answer">
                                        Radiation therapy kills or damages cancer cells in the area being treated. Cancer cells begin to die days or weeks after treatment starts, and continue to die for weeks or months after it finishes. Although the radiation can also damage healthy cells, most of these cells tend to receive a lower dose and can usually repair themselves. Many people will develop temporary side effects during or shortly after treatment that may cause pain or discomfort.

                                    </div>
                                </li>
                                <hr class="hr_line">
                                <li>
                                    <div class="question ">
                                        <p class="list_p_tag"> What is the difference between chemotherapy and radiation therapy?


                                            <span class="toggle-icon toggle_padding_icon_two">+</span>
                                        </p>
                                    </div>

                                    <div class="answer">
                                        Chemotherapy means medications given by injections or tablets for treatment of cancer. The medicine circulates throughout the entire body and is generally prescribed by a medical oncologist. Radiation therapy is treatment by rays produced by a linear accelerator or another radiation source, and is prescribed by a radiation oncologist. The radiotherapy beams are focused on a very specific area of the body, and thus the effects are local.

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
                                        <p class="list_p_tag"> How long does a course of radiotherapy treatments usually last?


                                            <span class="toggle-icon toggle_padding_icon_three">+</span>
                                        </p>
                                    </div>

                                    <div class="answer">
                                        Most radiation therapy treatments are daily, five days per week, for a specified period of one to eight weeks, depending on the disease and the course that the physician plans

                                    </div>
                                </li>
                                <hr class="hr_line">

                                <li>
                                    <div class="question ">
                                        <p class="list_p_tag"> How long does each treatment take?

                                            <span class="toggle-icon toggle_padding_icon_four">+</span>
                                        </p>
                                    </div>

                                    <div class="answer">
                                        Radiation technologists, who are under the direction of the radiation oncologist, will take all the time necessary to ensure that you are accurately positioned for your treatment.
                                        This may be between 15 to 20 minutes. The actual time when the radiation is “on” is generally only about a minute or two for each treatment field. The staff tries to arrange the schedules to ensure that appointments are kept on time, but on some days, there may be delays because of unforeseen circumstances or emergencies.

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