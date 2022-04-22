<?php
	session_start();
	$_SESSION["LOGIN_ASSIS_CONTROLS"] = time();

    $txt_usuario = "Usuario";
	$txt_pass = "Contraseña";
	$txt_acceder = "Acceder";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="expires" content="<?php echo date("r"); ?>">

<link rel="icon" type="image/png" href="app/static/img/icon.png">
<script type="text/javascript">
        $(document).ready(function(){
            $("#btnLogin").click(function(){	
                $("#frmLogin").submit();
            });
            $("input").eq(0).focus();
            $(window).resize(function(){
                var w = $(window).width();
                var h = $(window).height();
                $("html").css('background-size',w+'px'+' '+h+'px');
            });
            $(window).resize();

        });
</script>

<title>Assistance Control Web</title>
<style>

img {
	border: none;
}
html {
	color: #333333;
	direction: ltr;
	font: 81.25%/1 arial, helvetica, sans-serif;
	height:100%;
	width:100%;
	margin:0px;
	padding:0px;
	background-color: #404040;
	background-image: url('app/static/imagenes/general/wall<?php echo $foto; ?>.jpg');
	background-position: center;
}
body {
	margin:0;
	padding:0;
}
input[type=text], input[type=password] {
    -webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */
    -moz-box-sizing: border-box;    /* Firefox, other Gecko */
    box-sizing: border-box;         /* Opera/IE 8+ */
	font-size: 13px;
	height: 10%;
	width: 80%;
	padding: 1px;
	-moz-border-bottom-colors: none;
	-moz-border-image: none;
	-moz-border-left-colors: none;
	-moz-border-right-colors: none;
	-moz-border-top-colors: none;
	-moz-box-sizing: border-box;
	background: none repeat scroll 0 0 #FFFFFF;
	border-color: #C0C0C0 #D9D9D9 #D9D9D9;
	border-radius: 1px 1px 1px 1px;
	border-right: 1px solid #D9D9D9;
	border-style: solid;
	border-width: 1px;
	display: inline-block;
	margin: 0;
	vertical-align:middle;
	padding-left: 8px;
	line-height:32px;
}
input[type=text]:hover {
	-moz-border-bottom-colors: none;
	-moz-border-image: none;
	-moz-border-left-colors: none;
	-moz-border-right-colors: none;
	-moz-border-top-colors: none;
	border-color: #A0A0A0 #B9B9B9 #B9B9B9;
	border-right: 1px solid #B9B9B9;
	border-style: solid;
	border-width: 1px;
	box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1) inset;
}
input[type=text]:focus {
	border:1px solid #4D90FE;
	box-shadow:0 1px 2px rgba(0, 0, 0, 0.3) inset;
	outline:medium none;
}
#login {
    background: none repeat scroll 0 0 #F5F5F5;
    border: 2px solid #E5E5E5;
    padding: 25px;
    margin: 25px;
    position: absolute;
    top: 250px;
    width: 80%;
    max-width:350px;

}

.label {
	-moz-user-select: none;
	display: block;
	font-weight: bold;
	margin: 0 0 0.5em;
}
h2 {
	font-size: 16px;
	height: 16px;
	line-height: 16px;
	margin: 0 0 1.2em;
	position: relative;
}


.button {
	cursor:pointer;
	cursor:hand;
	
	border: 1px solid #3079ED;
	text-align:center;
	text-shadow: 0 1px rgba(0, 0, 0, 0.1);
	color: #FFFFFF;
	font-weight:bold;
	padding-left:10px;
	padding-right:10px;	
	padding-top:5px;
	padding-bottom:5px;
	line-height:21px;
	
	background-color: #4D90FE;
}
.button:hover {
	border: 1px solid #2F5BB7;
	text-shadow: 0 1px rgba(0, 0, 0, 0.3);
	color: #FFFFFF;
	background-color: #357AE8;


}
.button:active {
	box-shadow: 0 1px 2px rgba(0, 0, 0, 0.3) inset;
}
a{
	color: #999999;
}


</style>
</head>
<body>
<div id="login" class="effect7">
	  <h2>Assistance Control Checks</h2>
	  <form action="http://localhost/assistancecontrolwebservice/index.php" method="post" id="frmLogin">
        <div class='label'><?php echo $txt_usuario; ?></div>
        <input type="text" name="action" id="action" value='<?php echo $u; ?>'/>
        <div style="clear:both; height:10px"></div>
        <div class='label'><?php echo $txt_pass; ?></div>
        <input type="firma"  name="firma" value='<?php echo $p; ?>'/>
        <div style="clear:both; height:10px"></div>
        <div style="display:inline-block;color:#999999; font-size:11px;line-height:15px; position:absolute">	  
            <input type="submit" class="button"  value="<?php echo $txt_acceder; ?>" id="btnLogin"/>
        </div>
        <div style="float:right;color:#999999; font-size:12px; text-align:right;line-height:15px;"><br><br>
        </div>	  
	  </form>

</div>
</body>
</html>
