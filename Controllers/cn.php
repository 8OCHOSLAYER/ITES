<?php

$conexion = mysqli_connect("localhost","root", "", "ites");

if(!$conexion){
    echo "error al conectar a la bd";
}
else{
    echo "conexion exitosa";
}



