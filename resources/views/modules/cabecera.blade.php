<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="description" content="La Asamblea Nacional de la República Bolivariana de Venezuela, como Poder del Estado, legítimo y reconocido, por la importante e inédita situación, ha decidido crear herramientas que permitan conocer donde se encuentran cada uno de los venezolanos que han debido emigrar para establecer un vínculo entre este importante grupo y sus familiares en el país, para así generar de forma concertada iniciativas que permitan mejorar sus condiciones económicas y sociales alcanzando el desarrollo integral de la familia como base de la nueva sociedad que aspiramos para lograr nuestro cambio.">

	<meta name="robots" content="index, follow">
	<meta property="og:image" content="http://www.asambleanacional.gob.ve/images/logo.jpg">
	<meta name="twitter:image" content="http://www.asambleanacional.gob.ve/images/logo.jpg">

    <title>R.I.V.E</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-grid.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-reboot.css') }}">
    <!--PORSONALIZADOS-->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/basic.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>  
<!-- Global site tag (gtag.js) - Google Analytics -->

<!--script async src="https://www.googletagmanager.com/gtag/js?id=UA-115807971-1"></script>

<script>

 window.dataLayer = window.dataLayer || [];

 function gtag(){dataLayer.push(arguments);}

 gtag('js', new Date());  gtag('config', 'UA-115807971-1');

