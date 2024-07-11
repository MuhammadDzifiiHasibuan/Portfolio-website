<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Index - iPortfolio Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo e(asset('assets/img/favicon.png')); ?>?v=<?php echo e(date('YmdHis')); ?>" rel="icon">
    <link href="<?php echo e(asset('assets/img/apple-touch-icon.png')); ?>?v=<?php echo e(date('YmdHis')); ?>" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo e(asset('assets/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/vendor/aos/aos.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/vendor/glightbox/css/glightbox.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/vendor/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="<?php echo e(asset('assets/css/main.css')); ?>" rel="stylesheet">

    <!-- =======================================================
    * Template Name: iPortfolio
    * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
    * Updated: Jun 29 2024 with Bootstrap v5.3.3
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body class="index-page">

    <header id="header" class="header dark-background d-flex flex-column">
        <i class="header-toggle d-xl-none bi bi-list"></i>

        <div class="profile-img">
            <img src="<?php echo e(asset('assets/img/dzc.jpg')); ?>" alt="" class="img-fluid rounded-circle">
        </div>

        <a href="<?php echo e(url('/')); ?>" class="logo d-flex align-items-center justify-content-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="<?php echo e(asset('assets/img/logo.png')); ?>" alt=""> -->
            <h1 class="sitename">Muhammad Dzifii Hasibuan</h1>
        </a>

        <div class="social-links text-center">
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="#hero" class="active"><i class="bi bi-house navicon"></i>Home</a></li>
                <li><a href="#about"><i class="bi bi-person navicon"></i> About</a></li>
                <li><a href="#resume"><i class="bi bi-file-earmark-text navicon"></i> Resume</a></li>
                <li><a href="#portfolio"><i class="bi bi-images navicon"></i> Portfolio</a></li>
                <li><a href="#services"><i class="bi bi-hdd-stack navicon"></i> Services</a></li>
                <li class="dropdown"><a href="#"><i class="bi bi-menu-button navicon"></i> <span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#">Dropdown 1</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="#">Deep Dropdown 1</a></li>
                                <li><a href="#">Deep Dropdown 2</a></li>
                                <li><a href="#">Deep Dropdown 3</a></li>
                                <li><a href="#">Deep Dropdown 4</a></li>
                                <li><a href="#">Deep Dropdown 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Dropdown 2</a></li>
                        <li><a href="#">Dropdown 3</a></li>
                        <li><a href="#">Dropdown 4</a></li>
                    </ul>
                </li>
                <li><a href="#contact"><i class="bi bi-envelope navicon"></i> Contact</a></li>
            </ul>
        </nav>
    </header>

    <main class="main">
        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">
            <img src="<?php echo e(asset('assets/img/sdz.png')); ?>" alt="" data-aos="fade-in" class="">

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <h2>Muhammad Dzifii</h2>
                <h2>Hasibuan</h2>
                <p>I'm a <span class="typed" data-typed-items="Designer, Developer, Freelancer, Photographer">Designer</span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
            </div>
        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>About</h2>
                <p>I'm Muhammad Dzifii Hasibuan, currently in my final year pursuing an IT Major. I have a passion for learning, with a keen interest in UI/UX, Web Development, Graphic Design, and recently I've been delving into Enterprise Architecture. Outside of academics, I actively participate in organizations such as Al-Fath & Tel-U Esports. During my internship at LAZIS Syamsul Ulum, a nonprofit organization focused on Islamic charity, I gained valuable experience that strengthened my skills in IT and contributed to meaningful projects. I am dedicated to continuous growth and innovation in the field of technology.</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4 justify-content-center">
                    <div class="col-lg-4">
                        <img src="<?php echo e(asset('assets/img/dzc.jpg')); ?>" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 content">
                        <h2>UI/UX Designer &amp; Web Developer.</h2>
                        <p class="fst-italic py-3">
                          I am an enthusiastic UI/UX Designer and Web Developer, dedicated to crafting user-friendly and visually appealing digital experiences. My passion for technology and design drives me to continuously learn and innovate.
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>29 November 2003</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+62 823 8444 2662</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Bandung, Indonesia</span></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>21</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>dzifii@student.telkomuniversity.ac.id</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                                </ul>
                            </div>
                        </div>
                        <p class="py-3">
                            With a solid foundation in IT and a keen interest in UI/UX, Graphic Design, and Enterprise Architecture, I am committed to delivering high-quality work. My experiences with organizations like Al-Fath & Tel-U Esports and my internship at LAZIS Syamsul Ulum have equipped me with the skills and knowledge to tackle diverse challenges in the tech industry. I am always open to new opportunities and collaborations to further hone my expertise.
                          </p>
                    </div>
                </div>
            </div>
        </section><!-- /About Section -->

        <!-- Skills Section -->
    <section id="skills" class="skills section light-background">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>Skills</h2>
  <p>I am proficient in user-centered UI/UX design, web development with HTML, CSS, JavaScript, and Bootstrap, and graphic design using Figma and Canva. Recently, I have gained knowledge in Enterprise Architecture. I possess strong problem-solving abilities and effective team collaboration skills from my organizational activities.</p>
</div><!-- End Section Title -->

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="row skills-content skills-animation">

    <div class="col-lg-6">

      <div class="progress">
        <span class="skill"><span>UI/UX</span> <i class="val">95%</i></span>
        <div class="progress-bar-wrap">
          <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div><!-- End Skills Item -->

      <div class="progress">
        <span class="skill"><span>Graphic Design</span> <i class="val">65%</i></span>
        <div class="progress-bar-wrap">
          <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div><!-- End Skills Item -->

      <div class="progress">
        <span class="skill"><span>Web Development</span> <i class="val">75%</i></span>
        <div class="progress-bar-wrap">
          <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div><!-- End Skills Item -->

    </div>

    <div class="col-lg-6">

      <div class="progress">
        <span class="skill"><span>Enterprise Architecture</span> <i class="val">70%</i></span>
        <div class="progress-bar-wrap">
          <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div><!-- End Skills Item -->

      <div class="progress">
        <span class="skill"><span>Team Collaboration</span> <i class="val">75%</i></span>
        <div class="progress-bar-wrap">
          <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div><!-- End Skills Item -->

      <div class="progress">
        <span class="skill"><span>Problem-Solving</span> <i class="val">85%</i></span>
        <div class="progress-bar-wrap">
          <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div><!-- End Skills Item -->

    </div>

  </div>

</div>

</section><!-- /Skills Section -->

        <!-- ======= Resume Section ======= -->
        <section id="resume" class="resume section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Resume</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="resume-title">Sumary</h3>
                        <div class="resume-item pb-0">
                            <h4>Muhammad Dzifii Hasibuan</h4>
                            <p><em>Innovative and deadline-driven UI/UX Designer designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.</em></p>
                            <ul>
                                <li>Sukabirus, Bojongsoang, Kab. Bandung</li>
                                <li>(+62) 823-8444-3663</li>
                                <li>dzifii@student.telkomuniversity.ac.id</li>
                            </ul>
                        </div>

                        <h3 class="resume-title">Education</h3>
                        <div class="resume-item">
                            <h4>Bachelor of Information Technology</h4>
                            <h5>2021 - 2025</h5>
                            <p><em>Telkom University, Bandung, ID</em></p>
                            <p>Pursuing a comprehensive IT education with a focus on UI/UX Design, Graphic Design, and Enterprise Architecture. Active in various organizations, enhancing both technical and soft skills.</p>
                        </div>
                        <div class="resume-item">
                            <h4>Abdurrab Islamic High School</h4>
                            <h5>2018 - 2021</h5>
                            <p><em>Abdurrab Islamic School, Pekanbaru, ID</em></p>
                            <p>Completed high school education with a strong foundation in science and technology, fostering a passion for IT and design.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h3 class="resume-title">Organizational Experience</h3>
                        <div class="resume-item">
                            <h4>Graphic design & Video Editing</h4>
                            <h5>2022 - 2023</h5>
                            <p><em>Al-Fath FIF, Telkom University</em></p>
                            <ul>
                                <li>Part the design, development, and implementation of the graphic, layout, and production communication materials</li>
                                <li>Delegate tasks to the other members of the design team and provide counsel on some aspects of the project. </li>
                                <li>Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design</li>
                            </ul>
                        </div>
                        <div class="resume-item">
                            <h4>Graphic designer</h4>
                            <h5>2022 - 2023</h5>
                            <p><em>Tel-U Esports, Telkom University</em></p>
                            <ul>
                                <li>Developed numerous marketing programs (logos, brochures, infographics, presentations, and advertisements).</li>
                                <li>Recommended and consulted on the most appropriate graphic design</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Resume Section -->

<!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-product">Product</li>
            <li data-filter=".filter-branding">Branding</li>
            <li data-filter=".filter-books">Books</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/1.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/1.png" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/product-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Product 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/product-1.jpg" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/branding-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Branding 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/branding-1.jpg" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/books-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Books 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/books-1.jpg" title="Branding 1" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/2.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/2.png" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/product-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Product 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/product-2.jpg" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/branding-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Branding 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/branding-2.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/books-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Books 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/books-2.jpg" title="Branding 2" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/lazzissu.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/lazissu.png" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/product-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Product 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/product-3.jpg" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/branding-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Branding 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/branding-3.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/books-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Books 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/books-3.jpg" title="Branding 3" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Services</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="icon">
                                <i class="bi bi-briefcase" style="color: #ff689b;"></i>
                            </div>
                            <h4 class="title"><a href="" class="stretched-link">Lorem Ipsum</a></h4>
                            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="icon">
                                <i class="bi bi-card-checklist" style="color: #e9bf06;"></i>
                            </div>
                            <h4 class="title"><a href="" class="stretched-link">Dolor Sitema</a></h4>
                            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="icon">
                                <i class="bi bi-bar-chart" style="color: #3fcdc7;"></i>
                            </div>
                            <h4 class="title"><a href="" class="stretched-link">Sed ut perspiciatis</a></h4>
                            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="icon">
                                <i class="bi bi-binoculars" style="color:#41cf2e;"></i>
                            </div>
                            <h4 class="title"><a href="" class="stretched-link">Magni Dolores</a></h4>
                            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="icon">
                                <i class="bi bi-brightness-high" style="color: #d6ff22;"></i>
                            </div>
                            <h4 class="title"><a href="" class="stretched-link">Nemo Enim</a></h4>
                            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="icon">
                                <i class="bi bi-calendar4-week" style="color: #4680ff;"></i>
                            </div>
                            <h4 class="title"><a href="" class="stretched-link">Eiusmod Tempor</a></h4>
                            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
                        </div>
                    </div><!-- End Service Item -->

                </div>
            </div>
        </section><!-- /Services Section -->

         <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section light-background">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>Testimonials</h2>
  <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
</div><!-- End Section Title -->

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="swiper init-swiper">
    <script type="application/json" class="swiper-config">
      {
        "loop": true,
        "speed": 600,
        "autoplay": {
          "delay": 5000
        },
        "slidesPerView": "auto",
        "pagination": {
          "el": ".swiper-pagination",
          "type": "bullets",
          "clickable": true
        },
        "breakpoints": {
          "320": {
            "slidesPerView": 1,
            "spaceBetween": 40
          },
          "1200": {
            "slidesPerView": 3,
            "spaceBetween": 1
          }
        }
      }
    </script>
    <div class="swiper-wrapper">

      <div class="swiper-slide">
        <div class="testimonial-item">
          <p>
            <i class="bi bi-quote quote-icon-left"></i>
            <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
            <i class="bi bi-quote quote-icon-right"></i>
          </p>
          <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
          <h3>Saul Goodman</h3>
          <h4>Ceo &amp; Founder</h4>
        </div>
      </div><!-- End testimonial item -->

      <div class="swiper-slide">
        <div class="testimonial-item">
          <p>
            <i class="bi bi-quote quote-icon-left"></i>
            <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
            <i class="bi bi-quote quote-icon-right"></i>
          </p>
          <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
          <h3>Sara Wilsson</h3>
          <h4>Designer</h4>
        </div>
      </div><!-- End testimonial item -->

      <div class="swiper-slide">
        <div class="testimonial-item">
          <p>
            <i class="bi bi-quote quote-icon-left"></i>
            <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
            <i class="bi bi-quote quote-icon-right"></i>
          </p>
          <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
          <h3>Jena Karlis</h3>
          <h4>Store Owner</h4>
        </div>
      </div><!-- End testimonial item -->

      <div class="swiper-slide">
        <div class="testimonial-item">
          <p>
            <i class="bi bi-quote quote-icon-left"></i>
            <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
            <i class="bi bi-quote quote-icon-right"></i>
          </p>
          <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
          <h3>Matt Brandon</h3>
          <h4>Freelancer</h4>
        </div>
      </div><!-- End testimonial item -->

      <div class="swiper-slide">
        <div class="testimonial-item">
          <p>
            <i class="bi bi-quote quote-icon-left"></i>
            <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
            <i class="bi bi-quote quote-icon-right"></i>
          </p>
          <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
          <h3>John Larson</h3>
          <h4>Entrepreneur</h4>
        </div>
      </div><!-- End testimonial item -->
    </div>
    <div class="swiper-pagination"></div>
    </div>
  </div>
</section><!-- /Testimonials Section -->

<!-- Contact Section -->
<section id="contact" class="contact section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>Contact</h2>
  <p>Feel free to reach out for collaboration, freelance opportunities, or any inquiries.</p>
</div><!-- End Section Title -->

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="row gy-4">

    <div class="col-lg-5">

      <div class="info-wrap">
        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
          <i class="bi bi-geo-alt flex-shrink-0"></i>
          <div>
            <h3>Address</h3>
            <p>A108 Adam Street, New York, NY 535022</p>
          </div>
        </div><!-- End Info Item -->

        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
          <i class="bi bi-telephone flex-shrink-0"></i>
          <div>
            <h3>Call Us</h3>
            <p>+62 823 8444 3663</p>
          </div>
        </div><!-- End Info Item -->

        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
          <i class="bi bi-envelope flex-shrink-0"></i>
          <div>
            <h3>Email Us</h3>
            <p>info@example.com</p>
          </div>
        </div><!-- End Info Item -->

        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>

    <div class="col-lg-7">
      <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
        <div class="row gy-4">

          <div class="col-md-6">
            <label for="name-field" class="pb-2">Your Name</label>
            <input type="text" name="name" id="name-field" class="form-control" required="">
          </div>

          <div class="col-md-6">
            <label for="email-field" class="pb-2">Your Email</label>
            <input type="email" class="form-control" name="email" id="email-field" required="">
          </div>

          <div class="col-md-12">
            <label for="subject-field" class="pb-2">Subject</label>
            <input type="text" class="form-control" name="subject" id="subject-field" required="">
          </div>

          <div class="col-md-12">
            <label for="message-field" class="pb-2">Message</label>
            <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
          </div>

          <div class="col-md-12 text-center">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>

            <button type="submit">Send Message</button>
          </div>

        </div>
      </form>
    </div><!-- End Contact Form -->

    </main><!-- End #main -->

    <footer id="footer" class="footer position-relative light-background">

    <div class="container">
      <div class="copyright text-center ">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">iPortfolio</strong> <span>All Rights Reserved</span></p>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

    <!-- Scroll to Top Button -->
    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="<?php echo e(asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/php-email-form/validate.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/aos/aos.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/typed.js/typed.umd.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/purecounter/purecounter_vanilla.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/waypoints/noframework.waypoints.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/glightbox/js/glightbox.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/swiper/swiper-bundle.min.js')); ?>"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>

</body>

</html>
<?php /**PATH D:\Softwares\xampp\htdocs\testAppJipi\resources\views/index2.blade.php ENDPATH**/ ?>