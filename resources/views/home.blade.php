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
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        @foreach ($about as $row)
        <h2>{{ $row->title }}</h2>

      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 justify-content-between">
          <div class="col-lg-4 profile-img align-self-start">
            <img src="{{ asset('template-home/img/naican-bg.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-7 content">
          <p style="font-size: 18px; line-height: 1.8; text-align: justify; max-width: 800px; margin: 0 auto;">
            {{ $row->description }}
          </p>


           @endforeach
          </div>
        </div>
      </div>

    </section><!-- /About Section -->

    <!-- Skill Section -->
    <section id="skill" class="skill  section">

     <!-- Skill Title -->
  <div class="container section-title" data-aos="fade-up">
      <h2>SKILL</h2>
      <p>Dibawah Ini adalah beberapa skill saya</p>
  </div><!-- End Skill Title -->

  <div class="container">
      <div class="row gy-4">
          @foreach ($skills as $row)
              <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                  <div class="skill-card p-4 border rounded shadow-sm">
                      <h4 class="title">{{ $row->title }}</h4>
                      <p class="description">{{ $row->description }}</p>
                  </div>
              </div>
          @endforeach
      </div>
      </div>
<!-- End Skill Items -->

 </section>
 <!-- /Skill Section -->

   <!-- Projects Section -->
  <section id="projects" class="projects section light-background">
    <div class="container">
      <!-- Section Title -->
      <div class="row justify-content-center">
        <div class="col-lg-8 section-title" data-aos="fade-up">
          <h2>Projects</h2>
          <p>Dibawah ini ada beberapa proyek yang saya buat saat kelas 1 SMK</p>
        </div>
      </div>

    <!-- Projects Grid -->
    <div class="row" data-aos="fade-up" data-aos-delay="100">
      @foreach ($projects as $row)
      <!-- Single Project Item -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="project-item">
          <!-- Cek apakah gambar tersedia -->
          @if (!empty($row->img))
            <img src="{{ $row->img }}" class="img-fluid" alt="{{ $row->judul }}">
          @endif
          <div class="project-info">
            <h3>{{ $row->judul }}</h3>
            <p>{{ $row->description }}</p>
            <a href="{{ $row->link }}" class="read-more">
              <span>View Project</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <!-- /Projects Grid -->
      </div>
    </section>
    <!-- /Projects Section -->



    <!-- Certificates Section -->
<section id="certificates" class="certificates section">
  <div class="container">
    <!-- Section Title -->
    <div class="row justify-content-center">
      <div class="col-lg-8 section-title" data-aos="fade-up">
        <h2>Certificates</h2>
        <p>Dibawah ini ada beberapa sertifikat saya</p>
      </div>
    </div>
    <!-- /Section Title -->

    <!-- Certificates Grid -->
    <div class="row" data-aos="fade-up" data-aos-delay="100">
      @foreach ($certificates as $row)
      <!-- Single Certificate Item -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="project-item">
          <div class="project-info">
            <h3>{{ $row->name }}</h3>
            <p><strong>Issued By:</strong> {{ $row->issued_by }}</p>
            <p><strong>Issued At:</strong> {{ $row->issued_at }}</p>
            <p>{{ $row->description }}</p>
            <a href="{{ asset('storage/' . $row->file_path) }}" class="read-more" target="_blank">
              <span>View Certificate</span>
              <i class="bi bi-arrow-right"></i>
          </a>

          </div>
        </div>
      </div>
      @endforeach
    </div>
    <!-- /Certificates Grid -->
  </div>
</section>
<!-- /Certificates Section -->

<!-- Contact Section -->
<section id="contact" class="contact section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Contact</h2>
    <p>Jika memiliki pertanyaan atau proyek yang ingin dibicarakan, bisa hubungi saya melalui:</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="table-responsive">
      <table class="table table-bordered" style="border-color: #ddd; border-width: 1px;">
        <thead style="background-color: #f8f9fa;">
          <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
          </tr>
        </thead>
        <tbody style="background-color: #fafafa;">
          @foreach ($contacts as $index => $row)
          <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $row->name }}</td>
            <td>{{ $row->email }}</td>
            <td>{{ $row->subject }}</td>
            <td>{{ $row->message }}</td> <!-- Menampilkan pesan lengkap tanpa limit -->
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

</section>
<!-- /Contact Section -->

<!-- /Contact Section -->
  
    
  </main>

  <footer id="footer" class="footer light-background">
    <div class="container">
      <h3 class="sitename">My portofolio</h3>  
      <div class="container">   
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you've purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
          
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