</script-->  
</head>
<body class="bwhite">
   <div>
        <header class="posRel z-ten">
            <div class="wrap8 maxsize center posRel over-full second-full-size">
                <div class="wrap1 posAbso bottom right z-one second-dpnone">
                    <ul class="wrap10">
                        <li class="wrap33 flleft padding05">
                            <a href="https://www.instagram.com/asambleanacional/" target="_blank">
                                <img src="{{  asset('img/instagram_b.png')}}" class="img-hor">
                            </a>
                        </li>
                        <li class="wrap33 flleft padding05">
                            <a href="https://twitter.com/AsambleaVE" target="_blank">
                                <img src="{{  asset('img/twitter_b.png')}}" class="img-hor">
                            </a>
                        </li>
                        <li class="wrap33 flleft padding05">
                            <a href="https://www.facebook.com/AsambleaVE/?fref=ts" target="_blank">
                                <img src="{{  asset('img/facebook_b.png')}}" class="img-hor">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="wrap10 posRel">
                    <div class="wrap3 posAbso left bottom minfont cdarkgrey padding1 second-dpnone">
                        <div class="padding05 margint5">
                            <div>Caracas - Venezuela</div>
                            <!--<div>08 de Junio 2017 / 09:29 am</div>-->
                        </div>
                    </div>
                    <div class="wrap4 center second-midle-size last-almost-full-size">
                        <div class="wrap8 center">
                            <a href="http://www.asambleanacional.gob.ve/"><img src="{{ asset('img/logo.jpg') }}" class="img-hor"></a>
                        </div>

                        <div class="wrap5 flleft">
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrap10">
                <div class="wrap10 flleft">
                    <div class="wrap10 flleft byellow-an" style="height: 1px;"></div>
                    <div class="wrap10 flleft bblue-an" style="height: 1px;"></div>
                    <div class="wrap10 flleft bred-an" style="height: 1px;"></div>
                </div>
            </div>
            <div class="header z-ten bb-box second-dpnone">
                <nav class="first-full-size bb-box">
                    <ul class="st-none minfont txcenter swrap10 bb-box bdarkblue2">
                        <li class="inline menu-list">
                            <a href="http://www.asambleanacional.gob.ve/" class="cwhite padding15 txcenter wrap10 dpblock bb-box">Inicio</a>
                        </li>
                        <li class="inline menu-list posRel">
                            <a href="#" class="cwhite padding15 txcenter wrap10 dpblock bb-box slideresd">La Asamblea</a>
                            <ul class="st-none z-one left bb-box bverydarkgrey second-dpnone">
                                <li class="">
                                    <a href="http://www.asambleanacional.gob.ve/comisiones/_junta-directiva-de-la-asamblea-nacional" class="cwhite padding15 dpblock wrap10">Junta Directiva</a>
                                </li>
                                <li class="">
                                    <a href="http://www.asambleanacional.gob.ve/html/sedes" class="cwhite padding15 dpblock wrap10">Sedes Legislativas</a>
                                </li>
                            </ul>
                        </li>
                        <li class="inline menu-list">
                            <a href="http://www.asambleanacional.gob.ve/noticias" class="cwhite padding15 txcenter wrap10 dpblock bb-box">Noticias</a>
                        </li>
                        <li class="inline menu-list posRel">
                            <a href="http://www.asambleanacional.gob.ve/diputados" class="cwhite padding15 txcenter wrap10 dpblock bb-box slideresd second-dpnone">Diputados</a>
                            <a href="#" class="cwhite padding15 txcenter wrap10 dpblock bb-box slideresd dpnone second-dpblock">Diputados</a>
                            <ul class="st-none z-one left bb-box bverydarkgrey second-dpnone">
                                <li>
                                    <a href="http://www.asambleanacional.gob.ve/diputados" class="cwhite padding15 dpblock wrap10 dpnone second-dpblock">Todos</a>
                                </li>
                                <li>
                                    <a href="http://www.asambleanacional.gob.ve/diputados?id_padre=principal" class="cwhite padding15 dpblock wrap10">Principales</a>
                                </li>
                                <li>
                                    <a href="http://www.asambleanacional.gob.ve/diputados?id_padre=suplente" class="cwhite padding15 dpblock wrap10">Suplentes</a>
                                </li>
                            </ul>
                        </li>
                        <li class="inline menu-list">
                            <a href="http://www.asambleanacional.gob.ve/comisiones" class="cwhite padding15 txcenter wrap10 dpblock bb-box">Comisiones</a>
                        </li>
                        <li class="inline menu-list posRel">
                            <a href="#" class="cwhite padding15 txcenter wrap10 dpblock bb-box slideresd">Agenda Legislativa</a>
                            <ul class="st-none z-one left bb-box bverydarkgrey second-dpnone">
                                <li>
                                    <a href="http://www.asambleanacional.gob.ve/agendas" class="cwhite padding15 dpblock wrap10">Toda la agenda</a>
                                </li>
                                <li>
                                    <a href="http://www.asambleanacional.gob.ve/agendas?id_comision=junta+directiva+de+la+asamblea+nacional" class="cwhite padding15 dpblock wrap10">Agenda de la Junta Directiva</a>
                                </li>
                            </ul>
                        </li>
                        <li class="inline menu-list posRel">
                            <a href="http://www.asambleanacional.gob.ve/leyes" class="cwhite padding15 txcenter wrap10 dpblock bb-box slideresd second-dpnone">Leyes</a>
                            <a href="#" class="cwhite padding15 txcenter wrap10 dpblock bb-box slideresd dpnone second-dpblock">Leyes</a>
                            <ul class="st-none z-one left bb-box bverydarkgrey second-dpnone">
                                <li class="">
                                    <a href="http://www.asambleanacional.gob.ve/leyes" class="cwhite padding15 dpblock wrap10 dpnone second-dpblock">Sancionadas</a>
                                </li>
                                <li class="">
                                    <a href="http://www.asambleanacional.gob.ve/leyes/proyectos" class="cwhite padding15 dpblock wrap10">Proyectos</a>
                                </li>
                                <li class="">
                                    <a href="http://www.asambleanacional.gob.ve/leyes/consultas" class="cwhite padding15 dpblock wrap10">Consulta Pública</a>
                                </li>
                            </ul>
                        </li>
                        <li class="inline menu-list">
                            <a href="http://www.asambleanacional.gob.ve/actos" class="cwhite padding15 txcenter wrap10 dpblock bb-box">Actos Legislativos</a>
                        </li>
                        <li class="inline menu-list">
                            <a href="http://www.asambleanacional.gob.ve/transparencia" class="cwhite padding15 txcenter wrap10 dpblock bb-box">Transparencia</a>
                        </li>
                        <li class="inline menu-list">
                            <a href="http://www.asambleanacional.gob.ve/prensa" class="cwhite padding15 txcenter wrap10 dpblock bb-box">Sala de prensa</a>
                        </li>
                        <li class="inline menu-list">
                            <a href="http://www.asambleanacional.gob.ve/galerias" class="cwhite padding15 txcenter wrap10 dpblock bb-box">Galerías</a>
                        </li>
                    </ul>
                </nav>
            </div>

        </header>   </div>
        <div class="padding0 container-fluid mb-5">
            <div class="bg img-principal" style="height: 200px">

                <div class="row justify-content-center align-items-center no-gutters content-text pl-1 pr-1" >

                    <div>
                        <h2 class="color-white bold600">Bienvenido al Registro Internacional de Venezolanos en el Exterior</h2>
                        <h2 class="color-white bold600" >
                            RIVE
                        </h2>
                    </div>

                </div>
                <!--img src="views/img/img.jpg" class="img-fluid" alt="Responsive image"-->
            </div>
            @yield('content')
        </div>
        <div>
            @extends('modules.footer')
        </div>
   </div>
   @stack('scripts')
</body>
</html>