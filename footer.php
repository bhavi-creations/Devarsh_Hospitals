<footer id="footer" class="bg_color_footer">
    <div class="footer-top">
        <div class="container py-5">
            <div class="row">

                <div class="col-6 col-md-4  col-lg-4  ">
                    <img src="assets/img/deversh/Logo.png" class="img-fluid " alt="">
                    <h1 class="foot_head my-3">Inquiries</h1>
                    <li class="foot_para">
                        <a href="root.php" style="color: #1E1E1E;">(+91) 76609 07108 </a>
                    </li>
                    <li class="foot_para">
                        <a href="braces.php" style="color: #1E1E1E;"> hospital.ppd@gmail.com </a>
                    </li>

                    <div class="d-flex social_media">

                        <img src="assets/img/deversh/facebook.png" class="img-fluid " alt="">
                        <img src="assets/img/deversh/instagram.png" class="img-fluid social_media_space" alt="">
                        <img src="assets/img/deversh/youtube.png" class="img-fluid social_media_space" alt="">

                    </div>


                </div>


                <div class="col-6  col-md-2  col-lg-3  ">
                    <h1 class="foot_head">Patient Guide</h1>

                    <li class="foot_para">
                        <a href="root.php" style="color: #1E1E1E;">Home</a>
                    </li>
                    <li class="foot_para">
                        <a href="braces.php" style="color: #1E1E1E;"> About Us </a>
                    </li>
                    <li class="foot_para">
                        <a href="braces.php" style="color: #1E1E1E;"> Blogs </a>
                    </li>
                    <li class="foot_para">
                        <a href="pediatric.php" style="color: #1E1E1E;">Contact Us</a>
                    </li>
                    <li class="foot_para">
                        <a href="paedodontist.php" style="color: #1E1E1E;">Book an Appoitment</a>
                    </li>

                    </ul>
                </div>

                <div class="col-6  col-md-3  col-lg-3 only_space_in_md ">
                    <h1 class="foot_head">Specialties</h1>

                    <li class="foot_para">
                        <a href="root.php" style="color: #1E1E1E;">Urology </a>
                    </li>
                    <li class="foot_para">
                        <a href="braces.php" style="color: #1E1E1E;">gynaecology </a>
                    </li>
                    <li class="foot_para">
                        <a href="pediatric.php" style="color: #1E1E1E;">Orthopedic </a>
                    </li>
                    <li class="foot_para">
                        <a href="paedodontist.php" style="color: #1E1E1E;">Paediatrics</a>
                    </li>
                    <li class="foot_para">
                        <a href="aligners.php" style="color: #1E1E1E;">General surgery </a>
                    </li>
                    <li class="foot_para">
                        <a href="cosmetic.php" style="color: #1E1E1E;">General medicine </a>
                    </li>
                    <li class="foot_para">
                        <a href="crowns.php" style="color: #1E1E1E;">Gastroenterology</a>
                    </li>
                    <li class="foot_para">
                        <a href="implants.php" style="color: #1E1E1E;">Neurology </a>
                    </li>
                    <li class="foot_para">
                        <a href="implants.php" style="color: #1E1E1E;">Cardiology </a>
                    </li>
                    </ul>


                </div>

                <div class="col-6  col-md-3  col-lg-2 only_space_in_md ">
                    <h1 class="foot_head">Address</h1>

                    <li class="foot_para">

                        <a href="crowns.php" style="color: #1E1E1E;">Devarsh hospitals
                            Fire station road
                            Near Vinayaka temple ,near
                            rajmaundry highway road
                            Prattipadu</a>
                    </li>
                    <li class="foot_para view_maps mt-4">
                        <a href="implants.php" style="color: #1E1E1E;">View on Maps </a>
                    </li>
                    </ul>
                </div>



            </div>


        </div>
    </div>

    <div
        class="footer-area-bottom theme-bg"
        style="background: var(--primary-200, #C9D5F5);">
        <div class="container">
            <div class="row pt-4">
                <div class="col-md-6 col-12">
                    <div class="footer-widget__copyright-info info-direction">
                        <p class="last_text">
                            <a
                                href="terms.php"
                                style="text-decoration: none; color:  #1E1E1E; font-weight:bold;">Terms & conditions :
                            </a>
                            <a
                                href="privacy.php"
                                style="text-decoration: none; color:#1E1E1E;  font-weight:bold;">
                                Privacy & policy</a>
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-12 second_divv_end_brand">
                    <div
                        class="footer-widget__copyright-info info-direction d-flex flex-row justify-content-end align-items-center">
                        <a
                            href="https://bhavicreations.com/"
                            target="_blank"
                            style="
                    text-decoration: none;
                    color:#1E1E1E;
                    font-weight:bold;
                    display: flex;
                    align-items: center;
                  ">
                            <p class="mini_text last_text mb-0">Branding By @</p>
                            <img
                                src="assets/img/bhavi_logo/Bhavi_Branding_Stamp.png"
                                class="img-fluid brand_image"
                                alt="" />
                        </a>
                    </div>
                </div>


            </div>
        </div>
    </div>
</footer>



<button id="scrollBtn" onclick="scrollToTop()"><i class="fa-solid fa-arrow-up "></i></button>

<script>
    // Function to scroll to the top of the page
    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth' // Optional, smooth scrolling animation
        });
    }

    // Show scroll button when scrolling down
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("scrollBtn").style.display = "block";
        } else {
            document.getElementById("scrollBtn").style.display = "none";
        }
    }
</script>

<style>
    #scrollBtn {
        display: none;
        /* Initially hide the button */
        position: fixed;
        /* Fix the position of the button */
        bottom: 20px;
        /* Adjust the bottom distance */
        right: 20px;
        /* Adjust the right distance */
        z-index: 999;
        /* Set a high z-index to ensure the button is on top */
        padding: 10px 15px;
        background-color: #01539D;
        ;
        color: white;
        border: none;
        border-radius: 50%;
        cursor: pointer;
    }
</style>

<a href="https://api.whatsapp.com/send?phone=919391457072" style="color: #fff;" class="whatsapp-link"
    target="_blank">
    <i class="fab fa-whatsapp"></i>
</a>