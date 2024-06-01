<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/bootstrap-icons.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/templatemo-kind-heart-charity.css')}}" rel="stylesheet">
        <style>
            .whatsapp-float {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 60px;
            height: 60px;
            color: green;
            font-size: 40px;
            border-radius: 50%;
            text-align: center;
            line-height: 60px;
            z-index: 999;
            text-decoration: none;
            transition: opacity 0.3s ease;
            }
            .whatsapp-float:hover {
              opacity: 0.8;
            }
        </style>
    </head>
    <body id="section_1">
        <header class="site-header d-lg-block d-none">
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-8 col-12 d-flex">
                        <p class="d-flex me-4 mb-0">
                            <i class="bi-whatsapp me-2"></i>
                            <a href="https://api.whatsapp.com/send?phone=59178718632&text=Hola%20mas%20informacion">
                                +591 - 69612086 
                            </a>
                        </p>

                        <p class="d-flex mb-0">
                            <i class="bi-envelope me-2"></i>

                            <a href="mailto: ventas@veloci.com.bo">
                                ventas@veloci.com.bo
                            </a>
                        </p>
                    </div>

                    <div class="col-lg-3 col-12 ms-auto d-flex">
                        <ul class="social-icon">
                            
                            <li class="social-icon-item">
                                <a href="https://www.facebook.com/VelociAutoventa/" class="social-icon-link bi-facebook"></a>
                            </li>
                            <li class="social-icon-item">
                                <a href="https://twitter.com/AutoventaVeloci/" class="social-icon-link bi-twitter"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="https://www.instagram.com/veloci.autoventas/" class="social-icon-link bi-instagram"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="https://youtube.com/@velociautoventabo/" class="social-icon-link bi-youtube"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="https://www.tiktok.com/@veloci.autoventas/" class="social-icon-link bi-tiktok"></a>
                            </li>
                            <li class="social-icon-item">
                                <a href="https://www.linkedin.com/company/velociautoventa/" class="social-icon-link bi-linkedin"></a>
                            </li>
                        </ul>
                    </div>

                    

                </div>
            </div>
        </header>

        <nav class="navbar navbar-expand-lg bg-light shadow-lg">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="{{asset('assets/images/logveloci 1.png')}}" class="logo img-fluid" alt="Kind Heart Charity">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link smoothscroll" href="{{asset('index.php   ')}}">Inicio</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link click-scroll dropdown-toggle" href="" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Inventario</a>
                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                <li><a class="dropdown-item" href="{{asset('index.php/Tienda')}}">Inventario</a></li>
                                <li><a class="dropdown-item" href="inventario.html">Camionetas</a></li>
                                <li><a class="dropdown-item" href="inventario.html">Vagonetas</a></li>
                                <li><a class="dropdown-item" href="inventario.html">Electrica</a></li>
                                <li><a class="dropdown-item" href="inventario.html">Híbtidos</a></li>
                                <li><a class="dropdown-item" href="inventario.html">Semi-Nuevos</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link click-scroll dropdown-toggle" href="#section_5" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Sobre Nosotros</a>
                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                <li><a class="dropdown-item" href="quienesomos.html">¿Quienes Somo?</a></li>
                                <li><a class="dropdown-item" href="clasificado.html">Clasificados</a></li>
                            </ul>
                        </li>
                        <li class="nav-item ms-3"></li>
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('producto')
            <p class="social-icon-item">
                <a href="https://wa.me/59169612086" class="whatsapp-float bi-whatsapp" target="_blank"></a>
            </p>
        </main>

        

        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-12 mb-4">
                        <h5 class="site-footer-title mb-3">Contactos</h5>
                        <hr style="width:230px; height:2px; background:rgb(172, 172, 172)">
                        <p class="text-white d-flex mb-2">
                            <i class="bi-whatsapp me-2"></i>
                            <a href="https://api.whatsapp.com/send?phone=59178718632&text=Hola%20mas%20informacion" class="site-footer-link">+591 - 69612086 </a>
                        </p>
                        <p class="text-white d-flex">
                            <i class="bi-envelope me-2"></i><a href="mailto:ventas@veloci.com.bo" class="site-footer-link">ventas@veloci.com.bo</a>
                        </p>
                        <p class="text-white d-flex mt-3">
                            <i class="bi-geo-alt me-2"></i> Santa Cruz Avenida Cristo Redentor entre sexto y septimo anillo (a lado de Supermercado Hipermaxi)
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mx-auto">
                        <h5 class="site-footer-title mb-3">Horarios de  Atención</h5>
                        <hr style="width:230px; height:2px; background:rgb(172, 172, 172)">
                        <p class="text-white d-flex mt-3">
                            <i class="bi-clock-fill me-2"></i>
                                Lunes - Viernes
                        </p>
                        <p class="text-white d-flex mt-3">
                            <i class="bi-minus me-2"></i>
                                Mañanas: 8:00 - 12:00<br>
                                Tarde: 14:00 - 18:00
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mb-4">
                        <h5 class="site-footer-title mb-3">Acerca de</h5>
                        <hr style="width:230px; height:2px; background:rgb(172, 172, 172)">
                        <p class="text-white d-flex mt-3">
                            El sitio donde podrá encontrar los mejores vehículos, catálogos de coches o contactar con nuestro equipo de profesionales.
                        </p>
                        <img src="{{asset('assets/images/logveloci blanco.png')}}" class="logo img-fluid" alt="">
                    </div>
                </div>
            </div>

            <div class="site-footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-12 d-flex justify-content-center align-items-center mx-auto">
                            <ul class="social-icon">
                                <li class="social-icon-item">
                                    <a href="https://twitter.com/AutoventaVeloci/" class="social-icon-link bi-twitter"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="https://www.facebook.com/VelociAutoventa/" class="social-icon-link bi-facebook"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="https://www.instagram.com/veloci.autoventas/" class="social-icon-link bi-instagram"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="https://www.linkedin.com/company/velociautoventa/" class="social-icon-link bi-linkedin"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="https://youtube.com/@velociautoventabo/" class="social-icon-link bi-youtube"></a>
                                </li>
                                <li class="social-icon-item">
                                    <a href="https://www.tiktok.com/@veloci.autoventas/" class="social-icon-link bi-tiktok"></a>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </footer>

        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.sticky.js')}}"></script>
        <script src="{{asset('assets/js/click-scroll.js')}}"></script>
        <script src="{{asset('assets/js/counter.js')}}"></script>
        <script src="{{asset('assets/js/custom.js')}}"></script>
        @yield('js')
    </body>
</html>