     <!-- Fonts -->
     <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


     <link rel="stylesheet" href="{{ url('assets/css/style.min.css')}}">
     <style>/* ===== Buttons Css ===== */
        .slider-one .bd-example .carousel .carousel-inner .carousel-item .carousel-caption .carousel-btn li .primary-btn {
          background: var(--primary);
          color: var(--white);
          box-shadow: var(--shadow-2);
        }
        .slider-one .bd-example .carousel .carousel-inner .carousel-item .carousel-caption .carousel-btn li .active.primary-btn, .slider-one .bd-example .carousel .carousel-inner .carousel-item .carousel-caption .carousel-btn li .primary-btn:hover, .slider-one .bd-example .carousel .carousel-inner .carousel-item .carousel-caption .carousel-btn li .primary-btn:focus {
          background: var(--primary-dark);
          color: var(--white);
          box-shadow: var(--shadow-4);
        }
        .slider-one .bd-example .carousel .carousel-inner .carousel-item .carousel-caption .carousel-btn li .deactive.primary-btn {
          background: var(--gray-4);
          color: var(--dark-3);
          pointer-events: none;
        }

        .slider-one .bd-example .carousel .carousel-inner .carousel-item .carousel-caption .carousel-btn li .primary-btn-outline {
          border-color: var(--primary);
          color: var(--primary);
        }
        .slider-one .bd-example .carousel .carousel-inner .carousel-item .carousel-caption .carousel-btn li .active.primary-btn-outline, .slider-one .bd-example .carousel .carousel-inner .carousel-item .carousel-caption .carousel-btn li .primary-btn-outline:hover, .slider-one .bd-example .carousel .carousel-inner .carousel-item .carousel-caption .carousel-btn li .primary-btn-outline:focus {
          background: var(--primary-dark);
          color: var(--white);
        }
        .slider-one .bd-example .carousel .carousel-inner .carousel-item .carousel-caption .carousel-btn li .deactive.primary-btn-outline {
          color: var(--dark-3);
          border-color: var(--gray-4);
          pointer-events: none;
        }

        /*===== SLIDER ONE =====*/
        .slider-one .bd-example .carousel .carousel-inner {
          background-color: var(--primary);
        }
        .slider-one .bd-example .carousel .carousel-inner .carousel-item {
          height: auto;
          padding: 300px 0;
          position: relative;
        }
        @media only screen and (min-width: 768px) and (max-width: 991px) {
          .slider-one .bd-example .carousel .carousel-inner .carousel-item {
            padding: 200px 0;
          }
        }
        @media (max-width: 767px) {
          .slider-one .bd-example .carousel .carousel-inner .carousel-item {
            padding: 150px 0;
          }
        }
        .slider-one .bd-example .carousel .carousel-inner .carousel-item::before {
          position: absolute;
          content: "";
          left: 0;
          top: 0;
          height: 100%;
          width: 100%;
          background-color: var(--primary);
          opacity: 0.8;
        }
        @media (max-width: 767px) {
          .slider-one .bd-example .carousel .carousel-inner .carousel-item {
            height: 400px;
          }
        }
        .slider-one .bd-example .carousel .carousel-inner .carousel-item .carousel-caption {
          top: 50%;
          bottom: auto;
          -webkit-transform: translateY(-50%);
          -moz-transform: translateY(-50%);
          -ms-transform: translateY(-50%);
          -o-transform: translateY(-50%);
          transform: translateY(-50%);
          width: 100%;
          left: 0;
        }
        .slider-one .bd-example .carousel .carousel-inner .carousel-item .carousel-caption .carousel-title {
          font-size: 44px;
          font-weight: 700;
          color: var(--white);
          line-height: 55px;
        }
        @media only screen and (min-width: 768px) and (max-width: 991px) {
          .slider-one .bd-example .carousel .carousel-inner .carousel-item .carousel-caption .carousel-title {
            font-size: 35px;
            line-height: 42px;
          }
        }
        @media (max-width: 767px) {
          .slider-one .bd-example .carousel .carousel-inner .carousel-item .carousel-caption .carousel-title {
            font-size: 24px;
            line-height: 32px;
          }
        }
        .slider-one .bd-example .carousel .carousel-inner .carousel-item .carousel-caption .text {
          color: var(--white);
          display: block;
          margin: 20px 0;
        }
        .slider-one .bd-example .carousel .carousel-inner .carousel-item .carousel-caption .carousel-btn li {
          display: inline-block;
          margin: 16px 8px 0;
        }
        @media (max-width: 767px) {
          .slider-one .bd-example .carousel .carousel-inner .carousel-item .carousel-caption .carousel-btn li {
            margin: 16px 3px 0;
          }
        }
        .slider-one .bd-example .carousel .carousel-inner .carousel-item .carousel-caption .carousel-btn li .primary-btn {
          background-color: var(--white);
          color: var(--primary);
          border: 1px solid transparent;
        }
        .slider-one .bd-example .carousel .carousel-inner .carousel-item .carousel-caption .carousel-btn li .primary-btn:hover {
          background-color: transparent;
          border-color: var(--white);
          color: var(--white);
        }
        .slider-one .bd-example .carousel .carousel-inner .carousel-item .carousel-caption .carousel-btn li .primary-btn-outline {
          border-color: var(--white);
          color: var(--white);
        }
        .slider-one .bd-example .carousel .carousel-inner .carousel-item .carousel-caption .carousel-btn li .primary-btn-outline:hover {
          border-color: transparent;
          background-color: var(--white);
          color: var(--primary);
        }
        .slider-one .bd-example .carousel .carousel-control-prev, .slider-one .bd-example .carousel .carousel-control-next {
          top: 50%;
          width: 55px;
          height: 55px;
          line-height: 55px;
          text-align: center;
          border: 1px solid var(--white);
          font-size: 20px;
          color: var(--white);
          -webkit-transform: translateY(-50%);
          -moz-transform: translateY(-50%);
          -ms-transform: translateY(-50%);
          -o-transform: translateY(-50%);
          transform: translateY(-50%);
          bottom: auto;
          left: 30px;
          opacity: 1;
          z-index: 99;
          border-radius: 50%;
          -webkit-transition: all 0.4s ease-out 0s;
          -moz-transition: all 0.4s ease-out 0s;
          -ms-transition: all 0.4s ease-out 0s;
          -o-transition: all 0.4s ease-out 0s;
          transition: all 0.4s ease-out 0s;
        }
        .slider-one .bd-example .carousel .carousel-control-prev:hover, .slider-one .bd-example .carousel .carousel-control-next:hover {
          background-color: var(--white);
          color: var(--primary);
          border-color: transparent;
        }
        @media only screen and (min-width: 992px) and (max-width: 1199px) {
          .slider-one .bd-example .carousel .carousel-control-prev, .slider-one .bd-example .carousel .carousel-control-next {
            left: 30px;
          }
        }
        @media only screen and (min-width: 768px) and (max-width: 991px) {
          .slider-one .bd-example .carousel .carousel-control-prev, .slider-one .bd-example .carousel .carousel-control-next {
            left: 30px;
            width: 50px;
            height: 50px;
            line-height: 50px;
          }
        }
        @media (max-width: 767px) {
          .slider-one .bd-example .carousel .carousel-control-prev, .slider-one .bd-example .carousel .carousel-control-next {
            left: 20px;
            width: 40px;
            height: 40px;
            line-height: 40px;
          }
        }
        .slider-one .bd-example .carousel .carousel-control-next {
          right: 30px;
          left: auto;
        }
        @media only screen and (min-width: 992px) and (max-width: 1199px) {
          .slider-one .bd-example .carousel .carousel-control-next {
            right: 40px;
          }
        }
        @media only screen and (min-width: 768px) and (max-width: 991px) {
          .slider-one .bd-example .carousel .carousel-control-next {
            right: 40px;
          }
        }
        @media (max-width: 767px) {
          .slider-one .bd-example .carousel .carousel-control-next {
            right: 20px;
          }
        }
        .slider-one .bd-example .carousel .carousel-indicators {
          margin-bottom: 50px;
        }
        @media only screen and (min-width: 768px) and (max-width: 991px) {
          .slider-one .bd-example .carousel .carousel-indicators {
            margin-bottom: 40px;
          }
        }
        @media (max-width: 767px) {
          .slider-one .bd-example .carousel .carousel-indicators {
            margin-bottom: 30px;
          }
        }
        .slider-one .bd-example .carousel .carousel-indicators li {
          width: 10px;
          height: 10px;
          background-color: var(--white);
          border-radius: 50px;
          border: 0;
          margin: 0px 5px;
          -webkit-transition: all 0.4s ease-out 0s;
          -moz-transition: all 0.4s ease-out 0s;
          -ms-transition: all 0.4s ease-out 0s;
          -o-transition: all 0.4s ease-out 0s;
          transition: all 0.4s ease-out 0s;
        }
        .slider-one .bd-example .carousel .carousel-indicators li.active {
          width: 20px;
          background-color: var(--white);
          border-radius: 5px;
        }
        .slider-one .bd-example .carousel .carousel-indicators li:hover {
          opacity: 1;
        }</style>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

     <!-- Styles -->
     {{-- <style>
         /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
     </style>

     <style>
         body {
             font-family: 'Nunito', sans-serif;
         }
     </style> --}}
 </head>

 <body class="antialiased" id="body" data-spy="scroll" data-target=".navbar" data-offset="100">


     {{-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
         @if (Route::has('login'))
             <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                 @auth
                     <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                 @else
                 <a href="{{ url('/login') }}" class="btn btn-opacity-light mr-1">Get started</a>

                     @if (Route::has('register'))
                         <a href="{{ route('register') }}"class="btn btn-opacity-success ml-1">Learn more</a>
                     @endif
                 @endauth
             </div>
         @endif
     </div> --}}

     <header id="header-section">
         <nav class="navbar navbar-expand-lg pl-3 pl-sm-0" id="navbar">
         <div class="container" style="back-ground:white;">
           <div class="navbar-brand-wrapper d-flex w-100">
             <img src="{{ url('assets/images/logo2.png')}}" alt="" style="width: 22%; height: auto;">
             <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="mdi mdi-menu navbar-toggler-icon"></span>
             </button>
           </div>
           <div class="collapse navbar-collapse navbar-menu-wrapper" id="navbarSupportedContent">
             <ul class="navbar-nav align-items-lg-center align-items-start ml-auto">
               <li class="d-flex align-items-center justify-content-between pl-4 pl-lg-0">

                 <div class="navbar-collapse-logo">
                     <svg class="icono" width="60" height="60">
                         <use href="{{ url('assets/images/logo.png')}}"></use>
                     </svg>
                 </div>



                 <button class="navbar-toggler close-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="mdi mdi-close navbar-toggler-icon pl-5"></span>
                 </button>
               </li>
               <li class="nav-item btn-contact-us pl-4 pl-lg-0">


                 <a href="{{ url('/admin/login') }}"  class="btn btn-info" data-toggle="modal" data-target="#exampleModal" style="background-color:#44749d; border-color:#44749d; color:white;"><strong>Administrador</strong></a>
                 <a href="{{ url('/login') }}" class="btn btn-info" style="background-color:#44749d; border-color:#44749d; color:white;"><b>Iniciar Sesión</b></a>
                 <a href="{{ route('register') }}" class="btn btn-info" style="background-color:#44749d; border-color:#44749d; color:white;"><b>Registrarme</b></a>
                </li>
             </ul>
           </div>
         </div>
         </nav>
       </header>


       <!--====== SLIDER ONE PART START ======-->
