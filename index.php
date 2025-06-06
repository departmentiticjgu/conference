<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Halaman Utama - JGITeC2025</title>
  <meta name="description" content="The 1st Joint Global Innovation and Technology Conference 2025 (JGITeC2025) is an international platform dedicated to interdisciplinary collaboration among pharmaceutical sciences, business strategies, and engineering advancements.">
  <meta name="keywords" content="conference aims to explore cutting-edge innovations and sustainable solutions that drive technological progress and global impact.">

  <!-- Favicons -->
  <link href="assets/img/ikon-jgu.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <style>
    /* Simple Divider */
    .simple-divider {
      height: 3px;
      width: 60px;
      background-color: var(--bs-primary);
      margin: 0 auto;
    }

    /* Topic Card Styling */
    .topic-card {
      background-color: #fff;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
      height: 100%;
      transition: all 0.3s ease;
    }

    .topic-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
    }

    .topic-header {
      padding: 15px 20px;
      color: white;
    }

    .topic-title {
      margin: 0;
      font-size: 1.3rem;
      font-weight: 600;
    }

    .topic-body {
      padding: 20px;
    }

    .topic-list {
      list-style-type: none;
      padding-left: 0;
      margin-bottom: 15px;
    }

    .topic-list li {
      padding: 8px 0;
      border-bottom: 1px solid rgba(0, 0, 0, 0.05);
      position: relative;
      padding-left: 20px;
    }

    .topic-list li:before {
      content: "•";
      position: absolute;
      left: 0;
      color: var(--bs-primary);
      font-weight: bold;
    }

    .topic-list li:last-child {
      border-bottom: none;
    }

    .subtopic-details {
      background-color: #f8f9fa;
      padding: 15px;
      border-radius: 5px;
      font-size: 0.9rem;
    }

    .subtopic-details h5 {
      font-size: 1rem;
      margin-top: 15px;
      margin-bottom: 8px;
      font-weight: 600;
      color: #333;
    }

    .subtopic-details h5:first-child {
      margin-top: 0;
    }

    .detailed-list {
      list-style-type: none;
      padding-left: 0;
      margin-bottom: 0;
    }

    .detailed-list li {
      padding: 4px 0;
      padding-left: 15px;
      position: relative;
      font-size: 0.85rem;
      color: #555;
    }

    .detailed-list li:before {
      content: "→";
      position: absolute;
      left: 0;
      color: inherit;
    }

    /* Color customization for different topics */
    .col-lg-4:nth-child(1) .topic-list li:before,
    .col-lg-4:nth-child(1) .detailed-list li:before {
      color: var(--bs-primary);
    }

    .col-lg-4:nth-child(2) .topic-list li:before,
    .col-lg-4:nth-child(2) .detailed-list li:before {
      color: var(--bs-warning);
    }

    .col-lg-4:nth-child(3) .topic-list li:before,
    .col-lg-4:nth-child(3) .detailed-list li:before {
      color: var(--bs-danger);
    }

    .view-details {
      margin-top: 35%;
    }

    .view-detail {
      margin-top: 67%;
    }
  </style>
  <!-- =======================================================
  * Template Name: Arsha
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-l position-relative d-flex align-items-center">

      <a href="index.php" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/logo-jgu-background.png" alt="">
        <h4 class="sitename">JGITeC2025</h4>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero">Home</a></li>
          <li class="dropdown"><a href="#"><span>Profile</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#about">About</a></li>
              <li class="dropdown" id="dropdown-menu"><a href="#editorial-board"><span class="editorial-team">Editorial Team</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#chief-editors" class="main">Chief Editors</a></li>
                  <li><a href="#associate-editors" class="main">Associate Editors</a></li>
                  <li><a href="#editorial" class="main">Editorial Board</a></li>
                  <!-- <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li> -->
                </ul>
              </li>
              <!-- <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 10</a></li> -->
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Submission</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#pricing">Registration Fee</a></li>
              <!-- <li class="dropdown" id="dropdown-menu"><a href="#editorial-board"><span>Editorial Team</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#chief-editors" class="main">Chief Editors</a></li>
                  <li><a href="#associate-editors" class="main">Associate Editors</a></li>
                  <li><a href="#editorial" class="main">Editorial Board</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li> -->
              <li><a href="#peer-review">Peer Review Process</a></li>
              <!-- <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li> -->
            </ul>
          </li>
          <!-- <li><a href="#about">About</a></li> -->
          <li><a href="#services">Topic</a></li>
          <li><a href="#co-host">Co-Host</a></li>
          <li><a href="#schedule">Schedule</a></li>
          <li><a href="#team">Speakers</a></li>
          <!-- <li><a href="#pricing">Registration Fee</a></li> -->
          <!-- <li><a href="#editorial-board">Editorial Team</a></li> -->
          <!-- <li class="dropdown"><a href="#"><span>Profile</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#about">About</a></li>
              <li class="dropdown" id="dropdown-menu"><a href="#editorial-board"><span>Editorial Team</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#chief-editors" class="main">Chief Editors</a></li>
                  <li><a href="#associate-editors" class="main">Associate Editors</a></li>
                  <li><a href="#editorial" class="main">Editorial Board</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li>  -->
          <li><a href="#contact">Contact</a></li>
          <a href="https://docs.google.com/forms/d/e/1FAIpQLScu_P8sgARBq5Apvboqu9yqBMFHLTYgI_jSWtdVrMeVyNSD5w/viewform?usp=header" class="text-white btn btn-getstarted" target="_blank">Registration</a>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <!-- <a class="btn-getstarted" href="#about">Get Started</a> -->

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
            <h1>1st Joint Global Innovation and Technology Conference 2025 (JGITeC2025) </h1>
            <p>Bridging engineering, business, and pharmaceutical expertise to advance technological innovation for global impact</p>
            <!-- <div class="d-flex">
              <a href="#about" class="btn-get-started">Get Started</a>
              <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
            </div> -->
          </div>
          <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/image (3).png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- Clients Section -->
    <!-- <section id="clients" class="clients section light-background">

      <div class="container" data-aos="zoom-in">

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
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 5,
                  "spaceBetween": 120
                },
                "1200": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
        </div>

      </div>

    </section> -->
    <!-- /Clients Section -->

    <!-- About Section -->
    <section id="about" class="about section py-5 bg-light">
      <!-- Section Title with decorative elements -->
      <div class="container section-title text-center mb-5" data-aos="fade-up">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <span class="badge bg-danger px-3 py-2 mb-3">JGITeC2025</span>
            <h2 class="display-5 fw-bold mb-3">About the conference</h2>
            <div class="divider-custom my-4">
              <div class="divider-custom-line"></div>
              <div class="divider-custom-icon"><i class="bi bi-stars"></i></div>
              <div class="divider-custom-line"></div>
            </div>
          </div>
        </div>
      </div><!-- End Section Title -->

      <div class="container">
        <div class="row gy-4 align-items-center">
          <!-- Left content with enhanced styling -->
          <div class="col-lg-6 content about-jgu" data-aos="fade-up" data-aos-delay="100">
            <div class="card border-0 shadow-sm p-4 h-100 bg-white">
              <div class="card-body">
                <h3 class="card-title mb-4 text-danger"><i class="bi bi-info-circle-fill me-2"></i>Conference Overview</h3>
                <p class="text-dark">
                  The 1st Joint Global Innovation and Technology Conference 2025 (JGITeC2025) is an international platform dedicated to interdisciplinary collaboration among pharmaceutical sciences, business strategies, and engineering advancements.
                </p>
                <p class="text-dark">
                  Jakarta Global University proudly presents the 1st Joint Global Innovation and Technology Conference 2025 (JGITeC2025): Integrating pharmaceutical Science, Business, and Technology for Global Solutions. JGITeC2025 is a scientific forum designed to bring together research findings in the fields of engineering,business, and pharmaceutical Science. This conference will unite researchers, engineers, government representatives, and other stakeholders on an international scale.

                </p>
              </div>
            </div>
          </div>

          <!-- Right content with map and venue info -->
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card border-0 shadow-sm overflow-hidden h-100">
              <div class="card-header bg-danger text-white p-3">
                <h3 class="h5 mb-0"><i class="bi bi-geo-alt-fill me-2"></i>Conference Venue</h3>
              </div>
              <div class="card-body p-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.8050030730496!2d106.82540607499205!3d-6.419095993571829!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69eb97981e953d%3A0x7040f2673277d58f!2sKampus%20Jakarta%20Global%20University!5e0!3m2!1sen!2sid!4v1739171281222!5m2!1sen!2sid" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
              <div class="card-footer bg-white border-0 p-3">
                <div class="d-flex align-items-center mb-3">
                  <i class="bi bi-building text-danger fs-4 me-3"></i>
                  <div>
                    <h5 class="h6 mb-0">Jakarta Global University</h5>
                    <p class="small text-muted mb-0">Kampus Jakarta, Indonesia</p>
                  </div>
                </div>
                <div class="d-flex align-items-center mb-3">
                  <i class="bi bi-calendar-event text-danger fs-4 me-3"></i>
                  <div>
                    <h5 class="h6 mb-0">Conference Dates</h5>
                    <p class="small text-muted mb-0">October 25, 2025</p>
                  </div>
                </div>
                <a href="#contact" class="btn btn-danger w-100 mt-2">
                  <i class="bi bi-send me-2"></i>Contact for More Information
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /About Section -->



    <!-- Why Us Section -->
    <!-- <section id="why-us" class="section why-us light-background" data-builder="section">

      <div class="container-fluid">

        <div class="row gy-4">

          <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">

            <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
              <h3><span>Eum ipsam laborum deleniti </span><strong>velit pariatur architecto aut nihil</strong></h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p>
            </div>

            <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">

              <div class="faq-item faq-active">

                <h3><span>01</span> Non consectetur a erat nam at lectus urna duis?</h3>
                <div class="faq-content">
                  <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item">
                <h3><span>02</span> Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</h3>
                <div class="faq-content">
                  <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item">
                <h3><span>03</span> Dolor sit amet consectetur adipiscing elit pellentesque?</h3>
                <div class="faq-content">
                  <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

            </div>

          </div>

          <div class="col-lg-5 order-1 order-lg-2 why-us-img">
            <img src="assets/img/why-us.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
          </div>
        </div>

      </div>

    </section> -->
    <!-- /Why Us Section -->

    <!-- Skills Section -->
    <!-- <section id="skills" class="skills section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">

          <div class="col-lg-6 d-flex align-items-center">
            <img src="assets/img/skills.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 pt-4 pt-lg-0 content">

            <h3>Voluptatem dignissimos provident quasi corporis voluptas</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>

            <div class="skills-content skills-animation">

              <div class="progress">
                <span class="skill"><span>HTML</span> <i class="val">100%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill"><span>CSS</span> <i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill"><span>JavaScript</span> <i class="val">75%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill"><span>Photoshop</span> <i class="val">55%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

            </div>

          </div>
        </div>

      </div>

    </section> -->
    <!-- /Skills Section -->

    <!-- Services Section -->
    <section id="services" class="topics section py-5 bg-light">
      <!-- Section Title -->
      <div class="container text-center mb-5" data-aos="fade-up">
        <h2 class="fw-bold mb-3">CONFERENCE TOPICS</h2>
        <p class="text-muted mx-auto" style="max-width: 600px;">Explore our conference topics and research areas</p>
        <div class="simple-divider my-3"></div>
      </div>

        <?php
        include 'admin conference/koneksi.php';
        $conference = new Koneksi();
        $result = $conference->GetTopicsWithSubtopics();

        $groupedData = [];
        while ($row = $result->fetch_assoc()) {
            $groupedData[$row['title']]['topics'][$row['topic']][] = $row['subtopic'];
        }

        $colors = ['bg-primary', 'bg-warning', 'bg-danger'];
        $colorIndex = 0;
        ?>

        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="row g-4">
            <?php foreach ($groupedData as $title => $data) {
              $color = $colors[$colorIndex % count($colors)];
              $collapseId = strtolower(str_replace(' ', '', $title)) . 'Details';
            ?>
              <div class="col-lg-4 col-md-6 d-flex">
                <div class="topic-card w-100 d-flex flex-column">
                  <div class="topic-header <?= $color ?>">
                    <h3 class="topic-title text-white"><?= $title ?></h3>
                  </div>
                  <div class="topic-body flex-grow-1 d-flex flex-column justify-content-between">
                    <ul class="topic-list">
                      <?php foreach ($data['topics'] as $topic => $subtopics) { ?>
                        <li><?= $topic ?></li>
                      <?php } ?>
                    </ul>
                    <div class="mt-3">
                      <button class="btn btn-sm btn-outline-primary view-details" type="button" data-bs-toggle="collapse" data-bs-target="#<?= $collapseId ?>">
                        View Subtopic
                      </button>

                      <div class="collapse mt-3" id="<?= $collapseId ?>">
                        <div class="subtopic-details">
                          <?php foreach ($data['topics'] as $topic => $subtopics) { ?>
                            <h6><?= $topic ?></h6>
                            <ul class="detailed-list">
                              <?php foreach ($subtopics as $sub) { ?>
                                <li><?= $sub ?></li>
                              <?php } ?>
                            </ul>
                          <?php } ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php $colorIndex++; } ?>
          </div>
        </div>



    </section>

    <!-- Co-Host Section -->
    <section id="co-host" class="co-host section py-5">
      <!-- Section Title -->
      <div class="container text-center mb-5">
        <h2 class="fw-bold mb-3">CO-HOST</h2>
        <p class="text-muted mx-auto" style="max-width: 700px;">JGITeC2025 is proudly co-hosted by these prestigious institutions</p>
        <div class="simple-divider my-3"></div>
      </div>

      <div class="container">
        <!-- Co-Host Images Row -->
        <div class="row justify-content-center mb-5">
          <!-- Co-Host Image 1 -->
          <?php 
          // include 'admin conference/koneksi.php';
          $conference = new Koneksi();
          $result = $conference->TampilHost();
          while($row = $result->fetch_assoc() ) {
          ?>
          <div class="col-md-3 col-6 mb-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="co-host-image-container">
              <img src="admin conference/image/<?= $row['image']?>" alt="Co-Host 1" class="img-fluid co-host-logo">
              <div class="co-host-name"><?= $row['name']?></div>
            </div>
          </div>
          <?php } ?>
          <!-- Co-Host Image 2 -->
          <!-- <div class="col-md-3 col-6 mb-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="co-host-image-container">
              <img src="/placeholder.svg?height=200&width=200" alt="Co-Host 2" class="img-fluid co-host-logo">
              <div class="co-host-name">Skenov</div>
            </div>
          </div> -->

          <!-- Co-Host Image 3 -->
          <!-- <div class="col-md-3 col-6 mb-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="co-host-image-container">
              <img src="assets/img/co-host3.png" alt="Co-Host 3" class="img-fluid co-host-logo">
              <div class="co-host-name">GULF</div>
            </div>
          </div> -->

          <!-- Co-Host Image 4 -->
          <!-- <div class="col-md-3 col-6 mb-4" data-aos="zoom-in" data-aos-delay="400">
            <div class="co-host-image-container">
              <img src="/placeholder.svg?height=200&width=200" alt="Co-Host 4" class="img-fluid co-host-logo">
              <div class="co-host-name">Lorem ipsum dolor sit amet.</div>
            </div>
          </div> -->
        </div>

        <!-- Co-Host Description -->
        <!-- <div class="row">
      <div class="col-12">
        <div class="co-host-description text-center" data-aos="fade-up">
          <p>Our conference is made possible through collaboration with these leading institutions in engineering, business, and pharmaceutical sciences. Together, we aim to foster innovation and knowledge exchange across disciplines.</p>
          <a href="#contact" class="btn btn-primary mt-3">Contact for Partnership</a>
        </div>
      </div>
    </div> -->
      </div>
    </section>


    <!-- /Services Section -->

    <!-- Call To Action Section -->
    <!-- <section id="call-to-action" class="call-to-action section dark-background">

      <img src="assets/img/cta-bg.jpg" alt="">

      <div class="container">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-9 text-center text-xl-start">
            <h3>Call To Action</h3>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-xl-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div>
        </div>

      </div>

    </section> -->

    <!-- /Call To Action Section -->

    <!-- Schedule Section -->
    <section id="schedule" class="schedule section py-5 bg-light">
      <!-- Section Title -->
      <div class="container text-center mb-5" data-aos="fade-up">
        <h2 class="fw-bold mb-3">CONFERENCE SCHEDULE</h2>
        <p class="text-muted mx-auto" style="max-width: 600px;">October 25, 2025 at Jakarta Global University</p>
        <div class="simple-divider my-3"></div>
      </div>

      <div class="container">
        <!-- Schedule Tabs -->
        <div class="row justify-content-center mb-4">
          <div class="col-md-8">
            <ul class="nav nav-pills mb-4 justify-content-center" id="scheduleTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="day1-tab" data-bs-toggle="pill" data-bs-target="#day1" type="button" role="tab">Day 1</button>
              </li>
              <!-- <li class="nav-item" role="presentation">
            <button class="nav-link" id="day2-tab" data-bs-toggle="pill" data-bs-target="#day2" type="button" role="tab">Day 2</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="day3-tab" data-bs-toggle="pill" data-bs-target="#day3" type="button" role="tab">Day 3</button>
          </li> -->
            </ul>
          </div>
        </div>

        <!-- Schedule Content -->
        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <div class="col-md-8">
            <div class="tab-content" id="scheduleTabContent">
              <!-- Day 1 Schedule -->
              <div class="tab-pane fade show active" id="day1" role="tabpanel">
                <h4 class="text-center mb-4">Day 1 - October 25, 2025</h4>

                <div class="schedule-list">
                  <div class="schedule-item">
                    <div class="schedule-time">08:00 - 09:00</div>
                    <div class="schedule-content">
                      <h5>Registration & Welcome Coffee</h5>
                      <p class="location">Main Lobby</p>
                    </div>
                  </div>

                  <div class="schedule-item highlight">
                    <div class="schedule-time">09:00 - 10:00</div>
                    <div class="schedule-content">
                      <h5>Opening Ceremony</h5>
                      <p class="location">Grand Ballroom</p>
                    </div>
                  </div>

                  <div class="schedule-item">
                    <div class="schedule-time">10:00 - 11:00</div>
                    <div class="schedule-content">
                      <h5>Keynote: The Future of Technology Integration</h5>
                      <p class="speaker">Prof. Dr. John Smith, MIT</p>
                    </div>
                  </div>

                  <div class="schedule-item break">
                    <div class="schedule-time">11:00 - 11:30</div>
                    <div class="schedule-content">
                      <h5>Coffee Break</h5>
                    </div>
                  </div>

                  <div class="schedule-item">
                    <div class="schedule-time">11:30 - 12:30</div>
                    <div class="schedule-content">
                      <h5>Keynote: Sustainable Engineering Practices</h5>
                      <p class="speaker">Dr. Maria Rodriguez, Stanford University</p>
                    </div>
                  </div>

                  <div class="schedule-item break">
                    <div class="schedule-time">12:30 - 14:00</div>
                    <div class="schedule-content">
                      <h5>Lunch Break</h5>
                    </div>
                  </div>

                  <div class="schedule-item">
                    <div class="schedule-time">14:00 - 15:30</div>
                    <div class="schedule-content">
                      <h5>Parallel Sessions: Engineering Innovations</h5>
                      <p class="location">Room A, B, C</p>
                    </div>
                  </div>

                  <div class="schedule-item special">
                    <div class="schedule-time">18:00 - 20:00</div>
                    <div class="schedule-content">
                      <h5>Welcome Reception</h5>
                      <p class="location">Garden Terrace</p>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Day 2 Schedule -->
              <!-- <div class="tab-pane fade" id="day2" role="tabpanel">
            <h4 class="text-center mb-4">Day 2 - March 18, 2025</h4>
            
            <div class="schedule-list">
              <div class="schedule-item">
                <div class="schedule-time">09:00 - 10:00</div>
                <div class="schedule-content">
                  <h5>Keynote: Digital Transformation in Business</h5>
                  <p class="speaker">Dr. Hiroshi Tanaka, University of Tokyo</p>
                </div>
              </div>
              
              <div class="schedule-item">
                <div class="schedule-time">10:00 - 12:00</div>
                <div class="schedule-content">
                  <h5>Parallel Sessions: Multiple Tracks</h5>
                  <p class="location">Rooms A, B, C, D</p>
                </div>
              </div>
              
              <div class="schedule-item break">
                <div class="schedule-time">12:00 - 13:30</div>
                <div class="schedule-content">
                  <h5>Lunch Break</h5>
                </div>
              </div>
              
              <div class="schedule-item highlight">
                <div class="schedule-time">13:30 - 15:30</div>
                <div class="schedule-content">
                  <h5>Workshops & Interactive Sessions</h5>
                  <p class="location">Workshop Rooms 1-4</p>
                </div>
              </div>
              
              <div class="schedule-item special">
                <div class="schedule-time">19:00 - 22:00</div>
                <div class="schedule-content">
                  <h5>Conference Gala Dinner</h5>
                  <p class="location">Grand Ballroom</p>
                </div>
              </div>
            </div>
          </div> -->

              <!-- Day 3 Schedule -->
              <!-- <div class="tab-pane fade" id="day3" role="tabpanel">
            <h4 class="text-center mb-4">Day 3 - March 19, 2025</h4>
            
            <div class="schedule-list">
              <div class="schedule-item">
                <div class="schedule-time">09:00 - 10:00</div>
                <div class="schedule-content">
                  <h5>Keynote: Future Research Directions</h5>
                  <p class="speaker">Prof. Dr. Sarah Johnson, University of California</p>
                </div>
              </div>
              
              <div class="schedule-item">
                <div class="schedule-time">10:00 - 12:00</div>
                <div class="schedule-content">
                  <h5>Final Parallel Sessions</h5>
                  <p class="location">Rooms A, B, C</p>
                </div>
              </div>
              
              <div class="schedule-item break">
                <div class="schedule-time">12:00 - 13:30</div>
                <div class="schedule-content">
                  <h5>Lunch Break</h5>
                </div>
              </div>
              
              <div class="schedule-item special">
                <div class="schedule-time">15:30 - 17:00</div>
                <div class="schedule-content">
                  <h5>Closing Ceremony</h5>
                  <p class="location">Grand Ballroom</p>
                </div>
              </div>
            </div>
          </div> -->
            </div>
          </div>
        </div>

        <!-- Download Button -->
        <!-- <div class="row mt-4">
      <div class="col-12 text-center">
        <a href="#" class="btn btn-danger">Download Schedule</a>
      </div>
    </div> -->
      </div>
    </section>



    <!-- /Portfolio Section -->

    <!-- Team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>KEYNOTE SPEAKER</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member d-flex align-items-start bg-light">
              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member d-flex align-items-start bg-light">
              <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
                <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member d-flex align-items-start bg-light">
              <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member d-flex align-items-start bg-light">
              <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Team Section -->

    <!-- Pricing Section -->
    <section id="pricing" class="pricing section light-background">

      <div class="container section-title" data-aos="fade-up">
        <h2>Registration on Fee</h2>
        <!-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> -->
      </div>

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="pricing-item">
              <h3>Free Plan</h3>
              <h4><sup>$</sup>0<span> / month</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span></li>
                <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
              </ul>
              <a href="#" class="buy-btn">Buy Now</a>
            </div>
          </div>

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="pricing-item featured">
              <h3>Business Plan</h3>
              <h4><sup>$</sup>29<span> / month</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                <li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
                <li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
              </ul>
              <a href="#" class="buy-btn">Buy Now</a>
            </div>
          </div>

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="pricing-item">
              <h3>Developer Plan</h3>
              <h4><sup>$</sup>49<span> / month</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                <li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
                <li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
              </ul>
              <a href="#" class="buy-btn">Buy Now</a>
            </div>
          </div>

        </div>

      </div>

    </section>

    <!-- /Pricing Section -->

    <!-- Peer Review Process Section -->
    <section id="peer-review" class="peer-review section py-5">
      <!-- Section Title -->
      <div class="container section-title text-center mb-5" data-aos="fade-up">
        <h2 class="display-5 fw-bold mb-3">Peer Review Process</h2>
        <p class="lead text-muted mx-auto" style="max-width: 700px;">Our rigorous peer review process ensures the quality and integrity of all published papers.</p>
        <div class="simple-divider my-4"></div>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <!-- Process Steps -->
        <div class="row justify-content-center mb-5">
          <div class="col-lg-10">
            <div class="process-container">
              <!-- Step 1 -->
              <div class="process-step" data-aos="fade-up" data-aos-delay="100">
                <div class="process-content">
                  <h4>1. Submission</h4>
                  <p>Authors submit their manuscripts through the conference submission system. All submissions must follow the provided template and guidelines.</p>
                </div>
              </div>

              <!-- Step 2 -->
              <div class="process-step" data-aos="fade-up" data-aos-delay="200">
                <div class="process-content">
                  <h4>2. Initial Screening</h4>
                  <p>The editorial team conducts an initial screening to ensure submissions meet basic requirements and fall within the conference scope.</p>
                </div>
              </div>

              <!-- Step 3 -->
              <div class="process-step" data-aos="fade-up" data-aos-delay="300">
                <div class="process-content">
                  <h4>3. Peer Review</h4>
                  <p>Each manuscript is assigned to at least two independent reviewers with expertise in the relevant field. The review process is double-blind to ensure fairness.</p>
                </div>
              </div>

              <!-- Step 4 -->
              <!-- <div class="process-step" data-aos="fade-up" data-aos-delay="400">
            <div class="process-content">
              <h4>4. Editorial Decision</h4>
              <p>Based on reviewer recommendations, the editorial board makes a decision to accept, request revisions, or reject the manuscript.</p>
            </div>
          </div> -->

              <!-- Step 5 -->
              <!-- <div class="process-step" data-aos="fade-up" data-aos-delay="500">
            <div class="process-content">
              <h4>5. Revision</h4>
              <p>Authors of manuscripts requiring revisions are given time to address reviewer comments and resubmit their work.</p>
            </div>
          </div> -->

              <!-- Step 6 -->
              <!-- <div class="process-step" data-aos="fade-up" data-aos-delay="600">
            <div class="process-number">6</div>
            <div class="process-content">
              <h4>Final Decision & Publication</h4>
              <p>After final review, accepted papers are processed for publication in the conference proceedings.</p>
            </div>
          </div> -->
            </div>
          </div>
        </div>

        <!-- Review Criteria -->
        <div class="row justify-content-center mb-5">
          <div class="col-lg-10">
            <div class="criteria-card" data-aos="fade-up">
              <h3 class="criteria-title">Review Criteria</h3>
              <div class="row">
                <div class="col-md-6">
                  <ul class="criteria-list">
                    <li>Originality and innovation of the research</li>
                    <li>Relevance to the conference themes</li>
                    <li>Soundness of methodology</li>
                    <li>Quality of analysis and interpretation</li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="criteria-list">
                    <li>Clarity and organization of the manuscript</li>
                    <li>Significance of findings and contribution</li>
                    <li>Ethical considerations</li>
                    <li>Quality of references and citations</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Timeline -->
        <!-- <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="timeline-card" data-aos="fade-up">
          <h3 class="timeline-title">Review Timeline</h3>
          <div class="timeline-container">
            <div class="timeline-item">
              <div class="timeline-date">March 15, 2025</div>
              <div class="timeline-event">Paper Submission Deadline</div>
            </div>
            <div class="timeline-item">
              <div class="timeline-date">April 20, 2025</div>
              <div class="timeline-event">Review Results Notification</div>
            </div>
            <div class="timeline-item">
              <div class="timeline-date">May 10, 2025</div>
              <div class="timeline-event">Revised Paper Submission</div>
            </div>
            <div class="timeline-item">
              <div class="timeline-date">May 25, 2025</div>
              <div class="timeline-event">Final Acceptance Notification</div>
            </div>
            <div class="timeline-item">
              <div class="timeline-date">June 15, 2025</div>
              <div class="timeline-event">Camera-Ready Submission</div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
      </div>
    </section>

    <!-- Editorial Board Section -->
    <section id="editorial-board" class="editorial-board section py-5">
      <!-- Section Title -->
      <div class="container section-title text-center mb-5" data-aos="fade-up">
        <h2 class="display-5 fw-bold mb-3">Editorial Team</h2>
        <p class="lead text-muted mx-auto" style="max-width: 700px;">
          Our distinguished editorial board members ensure the highest standards of academic excellence and research integrity.
        </p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <!-- Chief Editors Section -->
        <div class="row mb-5" id="chief-editors">
          <div class="col-12">
            <div class="board-category-title" data-aos="fade-up">
              <h3 class="h4 fw-bold">Chief Editors</h3>
              <div class="board-category-line"></div>
            </div>
          </div>

          <?php
          $conference = new Koneksi();
          $result = $conference->TampilChief();
          while($row = $result->fetch_assoc()) {
          ?>
          <!-- Chief Editor Cards -->
          <div class="col-lg-4 col-md-6 mt-4" data-aos="fade-up" data-aos-delay="200">
            <div class="editor-card chief-editor-card">
              <div class="editor-card-header">
                <div class="editor-role">Chief Editor</div>
              </div>
              <div class="editor-card-body">
                <h4 class="editor-name"><?= $row['name']?></h4>
                <p class="editor-title"><?= $row['title']?></p>
                <p class="editor-affiliation"><?= $row['university']?></p>
                <!-- <div class="editor-expertise">
                  <span class="badge bg-light text-dark">Digital Transformation</span>
                  <span class="badge bg-light text-dark">ICT Policy</span>
                </div> -->
              </div>
            </div>
          </div>
          <?php } ?>

          <!-- <div class="col-lg-4 col-md-6 mt-4" data-aos="fade-up" data-aos-delay="300">
            <div class="editor-card chief-editor-card">
              <div class="editor-card-header">
                <div class="editor-role">Chief Editor</div>
              </div>
              <div class="editor-card-body">
                <h4 class="editor-name">Prof. Dr. Maria Rodriguez</h4>
                <p class="editor-title">Professor of Informatics Engineering</p>
                <p class="editor-affiliation">University of Milan, Italy</p>
                <div class="editor-expertise">
                  <span class="badge bg-light text-dark">Agile Development</span>
                  <span class="badge bg-light text-dark">DevOps</span>
                </div>

              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4" data-aos="fade-up" data-aos-delay="400">
            <div class="editor-card chief-editor-card">
              <div class="editor-card-header">
                <div class="editor-role">Chief Editor</div>
              </div>
              <div class="editor-card-body">
                <h4 class="editor-name">Prof. Dr. Hiroshi Tanaka</h4>
                <p class="editor-title">Professor of Information Systems</p>
                <p class="editor-affiliation">Cairo University, Egypt</p>
                <div class="editor-expertise">
                  <span class="badge bg-light text-dark">Cybersecurity</span>
                  <span class="badge bg-light text-dark">E-Government</span>
                </div>
              </div>
            </div>
          </div>
        </div> -->

        <!-- Associate Editors Section -->
        <div class="row mb-5" id="associate-editors">
          <div class="col-12">
            <div class="board-category-title" data-aos="fade-up">
              <h3 class="h4 fw-bold">Associate Editors</h3>
              <div class="board-category-line"></div>
            </div>
          </div>
          

              <?php
            $conference = new Koneksi();
            $result = $conference->TampilAssociate();
            while($row = $result->fetch_assoc()) {
            ?>
          <!-- Associate Editor Cards -->
          <div class="col-lg-4 col-md-6 mt-4" data-aos="fade-up" data-aos-delay="100">
            <div class="editor-card associate-editor-card text-center p-4">
              <h5 class="editor-name"><?= $row['name']?></h5>
              <!-- <p class="editor-affiliation mb-1">University of California, USA</p>
          <small class="text-muted">Civil Engineering</small> -->
            </div>
          </div>

          <!-- <div class="col-lg-4 col-md-6 mt-4" data-aos="fade-up" data-aos-delay="200">
            <div class="editor-card associate-editor-card text-center p-4">
              <h5 class="editor-name">Dr. Ahmed Hassan</h5>
              <p class="editor-affiliation mb-1">Cairo University, Egypt</p>
          <small class="text-muted">Electrical Engineering</small>
            </div>
          </div> -->

          <!-- <div class="col-lg-4 col-md-6 mt-4" data-aos="fade-up" data-aos-delay="300">
            <div class="editor-card associate-editor-card text-center p-4">
              <h5 class="editor-name">Dr. Li Wei</h5>
              <p class="editor-affiliation mb-1">Tsinghua University, China</p>
          <small class="text-muted">Industrial Engineering</small>
            </div>
          </div> -->

          <!-- <div class="col-lg-4 col-md-6 mt-4" data-aos="fade-up" data-aos-delay="400">
            <div class="editor-card associate-editor-card text-center p-4">
              <h5 class="editor-name">Dr. Priya Sharma</h5>
              <p class="editor-affiliation mb-1">IIT Delhi, India</p>
          <small class="text-muted">Pharmaceutical Sciences</small>
            </div>
          </div> -->

          <!-- <div class="col-lg-4 col-md-6 mt-4" data-aos="fade-up" data-aos-delay="500">
            <div class="editor-card associate-editor-card text-center p-4">
              <h5 class="editor-name">Dr. James Wilson</h5>
              <p class="editor-affiliation mb-1">University of Melbourne, Australia</p>
          <small class="text-muted">Business Administration</small>
            </div>
          </div> -->
          <?php } ?>
        </div>



        <!-- Editorial Board Members Section -->
        <div class="row mb-5" id="editorial">
          <div class="col-12">
            <div class="board-category-title" data-aos="fade-up">
              <h3 class="h4 fw-bold">Editorial Board </h3>
              <div class="board-category-line"></div>
            </div>
          </div>

          <?php
          $conference = new Koneksi();
          $result = $conference->TampilBoard();
          while($row = $result->fetch_assoc()) {
          ?>
          <!-- Editorial Board Member Cards -->
          <div class="col-lg-3 col-md-6 mt-4" data-aos="fade-up" data-aos-delay="200">
            <div class="editor-card">
              <div class="editor-card-header">
                <div class="editor-role">Editorial Board</div>
              </div>
              <div class="editor-card-body">
                <h4 class="editor-name"><?= $row['name']?></h4>
                <!-- <p class="editor-title">Associate Professor of Data Science</p>
            <p class="editor-affiliation">Tsinghua University, China</p>
            <div class="editor-expertise">
              <span class="badge bg-light text-dark">Big Data</span>
              <span class="badge bg-light text-dark">AI Ethics</span>
            </div> -->
              </div>
            </div>
          </div>
            <?php } ?>
          <!-- <div class="col-lg-3 col-md-6 mt-4" data-aos="fade-up" data-aos-delay="300">
            <div class="editor-card">
              <div class="editor-card-header">
                <div class="editor-role">Editorial Board</div>
              </div>
              <div class="editor-card-body">
                <h4 class="editor-name">Prof. Dr. Ahmed El-Sayed</h4>
                <p class="editor-title">Professor of Information Systems</p>
            <p class="editor-affiliation">Cairo University, Egypt</p>
            <div class="editor-expertise">
              <span class="badge bg-light text-dark">Cybersecurity</span>
              <span class="badge bg-light text-dark">E-Government</span>
            </div>
              </div>
            </div>
          </div> -->

          <!-- <div class="col-lg-3 col-md-6 mt-4" data-aos="fade-up" data-aos-delay="400">
            <div class="editor-card">
              <div class="editor-card-header">
                <div class="editor-role">Editorial Board</div>
              </div>
              <div class="editor-card-body">
                <h4 class="editor-name">Dr. Isabella Rossi</h4>
                <p class="editor-title">Professor of Informatics Engineering</p>
            <p class="editor-affiliation">University of Milan, Italy</p>
            <div class="editor-expertise">
              <span class="badge bg-light text-dark">Agile Development</span>
              <span class="badge bg-light text-dark">DevOps</span>
            </div>
              </div>
            </div>
          </div> -->

          <!-- <div class="col-lg-3 col-md-6 mt-4" data-aos="fade-up" data-aos-delay="500">
            <div class="editor-card">
              <div class="editor-card-header">
                <div class="editor-role">Editorial Board</div>
              </div>
              <div class="editor-card-body">
                <h4 class="editor-name">Prof. Dr. James O’Connor</h4>
                <p class="editor-title">Chair of Digital Innovation</p>
            <p class="editor-affiliation">University of Sydney, Australia</p>
            <div class="editor-expertise">
              <span class="badge bg-light text-dark">Digital Transformation</span>
              <span class="badge bg-light text-dark">ICT Policy</span>
            </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </section>



    <!-- Testimonials Section -->
    <!-- <section id="testimonials" class="testimonials section">

     
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div>

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
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section> -->
    <!-- /Testimonials Section -->

    <!-- Faq 2 Section -->
    <!-- <section id="faq-2" class="faq-2 section light-background">

      <div class="container section-title" data-aos="fade-up">
        <h2>Frequently Asked Questions</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="container">

        <div class="row justify-content-center">

          <div class="col-lg-10">

            <div class="faq-container">

              <div class="faq-item faq-active" data-aos="fade-up" data-aos-delay="200">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Non consectetur a erat nam at lectus urna duis?</h3>
                <div class="faq-content">
                  <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</h3>
                <div class="faq-content">
                  <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Dolor sit amet consectetur adipiscing elit pellentesque?</h3>
                <div class="faq-content">
                  <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h3>
                <div class="faq-content">
                  <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item" data-aos="fade-up" data-aos-delay="600">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Tempus quam pellentesque nec nam aliquam sem et tortor consequat?</h3>
                <div class="faq-content">
                  <p>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

            </div>

          </div>

        </div>

      </div>

    </section> -->

    <!-- /Faq 2 Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section py-5 bg-white">
      <!-- Section Title -->
      <div class="container section-title text-center mb-5" data-aos="fade-up">
        <!-- <div class="badge bg-danger px-3 py-2 mb-3">Get In Touch</div> -->
        <h2 class="display-5 fw-bold mb-3">Contact Us</h2>
        <p class="lead text-muted mx-auto" style="max-width: 700px;">Have questions about the conference? Reach out to our team for more information.</p>
        <div class="divider-custom my-4">
          <div class="divider-custom-line"></div>
          <div class="divider-custom-icon"><i class="bi bi-chat-dots"></i></div>
          <div class="divider-custom-line"></div>
        </div>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row g-5 align-items-stretch">

          <!-- Contact Information Card -->
          <div class="col-lg-6">
            <div class="card contact-info-card h-100 border-0 shadow-sm">
              <div class="card-body p-4 p-xl-5">
                <h3 class="card-title fw-bold mb-4 text-danger">Conference Information</h3>

                <!-- Contact Info Items -->
                <div class="contact-info-items">
                  <!-- Address -->
                  <div class="contact-info-item d-flex mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="contact-icon bg-danger text-white">
                      <i class="bi bi-geo-alt"></i>
                    </div>
                    <div class="ms-3">
                      <h5 class="fw-bold text-black">Conference Venue</h5>
                      <p class="text-muted mb-0">Jakarta Global University Ballroom<br>Depok, Indonesia</p>
                    </div>
                  </div>

                  <!-- Phone -->
                  <div class="contact-info-item d-flex mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="contact-icon bg-danger text-white">
                      <i class="bi bi-telephone"></i>
                    </div>
                    <div class="ms-3">
                      <h5 class="fw-bold text-black">Conference Hotline</h5>
                      <p class="text-muted mb-0">+62 123 4567 890</p>
                    </div>
                  </div>

                  <!-- Email -->
                  <div class="contact-info-item d-flex mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="contact-icon bg-danger text-white">
                      <i class="bi bi-envelope"></i>
                    </div>
                    <div class="ms-3">
                      <h5 class="fw-bold text-black">Email Support</h5>
                      <a href="mailto:enquiry@jgu.ac.id" class="mb-0 text-primary">enquiry@jgu.ac.id</a>
                    </div>
                  </div>

                  <!-- Social Media -->
                  <div class="contact-info-item d-flex mb-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="contact-icon bg-danger text-white">
                      <i class="bi bi-share"></i>
                    </div>
                    <div class="ms-3">
                      <h5 class="fw-bold text-black">Follow Us</h5>
                      <div class="social-links mt-2">
                        <a href="https://x.com/JGU_University?mx=2" target="_blank" class="me-2 btn btn-sm btn-outline-primary rounded-circle">
                          <i class="bi bi-twitter-x"></i>
                        </a>
                        <a href="https://www.facebook.com/jakartaglobaluniversity?_rdc=2&_rdr" target="_blank" class="me-2 btn btn-sm btn-outline-primary rounded-circle">
                          <i class="bi bi-facebook"></i>
                        </a>
                        <a href="https://www.instagram.com/jg_university" target="_blank" class="me-2 btn btn-sm btn-outline-primary rounded-circle">
                          <i class="bi bi-instagram"></i>
                        </a>
                        <a href="https://www.linkedin.com/school/jakarta-global-university" target="_blank" class="me-2 btn btn-sm btn-outline-primary rounded-circle">
                          <i class="bi bi-linkedin"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- WhatsApp Contact Button -->
                <div class="mt-4 text-center" data-aos="fade-up" data-aos-delay="600">
                  <a href="https://wa.me/6281234567890" target="_blank" class="btn btn-success btn-lg whatsapp-btn">
                    <i class="bi bi-whatsapp me-2"></i> Contact via WhatsApp
                  </a>
                  <p class="text-muted small mt-2">Available Monday-Friday, 9AM-5PM</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Map Card -->
          <div class="col-lg-6">
            <div class="card map-card h-100 border-0 shadow-sm">
              <div class="card-body p-0">
                <div class="map-header bg-danger text-white p-4">
                  <h3 class="fw-bold mb-0 text-white"><i class="bi bi-pin-map me-2"></i> Conference Location</h3>
                </div>
                <div class="ratio ratio-4x3">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.8050030730496!2d106.82540607499205!3d-6.419095993571829!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69eb97981e953d%3A0x7040f2673277d58f!2sKampus%20Jakarta%20Global%20University!5e0!3m2!1sen!2sid!4v1739171281222!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="p-4">
                  <a href="https://maps.google.com/?q=Jakarta+Global+University" target="_blank" class="btn btn-outline-primary mt-3">
                    <i class="bi bi-box-arrow-up-right me-2"></i>Open in Google Maps
                  </a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

    </section>
    <!-- /Contact Section -->



  </main>

  <footer id="footer" class="footer bg-dark">

    <!-- <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
            <form action="forms/newsletter.php" method="post" class="php-email-form">
              <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your subscription request has been sent. Thank you!</div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="d-flex align-items-center">
            <span class="sitename">Arsha</span>
          </a>
          <div class="footer-contact pt-3">
            <p>A108 Adam Street</p>
            <p>New York, NY 535022</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
            <p><strong>Email:</strong> <span>info@example.com</span></p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12">
          <h4>Follow Us</h4>
          <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
          <div class="social-links d-flex">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div> -->

    <div class="container copyright text-center mt-4 text-white">
      <p><strong class="px-1 sitename">© 2025 Jakarta Global University.</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Created by <a href="https://s.jgu.ac.id/m/itic" target="_blank">ITIC</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <!-- <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script> -->

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
  <!-- Bootstrap JS for Tabs -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Initialize Bootstrap tabs
      var triggerTabList = [].slice.call(document.querySelectorAll('#scheduleTab button'))
      triggerTabList.forEach(function(triggerEl) {
        var tabTrigger = new bootstrap.Tab(triggerEl)

        triggerEl.addEventListener('click', function(event) {
          event.preventDefault()
          tabTrigger.show()
        })
      })
    });
  </script>

</body>

</html>