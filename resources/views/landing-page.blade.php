<!DOCTYPE html>
<html lang="en">

<head>
  <title>Book Store</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="author" content="">
  <meta name="keywords" content="">
  <meta name="description" content="">

  <link rel="stylesheet" type="text/css" href="{{ asset('landing-page/css/normalize.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('landing-page/icomoon/icomoon.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('landing-page/css/vendor.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('landing-page/css/style.css') }}">

</head>

<body>

  <div id="header-wrap">

    <div class="top-content">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="social-links">
              <ul>
                <li>
                  <a href="#"><i class="icon icon-facebook"></i></a>
                </li>
                <li>
                  <a href="#"><i class="icon icon-twitter"></i></a>
                </li>
                <li>
                  <a href="#"><i class="icon icon-youtube-play"></i></a>
                </li>
                <li>
                  <a href="#"><i class="icon icon-behance-square"></i></a>
                </li>
              </ul>
            </div>
            <!--social-links-->
          </div>
          <div class="col-md-6">
            <div class="right-element">
              {{-- <a href="#" class="user-account for-buy"><i class="icon icon-user"></i><span>Account</span></a>
              <a href="#" class="cart for-buy"><i class="icon icon-clipboard"></i><span>Cart:(0$)</span></a> --}}
              <a href="{{ route('login') }}" class="btn user-account for-buy"><u>Sign in</u></a>

              <div class="action-menu">

                <div class="search-bar">
                  <a href="#" class="search-button search-toggle" data-selector="#header-wrap">
                    <i class="icon icon-search"></i>
                  </a>
                  <form role="search" method="get" class="search-box">
                    <input class="search-field text search-input" placeholder="Search" type="search">
                  </form>
                </div>
              </div>

            </div>
            <!--top-right-->
          </div>

        </div>
      </div>
    </div>
    <!--top-content-->

    <header id="header">
      <div class="container">
        <div class="row">

          <div class="col-md-2">
            <div class="main-logo">
              <a href="index.html"><img src="{{ asset('landing-page/images/main-logo.png') }}" alt="logo"></a>
            </div>

          </div>

          <div class="col-md-10">

            <nav id="navbar">
              <div class="main-menu stellarnav">
                <ul class="menu-list">
                  <li class="menu-item active"><a href="#home" data-effect="Home">Home</a></li>
                  <li class="menu-item"><a href="#about" class="nav-link" data-effect="About">About</a></li>
                  {{-- <li class="menu-item has-sub">
                    <a href="#pages" class="nav-link" data-effect="Pages">Pages</a>

                    <ul>
                      <li class="active"><a href="index.html">Home</a></li>
                      <li><a href="about.html">About</a></li>
                      <li><a href="styles.html">Styles</a></li>
                      <li><a href="blog.html">Blog</a></li>
                      <li><a href="single-post.html">Post Single</a></li>
                      <li><a href="shop.html">Our Store</a></li>
                      <li><a href="single-product.html">Product Single</a></li>
                      <li><a href="contact.html">Contact</a></li>
                      <li><a href="thank-you.html">Thank You</a></li>
                    </ul>

                  </li> --}}
                  <li class="menu-item"><a href="#popular-books" class="nav-link" data-effect="Shop">Shop</a></li>
                  {{-- <li class="menu-item"><a href="#latest-blog" class="nav-link" data-effect="Articles">Articles</a></li> --}}
                  <li class="menu-item"><a href="#contact" class="nav-link" data-effect="Contact">Contact</a></li>
                </ul>

                <div class="hamburger">
                  <span class="bar"></span>
                  <span class="bar"></span>
                  <span class="bar"></span>
                </div>

              </div>
            </nav>

          </div>

        </div>
      </div>
    </header>

  </div>
  <!--header-wrap-->

  <section id="billboard">

    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <button class="prev slick-arrow">
            <i class="icon icon-arrow-left"></i>
          </button>

          <div class="main-slider pattern-overlay">
            <div class="slider-item">
              <div class="banner-content">
                <h2 class="banner-title">Life of the Wild</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu feugiat amet, libero
                  ipsum enim pharetra hac. Urna commodo, lacus ut magna velit eleifend. Amet, quis
                  urna, a eu.</p>
                <div class="btn-wrap">
                  <a href="#" class="btn btn-outline-accent btn-accent-arrow">Read More<i
                      class="icon icon-ns-arrow-right"></i></a>
                </div>
              </div>
              <!--banner-content-->
              <img src="{{ asset('landing-page/images/main-banner1.jpg') }}" alt="banner" class="banner-image">
            </div>
            <!--slider-item-->

            <div class="slider-item">
              <div class="banner-content">
                <h2 class="banner-title">Birds gonna be Happy</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu feugiat amet, libero
                  ipsum enim pharetra hac. Urna commodo, lacus ut magna velit eleifend. Amet, quis
                  urna, a eu.</p>
                <div class="btn-wrap">
                  <a href="#" class="btn btn-outline-accent btn-accent-arrow">Read More<i
                      class="icon icon-ns-arrow-right"></i></a>
                </div>
              </div>
              <!--banner-content-->
              <img src="{{ asset('landing-page/images/main-banner2.jpg') }}" alt="banner" class="banner-image">
            </div>
            <!--slider-item-->

          </div>
          <!--slider-->

          <button class="next slick-arrow">
            <i class="icon icon-arrow-right"></i>
          </button>

        </div>
      </div>
    </div>

  </section>

  <section id="client-holder" data-aos="fade-up">
    <div class="container">
      <div class="row">
        <div class="inner-content">
          <div class="logo-wrap">
            <div class="grid">
              <a href="#"><img src="{{ asset('landing-page/images/client-image1.png') }}" alt="client"></a>
              <a href="#"><img src="{{ asset('landing-page/images/client-image2.png') }}" alt="client"></a>
              <a href="#"><img src="{{ asset('landing-page/images/client-image3.png') }}" alt="client"></a>
              <a href="#"><img src="{{ asset('landing-page/images/client-image4.png') }}" alt="client"></a>
              <a href="#"><img src="{{ asset('landing-page/images/client-image5.png') }}" alt="client"></a>
            </div>
          </div>
          <!--image-holder-->
        </div>
      </div>
    </div>
  </section>

  <section id="featured-books">
    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <div class="section-header align-center">
            <div class="title">
              <span>Some quality items</span>
            </div>
            <h2 class="section-title">Featured Books</h2>
          </div>

          <div class="product-list" data-aos="fade-up">
            <div class="row">

              <div class="col-md-3">
                <figure class="product-style">
                  <img src="{{ asset('landing-page/images/product-item1.jpg') }}" alt="Books" class="product-item">
                  {{-- <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                    Cart</button> --}}
                  <figcaption>
                    <h3>Simple way of piece life</h3>
                    <p>Armor Ramsey</p>
                    <div class="item-price">Rp.90.000</div>
                  </figcaption>
                </figure>
              </div>

              <div class="col-md-3">
                <figure class="product-style">
                  <img src="{{ asset('landing-page/images/product-item2.jpg') }}" alt="Books" class="product-item">
                  {{-- <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                    Cart</button> --}}
                  <figcaption>
                    <h3>Great travel at desert</h3>
                    <p>Sanchit Howdy</p>
                    <div class="item-price">Rp.120.000</div>
                  </figcaption>
                </figure>
              </div>

              <div class="col-md-3">
                <figure class="product-style">
                  <img src="{{ asset('landing-page/images/product-item3.jpg') }}" alt="Books" class="product-item">
                  {{-- <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                    Cart</button> --}}
                  <figcaption>
                    <h3>The lady beauty Scarlett</h3>
                    <p>Arthur Doyle</p>
                    <div class="item-price">Rp.200.000</div>
                  </figcaption>
                </figure>
              </div>

              <div class="col-md-3">
                <figure class="product-style">
                  <img src="{{ asset('landing-page/images/product-item4.jpg') }}" alt="Books" class="product-item">
                  {{-- <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                    Cart</button> --}}
                  <figcaption>
                    <h3>Once upon a time</h3>
                    <p>Klien Marry</p>
                    <div class="item-price">Rp.150.000</div>
                  </figcaption>
                </figure>
              </div>

            </div>
            <!--ft-books-slider-->
          </div>
          <!--grid-->


        </div>
        <!--inner-content-->
      </div>

      <div class="row">
        <div class="col-md-12">

          <div class="btn-wrap align-right">
            <a href="#" class="btn-accent-arrow">View all products <i class="icon icon-ns-arrow-right"></i></a>
          </div>

        </div>
      </div>
    </div>
  </section>

  <section id="quotation" class="align-center">
    <div class="inner-content">
      <h2 class="section-title divider">Quote of the day</h2>
      <blockquote data-aos="fade-up">
        <q>“The more that you read, the more things you will know. The more that you learn, the more places
          you’ll go.”</q>
        <div class="author-name">Dr. Seuss</div>
      </blockquote>
    </div>
  </section>

  <footer id="footer">
    <div class="container">
      <div class="row">

        <div class="col-md-4">

          <div class="footer-item">
            <div class="company-brand">
              <img src="{{ asset('landing-page/images/main-logo.png') }}" alt="logo" class="footer-logo">
            </div>
          </div>

        </div>

        <div class="col-md-2">

          <div class="footer-menu">
            <h5>About Us</h5>
            <ul class="menu-list">
              <li class="menu-item">
                <a href="#">vision</a>
              </li>
              <li class="menu-item">
                <a href="#">articles </a>
              </li>
              <li class="menu-item">
                <a href="#">careers</a>
              </li>
              <li class="menu-item">
                <a href="#">service terms</a>
              </li>
              <li class="menu-item">
                <a href="#">donate</a>
              </li>
            </ul>
          </div>

        </div>
        <div class="col-md-2">

          <div class="footer-menu">
            <h5>Discover</h5>
            <ul class="menu-list">
              <li class="menu-item">
                <a href="#">Home</a>
              </li>
              <li class="menu-item">
                <a href="#">Books</a>
              </li>
              <li class="menu-item">
                <a href="#">Authors</a>
              </li>
              <li class="menu-item">
                <a href="#">Subjects</a>
              </li>
              <li class="menu-item">
                <a href="#">Advanced Search</a>
              </li>
            </ul>
          </div>

        </div>
        <div class="col-md-2">

          <div class="footer-menu">
            <h5>My account</h5>
            <ul class="menu-list">
              <li class="menu-item">
                <a href="#">Sign In</a>
              </li>
              <li class="menu-item">
                <a href="#">View Cart</a>
              </li>
              <li class="menu-item">
                <a href="#">My Wishtlist</a>
              </li>
              <li class="menu-item">
                <a href="#">Track My Order</a>
              </li>
            </ul>
          </div>

        </div>
        <div class="col-md-2">

          <div class="footer-menu">
            <h5>Help</h5>
            <ul class="menu-list">
              <li class="menu-item">
                <a href="#">Help center</a>
              </li>
              <li class="menu-item">
                <a href="#">Report a problem</a>
              </li>
              <li class="menu-item">
                <a href="#">Suggesting edits</a>
              </li>
              <li class="menu-item">
                <a href="#">Contact us</a>
              </li>
            </ul>
          </div>

        </div>

      </div>
      <!-- / row -->

    </div>
  </footer>

  <div id="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <div class="copyright">
            <div class="row">

              <div class="col-md-6">
                <p>© 2023 All rights reserved.</p>
              </div>

              <div class="col-md-6">
                <div class="social-links align-right">
                  <ul>
                    <li>
                      <a href="#"><i class="icon icon-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon icon-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon icon-youtube-play"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon icon-behance-square"></i></a>
                    </li>
                  </ul>
                </div>
              </div>

            </div>
          </div>
          <!--grid-->

        </div>
        <!--footer-bottom-content-->
      </div>
    </div>
  </div>

  {{-- <script src="js/modernizr.js"></script> --}}
  <script src="{{ asset('landing-page/js/modernizr.js') }}"></script>

  {{-- <script src="js/jquery-1.11.0.min.js"></script> --}}
  <script src="{{ asset('landing-page/js/jquery-1.11.0.min.js') }}"></script>
  {{-- <script src="js/plugins.js"></script> --}}
  <script src="{{ asset('landing-page/js/plugins.js') }}"></script>
  {{-- <script src="js/script.js"></script> --}}
  <script src="{{ asset('landing-page/js/script.js') }}"></script>

</body>

</html>
