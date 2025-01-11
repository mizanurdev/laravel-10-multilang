<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Laravel 10 Multi Language Example</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('frontend') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('frontend') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('frontend') }}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{ asset('frontend') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ asset('frontend') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('frontend') }}/assets/css/main.css" rel="stylesheet">
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="{{ route('home.page') }}" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="{{ asset('frontend') }}/assets/img/logo.png" alt=""> -->
        <h1 class="sitename">{{__('English')}}</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li>
              <div class="switch">
                  <input id="language-toggle" class="check-toggle check-toggle-round-flat" type="checkbox" 
                        @if(app()->getLocale() == 'bn') checked @endif>
                  <label for="language-toggle"></label>
                  <span class="on">ENG</span>
                  <span class="off">বাংলা</span>
              </div>
          </li>
          <li><a href="{{ route('home.page') }}" class="active">{{__('Home')}}</a></li>
          <li><a href="#about">{{__('About')}}</a></li>
          <li><a href="#team">{{__('Team')}}</a></li>
          <li><a href="#contact">{{__('Contact')}}</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
      @if (Route::has('login'))
          @auth
              @if (Auth::user()->role === 'admin')
                  <a href="{{ url('/admin/dashboard') }}" class="btn-getstarted">{{__('Dashboard')}}</a>
              @else
                  <a href="{{ url('/dashboard') }}" class="btn-getstarted">{{__('Dashboard')}}</a>
              @endif
          @else
              <a href="{{ route('login') }}" class="btn-getstarted">{{__('Login')}}</a>
          @endauth
      @endif
    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
            <h1>{{__('Better Solutions For Your Business')}}</h1>
            <p>{{__('We are team of talented designers making websites with Bootstrap')}}</p>
            <div class="d-flex">
              <a href="#about" class="btn-get-started">{{__('Get Started')}}</a>
              <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>{{__('Watch Video')}}</span></a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="{{ asset('frontend') }}/assets/img/hero-img.png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>{{__('About Us')}}</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p>{{__('Empowering businesses and individuals through innovative software. We deliver exceptional quality, unmatched service, and cutting-edge technology.')}}</p>
            <ul>
              <li><i class="bi bi-check2-circle"></i> <span>{{__('Enable businesses and individuals to succeed')}}</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>{{__('Unlock the potential of businesses and individuals')}}</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>{{__('To provide reliable, scalable, and user-friendly software')}}</span></li>
            </ul>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <p>{{__('We are passionate about crafting innovative software solutions that empower businesses and individuals. We strive to deliver exceptional quality, unmatched customer service, and cutting-edge technology to help our clients achieve their goals.')}}</p>
            <a href="#" class="read-more"><span>{{__('Read More')}}</span><i class="bi bi-arrow-right"></i></a>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->


    <!-- Team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>{{__('Team')}}</h2>
        <p>{{__('Experts Dedicated to Delivering Outstanding Results')}}</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
          @foreach ($teams as $team)
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="{{ asset('storage/'.$team->image) }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>{{ $team->{app()->getLocale() . '_name'} }}</h4>
                <span>{{ $team->{app()->getLocale() . '_designation'} }}</span>
                <p>{{ $team->{app()->getLocale() . '_description'} }}</p>
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
        @endforeach
      </div>

    </section><!-- /Team Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>{{__('Contact')}}</h2>
        <p>{{__('Talk to Our Sales & Marketing Department Team')}}</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-12">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <label for="name-field" class="pb-2">{{__('Your Name')}}</label>
                  <input type="text" name="name" id="name-field" class="form-control" required="">
                </div>

                <div class="col-md-6">
                  <label for="email-field" class="pb-2">{{__('Your Email')}}</label>
                  <input type="email" class="form-control" name="email" id="email-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="subject-field" class="pb-2">{{__('Subject')}}</label>
                  <input type="text" class="form-control" name="subject" id="subject-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="message-field" class="pb-2">{{__('Message')}}</label>
                  <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <button type="submit">{{__('Send Message')}}</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>


  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('frontend') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('frontend') }}/assets/vendor/php-email-form/validate.js"></script>
  <script src="{{ asset('frontend') }}/assets/vendor/aos/aos.js"></script>
  <script src="{{ asset('frontend') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ asset('frontend') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ asset('frontend') }}/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="{{ asset('frontend') }}/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="{{ asset('frontend') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="{{ asset('frontend') }}/assets/js/main.js"></script>
  <style>
        /* Style for the switch */
        .switch {
            position: relative;
            display: inline-block;
            margin: 0 5px;
        }
        .switch > span {
            position: absolute;
            top: 10px;
            pointer-events: none;
            font-family: 'Helvetica', Arial, sans-serif;
            font-weight: bold;
            font-size: 12px;
            text-transform: uppercase;
            text-shadow: 0 1px 0 rgba(0, 0, 0, .06);
            width: 50%;
            text-align: center;
        }
        input.check-toggle-round-flat:checked ~ .off {
            color: #6ec3e8;
        }
        input.check-toggle-round-flat:checked ~ .on {
            color: #fff;
        }
        .switch > span.on {
            left: 0;
            padding-left: 2px;
            color: #6ec3e8;
        }
        .switch > span.off {
            right: 0;
            padding-right: 4px;
            color: #fff;
        }
        .check-toggle {
            position: absolute;
            margin-left: -9999px;
            visibility: hidden;
        }
        .check-toggle + label {
            display: block;
            position: relative;
            cursor: pointer;
            outline: none;
            user-select: none;
        }
        input.check-toggle-round-flat + label {
            padding: 2px;
            width: 97px;
            height: 35px;
            background-color: #6ec3e8;
            border-radius: 60px;
        }
        input.check-toggle-round-flat + label:before, input.check-toggle-round-flat + label:after {
            display: block;
            position: absolute;
            content: "";
        }
        input.check-toggle-round-flat + label:before {
            top: 2px;
            left: 2px;
            bottom: 2px;
            right: 2px;
            background-color: #6ec3e8;
            border-radius: 60px;
        }
        input.check-toggle-round-flat + label:after {
            top: 4px;
            left: 4px;
            bottom: 4px;
            width: 48px;
            background-color: #fff;
            border-radius: 52px;
            transition: margin 0.2s;
        }
        input.check-toggle-round-flat:checked + label:after {
            margin-left: 44px;
        }
    </style>
    <script>
      /* script for the switch */
      const languageToggle = document.getElementById('language-toggle');
      languageToggle.addEventListener('change', function() {
          const currentLocale = '{{ app()->getLocale() }}';
          let newLocale = languageToggle.checked ? 'bn' : 'en';

          let currentUrl = window.location.href;
          if (newLocale === 'bn') {
              if (currentUrl === window.location.origin + '/') {
                  window.location.href = window.location.origin + '/bn';
              } else {
                  let newUrl = currentUrl.replace(`${window.location.origin}/`, `${window.location.origin}/bn/`);
                  window.location.href = newUrl;
              }
          }
          else {
              if (currentUrl === window.location.origin + '/bn') {
                  window.location.href = window.location.origin + '/';
              } else {
                  let newUrl = currentUrl.replace(`${window.location.origin}/bn`, `${window.location.origin}/`);
                  window.location.href = newUrl;
              }
          }
      });
  </script>

</body>

</html>