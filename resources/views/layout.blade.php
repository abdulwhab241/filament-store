<!DOCTYPE html>
<html lang="ar" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>أوول نيو ورك @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="icon" href="/image/F32-32.png" type="image/png">
        <link rel="stylesheet" href="/vendors/bootstrap/bootstrapRTL.min.css">
        <link rel="stylesheet" href="/vendors/fontawesome/css/all.min.css">
       
        <link rel="stylesheet" href="/css/styleRTL.css">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

       
    </head>
    <body class="antialiased">
    <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand logo_h" ><img src="/image/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
              <li class="nav-item active"><a class="nav-link" href="{{ route('home.index') }}">الرئيسية</a></li>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">المتجر</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="#"> الالكترونيات ⌚</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{ route('electrics.index') }}">الكهربائيات ⚡</a></li>
                  <li class="nav-item"><a class="nav-link" href="#"> الادوات المنزلية 🏠</a></li>
                  <li class="nav-item"><a class="nav-link" href="#"> الطبية 🏥</a></li>
                  <li class="nav-item"><a class="nav-link" href="#"> الجديد🤩 </a></li>
                  <li class="nav-item"><a class="nav-link" href="#">Shopping Cart</a></li>
                </ul>
							</li>
              
						
              <li class="nav-item"><a class="nav-link" href="{{ route('home.call') }}">اتصل بنا</a></li>
            </ul>

            <ul class="nav-shop">
              <li class="nav-item"><button><i class="ti-search"></i></button></li>

              <li class="nav-item"><a class="button button-header btn-info" href="#">شراء الان</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
	<!--================ End Header Menu Area =================-->

  <main class="site-main">
    
    <!--================ Hero banner start =================-->
    <section class="hero-banner">
      <div class="container">
        <div class="row no-gutters align-items-center pt-60px">
          <div class="col-5 d-none d-sm-block">
            <div class="hero-banner__img">
              <img class="img-fluid" src="/image/hero-banner.png" alt="">
            </div>
          </div>
          <div class="col-sm-7 col-lg-6 offset-lg-1 pl-4 pl-md-5 pl-lg-0">
            <div class="hero-banner__content">
              <h1>تصفح منتجاتنا المميزة</h1>
              <p>
                اقوى عروض المنتجات والالكترونيات والكهربائيات والادوات المنزلية في اليمن. 
              </p>
            </div>
          </div>
        </div>

      
      </div>
    </section>

    <section id="show" style="display: flex; justify-content:center; background:#F1F6F7;" >
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/image/show/show1.jpeg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/image/show/show2.jpeg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/image/show/show3.jpeg" alt="Third slide">
    </div>
	 <div class="carousel-item">
      <img class="d-block w-100" src="/image/show/show4.jpeg" alt="Fourth slide">
    </div>
	 <div class="carousel-item">
      <img class="d-block w-100" src="/image/show/show5.jpeg" alt="Fifth slide">
    </div>
	 <div class="carousel-item">
      <img class="d-block w-100" src="/image/show/show6.jpeg" alt="Sixth slide">
    </div>
	 <div class="carousel-item">
      <img class="d-block w-100" src="/image/show/show7.jpeg" alt="Seventh slide">
    </div>
	 <div class="carousel-item">
      <img class="d-block w-100" src="/image/show/show8.jpeg" alt="Eighth slide">
    </div>
	 <div class="carousel-item">
      <img class="d-block w-100" src="/image/show/show9.jpeg" alt="Ninth slide">
    </div>
	 <div class="carousel-item">
      <img class="d-block w-100" src="/image/show/show10.jpeg" alt="Tenth slide">
    </div>
	 <div class="carousel-item">
      <img class="d-block w-100" src="/image/show/show11.jpeg" alt="Eleventh slide">
    </div>
	 <div class="carousel-item">
      <img class="d-block w-100" src="/image/show/show12.jpeg" alt="Twelfth slide">
    </div>
	 <div class="carousel-item">
      <img class="d-block w-100" src="/image/show/show13.jpeg" alt="Thirteenth slide">
    </div>
	 <div class="carousel-item">
      <img class="d-block w-100" src="/image/show/show14.jpeg" alt="Fourteenth slide">
    </div>
  </div>
</div>
</section>

<section id="brief" style="background:#F1F6F7; margin-top: 5px;">


