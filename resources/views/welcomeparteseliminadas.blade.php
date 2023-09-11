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
                background-image: url(assets/images/carrusel.jpg);
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
                background-image: url(assets/images/movilidad.png);
                background-size: 100%;
                background-position: center center;


                "
                >
                <div class="carousel-caption">
                   <div class="container">
                      <div class="row justify-content-center">
                         <div class="col-xl-6 col-lg-7 col-sm-10">
                            <h2 class="carousel-title">Cardenal Learning Hub</h2>
                            <p class="text">

                                En Cardenal Learning Hub se te brinda la capacitación necesaria en diversas áreas de estudio. Nuestro objetivo es fomentar el aprendizaje continuo y proporcionar a los estudiantes y profesionales las herramientas para adquirir nuevas habilidades y conocimientos relevantes en el entorno laboral actual.                                <br>
                                También se abordará el papel de la Universidad Politécnica de Querétaro (UPQ) en la formación de profesionales para la industria automotriz.
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
                background-image: url(https://cdn.ayroui.com/1.0/images/slider/slider-one/3.jpg);
                "
                >
                <div class="carousel-caption">
                   <div class="container">
                      <div class="row justify-content-center">
                         <div class="col-xl-6 col-lg-7 col-sm-10">
                            <h2 class="carousel-title">
                               Compromiso                         </h2>
                            <p class="text">
                                En Cardenal Learning Hub, estamos comprometidos con tu éxito y desarrollo profesional.
                            </p>
                            <ul class="carousel-btn rounded-buttons">
                               <li>
                                <a href="{{ url('/login') }}" class="btn btn-opacity-light mr-1"><b>Iniciar Sesión</b></a>
                               </li>
                               <li>
                                <a  href="{{ route('register') }}"class="btn btn-opacity-success ml-1"><b>Registrarme</b></a>
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