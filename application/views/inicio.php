<!--<div class="well" style="background-color: #0d2b4b; border-color: #0d2b4b;color: #fff;">
    <div class="container">
    </div>
</div>-->
<div class="well" style="background-color: #0d2b4b; border-color: #0d2b4b;color: #fff;">
    <div class="container">
        <div class="row">
            <div>&nbsp;</div>
            <img class="img-responsive center-block" src="<?php echo asset_url(); ?>img/logo_blanco.png" alt="logo conescapan 2015"/>
        </div>

        <div class="row">
            <div>&nbsp;</div>
            <div class="col-lg-4 text-center">
                <h1>
                    <i class="fa fa-laptop"></i>
                </h1>
                <h3>Somos Tecnología</h3>
                <p>
                    Una fuente de desarrollo tecnológico a través de investigaciones
                </p>
            </div>
            <div class="col-lg-4 text-center">
                <h1>
                    <i class="fa fa-refresh"></i>
                </h1>
                <h3>Somos Innovación</h3>
                <p>
                    Soluciones creativas a problemas cotidianos
                </p>
            </div>
            <div class="col-lg-4 text-center">
                <h1 style="margin: 0">
                    <img src="<?php echo asset_url(); ?>img/ieee_logo_white.png" width="250" alt="logo ieee">
                </h1>
                <h3>Somos IEEE</h3>
                <p>
                    Una amplia red de profesionales y estudiantes dispuestos a trabajar para la sociedad
                    los respectivos logos para cada mensaje serian
                </p>
            </div>
            <div>&nbsp;</div>
        </div>
    </div>
</div>
<div class="container">

    <div class="row">
        <div class="col-lg-12">
            <p class="text-center">
                El Instituto de Ingenieros en Electricidad y Electr&oacute;nica (IEEE) Secci&oacute;n El Salvador, organiza
                la Trig&eacute;sima Cuarta Convenci&oacute;n de Estudiantes de Centroam&eacute;rica y Panam&aacute;,
                CONESCAPAN XXXIV, El Salvador 2015, que es el mayor evento estudiantil de la regi&oacute;n que re&uacute;ne
                a estudiantes y profesionales de &aacute;rea de la electricidad, electr&oacute;nica y ramas afines.
            </p>
            <p class="text-center">
                Este a&ntilde;o la convenci&oacute;n se realizar&aacute; en del 22 al 25 de septiembre de 2015, en las
                instalaciones del Hotel Holiday Inn&COPY; San Salvador,  El Salvador.<br/>
                Con el &aacute;nimo de tener los mejores
                trabajos t&eacute;cnicos, el comit&eacute; organizador presenta aspectos generales del evento que sin duda,
                dar&aacute;n elementos de juicio para la selecci&oacute;n de los trabajos en el siguiente enlace:
            </p>
        </div>
    </div>
    <div class="row">
        <div class="text-center">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Z1rXDHKTkXQ?rel=0" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
</div>
<div class="well" style="background-color: #006699; border-color: #006699;">
    <img class="img-responsive center-block" src="<?php echo asset_url(); ?>img/ieee_logo_white.png" alt="logo ieee"/>
</div>

<div class="well text-center" style="background-color:#fff;border-color: #fff;">
    <div class="page-header">
    <h2 class="text-primary">Instituciones</h2>
    </div>
    <img class="img-responsive" style="display: inline" src="<?php echo asset_url(); ?>img/itca_fepade_sm.jpg" alt="logo udb"/>
    <img class="img-responsive" style="display: inline" src="<?php echo asset_url(); ?>img/udb_sm.jpg" alt="logo udb"/>
    <img class="img-responsive" style="display: inline" src="<?php echo asset_url(); ?>img/uca_sm.jpg" alt="logo udb"/>
    <img class="img-responsive" style="display: inline" src="<?php echo asset_url(); ?>img/ues_sm.jpg" alt="logo udb"/>
    <img class="img-responsive" style="display: inline" src="<?php echo asset_url(); ?>img/uso_sm.jpg" alt="logo udb"/>
</div>
<!--<div class="well text-center" style="background-color:#fff;border-color: #fff;">-->
<div class="page-header">
<h2 class="text-primary text-center">Ubicaci&oacute;n</h2>
</div>
<div id="map-canvas" style="height: 400px;"></div> 
<!--</div>-->

<script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCA2-LewDLXJFStU-8-76dSSA9YZEbJWbg&sensor=false&signed_in=true">
</script>
<script type="text/javascript">
    function initialize() {
        var myLatlng = new google.maps.LatLng(13.671289, -89.25409);
        var mapOptions = {
            zoom: 17,
            center: myLatlng,
            scrollwheel: false
        };
        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: 'Hotel Holliday Inn'
        });
        marker.setMap(map);
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>