<section class="slider-area slider-one">
    <div class="bd-example">
       <div id="carouselOne" class="carousel slide" data-bs-ride="carousel">
          <ol class="carousel-indicators">
             <li
                data-bs-target="#carouselOne"
                data-bs-slide-to="0"
                class="active"
                ></li>
             <li data-bs-target="#carouselOne" data-bs-slide-to="1"></li>
             <li data-bs-target="#carouselOne" data-bs-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
             <div
                class="carousel-item bg_cover active"
                style="
                background-image: url(assets/images/fisica-4.png);
                background-size: 100%;
                background-position: center center;
                "
                >
                <div class="carousel-caption">
                   <div class="container">
                      <div class="row justify-content-center">
                         <div class="col-xl-6 col-lg-7 col-sm-10">
                            <h2 class="carousel-title">
                                Bienvenido tu plataforma de Física</h2>
                            {{-- <p class="text">
                                El curso de Introducción a la Industria Automotriz tiene como objetivo brindar una visión general del sector automotriz, abordando los temas de terminología y clasificación de la industria.
                            </p> --}}

                         </div>
                      </div>
                      <!-- row -->
                   </div>
                   <!-- container -->
                </div>
                <!-- carousel caption -->
             </div>
             <!-- carousel-item -->
             <div
                class="carousel-item bg_cover"
                style="
                background-image: url(assets/images/fisica-3.png);
                background-size: 100%;
                background-position: center center;


                "
                >
                <div class="carousel-caption">
                   <div class="container">
                      <div class="row justify-content-center">
                         <div class="col-xl-6 col-lg-7 col-sm-10">
                            <h2 class="carousel-title">Physics - Hub</h2>
                            <p class="text">
                              Física es una de las ciencias más importantes, comienza a estudiarla con nosotros y enamorate de la ciencia.
                            </p>

                         </div>
                      </div>
                      <!-- row -->
                   </div>
                   <!-- container -->
                </div>
                <!-- carousel caption -->
             </div>
             <!-- carousel-item -->
             <div
                class="carousel-item bg_cover"
                style="
                background-image: url(assets/images/fisica-2.png);
                "
                >
                <div class="carousel-caption">
                   <div class="container">
                      <div class="row justify-content-center">
                         <div class="col-xl-6 col-lg-7 col-sm-10">
                            <h2 class="carousel-title">
                               Aprende</h2>
                            <p class="text">
                                Estudia física con nostros y aprovecha las diferentes herramientas que tenemos para ti
                            </p>
                            <ul class="carousel-btn rounded-buttons">
                               <li>
                                <a href="{{ url('/login') }}" class="btn btn-opacity-light mr-1" style="background-color:#ffb350; border-color:#ffb350; color:white;"><b>Iniciar Sesión</b></a>
                               </li>
                               <li>
                                <a  href="{{ route('register') }}"class="btn btn-opacity-success ml-1" style="background-color:#ffb350; border-color:#ffb350; color:white;"><b>Registrarme</b></a>
                               </li>
                            </ul>
                            
                         </div>
                      </div>
                      <!-- row -->
                   </div>
                   <!-- container -->
                </div>
                <!-- carousel caption -->
             </div>
             <!-- carousel-item -->
          </div>
          <!-- carousel-inner -->
          <a
             class="carousel-control-prev"
             href="#carouselOne"
             role="button"
             data-bs-slide="prev"
             >
          <i class="lni lni-chevron-left"></i>
          </a>
          <a
             class="carousel-control-next"
             href="#carouselOne"
             role="button"
             data-bs-slide="next"
             >
          <i class="lni lni-chevron-right"></i>
          </a>
       </div>
       <!-- carousel -->
    </div>
    <!-- bd-example -->
 </section>
 <!--====== SLIDER ONE PART ENDS ======-->

        <br><br>
       <div class="banner" >
         <div class="container">
           {{-- <div>
                   <a href="{{ url('/login') }}" class="btn btn-opacity-light mr-1"><b>Iniciar Sesión</b></a>
                   <a href="{{ route('register') }}"class="btn btn-opacity-success ml-1"><b>Registrarme</b></a>

           </div> --}}
           <img src="{{ url('assets/images/automotriz.png')}}" alt="" class="img-fluid">
         </div>
       </div><br><br>


       {{-- <div class="d-flex justify-content-center">
         <h3 class="font-weight-semibold h1">Curso diseñado e impartido por:</h3><br><br><br><br>
       </div>

       <div class="d-flex justify-content-center">


         <address class="d-flex align-items-center mb-6 mx-auto">
           <div class="d-inline-flex align-items-center mr-3 text-sm text-gray-900">
             <img class="mr-4 rounded-circle" src="/assets/images/guendu.jpg" alt="Max Orozco" width="150" height="150">
             <div>
                 <h5 class="font-weight-semibold h3">Director de Programa Educativo <br> Ingeniería en Tecnología Automotriz</h5><br>

               <a href="https://www.upq.mx/oferta-academica/ingenieria-en-tecnologia-automotriz/" rel="author" class="h4 text-gray-900">Dr. Juan Manuel García Guendulain‎ ‎ ‎ ‎ ‎ ‎  </a><br><br>
               <p class="text-base font-weight-light text-gray-500">
                <img src="{{ url('assets/images/mail.svg')}}" alt="" style="width: 5%; height: auto;">
                manuel.garcia@upq.edu.mx</p>
                <img src="{{ url('assets/images/tel.svg')}}" alt="" style="width: 5%; height: auto;">
                101-9000 Ext. 340</p>

             </div>
             <img class="mr-4 rounded-circle" src="/assets/images/aut.png" alt="Max Orozco" width="150" height="150">

           </div>
         </address>
       </div>
       <br><br><br>
       <div class="d-flex justify-content-center">
         <h3 class="font-weight-semibold h1">Diseño y desarrollo de la plataforma</h3><br><br><br><br>
       </div>
       <div class="d-flex justify-content-center">
         <address class="d-flex align-items-center mb-6 mx-auto">
           <div class="d-inline-flex align-items-center mr-3 text-sm text-gray-900">
             <img class="mr-4 rounded-circle" src="/assets/images/peredo.png" alt="Max Orozco" width="150" height="150">
             <div>
                 <h5 class="font-weight-semibold h3">Director de Programa Educativo <br> Ingeniería en Sistemas Computacionales</h5><br>

               <a href="https://www.upq.mx/oferta-academica/ingenieria-en-tecnologia-automotriz/" rel="author" class="h4 text-gray-900">Dr. Iván Peredo Valderrama</a><br><br>
               <p>
                 <img src="{{ url('assets/images/mail.svg')}}" alt="" style="width: 5%; height: auto;">
                 ivan.peredo@upq.edu.mx
                </p>
                <img src="{{ url('assets/images/tel.svg')}}" alt="" style="width: 5%; height: auto;">
                101-9000 ext 407</p>
               </p>
             </div>
             <img class="mr-4 " src="/assets/images/sistemas.png" alt="Max Orozco" width="150" height="150">

           </div>
         </address> --}}


       {{-- </div> --}}







       {{-- <div class="d-flex justify-content-center">

       <address class="d-flex align-items-center mb-6 mx-auto">
         <div class="d-inline-flex align-items-center mr-3 text-sm text-gray-                                                                                                                                                                          900">
           <img class="mr-4 rounded-circle" src="/assets/images/dario.jpeg" alt="Max Orozco" width="100" height="100">
           <div>
               <h5 class="font-weight-semibold"><br><br><br> Desarrollo de la plataforma</h5>

             <a href="" rel="author" class="text-xl font-weight-bold text-gray-900">Luis Dario Quintero Oceguera</a><br>
             <p class="text-base font-weight-light text-gray-500">Estudiante de Ingeniería <br> en Sistemas Computacionales</p>
                <a href="https://github.com/Dar10QO">
                    <!-- Aquí va el contenido de tu archivo SVG -->
                    <svg width="100" height="100">
                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                  </svg>
                </a>



           </div>

         </div>
         <div class="d-inline-flex align-items-center mr-3 text-sm text-gray-900">
           <img class="mr-4 rounded-circle" src="/assets/images/max.jpeg" alt="Max Orozco" width="100" height="100">
           <div>
             <h5 class="font-weight-semibold"><br><br><br> Desarrollo de la plataforma</h5>

             <a href="https://www.upq.mx/oferta-academica/ingenieria-en-tecnologia-automotriz/" rel="author" class="text-xl font-weight-bold text-gray-900">Maximiliano Ismael Perea Orozco</a><br>
             <p class="text-base font-weight-light text-gray-500">Estudiante de Ingeniería <br> en Sistemas Computacionales            </p>
                <a href="https://github.com/MaxterCodee">
                    <!-- Aquí va el contenido de tu archivo SVG -->
                    <svg width="100" height="100">
                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                  </svg>
                </a>

           </div>

         </div>
       </address>


       <br>
       </div>
       <br><br><br>
       <div class="d-flex justify-content-center">
        <h3 class="font-weight-semibold h1">Aprobación de la plataforma y curso:</h3><br><br><br><br>
      </div>


      <div class="d-flex justify-content-center">
        <address class="d-flex align-items-center mb-6 mx-auto">
          <div class="d-inline-flex align-items-center mr-3 text-sm text-gray-900">
            <img class="mr-4 rounded-circle" src="/assets/images/rector.png" alt="Max Orozco" width="150" height="150">
            <div>
                <h5 class="font-weight-semibold h3">Rector de la Universidad</h5><br>

              <a href="https://www.upq.mx/oferta-academica/ingenieria-en-tecnologia-automotriz/" rel="author" class="h4 text-gray-900">Lic. Carlos Eduardo Perusquia Licona‎ ‎ ‎ ‎ ‎ ‎  </a><br><br>
              <p class="text-base font-weight-light text-gray-500">
               <img src="{{ url('assets/images/mail.svg')}}" alt="" style="width: 5%; height: auto;">
               carlos.perusquia@upq.mx</p>
               <img src="{{ url('assets/images/tel.svg')}}" alt="" style="width: 5%; height: auto;">
               101-900 ext 407</p>

            </div>

          </div>
        </address>
        <address class="d-flex align-items-center mb-6 mx-auto">
            <div class="d-inline-flex align-items-center mr-3 text-sm text-gray-900">
              <img class="mr-4 rounded-circle" src="/assets/images/secretario.jpg" alt="Max Orozco" width="150" height="150">
              <div>
                  <h5 class="font-weight-semibold h3">Secretario Académico               </h5><br>

                <a href="https://www.upq.mx/oferta-academica/ingenieria-en-tecnologia-automotriz/" rel="author" class="h4 text-gray-900">Mtro. Jetsai Martinez Olguin‎ ‎ ‎ ‎ ‎ ‎  </a><br><br>
                <p class="text-base font-weight-light text-gray-500">
                 <img src="{{ url('assets/images/mail.svg')}}" alt="" style="width: 5%; height: auto;">
                 sac@upq.edu.mx</p>
                 <img src="{{ url('assets/images/tel.svg')}}" alt="" style="width: 5%; height: auto;">
                 101-9000 ext. 301.</p>


              </div>

            </div>
          </address>
      </div><br><br><br><br><br><br><br> --}}








