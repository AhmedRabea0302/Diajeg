<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Metas -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="LionCoders" />
    <!-- Links -->
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="icofont.min.css">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/slick.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet" />
    <!-- Document Title -->
    <title>Dijaeg Egypt</title>
</head>
<body>
  <!-- HEADER SECTION -->  
  <header id="home">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light " data-aos="fade-down">
        <!-- Change Logo Img Here -->
        <a class="navbar-brand" href="#"><img src="{{ asset('assets/images/logo.png') }}" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <div class="interactive-menu-button">
            <a href="#">
              <span>Menu</span>
            </a>
          </div>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <!-- Nav Link -->
              <a class="nav-link" data-scroll href="#home">{{ __('text.home') }}.<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <!-- Nav Link -->
              <a class="nav-link" data-scroll href="#about-us">{{ __('text.about_us') }}.</a>
            </li>
            <li class="nav-item">
              <!-- Nav Link -->
              <a class="nav-link" data-scroll href="#contact-us">{{ __('text.contact_us') }}.</a>
            </li>
            <li class="nav-item dropdown">
              <!-- Lang Dropdown Link -->
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">EN</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <!-- Lang Dropdown Choice -->
                <a class="dropdown-item ar" href="#">AR </a>
                <!-- Lang Dropdown Choice -->
                <a class="dropdown-item en" href="#">EN </a>
              </div>
            </li>
          </ul>
          <form data-scroll href="#contact-us" class="contact-btn form-inline my-2 my-lg-0">
            <!-- Contacgt Us Button -->
            <button>{{ __('text.contact_us') }}</button>
          </form>
        </div>
      </nav>
    </div>
    <!-- HERO SECTION -->    
    <div class="container-fluid hero">
      <img src="{{ asset('assets/images/c7.png') }}" alt="" data-aos="fade-left">
      <div class="container" data-aos="fade-right">
        <!-- Hero Title -->
        <h1>{!! App::getLocale() == 'en' ? $head->en_title :  $head->ar_title !!}</h1>
        <!-- Hero Title Info -->
        <p>{!! App::getLocale() == 'en' ? $head->en_par :  $head->ar_par !!}</p>
        {{-- <p>       
          Temperature detection thermal camera is best utilized as the first of a two-point <br> fever detection process.
           At the entrance to crowded areas, temperature detection thermal <br>camera is used to detect individuals whose facial skin temperature is higher than normal.<br> Fever is then confirmed using a medical thermometer. This two-point system enables<br> large groups of people to be screened quickly and accurately to effectively prevent <br> febrile individuals from entering areas where contagious diseases can spread easily.
        </p> --}}

        <div class="hero-btns">
          <!-- Hero Btn First -->
          <a data-scroll href="#about-us">{{ __('text.more_about_us') }}</a>
          <!-- Hero Btn Second -->
          <a data-scroll href="#contact-us">{{ __('text.get_in_touch') }}.</a>
        </div>
      </div>
    </div>
  </header>
  <!-- SERVICES SECTION -->  
  <section id="about-us" class="services">
    <div class="container-fluid">
      <div class="side-img"> 
        <img src="{{ asset('assets/images/aside.svg') }}" alt="" data-aos="fade-right">
      </div>
      <div class="side2-img"> 
        <img src="{{ asset('assets/images/aside2.svg') }}" alt="" data-aos="fade-left">
      </div>
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-12 col-lg-4 service-txt">
            <div data-aos="fade-right">
              <h2 data-aos="fade-right">{!! App::getLocale() == 'en' ? $principle->fr_par_en :  $principle->fr_par_ar !!}</h2>
              <div class="hero-btns service-btn">
                <a data-scroll href="#contact-us">{{ __('text.get_in_touch') }}</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-8">
            <div class="service-box">
              <img src="{{ asset('assets/images/service-icon1.svg') }}" data-aos="fade-left" alt="">
              <div data-aos="fade-left">
                <!-- Service Title -->
                <h3>{!! App::getLocale() == 'en' ? $principle->se_par_en :  $principle->se_par_ar !!}</h3>
                <!-- Replace Patch to Image Under -->
                <p>{!! App::getLocale() == 'en' ? $principle->body_en :  $principle->body_ar !!}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <br><br>
  <!-- ABOUT SECTION -->
  <section class="about">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12 col-lg-6" data-aos="fade-right">
          <img src="{{ asset('assets/images/infecto.png') }}" alt="">
        </div>
        <div class="col-12 col-sm-12 col-lg-6" data-aos="fade-left">
          <h5>{{ __('text.our_product') }}</h5>
          <h2>{!! App::getLocale() == 'en' ? $product->par_en :  $product->par_ar !!}</h2>
          <!-- Replace About Us Text Under -->
          <p>
            {!! App::getLocale() == 'en' ? $product->body_en :  $product->body_ar !!}
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- PORTFOLIO SECTION -->
  <section id="portfolio" class="portfolio">
    <div class="container-fluid">
      <div class="portfolio-aside">
        <img src="images/aside3.svg" alt="">
      </div>
      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="fade-right">
            <h2>{{ __('text.see_some_of_our') }}<br>{{ __('text.creative_work') }}.</h2>
          </div>
        </div>
        <div class="row">
          @foreach ($images as $image)
            <div class="col-12 col-lg-4 work-box" data-aos="fade-right">
              <div class="photobox photobox_type10">
                  <div class="photobox__previewbox">
                    <!-- Replace Patch to Image Under -->
                    <img src="{{ $image->image }}" class="image-view photobox__preview" alt="Preview">
                    <!-- Replace Image Title Under -->
                    
                  </div>
                </div>
            </div>
          @endforeach
         
        </div>

        <!-- Hidden Images From Portfolio -->
        <div id="hiden-gallery" class="hide">
          <div class="row">
            <div class="col-12 col-lg-4 work-box" data-aos="fade-left">
              <div class="photobox photobox_type10">
                  <div class="photobox__previewbox">
                    <!-- Replace Patch to Image Under -->
                    <img src="{{ asset('assets/images/product/p7.jpeg') }}" class="image-view photobox__preview" alt="Preview">
                    <!-- Replace Image Title Under -->
                    
                  </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 work-box" data-aos="fade-left">
              <div class="photobox photobox_type10">
                  <div class="photobox__previewbox">
                    <!-- Replace Patch to Image Under -->
                    <img src="{{ asset('assets/images/product/p8.jpeg') }}" class="image-view photobox__preview" alt="Preview">
                    <!-- Replace Image Title Under -->
                    
                  </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 work-box" data-aos="fade-right">
              <div class="photobox photobox_type10">
                  <div class="photobox__previewbox">
                    <!-- Replace Patch to Image Under -->
                    <img src="{{ asset('assets/images/product/p9.jpeg') }}" class="image-view photobox__preview" alt="Preview">
                    <!-- Replace Image Title Under -->
                    
                  </div>
                </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 more-btn">
            <!-- Show Me More/Less Button -->
            <a class="more-btn-inside">{{ __('text.show_more') }}.</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- BLOG SECTION -->
  <section id="blog" class="blog" data-aos="fade-right">
    <div class="container-fluid">
      <div class="blog-aside">
        <img src="{{ asset('assets/images/aside4.svg') }}" alt="">
      </div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h5>{{ __('text.advantages') }}</h5>
            <h2>Check Our Advantages</h2>
            <!-- <h5>
              In general, the thermal imaging infrared camera has a larger sensor size, longer measuring distance, wider area, higher sampling, and stronger flexibility.
            </h5> -->
          </div>
        </div>

        <div id="blog-drag" class="row blog-slider">
          @if ($advs)
            @foreach ($advs as $adv)
            <div class="col-12 col-lg-4 blog-box blog-first">
              <!-- Blog Post Title -->
              <h4>{!! App::getLocale() == 'en' ? $adv->par_en :  $adv->par_ar !!}</h4>
              <!-- Blog Post -->
              <p></p>
              <p>{!! App::getLocale() == 'en' ? $adv->body_en :  $adv->body_ar !!}</p>
            </div>
            @endforeach            
          @endif
        </div>

        <div id="blog-drag" class="row blog-slider">
          <div class="col-12 col-lg-4 blog-box blog-first">
            <!-- Blog Post Title -->
            <h4>HIGHER ACCURACY</h4>
            <!-- Blog Post -->
            <p></p>
            <p>IT IS MORE accurate than the general temperature measuring equipment, and uses a thermal imaging detector which is 4 times larger than general products.</p>
          </div>
          <div class="col-12 col-lg-4 blog-box">
            <!-- Blog Post Title -->
            <h4>LONGER DISTANCE</h4>
            <!-- Blog Post Date -->
            <p></p>
            <!-- Blog Post -->
            <p>THERMAL imaging infrared camera has much longer distance than others, the measuring distance reaches 3-9 meters, which is 3 times that of general products.</p>

          </div>
          <div class="col-12 col-lg-4 blog-box">
            <!-- Blog Post Title -->
            <h4>MORE INTELLIGENT</h4>
            <!-- Blog Post Date -->
            <p></p>
            <!-- Blog Post -->
            <p>THERMAL imaging infrared camera is more intelligent on temperature adjustment, can adjust temperature automatically.</p>
          </div>
          <!-- Blog Section to be showed on Drag  -->
          <div class="col-12 col-lg-4 blog-box hiden-blog hide-blog">
            <!-- Blog Post Title -->
            <h4>LARGER AREA</h4>
            <!-- Blog Post Date -->
            <p></p>
            <!-- Blog Post -->
            <p>ITS MEASURING area is 4 times larger than others and simpler to identify. Group identification and multi-person identification are more suitable for application scenarios with high collection and distribution requirements.</p>
          </div>
          <div class="col-12 col-lg-4 blog-box hiden-blog  hide-blog">
            <!-- Blog Post Title -->
            <h4>MUCH SAFER</h4>
            <!-- Blog Post Date -->
            <p></p>
            <!-- Blog Post -->
            <p>THERMAL imaging infrared camera is much safer, support storage, playback, and alarm query to trace back facts.</p>
          </div>
          <div class="col-12 col-lg-4 blog-box hiden-blog  hide-blog">
            <!-- Blog Post Title -->
            <h4>MORE EFFECTIENT</h4>
            <!-- Blog Post Date -->
            <p></p>
            <!-- Blog Post -->
            <p>THERMAL imaging infrared camera is more efficient with 50HZ sampling frequency which is 5 times that of general product. The person has no need to wait and pass quickly.</p>
          </div>
          <div class="col-12 col-lg-4 blog-box hiden-blog  hide-blog">
            <!-- Blog Post Title -->
            <h4>MORE FLEXIBILITY</h4>
            <!-- Blog Post Date -->
            <p></p>
            <!-- Blog Post -->
            <p>THERMAL imaging infrared camera has strong flexibility, support customized development, central management, cloud management, over-temperature alarm, cloud capture, etc.</p>
          </div>
        </div>
        <!-- Blog Button to Show More or Less on Mobile&Tablet View  -->
        <button class="hide-me" id="blog-btn">Show More Stories</button>
      </div>
    </div>
  </section>  
  <!-- CONTACT SECTION -->
  <section id="contact-us" class="contact">
    <form action="{{ route('send-message') }}" type="post">

      <div class="container">
        
        <div class="row">
          <div class="col-12" data-aos="fade-right">
            <h5>{{ __('text.CONTACT_US') }}</h5>
            <h2>{{ __('text.get_in_touch') }}</h2>
          </div>
        </div>
        
        @if(Session::has('sent'))
          <div class="alert alert-success">
            <p style="margin-bottom: 0; color: #314584">Your Message Sent successfully!</p>
          </div>
        @endif


        <div class="row" data-aos="fade-left">
          <div class="col-12 col-lg-6 email">
            <input placeholder="Your email" name="email" type="email" id="email" required size="30" required>
          </div>
          <div class="col-12 col-lg-6 email">
            <input placeholder="Subject" type="subject" name="subject" id="subject" size="30" required>
          </div>
        </div>
        <div class="row" data-aos="fade-down">
          <div class="col-12 message">
            <textarea id="message" name="message" name="message" rows="5" cols="1" required>Message here...</textarea>
          </div>
          <div class="col-12">
            <div class="hero-btns contact-btn">
              <!-- Send Message Btn -->
              <button >Send Message</button>
            </div>
          </div>
        </div>
      </div>

    </form>
  </section>

  <!-- COTACTS SECTION -->
  <section class="contacta">
    <div class="container">
      <div class="row">
        <div class="col-md-5" data-aos="fade-right">
          <div class="cont-info">
            <h3>{{ __('text.location') }}</h3>
            <p>Egypt, Cairo, Hadayk Elahram, Oula, Giza District</p>
            <br>
            <h3>{{ __('text.CONTACT_US') }}</h3>
            <ul class="list-unstyled">
              <li>{{ __('text.phone_numbers') }}: </li>
              <li>‫‪01124112244‬‬</li>
              <li>‫‪01022000400‬‬</li>
              <li>‫‪01145339933‬‬</li>

              <li>E-Mail: ‫‪info@dijaeg.com‬‬</li>
            </ul>
          </div>
        </div>
        <div class="col-md-7" data-aos="fade-left">
          <div class="mapouter">
            <div class="col-md-10">
              <div class="gmap_canvas" width="100%">
                <iframe width="100%" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=%D9%85%D8%B5%D8%B1,%20%D8%A7%D9%84%D9%82%D8%A7%D9%87%D8%B1%D8%A9,%20%D8%AD%D8%AF%D8%A7%D9%8A%D9%82%20%D8%A7%D9%84%D8%A7%D9%87%D8%B1%D8%A7%D9%85,%20%D8%B4%D8%A7%D8%B1%D8%B9%205%D8%A3,%20&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://embedgooglemap.net/maps/76"></a><br><style>.mapouter{position:relative;text-align:right;height:320px;width:100%;}</style><a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:320px;width:100%;}</style></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER SECTION -->
  <footer>
    <div class="container" data-aos="fade-down">
      <div class="row">
        <div class="col-12">
          <h5>DIJA</h5>
          <h3>CREATIVITY ABOVE</h3>
          <ul class="contact-nav">
            <li><a data-scroll href="#home">{{ __('text.home') }}.</a></li>
            <li><a data-scroll href="#about-us">{{ __('text.about_us') }}.</a></li>
            <li><a data-scroll href="#contact-us">{{ __('text.contact_us') }}.</a></li>
          </ul>
          <h6>{{ __('text.all_rights') }}</h6>
          <ul class="social">
            <li><a href="#"><i class="icofont-facebook"></i></a></li>
            <li><a href="#"><i class="icofont-twitter"></i></a></li>
            <li><a href="#"><i class="icofont-dribbble"></i></a></li>
          </ul>
        </div>
      </div>
    </div>

  </footer>

  <!-- The Modal -->
  <div id="myModal" class="modal">

    <!-- The Close Button -->
    <span class="close">&times;</span>

    <!-- Modal Content (The Image) -->
    <img class="modal-content" id="img01">

    <!-- Modal Caption (Image Text) -->
    <div id="caption"></div>
  </div>

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/slick.min.js') }}"></script>
  <script src="{{ asset('assets/js/smooth-scroll.min.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
  
  
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      offset: 300, 
      duration: 1000,
    });
  </script>

  <!-- Image Modal -->
  <script>
    let modal = document.getElementById("myModal");

    let images = Array.from(document.querySelectorAll('.image-view'));
    let modalImg = document.getElementById("img01");

    images.forEach(img => {
      img.addEventListener('click', function(event) {
          modal.style.display = "block";
          console.log('IM', event.target);
          modalImg.src = this.src;        
      });
    });

    let closespana = document.querySelector('span.close');
    closespana.addEventListener('click', function(e) {
      modal.style.display = "none";
    }); 

  </script>
  <!-- Scripts Ends -->
</body>
</html>