<?php}

function hobbyValido($hobby){
    if (strlen($hobby)>3 && strlen($hobby) <15){
        return true;
    } else{
        return false;
    }
}


echo "hola mundo\n";
$nombre=readline("ingrese su nombre");
echo "Bienvenido $nombre\n";

$edad = readline("ingrese su edad:");

if ($edad >=18){
    echo "Autorizacion exitosa\n";
    }else {
    echo "Usted no esta autorizado al sistema\n";
    exit;    
}

$hobbies= readline("ingrese sus hobbies separados por comas:");

hobbies = explode (",",$hobbies);

foreach ($hobbies as $clave => $hobby){
    if ()
}
