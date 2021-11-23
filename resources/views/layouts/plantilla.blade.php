<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .imagenCabecera{
            float:right;
            padding-right:150px;
            width: 150px; 

        }
        .cabecera{
            text-align:center;
            font-size: x-large;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin-bottom: 100px;

        }

        .contenido form, table{
            width: 500px;
            margin:0 auto;
        }
        .pie{
            position: fixed; 
            bottom:0px;
            width:100%;
            font-size: 0.7em;
            margin-bottom: 15px;

        }
    </style>
</head>
<body>

    <div class="cabecera">
        @yield("cabecera")
        <img src="/images/Logo.png" class="imagenCabecera">

    </div>

    <div class="contenido">
        @yield("contenido")

    </div>

    <div class="pie">
        @yield("pie")
    </div>

</body>
</html>