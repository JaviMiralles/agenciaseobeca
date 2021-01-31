@extends('layouts.app')
@section('content')
<main class="main">
    <div class="container d-flex justify-content-center align-items-center">
        <div class="row flex-center pt-5 mt-3">
          <div class="col-md-12 col-lg-6 text-center text-md-left margins">
            <div class="dark-grey-text">
              <h1 class="display-4 title mt-md-5 mt-lg-0 font-weight-bold wow">Marketing digital que genera resultados</h1>
              <hr class="hr-light wow" >
              <p class="grey-text wow" >Lleve su negocio al siguiente nivel con nuestra plataforma tecnológica y nuestros servicios de marketing digital</p>
              <br>
              <div class="cta-home">
                <button class="cta-button">¿Listos para crecer?</button>
                </div>
            </div>
          </div>

          <div class="col-md-12 col-lg-6 wow fadeIn" >
            <img src="{{asset('../img/phone-seo.webp')}}" alt="agencia seo almeria" class="img-fluid">
          </div>
        </div>
      </div>

      <div class="container">

        <!-- Section: About -->
        <section id="about" class="about mt-5 mb-5 py-3 wow fadeIn">
  
          <!-- Grid row -->
          <div class="row pt-2 mt-5">
  
            <!-- Grid column -->
            <div class="col-lg-5 col-md-12 mb-3 wow fadeIn">
              <!-- Image -->
              <img src="{{asset('../img/marketing-almeria.webp')}}" alt="agencia publicidad almeria" class="img-fluid">
            </div>
            <!-- Grid column -->
  
            <!-- Grid column -->
            <div class="col-lg-6 ml-auto col-md-12 wow fadeIn">
  
              <!-- Secion heading -->
              <h3 class="mb-5 dark-grey-text title font-weight-bold wow fadeIn"><strong>Construye tu marca con nosotros</strong></h3>
              <!-- Description -->
              <p>Un sitio web sin tráfico no tiene valor, pero un sitio web con el tráfico adecuado que fluye de manera constante puede impulsar un negocio a nuevas alturas. Nuestros especialistas en marketing se asocian con usted para identificar su mercado objetivo y ponerse a trabajar para hacer que su sitio sea más visible para su mercado clave a través de nuestros servicios integrales de marketing digital.</p>
              <p>Si está buscando un crecimiento empresarial serio, el SEO o la optimización de motores de búsqueda es la estrategia para usted. ¿Por qué funciona? ¡Simple! Se dirige a los usuarios que tienen más probabilidades de realizar una conversión en su sitio web y los lleva allí.</p>
              <p> Contáctenos en línea para charlar con un estratega experimentado de nuestro equipo de SEO sobre no solo mejorar el ranking de los motores de búsqueda de su empresa, sino también obtener más ingresos de ellos.</p>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </section>
        <!-- Section: About -->
        <hr>
        <!-- Section: Features v.4 -->
        <section id="features" class="mb-5 pb-4">
          <!-- Section heading -->
          <h3 class="text-center title my-5 dark-grey-text font-weight-bold wow fadeIn"><strong>Servicios SEO de BECA</strong></h3>
  
          <!-- Section sescription -->
          <p class="text-center w-responsive mx-auto my-5 grey-text wow fadeIn">¿Está listo para comenzar a optimizar su sitio para la búsqueda orgánica? Estos son los servicios que ofrece la agencia de posicionamiento SEO en Almería</p>
  
          <!-- Grid row -->
          <div class="row features-small wow fadeIn">
  
            <!-- Grid column -->
            <div class="col-lg-4 col-md-12">
              <!-- Grid row -->
              <div class="row mb-3">
                <div class="col-2">
                  <i class="fas fa-edit orange-text fa-2x"></i>
                </div>
                <div class="col-10 mb-2">
                  <h5 class="font-weight-bold title">SEO/SEM</h5>
                  <p class="grey-text">posicionamiento en los principales buscadores para ser visible en Internet.</p>
                </div>
              </div>
              <!-- Grid row -->
  
              <!-- Grid row -->
              <div class="row mb-3">
                <div class="col-2">
                  <i class="fas fa-cogs orange-text fa-2x"></i>
                </div>
                <div class="col-10 mb-2">
                  <h5 class="font-weight-bold title">Marketing Digital</h5>
                  <p class="grey-text">Estrategias orientadas a mejorar la marca de las empresas</p>
                </div>
              </div>
              <!-- Grid row -->
  
              <!-- Grid row -->
              <div class="row">
                <div class="col-2">
                  <i class="fas fa-tablet-alt orange-text fa-2x"></i>
                </div>
                <div class="col-10 mb-2">
                  <h5 class="font-weight-bold title">Diseños receptivos</h5>
                  <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Criticado por mayores medios.</p>
                </div>
              </div>
              <!-- Grid row -->
            </div>
            <!-- Grid column -->
  
            <!-- Grid column -->
            <div class="col-lg-4 col-md-12 mb-1 text-center text-md-left">
                <img src="{{asset('../img/phone-seo.webp')}}" alt="poscionamiento web en Almeria" class="img-fluid">
            </div>
            <!-- Grid column -->
  
            <!-- Third column -->
            <div class="col-lg-4 col-md-12">
              <!-- Grid row -->
              <div class="row mb-3">
                <div class="col-2">
                  <i class="fas fa-chart-line orange-text fa-2x"></i>
                </div>
                <div class="col-10 mb-2">
                  <h5 class="font-weight-bold title">Optimizado para SEO</h5>
                  <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Criticado por mayores medios.</p>
                </div>
              </div>
              <!-- Grid row -->
  
              <!-- Grid row -->
              <div class="row mb-3">
                <div class="col-2">
                  <i class="fas fa-users orange-text fa-2x"></i>
                </div>
                <div class="col-10 mb-2">
                  <h5 class="font-weight-bold title">Redes Sociales</h5>
                  <p class="grey-text">Plan para atraer seguidores potenciales para sus ventas.</p>
                </div>
              </div>
              <!-- Grid row -->
  
              <!-- Grid row -->
              <div class="row">
                <div class="col-2">
                  <i class="far fa-gem orange-text fa-2x"></i>
                </div>
                <div class="col-10 mb-2">
                  <h5 class="font-weight-bold title">Plan de contenidos</h5>
                  <p class="grey-text">Creamos contenidos "copywriting" para captar la atención y conversión de sus clientes.</p>
                </div>
              </div>
              <!-- Grid row -->
            </div>
            <!-- Third column -->
          </div>
          <!-- Grid row -->
        </section>
        <!-- Section: Features v.4 -->
      </div>
</main>



@endsection