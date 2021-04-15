<?php
require_once '../modelo/conexion.php';
require_once '../modelo/config.php';
if(isset($_GET['s'])) {
    $con = new Conexion();
    if($_GET['s'] == 1){
        $res = $con -> select("clave,descripcion,lote,piezas,caducidad","anaquel a,medicamento m","WHERE a.clave_medicamento = m.clave ","descripcion");
        $json = json_encode($res->fetch_all());
        echo $json;
    }else{
        $con = new Conexion();
        $res = $con -> select("clave,descripcion,lote,piezas,caducidad","u013 a,medicamento m","WHERE a.clave_medicamento = m.clave ","descripcion");
        $json = json_encode($res->fetch_all());
        echo $json;
    }
    $con -> close_connection();
}

if(isset($_GET['del'])){
    $con = new Conexion();
    try {
        $con -> delete("anaquel",$_GET['del']);
        echo 'ok';
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    $con -> close_connection();
}