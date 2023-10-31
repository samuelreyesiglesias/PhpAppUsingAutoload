<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autoload</title>
</head>
<body>
    <pre>
<b>Ejemplo practico:</b><br>
<?php
require __DIR__ . "/vendor/autoload.php";
echo "Calling function : to UpperCase the value of a string :> " . Text\Format::upperText("hello composer");
echo "<br>";
echo "Calling a function to Round a Number to 2 digits :> ".Num\Numbers::roundValue(5.555);
?>
<br>
<hr>

Los pasos a seguir para crear una apliccion usando 
composer son los siguientes:

<b>1. Crear un archivo composer.json en la raiz del proyecto con 
composer init </b>
   <b> 1.1 Crear el archivo composer.json con el siguiente contenido:</b>
        {
            "name": "Samuel/composer",
            "description": "composer test",
            "authors": [
                {
                    "name": "Samuel",
                    "email": "samuel@gmail.com"
                }
            ],
            "require": {
                "php": "^7.4"
            },
            "autoload": {
                "psr-4": {
                    "Text\\": "src/",
                    "Num\\": "src/"
                }
            }
        }
        <b>  1.1.1 Crear la carpeta src y dentro de ella crear los archivos Numbers.php y Format.php </b>
        Crear el archivo helpers.php en src
        <b> 1.2 Ejecutar composer dump-autoload</b>
<b>2. Instalar las dependencias con composer install</b>
<b>3. Crear el archivo index.php y agregar el siguiente codigo:    </b>
    require __DIR__ . "/vendor/autoload.php";
    echo Text\Format::upperText("hello composer");
    echo "<br>";
    echo Num\Numbers::roundValue(5.555);
    <b>4. Ejecutar el archivo index.php con php index.php</b>

    </pre>
</body>
</html>
