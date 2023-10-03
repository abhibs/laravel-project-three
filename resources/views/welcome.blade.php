<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Abhiram B S</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('user/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('user/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('user/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('user/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('user/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('user/assets/css/main.css') }}" rel="stylesheet">


</head>

<body>

    <!-- ======= Header ======= -->
    <section id="topbar" class="topbar d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a
                        href="mailto:abhirambs97@gmail.com">abhirambs97@gmail.com</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><a href="tel: 9481187122" target="_blank">+91
                        9481187122</a></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="https://www.facebook.com/abhi.bs.102/" target="_blank"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/abhibs97/" target="_blank"><i class="bi bi-instagram"></i></a>
                <a href="https://www.youtube.com/@abhiramjavalli5113" target="_blank"><i class="bi bi-youtube"></i></a>
                <a href="https://www.linkedin.com/in/abhiram-b-s-502171208/" target="_blank"><i
                        class="bi bi-linkedin"></i></a>
                <a href="http://github.com/abhibs" target="_blank"><i class="bi bi-github"></i></a>
                <a href="https://twitter.com/AbhiBS5" target="_blank"><i class="bi bi-twitter"></i></a>
                <a href="https://in.pinterest.com/abhirambs97/" target="_blank"><i class="bi bi-pinterest"></i></a>
                <a href="https://whatsapp.com/channel/0029VaAnCcBC6ZvjFzMucd0Q" target="_blank"><i
                        class="bi bi-whatsapp"></i></a>

            </div>
        </div>
    </section><!-- End Top Bar -->

    <header id="header" class="header d-flex align-items-center">

        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1>Abhiram B S<span>.</span></h1>
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="#hero">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Certificate</a></li>
                    <li><a href="#project">Projects</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav><!-- .navbar -->

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header><!-- End Header -->
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">
        <div class="container position-relative">
            <div class="row gy-5" data-aos="fade-in">
                <div
                    class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                    <h2>{{ $profile->name }}</h2>
                    {!! $profile->content !!}
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="#about" class="btn-get-started">Get Started</a>
                        <a href="{{ $profile->url }}" class="glightbox btn-watch-video d-flex align-items-center"><i
                                class="bi bi-play-circle"></i><span>Watch Video</span></a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="{{ asset($profile->image) }}" class="img-fluid" alt="" data-aos="zoom-out"
                        data-aos-delay="100">
                </div>
            </div>
        </div>



        </div>
    </section>
    <!-- End Hero Section -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>About Us</h2>

                </div>

                <div class="row gy-4">
                    <div class="col-lg-6">
                        <h3>{{ $about->name }}</h3>
                        <img src="{{ asset($about->image) }}" class="img-fluid rounded-4 mb-4" alt="">
                        {!! $about->content !!}
                    </div>
                    <div class="col-lg-6">
                        <div class="content ps-0 ps-lg-5">


                            <div class="position-relative mt-4">
                                <img src="{{ asset($about->youtube) }}" class="img-fluid rounded-4" alt="">
                                <a href="{{ $about->url }}" class="glightbox play-btn"></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">
            <div class="container" data-aos="zoom-out">

                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        @foreach ($clients as $item)
                            <div class="swiper-slide"><img src="{{ asset($item->image) }}" class="img-fluid"
                                    alt=""></div>
                        @endforeach

                    </div>
                </div>

            </div>
        </section><!-- End Clients Section -->

        <!-- ======= Stats Counter Section ======= -->
        <section id="stats-counter" class="stats-counter">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4 align-items-center">

                    <div class="col-lg-6">
                        <img src="{{ asset('user/assets/img/stats-img.svg') }}" alt="" class="img-fluid">
                    </div>

                    <div class="col-lg-6">

                        <div class="stats-item d-flex align-items-center">
                            <span data-purecounter-start="0" data-purecounter-end="{{ $fact->happyclient }}"
                                data-purecounter-duration="10" class="purecounter"></span>
                            <p><strong>Happy Clients</strong></p>
                        </div><!-- End Stats Item -->

                        <div class="stats-item d-flex align-items-center">
                            <span data-purecounter-start="0" data-purecounter-end="{{ $fact->project }}"
                                data-purecounter-duration="10" class="purecounter"></span>
                            <p><strong>Projects</strong> </p>
                        </div><!-- End Stats Item -->

                        <div class="stats-item d-flex align-items-center">
                            <span data-purecounter-start="0" data-purecounter-end="{{ $fact->certificate }}"
                                data-purecounter-duration="10" class="purecounter"></span>
                            <p><strong>Certificate</strong></p>
                        </div><!-- End Stats Item -->

                    </div>

                </div>

            </div>
        </section><!-- End Stats Counter Section -->

        <!-- ======= Call To Action Section ======= -->
        <section id="call-to-action" class="call-to-action">
            <div class="container text-center" data-aos="zoom-out">
                <a href="{{ $youtube->url }}" class="glightbox play-btn"></a>

            </div>
        </section><!-- End Call To Action Section -->

        <!-- ======= Our Services Section ======= -->
        <section id="services" class="services sections-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Certificate</h2>

                </div>

                <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
                    @foreach ($certificates as $item)
                        <div class="col-lg-4 col-md-6">
                            <div class="service-item  position-relative">
                                <img src="{{ asset($item->image) }}" class="testimonial-img flex-shrink-0"
                                    alt="" width="350" height="350">
                                <h3>{{ $item->name }}</h3>

                            </div>
                        </div><!-- End Service Item -->
                    @endforeach




                </div>

            </div>
        </section><!-- End Our Services Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Reviews</h2>

                </div>

                <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        @foreach ($reviews as $item)
                            <div class="swiper-slide">
                                <div class="testimonial-wrap">
                                    <div class="testimonial-item">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset($item->image) }}"
                                                class="testimonial-img flex-shrink-0" alt="">
                                            <div>
                                                <h3>{{ $item->company }}</h3>
                                                <h4>{{ $item->ceo }}</h4>
                                                <div class="stars">

                                                    @for ($i = 0; $i < 5; $i++)
                                                        @if ($i < $item->rating)
                                                            <i class="bi bi-star-fill"></i>
                                                        @endif
                                                    @endfor
                                                </div>
                                            </div>
                                        </div>
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            {!! $item->content !!}
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div>
                            </div><!-- End testimonial item -->
                        @endforeach





                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->
        @php
            $projectdatas = App\Models\Project::where('status', 1)->get();
        @endphp

        <!-- ======= Portfolio Section ======= -->
        <section id="project" class="portfolio sections-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Personal Projects</h2>
                </div>
                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                    data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

                    <div class="row gy-4 portfolio-container">

                        @foreach ($projectdatas as $key => $item)
                            <div class="col-xl-4 col-md-6 portfolio-item filter-active">
                                <div class="portfolio-wrap">
                                    <a href="{{ asset($item->image) }}" data-gallery="portfolio-gallery-app"
                                        class="glightbox"><img src="{{ asset($item->image) }}" class="img-fluid"
                                            alt=""></a>
                                    <div class="portfolio-info">
                                        <h4><a href="{{ $item->url }}" target="_blank"
                                                title="More Details">{{ $item->name }}</a></h4>
                                    </div>
                                </div>
                            </div><!-- End Portfolio Item -->
                        @endforeach
                    </div><!-- End Portfolio Container -->
                </div>
            </div>
        </section><!-- End Portfolio Section -->


        <!-- ======= Our Team Section ======= -->
        <section id="team" class="team">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Our Team</h2>
                </div>

                <div class="row gy-4">
                    @foreach ($teamdatas as $item)
                        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                            <div class="member">
                                <img src="{{ asset($item->image) }}" class="img-fluid" alt="">
                                <h4>{{ $item->name }}</h4>
                                <span>{{ $item->designation }}</span>
                                <div class="social">

                                    @foreach ($item->socialmedia as $media)
                                        <a href="{{ $media->url }}" target="_blank"><i
                                                class="{{ $media->icon }}"></i></a>
                                    @endforeach
                                </div>
                            </div>
                        </div><!-- End Team Member -->
                    @endforeach




                </div>

            </div>
        </section><!-- End Our Team Section -->

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing sections-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Packages</h2>

                </div>

                <div class="row g-4 py-lg-5" data-aos="zoom-out" data-aos-delay="100">
                    @foreach ($packagedatas as $item)
                        <div class="col-lg-4">
                            <div class="pricing-item">
                                <h3>{{ $item->name }}</h3>
                                <div class="icon">
                                    <i class="{{ $item->icon }}"></i>
                                </div>
                                <h4><sup>Rs.</sup>{{ $item->amount }}</h4>
                                <ul>
                                    @foreach ($item->detail as $data)
                                        <li {!! $data->condition == 0 ? '<li class="na"' : '' !!}>{!! $data->condition == 1 ? '<i class="bi bi-check"></i>' : '<i class="bi bi-x"></i>' !!} {{ $data->description }}
                                        </li>
                                    @endforeach

                                </ul>
                                <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
                            </div>
                        </div><!-- End Pricing Item -->
                    @endforeach


                </div>

            </div>
        </section><!-- End Pricing Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4">

                    <div class="col-lg-4">
                        <div class="content px-xl-5">
                            <h3>Frequently Asked <strong>Questions</strong></h3>

                        </div>
                    </div>

                    <div class="col-lg-8">

                        <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up"
                            data-aos-delay="100">
                            @foreach ($faqdatas as $key => $item)
                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#faq-content-{{ $key }}">
                                            <span class="num">{{ $key + 1 }}.</span>
                                            {{ $item->question }}
                                        </button>
                                    </h3>
                                    <div id="faq-content-{{ $key }}" class="accordion-collapse collapse"
                                        data-bs-parent="#faqlist">
                                        <div class="accordion-body">
                                            {!! $item->answer !!}
                                        </div>
                                    </div>
                                </div><!-- # Faq item-->
                            @endforeach




                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End Frequently Asked Questions Section -->

        <!-- ======= Recent Blog Posts Section ======= -->
        <section id="recent-posts" class="recent-posts sections-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Project Posts</h2>

                </div>

                <div class="row gy-4">
                    @foreach ($randprojectdatas as $item)
                        <div class="col-xl-4 col-md-6">
                            <article>

                                <div class="post-img">
                                    <img src="{{ asset($item->image) }}" alt="" class="img-fluid">
                                </div>


                                <h2 class="title">
                                    <a href="blog-details.html">{{ $item->name }}</a>
                                </h2>

                                <div class="d-flex align-items-center">
                                    <img src="{{ !empty($admindata->image) ? url('storage/admin/' . $admindata->image) : url('no_image.jpg') }}"
                                        alt="" class="img-fluid post-author-img flex-shrink-0">
                                    <div class="post-meta">
                                        <p class="post-author">{{ $admindata->name }}</p>
                                        <p class="post-date">
                                            <time
                                                datetime="">{{ \Carbon\Carbon::parse($item->created_at)->format('d F Y') }}</time>
                                        </p>
                                    </div>
                                </div>

                            </article>
                        </div><!-- End post list item -->
                    @endforeach



                </div><!-- End recent posts list -->

            </div>
        </section><!-- End Recent Blog Posts Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Contact</h2>

                </div>

                <div class="row gx-lg-0 gy-4">

                    <div class="col-lg-4">

                        <div class="info-container d-flex flex-column align-items-center justify-content-center">
                            <div class="info-item d-flex">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h4>Location:</h4>
                                    <p>Javalli Tudoor Thirthahalli Shimoga Karnataka 577226</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h4>Email:</h4>
                                    <p>abhirambs97@gmail.com</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-phone flex-shrink-0"></i>
                                <div>
                                    <h4>Call:</h4>
                                    <p>+91 9481187122</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-clock flex-shrink-0"></i>
                                <div>
                                    <h4>Open Hours:</h4>
                                    <p>Mon-Sat: 9:30 AM - 6:30 PM</p>
                                </div>
                            </div><!-- End Info Item -->
                        </div>

                    </div>

                    <div class="col-lg-8">
                        <form action="{{ route('contact-store') }}" method="post" role="form"
                            style="width: 100%;height: 100%;background: #fff;box-shadow: 0px 2px 25px rgba(0, 0, 0, 0.1);padding: 30px;border-radius: 0 10px 10px 0;">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name">
                                    @error('name')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email">
                                    @error('email')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject">
                                @error('subject')
                                    <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="7" placeholder="Message"></textarea>
                                @error('message')
                                    <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>

                            <div class="text-center"><button type="submit"
                                    style="background: rgba(0, 131, 116, 0.8);border: 0;padding: 14px 45px;color: #fff;transition: 0.4s;border-radius: 50px;margin-top:5px;">Send
                                    Message</button></div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-info">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span>Impact</span>
                    </a>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita
                        valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
                    <div class="social-links d-flex mt-4">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Product Management</a></li>
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Contact Us</h4>
                    <p>
                        A108 Adam Street <br>
                        New York, NY 535022<br>
                        United States <br><br>
                        <strong>Phone:</strong> +1 5589 55488 55<br>
                        <strong>Email:</strong> info@example.com<br>
                    </p>

                </div>

            </div>
        </div>

        <div class="container mt-4">
            <div class="copyright">
                &copy; Copyright <strong><span>Impact</span></strong>. All Rights Reserved
            </div>
            <div class="credits">

                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>

    </footer><!-- End Footer -->
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('user/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('user/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('user/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('user/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('user/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('user/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('user/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('user/assets/js/main.js') }}"></script>

</body>

</html>