<!-- Footer -->
<footer class="text-center text-lg-start bg-white text-muted">
<!-- Section: Social media -->
<section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
 <!-- Left -->
 <div class="me-5 d-none d-lg-block">
 </div>
 <!-- Left -->

 <!-- Right -->
 <div>
   <a href="" class="me-4 link-secondary">
     <i class="fab fa-facebook-f"></i>
   </a>
   <a href="" class="me-4 link-secondary">
     <i class="fab fa-twitter"></i>
   </a>
   <a href="" class="me-4 link-secondary">
     <i class="fab fa-google"></i>
   </a>
   <a href="" class="me-4 link-secondary">
     <i class="fab fa-instagram"></i>
   </a>
   <a href="" class="me-4 link-secondary">
     <i class="fab fa-linkedin"></i>
   </a>
   <a href="" class="me-4 link-secondary">
     <i class="fab fa-github"></i>
   </a>
 </div>
 <!-- Right -->
</section>
<!-- Section: Social media -->

<!-- Section: Links  -->
<section class="">
 <div class="container text-center text-md-start mt-5">
   <!-- Grid row -->
   <div class="row mt-3">
     <!-- Grid column -->
     <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
       <!-- Content -->
         <img src="{{ url('assets/images/Group2.svg')}}" alt="" style="width: 45%; height: auto;">
      <br>
      <br>
      <p>
         La Universidad Politécnica de Querétaro es una institución incluyente, no hace distinción alguna en los servicios que brinda.
       </p>
     </div>
     <!-- Grid column -->

     {{-- <!-- Grid column -->
     <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
       <!-- Links -->
       <h6 class="text-uppercase fw-bold mb-4">
         Products
       </h6>
       <p>
         <a href="#!" class="text-reset">Angular</a>
       </p>
       <p>
         <a href="#!" class="text-reset">React</a>
       </p>
       <p>
         <a href="#!" class="text-reset">Vue</a>
       </p>
       <p>
         <a href="#!" class="text-reset">Laravel</a>
       </p>
     </div>
     <!-- Grid column --> --}}

     {{-- <!-- Grid column -->
     <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
       <!-- Links -->
       <h6 class="text-uppercase fw-bold mb-4">
         Useful links
       </h6>
       <p>
         <a href="#!" class="text-reset">Pricing</a>
       </p>
       <p>
         <a href="#!" class="text-reset">Settings</a>
       </p>
       <p>
         <a href="#!" class="text-reset">Orders</a>
       </p>
       <p>
         <a href="#!" class="text-reset">Help</a>
       </p>
     </div>
     <!-- Grid column --> --}}

     <!-- Grid column -->
     <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
       <!-- Links -->
       <h6 class="text-uppercase fw-bold mb-4">Contacto</h6>
       <p><img src="{{ url('assets/images/ubi.svg')}}" alt="" style="width: 10%; height: auto;">
         Carretera Estatal 420 SN, El Marqués Querétaro
         CP 76240</p>
       <p>
         <img src="{{ url('assets/images/mail.svg')}}" alt="" style="width: 10%; height: auto;">
         recepcion@upq.mx
       </p>
       <p><img src="{{ url('assets/images/telefono.svg')}}" alt="" style="width: 10%; height: auto;">Teléfono: 101 9000</p>
       {{-- <p> + 01 234 567 89</p> --}}
     </div>
     <!-- Grid column -->
   </div>
   <!-- Grid row -->
 </div>
</section>
<!-- Section: Links  -->

<!-- Copyright -->
<div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
 © 2023 Copyright:
 <a class="text-reset fw-bold" href="#">Todos los derechos reservados</a>
</div>
<!-- Copyright -->
</footer>
<!-- Footer -->













 </body>
</html>
