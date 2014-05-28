<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Protótipo - Os Convidados [ DEHBORA ]</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="css/estilo.css" rel="stylesheet">
    <script type="text/javascript"
      src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAwN8oDmPEtW974oVyM3tF9Jitu-1iSSzs&sensor=true">
    </script>
    <script type="text/javascript">
      var map;
      function initialize() {
        var myLatLng = new google.maps.LatLng(-20.280665, -40.299890);
        //geocoder = new google.maps.Geocoder();
        var mapOptions = {
          center: myLatLng,
          zoom: 17,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        
        map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
        
        var image1 = 'img/icon-envelope.png';
        var image2 = 'img/icon-envelope-azul.png';
        
        var marker1 = new google.maps.Marker({
            map: map,
            icon: image1,
            animation: google.maps.Animation.BOUNCE,
            position: myLatLng
        });
        
        var marker2 = new google.maps.Marker({
            map: map,
            icon: image2,
            animation: google.maps.Animation.BOUNCE,
            position: new google.maps.LatLng(-20.281364, -40.301220)
        });
        
        google.maps.event.addListener(marker1, 'click', function() {
            //infowindow.open(map,marker);
            $('#missao1').modal();
        });
        
        google.maps.event.addListener(marker2, 'click', function() {
            //infowindow.open(map,marker);
            $('#missao2').modal();
        });
        
      }
    
    google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-default navbar-static-top menu-topo" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#" style="position:relative;padding:0 25px 0 20px;margin-top:-12px;"><img src="img/logo.png" /></a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">Sobre</a></li>
                <li><a href="#contact">Contato</a></li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>


    <!-- GOOGLE MAPS
    ================================================== -->
    <div class="map" id="map_canvas"></div>
    
    <!-- Modal -->
    <div class="modal fade" id="missao1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Missão 1 - Fazer alguma coisa</h4>
        </div>
        <div class="modal-body">
            Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis.
            Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis.
            Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo.
            Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim.
            Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            <button type="button" class="btn btn-primary">Fazer Check-in</button>
        </div>
        </div>
    </div>
    </div>
    
    <div class="modal fade" id="missao2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Missão 2 - Fazer alguma coisa</h4>
        </div>
        <div class="modal-body">
            Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis.
            Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis.
            Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo.
            Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim.
            Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            <button type="button" class="btn btn-primary">Fazer Check-in</button>
        </div>
        </div>
    </div>
    </div>

    <div class="container">
        <div class="row" style="margin-top:-80px;">
            <div class="col-md-8"></div>
            <div class="col-md-4 pull-right" style="padding:10px;">
                <button type="button" class="btn btn-primary btn-lg">Missão Aberta</button>
                <button type="button" class="btn btn-default btn-lg" style="background:yellow">Missão Concluída</button>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://getbootstrap.com/assets/js/docs.min.js"></script>
  </body>
</html>
