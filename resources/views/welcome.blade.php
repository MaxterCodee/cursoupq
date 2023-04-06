     <!-- Fonts -->
     <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


     <link rel="stylesheet" href="{{ url('assets/css/style.min.css')}}">

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
         <div class="container">
           <div class="navbar-brand-wrapper d-flex w-100">
             <img src="{{ url('assets/images/Group2.svg')}}" alt="" style="width: 18%; height: auto;">
             <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="mdi mdi-menu navbar-toggler-icon"></span>
             </button>
           </div>
           <div class="collapse navbar-collapse navbar-menu-wrapper" id="navbarSupportedContent">
             <ul class="navbar-nav align-items-lg-center align-items-start ml-auto">
               <li class="d-flex align-items-center justify-content-between pl-4 pl-lg-0">

                 <div class="navbar-collapse-logo">
                     <svg class="icono" width="50" height="50">
                         <use href="{{ url('assets/images/Group2.svg')}}"></use>
                     </svg>
                 </div>



                 <button class="navbar-toggler close-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="mdi mdi-close navbar-toggler-icon pl-5"></span>
                 </button>
               </li>
               <li class="nav-item btn-contact-us pl-4 pl-lg-0">
                 <a href="{{ url('/admin/login') }}"  class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Admin</a>
               </li>
             </ul>
           </div>
         </div>
         </nav>
       </header>
       <div class="banner" >
         <div class="container">
           <h1 class="font-weight-semibold">Bienvenido al curso de Introducción a la Industria Automotriz</h1>
           <h6 class="font-weight-normal text-muted pb-3">El curso de Introducción a la Industria Automotriz tiene como objetivo brindar una visión general del sector automotriz, abordando los temas de terminología y clasificación de la industria. Asimismo, se estudiará el caso específico de la industria automotriz en México, así como su desarrollo en el estado de Querétaro. También se abordará el papel de la Universidad Politécnica de Querétaro (UPQ) en la formación de profesionales para la industria automotriz. A través de este curso, los participantes podrán comprender mejor la importancia de la industria automotriz en la economía, así como las oportunidades laborales que ofrece este sector en crecimiento.</h6>
           <div>
                   <a href="{{ url('/login') }}" class="btn btn-opacity-light mr-1"><b>Iniciar Sesión</b></a>
                   <a href="{{ route('register') }}"class="btn btn-opacity-success ml-1"><b>Registrarme</b></a>

           </div>
           <img src="{{ url('assets/images/automotriz.png')}}" alt="" class="img-fluid">
         </div>
       </div><br><br>


       <div class="d-flex justify-content-center">
         <h3 class="font-weight-semibold h1">Curso diseñado e impartido por:</h3><br><br><br><br>
       </div>

       <div class="d-flex justify-content-center">
         <address class="d-flex align-items-center mb-6 mx-auto">
           <div class="d-inline-flex align-items-center mr-3 text-sm text-gray-900">
             <img class="mr-4 rounded-circle" src="/assets/images/guendu.jpg" alt="Max Orozco" width="150" height="150">
             <div>
                 <h5 class="font-weight-semibold h3">Director de Programa Educativo <br> Ingeniería en Tecnología Automotriz</h5><br>

               <a href="https://www.upq.mx/oferta-academica/ingenieria-en-tecnologia-automotriz/" rel="author" class="h4 text-gray-900">Dr. Juan Manuel García Guendulain‎ ‎ ‎ ‎ ‎ ‎  </a><br><br>
               <p class="text-base font-weight-light text-gray-500"> manuel.garcia@upq.edu.mx</p>

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
             </div>
             <img class="mr-4 " src="/assets/images/sistemas.png" alt="Max Orozco" width="150" height="150">

           </div>
         </address>


       </div><br><br>


       <div class="d-flex justify-content-center">

       <address class="d-flex align-items-center mb-6 mx-auto">
         <div class="d-inline-flex align-items-center mr-3 text-sm text-gray-                                                                                                                                                                          900">
           <img class="mr-4 rounded-circle" src="/assets/images/dario.jpg" alt="Max Orozco" width="100" height="100">
           <div>
               <h5 class="font-weight-semibold">Desarrollo de la plataforma</h5>

             <a href="https://www.upq.mx/oferta-academica/ingenieria-en-tecnologia-automotriz/" rel="author" class="text-xl font-weight-bold text-gray-900">Luis Dario Quintero Oceguera</a><br>
             <p class="text-base font-weight-light text-gray-500">Estudiante de Ingeniería <br> en Sistemas Computacionales</p>

           </div>

         </div>
         <div class="d-inline-flex align-items-center mr-3 text-sm text-gray-900">
           <img class="mr-4 rounded-circle" src="/assets/images/max.jpg" alt="Max Orozco" width="100" height="100">
           <div>
             <h5 class="font-weight-semibold">Desarrollo de la plataforma</h5>

             <a href="https://www.upq.mx/oferta-academica/ingenieria-en-tecnologia-automotriz/" rel="author" class="text-xl font-weight-bold text-gray-900">Maximiliano Ismael Perea Orozco</a><br>
             <p class="text-base font-weight-light text-gray-500">Estudiante de Ingeniería <br> en Sistemas Computacionales</p>

           </div>

         </div>
       </address>
       </div><br><br><br><br><br><br><br>








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
       <p> + 01 234 567 89</p>
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
