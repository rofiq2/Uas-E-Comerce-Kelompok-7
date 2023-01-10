<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Ogani Template" />
    <meta name="keywords" content="Ogani, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Ogani | Template</title>

    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap"
      rel="stylesheet"
    />

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/elegant-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/nice-select.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery-ui.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/slicknav.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" type="text/css" />
  </head>

  <body>
    <!-- Page Preloder -->
    <div id="preloder">
      <div class="loader"></div>
    </div>

   

    <!-- Header Section Begin -->
   
      <div class="header__top">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6">
              <div class="header__top__left">
                <ul>
                  <li><i class="fa fa-envelope"></i> KelompokSeven@gmail.com</li>
                  <li>Jangan Lupo Belanjo Di Siko</li>
                </ul>
              </div>
            </div>

            <div class="col-lg-6 col-md-6">
                @guest
                  <div class="header__top__right">
                    <div
                      class="header__top__right__language header__top__right__auth"
                    >
                    
                    <div class="header__top__right__auth">
                      <a href="{{ URL::to('login') }}"><i class="fa fa-user"></i> Login</a>
                    </div>
                    <div class="header__top__right__auth">
                      <a href="{{ URL::to('register') }}"><i class="fa fa-user"></i> Register</a>
                    </div>
                </div>
                @else 
                <div class="header__top__right">
                <div
                  class="header__top__right__language header__top__right__auth"
                >
                  <a class="d-inline" href="#"
                    ><i class="fa fa-user"></i> </a
                  >
                  <span class="arrow_carrot-down"></span>
                  <ul>
                    <li><a href="{{ URL::to('admin') }}">Dashboard</a></li>
                  </ul>
                </div>
                <div class="header__top__right__auth">
                  <a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit()"><i class="fa fa-user"></i> Logout</a>
                  <form action="{{ URL::to('logout') }}" id="logout-form" method="post">
                    @csrf                   
                  </form>
                </div>
              </div>
                @endguest
            </div>
          </div>
        </div>
      </div>



      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <div class="header__logo">
            <a href="{{ URL::to('') }}"><img src="{{ asset('frontend/img/logo1.png') }}" alt="" /></a>
              
            </div>
          </div>
          <div class="col-lg-6">
            <nav class="header__menu" style="margin-left: -80px;">
              <ul>
                <li class="active"><a href="{{ URL::to('') }}">Home</a></li>

                <li><a href="{{ URL::to('produk') }}">Produk</a></li>
                
                <li><a href="{{ URL::to('kategori') }}">Kategori</a></li>

                <li><a href="{{ URL::to('kontak') }}">Contact</a></li>

                <li><a href="{{ URL::to('about') }}">About Me</a></li>
               
              </ul>
            </nav>
          </div>
          <div class="col-lg-3">
            <div class="header__cart">
              <ul>
               
                <li>
                  <a href="{{ route('cart.store') }}"

                    > <i class="fa fa-shopping-bag"></i>
                    </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="humberger__open">
          <i class="fa fa-bars"></i>
        </div>
      </div>
   
    <!-- Header Section End -->

   

  

    

    <script src="{{ asset('frontend/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('frontend/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>