<div class="container" style="margin-top: 10px;">
<div class="row">
    <div class="col-sm-12 col-md-6 col-lg-3" >

      <div class="card border-0" style="background:#F1F6F7; ">
        <div class="card-body border-0">
          <h5 class="card-title iconColor" style="text-align: center;"><img src="/image/brife/Save.png" class="rounded-circle img-thumbnail" alt="..."></h5>
          <h6 style="font-size: 12px; font-weight: bold; text-align: center;">طرق دفع أمنة</h6>
          <p class="mytext" style="font-size:12px; ;">
            دفع عند التسليم داخل صنعاء وعملائنا بالمحافضات الاخرى يتم الايداع عبر حساباتنا البنكية المعتمدة وقريبا سيتم اضافة الدفع عبر الفيزا والماستركار
          </p>
        </div>
      </div>   

    </div>
    <div class="col-sm-12 col-md-6 col-lg-3">
      
      <div class="card border-0"  style="background:#F1F6F7; ">
        <div class="card-body border-0">
          <h5 class="card-title iconColor" style="text-align: center;"><img src="/image/brife/Spicial.png" class="rounded-circle img-thumbnail" alt="..."></h5>
          <h6 style="font-size: 12px; font-weight: bold; text-align: center;">أقوى العروض في اليمن</h6>
          <p  style="font: size 12px;">
            ترقبوا اقوى العروض من متجر أوول نيو ورك بمناسبة انشاء الموقع
          </p>
        </div>
      </div>   

    </div>
    <div class="col-sm-12 col-md-6 col-lg-3">
      
      <div class="card border-0"  style="background:#F1F6F7; ">
        <div class="card-body border-0">
          <h5 class="card-title iconColor" style="text-align: center;"><img src="/image/brife/She1.png" class="rounded-circle img-thumbnail" alt="..."></h5>
          <h6 style="font-size: 12px; font-weight: bold; text-align: center;">شعارنا الجودة اولا</h6>
          <p class="mytext" style="font-size:12px;">
            نحرص دوما على توفير المنتجات ذات الجودة العالية 
          </p>
        </div>
      </div>   

    </div>
    <div class="col-sm-12 col-md-6 col-lg-3">
      
      <div class="card border-0"  style="background:#F1F6F7; ">
        <div class="card-body border-0">
            <h5 class="card-title iconColor"  style="text-align: center;"><img src="/image/brife/Arive.png" class="rounded-circle img-thumbnail" alt="..."></h5>
            <h6 style="font-size: 12px; font-weight: bold; text-align: center;">خدمة توصيل لجميع محافظات الجمهورية</h6>
            <p style="font-size:12px; ">
              يوجد خدمة توصيل داخل صنعاء وايضا توجد خدمة شحن لجميع محافظات الجمهورية وبرسوم رمزية للتفاصيل تواصل مع 775588402_736001100 
            </p>
        </div>
      </div>   

    </div>
  </div>
</div>





</section>


  </main>
  @yield('Page')


    

  <!-- footer
    ================================================== -->
    <footer style="background: #F1F6F7; margin-top: 5px;">


        <div class="container">
  <div class="row">
    <div class="col">
                  <h4 style="font-weight:bold ; text-align: right; margin-bottom: 20px; margin-top: 10px;" >أوول نيو ورك</h4>

              <p style="text-align: right;">
                اوول نيو ورك للتوريدات والخدمات التجاريه إحدى الموسسات الرائده في مجال المقاولات والتوريدات العامه والخدمات التجاريه. اوول نيو ورك للتوريدات والخدمات التجاريه وكيل معتمدد للعديد من الشركات العالمية والمحليه وتعتبر مزود وموزع معتمد للعديد من المنتجات المتنوعة ذات الجوده والكفاءه وبأسعار مناسبه التي ترضى جميع العملاء.
              </p>
              <ul >
                <li class="my-list" style="text-align: right;">
                  <p class="mb-2" ><i class="fa fa-envelope "></i>  Allnewtrading@gmail.com </p>
                  <p class="mb-2"><i class="fa fa-phone"></i>  +967 775588402 </p>
                  <p class="mb-2"><i class="fa fa-phone"></i>  +967 778080098 </p>
                  <p class="mb-2"><i class="fa fa-phone"></i>  +967 736001100 </p>
                </li>
              </ul>
    </div>
    <div class="col">
              <h4 style="font-weight:bold ; text-align: center; margin-bottom: 20px; margin-top: 10px;">تابعونا على</h4>

          <ul style="text-align: center; color:blue;">
              <li><a href="https://chat.whatsapp.com/JSxrfm1tirI7iBIYRC7wuX"> <i class="fab fa-whatsapp" aria-hidden="true"></i> WhatsApp</a></li>
              <li><a href="https://www.facebook.com/All-New-Work-For-Supplies-and-Commercial-Trading-110666238137692"> <i class="fab fa-facebook" aria-hidden="true"></i> Facebook</a></li>
            
          </ul>
    </div>
  </div>
  
  <div>
                    <h5 class="mytext" style=" font-weight: bold; text-align:center; margin-top:20px;"> تصميم وتطوير : </h5>
                    <h6 style="text-align:center; margin-top: 10px; font-size:larger;">م.عبدالوهاب محمد</h6>
                    <ul class=" mylist" style="text-align:center; margin-top:10px;">
                    <li>
                    <a class="mb-0" href="https://api.whatsapp.com/send/?phone=967770101198&text&type=phone_number&app_absent=0" style="color: blue; font-weight:bold ;"><i class="fab fa-whatsapp" aria-hidden="true"></i></a> 
                    </li>
                </ul>
          
            </div> 
  </div>

  </footer> <!-- end s-footer -->

  <script src="/vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="/vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="/vendors/skrollr.min.js"></script>
  <script src="/vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="/vendors/nice-select/jquery.nice-select.min.js"></script>
  <script src="/vendors/jquery.ajaxchimp.min.js"></script>
  <script src="/vendors/mail-script.js"></script>
  <script src="/js/main.js"></script>
    </body>
</html>
