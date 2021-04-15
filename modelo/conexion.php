<?php

class Conexion {

    var $conn = null;
    
    function __construct()
    {
     $this -> conn = mysqli_connect(HOST,USER,PASS,DATABASE); 
     if(!$this -> conn){
         die("Error");
     }  
    }

    function select($sel, $table, $where = "", $order = "caducidad") {
        $prepare = $this -> conn -> prepare("SELECT {$sel} FROM {$table} {$where} ORDER BY {$order} asc");
        $prepare -> bind_param("s",$order);
        $prepare -> execute();
        return $prepare -> get_result();
    }

    function delete($table,$item){
        $prepare = $this -> conn -> prepare("DELETE FROM {$table} WHERE lote = ?");
        $prepare -> bind_param("s",$item);
        $prepare -> execute();
    }

    function close_connection(){
        mysqli_close($this -> conn);
    }

}