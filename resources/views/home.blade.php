<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>my portofolio</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('template-home/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('template-home/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect crossorigin">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('template-home/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('template-home/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('template-home/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('template-home/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('template-home/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('template-home/css/main.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Folio
  * Template URL: https://bootstrapmade.com/folio-bootstrap-portfolio-template/
  * Updated: Aug 08 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">my portofolio</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#skill">Skill</a></li>
          <li><a href="#projects">Projects</a></li>
          <li><a href="#certificates">Cretificates</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <h2>Naifa Tri Candra<br></h2>
        <p>I'm <span class="typed" data-typed-items="Designer, Developer, Freelancer, Photographer">Freelancer</span></p>
        <div class="social-links">
          <a href="#"><i class="bi bi-instagram"></i></a>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About</h2>

      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 justify-content-between">
          <div class="col-lg-4 profile-img align-self-start">
            <img src="{{ asset('template-home/img/naican-bg.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-7 content">
            <p>Halo, saya Naifa Tri Candra, seorang pelajar asal SMKN 1 Ciomas yang memiliki minat besar di 
              bidang pengembangan web. Saya telah mempelajari berbagai teknologi seperti PHP, MySQL, dan Tailwind CSS untuk membangun 
              aplikasi web yang responsif dan fungsional. Saat ini, saya sedang mengembangkan keterampilan saya dalam membangun sistem berbasis
               API dan mempelajari praktik terbaik dalam pengembangan web modern. Saya berkomitmen untuk terus belajar dan menciptakan solusi kreatif 
               melalui teknologi.
              </p>
           
          </div>
        </div>
      </div>

    </section><!-- /About Section -->

    <!-- Skill Section -->
    <section id="skill" class="skill  section">

      <!-- Skilll Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>SKILL</h2>
        <p>Dibawah Ini adalah beberapa skill saya  </p>
      </div><!-- End Skill Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
             <div>
              <h4 class="title">HTML & CSS</h4>
              <p class="description">Membangun struktur dan tampilan antarmuka website.</p>
              
            </div>
          </div>
          <!-- End Skill Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <div>
              <h4 class="title">MySQL</h4>
              <p class="description">Mengelola dan mengolah data menggunakan MySQL, termasuk membuat, membaca, memperbarui, dan menghapus data (CRUD) untuk kebutuhan aplikasi web.</p>
              
            </div>
          </div><!-- End Skill Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <div>
              <h4 class="title">PHP</h4>
              <p class="description">Mengembangkan backend aplikasi web menggunakan PHP.</p>
              
            </div>
          </div><!-- End Skill Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
            <div>
              <h4 class="title">UI/UX Design</h4>
              <p class="description">Memahami dasar-dasar desain antarmuka (UI) dan pengalaman pengguna (UX).</p>
              
            </div>
          </div><!-- End SeSkillItem -->
        </div>

      </div>

    </section><!-- /Skill Section -->

    <!-- Projects Section -->
    <section id="projects" class="projects section light-background">
    <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 section-title" data-aos="fade-up">
        <h2>Projects</h2>
        <p>Dibawah ini ada beberapa projeck dulu saya saat kelas 1 smk </p>
      </div>
    </div>

    <div class="row" data-aos="fade-up" data-aos-delay="100">
  <!-- Project 1 -->
  <div class="col-lg-4 col-md-6 mb-4">
    <div class="project-item">
      <img src="{{ asset('template-home/img/projects/project-1.jpg') }}" class="img-fluid" alt="">
      <div class="project-info">
        <h3>Project 1</h3>
        <p>Ini adalah Projects pertama saya di kelas 1 SMK, yaitu membuat sebuah website biodata.</p>
        <a href="https://codepen.io/NAIFA-Tri-Candra/pen/dyQQPwb" class="read-more">
          <span>View Project</span>
          <i class="bi bi-arrow-right"></i>
        </a>
      </div>
    </div>
  </div>

  <!-- Project 2 -->
  <div class="col-lg-4 col-md-6 mb-4">
    <div class="project-item">
      <img src="{{ asset('template-home/img/projects/project-2.jpg') }}" class="img-fluid" alt="">
      <div class="project-info">
        <h3>Project 2</h3>
        <p>Ini adalah Projects kedua saya di kelas 1 SMK, yaitu membuat tabel harga.</p>
        <a href="https://codepen.io/NAIFA-Tri-Candra/pen/zYMbvax" class="read-more">
          <span>View Project</span>
          <i class="bi bi-arrow-right"></i>
        </a>
      </div>
    </div>
  </div>

  <!-- Project 3 -->
  <div class="col-lg-4 col-md-6 mb-4">
    <div class="project-item">
      <img src="{{ asset('template-home/img/projects/project-3.jpg') }}" class="img-fluid" alt="">
      <div class="project-info">
        <h3>Project 3</h3>
        <p>Ini adalah Project ketiga saya, yaitu membuat website dengan tema hewan.</p>
        <a href="https://codepen.io/NAIFA-Tri-Candra/pen/yLQdOGa" class="read-more">
          <span>View Project</span>
          <i class="bi bi-arrow-right"></i>
        </a>
      </div>
    </div>
  </div>

  <!-- Project 4 -->
  <div class="col-lg-4 col-md-6 mb-4">
    <div class="project-item">
      <img src="{{ asset('template-home/img/projects/project-4.jpg') }}" class="img-fluid" alt="">
      <div class="project-info">
        <h3>Project 4</h3>
        <p>Ini adalah Project keempat saya, yaitu membuat portfolio dengan berbagai gambar.</p>
        <a href="https://codepen.io/NAIFA-Tri-Candra/pen/yLQdaWd" class="read-more">
          <span>View Project</span>
          <i class="bi bi-arrow-right"></i>
        </a>
      </div>
    </div>
  </div>

  <!-- Project 5 -->
  <div class="col-lg-4 col-md-6 mb-4">
    <div class="project-item">
      <img src="{{ asset('template-home/img/projects/project-5.jpg') }}" class="img-fluid" alt="">
      <div class="project-info">
        <h3>Project 5</h3>
        <p>Ini adalah Project saya yaitu membuat website produk bernama Cimol menggunakan HTML & CSS saja.</p>
        <a href="https://codepen.io/NAIFA-Tri-Candra/pen/Jjwygrb" class="read-more">
          <span>View Project</span>
          <i class="bi bi-arrow-right"></i>
        </a>
      </div>
    </div>
  </div>
</div>

    </section>
    <!-- /projects Section -->

    <!-- certificates Section -->
    <section id="certificates" class="certificates section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>certificates</h2>
        <p>Dibawah Ini Ada beberapa certificates saya </p>
      </div><!-- End Section Title -->

      <div class="row" data-aos="fade-up" data-aos-delay="100">
  <!-- Certificate 1 -->
  <div class="col-lg-4 col-md-6 mb-4">
    <div class="project-item">
      <div class="project-info">
        <h3>Certificate 1</h3>
        <p>Memulai Dasar Pemrograman untuk Menjadi Pengembang Software</p>
        <a href="{{ asset('template-home/files/certificates (1).pdf') }}" class="read-more" target="_blank">
          <span>View Certificate</span>
          <i class="bi bi-arrow-right"></i>
        </a>
      </div>
    </div>
  </div>

  <!-- Certificate 2 -->
  <div class="col-lg-4 col-md-6 mb-4">
    <div class="project-item">
      <img src="{{ asset('template-home/img/projects/project-2.jpg') }}" class="img-fluid" alt="">
      <div class="project-info">
        <h3>Certificate 2</h3>
        <p>Pengenalan ke Logika Pemrograman (Programming Logic 101)</p>
        <a href="{{ asset('template-home/files/certificates (2).pdf') }}" class="read-more" target="_blank">
          <span>View Certificate</span>
          <i class="bi bi-arrow-right"></i>
        </a>
      </div>
    </div>
  </div>

  <!-- Certificate 3 -->
  <div class="col-lg-4 col-md-6 mb-4">
    <div class="project-item">
      <img src="{{ asset('template-home/img/projects/project-3.jpg') }}" class="img-fluid" alt="">
      <div class="project-info">
        <h3>Certificate 3</h3>
        <p>Pengenalan ke Logika Pemrograman (Programming Logic 101)</p>
        <a href="{{ asset('template-home/files/certificates (3).pdf') }}" class="read-more" target="_blank">
          <span>View Certificate</span>
          <i class="bi bi-arrow-right"></i>
        </a>
      </div>
    </div>
  </div>

    </section><!-- /certificatesSection -->


    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Jika memiliki pertanyaan atau proyek yang ingin di bicarakan bisa hubungi saya  melalui :</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="info-wrap" data-aos="fade-up" data-aos-delay="200">
          <div class="row gy-5">

            <div class="col-lg-4">
              <div class="info-item d-flex align-items-center">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Address</h3>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>
              </div>
            </div><!-- End Info Item -->

            <div class="col-lg-4">
              <div class="info-item d-flex align-items-center">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Call<br></h3>
                  <p>+1 5589 55488 55</p>
                </div>
              </div>
            </div><!-- End Info Item -->

            <div class="col-lg-4">
              <div class="info-item d-flex align-items-center">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email</h3>
                  <p>info@example.com</p>
                </div>
              </div>
            </div><!-- End Info Item -->

          </div>
        </div>

        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="300">
          <div class="row gy-4">

            <div class="col-md-6">
              <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
            </div>

            <div class="col-md-6 ">
              <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
            </div>

            <div class="col-md-12">
              <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
            </div>

            <div class="col-md-12">
              <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
            </div>

            <div class="col-md-12 text-center">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>

              <button type="submit">Send Message</button>
            </div>

          </div>
        </form><!-- End Contact Form -->

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer light-background">
    <div class="container">
      <h3 class="sitename">Folio</h3>
      <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
      <div class="social-links d-flex justify-content-center">
        <a href=""><i class="bi bi-twitter-x"></i></a>
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-skype"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a>
      </div>
      <div class="container">
        <div class="copyright">
          <span>Copyright</span> <strong class="px-1 sitename">Folio</strong> <span>All Rights Reserved</span>
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you've purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('template-home/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('template-home/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('template-home/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('template-home/vendor/typed.js/typed.umd.js') }}"></script>
  <script src="{{ asset('template-home/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('template-home/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('template-home/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('template-home/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('template-home/js/main.js') }}"></script>

</body>

</html>