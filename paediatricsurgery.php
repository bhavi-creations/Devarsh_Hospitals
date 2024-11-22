<?php include('header.php'); ?>

    <main>



        <section>


            <div class="container">
                <div class="row">
                    <p class="home_direction">Home > Speciality > <Strong>Paediatric Surgery</Strong></p>
                    <h1 class="about_test_cont_head">Paediatric Surgery</h1>

                    <div class="col-md-6 order-1 order-md-0">





                        <p class="doc_para_text_mini_service">Paediatric surgery is a highly specialised field within the realm of surgery, focusing on the diagnosis, treatment, and management of surgical needs in infants, children, and adolescents.

                        </p>
                        <p class="doc_para_text_mini_service">This discipline requires expert knowledge not only in surgical techniques but also in understanding the unique physiological and developmental considerations of young patients. Paediatric surgeons are equipped with the skills to address a wide variety of conditions, ensuring that procedures are safe, minimally invasive when possible, and tailored to the growing bodies of their patients.
                        </p>



                    </div>

                    <div class="col-md-6  order-0 order-md-1 ">
                        <img src="assets/img/deversh/pediatrics surgery.png" class="img-fluid  need_img_top" alt="">
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
                            <img src="assets/img/deversh/pediatrics surgery 1.png" class="img-fluid   " alt="">
                        </div>
                    </div>


                    <div class="col-md-6 mt-5 ">

                        <div class="">
                            <p class="doc_para_text_mini_service ">Congenital Anomaly Corrections :
                                Overview: Many children are born with congenital anomalies that may require surgical intervention to correct and prevent complications. Paediatric surgeons specialise in repairing conditions such as cleft lips and palates, congenital heart defects, and limb deformities.
                            </p>
                            <div class="showthisdiv1  " style="display:none ">
                                <p class="poetsen_font1 doc_para_text_mini_service"> Example Procedure: Cleft lip and palate surgery is often performed within the first year of life to enable normal feeding, speech development, and facial aesthetics. This procedure not only corrects physical appearance but also promotes healthy growth and social development.

                                </p>
                            </div>
                            <div class="d-flex flex-row justify-content-start">
                                <p class="get_in_touch1 read_more_text" style="color: #474FA0; cursor: pointer;" onclick="toggleReadMore1()">
                                    Read More <i class="fa-solid fa-arrow-right"></i></p>
                            </div>
                        </div>


                        <div class="">
                            <p class="doc_para_text_mini_service ">Appendectomy for Acute Appendicitis :
                                Overview: Appendicitis, the inflammation of the appendix, is a common emergency condition among children and can be life-threatening if not treated promptly. Paediatric surgeons are adept at diagnosing and performing appendectomies to remove the inflamed appendix.

                            </p>
                            <div class="showthisdiv2  " style="display:none ">
                                <p class="poetsen_font1 doc_para_text_mini_service">Procedure Details: In most general hospitals, appendectomies are performed laparoscopically, which involves making small incisions and using specialised instruments. This minimally invasive approach reduces recovery time, lowers the risk of infection, and minimises scarring.

                                </p>
                            </div>
                            <div class="d-flex flex-row justify-content-start">
                                <p class="get_in_touch2 read_more_text" style="color: #474FA0; cursor: pointer;" onclick="toggleReadMore2()">
                                    Read More <i class="fa-solid fa-arrow-right"></i></p>
                            </div>
                        </div>



                        <div class="">
                            <p class="doc_para_text_mini_service ">Paediatric Hernia Repair :
                                Overview: Hernias are common in children and can occur when an organ or tissue pushes through a weak spot in the surrounding muscle or connective tissue. Paediatric hernias, such as inguinal hernias, are typically corrected through surgical procedures to prevent complications like obstruction or strangulation of the intestine.

                            </p>
                            <div class="showthisdiv3  " style="display:none ">
                                <p class="poetsen_font1 doc_para_text_mini_service"> Surgical Approach: Paediatric hernia repair is generally done under general anaesthesia, using either open or minimally invasive techniques depending on the hospital's capabilities. Surgeons ensure that the repair is strong and adapted to the child's growth to prevent recurrence.

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
                                        <p class="list_p_tag">What is paediatric surgery?



                                            <span class="toggle-icon toggle_padding_icon_one">+</span>
                                        </p>
                                    </div>

                                    <div class="answer">
                                        Paediatric surgery is a branch of surgery that deals with the surgical treatment of children, from newborns to adolescents. Paediatric surgeons are trained to perform a variety of surgical procedures tailored to the unique needs of children

                                    </div>
                                </li>
                                <hr class="hr_line">
                                <li>
                                    <div class="question ">
                                        <p class="list_p_tag"> What do paediatric surgeons do?


                                            <span class="toggle-icon toggle_padding_icon_two">+</span>
                                        </p>
                                    </div>

                                    <div class="answer">
                                        Paediatric surgeons are responsible for the diagnosis, preoperative, operative, and postoperative management of surgical problems in children. They work with other specialists to determine if surgery is the best option for the child

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
                                        <p class="list_p_tag"> What are some common paediatric surgeries?



                                            <span class="toggle-icon toggle_padding_icon_three">+</span>
                                        </p>
                                    </div>

                                    <div class="answer">
                                        Common paediatric surgeries include tonsillectomies, adenoidectomies, and tympanostomy tube placement. These surgeries are usually performed by otolaryngologists (ENT doctors)

                                    </div>
                                </li>
                                <hr class="hr_line">

                                <li>
                                    <div class="question ">
                                        <p class="list_p_tag">Will I be able to stay with my child?



                                            <span class="toggle-icon toggle_padding_icon_four">+</span>
                                        </p>
                                    </div>

                                    <div class="answer">
                                        Yes! But only after surgery. Each inpatient room has a sleeping area for a parent or primary caregiver if your child is staying overnight after surgery.
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