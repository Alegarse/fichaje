<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script>
        
        function actualizaReloj(){
            momentoActual = new Date()
            hora = momentoActual.getHours()
            minuto = momentoActual.getMinutes()
            segundo = momentoActual.getSeconds()
            anio = momentoActual.getFullYear()
            mes = momentoActual.getMonth() + 1
            dia = momentoActual.getDate()
            horaImprimible = anio+"-"+mes+"-"+dia+" "+hora + ":" + minuto + ":" + segundo
            $("#hora").val(horaImprimible);
            setTimeout("actualizaReloj()",1000)
        }
	    function localize(){
		 	if (navigator.geolocation)
			{
                navigator.geolocation.getCurrentPosition(mapa,error);
            }
            else
            {
                alert('Tu navegador no soporta geolocalizacion.');
            }
		}
 
		function mapa(pos){
			var latitud = pos.coords.latitude;
			var longitud = pos.coords.longitude;
			var precision = pos.coords.accuracy;

            $("#latitud").val(latitud);
            $("#longitud").val(longitud);
 
			var contenedor = document.getElementById("map")
 
			var centro = new google.maps.LatLng(latitud,longitud);
 
			var propiedades =
			{
                zoom: 15,
                center: centro,
                mapTypeId: google.maps.MapTypeId.ROADMAP
			};
 
			var map = new google.maps.Map(contenedor, propiedades);
 
			var marcador = new google.maps.Marker({
                position: centro,
                map: map,
                title: "Tu posicion actual"
            });
		}
 
		function error(errorCode){
			if(errorCode.code == 1)
				alert("No has permitido buscar tu localizacion")
			else if (errorCode.code==2)
				alert("Posicion no disponible")
			else
				alert("Ha ocurrido un error")
		}

        function actualizaUserid() {
            var firmaL = '4fd5e23c9104474e27cf70f733a02d9813a5c2aad5a1bba7d34a06fe640f6268';
            $("#firma2").val(firmaL);
        }

        function rellenaDatos() {
            var select = $("#operacion").val();

            var firmaE = 'a5699b4d940aae29436bdf6b97ddcbf916f242b16a670d7558fd6c744679bc63';
            var firmaS = '6f9eb0fd5af46a68adcb9d0a73a1b3f6c67de9db54c2855549c8264396931daf';

            switch (select) {
                case 'E':
                    $("#action").val("save_checkIn");
                    $("#firma1").val(firmaE);
                    break;
                case 'S':
                    $("#action").val("save_checkOut");
                    $("#firma1").val(firmaS);
                    break;
            }
        }
    </script>

    <title>Registro de entrada y salida trabajador</title>
    <style>
        html
        {
            font-size: 100%;
            ms-text-size-adjust: 100%;
            webkit-text-size-adjust: 100%;
        }
        html,button,input,select
        {
            font-family: sans-serif;
        }
        body
        {
            margin: auto;
            background-color: #58585e;
        }
        #general {
            margin-left: auto;
            margin-right: auto;
        }
        #fichar {
            margin: 20px;
        }
        #listado {
            margin: 20px;
        }
        .btn {
            width: 80px;
            height: 50px;
            font-weight: bold;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: large;
        }
        #submit1 {
            background-color: #78ab58;
        }
        #submit1 {
            background-color: #fea256;
        }
        p {
            font-weight: bolder;
            width: 200px;
        }

    </style>

</head>
    <body  onLoad="localize(); actualizaReloj();">
        <div id="general">
            <div id="fichar">
                <!--<form method="post" action="http://34.250.87.155/assistanceControlWebService/index.php" target="_blank">-->
                <form method="post" action="http://localhost/assistanceControlWebService/index.php" target="_blank">

                    <input type="text" name="action" id="action" hidden>
                    <input type="text" name="ctrl" id="ctrl" value="Prueba_titulo">
                    <p>Hora actual:<input type="text" name="hora" id="hora" readonly></p>

                    <p>Latitud:<input type="text" name="latitud" id="latitud" readonly></p>
                    <p>Longitud:<input type="text" name="longitud" id="longitud" readonly></p>
                    <input type="text" name="dir" id="dir" value="Avenida Manuel Fraga Iribarne 15" hidden>

                    <p>Operacion:<br><select name="operacion" id="operacion" class="browser-default" onchange="rellenaDatos()">
                        <option value=''>Seleccione operacion</option>
                        <option value='E'>Check Entrada</option>
                        <option value='S'>Check Salida</option>
                    </select></p>
                    <input type="text" name="firma" id="firma1" hidden>

                    <p>Usuario:<br><select name="userid" id="userid" class="browser-default">
                        <option value=''>Seleccione usuario</option>
                        <option value='4'>Alejandro</option>
                    </select></p>
                    
                    <!-- FICHAR -->
                    <input class="btn" name="submit" id="submit1" value="Fichar" type="submit">
                </form>
            </div>
            <div id="listado">
                <!--<form method="post" action="http://34.250.87.155/assistanceControlWebService/index.php" target="_blank">-->
                <form method="post" action="http://localhost/assistanceControlWebService/index.php" target="_blank">

                    <input type="text" name="action" id="action" value="get_listado" hidden>
                    <input type="text" name="ctrl" id="ctrl" value="Prueba_titulo">
                    <input type="text" name="firma" id="firma2" hidden>
                    <p>Usuario:<br><select name="userid" id="userid" class="browser-default" onchange="actualizaUserid()">
                        <option value=''>Seleccione usuario</option>
                        <option value='4'>Alejandro</option>
                    </select></p>
                    
                    <!-- FICHAR -->
                    <input class="btn" name="submit" id="submit2" value="Listado" type="submit">
                </form>
            </div>
        </div>  
    </body>
</html>