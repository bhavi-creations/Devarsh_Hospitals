<?php include('header.php'); ?>


    <main>



        <section>


            <div class="container">
                <div class="row">
                    <p class="home_direction">Home > Speciality > <Strong>Obstetrics & Gynaecology </Strong></p>
                    <h1 class="about_test_cont_head">Obstetrics & Gynaecology </h1>

                    <div class="col-md-6 order-1 order-md-0">





                        <p class="doc_para_text_mini_service">Obstetrics and Gynaecology (OB-GYN) is a medical field that focuses on women's reproductive health.</p>
                        <p class="doc_para_text_mini_service">Obstetrics involves care during pregnancy, childbirth, and postpartum, managing prenatal care, labour, and complications like preeclampsia and gestational diabetes.
                            Gynaecology focuses on the female reproductive system, diagnosing and treating conditions such as menstrual disorders, infections, and reproductive cancers. It also includes preventive care like Pap smears, family planning, and menopause management.
                        </p>
                        <p class="doc_para_text_mini_service"> OB-GYNs also perform surgeries, including caesarean sections and hysterectomies, and provide education and counselling for women's reproductive health at all stages of life.
                        </p>


                    </div>

                    <div class="col-md-6  order-0 order-md-1 ">
                        <img src="assets/img/deversh/gynocology (2).png" class="img-fluid  need_img_top" alt="">
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
                            <img src="assets/img/deversh/gynocology (1).png" class="img-fluid   " alt="">
                        </div>
                    </div>


                    <div class="col-md-6 mt-5 ">

                        <div class="">
                            <p class="doc_para_text_mini_service ">Maternal-Foetal Medicine (MFM): High-Risk Pregnancy Management
                            </p>
                            <div class="showthisdiv1  " style="display:none ">
                                <p class="poetsen_font1 doc_para_text_mini_service">Maternal-Foetal Medicine (MFM) specialists focus on high-risk pregnancies, ensuring both mother and baby are healthy. They manage complications such as gestational diabetes, preeclampsia, and foetal growth restriction. MFM experts use advanced diagnostic tools like ultrasounds and amniocentesis to monitor foetal development. They collaborate with obstetricians to create personalised care plans for complex pregnancies. Early intervention and expert monitoring significantly improve outcomes for both mother and baby.
                                </p>
                            </div>
                            <div class="d-flex flex-row justify-content-start">
                                <p class="get_in_touch1 read_more_text" style="color: #474FA0; cursor: pointer;" onclick="toggleReadMore1()">
                                    Read More <i class="fa-solid fa-arrow-right"></i></p>
                            </div>
                        </div>


                        <div class="">
                            <p class="doc_para_text_mini_service ">Gynae-oncology: Early Detection and Treatment of Reproductive Cancers </p>
                            <div class="showthisdiv2  " style="display:none ">
                                <p class="poetsen_font1 doc_para_text_mini_service">Gynae-oncology specialises in the detection and treatment of cancers affecting the female reproductive system, including ovarian, uterine, and cervical cancers. Early diagnosis through screenings like Pap smears and HPV testing is vital for successful treatment. These specialists use advanced imaging, biopsies, and surgical interventions to manage cancer. Treatment options include surgery, chemotherapy, and targeted therapies, depending on the cancer stage. Gynae-oncologists offer compassionate care, guiding patients through diagnosis, treatment, and recovery.
                                </p>
                            </div>
                            <div class="d-flex flex-row justify-content-start">
                                <p class="get_in_touch2 read_more_text" style="color: #474FA0; cursor: pointer;" onclick="toggleReadMore2()">
                                    Read More <i class="fa-solid fa-arrow-right"></i></p>
                            </div>
                        </div>



                        <div class="">
                            <p class="doc_para_text_mini_service ">Adolescent Gynaecology: Addressing Teen Reproductive Health
                            </p>
                            <div class="showthisdiv3  " style="display:none ">
                                <p class="poetsen_font1 doc_para_text_mini_service"> Adolescent gynaecology focuses on the unique reproductive health needs of teenagers, including managing menstrual irregularities and sexual health education. Specialists provide guidance on contraception, sexual activity, and prevention of sexually transmitted infections (STIs). They also address conditions like polycystic ovary syndrome (PCOS) and endometriosis, which can affect younger women. This field emphasises creating a comfortable, supportive environment for young patients. Early intervention and education help promote long-term reproductive health and well-being.</p>
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
                                        <p class="list_p_tag"> Can I travel during pregnancy?

                                            <span class="toggle-icon toggle_padding_icon_one">+</span>
                                        </p>
                                    </div>

                                    <div class="answer">
                                        Yes, unless there are complications, travelling during pregnancy is generally safe, with the second trimester being ideal. Most Indian airlines allow travel up to 32 weeks.
                                    </div>
                                </li>
                                <hr class="hr_line">
                                <li>
                                    <div class="question ">
                                        <p class="list_p_tag"> How often should I get checked by my doctor during my pregnancy?

                                            <span class="toggle-icon toggle_padding_icon_two">+</span>
                                        </p>
                                    </div>

                                    <div class="answer">
                                        In a normal pregnancy, check-ups are typically monthly until 28 weeks, bi-weekly until 36 weeks, and weekly until 40 weeks. High-risk pregnancies may need more frequent visits.
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
                                        <p class="list_p_tag"> What should my diet be once I am pregnant?

                                            <span class="toggle-icon toggle_padding_icon_three">+</span>
                                        </p>
                                    </div>

                                    <div class="answer">
                                        A balanced diet with leafy vegetables, whole grains, dairy, fruits, and lean meats is essential, along with prenatal vitamins for added nutrients like folic acid, iron, and calcium.
                                    </div>
                                </li>
                                <hr class="hr_line">

                                <li>
                                    <div class="question ">
                                        <p class="list_p_tag"> Do I require any post-surgery follow-ups?

                                            <span class="toggle-icon toggle_padding_icon_four">+</span>
                                        </p>
                                    </div>

                                    <div class="answer">
                                        Yes, follow-ups are necessary, especially for conditions like preeclampsia and placenta previa due to risks of postpartum haemorrhage. Your doctor will advise based on your specific case.
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