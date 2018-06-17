<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="{!! asset('ico_.png') !!}"/>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/head_btn.css') }}">
@yield('css')

<!-- Styles -->
    <style>
        body {
            list-style-image: url({{storage_path('file/page/ico/png')}})
        }
    </style>
</head>
<body id="body" style="background-image:url({{route('file.showImage',['page','bg_','png'])}});">
<div id="app">
    <nav id="titleBox" class="navbar navbar-expand-md navbar-light navbar-laravel bg-info sticky-top"
         style="background-image:url({{route('file.showImage',['page','header2','png'])}}">
        <div class="row">



                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav col-md-8">
                    <div id="homeLogo" >
                        <img class="logo" src="{{route('file.showImage',['page','logo','png'])}}" alt="Logo"
                             title="EDV-Schulung maßgeschneidert">
                    </div>

                    <div href="{{ url('/') }}">
                        <div id="titleText">
                            <div id="titleText1">EDV-Schulung maßgeschneidert</div>
                            <div id="titleText2">Ing.- Pädagoge Detlef Mai</div>
                        </div>
                    </div>
                </ul>
            <div class="collapse navbar-collapse col-md-2" id="navbarSupportedContent">
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ">

                    <!-- Authentication Links -->
                    <div class="right"><img src="{{route('file.showImage',['page','header','png'])}}"></div>

                </ul>
            </div>

        </div>
    </nav>
    <div id="contensAll">
        <div class="abstand"></div>
        <div id="BTNS">    <!-- BTNS start -->            <!--head_btn .css & .js-->
            <div class="abstand"></div>
            <div class="btnTopOut" id="start">
                <div id="startT" class="btnTopInner">
                    <div class="btText">
                        <div class="btText">Home</div>
                    </div>
                </div>
            </div>
            <!-- btn About
            <div class="btnTopOut"  id = "about" onclick="endBTN('about');checkFrameHistory() " onmouseover="Line('about')" onmouseout="LineOut('about')">
                <div id="aboutT" class="btnTopInner"><div class="btText"><div class="btText">Über mich</div></div></div>
            </div>-->
            <!-- SchulungsOrte-->
            <div class="btnTopOut" id="location">
                <div id="locationT" class="btnTopInner" onclick="endBTN('location')" onmouseover="Line('location')"
                     onmouseout="LineOut('location')">
                    <div class="btText">
                        <div class="btText">Schulungsorte</div>
                    </div>
                </div>
            </div>
            <!-- Seminare-->
            <div class="btnTopOut" id="seminare">
                <div id="seminareT" class="btnTopInner" onclick="endBTN('seminare')" onmouseover="Line('seminare')"
                     onmouseout="LineOut('seminare')">
                    <div class="btText">
                        <div class="btText">Seminare</div>
                    </div>
                </div>
            </div>
            <!-- Partner-->
            <div class="btnTopOut" id="partnerBT">
                <div id="partnerT" class="btnTopInner" onclick="endBTN('partner')" onmouseover="Line('partner')"
                     onmouseout="LineOut('partner')" onmouseup="btPress()">
                    <div class="btText">
                        <div class="btText">Partner</div>
                    </div>
                </div>
            </div>
            <!-- referenzen-->
            <div class="btnTopOut" id="referenz">
                <div id="referenzT" class="btnTopInner" onclick="endBTN('referenz')" onmouseover="Line('referenz')"
                     onmouseout="LineOut('referenz')">
                    <div class="btText">
                        <div class="btText">Referenzen</div>
                    </div>
                </div>
            </div>
            <!--Contact-->
            <div class="btnTopOut" id="contact">
                <div id="contactT" class="btnTopInner" onclick="endBTN('contact')" onmouseover="Line('contact')"
                     onmouseout="LineOut('contact')">
                    <div class="btText">
                        <div class="btText">Kontakt</div>
                    </div>
                </div>
            </div>
            <!-- Impressum-->
            <div class="btnTopOut" id="impress">
                <div id="impressT" class="btnTopInner" onclick="endBTN('impress')" onmouseover="Line('impress')"
                     onmouseout="LineOut('impress')">
                    <div class="btText">
                        <div class="btText">Impressum</div>
                    </div>
                </div>
            </div>
        </div> <!-- BTNS end-->
        <div id="cont1"><!--<script>$(function(){$('#cont1').jScrollPane();});</script>-->
            <div id="ifrm">@yield('content')</div>
            <!--<iframe name="ifrm" id="ifrm" src="detlef-mai.de/start.htm" scrolling="no"></iframe>	-->
        </div> <!-- cont1 end-->
    </div>
    <div id="footer" class="normalFooter"
         style="background-image: url({{route('file.showImage',['page','footer1','png'])}});">
        <div id="footerBoxMain">
            <div id="footer1" class="footerBox">
                <div class="footerTextline">Partner <br></div>
                <div class="footerText">
                    Intergrata
                    <br>-------------
                    <br>Tüv Rheinland
                    <br>-------------
                </div>
            </div>
            <div id="footer2" class="footerBox">
                <div class="footerTextline">Kontakt <br></div>
                <div class="footerText">Tel : 030/67899581<br>Preußenstraße 29<br>10245 Berlin<br>Detlef-Mai@Arcor.de
                </div>
            </div>
            <div id="footer3" class="footerBox">
                <div class="footerTextline">Seiteninhaber:<br></div>
                <div class="footerText">Detlef Mai <br>------------------<br>programming and design<br>Mana-matrix -
                    Stephan Mai
                </div>
            </div>
        </div>
    </div> <!-- footer end -->
</div>
<script src="{{ asset('js/head_btn.js') }}"></script>
</body>
</html>