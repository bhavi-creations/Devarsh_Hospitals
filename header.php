<?php
// Get the current page name
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Devarsh Hospitals</title>
    <meta content="" name="description">
    <meta content="" name="keywords">


    <link href="assets/img/deversh/fav.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">


    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">



    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style1.css" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">


    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.css">

</head>


<body>



    <header id="header">
        <div class="container d-flex align-items-center onlypad  ">
            <div class="logo-text-container d-flex align-items-center" style="z-index: 999;">
                <a href="index.php">
                    <img src="assets/img/deversh/Logo.png" class="img-fluid nav_logo_image " alt="">
                </a>
            </div>

            <nav id="navbar" class="navbar order-lg-0">
                <i class="bi bi-list mobile-nav-toggle"></i>
                <ul>


                    <li class="nav-item <?php echo ($currentPage == 'index.php') ? 'active' : ''; ?>">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item <?php echo ($currentPage == 'about.php') ? 'active' : ''; ?>">
                        <a class="nav-link" href="about.php">About</a>
                    </li>


                    <li class="unique-nav-item" style="--i: 1.1s">
                        <a href="#" class="unique-nav-link">Specialties<i class="fas fa-caret-down"></i></a>
                        <div class="unique-dropdown">
                            <ul class="unique-dropdown-list new_nav_bg">

                                <div class="row">
                                    <div class="col-6">
                                        <li class="unique-dropdown-item   <?php echo ($currentPage == 'gynocology.php') ? 'active' : ''; ?>">
                                            <a href="gynocology.php" class="unique-dropdown-link">Obstetrics & Gynaecology &nbsp; <img src="assets/img/nav_bar/obstetrics.png" class="img-fluid nav_img_size" alt=""> </a>
                                        </li>
                                        <li class="unique-dropdown-item  <?php echo ($currentPage == 'urology.php') ? 'active' : ''; ?>">
                                            <a href="urology.php" class="unique-dropdown-link">Urology
                                                &nbsp; <img src="assets/img/nav_bar/urinary-tract.png" class="img-fluid nav_img_size" alt="">
                                            </a>
                                        </li>
                                        <li class="unique-dropdown-item  <?php echo ($currentPage == 'generalsurgery.php') ? 'active' : ''; ?>">
                                            <a href="generalsurgery.php" class="unique-dropdown-link">General Surgery
                                                &nbsp; <img src="assets/img/nav_bar/surgical.png" class="img-fluid nav_img_size" alt="">
                                            </a>
                                        </li>
                                        <li class="unique-dropdown-item  <?php echo ($currentPage == 'generalmedicine.php') ? 'active' : ''; ?>">
                                            <a href="generalmedicine.php" class="unique-dropdown-link">General Medicine
                                                &nbsp; <img src="assets/img/nav_bar//first-aid-kit.png" class="img-fluid nav_img_size" alt="">
                                            </a>
                                        </li>
                                        <li class="unique-dropdown-item  <?php echo ($currentPage == 'paediatrics.php') ? 'active' : ''; ?>">
                                            <a href="paediatrics.php" class="unique-dropdown-link">Paediatrics
                                                &nbsp; <img src="assets/img/nav_bar/healthcare.png" class="img-fluid nav_img_size" alt="">
                                            </a>
                                        </li>
                                        <li class="unique-dropdown-item  <?php echo ($currentPage == 'cardiology.php') ? 'active' : ''; ?>">
                                            <a href="cardiology.php" class="unique-dropdown-link">Cardiology
                                                &nbsp; <img src="assets/img/nav_bar/cardiology.png" class="img-fluid nav_img_size" alt="">
                                            </a>
                                        </li>
                                        <li class="unique-dropdown-item  <?php echo ($currentPage == 'gastroenterology.php') ? 'active' : ''; ?>">
                                            <a href="gastroenterology.php" class="unique-dropdown-link">Gastroenterology
                                                &nbsp; <img src="assets/img/nav_bar/gastroenterology.png" class="img-fluid nav_img_size" alt="">
                                            </a>
                                        </li>
                                        <li class="unique-dropdown-item  <?php echo ($currentPage == 'oncology.php') ? 'active' : ''; ?>">
                                            <a href="oncology.php" class="unique-dropdown-link">Oncology
                                                &nbsp; <img src="assets/img/nav_bar/oncology.png" class="img-fluid nav_img_size" alt="">
                                            </a>
                                        </li>
                                    </div>
                                    <div class="col-6">

                                        <li class="unique-dropdown-item  <?php echo ($currentPage == 'neurology.php') ? 'active' : ''; ?>">
                                            <a href="neurology.php" class="unique-dropdown-link">Neurology
                                                &nbsp; <img src="assets/img/nav_bar/neurology.png" class="img-fluid nav_img_size" alt="">
                                            </a>
                                        </li>
                                        <li class="unique-dropdown-item  <?php echo ($currentPage == 'plasticsurgery.php') ? 'active' : ''; ?>">
                                            <a href="plasticsurgery.php" class="unique-dropdown-link">Plastic Surgery
                                                &nbsp; <img src="assets/img/nav_bar/cosmetic-surgery.png" class="img-fluid nav_img_size" alt="">
                                            </a>
                                        </li>
                                        <li class="unique-dropdown-item  <?php echo ($currentPage == 'laparoscopic.php') ? 'active' : ''; ?>">
                                            <a href="laparoscopic.php" class="unique-dropdown-link">Laparoscopic Surgery <br> (General Surgery)
                                                &nbsp; <img src="assets/img/nav_bar/surgery.png" class="img-fluid nav_img_size" alt=""></a>
                                        </li>
                                        <li class="unique-dropdown-item  <?php echo ($currentPage == 'traumacritical.php') ? 'active' : ''; ?>">
                                            <a href="traumacritical.php" class="unique-dropdown-link">Trauma & critical
                                                &nbsp; <img src="assets/img/nav_bar/people.png" class="img-fluid nav_img_size" alt="">
                                            </a>
                                        </li>
                                        <li class="unique-dropdown-item  <?php echo ($currentPage == 'dermatology.php') ? 'active' : ''; ?>">
                                            <a href="dermatology.php" class="unique-dropdown-link">Dermatology
                                                &nbsp; <img src="assets/img/nav_bar/skin.png" class="img-fluid nav_img_size" alt="">
                                            </a>
                                        </li>
                                        <li class="unique-dropdown-item  <?php echo ($currentPage == 'nephrology.php') ? 'active' : ''; ?>">
                                            <a href="nephrology.php" class="unique-dropdown-link">Nephrology
                                                &nbsp; <img src="assets/img/nav_bar/neprology.png" class="img-fluid nav_img_size" alt="">
                                            </a>
                                        </li>
                                        <li class="unique-dropdown-item  <?php echo ($currentPage == 'paediatricsurgery.php') ? 'active' : ''; ?>">
                                            <a href="paediatricsurgery.php" class="unique-dropdown-link">Paediatric Surgery
                                                &nbsp; <img src="assets/img/nav_bar/children.png" class="img-fluid nav_img_size" alt="">
                                            </a>
                                        </li>
                                        <li class="unique-dropdown-item  <?php echo ($currentPage == 'endocrinology.php') ? 'active' : ''; ?>">
                                            <a href="endocrinology.php" class="unique-dropdown-link">Endocrinology
                                                &nbsp; <img src="assets/img/nav_bar/endocrinology.png" class="img-fluid nav_img_size" alt="">


                                            </a>
                                        </li>



                                    </div>
                                </div>










                            </ul>
                            <div class="unique-arrow"></div>
                        </div>
                    </li>


                    <li class="nav-item <?php echo ($currentPage == 'contact.php') ? 'active' : ''; ?>">
                        <a class="nav-link scrollto" href="contact.php">Contact Us</a>
                    </li>
                    <li  class="nav-item <?php echo ($currentPage == 'blogs.php') ? 'active' : ''; ?>"><a class="nav-link" href="blogs.php">Blogs</a></li>

                    <li><a href="appointment.php" class="appointment-btn scrollto d-lg-none" style="z-index: 999;">
                            Appointment
                        </a></li>
                </ul>
            </nav>

            <a href="appointment.php" class="appointment-btn scrollto d-none d-lg-block" style="z-index: 999;">
                <div class="d-flex  ">
                    <div class="svg_iconjm"> <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29" fill="none">
                            <path d="M22.9583 4.83331H6.04167C4.70698 4.83331 3.625 5.91529 3.625 7.24998V24.1666C3.625 25.5013 4.70698 26.5833 6.04167 26.5833H22.9583C24.293 26.5833 25.375 25.5013 25.375 24.1666V7.24998C25.375 5.91529 24.293 4.83331 22.9583 4.83331Z" stroke="#3C68A9" stroke-width="2.41667" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M19.3333 2.41669V7.25002" stroke="#3C68A9" stroke-width="2.41667" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M9.66675 2.41669V7.25002" stroke="#3C68A9" stroke-width="2.41667" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M3.625 12.0833H25.375" stroke="#3C68A9" stroke-width="2.41667" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class=""> Book <i class="fa-solid fa-arrow-right"></i><br> Appointment</div>
                </div>
            </a>
        </div>


        <script>
            $(document).ready(function() {

                $('#servicesDropdown').hover(function() {
                    $(this).dropdown('toggle');
                });


                $('#servicesDropdown').click(function(e) {
                    e.stopPropagation();
                    window.location.href = $(this).attr('href');
                });
            });
        </script>
    </header>