<?php

function strToSql($cadena)
{
    $cadena = str_ireplace("'","´",$cadena);
    $cadena = str_ireplace("''","´´",$cadena);
    $cadena = str_ireplace("--","",$cadena);
    $cadena = str_ireplace("-shutdown","",$cadena);
    $cadena = str_ireplace("<?php","",$cadena);
    $cadena = str_ireplace("<?","",$cadena);
    $cadena = str_ireplace("?>","",$cadena);
    $cadena = str_ireplace("<script","",$cadena);
    $cadena = str_ireplace("< script","",$cadena);
    $cadena = str_ireplace("</ script>","",$cadena);
    $cadena = str_ireplace("</script>","",$cadena);
    $cadena = str_ireplace("eval(","",$cadena);
    $cadena = str_ireplace("eval (","",$cadena);
    $cadena = str_ireplace("select ","",$cadena);
    $cadena = str_ireplace("insert ","",$cadena);
    $cadena = str_ireplace("update ","",$cadena);
    $cadena = str_ireplace("delete ","",$cadena);
    $cadena = str_ireplace(" select","",$cadena);
    $cadena = str_ireplace(" insert","",$cadena);
    $cadena = str_ireplace(" update","",$cadena);
    $cadena = str_ireplace(" delete","",$cadena);
    $cadena = str_ireplace(" select ","",$cadena);
    $cadena = str_ireplace(" insert ","",$cadena);
    $cadena = str_ireplace(" update ","",$cadena);
    $cadena = str_ireplace(" delete ","",$cadena);

    return $cadena;
}

function login ($user, $pass) {
    
}