<?php include('header.php'); ?>

    <main>



        <section>


            <div class="container">
                <div class="row">
                    <p class="home_direction">Home > Speciality > <Strong>Endocrinology</Strong></p>
                    <h1 class="about_test_cont_head">Endocrinology</h1>

                    <div class="col-md-6 order-1 order-md-0">





                        <p class="doc_para_text_mini_service">Endocrinology is a specialised branch of medicine that focuses on the diagnosis and treatment of disorders related to hormones, the endocrine glands, and the complex systems that regulate metabolism, growth, reproduction, and overall body function. Endocrinologists play a vital role in managing conditions such as diabetes, thyroid diseases, hormonal imbalances, and osteoporosis, ensuring a patient-centric approach to health and well-being.
                        </p>
                        <p class="doc_para_text_mini_service">At our General Multispecialty Hospital, we take pride in offering advanced endocrinology care. With state-of-the-art facilities and a team of experienced specialists, our hospital is equipped to address a wide spectrum of endocrine disorders. We aim to provide personalised treatment plans, improve quality of life, and promote long-term health.

                        </p>



                    </div>

                    <div class="col-md-6  order-0 order-md-1 ">
                        <img src="assets/img/deversh/endocrine.png" class="img-fluid  need_img_top" alt="">
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
                            <img src="assets/img/deversh/thyroid.png" class="img-fluid   " alt="">
                        </div>
                    </div>


                    <div class="col-md-6 mt-5 ">

                        <div class="">
                            <p class="doc_para_text_mini_service ">Diabetes Management :
                                Diabetes, particularly Type 1 and Type 2, is one of the most common endocrine disorders.
                            </p>
                            <div class="showthisdiv1  " style="display:none ">
                                <p class="poetsen_font1 doc_para_text_mini_service"> Insulin Therapy: Used for Type 1 diabetes and advanced Type 2 cases to regulate blood sugar levels.
                                    Oral Medications: Such as metformin and SGLT2 inhibitors for Type 2 diabetes management.
                                    Continuous Glucose Monitoring (CGM): Advanced technology for real-time blood sugar tracking, enabling precise management.

                                </p>
                            </div>
                            <div class="d-flex flex-row justify-content-start">
                                <p class="get_in_touch1 read_more_text" style="color: #474FA0; cursor: pointer;" onclick="toggleReadMore1()">
                                    Read More <i class="fa-solid fa-arrow-right"></i></p>
                            </div>
                        </div>


                        <div class="">
                            <p class="doc_para_text_mini_service ">Thyroid disorders : including hypothyroidism, hyperthyroidism, and thyroid nodules, are frequently addressed by endocrinologists.</p>
                            <div class="showthisdiv2  " style="display:none ">
                                <p class="poetsen_font1 doc_para_text_mini_service">Medication Therapy: Thyroxine for hypothyroidism and antithyroid drugs for hyperthyroidism.
                                    Radioactive Iodine Therapy: Used for hyperthyroidism and certain types of thyroid cancer.
                                    Thyroidectomy: Surgical removal of part or all of the thyroid gland when necessary.
                                </p>
                            </div>
                            <div class="d-flex flex-row justify-content-start">
                                <p class="get_in_touch2 read_more_text" style="color: #474FA0; cursor: pointer;" onclick="toggleReadMore2()">
                                    Read More <i class="fa-solid fa-arrow-right"></i></p>
                            </div>
                        </div>



                        <div class="">
                            <p class="doc_para_text_mini_service "> Hormonal Imbalance and PCOS :
                                Hormonal imbalances affecting fertility, menstruation, or metabolism are commonly treated, particularly in women with conditions like Polycystic Ovary Syndrome (PCOS).
                            </p>
                            <div class="showthisdiv3  " style="display:none ">
                                <p class="poetsen_font1 doc_para_text_mini_service">Hormone Replacement Therapy (HRT): For conditions like menopause or androgen imbalances.
                                    Lifestyle Modifications: Including diet and exercise plans to manage symptoms of PCOS.
                                    Medications: Birth control pills and metformin to regulate menstrual cycles and reduce androgen levels.
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
                                        <p class="list_p_tag">What is Endocrinology ?


                                            <span class="toggle-icon toggle_padding_icon_one">+</span>
                                        </p>
                                    </div>

                                    <div class="answer">
                                        The endocrine system is a messenger system comprising feedback loops of the hormones released by internal glands of an organism directly into the circulatory system, regulating distant target organs. In vertebrates, the hypothalamus is the neural control centre for all endocrine systems. In humans, the major endocrine glands are the thyroid gland and the adrenal glands. The study of the endocrine system and its disorders is known as endocrinology.

                                    </div>
                                </li>
                                <hr class="hr_line">
                                <li>
                                    <div class="question ">
                                        <p class="list_p_tag"> What are endocrine disorders?


                                            <span class="toggle-icon toggle_padding_icon_two">+</span>
                                        </p>
                                    </div>

                                    <div class="answer">
                                        What is the Endocrine System? Endocrine disorders are diseases related to the endocrine glands of the body. The endocrine system produces hormones, which are chemical signals sent out, or secreted, through the bloodstream. Hormones help the body regulate processes, such as appetite, breathing, growth, fluid balance, feminization and virilization, and weight control.

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
                                        <p class="list_p_tag"> How is diabetes managed in endocrinology?


                                            <span class="toggle-icon toggle_padding_icon_three">+</span>
                                        </p>
                                    </div>

                                    <div class="answer">
                                        Diabetes management involves a combination of therapies, including insulin or oral medications, dietary and lifestyle changes, and advanced monitoring tools like Continuous Glucose Monitoring (CGM). The approach is tailored to the patient’s needs to control blood sugar levels effectively.

                                    </div>
                                </li>
                                <hr class="hr_line">

                                <li>
                                    <div class="question ">
                                        <p class="list_p_tag">Are thyroid problems curable, and what are the treatment options?


                                            <span class="toggle-icon toggle_padding_icon_four">+</span>
                                        </p>
                                    </div>

                                    <div class="answer">
                                        Most thyroid problems, like hypothyroidism or hyperthyroidism, are manageable with proper treatment. Options include medication (like thyroxine for hypothyroidism), radioactive iodine therapy, and, in some cases, surgical intervention. Regular follow-ups with an endocrinologist are essential for optimal outcomes.
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