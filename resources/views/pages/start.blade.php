@extends('layouts.edv')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/start.css') }}" >
    <link rel="stylesheet" href="{{ asset('css/firms.css') }}" >

@endsection
@section('content')
    <div id="mCont" onload="startGallery()">
        <div class="Gbox50" id="gallery">
            <div id="galleryContens" style="background-image: url({{route('file.showImage',['gallery','1','jpg'])}})"></div>
        </div>
        <div class="Gbox50" id="cont2">
            <div id="mainContens">
                <div class="mainText">In Vorbereitung sind Schulungen für Senioren in Berlin, Treptow / Köpenick:
                    "Senioren ans Netz"<br>
                    Bald mehr dazu hier!
                </div>
                <div class="abstand"></div>
                <div id="angebote1" class="angebote" onmouseover="angebot_in('angebote1')"
                     onmouseout="angebot_out('angebote1')">meine Angebote
                </div>
                <div id="angebote2" class="angebote" onmouseover="angebot_in('angebote2')"
                     onmouseout="angebot_out('angebote2')">meine Angebote als pdf
                </div>
                <div class="abstand"></div>
                <div id="about" class="mainText">
                    <div id="TXheadline">Seit 1991 arbeite ich als freier Trainer im IT-Anwenderberich</div>
                    Dabei pflege ich eine gute Zusammenarbeit mit zahlreichen Schulungsfirmen aus Deutschland,
                    Österreich und der Schweiz.
                    Meine Seminare besuchen Teilnehmerinnen und Teilnehmer aus vielen Branchen und Firmen.
                    Schulungen halte ich vorwiegend im Bereich Anwendungs-Software.
                </div>
            </div>
        </div>
    </div>
    <div class="abstand"></div>
    <div id="Firmen">
        <div class="x2Box"><img src="file/logos/ms/png" class="aniLogo" onmouseover="hoverIN(0)" onmouseout="hoverOUT()"
                                id="MS"></div>
        <div class="x2Box"><img src="file/logos/adobe/png" class="aniLogo" onmouseover="hoverIN(1)"
                                onmouseout="hoverOUT()" id="Adobe"></div>
        <div class="x2Box"><img src="file/logos/lotus/png" class="aniLogo" onmouseover="hoverIN(2)"
                                onmouseout="hoverOUT()" id="Lotus"></div>
        <div class="x2Box"><img src="file/logos/corel/png" class="aniLogo" onmouseover="hoverIN(3)"
                                onmouseout="hoverOUT()" id="Corel"></div>
        <div class="x2Box"><img src="file/logos/WordP/png" class="aniLogo" onmouseover="hoverIN(4)"
                                onmouseout="hoverOUT()" id="WordP"></div>
        <div class="x2Box"><img src="file/logos/WorldS/png" class="aniLogo" onmouseover="hoverIN(5)"
                                onmouseout="hoverOUT()" id="WorldS"></div>
    </div><!-- Firmen end-->
    <div class="abstand"></div>

@endsection

<script src="{{ asset('js/start.js') }}"></script>
<script src="{{ asset('js/firmen.js') }}"></script>

